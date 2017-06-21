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
	
	
	
	
	<body style="background: #fff;">
		<!--注册头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"><img src="<?php echo $pc_style; ?>img/logo.png"/></a>
				<span> 找回密码 </span>
				<a class="enroll_top_a" href="<?php echo \Yii::$app->urlManager->createUrl(['login/login']);?>"> 登录 </a>
				<a class="enroll_top_a" href="<?php echo \Yii::$app->urlManager->createUrl(['login/register']);?>"> 注册 </a>
			</div>
		</div>
		<!--手机注册-->
		<div class="super_enroll">
		  <div class="Enroll The_first">
		  	 <img src="<?php echo $pc_style; ?>img/liucheng.png"/>
		  	 <li style="margin-top: 36px;"> 
		  	 	<font> 账号 </font>
		  	 	<input type="text" name="phone" id="mobile_phone" placeholder="请输入帐号" />
		  	 	<strong id="Str1"> 请填写你的11位常用账号 </strong>
		  	 	<img id="Img5" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p1"> <!--<img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 手机格式错误 --></p>
		  	 <li> 
		  	 	<font> 手机验证码 </font>
		  	 	<input type="text" class="SMS" id="Veri" maxlength="6" placeholder="输入短信验证码 " />
                 <button class="Obtain "> 获取验证码 </button>
		  	 	<img id="Img6" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p2"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 验证输入错误 </p>
		  	 <li> 
		  	 	<font> 设置新密码 </font> 
		  	 	<input type="password" name="" id="newPSd" placeholder="输入6个以上字符（包含大小字母、数字或符号等）" />
		  	 	<img id="Img7" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p3"> <!--<img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 密码格式错误--></p>
		  	 <li> 
		  	 	<font> 确认密码 </font>
		  	 	<input type="password" name="" id="rePsd" placeholder="再次输入密码" />
		  	 	<img id="Img8" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p4"> <!--<img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 两次密码输入不一致--></p>
		   
		  	 <input type="button" class="btn1" name="" id="" value="确 认" />
		  	 
		  </div>
		</div>
		
		<!--底部--> 
        
        <div class="footer" id="iFooter">
			<div class="data-width">
				<div class="foot-btm">
					<div class="foot-btm-nav">	 
					</div>
					<p>Copyright © 2015-2016 三界生活 ISANJIE.com 版权所有 <a href="http://www.miitbeian.gov.cn">津ICP备16007829号-1</a></p>
					<div class="foot-btm-btm"><img src="<?php echo $pc_style;?>img/foot-icon7.jpg" alt="" /></div>
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
                    url: "<?php echo \Yii::$app->urlManager->createUrl(['forgot/send_vcode']);?>",
                    data: {phone:phone,state:"state"},
                    type:"POST",
                    dataType:"json",
                    success:function(data){
                        if(data.errorCode ==0){
                            alert("发送成功");
                        }else if(data.errorCode == -15){
                            alert(data.message);
                        }else if(data.errorCode == -18){
                            alert(data.message);
                        }else if(data.errorCode == -24){
                            alert(data.message);
                        }else if(data.errorCode == -34){
                            alert(data.message);
                        }else if(data.errorCode == -60){
                            alert(data.message);
                        }else if(data.errorCode == -14){
                            alert(data.message);
                        }
                    },
                    error:function(){
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
                    url:"<?php echo \Yii::$app->urlManager->createUrl(['forgot/repassword']);?>",
                    data:{phone:phone,code:code,password:password,rpassword:rpassword},
                    type:"POST",
                    dataType:"json",
                    success:function(data){
                        if(data.errorCode == 0){
                            alert("修改成功,请重新登录");
                            history.go(-1);
                        }else if(data.errorCode == -15){
                            alert(data.message);
                        }else if(data.errorCode == -24){
                            alert(data.message);
                        }else if(data.errorCode == -34){
                            alert(data.message);
                        }else if(data.errorCode == -37){
                            alert(data.message)
                        }else if(data.errorCode == -49){
                            alert(data.message)
                        }else if(data.errorCode == -60){
                            alert(data.message);
                        }else if(data.errorCode == -18){
                            alert(data.message);
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
