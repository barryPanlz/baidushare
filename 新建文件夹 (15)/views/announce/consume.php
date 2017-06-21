<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>消费流程</title>
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
						<h4>消费流程</h4>
						<p class="p_13 ">
							“三界生活”的商品消费流程基本类似于其它的O2O团购平台，如果您还有不清楚的地方，请参考以下操作流程：
						</p>
						<p class="p_14">
							1、打开三界商城首页，点击导航栏的“三界本地”按钮。
						</p>
						<img class="p_mar" src="<?php echo $pc_style; ?>img/announce/xflc_1.jpg"/>
						<p class="p_14 ">
							2、在三界生活首页，上下滑动页面查看团购信息并点击团购图片进入团购详情页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_2.jpg"/>
						<p class="p_14 ">
							3、也可以点击左上角“全部分类”打开分类列表，再通过点击团购图片打开团购详情页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_3.jpg"/>
						<p class="p_14 ">
							4、还可以直接输入关键词搜索您要找的团购信息，在搜索结果页点击团购图片打开团购详情页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_4.jpg"/>
						<p class="p_14 ">
							5、在团购详情页，选择购买数量之后，直接点击“立即购买”按钮，进入提交订单页。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_5.jpg"/>
						<p class="p_14 ">
							6、如果您对某个实体店铺的商品比较感兴趣，可以在详情页标题旁点击“进店逛逛”按钮，进入店铺主页挑选商品。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_6.jpg"/>
						<p class="p_14 ">
							7、在提交订单页，确认订单中的商品信息是否有误（尤其是团购券的使用规则、有效期等信息），然后点击“提交订单”按钮。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_7.jpg"/>
						<p class="p_14 ">
							8、在结算页，选择一种第三方支付方式（其余额能一次性支付订单），点击“立即支付”按钮，之后在打开的第三方支付页面完成支付即可。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_8.jpg"/>
						<p class="p_14 ">
							9、付款成功后，您可以看到自己的团购消费码，也可以在“三界会员”-“团购订单”-“待消费”页面相应的订单中查看到消费码。
						</p>
						<img src="<?php echo $pc_style; ?>img/announce/xflc_9.jpg"/>
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
