<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg" style="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $_SESSION['web']['name'];?>『OPPOR7 Plus智能手机』最新报价_图片_配置参数-OPPO智能手机官网 </title>
    <meta name="keywords" content="OPPOR7 Plus智能手机,OPPO R7 Plus最新报价,OPPOR7 Plus配置参数,OPPOR7 Plus图片,OPPOR7 Plus评测 ">
    <meta name="description" content="OPPO智能手机官网为您提供OPPO R7 Plus智能手机,移动版,联通版,电信版的最新报价,图片,OPPOR7 Plus手机的参数配置及评测,帮您全面了解OPPO R7 Plus智能手机. ">
    


    


    


    <!--[if lt IE 9]>
      <script src="http://store.oppo.com/lib/html5shiv.js"></script>

      <script src="http://store.oppo.com/lib/respond.min.js"></script>

      <script src="http://store.oppo.com/lib/selectivizr-min.js"></script>

      <link media="all" type="text/css" rel="stylesheet" href="http://store.oppo.com/assets/stylesheets/ie.css">

    <![endif]-->
      <link rel="shortcut icon" href="/20160727/buy/Public/Home/Images/favicon.ico">
     <script type="text/javascript" src="/20160727/buy/Public/Home/js/jquery-1.8.3.min.js"></script>   
     <script type="text/javascript" src="/20160727/buy/Public/Home/js/head_footer.js"></script>   
 
<link rel="stylesheet" type="text/css" href="/20160727/buy/Public/Home/Css/detail1.css" media="all">
<link rel="stylesheet" type="text/css" href="/20160727/buy/Public/Home/Css/detail.css" media="all">
<link rel="stylesheet" type="text/css" href="/20160727/buy/Public/Home/Css/uploadifive.css">
  
<script src="/20160727/buy/Public/Home/js/jquery.uploadifive.min.js" type="text/javascript"></script>
 <script type="text/javascript">
    var pic='';
    <?php $timestamp = time();?>
    $(function() {

        $('#file_upload').uploadifive({
          'auto'             : false,//是否自动上传
          // 'checkScript'      : 'check-exists.php',
          'formData'         : {

          'timestamp' : '<?php echo $timestamp;?>',
          'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
          'name':'img',
                               },//form表单的其他属性值
          'queueID'          : 'queue',//上传队列元素的id值
          'uploadScript'     : '<?php echo U('Assess/add');?>',//上传的脚本地址
          'fileObjName':'img',//设定当前file元素的name属性   <input type="file" name="img"  />
          'onUploadComplete' : function(file, data) {  //success :function()
            pic += eval(data)//执行成功的执行代码 
            

          }
        });

        

      
    });


  </script>      
  <script type="text/javascript" src="/20160727/buy/Public/Home/js/detail.js"></script>
  <script type="text/javascript" src="/20160727/buy/Public/Home/js/car.js"></script>
 

</head>
<body style="">
  
          <header class="main-header main-header-bottom">
  <div class="upper-area">
    <div class="wrapper g">
      <ul class="gi menu-sec">
  
  
  
  
  
  <!-- <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='http://points.oppo.com/' target='_blank'>积分商城</a>
  </li> -->
  <!-- <li class='gi gi-search' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='#' class='m-item'><img src="/media/images/icon-menu-search.png" /></a>
  </li> -->
<li class="gi" data-desktop=".menu-sec" data-mobile=".main-menu nav>ul">
    <a href="" target="_top">社区</a>
  </li><li class="gi" data-desktop=".menu-sec" data-mobile=".main-menu nav>ul">
    <a href="" target="_top">ColorOS</a>
  </li><li class="gi" data-desktop=".menu-sec" data-mobile=".main-menu nav .nav-ul-view > ul">
    <a href="<?php echo U('Home/App/Appindex');?>" target="_top">软件商店</a>
  </li><li class="gi" data-desktop=".menu-sec" data-mobile=".main-menu nav .nav-ul-view > ul">
    <a href="" target="_top">手机助手</a>
  </li><li class="gi" data-desktop=".menu-sec" data-mobile=".main-menu nav .nav-ul-view > ul">
    <a href="" target="_top">云服务</a>
  </li></ul>      <div class="search gi">
  <a class="js-toggle-close" href="#">
    <span class="icon icon-search"></span>
  </a>
  <div class="search-form js-content">
    <div class="wrapper">
      
    <form action="" class="main-form" data-desktop=".search-form .wrapper" data-mobile=".main-menu .search">

        <div class="input-button-item"><input value="" placeholder="搜索OPPO商品" name="q" type="text"><button class="button button-primary" type="submit">搜索</button>
        </div>
      </form></div>
  </div>
</div>      
<ul class="gi log-area">
<?php if($_SESSION['isLogin'] == 1): ?><li class="gi show hasLogin" data-desktop=".upper-area .log-area" data-mobile=".mobile-tools .log-area">
      <a href="<?php echo U('Home/Person/index');?>">
        <span class="text">我的OPPO</span>
        <span class="icon icon-messages"></span>
        <span class="n-messages">(0)</span>
      </a>
    </li>
    <li class="gi show hasLogin" data-desktop=".upper-area .log-area" data-mobile=".mobile-tools .log-area">
      <a class="logout" href="<?php echo U('Home/Login/logout');?>">退出</a>
    </li>
<?php else: ?>
    <li class="gi hasLogout show" data-desktop=".upper-area .log-area" data-mobile=".mobile-tools .log-area">
      <a href="<?php echo U('Home/Login/login');?>">
        登录
      </a>
    </li>
    <li class="gi hasLogout show" data-desktop=".upper-area .log-area" data-mobile=".mobile-tools .log-area">
      <a href="<?php echo U('Home/ZhuCe/index');?>">
        注册
      </a>
    </li><?php endif; ?>
  </ul>      
<ul class="gi menu-lang">
  
<li class="gi gi-language" data-desktop=".menu-lang" data-mobile=".main-menu nav .nav-ul-view > ul">
    <a class="lang-link js-toggle-close" href="">Global</a>
    
  <div class="languages js-content" data-desktop=".gi-language" data-mobile=".languages-panel">
      <div class="wrapper">
        <h3 class="h-epsilon">Select your country or region</h3>
        <ul>
          <li>
          <a href="/">Algérie</a>
          </li>
          <li>
          <a href="">Australia</a>
          </li>
          <li>
          <a href="">Bangladesh</a>
          </li>
          <li>
          <a href="">Egypt</a>
          </li>
          <li>
          <a href="">Global</a>
          </li>
          <li>
          <a href="">India</a>
          </li>
          <li>
          <a href="">Indonesia</a>
          </li>
          <li>
          <a href="">Kenya</a>
          </li>
          <li>
          <a href="">Malaysia</a>
          </li>
          <li>
          <a href="">Maroc</a>
          </li>
          <li>
          <a href="">México</a>
          </li>
          <li>
          <a href="">Nigeria</a>
          </li>
          <li>
          <a href="">Pakistan</a>
          </li>
          <li>
          <a href="">Philippines</a>
          </li>
          <li>
          <a href="">Singapore</a>
          </li>
          <li>
          <a href="">Sri Lanka</a>
          </li>
          <li>
          <a href="">台灣</a>
          </li>
          <li>
          <a href="">UAE</a>
          </li>
          <li>
          <a href="">Việt Nam</a>
          </li>
          <li>
          <a href="">ประเทศไทย</a>
          </li>
          <li>
          <a href="">Myanmar</a>
          </li>
          <li>
          <a class="current" href="">中国</a>
          </li>
        </ul>
      </div>
    </div></li></ul>    </div>
  </div>
  <div class="bottom-area">
    <div class="wrapper">
      <a class="js-open-menu" href="#">
        <i class="js-open-menu-bar"></i>
      </a>
      
      <div class="shop-cart">
  <a href="<?php echo U('Car/showCart');?>">
    <span class="text">购物车</span>
    <span class="icon icon-cart"></span>
    <span class="n-item-cart cart_number"><?php if(empty($_SESSION['talCount'])){ echo "0";}else{ echo $_SESSION['talCount'];} ?></span>
  </a>
