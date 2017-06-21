
<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> 商城 订单 </title>
    <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
     <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/wuliu.css"/>
</head>

<body>



<!--头部用户导航-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
<!--搜索商品栏-->
<div class="super_Search">
    <div class="Search" href="">
        <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"><img src="<?php echo $pc_style; ?>img/logo.png"/></a>
        <!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
        <input type="button" class="suoSou" id="" value="搜索" />
        <a class="shopping_cart_icon">
             <img src="../../img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
        </a>
        <div class="Text">
            <a href="">秋冬连衣裙</a>
            <a href="">耐克跑步鞋</a>
            <a href="">婴儿抱被</a>
            <a href="">会员特供</a>
            <a href="">买一送二</a>
        </div>				-->
    </div>
</div>
<!--频道跳转栏-->
<div class="local-channel fix">
    <div class="data-width">
        <div class="channel-box .fix">
            <a class="channel-l ta_center" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
                <span>返回商城首页</span>
            </a>
            <div class="channel-c channel-d">
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>"> 三界会员 </a>
                <a class="now_tab_red"  href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>"> 我的账房 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend']);?>"> 我的推荐 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings']);?>"> 账户设置 </a>
            </div>
            <div class="channel-r">
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
            </div>
        </div>
    </div>
</div>




<!--消费、付款展示栏-->
<!--商城订单列表-->
<div id="mallOrders" <?php echo (empty($type))?"":"style='display:none'"; ?>>
    <div class="super_sum_money">
        <div class="sum_money">
            <ul class="order_Type1">
                <a class="redness" href="<?php echo Yii::$app->urlManager->createUrl(['user/order'])?>"> 商城订单( <span> <?php if(!empty($total->total)){ echo $total->total;}else{echo "0";}?> </span> ) </a>
                <a  class="order_Type1_lastA" id="bulk_1"> 团购订单( <span> <?php if(!empty($storeOrderNum->total)){ echo $storeOrderNum->total;}else{echo "0";}?> </span> ) </a>
            </ul>
            <!--商城订单  消费、付款展示栏-->
            <ol class="demand_navi">
                <?php if(!empty($_GET['state'])){ ?>
                    <li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=0']);?>">全部</a></font>( <span> <?php echo empty($total->total) ? "0" : $total->total?> </span> ) </li>

                    <li> <font><a  <?php echo $_GET['state']== '1' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=1']);?>">待付款</a></font>( <span <?php echo $_GET['state']== '1' ? 'class="change1"' : ""?>> <?php if(!empty($total->wait_pay)){echo $total->wait_pay;}else{echo "0";}?> </span> ) </li>
                    <li > <font><a <?php echo $_GET['state']== '2' ? 'class="change1"' : "";?> href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=2']);?>">待收货</a></font>( <span <?php echo $_GET['state']== '2' ? 'class="change1"' : "";?>> <?php if(!empty($total->wait_receipt)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>
                    <li> <font><a <?php echo $_GET['state']== '3' ? 'class="change1"' : "";?> href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=3']);?>">已完成</a></font>( <span <?php echo $_GET['state']== '3' ? 'class="change1"' : "";?>> <?php if(!empty($total->complete)){echo $total->complete;}else{echo "0";}?> </span> ) </li>
                <?php }else{ ?>
                    <li> <font><a class="change1" href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=0']);?>">全部</a></font>( <span class="change1"> <?php echo empty($total->total) ? "0" : $total->total?> </span> ) </li>

                    <li> <font><a  href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=1']);?>">待付款</a></font>( <span> <?php if(!empty($total->wait_pay)){echo $total->wait_pay;}else{echo "0";}?> </span> ) </li>
                    <li > <font><a  href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=2']);?>">待收货</a></font>( <span> <?php if(!empty($total->wait_receipt)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>
                    <li> <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?state=3']);?>">已完成</a></font>( <span> <?php if(!empty($total->complete)){echo $total->complete;}else{echo "0";}?> </span> ) </li>
                <?php }?>
            </ol>
            <!--团购订单  消费、付款展示栏
             <ol class="demand_navi1">
                 <li class="change1"> <font>全部</font>( <span> 8 </span> ) </li>
                 <li> <font>待付款</font>( <span> 3 </span> ) </li>
                 <li> <font>待消费</font>( <span> 3 </span> ) </li>
                 <li> <font>已消费</font>( <span> 8 </span> ) </li>
             </ol>-->

            <div class="sear_box">
                <!--					<input type="text" class="sear_box_input1" id="" placeholder="输入你想查找的商品名字" />-->
                <!--					<input type="button" class="sear_box_input2" id="" value="搜索" />-->
            </div>
        </div>
    </div>

    <!--商城订单列表-->
    <div class="super_list_of" >
        <div class="the_order" id="store">

            <ol class="order_title order_title_11">
               <!-- <li class="inquire1 order_title_DDD">
                    &nbsp;
                    <font class="changeContent"> 近三个月订单 </font> <span class="triangle_down" id="triangle_down"></span>
                    <dt class="liuYue">近六个月订单 </dt>
                    <dt class="yinian"> 近一年订单 </dt>
                </li>-->
                <li class="order_title_li2 order_title11_li12"> 订单内容 </li>
                <li class="order_title_li3 order_title11_li3"> 单价 </li>
                <li class="order_title_li4 order_title11_li4"> 数量 </li>
                <li class="order_title_li5 order_title11_li5"> 金额 </li>
                <li class="order_title_li6 order_title11_li6"> 收货人 </li>
                <li class="order_title11_li7"> 订单状态 </li>
            </ol>
            <?php if($shoporderlist !== null){//var_dump($shopOrderList);die;
            foreach($shoporderlist as $value){ ?>
            <div class="order_details1 order_details_11">

                        <div class="number_time">
                            <strong> <?php echo empty($value->add_time) ? "" : $value->add_time?> </strong> 订单号：
                            <font class="number_time_font1"><?php echo empty($value->order_no) ? "" : $value->order_no;?></font> <!--快递单号：
						<font>39388732822</font>-->
                        </div>
                        <div class="box_list">

                            <ul class="specific specific2 specific_11">
                                <?php if(!empty($value->shopGoodsList)) {

                                    foreach($value->shopGoodsList as $val){ ?>
                                        <li>
                                        <?php if($value->pay_name == '三界石'){ ?>
                                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$val->goods_id,'catId'=>$val->cat_id]); ?>"><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($val->goods_img)?'':$val->goods_img; ?>"/></a>
                                        <?php }else{?>
                                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/newdetails','goodsId'=>'666666','catId'=>'38']); ?>"><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($val->goods_img)?'':$val->goods_img; ?>"/></a>
                                        <?php }?>
                                            
                                            <div class="instru">
                                                <a> <?php echo  empty($val->goods_name)?'':$val->goods_name; ?> </a>
                       <p class="p_logistics">
                            <?php if(!empty($val->state)) {
                                if ($val->state == 1){
                                    echo "未支付";
                                }elseif($val->state == 2){
                                    echo "未发货";
                                }elseif($val->state ==3){
                                    echo "已发货";
                                }elseif($val->state ==4){
                                    echo "已确认收货";
                                }elseif($val->state == 5){
                                    echo "已取消";
                                }elseif($val->state == 6){
                                    echo "已完成";
                                }
                            }?>
                           <?php if(!empty($val->state)){
                                if($val->state == 3){
                                    echo "<a class='logisticss' target='_blank' style='color: #f5001d'>物流状态</a>";
                               }
                            }?>
                        </p>
                                                <input type="hidden" value="<?php echo empty($val->logistics_no) ? "" :  $val->logistics_no ;?>" name="logistics_no"/>
                                                <input type="hidden" value="<?php echo empty($val->logistics_code) ? "" :  $val->logistics_code ;?>" name="logistics_code"/>
                                                <input type="hidden" value="<?php echo empty($val->logistics_name) ? "" :  $val->logistics_name ;?>" name="logistics_name"/>
<!--                                                --><?php //if(!empty($val->state ==3)) {
//
//                                                    echo '<a href="'. \Yii::$app->urlManager->createUrl(['user/true','order_sn' =>$value->order_no,'goods_id'=>$val->goods_id]).'">确认收货</a>';
//
//                                                } ?>
                                            </div>
                                            <div class="unitprice">
                                                <?php if($value->pay_name == '三界石'){ ?>
                                                    <?php echo  empty($val->pay_price)?'0':$val->pay_price?>三界石
                                                <?php }else{?>
                                                    ￥<?php echo  empty($val->pay_price)?'0':$val->pay_price?>
                                                <?php }?>
                                                
                                            </div>
                                            <div class="shuliang shuliang_11">
                                                x
                                                <font><?php echo empty($val->goods_number) ? "0": $val->goods_number ?></font>
                                            </div>
                                        </li>
                                    <?php } } ?>
                            </ul>
                            <div class="jiage1 jiage_11" id="jiage">
                            <?php if($value->pay_name == '三界石'){ ?>
                                <?php echo empty($value->total_price)? '0':$value->total_price?>三界石
                            <?php }else{?>
                                ￥<?php echo empty($value->total_price)? '0':$value->total_price?>
                            <?php }?>
                                
                            </div>
                            <div class="loca1 loca_11" id="loca">
                                <p> <?php echo empty($value->consignee) ? "": $value->consignee ?> </p>
                                <p> <?php echo empty($value->mobile) ? "": $value->mobile ?> </p>
                                <p> <?php if(!empty($value->province)||!empty($value->city)||!empty($value->area)){echo $value->province .$value->city;}?> </p>
                                <p><?php echo empty($value->address) ? "": $value->address ?></p>
                            </div>
                            <div class="logistics1 logistics_11" id="logistics">
                                <p>
                                    <?php if(!empty($value->order_status)) {
                                        if ($value->order_status == 1){
                                            echo "未支付";
                                        }elseif($value->order_status == 2){
                                            echo "已支付";
                                        }elseif($value->order_status ==3){
                                            echo "订单完成";
                                        }elseif($value->order_status ==4){
                                            echo "订单已取消";
                                        }
                                    } ?>
                                </p>
                                <?php if($value->pay_name == '三界石'){ ?>
                                    <?php if(!empty($value->order_status)) {
                                    if ($value->order_status == 1 ){
                                        echo '<a href="'. \Yii::$app->urlManager->createUrl(['order/pay_order','order_sn' =>$value->order_no,'money'=>$value->total_price,'isPromote'=>'1']).'">立即支付</a>'.'<a class="outs" data-1="1" >取消订单</a>';

                                     }   } ?>
                                <?php }else{ ?>
                                    <?php if(!empty($value->order_status)) {
                                    if ($value->order_status == 1 ){
                                        echo '<a href="'. \Yii::$app->urlManager->createUrl(['order/pay_order','order_sn' =>$value->order_no,'money'=>$value->total_price,'isPromote'=>'2']).'">立即支付</a>'.'<a class="outs" data-1="1" >取消订单</a>';

                                     }   } ?>
                                <?php  }?>
                                

                            </div>
                        </div>

            </div>
            <?php } } ?>


            <!--分页栏-->
            <div class="page_warp">

                <!--<p>-->
						<span>
                            <?php if($page->currentPage >1){ if(!empty($_GET['state'])) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$page->currentPage - 1,'state'=> $_GET['state']])?>">上一页</a>&nbsp;&nbsp;
                            <?php }else{?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
                            <?php } } ?>

                            <?php if(!empty($_GET['state'])) {
                            if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$i,'state'=>$_GET['state']])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }elseif($page->currentPage >= 5){
                                $startTag = $page->currentPage - 1;
                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$i,'state'=>$_GET['state']])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                           <?php } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$i,'state'=>$_GET['state']])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                         <?php   }}

                            }else{ if ($page->currentPage <= 5 && $page->totalPage <= 5 ){ for($i=1;$i<= $page->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php }}elseif($page->currentPage >= 5){  $startTag = $page->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                           <?php } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                          <?php  }}
                            } ?>

                            <!--							<a>2</a>-->
