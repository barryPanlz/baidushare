<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>链金有法</title>
		<meta name="description" content="全世界都想知道的“区块链”秘籍，区块链从业者人手一本">
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/shopdetails.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/shopheader.css"/>
        <style type="text/css">
			.bdshare-button-style0-16 li a{
				width: 53px;
				height: 50px;
				background: url(../../resources/img/lianjinyoufa/top_logos_sprite.gif) no-repeat 0 -780px;
			}
			.bdshare-button-style0-16 .bds_tsina {
				background-position: 0 -780px !important;
				
			}
			.bdshare-button-style0-16 .bds_sqq{
				background:url(../../resources/img/lianjinyoufa/qqim.gif) no-repeat !important;
			}
			.bdshare-button-style0-16 .bds_qzone{
				background-position: 0 -676px !important;
				
			}
			.bdshare-button-style0-16 .bds_weixin{
				background:url(../../resources/img/lianjinyoufa/weixin.gif) no-repeat !important;
			}
        </style>
	</head>
	<body>
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
				<!--头部用户导航-->
		
		<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
		
		<!--频道跳转栏-->
		<div class="super_general_navi ">
			<!--一级菜单-->
			<div class="general_navi">
			 <?php echo \Yii::$app->view->renderFile('@app/views/layouts/link.php'); ?>
			<!--二级菜单-->
			  <?php echo \Yii::$app->view->renderFile('@app/views/layouts/category.php'); ?>
					
		</div>
		</div>
		
		
		<div class="w_wrap" style="background: #FFFFFF;">
			<div class="w">
				<!--面包屑-->
				<p class="crumbs-bar">
                <a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']); ?>">首页</a><i>></i>
				<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/goodslist','catId'=> $goodsinfo->catId]); ?>"><?php echo empty($goodsType)?'':$goodsType; ?></a>
                <a><?php echo empty($goodsinfo->goodsName)?'':$goodsinfo->goodsName;?></a>
				</p>
				<!--放大镜-->
				<div class="det_c">
					<div class="mianl left">
						<div id="glass" class="glass">
							<div id="simg" class="simg">
							<img src="<?php echo $pic_host.$goodsinfo->goodsImg; ?>" id="imgs"/>
								<!--<div id="big" class="big"></div>-->
							</div>
							<!--<div id="bimg" class="bimg">
							 <img src="<?php echo $pc_style; ?>img/lvyou4.png" id="imgb" class="imgb"/>
							</div>-->
							<ul id="list4" class="list4">
								<li><img src="<?php echo $pic_host.$goodsinfo->goodsImg; ?>"/></li>
							<!--	<li><img src="<?php echo $pc_style; ?>img/xiangqingye_zhanshixiaotu2.png"/></li>
								<li><img src="<?php echo $pc_style; ?>img/xiangqingye_zhanshixiaotu3.png"/></li>
								<li><img src="<?php echo $pc_style; ?>img/xiangqingye_zhanshixiaotu4.png"/></li>
								<li><img src="<?php echo $pc_style; ?>img/xiangqingye_zhanshixiaotu1.png"/></li>
                                -->
							</ul>
						</div>	
					</div>
					<div class="mian2 right">
						<h3 id="neiRong"><?php echo empty($goodsinfo->goodsName)?'':$goodsinfo->goodsName;?></h3>
					    <div class="min_ma_wrap">
					    <!--	<p><span>商品编码：</span><span><?php echo empty($goodsinfo->goodsSn)?'暂无':$goodsinfo->goodsSn; ?></span></p>
					    	<p><span>供应商：</span><span><?php echo empty($goodsinfo->goodsSn)?'暂无':$goodsinfo->goodsSn; ?></span></p>-->
					    </div>
					    <ul class="min_cont_wrap">
					    	<div class="colorF7">
					    		<li class="min_cont_mony">
						    		<div class="min_cont_mony_left">
						    			价格 
						    		</div>
						    		<div class="min_cont_mony_right">
						    			<p class="mony_sl1"><span><?php echo empty($goodsinfo->goodsPrice)?'0.00':$goodsinfo->goodsPrice ?></span><span style="margin-left: 5px;font-size: 14px;">人民币</span><!--20161113胡天培<img src="<?php /*echo $pc_style; */?>img/zuanshihuiyuan.jpg"/>--></p>
