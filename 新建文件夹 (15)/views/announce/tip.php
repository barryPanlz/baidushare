<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>商品公告（正式上线）</title>
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
					<a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>">首页</a>
					<em> > </em>
					<a class="bar_act_clor" href="###">商城公告</a>
				</p> 
				<div class="sf" style="background: #FFFFFF;">
					<div class="sf_left">
						<h4>区块链商城项目三界生活震撼上线！</h4>
						<p class="p_14">
							11月23日，采用区块链技术的O2O在线商城项目正式上线了！
						</p>
						<img class="p_mar" src="<?php echo $pc_style; ?>img/announce/online_03.jpg"/>
						<p class="p_14 ">
							三界生活采用区块链技术，把控商品从货源到运输各个环节，确保平台商品安全可溯源，平台交易信息和会员管理，直接同步到区块链上，可以说，三界生活是一个公开透明又安全性极高的O2O商城项目。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/online_07.jpg"/>
						<p class="p_14 ">
							三界生活包含三界商城和三界本地两大板块。三界生活项目负责人表示，“三界商城主要用于三界石（积分）兑换，不支持现金流通，在国内凤毛麟角；三界本地支持现金消费，会同时获得商家的三界石（积分）赠送，可在三界商城任意兑换商品。”
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/online_10.jpg"/>
						<p class="p_14 ">
							凭借区块链去中心化、公开透明、不可篡改等特性，将消费积分统一起来直接用于商品兑换，三界生活这一独辟蹊径的商业模式，为其在未来区块链竞争当中找到了颇有竞争性的立足点。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/online_13.jpg"/>
						<p class="p_14 ">
							三界生活的会员激励体系是一大亮点。三界生活设立了可持续性的会员激励体系，并将可直接兑换商品的三界石和具有极高投资价值的三界宝作为直接奖励。据了解，三界宝作为一种数字资产从发行至今已经获得近4倍的涨幅，这意味着三界生活的会员奖励会随着区块链技术的规模化应用，获得巨大的升值空间。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/online_17.jpg"/>
						<p class="p_14 ">
							近年来，区块链技术受国际金融、投资、科技等各界的热烈追捧，微软、谷歌、IBM等均有相应的区块链项目研究，市场前景巨大。三界生活项目的上线，是区块链实现具体应用的一次突破性进展，同时将为产品防伪、食品安全、数字化交易等提供新的发展思路。
						</p>
						
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
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/mutual')?>">三界生活与三界链、R8数字资产交易所</a>
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
