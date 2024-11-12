-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-08-29 23:12:46
-- 服务器版本： 5.6.50-log
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mao_648623_xyz`
--

-- --------------------------------------------------------

--
-- 表的结构 `mao_data`
--

CREATE TABLE `mao_data` (
  `id` int(11) NOT NULL,
  `Z_id` varchar(255) DEFAULT '1',
  `user` varchar(20) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `gd_gg` text,
  `qq` varchar(15) DEFAULT NULL COMMENT '客服QQ',
  `wx` varchar(20) DEFAULT NULL COMMENT '客服微信',
  `sj` varchar(15) DEFAULT NULL,
  `url` varchar(30) NOT NULL DEFAULT '' COMMENT '系统分发域名',
  `url_1` varchar(30) DEFAULT NULL COMMENT '备用域名',
  `time` varchar(30) NOT NULL DEFAULT '' COMMENT '网站到期时间',
  `dx_1` varchar(1) DEFAULT '1',
  `dx_2` varchar(255) DEFAULT '1',
  `dx_3` varchar(1) DEFAULT '1',
  `dx_4` varchar(1) DEFAULT '1',
  `yzf_type` varchar(1) DEFAULT '1' COMMENT '/0自定义/',
  `yzf_id` varchar(50) DEFAULT NULL,
  `yzf_key` varchar(100) DEFAULT NULL,
  `yzf_url` varchar(100) DEFAULT NULL,
  `zfb_zf` varchar(1) DEFAULT '0',
  `qq_zf` varchar(1) DEFAULT '0',
  `wx_zf` varchar(1) DEFAULT '0',
  `tx_zh` varchar(20) DEFAULT '' COMMENT '提现帐号',
  `tx_sm` varchar(10) DEFAULT NULL COMMENT '提现实名',
  `ym_id` varchar(20) DEFAULT NULL COMMENT '友盟',
  `mzf_id` varchar(20) DEFAULT NULL COMMENT '2',
  `mzf_key` varchar(100) DEFAULT NULL COMMENT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mao_data`
--

