<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="三界生活平台集购物积分商城、本地生活消费与数字资产为一体的积分商城消费平台，是在运用互联网+技术+创新金融（数字金融）的同时运用了被麦肯锡誉为第五次产业革命的区块链技术的积分消费商城平台。三界生活商城平台总部位于北京二环，由区块国际集团投资打造，并提供区块链技术支持。三界生活商城平台的所有交易信息数据全部放在区块链上，加密、不可篡改与分布式账本等这些强大属性，有效地保障消费者、创业会员、供应商、店家、服务商和代理商的巨大权益。">
		<meta name="keywords" content="积分商城|三界商城|三界本地|三界生活|区块链商城">
		<title> </title>
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" />  
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/mix.css"/>	
        <link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/shopheader.css"/>
		<script src="<?php echo $pc_style; ?>js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body style="background: #F6F6F6;"> 
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
	
	   	<!--搜索商品栏-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/top.php'); ?>
	
		<!--首页总的导航-->
		<div class="super_general_navi ">
			<!--一级菜单-->
			<div class="general_navi">
			  <a href="" class="fun_huag_act"> <img src="<?php echo $pc_style; ?>img/hanbao.png"/> &nbsp; 全部商品分类 </a>
			  <a href="" class="now_tab_red"> 首页 </a> 
			  <!--<a href="<?php echo Yii::$app->urlManager->createUrl('life/index')?>"> 三界本地 </a>-->
			  <a href="<?php echo Yii::$app->urlManager->createUrl('user/diamond_index')?>"> 三界会员 </a>
			 <!-- <a href="#"> 品牌汇 </a> -->
			  <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>" class="end_two" style="margin-right: 0;"> 分享邀请 </a>
			  <a href="<?php echo Yii::$app->urlManager->createUrl('help/shopercheck')?>" class="end_two" style="margin-right: 0;"> 商家入驻</a>
			<!--二级菜单-->
			  <ul class="Secondary" id="Secondary">
		 <?php foreach($goodscat as $v){ ?>
			  	<li> 
                  <a href=""><?php echo $v['cat_name']; ?></a>
				    
					<img src="<?php echo $pc_style; ?>img/youjiantou.png"/>
					<!--三级菜单-->
					<div class="wu" id="Level_3">
                      <?php if(!empty($v)){ unset($v['topic']);  foreach($goodscats[$v['cat_id']] as $v2){ ?>
						<dt >
							<dl>
							<a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/goodslist','catId'=>$v2['cat_id']]);?>"> <?php  echo $v2['cat_name'];?>  </a>
							</dl>
						</dt>
                        <?php  }} ?>
					</div>
			  	</li>
             <?php }?>
			  </ul>
			</div>
		</div>
		
		 
		
		<!--轮播图-->
        <div class="main_visual ">
            <div class="flicking_con">
            </div>
            <div class="main_image">
                <ul>

                    <li>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/newdetails','goodsId'=>'1',"catId"=>'72']);?>" class="img_1">
                            <img src="<?php echo $pc_style; ?>img/banner_lb_kx.jpg"/>
                        </a>
                        <!-- <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'3785',"catId"=>'3']);?>" class="img_1">
                            <img src="<?php echo $pc_style; ?>img/banner_lb_kx.jpg"/>
                        </a> -->
                    </li>
                    <li>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4149',"catId"=>'20']);?>" class="img_1">
                            <img src="<?php echo $pc_style; ?>img/shouye.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['index/suiyi']);?>" class="img_1">
                            <img src="<?php echo $pc_style; ?>img/banner_lb_kx.jpg"/>
                        </a>
                    </li>

                </ul>

                <a href="javascript:;" id="btn_prev"></a>
                <a href="javascript:;" id="btn_next"></a>
            </div>
        </div>


		<!--main_visual end-->
		
		<!--活动栏-->
		<div class="superActivity">
			<ul class="activityBar">
                <?php if(!empty($data1)) { foreach ($data1 as $values) { //var_dump($values);die;?>
			   <li> 
			   	<a href="<?php echo $values->target_url?>">
			   		 <img src="<?php echo $values->thumb?>"/>
			    </a>
			   </li>
                <?php } } ?>
		    </ul>
		</div>
		
		<!--活动专区-->
		<div class="super_lift">
			<div class="Lift">
				
				<div class="lift_img">
					<img style="padding-top: 38px;" src="<?php echo $pc_style; ?>img/hengtiao.png"/> 
					<p> 活动专区 </p>
				</div>
				
				<ol class="Lift_many">
                    <li>
                      <?php if(!empty($data17)) { foreach ($data17 as $values){ if($values->recommend_type == 1){ ?>

<!--                        <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                          <a href="<?php echo \Yii::$app->urlManager->createUrl(['activity/seconds','activity_id' =>$values->target_id]) ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                      <?php }elseif ($values->recommend_type == 4){  ?>
                          <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } }?>
                    </li>
                    
                    
                    
                    
                    <li class="Lift_four_img">
                    	<?php if(!empty($data2)) { foreach ($data2 as $values){ ?>
<!--                        <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--"> -->
                            <a href="<?php echo $values->target_url ?>"><img style="margin-bottom: 20px;" src="<?php echo $values->thumb ?>"/></a>
                        <?php } } ?> 
                    </li>
                   
                    	
                    	
                    	
                    <li class="Lift_big_img">
                       <?php if(!empty($data18)) { foreach ($data18 as $values){ if($values->recommend_type == 1){ ?>

                           <!--                        <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                           <a href="<?php echo \Yii::$app->urlManager->createUrl(['activity/seconds','activity_id' =>$values->target_id]) ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                       <?php }elseif ($values->recommend_type == 4){  ?>
                           <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                       <?php } } }?>
                    </li>

                </ol>
			</div>
		</div>
	 
		<!--自营专场-->
		<div class="super_special_proprietary">
			<div class="special_proprietary">
                <?php if(!empty($data3)) { foreach ($data3 as $values) { //var_dump($values);die;?>
<!--				<a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                    <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                <?php } } ?>
			</div>
		</div> 
			
		
		<!--一楼商品展示栏-->
	<div class="super_first_floor"> 
		<div class="outer_first_floor"> 
			
			
			
			<!--楼梯效果指示-->
			<ul class="Stairs" id="Stairs">
				  <span>家用电器</span>  
				  <span>电脑数码</span>  
				  <span>母婴用品</span>   
				  <span>图书音像</span>  
				  <span>箱包饰品</span>  
				  <span>服饰鞋袜</span>  
				  <span>个护化妆</span>  
				  <span>家居家纺</span>  
				  <span>食品酒水</span>   
				  <span>服饰鞋袜</span> 
				 <a href="#super_userNavi"><img src="<?php echo $pc_style; ?>img/shangla.png"/>顶部</a>
			</ul>
			
			
			<!--一楼商品展示栏-->
			
			<div class="first_floor">
				<h2> 1F 家用电器 </h2>
				<div class="life_electric">
					
                    <li class="a_larger_image">
                        <?php if(!empty($data11)) { foreach ($data11 as $values) { //var_dump($values);?>
<!--                        <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->

                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>
                    
                   
                    <li class="eight_diagram">
	                	<?php if(!empty($data4)) { foreach ($data4 as $values) { //var_dump($values);die;?> 
<!--						  <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
					    <?php } } ?>
                    </li>
				</div>
			</div>
		 
		
		<!--二楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 2F 电脑数码  </h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data12)) { foreach ($data12 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data5)) { foreach ($data5 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>

                        <?php } } ?>
                    </li>


                </div>
			</div>
		 
		 
		
		<!--三楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 3F 母婴用品<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data13)) { foreach ($data13 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data6)) { foreach ($data6 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
				
			</div>
		
		<!--四楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 4F 图书音像<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--> </h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data14)) { foreach ($data14 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data7)) { foreach ($data7 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
				
			</div>
	 
		
		<!--五楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 5F 箱包饰品<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--> </h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data15)) { foreach ($data15 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data8)) { foreach ($data8 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
				
			</div>
		 
		 
		
		<!--六楼商品展示栏-->
 
			<div class="first_floor">
				<h2> 6F 服饰鞋袜<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data16)) { foreach ($data16 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data9)) { foreach ($data9 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
			</div>

            <div class="first_floor">
                <h2> 7F 个护化妆<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data23)) { foreach ($data23 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data19)) { foreach ($data19 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
            </div>

            <div class="first_floor">
                <h2> 8F 家具家纺<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data24)) { foreach ($data24 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data20)) { foreach ($data20 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
            </div>

            <div class="first_floor">
                <h2> 9F 食品酒水<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data25)) { foreach ($data25 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                            </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data21)) { foreach ($data21 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
            </div>

            <div class="first_floor">
                <h2> 10F 服饰鞋袜<!--<a href="" class="more"> 更多商品 <img src="<?php echo $pc_style; ?>img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <?php if(!empty($data26)) { foreach ($data26 as $values) { //var_dump($values);?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                    <li class="eight_diagram">
                        <?php if(!empty($data22)) { foreach ($data22 as $values) { //var_dump($values);die;?>
<!--                            <a href="--><?php //echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>$values->target_id,"catId"=>$values->cat_id]);?><!--">-->
                            <a href="<?php echo $values->target_url ?>"><img src="<?php echo $values->thumb ?>"/> </a>
                        <?php } } ?>
                    </li>


                </div>
            </div>


		</div>
	</div>	
 
		
		<!--品牌汇-->
		<div class="super_brand_Remit">
			<div class="brand_remit">
				
				<div class="lift_img" style="text-align: center;">
					<img style="padding-top: 38px;" src="<?php echo $pc_style; ?>img/hengtiao.png"/> 
					<p> 品牌汇 </p>
				</div>
				
				<li class="Brand">
                    <?php if(!empty($data10)) { foreach ($data10 as $values) { //var_dump($values);die;?>
					 <a href="<?php echo $values->target_url?>">
					 	 <img src="<?php echo $values->thumb ?>"/> 
					 </a>
                    <?php } } ?>
				</li>
				
			</div>
		</div> 
		
		<!--商城公告与知识堂-->
		<div class="super_price_cost">
			<div class="price_cost">
				<!--商城公告-->
				<div class="announce">
					<h4> 商城公告 </h4>
					<ul class="announce_ul">
						<li> <a href="<?php echo Yii::$app->urlManager->createUrl('announce/tip')?>"> 【公告】区块链商城项目三界生活震撼上线！</a>
							<em> 2016-10-12</em>
						</li>
						<li> <a href="<?php echo Yii::$app->urlManager->createUrl('announce/mutual')?>"> 【公告】三界生活与三界链、盈泰网</a>
							<em> 2016-10-12</em>
						</li>
						<li> <a href="<?php echo Yii::$app->urlManager->createUrl('help/getsyscode')?>"> 【专栏】新手上路 </a>
							<em> 2016-10-12</em>
						</li>
						<li> <a href="<?php echo Yii::$app->urlManager->createUrl('help/share')?>"> 【专题】分享邀请</a>
							<em> 2016-10-12</em>
						</li>
						<!--<li> <a href=""> 【公布】走进网易考拉海购 日本站入选值友名单</a> 
							<em> 2016-10-12</em>
						</li>-->
					</ul>
				</div>
				<!--知识堂-->
				<div class="knowledge">
					<h4> 知识堂</h4>
					<ul class="knowledge_ul">
						<li id="explain1"> 
							<img src="<?php echo $pc_style; ?>img/zhishitang.jpg"/>
							<a href=""> 关于装修风格与家装选购推荐 </a>
						</li>
						<dl>
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/qukuailian')?>"> 什么是区块链 </a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/exchange')?>"> 兑换流程 </a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/consume')?>"> 消费流程 </a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/sanjieshi')?>"> 三界石 </a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/sanjiebao')?>"> 三界宝  </a>
						</dl>
					</ul>
				</div>
			</div>
		</div>
		<!--尾部部分-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/jquery.event.drag-1.5.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/jquery.touchSlider.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script> 
		<script type="text/javascript">
	 $(document).ready(function(){
			var ali=$(".main_image").find("ul").find("li");
			var oaa="";
			$.each(ali, function() {
				oaa+="<a href=''></a>"    
			});
			$(".flicking_con").html(oaa); 
      //活动栏代理商margin-right去掉
      $('.activityBar li').eq(3).css('margin-right',0);
      
       //楼层小图从第五个到第八个加margin-top 
       var obj=$('.eight_diagram');
       $.each(obj, function() {
   		$(this).find('a').eq(4).css('margin-top','20px');
   		$(this).find('a').eq(5).css('margin-top','20px');
   		$(this).find('a').eq(6).css('margin-top','20px');
   		$(this).find('a').eq(7).css('margin-top','20px');
       });
       
        //楼层小图从第五个到第八个加margin-top
       $('.Lift_four_img a').eq(2).css('margin-top','20px');
       $('.Lift_four_img a').eq(3).css('margin-top','20px');
       
        //品牌汇margin-right
        $('.Brand a').eq(5).css('margin-right','0');
        $('.Brand a').eq(11).css('margin-right','0');
        $('.Brand a').eq(17).css('margin-right','0');
 		

		//轮播banner
           $(document).ready(function(){
				$(".main_visual").hover(function(){
					$("#btn_prev,#btn_next").fadeIn()
				},function(){
					$("#btn_prev,#btn_next").fadeOut()
				});
				$dragBln = false;
				
				$(".main_image").touchSlider({
					flexible : true,
					speed : 200,
					btn_prev : $("#btn_prev"),
					btn_next : $("#btn_next"),
					paging : $(".flicking_con a"),
					counter : function (e){
						$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
					}
				});
				
//				$(".main_image").bind("mousedown", function() {
//					$dragBln = false;
//				});
//
//				$(".main_image").bind("dragstart", function() {
//					$dragBln = true;
//				});
//
//				$(".main_image a").click(function(){
//					if($dragBln) {
//						return false;
//					}
//				});
				
				timer = setInterval(function(){
					$("#btn_next").click();
				}, 3000);
				
				$(".main_visual").hover(function(){
					clearInterval(timer);
				},function(){
					timer = setInterval(function(){
						$("#btn_next").click();
					},3000);
				});
				
				$(".main_image").bind("touchstart",function(){
					clearInterval(timer);
				}).bind("touchend", function(){
					timer = setInterval(function(){
						$("#btn_next").click();
					}, 3000);
				});
				
			});
			
			
				var Secondary_Li = $("#Secondary li");
				var Secondary = $("#Secondary");
				var level_3 = $("#Secondary div");
				var iNum = 0;
				for( var i = 0; i < Secondary_Li.length; i++ ){
					Secondary_Li[i].index = i;
					Secondary_Li[i].onmousemove = function(){
//						$("#Secondary").css("display","block");
						iNum = $(this).index();
						$(this).addClass('backFff').siblings().removeClass('backFff');
						for( var k = 0; k < level_3.length; k++ ){
							level_3[k].className = 'wu';
						};
						level_3[iNum].className = 'you';
					    level_3[iNum].onmouseleave = function(){
//					    	$("#Secondary").css("display","none");
					    	level_3[iNum].className = 'wu';
					    	Secondary_Li[iNum].className = '';
					    };
					    Secondary_Li[iNum].onmouseleave = function(){
//					    	$("#Secondary").css("display","none");
					    	level_3[iNum].className = 'wu';
					    	Secondary_Li[iNum].className = '';
					    };
					};
				};
 			  
 			  
			   
})   ;




		</script>
		<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"left","bdTop":"99.5"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	</body>
</html>
