<?php
use frontend\assets\LayoutsLib;
$new = new LayoutsLib();
$pc_style = $new->pc_style;
?>
<div class="footer">
				<div class="data-width">
					<div class="foot-mid">
						<ul>
							<li>
								<h3>注册登录</h3>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/consumersregistered']);?>">消费注册</a>
								<!--<a href="">正品保障</a> -->
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/userlogin']);?>">用户登录</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/forgotpassword']);?>">忘记密码</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/tenants']);?>">商家入驻</a>
							</li>
							<li>
								<h3>消费指南</h3>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/cashflow']);?>">兑换流程</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/consumprocess']);?>">消费流程</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/currencypay']);?>">货币与支付</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/distributemethod']);?>">配送方式</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/recruite']);?>">物流查询</a>
							</li>
							<li>
								<h3>购物指南</h3>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/comeback7day']);?>">7天退换货</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/returnprocess']);?>">退货流程</a>
							</li>
							<li>
								<h3>订单问题</h3>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/orderquery']);?>">订单查询</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/consumercode']);?>">消费码</a>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/ordercance']);?>">订单取消</a>
							</li>
							<li class="kefuqu"> 
								<h3>
									<img src="<?php echo $pc_style;?>img/kefu.jpg" alt="" />
									<div>
										<h4>客服电话</h4>
										<h3>400-0680-162</h3>
									</div>
								</h3>
								<p href="">招 商 热 线：<span>13718649545</span></p>
								<p href="">短信 / 微信：<span>13718564971</span></p>
								<p href="">微信服务号：<span>三界生活</span></p>
							</li>
						</ul>
					</div>
					<div class="foot-top">
						<ul>
							<li class="first"><img src="<?php echo $pc_style;?>img/foot-icon1.png" alt="">
								<p>闪电发货</p>
							</li>
							<li><img src="<?php echo $pc_style;?>img/foot-icon2.png" alt=""><p>售后保障</p></li>
							<li><img src="<?php echo $pc_style;?>img/foot-icon3.png" alt=""><p>推荐有奖</p></li>
							<li><img src="<?php echo $pc_style;?>img/foot-icon4.png" alt=""><p>消费返利</p></li>
							<li class="end"><img src="<?php echo $pc_style;?>img/foot-icon5.png" alt=""><p>战略合作</p></li>
						</ul>
					</div>
					<div class="foot-btm">
						<div class="foot-btm-nav">					
							<!--<a href="">关于我们</a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('help/shopercheck')?>">商家入驻</a>
							<a href="">联系我们</a>
							<a href="">三界商城</a>
							<a href="">三界本地</a>-->
						</div>
						<p>Copyright © 2015-2016 三界生活 ISANJIE.com 版权所有 <a href="http://www.miitbeian.gov.cn">津ICP备16007829号-1</a></p>
						<div class="foot-btm-btm"><img src="<?php echo $pc_style;?>img/foot-icon7.jpg" alt="" /></div>
					</div>
				</div>
			</div>
<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script>
$(function(){
    
    //获取城市ID
    var cityid =getCookie('cityid');
    var cityids = getCookie('cityids');
    //判断显示城市名称
    var cityname = JSON.parse(sessionStorage.getItem('cityname'));


    //更新cookie
    $(".updatecity").click(function(){
                var cityid = $(this).attr('attr');
                document.cookie = "cityids="+ cityid + ";path=/";
                location.reload();
    });
//  if(cityids == null){
//      $.each(cityname,function (k,v) {
//          // alert(v.city);return false;
//          if(cityid == v.city){
//              $(".cityname").html(v.province + v.city_name);
//          }
//      })
//  }else{
//      $.each(cityname,function (k,v) {
//          // alert(v.city);return false;
//          if(cityids == v.city){
//              $(".cityname").html(v.province + v.city_name);
//          }
//      })
//  }


    //获取cookie值
    function getCookie(name)
    {
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    }
    
})
</script>