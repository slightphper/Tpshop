<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class RecPos extends Controller
{
	//显示推荐位
    public function lst()
    {
    	$rec_posRes = Db::name('rec_pos')->order('id DESC')->paginate(10);
    	$this->assign('rec_posRes',$rec_posRes);
        return view();
    }
    //添加推荐位
    public function add()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		$add  = db('rec_pos')->insert($data);
    		if($add)
    		{
    			$this->success('添加推荐位成功','RecPos/lst');
    		}else
    		{
    			$this->error('添加推荐位失败');
    		}
    		return;
    	}
        return view();
    }
    //修改推荐位
    public function edit()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		if(Db::name('rec_pos')->update($data) !== false){
    			$this->success('修改推荐位成功','RecPos/lst');
    		}else{
    			$this->error('修改推荐位失败！');
    		}
    		return;
    	}
    	//赋值
    	$id = input('id');
    	$rec_pos = Db::name('rec_pos')->find($id);
    	$this->assign('rec_pos',$rec_pos);
        return view();
    }
    //删除推荐位
    public function del()
    {
    	$id = input('id');
    	if(Db::name('rec_pos')->delete($id)){
    		$this->success('删除推荐位成功！','RecPos/lst');
    	}else
    	{
    		$this->error('删除推荐位失败！');
    	}
        return view();
    }


}
