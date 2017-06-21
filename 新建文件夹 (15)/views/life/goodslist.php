<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>团购列表</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style;?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style;?>lifecss/live/livesearch.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style;?>lifecss/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style;?>lifecss/common/liveheader.css"/>
		<style>					
            .join{cursor:pointer;}
            .img_box{
            	width:200px;
            	/*margin:0 auto;*/
            	position:absolute;
            	margin-top:70px;
            	margin-left:-87px;
            	/*top:50%;*/
            	left:50%;
            	text-align: center;
            }
            .w_wrap{
            	min-height:600px;	
            }
            .img_box img{
  	          	width:174px;
  	          	height:174px;
            }
            .img_box .p_1{
            	font-size:24px;
            	color:#282828;
            	margin-top:60px;
            }
            .img_box .p_2{
            	margin-top:30px;
            	font-size:22px;
            	color:#848484;
            }
        	.kuang{
        		line-height: 40px;
        	}
        
		</style>
	</head>
	<body>
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/life_top.php'); ?>

		
		
		
		
		
		<div class="w_wrap">
			<div class="w" style="background: #F6F6F6;">  
				<!--面包屑--> 
				<p class="crumbs-bar">
                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/index']); ?>">首页</a></a><i>></i>
                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/index']); ?>">商品列表</a></a><i>></i>
					<!--<a href="###"><?php //echo empty($parentcateinfo['cat_name'])?'商品搜索':$parentcateinfo['cat_name']; ?></a><i>></i>
					<a href="###"><?php //echo empty($categoryinfo['cat_name'])?$_GET['keyword']:$categoryinfo['cat_name']; ?></a>-->
				
				</p> 
				<!--搜索-->
				<div class="selector">
					<!--20161118胡天培<div class="selectorLine ">
						<div class="sl-key">
							<b>品牌:</b>
						</div>
						<div class="sl-value">
							<a href="#">Apple 苹果</a>
							<a href="#">TUCANO 托卡诺</a>
							<a href="#">凯特 · 丝蓓</a>
							<a href="#">XD DESIGN</a>
							<a href="#">Fisher-Price 费雪</a>
							<a href="#">Kingston 金士顿</a>
							<a href="#">DELL 戴尔<
							<a href="#">DELL 戴尔</a>
							<a href="#">MOMAX 摩米士</a>
							<a href="#">凯特 · 丝蓓</a>
							<a href="#">XD　DESIGN</a>
							<a href="#">Fisher-Price 费雪</a>
							<a href="#">Kingston 金士顿</a>
							<a href="#">DELL 戴尔</a>
							<a href="#">MOMAX 摩米士</a>
							<a href="#">Fisher-Price 费雪</a>
							<a href="#">Kingston 金士顿</a>
						</div>
						<div class="sl-ext">
							<a href="#">更多</a>
							<i>~</i>
						</div>
					</div>
					<div class="selectorLine ">
						<div class="sl-key">
							<b>价格:</b>
						</div>
						<div class="sl-value">
							<a href="#">全部</a>
							<a href="#">0-599</a>
							<a href="#">600-999</a>
							<a href="#">1000-1499</a>
							<a href="#">1500-1999</a>
							<a href="#">2000-2999</a>
							<a href="#">3000-3999</a>
							<a href="#">4000-4999</a>
							<a href="#">5000以上</a>
						</div>
					</div>-->
                    <?php if(!empty($category)){ ?>
					<div class="selectorLine ">
						<div class="sl-key">
							<b>分类:</b>
						</div>
						<div class="sl-value">
                           
                        <?php if(!empty($category)){ foreach($category as $k=>$v){ ?>
							<a <?php if(!empty($_GET['catId'])){ if($_GET['catId']==$v['cat_id']){echo "style='color:red;'";} } ?> href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$v['cat_id']]);?>"><?php echo empty($v['cat_name'])?'':$v['cat_name']; ?></a>
                         <?php }}?>
						
						</div>
					</div>
                    <?php }?>
                    	<!--20161119胡天培
					<div class="selectorLine ">
						<div class="sl-key">
							<b>地区</b>
						</div>
						<div class="sl-value">
							<a class="join" attr_type="money" attr="all">全部</a>
							<a class="join" attr_type="money" attr="0-599">0-599</a>
							<a class="join" attr_type="money" attr="600-999">600-999</a>
							<a class="join" attr_type="money" attr="1000-1499">1000-1499</a>
							<a class="join" attr_type="money" attr="1500-1999">1500-1999</a>
							<a class="join" attr_type="money" attr="2000-2999">2000-2999</a>
							<a class="join" attr_type="money" attr="3000-3999">3000-3999</a>
							<a class="join" attr_type="money" attr="4000-4999">4000-4999</a>
							<a class="join" attr_type="money" attr="5000-9999999">5000以上</a>

						</div>
					</div>
					-->
					
				</div>
				<div class="content">
					<div class="con_sousuo">
						<a class="join" attr_type="orderBy" attr="">综合排序</a>
						<a class="join" attr_type="orderBy" attr="goodsPrice">价格</a>
					<!--	<a class="join" attr_type="orderBy" attr="goodsSales">销量</a> 
						<a href="">人气</a>-->
						<div class="con_page">
							<span><span>共</span><i><?php echo empty($count)?'0':$count; ?></i><span>商品</span></span>
							<span class="con_page_nub"><span class="con_page_page1"><?php echo empty($_GET['pn'])?'1':$_GET['pn']; ?></span><i class="page_color1">/</i><span class="page_color1"><?php echo empty($countpage)?'1':$countpage; ?></span>
							</span>
							<span class="con_page_ji">
								<a href="#"><</a>
								<a href="#" class="page_color1">></a>
							</span>
						</div>
					</div>
					<ul class="benDi" style="width: 1210px;">
                       <?php if(!empty($goodslist)){ foreach($goodslist as $k=>$v){ //var_dump($v)?>
						<li>
							<a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodsdetails','goodsId'=>$v['store_goods_id']]);?>">
						<img src="<?php echo empty($v['goods_img'])?$pc_style.'img/pic404.png':$pic_host.$v['goods_img'];?>" width="221px" height="220px"/>
								<h4> <?php echo empty($v['store_name'])?'':$v['store_name'] ?>  </h4>
								<p> <?php echo empty($v['goods_name'])?'':$v['goods_name'] ?>  </p>
								<div class="cost_look">
									<div class="cost">
										<dt> <font>&yen;</font> <?php echo empty($v['shop_price'])?'': $v['shop_price'] ?> </dt>
										<dl> 价格 <del> &yen; <?php echo empty($v['shop_price'])? '' : $v['shop_price'] ?></del> </dl>
									</div>
									<!--<div class="Look">
										<span>已售</span>
										<em>155</em>
									</div>
                                    -->
								</div>
							</a>
						</li>
                        <?php }}else {?>
                           <!--搜索商品为空的时候-->
                           <div class="img_box" style="">
                               <img src="<?php echo $pc_style; ?>img/kongkong.png" alt="" />
                               <p class="p_1">没有搜索结果</p>
                               <p class="p_2">没找到相关的宝贝</p>
                           </div>
					    <?php }?>
					</ul>
				</div>
                <?php if($countpage >= 1){ ?>
				<div class="page_warp">
					<p>
						<span>
                           <?php $catId = empty($_GET['catId'])?'':$_GET['catId'];
                           $orderBy = empty($_GET['orderBy'])?'':$_GET['orderBy'];
                           $pn = empty($_GET['pn'])?'1':$_GET['pn'];
                           $keyword = empty($_GET['keyword']) ? '' : $_GET['keyword'];
                            ?>
                            <?php if($pn>1){ ?>
							<a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$catId,'orderBy'=>$orderBy,'pn'=>$pn-1,'keyword'=>$keyword]); ?>">上一页</a>&nbsp;&nbsp;
                            <?php } ?>



                            <?php  if ($pn <= 5 && $countpage <= 5){ for($i=1;$i<= $countpage;$i++) { ?>
							<a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$catId,'orderBy'=>$orderBy,'pn'=>$i,'keyword'=>$keyword]); ?>"><?php echo $i;?></a>
                            <?php } }elseif($pn >= 5){ {
                            $startTag = $pn - 1;

                            $endTag = $startTag + 4;
                            for ($i = $startTag; $i <= $countpage && $i <= $endTag; $i++) { ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$catId,'orderBy'=>$orderBy,'pn'=>$i,'keyword'=>$keyword]); ?>"><?php echo $i;?></a>
                            <?php  } } }else{
                            for($i=1;$i<= 5;$i++) { ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$catId,'orderBy'=>$orderBy,'pn'=>$i,'keyword'=>$keyword]); ?>"><?php echo $i;?></a>
                            <?php } }?>

                            <?php if($pn<$countpage){ ?>
							&nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$catId,'orderBy'=>$orderBy,'pn'=>$pn+1,'keyword'=>$keyword]); ?>">下一页</a>
						    <?php }?>
                        </span>
						<span>
							<span>共</span>
							<i><?php echo $countpage; ?></i>
							<span>页</span>
							<!--<span>跳转到</span>
							<input class="page_input" type="tel" name="" id="" value="" />
							<span>页</span>
							<button>确定</button>
                            -->
						</span>
					</p>
				</div>
                <?php } ?>
			</div>
		</div>
		<!--footer-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
    	<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
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
//					$(this).parents(".channel-nav-box").css("display","block");
				   var index = $(this).index();		
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
		      //哈哈
		      $(".join").click(function(){
                    var val = $(this).attr("attr");
                    var url = self.location.href;
            		if(url.indexOf($(this).attr("attr_type")+"=")>0){
                        var re=eval('/(&'+$(this).attr("attr_type")+'\\=)([^\"]*)\/gi');
                        var new_url = url.replace(re,"&"+$(this).attr("attr_type")+'='+val);
                        window.location.href = new_url;
                    }else{
                        window.location.href = url+"&"+$(this).attr("attr_type")+"="+val;
                    }
                })
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
