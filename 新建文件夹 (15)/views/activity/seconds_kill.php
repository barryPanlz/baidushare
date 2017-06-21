<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商城秒杀</title>
    <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/common/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/common/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/private/killmiao.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style ?>css/common/shopheader.css"/>

</head>
<body>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
<!--搜索商品栏-->
<div class="super_Search">
    <div class="Search" href="">
        <a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">	<img src="<?php echo $pc_style; ?>img/logo.png"/></a>
    </div>
</div>
<!--频道跳转栏-->
<div class="super_general_navi ">
    <!--一级菜单-->
    <div class="general_navi">
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/link.php'); ?>
        <!--二级菜单-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/category.php'); ?>

    </div>
</div>
<div class="w_wrap">
	<div class="w">
		<div class="miao_top">
            <?php if(!empty($pic_url)){ ?>
                <img src="<?php echo $pic_host; ?><?php echo $pic_url?>"/>
            <?php } ?>
		</div>
		<ul class="sp_warp">
            <?php if(!empty($getHotGoods)) { foreach ($getHotGoods as $value) { //var_dump($value);die;?>
			<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$value->goods_id,"catId"=>$value->cat_id,"is_promote"=>$value->is_promote]);?>"><li class="sp-item" >
			  <img src="<?php echo $pic_host . $value->goods_img?>"/>
				<div class="sp-item-content">
					<div class="sp-money">
						<span><?php echo $value->goods_price ;?></span>
						<b>三界石</b>
					</div>
					<div class="sp-name">
						<?php echo $value->goods_name?>
					</div>
					<div class="sp-bottom">
						<em class="">
							<span>已售</span>
							<b><?php echo $value->goods_sales?></b>
						</em>
					</div>
				</div>
                </li></a>
			<?php } } ?>
		</ul>
		
		
		
		
		
		
		
		
		
		
	</div>
	
</div>
<!--尾部部分-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
<script src="<?php echo $pc_style ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    var cityid = getCookie('cityid');
    function getCookie(name)
    {
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    }

</script>

</body>
</html>
