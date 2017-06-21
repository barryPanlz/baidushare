<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 付款失败 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head> 
	<body>
		
 
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		
		
		<!--结算页头部-->
		<div class="super_enroll_top super_enroll_top1">
			<div class="enroll_top">
				<img src="<?php echo $pc_style; ?>img/logo_life.png"/>
				<span> 结算页 </span>
				<img style="margin-left: 400px;" src="<?php echo $pc_style; ?>img/liucheng22.png"/>
			</div>
		</div>
		
		<!--付款失败页内容区-->
		<div class="super_settle_ment super_failure ">
			<div class="settle_ment failure ">
				<!--付款失败的内容-->
				<div class="prompt_1 Fail">
					<img src="<?php echo $pc_style; ?>img/cha1.png"/>
					<h3> 付款失败，请您在48小时内重新付款，逾期订单取消 </h3> <br />
					<p> 亲的付款问题出现了问题哦，请您检查重新付款哦 </p>
				</div>
				
				<div class="order_details">
					<p> 订单号：<span> <?php echo empty($info->order_no)?'':$info->order_no; ?> </span> </p>
					<p class="order_details_p1"> 需付金额：<span>   <?php echo empty($info->txamnt)?'':$info->txamnt; ?> </span> </p>
					<a class="To_view re_pay re_pay_life" href="<?php echo \Yii::$app->urlManager->createUrl(['life/pay_order','order_sn'=>$info->order_no])?>"> 重新付款 </a>
				</div>
				
				
				
			</div>
		</div>
		
 
		
		
		
		<!--底部-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<!--<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>-->
		
 
	</body>
</html>
