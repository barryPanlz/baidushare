<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>兑换流程</title>
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
						<h4>兑换流程</h4>
						<p class="p_13 ">
							“三界商城”的商品兑换流程基本类似于其它的电商平台，如果您还有不清楚的地方，请参考以下操作流程：
						</p>
						<p class="p_14">
							1、打开三界商城首页，直接翻阅首页商品，点击商品图片打开商品详情页。
						</p>
						<img class="p_mar" src="<?php echo $pc_style; ?>img/announce/change_1.jpg"/>
						<p class="p_14 ">
							2、也可以在搜索框直接输入关键词搜索商品，进而在搜索结果页点击商品图片打开商品详情页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_2.jpg"/>
						<p class="p_14 ">
							3、还可以点击左上角“商品分类”打开商品分类列表，再通过点击商品图片打开商品详情页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_3.jpg"/>
						<p class="p_14 ">
							4、在商品详情页，选择商品的规格、购买数量之后，直接点击“立即购买”按钮，进入提交订单页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_4.jpg"/>
						<p class="p_14 ">
							5、如果您有多件商品要买，可直接点击“加入购物车”按钮，之后再通过此类操作继续添加商品进入购物车，最后点击网站顶部右上角的“我的购物车”按钮进入购物车页面。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_5.jpg"/>
						<p class="p_14 ">
							6、在购物车页面，选择您要购买的商品之后，点击“结算”按钮，进入提交订单页面。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_6.jpg"/>
						<p class="p_14 ">
							7、在提交订单页面，选择收货人地址，然后确认订单中的商品信息（主要是商品规格、购买数量）是否正确，然后点击“提交订单”按钮，进入结算页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_7.jpg"/>
						<p class="p_14 ">
							8、在结算页，如果账户余额充足，则直接点击“立即支付”按钮即可购买成功；若余额不足，则点击“去充值”按钮前往充值页面，充值完成后前往“会员中心”-“商城订单”-“待付款”列表中找到此订单，继续完成付款即可。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_8.jpg"/>
						<!--<p class="p_14 ">
							9、付款成功后，平台会把订单发送给供应商，您只需等待收货就行了，如有需要，可在“会员中心”-“商城订单”-“待收货”页面查看订单的物流单号，点击“查看物流”在第三方物流网站查询您的商品物流进展。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/change_9.jpg"/>-->
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
