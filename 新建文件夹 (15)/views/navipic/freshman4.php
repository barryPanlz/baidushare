<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>新手上路</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/xinshou.css"/>
		
	</head>
	<body>
		<div class="w_wrap">
			<div class="w">
				<img src="<?php echo $pc_style; ?>img/freshman/05xinshou.jpg" usemap="#Map"/>
                <map name="Map">
                  <area shape="rect" coords="627,1003,841,1061" href="<?php echo \Yii::$app->urlManager->createUrl(['navipic/freshman','page'=>$navi_page]);?>">
                  <area shape="circle" coords="942,994,13" href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>">
                </map>
			</div>
		</div>
		<script type="text/javascript">
			window.onload=function(){
			document.body.scrollTop=400;
			}
		</script>
	</body>
</html>
