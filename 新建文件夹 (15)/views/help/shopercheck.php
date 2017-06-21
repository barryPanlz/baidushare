<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>商家入驻</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/private/shopercheck.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/common/shopheader.css"/>
	
	</head>
	<body>
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">				
				<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">	<img src="<?php echo $pc_style; ?>img/logo.png"/></a>
			</div>			
		</div>	
		<!--频道跳转栏-->
		<div class="super_general_navi ">
			<!--一级菜单-->
			<div class="general_navi">
			 <?php echo \Yii::$app->view->renderFile('@app/views/layouts/link.php'); ?>
			<!--二级菜单-->
			  <?php echo \Yii::$app->view->renderFile('@app/views/layouts/category.php'); ?>
					
		</div>
		</div>
	
		<div class="w_wrap" style="background: #FFFFFF;">
			<div class="w">
				<!--面包屑-->
				<p class="crumbs-bar">
					<a href="###">首页</a>
					<i>></i>
					<a class="bar_act_clor" href="###">商家入驻</a>
				</p> 
				<div class="che_center">
					<div class="che_center_top">
						请您填写以下简单资料，我们的客服会尽快联系您完成商家注册：
					</div>
					<form action="/frontend/web/help/shoperjoin" id="shoperjoin" method="post">
					<ul>
						<li>
							<p class="che_ul_li_pleft">
								
							</p>
							<p class="che_ul_li_pright">
								<span><input class="zhifu" type="radio" name="user_type" id="user_type4" value="4" checked onclick="get_user_type(4)"/><em>我是产品供应商</em></span>
								<span><input class="zhifu" type="radio" name="user_type" id="user_type3" value="3"  onclick="get_user_type(3)"/><em>我是实体店铺商家</em></span>
								<span><input class="zhifu" type="radio" name="user_type" id="user_type5" value="5"  onclick="get_user_type(5)"/><em>我是代理商</em></span>
							</p>
							
						</li>
						<li class="shop_name">
							<p class="che_ul_li_pleft">
								商家名称
							</p>
							<p class="che_ul_li_pright">
								<input class="shoper_name" type="text" name="topic" id="topic" value="" placeholder="输入您的公司营业执照名称或店铺名称" />
							</p>
							<p class="u_posi_p">
								 
							</p>
						</li>
						<li>
							<p class="che_ul_li_pleft apply_city">
								所在城市
							</p>
							<p class="che_ul_li_pright">
								<select name="provinceid" id="province" class="shoper_name shoper_city shoper_city1">
									<?php foreach($prolist as $v){ ?>
										<option value="<?php echo $v['provinceid']; ?>"><?php echo $v['province']; ?></option>
									<?php } ?>
								</select>
								<select name="cityid" id="city" class="shoper_name shoper_city">
									<?php foreach($city_list as $v){ ?>
										<option value="<?php echo $v['cityid']; ?>"><?php echo $v['city']; ?></option>
									<?php } ?>
								</select>
								<select name="areaid" class="shoper_name shoper_city" id="district">
									<?php foreach($area_list as $v){ ?>
										<option value="<?php echo $v['areaid']; ?>"><?php echo $v['area']; ?></option>
									<?php } ?>
								</select>
							</p>
							<p class="u_posi_p">
								 
							</p>
						</li>
						<li>
							<p class="che_ul_li_pleft">
								联系人
							</p>
							<p class="che_ul_li_pright">
								<input class="shoper_name shoper_name1" type="text" name="username" id="username" value="" placeholder="请输入您的姓名，以方便客服联系您" />
							</p>
							<p class="u_posi_p">
								 
							</p>
						</li>
						<li>
							<p class="che_ul_li_pleft">
								电话
							</p>
							<p class="che_ul_li_pright">
								<input class="shoper_name shoper_name1" type="text" name="phone" id="phone" value="" placeholder="输入您的手机号" />
								<b>或</b>
								<input class="shoper_name shoper_quhao" type="text" name="" id="" value="" placeholder="区号" />
								<i>—</i>
								<input class="shoper_name shoper_zuoji" type="text" name="" id="" value="" placeholder="座机号码" />
							</p>
							<p class="u_posi_p">
								 
							</p>
						</li>
						<li>
							<p class="che_ul_li_pleft">
								邀请码
							</p>
							<p class="che_ul_li_pright">
								<input class="shoper_name shoper_name1" type="text" name="parent_usercode" id="parentUsercode" value="" placeholder="输入邀请码" />
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/getsyscode']);?> ">没有验证码？<span>点击获得系统默认码</span></a>
							</p>
							<p class="u_posi_p">
								 
							</p>
						</li>
						<li>
							<p class="che_ul_li_pleft">
							</p>
							<p class="che_ul_li_pright">
								<button type="submit">提交资料</button><br />
								<span class="kefudianhua">客服电话：13718649545</span>
							</p>
						</li>
					</ul>


						</form>
				</div>
			</div>
			
		</div>
		<!--尾部部分-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
	
			<script src="<?php echo $pc_style ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="<?php echo $pc_style ?>js/lib/inputs.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			 $(document).ready(function(){
			 	
   
			
			   
			})   ;
			
			$("#funLoca").mousemove(function(){
				$(".nav_li_wrap ul").css("display","block");
				$("#funLoca").addClass("loca_a");
			})
			$("#funLoca").mouseleave(function(){
				$(".nav_li_wrap ul").css("display","none");
				$("#funLoca").removeClass("loca_a");
			})
			$(".nav_li_wrap ul").mousemove(function(){
				$(".nav_li_wrap ul").css("display","block");
				$("#funLoca").addClass("loca_a");
			})
			$(".nav_li_wrap ul").mouseleave(function(){
				$(".nav_li_wrap ul").css("display","none");
				$("#funLoca").removeClass("loca_a");
			})
			
			
			$(".fun_huag_act").mouseover(function(){
				$("#Secondary").css("display","block");
			});
			$(".fun_huag_act").mouseleave(function(){
				$("#Secondary").css("display","none");
			})
				var Secondary_Li = $("#Secondary li");
				var Secondary = $("#Secondary");
				var level_3 = $("#Secondary div");
				var iNum = 0;
				for( var i = 0; i < Secondary_Li.length; i++ ){
					Secondary_Li[i].index = i;
					Secondary_Li[i].onmousemove = function(){
						$("#Secondary").css("display","block");
						iNum = $(this).index();
						$(this).addClass('backFff').siblings().removeClass('backFff');
						for( var k = 0; k < level_3.length; k++ ){
							level_3[k].className = 'wu';
						};
						level_3[iNum].className = 'you';
					    level_3[iNum].onmouseleave = function(){
					    	$("#Secondary").css("display","none");
					    	level_3[iNum].className = 'wu';
					    	Secondary_Li[iNum].className = '';
					    };
					    Secondary_Li[iNum].onmouseleave = function(){
					    	$("#Secondary").css("display","none");
					    	level_3[iNum].className = 'wu';
					    	Secondary_Li[iNum].className = '';
					    };
					};
				};




