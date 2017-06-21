<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/centerPay.css" />
	</head>
	<body>		
		<!--头部用户导航-->
			<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
	
		
		<!--搜索商品栏-->
		<div class="super_Search fix">
			<div class="Search" href="">
				<img style="float: left;" src="<?php echo $pc_style; ?>img/logo_life.png" />
				<!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
				<input type="button" class="suoSou" id="" value="搜索" />
				<a class="shopping_cart_icon">
					 <img src="<?php echo $pc_style; ?>img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
				</a>
				<div class="Text">
					<a href="">秋冬连衣裙</a>
					<a href=""> 耐克跑步鞋</a>
					<a href="">婴儿抱被 </a>
					<a href="">会员特供 </a>
					<a href="">买一送二</a>
				</div>-->
			</div>
		</div>	
		
		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box .fix">
					<a class="channel-l">
						<!--<img src="<?php echo $pc_style; ?>img/hanbao.png" alt="" />-->
						<span>返回商城首页</span>
					</a>
				<div class="channel-c">
						<a href="Diamond_index.html">三界会员</a>
						<a href="order.html">我的订单</a>
						<a href="accountant.html" class="color_title_fist">我的账房</a>
						<a href="myrecommend.html">我的推荐</a>
						<a href="accountsettings.html">账户设置</a>
					
					</div>
					<div class="channel-r">
						
						<a href="../others/sanjietong.html">三界石</a>
						<a href="../others/sanjiebao.html">三界宝</a>	
						<a href="../others/Share.html" class="color_title_fist">分享邀请</a>
					</div>
				</div>
		    </div>
		</div>
		
		<div class="pay-cont">
			<div class="data-width">
				<div class="pay-box pay-failBox  pay-succBox">
					<h3 class="tit">充值</h3>
					<div class="pay-fail">
						<img src="<?php echo $pc_style; ?>img/chenggong.png" alt="" />
						<p>充值成功 三界石已到账</p>
					</div>
					<ul class="pay-fail-box pay-succ-box">
						<li class="pay-fail-txt">
							<span class="item">账户总额：</span>
							<p>2000三界石</p>
						</li>
						<li class="pay-fail-txt">
							<span class="item">充值金额：</span>
							<p>2000三界石</p>
						</li>			
						<li class="pay-fail-txt">
							<span class="item">支付方式：</span>
							<p>支付宝</p>
						</li>
						<li class="pay-fail-txt">
							<span class="item">需支付：</span>
							<p>￥<span>1000</span>元</p>
						</li>
						<li class="pay-fail-txt">
							<span class="item">支付时间：</span>
							<p>2016-11-11   15:20</p>
						</li>
					</ul>
					
					<div class="rePay-btn">
						<a>返回支付首页</a>
					</div>
				</div>				
			</div>
		</div>	
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
	</body>
</html>





























