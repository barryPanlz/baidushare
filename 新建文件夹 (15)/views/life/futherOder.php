<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>提交订单</title>
		
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>lifecss/live/futherOder.css" />
	</head>

	<body>
		<!--头部用户导航-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search fix">
			<div class="Search">
				<a href="<?php echo Yii::$app->urlManager->createUrl('life/index')?>"><img src="<?php echo $pc_style; ?>img/life_logo.png" /></a>
				<div class="live l-o"> <span class="r"><b>提交订单</b></span></div>
				<div class="plain">
					<img src="<?php echo $pc_style; ?>img/liucheng1.png" alt="" />
				</div>
			</div>
		</div>
	
		<!--购买信息-->
		<div class="order-cont">
			<div class="data-width">
				<div class="buyer">
					<div class="buyer-top">
						<img src="<?php echo $pc_style; ?>img/user-icons1.png" alt="" />
						<h3>买家信息</h3>
					</div>

					<div class="buyer-txt">
						<p class="user">姓名:<span><?php echo !empty($user_details->user_name)?$user_details->user_name:$user_details->mobile_phone; ?></span></p>
						<p class="num">手机:<span><?php echo !empty($user_details->mobile_phone)?$user_details->mobile_phone:""; ?></span></p>
                        <input type="hidden" name="usercode" value="<?php echo !empty($user_details->usercode)?$user_details->usercode:""; ?>" />
					</div>
				</div>
				<!--订单信息-->
				<div class="order-info">
					<div class="buyer-top">
						<img src="<?php echo $pc_style; ?>img/dingdan-icons1.png" alt="" />
						<h3>订单信息</h3>
					</div>

					<div class="info-box">
						<ul class="info-tit">
							<li class="tit-x">商品信息</li>
							<li class="tit-d">单价</li>
							<li class="tit-s">数量</li>
							<li class="tit-h">合计</li>
						</ul>
						<div class="info-text">
							<ul class="text-box">
                                <input type="hidden" name="store_goods_id" value="<?php echo $goods_info['store_goods_id']; ?>" />
                                <input type="hidden" name="store_id" value="<?php echo $goods_info['store_id']; ?>" />
                                <input type="hidden" name="cat_id" value="<?php echo $goods_info['cat_id']; ?>" />
                                <input type="hidden" name="num" value="<?php echo $num; ?>" />
								<li class="li-p"><img src="<?php echo $pic_host.$goods_info['goods_img']; ?>" alt="" /></li>
								<li class="li-x"><?php echo $goods_info['goods_name']; ?></li>
                                <?php if($goods_info['is_hot'] == 1){ ?>
                                    <li class="li-d"><?php echo $goods_info['promote_price']; ?></li>
                                    <li class="li-n">x <span><?php echo $num; ?> </span></li>
                                    <li class="li-h"><span><?php echo $goods_info['promote_price']*$num; ?></span>(三界石)</li>
                                <?php }else{  ?>
                                    <li class="li-d"><?php echo $goods_info['shop_price']; ?></li>
                                    <li class="li-n">x <span><?php echo $num; ?> </span></li>
                                    <li class="li-h">￥<span><?php echo $goods_info['shop_price']*$num; ?></span></li>
                                <?php } ?>

							</ul>
						</div>
						<div class="rule-txt">
							<h4>使用规则:</h4>
							<p>有效期2016-08-05至2016-12-31
								<br />温馨提示:如需团购券发票，请您在消费时向商户咨询;<br />
								预约信息：
								无需预约，如遇消费高峰时段您可能需要排队<br />
								商家服务：提供免费WiFi规则提醒需到店自提;不再与其他优惠同享
							</p>
						</div>
						<div class="sub-btm" id="found_order">
							<a>提交订单</a>
						</div>
					</div>
				</div>
				<div style="height:20px;"></div>
			</div>
		</div>
      <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
        <script>
        $(function() {
             $('#found_order').click(function(){
                    var store_goods_id = $("input[name='store_goods_id']").val();
                    var cat_id = $("input[name='cat_id']").val();
                    var store_id = $("input[name='store_id']").val();
                    var num = $("input[name='num']").val();
                    var userCode = $("input[name='usercode']").val();
                    var pic = "<?php echo $goods_info['goods_img']; ?>";
                 //var pic = "asdfasdfasd";
                    var name = "<?php echo $goods_info['goods_name']; ?>";
                    var activityId = "<?php echo empty($goods_info['activity_id']) ? "0" : $goods_info['activity_id'] ;?>";
                    var postscript = "0";
                    var storeGoodsPrice = "0";
                    var orderAmount  = "0";
                    var orderStatus  = "0";
                    var orderCode  = "0";
                    var currencyType = "<?php echo empty($goods_info['is_hot'])? 1 : 2 ;?>";
                    $.ajax({
                        type:'POST',
                        data:'storeGoodsId='+store_goods_id+'&userCode='+userCode+'&cat_id='+cat_id+'&storeId='+store_id+'&goodsNum='+num+'&postscript='+postscript+'&storeGoodsPrice='+storeGoodsPrice+'&orderAmount='+orderAmount+'&orderStatus='+orderStatus+'&orderCode='+orderCode+'&currencyType='+currencyType+'&pic='+pic+'&name='+name+'&activityId='+activityId,
                        dataType:'json',
                        url:'<?php echo Yii::$app->urlManager->createUrl('life/submitorder');?>',
                        success:function(data){
                             if(data.errno==0 && currencyType == 1) {
                                 alert(data.error);
                                 location.href = "<?php echo Yii::$app->urlManager->createUrl('life/pay_order');?>?order_sn=" + data.data;

                             }else if(data.errno==0 && currencyType == 2){
                                 alert(data.error);
                                 location.href= "<?php echo Yii::$app->urlManager->createUrl('life/pay_orders');?>?order_sn="+data.data;
                             }else{
                                alert(data.error);
                             }
                        },
                    });
             })
        });
        </script>
	</body>

</html>
