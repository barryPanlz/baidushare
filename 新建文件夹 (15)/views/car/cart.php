<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>购物车</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/cart.css" />
     	<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
	</head>

	<body>
		<!--购物删除层-->
		<div class="cart-del-mark" >
			<div class="mark-box">
				<div class="mark-top fix">
					<div class="fl">提示</div>
					<div class="fr">x</div>
				</div>
				<div class="mark-mid">
					<img src="<?php echo $pc_style; ?>img/tishi.png" alt="" />
					<span>删除全部商品？</span>
				</div>
				<div class="mark-btm">
					<input class="yes del_all" type="button" value="确认">
					<input class="no" type="button" value="取消">
				</div>
			</div>
		</div>
				
		<div class="cart-del-mark2" >
			<div class="mark-box">
				<div class="mark-top fix">
					<div class="fl">提示</div>
					<div class="fr">x</div>
				</div>
				<div class="mark-mid">
					<img src="<?php echo $pc_style; ?>img/tishi.png" alt="" />
					<span>删除此部商品？</span>
				</div>
				<div class="mark-btm">
					<input class="yes del_one" name="yes"  type="button" value="确认">
					<input class="no" type="button" value="取消">
				</div>
			</div>
		</div>

		<div class="cart-del-mark1" style="display:none;">
			<div class="mark-box">
				<div class="mark-top fix">
					<div class="fl">提示</div>
					<div class="fr">x</div>
				</div>
				<div class="mark-mid mark-mid1">
					<img src="<?php echo $pc_style; ?>img/cart-icon.png" alt="" />
					<span>您的购物车是空的，快去选宝贝吧！</span>
				</div>
				<div class="mark-btm mark-btm1">
					<a class="go" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">马上去购物</a>
					<p>（<span class="time">3</span>）五秒后自动消失</p>
				</div>
			</div>
		</div>

		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		
		
		
	<!--搜索商品栏-->
		
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		

		<!--购物内容部分-->
		<div class="cart-cont">
			<div class="data-width">
				<div class="cart-top">
					<img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" />
					<h2>购物车</h2> （<span class="car_num"><?php echo $num;?></span>）
				</div>
				<div class="cart-mid">
					<div class="cart-mid-all">
						<span class="mid-all"><input class="u_checkbox" type="checkbox" value="cbAll"/>&nbsp;全选</span>
						<span class="mid-info">商品信息</span>
						<span class="mid-rule">规格</span>
						<span class="mid-price">单价（三界石）</span>
						<span class="mid-mun">购买数量</span>
						<span class="mid-subtotal">小计</span>
						<span class="mid-oper">操作</span>
					</div>
				</div>
				<div class="cart-wrap">
					<?php foreach($goods_list as $v){ //var_dump($v)?>
					<ul class="wrap-item" id="<?php echo $v['id'];?>">				
						<li class="item-sel">
							<input type="checkbox" name="cbBox[]" class="checkAll" attr="<?php echo $v['id']; ?>" />
							<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v['goods_id'],'catId'=>$v['cat_id']]);?>"><img src="<?php echo $pic_host.$v['goods_img']; ?>" alt="" /></a>
						</li>
						<li class="item-info">
							<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v['goods_id'],'catId'=>$v['cat_id']]);?>"><?php echo $v['goods_name']; ?></a>
						</li>
						<li class="item-rule" style="width: 125px;">
							<span>
							<?php if(!empty($v['sku_info'])){ ?>
								<?php echo $v['sku_info']?>
							<?php }else{ ?>
								<?php echo "/";?>
							<?php }?>
							</span>
						</li>
						<li class="item-price">
							<span><?php echo $v['goods_price']; ?></span>
						</li>
						<li class="item-mun">
							<div class="">
<!--								<a href="###" class="d_subtract">-</a>-->
                                <input class="d_numVal" value="<?php echo $v['num']; ?>" readonly type="text" />
<!--								<a href="###" class="d_add">+</a>-->
							</div>
