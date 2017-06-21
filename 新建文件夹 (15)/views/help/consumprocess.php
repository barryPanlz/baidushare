<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-消费流程 </title>
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
						<span> 消费指南 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 消费流程 </span>
					</div>
					<h5> 消费流程 </h5>
					<h6> “三界生活”的商品消费流程基本类似于其它的O2O团购平台，如果您还有不清楚的地方，请参考以下操作流程： </h6>
					<p> 1、打开三界商城首页，点击导航栏的“三界本地”按钮。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_01.jpg"/> </div>
					<p class="help_content_p2"> 2、在三界生活首页，上下滑动页面查看团购信息并点击团购图片进入团购详情页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_02.jpg"/> </div>
					<p class="help_content_p2"> 3、也可以点击左上角“全部分类”打开分类列表，再通过点击团购图片打开团购详情页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_03.jpg"/> </div>
					<p class="help_content_p2"> 4、还可以直接输入关键词搜索您要找的团购信息，在搜索结果页点击团购图片打开团购详情页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_04.jpg"/> </div>
					<p class="help_content_p2"> 5、在团购详情页，选择购买数量之后，直接点击“立即购买”按钮，进入提交订单页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_05.jpg"/> </div>
					<p class="help_content_p2"> 6、如果您对某个实体店铺的商品比较感兴趣，可以在详情页标题旁点击“进店逛逛”按钮，进入店铺主页挑选商品。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_06.jpg"/> </div>
					<p class="help_content_p2"> 7、在提交订单页，确认订单中的商品信息是否有误（尤其是团购券的使用规则、有效期等信息），然后点击“提交订单”按钮。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_07.jpg"/> </div>
					<p class="help_content_p2"> 8、在结算页，选择一种第三方支付方式（其余额能一次性支付订单），点击“立即支付”按钮，之后在打开的第三方支付页面完成支付即可。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/wlcx_08.jpg"/> </div>
					<p class="help_content_p2"> 9、付款成功后，您可以看到自己的团购消费码，也可以在“三界会员”-“团购订单”-“待消费”页面相应的订单中查看到消费码。 </p>
				    <div> <img src="<?php echo $pc_style; ?>img/wlcx_09.jpg"/> </div>
				    <p class="help_content_p2"> 10、当您到达该实体店铺之后，将消费码提供给店员，对方确认消费码正确无误后即可消费成功。 </p>
				    <div> <img src="<?php echo $pc_style; ?>img/wlcx_10.jpg"/> </div>
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
