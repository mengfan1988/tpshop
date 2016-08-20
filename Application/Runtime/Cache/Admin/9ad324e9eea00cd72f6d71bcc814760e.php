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
            
                <img src="/buy/Public/Home/Images/oppo_logo.png" alt="" class="dropdown-toggle">

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
                    <!-- 店铺管理 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-1x">&nbsp;</i>店铺管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Shops/add');?>">添加店铺</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shops/index');?>">店铺列表</a>
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
                    <!-- 下载管理 -->
                        <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>下载管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/App/addApp');?>">添加应用</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/App/Appindex');?>">应用列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/App/cateindex');?>">分类列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/App/addcate');?>">添加分类</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/App/HsAppindex');?>">应用回收站</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/App/HsCateindex');?>">分类回收站</a>
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
                            <!-- /.nav-second-level -->
                        </li>
                             <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>IMEI管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/IMEI/add');?>">添加管理</a>
                                    <a href="<?php echo U('Admin/IMEI/index');?>">IMEI列表</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
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
        <h3 class="page-header">应用回收列表</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row">
                    <div class="col-sm-6">
					<form action="<?php echo U('Admin/App/HsAppindex');?>">
                    <div class="dataTables_length" id="dataTables-example_length">
                    <label>显示 
                    	<select name="num" aria-controls="dataTables-example" class="form-control input-sm">
                    		<option value="10" <?php if($_GET['num'] == 10 ): ?>selected='selected'<?php endif; ?>  >10</option>
                    		<option value="25" <?php if($_GET['num'] == 25 ): ?>selected='selected'<?php endif; ?>>25</option>
                    		<option value="50" <?php if($_GET['num'] == 50 ): ?>selected='selected'<?php endif; ?>>50</option>
                    		<option value="100" <?php if($_GET['num'] == 100 ): ?>selected='selected'<?php endif; ?>>100</option>
                    	</select>条
                    </label>
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="dataTables-example_filter" class="dataTables_filter">
                            <label>
                            搜索:<input type="search" value="<?php echo ($_GET['keyword']); ?>" name="keyword" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                                <button class="btn btn-primary">搜索</button>
                            </label>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                    <style type="text/css">
                        .tdspan{
                            width:100px;
                            display: inline-block;
                        }
                    </style>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                </form>
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 155px;">ID</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">应用名称</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">应用版本</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">上线时间</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">应用大小</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">所属分类</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">Logo图片</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">操作系统</th>
                                <th class="sorting" aria-label="Browser: activate to sort column ascending" style="width: 180px;">状态</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 96px;">操作</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php if(is_array($apps)): foreach($apps as $key=>$vo): ?><tr class="gradeA odd" role="row">
                                <td class="sorting_1"><?php echo ($vo['id']); ?></td>
                                <td><?php echo ($vo['name']); ?></td>
                                <td><?php echo ($vo['version']); ?></td>
                                <td><?php echo date('Y-m-d',$vo['issuetime']);?></td>
                                <td><?php echo ($vo['size']); ?> M</td>
                                <td><?php echo ($vo['parent']); ?></td>
                                <td> <img src="<?php echo ($vo['pic']); ?>" alt="" width="100"></td>
                                <td><?php echo ($vo['operating']); ?></td>
                                <td>
                                    <?php if(($vo[hot]) == "1"): ?><span style="margin-right:10px">热帖</span><?php endif; ?>
                                    <?php if(($vo[recommend]) == "1"): ?><span style="margin-right:10px">小编推荐</span><?php endif; ?>
                                    <?php if(($vo[hot] == 0) AND ($vo[recommend] == 0)): ?><span>普通</span><?php endif; ?>
                            </td>
                                <td class="center">
                                	<a href="<?php echo U('Admin/App/huanyuan', array('id'=>$vo['id']));?>" class="btn btn-success btn-xs"><i class="fa fa-edit">还原</i></a>
                                </td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table></div></div>
					<style type="text/css">
						#pages a,#pages span{
							background-color: #fff;
						    border: 1px solid #ddd;
						    color: #337ab7;
						    float: left;
						    line-height: 1.42857;
						    margin-left: -1px;
						    padding: 6px 12px;
						    position: relative;
						    text-decoration: none;
						}
						#pages span{
							background:#337ab7;
							color:white;
						}
					</style>
                    <div class="row">
                    <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                    	<div id="pages">
                    	   <?php echo ($pages); ?>
                    	</div>
                    </div>
               
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