<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>账户设置-收货地址</title>
	<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/accountsetting.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/centerheader.css"/>
</head>
<body>
	<div class="warp">
		<!--头部用户导航-->
		
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
			<div class="super_Search">
			<div class="Search" href="">
                <a href="<?php echo Yii::$app->urlManager->createUrl('index/index')?>"><img src="<?php echo $pc_style; ?>img/logo.png"/>	</a>
			<!--<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
			<input type="button" class="suoSou" id="" value="搜索" />
			<a class="shopping_cart_icon">
				 <img src="../../img/gouwuche.png"/> 我的购物车（ <sapn> 0 </sapn> ）
			</a>
			<div class="Text">
				<a href="">秋冬连衣裙</a>
				<a href="">耐克跑步鞋</a>
				<a href="">婴儿抱被</a>
				<a href="">会员特供</a>
				<a href="">买一送二</a>
			</div>				-->
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
						<a  href="<?php echo \Yii::$app->urlManager->createUrl(['user/diamond_index']);?>"> 三界会员 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/order']);?>"> 我的订单 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountant']);?>"> 我的账房 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/myrecommend']);?>"> 我的推荐 </a>
						<a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['user/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
						<a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>
		<!--账户设置-收货地址列表-->
		<div class="account_list account_address_list">
			<div class="address_top">
				<div class="add_address">
					<img src="<?php echo $pc_style; ?>img/address-icon1.png" alt="">新增收货地址
				</div>
				<a href="#" onclick="window.history.go(-1)">返回</a>
			</div>
			<?php if(!empty($lists)){ ?>
			<div class="address_list">
				<?php foreach($lists as $val){ //var_dump($val);die;?>
				<ul>
					
					<li>
						<h3><?php echo $val->consignee?></h3>
						<p><span>收货人：</span><?php echo empty($val->consignee) ? "" : $val->consignee ;?></p>
						<p><span>地址：</span><?php echo empty($val->province && $val->city && $val->address) ? "" : $val->province .$val->city .$val->address?></p>
						<p><span>电话：</span><?php echo empty($val->mobile) ? "" : $val->mobile;?></p>
                        <p style="" ><span><?php if($val->default == 1){echo"（默认地址）";}else{echo "";}?></span></p>
						<em class="amend update_address" arrr_id="<?php echo $val->address_id?>">修改</em>

<!--                        <em class="delete_shezhi">设为默认</em>-->
						<em class="delete">删除</em>
						<input type="hidden"  id="id" name="id"value="<?php echo $val->address_id?>">
					</li>
				</ul>
				<?php }?>
			</div>
			<?php }?>
		</div>
		
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
        <div class="shadow"></div>
        <div class="box delete_box">
            <div class="box_title">
                <h3>提示</h3>
                <span><img src="<?php echo $pc_style; ?>img/close.png" alt=""></span>
            </div>
            <p class="box_content">删除该收货地址吗？</p>
            <div class="box_button">
                <span class="sure">确定</span>
                <span class="cancel">取消</span>
            </div>
        </div>
        <div class="box amendbox">
            <!--添加地址和修改地址是一样的-->
            <h3>添加地址</h3>
            <form class="addaddress" method="post" action="<?php echo \Yii::$app->urlManager->createUrl(['user/addaddress']);?>">
            <div class="amend_con">
                <ul>
                    <li>
                        <div class="text_con">
                            <span>收货人</span>
                            <input type="text" class="user_name com_pad" attr_type="add" name="consignee" placeholder="请输入用户名" />
                        </div>
                        <p class="error error_name"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">姓名格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>手机</span>
                            <input type="text" class="user_phone com_pad" attr_type="add" name="mobile" placeholder="请输入手机号" />
                        </div>
                        <p class="error error_phone"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">手机号格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>收货地址</span>
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

                        </div>
                        <p class="error"></p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span></span>
                            <input type="text" id="address2" name="address" placeholder="输入街道、门牌号等详细地址">
                        </div>
                    </li>
                </ul>

            </div>
            <div class="choose_default">
                <label for="choose_default"><input id="choose_default" value="1" name="default" type="checkbox" >设为默认地址</label>
            </div>
            <div class="box_button">
                <input class="btn-addaddress" type="submit" id="btn" value="添加">
                <span class="cancel">取消</span>
            </div>
            </form>
        </div>

        <div class="box amendbox1">
            <!--添加地址和修改地址是一样的-->
            <h3>修改地址</h3>
            <form class="updateaddress" >
            <div class="amend_con">

                <ul>
                    <li>
                        <div class="text_con">
                            <span>收货人</span>
                           <input type="text" class="user_name" name="consignee" attr_type="update" id="update_consignee" placeholder="请输入用户名" />
                        </div>
                        <p class="error error_name"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">姓名格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>手机</span>
                            <input type="text" class="user_phone" name="mobile" attr_type="update" id="update_mobile" placeholder="请输入手机号" />
                        </div>
                        <p class="error error_phone"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">手机号格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>收货地址</span>
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

                        </div>
                        <p class="error"></p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span></span>
                            <input type="text" id="address2" name="address" placeholder="输入街道、门牌号等详细地址">
                            <input type="hidden" name="address_id" placeholder="" />
                        </div>
                    </li>
                </ul>
            </div>
            <div class="choose_default">
                <label for="choose_default">
                <input id="choose_default" name="default" value="1" type="checkbox">设为默认地址</label>
            </div>
            </form>
            <div class="box_button">
                <input class="btn-updateaddress" type="submit" id="btn" value="修改">
                <span class="cancel">取消</span>
            </div>
        </div>

	</div>
	<script type="text/javascript" src="<?php echo $pc_style;?>js/lib/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $pc_style;?>js/lib/common.js"></script>
	<script src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
    <script type="text/javascript">

    // 正则验证
    function regName(_this){
        var reg=/^[\u4e00-\u9fa5]/;
        if(_this.val()==''){
            $('.error_name').css({visibility:"visible"});
            return false;
        }else if(!reg.test(_this.val())){
            $('.error_name').css({visibility:"visible"});
            return false;
        }else{
            $('.error_name').css({visibility:"hidden"});
            return true;
        }
    }
    function regPhone(_this){
        var regphone=/^0?(13|15|17|18|14|19)[0-9]{9}$/;
        if(_this.val()==''){
            $('.error_phone').css({visibility:"visible"});
            return false;
        }else if(!regphone.test(_this.val())){
            $('.error_phone').css({visibility:"visible"});
            return false;
        }else{
            $('.error_phone').css({visibility:"hidden"});
            return true;
        }
    }

    $('#consignee').blur(function(){
        regName($(this));
    });
    $('#mobile').blur(function(){
        regPhone($(this));
    });
    
     //  光标失去判断收货人姓名是否超过25字符
     $('.user_name').blur(function(){
     	if( $('.user_name').val().length >= 25 ){
     		alert( '你输入名字超过25字符' );
     	};
     });


    //获取城市以及城市的第一个区县
                $('select[name="province"]').change(function(e){
                   var val = $(this).children('option:selected').val();
                   var get_type = $(this).attr("attr");
                   $.ajax({
                        url: "<?php echo Yii::$app->urlManager->createUrl('user/get_location');?>",
                        data:{parent_id:val,parent_type:'province'},
                        type: "post",
                        dataType:'json',
                        success: function (data) {
                             console.log(data);
                           if(data.errno=='0'){
                            //console.log(data.errno);
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
                        url: "<?php echo Yii::$app->urlManager->createUrl('user/get_location');?>",
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
                // $('.btn-addaddress').click(function(){
                //     var form_ajax = $('.addaddress').serialize();

                //     if(regName( $("input[name='consignee']"),"add")==false){
                //         return false;
                //     }
                //     if(regPhone( $("input[name='mobile']"),"add")==false){
                //         return false;
                //     }
                //     $.ajax({
                //         type: "get",
                //         dataType: "jsonp",
                //         url: "<?php echo Yii::$app->urlManager->createUrl('user/addaddress');?>",
                //         data: form_ajax,
                //         success: function (result) {
                //            if (result.errno ==0)
                //             {
                //                 alert(result.error);
                //                 location.reload();
                //             } else {
                //                 alert(result.error);
                //             }
                //         },
                //         error: function(data) {
                //             alert("error!");
                //         }
                //    });
                // });
                // 获取修改的收获地址
                $('.update_address').click(function(){
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "<?php echo Yii::$app->urlManager->createUrl('user/getaddressbyid');?>",
                        data: {address_id:$(this).attr("arrr_id")},
                        success: function (result) {
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
                                if(result.data.default== '1'){

                                    $(".updateaddress input[name='default']").attr("checked",'true');
                                }else{
                                    //alert("asdf");
                                    $(".updateaddress input[name='default']").removeAttr("checked");
                                }
                            } else {
                                alert(result.error);
                            }
                        },
                   });
                })
                //修改收货地址
                $('.btn-updateaddress').click(function(){
                    var form_ajax = $('.updateaddress').serialize();
                    if(regName( $("#update_consignee"),"update")==false){
                        return false;
                    }
                    if(regPhone( $("#update_mobile"),"update")==false){
                        return false;
                    }
                    //console.log(form_ajax);return false;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "<?php echo Yii::$app->urlManager->createUrl('user/updateaddress');?>",
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






    //添加收货地址

    /*对地址进行修改和删除的操作*/
		var deleteAddressNum;//用来存放地址位置的变量
		 $('.delete').click(function(event) {
		 	var a = $(this).parent().children("#id").attr("value");
		 		console.log(a);
		 	
		 	$('.shadow').show(10, function() {
		 		
				$(".sure").click(function(){
					
					
		$.ajax({
			url:"<?php echo Url::toRoute('user/deladdress')?>",
			data:{address_id:a},
			type:"POST",
			success:function(data){
				alert("删除成功");
                location.href="<?php echo Url::toRoute("user/addressmanagement");?>";
			},
			error:function(){
				alert("删除失败");
			}
		});
	 });
		 		$('.delete_box').show();
				/*保存当前地址的index值*/
		 		//deleteAddressNum=$(this).parent().index();
		 	});
		 });
		 $('.add_address').click(function(event) {
		 	$('.shadow').show(10,function() {
		 		
		 		$('.amendbox').show();
		 	});
		 });
    $('.amend').click(function(event) {
        $('.shadow').show(10,function() {

            $('.amendbox1').show();
        });
    });
		 $('.cancel,.box_title span').click(function(event) {
		 	$('.box').hide(10, function() {
		 		$('.shadow').hide();
		 	});
		 });
		/*点击删除盒子的确定按钮则删除当前地址*/
		$('.delete_box .sure').click(function(event) {
			$('.address_list ul li').eq(deleteAddressNum).remove();
			$('.box').hide(10, function() {
				$('.shadow').hide();
			});
		});

		/*点击修改或者新增盒子的确定按钮则新增或者修改地址*/
		$('.amendbox .sure').click(function(event) {
			console.log('要新增或修改地址啦');
			$('.box').hide(10, function() {
				$('.shadow').hide();
			});
		});

		/*这里是select地址选择的change事件*/
		$('.text_con select').change(function(event) {
			//console.log('select值改变了哟');
		});
	</script>
</body>
</html>