<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-消费码 </title>
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
						<span> 订单问题 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 消费码 </span>
					</div>
					<h5> 消费码 </h5>
				  
					<p class="help_content_p1">消费码，只存在于“三界生活”，当客户购买实体店铺的团购套餐之后，平台返还的一串数字验证码。</p>
					<p> 客户拿着消费码前往实体店铺消费时，商家登录我们的系统，然后直接输入消费码进行验证，就能看到订单的所有信息，进而确认客户的身份，完成整个消费闭环。 </p>
					<p> 同一种商品如果购买多份，则消费码也有多个，客户可以选择一次只消费一份或者全部消费掉，只要在有效期内即可。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/xfm_03.jpg"/> </div>
					 
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