INSERT INTO `mao_data` (`id`, `Z_id`, `user`, `pass`, `title`, `keywords`, `description`, `price`, `gd_gg`, `qq`, `wx`, `sj`, `url`, `url_1`, `time`, `dx_1`, `dx_2`, `dx_3`, `dx_4`, `yzf_type`, `yzf_id`, `yzf_key`, `yzf_url`, `zfb_zf`, `qq_zf`, `wx_zf`, `tx_zh`, `tx_sm`, `ym_id`, `mzf_id`, `mzf_key`) VALUES
(1, '1', 'admin', '123456', '抖音小店', '科技老黑', '科技老黑', 104.98, '抖音小店', '123456', '123456', '13100000000', 'mao.do0main.com', 'mao.do0main.com', '2099-12-31', '0', '0', '0', '0', '0', '1000', '', '', '0', '1', '0', '123456@qq.com', '机器猫', '127774311', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `mao_dindan`
--

CREATE TABLE `mao_dindan` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `M_sp` varchar(10) NOT NULL DEFAULT '',
  `ddh` varchar(50) NOT NULL DEFAULT '',
  `sjh` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `sl` varchar(10) NOT NULL DEFAULT '1',
  `dj_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `yf_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `time` varchar(50) NOT NULL DEFAULT '',
  `zt` varchar(1) NOT NULL DEFAULT '1' COMMENT '/1未处理/0已付款(待)/2已处理/',
  `xm` varchar(10) DEFAULT '' COMMENT '收件人',
  `dz` varchar(100) DEFAULT '' COMMENT '收件地址',
  `xxdz` varchar(100) DEFAULT '' COMMENT '详细地址',
  `ly` varchar(30) DEFAULT '',
  `jzxm` varchar(10) DEFAULT '' COMMENT '机主姓名',
  `sfzh` varchar(30) DEFAULT '' COMMENT '机主身份证号',
  `mgz` varchar(255) DEFAULT NULL COMMENT '免冠照',
  `sfz1` varchar(255) DEFAULT NULL COMMENT '身份证正面',
  `sfz2` varchar(255) DEFAULT NULL COMMENT '身份证反面',
  `kdgs` varchar(20) DEFAULT '' COMMENT '快递公司',
  `ydh` varchar(50) DEFAULT NULL COMMENT '运单号',
  `msg` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mao_dindan`
--

INSERT INTO `mao_dindan` (`id`, `M_id`, `M_sp`, `ddh`, `sjh`, `name`, `sl`, `dj_price`, `yf_price`, `price`, `time`, `zt`, `xm`, `dz`, `xxdz`, `ly`, `jzxm`, `sfzh`, `mgz`, `sfz1`, `sfz2`, `kdgs`, `ydh`, `msg`) VALUES
(61, '1', '3', '20240822230124965', '', '【人气销量】八爪鱼大爆头即食麻辣小海鲜熟食', '1', 1.00, 0.00, 1.00, '2024-08-22 23:01:24', '1', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(62, '1', '3', '20240822230147609', 'dfgdhfj', '【人气销量】八爪鱼大爆头即食麻辣小海鲜熟食', '1', 1.00, 0.00, 1.00, '2024-08-22 23:01:47', '1', 'DFSFDG', '重庆 南岸区 鸡冠石镇', 'FDGHJ', 'DFGH', '', '', NULL, NULL, NULL, '', NULL, NULL),
(59, '1', '3', '20240822225728315', '', '【人气销量】八爪鱼大爆头即食麻辣小海鲜熟食', '1', 1.00, 0.00, 1.00, '2024-08-22 22:57:28', '1', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(60, '1', '3', '20240822225744246', '', '【人气销量】八爪鱼大爆头即食麻辣小海鲜熟食', '1', 1.00, 0.00, 1.00, '2024-08-22 22:57:44', '1', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(63, '1', '3', '20240823000714536', '5464', '【人气销量】八爪鱼大爆头即食麻辣小海鲜熟食', '1', 1.00, 0.00, 1.00, '2024-08-23 00:07:13', '1', '546', '上海 虹口区 城区', '456', '456', '', '', NULL, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `mao_fl`
--

CREATE TABLE `mao_fl` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `mao_fl`
--

INSERT INTO `mao_fl` (`id`, `M_id`, `name`) VALUES
(2, '1', '默认分类');

-- --------------------------------------------------------

--
-- 表的结构 `mao_gd`
--

CREATE TABLE `mao_gd` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(1) NOT NULL DEFAULT '',
  `ddh` varchar(50) DEFAULT NULL,
  `kh` varchar(50) DEFAULT NULL,
  `wt` text,
  `img` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `zt` varchar(1) DEFAULT NULL,
  `msg` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mao_shop`
--

CREATE TABLE `mao_shop` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img` varchar(255) DEFAULT NULL,
  `type` varchar(1) NOT NULL DEFAULT '' COMMENT '1电/2移/3联',
  `tj` varchar(1) NOT NULL DEFAULT '1' COMMENT '0推荐/1默认',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `yf_price` decimal(10,2) DEFAULT '0.00',
  `youhui_zhang` varchar(10) NOT NULL DEFAULT '0',
  `youhui_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `kucun` varchar(10) NOT NULL DEFAULT '0',
  `xiaoliang` varchar(10) NOT NULL DEFAULT '0',
  `beizhu` text,
  `xq` text,
  `slxd_zt` varchar(1) NOT NULL DEFAULT '1' COMMENT '数量下单/0开启/1关闭',
  `rwzl_zt` varchar(1) NOT NULL DEFAULT '1' COMMENT '0开启/1关闭',
  `dqpb` text COMMENT '地区屏蔽',
  `zt` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mao_shop`
--

INSERT INTO `mao_shop` (`id`, `M_id`, `name`, `img`, `type`, `tj`, `price`, `yf_price`, `youhui_zhang`, `youhui_price`, `kucun`, `xiaoliang`, `beizhu`, `xq`, `slxd_zt`, `rwzl_zt`, `dqpb`, `zt`) VALUES
(2, '1', '初中学生夏季休闲运动套装', '/upload/20190725215027158.png', '2', '0', 0.50, 0.00, '0', 0.50, '999', '24', NULL, '商品介绍测试', '1', '1', '', '0'),
(3, '1', '八爪鱼大爆头即食麻辣小海鲜熟食', '/upload/20190725215310806.jpg', '2', '0', 1.00, 0.00, '0', 1.00, '997', '19', NULL, '商品介绍测试', '1', '1', '', '0');

-- --------------------------------------------------------

--
-- 表的结构 `mao_tx`
--

CREATE TABLE `mao_tx` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `time` varchar(50) DEFAULT NULL,
  `zt` varchar(255) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mao_user`
--

CREATE TABLE `mao_user` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mao_user`
--

INSERT INTO `mao_user` (`id`, `M_id`, `users`, `pass`) VALUES
(1, '1', '13811111111', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `mao_wuliu`
--

CREATE TABLE `mao_wuliu` (
  `id` int(11) NOT NULL,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(50) DEFAULT NULL,
  `ddh` varchar(50) DEFAULT NULL,
  `msg` text,
  `time` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转储表的索引
--

--
-- 表的索引 `mao_data`
--
ALTER TABLE `mao_data`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_dindan`
--
ALTER TABLE `mao_dindan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_fl`
--
ALTER TABLE `mao_fl`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_gd`
--
ALTER TABLE `mao_gd`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_shop`
--
ALTER TABLE `mao_shop`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_tx`
--
ALTER TABLE `mao_tx`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_user`
--
ALTER TABLE `mao_user`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `mao_wuliu`
--
ALTER TABLE `mao_wuliu`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `mao_data`
--
ALTER TABLE `mao_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `mao_dindan`
--
ALTER TABLE `mao_dindan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用表AUTO_INCREMENT `mao_fl`
--
ALTER TABLE `mao_fl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `mao_gd`
--
ALTER TABLE `mao_gd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- 使用表AUTO_INCREMENT `mao_shop`
--
ALTER TABLE `mao_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `mao_tx`
--
ALTER TABLE `mao_tx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `mao_user`
--
ALTER TABLE `mao_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `mao_wuliu`
--
ALTER TABLE `mao_wuliu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
