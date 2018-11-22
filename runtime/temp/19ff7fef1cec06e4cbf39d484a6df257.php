<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"E:\phpStudy\WWW\TPshop/application/admin\view\order\edit.htm";i:1541729224;s:60:"E:\phpStudy\WWW\TPshop/application/admin\view\common\top.htm";i:1540357346;s:61:"E:\phpStudy\WWW\TPshop/application/admin\view\common\left.htm";i:1541849845;}*/ ?>
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

                <!-- 促销管理 -->
                <!--  <li>
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
                </li>  -->
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
                            <a href="<?php echo url('Order/orderSelect'); ?>">
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
                            <a href="<?php echo url('User/lst'); ?>">
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
               <!--   <li>
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
                </li>    -->
                 <!-- 底部信息 -->
                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">底部信息栏</span>
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
                <!--  <li>
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
                </li>     -->
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
                            <a href="<?php echo url('Order/lst'); ?>">订单管理</a>
                        </li>
                        <li class="active">订单详情</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
             <form action="">
                <table class="table table-hover">
                    <thead class="bordered-darkorange">
                        <tr>
                            <th width="15%" style="text-align:right;">
                                订单详细信息
                            </th>
                            <th>
                                订单内容
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:right;">
                                订单ID:
                            </td>
                            <td>
                                <?php echo $orderInfo['id']; ?>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                订单编号:
                            </td>
                            <td>
                                <?php echo $orderInfo['out_trade_no']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:right;">
                                下单时间:
                            </td>
                            <td>
                                <?php echo date("Y-m-d H:i:s",$orderInfo['order_time']); ?>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                下单用户:
                            </td>
                            <td>
                                <?php echo $orderInfo['username']; ?>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                商品总额:
                            </td>
                            <td>
                                <input type="text" name="goods_total_price" value="<?php echo $orderInfo['goods_total_price']; ?> "> 元
                                
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                运费:
                            </td>
                            <td>
                                <input type="text" name="post_spent" value="<?php echo $orderInfo['post_spent']; ?> "> 元
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                订单总额:
                            </td>
                            <td>
                                <input type="text" name="order_total_price" value="<?php echo $orderInfo['order_total_price']; ?> "> 元
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                支付状态:
                            </td>
                            <td>
                                <?php if($orderInfo['pay_status'] == 0): ?>未支付<?php else: ?>已支付<?php endif; ?>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                支付方式:
                            </td>
                            <td>
                                <?php if($orderInfo['payment'] == 1): ?>支付宝<?php else: ?>微信<?php endif; ?>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                配送方式:
                            </td>
                            <td>
                            <select name="distribution" id="">
                                <option <?php if($orderInfo['distribution'] == '顺丰'): ?> selected="selected" <?php endif; ?> value="顺丰">顺丰</option>
                                <option <?php if($orderInfo['distribution'] == '邮政'): ?> selected="selected" <?php endif; ?> value="邮政">邮政</option>
                            </select>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                配送状态:
                            </td>
                            <td>
                                <?php if($orderInfo['post_status'] == 0): ?>未发货
                                    <?php elseif($orderInfo['post_status'] == 1): ?>已发货
                                    <?php elseif($orderInfo['post_status'] == 2): ?>已签收
                                <?php endif; ?>
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                收货人姓名:
                            </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $orderInfo['name']; ?>" >
                            </td>
                        </tr>

                         <tr>
                            <td style="text-align:right;">
                                收货人电话:
                            </td>
                            <td>
                             <input type="text" name="mobile_phone" value="<?php echo $orderInfo['mobile_phone']; ?> ">
                            </td>
                        </tr>
                       <tr>
                            <td style="text-align:right;">
                                地址:
                            </td>
                            <td>
                            <input type="text" name="province" value="<?php echo $orderInfo['province']; ?> ">
                            <input type="text" name="city" value="<?php echo $orderInfo['city']; ?> ">
                            <input type="text" name="district" value="<?php echo $orderInfo['district']; ?> ">
                            </td>
                        </tr>
                         <tr>
                            <td style="text-align:right;">
                                详细地址:
                            </td>
                            <td>
                            <input type="text" name="address" value="<?php echo $orderInfo['address']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:right;">
                                订单商品:
                            </td>
                            <td>
                                商品列表
                            </td>
                        </tr>

                        <tr>
                           <td style="text-align:right;">
                            </td>
                            <td>
                                <div>
                                <button type="submit" onClick="orderEdit()" class="btn btn-default">保存修改</button>
                            </div>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
               </form>


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
<script src="__admin__/style/beyond.js"></script>
<script type="text/javascript">
function orderEdit(){

    if($("[name='name']").val() == '' || $("[name='goods_total_price']").val() == '' || $("[name='order_total_price']").val() == '' || $("[name='mobile_phone']").val() == '' ||$("[name='address']").val() == ''){
        alert('表单内容不能存在空字段，请检查后提交！');
    }else{

        var url = "<?php echo url('edit'); ?>";
        var jump = "<?php echo url('detail',array('id'=>$orderInfo['id'])); ?>"; 
        var order_id = "<?php echo $orderInfo['id']; ?>";
        var goods_total_price = $("[name='goods_total_price']").val();
        var post_spent = $("[name='post_spent']").val();
        var order_total_price = $("[name='order_total_price']").val();
        var name = $("[name='name']").val();
        var mobile_phone = $("[name='mobile_phone']").val();
        var province = $("[name='province']").val();
        var city = $("[name='city']").val();
        var district = $("[name='district']").val();
        var distribution = $("[name='distribution']").select().val();
        var address = $("[name='address']").val();
        $.ajax({
            type: "POST",
            url: url,
            dateType: "json",
            data:{id:order_id,goods_total_price:goods_total_price,post_spent:post_spent,order_total_price:order_total_price,name:name,mobile_phone:mobile_phone,province:province,city:city,district:district,distribution,distribution,address:address},
            success:function(data){
                if(data == 1){
                    location.href = jump;
                }else{
                    alert('修改失败！');
                }
            }
        });
    }
}


</script>
    

</body></html>