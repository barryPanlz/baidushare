<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 用户登录 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/drag.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css">
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script> 
		<style>				
			.The_login .Input_box{
				position:relative;
			}
			.The_login .Input_box .s{				
				position:absolute;
				top:1px;
				right:61px;
				height:36px;
				width:40px;
				background: #fff;
			}
		</style>
	</head>
	
	<body style="background: #fff;">
		<!--登录头部-->
		<div class="super_enroll_top" >
			<div class="enroll_top">
                <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>">
				<img src="<?php echo $pc_style; ?>img/logo.png"/></a>
				<!--<span> 欢迎登录 </span>-->
			</div>
		</div>
		
		<!--登录页内容区--> 
		<div class="super_To_login" id="super_To_login">  
			 <img style="width: 0;" id="demo">
			<div class="To_login"> 
				<div class="The_login">
				   <h2> 账号登录 </h2>
                    <div class="Do_match" style="display: none">
                        <img src="<?php echo $pc_style; ?>img/hongdian.png"/>
                        <span> 密码输入错误/账号不存在/账号，密码不匹配 </span>
                    </div>
				   <li class="Input_box"> 
				   <!--	<span> 账号 </span>-->
				   	<font id="renTu"> <img src="<?php echo $pc_style; ?>img/zhanghu.png"/> </font>
				   	<input type="text" name="name" id="Enter_phone" placeholder="输入用户名" />
				   <!--	<div class="s"></div>-->
				   </li>
				   <li class="Input_box"> 
				  <!-- 	<span> 密码 </span>-->
				   	<font id="suoTu"> <img src="<?php echo $pc_style; ?>img/denglu_denglumima.png"/> </font>
				   	<input type="password" name="password" id="Enter_psd" placeholder="输入登录密码" />
				   <!--	<div class="s"></div>-->
				   </li> 
				   
				   <!--滑动解锁--> 
				   <!--<span id="sliding_validate"> 验证 </span>-->
				    <div id="drag">
                       <div class="drag_bg"></div>
                       <div class="drag_text" onselectstart="return false;" unselectable="on">
                                                               
                       </div>
                       <div class="handler handler_bg"></div>
                    </div>
				   
				   <div class="in_mind" id="in_mind">
				   	  <img src="<?php echo $pc_style; ?>img/juxing.png"/><span> 记住密码 </span>
				   </div>
				   <input  type="button" class="denglu" id="btn" value="登录" />
				   <div class="has has1">
			  	 	  <a href="<?php echo Url::toRoute("forgot/repassword");?>"> 忘记密码？ </a> <span><a href="<?php echo Url::toRoute("login/register1");?>"> 免费注册</a></span>
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
    <script type="text/javascript" src="<?php echo $pc_style; ?>js/jquery.cookie.js" charset="utf-8" ></script> 
    <script src="<?php echo $pc_style; ?>js/lib/jsized.snow.min.js" type="text/javascript"></script>
	<script>
	/**
	 * This function takes 2 arguments
	 * First is the path to the directory with snowflake images
	 * Second is the maximum number of snowflakes, please do not
	 * set this number above 60 as it will impact the performance
	 */
	createSnow("", 60);
	</script> 
    </body>