</div>      <div class="logo logo-extend">
        <a href="">
          <!-- <img alt="" src="/20160727/buy/Public/Home/Images/oppo_logo.png"> -->
          <img src="/20160727/buy/Public<?php echo $_SESSION['web']['pic']?>">
        </a>
        <!-- <a class="logo-special oppo-tj"  data-tj="www|img|revision|special-logo">
          <img src="/media/images/revision/qixi/qixi-logo.gif" />
        </a> -->
      </div>
      <a class="js-open-user" href="#">
        <img alt="" src="/20160727/buy/Public/Home/Images/icon-menu-user.png">
      </a>
      <div class="main-menu">
        <!-- <div class='mobile-tools'>
          <a class='js-close-menu' href='#'>
            <img alt='' src='/cn/media/images/icon-menu-close.png' />
          </a>
          <ul class='g log-area'></ul>
        </div> -->
        <div class="search"></div>
        <nav>
  <div class="nav-ul-view">
  <ul class="menu g">
    <li class="gi
    ">
      <a class="m-item" href="<?php echo U('Home/Index/index');?>">
        <span>首页</span>
      </a>
    </li>
    <li class="gi">
      <a class="m-item" href="<?php echo U('Home/Jifen/index');?>">
        <span>积分商城</span>
      </a>
    </li>
    <li class="gi">
      <a class="m-item" href="">
        品牌
        <span class="js-toggle-submenu toggle"></span>
      </a>
      <ul class="sub-menu">
        <li>
          <a href="">关于OPPO</a>
        </li>
        <li>
          <a href="">OPPO历史</a>
        </li>
        <li>
          <a href="">OPPO风采</a>
        </li>
        <li>
          <a href="">官方新闻</a>
        </li>
        <li>
          <a href="">我们的视频</a>
        </li>
        <li>
          <a href="">OPPO摄影廊</a>
        </li>
      </ul>
    </li>
    <li class="gi
        is-active
        ">
      <a class="m-item" href="">
        <span>在线商城</span>
        <span class="js-toggle-submenu toggle"></span>
      </a>
      <ul class="sub-menu">
        <li>
          <a href="<?php echo U('Phone/list1');?>">手机</a>
        </li>
        <li>
          <a href="<?php echo U('Part/index');?>">配件</a>
        </li>
        <li>
          <a href="9">购物指南</a>
        </li>
        <li>
          <a href="<?php echo U('Jifen/index');?>">积分商城</a>
        </li>
      </ul>
    </li>
    <li class="gi">
      <a class="m-item" href="<?php echo U('Dian/index');?>">
        体验店
      </a>
    </li>
    <li class="gi">
      <a class="m-item" href="<?php echo U('IMEI/index');?>">
        服务
              </a>
    </li>
        </ul>
  </div>

</nav>
      </div>
      <div class="user-menu">
<div class="relative">
  <ul>
    <li class="user-menu-login">
      <a href="">我的订单</a>
    </li>
    <li class="user-menu-login">
      <a href="">账户信息</a>
    </li>
    <li class="user-menu-login">
      <a href="">配送地址</a>
    </li>
    <li class="user-menu-login user-menu-message">
      <a href="">系统消息</a>
    </li>
    <li class="user-menu-login user-menu-cart">
      <a href="<?php echo U('Car/showCart');?>">购物车</a>
    </li>
    <li class="user-menu-login user-menu-toLogin">
      <a href="<?php echo U('Home/Login/loginin');?>">
        登录
      </a>
    </li>
    <li class="user-menu-logout">
      <a href="<?php echo U('Home/Login/logout');?>">退出</a>
    </li>
  </ul>
</div>
</div>    </div>
  </div>
  <div class="nav-sub-menu">
  <div class="relative"><ul class="sub-menu">
        <li>
          <a href="<?php echo U('Phone/list1');?>">手机</a>
        </li>
        <li>
          <a href="<?php echo U('Part/index');?>">配件</a>
        </li>
        <li>
          <a href="">购物指南</a>
        </li>
        <li>
          <a href="<?php echo U('Jifen/index');?>" target="_top">积分商城</a>
        </li>
      </ul></div>
</div>
<div class="nav-search-mask"></div>
<div class="nav-search">
  <div class="nav-search-container">
    <div class="nav-search-content">
      <div class="nav-search-input">
        <form action="" class="main-form">
          <input value="" placeholder="搜索OPPO商品" name="q" type="text">
          <button class="button" type="submit">搜索</button>
          <a href="" class="nav-search-close">取消</a>
        </form>
      </div>
    </div>
  </div>
