<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="keywords" content="OPPO软件商店,OPPO 软件商店,NearMe,near me,安卓（Android）软件商店,安卓（Android）软件下载,安卓（Android）游戏下载,手机软件下载,手机游戏下载">
<meta name="description" content="OPPO软件商店致力于为安卓智能手机用户提供方便、便捷的软件下载服务平台，包括近3万款安卓(Android)手机软件、安卓(Android)手机游戏、安卓（Andriod）手机主题免费下载">
<title>OPPO软件商店-安卓软件商店,提供一站式手机软件、手机游戏、手机主题免费下载-NearMe软件商店</title>




<link rel="stylesheet" type="text/css" href="/buy/Public/Home/Css/Appindex.css" media="all">

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
    <!-- 正文 -->
	    
<div class="content">
		<!-- 广告栏及两个应用推荐 -->
		
<div class="av">
	<div class="sjzs_div">
		<a href="#"></a>
	</div>

</div>
        
        <!-- 小编吐血推荐 -->
		<div class="tuijian">
	<div class="tuijian_title title_common">
    	<h1>小编推荐</h1><div></div>
        <a href="#">更多推荐&gt;&gt;</a>
    </div>
    <div class="tuijian_content_bg"></div>
    <div class="tuijan_content">
	  <?php if(is_array($app)): foreach($app as $key=>$vo): ?><div style="" class="soft_tuijian">
        	<div class="st_left">
            	<a href="<?php echo U('Home/App/Appdetail',array('id'=>$vo['id']));?>"><img src="<?php echo ($vo['pic']); ?>" class="" alt="高铁管家" title="<?php echo ($vo['keywords']); ?>"></a>
            </div>
            <div class="st_right">
            	<h3><?php echo ($vo['name']); ?></h3>
                <div class="star_40"></div>
                <p><?php echo ($vo['downcount']); ?>万+次下载</p>
            </div>
            <div style="display: none;" class="soft_hover">
            	
            	<a href="<?php echo U('Home/App/Appdetail',array('id'=>$vo['id']));?>">
					<h3><?php echo ($vo['name']); ?></h3>            	
					<p><?php echo ($vo['appdetail']); ?></p>
					<div>软件大小：<?php echo ($vo['size']); ?>M</div>
					<div>版本：<?php echo ($vo['version']); ?></div>
				</a>
                <a class="soft_hover_down" href="<?php echo U('Download/down');?>">免费下载</a>
                <div class="icon_new"></div>     <!-- 根据需要设置显示或隐藏New的icon -->
            </div>
        </div><?php endforeach; endif; ?>	
            <div class="clear"></div>
    </div>
</div> 

        <!--左侧 包含热门游戏应用以及精彩专题推荐  -->  
        <div class="left">
        	<!-- 热门应用 -->
            <div class="hot_soft">
   	<div class="hot_soft_title title_common">
       	<h1>热门应用</h1>
           <div></div>
           <a href="#">更多应用&gt;&gt;</a>
       	</div>
       	<div class="hot_soft_zhuanti">
       	       		<a href="#"><b></b><img src="/buy/Public/Home/App/Images/index_app.jpg"></a>
       	       	</div>
       
    <!--  热门效果  -->
    <div style="opacity: 1;" class="hot_soft_container">
    <ul>
        <li>
    		<div class="hot_content">
    			<!-- 分配热门应用 -->
    			<?php if(is_array($hotApp)): foreach($hotApp as $key=>$vo): ?><div class="h_soft">
		            <div class="h_soft_bg">
		                <a href="#">
		                	<img src="<?php echo ($vo['pic']); ?>" class="" alt="<?php echo ($vo['name']); ?>" title="<?php echo ($vo['name']); ?>">
		                </a>
		                <p>
							<a href="#">
								<?php echo ($vo['name']); ?>
							</a>
						</p>
		                <div class="star_40"></div>
		                <a class="down" href="#">下载</a>
		                <!-- <div class="icon_hot"></div> -->
		             </div>
		        </div><?php endforeach; endif; ?>
				<div class="clear"></div>
    		</div>
    	</li>
    </ul>
    </div>
   <!--  <ul class="img_dot2">
        	<li class=""><span></span></li>
        	<li class=""><span></span></li>
        	<li class="nownav"><span></span></li>
        </ul> -->
</div>
            
            <!--热门游戏 -->
            <div class="hot_game">
	<div class="hot_game_title title_common">
    	<h1>热门游戏</h1>
        <img src="/buy/Public/Home/App/Images/tuijian_title_icon.png" style="padding-top:px;" alt="">
        <a href="#">更多游戏&gt;&gt;</a>
    </div>
    <div class="hot_game_zhuanti">
    	<a href="#"><b></b><img src="/buy/Public/Home/App/Images/index_game.jpg"></a>
    </div>
    
    <div style="opacity: 1;" class="hot_soft_container2">
	    <ul>
	    	<li>
	    		<div class="hot_content">
	    		    <?php if(is_array($hotGame)): foreach($hotGame as $key=>$vo1): ?><div class="h_soft">
			            <div class="h_soft_bg">
			                <a href="<?php echo U('App/Appdetail',array('id'=>$vo1['id']));?>">
			                	<img src="<?php echo ($vo1['pic']); ?>" class="" alt="<?php echo ($vo1['name']); ?>" title="<?php echo ($vo1['name']); ?>">
			                <!-- </a> -->
			                <p>
								<!-- <a href="#"> -->
									<?php echo ($vo1['name']); ?>
								
							</p>
							</a>	
			                <div class="star_45"></div>
			                <a class="down" href="<?php echo U('Download/down');?>">下载</a>
			                <!-- <div class="icon_hot"></div> -->
			             </div>
			        </div><?php endforeach; endif; ?>
			    	<div class="clear"></div>
	    		</div>
	    	</li>
	   </ul>
    </div>
   <!--  <ul class="img_dot3">
        	<li class="nownav"><span></span></li>
        	<li class=""><span></span></li>
        	<li class=""><span></span></li>
        </ul> -->
