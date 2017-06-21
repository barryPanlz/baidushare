$(document).ready(function(){

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
	if(!/\d{6}$/.test(code)){
	    return false;
	}
	return true;
   },
   //密码正则
	userPassword:function (userPassword){
    if(!/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,16}$/.test(userPassword)){
        return false;
    }
    return true;
   }
};


//	鼠标滑过图片下面的阴影说明文字出现
  function mouse( event){
////鼠标划入的效果
 var index_on_off = true;
 event.mouseover(function(){
 	if( index_on_off ){
 		index_on_off = false;
 		$(this).find("em").slideDown(800,function(){ }); 
   //鼠标离开的效果
   event.mouseleave(function(){
 		$(this).find("em").slideUp(400,function(){
 	//	     $(this).css("display","none");
 	      index_on_off = true;
 		});	
 	  });
  }
 });
  }

	mouse( $("#explain1") );
	mouse( $(".explain2") );
	mouse( $(".mask") );
	mouse( $(".mask1") );
	mouse( $(".mask2") ); 
	mouse( $(".mask3") ); 
	mouse( $(".the_second") ); 
	mouse( $(".mask5") ); 
	
	
//	首页楼梯效果 
$("#Stairs span").click(function(){
 	var index = $(this).index();
 	$(this).addClass('bianse').siblings().removeClass('bianse');
 	var oTop = $(".first_floor").eq(index).offset().top;
 	console.log( oTop );
 	$("body,html").animate({scrollTop:oTop},1000);
});

  $(window).scroll(function(){  
  	var scTop = parseInt( document.body.scrollTop||document.documentElement.scrollTop );
  	var diffe;
  	console.log( scTop );
   if(  scTop >= 560 ){
  	diffe = scTop - 1300 + 'px';
  	$('#Stairs').css('top',diffe);  
  } 
  
  }); 
 
 window.onresize = function(){
 	var cliWid =  parseInt( document.body.clientWidth  );
    if( cliWid <= 1180 ){
    	$('#Stairs').css('display','none');
    }else{
    	$('#Stairs').css('display','block');
    }
}




  
//三级菜单

var Secondary_Li = $("#Secondary li");
var Secondary = $("#Secondary");
var level_3 = $("#Secondary div");
var iNum = 0;
for( var i = 0; i < Secondary_Li.length; i++ ){
	Secondary_Li[i].index = i;
	Secondary_Li[i].onmousemove = function(){
		iNum = $(this).index();
		$(this).addClass('backFff').siblings().removeClass('backFff');
		for( var k = 0; k < level_3.length; k++ ){
			level_3[k].className = 'wu';
		};
		level_3[iNum].className = 'you';
	    level_3[iNum].onmouseleave = function(){
	    	level_3[iNum].className = 'wu';
	    	Secondary_Li[iNum].className = '';
	    };
	    Secondary_Li[iNum].onmouseleave = function(){
	    	level_3[iNum].className = 'wu';
	    	Secondary_Li[iNum].className = '';
	    };
	};
};

// Secondary_Li.onclick = function(){
// 	console.log( 100 );
// 	for( var k = 0; k < level_3.length; k++ ){
//		level_3[k].className = 'wu';
//};
//};

//点击记住密码事件
$("#in_mind").on("click",function(){
	if(  $(this).find("img").attr("src") == "../../resources/img/juxing.png"){
		$(this).find("img").attr("src","../../resources/img/juxing1.png");
	}else{
		$(this).find("img").attr("src","../../resources/img/juxing.png");
};	 
});

//点击我同意<<商创版用户协议>>事件
$("#Agreedto").on("click",function(){
	if(  $(this).find("img").attr("src") == "../../resources/img/tuoyuan.png"){
		$(this).find("img").attr("src","../../resources/img/tuoyuan1.png");
	}else{
		$(this).find("img").attr("src","../../resources/img/tuoyuan.png");
};	 
});

//登录时获得焦点的效果
function  focusOf( event1,event2 ){
   event1.focus(function(){
		$(this).css("border","1px solid #f3001d");
 		event2.css("border","1px solid #f3001d");
   });
   event1.blur(function(){
		$(this).css("border","1px solid #ccc");
		event2.css("border","1px solid #ccc");
   });
}


focusOf( $("#Enter_phone"),$("#renTu") );
focusOf( $("#Enter_psd"),$("#suoTu") );

//失去焦点判断符合正则
function lose1( ev1,ev2,ev3 ){
   ev1.blur(function(){ 
	  if( validate.phone( ev1.val() ) ){
	  	ev2.css('visibility','hidden');
	  	ev3.css('visibility','visible');
	  }else{
	  	ev2.css('visibility','visible');
	  	ev3.css('visibility','hidden');
	  }
  });
};

function lose2( ev1,ev2,ev3 ){
   ev1.blur(function(){ 
	  if( validate.code( ev1.val() ) ){	
	  	ev2.css('visibility','hidden');
	  	ev3.css('visibility','visible');
	  }else{
	  	ev2.css('visibility','visible');
	  	ev3.css('visibility','hidden');
	  }
  });
};

function lose3( ev1,ev2,ev3 ){
   ev1.blur(function(){ 
	  if( validate.userPassword( ev1.val() ) ){	 
	  	ev2.css('visibility','hidden');
	  	ev3.css('visibility','visible');
	  }else{
	  	ev2.css('visibility','visible');
	  	ev3.css('visibility','hidden');
	  }
  });
};

//忘记密码页面判断两次密码可一致
$('#rePsd').blur(function(){
	if( $('#newPSd').val() == $('#rePsd').val() ){
		$('#p4').css('visibility','hidden');
		$('#Img8').css('visibility','visible');
	}else{
		$('#p4').css('visibility','visible');
		$('#Img8').css('visibility','hidden');
	}
});

//注册页面判断两次密码可一致
$('#rePsd1').blur(function(){
	if( $('#newPSd1').val()==""){
		$('#p8').css('visibility','visible');
		$('#Img4').css('visibility','hidden');
	}
	else if( $('#newPSd1').val() == $('#rePsd1').val() ){
		$('#p8').css('visibility','hidden');
		$('#Img4').css('visibility','visible');
	}else{
		$('#p8').css('visibility','visible');
		$('#Img4').css('visibility','hidden');
	}
});

//手机号提示获得焦点就去掉
$('#mobile_phone1').focus(function(){
	$('#Str').css('display','none');
});
$('#mobile_phone').focus(function(){
	$('#Str1').css('display','none');
});

  // 调用函数
   lose1( $('#mobile_phone'),$('#p1'),$('#Img5') );
   lose1( $('#mobile_phone1'),$('#p5'),$('#Img1') );
   lose2( $('#Veri'),$('#p2'),$('#Img6') );
   lose2( $('#Veri1'),$('#p6'),$('#Img2') );
   lose3( $('#newPSd'),$('#p3'),$('#Img7') );
   lose3( $('#newPSd1'),$('#p7'),$('#Img3') );

});