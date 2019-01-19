-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2019-01-19 08:31:01
-- 服务器版本: 5.5.54-log
-- PHP 版本: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mysql`
--

-- --------------------------------------------------------

--
-- 表的结构 `edata`
--

CREATE TABLE IF NOT EXISTS `edata` (
  `序号` int(11) NOT NULL AUTO_INCREMENT,
  `编号` varchar(20) NOT NULL,
  `烘干前` float NOT NULL,
  `烘干后` float NOT NULL,
  `泡水后` float NOT NULL,
  `体积` float NOT NULL,
  `吸水` float NOT NULL,
  `平均吸水` float NOT NULL,
  `含水` float NOT NULL,
  `平均含水` float NOT NULL,
  `密度` float NOT NULL,
  `平均密度` float NOT NULL,
  PRIMARY KEY (`序号`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
