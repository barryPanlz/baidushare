<?php
use Api\Curl;
use frontend\assets\LayoutsLib;
use frontend\models\UniversalDb;
$new = new LayoutsLib();
$pc_style = $new->pc_style;
//$category = (new UniversalDb('db'))->setTableName('store_goods_category')->getFind('grade=0');
//if(!empty($category)){
//    foreach($stat as $k=>$v){
//        $category[$k]['son'] = (new UniversalDb('db'))->setTableName('store_goods_category')->getFind('parent_id='.$v['cat_id']);
//    }
//}
$query = new \yii\db\Query();
$category = $query->select("*")
->from('store_goods_category')
->where('parent_id = 0')
->all();
//var_dump($category);die;
$cat_ids = array_column($category,"cat_id");

foreach ($cat_ids as $v){
    $categorys["$v"] = $query->select("*")
        ->from('store_goods_category')
        ->where("parent_id = $v")
        ->all();
}
//var_dump($categorys);die;
?>
		<div class="super_Search fix">
			<div class="Search">
            <a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
				<img src="<?php echo $pc_style;?>img/life_index/lifelogo.png" /> </a>
				<div class="live live-text-tit"><!--<span></span>--></div>
				<form action="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist']);?>" id="search" class="search-in" method="get">
					<div class="search-sel">
						<ul class="search-sel-tab">
							<span class="tri"></span>
							<li>团购</li>
							<li class="search-sel-hid">商家</li>
						</ul>
					</div>
					<input type="text" name="keyword" class="kuang" id="" placeholder="输入你想查找的商品名字" />
					<input type="button" class="suoSou" id="" onclick="submit()" value="搜索" />
				</form>
				 <div class="Text">
				<!--20161121	<a href="">秋冬连衣裙</a>
					<a href="">耐克跑步鞋</a>
					<a href="">婴儿抱被 </a>
					<a href="">会员特供 </a>
					<a href="">买一送二</a>-->
				</div>
                
			</div>
		</div>
        <!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width data-channel-box">
				<div class="channel-box  fix">
					<a class="channel-l" href="###">
						<img src="<?php echo $pc_style;?>img/hanbao.png" alt="" />
						<span>全部店铺分类</span>
					</a>
					<div class="channel-c">
						<a class="now_tab_green" href="<?php echo \Yii::$app->urlManager->createUrl(['life/index']);?>">首页</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">三界商城</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>">三界会员</a>
						<!--<a href="#">品牌汇</a>-->
					</div>
					<div class="channel-r">
						<a href="<?php echo Yii::$app->urlManager->createUrl('help/shopercheck')?>">商家入驻</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
				<!--二级菜单栏-->
                <div class="channel-nav-box">
                    <div class="channel-items fix">
                        <?php if(!empty($category)){ foreach($category as $v){ //var_dump($v); ?>
                            <div class="item">
                                <h3 class="item-l">
                                    <a href="#"><?php echo empty($v['cat_name'])?'':$v['cat_name']; ?></a>
                                </h3>
                                <div class="item-r">
                                    <img src="<?php echo $pc_style;?>img/xiaosanj.png" alt="" />
                                </div>

                                <div class="channel-tabs fix">
                                    <div class="tabs">
                                        <ul>
                                            <?php foreach ($categorys[$v['cat_id']] as $item) { //var_dump($item['cat_id'])?>
                                            <li>
                       							<a href="">
                                                <!--<img src="<?php echo $pc_style;?>img/life_index/kcfw.jpg" alt="" />-->
                                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodslist','catId'=>$item['cat_id']]);?>" ><?php echo $item['cat_name']?></a>
                                                </a>
                                            </li>
                                            <?php }?>
                                        </ul>

                                    </div>

                                </div>

                            </div>
                        <?php }}?>
						<div class="item">
						 <h3 class="item-l">
                                <a href="#">商家联盟</a>
                         </h3>	
  						 <div class="item-r">
                                    <!--<img src="<?php echo $pc_style;?>img/xiaosanj.png" alt="" />-->
                            </div>
                         </div>  
                    </div>
                </div>
			</div>
		</div>
<script>
 function submit(){
   $("#search").submit();
 }
</script>		
