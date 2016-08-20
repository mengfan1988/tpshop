<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "">
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<title>OPPO积分商城</title>
	<meta name="baidu-site-verification" content="GwVTTZMBUAV55I4M">
	<!-- SEO-->
	<meta name="description" content="OPPO官方商城即日起在线预售、全场包邮，订购OPPO Finder智能手机即可享受2498元首发预售价,OPPO手机老用户和试用机用户还可凭手机号获取100元现金优惠码，预订立减；预售期间，OPPO手机线下自提业务同步启动，全国300余家自提定为您提供面对面贴心服务。从现在起，大胆尝试。">
	<meta name="keywords" content="OPPO Finder,OPPO官方商城,OPPO Finder预售,Finder预订,优惠码,预售礼包,OPPO Finder价格">    
    <meta name="author" content="uimix.net">
<!-- CSS-->

<link rel="stylesheet" type="text/css" href="/buy/Public/Home/Css/Jifen_detail.css" media="all">
<script type="text/javascript" src="/buy/Public/Home/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="/buy/Public/Home/js/Jifen.js"></script>

 
    
</head>
<body>
         <div id="header" style="height: 120px;">
    <div id="site-nav">
        <div class="site-nav-content">
            <?php if($_SESSION['isLogin'] != 1): ?><div class="site-nav-right">
                    <a rel="nofollow" href="<?php echo U('Login/login');?>">登录</a>
					<a rel="nofollow" href="<?php echo U('ZhuCe/index');?>">注册</a>
                    <a href="<?php echo U('Jifen/index');?>">积分兑换</a>
            	</div>
            <?php else: ?>
   				<div class="site-nav-right">
                	<a rel="nofollow" href=""><?php echo ($_SESSION['master']['username']); ?><span class="message-count"></span></a>
                    <a href="<?php echo U('Jifen/index');?>">积分兑换</a>
					<a href="<?php echo U('Person/index');?>">MY OPPO</a>
					<a rel="nofollow" href="<?php echo U('Login/logout');?>">退出</a>
            	</div><?php endif; ?>
            <div class="site-nav-left-png" style="float:left">
                <a title="查看OPPO新浪微博" class="weibo-sina-png" href="" target="_top" ><img src="/buy/Public/Home/Jifen/Images/i-h-sinawb.png"></a>
            	<a title="查看OPPO腾讯微博" class="weibo-qq-png" href="" target="_top" ><img src="/buy/Public/Home/Jifen/Images/i-h-qqwb.png"></a>
            </div>
            <div class="site-nav-left-text" style="float:left;width:564px">4001-666-888</div>
        </div>
    </div>
    <div id="mall-nav">
        <div class="mall-nav-content">
			            <a href="http://www.oppo.com/" onclick="_gaq.push(['_trackEvent', 'PictureClick', 'JiFenShangCheng', 'OPPO']);"><h1 class="logo">oppo</h1></a>
                        
            <div id="newnav" class="mall-nav-right">
                <div class="mall-nav-links">
                        <a href="<?php echo U('Index/index');?>">首页</a>
                        <a href="<?php echo U('Jifen/index');?>">积分商城</a>
                        <!-- <a href="http://store.oppo.com/parts" onclick="_gaq.push(['_trackEvent', 'TextLineClick', 'JiFenShangCheng', 'PeiJian']);">配件</a> -->
                        <a href="">服务</a>
                        <a href="">体验店</a>
                        <a href="<?php echo U('App/Appindex');?>">应用商店</a>
                        <!-- <a href="http://www.coloros.com/" target="_top" onclick="_gaq.push(['_trackEvent', 'TextLineClick', 'JiFenShangCheng', 'ColorOS']);">ColorOS</a> -->
                        <!-- <a href="http://www.oppo.cn/" target="_top" onclick="_gaq.push(['_trackEvent', 'TextLineClick', 'JiFenShangCheng', 'SheQu']);">社区</a> -->
                    </div>
                    <div class="search-form" style="display: none;">
                        <input value="" class="mall-search" disabled="disabled" placeholder="Search" type="text">
                        <input class="submit-search" disabled="disabled" onclick="oppo.search.action($('.mall-search').val())" type="submit">
                    </div>
            </div>
        </div>
    </div>
    <div class="head-shadow"></div>