<!--							<a>3</a>-->
<!--							<a>4</a>-->
<!--							<a>5</a>-->
                            <?php if($page->currentPage < $page->totalPage){  if(!empty($_GET['state'])) { ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$page->currentPage +1,'state'=> $_GET['state']])?>">下一页</a>
                            <?php }else{?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage' =>$page->currentPage +1])?>">下一页</a>
                            <?php } } ?>
						</span>
						<span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页</span>
                            <?php if($page->totalPage >1) {
                            if(!empty($_GET['state'])) { ?>
                            <form action="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>" method="get" >
                                <span>跳转到</span>
                                <input class="page_input" type="text" name="currentPage" value="2"/>
                                <input type="hidden" name="state" value="<?php echo $_GET['state']?>">
                                <span>页</span>
                                <input type="submit" value="确定">
						</span>
                </form>
                <?php } else { ?>
                    <form action="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>" method="get" >
                        <span>跳转到</span>
                        <input class="page_input" type="text" name="currentPage" value="2"/>
                        <span>页</span>
                        <input type="submit" value="确定">
                        </span>
                    </form>
                <?php } }?>

                <!--</p>-->

            </div>

        </div>
    </div>
</div>



<!--团购订单列表-->
<div id="bulkOrder" <?php echo (!empty($type)&&$type=='group')?"style='display:none'":""; ?>>
    <div class="super_sum_money">
        <div class="sum_money">
            <ul class="order_Type1">
                <a id="bulk_2"  href="<?php echo Yii::$app->urlManager->createUrl(['user/order'])?>"> 商城订单( <span> <?php if(!empty($total->total)){ echo $total->total;}else{echo "0";}?> </span> ) </a>
                <a class="order_Type1_lastA redness"> 团购订单( <span> <?php echo empty($storeOrderNum->total) ? "0" : $storeOrderNum->total; ?> </span> ) </a>
            </ul>
            <!--商城订单  消费、付款展示栏-->
            <ol class="demand_navi">
                <?php if(!empty($_GET['order_status'])){ ?>
                    <li>
                        <font><a  href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=5&type=2']);?>">全部</a></font>( <span> <?php echo empty($storeOrderNum->total) ? "0" : $storeOrderNum->total; ?> </span> ) </li>
                    <li>
                        <font><a <?php echo $_GET['order_status']== '6' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=6&type=2']);?>">待付款</a></font>( <span <?php echo $_GET['order_status']== '6' ? 'class="change1"' : ""?>> <?php echo empty($storeOrderNum->wait_pay) ? "0" : $storeOrderNum->wait_pay; ?> </span> ) </li>
                    <li>
                        <font><a <?php echo $_GET['order_status']== '1' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=1&type=2']);?>">待消费</a></font>( <span <?php echo $_GET['order_status']== '1' ? 'class="change1"' : ""?>> <?php echo empty($storeOrderNum->wait_receipt) ? "0" : $storeOrderNum->wait_receipt; ?> </span> ) </li>
                    <li>
                        <font><a <?php echo $_GET['order_status']== '2' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=2&type=2']);?>">已消费</a></font>( <span <?php echo $_GET['order_status']== '2' ? 'class="change1"' : ""?>> <?php echo empty($storeOrderNum->complete) ? "0" : $storeOrderNum->complete; ?> </span> ) </li>
                <?php }else{?>
                    <li class="change1">
                        <font><a class="change1" href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=5&type=2']);?>">全部</a></font>( <span> <?php echo empty($storeOrderNum->total) ? "0" : $storeOrderNum->total; ?> </span> ) </li>
                    <li>
                        <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=6&type=2']);?>">待付款</a></font>( <span> <?php echo empty($storeOrderNum->wait_pay) ? "0" : $storeOrderNum->wait_pay; ?> </span> ) </li>
                    <li>
                        <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=1&type=2']);?>">待消费</a></font>( <span> <?php echo empty($storeOrderNum->wait_receipt) ? "0" : $storeOrderNum->wait_receipt; ?> </span> ) </li>
                    <li>
                        <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order?order_status=2&type=2']);?>">已消费</a></font>( <span> <?php echo empty($storeOrderNum->complete) ? "0" : $storeOrderNum->complete; ?> </span> ) </li>
                <?php }?>
            </ol>
            <!--团购订单  消费、付款展示栏
             <ol class="demand_navi1">
                 <li class="change1"> <font>全部</font>( <span> 8 </span> ) </li>
                 <li> <font>待付款</font>( <span> 3 </span> ) </li>
                 <li> <font>待消费</font>( <span> 3 </span> ) </li>
                 <li> <font>已消费</font>( <span> 8 </span> ) </li>
             </ol>-->

            <div class="sear_box">
                <!--					<input type="text" class="sear_box_input1" id="" placeholder="输入你想查找的商品名字" />-->
                <!--					<input type="button" class="sear_box_input2" id="" value="搜索" />-->
            </div>
        </div>
    </div>

    <!--商城订单列表-->
    <div class="super_list_of">
        <div class="the_order" id="store">

            <ol class="order_title order_title_11">
                <li class="inquire1 order_title_DDD">
                    <!--&nbsp;
                    <font class="changeContent"> 近三个月订单 </font> <span class="triangle_down" id="triangle_down"></span>
                    <dt class="liuYue">近六个月订单 </dt>
                    <dt class="yinian"> 近一年订单 </dt>-->
                </li>
                <li class="order_title_li2 order_title11_li2"> 订单内容 </li>
                <li class="order_title_li3 order_title11_li3"> 单价 </li>
                <li class="order_title_li4 order_title11_li4"> 数量 </li>
                <li class="order_title_li5 order_title11_li5"> 金额 </li>
                <li class="order_title_li6 order_title11_li6"> 消费码 </li>
                <li class="order_title11_li7"> 订单状态 </li>
            </ol>


            <?php if(!empty($storeOrderList)){//var_dump($storeOrderList);die;
            foreach($storeOrderList as $value){
            foreach($value as $value2){ //var_dump($storeOrderList);?>
            <div class="order_details1 order_details_11">

                            <div class="number_time">
                                <strong> <?php echo  $value2->add_time;?></strong> 订单号：
                                <font class="number_time_font1"><?php echo empty($value2->store_order_sn) ? "" : $value2->store_order_sn;?></font>
                            </div>
                            <div class="box_list">

                                <ul class="specific specific2 specific_11">
                                    <li>
                                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['life/goodsdetails','goodsId'=>$value2->store_goods_id]); ?>"><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($value2->goods_img) ? "" : $value2->goods_img;?>" /></a>
                                        <div class="instru">
                                            <a> <?php echo empty($value2->goods_name) ? "" : $value2->goods_name;?> </a>
                                            <!--									<p> &nbsp;颜色：<span>白色</span>&nbsp; &nbsp; &nbsp; 尺码：<span>38</span> </p>-->
                                        </div>
                                        <div class="unitprice">
                                            <?php echo empty($value2->order_amount) ? "" : $value2->order_amount;?>
                                        </div>
                                        <div class="shuliang shuliang_11">
                                            x
                                            <font><?php echo empty($value2->goods_num) ? : $value2->goods_num ?></font>
                                        </div>
                                    </li>

                                </ul>
                                <div class="jiage1 jiage_11" id="jiage">
                            <?php if($value2->is_hot == 1) { ?>
                                <?php echo empty($value2->order_amount) ? "0" : $value2->order_amount?>(三界石)
                                <?php }else{ ?>
                                <?php echo empty($value2->order_amount) ? "0" : $value2->order_amount?>
                                <?php }?>
                                </div>
                                <div class="loca1 loca_11" id="loca">
                                    <?php foreach($value2->order_code_list as $codes){ ?>
                                        <?php if($codes->state == 1){ ?>
                                            <p><del > <?php echo empty($codes->check_code) ? "": $codes->check_code?></del></p>

                                        <?php }else{ ?>
                                            <p><?php echo empty($codes->check_code) ? "": $codes->check_code?></p>
                                        <?php     }} ?>
                                </div>
                                <div class="logistics1 logistics_11" id="logistics">
                                    <p>
                                        <!--                                --><?php //if(empty($value2->order_status)) {
                                        if ($value2->order_status == 0){
                                            echo "待付款";
                                        }elseif($value2->order_status == 1){
                                            echo "待消费";
                                        }elseif($value2->order_status ==2){
                                            echo "已消费";
                                        }elseif($value2->order_status ==3){
                                            echo "无效";
                                        }elseif($value2->order_status ==4){
                                            echo "退货";
                                        }
                                        //                                } ?>
                                    </p>
                                    <!--                            --><?php //if(!empty($value2->order_status)) {
                                    if ($value2->order_status == 0){
                                        if($value2->is_hot == 1){
                                            echo '<a href="' . \Yii::$app->urlManager->createUrl(['life/pay_orders', 'order_sn' => $value2->store_order_sn]) . '">立即支付</a>'.'<a  class="outs" data-1="2" >取消订单</a>';
                                        }else {
                                            echo '<a href="' . \Yii::$app->urlManager->createUrl(['life/pay_order', 'order_sn' => $value2->store_order_sn]) . '">立即支付</a>'.'<a  class="outs" data-1="2" >取消订单</a>';
                                        }
                                    }
                                    //                            } ?>
                                </div>
                            </div>

            </div>
            <?php } } } ?>

            <!--分页栏-->
            <div class="page_warp">

                <!--<p class="page_warp_pp">-->
						<span>
                            <?php if($page1->currentPage >1){ if(!empty($_GET['order_status'])) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$page1->currentPage - 1,'state'=> $_GET['order_status'],'type'=>'2'])?>">上一页</a>&nbsp;&nbsp;
                            <?php }else{?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$page1->currentPage - 1,'type'=>'2'])?>">上一页</a>&nbsp;&nbsp;
                            <?php } } ?>



                            <?php if(!empty($_GET['order_status'])) {
                            if ($page1->currentPage <= 5 && $page1->totalPage <= 5){ for($i=1;$i<= $page1->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$i,'order_status'=>$_GET['order_status'],'type'=>'2'])?>" <?php if($page1->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php  } }elseif($page1->currentPage >= 5) {
                                $startTag = $page1->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page1->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$i,'order_status'=>$_GET['order_status'],'type'=>'2'])?>" <?php if($page1->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                               <?php  } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$i,'order_status'=>$_GET['order_status'],'type'=>'2'])?>" <?php if($page1->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                               <?php }} ?>


                          <?php  }else{ if ($page1->currentPage <= 5 && $page1->totalPage <= 5){ for($i=1;$i<= $page1->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$i,'type'=>'2'])?>" <?php if($page1->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php }}elseif($page1->currentPage >= 5){
                                $startTag = $page1->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page1->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$i,'type'=>'2'])?>" <?php if($page1->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                           <?php }  }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$i,'type'=>'2'])?>" <?php if($page1->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                               <?php } } }?>




                            <?php if($page1->currentPage < $page1->totalPage){  if(!empty($_GET['order_status'])) { ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$page1->currentPage +1,'order_status'=> $_GET['order_status'],'type'=>'2'])?>">下一页</a>
                            <?php }else{?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order','currentPage1' =>$page1->currentPage +1,'type'=>'2'])?>">下一页</a>
                            <?php } } ?>
						</span>
						<span>
						<span>共</span>
						<i><?php echo $page1->totalPage;?></i>
						<span>页</span>
                            <?php if($page1->totalPage >1) {
                            if(!empty($_GET['order_status'])) { ?>
                            <form action="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>" method="get" >
                                <span>跳转到</span>
                                <input class="page_input" type="text" name="currentPage1" value="2"/>
                                <input type="hidden" name="order_status" value="<?php echo $_GET['order_status']?>">
                                <input type="hidden" name="type" value="2">
                                <span>页</span>
                                <input type="submit" value="确定" id="tijiao">
						</span>
                </form>
                <?php } else { ?>
                    <form action="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>" method="get" >
                        <span>跳转到</span>
                        <input class="page_input" type="text" name="currentPage1" value="2"/>
                        <input type="hidden" name="type" value="2">
                        <span>页</span>
                        <input type="submit" value="确定" id="tijiao">
                        </span>
                    </form>
                <?php } }?>
                <!--</p>-->

            </div>

        </div>
    </div>
