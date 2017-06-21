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
			<?php if(!empty($lists)){?>
			<div class="address_list">
				<?php foreach($lists as $val){?>
				<ul>
					
					<li>
						<h3><?php echo $val->consignee?></h3>
						<p><span>收货人：</span><?php echo $val->consignee?></p>
						<p><span>地址：</span><?php echo $val->province?><?php echo $val->city?><?php echo $val->area?><?php echo $val->address?></p>
						<p><span>电话：</span><?php echo $val->mobile?></p>
						<em class="amend">修改</em>

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
            <div class="amend_con">
                <ul>
                    <li>
                        <div class="text_con">
                            <span>收货人</span>
                            <input type="text" id="consignee" placeholder="输入正确的收货人">
                        </div>
                        <p class="error error_name"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">姓名格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>手机</span>
                            <input type="text" id="mobile" placeholder="输入正确的手机号">
                        </div>
                        <p class="error error_phone"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">手机号格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>收货地址</span>
                            <select name="province" id="provinceid" onchange="get(this)">
                                <option value="">选择省份</option>
                                <?php if(!empty($address1)){foreach($address1->proList as $key=>$v){ ?>
                                <option value="<?php echo $v->provinceid?>" id="proid"><?php echo $v->province?></option>
                            <?php } } ?>
                            </select>
                            <select name="city" id="city">
                                <option value="0">选择城市</option>

                            </select>
                            <select name="district" id="area">
                                <option value="0">选择县城</option>

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
                <label for="choose_default"><input id="choose_default" type="checkbox" value="1">设为默认地址</label>
            </div>
            <div class="box_button">
                <input class="sure" type="submit" id="btn" value="确定">
                <span class="cancel">取消</span>
            </div>
        </div>

        <div class="box amendbox1">
            <!--添加地址和修改地址是一样的-->
            <h3>修改地址</h3>
            <div class="amend_con">

                <ul>
                    <li>
                        <div class="text_con">
                            <span>收货人</span>
                            <input type="text" id="consignee" placeholder="输入正确的收货人">
                        </div>
                        <p class="error error_name"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">姓名格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>手机</span>
                            <input type="text" id="mobile" placeholder="输入正确的手机号">
                        </div>
                        <p class="error error_phone"><img src="<?php echo $pc_style; ?>img/hongdian.png" alt="">手机号格式错误</p>
                    </li>
                    <li>
                        <div class="text_con">
                            <span>收货地址</span>
                            <select name="province" id="provinceid" attr="update" onchange="get(this)">
                                <option value="">选择省份</option>
                                <?php if(!empty($address1)){foreach($address1->proList as $key=>$v){ ?>
                                    <option value="<?php echo $v->provinceid?>" id="proid"><?php echo $v->province?></option>
                                <?php } } ?>
                            </select>
                            <select name="city" id="city" attr= "update"class="up-city">
                                <option value="0">选择城市</option>

                            </select>
                            <select name="district" id="area" class="up-area">
                                <option value="0">选择县城</option>

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
                <label for="choose_default"><input id="choose_default" type="checkbox" value="1">设为默认地址</label>
            </div>
            <div class="box_button">
                <input class="sure" type="submit" id="btn" value="修改">
                <span class="cancel">取消</span>
            </div>
        </div>

	</div>
	<script type="text/javascript" src="<?php echo $pc_style;?>js/lib/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $pc_style;?>js/lib/common.js"></script>
	<script type="text/javascript">

    // 正则验证
    function regName(_this){
        var reg=/^[\u4e00-\u9fa5]{2,8}/;
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



    //添加收货地址
    $("#btn").click(function(){
        var consignee = $('#consignee').val();
        //alert(account);
        var mobile = $('#mobile').val();
        var provinceid = $('#provinceid').val();
        var city = $('#city').val();
        var area = $('#area').val();

        var address = $('#address2').val();
        if($("#choose_default").is(":checked")){
            var defaults =$('#choose_default').val();
        }else{
            var defaults = "0";
        }

        if(consignee==''||mobile==''||provinceid==''||city==''||area=='' ||address==''){
            alertmessage("输入信息不能为空！");
            return false;
        }
        $.ajax({
            url: "<?php echo Url::toRoute('user/addaddress');?>",
            type: 'post',
            data: {
                'consignee': consignee,
                'mobile': mobile,
                'provinceid': provinceid,
                'city': city,
                'area': area,
                'address': address,
                'defaults':defaults
            },
            dataType: 'json',
            success: function (data) {
                if (data.errorCode == 0) {
                    // if(!$('.success_box').is(":animated")){
                    //     $('.success_box').show(100, function() {
                    //         $('.success_box').animate({
                    //             opacity: 1,
                    //         },1000, function() {
                    //             window.setTimeout(function(){
                    //                 location.href="<?php echo Url::toRoute("useraddresslist");?>";
                    //             }, 1500)
                    //         });
                    //     });
                    // }
                     window.setTimeout(function(){
                                    location.href="<?php echo Url::toRoute("user/addressmanagement");?>";
                                }, 1500) 
                } else if (data.errorCode == -15) {
                    alertmessage("参数错误");
                }else if (data.errorCode == -2) {
                    alertmessage("请先登陆");
                    location.href="<?php echo Url::toRoute('login/login');?>";
                } else{
                    alertmessage("网络繁忙，请稍候重试");
                }
            },
            error:function(error){
                alert("error!");
            }
        });
    });
    //修改地址
//   	$(".amend").click(function(){
//   		var val = $(this).parent().children("#id").attr("value");
//   		 var consignee = $('#consignee').val();
//        //alert(account);
//        var mobile = $('#mobile').val();
//        var provinceid = $('#provinceid').val();
//        var city = $('#city').val();
//        var area = $('#area').val();
//
//        var address = $('#address2').val();
//        var defaults =$('#choose_default').val();
//        if(consignee==''||mobile==''||provinceid==''||city==''||area=='' ||address==''){
//            alertmessage("输入信息不能为空！");
//            return false;
//        }
//        $.ajax({
//            url: "<?php //echo Url::toRoute('user/update');?>//",
//            type: 'post',
//            data: {
//                'consignee': consignee,
//                'mobile': mobile,
//                'provinceid': provinceid,
//                'city': city,
//                'area': area,
//                'address': address,
//                'defaults':defaults,
//                'address_id':val
//            },
//            dataType: 'json',
//            success: function (data) {
//                if (data.errorCode == 0) {
//
//                     window.setTimeout(function(){
//                                    location.href="<?php //echo Url::toRoute("user/Addresslist");?>//";
//                                }, 1500)
//                } else if (data.errorCode == -15) {
//                    alertmessage("参数错误");
//                }else if (data.errorCode == -2) {
//                    alertmessage("请先登陆");
//                    location.href="<?php //echo Url::toRoute('login/login');?>//";
//                } else{
//                    alertmessage("网络繁忙，请稍候重试");
//                }
//            },
//            error:function(error){
//                alert("error!");
//            }
//        });
//   	})

//获得省下的市
		 function get(ts){
        var proid = $(ts).val();
             var get_type = $(ts).attr("attr");
        $.ajax({
            url:"<?php echo Url::toRoute('user/addressmanagement');?>",
            data:{'proid':proid},
            type:'get',
            dataType:'json',
            success:function(data){
                var html = '';
                $.each(data,function(){
                    html += "<option value='"+this.cityid+"'>"+this.city+"</option>";
                });
                if(get_type){
                   $('.up-city').html(html);
                }else{
                    $('#city').html(html);
                }
//                console.log(data[0].city);
//                if(data[0].city){
//                    var area = '';
//                    $.each(data.city,function(){
//                        area += "<option value='"+this.areaid+"'>"+this.area+"</option>";
//                    });
//                    $('#area').html(area);
//                }
            }
        });
    }
//    //获取城市下的地区

    $('#city').change(function(){
    	//alert("adsfasdfasdf");
        //var get_type = $(this).attr("attr");
        console.log(131232);
        var val = $(this).children('option:selected').val();
        //alert(val);
        $.ajax({
            url: "<?php echo Url::toRoute('user/addressmanagement');?>",
            data:{val:val},
            type: "get",
            dataType:'json',
            success: function (data) {
                    //alert(data);
                    var html = '';
                    $.each(data,function(){
                        html += "<option value='"+this.areaid+"'>"+this.area+"</option>";
                    });
                if(get_type){
                    $('#up-area').html(html);
                }else{
                    $('#area').html(html);
                }

            },
            error:function(data){
            	alert("错误")
            }
        });
    });
////设为默认地址
//	$(".delete_shezhi").click(function(){
//        var val = $(this).parent().children("#id").attr("value");
//        $.ajax()
//    });







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