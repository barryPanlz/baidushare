<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-商家入驻 </title>
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
						<span style="color: #282828;"> 商家入驻 </span>
					</div>
					<h5> 商家入驻 </h5>
					<h6> 如果您是商品供应商或者实体店铺商家，则不能通过网站的注册页面直接注册账号，请按照以下流程操作：  </h6>
					<p> 1、打开三界商城，在网站导航栏右侧，点击“商家入驻”按钮。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/sjrz_03.jpg"/> </div>
					<p class="help_content_p2"> 2、进入商家入驻页面，请选择您的身份，然后输入相关信息，我们的客服会在第一时间联系到您，与您沟通注册需要提交的资料，并帮您完成注册。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/sjrz_06.jpg"/> </div>
					<p> 3、资料提交完毕后，客服将主动联系您，告知需准备的资料。 </p>
					<p> 4、商家提交资料，客服确认无误后准备合同，并将合同邮寄给商家； </p> 
					<p> 5、商家签字盖章后，将合同备份寄回给客服； </p> 
					<p> 6、客服收到合同后，将供应商的资料移交商城运营人员，此时合作正式开始。</p> 
			 
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
