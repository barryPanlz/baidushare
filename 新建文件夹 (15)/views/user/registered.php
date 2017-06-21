<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 注册页 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<!--注册头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<img src="<?php echo $pc_style; ?>img/logo_life.png"/>
				<span> 欢迎注册 </span>
			</div>
		</div>
		<!--手机注册-->
		<div class="super_enroll">
		  <div class="Enroll">
		  	 <h3> 手机注册 </h3>
		  	 <li style="margin-top: 32px;">
		  	 	<font> 账号 </font>
		  	 	<input type="text" name="account" id="mobile_phone1" placeholder="请输入手机号"  class="mb"/>
		  	 	<strong id="Str"> 请填写你的11位常用手机号 </strong>
		  	 	<img id="Img1" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p5"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 手机号码格式不对 </p>
		  	 <li> 
		  	 	<font> 手机验证码 </font>
		  	 	<input type="text" class="SMS" id="Veri1" placeholder="输入短信验证码设置密码" name="vcode"/>
		  	 	<em class="Obtain" id="sendcode"> 获取验证码 </em>
		  	 	<img id="Img2" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p6"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 验证码输入错误 </p>
		  	 <li> 
		  	 	<font> 设置密码 </font>
		  	 	<input type="password" name="password" id="newPSd1" placeholder="输入6-16个字符（包含大小字母、数字或符号等）" />
		  	 	<img id="Img3" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p7"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 密码格式错误 </p>
		  	 <li> 
		  	 	<font> 确认密码 </font>
		  	 	<input type="password" name="confirmPassword" id="rePsd1" placeholder="再次输入密码" />
		  	 	<img id="Img4" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p8"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 两次密码输入不一致 </p>
		  	 <li> <font> 邀请码 </font> <input type="text" name="parent_usercode" id="syscode" placeholder="输入邀请码" />
				 <a href="http://pcshop.com/frontend/web/user/getsyscode"> 没有邀请码？点击获得系统默认码 </a>
			 </li>
		  	 <div class="Agreedto" id="Agreedto">
		  	 	<img src="<?php echo $pc_style; ?>img/tuoyuan.png"/>
		  	 	<span> 我同意<<商创版用户协议>>  </span>
		  	 </div>
		  	 <input type="submit" class="btn1" name="" id="btn" value="同意协并注册" />
		  	 <div class="has">
		  	 	<a href="login.html"> 已有账号？ </a> <span> 在此登录 </span>
		  	 </div>

		  </div>
		</div>

		<!--注册成功框-->
		<div class="all_suc_box" id="div1">
			<div class="suc_box">
				<div class="suc_box_top">
					<span> 提示 </span>
					<img src="../../resources/img/close.png" id="chahao"/>
				</div>
				<div class="suc_box_img">
					<img src="../../resources/img/chenggong.png"/>
				</div>
				<p class="suc_box_p"> 恭喜，你已注册成功 </p>
			</div>
		</div>


		<!--底部-->
		<div class="footer">
		<div class="data-width">
			<!--<div class="foot-mid">
				<ul>
					<li>
						<h3>注册登录</h3>
						<a href="">消费注册</a>
						<a href="">正品保障</a>
						<a href="">用户登录</a>
						<a href="">忘记密码</a>
						<a href="">商家入驻</a>
					</li>
					<li>
						<h3>消费指南</h3>
						<a href="">兑换流程</a>
						<a href="">消费流程</a>
						<a href="">货币与支付</a>
						<a href="">配送方式</a>
						<a href="">配送方式</a>
						<a href="">物流查询</a>
					</li>
					<li>
						<h3>购物指南</h3>
						<a href="">7天退换货</a>
						<a href="">退货流程</a>
					</li>
					<li>
						<h3>订单问题</h3>
						<a href="">订单查询</a>
						<a href="">订单取消</a>
						<a href=""></a>
					</li>
					<li class="kefuqu">
						<h3>联系我们</h3>
						<a href="">电话客服：9999999</a>
						<a href="">QQ客服：999999999</a>
						<a href="">邮箱：888888888</a>
						<a href="">公众号：0000000000</a>
					</li>
				</ul>
			</div>-->
			<!--<div class="foot-top">
				<ul>
					<li class="first"><img src="<?php echo $pc_style; ?>img/foot-icon1.png" alt="">
						<p>闪电发货</p>
					</li>
					<li><img src="<?php echo $pc_style; ?>img/foot-icon1.png" alt=""><p>七天退换</p></li>
					<li><img src="<?php echo $pc_style; ?>img/foot-icon1.png" alt=""><p>正品保证</p></li>
					<li><img src="<?php echo $pc_style; ?>img/foot-icon1.png" alt=""><p>提供发票</p></li>
					<li class="end"><img src="<?php echo $pc_style; ?>img/foot-icon1.png" alt=""><p>三界战略合作</p></li>
				</ul>
			</div>-->
			<div class="foot-btm">
				<div class="foot-btm-nav foot-btm-nav1">					
					<a href="">关于我们</a>
					<a href="">品牌招商</a>
					<a href="">集团采购</a>
					<a href="">招贤纳士</a>
					<a href="">联系我们</a>
					<a href="">网站地图</a>
					<a href="">网站资讯</a>
					<a href="">商家联盟</a>
					<a href="">友情链接</a>
				</div> 
				<div class="foot-btm-btm foot-btm-btm1"><img src="<?php echo $pc_style; ?>img/foot-icon7.jpg" alt="" /></div>
				<p>Copyright © 2011-2015 HaiHeShiDai Technology Co., Ltd. 京ICP备09070608号-4 增值电信业务经营许可证：京 B2-20090203 京公网安备：4403101910665</p>
			</div>
		</div>
	</div>

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script>
		
	</body>
