<?php
use frontend\assets\LayoutsLib;
$new = new LayoutsLib();
$pc_style = $new->pc_style;
?>

	<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">
				
		<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>"><img style="float: left;" src="<?php echo $pc_style; ?>img/logo.png"/></a>
            <form action="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist']);?>" method="get">
    			<input type="text" class="kuang" name="keyworlds" placeholder="输入你想查找的商品名字" />
    			<input type="submit" class="suoSou" id="" value="搜索" />
            </form>
			<a class="shopping_cart_icon" href="<?php echo Yii::$app->urlManager->createUrl('car/car')?>">
				 <img src="<?php echo $pc_style; ?>img/gouwuche.png"/> 我的购物车（ <sapn><?php echo empty(Yii::$app->session->get('carnum')) ? "0" : Yii::$app->session->get('carnum') ;?></sapn> ）
			</a>
<!--			<div style="margin-left: 412px;" class="Text">-->
<!--				<a href="">秋冬连衣裙</a>-->
<!--				<a href=""> 耐克跑步鞋</a>-->
<!--				<a href="">婴儿抱被 </a>-->
<!--				<a href="">会员特供 </a>-->
<!--				<a href="">买一送二</a>-->
<!--			</div>-->
			
			</div>
		</div>