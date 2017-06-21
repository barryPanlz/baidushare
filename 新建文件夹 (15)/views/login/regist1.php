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
						<li class="reg_li_active">
							<img src="<?php echo $pc_style; ?>img/regli_1.png"/> 
			  				<span>输入账号</span>
			  			</li>
			  			<li>
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
			  				为了确保您的账户安全，请按照以下步骤完成注册：
			  			</div>
                        <form action="<?php echo Yii::$app->urlManager->createUrl('login/register2')?>" method="post" id="forms">
			  			<div class="reg_center_center">
			  				<span>输入账号</span>
			  				<input class="reg_phonenub" type="text" name="account" id="account" value="" placeholder="输入手机号"/>
			  			</div>
			  			<p class="u_posi_p"></p>
			  			<div class="reg_center_bottom">
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
		
	</body>
</html>
<script>
	$(".reg_phonenub").keydown(function (e) {
	    var code = parseInt(e.keyCode);
	        if (code >= 96 && code <= 105 || code >= 48 && code <= 57 || code == 8) {
	            return true;
	        } else {
	            return false;
	        }
	})
	$(".reg_phonenub").keyup(function (e) {
		if($(this).val().length==11){
	    	YZphone();
	    }
	})
	$(".reg_phonenub").blur(function (){
		YZphone();
	})

	//倒计时
function tesSetIn(){
	var total=60;
	var timer = setInterval(function(){
		if(total == 0) {
			total="重新发送";
			$("#sendcode").removeAttr("disabled");
			clearInterval(timer);//如果程序在上一行出现错误，这一行代码就无法执行
		}else if(total> 0){
			$("#sendcode").attr("disabled","disabled");
		}
		$("#sendcode").html(total);
		total--;
	},1000);
}
$("#regSub").click(function(){
    var phone  = $("#account").val();
    $.ajax({
        url:"<?php echo Url::toRoute('login/sendvcode')?>",
        data:{'phone':phone},
        type:'post',
        dataType:"json",
        success:function(obj){
            if(obj.errorCode == 0){
                alert('发送成功');
                $("#forms").submit();
            }else{
                alert(obj.message);
            }
        }
    });

})





		//手机号验证
			function YZphone(){
				if($(".reg_phonenub").val()==""){
				$(".reg_phonenub").parents(".reg_center").find(".u_posi_p").text("手机号不能为空");
				}else{
					if( !validate.phone( $(".reg_phonenub").val() ) ){
				 		$(".reg_phonenub").parents(".reg_center").find(".u_posi_p").text("请输入正确的手机号");
				 		$("#regSub").attr("disabled","disabled");
				 		$("#regSub").removeClass("reg_read_sub");
					 	return false;
					}else{
						$(".reg_phonenub").parents(".reg_center").find(".u_posi_p").text("");
						$("#regSub").removeAttr("disabled");
					 	$("#regSub").addClass("reg_read_sub");
						return true;
					}
				}
					
				}
			//验证码
			function YZparentUsercode(){
					if( !validate.code( $("#parentUsercode").val()) ){
				 		$("#parentUsercode").parents("li").find(".u_posi_p").text("请输入6位邀请码");
				 	return false;
				}else{
					$("#parentUsercode").parents("li").find(".u_posi_p").text("");
					return true;
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
			        if(!/\d{6}/.test(code)){
			            return false;
			        }
			        return true;
			  },
			 }
</script>
