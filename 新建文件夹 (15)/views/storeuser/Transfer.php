<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>转账</title>
		  <link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/centerPay.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/accountant.css"/>
	</head>
	<body>
		<!--遮罩充值的的-->
<!--		<div class="pay-mark">-->
<!--			<div class="pay-mbox">-->
<!--				<h3 class="tit">-->
<!--					提示-->
<!--				</h3>-->
<!--				<p>请在第三方支付页面完成操作...</p>-->
<!--				<div class="pay-btn-box">-->
<!--					   <a class="yes">我已完成支付</a>-->
<!--				       <a class="no">取消</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		-->
		
		<!--头部用户导航-->
	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		
		<!--频道跳转栏-->
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
		<div class="pay-cont">
			<div class="data-width">
				<div class="pay-box">
					<h3 class="tit">转账三界石</h3>
					<div class="pay-txt-info">
						<ul>

							<li>账户余额：<span class="num"><?php echo empty($details1->data->future_currency) ? "0" : $details1->data->future_currency?></span><span class="b">三界石</span></li>
							<li>我的身份：<span class="jewel"><?if(!empty($details1->data->user_type)){
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
                                    }?></span></li>

							<li>转账金额：<span class="ratio">10000</span><span class="suffix">三界石/次</span></li>
						</ul>
					</div>
					
					<div class="pay-topUp">
						<label for="" class="r-text">转账金额</label>
						<input type="text" id="money" placeholder="请输入数字" />
						<span>三界石</span>
					</div>
					<div class="pay-topUp">
						<label for="" class="r-text">对方账号</label>
						<input type="text" id="revbankaccno" placeholder="请输入账号" />
					</div>

					  
					<div class="pay-btn">
						<button id="acOrder">确认转账</button>
					</div>
				</div>				
			</div>
		</div>
        <div class="per_dingdan">
            <table class="tab">
                <tr>
                    <!--		   	  			<th class="acc_tab_first" style="width: 20%;"> 订单号 </th> -->
                    <th class="acc_tab_first" style="width: 25%;"> 流水号 </th>
                    <th style="width: 25%;"> 时间 </th>
                    <th style="width: 25%;"> 转账数额（三界石） </th>
                    <!--		   	  			<th style="width: 10%;"> 三界宝 </th> -->
                    <th style="width: 25%;"> 转入账户 </th>
                    <!-- <th style="width: 10%;"> 详情 </th> -->
                </tr>
                <?php if(!empty($list->data->list)){
                    foreach($list->data->list as $val){
                        ?>
                        <tr>
                            <td class="acc_tab_first"><?php echo empty($val->otherno) ?  : $val->otherno?></td>
                            <td><?php echo empty($val->caldate) ? "" : $val->caldate ;?></td>
                            <td><?php echo empty($val->wlbi_amnt) ? "" : $val->wlbi_amnt ;?></td>
                            <td><?php echo empty($val->account) ? "" : $val->account ;?></td>
                            <!-- <td>/</td> -->
                        </tr>

                    <?php }}?>

            </table>


        </div>
        <div class="w_wrap" style="background: #FFFFFF;">
        	<div class="w" style="background: #FFFFFF;">
        		<div class="page_warp">
            <span>
                             <?php if($page->currentPage >1){ ?>
                                 <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
                             <?php } ?>

                <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>



                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>

                <?php } }elseif($page->currentPage >= 5){ {

                    $startTag = $page->currentPage - 1;

                    $endTag = $startTag + 4;
                    for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>


                    <?php  } } }else{
                    for($i=1;$i<= 5;$i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                    <?php } }?>
                <!--							<a>2</a>-->
                <!--							<a>3</a>-->
                <!--							<a>4</a>-->
                <!--							<a>5</a>-->
                <?php if($page->currentPage < $page->totalPage){ ?>
                    &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer','currentPage' =>$page->currentPage +1])?>">下一页</a>
                <?php }?>
						</span>
            <span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页</span>
                            <i style="color:red;"><?php echo $page->currentPage;?></i>
                            <span style="color:red;">页</span>
                <?php if($page->totalPage >1){ ?>
                <form action="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer']);?>" method="get" >
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
		<div class="modal_order">
			转账成功
		</div>
		<div class="modal_order1">
			转账失败
		</div>
		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
			<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
	
		<script>
			$(function(){
				$('.pay-select li input').click(function(){														
				    $('.pay-select li').children("div").removeClass('abcdf');
					$(this).next("div").addClass('abcdf');
				})
//				$('.pay-btn-box').click(function(){
//					$('.pay-mark').hide();
//				})
			})	
			
			
		    $("#acOrder").click(function(){
//		    	$(".modal_order").css("display","block");
   				 $("#acOrder").attr("disabled","disabled");
                var money = $("#money").val();
                var revbankaccno = $("#revbankaccno").val();
                $.ajax({
                    url:"<?php echo \Yii::$app->urlManager->createUrl(['storeuser/transfer']);?>",
                    data:{"money":money,"revbankaccno":revbankaccno},
                    type:"post",
                    dataType:"json",
                    success:function(data){
                    $("#acOrder").removeAttr("disabled");
                   if(data.errorCode == 0){
                       modal("modal_order"); 
                       setTimeout(" location.href='<?php echo \Yii::$app->urlManager->createUrl(['/user/transfer'])?>'",2000);
                   }else if(data.errorCode == -2){
                       alert("登录超时，请重新登录");;
                        setTimeout("location.href='<?php echo \Yii::$app->urlManager->createUrl(['login/login'])?>'",2000);
                   }else if(data.errorCode ==-34){
                       alert("网络繁忙，请稍后重试");modal("modal_order1");
                   }else if(data.errorCode ==-40){
                       alert("您没有转账权限");modal("modal_order1");
                        $("#acOrder").removeAttr("disabled");
                   }else if(data.errorCode ==-42){
                       alert("对方账户不存在");modal("modal_order1");
                   }else if(data.errorCode ==-43){
                       alert("超出转账上限");modal("modal_order1");
                   }else if(data.errorCode ==-44){
                       alert("低于转账最小额");modal("modal_order1");
                   }else if(data.errorCode ==-15){
                       alert("请输入正确的金额和账号");modal("modal_order1");
                   }else if(data.errorCode == -50){
                       alert(data.message);
                   }else if(data.errorCode == -81){
                       alert(data.message);
                   }else if(data.errorCode == -60){
                       alert(data.message);
                   }else if(data.errorCode == -101){
                       alert(data.message);
                   }
                },
                error:function(){
                    alert("转账失败，请稍后重试");
                    $("#acOrder").removeAttr("disabled");
                }
                });
				//modal("modal_order1");
				//return false;
		    })
		     
		     
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





























