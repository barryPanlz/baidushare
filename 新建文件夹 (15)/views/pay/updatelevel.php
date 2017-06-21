<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>升级创业会员</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/updataD.css" />
        
	</head>

	<body>
		
		
		
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
     	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box .fix">
					<a class="channel-l ta_center" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
						<span>返回商城首页</span>
					</a>
					<div class="channel-c channel-d">
						<a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>"> 三界会员 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend']);?>"> 我的推荐 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>

		<!--失败弹出的窗-->
	   <div class="pay-mark">
			<div class="pay-mbox">
				<h3 class="tit">
					提示
				</h3>
				<p>请在第三方支付页面完成操作...</p>
				<div class="pay-btn-box">
					<a class="yes" href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>">我已完成支付</a>
					<a class="no">取消</a>
				</div>
			</div>
		</div>
          

		<!--内容页面-->
		<div class="updata-cont">

			<div class="data-width">
				<div class="big-tit">
					<div class="return">
						<img src="<?php echo $pc_style; ?>img/xiangzuo.png" alt="" />
						<a href="javascript:history.go(-1)">返回</a>
					</div>

					<div class="c">
						<span>升级创业会员</span>
					</div>

				</div>

				<div class="main-box">
					<p>第一个文案修改为：方法1：直接支付1000元会员费。
方法2：推荐普通会员注册，当他们在三界生活消费时您可以得到一定的奖励，奖励金额累计达到1000元后系统会自动将您升级为创业会员。
温馨提示：升级会员立得1000个三界石奖励。</p>
					<div class="radio_bo">
						<div class="fei fix">
							<ul>
								<li class="dm">升级费用：</li>
								<li class="m">￥</li>
								<li class="m">1000.00</li>
							</ul>
							<h3>支付方式</h3>
						</div>

						<ul class="pay-select fix">
							<li class="zhifubao fix">
								<input type="radio" name="pay_type" checked="checked" value="1"/>
								<div><img src="<?php echo $pc_style; ?>img/zhifubao.png" alt="" /></div>
							</li>
						<!-- 	<li class="weixin fix">
								<input type="radio" name="pay_type" value="2" />
								<div><img src="<?php echo $pc_style; ?>img/wechat-mobile-payment.png" alt="" /></div>
								<span>更快更安全</span>
							</li> -->
						</ul>
						<div class="pay-btn">
							<a target="_blank" href="<?php echo \Yii::$app->urlManager->createUrl(['pay/updatepay']);?>">立即支付</a>
						</div>
					</div>
					<div class="up_list">
						<ul class="ul_1">
							<li class="li_1 t_1"><span>操作权限</span></li>
							<li class="t_1"><span>普通会员</span></li>
							<li><span>创业会员</span></li>
						</ul>
						<ul>
							<li class="li_1">创业会员</li>
							<li>￥25 ：100三界石</li>
							<li>￥22：100三界石</li>
						</ul>
						<ul>
							<li class="li_1">转账权限（将三界石转账给平台上其他的账户）</li>
							<li><img src="<?php echo $pc_style; ?>img/red-shibai.png" alt="" /></li>
							<li><img src="<?php echo $pc_style; ?>img/green-chenggong.png" alt="" /></li>
						</ul>
						<ul>
							<li class="li_1">推荐供应商权限</li>
							<li><img src="<?php echo $pc_style; ?>img/red-shibai.png" alt="" /></li>
							<li><img src="<?php echo $pc_style; ?>img/green-chenggong.png" alt="" /></li>
						</ul>
						<ul>
							<li class="li_1">推荐的供应商销售业绩奖励</li>
							<li><img src="<?php echo $pc_style; ?>img/red-shibai.png" alt="" /></li>
							<li><img src="<?php echo $pc_style; ?>img/green-chenggong.png" alt="" /></li>
						</ul>
						<ul>
							<li class="li_1">推荐店铺权限</li>
							<li><img src="<?php echo $pc_style; ?>img/red-shibai.png" alt="" /></li>
							<li><img src="<?php echo $pc_style; ?>img/green-chenggong.png" alt="" /></li>
						</ul>
						<ul>
							<li class="li_1">推荐的店铺充值时的奖励</li>
							<li><img src="<?php echo $pc_style; ?>img/red-shibai.png" alt="" /></li>
							<li><img src="<?php echo $pc_style; ?>img/green-chenggong.png" alt="" /></li>
						</ul>
						<ul>
							<li class="li_1 li_b">推荐的普通会员升级为创业会员时的奖励</li>
							<li class=" li_b"><img src="<?php echo $pc_style; ?>img/red-shibai.png" alt="" /></li>
							<li class=" li_b"><img src="<?php echo $pc_style; ?>img/green-chenggong.png" alt="" /></li>
						</ul>
					</div>
				</div>
				<div style="height:40px;"></div>
			</div>
		</div>

		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			//			 $(document).ready(function(){
			//			 	
			// 
			//			 $('.fun_location').on('mousemove',function(){ 
			//				$(".fun_locationp").removeClass('Location').addClass('Location1');
			//				$('.fun_over_china').css('display','block');
			//				$('.fun_location img').attr("src","../../img/jiant_s.png");
			//			  });
			//			  
			// 			  $('.fun_location').on('mouseleave',function(){ 
			// 			  	
			// 				$(".fun_locationp").removeClass('Location1').addClass('Location');
			// 				$('.fun_over_china').css('display','none');
			// 				$('.fun_location img').attr("src","../../img/jiant_x.png");
			// 			  });
			// 			  	 		 	
			//			 $('.fun_over_china').on('mousemove',function(){ 
			//				$('.fun_locationp').removeClass('Location').addClass('Location1');
			//				$('.fun_over_china').css('display','block');
			//			  });
			//			  
			//			  $('.fun_over_china').on('mouseleave',function(){ 
			// 				$('.fun_locationp').removeClass('Location1').addClass('Location');
			// 				$('.fun_over_china').css('display','none');
			// 				$('.fun_location img').attr("src","../../img/jiant_x.png");
			// 			  });
			//			   
			//			})   ;
           
			$(function() {
				$('.pay-select li input').click(function() {
					$('.pay-select li').children("div").removeClass('abcdf');
					$(this).next("div").addClass('abcdf');
				})
				$('.pay-btn').find("a").click(function(){
					$(".pay-mark").show();
				})
   	            $('.no').click(function(){
					$(".pay-mark").hide();
				})

			})
		</script>
		</script>
	</body>

</html>
