<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>结算页</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/live/futherOder.css" />
	</head>

	<body>
		<!--头部用户导航-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search fix">
			<div class="Search">
				<a href="<?php echo \Yii::$app->urlManager->createUrl(['life/index']);?>"><img  src="<?php echo $pc_style; ?>img/life_index/lifelogo.png" /></a>
				<div class="live l-o">三界生活<span class="l"></span >本地 <span class="r">结算页</span></div>
				<div class="plain">
					<img src="<?php echo $pc_style; ?>img/liucheng22.png" alt="" />
				</div>
			</div>
		</div>
		<div class="succ-main">
			<div class="data-width">
				<div class="succ-status">
					<div class="succ-t">
						<img src="<?php echo $pc_style; ?>img/tijiaochenggong.png" alt="" />
						<h3>订单提交成功，请尽快支付</h3>
					</div>
					<p>
						请您在提交订单后，于15分钟内完成支付，否则，订单会自动取消。
					</p>
				</div>

				<div class="pay-box">
					<ul class="pay-tit fix">
						<li class="pay-tit-one">应付总额（人民币）: <span>￥<?php echo $order_info['order_amount']; ?></span></li>
						<li class="pay-tit-two">订单号：<span><?php echo $order_info['store_order_sn']; ?></span></li>
						<li class="pay-tit-three">
							<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','type'=>'2']);?>">查看订单详情</a>
						</li>
					</ul>
                    <form action="<?php echo \Yii::$app->urlManager->createUrl(['life/pay_logic']);?>" method="post" id="formid" target="_blank">
		
					<!--修改ie7的bug-->
					<ul class="pay-select fix">
						<li class="zhifubao fix">
							<input type="radio" name="pay_type" value="1" />
							<div><img src="<?php echo $pc_style; ?>img/zhifubao.png" alt="" /></div>
						</li>
						<!--<li class="weixin fix">
							<input type="radio" name="1" />
							<div><img src="<?php echo $pc_style; ?>img/wechat-mobile-payment.png" alt="" /></div>
							<span>更快更安全</span>
						</li>
						<li class="yinlian fix">
							<input type="radio" name="1" />
							<div><img src="<?php echo $pc_style; ?>img/yinlianzhifu.png" alt="" /></div>
							<span>支持网银支付、银行卡快捷支付</span>
						</li>-->
					</ul>
                    
                        <input type="hidden" name="store_order_sn" value="<?php echo $order_info['store_order_sn']; ?>" />
    					<div class="pay-btn" >
    						<a id="logic">立即支付</a>
    					</div>
                    </form>
				</div>
			</div>
		</div>

	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script>
			$(function() {
				$('.pay-select li input').click(function() {
					$('.pay-select li').children("div").removeClass('abcdf');
					$(this).next("div").addClass('abcdf');
				})
                $("#logic").click(function(){
                     var pay_type = $("input[name='pay_type']:checked").val();
                     if(typeof(pay_type)=='undefined'){
                        alert("您还没有选择支付方式！");return false;
                     }
                     $("#formid").submit();
                })
			})
		</script>
	</body>

</html>
