<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 结算页 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body style="background: #f6f6f6;">		
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		
		
		<!--结算页头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<img src="<?php echo $pc_style; ?>img/logo_life.png"/>
				<span> 结算页 </span>
				<img style="margin-left: 400px;" src="<?php echo $pc_style; ?>img/liucheng2.png"/>
			</div>
		</div>
		
		<!--结算页内容区-->
		<div class="super_settle_ment">
			<div class="settle_ment" style="height: 466px;">
				<!--结算时的内容-->
				<div class="prompt_1">
					<h3> 订单提交成功，请尽快支付 </h3>
					<p> 请您在提交订单后，于<a href="">48小时内</a>完成支付，否则，订单会自动取消。 </p>
				</div>
				
				<div class="order_details">
					<p> 订单号：<span> 18204588888 </span> </p>
					<dl> 应付总额（三界石）: <em> 6164.00 </em> </dl>
					<a class="To_view " href=""> 查看订单 </a>
				</div>
				
				<div class="pay_to">
					<h4> 支付方式 </h4>
					<dt> <span> 账户余额 </span> <em> （6164.00三界石） </em> <a href="centerPay.html"> 去充值 </a> </dt>
					<a class="Immediate_payment" href="PaymentSuccess.html"> 立即支付 </a>
				</div>
				
				
				
			</div>
		</div>
		
		
		
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		
	</body>
</html>