</div>  <div style="display: none;" class="languages-panel"></div>
</header>

 
  
      <main class="main-content">
    <div class="wrapper">
            <ul class="breadcrumb">
  <li>
    <a href="<?php echo U('Index/index');?>">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  <a href="<?php echo U('Phone/list1');?>">
            商品列表
            <span>/</span>
          </a>
              </li>
          <li>
                  <?php echo ($phoned['phoneName']); ?>
              </li>
      </ul>
          </div>
                <div class="buying-details">

  <article class="wrapper">
    <div class="buying-header-mov"></div>
    <div class="g">
      <div class="gi lap-two-fifths desk-one-half">
        <div class="product-gallery js-tabs">
    <div style="visibility: visible;" class="  js-tab-content swipe" id="product-swipe">
        <div style="width: 2940px;" class="swipe-wrap">
                     <?php if(is_array($lunbo)): foreach($lunbo as $key=>$vo): ?><div style="width: 588px; left: -<?php echo ($key*588); ?>px; transition-duration: 0ms; transform: <?php echo ($key==0 ? 'translateX(0px)' :'translateX(588px)'); ?>;" class="swipe-slide  <?php echo ($key==0 ? 'is-active' :''); ?> lunbopicxu">
                          <img alt="" title="" src="<?php echo ($vo['pic']); ?>">
                        </div><?php endforeach; endif; ?>

                       
                    </div>
    </div>
    <div class="product-gallery-items">
        <div class="ps-carousel owl-loaded owl-drag" id="product-carousel">
                        
                        
                        
                        
                        
                    <div class="owl-stage-outer">
                    <div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 508px;" class="owl-stage">
                        <?php if(is_array($lunbo)): foreach($lunbo as $key=>$vo): ?><div style="width: 101.6px;" class="ps-carousel-item active ">
                          <div class="ps-item xiaolunbo <?php echo ($key==0 ? 'ps-item-active' :''); ?>" xu=<?php echo ($key); ?> >
                                <a href=""  onclick="return false" >
                                    <img alt="" src="<?php echo ($vo['pic']); ?>">
                                </a>
                          </div>
                        </div><?php endforeach; endif; ?>
                         
                          </div>
                        </div>



                        <div class="ps-carousel-nav disabled">
                            <div class="ps-carousel-prev disabled">prev</div>
                            <div class="ps-carousel-next disabled">next</div>
                        </div>
                            <div class="owl-dots disabled">
                              
                            </div>
              </div>
          </div>
      </div>
    </div>
      <div class="gi lap-three-fifths desk-one-half">
        <div class="buying-header-desk">
          
          
        <h1 class="product-title" data-desktop=".buying-header-desk" data-mobile=".buying-header-mov"><?php echo ($phoned['phoneName']); ?></h1><p class="product-name-extra" data-desktop=".buying-header-desk" data-mobile=".buying-header-mov"></p></div>
        <div class="buying-price"><p>
                                      <strong class="price">￥2999.00</strong>
                                  </p>
        </div>
        <div class="add-cart-form">
  <form action="<?php echo U('Car/insert');?>" id="add-cart-form" method="post">
      <input type="hidden" name="id" value = "<?php echo ($phoned['id']); ?>">
      <input type="hidden" name="color" value = "0">
      <input type="hidden" name="mealId" value = "0">
      <input type="hidden" name="fuwuId" value = "0">
      <input type="hidden" name="fenlei" value = "0">
    
      
        <section class="g module product-selector" data-common-name="attribute-0" data-selector-type="box">
        <div class="gi one-third desk-one-fifth">
            <div class="radio-label">网络</div>
        </div>
        <div class="gi two-thirds desk-four-fifths">
            <div class="g g-wrapper-s">
                  <?php if(is_array($netwokss)): foreach($netwokss as $key=>$vo): ?><div class="gi one-half desk-one-third">
                        <a href="<?php echo U('Phone/detail',array('type'=>$phoned['type'],'id'=>$key));?>" class="swatch <?php echo ($phoned['id'] ==$key? 'selected':''); ?>">
                            <span id="<?php echo ($key); ?>"><?php echo ($vo); ?></span>
                        </a>
                    </div><?php endforeach; endif; ?>
                    
            </div>                
        </div>
    </section>
        <section class="g module product-selector" data-common-name="attribute-1" data-selector-type="box">
        <div class="gi one-third desk-one-fifth">
            <div class="radio-label">颜色</div>
        </div>
        <div class="gi two-thirds desk-four-fifths">
            <div class="g g-wrapper-s">
              <?php if(is_array($colors)): foreach($colors as $key=>$vo): ?><div class="gi one-half desk-one-third">
                    <a href="" class="swatch phoneColor" colorId="<?php echo ($key); ?>" >
                        <span><?php echo ($vo); ?></span>
                    </a>
                  </div><?php endforeach; endif; ?>
                  
            </div>
        </div>
    </section>
       <!--  <section class="g module product-selector" data-common-name="attribute-2" data-selector-type="box">
        <div class="gi one-third desk-one-fifth">
            <div class="radio-label">容量</div>
        </div>
        <div class="gi two-thirds desk-four-fifths">
            <div class="g g-wrapper-s">
                                <div class="gi one-half desk-one-third">
                    <a href="" class="swatch selected">
                        <span>32G</span>
                    </a>
                </div>
                            </div>
        </div>
    </section> -->
            <div class="g product-gifts" style="display:<?php echo empty($gifts) ? 'none' :'block';?>"  >
        <div class="one-third desk-one-fifth">
                <div class="y-label">赠品</div>
        </div>
        <!-- <input name="zengping" value="<?php echo ($gifts); ?>" type="hidden"> -->
        <div class="gi two-thirds desk-four-fifths">
                        <?php if(is_array($gifts)): foreach($gifts as $key=>$vo): ?><div class="g gift-item clearfix">

                            <!-- <input name="gift[]" value="291" type="hidden"> -->
                            <div class="y-img"><img src="<?php echo ($vo[pic]); ?>"></div>
                            <span class="y-name"><a href=""  target="_top"><?php echo ($vo['title']); ?></a></span>
                        </div><?php endforeach; endif; ?>
                        
        </div>
    </div>
     
     <div class="g pro-service" style="display:<?php echo empty($meals) ? 'none' :'block';?>">
      <input name="mealPic" value="0" type="hidden">
      <input name= "mealTitle" value="0" type="hidden">
      <input name= "mealPartId" value="0" type="hidden">
      <input name= "mealPrice" value="0" type="hidden">
      <input name= "mealnum" value="0" type="hidden">
      <div class="one-third desk-one-fifth" type="hidden">
        <div class="y-label">套餐</div>
      </div>
      <div class="gi two-thirds desk-four-fifths">
        <div class="g pro-service-defer">
              <?php if(is_array($meals)): foreach($meals as $key=>$vo): ?><a mealnum="<?php echo ($vo['num']); ?>" mealPrice="<?php echo ($vo['price']); ?>" mealId="<?php echo ($vo['id']); ?>" mealPic="<?php echo ($vo['pic']); ?>"  mealTitle = "<?php echo ($vo['title']); ?>" mealPartId="<?php echo ($vo['partId']); ?>" class="mealId gi pro-service-tab service-repair tab-normal"  style="width:300px;text-align:center;line-height:height;margin-top:5px" data-ttl="6">
                  <span class="service-flag-defer y-img" style="padding:0px ;border-right:1px solid rgb(218, 218, 218)">
                  <img src="<?php echo ($vo['pic']); ?>" style="width:30px ;padding:0px ;"></span> 
                  <span style="padding-top:10px"><?php echo ($vo['title']); ?></span> <i class="icon icon-tab-selected"></i>
                </a><br><?php endforeach; endif; ?>
        </div>
         
      </div>
     </div>
        <!-- <input name="service-repair" value="0" type="hidden">
    <input name="service-screen" value="0" type="hidden"> -->
    <div class="g pro-service">
      <div class="one-third desk-one-fifth">
        <div class="y-label">服务</div>
      </div>
      <div class="gi two-thirds desk-four-fifths">
        <div class="g pro-service-defer">
              <a  fuwuId="1" class="fuwu gi pro-service-tab service-repair tab-normal" data-ttl="6">
              <span class="service-flag-defer">延</span> <span>延保半年 ￥79</span> <i class="icon icon-tab-selected"></i></a>
              <a  fuwuId="2" class="fuwu gi pro-service-tab service-repair tab-normal" data-ttl="12"> 
               <span class="service-flag-defer">延</span> <span>延保一年 ￥129</span> <i class="icon icon-tab-selected"></i></a>
        </div>
        
         <div class="pro-service-igree">
                <p>购买保险服务表示您已同意<a id="service-igree">《OPPO保障服务条款》</a></p>
         </div>
      </div>
     </div>
    
    <div class="g slab-white-border buying-actions">
              <div class="gi lap-one-third">
          <div class="wrapper">
            <div class="counter-box" id="product-amount">
              <a class="btn minus disabled jian" data-bind="minus">-</a>
              <input class="number" name="num" id="amount-textbox" value="1" type="text">
              <a class="btn plus disabled jia" data-bind="plus">+</a>
            </div>
          </div>
        </div>
        <div class="gi one-half">
            <input type="submit" class="button-light" id="button-buy" value="加入购物车">
          </div>
          </div>
  </form>
</div>
        
        <div class="g delivery-specs pro-delivery-specs">
          <div class="gi one-half desk-one-quarter">            <div class="badge">
              <div class="badge-item">
                <span class="icon icon-postage"></span>
              </div>
              <div class="badge-info">
                <span>79元起包邮</span>
              </div>
            </div>
          </div>
          <div class="gi one-half desk-one-quarter">
            <a href="" target="_top">
            <div class="badge">
              <div class="badge-item">
                <span class="icon icon-return"></span>
              </div>
              <div class="badge-info">
                <span>7天包退30天包换</span>
              </div>
            </div>
            </a>
          </div>
          <div class="gi one-half desk-one-quarter">
            <a href="" target="_top">
            <div class="badge">
              <div class="badge-item">
                <span class="icon icon-credit"></span>
              </div>
              <div class="badge-info">
                <span>分期付款</span>
              </div>
            </div>
            </a>
          </div>
          <div class="gi one-half desk-one-quarter">
            <div class="badge">
              <div class="badge-item">
                <span class="icon icon-points"></span>
              </div>
              <div class="badge-info">
                <span>购物返积分</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </article>
