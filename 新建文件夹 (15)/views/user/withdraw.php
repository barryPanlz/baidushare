<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>提现</title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/withdraw.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>
	<body>
						<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		<!--频道跳转栏-->
		

		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/link_user_sanjie.php'); ?>
		
		<div class="w_wrap">
			<div class="w" style="background:#f6f6f6">
				<div class="wi_chongzhi">
					<div class="per_mingxi_top">
						<div class="per_mingxi_top_title">
							<span>提现</span>
						</div>
						<!--<div class="per_mingxi_top_right">
							<a href="">更多</a>
							<img src="<?php echo $pc_style; ?>img/xiaoyoujiantong.png"/>
						</div>-->
					</div>
					<div class="per_mingxi_content">
						<ul>
							<li class="wi_li_left">账户余额：</li>
							<li class="wi_li_right">￥<span>45200.00</span></li>
						</ul>
						<ul>
							<li class="wi_li_left">我的身份：</li>
							<li class="wi_li_right"><img src="<?php echo $pc_style; ?>img/gongyingshang.png"/></li>
						</ul>
						<ul>
							<li class="wi_li_left">提现额度：</li>
							<li class="wi_li_right">￥<span>10000.00</span></li>
						</ul>
					</div>
					<div class="wi_tixian per_mingxi_content">
						<ul>
							<li class="wi_li_left">提现金额</li>
							<li class="wi_li_right"><input type="text" name="" class="wi_input_left" placeholder="请输入数字"  id="" value="" /></li>
						</ul>
						<ul style="margin-top:20px ;">
							<li class="wi_li_left_big">提现到账号</li>
							<li class="wi_li_right_big">
								<div class="">
									<p>
										<span><input class="zhifu" type="radio" name="zhang" id="" value="" /></span><span>支付宝</span>
									</p>
									<p>
										<input type="text" name="" id="" value="" class="wi_input_left" placeholder="请输入支付宝名称" />
										<input type="text" name="" id="" value="" class="wi_input_right" placeholder="请输入支付宝账号"/>
									</p>
								</div>
								<div class="">
									<p>
										<span><input class="zhifu" type="radio" name="zhang" id="" value="" /></span><span>银行卡</span>
									</p>
									<p>
										<select name="" class="wi_input_left">
											<option value=""></option>
										</select>
										<input type="text" name="" id="" value="" class="wi_input_right" placeholder="请输入支付宝账号"/>
										<input type="text" name="" style="margin-left: 20px;" id="" value="" class="wi_input_left" placeholder="请输入持卡人姓名"/>
									</p>
								</div>
								
							</li>
						</ul>
					</div>
					
					
					<div class="wi_tijiao">
						<button onclick="location.href='withdrawover.html'">确认提交</button>
					</div>
					<div class="wi_liucheng">
						<p>提现流程：用户发起——>填写提现账号信息——>平台审核——>平台打款——>资金到账。</p>
						<p>到账时间：1-2个工作日，遇周末、节假日则自动顺延。</p>
						<p>客服咨询：400-0680-1628</p>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
