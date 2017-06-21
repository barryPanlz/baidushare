<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>店铺的账房</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/accountant.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/jquery.datetimepicker.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
		<style type="text/css">
			.butn333{
				width: 136px;
				height: 40px;
				line-height: 40px;
				text-align: center;
				background: #f3001d;
				color: #FFFFFF;
				border: 0;
				margin-right:17px;
				border-radius:3px;
				font-size: 18px;
			}
			.ul_right select{
				width: 180px;
			    height: 35px;
			    border: 1px solid #cccccc;
			    margin: 9px 0;
			    text-indent: 10px;
			    float: left;
			    line-height: 35px;
			}
            .per_mingxi{
                height: auto;
            }
		</style>
	</head>
	<body>
		<!--头部用户导航-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">	<img src="<?php echo $pc_style; ?>img/logo.png"/>
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
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order']);?>"> 我的订单 </a>
                        <a  class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant']);?>"> 我的账房 </a>
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



		<div class="w_wrap">
			<div class="w" style="background: #F6F6F6;">

		<!--钻石会员—个人中心-->
		   <div class="Personal_center">
		   	<div class="Personal_title">
		   		<div class="The_pictures">
		   			<div class="photo_naodai">
						<img src="<?php echo $pc_style; ?>img/touxiang1.png" alt="">
						<img class="circle_shadow" src="<?php echo $pc_style; ?>img/circle_shadow.png">
					</div>
		   		</div>
			   	<div class="the_name">
			   		<dt> <?php echo empty($details1->data->user_name) ? $details1->data->mobile_phone : $details1->data->user_name;?> </dt>
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
	   				<li class="colorF7"><?php echo empty($details1->data->future_currency) ? "0" : $details1->data->future_currency;?></li>
	   				<li><a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange']);?>">兑换</a></li>
	   			</ul>
	   			<ul>
	   				<li>
	   					<img src="<?php echo $pc_style; ?>img/daifukuan.png"/>
	   					<span>人民币（余额）</span>
	   				</li>
	   				<li class="colorF7"><?php echo empty($details1->data->money) ? "0" : $details1->data->money;?></li>
	   				<li><a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange1']);?>">兑换</a></li>
	   			</ul>
	   		</div>
	   		<div class="per_anniu">
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay']);?>">充值</a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer']);?>">转三界石</a>
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal']);?>">提现</a>
	   		</div>

		   	</div>


                <div class="per_mingxi">
                    <div class="per_mingxi_top">
                        <div class="per_mingxi_top_title">
                            <span>账单明细</span>
                        </div>
                        <div class="per_mingxi_top_right">
