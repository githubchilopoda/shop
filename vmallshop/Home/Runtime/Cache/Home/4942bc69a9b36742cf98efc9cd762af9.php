<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>注册协议_帮助中心_华为商城</title>
<link rel="shortcut icon" href="/vmallshop/Public/Ico/favicon.ico" />
<link href="/vmallshop/Public/Css/help.ec.core.css" rel="stylesheet" type="text/css">
<link href="/vmallshop/Public/Css/help.main.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- 粉红登录注册 -->

<!---1---------------------------头部粉红色条--------------------------------------->
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
<div  class="qq-caibei-bar hide"  id="caibeiMsg">
	<div  class="layout">
		<div  class="qq-caibei-bar-tips"  id="HeadShow"></div>
		<div  class="qq-caibei-bar-userInfo"  id="ShowMsg"></div>
	</div>
</div>

<!----------------头部的粉红色条--------------------->
<div  class="shortcut">
	<div  class="layout">
	  <!-----登录注册要去修改地方------>
	<span id="unlogin_status">
	  
	   <a  href="<?php echo U('Login/index');?>"  rel="nofollow">[登录]</a><a  href="<?php echo U('Sign/index');?>"  rel="nofollow">[注册]</a>
	  
	</span>
	 <!-----登录注册要去修改地方------>
	 <!---------登录后的状态----------->
	<span  id="login_status"  class="hide">欢迎您，<a  href="<?php echo U('Member/index');?>"  id="customer_name"  rel="nofollow"  timetype="timestamp"></a>
	<!---------登录后的状态----------->
	
	[<a  href="<?php echo U('Login/quit');?>">退出</a>]</span>
    <b>|</b><a  href="<?php echo U('OrderCenter/index');?>"  rel="nofollow"  timetype="timestamp">我的订单</a><span  id="preferential"></span><b>|</b><a  href="<?php echo U('Help/vmall');?>"  rel="nofollow"  class="red">帮助中心</a><b>|</b><a  href="javascript:return  false;"  >华为商城手机版</a>

	</div>
</div>

<script type="text/javascript">
  // 顶部粉红条 ajax进行处理结果
  $(function(){
      $.ajax({
	      url:'<?php echo U("Login/checkLogin");?>',
		  type:'GET',
		  dataType:'json',
		  success:function(responseText,status,xhr){
		      if(status=="success"){
			     if(responseText.login_status==1){
				     $("#login_status").removeClass('hide');
					 $("#login_status #customer_name").html(responseText.user_name);
					 $("#unlogin_status").addClass('hide');
				 }else{
				     $("#login_status").addClass('hide');
				     $("#unlogin_status").removeClass('hide');
				 
				 }
				
			  }else{
			       $("#login_status").addClass('hide');
				   $("#unlogin_status").removeClass('hide');
			  
			  }
		  
		  },
		  
		  error:function(){
		      $("#login_status").addClass('hide');
		      $("#unlogin_status").removeClass('hide');
		  },
		  
		  timeout:60*1000,
	  
	  
	  
	  
	  
	  
	  
	  
	  });
  
  
  
  
  
  
  });
  

</script>

<!-- 搜索 -->
<!------------------搜索导航---作者:曹建伟------------------------------->
<script  src="/vmallshop/Public/Js/base.js"></script>

<div  class="top-banner"  id="top-banner-block"></div>
<!----1----------------------------------------------------------------------------->
<!--------2-搜索条部分---------------------------------------------------------------->
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
<header  class="header">
	<div  class="layout">
		
		<div  class="logo"><a  href="<?php echo U('Index/index');?>"  title="Vmall.com - 华为商城"><img  src="/vmallshop/Public/Images/newLogo.png"  alt="Vmall.com - 华为商城"></a></div>
		
		<div  class="searchBar">
			
				<div  class="searchBar-key">
	<b>热门搜索：</b>
	
	    <!--------搜索上的几个关键商品--------->
		<a  href="<?php echo U('Search/index');?>?keywords='畅玩版'"  target="_blank">畅玩版</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=荣耀3C"  target="_blank">荣耀3C</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=X1"  target="_blank">X1</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=P7"  target="_blank">华为P7</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=荣耀立方"  target="_blank">荣耀立方</a>
	   <!--------搜索上的几个关键商品--------->
</div>
			<div  class="searchBar-form"  id="searchBar-area">
			    <!-----------搜索条------------------->
				<form  method="get"  action="" onsubmit="return false;">					
					
					
					
					<input  type="text"  class="text"  maxlength="100"  id="search_kw"  style="z-index: 1;"  autocomplete="off"  placeholder="请输入搜索关键字" style="height:18px;">
					
					<input  type="submit"  class="button"  value=" " id="submit_go">
					<input  type="hidden"  id="default-search"  value="荣耀6">
				</form>
				<!-----------搜索条------------------->
			</div>
		</div>
		<script type="text/javascript">
		   $(function(){
		  
		      var url="<?php echo U('Search/index');?>";
			 
			  $("#submit_go").click(function(){
			     
			      var search_kw=$("#search_kw").val();
				     
				  if(search_kw.length==0){
				       alert('搜索关键字不能为空');
				  
				  }else{
				     window.location.href=url+'?keywords='+search_kw;
				  
				  }
			  
			  
			  
			  
			  });
			  
		   
		   
		   
		   
		   
		   
		   
		   
		   });
		
		
		
		</script>
		
		
		
		<div  class="header-toolbar">
			
			<div  class="header-toolbar-item"  id="header-toolbar-imall">
				
				<div  class="i-mall">
				     <!------------自己的商城---------------->
					<div  class="h"><a  href="<?php echo U('Memeber/index');?>"  rel="nofollow"  timetype="timestamp">我的商城</a>
					
					<i></i><s></s><u></u></div>
					  <!---------登录注册--------------------->
					<div  class="b"  id="header-toolbar-imall-content">
						<div  class="i-mall-prompt"  id="cart_unlogin_info" style="display:block;">
							<p>你好，请&nbsp;&nbsp;<a  href="<?php echo U('Login/index');?>"  rel="nofollow">登录</a> / <a  href="<?php echo U('Sign/index');?>"  rel="nofollow">注册</a></p>
							
						  
						</div>
						<div class="i-mall-prompt" id="cart_login_info" style="display:none">
							<p><a href="<?php echo U('Member/index');?>" id="cart_memeber"></a><em class="vip-state" id="vip-info">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Member/index');?>" title="VMALL V0会员" id="vip-Active"><i class="icon-vip-level-0"></i></a></em></p>
						</div>
						 <!---------登录注册--------------------->
						<div  class="i-mall-uc "  id="cart_nlogin_info">
							<ul>
							     <!-----------代付款和-------------->
								<li><a  href="<?php echo U('OrderCenter/index');?>"  timetype="timestamp">待付款</a><span  id="toolbar-orderWaitingHandleCount">0</span></li>
								<li><a  href="<?php echo U('OrderCenter/index');?>"  timetype="timestamp">待评论</a><span  id="toolbar-notRemarkCount">0</span></li>
								<!------------代付款------------>
							</ul>
						</div>
						
						
						<div  class="i-mall-uc ">
							<p><br></p>
						</div>
					</div>
				</div>
			</div>
