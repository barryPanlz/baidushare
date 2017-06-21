<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>商家主页</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/live/merchantinde.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/liveheader.css"/>
	</head>
	<body>
		
		
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/life_top.php'); ?>	

		
		<div class="w_wrap">
			<div class="w">
				<!--面me_top_left包屑-->
				<p class="crumbs-bar">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['life/index']);?>">首页</a><i>></i>
					<a class="bar_act_clor" ><?php echo $merchant['store_name']; ?></a>
				</p> 
				<div class="me_top">
					<div class="me_top_left">
						<img src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
						<div class="me_top_left_div">
							<div class="me_top_left_div_title">
								<?php echo $merchant['store_name']; ?>
							</div>
							<div class="me_top_left_div_center">
								<p><span>注册号：</span><span><?php echo $merchant['store_name']; ?></span></p>
								<p><span>注册名称：</span><span><?php echo $merchant['store_name']; ?></span></p>
								<p><span>营业时间：</span><span><?php echo $merchant['store_tel']; ?></span></p>
								<p><span>门店服务：</span><span><?php echo $merchant['store_tel']; ?></span></p>
							</div>
							<div class="me_top_left_div_bot">
								<p><span>电话：</span><span><?php echo $merchant['store_tel']; ?></span></p>
								<p><span>地址：</span><span><?php if(!empty($province['province'])&&!empty($city['city'])&&!empty($area['area'])){echo $province['province'].$city['city'].$area['area'].$merchant['address'];} ?></span></p>
							</div>
						</div>
					</div>
					<div class="me_top_right">
						<dl>
							<!--<dt><img src="<?php echo $pic_host.$merchant['Rcode']; ?>"/></dt>
							<dd>扫码享受VIP服务</dd>-->
						</dl>
					</div>
				</div>
				<div class="me_jieshao">
					<div class="me_jieshao_title">
						商家介绍
					</div>
					<div class="me_jieshao_line">
					</div>
				</div>
				<div class="me_jiecontent">
					<?php echo $merchant['store_desc']; ?>
				</div>
				<div class="me_jieshao">
					<div class="me_jieshao_title">
						店铺照片
					</div>
					<div class="me_jieshao_line">
					</div>
				</div>
				<div class="me_dianpu">
					<div class="page_anniu" id="prew">
						<img src="<?php echo $pc_style; ?>img/zoujiantou-kedianji.png"/>
					</div>
					<div class="outer">
						<div class="inner" id="innner">
							<img class="tu_acti" src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
							<img src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
							<img src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
							<img src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
							<img src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
							<img src="<?php echo $pic_host.$merchant['store_img']; ?>"/>
						</div>
					</div>
					<div class="page_anniu" id="next">
						<img src="<?php echo $pc_style; ?>img/youjiantou1.png"/>
					</div>
				</div>
				
				<!--<iframe width="110%" frameborder="0" height="890px;" src="<?php echo \Yii::$app->urlManager->createUrl(['life/merchantinde_goodslist','store_id'=>$merchant['store_id']]);?>"></iframe>
				再售商品-->
                 <div class="me_zaishou">
					<div class="con_sousuo">
						<div class="zaishou">
							<span>在售商品(</span>
							<em ><?php echo empty($count)?0:$count; ?></em>
							<span>件)</span>
						</div>
						<div class="con_page">
                        	<span class="con_page_ji">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
                            	<span class="con_page_ji">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
							<span><span>共</span><i><?php echo empty($count)?0:$count; ?></i><span>商品</span></span>
							<!--<span class="con_page_nub"><span class="con_page_page1">1</span><i class="page_color1">/</i><span class="page_color1">15</span>
							</span>
                            -->
                            	<!--
							<span class="con_page_ji">
								<a href="#"><</a>
								<a href="#" class="page_color1">></a>
							</span>
                            -->
						</div>
					</div>
					<ul class="benDi">
                    <?php if(!empty($list)){ foreach($list as $v){ ?>
                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodsdetails','goodsId'=>$v['store_goods_id']]);?>">
						<li>
							<img src="<?php echo $pic_host.$v['goods_img'];?>" style="width: 221px;height:220px"/>
							<h4> <?php echo $v['goods_name'];?> </h4>
							<p> <?php echo $v['goods_name'];?> </p>
							<div class="cost_look">
								<div class="cost">
									<dt> <font>&yen;</font> <?php echo $v['promote_price'];?>  </dt>
									<dl> 价格 <del> &yen; <?php echo $v['shop_price'];?>  </del> </dl>
								</div>
								<div class="Look">
									<span>已售</span>
									<em><?php echo $v['goods_sales'];?></em>
								</div>
							</div>
						</li>
                        </a>
                    <?php }} ?>
					</ul>	
				</div>
                <!--20161120胡天培   <div class="page_warp" style="background: #f6f6f6;">
					<p>
						<span>
							<a>上一页</a>&nbsp;&nbsp;
							<a class="color_page_title">1</a>
							<a>2</a>
							<a>3</a>
							<a>4</a>
							<a>5</a>
							&nbsp;&nbsp;<a>下一页</a>
						</span>
						<span>
							<span>共</span>
							<i>20</i>
							<span>页，</span>
							<span>跳转到</span>
							<input class="page_input" type="tel" name="" id="" value="" />
							<span>页</span>
							<button>确定</button>
						</span>
					</p>
				</div>	
                -->	
		</div>
	
		<!--footer-->
		
 	    <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var disee=0;
				$("#next").click(function(){
				$("#prew").find("img").attr("src","<?php echo $pc_style; ?>img/zoujiantou-kedianji.png");
				$("#next").find("img").attr("src","<?php echo $pc_style; ?>img/youjiantou1.png")
				disee=disee-290;
				if (disee<=-870) {
					disee=-870
					$("#next").find("img").attr("src","<?php echo $pc_style; ?>img/youjiantou-zhihui.png")
				}
				$("#innner").stop().animate({
					left:disee+"px"
				},1000);
			});
			$("#prew").click(function(){
				$("#prew").find("img").attr("src","<?php echo $pc_style; ?>img/zoujiantou-kedianji.png");
				$("#next").find("img").attr("src","<?php echo $pc_style; ?>img/youjiantou1.png");
				disee=disee+290;
				if (disee>=0) {
					disee=0
					$("#prew").find("img").attr("src","<?php echo $pc_style; ?>img/zuojiantou-zhihui.png");
				}
				$("#innner").stop().animate({
					left:disee+"px"
				},1000)
			})
			
			
			
			$(function(){	
			$(".channel-l").mousemove(function(){
					$(".channel-nav-box").css("display","block");
				});
				$(".channel-l").mouseleave(function(){
					$(".channel-nav-box").css("display","none");
				})
				$('.channel-items').find(".item").mouseover(function(){
					$(".channel-nav-box").css("display","block");
					$(this).addClass('item-active');
				    var index = $(this).index();
					$('.channel-tabs .tabs').eq(index).css('display','block');	
					$('.channel-tabs .tabs').eq(index).css('top',index*54+"px");
					if(index==6){
						$('.channel-tabs').find(".tabs").eq(6).css(index*54+"px");
					}
					$('.channel-items .item img').eq(index).css('display','none')
				})	
				$('.channel-items').find(".item").mouseout(function(){
					$(".channel-nav-box").css("display","none");
					$(this).removeClass('item-active');
				    var index = $(this).index();
					$('.channel-tabs .tabs').eq(index).css('display','none');	
				    $('.channel-items .item img').eq(index).css('display','inline-block')
				})
				$('.channel-tabs .tabs').mouseover(function(){
					$(".channel-nav-box").css("display","block");
				   var index = $(this).index();
					$('.channel-items .item').eq(index).addClass('item-active');				
					$('.channel-tabs .tabs').eq(index).css('display','block');	
					$('.channel-items .item img').eq(index).css('display','none')
				})				
				$('.channel-tabs .tabs').mouseout(function(){	
					$(".channel-nav-box").css("display","none");
				    var index = $(this).index();
				    $('.channel-items .item').eq(index).removeClass('item-active');				
					$('.channel-tabs .tabs').eq(index).css('display','none');	
					$('.channel-items .item img').eq(index).css('display','inline-block')
				});		
			})
			
//		切换商家和团购	
		$(function(){
			$('.search-sel-tab').mouseover(function(){
				$('.search-sel-tab li').show();				
				$('.search-sel-tab li:eq(1)').css({borderBottom:"1px solid #ddd"})
			})
			$('.search-sel-tab').mouseout(function(){
				$('.search-sel-tab li:eq(1)').hide();
				$('.search-sel-tab li:eq(0)').css({borderBottom:"none"})
			})
			$('.search-sel-tab li').click(function(){					
				$(this).addClass('search-sel-hid').siblings().removeClass('search-sel-hid');
				if($(this)){
					$(this).after($(this).siblings());
				}
			})
		})

			
		</script>
	</body>
</html>
