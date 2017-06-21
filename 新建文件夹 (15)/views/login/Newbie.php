<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 新手上路 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/> 
	</head>
	
	<body>
				<!--头部用户导航-->
			<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		
		<!--注册头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<img src="<?php echo $pc_style; ?>img/logo.png"/>
				<span> 欢迎注册 </span>
			</div>
		</div>
		
		<!--新手上路-->
		<div class="super_Newbie_road">
		   <div class="Newbie_road">
		   	  <h3> 新手上路——<!--<span>--> 推介会员有奖<!-- </span>--> </h3>
		   	  <h6 style="margin-top: 20px;"> 1. 何为三级分销： </h6>
		   	  <p> 本协议是您与京东网站（简称"本站"，网址：www.jd.com）所有者（以下简称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议本协议是您与京东网站（简称"本站"，网址：www.jd.com）所有者（以下简称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议本协议是您与京东网站（简称"本站"，网址：www.jd.com）所有者（以下简称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协，
 </p>
             <h6>  2.三级分销怎么操作? </h6>
             <p> 本协议是您与京东网站（简称"本站"，网址：www.jd.com）所有者（以下简称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议本协议是您与京东网站（简称"本站"，网址：www.jd.com）所有者（以下简称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议本协议是您与京东网站（简称"本站"，网址：www.jd.com）所有者（以下简称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议称为"京东"）之间就京东网站服务等相关事宜所订立的契约，请您仔细阅读本注册协，
 </p>
		   	<h6>  3.关于邀请码： </h6> 
		   	<p> —通过推荐人获得邀请码。
—通过分享所得二维码扫描后获得邀请码。
—没有人推荐？输入系统默认的邀请码进行注册，直接复制此邀请码即可成功注册：<?php echo $syscode;?>
		   	</p>
		   </div>
		</div>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
			
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>	
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		 
	</body>
</html>
