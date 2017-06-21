<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-兑换流程 </title>
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
						<span style="color: #282828;"> 兑换流程 </span>
					</div>
					<h5> 兑换流程 </h5>
					<h6> “三界商城”的商品兑换流程基本类似于其它的电商平台，如果您还有不清楚的地方，请参考以下操作流程： </h6>
					<p> 1、打开三界商城首页，直接翻阅首页商品，点击商品图片打开商品详情页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_03.jpg"/> </div>
					<p class="help_content_p2"> 2、也可以在搜索框直接输入关键词搜索商品，进而在搜索结果页点击商品图片打开商品详情页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_06.jpg"/> </div>
					<p class="help_content_p2"> 3、还可以点击左上角“商品分类”打开商品分类列表，再通过点击商品图片打开商品详情页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_08.jpg"/> </div>
					<p class="help_content_p2"> 4、在商品详情页，选择商品的规格、购买数量之后，直接点击“立即购买”按钮，进入提交订单页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_10.jpg"/> </div>
					<p class="help_content_p2"> 5、如果您有多件商品要买，可直接点击“加入购物车”按钮，之后再通过此类操作继续添加商品进入购物车，最后点击网站顶部右上角的“我的购物车”按钮进入购物车页面。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_12.jpg"/> </div>
					<p class="help_content_p2"> 6、在购物车页面，选择您要购买的商品之后，点击“结算”按钮，进入提交订单页面。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_14.jpg"/> </div>
					<p class="help_content_p2"> 7、在提交订单页面，选择收货人地址，然后确认订单中的商品信息（主要是商品规格、购买数量）是否正确，然后点击“提交订单”按钮，进入结算页。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_16.jpg"/> </div>
					<p class="help_content_p2"> 8、在结算页，如果账户余额充足，则直接点击“立即支付”按钮即可购买成功；若余额不足，则点击“去充值”按钮前往充值页面，充值完成后前往<span>”会员中心“-”商城订单“-“待付款”</span>”列表中找到此订单，继续完成付款即可。 </p>
					<div> <img src="<?php echo $pc_style; ?>img/dhlc_18.jpg"/> </div>
					<p class="help_content_p2"> 9、付款成功后，平台会把订单发送给供应商，您只需等待收货就行了，如有需要，可在“<a href="">会员中心</a>”-“<a href="">商城订单</a>”-“<a href="">待收货</a>”页面查看订单的物流单号，点击“查看物流”在第三方物流网站查询您的商品物流进展。 </p>
				    <div> <img src="<?php echo $pc_style; ?>img/dhlc_20.jpg"/> </div>
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
