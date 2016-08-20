<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">
<style type="text/css">
    *{ font-family:微软雅黑;
      font-size:14px;}
    .img{height:30px;padding-top:5px;}
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	
    <meta name="author" content="">

    <title>『OPPO 后台管理系统』</title>

    <!-- Bootstrap Core CSS -->
    <link href="/buy/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/buy/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/buy/Public/Admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/buy/Public/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/buy/Public/Admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/buy/Public/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <link rel="stylesheet" href="/buy/Public/Admin/bower_components/morrisjs/style.css">
     <link rel="stylesheet" href="/buy/Public/Admin/bower_components/morrisjs/ie.css">
     <link rel="stylesheet" href="/buy/Public/Admin/bower_components/morrisjs/ie.js">
    
    
    <script src="/buy/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
    

</head>

<body>

    <div id="wrapper">
       
                
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
                <img src="/buy/Public/Home/Images/vivo_logo.png" alt="" class="dropdown-toggle">

                <!-- <a class="navbar-brand" href="index.html">Oppo商城后台管理</a> -->
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('Admin/Login/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                         <li>
                            <a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-home fa-2x">&nbsp;</i>首页<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 用户管理 -->
                        <li>
                            <a href="#"><i class="fa fa-user fa-1x">&nbsp;&nbsp;</i>用户管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/User/add');?>">用户添加</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/User/index');?>">用户列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/User/StopIndex');?>">用户黑名单</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                  
                    <!-- 友情链接管理 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw">&nbsp;</i>友情管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Link/add');?>">添加友情链接</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Link/index');?>">友情链接列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                  
                    <!-- 积分商城管理 -->
                        <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>积分商城管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Jifen/addJifen');?>">添加积分品</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Jifen/index');?>">积分品列表</a>
                                </li>
                               
                               
                                <li>
                                    <a href="<?php echo U('Admin/Jifen/HsJifenindex');?>">积分品下架仓</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 手机管理 -->
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 手机管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Phone/add');?>">手机添加</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Phone/index');?>">手机列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Phone/xjIndex');?>">下架手机</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 配件管理 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 配件管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Part/add');?>">配件添加</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Part/index');?>">配件列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Part/xjIndex');?>">下架配件</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 订单管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="<?php echo U('Admin/Order/index',array('huishou'=>0));?>">订单列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Order/index',array('huishou'=>1));?>">订单回收站</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 赠品套餐管理 -->
                    <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 评价管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="<?php echo U('Admin/Assess/index',array('fenlei'=>0,'status'=>0));?>">手机评价列表</a>
                                    <a href="<?php echo U('Admin/Assess/index',array('fenlei'=>0,'status'=>1));?>">手机评价(屏蔽)列表</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo U('Admin/Assess/index',array('fenlei'=>1,'status'=>0));?>">配机评价列表</a>
                                    <a href="<?php echo U('Admin/Assess/index',array('fenlei'=>1,'status'=>1));?>">配机评价(屏蔽)列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 回复管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="<?php echo U('Admin/Replay/index',array('fenlei'=>0));?>">手机回复列表</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo U('Admin/Replay/index',array('fenlei'=>1));?>">配机回复列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 赠品和套餐管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Gift/add');?>">赠品/套餐添加</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Gift/index');?>">赠品和套餐列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 图片管理 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 图片管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="<?php echo U('Admin/Pic/index',array('fenlei'=>0));?>">手机图片列表</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo U('Admin/Pic/index',array('fenlei'=>1));?>">配机图片列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 属性管理 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 属性管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Style/index');?>">属性列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Style/add');?>">属性添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    <!-- 规则管理 -->
                      <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>权限规则管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Rule/add');?>">添加规则</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Rule/index');?>">规则列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <!-- 用户组管理 -->
                        <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>权限用户组管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Group/add');?>">添加权限组</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Group/index');?>">权限组列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>用户投诉<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Complain/index');?>">待处理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Complain/add');?>">以处理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>网站配置<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/WZPZ/index');?>">网站信息</a>
                                </li>
                                
                            </ul>
                       
                        </li>
                             
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <!-- 内容区 -->
            
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">修改规则</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>  
    <div class="row" style="width:40%; margin-left:340px;">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6" style="width:100%;">
                            <form role="form" action="<?php echo U('Admin/Rule/update');?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>规则名称</label>
                                    <input name="title" type="text" value="<?php echo ($info['title']); ?>" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>规则</label>
                                    <input name="name" type="text" value="<?php echo ($info['name']); ?>" class="form-control" >
                                </div>
                               
                                <input type="hidden" name="id" value="<?php echo ($info['id']); ?>">
                                <button  class="btn btn-primary">修改</button>
                                <button type="reset" class="btn btn-default">重置</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                       
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>    

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="/buy/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/buy/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/buy/Public/Admin/bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/buy/Public/Admin/dist/js/sb-admin-2.js"></script>
      
      
</body>

</html>