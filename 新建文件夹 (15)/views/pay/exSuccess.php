<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 兑换成功 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>
	<body style="background: #f6f6f6;">
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>		
		
		<!--结算页头部-->
       <div class="super_enroll_top">
			<div class="enroll_top">
				<a class="enroll_top_logo" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']); ?>">
				<img src="<?php echo $pc_style; ?>img/logo.png"/>
				</a>
				<span>结算页 </span>
				<img class="enroll_top_img" src="<?php echo $pc_style; ?>img/liucheng2.png"/>
			</div>
		</div>
		<!--付款成功页内容区-->
		<div class="super_settle_ment super_failure ">
			<div class="settle_ment failure ">
				<!--付款成功的内容-->
				<div class="prompt_1 Fail">
					<img src="<?php echo $pc_style; ?>img/gou.png"/>
					<h3> 兑换成功 </h3> <br />
				</div>
				<div class="order_details">
					<p> 兑换信息：  <span> 5000.00三界石兑换成900.00人民币 </span> </p>
					<a class="To_view re_pay1"  href=""> 返回兑换首页  </a>
				</div>
			</div>
		</div>
		<!--底部-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>	
		
	</body>
</html>
