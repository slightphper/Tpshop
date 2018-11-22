<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"E:\phpStudy\WWW\TPshop\public/../application/member\view\user\index.htm";i:1540631048;s:73:"E:\phpStudy\WWW\TPshop\public/../application/index\view\common\footer.htm";i:1540891527;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $configs['shop_keywords']; ?>" />
<meta name="Description" content="<?php echo $configs['shop_desc']; ?>" />
<title><?php echo $configs['shop_name']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="__index__/css/base.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/style.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/quickLinks.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/user.css">
<link rel="stylesheet" type="text/css" href="__index__/js/perfect-scrollbar.min.css" />

<script type="text/javascript" src="__index__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__index__/js/jquery.json.js"></script>
<script type="text/javascript" src="__index__/js/transport_jquery.js"></script>
<style type="text/css">
	.nav{
		height: 90px;
	}
	.nav-main{
		height: 90px !important;
		line-height: 120px !important;
	}
	.nav .nav-main li a:hover, .nav .nav-main li a.curr {
		color:#02807A;
    }
	.w1200{
		height: 90px;
	}
	.navitems{
		float: left;
	}
	.dsc-zoom {
    border-bottom: 2px solid #02807A;
    }
</style>
</head>
<body>
<div class="nav dsc-zoom" ectype="dscNav">
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="#"><img src="__index__/img/logo.png"></a></div>
        </div>