<!--                            <a href="">更多</a>-->
<!--                            <img src="--><?php //echo $pc_style; ?><!--img/xiaoyoujiantong.png"/>-->
                        </div>
                    </div>
                    <div class="per_mingxi_content">
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant'])?>" method="get" id="forms">
                            <ul>
                                <li class="ul_left">时间</li>
                                <li class="ul_right">
                                    <input type="text" name="star" id="star" value="<?php echo empty($_GET['star']) ? "" : $_GET['star'];?>" class="per_input fun_per_input" placeholder="选择订单创建时间" />
                                    <i>
                                        —
                                    </i>
                                    <input type="text" name="end" id="end" value="<?php echo empty($_GET['end']) ? "" : $_GET['end'];?>" class="per_input fun_per_input" placeholder="选择订单创建时间"  />
                                    <span>
								<span><a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','search_date' =>'day'])?>">今天</a>|<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','search_date' =>'week'])?>">近一周</a>|<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','search_date' =>'month'])?>">近一月</a></span>
							</span>
                                </li>
                            </ul>
                            <ul>
                                <li class="ul_left">交易类型</li>
                                <li class="ul_right">
                                    <p class="ul_right_p">
								<span>
									<span>
                                        <select name="acc_type" id="acc_type">
                                            <option value="">全部</option>
                                            <?php if(!empty($acc_type)){ foreach ($acc_type as $item){ ?>
                                                <option value="<?php echo $item->acc_type ;?>" <?php if(!empty($_GET['acc_type'])) { if($_GET['acc_type'] == $item->acc_type ) { echo "selected='selected'"; } } ?>><?php echo $item->description?></option>
                                                <!--                                            <a href="--><?php //echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','acc_type' => $item->acc_type])?><!--">--><?php //echo $item->description?><!--</a>|-->
                                            <?php } }?>
                                        </select>
									</span>
								</span>
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li class="ul_left">金额</li>
                                <li class="ul_right">
                                    
                                    <input type="tel" name="starmoney" id="starmoney" value="<?php echo empty($_GET['starmoney']) ? "" : $_GET['starmoney'];?>" class="per_input per_input_nub" placeholder="输入数字" />
                                    <i>
                                        —
                                    </i>
                                    <input type="tel" name="endmoney" id="endmoney" value="<?php echo empty($_GET['endmoney']) ? "" : $_GET['endmoney'];?>" class="per_input per_input_nub" placeholder="输入数字"  />
                                </li>
                            </ul>
                            <ul>
                                <li class="ul_left">币种</li>
                                <li class="ul_right">
                                    <select name="currency" id="currency">
                                        <option value="">全部</option>
                                        <option value="1" <?php if(!empty($_GET['currency'])) { if($_GET['currency'] == '1') { echo "selected='selected'"; } } ?>>三界石</option>
                                        <option value="2" <?php if(!empty($_GET['currency'])) { if($_GET['currency'] == '2') { echo "selected='selected'"; } } ?>>三界宝</option>
                                        <option value="3" <?php if(!empty($_GET['currency'])) { if($_GET['currency'] == '3') { echo "selected='selected'"; } } ?>>人民币</option>
                                    </select>
                                </li>
                            </ul>
                            <ul>
                                <li class="ul_left">交易内容</li>
                                <li class="ul_right">
                                    <input type="tel" name="remark1" id="remark1" value="<?php echo empty($_GET['remark1']) ? "" : $_GET['remark1'];?>" class="per_input per_input_dingdan" placeholder="输入交易内容" />
                                </li>
                            </ul>
                            <ul>
                                <li class="ul_left"></li>
                                <li class="ul_right">
                                    <p class="ul_right_p">
                                        <button id="serch">账单查询</button>
										 <button class="butn"><a href="<?php echo Yii::$app->urlManager->createUrl('storeuser/accountant')?>" >重置</a></button>
                                        
                                        <input class="butn333" type="button" value="导出账单" id="acOrder"></input>
                                    </p>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
			<div class="per_dingdan">
				<table class="tab">
                    <tr>
                        <th class="acc_tab_first" style="width: 25%;"> 时间 </th>
                        <th style="width: 25%;"> 交易类型 </th>
                        <th style="width: 25%;"> 金额 </th>
                        <th style="width: 25%;"> 交易内容 </th>
                    </tr>
                    <?php if(!empty($acclists->data->listPageAcc)){
                        foreach($acclists->data->listPageAcc as $val){//var_dump($val);
                            ?>
                            <tr>
                                <td class="acc_tab_first"><?php echo empty($val->caldate) ?  : $val->caldate?></td>
                                <td><?php echo empty($val->acc_name) ? "" : $val->acc_name ;?></td>
                                <td><?php if($val->wlbao_amnt !== '0') {
                                        echo empty($val->wlbao_amnt) ? "0" : $val->wlbao_amnt.'（三界宝）';
                                    }elseif($val->wlbi_amnt !== '0'){
                                        echo empty($val->wlbi_amnt) ? "0" : $val->wlbi_amnt . '（三界石）';
                                    }elseif($val->rmb_amnt !== '0'){
                                        echo '￥'.$val->rmb_amnt ;
                                    }

                                    ?></td>
                                <td><?php echo empty($val->remark1) ? "" : $val->remark1 ;?></td>
                                <!-- <td>/</td> -->
                            </tr>

                        <?php }}?>

                    <tr class="tab_bord"><td class="acc_tab_first"><span>合计：</span><span></span></td><td><span>三界石：</span><span><?php echo empty($acclists->data->subTotal->wlbi_amnt_total) ? "0" : $acclists->data->subTotal->wlbi_amnt_total?></span></td><td><span>人民币：</span><span><?php echo empty($acclists->data->subTotal->rmb_amnt_total) ? "0" : $acclists->data->subTotal->rmb_amnt_total?></span></td><td></td></td></tr>
		   	  	</table>


			</div>
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
                                 <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','currentPage' =>$page->currentPage - 1,empty($startTime) ? '' : 'star' => $startTime
                                     ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                     ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>">上一页</a>&nbsp;&nbsp;
                             <?php } ?>

                        <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>



                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','currentPage' =>$i,empty($startTime) ? '' : 'star' => $startTime
                                ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>

                        <?php } }elseif($page->currentPage >= 5){ {

                            $startTag = $page->currentPage - 1;

                            $endTag = $startTag + 4;
                            for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','currentPage' =>$i,empty($startTime) ? '' : 'star' => $startTime
                                    ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                    ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>


                            <?php  } } }else{
                            for($i=1;$i<= 5;$i++) { ?>
                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','currentPage' =>$i,empty($startTime) ? '' : 'star' => $startTime
                                    ,empty($endTime) ? '' : 'end' => $endTime,empty($acc_type) ? '' : 'acc_type' => $acc_type ,empty($startMoney) ? '' : 'starmoney' => $startMoney
                                    ,empty($endMoney) ? '' : 'endmoney' => $endTime ,empty($currency) ? '' : 'currency' => $currency ,empty($endTime) ? '' : 'end' => $endTime ,empty($search_date) ? '' : 'search_date' => $search_date,empty($remark1) ? '' : 'remark1' => $remark1])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }?>
                        <!--							<a>2</a>-->
                        <!--							<a>3</a>-->
                        <!--							<a>4</a>-->
                        <!--							<a>5</a>-->
                        <?php if($page->currentPage < $page->totalPage){ ?>
                            &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant','currentPage' =>$page->currentPage +1,empty($startTime) ? '' : 'star' => $startTime
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
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant']);?>" method="get" >
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

        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/jquery.datetimepicker.full.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">

            $("#serch").click(function(){
                $("#forms").submit;
            });
		
			$('.fun_per_input').datetimepicker({
		        format: "Y-m-d"
		    });
            function get_unix_time(dateStr)
            {
                var newstr = dateStr.replace(/-/g,'/');
                var date =  new Date(newstr);
                var time_str = date.getTime().toString();
                return time_str.substr(0, 10);
            }
		    $("#acOrder").click(function(){
		        <?php
                $startTime =  empty($_GET['star']) ? '' : $_GET['star'];
               $endTime =  empty($_GET['end']) ? '' : $_GET['end'];
                $acc_type = empty($_GET['acc_type']) ? '' : $_GET['acc_type'];
                $startMoney =  empty($_GET['starmoney']) ? '' : $_GET['starmoney'];
                $endMoney =  empty($_GET['endmoney']) ? '' : $_GET['endmoney'];
                //$otherno = empty($_GET['order_sn']) ? "" : $_GET['order_sn'];
                $search_date =  empty($_GET['search_date']) ? '' : $_GET['search_date'];
                $currency = empty($_GET['currency']) ? '' : $_GET['currency'];
                $remark1 = empty($_GET['remark1']) ? '' : $_GET['remark1'];
              ?>


                var search_date = "<?php echo empty($_GET['search_date']) ? '' : $_GET['search_date']?>";
               var startTime = $("#star").val();
                var endTime = $("#end").val();
                var startMoney = $('#starmoney').val();
                 var endMoney = $('#endmoney').val();
                 var acc_type = $('#acc_type').val();
                 var currency = $('#currency').val();
                var remark1 = $('#remark1').val();
                <?php if(!empty($startTime) && !empty($endTime)){ ?>
                var stime = "<?php echo $startTime ;?>";
                var etime = "<?php echo $endTime ;?>";
                var dateStr = get_unix_time(stime);
                var dateStrs = get_unix_time(etime);
                <?php }else{ ?>
                var dateStr = get_unix_time(startTime);
                var dateStrs = get_unix_time(endTime);
                <?php } ?>
                //alert(dateStr);return false;
                //alert(dateStrs);return false;
                if(dateStr !== 'NaN' && dateStrs !== 'NaN'){
                    if(dateStrs - dateStr > 7776000){
                        alert('导出账单时间大于3个月');
                        return false;
                    }else if(dateStr > dateStrs){
                       alert('参数错误');
                       return false;
                    }else{
                         //alert(1);return false;
                         <?php if(!empty($_GET['star']) && !empty($_GET['end'])){ ?>
                        //alert(0);return false;
                        location.href = "<?php echo \Yii::$app->urlManager->createUrl(['storeuser/export','star'=>$startTime,'end'=>$endTime,'starmoney'=>$startMoney,'endmoney'=>$endMoney,'currency'=>$currency,'remark1'=>$remark1,'search_date'=>$search_date,'acc_type'=>$acc_type])?>";
                        <?php }else{ ?>
                        //alert(1);return false;
                        location.href = "<?php echo \Yii::$app->urlManager->createUrl(['storeuser/export'])?>"+'?star='+ startTime + '&end='+ endTime + '&starmoney='+ startMoney +'&endmoney='+ endMoney + '&currency='+currency+'&remark1='+remark1+'&acc_type'+ acc_type;
                        <?php } ?>
                    }
                }else if(search_date !== ''){
                    //alert(0);return false;
                    location.href = "<?php echo \Yii::$app->urlManager->createUrl(['storeuser/export','star'=>$startTime,'end'=>$endTime,'starmoney'=>$startMoney,'endmoney'=>$endMoney,'currency'=>$currency,'remark1'=>$remark1,'search_date'=>$search_date,'acc_type'=>$acc_type])?>";

                }else{
                    alert("请选择时间段");
                    return false;
                }
                //alert(dateStr);




//		        $.ajax({
//                   url : "<?php //echo \Yii::$app->urlManager->createUrl(['storeuser/export'])?>//",
//                   type:"get",
//                    dataType:"json",
//                    async:false,
//                    data:{'star':startTime,'end':endTime,'starmoney':startMoney,'endmoney':endMoney,'currency':currency,'remark1':remark1,'search_date':search_date,'acc_type':acc_type},
//                    success:function (data) {
//                        alert("cheng");
//                    },
//                    error:function () {
//                        alert('cuo');
//                    }
//                });
//		    	$(".modal_order").css("display","block");
				//modal("modal_order");
		    });
		     
		     
//		     模态框显示,需完成时调用
			    var time;
				function modal(mod){
					$("."+mod).show();
					var timer = 3;
					clearInterval(time);
					var time=setInterval(function(){
						timer--
						if(timer==0){
							$('.'+mod).hide();
							clearInterval(time);
						}
					},1000);
				}
				
		</script>
	</body>
</html>
