-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-11-18 17:02:24
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `sw_auth`
--

CREATE TABLE IF NOT EXISTS `sw_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '权限名称',
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '权限级别，从0开始计数',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=118 ;

--
-- 转存表中的数据 `sw_auth`
--

INSERT INTO `sw_auth` (`auth_id`, `auth_name`, `auth_pid`, `auth_c`, `auth_a`, `auth_path`, `auth_level`) VALUES
(100, '商品管理', 0, '', '', '100', 0),
(101, '订单管理', 0, '', '', '101', 0),
(102, '权限管理', 0, '', '', '102', 0),
(103, '商品列表', 100, 'Good', 'show', '100-103', 1),
(104, '添加商品', 100, 'Good', 'add', '100-104', 1),
(105, '商品分类', 100, 'Good', 'category', '100-105', 1),
(106, '订单列表', 101, 'Order', 'showlist', '101-106', 1),
(107, '订单查询', 101, 'Order', 'look', '101-107', 1),
(108, '订单打印', 101, 'Order', 'dayin', '101-108', 1),
(109, '管理员列表', 102, 'Manager', 'showlist', '102-109', 1),
(110, '角色管理', 102, 'Role', 'showlist', '102-110', 1),
(111, '权限列表', 102, 'Auth', 'showlist', '102-111', 1),
(112, '个人管理', 0, '', '', '112', 0),
(117, '退出系统', 112, 'Manager', 'logout', '112-117', 1);

-- --------------------------------------------------------

--
-- 表的结构 `sw_good`
--

CREATE TABLE IF NOT EXISTS `sw_good` (
  `good_id` int(11) NOT NULL AUTO_INCREMENT,
  `good_name` varchar(32) NOT NULL COMMENT '商品名称',
  `good_price` int(11) NOT NULL COMMENT '商品价格',
  `good_number` int(11) NOT NULL COMMENT '商品数量',
  `good_big_img` text,
  `good_small_img` text,
  PRIMARY KEY (`good_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `sw_good`
--

INSERT INTO `sw_good` (`good_id`, `good_name`, `good_price`, `good_number`, `good_big_img`, `good_small_img`) VALUES
(6, '苹果3', 6666, 333, 'Public/uploads/2018-11-15/5bed3907bb188.jpg', 'Public/uploads/2018-11-15/small_5bed3907bb188.jpg'),
(7, '苹果1', 6666, 123, 'Public/uploads/2018-11-15/5bed39e89f867.jpg', 'Public/uploads/2018-11-15/small_5bed39e89f867.jpg'),
(8, '苹果2', 7777, 112, 'Public/uploads/2018-11-15/5bed39fb2ce20.jpg', 'Public/uploads/2018-11-15/small_5bed39fb2ce20.jpg'),
(9, '苹果2', 7777, 112, 'Public/uploads/2018-11-15/5bed39fb91ad1.jpg', 'Public/uploads/2018-11-15/small_5bed39fb91ad1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `sw_manager`
--

CREATE TABLE IF NOT EXISTS `sw_manager` (
  `ma_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `ma_name` varchar(32) NOT NULL COMMENT '管理员名字',
  `ma_pwd` varchar(32) NOT NULL COMMENT '管理员密码',
  `ma_time` int(11) DEFAULT NULL,
  `ma_role_id` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`ma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sw_manager`
--

INSERT INTO `sw_manager` (`ma_id`, `ma_name`, `ma_pwd`, `ma_time`, `ma_role_id`) VALUES
(2, 'admin', '123456', 1542556915, NULL),
(3, '747245429', '123456', 1542556712, 10);

-- --------------------------------------------------------

--
-- 表的结构 `sw_role`
--

CREATE TABLE IF NOT EXISTS `sw_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '控制器-操作,控制器-操作,控制器-操作',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `sw_role`
--

INSERT INTO `sw_role` (`role_id`, `role_name`, `role_auth_ids`, `role_auth_ac`) VALUES
(10, '主管', '100,103,104,101,106,107', 'Good-show,Good-add,Order-showlist,Order-look'),
(11, '经理', '100,103,105,101,106,107,108,102,109,110,111', '');

-- --------------------------------------------------------

--
-- 表的结构 `sw_user`
--

CREATE TABLE IF NOT EXISTS `sw_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `last_time` int(11) unsigned NOT NULL COMMENT '最近一次登录时间',
  `user_time` int(11) unsigned NOT NULL COMMENT '注册时候的时间',
  `user_email` varchar(40) NOT NULL COMMENT '邮箱',
  `user_sex` int(4) NOT NULL COMMENT '性别',
  `user_qq` int(12) NOT NULL COMMENT 'QQ',
  `user_tel` int(11) NOT NULL COMMENT '电话号码',
  `user_xueli` int(4) NOT NULL COMMENT '学历信息',
  `user_hobby` varchar(32) NOT NULL COMMENT '爱好信息',
  `user_introduce` text NOT NULL COMMENT '自我介绍',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sw_user`
--

INSERT INTO `sw_user` (`user_id`, `username`, `password`, `last_time`, `user_time`, `user_email`, `user_sex`, `user_qq`, `user_tel`, `user_xueli`, `user_hobby`, `user_introduce`) VALUES
(1, 'fangzhijie', '123456', 1542193104, 1542193104, '747245429@qq.com', 1, 747245429, 2147483647, 5, '1,2', ''),
(3, '747245429', '123456', 1542193262, 1542193262, '747245429@qq.com', 1, 747245429, 2147483647, 5, '1,2', '测试测试测试~');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
