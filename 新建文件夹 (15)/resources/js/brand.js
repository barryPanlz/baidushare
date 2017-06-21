 			//	首页楼梯效果 
//			$(".nav-lista li").click(function(){
//			 	var index = $(this).index()-1;
//			 	$(this).addClass('acitve').siblings().removeClass('acitve'); 
//			 	var oTop = $(".brand-mid-box").eq(index).offset().top;  
//			 	
//			 	$("body").animate({scrollTop:oTop},1000);
//
//         
//			});
//			
			  $(window).scroll(function(){  
			  	var scTop = parseInt( document.body.scrollTop||document.documentElement.scrollTop );
			  	var diffe;
			 if(  scTop >= 600){
   			  	diffe = scTop - 400+ 'px';
   			  	$('.nav-lista').css('top',diffe);  
   			  } 
   			  
   			}); 


			 
//			 window.onresize = function(){
//			 	var cliWid =  parseInt( document.body.clientWidth  );
//			    if( cliWid <= 1180 ){
//			    	$('.nav-lista').css('display','none');
//			    }else{
//			    	$('.nav-lista').css('display','block');
//			    }
//			}

          $(function(){
			  var _index=0;
			  $(".nav-lista li").click(function(){
			   $(this).find("span").addClass("active").parent().siblings().find("span").removeClass("active");
			   _index=$(this).index()-1;
//			   alert(_index)
			   //通过拼接字符串获取元素，再取得相对于文档的高度
              //var _top=$("#louti"+_index).offset().top;
              var index = $(this).index()
               var _top = $(".brand-mid-box").eq(index-1).offset().top;  
			     //scrollTop滚动到对应高度
			      $("body,html").animate({scrollTop:_top},500);
			  });
			  var nav=$(".nav-lista"); //得到导航对象
			  var win=$(window); //得到窗口对象
			  var sc=$(document);//得到document文档对象。
			  win.scroll(function(){
			 
			   if(sc.scrollTop()>=600){
			      $(".nav-lista ").show(); 
			  // 获取滚动元素对应的索引!!!重难点
			   var index=Math.floor(sc.scrollTop()/600);	 
//			   $(".nav-lista li").eq(index).addClass("active").parent().siblings().find("span").removeClass("active");
		      }else{
//			   $(".nav-lista").hide();
			   }
			  });
			 });
			 