</div>
    <div class="product-related">
        <div class="wrapper">
            <div class="related-tabs">
                <ul class="clearfix tabs" data-bind="related">
                     <li class="oppo-tj y-tab-active ss" data-tj="store|tab|recommend|related"><a href="#" class="hot">热卖推荐</a></li>
                     <li data-type="browse" data-tj="store|tab|recommend|browse" class="oppo-tj  aa" style=""><a href="#" class="kan">最近浏览</a></li>
                </ul>
            </div>
            <div class="related-view" data-tab="related">
                  <div class="related-tab1" style="display: block;">
                    <div class="related-carousel">
                        <div class="ps-carousel owl-loaded owl-drag" data-bind="carousel">
                                                        
                                                        
                                                        
                                                        
                           <div class="owl-stage-outer">
                           <div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1036px;" class="owl-stage">

                           <?php if(is_array($hotp)): foreach($hotp as $key=>$vo): ?><div style="width: 259px;" class="ps-carousel-item active">
                                <div class="ps-item  ps-item-active ">
                                  <div class="related-box">
                                      <div class="y-image">
                                          <a href="" data-tj="store|a|product_related|288" class="oppo-tj" target="_top"><img alt="" src="<?php echo ($vo['pic']); ?>" class="lazy"></a>
                                      </div>
                                      <div class="y-heading">
                                          <a href="" data-tj="store|a|product_related|288" class="oppo-tj" target="_top"><?php echo ($vo['phoneName']); ?></a>
                                      </div>
                                      <div class="y-price">
                                              <em>¥<?php echo ($vo['price']); ?></em>
                                        </div>
                                    
                                     <i class="ribbon ribbon-cheap" style="display:block"></i>
                                   </div>
                              </div>
                            </div><?php endforeach; endif; ?>
                           </div>
                        </div>
                        <div class="ps-carousel-nav disabled"><div class="ps-carousel-prev disabled">prev</div><div class="ps-carousel-next disabled">next</div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>
                    </div>
                </div>
                   <div style="display: none;" class="related-tab2" data-type="browse">
                    <div class="related-carousel">
                     <div class="ps-carousel owl-loaded owl-drag">                                              
                     <div class="owl-stage-outer">
                     <div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;" class="owl-stage">
                     <?php if(empty($kanP) == false): if(is_array($kanP)): foreach($kanP as $key=>$vo): ?><div class="ps-carousel-item">
                     <div class="ps-item  ps-item-active">         
                     <div class="related-box">            
                      <div class="y-image">                 
                      <a href="" target="_top" data-tj="store|a|product_browse|320" class="oppo-tj">
                      <img alt="" class="lazy" src="<?php echo ($vo['pic']); ?>"></a>             
                      </div>             
                      <div class="y-heading">                
                       <a href="" target="_top" data-tj="store|a|product_browse|320" class="oppo-tj"><?php echo ($vo['phoneName']); ?></a>             
                       </div>             
                       <div class="y-price">                                                  
                        <em>¥<?php echo ($vo['price']); ?></em>                                               
                        </div>                          
                        <i class="ribbon ribbon-new"></i>                      
                        </div>     
                        </div>
                        </div><?php endforeach; endif; ?>
                       <?php else: ?><div style="width:100%;height:244px ;text-align:center;line-height:224px;font-size:35px">亲,还没有浏览记录~~~~~~</div style="width:100%;height:100pxS"><?php endif; ?>
                      </div>
                        </div>
                        <div class="ps-carousel-nav disabled">
                          <div class="ps-carousel-prev disabled">prev</div>
                          <div class="ps-carousel-next disabled">next</div>
                        </div>
                        <div class="owl-dots disabled">
                        <div class="owl-dot active"><span></span>
                        </div></div>
                        </div></div>


                </div>
            </div>
        </div>
    </div>
            <div class="product-view">
                <div class="product-view-tabs">
            <div class="wrapper">
              <ul class="clearfix tabs" id="product-tabs">
                                    <li class="oppo-tj <?php echo ($fenye == 3 ? '' : 'y-tab-active'); ?>" data-hash="features" data-tj="store|tab|product_detail|product_features"><a href="" onclick="return false">商品详情</a></li>
                                    <li class="oppo-tj" data-hash="params" data-tj="store|tab|product_detail|product_params"><a onclick="return false">规格参数</a></li>
                                    <li class="oppo-tj <?php echo ($fenye == 3 ? 'y-tab-active' : ''); ?>" data-hash="comments" data-tj="store|tab|product_detail|product_comments"><a  onclick="return false" href="" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'comment-tab']);">用户评价 <span id="comment-total">(<?php echo ($assessCount); ?>)</span> </a></li>
                                </ul>
              <div class="sticky-buy">
                <a href="" class="go-buy oppo-tj" id="sticky-go-buy" data-tj="store|a|product_buy|sticky_buy">购买</a>
                </div>
            </div>
        </div>
            <div class="product-view-detail" id="product-detail">
              <div style="display:<?php echo ($fenye == 3 ? 'none' :'block'); ?>;" class="product-detail-tab y-tab-frame" id="product-detail-features">
                <section>
                  <?php if(is_array($xiangqing)): foreach($xiangqing as $key=>$vo): ?><p style="text-align: center;">
                      <picture>
                    <!--[if IE 9]> <video style="display: none;"> <![endif]-->
                                    <!-- <source media="(min-width: 990px)" srcset="<?php echo ($vo['pic']); ?>">
                                                                    <source media="(min-width: 300px)" srcset="<?php echo ($vo['pic']); ?>"> -->
                                    <!--[if IE 9]> </video> <![endif]-->
                        <img src="<?php echo ($vo['pic']); ?>" srcset="" alt="" >

                      </picture>
                    </p><?php endforeach; endif; ?>
   
                </section>

            </div>
            <div style="display: none;" class="product-detail-tab y-tab-frame" id="product-detail-params">
              <section>  
                <?php if(is_array($canshu)): foreach($canshu as $key=>$vo): ?><p style="text-align: center;">
                    <picture>
                        <!--[if IE 9]> <video style="display: none;"> <![endif]-->
                                <!--   <source media="(min-width: 990px)" srcset="http://static.oppo.com/archives/201507/201507171107491EP41DZntH8DSCRx.jpg">
                                                                  <source media="(min-width: 300px)" srcset="http://static.oppo.com/archives/201507/20150722080704AbIKsDZgCW7If5PC.jpg"> -->
                                  <!--[if IE 9]> </video> <![endif]-->
                      <img src="<?php echo ($vo['pic']); ?>" srcset="" alt="">
                    </picture>
                  </p><?php endforeach; endif; ?>
        
                
              </section>

          </div>
        <div style="display: <?php echo ($fenye == 3 ? 'block' :'none'); ?>;" class="product-detail-tab y-tab-frame" id="product-detail-comments">
                <section>
      <div class="wrapper comments-wrapper">
          <div class="y-comments-header clearfix">
              <div class="reviews-switchable" id="comments-switchable">
                  <ul>
                      <li class="switchable <?php echo ($xingji == 0? 'checked' : ''); ?>">
                          <a href="<?php echo U('Phone/detail',array('id'=>$phoned['id'],'fenye'=>3));?>" data-type="all" >
                              <span class="cb-radio">
                                  <span class="cb-inner">
                                      <i></i>
                                  </span>
                              </span>

                              <label>全部评价</label>
                          </a>
                      </li>
                      <li class="switchable <?php echo ($xingji == 1? 'checked' : ''); ?>" >
                          <a href="<?php echo U('Phone/detail',array('id'=>$phoned['id'],'fenye'=>3,'xingji'=>1));?>" data-type="good" onclick="">
                              <span class="cb-radio">
                                  <span class="cb-inner">
                                      <i></i>
                                  </span>
                              </span>
                              <label>好评<span class="reviews-count" data-type="good">（<?php echo ($assesshaoCount); ?>）</span></label>
                          </a>
                      </li>
                      <li class="switchable <?php echo ($xingji == 2? 'checked' : ''); ?>">
                          <a href="<?php echo U('Phone/detail',array('id'=>$phoned['id'],'fenye'=>3,'xingji'=>2));?>" data-type="normal" onclick=";">
                              <span class="cb-radio">
                                  <span class="cb-inner">
                                      <i></i>
                                  </span>
                              </span>
                              <label>中评<span class="reviews-count" data-type="normal">（<?php echo ($assesszhongCount); ?>）</span></label>
                          </a>
                      </li>
                      <li class="switchable <?php echo ($xingji == 3? 'checked' : ''); ?>">
                          <a href="<?php echo U('Phone/detail',array('id'=>$phoned['id'],'fenye'=>3,'xingji'=>3));?>" data-type="bad" onclick="">
                              <span class="cb-radio">
                                  <span class="cb-inner">
                                      <i></i>
                                  </span>
                              </span>
                              <label>差评<span class="reviews-count" data-type="bad">（<?php echo ($assessbadCount); ?>）</span></label>
                          </a>
                      </li>
                                       <!--    <li class="switchable">
                          <a href="" data-type="hasappend" onclick="">
                              <span class="cb-radio">
                                  <span class="cb-inner">
                                      <i></i>
                                  </span>
                              </span>
                              <label>追评<span class="reviews-count" data-type="hasappend">（0）</span></label>
                          </a>
                      </li> -->
                  </ul>
              </div>
              <div class="comments-button">
                  <a class="button button-s pingjia" href=""  data-type="1" id="go-comment" phoneid="<?php echo ($phoned['id']); ?>"><?php echo ($assessshifou == 1 ? '我要追评':'我要评论'); ?></a>
              </div>
          </div>
      </div>

    <div class="wrapper">

        <!-- <div id="comments" class="y-comments-view"></div> -->
        <div id="comments" class="y-comments-view">
          <ul class="y-comment-list">
         <?php if(is_array($assessqun)): foreach($assessqun as $key=>$vo): ?><li class="comment-leaf" assessId="<?php echo ($vo['id']); ?>">
              <article class="y-comment-body">
                <div class="y-comment-meta clearfix">      
                  <div class="y-comment-author">                        
                    <div class="y-comment-avator">                  
                      <!-- <img src="avatar.php" alt="">             -->
                    </div>                        
                    <div class="comment-author">
                      <span><?php echo ($vo['uid']); ?></span><em><?php echo ($vo['time']); ?></em>
                    </div>      
                  </div>            
                <div class="y-comment-metadata">
                            <span class="y-comment-stars">
                                 <span class="stars star-<?php echo ($vo['xing']); ?>"></span>
                            </span>
               </div>
                   
              </div>
              <div class="y-comment-content"><?php echo ($vo['content']); ?>
              </div>
             <?php if($vo['pic'] != '0'): ?><div class="y-comment-gallery" data-bind="gallery">
                  <div class="gallery-grid">
                     <ul>
                      <?php if(is_array($vo['pic'])): foreach($vo['pic'] as $key=>$vopic): ?><li class="fore" data-image="/archives/uploads/201509/20150930090959uxNqEUIOUYxBgR1n.jpg">
                       <a href="javascript:;">
                       <div class="thumbnail">
                       <img src="<?php echo ($vopic); ?>" alt=""></div>
                       </a><i></i></li><?php endforeach; endif; ?>                      
                      </ul>
                   </div>
              </div><?php endif; ?>
            </article>
            <?php if($vo['shifouzp'] == ture): if(is_array($vo['zp'])): foreach($vo['zp'] as $key=>$vozp): ?><article class="y-comment-body comment-append" >
                 <div class="y-comment-meta">
                    <div class="comment-label">追加评论:&nbsp;&nbsp;<span></span></div>
                    <div class="comment-date"><?php echo date('Y-m-d H-i-s',$vozp['time']);?></div>
                  </div>
                <div class="y-comment-content"><?php echo ($vozp['content']); ?></div>
                <?php if($vozp['pic'] != '0'): ?><div class="y-comment-gallery" data-bind="gallery">
                  <div class="gallery-grid">
                     <ul>
                      <?php if(is_array($vozp['pic'])): foreach($vozp['pic'] as $key=>$vozppic): ?><li class="fore" data-image="/archives/uploads/201509/20150930090959uxNqEUIOUYxBgR1n.jpg">
                       <a href="javascript:;">
                       <div class="thumbnail">
                       <img src="<?php echo ($vozppic); ?>" alt=""></div>
                       </a><i></i></li><?php endforeach; endif; ?>                      
                      </ul>
                   </div>
              </div><?php endif; ?>
              </article><?php endforeach; endif; endif; ?>
        <?php if($vo['shifouhuifu'] == ture): if(is_array($vo['value'])): foreach($vo['value'] as $key=>$huifu): ?><article class="y-comment-body comment-reply">
                <div class="y-comment-meta">
                   <div class="comment-label">官方回复:&nbsp;&nbsp;<span></span></div>     
                   <div class="comment-date"><?php echo date('Y-m-d H-i-s',$huifu['time']);?></div>
                </div>
                 <div class="y-comment-content"><?php echo ($huifu['content']); ?></div>
            

            </article><?php endforeach; endif; endif; ?>

            
                     
          </li><?php endforeach; endif; ?>
    </ul></div>
        <div class="y-comment-pagination clearfix" id="comments-pagination">
          
        </div>

        <div id="respond" class="y-comment-respond" style="display: none;">
        <style type="text/css">
            .aa{
              background: transparent url("/20160727/buy/Public/Home/Images/green-rating-btn.png") repeat-x scroll 0 -16px
            }
        </style>
        <style type="text/css">
              body {
                font: 13px Arial, Helvetica, Sans-serif;
              }
              .uploadifive-button {
                float: left;
                margin-right: 10px;
              }
              #queue {
                border: 1px solid #E5E5E5;
                height: 177px;
                overflow: auto;
                margin-bottom: 10px;
                padding: 0 3px 3px;
                width: 300px;
              }
        </style>
            <form  id="f"  method="post" enctype="multipart/form-data">
            
            <div class="y-comment-form">
                <input name="querenzhui" value="<?php echo ($assessshifou == 1 ? $assessCountone[id]: 0); ?>" type="hidden">
                <input name="uid" value="<?php echo ($_SESSION['master']['id']); ?>" type="hidden">
                <input name="uname" value="<?php echo ($_SESSION['master']['username']); ?>" type="hidden">
                <input name="pid" value="<?php echo ($phoned['id']); ?>" type="hidden">
                <input name="fenlei" value="0" type="hidden">
               
                <div class="field y-form-star" id="comment-star-box">
                    <label>评分</label>
                    <div class="group clearfix">
                        <div class="comment-star" data-bind="rating">
                            <a href="" class="stars star-1" data-value="1">1</a>
                            <a href="" class="stars star-2" data-value="2">2</a>
                            <a href="" class="stars star-3" data-value="3">3</a>
                            <a href="" class="stars star-4" data-value="4">4</a>
                            <a href="" class="stars star-5" data-value="5">5</a>
                        </div>
                        <span style="color:red" class="scoreTishi"></span>
                    </div>
                </div>
           <!--      <div class="field y-form-list" id="comment-list-box" style="display: <?php echo ($assessshifou == 1 ? 'block':''); ?>">
                    <label>以往评价</label>
                    <div id="comment-list">
        <ul >
         <?php if(is_array($assessCountone)): foreach($assessCountone as $key=>$vo): ?><li >
              <article >
                <div >      
                                         
                                            
                    <div >
                      <span>我的评价</span><br><em><?php echo date('Y-m-d H-i-s',$vo['time']);?></em>
                    </div>      
                             
                      
              </div>
              <div ><?php echo ($vo['content']); ?>
              </div>
              <?php if($vo['pic'] != '0'): ?><div class="y-comment-gallery" data-bind="gallery">
                  
                      <?php if(is_array($vo['pic'])): foreach($vo['pic'] as $key=>$vopic): ?><img src="<?php echo ($vopic); ?>" alt=""><?php endforeach; endif; ?>                      
                      
              </div><?php endif; ?>
            </article>
            <?php if($vo['shifouzhui'] == ture): if(is_array($vo['zhui'])): foreach($vo['zhui'] as $key=>$vozp): ?><article>
                 <div >
                    <div >追加评论:&nbsp;&nbsp;<span></span></div>
                    <div ><?php echo date('Y-m-d H-i-s',$vozp['time']);?></div>
                  </div>
                <div><?php echo ($vozp['content']); ?></div>
                <?php if($vozp['pic'] != '0'): ?><div class="y-comment-gallery" data-bind="gallery">
                  
                    
                      <?php if(is_array($vozp['pic'])): foreach($vozp['pic'] as $key=>$vozppic): ?><img style="width:70px;height:70px"src="<?php echo ($vozppic); ?>" alt=""><?php endforeach; endif; ?>                      
                     
                  
              </div><?php endif; ?>
              </article><?php endforeach; endif; endif; ?>
        <?php if($vo['shifouhuifu'] == ture): if(is_array($vo['value'])): foreach($vo['value'] as $key=>$huifu): ?><article>
                <div>
                   <div>官方回复:&nbsp;&nbsp;<span></span></div>     
                   <div><?php echo date('Y-m-d H-i-s',$huifu['time']);?></div>
                </div>
                 <div><?php echo ($huifu['content']); ?></div>
            </article><?php endforeach; endif; endif; ?>

            
                     
          </li><?php endforeach; endif; ?>
    </ul>
                          </div>
                </div> -->
                <div class="field y-form-comment">
                    <label id="comment-label">内容</label>
                    <textarea name="content" id="comment" placeholder="请输入评价内容, 内容不能超过200字！"></textarea>
                    <br><span style="color:red" class="conmentTishi"></span>
                </div>

                <div class="y-comments-uploader" id="comments-uploader-container">
                    
                    <!-- <label id="comment-label">上传图片</label> -->
                    <div id="queue"></div>
                    <input class="file_upload" name="file_upload" type="file" multiple="true" id="file_upload">
                    <a style="position: relative; top: 8px;" href="javascript:$('#file_upload').uploadifive('upload')">Upload Files</a>

                    <!-- <input type="file" name="pic[]" multiple> -->
                    <!-- <a class="y-upload-button" href="javascript:;" id="comments-file">
                                                <i></i>
                        <span>上传图片</span>
                        <>
                    </a> -->
                    <div class="y-upload-list">
                        <ul id="comments-upload-list" style="display: none;">
                                                    </ul>
                    </div>
                    <div class="y-upload-note">最大可支持上传<em>2</em>M以内的JPG,PNG格式图片，最多允许上传<em>4</em>张图片</div>
                </div>
                <div class="y-form-button">
                    <input class="button button-s" type="submit" id="submit-comment" value="提交">
                    <input class="button-light button-s quxiaopinglun" type="reset" id="cancel-comment" value="取消评论"><br><br>
                    <!-- <a class="button button-s" href="" id="submit-comment">提交评论</a> -->
                   <a class="button button-s" href="javascript:;" id="comment-loading" style="display: none;">提交评论中...</a> 
                    <!-- <a class="button-light button-s" href="javascript:;" id="cancel-comment">取消评论</a> -->
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
            </div>
                    </div>
    </div>
    
    <div class="product-related related-mobile">
        <div class="wrapper">
            <div class="related-tabs">
                <ul class="clearfix tabs" data-bind="related">
                    <li class="oppo-tj y-tab-active" data-tj="store|tab|recommend|related"><a href="">热卖推荐</a></li>
     
  <li data-type="browse" data-tj="store|tab|recommend|browse" class="oppo-tj" style=""><a href="">最近浏览</a></li>
  </ul>
            </div>
            <div class="related-view" data-tab="related">
                                <div style="display: block;" class="related-tab">
                    <div class="related-carousel">
                        <div class="ps-carousel owl-loaded owl-drag" data-bind="carousel">
                                                        
                                                        
                                                        
                                                        
                                                    <div class="owl-stage-outer"><div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;" class="owl-stage"><div class="ps-carousel-item"><div class="ps-item  ps-item-active ">
                                <div class="related-box">
                                    <div class="y-image">
                                        <a href="" data-tj="store|a|product_related|288" class="oppo-tj" target="_top"><img alt="" src="/20160727/buy/Public/Home/Images/20150520020549g1fz2nz8jqyaytzs.jpg" class="lazy"></a>
                                    </div>
                                    <div class="y-heading">
                                        <a href="" data-tj="store|a|product_related|288" class="oppo-tj" target="_top">R7 全金属闪拍移动4G手机 银色</a>
                                    </div>
                                    <div class="y-price">
                                                                                                                        <em>¥2499.00</em>
                                                                                                                    </div>
                                                                        <i class="ribbon  ribbon-new   "></i>
                                                                    </div>
                            </div></div><div class="ps-carousel-item"><div class="ps-item ">
                                <div class="related-box">
                                    <div class="y-image">
                                        <a href="" class="oppo-tj" target="_top"><img alt="OPPO R1C宝石蓝移动4G手机" src="/20160727/buy/Public/Home/Images/20150307040305fe5flqiur315u2q4.jpg" class="lazy"></a>
                                    </div>
                                    <div class="y-heading">
                                        <a href="" data-tj="store|a|product_related|119" class="oppo-tj" target="_top">R1C 钻石流光镜面移动4G手机 宝石蓝</a>
                                    </div>
                                    <div class="y-price">
                                                                                                                        <span>¥1799.00</span>
                                        &nbsp;
                                        <del>¥2299.00</del>
                                                                                                                    </div>
                                                                        <i class="ribbon   ribbon-promotion  "></i>
                                                                    </div>
                            </div></div><div class="ps-carousel-item"><div class="ps-item ">
                                <div class="related-box">
                                    <div class="y-image">
                                        <a href="" data-tj="store|a|product_related|116" class="oppo-tj" target="_top"><img alt="OPPO N3移动白色4G手机" src="/20160727/buy/Public/Home/Images/20150307050335ztdqqtkyvq48ieyk.jpg" class="lazy"></a>
                                    </div>
                                    <div class="y-heading">
                                        <a href="" data-tj="store|a|product_related|116" class="oppo-tj" target="_top">N3 电动旋转摄像头移动4G旗舰手机 白色</a>
                                    </div>
                                    <div class="y-price">
                                                                                                                        <em>¥3999.00</em>
                                                                                                                    </div>
                                                                        <i class="ribbon   "></i>
                                                                    </div>
                            </div></div><div class="ps-carousel-item"><div class="ps-item ">
                                <div class="related-box">
                                    <div class="y-image">
                                        <a href="" data-tj="store|a|product_related|135" class="oppo-tj" target="_top"><img alt="OPPO R5银色移动&amp;联通双4G手机" src="/20160727/buy/Public/Home/Images/20150309110335g8e7neyllclhs4vd.jpg" class="lazy"></a>
                                    </div>
                                    <div class="y-heading">
                                        <a href="" data-tj="store|a|product_related|135" class="oppo-tj" target="_top">R5 移动联通双4G旗舰手机 银色</a>
                                    </div>
                                    <div class="y-price">
                                                                                                                        <em>¥2999.00</em>
                                                                                                                    </div>
                                                                    </div>
                            </div></div></div></div><div class="ps-carousel-nav disabled"><div class="ps-carousel-prev disabled">prev</div><div class="ps-carousel-next disabled">next</div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>
                    </div>
                </div>
                                <div style="display: none;" class="related-tab" data-type="browse">
                    <div class="related-carousel"> <div class="ps-carousel owl-loaded owl-drag">                                              <div class="owl-stage-outer"><div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;" class="owl-stage"><div class="ps-carousel-item"><div class="ps-item  ps-item-active">         <div class="related-box">             <div class="y-image">                 <a href="" target="_top" data-tj="store|a|product_browse|320" class="oppo-tj"><img alt="" class="lazy" src="/20160727/buy/Public/Home/Images/20150814110820cpdraprqmg4xdh0i.png"></a>             </div>             <div class="y-heading">                 <a href="" target="_top" data-tj="store|a|product_browse|320" class="oppo-tj">时尚单品OPPO自拍杆</a>             </div>             <div class="y-price">                                                   <em>¥39.00</em>                                               </div>                          <i class="ribbon ribbon-new"></i>                      </div>     </div></div><div class="ps-carousel-item"><div class="ps-item ">         <div class="related-box">             <div class="y-image">                 <a href="" target="_top" data-tj="store|a|product_browse|288" class="oppo-tj"><img alt="" class="lazy" src="/20160727/buy/Public/Home/Images/20150520020549g1fz2nz8jqyaytzs.jpg"></a>             </div>             <div class="y-heading">                 <a href="" target="_top" data-tj="store|a|product_browse|288" class="oppo-tj">R7 全金属闪拍移动4G手机 银色</a>             </div>             <div class="y-price">                                                   <em>¥2499.00</em>                                               </div>                          <i class="ribbon ribbon-new"></i>                      </div>     </div></div><div class="ps-carousel-item"><div class="ps-item ">         <div class="related-box">             <div class="y-image">                 <a href="" target="_top" data-tj="store|a|product_browse|118" class="oppo-tj"><img alt="" class="lazy" src="/20160727/buy/Public/Home/Images/20150307040331cr1xc3ku8nczlnvi.jpg"></a>             </div>             <div class="y-heading">                 <a href="" target="_top" data-tj="store|a|product_browse|118" class="oppo-tj">R1C 钻石流光镜面移动4G手机 冰晶白</a>             </div>             <div class="y-price">                                                   <span>¥1799.00</span>                 &nbsp;                 <del>¥2299.00</del>                                               </div>                          <i class="ribbon"></i>                      </div>     </div></div><div class="ps-carousel-item"><div class="ps-item ">         <div class="related-box">             <div class="y-image">                 <a href="" target="_top" data-tj="store|a|product_browse|112" class="oppo-tj"><img alt="OPPO N1mini旋转趣拍移动4G手机" class="lazy" src="/20160727/buy/Public/Home/Images/20150310110317z2vw92s9btndisuw.jpg"></a>             </div>             <div class="y-heading">                 <a href="" target="_top" data-tj="store|a|product_browse|112" class="oppo-tj">N1mini 旋转趣拍移动4G手机 雪晶白</a>             </div>             <div class="y-price">                                                   <span>¥2499.00</span>                 &nbsp;                 <del>¥2699.00</del>                                               </div>                          <i class="ribbon ribbon-promotion"></i>                      </div>     </div></div></div></div><div class="ps-carousel-nav disabled"><div class="ps-carousel-prev disabled">prev</div><div class="ps-carousel-next disabled">next</div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div></div>
                </div>
            </div>
        </div>
    </div>

              <section class="wrapper brick">
        <div class="g">
                            </div>
      </section>
      
  
                                      </main>
          <style type="text/css"> 
    .is-modal-active, .y-modal-active {
    opacity: 1 !important;
    z-index: 10010 !important;
    }
    .y-modal {
    border: 1px solid #666;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    left: 50%;
    margin: 10px auto;
    min-width: 300px;
    opacity: 0;
    outline: 0 none;
    position: fixed;
    right: auto;
    top: 10%;
    transform: translate(-50%, 0px);
    width: 500px;
    z-index: -1;

}
.y-modal-overlay {
    background-color: #000;
   
    height: 100%;
    left: 0;
    opacity: 0.5;
    position: fixed;
    top: 0;
    z-index: 9999;
    width: 100%;
}
</style>
      <div role="dialog" class="y-modal " id="y-modal-7cd2aE1444642953147" tabindex="-1" aria-hidden="false"> 
        <div class="y-modal-header"></div>  
        <div class="y-modal-container">   
            <div class="y-modal-content">     
              <div class="y-modal-message">抱歉，您没有在商城购买该商品，暂时无法评价。
            </div>   
            </div>    
            <div class="y-modal-buttons lap-one-whole">     
              <a data-modal-confirm="true" class="y-modal-btn y-modal-accept button button-only guanbi" href="#">确定</a>    
            </div>  
        </div> 
        <div class="y-modal-footer"></div>  
        <div class="y-modal-close">
          <span class="close guanbi">x</span>
        </div>
      </div>

       <div class="y-modal-overlay" style="display: none; height: 4538px;"></div>                               