<!--                                        <p class="mony_sl1"><span>--><?php //echo empty($max && $little)?'0.00': $little."----". $max?><!--</span><span style="margin-left: 5px;font-size: 14px;">三界石</span><!--20161113胡天培<img src="--><?php //echo $pc_style; ?><!--img/zuanshihuiyuan.jpg"/>--></p>
                                    </div>
						    	</li>
						    	<li class="min_cont_mony">
						    		<div class="min_cont_mony_left">
						    			促销
						    		</div>
						    		<div class="min_cont_mony_right">
						    			<p class="mony_sl2"><span>包邮</span></p>
						    		</div>
						    	</li>
					    	</div>
					    	
					    	<li class="min_cont_mony">
					    		<div class="min_cont_mony_left">
					    			运费
					    		</div>
					    		<div class="min_cont_mony_right">
					    			<p class="mony_sl2"><span>￥</span><span>0.00</span><!--20161113胡天培&nbsp;&nbsp;&nbsp;<span>杭州</span>&nbsp;&nbsp;<sapn>至</sapn>&nbsp;&nbsp;
					    				<select class="mony_sl2_sel" name="">
					    					<option value="">北京市东城区</option>
					    				</select>--></p>
					    		</div>
					    	</li>

                            <li class="min_cont_mony">
                                <div class="min_cont_mony_left">
                                    库存
                                </div>
                                <div class="min_cont_mony_right">
                                    <p class="mony_sl2"><span><?php echo empty($goodsinfo->goodsStock)?'0':$goodsinfo->goodsStock ;?></span></p>
                                </div>
                            </li>
                            <li class="min_cont_mony">
                                <div class="min_cont_mony_left">
                                    销量
                                </div>
                                <div class="min_cont_mony_right">
                                    <p class="mony_sl2"><span><?php echo empty($goodsinfo->goodsSales)?'0':$goodsinfo->goodsSales ;?></span></p>
                                </div>
                            </li>
                            <?php //var_dump($goodsinfo);die;?>
                            <?php if($goodsinfo->isPromote == '1') {  ?>

                            <?php }else{ if(!empty($arr)){ foreach ($arr as $k=>$value){ ;?>
					    	<li class="min_cont_mony">
					    		<div class="min_cont_mony_left" data-1="<?php echo $k ?>"><?php echo $tag["$k"]['attr_name']?></div>
					    		<div class="min_cont_mony_right topic">
                                    <?php foreach ($value as $item) { ?>
					    			<p class="mony_sl2">
					    				<p class="mony_sl2_taoc"><?php echo $item ?></p>
					    			</p>
                                    <?php } ?>
                                    <input type="hidden" value="" class="state aaaa" name="state[]">
                                    <input type="hidden" value="" class="state aaaa" name="states[]">
					    		</div>

					    	</li>
                            <?php } } } ?>
					    	<li class="min_cont_mony min_cont_shuliang" style="">
					    		<div class="min_cont_mony_left">
					    			数量
					    		</div>
					    		<div class="min_cont_mony_right shuliang">
					    			<p class="mony_sl2">
					    				<span>
										 	<a class="oper" title="减一" href="">-</a>
										 	<input type="text" name="" id="onub" value="1" readOnly="readOnly"  />
										 	<a class="oper" title="加一" href="">+</a>
										 	<!--<span>库存<em href="">100</em>件</span> -->
									 	</span>
					    			</p>
					    		</div>
					    	</li>
