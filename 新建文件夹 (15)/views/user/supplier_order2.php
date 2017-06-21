<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 供应商待发货订单 </title>
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
			  <a href="<?php echo $pc_style; ?>index.html" class="general_navi_a1">  返回商城首页  </a>
			  <a href="supplier_index.html"> 三界会员 </a>
			  <a href="" class="color_title_fist"> 我的订单 </a>
			  <a href="accountant.html"> 我的账房 </a>
			  <a href="myrecommend.html"> 我的推荐 </a>
			  <a href="accountsettings.html"> 账户设置 </a>
			  <a href="../others/Share.html" class="end_two end_two_mar"> 分享邀请 </a>
			  <a href="../others/sanjiebao.html" class="end_two"> 三界宝 </a>
			  <a href="../others/sanjietong.html" class="end_two"> 三界石 </a>
			</div>
		</div>
 
 
	 
	  
	 
	 
		<!--消费、付款展示栏-->
		<!--商城订单列表-->
		<div style="min-height: 40px;" class="super_sum_money">
		   <div style="height: 40px;" class="sum_money">
		   	  <ul style="width: 800px;" class="order_Type1">
		   	  	 	<a href="supplier_order.html"> 全部订单( <span> 15 </span> ) </a>
		   	  	 	<a style="margin-left: 26px;" href="supplier_order1.html"> 待付款( <span> 8 </span> ) </a>
		   	  	 	<a style="margin-left: 26px;" class="redness" href=""> 待发货( <span> 8 </span> ) </a> 
		   	  </ul> 
		   	  <div style="margin-top: -26px;" class="sear_box">
		   	  	 <input type="text"  class="sear_box_input1" id="" placeholder="输入你想查找的商品名字" />
			     <input type="button" class="sear_box_input2" id="" value="搜索" />
		   	  </div>  
		   </div>
		</div>
		
		<!--商城订单列表-->
		<div class="super_list_of">
		  <div class="the_order" id="store">
		   	  
		   	  	 <ol class="order_title order_title_11">
		   	  	    <li class="order_title_li1 order_title_DDD"></li>
		   	  	 	<li class="order_title_li2 order_title11_li2"> 订单内容 </li>
		   	  	 	<li class="order_title_li2 order_title11_li3"> 单价(三界石) </li>
		   	  	 	<li class="order_title_li2 order_title11_li4"> 数量 </li>
		   	  	 	<li class="order_title_li2 order_title11_li5"> 金额(人民币) </li>
		   	  	 	<li class="order_title_li2 order_title11_li6"> 收货人  </li>
		   	  	 	<li class="order_title_li2 order_title11_li7"> 订单状态 </li>
		   	  	 </ol>
		   	  	 
		   	  	 
		   	  	 <div class="order_details1 order_details_11">
		   	  	 	<div class="number_time">
		  <strong> 2016-10-14 14:56:42 </strong>   订单号：<font class="number_time_font1">39388732822</font>   &nbsp; &nbsp;&nbsp;&nbsp;    快递单号：<font style="color: #999999;">39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific2 specific_11">
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  4320.00
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  4320.00
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  4320.00
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 		</ul>
	   	  	 		    <div class="jiage1 jiage_11" id="jiage">
			   	  	 		  4320.00
			   	  	   </div>  
		   	  	 		<div class="loca1 loca_11" id="loca">
		   	  	 			<p> 杨树林 </p>
							<p> 18325631452 </p>
							<p> 北京市海淀区中关村大街111号海龙大厦11-11 </p>
		   	  	 		</div>
		   	  	 		<div class="logistics1 logistics_11" id="logistics">
		   	  	 			  <p>待收货</p>
		   	  	 			  <a href="">查看物流</a>
		   	  	 		</div>
		   	  	 	</div>
		   	  	 </div>
		   	  	 
		   	  	 <div class="order_details1 order_details_11">
		   	  	 	<div class="number_time">
	 <strong> 2016-10-14 14:56:42 </strong>  订单号：<font class="number_time_font1">39388732822</font>  快递单号：<font>39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific1 specific_11">
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  4320.00
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 		</ul>
		   	  	 		      <div class="jiage jiage_11" >
				   	  	 		  4320.00
				   	  	 	  </div> 
		   	  	 			   
		   	  	 	
		   	  	 		<div class="loca loca_11" >
		   	  	 			<p> 杨树林 </p>
							<p> 18325631452 </p>
							<p> 北京市海淀区中关村大街111号海龙大厦11-11 </p>
		   	  	 		</div>
		   	  	 		<div class="logistics logistics_11">
		   	  	 			  <p>待收货</p>
		   	  	 			  <a href="">查看物流</a>
		   	  	 		</div>
		   	  	 	</div>
		   	  	 </div>
		   	  	 
		   	  	 <div class="order_details1 order_details_11">
		   	  	 	<div class="number_time">
  <strong> 2016-10-14 14:56:42 </strong>  订单号：<font class="number_time_font1">39388732822</font>  快递单号：<font>39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific1 specific_11">
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pc_style; ?>img/meinv.png"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> 丹顿公子【都市系列】男士西裤 英伦修身休闲西装裤夏 </a>
		   	  	 			   	   <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  4320.00
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font>1</font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 		</ul>
		   	  	 		      <div class="jiage jiage_11">
				   	  	 		  4320.00
				   	  	 	  </div> 
		   	  	 			   
		   	  	 	
		   	  	 		<div class="loca loca_11">
		   	  	 			<p> 杨树林 </p>
							<p> 18325631452 </p>
							<p> 北京市海淀区中关村大街111号海龙大厦11-11 </p>
		   	  	 		</div>
		   	  	 		<div class="logistics logistics_11">
		   	  	 			  <p>待收货</p>
		   	  	 			  <a href="">查看物流</a>
		   	  	 		</div>
		   	  	 	</div>
		   	  	 </div>
		   	  	 
		   	  	 
		   	  	 <!--分页栏-->
		   	  	<div class="page_warp">
					<p>
						<span>
							<a>上一页</a>&nbsp;&nbsp;
							<a>1</a>
							<a>2</a>
							<a>3</a>
							<a>4</a>
							<a>5</a>
							&nbsp;&nbsp;<a>下一页</a>
						</span>
						<span>
							<span>共</span>
							<i>20</i>
							<span>页，</span>
							<span>跳转到</span>
							<input class="page_input" type="tel" name="" id="" value="" />
							<span>页</span>
							<button>确定</button>
						</span>
					</p>
				</div> 
		   	 
		   </div>
		</div>
		
		
        
		 <!--底部-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
				
	 
			
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/giveHigh.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		
	</body>
</html>
