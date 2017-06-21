<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<script type="text/javascript">
		(function (doc, win) {
		    var docEl = doc.documentElement,
		        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
		        recalc = function () {
		            var clientWidth = docEl.clientWidth;
		            if (!clientWidth) return;
		            if(clientWidth>=750){
		                docEl.style.fontSize = '100px';
		            }else{
		                docEl.style.fontSize = 100 * (clientWidth /750) + 'px';
		            }
		        };
		    if (!doc.addEventListener) return;
		    win.addEventListener(resizeEvt, recalc, false);
		    doc.addEventListener('DOMContentLoaded', recalc, false);
		})(document, window);
	</script>
    <script> 		
			//平台、设备和操作系统
			var system ={
			win : false,
			mac : false,
			xll : false
			};
			//检测平台
			var p = navigator.platform;			 
			system.win = p.indexOf("Win") == 0;
			system.mac = p.indexOf("Mac") == 0;
			system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
			//跳转语句
			if(system.win||system.mac||system.xll){//转向后台登陆页面
				// window.location.href="http://192.168.100.142/user/diamond_index.html";
				window.location.href="<?php echo @\Yii::$app->urlManager->createUrl(['user/diamond_index']);?>";
			}else{	
				// window.location.href="http://192.168.100.142/user/usercenter.html";
				window.location.href="<?php echo @\Yii::$app->urlManager->createUrl(['user/usercenter']);?>";	
			}		
		</script>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
			.pay-cont{
				width:100%;
				height: auto;
				overflow: hidden;
				padding:1rem 0 ;
				
			}
			.data-width{
				width: 2.4rem;
				height: auto;
				overflow: hidden;
				margin: 0 auto;
			}
			.pay-fail{
				width: 100%;
			}
			.pay-fail img{
				display: block;
				width: 0.6rem;
				margin:0 auto ;
			}
			.pay-fail p{
				width: 100%;
				text-align: center;
				font-size:16px;
				margin-top: 0.1rem;
			}
			.rePay-btn{
				width: 100%;
				text-align: center;
			}
			.rePay-btn a{
				margin-top:0.4rem ;
				display: inline-block;
				width: 60%;
				font-size: 14px;
				height: 0.4rem;
				line-height: 0.4rem;
				color: #FFFFFF;
				background: #F3001D;
				border-radius:5px ;
			}
		</style>
	</head>

	<body>
		<div class="pay-cont">
			<div class="data-width">
					<div class="pay-fail">
						<img src="<?php echo $pc_style; ?>img/chenggong.png" alt="" />
						<p>充值成功 三界石已到账</p>
					</div>
					<div class="rePay-btn">
						<a href="<?php echo Yii::$app->urlManager->createUrl('user/diamond_index')?>">返回支付首页</a>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>