<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'=>'php',
	//底部显示跟踪信息
	'SHOW_PAGE_TRACE'=>true,
	//设置默认访问值
	'DEFAULT_MODULE'=>'Admin',//默认分组
	'MODULE_ALLOW_LIST'=>array('Home','Admin'),//允许访问的分组列表
	//开启Smarty模版引擎
	'TMPL_ENGINE_TYPE'=>'Smarty',
	//为Smarty做配置
	// 'TMPL_ENGINE_CONFIG'=>array(
	// 	'left_delimiter'=>'<@@',
	// 	'right_delimiter'=>'@@>',
	// ),
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

);