</div>

    <div id="content">
        <div class="points-unit" id="points-bread-crumb">
            <div class="points-wrapper">
                <div class="points-rows">
                    <a href="<?php echo U('Jifen/index');?>" target="_top"><img src="/buy/Public/Home/Jifen/Images/home.png"></a><span>&nbsp;&gt;&nbsp;</span><a href="<?php echo U('Jifen/index');?>">积分商城</a><span>&nbsp;&gt;&nbsp;</span><span><?php echo ($info['name']); ?></span>
                </div>
            </div>
        </div>
        <div id="detail">
            <div class="product-intro">
                <div class="gallery">
                    <div class="booth">
                        <img src="<?php echo ($info['logo']); ?>">
                    </div>
                </div>
                <div class="property">
                    <div class="name"><?php echo ($info['name']); ?></div>
                    <div class="tip">
                        <!-- <p>&nbsp;</p> -->
                        <p>&nbsp;</p>
                    </div>
                    <div class="points"><label>兑换积分：</label><span id="goods_points"><?php echo ($info['price']); ?></span><span class="pointsunit">积分</span></div>
                    <div class="limit"><input id="orderlimit" value="5" type="hidden">限兑数量：5个</div>
                    <div class="sku">
                        <dl>
                            <dt>数量：</dt>
                            <dd>
                                <span class="stock" id="J_Stock">
                                    <a href="" class="reduce disable jian"><img style="padding-top: 12px;" src="/buy/Public/Home/Images/jian.png" alt=""></a>
                                    <input id="goods_cnt" class="num" value="1" maxlength="5" title="请输入购买量" readonly="" type="text">
                                    <a href="" class="increase jia"><img style="padding-top: 10px;" src="/buy/Public/Home/Images/jia.png" alt=""></a>
                                </span>
                            </dd>
                        </dl>
                    </div>
                                            <div class="btns clearfix">                    
                            <div class="btn-append"><a href="" id="duihuan">立即兑换</a></div>
                        </div>
                        <div class="result2">已选择 <span id="result-num">1</span> 个礼品，需花费 <span id="result-points"><?php echo ($info['price']); ?></span> 积分</div>
                                    </div>
            </div>
        </div>
        <div class="product-detail">
            <div class="detail-content">
                <div style="display: block;" class="detail-item fns">
                    <div class="points-wrapper"><img alt="" src="<?php echo ($info['picdetail']); ?>" style="width: 1180px; height: 680px;"></div>
                </div>
            </div>
        </div>
</div>
 
	<div id="footer">
		<!-- <div class="foot-tags">
			<div class="foot-tag1"></div>
			<div class="foot-tag2"></div>
			<div class="foot-tag3"></div>
			<div class="foot-tag4" onclick="window.open('http://store.oppo.com/help/13')"></div>
			<div class="foot-tag5" onclick="window.open('http://www.oppo.com/?q=service/network')"></div>
		</div> -->
		<div class="foot-links">
			<ul class="foot-links-content">
				<li>
					<div class="title">关于我们</div>
					<a target="_top" href="">关于OPPO</a>
					<a target="_top" href="">新闻中心</a>
                    <a target="_top" href="">人才招聘</a>
				</li>
				<li>
					<div class="title">推荐机型 </div>
					<a href="" target="_top">N3</a>
					<a href="" target="_top">R5</a>
					<a href="" target="_top">R1C</a>
					<a href="" target="_top">Find 7</a>
				</li>
                                <li>
					<div class="title">购物相关</div>
                        <a target="_top" href="">帮助中心</a>
                        <a target="_top" href="">周边产品</a>
						<a target="_top" href="">OPPO体验店</a>
						<a href="" target="_top">客户服务保障</a>
				</li>
				<li>
					<div class="title">会员中心</div>
					<a target="_top" rel="nofollow" href="">产品注册</a>
					<a target="_top" rel="nofollow" href="<?php echo U('ZhuCe/index');?>">会员注册</a>
					<a target="_top" rel="nofollow" href="<?php echo U('Login/login');?>">会员登录</a>
				</li>
				<li>
					<div class="title">关注我们</div>
					<a href="" class="sina" target="_top">新浪微博</a>
					<a href="" class="qq" target="_top">腾讯微博</a>
					<a href="" class="renren" target="_top">人人网</a>
					<a href="" class="qzone" target="_top">QQ空间</a>
				</li>
				<li>
					<div class="title">联系我们</div>
					<div class="foot-tel">
						<p class="foot-wz-01 foot-tel-01">4001-666-888</p>
						<p class="foot-wz-02">7*24小时客服电话</p>
					</div>
					<div class="foot-zxkf">
						<p class="foot-wz-01 foot-kf-01">在线客服</p>
						<p class="foot-wz-02">服务时段：8:30--22:00</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="foot-bt">
				<div class="foot-bt-content">
					<div class="left">
						<div class="ft-logo-png"><img src="/buy/Public/Home/Jifen/Images/i-f-logo.png"></div>
                        <div class="ft-info">
                            © 2005 - 2015 东莞市永盛通信科技有限公司 版权所有（<a href="http://www.miibeian.gov.cn/" target="_top">粤ICP备 08130115 号</a>）
                        </div>
					</div>
					<div class="foot-bt-links">
						<a href="">版权说明</a>
						<a href="">使用协议</a>
						<a href="">网站地图</a>
						<a href="">友情链接</a>
                        <a href="">联系我们</a>
					</div>
				</div>
		</div>
	</div>
	<!--客户在线咨询-->	
	<div style="display: block;" id="customer-service" class="pendant">
		<!-- <div class="kf_a">
			<div class="pendant_k" style="display:none;">
				<div class="tel">4001-666-888</div>
				<div class="online">
					<p class="online_kf">在线客服</p>
					<p>服务时段：8:30--22:00</p>
					<a class="zx" href="javascript:void(0);"></a>
				</div>
			</div>
			<div class="kefu">
				<a class="pendant_kf" href="javascript:;">客服</a>
			</div>
		</div> -->
		
		<div class="wx_a">
			<div class="pendant_w" style="display: none;">OPPO官方微信</div>
			<div class="weixin">
				<a class="pendant_wx" href="javascript:;">微信</a>
			</div>
		</div>
		<div class="top_a">
			<div class="totop">
				<a class="pendant_top" id="totop" href="javascript:;">返回顶部</a>
			</div>
		</div>        
	</div>
  

</body>
</html>