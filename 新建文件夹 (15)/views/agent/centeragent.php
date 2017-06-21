<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/private/agent.css" />
	</head>

	<body>
		<!--头部用户导航-->
        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/header.php'); ?>
		<!--搜索商品栏-->
		<div class="super_Search">
			<div class="Search" href="">
				<img  src="<?php echo $pc_style; ?>img/logo.png" />
			</div>
		</div>

		<!--频道跳转栏-->
		<div class="local-channel fix">
			<div class="data-width">
				<div class="channel-box fix">
					<a class="channel-l" href="<?php echo $pc_style; ?>index.html">
						<span>返回商城首页</span>
					</a>
					<div class="channel-c">
                        <a class="now_tab_red" href="<?php echo \Yii::$app->urlManager->createUrl(['agent/index']);?>"> 三界会员 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountant']);?>"> 我的账房 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/accountsettings']);?>"> 账户设置 </a>
					</div>
					<div class="channel-r">
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_tong']);?>"> 三界石 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/san_jie_bao']);?>"> 三界宝 </a>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['help/share']);?>">分享邀请</a>
					</div>
				</div>
			</div>
		</div>

		<!--代理商铺的区域-->
		<div class="agent-cont">
			<div class="data-with">
				<div class="agent-main">
					<div class="tit">
						<img src="<?php echo $pc_style; ?>img/zuojiantou-zhihui.png" alt="" />
						<a href="javascript:history.go(-1)">返回</a>
					</div>

					<div class="agent-top-box fix">
						<ul class="fl fl-totl">
							<li class="dian">我辖区的店铺（<span><?php echo empty($areanum->data->areaStoreNum) ? "0" : $areanum->data->areaStoreNum ?></span>）</li>
							<li class='qian'>总计销售业绩：<span><?php echo empty($areanum->data->areaStoreSalesAmount) ? "0" : $areanum->data->areaStoreSalesAmount ?></span>三界石</li>
						</ul>
						<div class="fr fl-serach">
                            <form action="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist'])?>" method="get" id="form">
							<input type="text"  name="query" class="serach-txt" placeholder="输入店铺名称/所在城市等" />
							<input type="button" class="serach-btn" value="提交">
                            </form>
						</div>
					</div>

					<!--table列表-->
					<div class="agent-list-box">
						<div class="list-tit fix">
							<ul>
								<li class="num">序号</li>
								<li class="info">店铺信息</li>
								<li class="city">所在城市</li>
								<li class="stime">注册时间</li>
								<li class="sum">销售业绩（三界通）</li>
							</ul>
						</div>
						<div class="list-box fix">
                            <?php if(!empty($areaStoreList)){
                                $i = 0;
                            foreach ($areaStoreList as $value){
                                $i++ ?>
							<ul class="list-item">
								<li class="num"><?php echo $i ?></li>
								<li class="info">
                                    <a href=""><img src="<?php echo $pic_host; ?><?php echo empty($value->store_img) ? "" : $value->store_img; ?>"/></a>
                                    <p> <?php echo empty($value->store_name) ? "" : $value->store_name ?> </p>
									<li class="city"><?php echo empty($value->city) ? "" : $value->city ?> </li>
									<li class="stime"><?php echo empty($value->reg_time) ? "" : $value->reg_time ?></li>
									<li class="sum">￥ <?php echo empty($value->total_amount) ? "" : $value->total_amount ?></li>
							</ul>
                            <?php } } ?>
						</div>
					</div>
					<!--列表分页效果-->
					<div class="page_warp fix">
						<span>
                            <?php $query  = empty($_GET['query']) ? "" : $_GET['query'] ?>
                             <?php if($page->currentPage >1){ ?>
                                 <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist','currentPage' =>$page->currentPage - 1,'query'=>$query])?>">上一页</a>&nbsp;&nbsp;
                             <?php } ?>

                            <?php  if ($page->currentPage <= 5 && $page->totalPage <= 5){ for($i=1;$i<= $page->totalPage;$i++) { ?>


                                <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist','currentPage' =>$i,'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                            <?php } }elseif($page->currentPage >= 5){ {

                                $startTag = $page->currentPage - 1;

                                $endTag = $startTag + 4;
                                for ($i = $startTag; $i <= $page->totalPage && $i <= $endTag; $i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist','currentPage' =>$i,'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php  } } }else{
                                for($i=1;$i<= 5;$i++) { ?>
                                    <a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist','currentPage' =>$i,'query'=>$query])?>" <?php if($page->currentPage == $i){echo 'style="color:red;"';} ?>><?php echo $i;?></a>
                                <?php } }?>


                            <?php if($page->currentPage < $page->totalPage ){ ?>
                                &nbsp;&nbsp;<a href="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist','currentPage' =>$page->currentPage +1,'query'=>$query])?>">下一页</a>
                            <?php } ?>
						</span>
                        <span>
						<span>共</span>
						<i><?php echo $page->totalPage;?></i>
						<span>页，</span>
                            <?php if($page->totalPage >1 ){ ?>
                            <form action="<?php echo \Yii::$app->urlManager->createUrl(['agent/areastorelist']);?>" method="get" >
								<span>跳转到</span>
								<input class="page_input" type="text" name="currentPage" value="2"  />
                                <input type="hidden" name="query" value="<?php echo $query ?>">
								<span>页</span>
								<input type="submit" value="确定">
						</span>
                        </form>
                        <?php } ?>
					</div>
				</div>
				<div style="height:40px;"></div>
			</div>
		</div>

        <?php echo \Yii::$app->view->renderFile('@app/views/layouts/bottom.php'); ?>

		<script src="<?php echo $pc_style; ?>js/lib/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/common.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo $pc_style; ?>js/lib/inputs.js" type="text/javascript" charset="utf-8"></script>
	</body>
    <script>
        $(".serach-btn").click(function () {
            $("#form").submit();
        })
    </script>

</html>