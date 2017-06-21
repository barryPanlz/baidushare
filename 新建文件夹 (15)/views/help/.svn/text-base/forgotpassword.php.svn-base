<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-忘记密码 </title>
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

				<!--右边的内容区 begin -->
				<?php echo \Yii::$app->view->renderFile('@app/views/layouts/helpcate.php'); ?>
				<!--右边的内容区  end  -->


				<div class="help_content_rig">
					<div class="help_path">
						<span> 首页 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 常见问题 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 注册登录 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 忘记密码 </span>
					</div>
					<h5> 忘记密码 </h5>
					<h6> 如果您忘记了自己的登录密码，可以按照以下流程找回密码： </h6>
					<p> 1、打开三界商城，在网站顶部，点击“登录”按钮。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wjmm_03.jpg"/> </div>
					<p class="help_content_p2"> 2、在登录页面，点击“忘记密码”按钮。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wjmm_07.jpg"/> </div>
					<p class="help_content_p2"> 3、在找回密码页面，输入您的注册手机号并验证号码，重新设置新密码即可。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wjmm_11.jpg"/> </div>
				    <p class="help_content_p2"> 4、如果以上方法还是无效，或者您不会操作，可以直接联系客服：010-57210185 </p>
				 
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
