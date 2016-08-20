<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>标题</title>

    
    <link rel="stylesheet" href="/buy/Public/Home/Css/layout_shopcar.css">
    <link rel="stylesheet" href="/buy/Public/Home/Css/shopcart_shopcar.css">
    <link rel="stylesheet" href="/buy/Public/Home/Css/buy-process_shopcar.css">
    <link rel="stylesheet" href="/buy/Public/Home/Css/global_shopcar.css">
    <link rel="stylesheet" href="/buy/Public/Home/Css/dialog_shopcar.css">
	<script type="text/javascript" src="/buy/Public/Home/js/jquery.1.4.2-min.js"></script>
    <script type="text/javascript" src="/buy/Public/Home/js/Calculation.js"></script>


    <link rel="shortcut icon" href="http://files.shop.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">

    <link href="/buy/Public/Home/Css/header_footer.css" rel="stylesheet" type="text/css">
    <link href="/buy/Public/Home/Css/global.css" rel="stylesheet" type="text/css">
</head>
<body class="vivomain-page">
    <div id="vivo-wrap">  <!-- 最外层div -->
        <!-- ===================================头部========================================-->
        
            <header id="header">
                <div class="head-search">
                    <div class="search-box">
                        <form action="http://shop.vivo.com.cn/product/search" method="get"><input type="text" autocomplete="off" name="searchKeywordStr" maxlength="20" placeholder="如:x6"><button type="submit">搜索</button></form><a class="close"></a>
                    </div>
                </div>
                <div class="wrapper">
                    <nav id="navigator" class="cl">
                        <a href="http://shop.vivo.com.cn/" class="vivo-logo"><img src="http://files.shop.vivo.com.cn/vivoshop/web/dist/img/tmp/vivo-logo_865fdf1.png" alt="vivo智能手机官方网站"></a>
                        <ul class="cl">
                            <li><a href="http://shop.vivo.com.cn/product/phone">手机</a></li>
                            <li><a href="http://shop.vivo.com.cn/product/parts">配件</a></li>
                            <li><a href="http://shop.vivo.com.cn/vcoins/cmmdyCouponList">V币商品</a></li>
                            <li><a href="http://shop.vivo.com.cn/helpcenter/service-promise">服务</a></li>
                            <li><a href="http://bbs.vivo.com.cn/" target="_blank">社区</a></li>
                            <li><a href="http://www.vivo.com.cn/" target="_blank">官网</a></li>
                        </ul>
                        <div class="search-user">
                            <ul class="top-quick-menu">
                                <li id="j_SearchTrigger" class="search"><a href="javascript:void(0)" rel="nofollow"><b></b></a></li>
                                <li id="j_UserMenuTrigger">
                                    <a href="http://shop.vivo.com.cn/my/" class="user"><b></b></a>
                                </li>
                                <li>
                                    <?php  if(empty($_SESSION['talCount'])){ ?>
                                    <a href="{:U('Car/nullShopCar')}" class="shoppingcart"><b></b><span class="shopcart-num">0</span></a>
                                    <?php }else{ ?>
                                    <a href="{:U('Car/shopCar')}" class="shoppingcart"><b></b><span class="shopcart-num"><?php echo $_SESSION['talCount']; ?></span></a>
                                    <?php }?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        


        <!-- ==================================其余页面=====================================-->
        
        
        
    <div id="content" class="cl">
        <div class="wrapper">
            <div class="buy-steps"></div>
        </div>
        <div class="container">
            <div class="wrapper">
                <div class="prod-list">
                    <table class="order-table shop-cart" id="j_ShowTable" cellpadding="0">
                        <thead>
                            <tr class="gwc_tb1">
                                <th width="35" class="td-check"><input class=" j_Select item-checkbox allselect" type="checkbox"></th>
                                <th width="155" style="text-align: left"><label for="j_selectAll">全选</label></th>
                                <th style="text-align: left">商品名称</th>
                                <th width="120">价格（元）</th>
                                <th width="130">数量</th>
                                <th width="120">优惠</th>
                                <th width="128">小计（元）</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody class="j_ItemTBody">
						<foreach name="{res}" item="vo">
                                <tr class="prod-line gwc_tb2">  
                                    <td class="td-check">
                                        <label><input id="newslist-1" type="checkbox" class="item-checkbox j_ItemCheckbox" name="newslist" value="2071"></label>
                                    </td>
                                    <td class="prod-pic">
                                        <a class="figure" href="http://shop.vivo.com.cn/product/208" target="_blank"><img src="{$vo['pic']} " alt=""></a>
                                    </td>
                                    <td class="prod-name">
                                        <a class="figure" href="http://shop.vivo.com.cn/product/208" target="_blank">{$vo['phoneName']}</a>
                                        <br>{$vo['color']}
                                    </td>
                                    <td>￥{$vo['price']}</td>
                                    <td><span class="number-box">
                                        <a id="min1" class="reduce-num j_ReduceNum" href="{:U(Car/decNum),['id'=>$vo['id']]}">-</a>
                                        <input id="text_box1" type="text" class="prod-num j_ItemNum" name="shopcartProductNum" value="{$vo['num']}" title="请输入购买量">
                                        <a id="add1" class="add-num j_AddNum" href="{:U(Car/addNum),['id'=>$vo['id']]}">+</a></span>
                                    </td>
                                   <td class="item-privilege j_ItemPrivilege">0.00</td>
                                    
                                    <td id="total1" class="tot total-price item-total-price j_ItemTotalPrice">{$vo['price']*$vo['num']}</td>
                                    <td>
                                        <a href=" " class="favorite j_Favorite" skuid="2071">收藏</a>
                                         | <span id='del' data-id="{$v.id}" class="j_DelSingle" skuid="2071">删除</span></td>
                                </tr>

                                </tbody>
                    </table>
                    <ul class="price-list">
                        <li class="total-price">商品总价：<span class="price"><dfn>¥{:U('Car/tol')} </dfn><span id="j_ItemsSum"> </span></span></li>
                        <li class="discount-price">优惠：<span class="price">-<dfn>¥0.00</dfn><span id="j_ItemsPrivilege"> </span></span></li>
                    </ul>
                    <div class="option-box">
                        <div class="option-operation">
                            <ul>
                                <li><label><input class="allselect" type="checkbox"> 全选</label></li>
                                <li><a class="j_DelMultiple" href="{:U('Car/clear')}">删除全选商品</a></li>
                                <li><a class="j_FavoriteMultiple" href="javascript:void(0);">移入收藏夹</a></li>
                            </ul>
                        </div>
                        <div class="real-price">已选商品<em><span id="shuliang">1</span></em>件，合计（不含运费）：<span class="price"><dfn>¥</dfn><span id="zong1">68.00</span></span>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button class="btn-cancel btn-goshopping j_GoShopping" title="继续购物">
                            <a href="{:U('Goods/showGoods')}">继续购物</a>
                        </button>
                        <button id='jz2' class="btn-confirm btn-submit j_BtnConfirm" href="" title="去结算">去结算</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- z-contain -->
    </div>
  
        
    
        <script src="/buy/Public/Home/js/jquery-1.8.3.min.js"></script>
        
        <script>
           
            $(function () {
			   $('#del').click(function(){
				 var id = $(this).attr('data-id');
                 if (confirm('确认删除?') == false) {
                return;
            }
               $.get('/buy/index.php/Home/Car/del',{'id':$id});
								  
			   });
            });
        </script>

		<script type="text/javascript">
