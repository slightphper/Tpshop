<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\phpStudy\WWW\TPshop\public/../application/index\view\common\tip_info.htm";i:1540969858;s:73:"E:\phpStudy\WWW\TPshop\public/../application/index\view\common\header.htm";i:1540887764;s:73:"E:\phpStudy\WWW\TPshop\public/../application/index\view\common\footer.htm";i:1540891527;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="大商创X大商创X" />
<meta name="Description" content="大商创X大商创X大商创X大商创X大商创X" />
<meta http-equiv="refresh" content="3;URL=javascript:history.back()" />
<title>系统提示</title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="__index__/css/base.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/style.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/quickLinks.css" />

<script type="text/javascript" src="__index__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__index__/js/jquery.json.js"></script>
<script type="text/javascript" src="__index__/js/transport_jquery.js"></script>
</head>
<body>
<div class="site-nav" id="site-nav">
    <div class="w w1390">
        <div class="fl">	
           <div class="txt-info" id="ECS_MEMBERZONE">
            <!-- 引入js文件，做ajax实时验证 -->
            <div class='scrollBody' id='scrollBody'></div>
            </div>
        </div>
        <!-- 顶部导航显示 -->
        <ul class="quick-menu fr">
            <?php if(is_array($navRes['top']) || $navRes['top'] instanceof \think\Collection || $navRes['top'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav_top): $mod = ($i % 2 );++$i;?>
            <li><div class="dt">
                <a <?php if($nav_top['open'] == 1): ?> target="_black" <?php endif; ?> href="<?php echo $nav_top['nav_url']; ?>"><?php echo $nav_top['nav_name']; ?></a>
            </div></li>
            <li class="spacer"></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- 顶部导航显示结束 -->
    </div>
</div>
<div class="header">
    <div class="w w1390">
        <div class="logo">
            <div class="logoImg"><a href="#"><img src="__index__/img/logo.png" /></a></div>
        </div>
        <div class="dsc-search">
            <div class="form">
                <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="search-form">
                    <input autocomplete="off" onKeyUp="lookup(this.value);" name="keywords" type="text" id="keyword" value="<?php echo $configs['search_value']; ?>" class="search-text"/>
                    <input type="hidden" name="store_search_cmt" value="0">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)" >搜商品</button>
                </form>
                <!-- 配置项关键词显示 -->
                <ul class="keyword">
                <?php 
                    $arr = explode(',',$configs['search_keywords']);
                    foreach($arr as $k => $v):
                ?>
                <li><a href="#" target="_blank"><?php echo $v; ?></a></li>
                <?php endforeach;?>
                </ul>
                <!-- 配置项关键词显示结束 -->
                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
                        &nbsp;
                    </div>
                </div>
                
            </div>
        </div>
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">
            
<div class="shopCart-con dsc-cm">
	<a href="#">
		<i class="iconfont icon-carts"></i>
		<span>我的购物车</span>
		<em class="count cart_num">0</em>
	</a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer">
        <div class="prompt"><div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div></div>
    </div>

<script type="text/javascript">
//ajax获取分类、
var ajax_cate_url = "<?php echo url('index/Category/getCateInfo'); ?>";
//获取加载图片路径
var load_img = "__index__/img/loadGoods.gif";


function changenum(rec_id, diff, warehouse_id, area_id)
{
	var cValue = $('#cart_value').val();
    var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
 
	if(goods_number < 1)
	{
		return false;	
	}
	else
	{
		change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
	}
}
function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
{
	if(cValue != '' || cValue == 'undefined'){
	   var cValue = $('#cart_value').val(); 
	}   
	Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
}
function change_goods_number_response(result)
{    
	var rec_id = result.rec_id;           
    if (result.error == 0)
    {
       $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
       $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
       if (result.goods_number <= 0)
        {
			//数量为零则隐藏所在行
            $('#tr_goods_' +rec_id).style.display = 'none';
            $('#tr_goods_' +rec_id).innerHTML = '';
        }
        $('#total_desc').html(result.flow_info);//更新合计
        if($('ECS_CARTINFO'))
        

		if(result.group.length > 0){
			for(var i=0; i<result.group.length; i++){
				$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
				$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
			}
		}

		$("#goods_price_" + rec_id).html(result.goods_price);
		$(".cart_num").html(result.subtotal_number);
	}
	else if (result.message != '')
	{
		$('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
		alert(result.message);
	}                
}

function deleteCartGoods(rec_id,index)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else if(res.index==1)
  {
		Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
	  $(".cart_num").html(res.cart_num);
  }
}

