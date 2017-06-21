<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 三界会员首页 </title>
	    <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
	</head>
	<body>		
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">				
		<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">	<img src="<?php echo $pc_style; ?>img/logo.png"/>	</a>
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
						<a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/supplier_index']);?>"> 三界会员 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order']);?>"> 我的订单 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/accountant']);?>"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>
		
		<!--创业会员—个人中心-->
	   		<div class="super_Personal_center ">
				   <div class="Personal_center">
				   	<div class="Personal_title">
				   		<div class="photo1">
<!--							<img src="--><?php //echo empty($user_img) ? : $user_img; ?><!--" alt="" />-->
                            <img src="<?php echo $pc_style; ?>img/touxiang1.png" alt="" />
							<img class="circle_shadow1" src="<?php echo $pc_style; ?>img/circle_shadow.png" />
						</div>
					   	<div class="the_name">
					   		<dt><?php echo empty($user_name) ?  $mobile : $user_name?></dt>
				   	  	    <dd>
				   	  	    	<?php
				   	  	    		if($type ==1){
				   	  	    			echo "<span class='regular_members'> 普通会员 </span>";
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
				   	  	    </dd>
					   	</div>	
					</div>
			   		
			        <div class="list_of ">
			           <ul> 
			           	 <li> <img src="<?php echo $pc_style; ?>img/shouhuo.png"/>  <span class="span_1">已收货</span>    <span> <?php if(!empty($shopOrderNum)){echo $wait_receipt;}else{echo "0";}?> </span> </li>
                           <li> <img src="<?php echo $pc_style; ?>img/fahuo.png"/> <span class="span_1"> 待发货</span>  <span> <?php if(!empty($shopOrderNum)){echo $wait_deliver;}else{echo "0";}?> </span> </li>
                       </ul>
			        </div>
			        <div class="per_money per_money1">
			        	<ul>
			        		<li>人民币</li>
			        		<li class="colorF7"><?php echo empty($money) ? "0": $money ?></li>
			        	</ul>
			        </div>
				   </div>
				</div>
		
		<!--订单内容区-->
		<div class="super_the_order">
			
		<!--商城订单-->
		   <div class="the_order the_order_mall" id="store" 
		   	<?php if(empty($_GET['type'])){ 
		   		echo 'style="display:block;"';
		   	}else{
		   		if($_GET['type']=='1'){ 
		   			echo 'style="display:block;"';
		   		}else{
		   			echo 'style="display:none;"';
		   		}
		   	} ?>>
		   	  <div class="the_order_left">
		   	  	
		   	  	 <ul class="order_Type" id="order_Type">
		   	  	 	<li class="order_back">  我的订单  ( <span> <?php echo empty($shopOrderNum->total) ? "0" : $shopOrderNum->total ;?> </span> ) </li>
		   	         <!-- <a class="last1" href="#order.html"> 更多 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>    -->        
		   	         
		   	  	 </ul>

		   	  	 <ol class="order_title">
		   	  	    <!-- <li class="inquire1 order_title_DDD">
		   	  	 	  &nbsp;<font class="changeContent"> 近三个月订单  </font> <span class="triangle_down"></span>
		   	  	 	   <dt data-mon ="half_year" class="liuYue">近六个月订单 </dt>
		   	  	 	   <dt class="yinian"> 近一年订单 </dt>
		   	  	 	</li>-->
		   	  	 	<li class="order_title_li22"> 订单内容 </li>
		   	  	 	<li class="order_title_li3"> 数量 </li>
		   	  	 	<li class="order_title_li4"> 金额(三界石) </li>
		   	  	 	<li class="order_title_li5"> 收货人  </li>
		   	  	 	<li class="order_title_li6"> 订单状态 </li>
		   	  	 </ol>


		   	  	 <div class="order_details1 ">
                  <?php if(!empty($shopOrderList)){
		   	  	 	foreach($shopOrderList as $k=>$value){
		   	  	    ?>
		   	  	 	<div class="number_time">
		   	  	 		 <strong> <?php echo empty($value->add_time) ? : $value->add_time?> </strong> 订单号：<font class="number_time_font1"><?php echo empty($value->order_no) ? : $value->order_no?></font>
		   	  	 	</div>

		   	  	 	<div class="box_list">

		   	  	 		<ul class="specific specific2" id="a<?php echo $k;?> ">
		   	  	 			<?php if(!empty($value->shopGoodsList)){
		   	  	 		 foreach($value->shopGoodsList as $val){ //var_dump($val);die; ?>
		   	  	 			<li>
		   	  	 			   <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$val->goods_id,'catId'=>$val->cat_id]); ?>"><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($val->goods_img) ? : $val->goods_img; ?>"/></a>
		   	  	 			   <div class="instru">
		   	  	 			   	   <a> <?php echo empty($val->goods_name) ? : $val->goods_name ; ?> </a>
<!-- 		   	  	 			   	   <p>  &nbsp;颜色：<span><?php echo empty($val->sku_value) ? : $val->sku_value ; ?></span>&nbsp; &nbsp; &nbsp;   尺码：<span>38</span> </p>
 -->		   	  	 			   </div>
		   	  	 			   <div class="shuliang">
		   	  	 			   	   x <font><?php echo empty($val->goods_number) ? : $val->goods_number ?></font>
		   	  	 			   </div>
		   	  	 			</li>
		   	  	 			<?php } }?>
		   	  	 		</ul>


		   	  	 		<div class="jiage1" id="jiage">
		   	  	 			<?php echo empty($value->order_amount) ? "0" : $value->order_amount?>
		   	  	 		</div>
		   	  	 		<div class="loca1" id="loca">
                            <p><?php echo empty($value->consignee) ? "": $value->consignee ?></p>
                            <p><?php echo empty($value->mobile) ? "": $value->mobile ?></p>
                            <p><?php if(!empty($value->province)||!empty($value->city)||!empty($value->area)){echo $value->province .$value->city. $value->area;}?></p>
                            <!--<p><?php /*echo empty($value->city) ? "": $value->city */?></p>
                            <p><?php /*echo empty($value->area) ? "": $value->area*/?></p>-->
		   	  	 			<p> <?php echo empty($value->address) ? "": $value->address ?> </p>
							<!-- <p> 18325631452 </p>
							<p> 北京市海淀区中关村大街111号海龙大厦11-11 </p> -->
		   	  	 		</div>
		   	  	 		<div class="logistics1" id="logistics">
		   	  	 			  <p><?php if(!empty($value->order_status)) {
                            if ($value->order_status == 1){
                                echo "未支付";
                            }elseif($value->order_status == 2){
                                echo "已支付";
                            }elseif($value->order_status ==3){
                                echo "订单完成";
                            }elseif($value->order_status ==4){
                                echo "订单已取消";
                            }
                                  } ?></p>
                                  <?php if(!empty($value->order_status)) {
                            if ($value->order_status == 1){
                                echo '<a href="'. \Yii::$app->urlManager->createUrl(['order/pay_order','order_sn' =>$value->order_no,'money'=>$value->total_price]).'">立即支付</a>';
                            }
                                  } ?>

		   	  	 		</div>
		   	  	 	</div>
		   	  	 	 <?php }}?>
		   	  	 </div>




		   	  	<!-- 创业会员-我的收益-->
		   	  	<div class="earnings">
		   	  		<h3> 我的账房 </h3>
		   	  		<!-- <li class="Add_color"> 会员消费分红 </li> <span></span>
		   	  		<li> 会员升级奖励 </li>  <span></span>
		   	  		<li> 店铺充值奖励 </li>
		   	  		<li> 供应商业绩分红 </li>
		   	  		<li> 其他奖励 </li>
		   	  		<li> 充值 </li>
		   	  		<li> 转账 </li>
		   	  		<li> 兑换 </li>
		   	  		<li> 消费 </li> -->
