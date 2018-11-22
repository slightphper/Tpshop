<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"E:\phpStudy\WWW\TPshop/application/admin\view\goods\add.htm";i:1539768391;s:60:"E:\phpStudy\WWW\TPshop/application/admin\view\common\top.htm";i:1540357346;s:61:"E:\phpStudy\WWW\TPshop/application/admin\view\common\left.htm";i:1540261124;}*/ ?>
    <!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__admin__/style/bootstrap.css" rel="stylesheet">
    <link href="__admin__/style/font-awesome.css" rel="stylesheet">
    <link href="__admin__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__admin__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__admin__/style/demo.css" rel="stylesheet">
    <link href="__admin__/style/typicons.css" rel="stylesheet">
    <link href="__admin__/style/animate.css" rel="stylesheet">
    <style type="text/css">
    .price{
        width: 150px;
        margin-left: 10px;
        display: inline-block;
    }
    .abtn{
        padding-right: 10px;
    }
    </style>
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
<div class="navbar-inner">
    <div class="navbar-container">
        <!-- Navbar Barnd -->
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                        <img src="__admin__/images/logo.png" alt="">
                    </small>
            </a>
        </div>
        <!-- /Navbar Barnd -->
        <!-- Sidebar Collapse -->
        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="collapse-icon fa fa-bars"></i>
        </div>
        <!-- /Sidebar Collapse -->
        <!-- Account Area and Settings -->
        <div class="navbar-header pull-right">
            <div class="navbar-account">
                <ul class="account-area">
                    <li>
                        <a href="#" id="clearCache" class="login-area dropdown-toggle">
                            <section>
                                <h2><span class="profile"><span>
                                <i class="menu-icon fa fa-trash-o">&nbsp;</i>
                                清空缓存
                                </span></span></h2>
                            </section>
                        </a>
                    </li>
                    <li>
                        <a class="login-area dropdown-toggle" data-toggle="dropdown">
                            <div class="avatar" title="View your public profile">
                                <img src="__admin__/images/adam-jansen.jpg">
                            </div>
                            <section>
                                <h2><span class="profile"><span>admin</span></span></h2>
                            </section>
                        </a>
                        <!--Login Area Dropdown-->
                        <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                            <li class="username"><a>David Stevenson</a></li>
                            <li class="dropdown-footer">
                                <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                            </li>
                        </ul>
                        <!--/Login Area Dropdown-->
                    </li>
                    <!-- /Account Area -->
                    <!-- Settings -->
                </ul>
            </div>
        </div>
        <!-- /Account Area and Settings -->
    </div>
