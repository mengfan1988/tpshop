<?php
return array(
	//'配置项'=>'配置值'

	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'vivo', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'vivo_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DEFAULT_FILTER' => '',
	'SHOW_PAGE_TRACE' =>true,
	// 'URL_MODEL' => 2,
	// 'URL_ROUTER_ON' =>true,
	// 'MODULE_ALLOW_LIST'     =>  'Admin',
	// 'DEFAULT_MODULE'        => 'Admin',
	// 'DATA_CACHE_TYPE' => 'Memcache',
	// 'MEMCACHE_HOST' => '127.0.0.1',
	// 'MEMCACHE_PORT'	=>	'11211',
	'THINK_EMAIL' => array(

'SMTP_HOST' => 'smtp.qq.com', //SMTP服务器

'SMTP_PORT' => '465', //SMTP服务器端口

'SMTP_USER' => '340562435@qq.com', //SMTP服务器用户名

'SMTP_PASS' => 'xplxslezwmqybigf', //SMTP服务器密码

'FROM_EMAIL' => '340562435@qq.com',

'FROM_NAME' => '小梦', //发件人名称

'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）

'REPLY_NAME' => '', //回复名称（留空则为发件人名称）

'SESSION_EXPIRE'=>'72',
), 

);