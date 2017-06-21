$(document).ready(function(){
	
   // 商品列表的高度 	
//var hei =  $('.specific2').height();  
// console.log( hei );
//$('.jiage1').css('height',hei+'px'); 
//$('.loca1').css('height',hei+'px');
//$('.logistics1').css('height',hei+'px'); 
  
//function hei( event ){
//var hei =  event.height();  
//event.siblings().css('height',hei+'px');  
//};
  
  
//for( var i = 0; i < 100; i++ ){
//	hei( $('.specific').eq(i) );
//}
  
  $.each( $('.specific'), function(i) {
  	var hei =  $('.specific').eq(i).height();
  	$('.specific').eq(i).siblings().css('height',hei+'px');  
  });
   
  
//var hei1 =  $('.specific1').height(); 
//console.log( hei1 );
//$('.jiage').css('height',hei1+'px');
//$('.loca').css('height',hei1+'px');
//$('.logistics').css('height',hei1+'px');
  
  
    //  点击查询近几个月订单
    $('.inquire1').click( function() {
       $('.triangle_down').css('border-top','8px solid #F2021C'); 
       $('.inquire1').css({"border":"1px solid #F2021C","border-bottom":"0","height":"33px","background":"#fff"});
       $('.inquire1 dt').css('display','block');
       
       function disappear( event ){
       	    event.click(function(){
           	 var htmlContent = $(this).html();
           	  $('.changeContent').html( htmlContent) ;
           	  $('.inquire1 dt').css('display','none');
           	  $('.triangle_down').css('border-top','8px solid #575757'); 
              $('.inquire1').css({"border":"1px solid #ddd","height":"32px","background":"#fff"}); 
               return false;  
           });
       };
       disappear( $('.liuYue') );
       disappear( $('.yinian') ); 
        
       return false;
    }); 
    	


});