$(document).ready(function () {

	//jquery特效制作复选框全选反选取消(无插件)
	// 全选        
	$(".allselect").click(function () {
		
		if($(this).attr("checked")){
			$(".gwc_tb2 input[name=newslist]").each(function () {
				$(this).attr("checked", true);
				// $(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
			});
			GetCount();
		
		}
		else
   		{
			$(".gwc_tb2 input[name=newslist]").each(function () {
				if ($(this).attr("checked")) {
					$(this).attr("checked", false);
					//$(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
				} else {
					$(this).attr("checked", true);
					//$(this).next().css({ "background-color": "#3366cc", "color": "#000000" });
				} 
			});
			GetCount();
    
   		}
		
	});

	//反选
	$("#invert").click(function () {
		$(".gwc_tb2 input[name=newslist]").each(function () {
			if ($(this).attr("checked")) {
				$(this).attr("checked", false);
				//$(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
			} else {
				$(this).attr("checked", true);
				//$(this).next().css({ "background-color": "#3366cc", "color": "#000000" });
			} 
		});
		GetCount();
	});

	//取消
	$("#cancel").click(function () {
		$(".gwc_tb2 input[name=newslist]").each(function () {
			$(this).attr("checked", false);
			// $(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
		});
		GetCount();
	});

	// 所有复选(:checkbox)框点击事件
	$(".gwc_tb2 input[name=newslist]").click(function () {
		if ($(this).attr("checked")) {
			//$(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
		} else {
			// $(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
		}
	});

	// 输出
	$(".gwc_tb2 input[name=newslist]").click(function () {
		// $("#total2").html() = GetCount($(this));
		GetCount();
		//alert(conts);
	});
});
//******************
function GetCount() {
	var conts = 0;
	var aa = 0;
	$(".gwc_tb2 input[name=newslist]").each(function () {
		if ($(this).attr("checked")) {
			for (var i = 0; i < $(this).length; i++) {
				conts += parseInt($(this).val());
				aa += 1;
			}
		}
	});
	$("#shuliang").text(aa);
	$("#zong1").html((conts).toFixed(2));
	$("#jz1").css("display", "none");
	$("#jz2").css("display", "block");
}
</script>

