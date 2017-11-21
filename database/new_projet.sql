-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 01:04 PM
-- Server version: 5.5.47-MariaDB
-- PHP Version: 5.5.33

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
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `promotion_id` int(8) NOT NULL,
  `promotion_head_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_head_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `promotion_head_en`, `promotion_head_th`, `promotion_img`) VALUES
(1, 'Separate your recycle garbage and get free drink.', 'เก็บแลกแยกดื่ม', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `set_level_below`
--

CREATE TABLE IF NOT EXISTS `set_level_below` (
  `Level_Below_id` int(8) NOT NULL,
  `Level_Below_data` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_level_below`
--

INSERT INTO `set_level_below` (`Level_Below_id`, `Level_Below_data`) VALUES
(1, 'nu-it'),
(3, 'GUEST1'),
(28, '2540'),
(31, 'niceit'),
(32, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(8) NOT NULL,
  `status_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_code`, `status_name`) VALUES
(3, 'D', 'ประสานงานเสร็จสิ้น');

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
  `Yes_comment_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_grop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_emp_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_instay` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_time` datetime NOT NULL,
  `Yes_comment_mac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Yes_comment_text_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_spa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_fitness` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_restaurant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `see1by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `see1date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yes_comment`
--

INSERT INTO `yes_comment` (`Yes_comment_id`, `Yes_comment_level`, `Yes_comment_username`, `Yes_comment_name`, `Yes_comment_room`, `Yes_comment_roombox`, `Yes_comment_spa`, `Yes_comment_fitness`, `Yes_comment_restaurant`, `Yes_comment_other`, `Yes_comment_detail`, `Yes_comment_grop`, `Yes_comment_emp_id`, `Yes_comment_country`, `Yes_comment_instay`, `Yes_comment_web`, `Yes_comment_time`, `Yes_comment_mac`, `Yes_comment_type`, `Yes_comment_status`, `Yes_comment_text_other`, `comment_room`, `comment_spa`, `comment_fitness`, `comment_restaurant`, `comment_other`, `see1by`, `see1date`) VALUES
(1, '3', '87951', '(T/G)ANNY POOH,GUIDE', '3207', '', '', '', '1', '', '', 'GUEST', '10000987951', '[KR]', '[28/10/2017-30/10/2017]', 'HANA ASIA (THAILAND) CO.,LTD.', '2017-10-28 17:50:28', '20:A9:0E:5A:1E:BE', '1', '', '', '', '', '', '', '', '', ''),
(2, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 17:53:29', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(3, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:38', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', '', ''),
(4, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:43', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(5, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:49', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(6, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:15:04', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(7, '2', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:26:27', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(8, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '1', '1', '', 'GUEST', '10000987636', '[TH]', '[28/10/2017-29/10/2017]', 'HOTEL VOUCHER', '2017-10-28 18:27:12', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'Suriyan - IT', '09-11-2017'),
(9, '3', 'it', 'staff', '', '', '', '', '1', '1', '', 'staff', '', '', '', '', '2017-10-30 09:29:09', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', '', ''),
(10, '1', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-30 11:21:57', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(11, '3', 'it', 'staff', '', '1', '1', '1', '1', '1', '', 'staff', '', '', '', '', '2017-10-30 11:40:34', '20:A9:0E:5A:1E:BE', '1', '', '', '', '', '', '', '', '', ''),
(12, '3', 'it', 'staff', '', '', '', '1', '', '1', '', 'staff', '', '', '', '', '2017-10-30 14:51:06', '20:A9:0E:5A:1E:BE', '1', '', '', '', '', '', '', '', '', ''),
(13, '3', 'it', 'staff', '', '1', '', '', '', '1', '', 'staff', '', '', '', '', '2017-10-31 10:09:06', '74:E1:B6:8C:4E:F0', '1', '', '', '', '', '', '', '', '', ''),
(14, '1', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-31 10:16:17', '74:E1:B6:8C:4E:F0', '0', '', '', '', '', '', '', '', '', ''),
(15, '1', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-31 10:16:56', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(16, '2', 'it', 'staff', '', '', '', '', '1', '..', '', 'staff', '', '', '', '', '2017-11-01 08:51:05', '20:A9:0E:5A:1E:BE', '1', '', '', '', '', '', '', 'vvvv', '', ''),
(17, '3', 'it', 'staff', '', '', '', '', '', '1', '123\n', 'staff', '', '', '', '', '2017-11-01 16:04:51', '74:E6:E2:28:FC:8E', '1', '', '', '', '', '', '', '', '', ''),
(18, '3', 'it', 'staff', '', '1', '1', '1', '1', '1', 'ทดสอบ alert', 'staff', '', '', '', '', '2017-11-01 16:08:07', '74:E6:E2:28:FC:8E', '1', '', '', '', '', '', '', '', 'Kanjana - IT', ''),
(19, '3', 'it', 'staff', '', '', '', '1', '', '1', 'ZZ', 'staff', '', '', '', '', '2017-11-01 16:58:48', '74:E6:E2:28:FC:8E', '1', '', '', '', '', '', '', '', '', ''),
(20, '3', 'it', 'staff', '', '', '', '1', '', '1', '11', 'staff', '', '', '', '', '2017-11-01 17:00:01', '74:E6:E2:28:FC:8E', '1', '', '', 'bb', '', '', '', '', '', '06-11-2017'),
(21, '2', 'it', 'staff', '', '', '', '', '', '', '12', 'staff', '', '', '', '', '2017-11-01 17:05:39', '74:E6:E2:28:FC:8E', '1', '', '', 'vv', '', '', '', '', '', ''),
(22, '3', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-11-01 17:13:15', '20:A9:0E:5A:1E:BE', '0', '', '', 'vv', '', '', '', '', '', ''),
(24, '3', 'it', 'staff', '', '', '', '', '', '1', 'ทดสอบ', 'staff', '', '', '', '', '2017-11-02 07:58:58', '20:A9:0E:5A:1E:BE', '1', '', '', '', '', '', '', '', 'ดวงเนตร.ส', ''),
(25, '2', 'it', 'staff', '', '', '', '', '', '1', '12', 'staff', '', '', '', '', '2017-11-02 10:04:34', 'A0:B4:A5:17:01:BA', '1', '', '', '', '', '', '', '', '', ''),
(26, '2', 'it', 'staff', '', '', '', '1', '', '', 'IOS Test', 'staff', '', '', '', '', '2017-11-03 09:11:05', 'D8:BB:2C:1F:E4:22', '1', '', '', 'dd', 'dd', 'dd', 'dd', 'dd', '', '09-11-2017'),
(27, '3', 'it', 'staff', '', '', '', '', '', '1', 'Test safari', 'staff', '', '', '', '', '2017-11-03 10:04:54', '74:E1:B6:8C:4E:F0', '1', '', '', '', '', '', '', '', 'Thitipong - IT', '09-11-2017'),
(28, '3', 'it', 'staff', '', '', '', '', '', '1', 'Safari Thai', 'staff', '', '', '', '', '2017-11-03 10:19:56', '74:E1:B6:8C:4E:F0', '1', '', '', '', '', '', '', '', '', ''),
(29, '1', 'it', 'staff', '', '', '', '', '', '1', 'It กาก', 'staff', '', '', '', '', '2017-11-03 13:45:38', '2C:F0:A2:8D:2B:7E', '1', 'D', '', '', '', '', '', '', 'ชวลิต.ก', '17-11-2017'),
(30, '2', 'it', 'staff', '', '', '', '', '', '1', 'Ttttttt', 'staff', '', '', '', '', '2017-11-04 15:45:09', '74:E1:B6:8C:4E:F0', '1', 'D', '', 'อ่อนแอ', '', '', '', '', 'Thitipong - IT', '09-11-2017'),
(31, '3', 'it', 'staff', '', '', '', '', '', '1', 'Go', 'staff', '', '', '', '', '2017-11-04 16:43:30', '74:E1:B6:8C:4E:F0', '1', 'D', '', 'ทวีศักดิ์.ว', '06-11-2017', '', '', '', 'Thitipong - IT', ''),
(32, '3', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-11-07 16:58:56', '74:E1:B6:8C:4E:F0', '1', 'D', '', 'ทดสอบ Room', 'ทดสอบ Spa ', 'ทดสอบ Fitness', 'ทดสอบ Restaurant', 'ทดสอบ Other', 'Suriyan - IT', '02-11-2017'),
(33, '2', 'it', 'staff', '', '', '', '', '', '1', 'Y', 'staff', '', '', '', '', '2017-11-10 09:56:57', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'ดวงเนตร.ส', '13-11-2017'),
(34, '3', 'it', 'staff', '', '1', '1', '', '', '', 'ทดสอบ', 'staff', '', '', '', '', '2017-11-10 10:03:03', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'ชวลิต.ก', '13-11-2017'),
(35, '3', 'it', 'staff', '', '', '', '', '', '1', '', 'staff', '', '', '', '', '2017-11-10 13:58:59', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'สุขสันต์.พ', '13-11-2017'),
(39, '3', '90526', 'KIM JINSUK/LYU HAEJONG', '9035', '', '', '', '', '1', 'ทดสอบ', 'GUEST', '10000990526', '[KR]', '[12/11/2017-14/11/2017]', 'HANA ASIA (THAILAND) CO.,LTD.', '2017-11-13 09:09:10', '20:A9:0E:5A:1E:BE', '1', 'D', 'Wifi', '', '', '', '', '', 'Thitipong - IT', '13-11-2017'),
(40, '2', '93559', 'WANDEE NUSONG(MONTCHAI NOOSONG ,KHUN', '1404', '', '', '', '', '', '', 'GUEST', '', '[TH]', '[18/11/2017-19/11/2017]', '', '2017-11-18 22:11:35', '18:65:90:A4:B2:DE', '0', 'D', '', 'รับทราบ', '', '', '', '', 'Thitipong - IT', '19-11-2017'),
(41, '2', 'it', 'staff', '', '', '', '', '', '1', 'Wifi', 'staff', '', '', '', '', '2017-11-21 12:12:38', '20:A9:0E:5A:1E:BE', '1', '', 'Wifi', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `set_level_below`
--
ALTER TABLE `set_level_below`
  ADD PRIMARY KEY (`Level_Below_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `yes_comment`
--
ALTER TABLE `yes_comment`
  ADD PRIMARY KEY (`Yes_comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `set_level_below`
--
ALTER TABLE `set_level_below`
  MODIFY `Level_Below_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `yes_comment`
--
ALTER TABLE `yes_comment`
  MODIFY `Yes_comment_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
