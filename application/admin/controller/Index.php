<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
        return view();
    }

    //清空缓存
    public function clearCache(){
    	if(cache(NULL)){
    		return 1;
    	}
    }
}
