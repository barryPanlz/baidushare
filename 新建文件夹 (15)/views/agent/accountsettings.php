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
			<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>"><img src="<?php echo $pc_style; ?>img/logo.png"/></a>
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
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/index']);?>"> 三界会员 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant']);?>"> 我的账房 </a>
                        <a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings']);?>"> 账户设置 </a>
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
					<h2 class="f16c28"><?php echo empty($details1->data->user_name) ? $details1->data->mobile_phone : $details1->data->user_name;?></h2>
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
				<li class="now"><a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings'])?>">安全中心</a></li>
				<!--<li><a href="#">基本信息</a></li>-->
				<li><a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings','state'=> '1'])?>">提现账户</a></li>
				
			</ul>
			<ul class="account_list_form tatul">
				<li>
					<div class="form_img">
						<img src="<?php echo $pc_style; ?>img/as_right.png" alt="">
					</div>
					<div class="form_name">登录密码</div>
					<p>安全性高的密码可以使账号更安全。建议您定期更换密码，且设置一个包含数字和字母，并长度超过6位以上的密码。</p>
					<span><a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/change_password']);?>">修改</a></span>
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
			<ul class="account_list_form1 tatul">
				<p>温馨提示：请填写您的支付宝、微信或银行卡等信息，以后您就可以选择任意方式提现人民币了，提现之前请先完善【个人资料】页的信息。</p>
					<div class="wi_tixian per_mingxi_content">
						<ul>
							<li class="wi_li_right_big">
                                <div class="">
                                    <p>
                                        <span>支付宝</span>
                                    </p>
                                    <p>
                                        <input type="text" name="revbankaccno" id="alipay_account" value="<?php echo empty($acclist->data->withdrawalAcc->alipay_account) ? "" : $acclist->data->withdrawalAcc->alipay_account ;?>" class="wi_input_right" style="margin-left: 0;" placeholder="请输入本人的支付宝账号"/>
                                        <input type="text" name="revbankaccno" id="alipay_user_name" value="<?php echo empty($acclist->data->withdrawalAcc->alipay_user_name) ? "" : $acclist->data->withdrawalAcc->alipay_user_name ;?>" class="wi_input_right wi_input_right2" placeholder="请输入本人的支付宝名字"/>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <span>微信</span>
                                    </p>
                                    <p>
                                        <input type="text" name="revbankaccno" id="wechat_account" value="<?php echo empty($acclist->data->withdrawalAcc->wechat_account) ? "" : $acclist->data->withdrawalAcc->wechat_account ;?>" class="wi_input_right" style="margin-left: 0;" placeholder="请输入本人的微信账号"/>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <span>银行卡</span>
                                    </p>
									<p>
										<<select name="revorgname" class="wi_input_left" id="bank_name">
                                            <option value="">请选择</option>
                                            <?php if(!empty($bancklist->data->bankList)){
                                                foreach($bancklist->data->bankList as $re){ ?>
                                                    <option value="<?php echo $re ;?>" <?php if(!empty($acclist->data->withdrawalAcc->bank_name)){
                                                        if($acclist->data->withdrawalAcc->bank_name == $re){
                                                            echo "selected = 'selected'";
                                                        }
                                                    } ?>><?php echo $re?></option>
                                                <?php } } ?>
                                        </select>
                                        <input type="text" name="bank_address" id="bank_address" value="<?php echo empty($acclist->data->withdrawalAcc->bank_address) ? "" : $acclist->data->withdrawalAcc->bank_address ;?>" class="wi_input_right" placeholder="输入开户支行的名称"/>
                                        <input type="text" name="name"  id="bank_account" value="<?php echo empty($acclist->data->withdrawalAcc->bank_account) ? "" : $acclist->data->withdrawalAcc->bank_account ;?>" class="wi_input_right" placeholder="输入您本人的银行卡号"/>
                                        <input type="text" name="bank_user_name" id="bank_user_name" value="<?php echo empty($acclist->data->withdrawalAcc->bank_user_name) ? "" : $acclist->data->withdrawalAcc->bank_user_name ;?>" class="wi_input_right" placeholder="输入持卡人姓名"/>
                                    </p>
								</div>
								<div class="wi_tijiao">
									<button id="submit">保存</button>
								</div>
							</li>
						</ul>
					</div>
			</ul>
		</div>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
	<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/common.js"></script>
	<script type="text/javascript">

        var url = location.search.split("=")[1];
        console.log(url==1)
        if(url==1){
            $(".account_list_tab").find("li").removeClass("now");
            $(".account_list_tab").find("li").eq(1).addClass("now");
            $(".account_list").find(".tatul").css("display","none");
            $(".account_list").find(".tatul").eq(1).css("display","block");

        }
		$(".account_list_tab").find("li").click(function(){
			$(this).addClass("now");
			$(this).siblings().removeClass("now");
			$(".tatul").css("display","none");
			$(".tatul").eq($(this).index()).css("display","block");
		})

        $('#submit').click(function ()  {
            var alipay_account = $('#alipay_account').val();
            var alipay_user_name = $('#alipay_user_name').val();
            if(alipay_user_name !== '' && alipay_account == ''){
                alert('请输入支付宝账号');
                return false;
            }
            var wechat_account = $('#wechat_account').val();
            var bank_name = $('#bank_name').val();
            var bank_address = $('#bank_address').val();
            var bank_account = $('#bank_account') .val();
            var bank_user_name = $('#bank_user_name').val();
            $.ajax({
                url:"<?php echo \Yii::$app->urlManager->createUrl(['agent/drawal'])?>",
                type:'post',
                dataType:'json',
                data:{alipay_account:alipay_account,wechat_account:wechat_account,bank_name:bank_name,bank_address:bank_address,bank_account:bank_account,bank_user_name:bank_user_name,alipay_user_name:alipay_user_name},
                success:function (data)  {
                    if(data.errorCode == 0){
                        alert(data.message);
                        history.go();
                    }else{
                        alert(data.message);
                    }

                },
                error:function ()  {
                    alert('网络繁忙，请稍后重试！')
                }
            });
        })
	</script>
</body>
</html>