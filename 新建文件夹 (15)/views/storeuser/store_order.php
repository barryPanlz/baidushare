

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> 店铺订单 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
	</head>

<body>



<!--头部用户导航-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
<!--搜索商品栏-->
<div class="super_Search">
    <div class="Search" href="">
        <a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">	<img src="<?php echo $pc_style; ?>img/logo.png"/>
        <!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
			<input type="button" class="suoSou" id="" value="搜索" />
			<a class="shopping_cart_icon">
				 <img src="<?php echo $pc_style; ?>img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
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
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/index']);?>"> 三界会员 </a>
                <a  class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order']);?>"> 我的订单 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant']);?>"> 我的账房 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountsettings']);?>"> 账户设置 </a>
            </div>
            <div class="channel-r">
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
            </div>
        </div>
    </div>
</div>
<!--团购订单列表-->
<div id="bulkOrder">
    <div class="super_sum_money">
        <div class="sum_money">
            <ul class="order_Type1">
                <a> 团购订单( <span> <?php echo empty($storeOrderNum->total) ? "0" : $storeOrderNum->total; ?> </span> ) </a>
            </ul>
            <!--商城订单  消费、付款展示栏-->
            <ol class="demand_navi">
                <?php if(!empty($_GET['order_status'])) { ?>
                <li >
                    <font><a  <?php echo $_GET['order_status']== '5' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=5']);?>">全部</a></font>( <span <?php echo $_GET['order_status']== '5' ? 'class="change1"' : ""?> > <?php echo empty($storeOrderNum->total) ? "0" : $storeOrderNum->total; ?> </span> ) </li>
                <li>
                    <font><a <?php echo $_GET['order_status']== '3' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=3']);?>">待付款</a></font>( <span <?php echo $_GET['order_status']== '3' ? 'class="change1"' : ""?>> <?php echo empty($storeOrderNum->wait_pay) ? "0" : $storeOrderNum->wait_pay; ?> </span> ) </li>
                <li>
                    <font><a <?php echo $_GET['order_status']== '1' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=1']);?>">待消费</a></font>( <span <?php echo $_GET['order_status']== '1' ? 'class="change1"' : ""?> > <?php echo empty($storeOrderNum->wait_receipt) ? "0" : $storeOrderNum->wait_receipt; ?> </span> ) </li>
                <li>
                    <font><a <?php echo $_GET['order_status']== '2' ? 'class="change1"' : ""?> href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=2']);?>">已消费</a></font>( <span <?php echo $_GET['order_status']== '2' ? 'class="change1"' : ""?> > <?php echo empty($storeOrderNum->complete) ? "0" : $storeOrderNum->complete; ?> </span> ) </li>
                <?php }else{ ?>
                    <li>
                        <font><a class="change1" href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=5']);?>">全部</a></font>( <span class="change1"> <?php echo empty($storeOrderNum->total) ? "0" : $storeOrderNum->total; ?> </span> ) </li>
                    <li>
                        <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=3']);?>">待付款</a></font>( <span> <?php echo empty($storeOrderNum->wait_pay) ? "0" : $storeOrderNum->wait_pay; ?> </span> ) </li>
                    <li>
                        <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=1']);?>">待消费</a></font>( <span> <?php echo empty($storeOrderNum->wait_receipt) ? "0" : $storeOrderNum->wait_receipt; ?> </span> ) </li>
                    <li>
                        <font><a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order?order_status=2']);?>">已消费</a></font>( <span> <?php echo empty($storeOrderNum->complete) ? "0" : $storeOrderNum->complete; ?> </span> ) </li>
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
                <!--<input type="text" class="sear_box_input1" id="" placeholder="输入你想查找的商品名字" />
                <input type="button" class="sear_box_input2" id="" value="搜索" />-->
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
                <li class="order_title_li3 order_title11_li3"> 单价(人民币) </li>
                <li class="order_title_li4 order_title11_li4"> 数量 </li>
                <li class="order_title_li5 order_title11_li5"> 金额(人民币) </li>
                <li class="order_title_li6 order_title11_li6"> 消费码 </li>
                <li class="order_title11_li7"> 订单状态 </li>
            </ol>

            <div class="order_details1 order_details_11">
                <?php if(!empty($storeOrderList)){ //var_dump($storeOrderList);die;
                    foreach($storeOrderList as $value){
                        foreach($value as $value2){ ?>
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
<!--                                        --><?php //if(!empty($value->status)) {
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
//                                        } ?>
                                    </p>
                                     <?php if(!empty($value2->order_status)) {
                                        if ($value2->order_status == 1){ ?>
                                          <a class="pays">确认消费</a>
                                            <input type="hidden" id="storeid" value="<?php echo $value2->store_order_sn?>">
                                            <input type="hidden" id="currency_type" value="<?php echo $value2->currency_type==2?'2':'1';?>">
                                   <?php } }?>

<!--                                    <a href="">查看物流</a>-->
                                </div>
                            </div>
                        <?php } } } ?>
            </div>


            <!--分页栏-->
            <div class="page_warp">

                <p>
						<span>
                            <?php if($page->currentPage >1){ if(!empty($_GET['order_status'])) {  ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$page->currentPage - 1,'state'=> $_GET['order_status']])?>">上一页</a>&nbsp;&nbsp;
                            <?php }else{ ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
                            <?php } } ?>




                            <?php if(!empty($_GET['order_status'])) {
                            if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$i,'order_status'=>$_GET['order_status']])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php  } }elseif($page->currentPage >= 5) {
                                $startTag = $page->currentPage - 1;
                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$i,'order_status'=>$_GET['order_status']])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php  } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$i,'order_status'=>$_GET['order_status']])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php }} ?>

                            <?php }else{
                            if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php  } }elseif($page->currentPage >= 5) {
                                $startTag = $page->currentPage - 1;
                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php  } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php } } }?>





                            <?php if($page->currentPage < $page->totalPage){ if(!empty($_GET['order_status'])) { ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' => $page->currentPage +1 ,'order_status'=> $_GET['order_status']])?>">下一页</a>
                            <?php }else{ ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order','currentPage' => $page->currentPage +1])?>">下一页</a>
                            <?php } }?>
						</span>
						<span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页，</span>
                            <?php if($page->totalPage >1 ){
                            if(!empty($_GET['order_status'])) { ?>
                            <form action="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order']);?>" method="get" >
                                <span>跳转到</span>
                                <input class="page_input" type="text" name="currentPage" value="2"  />
                                <input type="hidden" name="order_status" value="<?php echo $_GET['order_status']?>">
                                <span>页</span>
                                <input type="submit" value="确定">
						</span>
                    </form>
                    <?php }else{ ?>
                <form action="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order']);?>" method="get" >
                    <span>跳转到</span>
                    <input class="page_input" type="text" name="currentPage" value="2"  />
                    <span>页</span>
                    <input type="submit" value="确定">
                    </span>
                </form>
                    <?php } } ?>
                </p>

            </div>

        </div>
    </div>
</div>


<div class="code_bounced" style="display: none">
    <div class="code_box">
        <h4> 确认消费 </h4>
        <div class="code_box_div">
            <span> 消费码 </span>
            <input type="text" name="" id="codes" value="" />
            <img src="<?php echo $pc_style; ?>img/tuoyuan2.png"  alt="" />
        </div>
        <p class="code_box_p" style="display: none"> <img src="<?php echo $pc_style; ?>img/hongdian.png"  alt="" /> 消费码错误 </p>
        <div class="code_box_btn">
        	<font class="code_box_btn_font1"> 确认 </font>
        	<font class="code_box_btn_font2"> 取消 </font>
        </div>
    </div>
</div>






<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/giveHigh.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.code_box_btn_font2').click(function () {
            $('.code_bounced').css('display', 'none');
        });

        $(".pays").click(function () {
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
                   }else if(data.errorCode == -102){
                       alert(data.message);
                   }else{
                       alert(data.message);
                   }
                },
                error:function(){
                    alert("服务繁忙");
                }

            });
            });

        });
    });
</script>


</body>


</html>