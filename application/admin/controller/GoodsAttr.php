<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class GoodsAttr extends Controller{

	//ajax修改商品属性之删除属性
	public function ajaxEditAttr($id){
		$del = Db::name('goods_attr')->where('id','=',$id)->delete();
		if($del){
		    echo 1;
		}else{
		    echo 0;
		} 
	}


}