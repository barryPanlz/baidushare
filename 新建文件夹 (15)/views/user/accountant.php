<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的账房</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/accountant.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/jquery.datetimepicker.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>

	</head>
	<body>
			<!--头部用户导航-->
				<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<!--搜索商品栏-->
			<div class="super_Search">
			<div class="Search" href="">
                <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"><img src="<?php echo $pc_style; ?>img/logo.png"/>	</a>
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
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
						<a  class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>"> 我的账房 </a>
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

		
		
		<div class="w_wrap">
			<div class="w" style="background: #F6F6F6;">
				
		<!--创业会员—个人中心-->
		   <div class="Personal_center">
		   	<div class="Personal_title">
		   		<?php if(!empty($details1->data)){?>
		   		<div class="The_pictures">
		   			<div class="photo_naodai">
<!--						<img src="--><?php //echo $details1->data->user_img; ?><!--" alt="">-->
                        <img src="<?php echo $pc_style; ?>img/touxiang1.png" alt="" />
						<img class="circle_shadow" src="<?php echo $pc_style; ?>img/circle_shadow.png">
					</div>
		   		</div>
			   	<div class="the_name">
			   		<dt> <?php echo empty($details1->data->mobile_phone) ? "" : $details1->data->mobile_phone ; ?> </dt>
		   	  	    <dd> 
						<?php
				   	  	    		if($details1->data->user_type ==1){
				   	  	    			echo "普通会员";
				   	  	    		}elseif($details1->data->user_type ==2){
				   	  	    			echo "创业会员";
				   	  	    		}elseif($details1->data->user_type ==3){
				   	  	    			echo "店铺";
				   	  	    		}elseif($details1->data->user_type ==4){
				   	  	    			echo "供应商";
				   	  	    		}elseif($details1->data->user_type ==5){
				   	  	    			echo "代理商";
				   	  	    		}
				   	  	    	?>
		   	  	     </dd>
			   	</div>	
			</div>
	   		<div class="per_weilai">
	   			<ul>
	   				<li>
	   					<img src="<?php echo $pc_style; ?>img/daifukuan.png"/>
	   					<span>三界石（余额）</span>
	   				</li>
	   				<li class="colorF7 fun_money_nub"><?php echo $details1->data->future_currency?></li>
	   			</ul>
	   			<ul>
	   				<li>
	   					<img src="<?php echo $pc_style; ?>img/daifukuan.png"/>
	   					<span>三界宝（余额）</span>
	   				</li>
	   				<li class="colorF7 fun_money_nub"><?php echo empty($details1->data->future_treasure)? "0" : $details1->data->future_treasure;?></li>
	   			</ul>
	   		</div>
	   		<?}?>
	   		<div class="per_anniu">
	   			<a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay']);?>">充值</a>
	   			<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/transfer']);?>">转三界石</a>
				<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/transfer_sanjiebao']);?>">转三界宝</a>
	   		</div>
	   		
		   	</div>
		   	
		   	
			<div class="per_dingdan">
				<table class="tab">
		   	  		<tr> 
