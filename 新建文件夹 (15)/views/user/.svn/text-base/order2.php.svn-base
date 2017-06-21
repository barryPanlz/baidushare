<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 商城 订单 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		 <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
	</head>	
	<body>
		
		
				
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
			<div class="super_Search">
			<div class="Search" href="">				
			<img src="<?php echo $pc_style; ?>img/logo_life.png"/>	
			<!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
			<input type="button" class="suoSou" id="" value="搜索" />
			<a class="shopping_cart_icon">
				 <img src="../../img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
			</a>
			<div class="Text">
				<a href="">秋冬连衣裙</a>
				<a href="">耐克跑步鞋</a>
				<a href="">婴儿抱被</a>
				<a href="">会员特供</a>
				<a href="">买一送二</a>
			</div>				-->
			</div>			
		</div>		
		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box .fix">
					<a class="channel-l ta_center" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
						<span>返回商城首页</span>
					</a>
					<div class="channel-c channel-d">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>"> 三界会员 </a>
						<a class="now_tab_red"  href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend']);?>"> 我的推荐 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>
		
		<!--创业会员—商城订单的导航-->
		<!-- <div class="super_general_navi ">
			<div class="general_navi">
			  <a href="<?php //echo $pc_style; ?>index.html" class="general_navi_a1"> 返回商城首页 </a>
			  <a href="Diamond_index.html"> 三界会员 </a>
			  <a href="order.html" class="color_title_fist"> 我的订单 </a>
			  <a href="accountant.html"> 我的账房 </a>
			  <a href="myrecommend.html"> 我的推荐 </a>
			  <a href="accountsettings.html"> 账户设置 </a>
			  <a href="../others/Share.html" class="end_two end_two_mar"> 分享邀请 </a>
			  <a href="../others/sanjiebao.html" class="end_two"> 三界宝 </a>
			  <a href="../others/sanjietong.html" class="end_two"> 三界石 </a>
			</div>
		</div> -->
		<!--消费、付款展示栏-->
		<!--商城订单列表-->
        <div id="mall">
		<div class="super_sum_money">
		   <div class="sum_money">
		   	  <ul class="order_Type1">
		   	  	 	<a class="redness"> 商城订单( <span> <?php if(!empty($total->total)){ echo $total->total;}else{echo "0";}?> </span> ) </a>
		   	  	 	<a  class="order_Type1_lastA" id="bulk_1"> 团购订单( <span> <?php if(!empty($storeOrderNum->total)){ echo $storeOrderNum->total;}else{echo "2";}?> </span> ) </a>
		   	  </ul>
		   	  <!--商城订单  消费、付款展示栏-->
		   	  <ol class="demand_navi">
		   	  	<li class="change1"> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=0']);?>">全部</a></font>( <span> <?php echo empty($total->total) ? "10" : $total->total?> </span> ) </li>
		   	  
		   	  	<li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=1']);?>">待付款</a></font>( <span> <?php if(!empty($total->wait_pay)){echo $total->wait_pay;}else{echo "0";}?> </span> ) </li>
		   	  	<li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=2']);?>">待发货</a></font>( <span> <?php if(!empty($total->wait_receipt)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>
		   	  	<li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=6']);?>">已完成</a></font>( <span> <?php if(!empty($total->complete)){echo $total->complete;}else{echo "0";}?> </span> ) </li>
		   	  
		   	  </ol>
