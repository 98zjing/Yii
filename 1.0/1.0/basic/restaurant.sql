-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-03-29 11:35:38
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) unsigned NOT NULL,
  `username` varchar(32) NOT NULL COMMENT '管理员登录用户名',
  `password` varchar(128) NOT NULL COMMENT '登录密码',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `ctime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1521550271),
(2, 'root', 'root', 0);

-- --------------------------------------------------------

--
-- 表的结构 `booking_user`
--

CREATE TABLE IF NOT EXISTS `booking_user` (
`booking_user_id` int(11) unsigned NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '客户姓名',
  `organization` varchar(255) DEFAULT '' COMMENT '机构名称',
  `email` varchar(32) DEFAULT '' COMMENT '邮箱地址',
  `phone` varchar(32) DEFAULT '' COMMENT '联系电话',
  `country` varchar(32) DEFAULT '' COMMENT '所属国家',
  `ctime` int(11) unsigned DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- 转存表中的数据 `booking_user`
--

INSERT INTO `booking_user` (`booking_user_id`, `name`, `organization`, `email`, `phone`, `country`, `ctime`) VALUES
(8, '小A', '1111', 'aa@aa.com', '13333333333', 'AU', 1522115823),
(9, '小B', '2222', 'bb@bb.com', '13444444444', 'CA', 1522116008),
(10, '小C', '3333', 'cc@cc.com', '13555555555', 'CN', 1522116307),
(11, '小D', '4444', 'dd@dd.com', '13666666666', 'FR', 1522116706),
(12, '', '', '', '', '', 1522129877),
(13, '111', '1111', '111', '11111', 'BR', 1522129924),
(14, '', '', '', '', '', 1522130115),
(15, 'zzzzzzzzzz', 'zzzzzzzzzzzzzz', 'zzzzzzzzzzz', 'zzzzzzzzzzzzzz', 'AU', 1522135556),
(16, 'qqq', 'qqq', 'qqq', 'qqq', 'CA', 1522138500),
(26, 'ww', 'ww', 'ww', 'ww', '', 1522139924),
(27, '77', '77', '777', '77', '', 1522198673),
(28, 'w', 'w', 'w', 'w', '', 1522202335),
(29, 'z', 'z', 'z', 'z', '', 1522202544),
(30, 'z', 'z', 'z', 'z', 'BR', 1522202677),
(31, 'w', 'w', 'w', 'w', 'CH', 1522209101),
(32, 'w', 'w', 'w', 'w', 'CH', 1522209126),
(33, 'w', 'w', 'w', 'w', 'CH', 1522209127),
(34, 'w', 'w', 'w', 'w', 'CH', 1522209128),
(35, 'w', 'w', 'w', 'w', 'CH', 1522209129),
(36, 'w', 'w', 'w', 'w', 'CH', 1522209130),
(37, 'w', 'w', 'w', '', 'CN', 1522209348),
(38, 'w', 'w', 'w', '', 'CN', 1522209362),
(39, 'w', 'w', 'ww', 'w', 'CH', 1522209424),
(40, '11', '11', '11', '11', 'CA', 1522222759),
(41, '11', '1', '11', '1', 'CH', 1522224457),
(42, '111', '111', '11', '11', 'AU', 1522224515),
(43, 'z', 'z', 'z', 'z', 'CH', 1522226398),
(44, 'z', 'z', 'z', 'z', 'FR', 1522226667),
(45, 'qq', 'qq', 'qq', 'qq', 'BR', 1522282248),
(46, 'hgr', 'wwww', 'aedffw', 'wwea', 'CH', 1522294707),
(47, 'zj', 'zj', 'zj', 'zj', 'CA', 1522314049);

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) unsigned NOT NULL,
  `order_num` varchar(32) NOT NULL DEFAULT '0' COMMENT '订单号',
  `booking_user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '客户id',
  `service_type` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '服务项目类型',
  `service_date` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '预订用餐日期',
  `seat_num` varchar(32) DEFAULT '' COMMENT '座位号码',
  `status` tinyint(2) unsigned DEFAULT '2' COMMENT '订单状态：1-confirmed，2-requested，3-waitlist，4-decline(默认值为0)',
  `order_type` tinyint(2) unsigned DEFAULT '1' COMMENT '订单类型：1-个人，2-团体',
  `group_num` varchar(32) DEFAULT '' COMMENT '团体代号(随机生成)',
  `guest_name` varchar(32) DEFAULT NULL COMMENT '宾客姓名',
  `guest_country` varchar(32) DEFAULT NULL COMMENT '宾客所属国家',
  `ctime` int(11) unsigned DEFAULT '0' COMMENT '下单时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=143 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `order_num`, `booking_user_id`, `service_type`, `service_date`, `seat_num`, `status`, `order_type`, `group_num`, `guest_name`, `guest_country`, `ctime`) VALUES
(138, '1522315098', 46, 1, 1, '2', 0, 1, '0', 'hgr', 'CH', 1522311235),
(139, '1522316762', 47, 2, 1, '2', 0, 1, '0', 'zj', 'CA', 1522314054),
(140, '1522316762', 47, 3, 2, '2', 2, 1, '0', 'zj', 'CA', 1522314054),
(141, '1522317409', 46, 1, 1, '2', 0, 2, '1522317225', 'ahfwfa,whawfw', 'CA,CA', 1522314376),
(142, '1522317409', 46, 2, 1, '2', 0, 2, '1522316918', 'iiji', 'CA', 1522314376);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_user`
--
ALTER TABLE `booking_user`
 ADD PRIMARY KEY (`booking_user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking_user`
--
ALTER TABLE `booking_user`
MODIFY `booking_user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=143;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
