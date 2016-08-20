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

<link rel="stylesheet" type="text/css" href="/buy/Public/Home/Css/Jifen.css" media="all">

 
    
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
            <div class="points-container" id="points">
                <div class="points-unit" id="points-bread-crumb">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <a href="<?php echo U('Jifen/index');?>" target="_top"><img src="/buy/Public/Home/Jifen/Images/home.png"></a><span>&nbsp;&gt;&nbsp;</span><span>积分商城</span>
                        </div>
                    </div>
                </div>
                <div class="points-unit">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <?php if($_SESSION['isLogin'] != 1): ?><div class="points-rowspan" id="points-user">
                                    <div class="points-user-title"><img src="/buy/Public/Home/Jifen/Images/user-title.png"></div>
                                    <div class="points-user-intro">登录后您将获得的服务：</div>
                                    <div class="points-user-text">1.马上查看自己的积分明细。</div>
                                    <div class="points-user-text">2.立即兑换礼品。</div>
                                    <div class="points-user-login"><a href="<?php echo U('Login/login');?>">立即登录</a></div>
                            </div>
                            <?php else: ?>
                            <style type="text/css">
                                #points-user { width: 290px; padding: 30px; color: rgb(152, 152, 152); }
                                
                                #points-user {
                                    color: rgb(152, 152, 152);
                                    padding: 30px;
                                    width: 290px;
                                }
                                .points-rowspan {
                                    float: left;
                                }
                                .points-user-name { text-align: center; font-weight: bold; font-size: 18px; line-height: 30px;}
                                .points-user-points { font-size: 12px; line-height: 35px; height: 35px; padding: 2px 0px; border-top: 1px solid rgb(230, 230, 230); border-bottom: 1px solid rgb(230, 230, 230); display: block; width: 100%; }
                                .points-user-point { float: left; width: 49%; text-indent: 20px; }
                                .points-user-point2 { border-left: 1px solid rgb(230, 230, 230); }
                                .points-user-how { margin-top: 10px; }
                                .points-user-more { text-align: center; margin-top: 5px; }

                                .points-user-more a { color: rgb(3, 183, 136) ! important; font-size: 12px; line-height: 24px; text-decoration: underline ! important; }
                                .points-user-text2 { font-size: 12px; line-height: 20px; }
                                .points-user-question { text-align: right; }

                                .points-user-avatar { text-align: center; }
                            </style>
                            <div class="points-rowspan" id="points-user">
                                    <div class="points-user-avatar"><img src="<?php echo ($num['pic']); ?>" style="width:120px;border-radius:50%;"></div>
                                    <div class="points-user-name">Hi,&nbsp;<span style="color: #03B788; "><?php echo ($_SESSION['master']['username']); ?></span></div>
                                    <div class="points-user-points">
                                        <div class="points-user-point">我的积分：<span><?php echo ($num['jifentotal']); ?></span></div>
                                        <div class="points-user-point points-user-point2">可用积分：<span><?php echo ($num['jifentotal']); ?></span></div>
                                    </div>
                                    <div class="points-user-more"><a href="">积分明细查询</a></div>
                                    <div class="points-user-how"><a>如何获得积分？</a></div>
                                    <div class="points-user-text2">在OPPO网站购物，订单签收后，您会收到冻结状态的积分，在没有发生退货的情况下，冻结积分将在7天之后激活。</div>
                                    <div class="points-user-question"><a href="">更多常见问题</a></div>
                            </div><?php endif; ?>
                            <div class="points-rowspan" id="points-banner">
                                <div class="oppo-banner" id="oppo-banner">
                                  <div style="display: block;" class="oppo-banner-unit">
                                    <a href="" target="_top">
                                      <img src="/buy/Public/Home/Jifen/Images/142353370048019.jpg" height="390" width="830">
                                    </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="points-unit points-list-bar">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <div class="points-list-title">
                                <a href="">积&nbsp;分 <img src="/buy/Public/Home/Jifen/Images/sort.png"></a>
                                <img src="/buy/Public/Home/Jifen/Images/list-title.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="points-unit points-list">
                    <div class="points-wrapper">
                        
                        <div class="points-rows">
                        <?php if(is_array($info)): foreach($info as $key=>$vo): ?><div class="points-list-product" style="width:212px">
                                    <a href="<?php echo U('Jifen/detail',array('id'=>$vo['id']));?>" target="_top" onclick="_gaq.push(['_trackEvent', 'PictureClick', 'JiFenShangCheng', 'LiJiDuiHuan-13']);"><div class="points-product-image">
                                    <img src="<?php echo ($vo['logo']); ?>" height="136"></div>
                                    <div class="points-product-name"><?php echo ($vo['name']); ?></div>
                                    <div class="points-product-point"><?php echo ($vo['price']); ?>积分</div>
                                    <div class="points-product-btn"><span>立即兑换</span></div></a>
                                </div><?php endforeach; endif; ?>        
                        </div>
                        
                    </div>
                </div>
                                                                                                                    
                <div class="points-unit" id="points-rule">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <div class="points-rule-title">积分兑换规则</div>
                            <div class="points-rule-subtitle">积分获得</div>
                            <div class="points-rule-text">1.用户在OPPO网站购物，按消费金额进行积分，1元=1分，如：会员消费3498元，则积3498分；如遇特殊积分活动，积分计算以活动规定为准；</div>
                            <div class="points-rule-text">2.订单签收后，用户会收到冻结状态的积分，在没有发生退货的情况下，冻结积分将在7天之后激活；如发生退换货，将从积分中扣除由于退换货部分产生的积分差额；</div>
                            <div class="points-rule-subtitle">积分兑换</div>
                            <div class="points-rule-text">1.会员积分可在OPPO官网或指定OPPO体验店兑换相应礼品或配件券，兑换成功后将从会员帐户中扣减相应积分分值；</div>
                            <div class="points-rule-text">2.积分兑换的礼品会定期更新，数量有限，先兑先得，兑完为止；</div>
                            <div class="points-rule-text">3.所有礼品兑换不提供任何发票或报销单据；所有礼品兑换均不提供更换、退货、售后等服务，请仔细看准后再进行兑换； </div>
                            <div class="points-rule-text">4.积分兑换的配件券产生的购物订单如遇退换货，配件券不予返还；</div>
                            <div class="points-rule-text">5.积分兑换的礼品（实物类）统一采用EMS发货。</div>
                            <div class="points-rule-subtitle">温馨提示</div>
                            <div class="points-rule-text">1.积分只在同一会员帐户内累计，不同帐户的积分不能合并。</div>
                            <div class="points-rule-text">2.每一笔积分从产生之日起2年内有效，过期清零。</div>
                            <div class="points-rule-text">3.积分详情可登录OPPO官网 <a href="">个人中心 &gt; 我的积分</a> 模块查询</div>
                            </div>
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