<script type="text/javascript">
    $(function(){
	     
	    $.ajax({
		     url:"<?php echo U('SmallCat/myShop');?>",
			 type:'POST',
			 dataType:'json',
			 success:function(responseText,status,xhr){
			    
			      if(status=='success'){
				      
				     if(responseText.login_status==1){
					   
					     $("#cart_login_info").show();
					     $("#cart_unlogin_info").hide();
					     var user_name=responseText.user_name;
						 $("#cart_login_info #cart_memeber").html(responseText.user_name);
						  //计算用户的级别
						 var ico_user_level="icon-vip-level-0";
						 switch(responseText.user_level){
						     case 5: ico_user_level="icon-vip-level-5";break;
						     case 4: ico_user_level="icon-vip-level-4";break;
						     case 3: ico_user_level="icon-vip-level-3";break;
						     case 2: ico_user_level="icon-vip-level-2";break;
						     case 1: ico_user_level="icon-vip-level-1";break;
						     case 0: ico_user_level="icon-vip-level-0";break;
							 default:ico_user_level="icon-vip-level-0";
						 }
						 $("#cart_login_info #vip-Active").find('i').addClass('ico_user_level');
						 $("#toolbar-orderWaitingHandleCount").html(responseText.unpay_count);
						  $("#toolbar-notRemarkCount").html(responseText.uncomment_count);
						 
					 }else{
					     $("#cart_unlogin_info").show();
					     $("#cart_login_info").hide();
					 }
				  }else{
				      $("#cart_unlogin_info").show();
					  $("#cart_login_info").hide();
				  
				  }
			 
			 },
			 
			 error:function(){
			       $("#cart_unlogin_info").show();
				   $("#cart_login_info").hide();
			 },
			 
			 timeout:60*1000,
		
		
		
		
		
		
		});
	
	
	
	
	
	
	
	}); 




</script>
			
			
			       <!--------------购物车的商品--------------------->
			<div  class="header-toolbar-item"  id="header-toolbar-minicart">
				
				<div class="minicart">
					<div class="h" id="header-toolbar-minicart-h"><a href="<?php echo U('Cart/index');?>" rel="nofollow" timetype="timestamp">我的购物车<span><em id="header-cart-total">0</em><b></b></span></a><i></i><s></s><u></u></div>
					    <div style="display:block;" class="b" id="header-toolbar-minicart-content">
						<div style="display:block;" class="minicart-pro-empty" id="minicart-pro-empty">
							<span class="icon-minicart">您的购物车是空的，赶紧选购吧！</span>
						</div>
						
						<div style="display:none;" id="minicart-pro-list-block">
						<ul class="minicart-pro-list" id="minicart-pro-list"><!--microCartList start-->
						<!--microCartList end-->
						</ul>
						</div>
						<div style="display:none;" class="minicart-pro-settleup" id="minicart-pro-settleup">
							<p>共<em id="micro-cart-total">1</em>件商品</p>
							<p>共计<b id="micro-cart-totalPrice">¥&nbsp;<span>2888.00<span></b></p>
							<a class="button-minicart-settleup" href="<?php echo U('Cart/index');?>">去结算</a>
						</div>
						
					</div>
				</div>
			</div>
<script type="text/javascript">
 //购物进行ajax处理
 $(function(){
         //鼠标移入移除事件
	  $("#header-toolbar-minicart-content").hide();
	 $("#header-toolbar-minicart-h").hover(function(){
	      $("#header-toolbar-minicart-content").show();
	 
	 },function(){
	      $("#header-toolbar-minicart-content").hide();
	 });
	 
	  $("#header-toolbar-minicart-content").hover(function(){
	         $(this).show();
	  
	  },function(){
	        $(this).hide();
	  });

     
	  //ajax查询数量和商品
	  
	  do_cat();
	  
function do_cat(){
	 $.ajax({
	     
		 url:"<?php echo U('SmallCat/myGoods');?>",
		 type:'GET',
		 dataType:'json',
		 success:function(responseText,status,xhr){
		     if(status=="success"){
			     if(responseText.cat_status==1){
				     $("#header-cart-total").html(responseText.content.total_nums);
					 $("#minicart-pro-empty").hide();
					 $("#minicart-pro-list-block").show();
					 $("#minicart-pro-list-block #minicart-pro-list").html(responseText.info);
					 $("#minicart-pro-settleup").show();
					 $("#minicart-pro-settleup #micro-cart-total").html(responseText.content.total_nums);
					 $("#minicart-pro-settleup #micro-cart-totalPrice").find('span').html(responseText.content.total_price.toFixed(2));
					 
				 }else{
				  $("#header-cart-total").html('0');
			      $("#minicart-pro-list-block").hide();
			      $("#minicart-pro-settleup").hide();
			      $("#minicart-pro-empty").show();
				 
				 }
			 
			 }else{
			  $("#header-cart-total").html('0');
			  $("#minicart-pro-list-block").hide();
			  $("#minicart-pro-settleup").hide();
			  $("#minicart-pro-empty").show();
			 
			 }
		   
		 },
		 error:function(){
		     $("#header-cart-total").html('0');
			 $("#minicart-pro-list-block").hide();
			 $("#minicart-pro-settleup").hide();
			 $("#minicart-pro-empty").show();
		 },
		 timeout:60*1000,
	 
	 
	 
	 
	 
	 
	 
	 });
 
} 

 //事件委托的形式添加事件

$("#minicart-pro-list").on('click',".icon-minicart-del",function(){
      var goods_id=$(this).next('input').val();
	  var parent_li=$(this).closest('li');
	    //ajax的形式删除元素
	  $.ajax({
	     url:"<?php echo U('SmallCat/delGoods');?>",
		 type:'POST',
		 data:{
		    'goods_id':goods_id,
		 },
		 dataType:'json',
		 success:function(responseText,status,xhr){
		     if(status=='success'){
			      //返回1 说明session 中删除成功!
			     if(responseText.del_status==1){
				    
					    //删除此条信息
					   
					  parent_li.remove();
					   //修改金额和总数量
					  $("#header-cart-total").html(responseText.total_num);
					  $("#minicart-pro-settleup #micro-cart-total").html(responseText.total_num);
					   $("#minicart-pro-settleup #micro-cart-totalPrice").find('span').html(responseText.total_money.toFixed(2));
	                 var lis=$("#minicart-pro-list li").size();
					 
					 if(lis<=0){
					   $("#header-cart-total").html('0');
			           $("#minicart-pro-list-block").hide();
			           $("#minicart-pro-settleup").hide();
			           $("#minicart-pro-empty").show();
					 
					 }else{
					 
					 
					 }
					
				 
				 }
			 }
		 
		 }
		 
	  
	  
	  
	  });
	  
});
 
 
 
 
 
 });
 




