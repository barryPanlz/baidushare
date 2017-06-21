<?php
use frontend\assets\LayoutsLib;
use Api\Curl;
$new = new LayoutsLib();
$pc_style = $new->pc_style;
$query = new \yii\db\Query();
$data['goodscat'] = $query->select("*")
    ->from('shop_goods_category cat')
    ->where("cat.parent_id = 0")
    ->all();
//var_dump($goodscat);die;
$cat_id = array_column($data['goodscat'],"cat_id");
//var_dump($cat_id);die;
foreach ( $cat_id as $v){
    $data['goodscats'] [$v]= $query->select("*")
        ->from('shop_goods_category cat')
        ->where("cat.parent_id = $v")
        ->all();
}?>

			  <ul class="Secondary" id="Secondary">

                  <?php foreach($data['goodscat'] as $v){ ?>
                      <li>
                          <a href=""><?php echo $v['cat_name']; ?></a>

                          <img src="<?php echo $pc_style; ?>img/youjiantou.png"/>
                          <!--三级菜单-->
                          <div class="wu" id="Level_3">
                              <?php if(!empty($v)){ unset($v['topic']);  foreach($data['goodscats'][$v['cat_id']] as $v2){ ?>
                                  <dt >
                                  <dl>
                                      <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','catId'=>$v2['cat_id']]);?>"> <?php  echo $v2['cat_name'];?>  </a>
                                  </dl>
                                  </dt>
                              <?php  }} ?>
                          </div>
                      </li>
                  <?php }?>



              </ul>