</div>

  
   <footer class="main-footer">
  <div class="footer-prominent-area">
    <div class="wrapper g">
      <div class="gi lap-one-third">
    <a class="footer-prominent-button
          primary
        " href="" title="OPPO社区" target="_top"><span class="img"><img alt="OPPO社区" title="OPPO社区" src="/20160727/buy/Public/Home/Images/201502270202233fz8vzjujgb2ysln.png"></span><span class="text">OPPO社区</span></a>
  </div>
    <div class="gi lap-one-third">
    <a class="footer-prominent-button
          secondary
        " href="" title="ColorOS" target="_top"><span class="img"><img alt="OPPO ColorOS" title="ColorOS" src="/20160727/buy/Public/Home/Images/20150227020237cluxgmcj3uhukic0.png"></span><span class="text">ColorOS</span></a>
  </div>
    <div class="gi lap-one-third">
    <a class="footer-prominent-button
          primary
        " href="<?php echo U('App/Appindex');?>" title="软件商店" target="_top"><span class="img"><img alt="OPPO软件商店" title="软件商店" src="/20160727/buy/Public/Home/Images/20150314030306rfyfrtucs1nb3wtq.png"></span><span class="text">软件商店</span></a>
  </div>
    </div>  </div>
  <div class="footer-sitemap">
    <nav class="wrapper">
  <ul class="g">
            <li class="gi lap-one-fifth">
        <a class="m-item" href="" target="_top">推荐机型</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href="" target="_top">R7</a>
        </li>
                <li>
          <a href="" target="_top">N3</a>
        </li>
                <li>
          <a href="" target="_top">Find 7</a>
        </li>
                <li>
          <a href="" target="_top">R1C</a>
        </li>
                <li>
          <a href="" target="_top">N1 mini</a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a class="m-item" href="" target="_top">在线购买</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href="" target="_top">手机</a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a class="m-item" href="" target="_top">服务</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href="" target="_top">购买帮助</a>
        </li>
                <li>
          <a href="" target="_top">物流查询</a>
        </li>
                <li>
          <a href="" target="_top">常见问题</a>
        </li>
                <li>
          <a href="" target="_top">服务政策</a>
        </li>
                <li>
          <a href="" target="_top">服务网点查询</a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a class="m-item" href="" target="_top">会员相关</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href="" target="_top">会员登录</a>
        </li>
                <li>
          <a href="" target="_top">会员注册</a>
        </li>
                <li>
          <a href="" target="_top">积分兑换</a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a class="m-item" href="" target="_top">OPPO品牌</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href="" target="_top">关于OPPO</a>
        </li>
                <li>
          <a href="" target="_top">OPPO历史</a>
        </li>
                <li>
          <a href="" target="_top">OPPO风采</a>
        </li>
                <li>
          <a href="" target="_top">官方新闻</a>
        </li>
                <li>
          <a href="" target="_top">OPPO视频</a>
        </li>
              </ul>
    </li>
          </ul>
