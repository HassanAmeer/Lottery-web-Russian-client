-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2022 at 03:34 PM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotterydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `bythis` varchar(100) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(250) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `bythis`, `img`, `title`, `description`, `time`) VALUES
(2, 'maarkhoor', 'view (3).gif', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 07:52:02'),
(3, 'maarkhoor', '3.jpg', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:04:29'),
(4, 'maarkhoor', '1.jpg', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:21:11'),
(5, 'maarkhoor', '2.jpg', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:22:08'),
(6, 'maarkhoor', '3.jpg', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:22:30'),
(7, 'maarkhoor', '3.jpg', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:29:58'),
(8, 'maarkhoor', '3.jpg', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:30:02'),
(10, 'maarkhoor', 'view (3).gif', 'Learn the Advantages of Playing Lottery Online and Choose a Lottery for Yourself', 'Do you play lotto regularly, yet, the necessity of visiting an outlet each time you want to purchase a Lotto ticket is uncomfortable for you? Do you have a lack of time like many of us and usually can’t manage to visit an outlet before its closure?', '2022-07-12 08:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `buytkts`
--

CREATE TABLE `buytkts` (
  `bid` int(100) NOT NULL,
  `byusr` varchar(100) DEFAULT NULL,
  `wallet` varchar(100) NOT NULL DEFAULT '0',
  `trid` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `tktno` int(100) NOT NULL DEFAULT '0',
  `rdmcard` int(10) DEFAULT NULL,
  `sqlcard` int(10) DEFAULT NULL,
  `statusend` int(2) NOT NULL DEFAULT '0',
  `winlos` int(3) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buytkts`
--

INSERT INTO `buytkts` (`bid`, `byusr`, `wallet`, `trid`, `status`, `tktno`, `rdmcard`, `sqlcard`, `statusend`, `winlos`, `date`) VALUES
(140, 'test@gmail.com', 'P11223344', '1657563445', 1, 27, 15, 2, 0, 0, '2022-07-11 18:17:25'),
(139, 'test@gmail.com', 'P11223344', '1657563445', 1, 37, 4, 3, 0, 0, '2022-07-11 18:17:25'),
(141, 'test@gmail.com', 'P11223344', '1657563445', 1, 17, 12, 1, 0, 0, '2022-07-11 18:17:25'),
(142, 'test@gmail.com', 'P11223344', '1657563551', 1, 1, 7, 3, 0, 0, '2022-07-11 18:19:11'),
(143, 'test@gmail.com', 'P11223344', '1657563551', 1, 31, 18, 5, 0, 0, '2022-07-11 18:19:11'),
(144, 'test@gmail.com', 'P11223344', '1657563551', 1, 7, 21, 4, 0, 0, '2022-07-11 18:19:11'),
(145, 'test@gmail.com', 'P11223344', '1657563551', 1, 10, 12, 1, 0, 0, '2022-07-11 18:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `cardpiker1`
--

CREATE TABLE `cardpiker1` (
  `cid` int(11) NOT NULL,
  `tktnos` int(3) DEFAULT NULL,
  `saled` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardpiker1`
--

INSERT INTO `cardpiker1` (`cid`, `tktnos`, `saled`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, 1),
(7, 7, NULL),
(8, 8, 1),
(9, 9, NULL),
(10, 10, NULL),
(11, 11, NULL),
(12, 12, NULL),
(13, 13, NULL),
(14, 14, NULL),
(15, 15, NULL),
(16, 16, NULL),
(17, 17, NULL),
(18, 18, NULL),
(19, 19, NULL),
(20, 20, NULL),
(21, 21, NULL),
(22, 22, NULL),
(23, 23, NULL),
(24, 24, NULL),
(25, 25, NULL),
(26, 26, NULL),
(27, 27, NULL),
(28, 28, NULL),
(29, 29, NULL),
(30, 30, NULL),
(31, 31, NULL),
(32, 32, NULL),
(33, 33, NULL),
(34, 34, NULL),
(35, 35, NULL),
(36, 36, NULL),
(37, 37, NULL),
(38, 38, NULL),
(39, 39, NULL),
(40, 40, NULL),
(41, 41, NULL),
(42, 42, NULL),
(43, 43, NULL),
(44, 44, NULL),
(45, 45, NULL),
(46, 46, NULL),
(47, 47, NULL),
(48, 48, NULL),
(49, 49, NULL),
(50, 50, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cardpiker2`
--

CREATE TABLE `cardpiker2` (
  `cid` int(11) NOT NULL,
  `tktnos` int(3) DEFAULT NULL,
  `saled` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardpiker2`
--

INSERT INTO `cardpiker2` (`cid`, `tktnos`, `saled`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, NULL),
(7, 7, NULL),
(8, 8, NULL),
(9, 9, NULL),
(10, 10, NULL),
(11, 11, NULL),
(12, 12, NULL),
(13, 13, NULL),
(14, 14, NULL),
(15, 15, NULL),
(16, 16, NULL),
(17, 17, NULL),
(18, 18, NULL),
(19, 19, NULL),
(20, 20, NULL),
(21, 21, NULL),
(22, 22, NULL),
(23, 23, NULL),
(24, 24, NULL),
(25, 25, NULL),
(26, 26, NULL),
(27, 27, NULL),
(28, 28, NULL),
(29, 29, NULL),
(30, 30, NULL),
(31, 31, NULL),
(32, 32, NULL),
(33, 33, NULL),
(34, 34, NULL),
(35, 35, NULL),
(36, 36, NULL),
(37, 37, NULL),
(38, 38, NULL),
(39, 39, NULL),
(40, 40, NULL),
(41, 41, NULL),
(42, 42, NULL),
(43, 43, NULL),
(44, 44, NULL),
(45, 45, NULL),
(46, 46, NULL),
(47, 47, NULL),
(48, 48, NULL),
(49, 49, NULL),
(50, 50, NULL),
(51, 51, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cardpiker3`
--

CREATE TABLE `cardpiker3` (
  `cid` int(11) NOT NULL,
  `tktnos` int(3) DEFAULT NULL,
  `saled` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardpiker3`
--

INSERT INTO `cardpiker3` (`cid`, `tktnos`, `saled`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, NULL),
(7, 7, NULL),
(8, 8, NULL),
(9, 9, NULL),
(10, 10, NULL),
(11, 11, NULL),
(12, 12, NULL),
(13, 13, NULL),
(14, 14, NULL),
(15, 15, NULL),
(16, 16, NULL),
(17, 17, NULL),
(18, 18, NULL),
(19, 19, NULL),
(20, 20, NULL),
(21, 21, NULL),
(22, 22, NULL),
(23, 23, NULL),
(24, 24, NULL),
(25, 25, NULL),
(26, 26, NULL),
(27, 27, NULL),
(28, 28, NULL),
(29, 29, NULL),
(30, 30, NULL),
(31, 31, NULL),
(32, 32, NULL),
(33, 33, NULL),
(34, 34, NULL),
(35, 35, NULL),
(36, 36, NULL),
(37, 37, NULL),
(38, 38, NULL),
(39, 39, NULL),
(40, 40, NULL),
(41, 41, NULL),
(42, 42, NULL),
(43, 43, NULL),
(44, 44, NULL),
(45, 45, NULL),
(46, 46, NULL),
(47, 47, NULL),
(48, 48, NULL),
(49, 49, NULL),
(50, 50, NULL),
(51, 51, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cardpiker4`
--

CREATE TABLE `cardpiker4` (
  `cid` int(11) NOT NULL,
  `tktnos` int(3) DEFAULT NULL,
  `saled` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardpiker4`
--

INSERT INTO `cardpiker4` (`cid`, `tktnos`, `saled`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, NULL),
(7, 7, NULL),
(8, 8, NULL),
(9, 9, NULL),
(10, 10, NULL),
(11, 11, NULL),
(12, 12, NULL),
(13, 13, NULL),
(14, 14, NULL),
(15, 15, NULL),
(16, 16, NULL),
(17, 17, NULL),
(18, 18, NULL),
(19, 19, NULL),
(20, 20, NULL),
(21, 21, NULL),
(22, 22, NULL),
(23, 23, NULL),
(24, 24, NULL),
(25, 25, NULL),
(26, 26, NULL),
(27, 27, NULL),
(28, 28, NULL),
(29, 29, NULL),
(30, 30, NULL),
(31, 31, NULL),
(32, 32, NULL),
(33, 33, NULL),
(34, 34, NULL),
(35, 35, NULL),
(36, 36, NULL),
(37, 37, NULL),
(38, 38, NULL),
(39, 39, NULL),
(40, 40, NULL),
(41, 41, NULL),
(42, 42, NULL),
(43, 43, NULL),
(44, 44, NULL),
(45, 45, NULL),
(46, 46, NULL),
(47, 47, NULL),
(48, 48, NULL),
(49, 49, NULL),
(50, 50, NULL),
(51, 51, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cardpiker5`
--

CREATE TABLE `cardpiker5` (
  `cid` int(11) NOT NULL,
  `tktnos` int(3) DEFAULT NULL,
  `saled` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardpiker5`
--

INSERT INTO `cardpiker5` (`cid`, `tktnos`, `saled`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, NULL),
(7, 7, NULL),
(8, 8, NULL),
(9, 9, NULL),
(10, 10, NULL),
(11, 11, NULL),
(12, 12, NULL),
(13, 13, NULL),
(14, 14, NULL),
(15, 15, NULL),
(16, 16, NULL),
(17, 17, NULL),
(18, 18, NULL),
(19, 19, NULL),
(20, 20, NULL),
(21, 21, NULL),
(22, 22, NULL),
(23, 23, NULL),
(24, 24, NULL),
(25, 25, NULL),
(26, 26, NULL),
(27, 27, NULL),
(28, 28, NULL),
(29, 29, NULL),
(30, 30, NULL),
(31, 31, NULL),
(32, 32, NULL),
(33, 33, NULL),
(34, 34, NULL),
(35, 35, NULL),
(36, 36, NULL),
(37, 37, NULL),
(38, 38, NULL),
(39, 39, NULL),
(40, 40, NULL),
(41, 41, NULL),
(42, 42, NULL),
(43, 43, NULL),
(44, 44, NULL),
(45, 45, NULL),
(46, 46, NULL),
(47, 47, NULL),
(48, 48, NULL),
(49, 49, NULL),
(50, 50, NULL),
(51, 51, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(100) NOT NULL,
  `usermail` varchar(150) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `mainmsg` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `usermail`, `title`, `mainmsg`) VALUES
(21, 'test@gmail.com', 'test', 'test'),
(22, 'tttt@gmail.com', 'tttt', 'tttt');

-- --------------------------------------------------------

--
-- Table structure for table `ghstng`
--

CREATE TABLE `ghstng` (
  `stngid` int(250) NOT NULL,
  `bonus_percent` int(100) NOT NULL DEFAULT '0',
  `discount` int(20) DEFAULT NULL,
  `rdmbns` int(100) DEFAULT NULL,
  `no_of_lotry_winner` int(3) DEFAULT NULL,
  `withdrawoff` int(1) NOT NULL DEFAULT '0',
  `min_out` int(20) DEFAULT NULL,
  `sitename` varchar(150) NOT NULL,
  `bells` varchar(180) DEFAULT NULL,
  `githlink` varchar(150) DEFAULT NULL,
  `instalink` varchar(150) DEFAULT NULL,
  `tglink` varchar(150) DEFAULT NULL,
  `fblink` varchar(150) DEFAULT NULL,
  `twlink` varchar(150) DEFAULT NULL,
  `phone1` varchar(100) NOT NULL DEFAULT '+999-111-111-111',
  `phone2` varchar(100) NOT NULL DEFAULT '+999-999-999-999',
  `email` varchar(150) DEFAULT NULL,
  `admin` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_h` int(20) DEFAULT NULL,
  `end_m` int(20) DEFAULT NULL,
  `end_s` int(20) DEFAULT NULL,
  `timef` int(150) DEFAULT NULL,
  `daysx` int(20) DEFAULT NULL,
  `ytvideo` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ghstng`
--

INSERT INTO `ghstng` (`stngid`, `bonus_percent`, `discount`, `rdmbns`, `no_of_lotry_winner`, `withdrawoff`, `min_out`, `sitename`, `bells`, `githlink`, `instalink`, `tglink`, `fblink`, `twlink`, `phone1`, `phone2`, `email`, `admin`, `pass`, `end_date`, `end_h`, `end_m`, `end_s`, `timef`, `daysx`, `ytvideo`) VALUES
(1, 7, 2, 25000, 3, 0, 1000, 'lotto', 'Dear  Users: Now 2% discounts', '', '', 'telegram.com', 'Facebook.com', '', '+01(99 88 77 44)', '', 'Maarkhoor5@gmail.com', 'admin', 'd16e21683e56d9836c2a3ff5a45991ac', '2022-07-23', 5, 8, 40, 1658545692, 30, 'Sx_pxejch2g');

-- --------------------------------------------------------

--
-- Table structure for table `sumout`
--

CREATE TABLE `sumout` (
  `outid` int(100) NOT NULL,
  `byusr` varchar(150) DEFAULT NULL,
  `usrpayeer` varchar(100) DEFAULT NULL,
  `sumouts` float DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sumout`
--

INSERT INTO `sumout` (`outid`, `byusr`, `usrpayeer`, `sumouts`, `Date`) VALUES
(1, 'test@gmail.com', 'P123456789', 1000, '2022-06-21 15:04:57'),
(2, 'test@gmail.com', 'P123456789', 600, '2022-06-21 15:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `userslog`
--

CREATE TABLE `userslog` (
  `uid` int(250) NOT NULL,
  `uemail` varchar(100) DEFAULT NULL,
  `upass` varchar(150) DEFAULT NULL,
  `uacc` varchar(100) DEFAULT NULL,
  `ip` varchar(100) NOT NULL DEFAULT '0',
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `buy_tkts` int(150) DEFAULT '0',
  `totalsum` float DEFAULT '0',
  `sum` float NOT NULL DEFAULT '0',
  `totalsumout` float NOT NULL DEFAULT '0',
  `sumout` float NOT NULL DEFAULT '0',
  `refby` int(100) DEFAULT '0',
  `totalref` int(100) DEFAULT '0',
  `reflevel` int(100) DEFAULT '0',
  `refbonus` float DEFAULT '0',
  `user_ban` int(1) NOT NULL DEFAULT '0',
  `bantxt` varchar(50) DEFAULT 'fas fa-user-tie text-success'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userslog`
--

INSERT INTO `userslog` (`uid`, `uemail`, `upass`, `uacc`, `ip`, `regdate`, `buy_tkts`, `totalsum`, `sum`, `totalsumout`, `sumout`, `refby`, `totalref`, `reflevel`, `refbonus`, `user_ban`, `bantxt`) VALUES
(11, 'test@gmail.com', '68358d5d9cbbf39fe571ba41f26524b6', 'P11223344', '::1', '2022-07-11 06:41:27', 2, 1020, 1020, 0, 2100, 0, 1, 2, 200, 0, 'fas fa-user-tie  text-success'),
(12, 'g@gmail.com', 'fdcc50b61dc532d15108957e71f5bc9e', 'P11223344', '::1', '2022-07-11 07:28:52', 0, 0, 0, 0, 0, 11, 0, 0, 0, 0, 'fas fa-user-tie  text-success');

-- --------------------------------------------------------

--
-- Table structure for table `wontabl`
--

CREATE TABLE `wontabl` (
  `wonid` int(100) NOT NULL,
  `byusr` varchar(100) DEFAULT NULL,
  `usrpayeer` varchar(100) DEFAULT NULL,
  `tickets` int(20) DEFAULT NULL,
  `bonus` float NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wontabl`
--

INSERT INTO `wontabl` (`wonid`, `byusr`, `usrpayeer`, `tickets`, `bonus`, `Date`) VALUES
(21, 'test@gmail.com', 'P1234567890', 10, 7578, '2022-07-09 08:30:20'),
(22, 'test@gmail.com', 'P1234567890', 10, 17101, '2022-07-09 09:38:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buytkts`
--
ALTER TABLE `buytkts`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cardpiker1`
--
ALTER TABLE `cardpiker1`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cardpiker2`
--
ALTER TABLE `cardpiker2`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cardpiker3`
--
ALTER TABLE `cardpiker3`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cardpiker4`
--
ALTER TABLE `cardpiker4`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cardpiker5`
--
ALTER TABLE `cardpiker5`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghstng`
--
ALTER TABLE `ghstng`
  ADD PRIMARY KEY (`stngid`);

--
-- Indexes for table `sumout`
--
ALTER TABLE `sumout`
  ADD PRIMARY KEY (`outid`);

--
-- Indexes for table `userslog`
--
ALTER TABLE `userslog`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wontabl`
--
ALTER TABLE `wontabl`
  ADD PRIMARY KEY (`wonid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buytkts`
--
ALTER TABLE `buytkts`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `cardpiker1`
--
ALTER TABLE `cardpiker1`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cardpiker2`
--
ALTER TABLE `cardpiker2`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cardpiker3`
--
ALTER TABLE `cardpiker3`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cardpiker4`
--
ALTER TABLE `cardpiker4`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cardpiker5`
--
ALTER TABLE `cardpiker5`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ghstng`
--
ALTER TABLE `ghstng`
  MODIFY `stngid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sumout`
--
ALTER TABLE `sumout`
  MODIFY `outid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userslog`
--
ALTER TABLE `userslog`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wontabl`
--
ALTER TABLE `wontabl`
  MODIFY `wonid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
