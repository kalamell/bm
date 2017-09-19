-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 19, 2017 at 11:40 PM
-- Server version: 10.1.26-MariaDB-1~jessie
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackmores`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fbid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fbid`, `name`, `email`, `create_date`, `ip`, `profile`, `token`) VALUES
(1, '1710178702347308', 'บัณฑิต แสนคำภา', 'kalamell@hotmail.com', '2017-09-19 20:05:38', '172.18.0.1', 'http://graph.facebook.com/1710178702347308/picture?type=normal', 'EAAL3ZAuQonxcBAHLJGvtPXslSkjPHUBZCEgFOOjc9pBs3qlJ76ZAmzQJwm6wlBt2MEg9GFCEEvTmIABrq880D4ePUUpqqjVZBCX');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `univercities`
--

CREATE TABLE `univercities` (
  `uid` int(11) NOT NULL,
  `uname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `univercities`
--

INSERT INTO `univercities` (`uid`, `uname`) VALUES
(1, 'มหาลัยเกษตรศาสตร์'),
(2, 'มหาวิทยาลัยกรุงเทพ กล้วยน้ำไท'),
(3, 'มหาวิทยาลัยกรุงเทพ รังสิต'),
(4, 'มหาวิทยาลัยธรรมศาสตร์ รังสิต'),
(5, 'มหาวิทยาลัยมหิดล ศาลายา'),
(6, 'มหาวิทยาลัยศรีนครินทรวิโรฒ'),
(7, 'มหาวิทยาลัยศิลปากร'),
(8, 'มหาวิทยาลัยหอการค้า'),
(9, 'มหาวิทยาลัยอัสสัมชัญ บางนา'),
(10, 'มหาวิทยาลัยอัสสัมชัญ หัวหมาก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fbid` (`fbid`,`email`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `univercities`
--
ALTER TABLE `univercities`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `univercities`
--
ALTER TABLE `univercities`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
