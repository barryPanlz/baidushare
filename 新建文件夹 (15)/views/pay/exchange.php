<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>三界石兑换人民币</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/centerPay.css" />
		<style type="text/css">
			.pay-topUp input{
				width: 170px;
			}
		</style>
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
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/index']);?>"> 三界会员 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/order']);?>"> 我的订单 </a>
                        <a  class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant']);?>"> 我的账房 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountsettings']);?>"> 账户设置 </a>

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
					<h3 class="tit">三界石兑换人民币</h3>
					<div class="pay-txt-info">
						<ul>
							<li>三界石余额：<span class="num"><?php echo empty($details1->data->future_currency) ? "0" :  $details1->data->future_currency; ?></span><span class="b">个</span></li>
							<li>人民币余额：<span class="num"><?php echo empty($details1->data->money) ? "0" :  $details1->data->money; ?></span><span class="b">元</span></li>
							<li>兑换比例：<span class="ratio"></span><span class="suffix">￥<?php echo empty($details1->data->exchange_rate) ? "0" : $details1->data->exchange_rate ;?>个三界石</span></li>
						</ul>
					</div>
                  
					<div class="pay-topUp">
						<label for="" class="r-text">原始货币</label>
						<input type="text"  name="sanjieprice" class="proint_nub" value="三界石" readonly="readonly" data-state="1" id="currency"/>
					</div>

					<div class="pay-topUp">
						<label for="" class="r-text">兑换数额</label>
						<input type="number"  name="sanjieprice" class="proint_nub" placeholder="输入需要兑换的币种数额" id="num"/>
					</div>
					<div class="pay-topUp">
						<label for="" class="r-text">目标货币</label>
						<input type="text"  name="sanjieprice" class="proint_nub" value="人民币" readonly="readonly"/>
					</div>
					<div class="pay-topUp">
						<label for="" class="r-text">可以兑换</label>
                        <p id="yes" class="r-text">0</p>
					</div>
					
					<div class="pay-btn">
                   
						<button>确认兑换</button>
					</div>
					
                    </form>
                    <ul class="pay_list">
						<div class="pay_list_title">
							兑换记录
						</div>
						<li class="list_title list_title1">
							<p>流水账号</p>
							<p>时间</p>
							<p>原始货币</p>
			                <p>兑换数额</p>
							<p>目标货币</p>
							<p>兑换得到</p>
						</li>
                        <?php if(!empty($list)){ foreach ($list as $value){ //var_dump($value);?>
						<li class="list_title list_title1">
							<p title="<?php echo empty($value->flow_no) ? "" : $value->flow_no ;?>"><?php echo empty($value->flow_no) ? "" : $value->flow_no ;?></p>
							<p><?php echo empty($value->create_time) ? "" : $value->create_time ;?></p>
							<p><?php echo empty($value->original_currency) ? "0" : $value->original_currency ;?></p>
			                <p><?php echo empty($value->exchange_num) ? "0" : $value->exchange_num ;?></p>
							<p><?php echo empty($value->target_currency) ? "0" : $value->target_currency ;?></p>
							<p><?php echo empty($value->result_num) ? "0" : $value->result_num ;?></p>
						</li>
                        <?php } } ?>
					</ul>
				</div>
                <div class="page_warp">


						<span>
                             <?php if($page->currentPage >1){ ?>
                                 <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
                             <?php } ?>

                            <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>


                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }elseif($page->currentPage >= 5){ {

                                $startTag = $page->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php  } } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php } }?>


                            <?php if($page->currentPage < $page->totalPage ){ ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange','currentPage' =>$page->currentPage +1])?>">下一页</a>
                            <?php } ?>
						</span>
                    <span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页，</span>
                        <?php if($page->totalPage >1 ){ ?>
                        <form action="<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange']);?>" method="get" >
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

                $('.pay-btn').click(function () {
                    var currency = $('#currency').attr('data-state');
                    var num = $('#num').val();
                    var yes = $('#yes').html();
                    $.ajax({
                        url:"<?php echo \Yii::$app->urlManager->createUrl(['pay/exchange_ajax'])?>",
                        data:{currency:currency,num:num,yes:yes},
                        dataType: "json",
                        type:"post",
                        success:function (data) {
                            if(data.errorCode == -15){
                                alert(data.message);
                            }else if(data.errorCode == -34){
                                alert(data.message);
                            }else if(data.errorCode ==-50){
                                alert(data.message);
                            }else if(data.errorCode ==-60){
                                alert(data.message);
                            }else if(data.errorCode == 0){
                                alert(data.message);
                                location .href="<?php echo \Yii::$app->urlManager->createUrl(['storeuser/accountant']);?> ";
                            }
                        },
                        error:function () {
                            alert("网络繁忙，请稍后再试")
                        }
                    })
                })
                $("#num").blur(function(){
                    var proportion = '<?php echo $details1->data->exchange_rate; ?>';
                    var arr = proportion.split(':');
                    var sanjieprice =  $("#num").attr("value")* arr[0]/arr[1];
                    sanjieprice = parseFloat(sanjieprice) .toFixed(2);
                    $("#yes").html(sanjieprice);
                });
                $("#num").change(function(){
                if($("#num").val() < 0){
                    $("#num").val(0);
                }
                })
			});
           
           
		</script>
	</body>

</html>