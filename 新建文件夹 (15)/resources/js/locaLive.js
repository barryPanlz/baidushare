//三级菜单的选项卡
			$(function(){				
				$('.channel-items .item').mouseenter(function(){
					$(this).addClass('item-active');
				    var index = $(this).index();
					$('.channel-tabs .tabs').eq(index).css('display','block');	
					$('.channel-items .item img').eq(index).css('display','none')
				})	
				$('.channel-items .item').mouseleave(function(){
					$(this).removeClass('item-active');
				    var index = $(this).index();
					$('.channel-tabs .tabs').eq(index).css('display','none');	
				    $('.channel-items .item img').eq(index).css('display','inline-block')
				})
				$('.channel-tabs .tabs').mouseenter(function(){					
				   var index = $(this).index();
					$('.channel-items .item').eq(index).addClass('item-active');				
					$('.channel-tabs .tabs').eq(index).css('display','block');	
					$('.channel-items .item img').eq(index).css('display','none')
				})				
				$('.channel-tabs .tabs').mouseleave(function(){				
				    var index = $(this).index();
				    $('.channel-items .item').eq(index).removeClass('item-active');				
					$('.channel-tabs .tabs').eq(index).css('display','none');	
					$('.channel-items .item img').eq(index).css('display','inline-block')
				});		
			})
			
	
         //切换商家和团购	
		$(function(){
			$('.search-sel-tab').mouseover(function(){
				$('.search-sel-tab li').show();				
				$('.search-sel-tab li:eq(1)').css({borderBottom:"1px solid #ddd"})
			})
			$('.search-sel-tab').mouseout(function(){
				$('.search-sel-tab li:eq(1)').hide();
				$('.search-sel-tab li:eq(0)').css({borderBottom:"none"})
			})
			$('.search-sel-tab li').click(function(){					
				$(this).addClass('search-sel-hid').siblings().removeClass('search-sel-hid');
				if($(this)){
					$(this).after($(this).siblings());
				}
			})
		})
		

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
				
				$(".main_image").bind("mousedown", function() {
					$dragBln = false;
				});
				
				$(".main_image").bind("dragstart", function() {
					$dragBln = true;
				});
				
				$(".main_image a").click(function(){
					if($dragBln) {
						return false;
					}
				});
				
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