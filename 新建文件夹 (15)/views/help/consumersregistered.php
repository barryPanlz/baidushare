<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-消费者注册 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>	
	<body>
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		
		<div class="redXian"></div>
		<!--帮助中心内容区-->
		<div class="super_help_content">
			<div class="help_content">

				<?php echo \Yii::$app->view->renderFile('@app/views/layouts/helpcate.php'); ?>
				<!--右边的内容区-->
				<div class="help_content_rig">
					<div class="help_path">
						<span> 首页 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 常见问题 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 注册登录 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 消费者注册 </span>
					</div>
					<h5> 消费者注册 </h5>
					<h6> 如果您还没有三界商城账号，请点击  <a href="">注册</a>，详细操作步骤如下： </h6>
					<p> 1、打开三界商城，在网站顶部，点击“注册”按钮。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/signup_03.jpg"/> </div>
					<p class="help_content_p2"> 2、进入注册页面，请填写您的手机、邀请码等信息。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/signup_07.jpg"/> </div>
					<p class="help_content_p2"> 3、如果没有推荐人，可以点击“获得系统邀请码”在“新手引导”页面找到默认的邀请码来用。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/signup_10.jpg"/> </div>
				</div>
				
			</div>
		</div>
		
		
		
	    <!--底部-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(document).ready(function(){ 
			var help_left = $('.help_content_left>li'); 
		   for( var i = 0; i < help_left.length; i++  ){
		   	  help_left[i].index = i;	
		   	  help_left[i].onclick = function(){  
		 
      	   	  	$(this).find('ol').show();
      	   	  	$(this).siblings().find('ol').hide();
		   	  	
		   	  };
		   	  
//		   	  help_left[i].onmouseleave = function(){  
//		 
//    	   	  	$(this).find('ol').hide();
//		   	  	
//		   	  };
		   };
		});	
		</script>
		
	</body>
</html>
