<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Validate;
use catetree\Catetree;
class Cate extends Controller
{
    //显示分类
    public function lst(){

        $cate    = new Catetree();
        $cateObj = Db::name('cate');
        if(request()->isPost()){
            $data = input('post.');
            $cate->cateSort($data['sort'],$cateObj);
        }
        $cateRes = $cateObj->order('sort ASC')->select();
        $cateRes =  $cate->catetree($cateRes);
        $this->assign([
            'cateRes' => $cateRes,
            ]);
        return view();
    }

    //添加分类
    public function add(){
        if(request()->isPost()){
            $data = input('post.');
            //判断是否添加子栏目
            if(in_array($data['pid'], ['1','3'])){
                $this->error('系统和网店信息不能作为上级分类！');
            }
            if($data['pid'] == 2){
                $data['cate_type'] = 3;
            }
            //网店帮助子分类不能当做父分类
            $cateId = db('cate')->field('pid')->find($data['pid']);
            $cateId = $cateId['pid'];
            if($cateId == 2){
                $this->error('此分类不能作为上级分类！');
            }
            //验证
            $validate = validate('Cate');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $add = db('cate')->insert($data);
            if($add){
                $this->success('添加分类成功','Cate/lst');
            }else{
                $this->error('添加分类失败！');
            }
            return;
        }
        $cateRes = db('cate')->select();
        $cate    = new Catetree();
        $cateRes =  $cate->catetree($cateRes);
        $this->assign([
            'cateRes' => $cateRes,
            ]);
        return view();
    }

    //修改分类
    public function edit(){

         if(request()->isPost()){
            $data = input('post.');
            
              //验证
            $validate = validate('Cate');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $save = db('cate')->update($data);
            if($save){
                $this->success('修改分类成功','Cate/lst');
            }else{
                $this->error('修改分类失败！');
            }
            return;
        }
        $cates   = db('cate')->find(input('id'));
        $cateRes = db('cate')->select();
        $cate    = new Catetree();
        $cateRes =  $cate->catetree($cateRes);
        $this->assign([
            'cateRes' => $cateRes,
            'cates'   => $cates,
            ]);
        return view();
    }

    //删除分类
    public function del($id){
        
        $cate = db('cate');
        $cateTree = new Catetree();
        $sonids   = $cateTree->childrenids($id,$cate);
        $sonids[] = intval($id);
        //判断是否内置分类
        $arrSys = [1,2,3];
        $arrRes = array_intersect($arrSys, $sonids);
        if($arrRes){
            $this->error('系统分类不允许删除！');
        }
        //删除分类前一同删除该分类下的文章和图片
        $article = db('article');
        foreach ($sonids as $k => $v) {
            $artRes = $article->field('id,thumb')->where(array('cate_id'=>$v))->select();
            foreach ($artRes as $k1 => $v1) {
                $thumbSrc = IMG_UPLOADS.$v1['thumb'];
                if(file_exists($thumbSrc)){
                    @unlink($thumbSrc);
                }
                $article->delete($v1['id']);
            }
        }
        if($cate->delete($sonids)){
            $this->success('分类删除成功!','cate/lst');
        }
    }
    
}
