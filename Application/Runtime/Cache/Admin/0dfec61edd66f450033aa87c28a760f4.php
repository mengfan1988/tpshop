<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Oppo后台登录系统</title>

    <!-- Bootstrap Core CSS -->
    <link href="/buy/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/buy/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/buy/Public/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/buy/Public/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                  <img src="/buy/Public/Home/Images/vivo_logo.png" alt="">
                    
                </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo U('Admin/Login/loginin');?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label>管理员账户</label>
                                    <input class="form-control" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>管理员密码</label>
                                    <input class="form-control" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <label>验证码</label>
                                    <input name="vcode" type="text" class="form-control" >
                                    <img src="<?php echo U('Admin/Public/createVcode');?>" alt="" onclick="this.src=this.src+'?a'">
                                     <label>看不清楚?&nbsp;&nbsp;点击更换</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住密码
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  class="btn btn-lg btn-success btn-block">点击登录</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/buy/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/buy/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/buy/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/buy/Public/Admin/dist/js/sb-admin-2.js"></script>

</body>

</html>