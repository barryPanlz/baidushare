<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 注册页 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/registnew.css"/>
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body style="background: #FFFFFF;">
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--注册头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				 <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>">
				<img src="<?php echo $pc_style; ?>img/logo.png"/> 
				</a>
				<span> 欢迎注册 </span>
			</div>
		</div>
		<!--手机注册-->
		<div class="w_wrap" style="background: #FFFFFF;">
			<div class="w">
				<div class="reg_top_wrap">
					<ul>
						<li>
							<img src="<?php echo $pc_style; ?>img/regli_1.png"/> 
			  				<span>输入账号</span>
			  			</li>
			  			<li>
			  				<img src="<?php echo $pc_style; ?>img/regli_2.png"/> 
			  				<span>获取验证码</span>
			  			</li>
			  			<li class="reg_li_active">
			  				<img src="<?php echo $pc_style; ?>img/regli_3.png"/> 
			  				<span>设置密码</span>
			  			</li>
			  			<li>
			  				<img src="<?php echo $pc_style; ?>img/regli_4.png"/> 
			  				<span>输入邀请码</span>
			  			</li>
			  			<li>
			  				<img src="<?php echo $pc_style; ?>img/regli_5.png"/> 
			  				<span>注册成功</span>
			  			</li>
					</ul>
		  			
		  		</div>
		  		<div class="reg_center_wrap">
		  			<div class="reg_center">
			  			<div class="reg_center_top">
			  				设置您的登录密码
			  			</div>
                        <form action="<?php echo Yii::$app->urlManager->createUrl('login/register4')?>" method="post" id="forms">
			  			<div class="reg_center_center">
			  				<span>设置密码</span>
			  				<input class="reg_phonenub" type="password" name="password" id="newPSd1" value="" placeholder="输入6-16个字符（包含字母、数字或符号等）"/>
			  			</div>
			  			<p class=" u_posi_p u_posi_p1"></p>
			  			<div class="reg_center_center reg_center_center11">
			  				<span>确认密码</span>
			  				<input class="reg_phonenub" type="password" name="confirmPassword" id="rePsd1" value="" placeholder="再次输入"/>
			  			</div>
			  			<p class="u_posi_p u_posi_p2"></p>
			  			<div class="reg_center_bottom">
                            <input type="hidden" name="account" value="<?php echo $account ;?>">
                            <input type="hidden" name="vcode" value="<?php echo $vcode ;?>">
			  				<input class="reg_sub" type="button" disabled="disabled" name="" id="regSub" value="下一步" />
			  			</div>
                        </form>
		  			</div>
		  		</div>
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
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$("#newPSd1").keyup(function(){
			password1();
			yanzhengdianji();
		})
		
		$("#rePsd1").keyup(function(){
			repassword();
			yanzhengdianji();
		})
		$("#regSub").click(function(){
			$("#forms").submit();
		})
//		验证是否点击
		function yanzhengdianji(){
			if(password1()&&repassword()){
				$("#regSub").removeAttr("disabled");
				$("#regSub").addClass("reg_read_sub");
			}else{
				$("#regSub").attr("disabled","disabled");
				$("#regSub").removeClass("reg_read_sub");
			}
		}
			    //验证密码 
			    function password1(){
			    	var passwordVal = $("#newPSd1").val();
			        var num = 0;
			        var number = 0 ;
			        var letter = 0 ;
			        var bigLetter = 0 ;
			        var chars = 0 ;
			        if (passwordVal== "") {
			            $(".u_posi_p1").html("密码不能为空");
			            return false;
			        }
			        if (passwordVal.search(/[0-9]/) != -1) {
			            num += 1;
			            number =1;
			        }
			        if (passwordVal.search(/[A-Z]/) != -1) {
			            num += 1;
			            bigLetter = 1 ;
			        }
			        if (passwordVal.search(/[a-z]/) != -1) {
			            num += 1;
			            letter = 1 ;
			        }
			        if (passwordVal.search(/[^A-Za-z0-9]/) != -1) {
			            num += 1;
			            chars = 1 ;
			        }
			        if (num >= 2 && (passwordVal.length >= 6 && passwordVal.length <= 16)) {
			             $(".u_posi_p1").html("");
			             return true;
			        }else if(passwordVal.length < 6){
			            $(".u_posi_p1").html("密码不能少于6个字符");
			            return false;
			        }else if(passwordVal.length > 16){
			        	 $(".u_posi_p1").html("密码不能超过16个字符");
			        	 return false;
			        }else{
			        	$(".u_posi_p1").html("请输入6-16位字母数字组合密码");
			            return false;
			        }
			
			    }
			    //再次验证
			    function repassword(){
			    	var passwordVal = $("#newPSd1").val();
			        var rePsd1 = $("#rePsd1").val();
			        if(rePsd1==''){
			        	$(".u_posi_p2").html("确认密码不能为空");
			        	return false;
			        }else if(rePsd1!=passwordVal){
			            $(".u_posi_p2").html("两次输入的密码不一致");
			            return false;
			        }else{
			           $(".u_posi_p2").html("");
			            return true;
			        }
			    }

		</script>
	</body>
</html>