<input type="hidden" id="usercode" value="<?php echo empty($usercode) ? '': $usercode; ?>">
					    	<div class="goumai">

								<a class="liji" id="liji" style="cursor:pointer;" title="点击此按钮，确认下一步确认购买信息" attr_goodsid="<?php echo empty($goodsinfo->goodsId)?'0':$goodsinfo->goodsId; ?>"  attr_goodscatid="<?php echo empty($goodsinfo->catId)?'0':$goodsinfo->catId; ?>">立即购买</a>
								<?php if($goodsinfo->isPromote == 1){

                                }else { ?>
                                <a style="cursor: pointer;" id="sdFen" title="分享奖励三界宝"  class="shopcar1">分享奖励三界宝</a>
							    <?php } ?>
                            </div>
					    </ul>
						
				
					
					</div>
	
				</div>
				<div class="server_nuo">
					<b style="color: #545454;">服务承诺：</b>
					<span><img src="<?php echo $pc_style; ?>img/xiangqingye_fuwuchengnuo_zhengpin.png"/><span>正品保障</span></span>
					<span><img src="<?php echo $pc_style; ?>img/xiangqingye_fuwuchengnuo_tuikuan.png"/><span>极速退款</span></span>
<!--					<span><img src="--><?php //echo $pc_style; ?><!--img/xiangqingye_fuwuchengnuo_tuihuanhuo.png"/><span>7天无理由换货</span></span>-->
				</div>
				<!--商品详情-->
				<div class="det_ff">
					<div class="det_ff_left">
						<div class="det_ff_left_qq det_ff_left_qq_act">
							<div class="det_ff_left_qq_title">
								欢迎光临三界商城!
							</div>
							<div class="det_ff_left_qq_cont">
								<div class="det_ff_left_qq_cont_qq">
									QQ在线客服
								</div>
								<div class="det_ff_left_qq_cont_img">
									<img src="<?php echo $pc_style; ?>img/xiangqingye_fenxiangzhi_QQ.png"/>
									<a href="tencent://message/?uin=3524869660&Site=&Menu=yes"><span>售前售后</span> </a>
								</div>
								<div class="det_ff_left_qq_cont_img tech">
									<img src="<?php echo $pc_style; ?>img/xiangqingye_fenxiangzhi_QQ.png"/>
									<span>技术咨询</span>
								</div>
								<div class="det_ff_left_qq_cont_img">
									<img src="<?php echo $pc_style; ?>img/xiangqingye_fenxiangzhi_QQ.png"/>
									<a  href="tencent://message/?uin=2167420637&Site=&Menu=yes"><span>业务洽谈</span></a>
								</div>
							</div>
						</div>
                        <?php if(!empty($goodsOtherInfo)){ foreach($goodsOtherInfo as $k=>$v){
                            
                            if($k==2){
                                  break;
                            }
                        ?>
						<div class="det_ff_left_qq">
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v->goodsId,'catId'=>$v->catId]);?>">
							<div class="det_ff_left_qq_phone">
								<img src="<?php echo $pic_host.$v->goodsImg; ?>"/>
								<div class="phone_title">
								<?php echo empty($v->goodsName)?'':$v->goodsName; ?>	
								</div>
								<div class="phone_jine">
									<strong><?php echo empty($v->goodsPrice)?'':$v->goodsPrice; ?>	</strong>
									<b>三界石</b>
								</div>
							</div>
						</a>	
						</div>
                        <?php }}?>
	
					</div>
					
					
					<div class="det_ff_center">
						<div class="det_ff_center_title">
							商品详情
						</div>
						<div class="det_ff_center_imgwrap">
					     <?php echo empty($goodsinfo->goodsDesc)?'':$goodsinfo->goodsDesc ?>
							<img src="<?php echo $pc_style; ?>img/weixintishi01.jpg"/>
							<img src="<?php echo $pc_style; ?>img/weixintishi02.jpg"/>
							<img src="<?php echo $pc_style; ?>img/weixintishi03.jpg"/>
							<img src="<?php echo $pc_style; ?>img/weixintishi04.jpg"/>
							<img src="<?php echo $pc_style; ?>img/weixintishi05.jpg"/>
						</div>
						
					</div>
					
					<div class="det_ff_right ">

                         <?php if(!empty($goodsOtherInfo)){ foreach($goodsOtherInfo as $k=>$v){
                            
                            if($k<=2){
                                    continue;
                            }
                        ?>
						<div class="det_ff_left_qq <?php if($k==3){echo 'det_ff_left_qq_act';}?> ">
                         <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v->goodsId,'catId'=>$v->catId]);?>">
							<div class="det_ff_left_qq_phone">
								<img src="<?php echo $pic_host.$v->goodsImg; ?>"/>
								<div class="phone_title">
										<?php echo empty($v->goodsName)?'':$v->goodsName; ?>	
								</div>
								<div class="phone_jine">
									
									<strong><?php echo empty($v->goodsPrice)?'':$v->goodsPrice; ?></strong>
										<b>三界石</b>
								</div>
							</div>
						</a>	
						</div>
                         <?php }}?>
					</div>
				</div>
				
				<div class="cainilike_wrap">
					<div class="cainixi">
						<em>猜你喜欢</em>
                        <!--20161113胡天培
						<span class="det_ff_span_right">
						<a href="###"><</a>&nbsp;&nbsp;
						<span>1</span><i>|</i>	
						<span>3</span>
						<a href="###">></a>
					</span>
                    -->
					</div>
					<div class="cainixi_content ">
                    
                      <?php if(!empty($goodslike)){foreach($goodslike as $k=>$v){ ?>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v->goodsId,'catId'=>$v->catId]);?>"><li class="sp_item <?php if($k<1){echo 'sp_action';} ?>">
						 	<img src="<?php echo $pic_host.$v->goodsImg; ?>"/>
							<div class="sp_item_content">
								<div class="sp_money">
									<span style="margin-left: 0; margin-right:10px ;"><?php echo empty($v->goodsPrice)?'':$v->goodsPrice; ?></span>
									<b style="padding-top:4px ;">三界石</b>
								</div>
								<div class="sp_name">
										<?php echo empty($v->goodsName)?'':$v->goodsName; ?>
								</div>
								<div class="sp_bottom">
									<em class="">
										<span>已兑</span>
										<b><?php echo empty($v->goodsSales)?'0':$v->goodsSales; ?></b>
									</em>
								<!--<img src="<?php echo $pc_style; ?>img/shopping-cart.png"/>-->
								</div>
							</div>
						</li></a>
                        <?php } }?>
					

					
					</div>
				</div>
			</div>
		</div>
		<!--分享-->
	
		<!--加入购物车 -->
		 <div class="cart-del-mark1">
			<div class="mark-box">
				<div class="mark-top fix">
					<div class="fl">提示</div>
					<div class="fr">x</div>
				</div>
				<div class="mark-mid mark-mid1">
					<img src="<?php echo $pc_style; ?>img/yijiagouwuche_duigoutubiao.png" alt="" />
					<span>商品已加入购物车</span>
				</div>
				<div class="mark-btm mark-btm1">
					<a class="go" href="<?php echo Yii::$app->urlManager->createUrl('car/car');?>">去购物车结算</a>
					<p>（<span class="time">3</span>）三秒后自动消失</p>
				</div>
				
			</div>
		</div>
		<div class="fenxiang_wrap" id="sdFenxiang">
			<div class="sd_fenxiang">
				<div class="sd_fenxiang_title">
					将图书分享给您的三级推荐用户好友去购买，您可获得三界宝奖励
				</div>
				 <div class="bdsharebuttonbox sd_fenxiang_content" data-tag="share_1" >
				 	<li><a data-cmd="tsina"  class="bds_tsina"></a><p>新浪微博</p></li>
				 	<li><a title="分享到QQ好友" data-cmd="sqq" class="bds_sqq"></a><p>QQ</p></li>
				 	<li><a title="分享到QQ空间" data-cmd="qzone" class="bds_qzone"></a><p>QQ空间</p></li>
				 	<li><a title="分享到微信" data-cmd="weixin" class="bds_weixin"></a><p>微信</p></li>
				 </div> 

				<div class="sd_fenxiang_cose">
					<p id="sdConse">关闭</p>
				</div>
			</div>
		</div>

		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			//平台、设备和操作系统
		        var system = {
		            win: false,
		            mac: false,
		            xll: false,
		            ipad:false
		        };
		        //检测平台
		        var p = navigator.platform;
		        system.win = p.indexOf("Win") == 0;
		        system.mac = p.indexOf("Mac") == 0;
		        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
		        system.ipad = (navigator.userAgent.match(/iPad/i) != null)?true:false;
		        //跳转语句，如果是手机访问就自动跳转到wap.baidu.com页面
		        if (system.win || system.mac || system.xll||system.ipad) {
		        	
		        } else {
		 			window.location.href = "http://m.isanjie.com/web/index/suiyi?code=116379";
		        }
			var buynowurl = self.location.href;
			document.cookie = "url="+buynowurl+";path=/";
			var onumber=$("#usercode").val();
			$("#sdFen").click(function(){
					if(onumber==""){
						window.location="<?php echo \Yii::$app->urlManager->createUrl(['login/login']);?>";
					}else{
						$("#sdFenxiang").css("display","block");
					}
				})
				$("#sdConse").click(function(){
					$("#sdFenxiang").css("display","none");
				})
					window._bd_share_config = {
							common : {
								bdText : '【区块链从业必备】权威解读区块链应用与法律监管',	
								bdDesc : '《链金有法》限量认购中！分享图书即奖三界宝！！',	
								bdUrl : "http://www.isanjie.com/web/index/suiyi?code="+onumber, 	
								bdPic : 'http://futureshop.oss-cn-qingdao.aliyuncs.com//image/20161210/newbook.png'
							},
							share : [{
								"bdSize" : 16
							}],
							slide : [{	   
								bdImg : 0,
								bdPos : "right",
								bdTop : 100
							}],
							image : [{
								viewType : 'list',
								viewPos : 'top',
								viewColor : 'black',
								viewSize : '16',
								viewList : ['qzone','tsina','huaban','tqq','renren']
							}],
							selectShare : [{
								"bdselectMiniList" : ['qzone','tqq','kaixin001','bdxc','tqf']
							}]
						}
		</script> 
		<script type="text/javascript">
			
		$(function(){

		　　var obj=$(".min_cont_wrap").find(".min_cont_mony").find(".topic");
			$.each(obj, function(i) {
                var a = "";
                var b = "";
				$(this).children(".mony_sl2_taoc").eq(0).css("background",'url(<?php echo $pc_style; ?>img/xiangqingye_tancankuang.png)')
                a += $(this).siblings().html()+':';
                a += $(this).children(".mony_sl2_taoc").eq(0).html()+';';
                b += $(this).children(".mony_sl2_taoc").eq(0).html()+',';
                $(this).children('input').eq(0).val(a);
                $(this).children('input').eq(1).val(b);
			});
		}); 
		
			//点击属性改变价格


