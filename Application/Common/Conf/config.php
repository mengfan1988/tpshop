<?php
return array(
		//'配置项'=>'配置值'

	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	//'DB_HOST'   => '192.168.112.38', // 服务器地址
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'vivo', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'vivo_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DEFAULT_FILTER' => '',
	'SHOW_PAGE_TRACE' =>true,
        'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
        'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记

);