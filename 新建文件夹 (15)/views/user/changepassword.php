<?php
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 修改密码 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
        <script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	 
	</head>
	
	<body style="background: #F6F6F6;">		
		
		<!--头部用户导航-->
			<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href=""> 
			<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']); ?>"><img style="float: left;" src="<?php echo $pc_style; ?>img/logo_life.png"/></a>
		  </div> 
		</div>
		
		
		<!--创业会员—商城订单的导航-->
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
		
		
		
		<!--修改密码头部-->
		<div class="super_change_top">
			<div class="change_top">
			 <a href="javascript:history.go(-1)"><img src="<?php echo $pc_style; ?>img/xiangzuo.png"/> &nbsp; 返回  </a> 	<span> 修改登录密码 </span>
			</div>
		</div>
	 
		<!--手机注册-->
		<div class="super_enroll" style="padding-top: 0;">
		  <div class="Enroll The_first" style="padding-top: 60px;">
		  	 <li> 
		  	 	<font> 登录账号 </font>
		  	 	<input type="text" name="" id="mobile_phone" placeholder="请输入手机号" />
		  	 	<strong id="Str1"> 请填写你的11位常用手机号 </strong>
		  	 	<img id="Img5" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p1"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 手机格式错误 </p>
		  	 <li> 
		  	 	<font> 手机验证码 </font>
		  	 	<input type="text" class="SMS" id="Veri" placeholder="输入短信验证码 " /> 
		  	 	<button class="Obtain " id="sendcode"> 获取验证码 </button>
		  	 	<img id="Img6" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p2"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 验证输入错误 </p>
              <li>
                  <font> 输入原密码 </font>
                  <input type="password" name="" id="oldPSd" placeholder="输入6-16个字符（包含大小字母、数字或符号等）" />
                  <img id="Img2" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
              </li>
              <p id="p5"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 原密码格式错误 </p>

		  	 <li> 
		  	 	<font> 设置新密码 </font> 
		  	 	<input type="password" name="" id="newPSd" placeholder="输入6-16个字符（包含大小字母、数字或符号等）" />
		  	 	<img id="Img7" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p3"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 请输入6-16个字符（需要数字字母混合）</p>
		  	 <li> 
		  	 	<font> 确认密码 </font>
		  	 	<input type="password" name="" id="rePsd" placeholder="再次输入密码" />
		  	 	<img id="Img8" style="margin-left: 12px;" src="<?php echo $pc_style; ?>img/tuoyuan2.png"/>
		  	 </li>
		  	 <p id="p4"> <img src="<?php echo $pc_style; ?>img/hongdian.png"/> &nbsp; 两次密码输入不一致</p>
		   
		  	 <input type="button" class="btn1" name="" id="" value="确 认" />
		  	 
		  </div>
		</div>
		<!--修改密码成功弹出框-->
		<div class="modify_success" style="display: none">
			<div class="modify_success_kuang">
				<div style="padding-top: 26px;">  <img src="<?php echo $pc_style; ?>img/chenggong.png" alt="" /> </div>
				<h3> 密码修改成功 </h3>
			</div>
		</div>
				
	   <!--底部-->
       <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo $pc_style; ?>/js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script>
		
	</body>

    <script>
        $(document).ready(function() {
            $(".Obtain").click(function () {
                var phone = $("#mobile_phone").val();
                if( !phone ){
                	alert( '手机号不能为空' );
        			return false;
            	}else if(!/^0?(13|15|17|18|14|19)[0-9]{9}$/.test(phone)){ 
            		alert( '手机号格式错误' );
            		return false;
            	}
                tesSetIn()
                $.ajax({
                    url: "<?php echo Url::toRoute("user/send_vcode");?>",
                    data: {phone:phone,state:"update"},
                    type:"POST",
                    dataType:"json",
                    success:function(data){
                        if(data.errorCode ==0){
                            alert("发送成功");
                        }else if(data.errorCode == -2){
                            alert(data.message);
                            location.href = '<?php echo Url::toRoute("login/login");?>';
                        }
                    },
                    error:function(){
                        alert("失败");
                    }
                })
            });
                  
            
            //计时器
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
            
            
            
            
            $(".btn1").click(function(){
                var phone = $("#mobile_phone").val();
                var code = $(".SMS").val();
                var password = $("#newPSd").val();
                var rpassword = $("#rePsd").val();
                var oldpassword = $("#oldPSd").val();
                
                
            // 判断手机号和验证码是否为空 
            if( phone ){ 
            	if( code ){
            		if( oldpassword ){
		            	 $.ajax({
		                    url:"<?php echo Url::toRoute("user/change_password");?>",
		                    data:{phone:phone,code:code,password:password,rpassword:rpassword,oldpassword:oldpassword},
		                    type:"POST",
		                    dataType:"json",
		                    success:function(data){
		                        if(data.errorCode == 0){
		                            $(".modify_success").css("display","block");
		                            setTimeout('location .href="<?php echo \Yii::$app->urlManager->createUrl(['login/login'])?>"', 1500);
		                        }else if(data.errorCode == -15){
		                            alert(data.message);
		                        }else if(data.errorCode == -24){
		                            alert(data.message);
		                        }else if(data.errorCode == -34){
		                            alert(data.message);
		                        }else if(data.errorCode == -37){
		                            alert(data.message);
		                        }else if(data.errorCode == -48){
		                            alert(data.message);
		                        }else if(data.errorCode == -49){
		                            alert(data.message);
		                        }else if(data.errorCode == -25){
		                            alert(data.message);
		                        }else if(data.errorCode == -80){
		                            alert(data.message);
		                        }
		                    },
		                    error:function(){
		                        alert("失败");
		                    }
		                });
            		}else{
            			alert( '确认密码 不能为空' );
            		} 
              }else{
              	alert( '验证码不能为空' );
              } 
            }else{
            	alert( '手机号不能为空' );
            };
                
                
   

            })
        });
    </script>
</html>
