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
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/index']);?>"> 三界会员 </a>
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
	   					<span>人民币（余额）</span>
	   				</li>
	   				<li class="colorF7"><?php echo empty($details1->data->money) ? "0" : $details1->data->money;?></li>
	   			</ul>
	   		</div>
	   		<div class="per_anniu">
<!--                <a href="--><?php //echo \Yii::$app->urlManager->createUrl(['agent/transfer']);?><!--">转三界石</a>-->
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/withdrawal']);?>">提现</a>
	   		</div>
	   		
		   	</div>
		   	
		   	
<!--			<div class="per_mingxi">-->
<!--				<div class="per_mingxi_top">-->
<!--					<div class="per_mingxi_top_title">-->
<!--						<span>账单明细（</span><span>50</span><span>）</span>-->
<!--					</div>-->
<!--					<!--<div class="per_mingxi_top_right">-->
<!--						<a href="">更多</a>-->
<!--						<img src="--><?php //echo $pc_style; ?><!--img/xiaoyoujiantong.png"/>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="per_mingxi_content">-->
<!--					<ul>-->
<!--						<li class="ul_left">时间</li>-->
<!--						<li class="ul_right">-->
<!--							<input type="text" name="" id="" value="" class="per_input fun_per_input" placeholder="选择订单创建时间" />-->
<!--							<i>-->
<!--								—-->
<!--							</i>-->
<!--							<input type="text" name="" id="" value="" class="per_input fun_per_input" placeholder="选择订单创建时间"  />-->
<!--							<span>-->
<!--								<span><a href="###">今天</a>|<a href="###">近一周</a>|<a href="###">近一月</a></span>-->
<!--							</span>-->
<!--						</li>-->
<!--					</ul>-->
<!--					<ul>-->
<!--						<li class="ul_left">交易类型</li>-->
<!--						<li class="ul_right">-->
<!--							<p class="ul_right_p">-->
<!--								<span>-->
<!--									<span>-->
<!--										<a href="###">全部</a>|<a href="###">充值</a>|<a href="###">转账</a></span><a href="###">兑换</a>|<a href="###">消费</a>|-->
<!--										<a href="###">会员消费奖励</a>|<a href="###">会员升级奖励</a><a href="###">店铺充值奖励</a>|<a href="###">供应商业绩分红</a>|<a href="###">辖区店铺业绩奖励</a>|<a href="###">其他奖励</a>-->
<!--									</span>-->
<!--								</span>-->
<!--							</p>-->
<!--						</li>-->
<!--					</ul>-->
<!--					<ul>-->
<!--						<li class="ul_left">金额</li>-->
<!--						<li class="ul_right">-->
<!--							<input type="tel" name="" id="" value="" class="per_input per_input_nub" placeholder="输入数字" />-->
<!--							<i>-->
<!--								—-->
<!--							</i>-->
<!--							<input type="tel" name="" id="" value="" class="per_input per_input_nub" placeholder="输入数字"  />-->
<!--						</li>-->
<!--					</ul>-->
<!--					<ul>-->
<!--						<li class="ul_left">订单号</li>-->
<!--						<li class="ul_right">-->
<!--							<input type="tel" name="" id="" value="" class="per_input per_input_dingdan" placeholder="输入订单号" />-->
<!--						</li>-->
<!--					</ul>-->
<!--					<ul>-->
<!--						<li class="ul_left"></li>-->
<!--						<li class="ul_right">-->
<!--							<p class="ul_right_p">-->
<!--								<button>订单查询</button> -->
<!--								<button class="butn">重置</button>-->
<!--								<button id="acOrder">导出账单</button>-->
<!--							</p>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div>	-->
			<div class="per_dingdan">
				<table class="tab">
                    <tr>
                        <th  class="acc_tab_first"style="width: 25%;"> 时间 </th>
                        <th style="width: 25%;"> 交易类型 </th>
                        <th style="width: 25%;"> 金额 </th>
                        <th style="width: 25%;"> 交易内容 </th>
                    </tr>
                    <?php if(!empty($acclists->data->listPageAcc)){
                        foreach($acclists->data->listPageAcc as $val){
                            ?>
                            <tr>
                                <td><?php echo empty($val->caldate) ?  : $val->caldate?></td>
                                <td><?php echo empty($val->acc_name) ? "" : $val->acc_name ;?></td>
                                <td><?php if($val->wlbao_amnt !== '0') {
                                        echo empty($val->wlbao_amnt) ? "0" : $val->wlbao_amnt.'（三界宝）';
                                    }elseif($val->wlbi_amnt !== '0'){
                                        echo empty($val->wlbi_amnt) ? "0" : $val->wlbi_amnt . '（三界石）';
                                    }elseif($val->rmb_amnt !== '0'){
                                        echo '￥'.$val->rmb_amnt;
                                    }
                                    ?></td>
                                <td><?php echo empty($val->remark1) ? "" : $val->remark1 ;?></td>
                            </tr>
		   	  	</table>

                        <?php }}?>
                <tr class="tab_bord"><td class="acc_tab_first"><span>合计：</span><span></span></td><td><span>人民币：</span><span><?php echo empty($acclists->data->subTotal->rmb_amnt_total) ? "0" : $acclists->data->subTotal->rmb_amnt_total?></span><td></td><td></td></td></tr>
                </table>

				
			</div>
				<div class="page_warp">

					
						<span>
                             <?php if($page->currentPage >1){ ?>
								 <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant','currentPage' =>$page->currentPage - 1])?>">上一页</a>&nbsp;&nbsp;
							 <?php } ?>

                            <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>


                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                          <?php } }elseif($page->currentPage >= 5){ {

                            $startTag = $page->currentPage - 1;

                            $endTag = $startTag + 4;
                            for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php  } } }else{
                            for($i=1;$i<= 5;$i++) { ?>
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant','currentPage' =>$i])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }?>


							<?php if($page->currentPage < $page->totalPage ){ ?>
								&nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant','currentPage' =>$page->currentPage +1])?>">下一页</a>
							<?php } ?>
						</span>
						<span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页，</span>
							<?php if($page->totalPage >1 ){ ?>
							<form action="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant']);?>" method="get" >
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
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/jquery.datetimepicker.full.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		
		
		
			$('.fun_per_input').datetimepicker({
		        format: "Y-m-d"
		    });
		    $("#acOrder").click(function(){
//		    	$(".modal_order").css("display","block");
				modal("modal_order");
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
