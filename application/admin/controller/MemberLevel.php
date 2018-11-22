<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class MemberLevel extends Controller
{
	//显示会员级别
    public function lst()
    {
    	$mlRes = db('member_level')->order('id DESC')->paginate(7);
    	$this->assign('mlRes',$mlRes);
        return view();
    }
    //添加会员级别
    public function add()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		$add  = db('member_level')->insert($data);
    		if($add)
    		{
    			$this->success('添加会员级别成功','member_level/lst');
    		}else
    		{
    			$this->error('添加会员级别失败');
    		}
    		return;
    	}
        return view();
    }
    //修改会员级别
    public function edit()
    {
    	if(request()->isPost()){
    		$data = input('post.');
    		if(db('member_level')->update($data) !== false){
    			$this->success('修改会员级别成功','member_level/lst');
    		}else{
    			$this->error('修改会员级别失败！');
    		}
    		return;
    	}
    	//赋值
    	$id = input('id');
    	$mls = db('member_level')->find($id);
    	$this->assign('mls',$mls);
        return view();
    }
    //删除会员级别
    public function del()
    {
    	$id = input('id');
    	if(db('member_level')->delete($id)){
    		$this->success('删除会员级别成功！','member_level/lst');
    	}else
    	{
    		$this->error('删除会员级别失败！');
    	}
        return view();
    }


}
