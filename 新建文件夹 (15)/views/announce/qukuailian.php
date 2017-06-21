<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>区块链</title>
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
					<a class="bar_act_clor" href="###">知识堂</a>
				</p> 
				<div class="sf" style="background: #FFFFFF;">
					<div class="sf_left">
						<h4>什么是区块链</h4>
						
						<p class="p_14">
							区块链（BlockChain），是以比特币数字加密货币为核心技术和基础架构，通过P2P通信网络，基于数学加密算法，以去中心化自治的方式集体维护一个开放的、不可篡改的、不断增长的电子账本。
						</p>
						<p class="p_14 ">
							简单的说，区块链是一个许多节点参与的分布式数据库系统。如果我们把数据库假设成一本账本，读写数据库就可以看做一种记账的行为，区块链技术的原理就是在一段时间内找出记账最快最好的人，由这个人来记账，然后将账本的这一页信息发给整个系统里的其他所有人。这也就相当于改变数据库所有的记录，发给全网的其他每个节点，所以区块链技术也称为分布式账本（distributed ledger）。
						</p>
						<p class="p_13 p_mar1">
							区块链的特点
						</p>
						<p class="p_14 ">
							去中心化、开放性、自治性、信息不可篡改、匿名性
						</p>
						<p class="p_13 p_mar1">
							三界生活的区块链应用
						</p>
						<p class="p_14 ">
							三界生活采用区块链技术，把控商品从货源到运输各个环节，平台交易信息和会员管理，直接同步到区块链上，可以说，三界生活是一个公开透明又安全性极高的O2O商城项目。三界生活作为激励发给用户的三界宝，是三界链系统的内生数字资产，融入了区块链技术，总量有限，公开透明可查询，具有极高的投资价值。
						</p>
						<p class="p_14 ">
							三界链是全球化开放式的区块链项目生态系统，有诸多知名的区块链项目入住，三界生活是三界链平台备案的知名项目之一。三界链系统支持项目之间相互协作，部分资源可共享，后期将为三界生活带来巨大的集群优势和流量红利。
						</p>
						<p class="p_14 p_mar2">
							更多知识参见：区块链入门，这一篇就够了！
						</p>
						<p class="p_14 ">
							<a href="http://mp.weixin.qq.com/s/ONit3mtrHPY_21UoJp_M_w" target="_blank">http://mp.weixin.qq.com/s/ONit3mtrHPY_21UoJp_M_w</a>
						</p>
					</div>
					<div class="sf_right">
						<ul>
							<li>
								<h3>知识堂</h3>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/qukuailian')?>">什么是区块链</a>
								<span>2016-11-23  10:17:56</span>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/exchange')?>">兑换流程</a>
								<span>2016-11-23  10:17:56</span>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/consume')?>">消费流程</a>
								<span>2016-11-23  10:17:56</span>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/sanjiebao')?>">三界宝</a>
								<span>2016-11-23  10:17:56</span>
							</li>
							<li>
								<a href="<?php echo Yii::$app->urlManager->createUrl('announce/sanjieshi')?>">三界石</a>
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