</nav>  </div>
  <div class="footer-tools">
    <div class="wrapper">
      <div class="footer-social lap-one-half desk-lap-one-third"><p>
          <span class="text">关注我们</span>
          <a href="" target="_top">
            <span class="icon icon-weibo"></span>
          </a>
          <a href="#" id="footer-wx" class="relative">
            <span class="icon icon-wechat"></span>
            <!-- <img src="/20160727/buy/Public/Home/Images/wxwx.png" class="wx-float">  -->
          </a>
          <span class="text text-join-us">加入我们</span>
          <a href="" target="_top" class="link-join-us">
            <span class="icon icon-join-us"></span>
          </a>
        </p>
      </div>
      <div class="footer-subscribe lap-one-half desk-lap-one-third align-right">
        <!-- <div class='g'>
          <div class='gi lap-one-whole one-whole'>
            <a href='#' id="btn-kf"><img src='/cn/media/images/zxkf.png' /></a>
          </div>
          <div class='gi footer-lap-hide one-third'><img alt='' src='/cn/media/images/m.jpg' /></div>
        </div> -->
        <div class="g one-whole desk-one-half lap-one-half about-contact pull-left">
          <a id="btn-kf" href="" target="_top">
          <div class="about-contact-icon">
            <span class="icon icon-chat" style="background-position: -563px -700px;"></span>
          </div>
          <div class="about-contact-info">
            <h4 class="h-delta">
              <span class="highlight">在线客服</span>
              <span class="icon icon-arrow"></span>
            </h4>
            <p>人工服务：8:30~22:00</p>
            <p>24小时智能机器人服务</p>
          </div>
          </a>
      </div>
      <div class="g one-whole desk-one-half lap-one-half about-contact pull-left second-about-contact">
            <div class="about-contact-icon">
              <span class="icon icon-tel"></span>
            </div>
            <div class="about-contact-info">
              <h4 class="h-delta">
                <span class="highlight">4001-666-888</span>
              </h4>
              <p style="">7*24小时客服电话</p>
            </div>
        </div>
      </div>
      <!-- <div class='footer-subscribe lap-one-half desk-lap-one-third'>
        <form action='#' class='main-form'>
          <div class='input-button-item'><input placeholder='输入Email订阅我们的最新动态' type='text'>
          <button class='button button-primary' type='submit'>订 阅</button>
          </div>
        </form>a
      </div> -->
    </div>
  </div>
  <div class="footer-info">
    <div class="wrapper">
      <p>
          QQ:
      <?php  echo $_SESSION['web']['QQ']; echo $_SESSION['web']['phone']; echo $_SESSION['web']['dizhi']; echo $_SESSION['web']['banquan']; echo $_SESSION['web']['beian']; ?> 
      </p>
    </div>
  </div>