</script>			
			 <!--------------购物车的商品--------------------->
			
		</div>
	</div>			
</header>
<!--------2-搜索条部分---------------------------------------------------------------->

<!----------------------3-----导航条部分----------------------------------------------->

<textarea  id="micro-cart-tpl"  class="hide">
</textarea>




<!-- 头部 -->

<!-- 导航 -->
﻿<!-----------------折叠-导航条---------------------------->
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
<div  class="naver-main">
	<div  class="layout">
		
		<div  class="category"  id="category-block">
			
			<div  class="h"  id="category-h">
				<h2>全部商品</h2>
				<i  class="icon-category"  id="category-icon"></i>
			</div>
			<div  class="b"  id="category-list">
				<ul>
					  <li>
							<h3><a  href="http://www.vmall.com/list-1"><span>手机
														</span></a></h3>
								<a  href="http://www.vmall.com/list-1#2"><span>手机
																</span></a>
								<a  href="http://www.vmall.com/list-1#5"><span>配件
																</span></a>
						</li>
						<li  class="odd">
							<h3><a  href="http://www.vmall.com/list-27"><span>运营商
														</span></a></h3>
								<a  href="http://www.vmall.com/list-27#29"><span>购机送费
																</span></a>
								<a  href="http://www.vmall.com/list-27#28"><span>选号入网
																</span></a>
								<a  href="http://www.vmall.com/list-27#33"><span>上网卡
																</span></a>
						</li>
						<li>
							<h3><a  href="http://www.vmall.com/list-9"><span>平板电脑
														</span></a></h3>
								<a  href="http://www.vmall.com/list-9#10"><span>平板电脑
																</span></a>
								<a  href="http://www.vmall.com/list-9#11"><span>配件
																</span></a>
						</li>
						<li  class="odd">
							<h3><a  href="http://www.vmall.com/list-6"><span>宽带网络
														</span></a></h3>
								<a  href="http://www.vmall.com/list-6#7"><span>移动网络
																</span></a>
								<a  href="http://www.vmall.com/list-6#8"><span>家庭网络
																</span></a>
						</li>
						<li>
							<h3><a  href="http://www.vmall.com/list-12"><span>增值服务
														</span></a></h3>
								<a  href="http://www.vmall.com/list-12#30"><span>华为秘盒
																</span></a>
								<a  href="http://www.vmall.com/list-12#35"><span>服务
																</span></a>
								<a  href="http://www.vmall.com/list-12#14"><span>配件
																</span></a>
						</li>
					<li  class="odd">
						<h3><a  href="http://app.vmall.com/"  target="_blank"><span>应用市场</span></a></h3>
						<a  href="http://app.vmall.com/game/list"  target="_blank"><span>手机游戏</span></a>
						<a  href="http://app.vmall.com/"  target="_blank"><span>手机应用</span></a>
					</li>
				</ul>
			</div>

		</div>
<script type="text/javascript">
   $(function(){
       $.ajax({
	      'url':"<?php echo U('Category/index');?>",
		  'type':'GET',
		  'success':function(responseText,status,xhr){
		     if(status=='success'){
			     $("#category-list").find('ul').html(responseText);
				 $("#category-list ul li:odd").addClass('odd');
			 }else{
			     window.location.reload();
			 }
		  
		  }
	   
	   
	   
	   
	   });
   
   
   
   
   
   });
</script>	
		 <!-------------导航条---------------->
		<nav  class="naver">
				<ul  id="naver-list">
			<li  id="index"><a  href="<?php echo U('Index/index');?>"  class="current"><span>首 页
					</span></a>
					</li>
		<li  id="nav-sale"><a  href="<?php echo U('Product/index',array('g'=>2));?>"  target="_blank"><span>荣耀6
			<s><img  src="/vmallshop/Public/Images/new.png"  alt="new"></s>
		</span></a> </li>
					
		<li  id="club"><a   href="<?php echo U('Product/index',array('g'=>1));?>"  ><span>华为P7
					</span></a> </li>
		<li  class=""><a  href="javascript:return false;"><span>精彩频道</span></a>
			
		</li>
</ul>
		</nav><!-- 20130909-导航-end -->
	</div>
</div>
<!-------------导航条---------------->
<script>
    
	$(function () {
		$('#naver-list li').hover(function () {
			$(this).addClass('hover');
		},function () {
			$(this).removeClass('hover');
		});
	});
	
	
</script>
			
		</nav>
	</div>
</div>
<script>
(function () {
	//所有分类显示隐藏控制
	var isIndex =  false,
		categoryBlock = gid('category-block');
		
	if(isIndex) return;

	categoryBlock.onmouseover = function () {
		categoryBlock.className = 'category category-hove';
	};
	categoryBlock.onmouseout = function () {
		categoryBlock.className = 'category';
	};
	
}());
$(function () {
	//分类间隔背景色
	$('#category-list li:odd').addClass('odd');
	$('#category-list li a').click(function () {
		setTimeout(function () {
			var id = location.hash.split("#", 2)[1];
			if(id)return ec.product.showCategory(gid('pro-cate-'+ id) , id);
		}, 200);
		
	});
});
</script>
<script>
(function(){
	var n = $("#nav-1");
	n.children("a").addClass("current");
	n.siblings().children("a").removeClass("current");
})();
</script>
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
	<div class="breadcrumb-area icon-breadcrumb fcn">您最近的位置：<a href="#" title="首页">首页</a>&nbsp;>&nbsp;<a href="#" title="帮助中心">帮助中心</a>&nbsp;>&nbsp;<b>注册协议</b></div>
</div>
<div class="hr-15"></div>
<div class="g">
    <div class="fr u-4-5">
    	
        <!--帮助中心-内容 -->
        <div class="help-detail-area">
			<div class="h">
				<h3>注册协议</h3>
			</div>
        	<div class="b"><h4>注册协议</h4>