//			 $('[name="user_type"]').change(function(e){
//				 console.log(e);
//
//				 $('.apply_city').html('申请代理的城市');
//
//			 })

		 // 单选项 点击事件
		function get_user_type(v){

			if(parseInt(v) == 5){
				$('.apply_city').html('申请代理的城市');
				$('.shop_name').hide();
				$('#topic').val('');//清空商户名称

			}else{
				$('.apply_city').html('所在城市');
				$('.shop_name').show();
			}


		}
			 //获取城市以及城市的第一个区县
			 $('select[name="provinceid"]').change(function(e){

				 var val = $(this).children('option:selected').val();
				 var get_type = $(this).attr("attr");
//				 var csrfToken = $('meta[name="csrf-token"]').attr("content");
				 $.ajax({
					 url: "<?php echo Yii::$app->urlManager->createUrl('common/getlocation');?>",
					 data:{parent_id:val,parent_type:'province'},
					 type: "post",
					 dataType:'json',
					 success: function (data) {
						 console.log(data);
						 if(data.errno=='0'){
							 //console.log(data.errno);
							 var html = '';
							 $.each(data.data,function(i){
								 html += "<option value='"+this.cityid+"'>"+this.city+"</option>";
							 });
							 //添加第一个的区县
							 var area_html = '';
							 $.each(data.area,function(i){
								 area_html += "<option value='"+this.areaid+"'>"+this.area+"</option>";
							 });

								 $('#city').html(html);
								 $('#district').html(area_html);

						 }else{
							 alert(data.error);
						 }
					 },
					 error:function(error){
						 alert("error!");
					 }
				 });
			 })
			 $('#city').change(function(e){
				 var val = $(this).children('option:selected').val();
				 var get_type = $(this).attr("attr");
				 $.ajax({
					 url: "<?php echo Yii::$app->urlManager->createUrl('common/getlocation');?>",
					 data:{parent_id:val,parent_type:'city'},
					 type: "post",
					 dataType:'json',
					 success: function (data) {
						 if(data.errno=='0'){
							 //添加城市
							 var html = '';
							 $.each(data.data,function(i){
								 html += "<option value='"+this.areaid+"'>"+this.area+"</option>";
							 });
							 if(get_type =="update"){
								 $('#update_district').html(html);
							 }else{
								 $('#district').html(html);
							 }

						 }else{
							 alert(data.error);
						 }
					 },
					 error:function(error){
						 alert("error!");
					 }
				 });
			 })




			 function initAddFormListen(){
				 $('#shoperjoin').on('submit',function(ev){
					 ev.preventDefault();
					 var topic =$('#topic').val();
//					 console.log(topic);
					//商家名称
                     /* 如果是代理商 .则无需检查 商家名称 */



//                     if(){
//

//                     }console.log(user_type);

//                     alert(user_type);


                         YZtopic("topic");


				 	//联系人
				 	YZtopic("username");
				 	//手机号
					YZphone();
				 	//邀请码
					YZparentUsercode();
				 	if(YZtopic("topic")&&YZtopic("username")&&YZphone()&&YZparentUsercode()){
				 		 $.ajax({
							 url:"<?php echo Yii::$app->urlManager->createUrl('help/shoperjoin');?>",
							 type:'post',
							 sync:false,
							 dataType:'json',
							 data:$('#shoperjoin').serialize(),
							 success:function(d){
								 console.log(d);
								 if(d.status == 1){
									 alert('申请成功!');
								 }else{
									 alert(d.message);
								 }
							 },
							 error:function(aa,bb,cc){
								 alert(aa);
								 alert(bb);
								 alert(cc);
							 }
						 });
				 	}
				 });
			 }
			 //页面加载完毕 , 添加一个监听form提交事件
				 initAddFormListen();
				  //商家名称
				  $("#topic").blur(function(){
					YZtopic("topic");
				  });
				  //联系人
				 $("#username").blur(function(){
					YZtopic("username");
				  });
			  	//手机
				  $("#phone").blur(function(){
					YZtopic("phone");
					YZphone();
				  });
				//邀请码
				  $("#parentUsercode").blur(function(){
					YZtopic("parentUsercode");
					YZparentUsercode();
				  });
			  //不可为空验证
			  function YZtopic(domm){
			  	if($("#"+domm).val()==""){

                    var temp = $('.zhifu');
                    for(var i=0;i<temp.length;i++)
                    {
                        if(temp[i].checked)
                            var user_type = temp[i].value;
                    }

                    if(user_type == 5){
                        return true;
                    }else{
                        $("#"+domm).parents("li").find(".u_posi_p").text("不可为空");
                        return false;
                    }
//			  		console.log($("#"+domm).parents(".shop_name").find(".u_posi_p").text())

			  	}{
			  		$("#"+domm).parents("li").find(".u_posi_p").text("");
			  		return true;
			  	}
			  }
		  	//手机号验证
			function YZphone(){
					if( !validate.phone( $("#phone").val() ) ){
				 		$("#phone").parents("li").find(".u_posi_p").text("请输入正确的手机号");
				 	return false;
				}else{
					$("#phone").parents("li").find(".u_posi_p").text("");
					return true;
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

	</body>
</html>
