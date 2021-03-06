<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"E:\phpStudy\WWW\TPshop\public/../application/admin\view\attr\add.htm";i:1538881721;s:70:"E:\phpStudy\WWW\TPshop\public/../application/admin\view\common\top.htm";i:1540357346;s:71:"E:\phpStudy\WWW\TPshop\public/../application/admin\view\common\left.htm";i:1540261124;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Attr" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__admin__/style/bootstrap.css" rel="stylesheet">
    <link href="__admin__/style/font-awesome.css" rel="stylesheet">
    <link href="__admin__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__admin__/style/beyond.css" rel="stylesheet" Attr="text/css">
    <link href="__admin__/style/demo.css" rel="stylesheet">
    <link href="__admin__/style/typicons.css" rel="stylesheet">
    <link href="__admin__/style/animate.css" rel="stylesheet">
    
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
                            <a href="<?php echo url('Attr/lst'); ?>">商品属性管理</a>
                        </li>
                        <li class="active">添加商品属性</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增商品属性</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('Attr/add'); ?>" method="post" encAttr="multipart/form-data">
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
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品属性名称</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="attr_name" required="" Attr="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品属性类型</label>
                            <div class="col-sm-6">
                              <div class="radio" style="float:left; padding-right:10px;">
                                <label>
                                    <input name="attr_type" value="1" class="colored-blue" checked="checked" type="radio" >
                                    <span class="text">单选 </span>
                                </label>
                            </div>
                            <div class="radio" style="float:left;">
                                <label>
                                    <input name="attr_type" value="2" class="colored-blue" type="radio" >
                                    <span class="text">唯一 </span>
                                </label>
                            </div>
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性列表</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="attr_values" cols="30" rows="2"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button Attr="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
    


</body></html>