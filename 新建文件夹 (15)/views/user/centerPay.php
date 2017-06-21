<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>充值</title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/centerPay.css" />
	</head>
	<body>
		<!--遮罩充值的的-->
		<div class="pay-mark">
			<div class="pay-mbox">
				<h3 class="tit">
					提示
				</h3>
				<p>请在第三方支付页面完成操作...</p>
				<div class="pay-btn-box">
					   <a class="yes">我已完成支付</a>
				       <a class="no">取消</a>
				</div>
			</div>
		</div>
		
		
		<!--头部用户导航-->
	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search fix">
			<div class="Search">
				<a href="<?php \Yii::$app->urlManager->createUrl(['index/index']);?>"<img style="float: left;" src="<?php echo $pc_style; ?>img/logo_life.png" />
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
					<a class="channel-l" href="<?php echo $pc_style; ?>index.html">
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
						<a href="../others/Share.html" >分享邀请</a>
					</div>
				</div>
		    </div>
		</div>		
		<div class="pay-cont">
			<div class="data-width">
				<div class="pay-box">
					<h3 class="tit">充值</h3>
					<div class="pay-txt-info">
						<ul>
							<li>账户余额：<span class="num">2100</span><span class="b">三界石</span></li>
							<li>我的身份：<span class="jewel">创业会员</span></li>
							<li>兑换费率：<span class="ratio">50:100</span><span class="suffix">（50元可充值100三界石）</span></li>
						</ul>
					</div>
					
					<div class="pay-topUp">
						<label for="" class="r-text">充值金额</label>
						<input type="text" placeholder="请输入数字" />
						<span>三界石</span>
					</div>
					
					<div class="pay-hint">
						<span class="r-text">需支付</span>
						<span>输入充值金额后在此显示需支付的人民币数额</span>
					</div>
					<div class="fix pay-way">					
						<span class="fl r-text">支付方式</span>
						<!--<ul class="pay-select fl">							
							<li class="zhifubao item">
								<input type="radio" name="1"/>
								<div ><img src="<?php echo $pc_style; ?>img/zhifubao.png" alt="" /></div>
							</li>
							<li class="weixin item">
								<input type="radio"  name="1"/>							
								<div><img src="<?php echo $pc_style; ?>img/wechat-mobile-payment.png" alt="" /></div>
								<span>更快更安全</span>
							</li>
							<li class="yinlian item">
								<input type="radio"  name="1"/>
								<div><img src="<?php echo $pc_style; ?>img/yinlianzhifu.png" alt="" /></div>							
								<span>支持网银支付、银行卡快捷支付</span>
							</li>
						</ul>	-->
						
						<ul class="pay-select fl">							
							<li class="zhifubao item">
								<input type="radio" name="1"/>
								<div ><img src="<?php echo $pc_style; ?>img/zhifubao.png" alt="" /></div>
							</li>
							<li class="weixin item">
								<input type="radio"  name="1"/>							
								<div><img src="<?php echo $pc_style; ?>img/wechat-mobile-payment.png" alt="" /></div>
								<span>更快更安全</span>
							</li>
							<li class="yinlian item">
								<input type="radio"  name="1"/>
								<div><img src="<?php echo $pc_style; ?>img/yinlianzhifu.png" alt="" /></div>							
								<span>支持网银支付、银行卡快捷支付</span>
							</li>
						</ul>		
					</div>
					<div class="pay-btn">
						<a>立即支付</a>
					</div>
				</div>				
			</div>
		</div>	
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
			<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
	
		<script>
			$(function(){
				$('.pay-select li input').click(function(){														
				    $('.pay-select li').children("div").removeClass('abcdf');
					$(this).next("div").addClass('abcdf');
				})
				$('.pay-btn-box').click(function(){
					$('.pay-mark').hide();
				})
			})			
		</script>
	</body>
</html>





