<p>华为商城的所有者和运营者是华为软件技术有限公司。本协议是您与华为商城网站（以下简称"本站"，网址：<a title="华为商城" target="_blank" href="javascript:if(confirm('http://www.vmall.com/  \n\n�ļ���δ�� Teleport Pro ȡ�أ���Ϊ �������·��������ʼ��ַ�����õķ�Χ��  \n\n��Ҫ�ӷ������ϴ�����'))window.location='http://www.vmall.com/'" tppabs="http://www.vmall.com/">www.vmall.com</a>）之间就本站服务等相关事宜所订立的契约，请您仔细阅读本注册协议，您注册时点击同意本协议，并提交注册信息后，即表示用户与华为商城已达成协议，自愿接受本注册协议的所有内容，本协议即构成对双方有约束力的法律文件。</p>

<p><b>一、服务条款的确认和接纳</b>  </p>

<p>1.华为商城网站的各项电子服务的所有权和运作权归华为软件技术有限公司拥有。用户同意所有注册协议并完成注册程序，才能成为华为商城网站的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定。</p>


<p>2.用户点击同意本协议并完成注册程序的，或以任何行为实际使用、享受本站的服务，即视为用户确认自己具有享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。如用户不同意本服务条款的条件，则不能使用vmall.com服务以及注册成为华为商城用户。</p>


<p>3.华为商城服务仅供依法能够且有权订立具有法律约束力合约的自然人、法人及非法人组织使用。因此，用户应为具备完全民事行为能力的自然人，或依法成立、存续的法人或非法人组织。用户违反本项条件，本站可随时、全权决定拒绝向其提供服务，若因此给"华为商城"或第三方造成损失，用户承担全部赔偿责任。如果您在18周岁以下，您只能在父母或监护人的监护参与下才能使用本站。</p>


<p>4.华为商城运用自己的操作系统通过国际互联网络为用户提供各项网络服务。用户在完全同意本协议及本站的规定的情况下，方有权使用本站提供的相关服务。同时，用户必须自行准备如下设备和承担如下开支：上网设备，包括并不限于电脑或者其他上网终端、调制解调器及其他必备的上网装置；个人上网所支付的与此服务有关各项费用，包括并不限于网络接入费、上网设备租用费、手机流量费等。</p>

<p>5.用户应自行诚信向"华为商城"提供注册资料，并同意其提供的注册资料及时、详尽、准确、完整、合法有效；用户注册资料如有变动的，应及时更新其注册资料。如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果，并且"华为商城"保留终止用户使用"华为商城"各项服务的权利。</p>

<p>6. 用户在本站进行浏览、下单购物等活动时，涉及用户真实姓名/名称、通信地址、联系电话、电子邮箱等隐私信息的，本站将予以严格保密，除非得到用户的授权或法律另有规定，本站不会向外界披露用户隐私信息。</p>

<p>7．用户在享用"华为商城"各项服务的同时，同意接受华为软件技术有限公司提供的各类信息服务，这些信息所涉及的内容包括以文字、图片、照片、音视频形式表现的各类订单信息、宣传信息、促销信息、商业信息以及华为软件技术有限公司合作伙伴信息，该类信息的提供方式包括但不限于电子邮件、短信息。用户在"华为商城"注册或实际使用"华为商城"的服务，即表明用户已同意接受此项服务。若用户不希望接收来自"华为商城"的邮件，则可通过回复邮件的方式按照提示自助完成退订；若用户不希望接收来自"华为商城"的短信，则可联系"华为商城"客户服务部协助处理。</p>

<p>8.禁止任何商业目的的注册和购买。"华为商城"鼓励以使用为目的购买华为产品，但禁止一切商业目的和商业行为，若用户利用"华为商城"的服务、产品、活动从事任何以商业为目的的行为，华为软件技术有限公司有权采取取消订单、冻结或关闭账户、永久禁止注册等措施，给华为软件技术有限公司造成损失的，用户承担赔偿责任，构成犯罪的，华为软件技术有限公司有权提请国家主管部门追究其行政和刑事责任。</p>

<p>9.除非法律规定或者"华为商城"明确承诺，"华为商城"将不对所提供的商品的适用性或满足用户特定需求及目的进行任何明示或者默示的担保。请在购买前确认自身的需求，同时仔细阅读商品说明。</p>

<p>10.华为商城保留在中华人民共和国大陆地区法施行之法律允许的范围内独自决定拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。</p>

<p><b>二、用户使用基本规则</b></p>

<p>1.特别提示用户，使用互联网必须遵守国家有关的政策和法律，包括刑法、国家安全法、保密法、计算机信息系统安全保护条例等，保护国家利益，保护国家安全，对于违法使用互联网络而引起的一切责任，由用户负全部责任。</p>

<p>2.用户在申请使用"华为商城"提供的网络服务时，必须向华为软件技术有限公司提供准确的个人资料，如个人资料有任何变动，必须及时更新。如有合理理由怀疑用户提供的资料错误、不实、失效或不完整的，"华为商城"有权向用户发出询问及或要求改正的通知，并有权直接做出删除相应资料的处理，直至中止、终止对用户提供部分或全部服务。"华为商城"对此不承担任何责任，用户将承担因此产生的任何直接或间接支出。</p>

<p>3.用户可以发表评论等信息，但不得使用"华为商城"服务发送或传播敏感信息和违反国家法律法规政策的信息，此类信息包括但不限于：</p>
<ul>
<li>（1）反对宪法所确定的基本原则的；</li>
<li>（2）危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</li>
<li>（3）损害国家荣誉和利益的；</li>
<li>（4）煽动民族仇恨、民族歧视，破坏民族团结的；</li>
<li>（5）破坏国家宗教政策，宣扬邪教和封建迷信的；</li>
<li>（6）散布谣言，扰乱社会秩序，破坏社会稳定的；</li>
<li>（7）散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</li>
<li>（8）侮辱或者诽谤他人，侵害他人合法权益的；</li>
<li>（9）含有法律、行政法规禁止的其他内容的。</li>
</ul>

<p>用户在发表评论等信息及使用"华为商城"服务过程中，还必须严格遵守以下原则和义务：</p>

<ul>
<li>（1）遵守中国有关的法律和法规；</li>
<li>（2）不得为任何非法目的而使用网络服务系统，遵守所有与网络服务有关的网络协议、规定和程序；不得利用"华为商城"网络服务系统进行任何可能对互联网的正常运转造成不利影响的行为；</li>
<li>（3）不得进行任何未经"华为商城"许可的商业广告行为；不得对"华为商城"上的任何数据作商业性利用，包括但不限于在未经"华为商城"事先书面同意的情况下，以复制、传播等任何方式使用"华为商城"上展示的资料；</li>
<li>（4）不得使用虚假、冒充他人或其他方的信息注册"华为商城"后发布评论或其他内容；不得以虚构或歪曲事实的方式不当评价其他会员，不得采取不正当方式制造或提高自身的信用度，不得采取不正当方式制造或提高（降低）其他会员的信用度；</li>
<li>（5）不得使用任何装置、软件或例行程序干预或试图干预"华为商城"的正常运作或正在"华为商城"上进行的任何交易、活动；不得采取任何将导致不合理的庞大数据负载加诸"华为商城"网络设备的行动；</li>
<li>（6）不得利用网络服务进行任何不利于华为软件技术有限公司或"华为商城"的行为。</li>
</ul>

