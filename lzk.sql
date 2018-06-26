-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-04 16:03:08
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan`
--
CREATE DATABASE `lzk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lzk`;
-- --------------------------------------------------------

--
-- 表的结构 `tb_km`
--

CREATE TABLE `tb_km` (
  `id` int(30) NOT NULL,
  `km` varchar(200) NOT NULL,
  `teachar` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_km`
--

INSERT INTO `tb_km` (`id`, `km`, `teachar`) VALUES
(1, 'java', '陈老师'),
(2, 'php', '杨老师');

-- --------------------------------------------------------

--
-- 表的结构 `tb_score`
--

CREATE TABLE `tb_score` (
  `id` int(11) NOT NULL,
  `xh` varchar(30) NOT NULL,
  `km` varchar(30) NOT NULL,
  `cj` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_score`
--

INSERT INTO `tb_score` (`id`, `xh`, `km`, `cj`) VALUES
(1, '05', 'java', 8),
(3, '06', 'php', 60),
(4, '06', 'java', 88),
(5, '05', 'php', 70),
(6, '01', 'php', 66),
(7, '01', 'java', 85),
(8, '02', 'php', 70),
(9, '02', 'java', 50),
(10, '03', 'php', 99),
(11, '03', 'java', 60),
(12, '04', 'php', 78);

-- --------------------------------------------------------

--
-- 表的结构 `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int(11) NOT NULL,
  `xh` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL DEFAULT '男',
  `s_class` varchar(20) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_student`
--

INSERT INTO `tb_student` (`id`, `xh`, `name`, `sex`, `s_class`, `birthday`) VALUES
(4, '02', 'aaa', '男', '1606', '1996-12-03'),
(5, '07160601', '张三', '男', '1606', '2017-12-05'),
(3, '01', 'aaa', '女', '1607', '1997-12-25'),
(6, '07160602', '李四', '男', '1606', '2017-12-25'),
(7, '07160603', '王五', '男', '1606', '2017-12-04'),
(8, '071606040', '狗剩', '男', '1606', '2017-12-27'),
(9, '07160606', '小丽', '女', '1606', '2017-12-15'),
(10, '07160600', '丹丹', '女', '1606', '2017-12-26'),
(11, '07160608', '小刘', '男', '1606', '2017-12-03'),
(12, '07160610', '小杜', '男', '1606', '2017-12-14'),
(13, '07160640', '小AA', '女', '1607', '2017-12-27'),
(14, '07160633', '小峰子', '男', '1606', '2017-12-26'),
(15, '07160799', '萨德', '男', '1607', '2017-12-14');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `status`) VALUES
(3, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(2, '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_km`
--
ALTER TABLE `tb_km`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_score`
--
ALTER TABLE `tb_score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xh` (`xh`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_km`
--
ALTER TABLE `tb_km`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `tb_score`
--
ALTER TABLE `tb_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
