<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>创建订单</title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/cart.css" />

	</head>

	<body>
		<div class="cmp-mark">
			<div class="cmp-box" >
				<form class="addaddress">
					<ul>
						<h3>添加信息</h3>
						<li class="add-addres">
							<label for="" class="lab">收货人</label>
							<input type="text" class="user_name com_pad" attr_type="add" name="consignee" placeholder="请输入用户名" />
							<p class="error_name"><img src="<?php echo $pc_style; ?>img/order-icon13.png" alt="" />&nbsp;姓名格式错误</p>

						</li>
						<li class="add-addres">
							<label for="" class="lab">手机</label>
							<input type="text" class="user_phone com_pad" attr_type="add" name="mobile" placeholder="请输入手机号" />
							<p class="error_phone"><img src="<?php echo $pc_style; ?>img/order-icon13.png" alt="" />&nbsp;手机号码格式错误</p>
						</li>
						<li class="add-addres">
							<label for="" class="lab">收货地址</label>
							<select name="province" attr="add" id="province">
                                <?php foreach($prolist as $v){ ?>
								<option value="<?php echo $v['provinceid']; ?>"><?php echo $v['province']; ?></option>
                                <?php } ?>
							</select>
							<select name="city" attr="add" id="city">
								<?php foreach($city_list as $v){ ?>
								<option value="<?php echo $v['cityid']; ?>"><?php echo $v['city']; ?></option>
                                <?php } ?>
							</select>
							<select name="district" id="district">
								<?php foreach($area_list as $v){ ?>
								<option value="<?php echo $v['areaid']; ?>"><?php echo $v['area']; ?></option>
                                <?php } ?>
							</select>
						</li>
						<li class="add-addres">
							<label for="" class="lab">详细地址</label>
							<input type="text" class="user_address com_pad"  name="address" attr_type="add" placeholder="输入街道、门牌号等详细地址" />
							<p class="error_address"><img src="<?php echo $pc_style; ?>img/order-icon13.png" alt="" />&nbsp;<span>请输入正确的地址信息</span></p>
						</li>
						<li class="add-addres radio-seled">
							<label for="radio-btn"></label>
							<input type="checkbox" id="radio-btn" name="default" /> 设置为默认地址
						</li>
						<li class="add-addres add-btn-box">
							<a class="add-btn btn-addaddress">添加</a>
							<a class="cancel-btn">取消</a>
						</li>
					</ul>
				</form>
			</div>
		</div>

		<div class="cmp-mark1">
			<div class="cmp-box" >
				<form class="updateaddress" >
					<ul>
						<h3>修改地址</h3>
						<li class="add-addres">
							<label for="" class="lab">收货人</label>
							<input type="text" class="user_name" name="consignee" attr_type="update" id="update_consignee" placeholder="请输入用户名" />
							<p class="error_name_update"><img src="<?php echo $pc_style; ?>img/order-icon13.png" alt="" />&nbsp;姓名格式错误</p>
						</li>
						<li class="add-addres">
							<label for="" class="lab">手机</label>
							<input type="text" class="user_phone" name="mobile" attr_type="update" id="update_mobile" placeholder="请输入手机号" />
							<p class="error_phone_update"><img src="<?php echo $pc_style; ?>img/order-icon13.png" alt="" />&nbsp;手机号码格式错误</p>
						</li>
						<li class="add-addres">
							<label for="" class="lab">收货地址</label>
							<select name="province" attr="update" id="update_province">
                                <?php foreach($prolist as $v){ ?>
								<option value="<?php echo $v['provinceid']; ?>"><?php echo $v['province']; ?></option>
                                <?php } ?>
							</select>
							<select name="city" attr="update" id="update_city">
								<option value="">选择城市</option>
							</select>

							<select name="district" id="update_district">
								<option value="">选择地区</option>
							</select>
						</li>
                        <li class="add-addres">
							<label for="" class="lab">详细地址</label>
							<input type="text" class="user_update user_address" name="address" attr_type="update"  id="update_address"  placeholder="请输入详细地址" />
							<p class="error_address_update"><img src="<?php echo $pc_style; ?>img/order-icon13.png" alt="" />&nbsp;<span>请输入正确的地址信息</span></p>
						</li>
						<li class="add-addres radio-seled">
							<label for="radio-btn"></label>
							<input type="checkbox" id="radio-btn" name="default" /> 设置为默认地址
						</li>
						<li class="add-addres add-btn-box">
							<input type="hidden" name="address_id" placeholder="" />
							<a class="add-btn btn-updateaddress">修改</a>
							<a class="cancel-btn">取消</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>

		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search fix">
				<a href="<?php echo \Yii::$app->urlManager->createUrl(['index/index']);?>"><img style="float: left;" src="<?php echo $pc_style; ?>img/logo.png" /></a>
				<div class="order-t fl">提交订单</div>
				<div class="order-plan fr">
					<img src="<?php echo $pc_style; ?>img/jingdu1.png" alt="" />
				</div>
			</div>
		</div>

		<!--收货地址-->
		<div class="order-cont">
			<div class="data-width">
				<div class="address-box">
					<div class="address-top fix">
						<div class="fl">
							<img src="<?php echo $pc_style; ?>img/address-icon.png" alt="" />
							<span>收货地址</span>
						</div>
						<div class="fr">
							<img src="<?php echo $pc_style; ?>img/address-icon1.png" alt="" />
							<span>新增收货地址</span>
						</div>
					</div>

					<div class="address-main">
                    <?php foreach($user_address as $v){ ?>
						<div class="a-m-b fix">
							<div class="u <?php if($v['default']=="1"){echo "u-act"; $address_id = $v['address_id'];} ?> fl" attr_id="<?php echo $v['address_id']; ?>"><?php echo $v['consignee']; ?></div>
							<div class="a fl"><?php echo $v['province'].$v['city'].$v['address']; ?></div>
                            
							<div class="n fl">&nbsp;<?php echo $v['mobile']; ?></div>

							<div class="fl"><?php if($v['default']=="1"){echo"（默认地址）";}else{echo "";}?></div>

							<div class="fr">
								<a style="cursor:pointer;" class="s del_address" arrr_id="<?php echo $v['address_id']; ?>">删除</a>
								<a style="cursor:pointer;" class="x update_address" arrr_id="<?php echo $v['address_id']; ?>">修改</a>
							</div>
						</div>
                    <?php } ?>
					    <input type="hidden" name="ajax_address_id" value="<?php echo !empty($address_id)?$address_id:"";?>" />
						<div class="x-la">
							<img src="<?php echo $pc_style; ?>img/xiala.png" alt="" />
						</div>
					</div>

				</div>

				<div class="order-box">
					<div class="address-top fix">
						<div class="fl">
							<img src="<?php echo $pc_style; ?>img/order-icon.png" alt="" />
							<span >订单信息</span>
						</div>
					</div>
					<input type="hidden" id='isPromote' value="<?php echo $_GET['isPromote']; ?>">
					<input type="hidden" id='num' value="<?php echo $_GET['num']; ?>">
					<div class="order-m">
						<div class="o-m-top fix">
							<ul>
								<li class="i">商品信息</li>
                                
								<li class="r">尺寸规格</li>
								<?php if ($_GET['isPromote'] == '2'){ ?>
                                        <li class="z">单价（人民币）</li>

									<?	}else{?>
                                            <li class="z">单价（三界石）</li>
                                        <?php }?>
								
								<li class="g">购买数量</li>
								<li class="x">小计</li>
							</ul>
						</div>
						<div class="o-m-b">
							<div class="m-b-l">
                            <?php $count_money = 0; foreach($goods as $v){ //var_dump($v)?>
                            <?php if($v['isPromote'] == '2'){ ?>
								<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/newdetails','goodsId' =>'666666','catId'=>'38']);?>"><ul class="o-lbox">
                            <?php }else{ ?>
                            	<a href="<?php echo \Yii::$app->urlManager->createUrl(['goods/details','goodsId' =>$v['goodsId'],'catId'=>$v['catId']]);?>"><ul class="o-lbox">
                            <?php }?>
								
                                    <input type="hidden" name="goods_id[]" value="<?php echo $v['goodsId']; ?>" />
                                    <input type="hidden" name="goods_num[]" value="<?php echo $v['num']; ?>" />
                                    <input type="hidden" name="skuValue[]" value="<?php echo $v['skuValue']; ?>" />
                                        <input type="hidden" name="ismutilprice[]" value="<?php echo empty($v['skuValue']) ? '0' : '1'; ?>" />
                                    <input type="hidden" name="isPromote" value="<?php echo $v['isPromote']?>" />
                                    <input type="hidden" name="activity_id" value="<?php echo empty($v['activityId']) ? '0' : $v['activityId'];?>">
									<li class="img">

										<img src="<?php echo $pic_host.$v['goodsImg']; ?>" style="width: 96px;height: 96px;" alt="" />

									</li>
									<li class="txt"><?php echo $v['goodsName']; ?></li>
									<li class="rul">
										<?php if (!empty($_GET['sku_id'])){ ?>
                                        <p><?php echo $_GET['sku_id']?></p>

									<?	}else{?>
                                            <p><?php  echo empty($v['skuInfo'])?'无':$v['skuInfo']?></p>
                                        <?php }?>
                                        <input type="hidden" name="sku[]" value="<?php echo $v['skuInfo']?>">
									</li>
									<li class="price"><?php echo $v['goodsPrice']; ?></li>
									<?php if ($_GET['isPromote'] == '2'){ ?>
                                       <li class="num"><?php echo $_GET['num']; ?></li>
										<li class="acc"><?php echo $v['goodsPrice']*$_GET['num'];$count_money+= $v['goodsPrice']*$_GET['num']; ?></li>
									<?	}else{?>
                                            <li class="num"><?php echo $v['num']; ?></li>
                                            <li class="acc"><?php echo $v['goodsPrice']*$v['num'];$count_money+= $v['goodsPrice']*$v['num']; ?></li>
                                        <?php }?>
								</ul></a>
                            <?php } ?>
								<div class="o-tbox fix">
									<ul class="fl">
										<li>运费方式：</li>
										<li>
											<select name="express" id="express">
												<option value="普通快递">普通快递</option>
												<option value="中通快递">中通快递</option>
												<option value="圆通快递">圆通快递</option>
											</select>
										</li>
										<li class="transportation">运费：<span>0.00</span></li>
									</ul>
									<ul class="fr">
										<li>订单合计（含运费）</li>
										<li class="o-t"><?php echo $count_money; ?></li>
									</ul>
								</div>

								<div class="o-bbox fix">
									<div class="fr">
										<div class="tot-m">
											<span>应付总额：</span>
											<input type="hidden" id="payPrice" value="<?php echo $count_money; ?>">
											<span class="tot"><?php echo $count_money; ?></span>
											<?php if ($_GET['isPromote'] == '2'){ ?>
		                                       <span>人民币</span>
											<?	}else{?>
		                                           <span>三界石</span>
		                                    <?php }?>
											
										</div>
										<div class="o-box-mid">