<p>4.用户一旦接受本协议，即表明该用户主动将其在任何时间段在本站发表的任何形式的信息内容（包括但不限于客户评价、客户咨询、各类话题文章等信息内容）的财产性权利等任何可转让的权利，如著作权财产权（包括并不限于：复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、摄制权、改编权、翻译权、汇编权以及应当由著作权人享有的其他可转让权利），全部独家且不可撤销地转让给华为商城所有，用户同意华为商城有权就任何主体侵权而单独提起诉讼。</p>

<p>5.用户享有检举权，用户在使用"华为商城"服务过程中若发现违法、违规、侵权或其他任何违反本服务条款的行为，有权通过专门的客服途径向华为软件技术有限公司进行检举，华为软件技术有限公司将通过对检举内容的核实采取相应的措施。用户保证其检举事项的真实性、公正性，同时尊重华为软件技术有限公司对被检举事项的处置措施；被检举用户有权通过专门的客服途径进行辩解，但不影响华为软件技术有限公司先行采取相应措施，华为软件技术有限公司在接纳被检举用户的辩解后，将恢复对其的服务。华为软件技术有限公司将对用户检举进行保密。</p>
<p>6.用户违反本条"用户使用基本规则"，华为软件技术有限公司有权视情节的严重采取警告、限期改正、暂停服务、取消订单、禁止交易、封闭帐号、永久禁止注册等措施，给华为软件技术有限公司或第三方造成损失的，华为软件技术有限公司有权采取一切合法的诉讼与非诉手段进行索赔；用户行为构成犯罪的，华为软件技术有限公司有权通知和协助国家主管部门进行查处。</p>

<p><b>三、商品价格与数量</b></p>

<p>1.本站有权在发现了其网站上显现的产品及订单的明显错误或缺货的情况下，单方面撤回任何承诺。同时，本站保留对产品订购数量的限制权。</p>

<p>2.如果发生了意外情况，在确认了您的订单后，由于成本提高，税额变化引起的价格变化，或是由于网站的错误等造成商品价格变化，您有权取消您的订单，并希望您能及时通过电子邮件或电话通知本站客户服务部。</p>

<p>3.您所订购的商品，如果发生缺货，您有权取消定单。</p>
<p>4.本站上的商品价格、数量、是否有货等商品信息随时都有可能发生变动，本站不作特别通知。由于网站上商品信息的数量极其庞大，虽然本站会尽最大努力保证您所浏览商品信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，本站网页显示的信息可能会有一定的滞后性或差错，对此情形请您知悉并理解；华为商城欢迎纠错，并会视情况给予纠错者一定的奖励。</p>

<p><b>四、订单</b></p>

<p>1.在您下订单时，请您仔细确认所购商品的名称、价格、数量、型号、规格、尺寸、联系地址、电话、收货人等信息。收货人与用户本人不一致的，收货人的行为和意思即视为用户的行为和意思，用户应对收货人的行为及意思的法律后果承担连带责任。</p>

<p>2.除法律另有强制性规定外，双方约定如下：本站上所展示的商品和价格等信息仅仅是对该商品展示及对您购买的邀请，您下单时须填写您希望购买的商品数量、价格及支付方式、收货人、联系方式、收货地址（合同履行地点）、合同履行方式等内容；系统生成的订单信息是计算机信息系统根据您填写的内容自动生成的数据，仅是您向华为商城发出的合同要约；华为商城收到您的订单信息后，只有在华为商城将您在订单中订购的商品从仓库实际直接向您发出时（ 以商品出库为标志），方视为您与华为商城之间就实际直接向您发出的商品建立了合同关系；如果您在一份订单里订购了多种商品并且华为商城只给您发出了部分商品时，您与华为商城之间仅就实际直接向您发出的商品建立了合同关系；只有在华为商城实际直接向您发出了订单中订购的其他商品时，您和华为商城之间就该订单中其他已实际直接向您发出的商品才成立合同关系。您可以随时登陆您在华为商城注册的账户，查询您的订单状态。</p>

<p>3.由于市场变化及各种以合理商业努力难以控制的因素的影响，华为商城无法保证您提交的订单信息中希望购买的商品都会有货；如您预购买的商品，发生缺货，您有权取消订单。</p>

<p><b>五、配送</b></p>

<p>1.华为商城将会把商品（货物）送到您所指定的收货地址，所有在华为商城上列出的送货时间为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。</p>

<p>2.因如下情况造成订单延迟或无法配送等，销售方不承担延迟配送的责任：</p>
<ul>

<li>（1）用户提供的信息错误、地址不详细等原因导致的；</li>
<li>（2）货物送达后无人签收，导致无法配送或延迟配送的；</li>
<li>（3）情势变更因素导致的；</li>
<li>（4）不可抗力因素导致的，例如：自然灾害、交通戒严、突发战争等。</li>
</ul>

<p><b>六、服务条款的修改</b></p>
<p>根据国家法律法规变化及网站运营需要，华为商城有权对本协议条款不时地进行修改，修改后的协议一旦被张贴在本站上即生效，并代替原来的协议。用户可随时登陆查阅最新协议；用户有义务不时关注并阅读最新版的协议及网站公告。如用户不同意更新后的协议，可以且应立即停止接受华为商城网站依据本协议提供的服务；如用户继续使用本网站提供的服务的，即视为同意更新后的协议。本站建议您在使用本站之前阅读本协议及本站的公告。 如果本协议中任何一条被视为废止、无效或因任何理由不可执行，该条应视为可分的且并不影响任何其余条款的有效性和可执行性。</p>

<p><b>七、服务修订</b></p>
<p>华为商城保留随时修改或中断服务而不知会用户的权利。华为商城行使修改或中断服务的权利，不需对用户或第三方负责。</p>

<p><b>八、用户隐私制度</b></p>

