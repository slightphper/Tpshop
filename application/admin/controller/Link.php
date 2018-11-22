<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Link extends Controller
{
	//显示链接
    public function lst()
    {
    	$linkRes = db('link')->order('id DESC')->paginate(8);
    	$this->assign('linkRes',$linkRes);
        return view();
    }
    //添加链接
    public function add()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		//判断网址是否有协议头
    		if($data['link_url'] && stripos($data['link_url'],'http://') === false){
    			$data['link_url'] = 'http://'.$data['link_url'];
    		}
    		//图片上传
    		if($_FILES['logo']['tmp_name']){
    			$data['logo'] = $this->upload();
    		}
    		$add  = db('link')->insert($data);
    		if($add)
    		{
    			$this->success('添加链接成功','link/lst');
    		}else
    		{
    			$this->error('添加链接失败');
    		}
    		return;
    	}
        return view();
    }
    //修改链接
    public function edit()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		//处理url
    		if($data['link_url'] && stripos($data['link_url'],'http://') === false){
    			$data['link_url'] = 'http://'.$data['link_url'];
    		}
    		//上传图片
    		if($_FILES['logo']['tmp_name']){
    			//删除之前上传图片
    			$oldlinks = db('link')->field('logo')->find($data['id']);
    			$oldlinkImg = IMG_UPLOADS.$oldlinks['logo'];
    			if(file_exists($oldlinkImg)){
    				@unlink($oldlinkImg);
    			}
    			$data['logo'] = $this->upload();
    		}
    		if(db('link')->update($data) !== false){
    			$this->success('修改链接成功','link/lst');
    		}else{
    			$this->error('修改链接失败！');
    		}
    		return;
    	}
    	//赋值
    	$id = input('id');
    	$links = db('link')->find($id);
    	$this->assign('links',$links);
        return view();
    }
    //删除链接
    public function del()
    {
    	$id    = input('id');
        $link  = db('link');
        //删除链接对应的logo
        $logo  = $link->field('logo')->find($id);
        if($logo['logo']){
            $logoSrc = IMG_UPLOADS.$logo['logo'];
            if(file_exists($logoSrc)){
                @unlink($logoSrc);
            }
        }
        if($link->delete($id)){
            return 1;
        }else{ return 0;
        }
        return view();
    }

    //图片上传
    public function upload(){
    //获取表单上传文件
    $file = request()->file('logo');
    //移动到 /public/static/uploads下
	 if($file){
	    	$info = $file->move(ROOT_PATH.'public'.DS.'static'.DS.'uploads');
	    if($info){
	    	return $info->getSaveName();
	    }else
	    {
	    	//上传错误信息
	    	echo $file->getError();
	    	die();
	    }

    }
    }

}
