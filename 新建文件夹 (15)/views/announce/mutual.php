<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>商品公告(r8)</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/announce/shouaffiche.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/shopheader.css"/>
		<style type="text/css">
			.super_Search, .crumbs-bar, .super_userNavi{
				background: #f6f6f6;
			}
		</style>
	</head>
	<body>
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		
		<!--首页总的导航-->
		<div class="super_general_navi " style="background: #F6F6F6;">
			<!--一级菜单-->
			<div class="general_navi">
			  <a href="" class="fun_huag_act"> <img src="<?php echo $pc_style; ?>img/hanbao.png"/> &nbsp; 全部商品分类 </a>
			  <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>" class="now_tab_red"> 首页 </a> 
			  <!--<a href="<?php echo Yii::$app->urlManager->createUrl('life/index')?>"> 三界本地 </a>-->
			  <a href="<?php echo Yii::$app->urlManager->createUrl('user/diamond_index')?>"> 三界会员 </a>
			 <!-- <a href="#"> 品牌汇 </a> -->
			  <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>" class="end_two" style="margin-right: 0;"> 分享邀请 </a>
			  <a href="<?php echo Yii::$app->urlManager->createUrl('help/shopercheck')?>" class="end_two" style="margin-right: 0;"> 商家入驻</a>
			<!--二级菜单-->
			  <ul class="Secondary" id="Secondary">
		 <?php foreach($goodscat as $v){ ?>
			  	<li> 
                  <a href=""><?php echo $v['cat_name']; ?></a>
				    
					<img src="<?php echo $pc_style; ?>img/youjiantou.png"/>
					<!--三级菜单-->
					<div class="wu" id="Level_3">
                      <?php if(!empty($v)){ unset($v['topic']);  foreach($goodscats[$v['cat_id']] as $v2){ ?>
						<dt >
							<dl>
							<a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/goodslist','catId'=>$v2['cat_id']]);?>"> <?php  echo $v2['cat_name'];?>  </a>
							</dl>
						</dt>
                        <?php  }} ?>
					</div>
			  	</li>
             <?php }?>
			  </ul>
			</div>
		</div>
		
				
		<div class="w_wrap">
			<div class="w" style="background: #F6F6F6;">
				<!--面包屑-->
				<p class="crumbs-bar">
					<a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>">首页</a><em>></em>
					<a class="bar_act_clor" href="###">商城公告</a>
				</p> 
				<div class="sf" style="background: #ffffff;">
					<div class="sf_left">
						<h4>三界生活与三界链、盈泰网</h4>
						<p class="p_13 ">
							三界链
						</p>
						<p class="p_14">
							三界链是以区块链技术为底层的全球化、开放式区块链生态系统。系统当中有许多基于区块链的项目。
						</p>
						<img class="p_mar" src="<?php echo $pc_style; ?>img/announce/R8_03.jpg"/>
						<p class="p_13 ">
							三界生活
						</p>
						<p class="p_14 ">
							三界链生态系统项目之一。集购物、出行、酒店等为一体的综合行生活服务平台。在平台上消费或参与活动获得的三界石（积分）、三界宝（数字资产）可直接在商城兑换商品或到R8数字资产交易所进行交易。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/R8_07.jpg"/>
						<p class="p_13 ">
							盈泰网
						</p>
						<p class="p_14 ">
							以区块链技术为底层架构的独立第三方数字资产交易所。在三界生活获得的三界宝可在该交易所进行交易。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/R8_10.jpg"/>
					</div>
					<div class="sf_right">
						<ul>
							<li>
								<h3>最新公告</h3>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/tip')?>">区块链商城项目三界生活震撼上线！</a>
								<span>2016-11-23  10:17:56</span>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/mutual')?>">三界生活与三界链、盈泰网</a>
								<span>2016-11-23  10:17:56</span>
							</li>

						</ul>
					</div>
				</div>
				
				
				
			</div>
		</div>
		<!--尾部部分-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
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
	</body>
</html>
