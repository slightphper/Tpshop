<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"E:\phpStudy\WWW\TPshop/application/admin\view\category_adv\lst.htm";i:1540107892;s:60:"E:\phpStudy\WWW\TPshop/application/admin\view\common\top.htm";i:1540357346;s:61:"E:\phpStudy\WWW\TPshop/application/admin\view\common\left.htm";i:1541673520;}*/ ?>
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
                            <a href="<?php echo url('Order/lst'); ?>">
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
                      <li class="active">推荐分类左侧广告位图片管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加分类推荐左侧广告位图片" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('CategoryAdv/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="8%">ID</th>
                                <th class="text-center" width="15%">广告Logo</th>
                                <th class="text-center" width="15%">广告地址</th>
                                <th class="text-center" width="15%">广告位图片位置</th>
                                <th class="text-center" width="15%">所属推荐分类</th>                     
                                <th class="text-center" width="15%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php if(is_array($CateAdv) || $CateAdv instanceof \think\Collection || $CateAdv instanceof \think\Paginator): $i = 0; $__LIST__ = $CateAdv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_adv): $mod = ($i % 2 );++$i;?>
                              <tr>
                                <td align="center"><?php echo $cate_adv['id']; ?></td>
                                <td align="center">
                                <?php if($cate_adv['img_src'] != ''): ?>
                                    <img src="__uploads__/<?php echo $cate_adv['img_src']; ?>" height="30">
                                <?php else: ?>
                                    暂无广告位图片
                                <?php endif; ?> </td>
                                <td ><?php if($cate_adv['link_url'] != ''): ?>
                                <a href="<?php echo $cate_adv['link_url']; ?>" target="_blank"><?php echo $cate_adv['link_url']; ?></a>
                                <?php else: ?>未填写推广图地址<?php endif; ?></td>
                                <td align="center">
                                <?php if($cate_adv['position'] == 'A'): ?>
                                    左侧轮播展示
                                <?php elseif($cate_adv['position'] == 'B'): ?>
                                    右侧上部展示
                                <?php else: ?> 右侧下部展示
                                <?php endif; ?></td>
                                <td align="center"><?php echo $cate_adv['cate_name']; ?></td>
                                <td align="center">
                                    <a href="<?php echo url('CategoryAdv/edit',array('id'=>$cate_adv['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('CategoryAdv/del',array('id'=>$cate_adv['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>                           
                      </tbody>
                    </table>
                    <div style="padding-top:10px;text-align:right;">
                        <?php echo $CateAdv->render(); ?>
                    </div>
                </div>
                <div>
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