<!--		   	  团购订单  消费、付款展示栏-->
<!--		   	  <ol class="demand_navi1">-->
<!--		   	  	<li class="change1"> <font>全部</font>( <span> 8 </span> ) </li>-->
<!--		   	  	<li> <font>待付款</font>( <span> 3 </span> ) </li>-->
<!--		   	  	<li> <font>待消费</font>( <span> 3 </span> ) </li>-->
<!--		   	  	<li> <font>已消费</font>( <span> 8 </span> ) </li>-->
<!--		   	  </ol>-->
		   	  
		   	  <div class="sear_box">
		   	  	 <input type="text" class="sear_box_input1"  id="" placeholder="输入你想查找的商品名字" />
			     <input type="button" class="sear_box_input2" id="" value="搜索" />
		   	  </div>  
		   </div>
		</div>
		
		<!--商城订单列表-->
		<div class="super_list_of">
		  <div class="the_order" id="store">
		   	  
		   	  	 <ol class="order_title order_title_11">
		   	  	    <li class="inquire1 order_title_DDD">  
		   	  	 	 <!--&nbsp;<font class="changeContent"> 近三个月订单  </font> <span class="triangle_down" id="triangle_down"></span> 
		   	  	 	   <dt class="liuYue">近六个月订单 </dt>
		   	  	 	   <dt class="yinian"> 近一年订单 </dt>-->
		   	  	 	 </li> 
		   	  	 	<li class="order_title_li2 order_title11_li2"> 订单内容 </li>
		   	  	 	<li class="order_title_li3 order_title11_li3"> 单价(三界石) </li>
		   	  	 	<li class="order_title_li4 order_title11_li4"> 数量 </li>
		   	  	 	<li class="order_title_li5 order_title11_li5"> 金额(人民币) </li>
		   	  	 	<li class="order_title_li6 order_title11_li6"> 收货人  </li>
		   	  	 	<li class="order_title11_li7"> 订单状态 </li>
		   	  	 </ol>
		   	  	 
		   	  	  	 <?php if($shoporderlist !== null){//var_dump($shopOrderList);die;
		   	  	 	foreach($shoporderlist as $value){ ?>
		   	  	 <div class="order_details1 order_details_11">
		   	  	 	  
		   	  	 	<div class="number_time">
		     <strong> <?php echo empty($value->add_time) ? "" : $value->add_time?> </strong> 订单号：<font class="number_time_font1"><?php echo empty($value->order_no) ? "" : $value->order_no;?></font>  快递单号：<font>39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific2 specific_11">
		   	  	 			<?php if(!empty($value->shopGoodsList)) {
		   	  	 				
		   	  	 			foreach($value->shopGoodsList as $val){ ?>
		   	  	 			<li>
		   	  	 			   <a href=""><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($val->goods_img)?'':$val->goods_img; ?>"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> <?php echo  empty($val->goods_name)?'':$val->goods_name; ?> </a>
		   	  	 			   	   <!-- <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p> -->
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  <?php echo  empty($val->pay_price)?'0':$val->pay_price?>
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font><?php echo empty($val->goods_number) ? "0": $val->goods_number ?></font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 			<?php } } ?>
		   	  	 		</ul>
		   	  	 		
		   	  	 		      <div class="jiage1 jiage_11" >
				   	  	 		  <?php echo empty($value->total_price)? '0':$value->total_price?>
				   	  	 	  </div> 
		   	  	 			   
		   	  	 	
		   	  	 		<div class="loca1 loca_11" >
                            <p><?php echo empty($value->consignee) ? "": $value->consignee ?></p>
                            <p><?php echo empty($value->mobile) ? "": $value->mobile ?></p>
                            <p><?php if(!empty($value->province)||!empty($value->city)||!empty($value->area)){echo $value->province .$value->city. $value->area;}?></p>
                            <!--<p><?php /*echo empty($value->city) ? "": $value->city */?></p>
                            <p><?php /*echo empty($value->area) ? "": $value->area*/?></p>-->
                            <p> <?php echo empty($value->address) ? "": $value->address ?> </p>
		   	  	 		</div>
		   	  	 		<div class="logistics1 logistics_11">
		   	  	 			  <p>
                                  <?php if(!empty($value->order_status)) {
                                      if ($value->order_status == 1){
                                          echo "未支付";
                                      }elseif($value->order_status == 2){
                                          echo "已支付";
                                      }elseif($value->order_status ==3){
                                          echo "订单完成";
                                      }elseif($value->order_status ==4){
                                          echo "订单已取消";
                                      }
                                  } ?>
                              </p>
                            <?php if(!empty($value->order_status)) {
                                if ($value->order_status == 1){
                                    echo '<a href="'. \Yii::$app->urlManager->createUrl(['order/pay_order','order_sn' =>$value->order_no,'money'=>$value->total_price]).'">立即支付</a>';
                                }elseif($value->order_status == 2){
                                    echo "已支付";
                                }elseif($value->order_status ==3){
                                    echo "订单完成";
                                }elseif($value->order_status ==4){
                                    echo "订单已取消";
                                }
                            } ?>
		   	  	 		</div>
		   	  	 		
		   	  	 	</div>
		   	  	 	<?php } }?>
		   	  	 </div>

		   	  	 
		   	  	 
		   	  	 
		   	  	 <!--分页栏-->
		   	  	<!--<div class="page_warp">
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
							<span>页</span>
							<span>跳转到</span>
							<input class="page_input" type="tel" name="" id="" value="" />
							<span>页</span>
							<button>确定</button>
						</span>
					</p>
				</div> -->
		   	 
		   </div>
		</div>
		
		
		
		<!--团购订单列表-->
        <div id="group_buying">
		<div class="super_sum_money">
		   <div class="sum_money">
		   	  <ul class="order_Type1">
		   	  	 	<a id="bulk_2"> 商城订单( <span> <?php if(!empty($total->total)){ echo $total->total;}else{echo "0";}?> </span> ) </a>
		   	  	 	<a  class="order_Type1_lastA redness"> 团购订单( <span> <?php if(!empty($storeOrderNum->total)){ echo $storeOrderNum->total;}else{echo "0";}?> </span> ) </a>
		   	  </ul>
		   	  <!--商城订单  消费、付款展示栏-->
		   	  <ol class="demand_navi">
		   	  	<li class="change1"> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=0']);?>">全部</a></font>( <span> <?php echo empty($total->total) ? "0" : $total->total?> </span> ) </li>
		   	  
		   	  	<li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=1']);?>">待付款</a></font>( <span> <?php if(!empty($total->wait_pay)){echo $total->wait_pay;}else{echo "0";}?> </span> ) </li>
		   	  	<li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=2']);?>">待发货</a></font>( <span> <?php if(!empty($total->wait_receipt)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>
		   	  	<li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=6']);?>">已完成</a></font>( <span> <?php if(!empty($total->complete)){echo $total->complete;}else{echo "0";}?> </span> ) </li>
		   	  
		   	  </ol>