</footer>

 <div style="display: block;" class="navi-scroll">
  <div class="navi-scroll-content">
    <a href="#" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="<?php echo U('Complain/add');?>" target="_top" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <!-- <a href="" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a> -->
  </div>
</div>


 <div class="purchase-advisory">
        <a href="" target="_top" id="advisory">购机咨询</a>
  </div>

    
    <div class="y-modal" id="modal-cancel" role="dialog" tabindex="1">
    <div class="y-modal-header"></div>
    <div class="y-modal-container">
        <div class="y-modal-content">
            <div class="y-modal-message">您确定放弃评价吗？</div>
        </div>
        <div class="y-modal-buttons">
            <div class="g">
                <a href="javascript:;" class="y-modal-btn button confirm-button">确定</a>
                <a href="javascript:;" class="y-modal-btn button-light y-modal-accept">取消</a>
            </div>
        </div>
    </div>
    <div class="y-modal-footer"></div>
    <div class="y-modal-close"><span class="close">x</span></div>
</div>

<div class="y-modal y-modal-service" id="modal-service" role="dialog" tabindex="1">
    <div class="y-modal-header">
      <div class="y-modal-close"><span class="close">x</span></div>
    </div>
    <div class="y-modal-container">
        <div class="y-modal-content">
          <h4 class="y-modal-service-title">《OPPO保障服务协议》</h4>
          <p>在您计划购买OPPO保障服务产品之前，请您全面仔细阅读本条款中的内容，保障服务产品内容已经明确了您享受的权益，您的付费购买行为，将被视为您已经了解并接受了本条款中的内容。本保障服务产品由东莞市永盛通信科技有限公司（以下简称本公司）提供，并由中国人民财产保险股份有限公司承保。</p>
          <p></p><h4>第一条  OPPO保障服务产品内容</h4><p></p>
          <p></p><h5>OPPO “屏碎保”</h5><p></p>
          <p>OPPO屏碎保服务的有效期是一年，以手机发货次日零时起开始计算。（考虑到物流时间，因此屏碎保有效时间为用户增加7个自然日。例如:用户在2015年1月1日下单购买R5手机及对应的屏碎保服务产品，公司于2015年1月2日发货，则屏碎保服务产品于2015年1月3日零时生效，2016年1月9日24时责任终止。）OPPO手机屏碎保需与新机绑定购买，在屏碎保保障服务期限内，因意外造成的屏幕破碎、产生裂纹，本公司负责给您免费更换一次同类同质屏幕组件。</p>
          <p>具体如下：</p>
          <p>（1）  手机在正常使用过程中由于意外坠落、挤压、碰撞，造成手机屏幕组件破碎、产生裂纹，本公司负责给您更换同类同质屏幕组件，维修费用由本公司承担。</p>
          <p>（2）  若手机造成非屏幕组件相关的其它功能性损坏，则由用户自行承担功能性修复的相关费用。</p>
          <p>（3）  更换后的损坏零部件或产品归本公司所有。</p>
          <p>（4）  屏碎保服务期内不针对外壳、充电器、数据线、耳机等附件及赠品进行承保。</p>
          <p>（5）  本公司为您免费更换手机屏幕，鉴于此，您同意委托本公司向保险公司索赔，并同意保险公司将赔款支付给本公司。</p>
          <p></p>
          <p></p><h5>OPPO“延长保”</h5><p></p>
          <p>OPPO手机延长保产品分为半年期和一年期两类。OPPO手机延长保需与新机绑定购买，以线上购买签收次日零时起开始计算，在国家“三包”规定一年联保外，延长半年或一年的主机保修时间。</p>
          <p>具体如下：</p>
          <p>（1）  在国家“三包”规定一年联保外，延长半年或一年的主机保修时间。延保期内仅对主机提供免费保修服务。</p>
          <p>（2）  更换后的损坏零部件或产品归本公司所有。</p>
          <p>（3）  延长保修服务期内不承担退换货责任。</p>
          <p>（4）  延长保修服务期内不针对外壳、充电器、数据线、耳机、可拆卸电池等附件及赠品进行承保。</p>
          <p></p>
          <p></p><h4>第二条  不属于OPPO保障服务产品范围的内容</h4><p></p>
          <p>下列原因造成的损失、费用，本公司不负责赔偿：</p>
          <p>（1）  因战争、敌对行为、军事行为、武装冲突、罢工、骚乱、暴动、恐怖活动及自然灾害的不可抗力，包括：台风、洪水、地震、火山爆发以及海啸、核反应、核放射等。</p>
          <p>（2）  手机在外观上的瑕疵，如：脱漆、刮痕、褪色等。但与手机同时受损的情况不在此限。</p>
          <p>（3）  不影响手机基本使用功能的附件或耗材，包括但不限于耳机、存储卡、充电设备、数据线、书写笔等的磨损、损坏或丢失。</p>
          <p>（4）  手机设备的正常磨损、腐蚀、氧化、锈垢、耗损等或因积灰、冷凝、受冷、受热等渐变性原因导致的损失。</p>
          <p>（5）  属于“三包范围”内的置换、损失或费用。</p>
          <p>（6）  原装基础上添加的存储数据或商品部件的丢失。</p>
          <p>（7）  因手机意外受损导致的任何间接损失或附带损失（包括但不限于人身损害、无法使用、利润损失、数据损失、故障时间损失及误工费等）不承担任何责任。</p>
          <p>（8）  被保险人故意行为导致的手机损坏，或因保管不当导致的盗窃、遗失。</p>
          <p>（8）  被保险人故意行为导致的手机损坏，或因保管不当导致的盗窃、遗失。</p>
          <p>（10） 由于软件中毒导致的系统、软件问题，造成的产品功能故障。</p>
          <p>（11） 手机型号、IMEI号等与购买本保障服务产品时记载的不符、涂改、缺失或无法辨识的。</p>
          <p>如发现用户通过故意损坏产品来达到欺诈、骗保的目的，则与该产品对应的OPPO保障服务内容自动终止。本公司不退还任何费用，同时保留追究该用户法律责任的权利。</p>
          <p></p>
          <p></p><h4>第三条   OPPO保障服务产品其他责任免除</h4><p></p>
          <p>由于下列原因造成的损失或者费用，本公司不承担赔偿责任：</p>
          <p>（1）  首年符合国家质检总局、国家工商总局、信息产业部颁布的《移动电话机商品修理更换退货责任规定》范围之内的故障的。</p>
          <p>（2）  无有效销售凭证的。</p>
          <p>（3）  消费者提出维修要求时不在保障期内的。</p>
          <p>（4）  消费者故意人为制造损坏结果，或者故意放大损坏结果的发生。</p>
          <p>（5）  消费者明知使用方式和使用环境可能造成手机的损坏，而未采取任何防范措施，或因轻信损害结果可以避免，导致损害结果的发生。</p>
          <p>（6）  不可抗力，自然灾害，相关人或任何机构、人员的故意行为造成的损失或者费用。</p>
          <p>（7）  消费者私自拆装手机或将手机送到非OPPO客户服务中心进行拆机、维修。</p>
          <p>（8）  产品型号、产品身份标识、顾客信息等在服务管理系统中记载的产品相关信息与实际修理的产品不符或者涂改的。</p>
          <p>（9）  参保商品造成的使用者或他人的人身伤害和财产损失，其他各种间接损失或者费用。</p>
          <p>（10） 非所销售产品对应保障责任范围内的其他保障责任、费用、损失。</p>
          <p></p>
          <p></p><h4>第四条   OPPO保障服务产品的退换货说明</h4><p></p>
          <p>OPPO保障服务除“三包”退机外不可申请退出、撤销或终止，同时OPPO手机保障服务产品需与用户购买的手机绑定，不得以任何方式予以转让。</p>
          <p>“三包”规定期内，手机发生换货，在未曾使用保障服务的前提下，屏碎保服务转移至用户更换的新手机上，屏碎保服务时间按生效之日起剩余时间计算。延长保服务转移至用户更换的新手机上，延长保服务时间按照用户签收最新更换的手机之日起重新计算。</p>
          <p>“三包”规定期内，手机发生退货，在未曾使用保障服务的前提下，将为用户退还保费，同时保障服务责任终止。</p>
          <p></p>
          <p></p><h4>第五条   OPPO保障服务理赔说明</h4><p></p>
          <p>购买保障服务的用户手机需要维修时，用户拨打4001-666-888热线进行报修，热线客服指引用户携带相关资料（注：屏碎保用户只需额外提供身份证复印件、手机销售发票复印件或官网订单截图打印件即可。延长保用户不需额外提供以上资料）并指引用户预约维修。服务中心根据用户手机IMEI号从售后服务系统中查询用户手机是否符合使用保障服务产品的条件。符合条件则为用户免费维修。其中，屏碎保用户自保障服务生效之日起一年内因屏幕意外破碎、产生裂纹只保一次，维修后保障服务责任终止，今后将不再享受屏碎保保障服务。</p>
        </div>
    </div>
    <div class="y-modal-footer"></div>


   

    

    

    

    

    

    

    

    

    <!-- <script src="http://store.oppo.com/lib/patterns/patterns.js"></script>

    <script src="http://store.oppo.com/lib/patterns/prism.js"></script>
 -->
    


    
    


    
    