<!--											<p>-->
<!--												地址：-->
<!--												<span>北京市西城区西直门南小街国英1号512 </span> 收货人：-->
<!--												<span>杨树林</span> 电话：-->
<!--												<span class="end">1888888888</span>-->
<!--											</p>-->
										</div>
										<div class="fr" id="found_order">
											<button>提交订单</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="height:20px;"></div>
			</div>
		</div>

		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
		<script>

			$(function() {
				//修改添加收货地址
				$('.address-top .fr').click(function() {
					$('.cmp-mark').show();
				})
				$('.cancel-btn').click(function() {
					$('.cmp-mark,.cmp-mark1').hide();
				})

				$('.a-m-b .x').click(function() {
					$('.cmp-mark1').show();
				})

				//tabs的切换
				$('.a-m-b .u').click(function() {
                    $("input[name='ajax_address_id']").val($(this).attr("attr_id"));
					$('.a-m-b .u').removeClass('u-act');
					$(this).addClass('u-act');
                    /**$.ajax({
                        type:'POST',
                        data:'address_id='+$(this).attr("attr_id"),
                        dataType:'json',
                        url:'<?php echo Yii::$app->urlManager->createUrl('order/set_default_address');?>',
                        success:function(data){
                             if(data.errno==0){
                                alert(data.error);
                             }else{
                                alert(data.error);
                             }
                        },
                    });**/
				})


				//判断证
			
			    function regName(_this,reg_type){	
			    	// var reg=/^[\u4e00-\u9fa5]{2,6}$/;
			    	var reg=/[a-zA-Z0-9_\u4e00-\u9fa5]{1,24}/;
					if(_this.val()==''){
						if(reg_type=='update'){
							$('.error_name_update').show();
						}else{
							$('.error_name').show();
						}
						return false;
					}else if(!reg.test(_this.val())){
						if(reg_type=='update'){
							$('.error_name_update').show();
						}else{
							$('.error_name').show();
						}
						return false;
					}else{
						if(reg_type=='update'){
							$('.error_name_update').hide();
						}else{
							$('.error_name').hide();
						}
						return true;
					}
				}
				function regPhone(_this,reg_type){
					var regphone=/^0?(13|15|17|18|14|19)[0-9]{9}$/;
					if(_this.val()==''){
						if(reg_type=='update'){
							$('.error_phone_update').show();
						}else{
							$('.error_phone').show();
						}
						return false;
					}else if(!regphone.test(_this.val())){
						if(reg_type=='update'){
							$('.error_phone_update').show();
						}else{
							$('.error_phone').show();
						}
						return false;
					}else{
						if(reg_type=='update'){
							$('.error_phone_update').hide();
						}else{
							$('.error_phone').hide();
						}
						return true;
					}
				}

				function regAddress(_this,reg_type){
					var regphone=/[a-zA-Z0-9_\u4e00-\u9fa5]{1,80}/;
					if(_this.val()==''){
						if(reg_type=='update'){
							$('.error_address_update').show();
						}else{
							$('.error_address').show();
						}
						return false;
					}else if(!regphone.test(_this.val())){
						if(reg_type=='update'){
							$('.error_address_update').show();
						}else{
							$('.error_address').show();
						}
						return false;
					}else{
						if(reg_type=='update'){
							$('.error_address_update').hide();
						}else{
							$('.error_address').hide();
						}
						return true;
					}
				}

				$('.user_name').blur(function(){
					if($(this).attr("attr_type") =="update"){
						regName($(this),"update");
					}else{
						regName($(this),"add");
					}
				});
				$('.user_phone').blur(function(){
					if($(this).attr("attr_type") =="update"){
						regPhone($(this),"update");
					}else{
						regPhone($(this),"add");
					}
				});
				$('.user_address').blur(function(){
					if($(this).attr("attr_type") =="update"){
						regAddress($(this),"update");
					}else{
						regAddress($(this),"add");
					}
				});

			
				//下拉高度
                var h =  $('.address-main').height();
                if( h >= 150 ){
                   $('.address-main').css({'height':'150px','overflow':'hidden'}) ;
                };           


				$('.x-la').click(function() {
					var h = $('.address-main').height();
					if(h<=150){
                         $('.address-main').css({height:"auto"})
					}else{
						$('.address-main').css({
							height:"150px"
						}, 600)
					}
				})

                $('#found_order').bind("click",function(){
                    var address_id = $("input[name='ajax_address_id']").val();
//                  console.log(address_id);
                    if(address_id==''){
                        alert("您还没有选择收货地址！");
                        return false;
                    };
                    $("#found_order").find("button").attr("disabled","disabled");
                	$("#found_order").find("button").text("提交中..");
                    var shippingName = $('#express option:selected').val();
                    
                    var goodsId = "";
                    $("input[name='goods_id[]']").each(function(index,item){
                        goodsId += $(this).val()+',';
                    });
                    goodsId = goodsId.substring(0,goodsId.length-1);
                    promote = $("#isPromote").val();
                    if(promote == '2'){
                    	goodsNumber = $("#num").val();
                    }else{
                    	var goodsNumber = "";
	                    $("input[name='goods_num[]']").each(function(index,item){
	                        goodsNumber += $(this).val()+',';
	                    });
	                    goodsNumber = goodsNumber.substring(0,goodsNumber.length-1);
                    }
                    
                    // alert(goodsNumber);
                    // return false;
                    var sku = "";
                    $("input[name='sku[]']").each(function(index,item){
                        sku += $(this).val()+',';
                    });
                    var skuvalues = "";
                    $("input[name='skuValue[]']").each(function(index,item){
                        skuvalues += $(this).val()+';';
                    });
                    skuvalues = skuvalues.substring(0,skuvalues.length-1);
                   
                    var ismutilprice = "";
                    $("input[name='ismutilprice[]']").each(function(index,item){
                        ismutilprice += $(this).val()+',';
                    });
                    ismutilprice = ismutilprice.substring(0,ismutilprice.length-1);
                    var isPromote = $("input[name='isPromote']").val();
                    var payPrice = $("#payPrice").val();

                    var activity_id = $("input[name='activity_id']").val();
                    sku = sku.substring(0,sku.length-1);
                    var postscript = "附言为空";
                    <?php if(!empty($_GET['sku_id'])){ ?>
                    var sku = "<?php echo $_GET['sku_id'] ?>";
                    skuvalues =  "<?php echo $_GET['sku_value'] ?>";
                    skuvalues = skuvalues.substring(0,skuvalues.length-1);
                    ismutilprice = "<?php echo empty($_GET['sku_value']) ? '0' : '1'; ?>"
                    <?php }else { ?>
//                    var sku = sku;
//                    var skuValue = "2";
                    <?php }?>
                    var userCode = "0";
                    $.ajax({
                        type:'POST',
                        data:'shippingName='+shippingName+'&address_id='+address_id+'&goodsId='+goodsId+'&goodsNumber='+goodsNumber+'&postscript='+postscript+'&skuValue='+skuvalues+'&skuId='+sku+'&userCode='+userCode+'&isPromote='+isPromote+'&activity_id='+activity_id+'&ismutilprice='+ismutilprice+'&payPrice='+payPrice,
                        dataType:'json',
                        url:'<?php echo Yii::$app->urlManager->createUrl('order/order');?>',
                        success:function(data){
                             if(data.errorCode==0){
                                alert("订单创建成功！");
                                 $("#found_order").find("button").removeAttr("disabled");
                                $("#found_order").text("提交订单");
								location.href= "<?php echo Yii::$app->urlManager->createUrl('order/pay_order');?>?order_sn="+data.data[0].orderNum+"&money="+data.data[0].orderAmount+"&isPromote="+isPromote;
                             }else{
                                alert(data.message);
                             }
                        }
//                        error:function() {
//                            lert("网络繁忙，请稍后再试");
//                        }
                    });
                })
				//获取城市以及城市的第一个区县
                $('select[name="province"]').change(function(e){
                   var val = $(this).children('option:selected').val();
                   var get_type = $(this).attr("attr");
                   $.ajax({
                        url: "<?php echo Yii::$app->urlManager->createUrl('order/get_location');?>",
                        data:{parent_id:val,parent_type:'province'},
                        type: "post",
                        dataType:'json',
                        success: function (data) {
                           if(data.errno=='0'){
                                var html = '';
                                $.each(data.data,function(i){
            				        html += "<option value='"+this.cityid+"'>"+this.city+"</option>";
                                });
								//添加第一个的区县
								var area_html = '';
								$.each(data.area,function(i){
            				        area_html += "<option value='"+this.areaid+"'>"+this.area+"</option>";
                                });
                                if(get_type =="update"){
                                    $('#update_city').html(html);
                                    $('#update_district').html(area_html);
                                }else{
                                    $('#city').html(html);
                                    $('#district').html(area_html);
                                }
                            }else{
                                alert(data.error);
                            }
                        },
                        error:function(error){
                            alert("error!");    
                        }
                    });
                })
                $('#city').change(function(e){
                   var val = $(this).children('option:selected').val();
                   var get_type = $(this).attr("attr");
                   $.ajax({
                        url: "<?php echo Yii::$app->urlManager->createUrl('order/get_location');?>",
                        data:{parent_id:val,parent_type:'city'},
                        type: "post",
                        dataType:'json',
                        success: function (data) {
                           if(data.errno=='0'){
							    //添加城市
                                var html = '';
                                $.each(data.data,function(i){
            				        html += "<option value='"+this.areaid+"'>"+this.area+"</option>";
                                });
                                if(get_type =="update"){
                                    $('#update_district').html(html);
                                }else{
                                    $('#district').html(html);
                                }
                                
                            }else{
                                alert(data.error);
                            }
                        },
                        error:function(error){
                            alert("error!");    
                        }
                    });
                })
                //添加收获地址
                $('.btn-addaddress').click(function(){
                    var form_ajax = $('.addaddress').serialize();
                    if(regName( $("input[name='consignee']"),"add")==false){
                        return false;
                    }
                    if(regPhone( $("input[name='mobile']"),"add")==false){
                        return false;
                    }
                     if(regAddress( $("input[name='address']"),"add")==false){
                        return false;
                    }
                    console.log(form_ajax);
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "<?php echo Yii::$app->urlManager->createUrl('order/addaddress');?>",
                        data: form_ajax,
                        success: function (result) {
                           if (result.errno ==0)
                			{
                			    /**var html = '<div class="a-m-b fix">';
							    html + = '<div class="u  fl" attr_id="">'+$("input[name='consignee']").val+'</div>';
							    html + = '<div class="a fl"></div>';
							    html + = '<div class="n fl">&nbsp;'+$("input[name='tel']").val+'</div>';
							    html + = '<div class="fl">（默认地址）</div>';
							    html + = '<div class="fr">';
							    html + = '	<a style="cursor:pointer;" class="s del_address" arrr_id=">删除</a>';
							    html + = '	<a style="cursor:pointer;" class="x update_address" arrr_id="">修改</a>';
							    html + = '</div>';
						        html + = '</div>';
                                $(".address-main").append(html);**/
                				alert(result.error);
                				location.reload();
                			} else {
                				alert(result.error);
                			}
                        },
                        error: function(data) {
                            alert("error!");
                        }
                   });
                });
				// 获取修改的收获地址
				$('.update_address').click(function(){
					$.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "<?php echo Yii::$app->urlManager->createUrl('order/getaddressbyid');?>",
                        data: {address_id:$(this).attr("arrr_id")},
                        success: function (result) {
                        	console.log(result);
                        	//return false;
                           if (result.errno ==0)
                			{
                			    //修改城市list
                			    var city_html = '';
                                $.each(result.city_list,function(i){
            				        city_html += "<option value='"+this.cityid+"'>"+this.city+"</option>";
                                });
                                $('#update_city').html(city_html);
                			    //修改地区list
                			    var area_html = '';
                                $.each(result.area_list,function(i){
            				        area_html += "<option value='"+this.areaid+"'>"+this.area+"</option>";
                                });
                                $('#update_district').html(area_html);
                                
                				$(".updateaddress input[name='consignee']").val(result.data.consignee);
                                $(".updateaddress input[name='mobile']").val(result.data.mobile);
                                $(".updateaddress select[name='province']").find("option[value='"+result.data.province+"']").attr("selected",true);
                                $(".updateaddress select[name='city']").find("option[value='"+result.data.city+"']").attr("selected",true);
                                $(".updateaddress select[name='district']").find("option[value='"+result.data.district+"']").attr("selected",true);
                                $(".updateaddress input[name='address']").val(result.data.address);
                                $(".updateaddress input[name='address_id']").val(result.data.address_id);
                                //console.log(result.data.default);
                              if(result.data.default=='1'){
                                  $(".updateaddress input[name='default']").attr("checked",'true');
                              }else{
                                  $(".updateaddress input[name='default']").removeAttr("checked");
								}
	                			} else {
	                				alert(result.error);
	                			}
                        }
                   });
				})
                //修改收获地址
                $('.btn-updateaddress').click(function(){
                    var form_ajax = $('.updateaddress').serialize();
                    if(regName( $("#update_consignee"),"update")==false){
                        return false;
                    }
                    if(regPhone( $("#update_mobile"),"update")==false){
                        return false;
                    }
                    if(regAddress( $("#update_address"),"update")==false){
                        return false;
                    }
                    //console.log(form_ajax);
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "<?php echo Yii::$app->urlManager->createUrl('order/updateaddress');?>",
                        data: form_ajax,
                        success: function (result) {
                           if (result.errno ==0)
                			{
                				alert(result.error);
                				location.reload();
                			} else {
                				alert(result.error);
                			}
                        },
                        error: function(data) {
                            alert("error!");
                        }
                   });
                });
                $(".del_address").click(function(){
                     $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "<?php echo Yii::$app->urlManager->createUrl('order/deladdress');?>",
                        data: {address_id:$(this).attr("arrr_id")},
                        success: function (result) {
                           if (result.errno ==0)
                			{
                				alert(result.error);
                				location.reload();
                			} else {
                				alert(result.error);
                			}
                        },
                        error: function(data) {
                            alert("error!");
                        }
                   });
                });
			})
		</script>
	</body>

</html>