<?php 
//声明编码格式
header("Content-type:text/html;charset=utf-8");
//使用TP3.2学习练习开发shop商城项目

//框架模式:默认线上生产模式(false),开发调试模式(true)
define('APP_DEBUG',true);//开发(true)
//define('APP_DEBUG',false);//生产(fasle)

//定义根目录
define('ROOT','http://'.$_SERVER['HTTP_HOST'].'/extraFile/shop/');
//给前台静态文件设置为常量,方便后期维护
define('CSS_URL','/extraFile/shop/Public/css/');
define('IMG_URL','/extraFile/shop/Public/img/');
define('JS_URL','/extraFile/shop/Public/js/');

//给后台静态文件设置常量,方便维护
define('Admin_CSS_URL','/extraFile/shop/Admin/Public/css/');
define('Admin_IMG_URL','/extraFile/shop/Admin/Public/img/');
define('Admin_JS_URL','/extraFile/shop/Admin/Public/js/');
//设置分页的每页显示数据条数
define('PAGE_PER','2');
//引入TP文件
include("../ThinkPHP/ThinkPHP.php");