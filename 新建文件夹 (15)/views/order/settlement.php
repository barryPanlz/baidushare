<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 结算页 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	
	
	<body style="background: #f6f6f6;">
		
	   <?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
				
		
		<!--结算页头部-->
		<div class="super_enroll_top">
			<div class="enroll_top">
				<a class="enroll_top_logo" href="<?php echo Yii::$app->urlManager->createUrl('index/index');?>"><img src="<?php echo $pc_style; ?>img/logo.png"/></a>
				<span> 结算页 </span>
				<img class="enroll_top_img" src="<?php echo $pc_style; ?>img/liucheng2.png"/>
			</div>
		</div>
		
		<!--结算页内容区-->
		<form action="<?php echo \Yii::$app->urlManager->createUrl(['order/newpay']);?>" method="post" id="formid" target="_blank">
		<div class="super_settle_ment">
			<div class="settle_ment" style="height: 466px;">
				<!--结算时的内容-->
				<div class="prompt_1">
					<h3> 订单提交成功，请尽快支付 </h3>
					<p> 请您在提交订单后，于<a style="cursor:pointer;">15分钟内</a>完成支付，否则，订单会自动取消。 </p>
				</div>
				<input type="hidden" id="isPromote" value="<?php echo $isPromote;?>">
				<div class="order_details">
				<input type="hidden" name="order_no" value="<?php echo $get['order_sn']; ?>">
				<input type="hidden" name="pay_type" value="1">
					<p> 订单号：<span> <?php echo $get['order_sn']; ?> </span> </p>
					<?php if ($isPromote == '2'){ ?>
                        <dl> 应付总额（人民币）: <em> <?php echo $get['money']; ?> </em> </dl>

					<?	}else{?>
                         <dl> 应付总额（三界石）: <em> <?php echo $get['money']; ?> </em> </dl>
                    <?php }?>
					
					<a class="To_view " href="<?php echo Yii::$app->urlManager->createUrl('user/order');?>"> 查看订单 </a>
				</div>
				
				<div class="pay_to">
					<h4> 支付方式 </h4>
                        
                         <dt> <span> 账户余额 </span> <em> （<?php echo !empty($money)?$money['future_currency']:"0.00"; ?>三界石） </em> <a href="<?php echo Yii::$app->urlManager->createUrl('pay/centerpay');?>"> 去充值 </a> </dt>
                    
					
					<a class="Immediate_payment" style="cursor:pointer;" attr_id="<?php echo $get['order_sn']; ?>"> 立即支付 </a>
				</div>
				
				
				
			</div>
		</div>
		</form>
		
		
		
		
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
		<script>
        	$(function() {
        	   $(".Immediate_payment").click( function(){
        	   	var isPromote = $("#isPromote").val();
        	   	if(isPromote == '2'){
        	   		//支付宝支付
        	   		$("#formid").submit();
        	   	}else{
        	        $.ajax({
                        type:'POST',
                        data:'order_sn='+$(this).attr("attr_id"),
                        dataType:'json',
                        url:"<?php echo Yii::$app->urlManager->createUrl('order/pay_logic');?>",
                        success:function(data){
                        	
                             if(data.errno==0){
                                alert(data.error);
								location.href= "<?php echo Yii::$app->urlManager->createUrl('order/pay_success');?>?order_amount="+data.data.order_amount+"&pay_time="+data.data.pay_time+"&order_no="+data.data.order_no;
                             }else{
                                alert(data.error);
							//	location.href= "<?php echo Yii::$app->urlManager->createUrl('order/pay_fail');?>?order_sn="+$(this).attr("attr_id");
                             }
                        },
                    });
        	    }

        	   });
        	})
        </script>
		
	</body>
</html>