</div>
            
            <!-- 专题 -->
            <div class="zhuanti">
	<div class="zhuanti_title title_common">
    	<h1>精彩专题</h1>
        <div></div>
        <a href="#">更多专题&gt;&gt;</a>
    </div>	
    <div class="zhuanti_content">
                	    	<div class="zt_img">
        	<a class="zt_img_a" href="#"><b></b><img src="/buy/Public/Home/App/Images/4c17774b0fe617db91355ec668ee4328.jpg"></a>
            <h2><a href="#">假期警报器</a></h2>
        </div>
    	        	    	<div class="zt_img">
        	<a class="zt_img_a" href="#"><b></b><img src="/buy/Public/Home/App/Images/b14dac2e0149bc4f890ad56f3f59a609.jpg"></a>
            <h2><a href="#">国庆有礼</a></h2>
        </div>
    	        	    	<div class="zt_img">
        	<a class="zt_img_a" href="#"><b></b><img src="/buy/Public/Home/App/Images/5a00427f992e312da275ba22b70c16cc.png"></a>
            <h2><a href="#">这些电台听懂你的心</a></h2>
        </div>
    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    	    </div>
</div>
        </div>  
         
        <!--右侧 包含排行榜及NearMe微博等信息  -->  
        <div class="right">
        
        	<!-- 排行榜 -->
        	<div class="paihang">
	<div class="paihang_title title_common">
    	<h1>排行榜</h1>
        <div></div>
        <a href="#">更多榜单&gt;&gt;</a>
    </div>
	<ul class="paihang_tab">
		<li class="li_first"><a class="tab_click" href="#">应用榜</a></li>
		<li><a href="#">游戏榜</a></li>
    </ul>
	<ul id="top_app" class="paihang_list">
		<?php if(is_array($hotApp)): foreach($hotApp as $key=>$app): ?><li>
	    	<div class="pl_num"><img src="/buy/Public/Home/App/Images/tuijian_title_icon2.png" style="padding-top:5px;" alt=""></div>
	            <div class="pl_icon">
					<a title="点击查看详情" href="<?php echo U('App/Appdetail',array('id'=>$app['id']));?>">				
						<img src="<?php echo ($app['pic']); ?>" class="" alt="<?php echo ($app['name']); ?>" title="<?php echo ($app['name']); ?>">
					</a>
				</div>
	            <div style="padding-top: 0px;" class="pl_info">
	                <p style="display: block;">
						<a href="#">					
							<?php echo ($app['name']); ?>
						</a>
					</p>
	                <div style="display: block;" class="star_40"></div>
					<a style="display: none; background: transparent none repeat scroll 0% 0%;" title="点击免费下载" href="<?php echo U('Download/down');?>" class="pl_down">下载</a>
	            </div>
	    </li><?php endforeach; endif; ?>
		</ul>
	<ul style="display: none;" id="top_game" class="paihang_list">
		<?php if(is_array($hotGame)): foreach($hotGame as $key=>$Game): ?><li>
	    	<div class="pl_num"><img src="/buy/Public/Home/App/Images/tuijian_title_icon.png" style="padding-top:5px;" alt=""></div>
	            <div class="pl_icon">
					<a title="点击查看详情" href="<?php echo U('App/Appdetail',array('id'=>$app['id']));?>">				
						<img src="<?php echo ($Game['pic']); ?>" class="" alt="<?php echo ($Game['name']); ?>">
					</a>
				</div>
	            <div class="pl_info">
	                <p>
						<a href="#">					
							<?php echo ($Game['name']); ?>
						</a>
					</p>
	                <div class="star_45"></div>
					<a title="点击免费下载" href="<?php echo U('Download/down');?>" class="pl_down">下载</a>
	            </div>	        
	    </li><?php endforeach; endif; ?>
		</ul>
</div>
        
            <!-- NearMe 官方微博 -->
            <div style="display: none;" class="weibo">
                <h1>NearMe官方微博</h1>
                <iframe style="margin-left: 5px; margin-top: 6px; background: transparent none repeat scroll 0% 0%;" class="share_self" scrolling="no" src="" frameborder="0" height="200" width="230"></iframe>
            </div>
   	    </div>           
        <div class="clear"></div>
    </div>

    <!--  footer   --> 
    
	<a style="display: block;" title="返回顶部"  class="back_top"></a>
      <!-- // <script src="/buy/Public/Home/App/Js/h.js" type="text/javascript"></script> -->
          <script src="/buy/Public/Home/App/Js/jquery-1.8.0.min.js" type="text/javascript"></script>
          <script src="/buy/Public/Home/App/Js/statistic.js" type="text/javascript"></script>
          <script src="/buy/Public/Home/App/Js/common.js" type="text/javascript"></script><img src="/buy/Public/Home/App/Images/about:blank" style="display: none;">
            <script src="/buy/Public/Home/App/Js/lazyload.js" type="text/javascript"></script>
    
  
  
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