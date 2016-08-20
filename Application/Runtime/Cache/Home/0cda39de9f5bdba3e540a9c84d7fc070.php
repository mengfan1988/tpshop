<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="keywords" content="OPPO软件商店,OPPO 软件商店,NearMe,near me,安卓（Android）软件商店,安卓（Android）软件下载,安卓（Android）游戏下载,手机软件下载,手机游戏下载">
<meta name="description" content="OPPO软件商店致力于为安卓智能手机用户提供方便、便捷的软件下载服务平台，包括近3万款安卓(Android)手机软件、安卓(Android)手机游戏、安卓（Andriod）手机主题免费下载">
<title>OPPO软件商店-安卓软件商店,提供一站式手机软件、手机游戏、手机主题免费下载-NearMe软件商店</title>


	<link rel="stylesheet" type="text/css" href="/Public/Home/App/Css/Appdetail.css" media="all">

</head>

<body>
  <!--  header   -->
  <div class="header">
        <div class="nav">
            <ul>
                <li class="first"><a href="<?php echo U('Index/index');?>">官网</a></li>
                <li class="divide">|</li>
                <li><span>软件商店</span></li>
                <li class="divide">|</li>
                <li><a target="_top" href="">同步</a></li>
                <li class="divide">|</li>
                <li><a target="_top" href="">找回手机</a></li>
                <li class="divide">|</li>
                <li><a target="_top" href="">笔记</a></li>
                <li class="divide">|</li>
                <li><a target="_top" href="">网盘</a></li>
            </ul>
            <?php if($_SESSION['isLogin'] != 1): ?><div id="account_info" class="account_info" style="display: none;">您还没登录？&nbsp;&nbsp;<a href="<?php echo U('Home/Login/login');?>">[登录]</a><a href="<?php echo U('Home/ZhuCe/index');?>">[注册]</a></div>
            <?php else: ?>
             <div id="account_logged" class="account_info" style="display: block;">欢迎您，<span><?php echo ($_SESSION['master']['username']); ?></span>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Home/Login/logout');?>" id="account_logout">[退出]</a> | <a href="<?php echo U('Home/Person/person_index');?>">个人中心</a></div><?php endif; ?>
            <div class="clear"></div>
        </div>
    <div class="title">
      <a class="logo" href="http://store.oppomobile.com/index.html"></a>
      <a class="gw" target="<?php echo U('Index/index');?>" title="点击进入oppo官网"></a>
      <a class="develop" href=""></a>
    </div>
  </div>
     
    <!-- 本页导航及搜索栏 -->
    <div class="nav_this">
        
        <ul id="menu">
            <li class="menu_first">
              <a href="<?php echo U('App/Appindex');?>" class="click first">首页</a>
            </li>
           <?php if(is_array($cates)): foreach($cates as $key=>$vo): ?><li class="menu_soft">
            
              <a href=""><?php echo ($vo['name']); ?></a>
                <div class="submenu">
                  <div class="soft_menu_hover"></div>
                  <div class="submenu_top"></div>
                    <dl class="submenu_content">
                   
                    <?php  $aa = $vo['id']; foreach ($cate[$aa] as $value) { echo '<dd><a href="/index.php/App/Appdetail/id/'.$value['id'].'">'.$value['name'].'</a></dd>'; } ?>
                      <div class="clear"></div>
                    </dl>
                    <div class="submenu_bottom"></div>
                </div>
            </li><?php endforeach; endif; ?>  
          
        </ul>
    
        <div class="search">
               <input id="search_text" value="请输入关键字" class="search_text" type="text">
               <a class="search_a" id="header_search"></a>
               <input id="search_from" value="index" type="hidden">
        </div>
        <div class="search_clew" id="search_clew">
          <ul class="search_clew_ul" id="search_clew_ul"></ul>
      </div>
    </div>
    
	<div class="content">	
    	<div class="bread_nav">当前位置：
    		<span><a href="<?php echo U('Home/App/Appindex');?>">首页</a></span> &gt; 
    	    <span><a href="#">
               <?php switch($detail['tid']): case "1": ?>游戏<?php break;?>
                    <?php case "2": ?>应用<?php break;?>
                    <?php case "3": ?>专题<?php break;?>
                    <?php case "4": ?>主题<?php break; endswitch;?>          
            </a></span> &gt; 
    		<?php echo ($detail['name']); ?>
    	</div>
        <div class="soft_detail">
        	<div class="detail_top"></div>
            <div class="detail_content">
            	<!-- part1  应用信息简介 -->
            	<div class="soft_info">
                	<div class="soft_info_left">
                    	<img src="<?php echo ($detail['pic']); ?>" class="">
                    </div>
                    <div class="soft_info_middle">
                    	<h3><?php echo ($detail['name']); ?></h3>
                        <div class="soft_info_nums">
                        	<div class="star_40"></div>
                            &nbsp;&nbsp;<a title="点击查看评论列表" href=""><span>20924</span>个评分</a>
                            &nbsp;&nbsp;<?php echo ($detail['downcount']); ?>万+次下载  
                        </div>
                        <ul class="soft_info_more">
                        	<li>发布时间：<?php echo ($detail['time']); ?></li>
                            <li>大小：<?php echo ($detail['size']); ?>M</li>
                            <li>版本：<?php echo ($detail['version']); ?></li>
                            <li>类别：
                                <?php switch($detail['tid']): case "1": ?>游戏<?php break;?>
                                    <?php case "2": ?>应用<?php break;?>
                                    <?php case "3": ?>专题<?php break;?>
                                    <?php case "4": ?>主题<?php break; endswitch;?>
                            </li>
                            <li>适用系统：Andriod4.0及以上</li>
                            <div class="clear"></div>
                        </ul>
                        <a class="detail_down" href="<?php echo U('Download/down');?>">下载到电脑</a>
						<a target="_top" class="to_help" href="">如何安装到手机?</a>
                    </div>
                    <div class="soft_info_right">
                                        	<div class="erwei"><img src="/Public/Home/Images/qrcode.png"></div>
                        <a href="javascript:void(0)">如何使用？</a>
                                        </div>
                    <div class="clear"></div>
					
					                </div>
                
                <!-- part2 应用截图 -->
                <div class="detail_title">应用截图</div>
                <div class="soft_img">
                
                	<div class="soft_img_container">
                    <!-- <?php if(is_array($appimg)): foreach($appimg as $key=>$vo): ?>-->
                        <ul style="width: 1005px; margin-left: 0px;" class="img_list">
                            <li>
                                <img src="<?php echo ($appimg[0]); ?>" class="" haswebp="">
                            </li>
                            <li>
                                <img src="<?php echo ($appimg[1]); ?>" class="" haswebp="">
                            </li>
                            <li>
                                <img src="<?php echo ($appimg[2]); ?>" class="" haswebp="">
                            </li>
                           <!--  <li>
                                <img src="/Public/Home/App/Images/78b9788a14cb997e05b31524ba2cce8f.png" class="" haswebp="">
                            </li>
                            <li>
                                <img src="/Public/Home/App/Images/a219281a08efd37b02e5ec37545061b1.png" class="" haswebp="">
                            </li> -->
                        </ul>
                    <!--<?php endforeach; endif; ?> -->
                    </div>
               
                    <!-- <a style="background: transparent url('/Public/Home/App/Images/btns_bg.png') no-repeat scroll -64px 0px; cursor: auto;" onclick="pre()" id="pre_img" class="pre_img_end" href="javascript:void(0)"></a> -->
                    <!-- <a style="background: transparent url('/Public/Home/App/Images/btns_bg.png') no-repeat scroll -16px 0px; cursor: pointer;" onclick="next()" id="next_img" class="next_img" href="javascript:void(0)"></a> -->
                </div>
                
                <!-- part3 应用文字详细介绍 -->
                <div class="detail_title">应用介绍</div>
                <div class="soft_word">
                	
                	<p><?php echo ($detail['appdetail']); ?><br></p>
					<input id="soft_description" value="本应用详情,由于管理员太懒!所以不加了!思密达本应用详情,由于管理员太懒!所以不加了!思密达本应用详情,由于管理员太懒!所以不加了!思密达本应用详情,由于管理员太懒!所以不加了!思密达本应用详情,由于管理员太懒!所以不加了!思密达<br/><br/>【管理员姓名】<br/>-回锅肉：为您7×24小时不间断更新，为你带来第一手资讯；重大、突发新闻推送，30秒到你手中<br/>-独家栏目：众多独家栏目等你来品味，《新闻哥》带你无底线趣味调侃新闻，《贵圈》带你揭秘娱乐圈不为人知的另一面<br/>-媒体订阅：精心挑选近千家优质微信媒体，订阅丰富阅读内容<br/>-个性化推荐：你用得越多，我们推荐的越准，你关心的，尽在眼前<br/>-直播：乐享五大足球联赛、NBA等国内外重大赛事直播，边看直播边聊天，更有神秘娱乐嘉宾等你来发现<br/>-评论互动：看网友辣评，聚焦新闻事发地评论，好友趣评也不错过，与亿万网友一起评论时事<br/>-使用最简单、功能最强大、最省流量的新闻产品<br/><br/>【意见反馈】<br/>- 软件反馈：设置- 意见反馈<br/>- 官方网站：http://news.qq.com/mobile/<br/>- 管理员微信：请@腾讯新闻客户端<br/><br/>特别说明：<br/>非土豪用户，请勿打扰本管理员（http://news.qq.com/mobile/）坐等土豪思密达。" type="hidden">
               		<div>
                    	<a style="display: inline;" class="show_all" onclick="show_all()" href="javascript:void(0)">更多详情</a>
                        <a style="display: none;" class="show_little" onclick="show_little()" href="javascript:void(0)">收起</a>
                    </div>
                    <a class="detail_down" href="<?php echo U('Download/down');?>">下载到电脑</a>
                </div>
                
                <!-- part4  评论 -->
               <!--  <div class="detail_title">
					<div>应用评论&nbsp;&nbsp;<span>共<span id="comments_num">20654</span>条评论</span></div>
					<p style="display: block;"></p>
				</div> -->
				<div id="soft_comment" class="soft_comment">
					<!--  发表评论  -->
					<!-- <div class="write_comment" style="display: none;">
					    <div class="write_comment_top">
					    	<input id="product_id" value="2276672" type="hidden">
					        <input value="" id="soft_grade" type="hidden">
					        <div class="star_nums">
					            <i></i>
					            <i></i>
					            <i></i>
					            <i></i>
					            <i></i>
					        </div>
					       (点击星星可评分) <span id="evaluate"></span>
					    </div>
					    <textarea id="comment"></textarea>
					    <div class="write_comment_bottom">
					        <span>140字以内</span>
					        <span id="comment_info"></span>
					        <a id="comment_submit" href="javascript:void(0)">提交</a>
					        <div class="clear"></div>
					    </div>
					</div> -->
				   
					<!-- 评论列表 -->
					<div class="comments">
						<!-- <div id="comments_list"><div class="li_comment" id="8464387"><div class="li_comment_top"><span class="user_name">U32986776</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R8205</span><span class="time">2015.10.13&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>不错</p></div><div class="li_comment" id="8464374"><div class="li_comment_top"><span class="user_name">U27959147</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R7Plus</span><span class="time">2015.10.13&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>一般</p></div><div class="li_comment" id="8464323"><div class="li_comment_top"><span class="user_name">扣扣937912711</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO OPPO R7</span><span class="time">2015.10.13&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>正规刷单日结赚钱找我！</p></div><div class="li_comment" id="8463831"><div class="li_comment_top"><span class="user_name">匿名用户</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPOR821T</span><span class="time">2015.10.13&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>，，，</p></div><div class="li_comment" id="8463802"><div class="li_comment_top"><span class="user_name">丶梦涵</span><div class="star_ie6_30"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R8207</span><span class="time">2015.10.13&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>可</p></div><div class="li_comment" id="8463033"><div class="li_comment_top"><span class="user_name">U07179499</span><div class="star_ie6_30"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO X9007</span><span class="time">2015.10.12&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>方便就是太占内存了</p></div><div class="li_comment" id="7463284"><div class="li_comment_top"><span class="user_name">U12147032</span><div class="star_ie6_30"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R831S</span><span class="time">2015.10.11&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>，</p></div><div class="li_comment" id="8459536"><div class="li_comment_top"><span class="user_name">z1157028781</span><div class="star_ie6_20"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO OPPO R7</span><span class="time">2015.10.10&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>，</p></div><div class="li_comment" id="8459385"><div class="li_comment_top"><span class="user_name">匿名用户</span><div class="star_ie6_10"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OnePlus ONE A2001</span><span class="time">2015.10.09&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>一加二 腾讯新闻 合作</p></div><div class="li_comment" id="8459286"><div class="li_comment_top"><span class="user_name">羁绊的档案</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO A31</span><span class="time">2015.10.09&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>好</p></div><div class="li_comment" id="8458175"><div class="li_comment_top"><span class="user_name">U21267186</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO 1107</span><span class="time">2015.10.08&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>不错不错</p></div><div class="li_comment" id="8457983"><div class="li_comment_top"><span class="user_name">U19074640</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO 1107</span><span class="time">2015.10.08&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>好用的</p></div><div class="li_comment" id="8457638"><div class="li_comment_top"><span class="user_name">93凡夫俗子</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R8107</span><span class="time">2015.10.08&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>号用</p></div><div class="li_comment" id="8227333"><div class="li_comment_top"><span class="user_name">乌卡卡one</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO OPPO R7</span><span class="time">2015.10.08&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>好</p></div><div class="li_comment" id="8456363"><div class="li_comment_top"><span class="user_name">WUD521</span><div class="star_ie6_10"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO N1T</span><span class="time">2015.10.07&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>。</p></div><div class="li_comment" id="8456315"><div class="li_comment_top"><span class="user_name">爱的埃菲尔</span><div class="star_ie6_10"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R831S</span><span class="time">2015.10.07&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>不好，有些视频新闻都要下载腾讯视频差呀</p></div><div class="li_comment" id="8454633"><div class="li_comment_top"><span class="user_name">U23355014</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO OPPO R7</span><span class="time">2015.10.06&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>好</p></div><div class="li_comment" id="8454632"><div class="li_comment_top"><span class="user_name">匿名用户</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPON1T</span><span class="time">2015.10.06&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>[哈哈]很好</p></div><div class="li_comment" id="8454583"><div class="li_comment_top"><span class="user_name">U25512388</span><div class="star_ie6_10"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO OPPO R7</span><span class="time">2015.10.06&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>更新太慢，没有好的，实事的新闻太少，广告太多</p></div><div class="li_comment" id="8454224"><div class="li_comment_top"><span class="user_name">青青子衿00</span><div class="star_ie6_10"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R8207</span><span class="time">2015.10.05&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>不好！！！有些忍无可忍都不能吐槽！！狗腿子！</p></div><div class="li_comment" id="8453558"><div class="li_comment_top"><span class="user_name">U28564805</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO A51</span><span class="time">2015.10.05&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>很好</p></div><div class="li_comment" id="8453294"><div class="li_comment_top"><span class="user_name">U13558249</span><div class="star_ie6_50"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R831T</span><span class="time">2015.10.05&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>好看</p></div><div class="li_comment" id="8219627"><div class="li_comment_top"><span class="user_name">wslxxdds</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R8007</span><span class="time">2015.10.05&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>不错</p></div><div class="li_comment" id="8210665"><div class="li_comment_top"><span class="user_name">U25288169</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R8207</span><span class="time">2015.10.04&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>爸爸</p></div><div class="li_comment" id="5454280"><div class="li_comment_top"><span class="user_name">U10830223</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">Xiaomi HM 2A</span><span class="time">2015.10.04&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>还行</p></div><div class="li_comment" id="8451360"><div class="li_comment_top"><span class="user_name">U04691098</span><div class="star_ie6_30"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R821T</span><span class="time">2015.10.03&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>。。？？</p></div><div class="li_comment" id="8451272"><div class="li_comment_top"><span class="user_name">U23980722</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R7c</span><span class="time">2015.10.03&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>不错</p></div><div class="li_comment" id="8451085"><div class="li_comment_top"><span class="user_name">朱hh</span><div class="star_ie6_30"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO OPPO R7</span><span class="time">2015.10.03&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>一般</p></div><div class="li_comment" id="8450647"><div class="li_comment_top"><span class="user_name">张友阳</span><div class="star_ie6_30"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO R829T</span><span class="time">2015.10.03&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>好</p></div><div class="li_comment" id="7668019"><div class="li_comment_top"><span class="user_name">U18655275</span><div class="star_ie6_40"></div><a class="author_submit" href="javascript:void(0)" style="display: none;">回复该评论</a><span class="terminal">OPPO 1107</span><span class="time">2015.10.03&nbsp;&nbsp;-- &nbsp;&nbsp;</span><h3 class="clear"></h3></div><p>可豆</p></div></div> -->
						<!-- <a href="javascript:void(0);" class="comment_more" style="display: block;">获取更多评论</a> -->
					</div>
				</div>
                
            </div>
            <div class="detail_bottom"></div>       
        </div>
        
        <!-- 右侧相关推荐 -->
        <div class="soft_about">
        	<div class="soft_about_top title_common">
            	<h1>黑名单应用</h1><div></div>
            </div>
            <div class="soft_about_content">
                <?php if(is_array($hmd)): foreach($hmd as $key=>$vo): ?><div class="li_about">
            	<div class="li_about_left">
                	<a href="">
                    	<img src="<?php echo ($vo['pic']); ?>" class="" title="掌阅阅读" alt="掌阅阅读">
                    </a>
                </div>
                <div class="li_about_middle">
                	<h3>
                		<a href="">
                			<?php echo ($vo['name']); ?>
                		</a>
                	</h3>
                    <div style="display: block;" class="star_40"></div>
                    <p style="display: block;">15000万+次下载</p>
                    <a style="display: none; background: transparent none repeat scroll 0% 0%;" href="###" class="down" >禁止下载哦</a>
                </div>
                <div class="clear"></div>
        	   </div><?php endforeach; endif; ?>
            </div>
            <div class="soft_about_bottom"></div>
        </div>
        <div class="clear"></div>
        <input id="product_author" value="647d5ed406850590569c18c303911ebe" type="hidden">
		
    </div>