</div>


<!--物流单弹框-->
<div class="backdrop" style="display: none"></div>
<div class="logistics_box" style="display: none">
	<h3> 查看物流 </h3>
	<ul class="logistics_property">
	  <li>	<span> 物流公司：   </span> <em id="names"> 顺丰快递 </em>  </li>
	  <li>	<span> 快递单号：   </span> <em id="no"> 201701031518 </em> </li>
	  <li>	<span> 订单状态： </span> <i id="states"> 配送中 / 已签收 </i> </li>
	</ul>
	<div class="logistics_details">
	   <dl>
	   	<dt> 2016-01-03 </dt>
	   	<dd> <font> 16:12:45 </font> <strong> 已签收  </strong> </dd>
	   	<dd> <font> 14:12:45 </font> <em> 运单已由配送员姜强送出，联第电话：18611118888单已由配送员姜强送 </em> </dd>
	   </dl>
	</div>
	
	<div class="shut_down ">
		关闭
	</div>
	
</div>






<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/giveHigh.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    <?php if(!empty($_GET['type'])){ ?>
    $('#mallOrders').css('display','none');
    $('#bulkOrder').css('display','block');
    <?php }else{ ?>
    $('#bulkOrder').css('display','none');
    $('#mallOrders').css('display','block');

    <?php }?>
    $('#bulk_1').click(function () {
        location.href = "<?php echo \Yii::$app->urlManager->createUrl(['user/order','type'=>'group']);?>";
        $('#bulkOrder').css('display','block');
        $('#mallOrders').css('display','none');
    })

    $('#bulk_2').click(function () {

        $('#bulkOrder').css('display','none');
        $('#mallOrders').css('display','block');
    })
    //取消订单
    $(".outs").click(function () {
        var num = $(this).parents(".order_details1").find(".number_time_font1").text();
        if($(this).attr('data-1') == 1){
            var type = "shop";

        }else if($(this).attr('data-1') == 2){
            var type = "store";

        }
        $.ajax({
            url:"<?php echo \Yii::$app->urlManager->createUrl(['user/cancel'])?>",
            data:{type:type,order_sn:num},
            type:"post",
            dataType:"json",
            success:function (data) {
                if(data.errorCode ==0){
                    alert("成功");
                    history.go();
                }else if(data.errorCode == -34){
                    alert("取消订单失败");
                    history.go();
                }

            },
            error:function (data) {
                alert("失败") ;
                history.go();
            }

        });
    });

    //查看物流
    $(".logisticss").click(function () {
        var no = $(this).parents('.instru').find('input:[name="logistics_no"]').val();
        var code = $(this).parents('.instru').find('input:[name="logistics_code"]').val();
        var name = $(this).parents('.instru').find('input:[name="logistics_name"]').val();
        var sta = '0';
        $.ajax({
            url:"<?php echo \Yii::$app->urlManager->createUrl(['order/logistics'])?>",
            type:"post",
            dataType:"json",
            async: false,
            data:{com:code,num:no},
            success:function (data) {
               if(data.errno == 2000 && data.data.data){
                   var htmls = '';
                    console.log(data.data.data);
                   $.each(data.data.data, function(i,val){
                      htmls += '<dl>';
                      htmls += '<dt>' + val.ftime + '</dt>';
                          htmls += ' <dd> <font>' + val.time + '</font> <em>'+  val.context + '</em> </dd>';
                        htmls += ' </dl>';

                   });
                  // console.log(htmls);
                  if(data.data.state == '0'){
                      var states = '在途中';
                   }else if(data.data.state == '1'){
                      var states = '已揽收';
                  }else if(data.data.state == '2'){
                      var states = '疑难';
                  }else if(data.data.state == '3'){
                      var states = '已签收';
                  }else if(data.data.state == '4'){
                      var states = '退签';
                  }else if(data.data.state == '5'){
                      var states = '同城派送中';
                  }else if(data.data.state == '6'){
                      var states = '退回';
                  }else if(data.data.state == '7'){
                      var states = '转单等';
                  }
                   $('#states').html(states);
                   $('.logistics_details').html(htmls);
                    sta = '1';
               }else{
                   alert(data.data.message);
               }
            },
            error:function () {
                alert('cuo')
            }
        });
        if(sta == '1'){
            $('#names').html(name);
            $('#no').html(no);
            $('.backdrop').css('display','block');
            $('.logistics_box').css('display','block');
        }


    })
    
//  透明色的高度
    $('.backdrop').height( $('body').height() );   
    $('.shut_down').click(function(){
    	$('.backdrop').css('display','none');
    	$('.logistics_box').css('display','none');
    });
</script>


</body>


</html>