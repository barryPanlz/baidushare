<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 供应商首页 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>
	
	
	
	<body>
		
		<!--头部用户导航-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href=""> 
			<img src="<?php echo $pc_style; ?>img/logo_life.png"/> 
		  </div> 
		</div>
		
		
		
		<!--创业会员—商城订单的导航-->
		<div class="super_general_navi ">
			<div class="general_navi">
			  <a href="<?php echo $pc_style; ?>index.html" class="general_navi_a1">   返回商城首页 </a>
			  <a href="" class="color_title_fist"> 三界会员 </a>
			  <a href="order1.html"> 我的订单 </a>
			  <a href="accountant.html"> 我的账房 </a>
			  <a href="myrecommend.html"> 我的推荐 </a>
			  <a href="accountsettings.html"> 账户设置 </a>
			  <a href="../others/Share.html" class="end_two end_two_mar"> 分享邀请 </a>
			  <a href="../others/sanjiebao.html" class="end_two"> 三界宝 </a>
			  <a href="../others/sanjietong.html" class="end_two"> 三界石 </a>
			</div>
		</div>
		
		
		
		<!--创业会员—个人中心-->
	   		<div class="super_Personal_center ">
				   <div class="Personal_center">
				   	<div class="Personal_title">
				   		<div class="photo1">
							<img src="<?php echo $pc_style; ?>img/lvyou5.png" alt="" />
							<img class="circle_shadow1" src="<?php echo $pc_style; ?>img/circle_shadow.png" />
						</div>
					   	<div class="the_name">
					   		<dt> 张三 </dt>   
				   	  	    <dd> 创业会员 </dd>
					   	</div>	
					</div>
			   		
			        <div class="list_of ">
			           <ul style="visibility: hidden;"> 
			           	 <li> <img src="<?php echo $pc_style; ?>img/daifukuan.png"/> <span class="span_1">待付款</span>     <span> 211 </span> </li>
			           	 <li> <img src="<?php echo $pc_style; ?>img/fahuo.png"/>  <span class="span_1">待发货</span>    <span> 58 </span> </li>
			           </ul>
			           
			           <ul style="margin-top: 20px;"> 
			           	 <li> <img src="<?php echo $pc_style; ?>img/shouhuo.png"/> <span class="span_1"> 待收货</span>  <span> 41 </span> </li>
			           	 <li> <img src="<?php echo $pc_style; ?>img/fahuo.png"/>  <span class="span_1">待发货</span>    <span> 58 </span> </li>
			           </ul>
			           
			           <ul style="visibility: hidden;"> 
			           	 <li> <img src="<?php echo $pc_style; ?>img/yijieshu.png"/><span class="span_1"> 已结束  </span><span> 23 </span> </li> 
			           </ul>
			        </div>
			        <div class="per_money">
			        	<ul style="margin-left: 20px;">
			        		<li>三界石</li>
			        		<li class="colorF7">100</li>
			        	</ul>
			        	<ul style="margin-left: 40px;">
			        		<li>人民币</li>
			        		<li class="colorF7">1000</li>
			        	</ul>
			        </div>
			        <!--<div class="per_erwima">
			        	<img src="<?php echo $pc_style; ?>img/erweima.png"/>
			        	<ul>
			        		<li>我的二维码</li>	
			        		<li><span>我的推荐邀请码:</span><span>123456</span></li>	
			        	</ul>
			        </div>-->
				   	  
				   </div>
				</div>
		
		<!--订单内容区-->
		<div class="super_the_order">
			
		<!--商城订单-->
		   <div class="the_order" id="store">
		   	  <div class="the_order_left">
		   	  	
		   	  	 <ul class="order_Type" id="order_Type">
		   	  	 	<li>  我的订单  ( <span> 4 </span> )  </li>
		   	  	 	 
		   	        <a class="last2" href="supplier_order.html"> 更多 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>  
		   	  	 </ul>
		   	  	 
		   	  	 <ol class="order_title">
		   	  	    <li class="order_title_li1 order_title_DDD"> </li> 
		   	  	 	<li class="order_title_li2"> 订单内容 </li>
		   	  	 	<li class="order_title_li3"> 数量 </li>
		   	  	 	<li class="order_title_li4"> 金额(人民币) </li>
		   	  	 	<li class="order_title_li5"> 收货人  </li>
		   	  	 	<li class="order_title_li6"> 订单状态 </li>
		   	  	 </ol>
		   	  	 
		   	  	 
		   	  	 <div class="order_details1 ">
		   	  	 	<div class="number_time">
		   <strong> 2016-10-14 14:56:42 </strong>  订单号：<font class="number_time_font1">39388732822</font> 快递单号：<font >39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific2" id="specific">
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="shuliang">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="shuliang">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 		</ul>
		   	  	 		
		   	  	 		<div class="jiage1" id="jiage">
		   	  	 			4320.00
		   	  	 		</div>
		   	  	 		<div class="loca1" id="loca">
		   	  	 			<p> 杨树林 </p>
							<p> 18325631452 </p>
							<p> 北京市海淀区中关村大街111号海龙大厦11-11 </p>
		   	  	 		</div>
		   	  	 		<div class="logistics1" id="logistics">
		   	  	 			  <p>待收货</p>
		   	  	 			  <a href="">查看物流</a>
		   	  	 		</div>
		   	  	 	</div>
		   	  	 </div>
		   	  	 
		   	  	<div class="order_details1 ">
		   	  	 	<div class="number_time">
		 <strong> 2016-10-14 14:56:42 </strong> 订单号：<font class="number_time_font1">39388732822</font>     快递单号：<font >39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific1">
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="shuliang">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 		</ul>
		   	  	 		
		   	  	 		<div style="height: 108px;" class="jiage">
		   	  	 			4320.00
		   	  	 		</div>
		   	  	 		<div class="loca">
		   	  	 			<p> 杨树林 </p>
							<p> 18325631452 </p>
							<p> 北京市海淀区中关村大街111号  </p>
		   	  	 		</div>
		   	  	 		<div class="logistics">
		   	  	 			  <p>待收货</p>
		   	  	 			  <a href="">查看物流</a>
		   	  	 		</div>
		   	  	 	</div>
		   	  	 </div>
		   	  	 
		   	  	<!-- 创业会员-我的收益-->
		   	  	<div class="earnings">
		   	  		<h3> 我的收益 </h3>
		   	  		<li class="Add_color"> 会员消费分红 </li> <span></span>
		   	  		<li> 会员升级奖励 </li>  <span></span>
		   	  		<li> 店铺充值奖励 </li>
		   	  		<li> 供应商业绩分红 </li>
		   	  		<li> 其他奖励 </li>
		   	  		<li> 充值 </li>
		   	  		<li> 转账 </li>
		   	  		<li> 兑换 </li>
		   	  		<li> 消费 </li>
		   	  		<a href="accountant.html">  更多 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>
		   	  	</div>
		   	  	
		   	  	<table class="tab">
		   	  		<tr> <th style="width: 25%;"> 时间 </th> <th style="width: 25%;"> 受益内容 </th> <th style="width: 17%;"> 三界石 </th> <th style="width: 17%;"> 三界宝 </th> <th style="width: 16%;"> 人民币 </th> </tr>
		   	  		<tr> <td>2016-10-23 10：10</td> <td>会员消费分红</td> <td>+2000</td> <td>+2000</td> <td>+2000</td> </tr>
		   	  		<tr> <td>2016-10-23 10：10</td> <td>会员消费分红</td> <td>+2000</td> <td>+2000</td> <td>+2000</td> </tr>
		   	  		<tr> <td>2016-10-23 10：10</td> <td>会员消费分红</td> <td>+2000</td> <td>+2000</td> <td>+2000</td> </tr>
		   	  		<tr> <td>2016-10-23 10：10</td> <td>会员消费分红</td> <td>+2000</td> <td>+2000</td> <td>+2000</td> </tr>
		   	  		<tr> <td>2016-10-23 10：10</td> <td>会员消费分红</td> <td>+2000</td> <td>+2000</td> <td>+2000</td> </tr>
		   	  		<tr> <td colspan="2" style="text-align: center;">合计</td> <td>+2000</td> <td>+2000</td> <td>+2000</td> </tr>
		   	  	</table>
		   	  	 	 
		   	  </div>
		   	  
		   	  
		   	  <div class="the_order_rig">
		   	  	 <div class="my_recommend">
		   	  	 	我的推荐  <a href="myrecommend.html">  更多 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>
		   	  	 </div> 
		   	  	
		   	  	<a href="" class="yitu"> <img src="<?php echo $pc_style; ?>img/83.png"/> </a>
		   	  	<a href="" class="yitu"> <img src="<?php echo $pc_style; ?>img/84.png"/> </a>
		   	    <a href="" class="yitu"> <img src="<?php echo $pc_style; ?>img/83.png"/> </a>
		   	  	<a href="" class="yitu"> <img src="<?php echo $pc_style; ?>img/84.png"/> </a>
		   	  	<a href="" class="yitu"> <img src="<?php echo $pc_style; ?>img/83.png"/> </a>
		   	  	<a href="" class="yitu"> <img src="<?php echo $pc_style; ?>img/84.png"/> </a>
		   	  	
		   	  	
		   	  </div>
		   </div>
		
		   
		</div>
		
		
		
		
				
		<!--底部-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		
		
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/giveHigh.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			
			  
			  var dex ;
			  $('#order_Type>li').on('click',function(){
			  	  dex = $(this).index();
			  	 
			  	  if( dex == 0 ){
			  	  	$('#store').show();
			  	  	$('#bulk').hide();
			  	  }else if( dex == 1 ){ 
			  	  	$('#store').hide();
			  	  	$('#bulk').show();
			  	  };
			  	  return false;
			  });
			  
         
			  
			});
		</script>
		
	</body>
</html>
