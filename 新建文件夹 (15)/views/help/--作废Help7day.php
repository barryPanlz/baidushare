<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> 帮助中心-7天无理由退货 </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
	</head>
	
	
	
	<body>
		
			<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
	
	   	<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
	
		
		<div class="redXian"></div>
		<!--帮助中心内容区-->
		<div class="super_help_content">
			<div class="help_content">
					<?php echo \Yii::$app->view->renderFile('@app/views/layouts/helpcate.php'); ?>
			
				
				<div class="help_content_rig">
					<div class="help_path">
						<a href="../../index.html"> 首页 </a>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 常见问题 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span> 售后服务 </span>
						<img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/>
						<span style="color: #282828;"> 7天无理由退换货 </span>
					</div>
					<h5> 7天无理由退换货 </h5>
					<h6> 一、退换货规则： </h6>
					<p class="help_content_p"> 在确认付款前，请您认真核对商品种类，数量，规格等信息是否正确，在您签收后，如发生前述原因要求退换货，本公司将不予办理。 一般而言，如无质量问题，原则上不接受退换货。
 </p>
                    <p> 商城所有商品均为厂家直接发货，一手货源，如您收到的产品有质量问题，请于签收后24小时内给网站客服联系，同时需要提供相关资料，如：照片、文字等能证明质量问题的。请您务必在到货后的7天内将问题商品回寄给厂家。 
 </p>
                   <p> 商城暂不能提供商品维修服务，如商品在使用过程中出现问题，可联系客服，我们将联系厂家为您提供专业的技术指导和解决方案。  </p>
                   <h6 class="help_content_h6"> 二、以下情况不支持退换货： </h6>
                   <p class="help_content_p"> 1、任何因非正常使用或保管导致出现质量问题的商品，不予办理退换货。  </p>
                   <p> 2、商品的外包装丢失或损坏（包括寄回商品内填充物、品牌包装箱、品牌包装袋等）；  </p>
                   <p> 3、商品的相关配件丢失或损坏（附件、说明书、保修单、缺少吊牌、水标、领标等厂商标识的、发票等）；  </p>
                   <p> 4、未事先联系公司客服中心申请退换货；  </p>
                   <p> 5、商品已超过退换货期限（7天）；  </p>
                   <p> 6、寄回退换货商品与客户描述问题不符，公司将不予受理，并按原地址返回，寄回运费将由客户承担；  </p>
                   <p> 7、实物与订单明细不符（除库房确认属错漏发的情形）；  </p>
                   <p> 8、实物与图片无明显色差（属同色系）；  </p>
                   <p> 9、商品非正常使用出现质量问题的；  </p>
                   <p> 10、将商品存储、暴露在超出商品适应的环境中，导致商品损坏；  </p>
                   <p> 11、与个人卫生相关的无质量问题的商品（内衣、电器服装裤子、泳衣等），因商品的特殊性，不享受网站正常的无理由退换货服务，不支持试穿（试用），收货前可先验货，签收后将不提供退换货服务，请您收货前注意确认，经权威部门检测商品存在内在质量问题除外； 
 </p>
                   <p> 12、退回商品的发货清单丢失、涂改或损坏且不能提供商品出处的情况下，将不予办理退换货；  </p>
                   <p> 13、赠品不支持退换货（赠品为随机发送，暂不能挑选颜色）；  </p>
                   <p> 14、商品虽无质量问题，但已洗涤、已空着、已受损、裁剪、有污渍、包装破损（包括外包装）等。  </p>
                   <h6 class="help_content_h6"> 三、退换货运费： </h6>
                   <p class="help_content_p"> 对于符合退换货要求的有质量问题的商品，厂家负责来回运费；否则，客户需要自己承担运费。 </p>
					 
				</div>
				
			</div>
		</div>
		 	<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src=".<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(document).ready(function(){ 
			var help_left = $('.help_content_left>li'); 
		   for( var i = 0; i < help_left.length; i++  ){
		   	  help_left[i].index = i;	
		   	  help_left[i].onmousemove = function(){  
		 
      	   	  	$(this).find('ol').show();
		   	  	
		   	  };
		   	  help_left[i].onmouseleave = function(){  
		 
      	   	  	$(this).find('ol').hide();
		   	  	
		   	  };
		   };
		});	
		</script>
		
	</body>
</html>