<!-- 弹出二维码说明  -->
<div class="pop_erwei">
 	<div class="pop_erwei_top">
     	<span>如何使用二维码</span>
         <a id="erwei_close"></a>
     </div>
     <div class="pop_erwei_content">
     	<h3>使用二维码下载软件更加快捷，方便，只需神奇的一扫，即可实现在手机上快速下载</h3>
         <p>1. 使用NearMe市场的二维码扫描功能。</p>
         <img src="/Public/Home/App/Images/erwei_img1.png">
         <p>2. 使用快拍二维码，可以实现二维码快速扫描下载软件，也可以生成各种二维码分享给好友。</p>
         <img src="/Public/Home/App/Images/erwei_img2.png">
         <a href="javascript:void(0)" class="erwei_down">免费下载</a>
         <a class="erwei_iknown"></a>
     </div>
     <div class="pop_erwei_bottom"></div>
</div>
<!-- 登录框  -->
<div class="pop_login">
	<div class="login_top">
    	<span>用户登录</span>
        <a href="javascript:void(0)"></a>
    </div>
    <div class="login_content">
    	<p>您可以用OPPO或者NearMe账号登录</p>
    	<ul>
        	<li><label>账号：</label><input class="account_text" value="" type="text"> <a target="_top" tabindex="-1" href="http://uc.nearme.com.cn/usercenter/Reg.do?backurl=http%3A%2F%2Fstore.oppomobile.com%2Fproduct%2F0002%2F276%2F672_1.html%3Ffrom%3D1136_-1">注册新账号</a></li>
            <li><label>密码：</label><input value="" type="password"> <a target="_top" tabindex="-1" href="http://uc.nearme.com.cn/usercenter/GotoA2101.do?backurl=http%3A%2F%2Fstore.oppomobile.com%2Fproduct%2F0002%2F276%2F672_1.html%3Ffrom%3D1136_-1">忘记密码</a></li>
        </ul>
        <a href="javascript:void(0)" class="btn" id="logon_btn">登录</a><span id="login_info"></span>
    </div>
