<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>提现完成</title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/withdraw.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>
	<body>
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		<!--频道跳转栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/link_user.php'); ?>

		
		
		<div class="w_wrap">
			<div class="w">
				<div class="wi_chongzhi wi_chongzhi1">
					<div class="per_mingxi_top">
						<div class="per_mingxi_top_title">
							<span>提现</span>
						</div>
					</div>
					<div class="wi_shenqing_wrap">
						<div class="wi_shenqing">
							<img src="<?php echo $pc_style; ?>img/chenggong.png"/>
							<ul>
								<li class="wi_shenqing_li_top">提现申请已提交，请等待平台处理</li>
								<li class="wi_shenqing_li_bottom">到账时间：1-2个工作日，遇周末、节假日则自动顺延。</li>
							</ul>
						</div>
					</div>
					
					
				</div>
				
				<div class="wi_yinhangka">
					<div class="wi_left_wrap">
						<ul>
							<li class="wi_yinhangka_li_left">提现卡号</li>
							<li class="wi_yinhangka_li_right"><span>招商银行（尾号</span><span>4440</span>）</li>
						</ul>
						<ul>
							<li class="wi_yinhangka_li_left">提现金额</li>
							<li class="wi_yinhangka_li_right"><span>￥</span><span>4440</span></li>
						</ul>
						<ul>
							<li class="wi_yinhangka_li_left">提现时间</li>
							<li class="wi_yinhangka_li_right"><span>2016-11-11 16:56:56</span></li>
						</ul>
					</div>
					<div class="wi_left_wrap">
						<button onclick="location.href='withdraw.html'">返回提现首页</button>
					</div>
					
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