//划过换图
$("#list4").find("li").mouseover(function(){
				oimgsrc=$(this).find("img").attr('src')
				imgs.src=oimgsrc;
//				oImgb.src=oimgsrc;
			})
//切换红色边框
			$(".mony_sl2_taoc").click(function(){
                var a = "";
                var b = "";
				$(this).css("background",'url(<?php echo $pc_style; ?>img/xiangqingye_tancankuang.png)');
				$(this).siblings().css("background",'url()');
                a += $(this).parents(".min_cont_mony_right").siblings().html()+':';
                a += $(this).html()+';';
                b += $(this).html()+',';
              $(this).parents(".min_cont_mony_right").children('input').eq(0).val(a);
                $(this).parents(".min_cont_mony_right").children('input').eq(1).val(b);
//                console.log($(this).parents(".min_cont_mony_right").children('input').val());
                return false;
			});

			$(".list4").find("li").click(function(){
				$(this).css("border-color",'#f2011d');
				$(this).siblings().css("border-color",'#eeeeee');
				return false;
			});
			$(".list4").find("li").mouseover(function(){
				$(this).css("border-color",'#f2011d');
				$(this).siblings().css("border-color",'#eeeeee');
				return false;
			});
			var oNub=1;
			$(".oper").eq(0).click(function(){	
				oNub=$("#onub").val();	
				$(".oper").eq(1).css({ "color": "#bbbbbb", "background": "#DDDDDD" })
				$(".oper").eq(0).css({ "color": "#272727", "background": "#ffffff" })
				oNub--;	
				if(oNub<1){
					oNub=1;
				}
				$("#onub").val(oNub)
				return false;
			});
			$(".oper").eq(1).click(function(){
				$(".oper").eq(0).css({ "color": "#bbbbbb", "background": "#DDDDDD" })
				$(".oper").eq(1).css({ "color": "#272727", "background": "#ffffff" })
                <?php if($goodsinfo->isPromote == 1) { ?>
                alert("秒杀商品只能购买一件")
                return false;
                <?php }?>
				oNub=$("#onub").val();	
				if(oNub<50){
					oNub++;	
					$("#onub").val(oNub)
				}
				
				return false;
			});

			//下拉
			$("#xiaLa").click(function(){
				$("#det_ff_center_tit2").find("tbody").animate({
					height:"120px"
				},500);
				$(this).css("display","none");
				$("#shouhui").css("display","block");
				
			})
			$("#shouhui").click(function(){
				$("#det_ff_center_tit2").find("tbody").animate({
					height:"60px"
				},500);
				$(this).css("display","none");
				$("#xiaLa").css("display","block");
				
			});
			//   购物车为空的时候五秒自动影藏		
			$("#inShopCar").click(function(){
			    //console.log( $(".topic"));
//			    return false;
//                $(".min_cont_wrap").find(".topic").each(function () {
//                   alert(this.children(".mony_sl2_taoc").css("backgroundImage"));
//                    $(this).find("p").each(function () {
//                        console.log( $(this).css("backgroundImage"));
//                         var arr = $(this).css("backgroundImage").split(".");
//                         alert(arr[1]);
//
//                    })
//                });
                    var attrs = "";
                    var attrvalue = "";
                    var xx = "";
                $("input[name='states[]']").each(function() {
                    attrvalue += this.value;
                });
                    $("input[name='state[]']").each(function() {
                        attrs += this.value;
                        if(($(this).val()) == ''){
                            xx = "12";
                        }
                    });
                    //alert(attrs);return false;
                    if(xx == "12"){
                        alert("请选择商品属性！");
                        return false;
                    }

                    //判断是否有库存
//                var vb = "";
//                $.ajax({
//                   type:'post',
//                    data:{sku:attrs},
//                    dataType:'json',
//                    async: false,
//                    url:"<?php //echo Yii::$app->urlManager->createUrl('goods/choose');?>//",
//                    success:function (data) {
//                        if(data == null || data == 0){
//                            alert("所选属性没有库存");
//                            vb = '13';
//                        }
//                    }
//
//                });
//                if(vb == '13'){
//                    return false;
//                    }

			    var num = $("#onub").val();
				if($(this).attr('attr_goodsid')=='0'){
					alert("系统错误！");
				}
				var sku_id ='0';
                <?php if (empty(Yii::$app->session->get('sessionid'))){ ?>
                location.href= "<?php echo Yii::$app->urlManager->createUrl('login/login');?>";
                <?php }elseif(Yii::$app->session->get('user_type') == 3){ ?>
				alert("店铺会员，不可以购买"); return false;
                <?php  }elseif(Yii::$app->session->get('user_type') == 4){ ?>
                alert("供应商会员，不可以购买"); return false;
                <?php }elseif(Yii::$app->session->get('user_type') == 5){ ?>
                alert("代理商会员，不可以购买"); return false;
                <?php }?>
				$.ajax({
                        type:'POST',
                        data:'num='+num+'&goods_id='+$(this).attr('attr_goodsid')+'&sku_id='+attrs+'&sku_value='+attrvalue,
                        dataType:'json',
                        url:'<?php echo Yii::$app->urlManager->createUrl('car/addcar');?>',
                        success:function(data){
                             if(data.errno==0){
								x("cart-del-mark1"); 
                             }else if(data.errno==2){
                                alert(data.error);
								location.href= "<?php echo Yii::$app->urlManager->createUrl('login/login');?>";
                             }else{
                                alert(data.error);
                             }
                        }
                });
			})
			
			$("#liji").click(function(){
                var cat_id = $(this).attr('attr_goodscatid');
			    var num = $("#onub").val();
                var goods_id = $(this).attr('attr_goodsid');
                var attrs = "";
                var xx = "";
                var attrvalue = "";
                var isPromote = "<?php echo $goodsinfo->isPromote?>";
                $("input[name='state[]']").each(function() {
                    attrs += this.value;
                    if(($(this).val()) == ''){
                        xx = "12";
                        return false;
                    }
                });
                $("input[name='states[]']").each(function() {
                    attrvalue += this.value;
                });
                if(xx == "12"){
                    alert("请选择商品属性！");
                    return false;
                }
                <?php if (empty(Yii::$app->session->get('sessionid'))){ ?>
                location.href= "<?php echo Yii::$app->urlManager->createUrl('login/login');?>";
                <?php }elseif(Yii::$app->session->get('user_type') == 3){ ?>
                alert("店铺会员，不可以购买"); return false;
                <?php  }else if(Yii::$app->session->get('user_type') == 4){ ?>
                alert("供应商会员，不可以购买"); return false;
                <?php }else if(Yii::$app->session->get('user_type') == 5){ ?>
                alert("代理商会员，不可以购买"); return false;
                <?php }?>
			    location.href="<?php echo Yii::$app->urlManager->createUrl('order/found_order'); ?>?goods_id="+goods_id+"&num="+num+"&cat_id="+cat_id+"&sku_id="+attrs+"&isPromote="+isPromote+'&sku_value='+attrvalue;
			});
			var xh;
				function x(dis){
					
					$('.mark-btm1 .time').html(3);
					var timer = 3;
					clearInterval(xh); 
					$("."+dis).css("display","block");
					 xh =setInterval(function(){
						timer--;
						$('.mark-btm1 .time').html(timer);
						if(timer==0){
							
							$('.'+dis).hide();
							clearInterval(xh);
							timer=0;
						}
					},1000);
				}
			$(".fr").click(function(){
				$('.cart-del-mark1').hide();
				clearInterval(xh);
			})
			//=========================
			$(".fun_huag_act").mouseover(function(){
				$("#Secondary").css("display","block");
			});
			$(".fun_huag_act").mouseleave(function(){
				$("#Secondary").css("display","none");
			})
			var Secondary_Li = $("#Secondary li");
			var Secondary = $("#Secondary");
			var level_3 = $("#Secondary div");
			var iNum = 0;
			for( var i = 0; i < Secondary_Li.length; i++ ){
				Secondary_Li[i].index = i;
				Secondary_Li[i].onmousemove = function(){
					$("#Secondary").css("display","block");
					iNum = $(this).index();
					$(this).addClass('backFff').siblings().removeClass('backFff');
					for( var k = 0; k < level_3.length; k++ ){
						level_3[k].className = 'wu';
					};
					level_3[iNum].className = 'you';
				    level_3[iNum].onmouseleave = function(){
				    	$("#Secondary").css("display","none");
				    	level_3[iNum].className = 'wu';
				    	Secondary_Li[iNum].className = '';
				    };
				    Secondary_Li[iNum].onmouseleave = function(){
				    	$("#Secondary").css("display","none");
				    	level_3[iNum].className = 'wu';
				    	Secondary_Li[iNum].className = '';
				    };
				};
			};

		with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
	
		</script>
			</body>
</html>