function return_cart_list(result)
{
	$(".cart_num").html(result.cart_num);
	$(".pop_panel").html(result.content);
	tbplHeigth();
}
</script>        </div>
    </div>
</div>
<div class="nav dsc-zoom">
    <div class="w w1390">
        <div class="categorys <?php if(!isset($show_nav)){echo 'site-mast';} ?>">
            <div class="categorys-type"><a href="#" target="_blank">全部商品分类</a></div>
            <div class="categorys-tab-content">
                <div class="categorys-items" id="cata-nav">
                <!-- 分类菜单开始 -->
                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
				<div class="categorys-item" ectype="cateItem" data-id="<?php echo $cate['id']; ?>" data-eveval="0">
                    <div class="item item-content">
						<i class="iconfont <?php echo $cate['cate_icon']; ?>"></i>
						<div class="categorys-title">
							<strong>
							     <a href="<?php echo url('index/Category/index',array('id'=>$cate['id'])); ?>" target="_blank"><?php echo $cate['cate_name']; ?></a>
							</strong>
							<span>
                                <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son_cate): $mod = ($i % 2 );++$i;if($i < 3): ?>
                                <a href="<?php echo url('index/Category/index',array('id'=>$son_cate['id'])); ?>" target="_blank"><?php echo $son_cate['cate_name']; ?></a>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                             </span>
						</div>
                    </div>
                <div class="categorys-items-layer" ectype="cateLayer">
                    <div class="cate-layer-con clearfix">
                        <div class="cate-layer-left">
                            <div class="cate_channel" ectype="channels_<?php echo $cate['id']; ?>"></div>
                            <div class="cate_detail" ectype="subitems_<?php echo $cate['id']; ?>"></div>
                        </div>
                            <div class="cate-layer-rihgt" ectype="brands_<?php echo $cate['id']; ?>"></div>
                     </div>
                </div>
                        <div class="clear"></div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 分类菜单结束 -->
             </div>
            </div>
        </div>
       <!-- 首页中间导航开始 -->
        <div class="nav-main">
            <ul class="navitems">
                <li><a href="<?php echo url('index/Index/index'); ?>" class="curr">首页</a></li> 
                <!-- 保留class，后期需要对选中项颜色做改动 -->
                <?php if(is_array($navRes['mid']) || $navRes['mid'] instanceof \think\Collection || $navRes['mid'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['mid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav_mid): $mod = ($i % 2 );++$i;?>
                <li><a <?php if($nav_mid['open'] == 1): ?> target="_black" <?php endif; ?> href="<?php echo $nav_mid['nav_url']; ?>"><?php echo $nav_mid['nav_name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!--首页中间导航结束  -->
    </div>
</div>
<div class="w w1200">
    <div class="no_records message_records">
        <i class="no_icon_two"></i>
        <div class="no_info no_info_line w500">
            <h3><?php echo $msg['msg']; ?></h3>
            <div class="no_btn">
            	<a href="javascript:history.back()" class="btn sc-redBg-btn">返回上一页</a>
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
<script type="text/javascript" src="__index__/js/suggest.js"></script>
<script type="text/javascript" src="__index__/js/scroll_city.js"></script>
<script type="text/javascript" src="__index__/js/utils.js"></script>
<script type="text/javascript" src="__index__/js/warehouse.js"></script>
<script type="text/javascript" src="__index__/js/warehouse_area.js"></script>
<script type="text/javascript" src="__index__/js/dsc-common.js"></script>
</body>
</html>