<!---商品加减算总数---->
	<script type="text/javascript">
	$(function () {
		var t = $("#text_box1");
		$("#add1").click(function () {
			t.val(parseInt(t.val()) + 1)
			setTotal(); GetCount();
		})
		$("#min1").click(function () {
			if(t.val()>0){
				t.val(parseInt(t.val()) - 1)
				setTotal(); GetCount();
			}
		})
		function setTotal() {

			$("#total1").html((parseInt(t.val()) * 9).toFixed(2));
			$("#newslist-1").val(parseInt(t.val()) * 9);
		}
		setTotal();
	})
	</script>
	<!---总数---->
	<script type="text/javascript">
	$(function () {
		$(".quanxun").click(function () {
			setTotal();
			//alert($(lens[0]).text());
		});
		function setTotal() {
			var len = $(".tot");
			var num = 0;
			for (var i = 0; i < len.length; i++) {
				num = parseInt(num) + parseInt($(len[i]).text());

			}
			//alert(len.length);
			$("#zong1").text(parseInt(num).toFixed(2));
			$("#shuliang").text(len.length);
		}
		//setTotal();
	})
	</script>

        



        <!-- ==================================尾部=========================================-->
        
            <footer id="footer">
                <div class="shop-agree">
                    <div class="wrapper cl">
                        <ul class="cl">
                            <li><a href="http://shop.vivo.com.cn/helpcenter/transport-cost/" target="_blank">
                                    <b class="b1"></b>
                                    <p><span>0</span>运费购手机</p></a>
                            </li>
                            <li><a href="http://shop.vivo.com.cn/helpcenter/after-service/" target="_blank">
                                    <b class="b2"></b>
                                    <p><span>30</span>天无理由退换货</p></a>
                            </li>
                            <li><a href="http://shop.vivo.com.cn/helpcenter/invoice-declare/" target="_blank">
                                    <b class="b3"></b>
                                    <p>电子发票</p></a>
                            </li>
                            <li class="shop-agree-last"><a href="http://www.vivo.com.cn/service/map.html" target="_blank">
                                    <b class="b4"></b>
                                    <p><span>380</span>余家售后服务中心</p></a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="shop-help">
                    <div class="wrapper cl">
                        <dl>
                            <dt><b class="b1"></b>购买流程</dt>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/alipay/" target="_blank">· 支付宝支付</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/invoice-declare/" target="_blank">· 发票说明</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/coupon-declare/" target="_blank">· 优惠券说明</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/huabei-instalment/" target="_blank">· 花呗分期</a></dd>
                        </dl>
                        <dl>
                            <dt><b class="b2"></b>配送方式</dt>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/transport-way/" target="_blank">· 配送方式</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/transport-cost" target="_blank">· 配送费用</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/sign-notice/" target="_blank">· 签收须知</a></dd>
                        </dl>
                        <dl>
                            <dt><b class="b3"></b>服务支持</dt>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/service-promise/" target="_blank">· 服务保证</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/after-service/" target="_blank">· 售后服务</a></dd>
                            <dd><a href="http://www.vivo.com.cn/service/map.html" target="_blank">· 售后网点查询</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/broken-screen/" target="_blank">· 碎屏宝</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/extend-service/" target="_blank">· 手机延保</a></dd>
                        </dl>
                        <dl>
                            <dt><b class="b4"></b>品牌服务</dt>
                            <dd><a href="http://www.vivo.com.cn/service-faq_zhineng.html" target="_blank">· 常见问题</a></dd>
                            <dd><a href="http://www.vivo.com.cn/service.html" target="_blank">· 相关下载</a></dd>
                            <dd><a href="http://shop.vivo.com.cn/helpcenter/contact-us/" target="_blank">· 联系我们</a></dd>
                        </dl>
                        <dl class="shop-help-last">
                            <dt><b class="b5"></b>小V在线时段</dt>
                            <dd>周一至周五 08:00-21:00</dd>
                            <dd>周六、周日 09:00-18:00</dd>
                            <dd class="online-service">
                                <a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4007161118&amp;aty=0&amp;a=0&amp;curl=&amp;ty=1"><img class="lazy" data-src="http://files.shop.vivo.com.cn/vivoshop/web/dist/img/common/online-service_1e5d0b6.png" src="http://files.shop.vivo.com.cn/vivoshop/web/dist/img/common/online-service_1e5d0b6.png" style="display: inline;"></a>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="wrapper cl">
                        <div class="sns-box">
                            成为vivo粉丝:<a href="http://weibo.com/vivomobile" target="_blank" class="sina"><b></b></a>
                            <a href="http://t.qq.com/vivomobile" target="_blank" class="tencent"><b></b></a>
                            <a href="http://page.renren.com/vivo?checked=true" target="_blank" class="renren"><b></b></a>
                            <a href="javascript:;" class="weixin"><b></b><div class="vivo-weixin-overbox"><img src="./shopcar_files/vivo-weixin-ico_f8c8800.jpg"><b></b></div></a>
                        </div>
                        <div class="copy-info">
                            <a href="http://shop.vivo.com.cn/" class="footer-logo"></a>Copyright ©2011-2016 广东步步高电子工业有限公司<br>版权所有 保留一切权利粤B2-20080267 | <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备05100288号</a>
                        </div>
                    </div>
                </div>
            </footer>
            <div id="airbox" style="margin-left: 620px;">
                <div id="j_GoTop" class="go-top" style="display: none;">
                    <a href="javascript:;" rel="nofollow" title="返回顶部"></a>
                </div>
            </div>
            <div id="side-bar">
                <a class="online-service" target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4007161118&amp;aty=0&amp;a=0&amp;curl=&amp;ty=1">
                </a>
            </div>
        


    </div>
</body>
</html>