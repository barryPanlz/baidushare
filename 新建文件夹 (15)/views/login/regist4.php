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
			  			<li class="reg_li_active">
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
			  				请输入邀请码
			  			</div>
			  			<div class="reg_center_center">
			  				<span>输入邀请码</span>
			  			<input class="reg_duanxin" type="text" name="parent_usercode" id="parent_usercode" value="" placeholder="输入您的推荐人的邀请码"/>
			  				<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/getsyscode'])?> " target="_blank"><span>没有推荐人？</span><span class="gaoliang">点击获得系统默认邀请码</span></a>
			  			</div>
			  			<p class="u_posi_p"></p>
			  			<p class="cursour">
			  				<img src="<?php echo $pc_style; ?>img/tuoyuan.png"/>
			  				<span>
			  					<a href="<?php echo \Yii::$app->urlManager->createUrl(['login/agreement'])?>" target="_blank">我同意<<三界生活用户注册协议>></a>
			  				</span>
			  			</p>
			  			<div class="reg_center_bottom">
                            <input type="hidden" name="account" value="<?php echo $account ;?>" id="account">
                            <input type="hidden" name="vcode" value="<?php echo $vcode ;?>" id="vcode">
                            <input type="hidden" name="password" value="<?php echo $password ;?>" id="password">
                            <input type="hidden" name="confirmPassword" value="<?php echo $confirmPassword ;?>" id="confirmPassword">
			  				<input class="reg_sub" type="button" disabled="disabled" name="" id="regSub" value="立即注册" />
			  			</div>
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

		var Invit=sessionStorage.getItem("InvitationCode");
		if(Invit==undefined||Invit==""||Invit==null){
			Invit="";
		}
		$("#parent_usercode").val(Invit);

		$(".reg_duanxin").keydown(function (e) {
		    var code = parseInt(e.keyCode);
		        if (code >= 96 && code <= 105 || code >= 48 && code <= 57 || code == 8) {
		            return true;
		        } else {
		            return false;
		        }
		})
		$(".reg_duanxin").keyup(function () {
		    	yanzheng();
		})
		$("#parentUsercode").blur(function(){
			YZparentUsercode();
			yanzheng();
		})
		$("#parentUsercode").keydown(function (e) {
		    var code = parseInt(e.keyCode);
		        if (code >= 96 && code <= 105 || code >= 48 && code <= 57 || code == 8) {
		            return true;
		        } else {
		            return false;
		        }
		});
		$(".cursour").find("img").click(function(){
			tupian();
			yanzheng();
		});
        function posts(URL, PARAMS) {
            var temp = document.createElement("form");
            temp.action = URL;
            temp.method = "post";
            temp.style.display = "none";
            for (var x in PARAMS) {
                var opt = document.createElement("textarea");
                opt.name = x;
                opt.value = PARAMS[x];
                // alert(opt.name)
                temp.appendChild(opt);
            }
            document.body.appendChild(temp);
            temp.submit();
            //return temp;
        }
        $("#regSub").click(function(){
		    var account = $("#account").val();
		    //alert(account);return false;
            var password = $("#password").val();
            var confirmPassword = $("#confirmPassword").val();
            var parent_usercode = $("#parent_usercode").val();
            var vcode = $("#vcode").val();
            //alert(account);return false;
            $.ajax({
                url:"<?php echo Url::toRoute('login/register5')?>",
                type:'post',
                data:{'account':account,'vcode':vcode,'password':password,'confirmPassword':confirmPassword,'parent_usercode':parent_usercode},
                dataType:'json',
                success:function(data){
                    if(data.errorCode == 0){
                    	alert('注册成功');
                        //调用方法 如
                        posts("<?php echo \Yii::$app->urlManager->createUrl(['login/register6']) ;?>", {account :account,password:password});
                        //location.href = "<?php echo \Yii::$app->urlManager->createUrl(['login/register6']) ;?>";
                    }else if(data.errorCode == -20){
                        alert('已经注册过了，请登录');
                        location.href="<?php echo \Yii::$app->urlManager->createUrl('login/login'); ?>";
                    }else{
                        alert(data.message);
                    }
                },
                error:function(){
                    alert('网络繁忙，请稍候重试！');
                }
            });

		})
		
		
		
		
		
		
		
		
		
		function yanzheng(){
			console.log(YZparentUsercode()&&tupian())
			if(YZparentUsercode()&&tupian()){
				$("#regSub").removeAttr("disabled");
				$("#regSub").addClass("reg_read_sub");
			}else{
				$("#regSub").attr("disabled","disabled");
				$("#regSub").removeClass("reg_read_sub");
			}
		}
		function tupian(){
			if($(".cursour").find("img").attr("src")=="../../resources/img/tuoyuan.png"){
				$(".cursour").find("img").attr("src","../../resources/img/tuoyuan1.png");
				return true;
			}else{
				$(".cursour").find("img").attr("src","../../resources/img/tuoyuan.png");
				return false;
			}
		}
			//验证码
			function YZparentUsercode(){
					if($(".reg_duanxin").val()==""){
						$(".reg_duanxin").parents(".reg_center").find(".u_posi_p").text("验证码不能为空");
							}else{
								if( !validate.code( $(".reg_duanxin").val()) ){
								 	$(".reg_duanxin").parents(".reg_center").find(".u_posi_p").text("请输入6位邀请码");
						 			return false;
								}else{
									$(".reg_duanxin").parents(".reg_center").find(".u_posi_p").text("");
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
		</script>
	</body>
</html>