<!--		   	  			<th class="acc_tab_first" style="width: 20%;"> 订单号 </th> -->
		   	  			<th class="acc_tab_first" style="width: 25%;"> 时间 </th>
		   	  			<th style="width: 25%;"> 交易类型 </th>
		   	  			<th style="width: 25%;"> 金额 </th>
		   	  			<th style="width: 25%;"> 交易内容 </th>
		   	  		</tr>
		   	  		<?php if(!empty($acclists->data->listPageAcc)){
		   	  			foreach($acclists->data->listPageAcc as $val){
		   	  		 ?>
		   	  		<tr>
		   	  			<td class="acc_tab_first"><?php echo empty($val->caldate) ?  : $val->caldate?></td>
		   	  			<td><?php echo empty($val->acc_name) ? "" : $val->acc_name ;?></td>
		   	  			<td><?php if($val->wlbao_amnt != '0') {
                                echo empty($val->wlbao_amnt) ? "0" : $val->wlbao_amnt.'（三界宝）';
                              }else if($val->wlbi_amnt != '0'){
                                echo empty($val->wlbi_amnt) ? "0" : $val->wlbi_amnt . '（三界石）';
                            }else if($val->rmb_amnt != '0'){
                            	echo '￥'.$val->rmb_amnt;
                                // echo '￥'.empty($val->rmb_amnt) ? "0" : $val->rmb_amnt;
                            }

                                ?></td>
		   	  			<td><?php echo empty($val->remark1) ? "" : $val->remark1 ;?></td>
		   	  			<!-- <td>/</td> -->
		   	  		</tr>
		   	  		
		   	  		<?php }}?>
                    <tr class="tab_bord"><td class="acc_tab_first"><span>合计：</span><span></span></td><td><span>三界石：</span><span><?php echo empty($acclists->data->subTotal->wlbi_amnt_total) ? "0" : $acclists->data->subTotal->wlbi_amnt_total?></span></td><td><span>三界宝：</span><span><?php echo empty($acclists->data->subTotal->wlbao_amnt_total) ? "0" : $acclists->data->subTotal->wlbao_amnt_total?></span></td><td><span>人民币：</span><span><?php echo empty($acclists->data->subTotal->rmb_amnt_total) ? "0" : $acclists->data->subTotal->rmb_amnt_total?></span></td><td></td></td></tr>
		   	  	</table>
                <div class="page_warp">
                    <?php $startTime = empty($_GET['star']) ? "" : $_GET['star'];
                    $endTime = empty($_GET['end']) ? "" : $_GET['end'];
                    $acc_type = empty($_GET['acc_type']) ? "" : $_GET['acc_type'];
                    $startMoney = empty($_GET['starmoney']) ? "" : $_GET['starmoney'];
                    $endMoney = empty($_GET['endmoney']) ? "" : $_GET['endmoney'];
                    //$otherno = empty($_GET['order_sn']) ? "" : $_GET['order_sn'];
                    $search_date = empty($_GET['search_date']) ? "" : $_GET['search_date'];
                    $currency = empty($_GET['currency']) ? "" : $_GET['currency'];
                    $remark1 = empty($_GET['remark1']) ? "" : $_GET['remark1'];
                    ?>
						<span>
                             <?php if($page->currentPage >1){ ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant','currentPage' =>$page->currentPage - 1,empty($startTime) ? '' : 'star' => $startTime
                                    ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                    ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>">上一页</a>&nbsp;&nbsp;
                            <?php } ?>

                            <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>



                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant','currentPage' =>$i,empty($startTime) ? '' : 'star' => $startTime
                                    ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                    ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>

                            <?php } }elseif($page->currentPage >= 5){ {

                                $startTag = $page->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant','currentPage' =>$i,empty($startTime) ? '' : 'star' => $startTime
                                        ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                        ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>


                          <?php  } } }else{
                            for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant','currentPage' =>$i,empty($startTime) ? '' : 'star' => $startTime
                                    ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                    ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                           <?php } }?>
                            <!--							<a>2</a>-->
<!--							<a>3</a>-->
<!--							<a>4</a>-->
<!--							<a>5</a>-->
                            <?php if($page->currentPage < $page->totalPage){ ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant','currentPage' =>$page->currentPage +1,empty($startTime) ? '' : 'star' => $startTime
                                    ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                    ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>">下一页</a>
                            <?php }?>
						</span>
						<span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页</span>
                            <i style="color:red;"><?php echo $page->currentPage;?></i>
                            <span style="color:red;">页</span>
                            <?php if($page->totalPage >1){ ?>
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>" method="get" >
                            <span>跳转到</span>
                            <input class="page_input" type="text" name="currentPage" value="2"  />
                            <input type="hidden" name="star" value="<?php echo $startTime?>">
                            <input type="hidden" name="end" value="<?php echo $endTime?>">
                            <input type="hidden" name="acc_type" value="<?php echo $acc_type?>">
                            <input type="hidden" name="starmoney" value="<?php echo $startMoney?>">
                            <input type="hidden" name="endmoney" value="<?php echo $endMoney?>">
                            <input type="hidden" name="currency" value="<?php echo $currency?>">
                            <input type="hidden" name="search_date" value="<?php echo $search_date?>">
                             <input type="hidden" name="remark1" value="<?php echo $remark1?>">
                            <span>页</span>
                            <input type="submit" value="确定">
						</span>
                        </form>
                        <?php } ?>
                </div>
				
			</div>	
			
			</div>
		</div>

<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/jquery.datetimepicker.full.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			//超过10000显示w
			$(document).ready(function(){
				obj=$(".fun_money_nub");
				$.each(obj, function() {
					// console.log($(this).text()) 
					if($(this).text()>=100000000)  {
						objnub=$(this).text()/100000000;
						$(this).text(objnub.toFixed(4)+"E");
					} 
					 if($(this).text()>=10000){
					 	objnub=$(this).text()/10000;
					 	// console.log(objnub)
					 	$(this).text(objnub.toFixed(4)+"w");
					 }                                                     
				});
			});
		
		
			$('.fun_per_input').datetimepicker({
		        format: "Y-m-d"
		    });
		    $("#acOrder").click(function(){
//		    	$(".modal_order").css("display","block");
				modal("modal_order");
		    })
		     
		     $("#serch").click(function(){
                $("#forms").submit;
             });









//		     模态框显示,需完成时调用
			    var time;
				function modal(mod){
					$("."+mod).show();
					var timer = 3;
					clearInterval(time);
					var time=setInterval(function(){
						timer--;
						if(timer==0){
							$('.'+mod).hide();
							clearInterval(time);
						}
					},1000);
				}
				
		</script>
	</body>
</html>
