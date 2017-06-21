<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 代理商首页 </title>  
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
	</head>
	
	
	
	<body>
		
		<!--头部用户导航-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">				
			<img src="<?php echo $pc_style; ?>img/logo.png"/>	
			<!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
			<input type="button" class="suoSou" id="" value="搜索" />
			<a class="shopping_cart_icon">
				 <img src="<?php echo $pc_style; ?>img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
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
					<a class="channel-l ta_center" href="<?php echo $pc_style; ?>index.html">
						<span>返回商城首页</span>
					</a>
					<div class="channel-c channel-d">
						<a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['agent/index']);?>"> 三界会员 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant']);?>"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>
		
		<!--钻石会员—个人中心-->
	   		<div class="super_Personal_center ">
				   <div class="Personal_center">
				   	<div class="Personal_title">
				   		<div class="photo1">
                            <img src="<?php echo $pc_style; ?>img/touxiang1.png"  alt="" />
                            <img class="circle_shadow1" src="<?php echo $pc_style; ?>img/circle_shadow.png" />
						</div>
					   	<div class="the_name">
                            <span> <?php echo empty($user_name) ?  $mobile : $user_name ;?> </span>
                            <font>
                                <?php
                                if($type ==1){
                                    echo "普通会员";
                                }elseif($type ==2){
                                    echo "创业会员";
                                }elseif($type ==3){
                                    echo "店铺";
                                }elseif($type ==4){
                                    echo "供应商";
                                }elseif($type ==5){
                                    echo "代理商";
                                }
                                ?>
                            </font>
					   	</div>	
					</div>
			   		
	 
			        <div class="per_money agent_per_money">
			        	<ul class="per_money_ul1">
			        		<li>辖区店铺数</li>
			        		<li class="colorF7"><?php echo $areanum ?></li>
			        	</ul>
			        	<ul class="per_money_ul2">
			        		<li>人民币</li>
			        		<li class="colorF7">￥<?php echo $money?></li>
			        	</ul>
			        </div>
				   	  
				   </div>
				</div>
		
		<!--订单内容区-->
		<div class="super_the_order">
			
		<!--商城订单-->
		   <div class="the_order" id="store">
		   	  <div class="the_order_left">
		   	  	
		   	  	 <ul class="order_Type" id="order_Type">
		   	  	 	<li>  我的辖区店铺  ( <span> <?php echo $areanum ?> </span> )  </li>
		   	  	 	 
		   	        <a class="last1 last2" href="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist']);?>"> 更多 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>
		   	  	 </ul>
		   	  	 
		   	  	 <ol class="order_title">
		   	  	    <li class="order_title_li1 order_title_DDD"> </li> 
		   	  	 	<li class="order_title_li2"> 店铺信息 </li>
		   	  	 	<li class="order_title_li3"> 所在城市 </li>
		   	  	 	<li class="order_title_li7"> 注册时间 </li>
		   	  	 	<li class="order_title_li8"> 销售业绩（三界石）</li>
		   	  	 </ol>


		   	  	 <div class="order_details1 ">
                    <?php if(!empty($areaStoreList)){
                        foreach ($areaStoreList as $value){ ?>
		   	  	 	<div class="box_list">

		   	  	 		<ul class="specific specific_2" id="specific">
		   	  	 			<li>
		   	  	 			   <a href=""><img src="<?php echo $pic_host; ?><?php echo empty($value->store_img) ? "" : $value->store_img; ?>"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> <?php echo empty($value->store_name) ? "" : $value->store_name ?> </a>
		   	  	 			   </div>
		   	  	 			   <div class="shuliang_1">
		   	  	 			   	   <font> <?php echo empty($value->city) ? "" : $value->city ?> </font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 		</ul>

		   	  	 		<div class="jiage1 jiage2" id="jiage">
                            <?php echo empty($value->reg_time) ? "" : $value->reg_time ?>
		   	  	 		</div>
		   	  	 		<div class="loca loca_1" id="loca">
							<p> <?php echo empty($value->total_amount) ? "" : $value->total_amount ?> </p>
		   	  	 		</div>

		   	  	 	</div>
                     <?php } } ?>
		   	  	 </div>
		   	  	 

		   	  	 
		   	  	 
		   	  	<!-- 钻石会员-我的账房-->
		   	  	<div class="earnings">
		   	  		<h3> 我的账房 </h3>
		   	  		<!--<li class="Add_color"> 辖区店铺充值奖励 </li>
		   	  		<li> 提现 </li>   -->
		   	  	 
		   	  	 
		   	  		<a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant']);?>">  更多 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>
		   	  	</div>
		   	  	
		   	  	<table class="tab">
                    <tr> <th style="width: 25%;"> 时间 </th> <th style="width: 25%;"> 	交易类型 </th> <th style="width: 17%;"> 人民币 </th></tr>
                    <?php if(!empty($accList)) {

                        foreach($accList as $val){ ?>
                            <tr> <td><?php echo empty($val->caldate)? '': $val->caldate;?></td><td><?php echo empty($val->acc_name)? '': $val->acc_name;?> </td>
                                <td><?php echo empty($val->rmb_amnt)? '0' : $val->rmb_amnt;?></td> </tr>
                        <?php }?>
                    <?php } ?>
		   	  	</table>
		   	  	 	 
		   	  </div>
		   	  
		   	  
		   	  <div class="the_order_rig">
		   	 
		   	  	<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1332','catId'=>'17']); ?>" class="yitu"> <img src="<?php echo $pc_style; ?>img/83.png"/> </a>
		   	  	<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'783','catId'=>'7']); ?>" class="yitu"> <img src="<?php echo $pc_style; ?>img/84.png"/> </a>
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
