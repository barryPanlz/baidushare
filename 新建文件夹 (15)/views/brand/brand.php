<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>品牌汇</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/brand.css" />
	</head>
	<body>	
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		
		<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		
		<!--频道跳转栏-->
	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/link.php'); ?>
			<!--二级菜单-->
			<?php echo \Yii::$app->view->renderFile('@app/views/layouts/category.php'); ?>
		<!-- 列表内容部分 -->
		<div class="brand-cont">
			<div class="data-width">	
				<div class="brand-top">
					<div class="tit">
						<h2>精选品牌</h2>
					</div>
					<div class="top-box fix">
						<ul class="top-box-up">
							<li><a href=""><img src="<?php echo $pc_style; ?>img/jp1.jpg" alt=""></a></li>
							<li><a href=""><img src="<?php echo $pc_style; ?>img/jp2.jpg" alt=""></a></li>
							<li><a href=""><img src="<?php echo $pc_style; ?>img/jp3.jpg" alt=""></a></li>
							<li class="four"><a href=""><img src="<?php echo $pc_style; ?>img/jp4.jpg" alt=""></a></li>
						</ul>
						<ul class="top-box-below fix">
		                   	<li><a href=""><img src="<?php echo $pc_style; ?>img/jp1.jpg" alt=""></a></li>
		                   	<li><a href=""><img src="<?php echo $pc_style; ?>img/jp1.jpg" alt=""></a></li>	
		                   	<li><a href=""><img src="<?php echo $pc_style; ?>img/jp1.jpg" alt=""></a></li>
		                   	<li class="four"><a href=""><img src="<?php echo $pc_style; ?>img/jp1.jpg" alt=""></a></li>		
						</ul>
					</div>
				</div>

				<!-- 分类列表 -->
				<div class="brand-mid">
					<!-- 左侧竖排的导航栏 -->
					<div class="nav-box">
						<ul class="nav-lista">
							<h3>品牌汇</h3>
							<li>服装服饰</li>
							<li>生活家电</li>
							<li>手机数码</li>
							<li>食品饮料</li>
							<li>化妆护理</li>
							<li>母婴</li>
							<li>图书音像</li>
							<li>家具家居</li>
							<li>运动健身</li>
							<li>汽车用品</li>
							<a href="brand.html"><img src="<?php echo $pc_style; ?>img/shangla.png" alt="" />&nbsp;&nbsp;顶部</a>
						</ul>
					</div>
					
					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>1F 服装服饰类</h2>
						</div>
						<div class="list-box fix">
							<ul class="fl list-fl list1">
								<!-- 1 -->
								<li><a href="">爱米兰</a></li>
								<li><a href="">EFR</a></li>
								<li><a href="" class="active">品牌招募中</a></li>							
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/fz_03.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/fz_05.jpg" alt=""></a>							
							</div>
						</div>
					</div>

					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>2F 生活家电类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list2">
								<!-- 1 -->
								<li><a href="">飞科</a></li>
								<li><a href="">博瑞</a></li>
								<li><a href="">亿用</a></li>
								<li><a href="">樱花卫厨</a></li>		
								<li><a href="">酷开</a></li>
								<li><a href="">康佳</a></li>
								<li><a href="" class="active">品牌招募中</a></li>
				
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/sh_03.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sh_05.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sh_09.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sh_10.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sh_12.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sh_14.jpg" alt=""></a>                                  						
							</div>
						</div>
					</div>

					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>3F 手机数码类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list3">
								<li><a href="">华为</a></li>
								<li><a href="">中兴</a></li>
								<li><a href="">苹果</a></li>
								<li><a href="">魅族</a></li>		
								<li><a href="">小米</a></li>
								<li><a href="">联想</a></li>
								<li><a href="">PHILIPS</a></li>
								<li><a href="">金立</a></li>
								<li><a href="" class="active">品牌招募中</a></li>								
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_20.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_21.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_22.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_23.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_28.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_29.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_30.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sj_31.jpg" alt=""></a>
			
							</div>
						</div>
					</div>

                    
                    <div class="brand-mid-box fix">
						<div class="tit">
							<h2>4F 食品饮料类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list4">
								<li><a href="">东阿阿胶</a></li>
								<li><a href="">红胶堂</a></li>
								<li><a href="">三晋御品</a></li>
								<li><a href="" class="active">品牌招募中</a></li>						
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/sp_36.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sp_37.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/sp_38.jpg" alt=""></a>							
							</div>
						</div>
					</div>

					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>5F 化妆护理类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list5">					
								<li><a href="">兰蔻</a></li>
								<li><a href="">嘉业堂</a></li>
								<li><a href="">程氏古方</a></li>
								<li><a href="">天保得乐</a></li>		
								<li><a href="">梵林伽</a></li>
								<li><a href="">美肽</a></li>
								<li><a href="">CURACAO</a></li>
								<li><a href="">OLIVE</a></li>
								<li><a href="" class="active">品牌招募中</a></li>
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_42.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_43.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_44.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_45.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_50.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_51.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_52.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/hz_53.jpg" alt=""></a>
							
							</div>
						</div>
					</div>

					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>6F 母婴类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list6">
								<li><a href="">童泰贝康</a></li>
								<li><a href="">强生</a></li>
								<li><a href="">WHEAT STRAW</a></li>
								<li><a href="">BOBO</a></li>		
								<li><a href="">LOOOPOO</a></li>
								<li><a href="" class="active">品牌招募中</a></li>
					
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/my_03.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/my_58.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/my_59.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/my_60.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/my_64.jpg" alt=""></a>
							
							</div>
						</div>
					</div>

					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>7F 图书音像类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list7">
								<!-- 1 -->
								<li><a href="">常青藤</a></li>
								<li><a href="" class="active">品牌招募中</a></li>
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/ts_66.jpg" alt=""></a>
							
							
							</div>
						</div>
					</div>



					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>8F 家具家居类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list8">
								<!-- 1 -->
								<li><a href="">蓝猫</a></li>
								<li><a href="">得力</a></li>
								<li><a href="">lOOOPOOO</a></li>
								<li><a href="">素水</a></li>
								<li><a href="">素水</a></li>
								<li><a href="" class="active">品牌招募中</a></li>
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/jj_68.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/jj_69.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/jj_70.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/jj_71.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/jj_76.jpg" alt=""></a>
								
							
							</div>
						</div>
					</div>
					

					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>9F 运动健身类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list9">
								<!-- 1 -->
								<li><a href="">骆驼</a></li>
								<li><a href="">成源</a></li>
								<li><a href="">斯达赛</a></li>
								<li><a href="">M-CRO</a></li>		
								<li><a href="" class="active">品牌招募中</a></li>

							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/yd_78.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/yd_79.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/yd_80.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/yd_81.jpg" alt=""></a>
							
							</div>
						</div>
					</div>


					<div class="brand-mid-box fix">
						<div class="tit">
							<h2>10F 汽车用品类</h2>
						</div>
						<div class="list-box">
							<ul class="fl list-fl list10">
								<li><a href="">SSC</a></li>
								<li><a href="">KTM</a></li>
								<li><a href="" class="active">品牌招募中</a></li>								
							</ul>
							<div class="fr list-fr">
								<a href=""><img src="<?php echo $pc_style; ?>img/qc_03.jpg" alt=""></a>
								<a href=""><img src="<?php echo $pc_style; ?>img/qc_86.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	    
    	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
	    <script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
	    <script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/brand.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
