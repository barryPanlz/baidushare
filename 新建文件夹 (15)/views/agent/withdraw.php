<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>提现</title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/withdraw.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
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


                        <div class="local-channel fix">
                            <div class="data-width">
                                <div class="channel-box .fix">
                                    <a class="channel-l ta_center" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
                                        <span>返回商城首页</span>
                                    </a>
                                    <div class="channel-c channel-d">
                                        <a  href="<?php echo \Yii::$app->urlManager->createUrl(['agent/index']);?>"> 三界会员 </a>
                                        <a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant']);?>"> 我的账房 </a>
                                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings']);?>"> 账户设置 </a>
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
			<div class="w" style="background:#f6f6f6">
				<div class="wi_chongzhi">
					<div class="per_mingxi_top">
						<div class="per_mingxi_top_title">
							<span>提现</span>
						</div>
						<!--<div class="per_mingxi_top_right">
							<a href="">更多</a>
							<img src="<?php echo $pc_style; ?>img/xiaoyoujiantong.png"/>
						</div>-->
					</div>
					<div class="per_mingxi_content">
						<ul>
							<li class="wi_li_left">账户余额：</li>
							<li class="wi_li_right"><span>￥<?php echo empty($details1->data->money) ? "0" : $details1->data->money ;?></span></li>
						</ul>
						<ul>
							<li class="wi_li_left">我的身份：</li>
							<li class="wi_li_right">
                                <?if(!empty($details1->data->user_type)){
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
                                }?>
                            </li>
						</ul>
                        <ul>
                            <li class="wi_li_left">提现额度：</li>
                            <li class="wi_li_right"><span>￥<?php echo $details1->data->lowlimit ;?>-￥<?php echo $details1->data->uplimit ;?>/次</span></li>
                        </ul>
					</div>
                    <div class="wi_tixian per_mingxi_content">
                        <ul>
                            <li class="wi_li_left">提现金额</li>
                            <li class="wi_li_right"><input type="text" name="numbers" class="wi_input_left" placeholder="请输入数字"  id="numbers" value="" /></li>
                        </ul>
                        <ul style="margin-top:20px ;">
                            <li class="wi_li_left_big">提现到账号</li>
                            <li class="wi_li_right_big">
                                <div class="">
                                    <p>
                                        <select name="revorgname" class="wi_input_left" id="names">
                                            <option value="">请选择账号</option>
                                            <?php if(!empty($details2->withdrawalAcclist)){
                                                foreach($details2->withdrawalAcclist as $re){ ?>
                                                    <option value="<?php echo $re->pay_type ;?>"><?php echo $re->acc_name?></option>
                                                <?php } } ?>
                                        </select>
                                    </p>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings','state'=> '1'])?>">设置提现账号</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                   <!-- <div class="modal_order">
                        恭喜，转账成功
                    </div>
                    <div class="modal_order1">
                        抱歉，转账失败
                    </div>-->
					
					<div class="wi_tijiao">
						<button id="submit">确认提交</button>
					</div>
					<div class="wi_liucheng">
						<p>提现流程：用户发起——>填写提现账号信息——>平台审核——>平台打款——>资金到账。</p>
						<p>到账时间：1-2个工作日，遇周末、节假日则自动顺延。</p>
						<p>客服咨询：400-0680-1628</p>
					</div>
				</div>

                <div class="per_dingdan">
                    <table class="tab">
                        <tr>
                            <th class="acc_tab_first" style="width: 20%;"> 流水号 </th>
                            <th style="width: 20%;"> 时间 </th>
                            <th style="width: 15%;"> 提现金额（元） </th>
                            <th style="width: 15%;"> 提现方式 </th>
                            <th style="width: 10%;"> 状态 </th>
                        </tr>
                        <?php if(!empty($list->withDrawalList)){

                            foreach($list->withDrawalList as $val){
                                ?>
                                <tr>
                                    <td class="acc_tab_first"><?php echo empty($val->pay_no) ? "0" : $val->pay_no ;?></td>
                                    <td><?php echo empty($val->txdate) ?  : $val->txdate ;?></td>
                                    <td><?php echo empty($val->txamnt) ? "" : $val->txamnt ;?></td>
                                    <td><?php echo empty($val->status) ? "0" : $val->pay_type ;?></td>
                                    <td><?php echo empty($val->status) ? "0" : $val->status ;?></td>
                                </tr>
                            <?php } }?>
                    </table>


                </div>

                <div class="page_warp">


						<span>
                             <?php if($page->currentPage >1){ ?>
                                 <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
                             <?php } ?>

                            <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>


                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }elseif($page->currentPage >= 5){ {

                                $startTag = $page->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php  } } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php } }?>


                            <?php if($page->currentPage < $page->totalPage ){ ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal','currentPage' =>$page->currentPage +1])?>">下一页</a>
                            <?php } ?>
						</span>
                    <span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页，</span>
                        <?php if($page->totalPage >1 ){ ?>
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal']);?>" method="get" >
								<span>跳转到</span>
								<input class="page_input" type="text" name="currentPage" value="2"  />
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
				<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
                <script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
                <script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
				<script>

                    <?php if(empty($details2->withdrawalAcclist)){ ?>
                    alert("请先保存提现账户");
                    //location.href = "<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings','state'=> '1']);?>";
                    <?php  }?>
                    $("#submit").click(function(){
                        var numbers = $("#numbers").val();
                        var paytype = $('#names').val();
                        if(paytype == '1'){
                            <?php if(!empty($details2->withdrawalAcc->alipay_account)) { ?>
                            var revbankaccno = "<?php echo $details2->withdrawalAcc->alipay_account;?>";

                        <?php } ?>
                            //   var name = $("#name1").val();
                        }else if(paytype == '3'){
                            <?php if(!empty($details2->withdrawalAcc->bank_account)) { ?>
                            var revbankaccno = "<?php echo $details2->withdrawalAcc->bank_account;?>";
                            <?php } ?>
                            var revorgname = "<?php echo empty($details2->withdrawalAcc->bank_name) ? '' : $details2->withdrawalAcc->bank_name ;?>";
                        }else if(paytype == '2'){
                            <?php if(!empty($details2->withdrawalAcc->wechat_account)) { ?>
                            var revbankaccno = "<?php echo $details2->withdrawalAcc->wechat_account;?>";
                            <?php } ?>
                        }
                        $.ajax({
                            url:"<?php echo \Yii::$app->urlManager->createUrl(['agent/withdrawal']);?>",
                            type:"post",
                            dataType:"json",
                            data:{"numbers":numbers,"revbankaccno":revbankaccno,"paytype":paytype,"revorgname":revorgname},
                            success:function(data){
                                if(data.errorCode == 0){
                                    alert(data.message);
                                    setTimeout(" location.href='<?php echo \Yii::$app->urlManager->createUrl(['storeuser/withdrawal'])?>'",2000);
                                }else if(data.errorCode == -2){
                                    alert("登录超时，请重新登录");
                                    setTimeout("location.href='<?php echo \Yii::$app->urlManager->createUrl(['login/login'])?>'",2000);
                                }else if(data.errorCode == -34){
                                    alert(data.message);
                                }else if(data.errorCode == -41){
                                    alert(data.message);
                                }else if(data.errorCode == -43){
                                    alert(data.message);
                                }else if(data.errorCode == -44){
                                    alert(data.message);
                                }else if(data.errorCode == -15){
                                    alert(data.message);
                                }else if(data.errorCode == -50){
                                    alert(data.message);
                                }else if(data.errorCode == -100){
                                    alert(data.message);
                                }
                            },
                            error:function(){
                                alert("转账失败，请稍后重试");

                            }

                        });
                    });
                    //模态框显示,需完成时调用
//                    var time;
//                    function modal(mod){
//                        $("."+mod).show();
//                        var timer = 3;
//                        clearInterval(time);
//                        var time=setInterval(function(){
//                            timer--
//                            if(timer==0){
//                                $('.'+mod).hide();
//                                clearInterval(time);
//                            }
//                        },1000);
//                    }
                </script>
				
	</body>
</html>

