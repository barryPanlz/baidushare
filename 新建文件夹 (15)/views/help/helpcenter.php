<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心 </title>
		
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>
	
	
	
	<body>
		
		
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">				
				<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">	<img src="<?php echo $pc_style; ?>img/logo.png"/></a>
			</div>			
		</div>		
		
		<div class="redXian"></div>
		<!--帮助中心内容区-->
		<div class="super_help_content">
			<div class="help_content">
				

				<?php echo \Yii::$app->view->renderFile('@app/views/layouts/helpcate.php'); ?>

				<div class="help_content_rig">
					<div class="help_path">
						<span> 首页 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 常见问题 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 用户注册 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 消费者注册 </span>
					</div>
					<h5> 如何注册? </h5>
					<p> 1、进入三界商城，点击  “<a href=""> 注册 </a>” </p>
					<div> <img src="<?php echo $pc_style; ?>img/help1.jpg"/> </div>
					<p style="margin-top: 50px;"> 2、进入页面，填写相关信息 </p>
					<div> <img src="<?php echo $pc_style; ?>img/help2.jpg"/> </div>
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
