
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
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/supplier_index']);?>"> 三界会员 </a>
                <a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order']);?>"> 我的订单 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/accountant']);?>"> 我的账房 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/accountsettings']);?>"> 账户设置 </a>
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
                <a class="redness" href="<?php echo Yii::$app->urlManager->createUrl(['supplier/order'])?>"> 全部订单( <span> <?php if(!empty($total->total)){ echo $total->total;}else{echo "0";}?> </span> ) </a>
            </ul>
            <!--商城订单  消费、付款展示栏-->
            <ol class="demand_navi">
                <?php if(!empty($_GET['state'])){ ?>
                    <li > <font><a <?php echo $_GET['state']== '2' ? 'class="change1"' : "";?> href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order?state=2']);?>">待发货</a></font>( <span> <?php if(!empty($total->wait_deliver)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>

                    <li > <font><a <?php echo $_GET['state']== '3' ? 'class="change1"' : "";?> href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order?state=3']);?>">已发货</a></font>( <span> <?php if(!empty($total->wait_receipt)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>
                <?php }else{ ?>
                    <li > <font><a  href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order?state=2']);?>">待发货</a></font>( <span> <?php if(!empty($total->wait_receipt)){echo $total->wait_deliver;}else{echo "0";}?> </span> ) </li>
                    <li > <font><a  href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order?state=3']);?>">已发货</a></font>( <span> <?php if(!empty($total->wait_receipt)){echo $total->wait_receipt;}else{echo "0";}?> </span> ) </li>
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
                <form action="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order'])?>" method="get" id="form">
                					<input type="text" class="sear_box_input1" id="" name="query" placeholder="输入你想查找的商品名字/订单号" />
                					<input type="button" class="sear_box_input2" id="" value="搜索" />
                </form>
            </div>
        </div>
    </div>

    <!--商城订单列表-->
    <div class="super_list_of" >
        <div class="the_order" id="store">

            <ol class="order_title order_title_11">
                <li class="order_title_li2 order_title11_li12"> 订单内容 </li>
                <li class="order_title_li3 order_title11_li3"> 单价(三界石) </li>
                <li class="order_title_li4 order_title11_li4"> 数量 </li>
                <li class="order_title_li5 order_title11_li5"> 金额(三界石) </li>
                <li class="order_title_li6 order_title11_li6"> 收货人 </li>
                <li class="order_title11_li7"> 订单状态 </li>
            </ol>

            <div class="order_details1 order_details_11">
                <?php if($shoporderlist !== null){//var_dump($shopOrderList);die;
                    foreach($shoporderlist as $value){ ?>
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
                                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$val->goods_id,'catId'=>$val->cat_id]); ?>"><img src="http://futureshop.oss-cn-qingdao.aliyuncs.com/<?php echo empty($val->goods_img)?'':$val->goods_img; ?>"/></a>
                                            <div class="instru">
                                                <a> <?php echo  empty($val->goods_name)?'':$val->goods_name; ?> </a>
                                                <p>
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
                                                </p>

                                            </div>
                                            <div class="unitprice">
                                                <?php echo  empty($val->pay_price)?'0':$val->pay_price?>
                                            </div>
                                            <div class="shuliang shuliang_11">
                                                x
                                                <font><?php echo empty($val->goods_number) ? "0": $val->goods_number ?></font>
                                            </div>
                                        </li>
                                    <?php } } ?>
                            </ul>
                            <div class="jiage1 jiage_11" id="jiage">
                                <?php echo empty($value->total_price)? '0':$value->total_price?>
                            </div>
                            <div class="loca1 loca_11" id="loca">
                                <p> <?php echo empty($value->consignee) ? "": $value->consignee ?> </p>
                                <p> <?php echo empty($value->mobile) ? "": $value->mobile ?> </p>
                                <p> <?php if(!empty($value->province)||!empty($value->city)||!empty($value->area)){echo $value->province .$value->city. $value->area;}?> </p>
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
                                       /* if($value->order_status == 2){ */?><!--
                                            <a class="pays">确认发货</a>
                                            <input type="hidden" id="supplierid" value="<?php /*echo $value2->store_order_sn*/?>">-->
                                   <?php   } ?>
                                </p>
                            </div>
                        </div>
                    <?php } } ?>
            </div>

            <div class="code_bounced" style="display: none">
                <div class="code_box">
                    <h4> 确认发货 </h4>
                    <div class="code_box_div">
                        <span> 快递公司 </span>
                        <input type="text" name="" id="" value="" />
                    </div>
                    <div class="code_box_div">
                        <span> 快递单号 </span>
                        <input type="text" name="" id="" value="" />
                    </div>
                    <p class="code_box_p"> <img src="<?php echo $pc_style; ?>img/hongdian.png"  alt="" /> 消费码错误 </p>
                    <div class="code_box_btn">
                        <font class="code_box_btn_font1"> 确认 </font>
                        <font class="code_box_btn_font2"> 取消 </font>
                    </div>
                </div>
            </div>

            <!--分页栏-->
            <div class="page_warp">
            <?php $query = empty($_GET['query']) ? "" : $_GET['query'] ?>
                <!--<p>-->
						<span>
                            <?php if($page->currentPage >1){ if(!empty($_GET['state'])) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$page->currentPage - 1,'state'=> $_GET['state'],'query'=>$query])?>">上一页</a>&nbsp;&nbsp;
                            <?php }else{?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$page->currentPage - 1,'query'=>$query])?>">上一页</a>&nbsp;&nbsp;
                            <?php } } ?>

                            <?php if(!empty($_GET['state'])) {
                            if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$i,'state'=>$_GET['state'],'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }elseif($page->currentPage >= 5){
                                $startTag = $page->currentPage - 1;
                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$i,'state'=>$_GET['state'],'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                           <?php } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$i,'state'=>$_GET['state'],'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                         <?php   }}

                            }else{ if ($page->currentPage <= 5 && $page->totalPage <= 5 ){ for($i=1;$i<= $page->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$i,'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php }}elseif($page->currentPage >= 5){  $startTag = $page->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$i,'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                           <?php } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$i,'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                          <?php  }}
                            } ?>

                            <!--							<a>2</a>-->
<!--							<a>3</a>-->
<!--							<a>4</a>-->
<!--							<a>5</a>-->
                            <?php if($page->currentPage < $page->totalPage){  if(!empty($_GET['state'])) { ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$page->currentPage +1,'state'=> $_GET['state'],'query'=>$query])?>">下一页</a>
                            <?php }else{?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','currentPage' =>$page->currentPage +1,'query'=>$query])?>">下一页</a>
                            <?php } } ?>
						</span>
						<span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页</span>
                            <?php if($page->totalPage >1) {
                            if(!empty($_GET['state'])) { ?>
                            <form action="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order']);?>" method="get" >
                                <span>跳转到</span>
                                <input class="page_input" type="text" name="currentPage" value="2"/>
                                <input type="hidden" name="state" value="<?php echo $_GET['state']?>">
                                <input type="hidden" name="query" value="<?php echo $query ?>">
                                <span>页</span>
                                <input type="submit" value="确定">
						</span>
                </form>
                <?php } else { ?>
                    <form action="<?php echo \Yii::$app->urlManager->createUrl(['supplier/order']);?>" method="get" >
                        <span>跳转到</span>
                        <input class="page_input" type="text" name="currentPage" value="2"/>
                        <input type="hidden" name="query" value="<?php echo $query ?>">
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
        location.href = "<?php echo \Yii::$app->urlManager->createUrl(['supplier/order','type'=>'group']);?>";
        $('#bulkOrder').css('display','block');
        $('#mallOrders').css('display','none');
    })

    $('#bulk_2').click(function () {

        $('#bulkOrder').css('display','none');
        $('#mallOrders').css('display','block');
    })
    $(".sear_box_input2").click(function () {
        $("#form").submit();
    })
   /* $(".pays").click(function () {
        $('.code_bounced').css('display', 'block');
        var store_order_id = $(this).parents("#logistics").find("#storeid").val();
        var currency_type = $(this).parents("#logistics").find("#currency_type").val();


        // console.log(store_order_id);


        $(".code_box_btn_font1").click(function(){
            // alert(store_order_id);
            var check_code = $("#codes").val();
//                alert(check_code);
            $.ajax({
                url: "<?php echo \Yii::$app->urlManager->createUrl(['storeuser/true_pay']);?>",
                data: {"check_code":check_code,"store_order_id":store_order_id,'currency_type':currency_type},
                type:"post",
                dataType:"json",
                success:function(data){
                    if(data.errorCode == 0){
                        alert("消费成功");location.href="";
                    }else if(data.errorCode == -49){
                        alert("消费失败");location.href="";
                    }else{
                        alert(data.message);
                    }
                },
                error:function(){
                    alert("服务繁忙");
                }

            });
        });

    });*/
</script>


</body>


</html>