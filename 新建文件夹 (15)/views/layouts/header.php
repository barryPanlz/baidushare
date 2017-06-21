<?php 
use frontend\assets\LayoutsLib;
$new = new LayoutsLib();
$pc_style = $new->pc_style;
?>
<!--[if lte IE 7]><script>location.href='<?php echo \Yii::$app->urlManager->createUrl(['index/updatebrowser']);?>'</script><![endif]-->
<div class="super_userNavi" id="super_userNavi">
			<div class="userNavi">	
				<div class="fun_location Location" style="position: relative;">
					<p  class="fun_locationp Location">
						<span>三界生活：</span><span class="cityname"> 邢台 </span> 
						<img src="<?php echo $pc_style;?>img/jiant_x.png"/>
					</p>&nbsp; 
					<ul class="fun_over_china over_China ">
						<h2> <span>当前定位：</span> <span id="addres"></span> </h2>
						 <h2> 已开辟分站 </h2>
							 <div id="cityids">
<!--							 	<span class="updatecity" attr="130500"> 邢台 </span>-->
<!--								<span class="updatecity" attr="361000"> 抚州 </span>-->
							 </div>  
					</ul>

				</div>					
				<div class="navigation" id="navigation" style="margin-right: 0;">
<!--                --><?php // $session = Yii::$app->session; $phone = $session->get('mobile_phone');$username =$session->get('user_name'); if(!empty($phone)||!empty($username)){  ?>
                    <?php $session = Yii::$app->session; $mobile = $session->get('mobile'); if(!empty($mobile)){ ?>
					<li class="My_Account">我的账户：<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>">  <?php echo $mobile ;?>  </a></li>
					<li><a href="<?php echo \Yii::$app->urlManager->createUrl(['login/out'])?>"> 退出 </a></li>
<!--                    	<li><a href="--><?php //echo \Yii::$app->urlManager->createUrl(['user/order']);?><!--"> 我的订单 </a></li>-->
                    <?php }else{?>
                    <li><a href="<?php echo \Yii::$app->urlManager->createUrl(['login/login']);?>"> 登录 </a></li>
                    <li><a href="<?php echo \Yii::$app->urlManager->createUrl(['login/register1']);?>"> 注册 </a></li>
                    <?php }?>
				
					<li><a href="<?php echo \Yii::$app->urlManager->createUrl(['help/helpcenter']);?>"> 帮助中心 </a></li>
					<li><a href="<?php echo \Yii::$app->urlManager->createUrl(['help/getsyscode']);?>"> 新手上路 </a></li>
					<li class="nav_li_wrap">
						<a class="funLoca" id="funLoca" href="#">手机版</a>
						<ul>
							<div class="img_erweima">
								<img src="<?php echo $pc_style; ?>img/erweimashouji.png"/>
								<p class="erweima_p">三界生活手机商城</p>
							</div>
						</ul>
					</li>
					<li class="nav_li_wrap">
						<a  class="funLoca" id="funLoca" href="#">微信服务号</a>
						<ul class="weixin">
							<div class="img_erweima">
								<img src="<?php echo $pc_style; ?>img/weixinfuwuhao.png"/>
								<p class="erweima_p">三界生活微信服务号</p>
							</div>
						</ul>
					</li>
				</div>
			</div>
		</div>


<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script> 
<!--<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/gaode.js"></script>-->
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=97fb72aa264a6ab08b7cbc321b57b03b"></script>
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
<script type="text/javascript">
            citys();
            var cityarr;
            var citynamearr;
		var cityCode;
           //定位
			var addres = sessionStorage.getItem("index_addres"); 
				gaoDeoLocation(); 
			function gaoDeoLocation(){
				var map, geolocation;
				map = new AMap.Map('', {
					resizeEnable: true
				});
				map.plugin('AMap.Geolocation', function(){
					geolocation = new AMap.Geolocation({
						enableHighAccuracy: true, //是否使用高精度定位，默认:true
						timeout: 5, //超过10秒后停止定位，默认：无穷大
						buttonOffset: new AMap.Pixel(10, 20), //定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
						zoomToAccuracy: true, //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
						buttonPosition: 'RB',
						convert: true
					});
					map.addControl(geolocation);
					geolocation.getCurrentPosition();
					AMap.event.addListener(geolocation, 'complete', onComplete); //返回定位信息
					AMap.event.addListener(geolocation, 'error', onError); //返回定位出错信息
				});
				//解析定位结果
				function onComplete(data){
					var location = data.position.getLng() + "," + data.position.getLat();
					console.log(location)
					$.ajax({  
						type:"get",  
						async:true,
						url : 'http://restapi.amap.com/v3/ip?parameters',  	
						dataType:"json",
						data : {
							'key' : "97fb72aa264a6ab08b7cbc321b57b03b",
							'output' : "JSON",
							'batch' : false,
							'location' : location
						},
						success  : function(data){	
							console.log(data);
							cityCode = data.regeocode.addressComponent.adcode; 
							console.log( cityCode );
							
							$("#addres").html( data.regeocode.addressComponent.district );
							sessionStorage.setItem("index_addres",addres);
							return cityCode;
						},
						error : function(data){	
						}
					});	
				}
				//解析定位错误信息
				function onError(data) {
					$("#addres").html( "定位失败" );
 				}
			}
		
		setTimeout(function(){
			console.log(cityCode);
			function getcityid () {
                $.ajax({
                    url : "<?php echo \Yii::$app->urlManager->createUrl(['login/getareabyid']) ?>",
                    type : "post",
                    data:{'areaId':cityCode},
                    success:function (data) {
                       // console.log(cityarr);
                        //alert(data);
                        $.each(cityarr,function (k,v) {
                            //alert(v.city);
                            if(data == v.city){
                               // alert(v.city);
                                document.cookie = "cityid="+ data + ";path=/";
                                return false;
                            }else{
                                //alert(v.city);
                                document.cookie = "cityid=130500;path=/";
                            }
                        })

                    },
                    error:function () {
                        //alert('cuo')
                    }
                });
            }
            getcityid ();
		},5000);

			function citys() {
                $.ajax({
                    url:"<?php echo \Yii::$app->urlManager->createUrl(['login/getcity']) ?>",
                    type:"post",
                    dataType:"json",
                    async:false,
                    success:function (data) {
                        //console.log(data.data[0].getDistributeStoreInfo);
                        //$('#cityids');
                        var num = data.data[0].getDistributeStoreInfo;
                        var htmls = '';
                       $.each(num,function (k,v) {
                           if(v.city == '130500'){
                                htmls += '<a class="updatecity" attr="'+ v.city +'"> '+ v.city_name +' </a>';
                           }else{
                               htmls += '<a class="updatecity" attr="'+ v.city +'"> '+ v.province + v.city_name +' </a>';
                           }
                           //console.log(v.city_name);
                           $('#cityids').html(htmls);
                       });
                       cityarr = num;
                        citynamearr = JSON.stringify(num) ;
                       console.log(cityarr);
                         sessionStorage.setItem('cityname',citynamearr) ;

                    },
                    error:function () {
                       // alert('')
                    }
                })
            }
            ipmap();
            function ipmap(){
                  //var ipmac = <?php echo $_SERVER['REMOTE_ADDR'] ; ?>;
                 
                  var ipmac = "114.247.50.2";
                   //alert(ipmac);
                  $.get("http://restapi.amap.com/v3/ip?ip="+ipmac+"&output=json&key=97fb72aa264a6ab08b7cbc321b57b03b",function(data,status){
                     console.log(data);
                    });
            }

	</script>
 			