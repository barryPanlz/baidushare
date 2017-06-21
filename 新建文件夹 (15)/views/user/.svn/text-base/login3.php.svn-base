<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 3登录页 </title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css">
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	
	
	
	<body>
		
		
		<!--登录头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<img src="<?php echo $pc_style; ?>img/logo_life.png"/>
				<span> 欢迎登录 </span>
			</div>
		</div>
		
		<!--登录页内容区-->
		<div class="super_To_login">
			<div class="To_login">
				<img src="<?php echo $pc_style; ?>img/bg.png"/>
				<div class="The_login">
				   <h2> 账号登录 </h2>
                    <div class="Do_match" style="display: none">
                        <img src="<?php echo $pc_style; ?>img/hongdian.png"/>
                        <span> 密码输入错误/账号不存在/账号，密码不匹配 </span>
                    </div>
				   <li class="Input_box"> 
				   	<span> 账号 </span>
				   	<font id="renTu"> <img src="<?php echo $pc_style; ?>img/zhanghu.png"/> </font>
				   	<input type="text" name="name" id="Enter_phone" placeholder="输入手机号" />
				   </li>
				   <li class="Input_box"> 
				   	<span> 密码 </span>
				   	<font id="suoTu"> <img src="<?php echo $pc_style; ?>img/denglu_denglumima.png"/> </font>
				   	<input type="password" name="password" id="Enter_psd" placeholder="输入登录密码" />
				   </li>
				   
				   <li class="Input_box code1" style="display:none">
				   	<span> 验证码 </span>
				   	<input type="text" name="co" id="co" placeholder="输入验证码" />
				   	<img id="code" src=""/>
				   	<em id="next"> 换一张 </em>
				   </li>
				   
				   <div class="in_mind" id="in_mind">
				   	  <img src="<?php echo $pc_style; ?>img/juxing.png"/><span> 记住密码 </span>
				   </div>
				   <input  type="button" class="denglu" id="btn" value="登录" />
				   <div class="has has1">
			  	 	  <a href="<?php echo Url::toRoute("user/repassword");?>"> 忘记密码？ </a> <span> 免费登录 </span>
			  	   </div>
				</div>
			</div>
		</div>
		
		<!--尾部部分-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		
		
	<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script>
		
	</body>
<script>
    $(document).ready(function(){
        $("#code").attr({src:"http://192.168.100.137:8080/code?t="+times()});

        $("#next").click(function(){
            $("#code").attr({src:"http://192.168.100.137:8080/code?t="+times()});
        });
        $("#btn").click(function(){
            var name = $("#Enter_phone").val();
            var password = $("#Enter_psd").val();
            var co = $("#co").val();
            $.ajax({
                url:"<?php echo Url::toRoute("user/login2");?>",
                data:{name:name,password:password,co:co},
                type:"POST",
                dataType:"json",
                success:function(data){
                   if( data.errorCode == -15){
                       $(".Do_match").css("display","block");
                       setTimeout('history.go()', 1500);
                   }else if(data.errorCode == -36){
                       $(".code1").css("display","block");
                   }else if(data.errorCode == -37){
                       alert("验证码错误");
                   }else if(data.errorCode == -34){
                       alert("网络繁忙，请稍后重试")
                   }else if(data.errorCode == 0){
                    alert("登录成功");
                       location .href="http://pcshop.cc/frontend/web/index/index";
                   }else if(data.errorCode ==-24){
                       alert("用户不存在");
                       history.go();
                   }else if(data.errorCode ==-48){
                       alert("密码错误");
                       history.go();
                   }else if(data.errorCode ==-54){
                       alert("账号被禁用");
                       history.go();
                   }

                },
                error:function(){
                    alert("错误");
                }
            })
        })


    });
    function times(){
        var time = new Date();
        return time.getTime();

    }

</script>
</html>