<!--		   	  团购订单  消费、付款展示栏-->
<!--		   	  <ol class="demand_navi1">-->
<!--		   	  	<li class="change1"> <font>全部</font>( <span> 8 </span> ) </li>-->
<!--		   	  	<li> <font>待付款</font>( <span> 3 </span> ) </li>-->
<!--		   	  	<li> <font>待消费</font>( <span> 3 </span> ) </li>-->
<!--		   	  	<li> <font>已消费</font>( <span> 8 </span> ) </li>-->
<!--		   	  </ol>-->
		   	  
		   	  <div class="sear_box">
		   	  	 <input type="text" class="sear_box_input1"  id="" placeholder="输入你想查找的商品名字" />
			     <input type="button" class="sear_box_input2" id="" value="搜索" />
		   	  </div>  
		   </div>
		</div>
		
		<!--商城订单列表-->
		<div class="super_list_of">
		  <div class="the_order" id="store">
		   	  
		   	  	 <ol class="order_title order_title_11">
		   	  	    <li class="inquire1 order_title_DDD">  
		   	  	 	 <!--&nbsp;<font class="changeContent"> 近三个月订单  </font> <span class="triangle_down" id="triangle_down"></span> 
		   	  	 	   <dt class="liuYue">近六个月订单 </dt>
		   	  	 	   <dt class="yinian"> 近一年订单 </dt>-->
		   	  	 	 </li> 
		   	  	 	<li class="order_title_li2 order_title11_li2"> 订单内容 </li>
		   	  	 	<li class="order_title_li3 order_title11_li3"> 单价(三界石) </li>
		   	  	 	<li class="order_title_li4 order_title11_li4"> 数量 </li>
		   	  	 	<li class="order_title_li5 order_title11_li5"> 金额(人民币) </li>
		   	  	 	<li class="order_title_li6 order_title11_li6"> 收货人  </li>
		   	  	 	<li class="order_title11_li7"> 订单状态 </li>
		   	  	 </ol>
		   	  	 
		   	  	  	 <?php if($shoporderlist !== null){//var_dump($shopOrderList);die;
		   	  	 	foreach($shoporderlist as $value){ ?>
		   	  	 <div class="order_details1 order_details_11">
		   	  	 	  
		   	  	 	<div class="number_time">
		     <strong> <?php echo empty($value->add_time) ? "" : $value->add_time?> </strong> 订单号：<font class="number_time_font1"><?php echo empty($value->order_no) ? "" : $value->order_no;?></font>  快递单号：<font>39388732822</font>
		   	  	 	</div>
		   	  	 	<div class="box_list">
		   	  	 		
		   	  	 		<ul class="specific specific2 specific_11">
		   	  	 			<?php if(!empty($value->shopGoodsList)) {
		   	  	 				
		   	  	 			foreach($value->shopGoodsList as $val){ ?>
		   	  	 			<li>
		   	  	 			   <a href=""><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($val->goods_img)?'':$val->goods_img; ?>"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> <?php echo  empty($val->goods_name)?'':$val->goods_name; ?> </a>
		   	  	 			   	   <!-- <p>  &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p> -->
		   	  	 			   </div>
		   	  	 			   <div class="unitprice">
		   	  	 			   	  <?php echo  empty($val->pay_price)?'0':$val->pay_price?>
		   	  	 			   </div>
		   	  	 			   <div class="shuliang shuliang_11">
		   	  	 			   	   x <font><?php echo empty($val->goods_number) ? "0": $val->goods_number ?></font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 			<?php } } ?>
		   	  	 		</ul>
		   	  	 		
		   	  	 		      <div class="jiage1 jiage_11" >
				   	  	 		  <?php echo empty($value->total_price)? '0':$value->total_price?>
				   	  	 	  </div> 
		   	  	 			   
		   	  	 	
		   	  	 		<div class="loca1 loca_11" >
                            <p><?php echo empty($value->consignee) ? "": $value->consignee ?></p>
                            <p><?php echo empty($value->mobile) ? "": $value->mobile ?></p>
                            <p><?php if(!empty($value->province)||!empty($value->city)||!empty($value->area)){echo $value->province .$value->city. $value->area;}?></p>
                            <!--<p><?php /*echo empty($value->city) ? "": $value->city */?></p>
                            <p><?php /*echo empty($value->area) ? "": $value->area*/?></p>-->
                            <p> <?php echo empty($value->address) ? "": $value->address ?> </p>
		   	  	 		</div>
		   	  	 		<div class="logistics1 logistics_11">
		   	  	 			  <p>
                                  <?php if(!empty($value->order_status)) {
                                      if ($value->order_status == 1){
                                          echo "未支付";
                                      }elseif($value->order_status == 2){
                                          echo "已支付";
                                      }elseif($value->order_status ==3){
                                          echo "订单完成";
                                      }elseif($value->order_status ==4){
                                          echo "订单已取消";
                                      }
                                  } ?>
                              </p>
                            <?php if(!empty($value->order_status)) {
                                if ($value->order_status == 1){
                                    echo '<a href="'. \Yii::$app->urlManager->createUrl(['order/pay_order','order_sn' =>$value->order_no,'money'=>$value->total_price]).'">立即支付</a>';
                                }elseif($value->order_status == 2){
                                    echo "已支付";
                                }elseif($value->order_status ==3){
                                    echo "订单完成";
                                }elseif($value->order_status ==4){
                                    echo "订单已取消";
                                }
                            } ?>
		   	  	 		</div>
		   	  	 		
		   	  	 	</div>
		   	  	 	<?php } }?>
		   	  	 </div>

		   	  	 
		   	  	 
		   	  	 
		   	  	 <!--分页栏-->
		   	  	<!--<div class="page_warp">
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
				</div> -->
		   	 
		   </div>
		</div>
		
 
    
 
		

	
		
 
			
	 <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
			
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/giveHigh.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
        <script>
//          $('#tuangou').css('display','none');
            $('#bulk_1').click(function () {
                $('#group_buying').css('display','block');
                $('#mall').css('display','none'); 
            })
            
            $('#bulk_2').click(function () {
                $('#group_buying').css('display','none');
                $('#mall').css('display','block'); 
            })
        </script>
		
	</body>
</html>
