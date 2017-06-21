<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>商品搜索</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/search.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/shopheader.css"/>
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
        </style>
	</head>
	<body>
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
	
	   	<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		
		<!--频道跳转栏-->
		<div class="super_general_navi ">
			<!--一级菜单-->
			<div class="general_navi">
			 <?php echo \Yii::$app->view->renderFile('@app/views/layouts/link.php'); ?>
			<!--二级菜单-->
			  <?php echo \Yii::$app->view->renderFile('@app/views/layouts/category.php'); ?>
					
		   </div>
		</div>
		
		
		<div class="w_wrap">
			<div class="w" style="background: #F6F6F6;">
				<!--面包屑-->
				<p class="crumbs-bar">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']); ?>">首页</a><i>></i>
				
					<a class="bar_act_clor" href="###">商品列表</a> 
				</p> 
				<!--搜索-->
				<div class="selector">
					<!--<div class="selectorLine ">
						<div class="sl-key">
							<b>品牌:</b>
						</div>
						<div class="sl-value" id="slValue">

							<a href="#">Apple 苹果</a> 
							<a href="#">TUCANO 托卡诺</a>
							<a href="#">凯特 · 丝蓓</a>
							<a href="#">XD DESIGN</a>
							<a href="#">Fisher-Price 费雪</a>
                            <?php //foreach($brandList as $v){ ?>
							<a class="join" attr_type="brandId" attr="<?php //echo $v->id; ?>"><?php //echo $v->brand_detail_name; ?></a>
                            <?php //} ?>
						</div>
						<div class="sl-ext sl-ext1">
							<a href="#">更多</a>
							<i><img src="<?php echo $pc_style; ?>img/jiant_x.png"/></i>
						</div>
						<div class="sl-ext sl-ext2">
							<a href="#">收起</a>
							<i><img src="<?php echo $pc_style; ?>img/jiant_s.png"/></i>
						</div>
					</div>-->
					<?php if(empty($_GET['keyworlds'])){ ?><div class="selectorLine ">
						<div class="sl-key">
							<b>价格:</b>
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
					</div><?php } ?>
					<!--<div class="selectorLine ">
						<div class="sl-key">
							<b>尺寸:</b>
						</div>
						<div class="sl-value">
							<a href="#">全部</a>
							<a href="#">12英寸</a>
							<a href="#">13英寸</a>
							<a href="#">14英寸</a>
							<a href="#">15英寸</a>
							<a href="#">16英寸</a>
						</div>
					</div>
					<div class="selectorLine "style="border-bottom:0 ;">
						<div class="sl-key">
							<b>存储容量：</b>
						</div>
						<div class="sl-value">
							<a href="#">全部</a>
							<a href="#">8GB</a>
							<a href="#">16GB</a>
							<a href="#">32GB</a>
							<a href="#">64GB</a>
							<a href="#">128GB</a>
						</div>
					</div>-->
					
					
				</div>
				<div class="content" style="width: 1210px;">
					<div class="con_sousuo">						
					
						
						<!--<a href="">综合排序</a>-->
                        <?php $money = empty($_GET['money']) ? "" : $_GET['money'] ?>
						<?php if(empty($_GET['keyworlds'])){ ?><a class="join" attr_type="orderBy" attr="goodsSales">销量</a>
						<a class="join" attr_type="orderBy" attr="goodsPriceType">价格</a><?php } ?>
						<!--<a href="">人气</a>-->
						<div class="con_page">
                            <?php if(!empty($_GET['keyworlds']) && !empty($pageInfo->currentPage)) { ?>
                                <span><span>共</span><i><?php echo empty($pageInfo->totalResult)?'0':$pageInfo->totalResult; ?></i><span>商品</span></span>
                                <span class="con_page_nub"><span class="con_page_page1"><?php echo empty($pageInfo->currentPage)?'0':$pageInfo->currentPage; ?></span><i class="page_color1">/</i><span class="page_color1"><?php echo empty($pageInfo->totalPage)?'0':$pageInfo->totalPage; ?></span>
							</span>
                                <span class="con_page_ji">
                                <?php if($pageInfo->currentPage > 1){ ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage -1,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>"><</a>
                                <?php }  ?>
                                    <?php if($pageInfo->currentPage < $pageInfo-> totalPage){ ?>
                                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage +1,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>" class="page_color1">></a>
                                    <?php }  ?>
							</span>
                           <?php }elseif(!empty($pageInfo->currentPage)){ ?>
							<span><span>共</span><i><?php echo empty($pageInfo->totalResult)?'0':$pageInfo->totalResult; ?></i><span>商品</span></span>
							<span class="con_page_nub"><span class="con_page_page1"><?php echo empty($pageInfo->currentPage)?'0':$pageInfo->currentPage; ?></span><i class="page_color1">/</i><span class="page_color1"><?php echo empty($pageInfo->totalPage)?'0':$pageInfo->totalPage; ?></span>
							</span>
							<span class="con_page_ji">
                                <?php if($pageInfo->currentPage > 1){ ?>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage -1,'catId'=>$cat_id,'money'=>$money])?>"><</a>
                                <?php }  ?>
                                <?php if($pageInfo->currentPage < $pageInfo-> totalPage){ ?>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage +1,'catId'=>$cat_id,'money'=>$money])?>" class="page_color1">></a>
                                <?php }  ?>
							</span>
                            <?php } ?>
						</div>
					</div>
					
					

					<ul class="sp_warp" style="">
					<?php if(!empty($goodslist)) {
						foreach ($goodslist as $key => $value) {
						# code...
					?>

						<li class="sp-item" >
						<?php if($value->is_promote == '2'){ ?>
							<a href='<?php echo \Yii::$app->urlManager->createUrl(['goods/newdetails','goodsId' =>$value->goods_id,'catId'=>$value->cat_id]);?>'> 
						<?php	}else{ ?>
								<a href='<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$value->goods_id,'catId'=>$value->cat_id]);?>'> 
						<?php	}?>
                        <img src="<?php echo empty($value->goods_img)?"":$pic_host.$value->goods_img; ?>" width="220px" height="220px"/></a>
							<div class="sp-item-content">
								<div class="sp-money">
									
									<span><?php echo empty($value->goods_price)?"":$value->goods_price;?></span>
									<?php if($value->is_promote == '2'){ ?>
											<b>人民币</b>
									<?php	}else{ ?>
											<b>三界石</b>
									<?php		}?>
									
									
								</div>
								<div class="sp-name">
									<?php echo empty($value->goods_name)?"":$value->goods_name;?>
                                    
								</div>
								<div class="sp-bottom">
									<em class="">
										<span>已售</span>
										<b><?php echo empty($value->goods_sales)?"0":$value->goods_sales;?></b>
									</em>
								<!--<img src="<?php echo $pc_style; ?>img/shopping-cart.png"/>-->
								</div>
							</div>
						</li>
					<?php }}else{ ?>
                        <!--搜索商品为空的时候-->
                        <div class="img_box" style="">
                            <img src="<?php echo $pc_style; ?>img/kongkong.png" alt="" />
                            <p class="p_1">没有搜索结果</p>
                            <p class="p_2">没找到相关的宝贝</p>
                        </div>
					<?php }?>
					</ul>
				</div>
				<div class="page_warp">
                    <span>
                    <?php if(!empty($_GET['keyworlds']) && !empty($pageInfo->currentPage)) { ?>



                                <?php if($pageInfo->currentPage > 1){ ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage -1,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>">上一页</a> &nbsp;&nbsp;
                                <?php }  ?>
                    <?php  if ($pageInfo->currentPage <= 5 && $pageInfo->totalPage <= 5){ for($i=1;$i<= $pageInfo->totalPage;$i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $i,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>"<?php if($pageInfo->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                    <?php } }elseif($pageInfo->currentPage >= 5){ {
                    $startTag = $pageInfo->currentPage - 1;

                    $endTag = $startTag + 4;
                    for ($i = $startTag; $i <= $pageInfo->totalPage && $i <= $endTag; $i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $i,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>"<?php if($pageInfo->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                    <?php  } } }else{
                    for($i=1;$i<= 5;$i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $i,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>"<?php if($pageInfo->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                    <?php } }?>
<?php if($pageInfo->currentPage < $pageInfo->totalPage){ ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage +1,'keyworlds'=>$_GET['keyworlds'],'money'=>$money])?>">下一页</a> &nbsp;&nbsp;
                        <?php }?>
                                        <span>
						<span>共</span>
						<i><?php echo $pageInfo->totalPage;?></i>
						<span>页</span>
                            <?php if($pageInfo->totalPage >1){ ?>
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist']);?>" method="get" >
                            <span>跳转到</span>
                            <input class="page_input" type="text" name="page" value="2"  />
                            <span>页</span>
                            <input  type="hidden" name="keyworlds" value="<?php echo $_GET['keyworlds']?>"  />
                            <input  type="hidden" name="money" value="<?php echo $money ?>"  />
                            <input type="submit" value="确定">
						</span>
                        </form>
                        <?php } ?>



                    <?php }elseif(!empty($pageInfo->currentPage)){ ?>
                        <?php if($pageInfo->currentPage > 1){ ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage -1,'catId'=>$cat_id,'money'=>$money])?>">上一页</a> &nbsp;&nbsp;
                        <?php }  ?>
                    <?php  if ($pageInfo->currentPage <= 5 && $pageInfo->totalPage <= 5){ for($i=1;$i<= $pageInfo->totalPage;$i++) { ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $i,'catId'=>$cat_id,'money'=>$money])?>"<?php if($pageInfo->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                        <?php } }elseif($pageInfo->currentPage >= 5){ {
                            $startTag = $pageInfo->currentPage - 1;

                            $endTag = $startTag + 4;
                            for ($i = $startTag; $i <= $pageInfo->totalPage && $i <= $endTag; $i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $i,'catId'=>$cat_id,'money'=>$money])?>"<?php if($pageInfo->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php  } } }else{
                            for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $i,'catId'=>$cat_id,'money'=>$money])?>"<?php if($pageInfo->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }?>


                        <?php if($pageInfo->currentPage < $pageInfo->totalPage){ ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','page'=> $pageInfo->currentPage +1,'catId'=>$cat_id,'money'=>$money])?>">下一页</a> &nbsp;&nbsp;
                        <?php }?>
                        <span>
						<span>共</span>
						<i><?php echo $pageInfo->totalPage;?></i>
						<span>页</span>
                             <span style="color:red;">当前是第</span>
                            <i style="color:red;"><?php echo $pageInfo->currentPage;?></i>
                            <span style="color:red;">页</span>
                            <?php if($pageInfo->totalPage >1){ ?>
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist']);?>" method="get" >
                            <span>跳转到</span>
                            <input class="page_input" type="text" name="page" value="2"  />
                            <span>页</span>
                            <input  type="hidden" name="catId" value="<?php echo $cat_id ?>"  />
                            <input  type="hidden" name="money" value="<?php echo $money ?>"  />
                            <input type="submit" value="确定">
						</span>
                        </form>
                        <?php } ?>
                        <?php } ?>


                    </span>


				</div>

			</div>
		</div>
			<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
			<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript"> 
				
				
			$(".sl-ext1").click(function(){
				$(".sl-ext1").css("display","none");
				$(".sl-ext2").css("display","block");
				$("#slValue").removeClass("sl-value");
				$("#slValue").addClass("sl-value1");
			});
			$(".sl-ext2").click(function(){
				$(".sl-ext2").css("display","none");
				$(".sl-ext1").css("display","block");
				$("#slValue").removeClass("sl-value1");
				$("#slValue").addClass("sl-value");
			})
            $(function() {
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
            })
            
            
            //=========================
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
				
            
			</script>
			
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"left","bdTop":"99.5"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			
	</body>
</html>