<p>用户在本站进行浏览、下单购物等活动时，涉及用户真实姓名/名称、通信地址、联系电话、电子邮箱等隐私信息的，华为商城将予以严格保密，除非得到用户的授权或法律另有规定，华为商城不会向外界披露用户隐私信息。</p>
<p>除非：</p>
<ul>
<li>（1）用户特别要求华为商城或授权某人通过电子邮件服务透露这些信息；</li>
<li>（2）相应的法律及程序要求华为商城提供用户的个人资料。如果用户提供的资料不准确，华为商城有保留结束用户华为商城会员资格的权利。</li>
</ul>
<p>尊重用户个人隐私是华为商城的一项基本政策，所以，作为对以上个人注册资料分析的补充，华为商城一定不会在未经合法用户授权时公开、编辑或透露其注册资料及保存在华为商城中的非公开内容，除非法律许可要求或华为商城在诚信的基础上认为透露这些内容在以下四种情况下是必要的：</p>
<ul>
<li>（1）遵守有关法律规定，遵从合法服务程序；</li>
<li>（2）保持维护华为商城的商标所有权；</li>
<li>（3）在紧急情况下竭力维护用户个人和社会大众的隐私安全；</li>
<li>（4）符合其他相关的要求。</li>

</ul>
<p><b>九、用户的帐号、密码和安全性</b>   </p>

<p>一旦成功注册成为华为商城会员，成为华为商城合法用户，您将得到一个密码和用户名。用户将对用户名和密码的安全负全部责任。另外，每个用户都要对以其用户名进行的所有活动和事件负全责。您可以随时根据指示改变您的密码。用户若发现任何非法使用用户帐号或存在安全漏洞的情况，请立即通告华为商城。为保护您的个人权益，请勿使用重复性或者连续数字的简单密码，请勿将密码告知他人，如因密码保管不善造成的经济损失由用户个人承担。</p>
<p><b>用户帐号限制</b></p>
<ul>
<li>（1）本站帐号的所有权归华为所有，您完成申请注册手续后，获得本站帐号的使用权，该使用权仅属于初始申请注册人，禁止申请注册人赠与、借用、租用、转让或售卖帐号。华为因经营需要，有权回收用户的帐号；</li>
<li>（2）您有权更改、删除在本网站上的个人资料、注册信息及发布内容等，但需注意，删除以上信息的同时也会删除任何您储存在系统中的文字和图片。用户删除个人资料、注册信息及发布内容造成的后果由用户自行承担；</li>
<li>（3）您有责任妥善保管注册帐号信息及帐号密码的安全，您需要对注册帐号以及密码下的行为承担法律责任。您同意在任何情况下不使用其他成员的帐号或密码。在您怀疑他人在使用您的帐号或密码时，您同意立即通知华为。</li>
<li>（4）用户不得将在本站注册获得的帐号借用、租用、转让或销售给他人使用，否则用户应承担由此产生的全部责任，并与实际使用人承担连带责任。</li>
<li>（5）用户同意，在法律允许的范围内，华为有权使用用户的注册信息、用户名、密码等信息，登陆进入用户的注册帐号，进行证据保全。</li>
<li>（6）用户不得利用在本站注册的帐号进行牟利性经营活动，如用户违反本约定，华为有权作出独立判断并采取暂停或关闭用户帐号等措施。</li>
</ul>

<p><b>十、拒绝提供担保</b></p>

<p>用户明确同意信息服务的使用由用户个人承担风险。除非另有明确的书面说明,华为商城不对本站的运营及其包含在本网站上的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保（根据中华人民共和国法律另有规定的以外）。华为商城不担保服务一定满足会员的要求，也不担保服务不会受中断，对服务的及时性、安全性、出错发生都不作担保。会员理解并接受：任何通过华为商城上商城服务取得的信息资料的可靠性取决于用户自己，用户自己承担所有风险和责任。</p>

<p><b>十一、有限责任</b></p>

<p>"华为商城"为用户提供合法的、健康的产品及服务，但是用户应对其使用"华为商城"自行承担责任及风险，华为软件技术有限公司在任何情况下不就因使用或不能使用"华为商城"提供的服务所发生的特殊的、意外的、直接或间接的损失承担赔偿责任。华为商城对任何直接、间接、偶然及继起的损害不负责任，这些损害来自：不正当使用华为商城服务，或用户传送的信息不符合规定等。这些行为都有可能导致华为商城的形象受损，所以华为商城事先提出这种损害的可能性。</p>
<p>本站的全部责任，不论是合同、保证、侵权（包括过失）项下的还是其他责任，均不会超过您所购买的商品价格。</p>

<p><b>十二、对用户信息的存储和限制</b>   </p>

<p>华为商城不对用户发布信息的删除或储存失败负责，华为商城有判定用户的行为是否符合华为商城服务条款的要求和精神的保留权利。如果用户违背了服务条款的规定，华为商城有中断对其提供服务的权利。</p>

<p><b>十三、用户管理</b>   </p>

<p>用户必须遵循：</p>
<ul>
<li>（1）从中国境内向外传输技术性资料时必须符合中国有关法规；</li>
<li>（2）使用信息服务不作非法用途；</li>
<li>（3）不干扰或混乱网络服务；</li>
<li>（4）遵守所有使用服务的网络协议、规定、程序和惯例。用户的行为准则是以因特网法规，政策、程序和惯例为根据的。</li>
</ul>
<p><b>十四、保障</b>   </p>

<p>用户同意保障和维护华为商城全体成员的利益，负责支付由用户使用超出服务范围引起的律师费用，违反服务条款的损害补偿费用，其它人使用用户的电脑、帐号和其它知识产权的追索费。</p>

<p><b>十五、结束服务</b>   </p>

<p>用户或华为商城可随时根据实际情况中断一项或多项服务。华为商城不需对任何个人或第三方负责而随时中断服务。用户若反对任何服务条款的建议或对后来的条款修改有异议，或对华为商城服务不满，用户可以行使如下权利：</p>
<ul>
<li>（1）不再使用华为商城信息服务；</li>

<li>（2）通知华为商城停止对该用户的服务。</li>
</ul>
<p>结束用户服务后，用户使用华为商城服务的权利马上终止。从那时起，用户没有权利，华为商城也没有义务传送任何未处理的信息或未完成的服务给用户或第三方。</p>

<p><b>十六、通告</b>   </p>
<p>所有发给用户的通告都可通过重要页面的公告或电子邮件或常规的信件传送。服务条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。</p>

<p><b>十七、信息内容的所有权</b>   </p>
<p>华为商城定义的信息内容包括：文字、软件、声音、相片、录象、图表；在广告中全部内容；华为商城为用户提供的其它信息。所有这些内容受版权、商标、标签和其它财产所有权法律的保护。所以，用户只能在华为商城和广告商授权下才能使用这些内容，而不能擅自复制、再造这些内容、或创造与内容有关的派生产品 。</p>

<p><b>十八、法律</b>   </p>
<p>华为商城信息服务条款要与中华人民共和国的法律解释一致。用户和华为商城一致同意服从华为软件技术有限公司所在地有管辖权的法院管辖。如发生华为商城服务条款与中华人民共和国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它条款则依旧保持对用户的约束力。</p>

