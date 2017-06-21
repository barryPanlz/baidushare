<?php
use frontend\assets\LayoutsLib;
$new = new LayoutsLib();
$pc_style = $new->pc_style;
?>

<a href="" class="fun_huag_act" > <img src="<?php echo $pc_style; ?>img/hanbao.png"/> &nbsp;全部商品分类 </a>
<a class="color_title_fist" href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"> 首页 </a>
<!--<a href="<?php echo Yii::$app->urlManager->createUrl('life/index')?>"> 三界本地 </a>-->
<a href="<?php echo Yii::$app->urlManager->createUrl('user/diamond_index')?>"> 三界会员</a>
<!--<a href="#"> 品牌汇 </a>-->
<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>" class="end_two" style="margin-right: 0;"> 分享邀请 </a>
<a href="<?php echo Yii::$app->urlManager->createUrl('help/shopercheck')?>" class="end_two" style="margin-right: 0;"> 商家入驻</a>