<!-- 分类导航栏信息 -->
<div class="nav-main" id="nav">
    <ul class="navitems">
        <li><a href="<?php echo url('index/Index/index'); ?>" class="curr">首页</a></li>
        <?php if(is_array($navRes['mid']) || $navRes['mid'] instanceof \think\Collection || $navRes['mid'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['mid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navRes): $mod = ($i % 2 );++$i;?>
        <li><a href="#"><?php echo $navRes['nav_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<!-- 分类导航栏信息结束 -->
    </div>
</div>

<div class="user-content clearfix">
    <div class="user-side" ectype="userSide">
<div class="user-mod user-perinfo">
    <div class="profile clearfix">
<div class="avatar">
    <a href="#" class="u-pic">
<img src="__index__/img/touxiang.jpg" alt="">
    </a>
</div>
<div class="name">
    <h2>70769833-218428</h2>
    <div class="user-rank user-rank-1">铜牌</div>
</div>
    </div>
    <div class="account">
<div class="item clearfix">
    <div class="item-name">账户资料：</div>
    <div class="item-main">
<b class="integrity"><em style="width: 45%;"></em></b><span>45%</span>
    </div>
</div>
<div class="item clearfix">
    <div class="item-name">账户安全：</div>
    <div class="item-main safe">
<a href="#" class="iconfont icon-email "><span class="tip">邮箱未验证</span></a>
<a href="#" class="iconfont icon-see "><span class="tip">实名认证未完成</span></a>
<a href="#" class="iconfont icon-password active"><span class="tip">密码已设置</span></a>
<a href="#" class="iconfont icon-mobile-phone active"><span class="tip">手机已验证</span></a>
    </div>
</div>
    </div>
</div>
<div class="user-mod">
    <div class="side-menu">
	<dl>
<dt><i class="square"></i><span>订单中心</span></dt>
<dd>
	<p><a href="#" target="_self">我的订单</a></p>
	<p><a href="#" target="_self">收货地址</a></p>
	<p><a href="#" target="_self">缺货登记</a></p>
	<p><a href="#" target="_self">退换货订单</a></p>
</dd>
    </dl>
    <dl>
<dt><i class="square"></i><span>会员中心</span></dt>
<dd>
	<p><a href="#" target="_self">用户信息</a></p>
	<p><a href="#" target="_self">账户安全</a></p>
	<p><a href="#"> 我的发票</a></p>
	</dd>
	</dl>
    </div></div>
    </div>
    <div class="user-main" ectype="userMain" data-action="default">


<ul class="user-index-order-statu clearfix">
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-columns"></i></div>
<div class="info">
    <p>待付款</p>
    <div class="num">0</div>
</div>
</a>
    </li>
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-truck-alt"></i></div>
<div class="info">
    <p>待收货</p>
    <div class="num">0</div>
</div>
</a>
    </li>
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-edit"></i></div>
<div class="info">
    <p>待评价</p>
    <div class="num">0</div>
</div>
</a>
    </li>
    <li>
<a href="#">
<div class="circle"><i class="iconfont icon-complete"></i></div>
<div class="info">
    <p>已完成</p>
    <div class="num">0</div>
</div>
</a>
    </li>
</ul>
<ul class="user-index-wallet clearfix">
    <li>
<div class="words"></div>
<div class="info info-line">
    <a href="#"><em>¥</em>0.00</a>
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info info-line">
    <a href="#">红包（<span class="red">0</span>）</a>
    
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info">
    <a href="#">优惠券（<span class="red">1</span>）</a><br>
    <div class="num"><a href="#" target="_blank" class="line">领券</a></div>
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info info-line">
    <a href="#">储值卡（<span class="red">0</span>）</a>
</div>
    </li>
    <li>
<div class="words"></div>
<div class="info info-line"><a href="#">0</a></div>
    </li>
</ul>
<div class="user-mod">
    <div class="user-section">
<div class="user-title">
    <h2>我的订单</h2>
    <a href="#" class="more">查看所有订单</a>
</div>
<div class="user-index-order-list">
    <div class="no_records">
<i class="no_icon"></i>
<div class="no_info no_info_line">
<h3>主人，您近期还没有购买任何商品哟~</h3>
<div class="no_btn">
    <a href="#" class="sc-btn sc-red-btn">去逛商城</a>
</div>
</div>
    </div>
</div>
    </div>
    
    <div class="user-section">
<div class="user-title">
    <h2>近期收藏</h2>
    <a href="#" class="more">查看所有收藏</a>
</div>
<div class="user-index-collection-list">
    <div class="no_records">
<i class="no_icon"></i>
<div class="no_info">
<h3>主人，您近期还没有收藏商品呦~</h3>
</div>
    </div>
</div>
    </div>
    <div class="user-section">
<div class="user-title">
    <h2>帮助</h2>
</div>
<ul class="user-help-list clearfix">
    <li><a href="#" class="ftx-05" target="_blank">售后服务保证</a></li>
    <li><a href="#" class="ftx-05" target="_blank">退换货原则</a></li>
    <li><a href="#" class="ftx-05" target="_blank">支付方式说明</a></li>
    <li><a href="#" class="ftx-05" target="_blank">配送支付智能查询 </a></li>
    <li><a href="#" class="ftx-05" target="_blank">货到付款区域</a></li>
    <li><a href="#" class="ftx-05" target="_blank">订购方式</a></li>
</ul>
    </div>
    </div>

     </div>
</div>


<div class="footer-new">
<div class="footer-new-top" style="height:30px;">
	<div class="w w1200">
        <div class="service-list">
            <div class="service-item">
                <i class="f-icon f-icon-qi"></i>
                <span>七天包退</span>
            </div>
            <div class="service-item">
                <i class="f-icon f-icon-zheng"></i>
                <span>正品保障</span>
            </div>
            <div class="service-item">
                <i class="f-icon f-icon-hao"></i>
                <span>好评如潮</span>
            </div>
            <div class="service-item">
                <i class="f-icon f-icon-shan"></i>
                <span>闪电发货</span>
            </div>
            <div class="service-item">
                <i class="f-icon f-icon-quan"></i>
                <span>权威荣誉</span>
            </div>
         </div>
            <div class="contact">
<div class="contact-item contact-item-first"><i class="f-icon f-icon-tel"></i><span>4000-000-000</span></div>
<div class="contact-item">
	    <a id="IM" im_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn"><i class="f-icon f-icon-kefu"></i><span>咨询客服</span></a>
    </div>

            </div>
        </div>
    </div>
    <!-- 底部系统信息开始 -->
    <div class="footer-new-con">
    	<div class="fnc-warp">
            <div class="help-list">
             <?php if(is_array($helpCateRes) || $helpCateRes instanceof \think\Collection || $helpCateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $helpCateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
             <div class="help-item">
                <h3><?php echo $cate['cate_name']; ?> </h3>
                <ul>
                    <?php if(is_array($cate['arts']) || $cate['arts'] instanceof \think\Collection || $cate['arts'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['arts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/Article/index',array('id'=>$art['id'])); ?>"><?php echo $art['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
             </div>
             <?php endforeach; endif; else: echo "" ;endif; ?>
           </div>   
    <!-- 底部系统信息结束--> 
    <!-- 底部系统二维码 -->
     <div class="qr-code">
            <div class="qr-item qr-item-first">
                <div class="code_img"><img src="__index__/img/ecjia_qrcode.png"></div>
                <div class="code_txt">官方网址</div>
            </div>
            <div class="qr-item">
                <div class="code_img"><img src="__index__/img/ectouch_qrcode.png"></div>
                <div class="code_txt">在线课程</div>
            </div>
            </div>
    </div>
    </div>
    <!-- 底部系统信息结束 -->
    <!-- 底部网站信息 -->
    <div class="footer-new-bot">
    	<div class="w w1200">
            <p class="copyright_links">
                <a href="<?php echo url('index/Index/index'); ?>">首页</a>
                 <?php if(is_array($shopInfoRes) || $shopInfoRes instanceof \think\Collection || $shopInfoRes instanceof \think\Paginator): $i = 0; $__LIST__ = $shopInfoRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopInfo): $mod = ($i % 2 );++$i;?>
                <span class="spacer"></span>
                <a href="<?php echo url('index/Article/index',array('id'=>$shopInfo['id'])); ?>"><?php echo $shopInfo['title']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </p>
        
        <p><span>©&nbsp;2018-2019&nbsp;<a href="<?php echo $configs['shop_url']; ?>"><?php echo $configs['shop_url']; ?></a>&nbsp;版权所有&nbsp;&nbsp;</span><span>ICP备案证书号:</span><a href="#"><?php echo $configs['ICP']; ?></a>&nbsp;<a href="#"><?php echo $configs['host_name']; ?></a></p>
        <p class="copyright_auth">&nbsp;</p>
    </div>
    </div>
    <!-- 底部网站信息结束 -->
    <div class="hide" id="pd_coupons">
        <span class="success-icon m-icon"></span>
        <div class="item-fore">
            <h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
            <div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
        </div>
    </div>
    
    
    <div class="hidden">
        <input name="seller_kf_IM" value="" rev="" ru_id="" type="hidden">
        <input name="seller_kf_qq" value="349488953" type="hidden">
        <input name="seller_kf_tel" value="4000-000-000" type="hidden">
        <input name="user_id" value="62" type="hidden">
    </div>
</div>
<script type="text/javascript">
var login_url = "<?php echo url('member/Account/checkLogin'); ?>";
var logout_url = "<?php echo url('member/Account/logout'); ?>";
var login = "<?php echo url('member/Account/login'); ?>";
var register = "<?php echo url('member/Account/reg'); ?>";
</script>
<script type="text/javascript" src="__index__/js/login.js"></script>
<div class="hidden">
<input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
<input type="hidden" name="seller_kf_qq" value="349488953" />
<input type="hidden" name="seller_kf_tel" value="4000-000-000" />
<input type="hidden" name="user_id" value="64" />
    </div>
</div>

<script type="text/javascript" src="__index__/js/suggest.js"></script>
<script type="text/javascript" src="__index__/js/scroll_city.js"></script>
<script type="text/javascript" src="__index__/js/utils.js"></script>
<script type="text/javascript" src="__index__/js/warehouse.js"></script>
<script type="text/javascript" src="__index__/js/warehouse_area.js"></script>

<script type="text/javascript" src="__index__/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="__index__/js/jquery.yomi.js"></script>
<script type="text/javascript" src="__index__/js/common.js"></script>
<script type="text/javascript" src="__index__/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="__index__/js/jquery.nyroModal.js"></script>
<script type="text/javascript" src="__index__/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__index__/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="__index__/js/dsc-common.js"></script>
<script type="text/javascript" src="__index__/js/jquery.purebox.js"></script>
<script type="text/javascript">
function init() {
    var clip = null;
    var val = $("#affTextarea").text();
    if(val){
clip = new ZeroClipboard.Client();
ZeroClipboard.setMoviePath("js/ZeroClipboard/ZeroClipboard.swf");
clip.setHandCursor(true);   
clip.addEventListener('mouseOver', function (client) {
    clip.setText(val);
});

clip.addEventListener('complete', function (client, text){
    pbDialog("复制成功","",1,"","",120);
});
clip.glue('clip_button', 'clip_container' );
    }
}

$(window).load(function(){
    init();
})

$(function(){
    $(".nyroModal").nyroModal();
});
</script>
    
 
</body>
</html>