<script>
    var aa = '1';
    $(document).ready(function(){
        $("#btn").removeAttr('disabled');
   //  滑动解锁
       var  onoff = 0;
    $.fn.drag = function(options){
        var x, drag = this, isMove = false, defaults = {
        };
        var options = $.extend(defaults, options);
        //添加背景，文字，滑块
        var html = '<div class="drag_bg"></div>'+
                    '<div class="drag_text" onselectstart="return false;" unselectable="on">拖动滑块验证</div>'+
                    '<div class="handler handler_bg"></div>';
        this.append(html);
        
        var handler = drag.find('.handler');
        var drag_bg = drag.find('.drag_bg');
        var text = drag.find('.drag_text');
        var maxWidth = drag.width() - handler.width();  //能滑动的最大间距 
        //鼠标按下时候的x轴的位置
        handler.mousedown(function(e){
            isMove = true;
            x = e.pageX - parseInt(handler.css('left')); 
        });
        
        //鼠标指针在上下文移动时，移动距离大于0小于最大间距，滑块x轴位置等于鼠标移动距离
        $(document).mousemove(function(e){
            var _x = e.pageX - x;
            if(isMove){
                if(_x > 0 && _x < maxWidth){
                    handler.css({'left': _x});
                    drag_bg.css({'width': _x});
                }else if(_x >= maxWidth){  //鼠标指针移动距离达到最大时清空事件
                    dragOk();
                    handler.css({'left': maxWidth});
                    drag_bg.css({'width': maxWidth});
                    
                }
            }
        }).mouseup(function(e){
            isMove = false;
            var _x = e.pageX - x;
            if(_x < maxWidth){ //鼠标松开时，如果没有达到最大距离位置，滑块就返回初始位置
                handler.css({'left': 0});
                drag_bg.css({'width': 0});

            } 
        });
        
        //清空事件
        function dragOk(){
            handler.removeClass('handler_bg').addClass('handler_ok_bg');
            text.text('验证通过');
            drag.css({'color': '#fff'});
            handler.unbind('mousedown');
            $(document).unbind('mousemove');
            $(document).unbind('mouseup');
            onoff = 1;
            $("#btn").removeAttr('disabled');
        }
    };
    	


//    滑动之后才能点击
   function outClick() {
           alert( '请先滑动验证' );
           $("#btn").attr("disabled","disabled");
   };



//记住密码
       //$('#in_mind img').attr('src') == '../../resources/img/juxing1.png';
        //console.log($.cookie("rmbUser"));
        if ($.cookie("rmbUser") == 'juxing1') {

            //alert($('#in_mind img').attr('src'));
//            console.log($('#in_mind').find("in_mind").attr("src"))
            $('#in_mind').find("img").attr("src","../../resources/img/juxing1.png");
            $("#Enter_phone").val($.cookie("userName"));
            $("#Enter_psd").val($.cookie("passWord"));
        }
        saveUserInfo();


//        $("#code").attr({src:"http://192.168.100.137:8080/code?t="+times()});

//        $("#next").click(function(){
//            $("#code").attr({src:"http://192.168.100.137:8080/code?t="+times()});
//        });

        $("#Enter_psd").keydown(function(event){
            event=document.all?window.event:event;
            if((event.keyCode || event.which)==13){
                $("#btn").click();
            }
        });




        $("#btn").click(function(){
           var name = $("#Enter_phone").val();
           var password = $("#Enter_psd").val();
//           var co = $("#co").val();
            $("#btn").attr("disabled","disabled");
            $("#btn").css("background","#dedede");
            if(onoff == 1){
                var codes = 'yzm';
            }else{
                var codes = '';
            }
           $.ajax({
               url:"<?php echo Url::toRoute("login/login");?>",
               data:{name:name,password:password,vcode:codes},
               type:"POST",
               dataType:"json",
               success:function(data){
               		$("#btn").removeAttr('disabled');
               		$("#btn").css("background","#F3001D");
                  if( data.errorCode == -15){
                      $(".Do_match").css("display","block");
                      setTimeout('history.go()', 1500);
                  }else if(data.errorCode == -36){
                     // $(".code1").css("display","block");
                      $("#sliding_validate").css("display","block");
                      $("#drag").css("display","block");
                      $('#drag').drag();
                      outClick();
                      aa = '2';
                  }else if(data.errorCode == -37){
                      alert("验证码错误");
                    //  history.go();
                  }else if(data.errorCode == -34){
                      alert("网络繁忙，请稍后重试");
                     // history.go();
                  }else if(data.errorCode == 0){
                      saveUserInfo();
//                 alert("登录成功");
                      if(data.url != ''){
                            location.href=data.url;
                        }else{
                            location .href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?> ";
                        }
                      
                  }else if(data.errorCode ==-24){
                      alert(data.message);
                     // history.go();
                  }else if(data.errorCode ==-48){

                      alert(data.message);
                      if(aa == '2'){
                          $('#drag').empty();
                          $("#sliding_validate").css("display","block");
                          $("#drag").css("display","block");
                          $('#drag').drag();
                          outClick();
                      }

                      //history.go();
                  }else if(data.errorCode ==-54){
                      alert("账号被禁用");
                     // history.go();
                  }else if(data.errorCode == -82){
                      alert(data.message);
                    //  history.go();
                  }
               },
               error:function(){
                   alert("网络错误，请稍后重试");
                   $("#btn").removeAttr('disabled');
                   $("#btn").css("background","#F3001D");
               }
           })
       })


    });

    function saveUserInfo() {
        var rmbUser = 'juxing1';
        var onrmUser = '../../resources/img/juxing.png';
        if ($('#in_mind img').attr('src') == '../../resources/img/juxing1.png') {
            var userName = $("#Enter_phone").val();
            var passWord = $("#Enter_psd").val();
            $.cookie("rmbUser", rmbUser, { expires: 7 });
            $.cookie("userName", userName, { expires: 7 });
            $.cookie("passWord", passWord, { expires: 7 });
        }
        else {
            $.cookie("rmbUser", onrmUser, { expires: -1 });
            $.cookie("userName", '', { expires: -1 });
            $.cookie("passWord", '', { expires: -1 });
        }
    }


    function times(){
        var time = new Date();
        return time.getTime();
    }
    
    
    
    

</script>
</html>
