<?php

use yii\helpers\Url;
use frontend\libs\GoLinkPager;

$this->beginContent('@app/views/layouts/content.php')

?>

		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/live/merchantinde.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/common.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $pc_style; ?>css/common/liveheader.css"/>
            <div class="me_zaishou">
					<div class="con_sousuo">
						<div class="zaishou">
							<span>在售商品(</span>
							<em >15</em>
							<span>件)</span>
						</div>
						<div class="con_page">
							<span><span>共</span><i>2ss</i><span>商品</span></span>
							<span class="con_page_nub"><span class="con_page_page1">1</span><i class="page_color1">/</i><span class="page_color1">15</span>
							</span>
							<span class="con_page_ji">
								<a href="#"><</a>
								<a href="#" class="page_color1">></a>
							</span>
						</div>
					</div>
					<ul class="benDi">
                    <?php foreach($list as $v){ ?>
						<li>
							<img src="<?php echo $pic_host.$v['goods_img'];?>" style="width: 221px;height:220px"/>
							<h4> <?php echo $v['goods_name'];?> </h4>
							<p> <?php echo $v['goods_name'];?> </p>
							<div class="cost_look">
								<div class="cost">
									<dt> <font>&yen;</font> <?php echo $v['promote_price'];?>  </dt>
									<dl> 价格 <del> &yen; <?php echo $v['shop_price'];?>  </del> </dl>
								</div>
								<div class="Look">
									<span>已售</span>
									<em><?php echo $v['goods_sales'];?></em>
								</div>
							</div>
						</li>
                    <?php } ?>
					</ul>
                    <!--20161120<div class="page_warp" style="background: #f6f6f6;">
					<p>
						<span>
							<a>上一页</a>&nbsp;&nbsp;
							<a class="color_page_title">1</a>
							<a>2</a>
							<a>3</a>
							<a>4</a>
							<a>5</a>
							&nbsp;&nbsp;<a>下一页</a>
						</span>
						<span>
							<span>共</span>
							<i>20</i>
							<span>页，</span>
							<span>跳转到</span>
							<input class="page_input" type="tel" name="" id="" value="" />
							<span>页</span>
							<button>确定</button>
						</span>
					</p>
				</div>-->	
				</div>		
               