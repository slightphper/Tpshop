<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use Catetree\Catetree;
class Goods extends Controller
{
	//显示商品
    public function lst()
    {
        $join = [
            ['category c','g.category_id = c.id','LEFT'],
            ['type t','g.type_id = t.id','LEFT'],
            ['brand b','g.brand_id = b.id','LEFT'],
            ['product p','g.id = p.goods_id','LEFT'],
        ];
    	$goodsRes = db('goods')->alias('g')->field('g.*,c.cate_name,t.type_name,b.brand_name,SUM(p.goods_number) gn')->join($join)->group('g.id')->order('g.id DESC')->paginate(10);
    	$this->assign([
            'goodsRes' =>$goodsRes,

            ]);
        return view();
    }
    //添加商品
    public function add()
    {
    	if(request()->isPost()){
    		$data = input('post.');
            // halt($data);
    		$add = model('goods')->save($data);
    		if($add)
    		{
    			$this->success('添加商品成功','goods/lst');
    		}else
    		{
    			$this->error('添加商品失败');
    		}
    		return;
    	}
        //会员级别数据
        $mlRes = Db::name('member_level')->field('id,level_name')->select();
        //获取商品类型
        $typeRes = Db::name('type')->select();
        //商品分类
        $category = new Catetree();
        $categoryRes = Db::name('category')->order('sort ASC')->select();
        $categoryRes = $category->Catetree($categoryRes);
        //商品品牌
        $brandRes = Db::name('brand')->field('id,brand_name')->select();
        //商品推荐位
        $goodsRecRes = Db::name('rec_pos')->where('rec_type','=',1)->select();
        $this->assign([
            'mlRes'   => $mlRes,
            'typeRes' => $typeRes,
            'brandRes'=> $brandRes,
            'categoryRes'=>$categoryRes,
            'goodsRecRes'=>$goodsRecRes,
            ]);
        return view();
    }
    //修改商品
    public function edit()
    {
    	if(request()->isPost()){
    		$data = input('post.');
            // halt($data);
    		if(model('goods')->update($data) !== false){
    			$this->success('修改商品成功','goods/lst');
    		}else{
    			$this->error('修改商品失败！');
    		}
    		return;
    	}
    	//修改商品内容
    	$id = input('id');
    	$goods = Db::name('goods')->find($id);
        //会员级别数据
        $mlRes = Db::name('member_level')->field('id,level_name')->order('rate DESC')->select();
        //获取商品分类
        $category = new Catetree();
        $categoryRes = Db::name('category')->order('sort ASC')->select();
        $categoryRes = $category->Catetree($categoryRes);
        //获取商品品牌
        $brandRes = Db::name('brand')->field('id,brand_name')->select();
        //获取商品类型
        $typeRes = Db::name('type')->select();
        //显示推荐位
        $goodsRecRes = Db::name('rec_pos')->where('rec_type','=',1)->select();
        //当前商品推荐位展示
        $rec_pos = Db::name('rec_item')->where(array('value_id'=>$id,'value_type'=>1))->select();
        //会员价格显示
        $_mpRes = Db::name('member_price')->where('goods_id','=',$id)->select();
        $mpRes = array();
        foreach ($_mpRes as $k => $v) {
            $mpRes[$v['mlevel_id']] = $v;
        }
        //商品类型所有属性
        $attrRes = Db::name('attr')->where('type_id','=',$goods['type_id'])->select();
        //查询当前修改商品的属性值
        $_goodsAttrRes = Db::name('goods_attr')->where('goods_id','=',$id)->select();
        //更改二维为三维，健名改为attr_id
        $goodsAttrRes = array();
        foreach ($_goodsAttrRes as $k => $v) {
            $goodsAttrRes[$v['attr_id']][] = $v;
        }
        //商品相册
        $goodsPhotoRes = Db::name('goods_photo')->where('goods_id','=',$id)->select();
        // halt($rec_pos);
    	$this->assign([
            'goods'       => $goods,
            'mlRes'       => $mlRes,
            'categoryRes' => $categoryRes,
            'brandRes'    => $brandRes,
            'typeRes'     => $typeRes,
            'goodsRecRes' => $goodsRecRes,
            'rec_pos'     => $rec_pos,
            'mpRes'       => $mpRes,
            'attrRes'     => $attrRes,
            'goodsAttrRes'=> $goodsAttrRes,
            'goodsPhotoRes'=>$goodsPhotoRes,
            ]);
        return view();
    }

    //删除商品
    public function del($id)
    {
    	if(model('goods')->destroy($id)){
    		$this->success('删除商品成功！','goods/lst');
    	}else
    	{
    		$this->error('删除商品失败！');
    	}
        return view();
    }


    //库存量
    public function product($id)
    {
        if(request()->isPost()){
            //修改逻辑:  提交后前删除之前id的所有记录，再重新添加
            Db::name('product')->where('goods_id','=',$id)->delete();
            $data = input('post.');
            $goodsAtrr = $data['goods_attr'];
            $goodsNum  = $data['goods_num'];
            foreach ($goodsNum as $k => $v) {
                $strArr = array();
                foreach ($goodsAtrr as $k1 => $v1) {
                    //避免添加垃圾数据（未选择内容库存）
                    if(intval($v1[$k]) <= 0){
                        continue 2;
                    }
                    $strArr[] = $v1[$k];
                }
                sort($strArr);
                $strArr = implode(',', $strArr);
                Db::name('product')->insert([
                    'goods_id'=>$id,
                    'goods_number'=>$v,
                    'goods_attr'=>$strArr,
                    ]);
            }
            //dump($data);die();
            $this->success('添加库存成功！');
            return;
        }
        $_radioAttrRes = Db::name('goods_attr')->alias('g')->field('g.attr_id,g.attr_value,g.id,a.attr_name')->join('attr a','g.attr_id = a.id')->where(array('g.goods_id'=>$id,'a.attr_type'=>1))->select();
        $radioAttrRes = array();
        //数组格式重组
        foreach ($_radioAttrRes as $k => $v) {
            $radioAttrRes[$v['attr_name']][] = $v;
        }
        $goodsProRes = Db::name('product')->where('goods_id','=',$id)->select();
        //dump($GoodsProRes);die();
        $this->assign([
            'radioAttrRes' => $radioAttrRes,
            'goodsProRes'  => $goodsProRes,
            ]);
        // dump($radioAttrRes);die();
        return view();
    }

    //ajax删除商品相册图片
    public function ajaxDelpic($id)
    {
        $goodsPhotos = Db::name('goods_photo')->find($id);
        $ogPhoto = IMG_UPLOADS.$goodsPhotos['og_photo'];
        $bigPhoto = IMG_UPLOADS.$goodsPhotos['big_photo'];
        $midPhoto = IMG_UPLOADS.$goodsPhotos['mid_photo'];
        $smPhoto = IMG_UPLOADS.$goodsPhotos['sm_photo'];
        @unlink($ogPhoto);
        @unlink($bigPhoto);
        @unlink($midPhoto);
        @unlink($smPhoto);
        //删除记录
        if(Db::name('goods_photo')->delete($id)){
            echo 1;
        }else
        {   echo 0;
        }
    }


}