<p><b>十九、其他</b>   </p>
<p>用户在购物时，网站发送校验码到购物登记的手机号码、站内消息和订单中心，请妥善保管好校验码。因校验码泄密造成的后果，由下单人自己承担。</p>
<p>本协议内容请用户仔细阅读。另外,也请您仔细阅读并同意《售后服务条款》、《退换货返修政策》、《配送范围与方式》。</p>

<p>用户点击本协议上方的"同意以下协议，提交"按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。</p>

 
</div>
            <div class="f">
            	<b></b>
                <s></s>
            </div>
        </div>
    </div>
	<div class="fl u-1-5">
    	
<!--左边菜单-20121024 -->
<div class="help-menu-area">
    <div class="b">
        <ul>
			<li><h3>购物指南</h3>
            	<ol>
                	
                    <li id="help_buy"><a href="/vmallshop/index.php/Home/help/buy"  title="如何购买"><span>如何购买</span></a></li>
                    <li id="help_buyContract"><a href="/vmallshop/index.php/Home/help/buyContract"  title="合约机"><span>合约机</span></a></li>
                </ol>
            </li>
        	<li><h3>账户管理</h3>
            	<ol>
                    <li id="help_regForget"><a href="/vmallshop/index.php/Home/help/regForget" title="找回密码"><span>找回密码</span></a></li>
                    <li id="help_regAgreement"><a href="/vmallshop/index.php/Home/help/regAgreement"  title="注册协议"><span>注册协议</span></a></li>
					<li id="help_index"><a href="/vmallshop/index.php/Home/help/index" tppabs="index" title="注册"><span>注册</span></a></li>
                </ol>
            </li>
            <li><h3>订单操作</h3>
            	<ol>
					<li id="help_orderDel"><a href="/vmallshop/index.php/Home/help/orderDel"  title="取消订单"><span>取消订单</span></a></li>
                	<li id="help_order"><a href="/vmallshop/index.php/Home/help/order"  title="查询订单"><span>查询订单</span></a></li>
                   
                </ol>
            </li>
            <li><h3>配送方式</h3>
            	<ol>
                	<li id="help_delivery"><a href="/vmallshop/index.php/Home/help/delivery" title="第三方快递"><span>第三方快递</span></a></li>
                    <li id="help_deliverySelect"><a href="/vmallshop/index.php/Home/help/deliverySelect"  title="查询物流"><span>查询物流</span></a></li>
                </ol>
            </li>
            <li><h3>支付方式</h3>
            	<ol>
                	<li id="help_payment"><a href="/vmallshop/index.php/Home/help/payment"  title="网银支付"><span>网银支付</span></a></li>
                    <li id="help_paymentHDFK"><a href="/vmallshop/index.php/Home/help/paymentHDFK"  title="货到付款"><span>货到付款</span></a></li>
                </ol>
            <li><h3>关于商城</h3>
            	<ol>
                	<li id="help_company"><a href="/vmallshop/index.php/Home/help/company"  title="公司介绍"><span>公司介绍</span></a></li>
                    <li id="help_bd"><a href="/vmallshop/index.php/Home/help/bd"  title="商务合作"><span>商务合作</span></a></li>
                </ol>
            </li>
        </ul>
    </div> 
</div><!--左边菜单-end -->



    </div>
</div>
<div class="hr-60"></div>
<!--口号-20121025 -->

<!--口号-20121025 -->

<div class="slogan">
	<ul>
		<li class="s1"><i></i>500强企业&nbsp;品质保证</li>
		<li class="s2"><i></i>7天退货&nbsp;15天换货</li>
		<li class="s3"><i></i>200元起免运费</li>
		<li class="s4"><i></i>448家维修网点&nbsp;全国联保</li>
	</ul>
</div><!--口号-end -->
<!--服务-20121025 -->
<div class="service">
		<dl class="s1">
			<dt><i></i>帮助中心</dt>
			<dd>
				<ol>        
					<li><a   href="javascript:void(0)">购物指南</a></li>
					<li><a   href="javascript:void(0)">配送方式</a></li>
					<li><a   href="javascript:void(0)">支付方式</a></li>
					<li><a   href="javascript:void(0)">常见问题</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s2">
			<dt><i></i>售后服务</dt>
			<dd>
				<ol>
					<li><a target="_blank" href="javascript:void(0)">保修政策</a></li>
					<li><a target="_blank" href="javascript:void(0)">退换货政策</a></li>
					<li><a target="_blank" href="javascript:void(0)">退换货流程</a></li>
					<li><a target="_blank" href="javascript:void(0)">手机寄修服务</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s3">
			<dt><i></i>技术支持</dt>
			<dd>
				<ol>        
					<li><a   href="javascript:void(0)">售后网点</a></li>
					<li><a   href="javascript:void(0)">常见问题</a></li>
					<li><a   href="javascript:void(0)">产品手册</a></li>
					<li><a   href="javascript:void(0)">软件下载</a></li>
				</ol>       
			</dd>
		</dl>
		<dl class="s4">
			<dt><i></i>关于商城</dt>
			<dd>
				<ol>
					<li><a   href="javascript:void(0)">公司介绍</a></li>
					<li><a   href="javascript:void(0)">华为商城简介</a></li>
					<li><a   href="javascript:void(0)">联系客服</a></li>
					<li><a   href="javascript:void(0)">商务合作</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s5">
			<dt><i></i>关注我们</dt>
			<dd>
				<ol>
					<li><a class="sina" href="javascript:void(0)" target="_blank">新浪微博</a></li>
					<li><a class="qq" href="javascript:void(0)" target="_blank">腾讯微博</a></li>
					<li><a class="huafen" href="javascript:void(0)" target="_blank">花粉社区</a></li>
					<li><a href="javascript:void(0)" >商城手机版</a></li>
				</ol>
			</dd>
		</dl>
</div>
<!--服务-end -->

<!--确认对话框-->
<div id="ec_ui_confirm" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_confirm_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes" title="是"><span>是</span></a><a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no" title="否"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--提示对话框-->
<div id="ec_ui_tips" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_tips_msg" class="tac"></p>
        <div class="popup-button-area tac"><a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes" title="确定"><span>确定</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--在线客服-->
