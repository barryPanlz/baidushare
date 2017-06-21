<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 登录页 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css">
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	
	
	
	<body style="background: #F6F6F6;">
		
		<!--登录头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<img src="<?php echo $pc_style; ?>img/logo_life.png"/>
				<span> 欢迎登录 </span>
			</div>
		</div>
		
		<!--登录页内容区-->
		<div class="super_To_login">
			<div class="To_login">
				<img src="<?php echo $pc_style; ?>img/bg.png"/>
				<div class="The_login">
				   <h2> 账号登录 </h2>	
				   <div class="Do_match">
				   	  <img src="<?php echo $pc_style; ?>img/hongdian.png"/>
				   	  <span> 密码输入错误/账号不存在/账号，密码不匹配 </span>
				   </div>
				   <li class="Input_box"> 
				   	<span> 账号 </span>
				   	<font id="renTu"> <img src="<?php echo $pc_style; ?>img/zhanghu.png"/> </font>
				   	<input type="text" name="" id="Enter_phone" placeholder="输入手机号" />
				   </li>
				   <li class="Input_box"> 
				   	<span> 密码 </span>
				   	<font id="suoTu"> <img src="<?php echo $pc_style; ?>img/denglu_denglumima.png"> </font>
				   	<input type="password" name="" id="Enter_psd" placeholder="输入登录密码" />
				   </li>
				   <div class="in_mind" id="in_mind">
				   	  <img src="<?php echo $pc_style; ?>img/juxing.png"/><span> 记住密码 </span>
				   </div>
				   <input  type="button" class="denglu" id="" value="登录" />
				   <div class="has has1">
			  	 	  <a href="repassword.html"> 忘记密码？ </a> <span> 免费登录 </span>
			  	   </div>
				</div>
			</div>
		</div>
		
		
		<!--尾部部分-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