<!--							<div class="item-status">有货</div>							-->
						</li>
						<li class="item-subtotal">
							<span><?php echo $v['goods_price']*$v['num']; ?></span>
						</li>
						<li class="item-oper" attr="<?php echo $v['id']; ?>">
							<span>删除</span>
						</li>
					</ul>
					<?php } ?>

				</div>

				<div class="cart-btm">
					<div id="all-sel" class="all-sel">
						<input class="u_checkbox" type="checkbox" value="2" /><label for="">&nbsp;全选</label>
					</div>
					<div class="cart-btm-del">
						<span>删除</span>
					</div>
					<div class="settle">
						<ul>
							<li class="settle-seled">已选择商品<span>0</span>件</li>
							<li class="settle-text">合计（不含运费）：</li>
							<li id="settle-all">00.00</li>
							<li class="settle-fut">三界石</li>
							<li class="go-settle"><a>去结算</a></li>
						</ul>
					</div>
				</div>

				<!--购物车推荐tab-->
                <!--<div class="cart-tabs fix">
                <!--<ul class="cart-tabs-l">
                        <li class="cart-active">猜你喜欢</li>
                        <li>最近收藏</li>
                        <li>最近浏览</li>
                        <div></div>
                    </ul>
                    <div class="cart-tabs-r">
                        <span class="one">1</span>
                        <span class="one cart-hid">2</span>
                        <span class="one cart-hid">3</span>/
                        <a>1</a>
                    </div>-->
					<!--<div class="cart-tablist">
						<!--猜你喜欢-->
						<!--<ul>
							<?php /*if(!empty($goodslike)){foreach($goodslike as $k=>$v){ //var_dump($goodslike)*/?>
							<li class="c-li">
								<a href="<?php /*echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v->goodsId,'catId'=>$v->catId]);*/?>" class="li-top"><img src="<?php /*echo $pic_host.$v->goodsImg; */?>" style="height: 182px;"  alt="" /></a>
								<div class="li-mid">
									<p><span><?php /*echo empty($v->goodsPrice)?'':$v->goodsPrice; */?></span>&nbsp;三界石</p>
									<a class="text"><?php /*echo empty($v->goodsName)?'':$v->goodsName; */?></a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span><?php /*echo empty($v->goodsSales)?'0':$v->goodsSales; */?></span></div>
									<div class="li-btm-r"><img src="<?php /*echo $pc_style; */?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
                            <?php /*} }*/?>
						</ul>-->

						<!--最近收藏-->
						<!--<ul>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
						</ul>-->

						<!--最近浏览-->
						<!--<ul>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
							<li class="c-li">
								<a href="" class="li-top"><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="li-mid">
									<p><span>3568.00</span>&nbsp;三界石</p>
									<a class="text">APPLE 苹果 iPad mini4 7.9英寸平板电脑 WIFI 金色 64G</a>
								</div>
								<div class="li-btm">
									<div class="li-btm-l">已兑 <span>315</span></div>
									<div class="li-btm-r"><img src="<?php echo $pc_style; ?>img/shopping-cart.png" alt="" /></div>
								</div>
							</li>
						</ul>
					</div>
				</div>-->
				<div style="height:20px;"></div>
			</div>
		</div>
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script>
		$(document).ready(function() {
			//刷新重置input
// //			$(".checkAll").prop("checked",false);
// //			$(".u_checkbox").prop("checked",false);
// //			window.href="<?php echo \Yii::$app->urlManager->createUrl(['car/cart']); ?>"
// 			checknub();
// 			quanxunde();

//             //猜你喜欢
//             <?php /*if(empty($goods_list)){*/?>/*
//             $.ajax({
//                 url:"<?php /*echo \Yii::$app->urlManager->createUrl(['car/like']);*/?>",
//                 data:{"id":"12"},
//                 type:"post",
//                 success:function(){

//                 }
//             });
//             <?php /*}else { */?>
//             var id = $(".wrap-item").attr("id");
//             //alert(id);
//             $.ajax({
//                 url:"<?php /*echo \Yii::$app->urlManager->createUrl(['car/like']);*/?>",
//                 data:{"id":id},
//                 type:"post",
//                 success:function(){
//                 alert(id);
//                 },
//                 error:function(){
//                     alert("cuowu");
//                 }
//             });
//             */<?php /*}*/?>
			//购物车为空的时候五秒自动影藏
			<?php if(empty($goods_list)){ echo "x();";} ?>
			var xh;
			function x() {
				$('.cart-del-mark1').attr("style","display:block");
				var timer = 3;
				clearInterval(xh)
				xh = setInterval(function() {
					timer--
					$('.mark-btm1 .time').html(timer);
					if(timer == 0) {
						$('.cart-del-mark1').hide();
						clearInterval(xh);
					}
				}, 1000);
			}
			//列表切换
			$(function() {
				$('.cart-tabs-l li').click(function() {
					$(this).addClass('cart-active').siblings().removeClass('cart-active');
					var index = $(this).index();
					$('.cart-tablist ul').eq(index).show().siblings().hide();
					$('.cart-tabs-r .one').eq(index).show().siblings('span').hide();
				})
				$('.mark-top .fr').click(function() {
					$('.cart-del-mark1').hide();
					$('.cart-del-mark').hide();
				})
			})

//		全选
		$(".u_checkbox").click(function(){
	//		selectAll();
				if($(this).is(':checked')){
				$(".checkAll").prop("checked",true);
				$(".u_checkbox").prop("checked",true);
				checknub();//遍历选中几个
				quanxunde();
				}else{
					$(".checkAll").prop("checked",false);
					$(".u_checkbox").prop("checked",false);
					$("#settle-all").text("0");
                    $(".settle-seled").find("span").text('0');
					//y();//遍历选中几个
				}
		})
		function quanxunde(){
				var sub=0;
				var xx =0;
				var oli=$(".wrap-item");
				$.each(oli, function(n) { 
					if($(this).find(".item-sel").find("input").is(':checked')){
						var shopPret=$(this).find(".item-price").find("span").text();
						var shopNub=$(this).find(".d_numVal").val();
						var shopAllmonye = parseFloat(shopPret*shopNub);
						sub += shopAllmonye;
						xx += parseFloat(shopNub);
					}
				});
            //alert(sub);
				$("#settle-all").text(sub);
            $(".settle-seled").find("span").text(xx);
				
	}
	//	单个选
		$(".cart-wrap").find(".checkAll").click(function(){
			checknub();
			var shopmony=$(this).parents(".wrap-item").find(".item-price").find("span").text();//单价
			var shopnub=$(this).parents(".wrap-item").find(".d_numVal").val();//数量
			var shopAllmonye=parseFloat(shopmony*shopnub);
			var hejiNub=$("#settle-all").text();
			var hejinum = $(".settle-seled").find("span").text();
			if($(this).is(':checked')){
				$(this).prop("checked",true);
				var allNub=parseFloat(hejiNub)+parseInt(shopAllmonye);
				var allnum=parseFloat(hejinum)+parseInt(shopnub);
	 		}else{
				$("#u_checkbox").prop("checked",false);
				$(this).prop("checked",false);
				var allNub=parseFloat(hejiNub)-parseInt(shopAllmonye)
                var allnum=parseFloat(hejinum)-parseInt(shopnub);
			}
	 		eacher();
			$("#settle-all").text(allNub);
            $(".settle-seled").find("span").text(allnum);
		});
//				加减算法
				var dmoneyValOne =0;
			    var dmoneyValTwo = 0;//单价
				//数字加减
				var numVal = 0;
				$('.d_subtract').click(function(){	
					numVal=$(this).siblings('.d_numVal').val();
					var hejiNub=$("#settle-all").text();
					if(numVal>1){				
						numVal--;
						$(this).siblings('.d_numVal').val(numVal);
						var scPrice=$(this).parents(".wrap-item").find(".item-price").find("span").text();//单价
						var scNub=$(this).parents(".wrap-item").find(".d_numVal").val();//数量
						var totalPrices=scPrice*scNub;	//总价	
						$(this).parents(".wrap-item").find(".item-subtotal").find("span").text(totalPrices);//赋值总价
						if($(this).parents(".wrap-item").find(".checkAll").is(':checked')){
							$("#settle-all").text(hejiNub-scPrice)
						}
					}	
					$(this).addClass('c28').siblings('span').removeClass('c28');
					 return false;
				})
				$('.d_add').click(function(){
					var hejiNub=$("#settle-all").text();
					dmoneyValOne = $('.item-price span').text();
				    dmoneyValTwo = $('.item-subtotal span');  //小计						    
					numVal=$(this).siblings('.d_numVal').val();	
					numVal ++;
					$(this).siblings('.d_numVal').val(numVal);
					var scPrice=$(this).parents(".wrap-item").find(".item-price").find("span").text();//单价
					var scNub=$(this).parents(".wrap-item").find(".d_numVal").val();//数量
					var totalPrices=scPrice*scNub;	//总价	
					$(this).parents(".wrap-item").find(".item-subtotal").find("span").text(totalPrices);//赋值总价
					if($(this).parents(".wrap-item").find(".checkAll").is(':checked')){
							$("#settle-all").text(parseFloat(hejiNub)+parseFloat(scPrice))
						}
				})
				inchange();
				//input()
				function inchange(){
					$(".cart-wrap").find(".d_numVal").change(function(){
					var scPrice=$(this).parents(".wrap-item").find(".item-price").find("span").text();//单价
					var scNub=$(this).val();//数量
					var totalPrices=scPrice*scNub;		
					$(this).parents(".wrap-item").find(".item-subtotal").find("span").text(totalPrices);
					var sub=0;
					var oli=$(".wrap-item");
					if($(this).parents(".wrap-item").find(".checkAll").is(':checked')){
						$.each(oli, function(n) {         
							var shopPret=$(this).find(".item-price").find("span").text();
							var shopNub=$(this).find(".d_numVal").val();
							var shopAllmonye = parseFloat(shopPret*shopNub);
							sub += shopAllmonye;
						});

						$("#settle-all").text(sub);
                        //$(".settle-seled").find("span").text(sub);
						}
					})
				}
					//	单选遍历是否全选
					function eacher(){
						var oli=$(".cart-wrap").find(".item-sel").find(".checkAll");
						$.each(oli, function(n) {
							if($(this).is(':checked')==false){
								$(".u_checkbox").prop("checked",false);
								return false;
							}else{
								$(".u_checkbox").prop("checked",true);
							}
						});
					}
					//遍历计算选中几个
					function checknub(){
						var ocheck=$(".cart-wrap").find(".item-sel").find(".checkAll");
						var ochecknub=0;
						$.each(ocheck, function(n) {
							if($(this).is(':checked')==true){
								ochecknub++;
							}
							if(ochecknub>0){
								$(".go-settle").css("background","#F3001D")
							}else{
								$(".go-settle").css("background","#D4D4D4")
							}
						});
						//$(".settle-seled").find("span").text(ochecknub);
					}
					//删除
					$(".item-oper").click(function(){
						$(".cart-del-mark2").css("display","block");
						$(".mark-mid").find("span").text("确定删除此商品？");
                        $(".mark-btm input[name='yes']").attr("attr",$(this).attr('attr'));
					})
					$(".del_one").click(function(){
						var car_id = $(this).attr('attr');
    				     $.ajax({
                            type:'POST',
                            data:'car_id='+car_id,
                            dataType:'json',
                            url:'<?php echo Yii::$app->urlManager->createUrl('car/delcar'); ?>',
                            success:function(data){
                                 if(data.errno==0){
                                    alert(data.error);
                                    $('#'+car_id).remove();
									$(".cart-del-mark2").css("display","none");
									$(".car_num").html($(".car_num").html()-1);
                                     history.go();
                                 }else{
                                    alert(data.error);
                                 }
                            },
                         })
					})
					//批量删除
					$(".cart-btm-del").find("span").click(function(){
					    var num = $(".settle-seled").find("span").text();
						$(".cart-del-mark").css("display","block");
						$(".mark-mid").find("span").text("确定删除"+num+"件商品？");
					})
					$('.del_all').click(function(event){
                        car_id = '';
						i = 0;
					 	$('.wrap-item .item-sel input').each(function(){
					 		if($(this).prop('checked')==true){
					 		     car_id += $(this).attr('attr')+',';
                                 $(this).parents('.wrap-item').remove();
								 i++;
					 		}
					 	});
                        car_id = car_id.substring(0,car_id.length-1);
                        //console.log(car_id); return false;
                        $.ajax({
                            type:'POST',
                            data:'car_id='+car_id,
                            dataType:'json',
                            url:'<?php echo Yii::$app->urlManager->createUrl('car/delallcar'); ?>',
                            success:function(data){
                                 if(data.errno==0){
                                    alert(data.error);
                                    $(this).parent('.cart-wrap .wrap-item').remove();
									$(".cart-del-mark").css("display","none");
									$(".car_num").html($(".car_num").html()-i);
                                     history.go();
                                 }else{
                                    alert(data.error);
                                 }
                            },
                        })
                        //var tmp = $(this).attr('attr').split(',');
						$('.cart-del-mark').hide();							
						inputStr=[];
					})

                    $(".no").click(function(){
                        $(".cart-del-mark").css("display","none");
                        $(".cart-del-mark2").css("display","none");
                    })
                 
                    $('.mark-top').click(function(){
                    	 $(".cart-del-mark2").css("display","none");
                    })

					//去结算
					$(".go-settle").click(function(){
						var num = $(".d_numVal").val();
						
                         var arr = Array();
                         $('.wrap-item .item-sel input').each(function(){
    					 		if($(this).prop('checked')==true){
    					 		     car_id = '';
            					 	$('.wrap-item .item-sel input').each(function(){
            					 		if($(this).prop('checked')==true){
            					 		     car_id += $(this).attr('attr')+',';
            					 		}
            					 	});
                                    car_id = car_id.substring(0,car_id.length-1);
                                    location.href="<?php echo Yii::$app->urlManager->createUrl('order/found_order'); ?>?car_id="+car_id+"&isPromote=0"+"&num="+num;
    					 		}
    					 });
                    })
           return false;         
        })															
		</script>
	</body>

</html>