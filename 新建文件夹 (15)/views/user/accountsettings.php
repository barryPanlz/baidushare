<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>账户设置</title>
	<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/accountsetting.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
</head>
<body>
	<div class="warp">
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		
		<!--搜索商品栏-->
        	<!--搜索商品栏-->
			<div class="super_Search">
			<div class="Search" href="">
                <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"><img src="<?php echo $pc_style; ?>img/logo.png"/>	</a>
			<!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
			<input type="button" class="suoSou" id="" value="搜索" />
			<a class="shopping_cart_icon">
				 <img src="../../img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
			</a>
			<div class="Text">
				<a href="">秋冬连衣裙</a>
				<a href="">耐克跑步鞋</a>
				<a href="">婴儿抱被</a>
				<a href="">会员特供</a>
				<a href="">买一送二</a>
			</div>				-->
			</div>			
		</div>		
		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box .fix">
					<a class="channel-l ta_center" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
						<span>返回商城首页</span>
					</a>
					<div class="channel-c channel-d">
						<a  href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>"> 三界会员 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend']);?>"> 我的推荐 </a>
						<a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>
		
	
		<!--账户设置头部信息-->
		<?php if(!empty($details1)){?>
		<div class="account_info">
			<div class="account_info_left">
				<div class="photo_naodai">
<!--					<img src="--><?php //echo $details1->data->user_img; ?><!--" alt="">-->
                    <img src="<?php echo $pc_style; ?>img/touxiang1.png" alt="" />
					<img class="circle_shadow" src="<?php echo $pc_style; ?>img/circle_shadow.png">
				</div>
				<div class="user_info">
					<h2 class="f16c28"><?php echo $details1->data->mobile_phone?></h2>
					<p>
						<?php
				   	  	    		if($details1->data->user_type ==1){
				   	  	    			echo "普通会员";
				   	  	    		}elseif($details1->data->user_type ==2){
				   	  	    			echo "创业会员";
				   	  	    		}elseif($details1->data->user_type ==3){
				   	  	    			echo "店铺";
				   	  	    		}elseif($details1->data->user_type ==4){
				   	  	    			echo "供应商";
				   	  	    		}elseif($details1->data->user_type ==5){
				   	  	    			echo "代理商";
				   	  	    		}
				   	  	    	?>
					</p>
				</div>
			</div>
			<div class="account_info_right">
				<div class="security_level">
					<p>安全等级：<span>低</span></p>
					<div class="security_level_legend">
						<span class="legend"></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<!--<ul class="authentications">
					<li>
						<div>
							<img src="<?php /*echo $pc_style; */?>img/as_phone.png" alt="手机未认证">
						</div>
						<p>手机未认证</p>
					</li>
					<li>
						<div>
							<img src="<?php /*echo $pc_style; */?>img/as_email.png" alt="邮箱未认证">
						</div>
						<p>邮箱未认证</p>
					</li>
					<li>
						<div>
							<img src="<?php /*echo $pc_style; */?>img/as_user.png" alt="身份未认证">
						</div>						
						<p>身份未认证</p>
					</li>
				</ul>-->
			</div>
		</div>
		<?php }?>
		<!--账户设置底部列表-->
		<div class="account_list">
			<h2>账户设置</h2>
			<ul class="account_list_tab">
				<li class="now"><a href="#">安全中心</a></li>
				<!--<li><a href="#">基本信息</a></li>
				<li><a href="#">头像管理</a></li>-->
				<li><a href="<?php echo Url::toRoute("user/addressmanagement")?>">地址管理</a></li>
			</ul>
			<ul class="account_list_form">
				<li>
					<div class="form_img">
						<img src="<?php echo $pc_style; ?>img/as_right.png" alt="">
					</div>
					<div class="form_name">登录密码</div>
					<p>安全性高的密码可以使账号更安全。建议您定期更换密码，且设置一个包含数字和字母，并长度超过6位以上的密码。</p>
					<span><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/change_password']);?>">修改</a></span>
				</li>
				<!--<li>
					<div class="form_img">
						<img src="<?php /*echo $pc_style; */?>img/as_warning.png" alt="">
					</div>
					<div class="form_name">邮箱验证</div>
					<p>验证后，可用于快速找回登录密码，接收账户余额变动提醒。</p>
					<span class="verify_now"><a href="#">立即验证</a></span>
				</li>
				<li>
					<div class="form_img">
						<img src="<?php /*echo $pc_style; */?>img/as_right.png" alt="">
					</div>
					<div class="form_name">手机绑定</div>
					<p>您验证的手机：130130****00，可享有多个服务，如：密码找回，交易提醒等</p>
					<span><a href="#">修改</a></span>
				</li>
				<li class='last_form'>
					<div class="form_img">
						<img src="<?php /*echo $pc_style; */?>img/as_right.png" alt="">
					</div>
					<div class="form_name">实名认证</div>
					<p>您认证的实名信息：**勇 130****************000</p>
					<span><a href="#">查看</a></span>
				</li>-->
			</ul>
		</div>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
	<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/common.js"></script>
</body>
</html>