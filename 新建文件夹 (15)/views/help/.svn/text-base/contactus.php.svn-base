<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 联系我们 </title>
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
						<a href="<?php echo $pc_style; ?>index.html"> 首页 </a>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 常见问题 </span> 
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 联系我们 </span>
					</div>
					<h5> 联系我们 </h5>
					<ul class="us_ul">
						<li> <span class="us_ul_span"> 客服电话 </span>  <span> 400-0680-162 </span> </li> 
					</ul> 
					<ul class="us_ul">
						<li> <span class="us_ul_span"> 热线电话 </span>  <span>  010-57210185 </span> </li> 
					</ul> 
					<ul class="us_ul">
						<li> <span class="us_ul_span"> 微信服务号 </span>  <span>  三界生活 </span> </li> 
					</ul> 
					<h6 class="us_h6"> 招商部 </h6>
					<ul class="us_ul">
						<li> <span> 微信名： </span>  <i> 三界生活ISANJIE </i> </li>
						<li> <span> 微信名： </span>  <i> 三界生活小助手 </i> </li>
					</ul>
					<ul class="us_ul">
						<li> <span> 微信号： </span>  <i> isanjiecom </i> </li>
						<li> <span> 微信号： </span>  <i> isanjieBIZSchool </i> </li>
					</ul>
					<div class="us_div"> 
						<img src="<?php echo $pc_style; ?>img/weixin_01.jpg"/>
						<img class="us_div_img" src="<?php echo $pc_style; ?>img/weixin_02.jpg"/> 
				    </div>
				    <ul class="us_ul">
						<li> <span>招商热线： </span>  <i> 13718649545 </i> </li> 
					</ul>
					<ul class="us_ul">
						<li> <span> 短信/微信： </span>  <i> 13718564971 </i> </li> 
					</ul>
					<ul class="us_ul">
						<li> <span> 短信/微信： </span>  <i> 13718564971 </i> </li> 
					</ul>
					<ul class="us_ul">
						<li> <span> 华北地区： </span>  <i> 13718564971 </i> </li> 
					</ul>
					<ul class="us_ul">
						<li> <span> 华南地区： </span>  <i> 13718564971 </i> </li> 
					</ul>
										<ul class="us_ul">
						<li> <span> 华中地区： </span>  <i> 13718564971 </i> </li> 
					</ul>
										<ul class="us_ul">
						<li> <span> 西南地区： </span>  <i> 13718649545 </i> </li> 
					</ul>
					 
				    
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
