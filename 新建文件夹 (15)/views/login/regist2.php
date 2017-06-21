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
			  			<li class="reg_li_active">
			  				<img src="<?php echo $pc_style; ?>img/regli_2.png"/> 
			  				<span>获取验证码</span>
			  			</li>
			  			<li>
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
			  				校验码已经发送到您的手机，请勿透露给他人
			  			</div>
                        <form action="<?php echo Yii::$app->urlManager->createUrl('login/register3')?>" method="post" id="froms">
			  			<div class="reg_center_center">
			  				<span>输入验证码</span>
			  				<input class="reg_duanxin" type="text" name="vcode" id="duanxin" value="" placeholder="输入短信验证码"/>
			  				<button type="button" class="reg_buton" id="sendcode">
			  					<b>重发验证码（60s）</b>
			  				</button>
			  			</div>
			  			<p class="u_posi_p"></p>
			  			<div class="reg_center_bottom">
                            <input type="hidden" name="account" id="account" value="<?php echo $account ;?>">
			  				<input class="reg_sub" type="button" name="" id="regSub" value="下一步" />
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
		tesSetIn();
		$(".reg_duanxin").keydown(function (e) {
		    var code = parseInt(e.keyCode);
		        if (code >= 96 && code <= 105 || code >= 48 && code <= 57 || code == 8) {
		            return true;
		        } else {
		            return false;
		        }
		})
		$(".reg_duanxin").keyup(function () {
			if($(this).val().length==6){
		    	$("#regSub").removeAttr("disabled");
				$("#regSub").addClass("reg_read_sub");
		    }else{
		    	$("#regSub").attr("disabled","disabled");
				$("#regSub").removeClass("reg_read_sub");
		    }
		})
			$("#duanxin").blur(function(){
				YZparentUsercode();
			})
			$("#regSub").click(function(){
                var account = $("#account").val();
                var vcode = $("#duanxin").val();
                //alert(account);return false;
                $.ajax({
                    url:"<?php echo Url::toRoute('login/sendvcodes')?>",
                    data:{'phone':account,'vcode':vcode},
                    type:'post',
                    dataType:"json",
                    success:function(obj){
                        if(obj.errorCode == 0){
                            $("#froms").submit();
                            //alert('发送成功');
                        }else{
                            alert(obj.message);
                        }
                    }
                });
			});
			$("#sendcode").click(function(){
			   var account = $("#account").val();
			   //alert(account);return false;
                $.ajax({
                    url:"<?php echo Url::toRoute('login/sendvcode')?>",
                    data:{'phone':account},
                    type:'post',
                    dataType:"json",
                    success:function(obj){
                        if(obj.errorCode == 0){
                            alert('发送成功');
                            tesSetIn();
                        }else{
                            alert(obj.message);
                        }
                    }
                });

			})


		//验证码
			function YZparentUsercode(){
				if($(".reg_duanxin").val()==""){
				$(".reg_duanxin").parents(".reg_center").find(".u_posi_p").text("验证码不能为空");
					}else{
						if( !validate.code( $(".reg_duanxin").val()) ){
						 	$(".reg_duanxin").parents(".reg_center").find(".u_posi_p").text("请输入6位数字验证码");
						 	$("#regSub").attr("disabled","disabled");
				 			$("#regSub").removeClass("reg_read_sub");
				 			return false;
						}else{
							$(".reg_duanxin").parents(".reg_center").find(".u_posi_p").text("");
							$("#regSub").removeAttr("disabled");
					 		$("#regSub").addClass("reg_read_sub");
							return true;
						}
					}
				}
		
			//正则
			var validate={
			//手机号正则
					phone:function (phone){
			        if(!/^0?(13|15|17|18|14|19)[0-9]{9}$/.test(phone)){
			            return false;
			        }
			        return true;
			  },
			 //验证码正则
					code:function (code){
			         if(!/^\d{6}$/.test(code)){
			            return false;
			        }
			        return true;
			  },
			 }
			
				//倒计时
				function tesSetIn(){
					var total=60;
					var obj="";
					var timer = setInterval(function(){
						if(total == 0) {
							total=0;
							obj="重发验证码";
							$("#sendcode").removeAttr("disabled");
							$("#sendcode").addClass("reg_botton");
							clearInterval(timer);//如果程序在上一行出现错误，这一行代码就无法执行
						}else if(total> 0){
							$("#sendcode").attr("disabled","disabled");
							$("#sendcode").removeClass("reg_botton");
							 obj="<b>重发验证码（</b><b id='nub'>"+total+"</b><b>s）</b>"
						}
						 $("#sendcode").html(obj);
						total--;
					},1000);
				}
		</script>
	</body>
</html>

