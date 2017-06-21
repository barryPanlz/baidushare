<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 找回密码 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css">
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	 
	</head>
	
	
	
	
	<body style="background: #F6F6F6;">
		<!--注册头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"> <img src="<?php echo $pc_style; ?>img/logo_life.png"/> </a>
				<span> 找回密码 </span>
				<a class="enroll_top_a" href="registered.html"> 登录 </a>
				<a class="enroll_top_a" href="login.html"> 注册 </a>
			</div>
		</div>
		<!--手机注册-->
		<div class="super_enroll">
		  <div class="Enroll The_first">
		  	 <img src="<?php echo $pc_style; ?>img/liucheng.png"/>
		  	 <li style="margin-top: 36px;"> 
		  	 	<font> 登录账号 </font>
		  	 	<input type="text" name="phone" id="mobile_phone" placeholder="请输入手机号" />
		  	 	<strong id="Str1"> 请填写你的11位常用手机号 </strong>
		  	 	<img id="Img5" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p1"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 手机格式错误 </p>
		  	 <li> 
		  	 	<font> 手机验证码 </font>
		  	 	<input type="text" class="SMS" id="Veri" placeholder="输入短信验证码 " /> 
		  	 	<em class="Obtain "> 获取验证码 </em>
		  	 	<img id="Img6" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p2"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 验证输入错误 </p>
		  	 <li> 
		  	 	<font> 设置新密码 </font> 
		  	 	<input type="password" name="" id="newPSd" placeholder="输入6-16个字符（包含大小字母、数字或符号等）" />
		  	 	<img id="Img7" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p3"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 密码格式错误</p>
		  	 <li> 
		  	 	<font> 确认密码 </font>
		  	 	<input type="password" name="" id="rePsd" placeholder="再次输入密码" />
		  	 	<img id="Img8" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p4"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 两次密码输入不一致</p>
		   
		  	 <input type="button" class="btn1" name="" id="" value="确 认" />
		  	 
		  </div>
		</div>
		
		<!--尾部部分-->
		<div class="footer footer1">
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
							<li><img src="<?php echo $pc_style; ?>img/foot-icon2.png" alt=""><p>七天退换</p></li>
							<li><img src="<?php echo $pc_style; ?>img/foot-icon3.png" alt=""><p>正品保证</p></li>
							<li><img src="<?php echo $pc_style; ?>img/foot-icon4.png" alt=""><p>提供发票</p></li>
							<li class="end"><img src="<?php echo $pc_style; ?>img/foot-icon5.png" alt=""><p>三界战略合作</p></li>
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

		
		
		<!--新密码设置成功弹出框-->
	    <div class="set_password box ">
	    	
	    </div>
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script>
	<script>
        $(document).ready(function() {

            $(".Obtain").click(function () {
                var phone = $("#mobile_phone").val();
                $.ajax({
                    url: "<?php echo Url::toRoute("user/send_vcode");?>",
                    data: {phone:phone},
                    type:"POST",
                    dataType:"json",
                    success:function(data){
                        if(data.errorCode ==0){
                            alert("发送成功")
                        }else{
                            alert("发送失败")
                        }
                    },
                    eroor:function(){
                        alert("失败");
                    }
                })
            });
            $(".btn1").click(function(){
                var phone = $("#mobile_phone").val();
                var code = $(".SMS").val();
                var password = $("#newPSd").val();
                var rpassword = $("#rePsd").val();
                $.ajax({
                    url:"<?php echo Url::toRoute("user/repassword");?>",
                    data:{phone:phone,code:code,password:password,rpassword:rpassword},
                    type:"POST",
                    dataType:"json",
                    success:function(data){
                        if(data.errorCode == 0){
                            alert("修改成功,请重新登录");
                            history.go(-1);
                        }else if(data.errorCode == -15){

                            alert("密码设置不符合规范");
                        }else if(data.errorCode == -24){
                            alert("手机号未注册");
                        }else if(data.errorCode == -34){
                            alert("网络繁忙，请稍后重试");
                        }else if(data.errorCode == -37){
                            alert("验证码错误")
                        }else if(data.errorCode == -48){
                            alert("设置密码失败")
                        }
                    },
                    error:function(){
                        alert("失败");
                    }
                })

            })
        });
    </script>


	</body>
</html>