</div>
<div class="pop_bg"></div>


    <!--  footer   --> 
    
      
    <a style="display: block;" title="返回顶部"  class="back_top"></a>
      
      <!-- // <script src="/Public/Home/App/Js/h.js" type="text/javascript"></script> -->
      <script src="/Public/Home/App/Js/jquery-1.8.0.min.js" type="text/javascript"></script>
      <script src="/Public/Home/App/Js/statistic.js" type="text/javascript"></script>
      <script src="/Public/Home/App/Js/common.js" type="text/javascript"></script>
      <img src="/Public/Home/App/Images//Public/Home/App/Images/about:blank" style="display: none;">
      <script src="/Public/Home/App/Js/lazyload.js" type="text/javascript"></script>
      <script src="/Public/Home/App/Js/comment.js" type="text/javascript"></script>

  
  
    <div class="footer">
    <div class="footer_center">
      <a target="_top" href="http://white.anva.org.cn/"><div class="icon_anva"></div></a>
      <a target="_top" href="http://white.anva.org.cn/"><div class="icon_bmd"></div></a>
      <div>
        <?php if(is_array($frires)): foreach($frires as $key=>$vo): ?><a href="<?php echo ($vo['link']); ?>"><?php echo ($vo['name']); ?></a>|　　<?php endforeach; endif; ?>
      </div>
   </div>
  <input style="display: none;" id="userId" value="U29154145" type="hidden">   

  
</body>
</html>