<!--		   	  		<a href="#accountant.html">  更多 <img src="--><?php //echo $pc_style; ?><!--img/jiantou-icon.png"/> </a>-->
		   	  	</div>


		   	  	<table class="tab">
		   	  		<tr> <th style="width: 25%;"> 时间 </th> <th style="width: 25%;"> 受益内容 </th> <th style="width: 17%;"> 三界石 </th> <th style="width: 17%;"> 三界宝 </th> <th style="width: 16%;"> 人民币 </th> </tr>
		   	  		<?php if(!empty($accList)) {
	   	  				foreach($accList as $val){ //var_dump($accList);die;?>
	   	  				<tr> <td><?php echo empty($val->caldate)? '': $val->caldate;?></td> <td><?php
							echo empty($val->acc_name) ? "" : $val->acc_name ?></td> <td><?php echo empty($val->wlbi_amnt)? '0':$val->wlbi_amnt;?></td> <td><?php echo empty($val->wlbao_amnt)?'0':$val->wlbao_amnt;?></td> <td><?php echo empty($val->rmb_amnt)?'0':$val->rmb_amnt;?></td> </tr>
	   	  				<?php } }?>
<!--		   	  		<tr> <td colspan="2" style="text-align: center;">合计</td> <td>--><?php //echo empty($subTotal->wlbi_amnt_total)?'0':$subTotal->wlbi_amnt_total;?><!--</td> <td>--><?php //echo empty($subTotal->wlbao_amnt_total)?'0':$subTotal->wlbao_amnt_total;?><!--</td> <td>--><?php //echo empty($subTotal->rmb_amnt_total)?'0':$subTotal->rmb_amnt_total;?><!--</td> </tr>-->
		   	  	</table>
		   	  </div>
		   	  <div class="the_order_rig">
		   	  	<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1332','catId'=>'17']); ?>" class="yitu"> <img src="<?php echo $pc_style; ?>img/83.png"/> </a>
		   	  	<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'783','catId'=>'7']); ?>" class="yitu"> <img src="<?php echo $pc_style; ?>img/84.png"/> </a>
		   	  </div>
		   </div>
		</div>
		
		<!--尾部部分-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/giveHigh.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  var dex ;
			  $('#order_Type>li').on('click',function(){
			  	  dex = $(this).index();
			  	  
			  	  if(dex == 0){
			  	  	//alert("asdfas");
                      location.href="<?php echo  Yii::$app->urlManager->createUrl(['user/diamond_index','type' => 1]);?>";
			  	  }else if(dex == 1){
                      location.href="<?php echo  Yii::$app->urlManager->createUrl(['user/diamond_index','type' => 2]);?>";

                      //location.href = ("");
		  	  		}
			  	 // return false;
//                $('#bulk_1').click(function () {
//                    location.href = "<?php //echo \Yii::$app->urlManager->createUrl(['user/diamond_index','type'=>'group']);?>//";
//                    $('#store').css('display','none')
//                    $('#bulk').css('display','block')
//                });
//
//                $('#bulk_2').click(function () {
//
//                    $('#store').css('display','block')
//                    $('#bulk').css('display','none')
                });
			  
			});


		</script>
		
	</body>
</html>
