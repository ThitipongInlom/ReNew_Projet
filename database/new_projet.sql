-- phpMyAdmin SQL Dump
-- version 4.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 04:35 PM
-- Server version: 5.6.19
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `set_level_below`
--

CREATE TABLE IF NOT EXISTS `set_level_below` (
`Level_Below_id` int(8) NOT NULL,
  `Level_Below_data` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `set_level_below`
--

INSERT INTO `set_level_below` (`Level_Below_id`, `Level_Below_data`) VALUES
(1, 'nu-it'),
(3, 'GUEST1'),
(4, 'niceit'),
(5, '87636'),
(6, 'yun-it'),
(7, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `yes_comment`
--

CREATE TABLE IF NOT EXISTS `yes_comment` (
`Yes_comment_id` int(8) NOT NULL,
  `Yes_comment_level` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_room` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_roombox` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_spa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_fitness` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_restaurant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_grop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_emp_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_instay` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_time` datetime NOT NULL,
  `Yes_comment_mac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `yes_comment`
--

INSERT INTO `yes_comment` (`Yes_comment_id`, `Yes_comment_level`, `Yes_comment_username`, `Yes_comment_name`, `Yes_comment_room`, `Yes_comment_roombox`, `Yes_comment_spa`, `Yes_comment_fitness`, `Yes_comment_restaurant`, `Yes_comment_other`, `Yes_comment_grop`, `Yes_comment_emp_id`, `Yes_comment_country`, `Yes_comment_instay`, `Yes_comment_web`, `Yes_comment_time`, `Yes_comment_mac`, `Yes_comment_type`) VALUES
(1, '3', '87951', '(T/G)ANNY POOH,GUIDE', '3207', '', '', '', '1', 'ทดสอบ', 'GUEST', '10000987951', '[KR]', '[28/10/2017-30/10/2017]', 'HANA ASIA (THAILAND) CO.,LTD.', '2017-10-28 17:50:28', '20:A9:0E:5A:1E:BE', '1'),
(2, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 17:53:29', '20:A9:0E:5A:1E:BE', '0'),
(3, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:38', '20:A9:0E:5A:1E:BE', '0'),
(4, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:43', '20:A9:0E:5A:1E:BE', '0'),
(5, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:49', '20:A9:0E:5A:1E:BE', '0'),
(6, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:15:04', '20:A9:0E:5A:1E:BE', '0'),
(7, '2', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:26:27', '20:A9:0E:5A:1E:BE', '0'),
(8, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '1', 'อาหารอร่อย', 'GUEST', '10000987636', '[TH]', '[28/10/2017-29/10/2017]', 'HOTEL VOUCHER', '2017-10-28 18:27:12', '20:A9:0E:5A:1E:BE', '1'),
(9, '3', 'it', 'staff', '', '', '', '', '1', 'ทดสอบๆ', 'staff', '', '', '', '', '2017-10-30 09:29:09', '20:A9:0E:5A:1E:BE', '1'),
(10, '1', 'it', 'staff', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-30 11:21:57', '20:A9:0E:5A:1E:BE', '0'),
(11, '3', 'it', 'staff', '', '1', '1', '1', '1', 'Test', 'staff', '', '', '', '', '2017-10-30 11:40:34', '20:A9:0E:5A:1E:BE', '1'),
(12, '3', 'it', 'staff', '', '', '', '1', '', 'ไม่เปิดเพลง', 'staff', '', '', '', '', '2017-10-30 14:51:06', '20:A9:0E:5A:1E:BE', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `set_level_below`
--
ALTER TABLE `set_level_below`
 ADD PRIMARY KEY (`Level_Below_id`);

--
-- Indexes for table `yes_comment`
--
ALTER TABLE `yes_comment`
 ADD PRIMARY KEY (`Yes_comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `set_level_below`
--
ALTER TABLE `set_level_below`
MODIFY `Level_Below_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `yes_comment`
--
ALTER TABLE `yes_comment`
MODIFY `Yes_comment_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