<div style="top: 230px; left: 1301px; z-index: 500; position: fixed;" class="hungBar" id="tools-nav">
	<a style="opacity: 1;" title="返回顶部" class="hungBar-top" href="#" id="hungBar-top">返回顶部</a>
	<a style="display: block;" id="tools-nav-survery" title="意见反馈" class="hungBar-feedback hide" href="javascript:;" >意见反馈</a>		
	
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
	<!--意见反馈box-- hide-->
	<div id="survery-box" class="form-feedback-area  hide">
		<div class="h">
			<a class="form-feedback-close" title="关闭" href="javascript:;"></a>
		</div>
		<div class="b">
				<div class="form-edit-area">
					<form onsubmit="return false;" autocomplete="off">
						<div class="form-edit-table">
							<table border="0" cellpadding="0" cellspacing="0">
								<tbody>
							    <tr>
                                    <td>
                                        <b>疑问类型：</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select id="type" name="type">
                                        	
                                          
                        
                                        </select>
                                    </td>
                                </tr>
								
								<tr>
									<td><b>您的问题或建议：</b><span id="errMsg" style="color:red;font-size:14px;"></span></td>
								</tr>
								<tr>
									<td><textarea class="textarea" type="textarea" name="content" id="surveryContent" placeholder="200字内"></textarea></td>
								</tr>
								<tr>
									<td>您的联系方式：</td>
								</tr>
								<tr>
									<td><input class="text" name="contact" id="surveryContact" type="text" placeholder="邮箱或手机号"></td>
								</tr>
								<tr>
									<td><div class="fl"><input name="code" id="surveryVerify" class="verify vam" maxlength="4" type="text">&nbsp;&nbsp;<img id="surveryVerifyImg" onclick="this.src=this.src+'?'+Math.random()" class="vam" alt="验证码" src="<?php echo U('Advice/verify');?>">&nbsp;&nbsp;&nbsp;&nbsp;<span class="vam"><a 
									 id="surveryVerify_do"  class="u" >看不清，换一张</a></span></div><div class="fr"><input value="提交" id="advice_submit" type="button"></div></td>
								</tr>
								</tbody>
							</table>
						</div>
					</form>
				</div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
      //用户意见提交的控制代码 曹建伟提供
    $(function(){
	      //控制验证码的更改
		  function changeImg(){
		     
			 $("#surveryVerifyImg").attr('src',function(i,v){
			      return v+'?='+Math.random();
			 });
		   
		  }
		  $("#surveryVerify_do").click(function(){
		       
		        changeImg();
		  
		  });
		 //控制窗口的显示
	    $("#tools-nav-survery").toggle(function(){
		     $("#survery-box").removeClass("hide");
			 changeImg();
		},function(){
		      $("#survery-box").addClass("hide");
			  changeImg();
		
		});
	    
		$(".form-feedback-close").click(function(){
		   
		      $("#survery-box").addClass("hide");
			  changeImg();
 
		});
		//获取疑问问题ajax的形式返回
		$.ajax({
		      url:"<?php echo U('Advice/makeCategory');?>",
			  type:"POST",
			  dataType:'json',
			  success:function(responseText,status,xhr){
			        if(status=='success'){
					    if(responseText.status==1){
						
						    $("#type").html(responseText.content);
						}
					}else{
					   alert("加载分类失败");
					}
			  },
			  error:function(){
			     alert("加载分类失败");
			  },
			  timeout:1000*60,
		     
		
		
		});
		
		
		var select=$("#type"); //选择类型
		var content=$("#surveryContent");//内容
		var connect=$("#surveryContact");//联系方式
		var code=$("#surveryVerify");//验证码
		var errMsg=$("#errMsg");
		$(select).focus(function(){
		     errMsg.html("");
		});
		$(content).focus(function(){
		     errMsg.html("");
		});
		$(connect).focus(function(){
		     errMsg.html("");
		});
		$(code).focus(function(){
		     errMsg.html("");
		});
		$("#advice_submit").click(function(){
		    //单击提交按钮进行数据判断
		 	
		     var select_val=select.val();
			 var content_val=content.val();
			 var connect_val=connect.val();
			 var code_val=code.val();
			
			 if(select_val<0){
			     errMsg.html("请选择疑问类型"); 
                
				 changeImg()
                  return;				 
			 }else if(content_val.length<1){
			    errMsg.html("请输入建议"); 
			  
				changeImg();
				return ;
			 }else if(connect.length<1){
			    errMsg.html("请输入联系方式"); 
				changeImg();
				
				 return;
			 }else if(code.length<1){
			     errMsg.html("请输入验证码"); 
				 changeImg();
				 
				 return;
			}
			//进行ajax验证验证码
			$.ajax({
			     url:"<?php echo U('Advice/checkVerify');?>",
				 type:"GET",
				 data:{
				    code:code_val,
				 },
				 success:function(responseText,statuss,xhr){
				     if(statuss=="success"){
					     if(responseText==0){
						    errMsg.html("验证码错误"); 
						    changeImg();
							return;
						 }else{
						    $.ajax({
							    url:"<?php echo U('Advice/index');?>",
                                type:"POST",
                                data:{
								   'select': select_val,
								   'content':content_val,
								   'conect':connect_val,
								},
                                success:function(responseText,status,xhr){
								      alert('提交成功!感谢你的宝贵建议');
									  $("#survery-box").addClass("hide");
								},
                                timeout:60*1000,								
							    
							});
						 
						 }
					 }else{
					  errMsg.html("验证码错误"); 
					   changeImg();
					   status=0;
					   return;
					 }
				 },
				 
				 error:function(){
				    errMsg.html("验证码错误"); 
					 changeImg();
					 status=0;
					 return;
				 },
				 timeout:60*1000,
			
			});
			
		    
			
			
			
			
			
			
			
		
		});
		
		
		 
	
	
	});


</script>
<div id="globleParameter" class="hide" context="" stylepath="http://res.vmall.com/20140826/css" scriptpath="http://res.vmall.com/20140826/js" imagepath="http://res.vmall.com/20140826/images" mediapath="http://res.vmall.com/pimages/"></div>
<!--底部 -->

<footer class="footer">
    <!-- 20130902-底部-友情链接-start -->
	<div class="footer-otherLink">
		<p>热门<a href="javascript:void(0)" >华为手机</a>：<a href="javascript:void(0)" target="_blank">华为Mate7</a> | <a href="javascript:void(0)" target="_blank">荣耀3C畅玩版</a> | <a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀6</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀3c</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀畅玩版</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为P7</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀X1</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀3X</a><span style="line-height:1.5;"> | <a href="javascript:void(0)" target="_blank">荣耀平板</a> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀立方</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀手环</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为麦芒</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为喵王</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为秘盒</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为P6</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为mate2</a><span style="line-height:1.5;"> | </span></p><p><br></p>
	</div>


</footer>



<div id="AutocompleteContainter_d3d73" style="position: absolute; z-index: 9999; top: 93px; left: 556.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_d3d73" style="display: none; width: 315px; max-height: 400px;"></div></div></div>
</body>
</html>