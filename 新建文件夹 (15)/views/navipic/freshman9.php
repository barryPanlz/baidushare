<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>新手上路</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/xinshou.css"/>
		
	</head>
	<body>
		<div class="w_wrap">
			<div class="w">
				<img src="<?php echo $pc_style; ?>img/freshman/10xinshou.jpg" usemap="#Map"/>
                <map name="Map">
                  <area shape="rect" coords="774,681,988,735" href="<?php echo \Yii::$app->urlManager->createUrl(['navipic/freshman','page'=>$navi_page]);?>">
                  <area shape="circle" coords="1089,672,13" href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>">
                </map>
			</div>
		</div>
	</body>
</html>
