<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>充值</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/centerPay.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/accountant.css"/>
	</head>

	<body>
		<!--遮罩充值的的-->  
       <div class="pay-mark" style="display: none;">
			<div class="pay-mbox">
				<h3 class="tit">
					提示
				</h3>
				<p>请在第三方支付页面完成操作...</p>
				<div class="pay-btn-box">
					<a class="yes" href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>">我已完成支付</a>
					<a class="no">取消</a>
				</div>
			</div>
		</div>
    

		<!--头部用户导航-->
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
     	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box .fix">
					<a class="channel-l" href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>">
						<span>返回商城首页</span>
					</a>
					<div class="channel-c">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>">三界会员</a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>" class="color_title_fist"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend']);?>"> 我的推荐 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings']);?>"> 账户设置 </a>

					</div>
					<div class="channel-r">

						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>">三界石</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>">三界宝</a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pay-cont">
			<div class="data-width">
				<div class="pay-box">
					<h3 class="tit">充值</h3>
					<div class="pay-txt-info">
						<ul>
							<li>账户余额：<span class="num"><?php echo empty($info->future_currency)?'':$info->future_currency ?></span><span class="b">三界石</span></li>
							<li>我的身份：<span class="jewel"><?php if($info->user_type==1){echo '普通会员';}elseif($info->user_type==2){echo "创业会员";}elseif($info->user_type==3){echo "店铺会员";}?></span></li>
							<li>充值比例：<span class="ratio"><?php echo empty($info->feeRate)?'':$info->feeRate; $feerate =  empty($info->feeRate)?'50:100':explode(':',$info->feeRate); ?></span><span class="suffix">（<?php echo $feerate[0] ?>元可充值<?php echo $feerate[1] ?>三界石）</span></li>
						</ul>
					</div>
                    <form action="<?php echo \Yii::$app->urlManager->createUrl(['pay/applyrecharge']);?>" method="post" id="formid" target="_blank">
					<div class="pay-topUp">
						<label for="" class="r-text">充值数额</label>
						<input type="text"  name="sanjieprice" class="proint_nub" placeholder="请输入数字" />
						<span>三界石</span>
					</div>

					<div class="pay-hint">
						<span class="r-text">需支付</span>
						<span class="price">￥0</span>
                        <input type="hidden" value="<?php echo $feerate[0]/$feerate[1]; ?>" name="bili" />
					</div>
					<div class="fix pay-way">
						<span class="fl r-text">支付方式</span>

						<ul class="pay-select fl">
							<li class="zhifubao item">
								<input type="radio" checked="checked"  name="pay_type" value="1" />
								<div class="abcdf"><img src="<?php echo $pc_style; ?>img/zhifubao.png" alt="" /></div>
							</li>
                          <!-- 	<li class="weixin item">
								<input type="radio"  name="pay_type"/>							
								<div><img src="<?php echo $pc_style; ?>img/wechat-mobile-payment.png" alt="" /></div>
								<span>更快更安全</span>
							</li> -->
							<!--20161112胡天培<li class="weixin item">							
							<li class="yinlian item">
								<input type="radio" name="1" />
								<div><img src="<?php echo $pc_style; ?>img/yinlianzhifu.png" alt="" /></div>
								<span>支持网银支付、银行卡快捷支付</span>
							</li>
                            -->
						</ul>
					</div>
					<div class="pay-btn">
                   
						<button onclick="pay()" disabled="disabled" id="pays">立即支付</button>
					</div>
					
                    </form>
				</div>
                <div class="per_dingdan">
                    <table class="tab">
                        <tr>
                            <!--		   	  			<th class="acc_tab_first" style="width: 20%;"> 订单号 </th> -->
                            <th class="acc_tab_first" style="width: 20%;"> 流水号 </th>
                            <th style="width: 15%;"> 时间 </th>
                            <th style="width: 15%;"> 充值数额（三界石） </th>
                            <!--		   	  			<th style="width: 10%;"> 三界宝 </th> -->
                            <th style="width: 10%;"> 支付人民币（元） </th>
                            <!-- <th style="width: 10%;"> 详情 </th> -->
                        </tr>
                        <?php if(!empty($list->data->rechargeList)){
                            foreach($list->data->rechargeList as $val){ //var_dump($val);
                                ?>
                                <tr>
                                    <td class="acc_tab_first"><?php echo empty($val->pay_no) ?  : $val->pay_no ;?></td>
                                    <td><?php echo empty($val->txdate) ? "" : $val->txdate ;?></td>
                                    <td><?php echo empty($val->rela_amnt) ? "" : $val->rela_amnt ;?></td>
                                    <td><?php echo empty($val->txamnt) ? "" : $val->txamnt ;?></td>
                                    <!-- <td>/</td> -->
                                </tr>

                            <?php }}?>
                    </table>


                </div>
                <div class="page_warp">
            <span>
                             <?php if($page->currentPage >1){ ?>
                                 <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
                             <?php } ?>

                <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>



                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>

                <?php } }elseif($page->currentPage >= 5){ {

                    $startTag = $page->currentPage - 1;

                    $endTag = $startTag + 4;
                    for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>


                    <?php  } } }else{
                    for($i=1;$i<= 5;$i++) { ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                    <?php } }?>
                <!--							<a>2</a>-->
                <!--							<a>3</a>-->
                <!--							<a>4</a>-->
                <!--							<a>5</a>-->
                <?php if($page->currentPage < $page->totalPage){ ?>
                    &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay','currentPage' =>$page->currentPage +1])?>">下一页</a>
                <?php }?>
						</span>
                    <span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页</span>
                            <i style="color:red;"><?php echo $page->currentPage;?></i>
                            <span style="color:red;">页</span>
                        <?php if($page->totalPage >1){ ?>
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['pay/centerpay']);?>" method="get" >
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

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>

		<script>
			$(function() {
				$('.pay-select li input').click(function() {
					$('.pay-select li').children("div").removeClass('abcdf');
					$(this).next("div").addClass('abcdf');
				})
				$('.pay-btn-box').click(function() {
					$('.pay-mark').hide();
				})
			})
           
            function pay(){
                 var sanjieprice =  $(".proint_nub").val();
             
                 if(Number(sanjieprice)>"100000"){
                    alert("一次最多充值100000");
                     return false;
                 }
                  
                 if(!validate.isPositiveNum(sanjieprice)){   
                    alert("错误的充值金额");
            	    return false;
            	  }
                var checkNum = /^0/;
                if(checkNum.test(sanjieprice)){
                    alert("请输入正确的充值金额");
                    return false;
                }
			    $(".pay-mark").css("display","block")
                
                $("#formid").submit();
                
              
            }
            $(".proint_nub").blur(function(){
                if((/^(\+|-)?\d+$/.test( $(".proint_nub").attr("value") ) && $(".proint_nub").attr("value") > 0)) {
                    var sanjieprice =  $(".proint_nub").attr("value")*<?php echo $feerate[0]/$feerate[1]; ?>;
                    sanjieprice = parseFloat(sanjieprice) .toFixed(2);
                    $(".price").text('￥'+sanjieprice);
                    $('#pays').prop("disabled","");
                    return true;
                }else{
                    alert("充值数额中请输入正整数！");
                    $('#pays').prop("disabled","disabled");
                    return false;
                }

            })
		</script>
	</body>

</html>