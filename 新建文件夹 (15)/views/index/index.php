<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="三界生活平台集购物积分商城、本地生活消费与数字资产为一体的积分商城消费平台，是在运用互联网+技术+创新金融（数字金融）的同时运用了被麦肯锡誉为第五次产业革命的区块链技术的积分消费商城平台。三界生活商城平台总部位于北京二环，由区块国际集团投资打造，并提供区块链技术支持。三界生活商城平台的所有交易信息数据全部放在区块链上，加密、不可篡改与分布式账本等这些强大属性，有效地保障消费者、创业会员、供应商、店家、服务商和代理商的巨大权益。">
		<meta name="keywords" content="积分商城|三界商城|三界本地|三界生活|区块链商城">
		<title> 三界生活</title>
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
			  <a href="<?php echo Yii::$app->urlManager->createUrl('user/diamond_index')?>"> 会员中心 </a>
			 <!-- <a href="#"> 品牌汇 </a> -->
			  <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>" class="end_two" style="margin-right: 0;"></a>
			  <a href="<?php echo Yii::$app->urlManager->createUrl('help/shopercheck')?>" class="end_two" style="margin-right: 0;"></a>
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
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['index/suiyi']);?>" class="img_1">
                            <img src="<?php echo $pc_style; ?>img/banner.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4149',"catId"=>'20']);?>" class="img_1">
                            <img src="<?php echo $pc_style; ?>img/shouye.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'3785',"catId"=>'3']);?>" class="img_1">
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
                <li> 
				   	<a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4149',"catId"=>'20']);?>">
				   		 <img src="<?php echo $pc_style; ?>img/index/jm_01.jpg">
				    </a>
			   </li>
                <li> 
				   	<a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4167',"catId"=>'20']);?>">
				   		 <img src="<?php echo $pc_style; ?>img/index/jm_02.jpg">
				    </a>
			   </li>
                <li> 
				   	<a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'607',"catId"=>'20']);?>">
				   		 <img src="<?php echo $pc_style; ?>img/index/jm_03.jpg">
				    </a>
			   </li>
                <li style="margin-right: 0px;"> 
				   	<a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1153',"catId"=>'20']);?>">
				   		 <img src="<?php echo $pc_style; ?>img/index/jm_04.jpg">
				    </a>
			   </li>
            </ul>
		</div>
		
		<!--活动专区-->
		<div class="super_lift">
			<div class="Lift">
				
				<div class="lift_img">
					<img style="padding-top: 38px;" src="../../resources/img/hengtiao.png"> 
					<p> 活动专区 </p>
				</div>
				
				<ol class="Lift_many">
                    <li>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4167',"catId"=>'20']);?>">
                        	<img src="<?php echo $pc_style; ?>img/jg_da.png"> 
                        </a>
                    </li>
                    <li class="Lift_four_img">
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'584',"catId"=>'36']);?>">
                        	<img style="margin-bottom: 20px;" src="<?php echo $pc_style; ?>img/inhd1.png">
                        </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'104',"catId"=>'123']);?>">
                            <img style="margin-bottom: 20px;" src="<?php echo $pc_style; ?>img/inhd2.png">
                        </a>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4149',"catId"=>'20']);?>" style="margin-top: 20px;">
                        <img style="margin-bottom: 20px;" src="<?php echo $pc_style; ?>img/inhd3.png">
                        	
                        </a>
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4038',"catId"=>'35']);?>" style="margin-top: 20px;"><img style="margin-bottom: 20px;" src="<?php echo $pc_style; ?>img/inhd4.png"></a>
                         
                    </li>
                    <li class="Lift_big_img">
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4166',"catId"=>'20']);?>">
                        	<img src="<?php echo $pc_style; ?>img/hd_06.png"> 
                        </a>
                    </li>
                </ol>
			</div>
		</div>
	 
		<!--自营专场-->
		<div class="super_special_proprietary">
			<div class="special_proprietary"> 
                    <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4167',"catId"=>'20']);?>"><img src="<?php echo $pc_style; ?>img/index/ggbanner.jpg"> </a>
                			</div>
		</div>
			
		
		<!--一楼商品展示栏-->
	<div class="super_first_floor"> 
		<div class="outer_first_floor"> 
			
			
			
			<!--楼梯效果指示-->
			<ul class="Stairs" id="Stairs" style="top: 200px;">
				  <span>家用电器</span>  
				  <span>电脑数码</span>  
				  <span>母婴用品</span>   
				  <span>图书音像</span>  
				  <span>箱包饰品</span>  
				  <span>服饰鞋袜</span>  
				  <span>个护化妆</span>  
				  <span>家居家纺</span>  
				  <span>食品酒水</span>   
				  <span>汽车户外</span> 
				 <a href="#super_userNavi"><img src="../../resources/img/shangla.png">顶部</a>
			</ul>
			
			
			<!--一楼商品展示栏-->
			
			<div class="first_floor">
				<h2> 1F 家用电器 </h2>
				<div class="life_electric">
					
                    <li class="a_larger_image">
                        <a href="###">
                        	<img src="<?php echo $pc_style; ?>img/index/jydq_01.jpg"> 
                        </a>
                    </li>
                    
                   
                    <li class="eight_diagram"> 

                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4503',"catId"=>'2']);?>"><img src="<?php echo $pc_style; ?>img/index/jydq_02.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4314',"catId"=>'2']);?>"><img src="<?php echo $pc_style; ?>img/index/jydq_03.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'3527',"catId"=>'3']);?>"><img src="<?php echo $pc_style; ?>img/index/jydq_04.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'3789',"catId"=>'3']);?>"><img src="<?php echo $pc_style; ?>img/index/jydq_05.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4257',"catId"=>'4']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jydq_06.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363055',"catId"=>'4']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jydq_07.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363052',"catId"=>'3']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jydq_08.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363053',"catId"=>'3']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jydq_09.jpg"> </a>
					</li>
				</div>
			</div>
		 
		
		<!--二楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 2F 电脑数码  </h2>
                <div class="life_electric">

                    <li class="a_larger_image"> 
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/dnsm_01.jpg"> </a>
                    </li>


                    <li class="eight_diagram"> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363078',"catId"=>'20']);?>"><img src="<?php echo $pc_style; ?>img/index/dnsm_02.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4624',"catId"=>'20']);?>"><img src="<?php echo $pc_style; ?>img/index/dnsm_03.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363067',"catId"=>'123']);?>"><img src="<?php echo $pc_style; ?>img/index/dnsm_04.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363072',"catId"=>'139']);?>"><img src="<?php echo $pc_style; ?>img/index/dnsm_05.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363070',"catId"=>'139']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/dnsm_06.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363071',"catId"=>'139']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/dnsm_07.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363075',"catId"=>'20']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/dnsm_08.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363083',"catId"=>'141']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/dnsm_09.jpg"> </a> 
                    </li>


                </div>
			</div>
		 
		 
		
		<!--三楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 3F 母婴用品 </h2>
                <div class="life_electric">

                    <li class="a_larger_image"> 
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/myyp_01.jpg"> </a>
                    </li>


                    <li class="eight_diagram"> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363090',"catId"=>'30']);?>"><img src="<?php echo $pc_style; ?>img/index/myyp_02.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363091',"catId"=>'30']);?>"><img src="<?php echo $pc_style; ?>img/index/myyp_03.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363097',"catId"=>'4']);?>"><img src="<?php echo $pc_style; ?>img/index/myyp_04.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363099',"catId"=>'4']);?>"><img src="<?php echo $pc_style; ?>img/index/myyp_05.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363092',"catId"=>'30']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/myyp_06.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363106',"catId"=>'140']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/myyp_07.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363088',"catId"=>'28']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/myyp_08.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363093',"catId"=>'30']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/myyp_09.jpg"> </a>
                    </li>


                </div>
				
			</div>
		
		<!--四楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 4F 图书音像 </h2>
                <div class="life_electric">

                    <li class="a_larger_image"> 
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/tsyx_01.jpg"> </a>
                    </li>


                    <li class="eight_diagram"> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363134',"catId"=>'122']);?>"><img src="<?php echo $pc_style; ?>img/index/tsyx_02.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363130',"catId"=>'122']);?>"><img src="<?php echo $pc_style; ?>img/index/tsyx_03.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363136',"catId"=>'38']);?>"><img src="<?php echo $pc_style; ?>img/index/tsyx_04.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363137',"catId"=>'38']);?>"><img src="<?php echo $pc_style; ?>img/index/tsyx_05.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363138',"catId"=>'38']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/tsyx_06.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363139',"catId"=>'38']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/tsyx_07.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363140',"catId"=>'38']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/tsyx_08.jpg"> </a> 
                        <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363132',"catId"=>'140']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/tsyx_09.jpg"> </a>
                       </li>


                </div>
				
			</div>
	 
		
		<!--五楼商品展示栏-->
		 
			<div class="first_floor">
				<h2> 5F 箱包饰品 </h2>
                <div class="life_electric">

                    <li class="a_larger_image"> 
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/xbsp_01.jpg"> </a>
                    </li>


                    <li class="eight_diagram"> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1153',"catId"=>'137']);?>"><img src="<?php echo $pc_style; ?>img/index/xbsp_02.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4132',"catId"=>'137']);?>"><img src="<?php echo $pc_style; ?>img/index/xbsp_03.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1164',"catId"=>'137']);?>"><img src="<?php echo $pc_style; ?>img/index/xbsp_04.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1370',"catId"=>'137']);?>"><img src="<?php echo $pc_style; ?>img/index/xbsp_05.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'532',"catId"=>'137']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/xbsp_06.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1168',"catId"=>'137']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/xbsp_07.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1150',"catId"=>'137']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/xbsp_08.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'1155',"catId"=>'137']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/xbsp_09.jpg"> </a>
                            </li>


                </div>
				
			</div>
		 
		 
		
		<!--六楼商品展示栏-->
 
			<div class="first_floor">
				<h2> 6F 服饰鞋袜 </h2>
                <div class="life_electric"> 
                    <li class="a_larger_image"> 
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/fsxw_01.jpg"> </a>
                    </li>



                    <li class="eight_diagram"> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363096',"catId"=>'42']);?>"><img src="<?php echo $pc_style; ?>img/index/fsxw_02.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363098',"catId"=>'42']);?>"><img src="<?php echo $pc_style; ?>img/index/fsxw_03.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363100',"catId"=>'42']);?>"><img src="<?php echo $pc_style; ?>img/index/fsxw_04.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363155',"catId"=>'42']);?>"><img src="<?php echo $pc_style; ?>img/index/fsxw_05.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363153',"catId"=>'41']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/fsxw_06.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363154',"catId"=>'41']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/fsxw_07.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363108',"catId"=>'41']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/fsxw_08.jpg"> </a> 
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363117',"catId"=>'41']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/fsxw_09.jpg"> </a>
                            </li>


                </div>
			</div>

            <div class="first_floor">
            	
                <h2> 7F 个护化妆 </h2>
                <div class="life_electric">

                    <li class="a_larger_image"> 
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/ghhz_01.jpg"> </a>
                    </li>


                    <li class="eight_diagram">
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363062',"catId"=>'4']);?>"><img src="<?php echo $pc_style; ?>img/index/ghhz_02.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363065',"catId"=>'4']);?>"><img src="<?php echo $pc_style; ?>img/index/ghhz_03.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363068',"catId"=>'4']);?>"><img src="<?php echo $pc_style; ?>img/index/ghhz_04.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363057',"catId"=>'51']);?>"><img src="<?php echo $pc_style; ?>img/index/ghhz_05.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363060',"catId"=>'51']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/ghhz_06.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363077',"catId"=>'4']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/ghhz_07.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363142',"catId"=>'49']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/ghhz_08.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363054',"catId"=>'49']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/ghhz_09.jpg"> </a>
                    </li>


                </div>
            </div>

            <div class="first_floor">
                <h2> 8F 家具家纺<!--<a href="" class="more"> 更多商品 <img src="../../resources/img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/jf_01.jpg"> </a>
                    </li>


                    <li class="eight_diagram">
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'362578',"catId"=>'56']);?>"><img src="<?php echo $pc_style; ?>img/index/jf_02.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'361003',"catId"=>'57']);?>"><img src="<?php echo $pc_style; ?>img/index/jf_03.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'362179',"catId"=>'61']);?>"><img src="<?php echo $pc_style; ?>img/index/jf_04.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'361461',"catId"=>'61']);?>"><img src="<?php echo $pc_style; ?>img/index/jf_05.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4729',"catId"=>'57']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jf_06.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4730',"catId"=>'57']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jf_07.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'4533',"catId"=>'61']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jf_08.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'362224',"catId"=>'61']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/jf_09.jpg"> </a>
                    </li>


                </div>
            </div>

            <div class="first_floor">
                <h2> 9F 食品酒水<!--<a href="" class="more"> 更多商品 <img src="../../resources/img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                    	
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/spjs_01.jpg"> </a>
                     </li>


                    <li class="eight_diagram">
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363127',"catId"=>'63']);?>"><img src="<?php echo $pc_style; ?>img/index/spjs_02.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363128',"catId"=>'63']);?>"><img src="<?php echo $pc_style; ?>img/index/spjs_03.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363129',"catId"=>'63']);?>"><img src="<?php echo $pc_style; ?>img/index/spjs_04.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363150',"catId"=>'63']);?>"><img src="<?php echo $pc_style; ?>img/index/spjs_05.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363151',"catId"=>'64']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/spjs_06.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363152',"catId"=>'64']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/spjs_07.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363124',"catId"=>'64']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/spjs_08.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363125',"catId"=>'64']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/spjs_09.jpg"> </a>
                    </li>


                </div>
            </div>
            

            <div class="first_floor">
                <h2> 10F 汽车户外<!--<a href="" class="more"> 更多商品 <img src="../../resources/img/jiantou-icon.png"/> </a>--></h2>
                <div class="life_electric">

                    <li class="a_larger_image">
                        <!--                            <a href="--><!--">-->
                            <a href="###"><img src="<?php echo $pc_style; ?>img/index/qchw_01.jpg"> </a>
                                            </li>


                    <li class="eight_diagram">
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363110',"catId"=>'67']);?>"><img src="<?php echo $pc_style; ?>img/index/qchw_02.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363109',"catId"=>'67']);?>"><img src="<?php echo $pc_style; ?>img/index/qchw_03.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363107',"catId"=>'67']);?>"><img src="<?php echo $pc_style; ?>img/index/qchw_04.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363111',"catId"=>'67']);?>"><img src="<?php echo $pc_style; ?>img/index/qchw_05.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363144',"catId"=>'69']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/qchw_06.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363146',"catId"=>'69']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/qchw_07.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363147',"catId"=>'68']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/qchw_08.jpg"> </a>
                            <a href="<?php echo @\Yii::$app->urlManager->createUrl(['goods/details','goodsId'=>'363148',"catId"=>'68']);?>" style="margin-top: 20px;"><img src="<?php echo $pc_style; ?>img/index/qchw_09.jpg"> </a>
                    </li>


                </div>
            </div>


		</div>
	</div>
 
		
		<!--品牌汇-->
		<!--<div class="super_brand_Remit">
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
		-->
		<!--商城公告与知识堂-->
		<!--<div class="super_price_cost">
			<div class="price_cost">
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
						<li> <a href="<?php echo Yii::$app->urlManager->createUrl('help/share')?>"> 【专题】 </a>
							<em> 2016-10-12</em>
						</li>
						
					</ul>
				</div>
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
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/sanjieshi')?>"> 元 </a>
							<a href="<?php echo Yii::$app->urlManager->createUrl('announce/sanjiebao')?>"> 三界宝  </a>
						</dl>
					</ul>
				</div>
			</div>
		</div>-->
		<!--尾部部分-->
		<!--活动弹窗-->
		<div class="lpopup_wrap" style="">
			<div class="popup">
				<img class="lpopup_imga" src="<?php echo $pc_style; ?>img/lianjinyoufa/ljpopup.jpg"/>
				<img class="ljcha" src="<?php echo $pc_style; ?>img/lianjinyoufa/ljcha.png"/>
			</div>
		</div>
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		
		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/jquery.event.drag-1.5.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/jquery.touchSlider.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/mix.js" type="text/javascript" charset="utf-8"></script> 
		<script type="text/javascript">
			//弹窗js
			var lpopupMo="";
			lpopupMo=sessionStorage.getItem("lpopupMo");
			if(lpopupMo==""||lpopupMo==undefined||lpopupMo==null){
				$(".lpopup_wrap").css("display","block");
			}else{
				$(".lpopup_wrap").css("display","none");
			}
			$(".ljcha").click(function(){
				$(".lpopup_wrap").css("display","none");
				sessionStorage.setItem("lpopupMo","111");
			})
			$(".lpopup_imga").click(function(){
				sessionStorage.setItem("lpopupMo","111");
				window.location.href="<?php echo Yii::$app->urlManager->createUrl('index/suiyi')?>"
			})
			
			
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
