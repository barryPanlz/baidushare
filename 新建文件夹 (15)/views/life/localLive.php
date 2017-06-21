<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>本地生活</title> 
		<link href="<?php echo $pc_style; ?>img/bitbug_favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/localLive.css" />
	</head>
	<body>
		<!--头部用户导航-->
		<?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search fix">
			<div class="Search" href="">
				<img style="float: left;" src="<?php echo $pc_style; ?>img/logo.png" />
				<div class="live live-text-tit">三界生活<span></span>本地</div>
				<form action="" class="search-in">
					<div class="search-sel">

						<ul class="search-sel-tab">
							<span class="tri"></span>
							<li>团购</li>
							<li class="search-sel-hid">商家</li>
						</ul>
					</div>
					<input type="text" class="kuang" id="" placeholder="输入你想查找的商品名字" />
					<input type="button" class="suoSou" id="" value="搜索" />
				</form>
				<div class="Text">
					<a href="">秋冬连衣裙</a>
					<a href=""> 耐克跑步鞋</a>
					<a href="">婴儿抱被 </a>
					<a href="">会员特供 </a>
					<a href="">买一送二</a>
				</div>
			</div>
		</div>

		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width data-channel-box">
				<div class="channel-box  fix">
					<a class="channel-l" href="###">
						<img src="<?php echo $pc_style; ?>img/hanbao.png" alt="" />
						<span>全部分类</span>
					</a>
					<div class="channel-c">
						<a href="###" class="color_title_fist1">首页</a>
						<a href="<?php echo $pc_style; ?>index.html" >三界商城</a>
						<a href="../center/Diamond_index.html">三界会员</a>
						<a href="../others/brand.html">品牌汇</a>
					</div>
					<div class="channel-r">
						<a href="../others/Share.html" class="color_title_fist1">分享邀请</a>
					</div>
				</div>
				<!--二级菜单栏-->
				<div class="channel-nav-box">
					<div class="channel-items fix">
						<div class="item item1">
							<h3 class="item-l">
								<a href="">美食餐饮</a>
							</h3>
							<div class="item-r">
								<span>外卖快餐 </span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
						<div class="item item2">
							<h3 class="item-l">
								<a href="">休闲娱乐</a>
							</h3>
							<div class="item-r">
								<span>足疗按摩 </span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
						<div class="item ">
							<h3 class="item-l">
								<a href="">旅游</a>
							</h3>
							<div class="item-r">
								<span>景点门票</span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
						<div class="item ">
							<h3 class="item-l">
								<a href="">酒店服务</a>
							</h3>
							<div class="item-r">
								<span>情侣酒店</span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
						<div class="item ">
							<h3 class="item-l">
								<a href="">生活服务</a>
							</h3>
							<div class="item-r">
								<span>手机充值</span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
						<div class="item ">
							<h3 class="item-l">
								<a href="">婚庆服务</a>
							</h3>
							<div class="item-r">
								<span>酒席包团</span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
						<div class="item ">
							<h3 class="item-l">
								<a href="">丽人</a>
							</h3>
							<div class="item-r">
								<span>美容美发</span>
								<img src="<?php echo $pc_style; ?>img/jiantou-icon.png" alt="" />
							</div>
						</div>
					</div>
					<div class="channel-tabs fix">
						<div class="tabs tabs1">
							<h3>美食餐饮</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

						<div class="tabs tabs2">
							<h3>休闲娱乐</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

						<div class="tabs tabs3">
							<h3>旅游</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

						<div class="tabs tabs4">
							<h3>酒店服务</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

						<div class="tabs tabs5">
							<h3>生活服务</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

						<div class="tabs tabs6">
							<h3>婚庆服务</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

						<div class="tabs tabs7">
							<h3>丽人</h3>
							<ul class="tablist">
								<li>
									<a href="">KTV</a>
								</li>
								<li>
									<a href="">桌游/电玩</a>
								</li>
								<li>
									<a href="">足疗按摩</a>
								</li>
								<li>
									<a href="">密室逃脱</a>
								</li>
								<li>
									<a href="">其他娱乐</a>
								</li>
								<li>
									<a href="">运动健身</a>
								</li>
								<li>
									<a href="">洗浴/汗蒸</a>
								</li>
								<li>
									<a href="">酒吧</a>
								</li>
								<li>
									<a href="">演出赛事</a>
								</li>
								<li>
									<a href="">4D/5D电影</a>
								</li>
								<li>
									<a href="">DIY手工</a>
								</li>
								<li>
									<a href="">真人CSS</a>
								</li>
								</lu>
						</div>

					</div>
				</div>
	
			</div>
		</div>
		<!--轮播图位置-->
		<div class="main_visual ">
			<div class="flicking_con">
				<!--<a href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>-->
			</div>
			<div class="main_image">
				<ul>
					<li>
						<a class="img_3"></a>
					</li>
					<li>
						<a class="img_4"></a>
					</li>
					<li>
						<a class="img_1"></a>
					</li>
					<li>
						<a class="img_2"></a>
					</li>
					<li>
						<a class="img_5"></a>
					</li>
				</ul>
				<a href="javascript:;" id="btn_prev"></a>
				<a href="javascript:;" id="btn_next"></a>
			</div>
		</div>
		<!--main_visual end-->

		<!--内容部分-->
		<div class="locContent">
			<div class="data-width">
				<!--热销-->
				<div class="hot-sale">
					<div class="hot-title">
						<h3 class="one">热销团购</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/rexiao1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/rexiao2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/rexiao3.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/rexiao4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/rexiao5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--抢购频道-->
				<div class="hot-sale">
					<div class="hot-title">
						<h3 class="one">店铺精选</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/jingpin1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/jingpin2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/jingpin3.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/jingpin4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/jingpin5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--log展示-->
				<div class="hot-log">
					<img src="<?php echo $pc_style; ?>img/xiao-banner.png" alt="" />
				</div>

				<!--1F 美食餐饮-->
				<div class="hot-sale">
					<div class="hot-title1">
						<h3 class="one">1F 美食餐饮</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--2F 休闲娱乐-->
				<div class="hot-sale">
					<div class="hot-title1">
						<h3 class="one">2F 休闲娱乐</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/xiuxian1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/xiuxian2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/xiuxian3.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/xiuxian4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/xiuxian5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--3F 旅游-->
				<div class="hot-sale">
					<div class="hot-title1">
						<h3 class="one">3F 旅游</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/lvyou1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/lvyou2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/lvyou3.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/lvyou4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/lvyou5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--4F 酒店服务-->
				<div class="hot-sale">
					<div class="hot-title1">
						<h3 class="one">4F 酒店服务</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--5F 生活服务-->
				<div class="hot-sale">
					<div class="hot-title1">
						<h3 class="one">5F 生活服务</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!--6F 婚庆服务-->
				<div class="hot-sale">
					<div class="hot-title1">
						<h3 class="one">6F 婚庆服务</h3>
					</div>
					<div class="hot-main fix">
						<ul>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi1.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi2.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi4.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="hot-list bast-list">
								<a href=""><img src="<?php echo $pc_style; ?>img/meishi5.png" alt="" /></a>
								<div class="hot-list-txt">
									<h4>聚爆品新骑车点车业</h4>
									<p>热山地车自行车空间房金山</p>
									<div class="hot-list-btm fix">
										<div class="hot-list-m">
											<span>￥</span><span class="hot-list-mon">99.00</span>
										</div>
										<div class="item">
											<div class="iteml">
												门店价<del>￥1680</del>
											</div>
											<div class="itemr">
												已售<span class="">315</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div style="height:20px;"></div>
			</div>
		</div>
		<!--page bottom-->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>
		<!--js部分-->
		<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/common.js"></script>
		<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/inputs.js"></script>
		<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/jquery.event.drag-1.5.min.js"></script>
		<script type="text/javascript" src="<?php echo $pc_style; ?>js/lib/jquery.touchSlider.js"></script>	
		<script type="text/javascript" src="<?php echo $pc_style; ?>js/locaLive.js"></script>
	</body>

</html>
