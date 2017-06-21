<?php
use yii\helpers\Url;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上线公告</title
	<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/feature/reset.css"/>
	<link rel="stylesheet" href="<?php echo $pc_style; ?>css/feature/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/shopheader.css"/>
   	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
</head>
<body>
	<div class="featu_header">
		<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>"><img src="<?php echo $pc_style; ?>img/feature/zhuanti_tou.png"/></a>
	</div>
	<div class="c c1">
	</div>
	<div class="c c2">
	</div>
	<div class="c c3">
	</div>
	<div class="c c4">
	</div>
	<div class="c c5">
	</div>
	<div class="c c6">
	</div>
	<div class="c c7">
	</div>
	<div class="c c8">
	</div>
	<div class="c c9">
	</div>
	<div class="c c10">
	</div>
	<div class="c c11">
	</div>
	<div class="c c12">
	</div>
	<div class="c c13">
	</div>
	<div class="c c14">
	</div>
	<div class="c c15">
	</div>
	<div class="c c16">
	</div>
	
	<script>
	
		$(function(){
			function useval(_this){
				var u = /^[\u4e00-\u9fa5]{2,4}$/;
				if(_this.val()==''){
					$('.error1').html('用户名不能为空').show();
					return false;
				}else if(!u.test(_this.val())){
					$('.error1').html('请输入正确的名字').show();	
					return false;
				}else{
					$('.error1').hide();
					return true;
				}
			}
			$('.user').blur(function(){
				useval($(this));
			});

			function emval(_this){
				var x = /^1[3|4|5|7|8][0-9]{9}$/;
				var z = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if(_this.val()==''){
					$('.error2').html('手机号或者邮箱不能为空').show();
					return false;
				}else if(!x.test(_this.val()) && !z.test(_this.val())){
					$('.error2').html('请输入正确的手机号或者邮箱').show();	
					return false;
				}else{
					$('.error2').hide();
					return true;
				}

			}
			$('.email').blur(function(){
				emval($(this));
			});
		})
	</script>
</body>
</html>