</html>
<script>

	$("#chahao").click(function(){
		$(this).hide();
		window.location.href="http://pcshop.com/frontend/web/user/login";
	});
	//发送验证码
	$("#sendcode").click(function(){
		var mobile_phone1 = $('#mobile_phone1').val();
			$.ajax({
				url:"http://pcshop.com/frontend/web/user/sendvcode",
				data:{'mobile_phone1':mobile_phone1},
				type:'post',
				success:function(obj){
					if(obj == 1){
						alert('发送成功');
					}else{
						alert('发送失败');
					}
				}
		});
	});
	//注册
	$("#btn").click(function(){
		var account = $('#mobile_phone1').val();
		var vcode = $('#Veri1').val();
		var password = $('#newPSd1').val();
		var confirmPassword = $('#rePsd1').val();
		var parent_usercode = $('#syscode').val();
		$.ajax({
			url:"http://pcshop.com/frontend/web/user/register",
			type:'post',
			data:{'account':account,'vcode':vcode,'password':password,'confirmPassword':confirmPassword,'parent_usercode':parent_usercode},
			dataType:'json',
			success:function(data){
				if(data.errorCode == 0){
					document.getElementById("div1").style.display="block";
				}else if(data.errorCode == -20){
					alert('已经注册过了，请登录');
					location.href="http://pcshop.com/frontend/web/user/login";
				}else if(data.errorCode == -15){
					alert('参数错误-为空或格式错误');
					location.href="http://pcshop.com/frontend/web/user/register";
				}else if(data.errorCode == -34){
					alert('网络繁忙，请稍候重试！');
					location.href="http://pcshop.com/frontend/web/user/register";
				}
				else if(data.errorCode == -35){
					alert('推介人不存在');
					location.href="http://pcshop.com/frontend/web/user/register";
				}else if(data.errorCode == -37){
					alert('验证码错误');
					location.href="http://pcshop.com/frontend/web/user/register";
				}else if(data.errorCode == -38){
					alert('验证码已失效，请重新获取');
					location.href="http://pcshop.com/frontend/web/user/register";
				}else if(data.errorCode == -46){
					alert('推介人没有推介权限');
					location.href="http://pcshop.com/frontend/web/user/register";
				}else if(data.errorCode == -47){
					alert('注册失败');
					location.href="http://pcshop.com/frontend/web/user/register";
				}
			}
		});
	});
</script>