</div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input class="searchinput" type="text">
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->                       
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-shopping-cart"></i>
                        <span class="menu-text">商品管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="<?php echo url('Goods/lst'); ?>">
                                <span class="menu-text">商品列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Goods/add'); ?>">
                                <span class="menu-text">添加商品</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Brand/lst'); ?>">
                                <span class="menu-text">商品品牌</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Category/lst'); ?>">
                                <span class="menu-text">商品分类</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Type/lst'); ?>">
                                <span class="menu-text">商品类型</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">商品回收站</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>  

                <!-- 前台推荐位 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-thumbs-up"></i>
                        <span class="menu-text">首页推荐位</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="<?php echo url('RecPos/lst'); ?>">
                                <span class="menu-text">首页推荐位管理</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('RecPos/add'); ?>">
                                <span class="menu-text">添加推荐</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('CategoryRec/lst'); ?>">
                                <span class="menu-text">分类推荐--精选分类</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('BrandRec/lst'); ?>">
                                <span class="menu-text">分类推荐--品牌列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                          <li>
                            <a href="<?php echo url('CategoryAdv/lst'); ?>">
                                <span class="menu-text">首页推荐分类--左侧广告位</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li> 
                <!-- 促销管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text">促销管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="#">
                                <span class="menu-text">团购活动</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">积分商城</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">优惠券</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li> 
                <!-- 订单管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-legal"></i>
                        <span class="menu-text">订单管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="#">
                                <span class="menu-text">订单列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">订单查询</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>  
                <!-- 会员管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">会员管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="#">
                                <span class="menu-text">会员列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('MemberLevel/lst'); ?>">
                                <span class="menu-text">会员等级</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">会员留言</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>
                  <!-- 导航管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-location-arrow"></i>
                        <span class="menu-text">页面导航</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="<?php echo url('Nav/lst'); ?>">
                                <span class="menu-text">导航列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Nav/add'); ?>">
                                <span class="menu-text">添加导航</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         
                    </ul>                            
                </li>
              
                <!-- 短信管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-envelope"></i>
                        <span class="menu-text">短信管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="#">
                                <span class="menu-text">发送信息</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">短信签名</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>   
                 <!-- 底部信息 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">底部信息</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="<?php echo url('cate/lst'); ?>">
                                <span class="menu-text">信息分类</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('article/lst'); ?>">
                                <span class="menu-text">文章管理</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>        
                 <!-- 图片管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-picture-o"></i>
                        <span class="menu-text">图片管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('AlternateImg/lst'); ?>">
                                <span class="menu-text">首页轮播图列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Article/imgMange'); ?>">
                                <span class="menu-text">文章内图片列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>        
                 <!-- 数据库管理 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-sitemap"></i>
                        <span class="menu-text">数据库管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="#">
                                <span class="menu-text">数据库备份</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">数据表优化</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>    
                  <!-- 系统设置 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">系统设置</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="<?php echo url('Conf/conflist'); ?>">
                                <span class="menu-text">配置项</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="<?php echo url('Conf/lst'); ?>">
                                <span class="menu-text">配置管理</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                         <li>
                            <a href="#">
                                <span class="menu-text">支付方式设置</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    </ul>                            
                </li>   
                <!-- 友情链接 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-link"></i>
                        <span class="menu-text">友情链接</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                         <li>
                            <a href="<?php echo url('Link/lst'); ?>">
                                <span class="menu-text">链接列表</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                    
                    </ul>                            
                </li>                                                       
                                                          
            </ul>
            <!-- /Sidebar Menu -->
        </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                         <li>
                            <a href="<?php echo url('Index/index'); ?>">系统</a>
                         </li>
                         <li>
                            <a href="<?php echo url('Goods/lst'); ?>">商品列表</a>
                        </li>
                        <li class="active">添加商品</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <form class="form-horizontal" role="form" action="<?php echo url('Goods/add'); ?>" method="post" enctype="multipart/form-data">
            <!-- 商品信息开始 -->
            <div class="widget-body">
                <div class="widget-main ">
                    <div class="tabbable">
                        <ul id="myTab11" class="nav nav-tabs tabs-flat">
                            <li class="active">
                                <a href="#baseinfo" data-toggle="tab">
                                    基本信息
                                </a>
                            </li>
                            <li class="">
                                <a href="#goodsdes" data-toggle="tab">
                                    商品简介
                                </a>
                            </li>
                           <li class="">
                                <a href="#mbprice" data-toggle="tab">
                                   会员价格
                                </a>
                            </li>
                            <li class="">
                                <a href="#goodsattr" data-toggle="tab">
                                    商品属性
                                </a>
                            </li>
                             <li class="">
                                <a href="#goodsphoto" data-toggle="tab">
                                    商品相册
                                </a>
                            </li> 
                        </ul>
                        <div class="tab-content tabs-flat">
                            <!-- 基本信息 -->
                            <div class="tab-pane active" id="baseinfo">
                                <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                <div class="col-sm-6">
                                    <input class="form-control"  placeholder="请输入商品名称" name="goods_name" required="" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">商品主图</label>
                                <div class="col-sm-6">
                                    <input class="form-control" style="border:none; box-shadow:none;" type="file" name="og_thumb">
                                </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">所属分类</label>
                                    <div class="col-sm-6">
                                        <select name="category_id" id="category_id">
                                            <option value="">请选择</option>
                                             <?php if(is_array($categoryRes) || $categoryRes instanceof \think\Collection || $categoryRes instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $cate['id']; ?>">
                                            <?php echo str_repeat('-',$cate['level']*2)?><?php echo $cate['cate_name']; ?>
                                            </option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">所属品牌</label>
                                    <div class="col-sm-6">
                                        <select name="brand_id" >
                                            <option value="">请选择</option>
                                            <?php if(is_array($brandRes) || $brandRes instanceof \think\Collection || $brandRes instanceof \think\Paginator): $i = 0; $__LIST__ = $brandRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $brand['id']; ?>">
                                               <?php echo $brand['brand_name']; ?>
                                            </option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="markte_price" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">在售价</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="shop_price" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">推荐位展示</label>
                                    <div class="col-lg-4 col-sm-4 col-xs-4">
                                        <div class="checkbox">
                                            <?php if(is_array($goodsRecRes) || $goodsRecRes instanceof \think\Collection || $goodsRecRes instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsRecRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recRes): $mod = ($i % 2 );++$i;?>
                                            <label style="padding-right:10px;">
                                                <input type="checkbox" name="rec_pos[]" value="<?php echo $recRes['id']; ?>">
                                                <span class="text"><?php echo $recRes['rec_name']; ?></span>
                                            </label>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">是否上架</label>
                                        <div class="col-sm-6">
                                          <div class="radio" style="float:left; padding-right:10px;">
                                            <label>
                                                <input name="on_sale" value="1" class="colored-blue"  type="radio" checked="checked">
                                                <span class="text">是 </span>
                                            </label>
                                        </div>
                                        <div class="radio" style="float:left;">
                                            <label>
                                                <input name="on_sale" value="0" class="colored-blue" type="radio" >
                                                <span class="text">否 </span>
                                        </label>
                                        </div>
                                    </div>
                                 </div>

                            </div>
                            <!-- 商品描述 -->
                            <div class="tab-pane" id="goodsdes">
                                <textarea  id="goods_desc" name="goods_desc"></textarea>
                            </div>
                            <!-- 会员价格 -->
                           <div class="tab-pane" id="mbprice">
                                <?php if(is_array($mlRes) || $mlRes instanceof \think\Collection || $mlRes instanceof \think\Paginator): $i = 0; $__LIST__ = $mlRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ml): $mod = ($i % 2 );++$i;?>
                                <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $ml['level_name']; ?></label>
                                <div class="col-sm-6">
                                    <input class="form-control"  placeholder="请输入商品价格" name="mp[<?php echo $ml['id']; ?>]" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <!-- 商品属性 -->
                              <div class="tab-pane" id="goodsattr">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">商品类型</label>
                                    <div class="col-sm-6">
                                        <select name="type_id">
                                            <option value="">请选择</option>
                                            <?php if(is_array($typeRes) || $typeRes instanceof \think\Collection || $typeRes instanceof \think\Paginator): $i = 0; $__LIST__ = $typeRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $type['id']; ?>"><?php echo $type['type_name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div id="attr_list">
                                  <!-- 属性显示js实现 -->
                                </div>
                            </div> 
                            <!-- 商品相册 -->
                            <div class="tab-pane" id="goodsphoto">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">商品相册</label>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                    <div class="col-sm-6">
                                       <a href="#" onclick="addrow(this)">[+]</a><input class="form-control" style="border:none; box-shadow:none; width:30%; display:inline-block;"  type="file" name="goods_photo[]">
                                    </div>
                                </div>
                                <div id="goods_photo"></div>

                            </div> 

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id="formbtn" type="submit" class="btn btn-default">保存信息</button>
                        </div>
                    </div>
                        </div>
                     </div>
                    <!-- 商品信息结束 -->
             </form>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="__admin__/style/jquery_002.js"></script>
    <script src="__admin__/style/bootstrap.js"></script>
    <script src="__admin__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__admin__/style/beyond.js"></script>
    <!-- 引入ueditor -->
    <script src="__plus__/ueditor/ueditor.config.js"></script>
    <script src="__plus__/ueditor/ueditor.all.min.js"></script>
    <script src="__plus__/ueditor/lang/zh-ch/zh-cn.js"></script>
    <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('goods_desc',{initialFrameWidth:1000,initialFrameHeight:400,toolbars: [['fullscreen', 'source', 'undo', 'redo','bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript','removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','selectall', 'cleardoc']]});   
   </script>
   <script type="text/javascript">
    $("select[name=type_id]").change(function(){
        var type_id = $(this).val();
        $.ajax({
            type :"POST",
            url :"<?php echo url('Attr/ajaxGetAttr'); ?>",
            data: {type_id:type_id},
            dataType:"json",
            success:function(data){
                var html="";  
                $(data).each(function(k,v){
                    if(v.attr_type == 1){
                        //单选
                        html+= "<div class='form-group'>";
                        html+= "<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                        var attrValuesArr = v.attr_values.split(',');
                        html+= "<div class='col-sm-6'><a class='abtn' onclick='addrow(this)' href='#'>[+]</a>";
                        html+= "<select name='goods_attr["+v.id+"][]'>";
                        html+= "<option value=''>请选择</option>";
                        for(var i=0; i<attrValuesArr.length;i++){
                            html+= "<option value='"+attrValuesArr[i]+"'>"+attrValuesArr[i]+"</option>";
                        }
                        html+= "</select>";
                        html+= "<input class='form-control price' placeholder='价格' name='attr_price[]' type='text'>";
                        html+= "</div></div>";
                    }else{
                        //唯一
                        if(v.attr_values){
                            html+= "<div class='form-group'>";
                            html+= "<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name +"</label>";
                            var attrValuesArr = v.attr_values.split(',');
                            html+= "<div class='col-sm-6'>";
                            html+= "<select name='goods_attr["+v.id+"]' style='margin-left:27px'>";
                            html+= "<option value=''>请选择</option>";
                            for(var i=0; i<attrValuesArr.length;i++){
                                html+= "<option value='"+attrValuesArr[i]+"'>"+attrValuesArr[i]+"</option>";
                            }
                            html+= "</select>";
                            html+= "</div></div>";
                        }else{
                            html+= "<div class='form-group'>";
                            html+= "<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                            var attrValuesArr = v.attr_values.split(',');
                            html+= "<div class='col-sm-6'>";
                            html+= "<input class='form-control price' name='goods_attr["+v.id+"]' type='text' style='margin-left:27px'>";
                            html+= "</div></div>";
                        }
                    }
                });
                $("#attr_list").html(html);
            }
        });
    });
    //点击 添加/删除 兄弟节点
    function addrow(o){
        var div = $(o).parent().parent();
        if($(o).html() == '[+]'){
            var newdiv = div.clone();
            newdiv.find('a').html('[-]');
            div.after(newdiv);
        }else{
            div.remove();
        }
    }

    //验证商品分类不能为空

   </script>

</body></html>