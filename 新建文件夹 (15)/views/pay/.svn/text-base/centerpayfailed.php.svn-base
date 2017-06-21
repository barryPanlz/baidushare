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
	
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
     	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		<!--频道跳转栏-->
		
		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box .fix">
					<a class="channel-l">
						<!--<img src="../../img/hanbao.png" alt="" />-->
						<span>返回商城首页</span>
					</a>
					
					<div class="channel-c">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index'])?>">三界会员</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order'])?>">我的订单</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant'])?>" class="color_title_fist">我的账房</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend'])?>">我的推荐</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings'])?>">账户设置</a>
					
					</div>
					<div class="channel-r">
						
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong'])?>">三界石</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao'])?>">三界宝</a>	
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share'])?>">分享邀请</a>
					</div>
				</div>
		    </div>
		</div>
		
		<div class="pay-cont pay-fail-h">
			<div class="data-width">
				<div class="pay-box pay-failBox">
					<h3 class="tit">充值</h3>
					<div class="pay-fail">
						<img src="<?php echo $pc_style; ?>img/shibai.png" alt="" />
						<p>充值失败 建议您重新充值</p>
					</div>
					<ul class="pay-fail-box">
						<li class="pay-fail-txt">
							<span class="item">充值金额：</span>
							<p><?php echo empty($_GET['total_sjt_fee'])?'0':$_GET['total_sjt_fee']; ?>三界石</p>
						</li>
						<li class="pay-fail-txt">
							<span class="item">需支付：</span>
							<p>￥<span><?php echo empty($_GET['total_fee'])?'0':$_GET['total_fee']; ?></span>元</p>
						</li>
						<li class="pay-fail-txt">
							<span class="item">支付方式：</span>
							<p>支付宝</p>
						</li>
					</ul>					
					<div class="rePay-btn">
                     <form action="<?php echo \Yii::$app->urlManager->createUrl(['pay/applyrecharge']);?>" method="post" id="formid" target="_blank">
                     <input type="hidden" name="sanjieprice" value="<?php echo empty($_GET['total_sjt_fee'])?'0':$_GET['total_sjt_fee']; ?>" />

                     <input type="hidden" name="pay_type" value="<?php echo empty($_GET['pay_type'])?'1':$_GET['pay_type']; ?>" />
                      <input type="hidden" value="<?php echo empty($_GET['bili'])?'0':$_GET['bili']; ?>" name="bili" />
                     </form>
						<a onclick="pay()">重新支付</a>
					</div>
				</div>				
			</div>
		</div>	

     	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
	
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
        <script>
         function pay(){
                $("#formid").submit();
            }
        </script>
	</body>
</html>





