<div id="account_bg" class="account_bg"></div><div id="account_contain" class="account_contain"></div>



    

    
    <!-- 百度统计代码  -->


<!-- 谷歌统计代码 -->


<!--oppo统计-->



<!--华扬统计-->




  


<div class="js-sensor"></div><div style="position: absolute; top: -2000px; left: -2000px;" id="UniSwfStore_uniswfstore_0"><object codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="UniSwfStore_uniswfstore_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="1" width="1">	<param value="http://sit.gentags.net/adagent/gunic.swf" name="movie">	<param value="logfn=UniSwfStore.uniswfstore.log&amp;" name="FlashVars">	<param value="always" name="allowScriptAccess">	<embed pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="logfn=UniSwfStore.uniswfstore.log&amp;" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" loop="false" play="true" name="UniSwfStore_uniswfstore_1" bgcolor="#ffffff" src="/20160727/buy/Public/Home/Images/gunic.swf" height="1" width="1" align="middle"></object></div></body>
</html>
 
<script type="text/javascript">
  
 //返回顶部
$(".scroll-top-btn").click(function(){
  // alert(222222);
  var isIE6= navigator.appVersion.indexOf("MSIE 6")>-1; 
  if(isIE6){
    $('html,body').scrollTop(0);
    $(".scroll-top-btn").css("display","none");
  }else{
    $('html,body').animate({scrollTop: '0px'}, 800,function(){
      $(".scroll-top-btn").css("display","none");
    }); 
  } 
  return false;
});

var mousewheelevt=(/Firefox/i.test(navigator.userAgent))? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x   
if (document.attachEvent) //if IE (and Opera depending on user setting)  
    document.attachEvent("on"+mousewheelevt, function(e){
  var t=document.body.scrollTop+document.documentElement.scrollTop;
    if(t==0){
        $(".scroll-top-btn").css("display","none");
      }
    else{
        $(".scroll-top-btn").css("display","block");  
      }
  });
else if (document.addEventListener) //WC3 browsers  
    document.addEventListener(mousewheelevt, function(e){
  var t=document.body.scrollTop+document.documentElement.scrollTop;
    if(t==0){
        $(".scroll-top-btn").css("display","none");
      }
    else{
        $(".scroll-top-btn").css("display","block");  
      }
  }, false); 
</script>