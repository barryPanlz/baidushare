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
			  			<li>
			  				<img src="<?php echo $pc_style; ?>img/regli_3.png"/> 
			  				<span>设置密码</span>
			  			</li>
			  			<li>
			  				<img src="<?php echo $pc_style; ?>img/regli_4.png"/> 
			  				<span>输入邀请码</span>
			  			</li>
			  			<li class="reg_li_active">
			  				<img src="<?php echo $pc_style; ?>img/regli_5.png"/> 
			  				<span>注册成功</span>
			  			</li>
					</ul>
		  			
		  		</div>
                <input type="hidden" name="account" value="<?php echo $account ;?>" id="account">
                <input type="hidden" name="password" value="<?php echo $password ;?>" id="password">
		  		<div class="reg_center_wrap">
		  			<div class="reg_center">
			  			<div class="over_img">
			  				<img src="<?php echo $pc_style; ?>img/reg_gou.png"/>
			  				<div class="over_div">
			  					恭喜您注册成功了！
			  				</div>
			  				
			  			</div>
			  			<div class="reg_center_bottom">
			  				<input class="reg_sub reg_read_sub" type="button" name="" id="go" value="马上体验" />
			  			</div>
		  			</div>
		  		</div>
		  		
		  		
		  		
		  		
		  		
		  		
		  		
		  		
		  		
		  		
		  		
			</div>
		  	
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--注册成功框-->
		<div class="all_suc_box" id="div1">
			<div class="suc_box">
				<div class="suc_box_top">
					<span> 提示 </span>
					<img src="<?php echo $pc_style; ?>img/close.png" id="chahao"/>
				</div>
				<div class="suc_box_img">
					<img src="<?php echo $pc_style; ?>img/chenggong.png"/>
				</div>
				<p class="suc_box_p"> 恭喜，你已注册成功 </p>
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
    $("#go").click(function () {
        //alert(0);return false;
        var account = $("#account").val();
        var password = $("#password").val();
        $.ajax({
            url:"<?php echo Url::toRoute("login/login");?>",
            data:{name:account,password:password},
            type:"POST",
            dataType:"json",
            success:function(data){
                if( data.errorCode == -15){
                    alert(data.message);
                }else if(data.errorCode == -36){
                    alert(data.message);
                }else if(data.errorCode == -37){
                    alert(data.message);
                }else if(data.errorCode == -34){
                    alert(data.message);
                }else if(data.errorCode == 0){
                    location .href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?> ";
                }else if(data.errorCode ==-24){
                    alert(data.message);
                    // history.go();
                }else if(data.errorCode ==-48){
                    alert(data.message);
                    //history.go();
                }else if(data.errorCode ==-54){
                    alert(data.message);
                }else if(data.errorCode == -82){
                    alert(data.message);
                }
            },
            error:function(){
                alert("网络错误，请稍后重试");
            }
        })
    })
</script>
<!--<script>
	
	$("#chahao").click(function(){
		$(this).hide();
		window.location.href='<?php echo Url::toRoute('login/login')?>';
	});
	//发送验证码
	$("#sendcode").click(function(){ 
		 if( !validate.phone( $("#mobile_phone1").val() ) ){
		 	$("#p5").css('visibility','visible');
		 	return false;
		 }else{
		 	$("#sendcode").attr("disabled","disabled");
		 	var mobile_phone1 = $('#mobile_phone1').val();
			tesSetIn();
				$.ajax({
					url:"<?php echo Url::toRoute('login/sendvcode')?>",
					data:{'mobile_phone1':mobile_phone1},
					type:'post',
					success:function(obj){
						if(obj == 1){
							alert('发送成功');
						}else{
							alert('发送失败');
							$("#sendcode").removeAttr("disabled");
						}
					}
			});
		 }
		
	});
	
     $(".syscode").keydown(function(event){
        event=document.all?window.event:event;
        if((event.keyCode || event.which)==13){
            $("#btn").click();
        }
    });
	//注册
	$("#btn").click(function(){ 
	 if( $('#Agreedto').find('img').attr('src') == '../../resources/img/tuoyuan.png' ){
		alert( '你还没有点击同意协议' );	
	 }else if( $('.Enroll').children('p').css('visibility') == 'visible' ){ 
	  	alert('以上信息填写有误,请填写正确后再注册');
	  }else{
	  	$("#btn").attr("disabled","disabled");
	  	var account = $('#mobile_phone1').val();
		var vcode = $('#Veri1').val();
		var password = $('#newPSd1').val();
		var confirmPassword = $('#rePsd1').val();
		var parent_usercode = $('#syscode').val();
		$.ajax({
			url:"<?php echo Url::toRoute('login/register')?>",
			type:'post',
			data:{'account':account,'vcode':vcode,'password':password,'confirmPassword':confirmPassword,'parent_usercode':parent_usercode},
			dataType:'json',
			success:function(data){ 
				$("#btn").removeAttr('disabled');
				if(data.errorCode == 0){
					document.getElementById("div1").style.display="block";
				}else if(data.errorCode == -20){
					alert('已经注册过了，请登录');
					location.href="<?php echo Yii::$app->urlManager->createUrl('login/login'); ?>";
				}else if(data.errorCode == -15){
					alert('参数错误-为空或格式错误');
					//location.href="register";
				}else if(data.errorCode == -34){
					alert('网络繁忙，请稍候重试！');
					//location.href="register";
				}
				else if(data.errorCode == -35){
					alert('推介人不存在');
					//location.href="register";
				}else if(data.errorCode == -37){
					alert('验证码错误');
					//location.href="register";
				}else if(data.errorCode == -38){
					alert('验证码已失效，请重新获取');
					//location.href="register";
				}else if(data.errorCode == -46){
					alert('推介人没有推介权限');
					//location.href="register";
				}else if(data.errorCode == -47){
					alert('注册失败');
					//location.href="register";
				}else if(data.errorCode == -19){
                    alert(data.message);
                }else if(data.errorCode == -32){
                    alert(data.message);
                }else if(data.errorCode == -17){
                    alert(data.message);
                }else if(data.errorCode == -73){
                    alert(data.message);
                }else if(data.errorCode == -74){
                    alert(data.message);
                }else if(data.errorCode == -75){
                    alert(data.message);
                }else if(data.errorCode == -76){
                    alert(data.message);
                }else if(data.errorCode == -77){
                    alert(data.message);
                }else if (data.errorCode == -78){
                    alert(data.message);
                }else if (data.errorCode == -79){
                    alert(data.message);
                }else if(data.errorCode == -60){
                    alert(data.message);
                }
			},
			error:function(){
				alert('网络繁忙，请稍候重试！');
				$("#btn").removeAttr('disabled');
			}
		});
	  } 
	 
	});
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
</script>-->
