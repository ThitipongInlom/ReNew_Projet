-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2017 at 11:23 AM
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
-- Table structure for table `maclock`
--

CREATE TABLE IF NOT EXISTS `maclock` (
  `maclock_id` int(8) NOT NULL,
  `mac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maclock_time` int(8) NOT NULL,
  `maclock_check` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maclock`
--

INSERT INTO `maclock` (`maclock_id`, `mac`, `maclock_time`, `maclock_check`) VALUES
(20, 'CC:44:63:9F:37:4D', 8, '2017-12-09'),
(21, '68:DB:CA:9A:71:DD', 8, '2017-12-10'),
(22, '60:A4:D0:52:79:D3', 8, '2017-12-10'),
(23, '84:55:A5:E0:7E:47', 8, '2017-12-10'),
(24, '80:EA:96:CC:DC:CF', 8, '2017-12-10'),
(27, '00:50:56:82:5B:13', 8, '2017-12-10');

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_level_below`
--

INSERT INTO `set_level_below` (`Level_Below_id`, `Level_Below_data`) VALUES
(3, 'GUEST1'),
(45, 'itmgr'),
(46, 'bphecgm'),
(47, 'staff'),
(51, '1');

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
-- Table structure for table `time_set`
--

CREATE TABLE IF NOT EXISTS `time_set` (
  `time_id` int(8) NOT NULL,
  `time_data` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time_set`
--

INSERT INTO `time_set` (`time_id`, `time_data`) VALUES
(1, 8);

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
  `Yes_comment_timerecheck` date NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yes_comment`
--

INSERT INTO `yes_comment` (`Yes_comment_id`, `Yes_comment_level`, `Yes_comment_username`, `Yes_comment_name`, `Yes_comment_room`, `Yes_comment_roombox`, `Yes_comment_spa`, `Yes_comment_fitness`, `Yes_comment_restaurant`, `Yes_comment_other`, `Yes_comment_detail`, `Yes_comment_grop`, `Yes_comment_emp_id`, `Yes_comment_country`, `Yes_comment_instay`, `Yes_comment_web`, `Yes_comment_time`, `Yes_comment_timerecheck`, `Yes_comment_mac`, `Yes_comment_type`, `Yes_comment_status`, `Yes_comment_text_other`, `comment_room`, `comment_spa`, `comment_fitness`, `comment_restaurant`, `comment_other`, `see1by`, `see1date`) VALUES
(1, '3', '87951', '(T/G)ANNY POOH,GUIDE', '3207', '', '', '', '1', '', '', 'GUEST', '10000987951', '[KR]', '[28/10/2017-30/10/2017]', 'HANA ASIA (THAILAND) CO.,LTD.', '2017-10-28 17:50:28', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'Thitipong - IT', '21-11-2017'),
(2, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 17:53:29', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', ''),
(3, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:38', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', '', ''),
(4, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:43', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', '25-11-2017'),
(5, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:14:49', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', '27-11-2017'),
(6, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:15:04', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', ''),
(7, '2', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '', '', '', 'GUEST', '', '', '[28/10/2017-29/10/2017]', '', '2017-10-28 18:26:27', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', ''),
(8, '3', '87636', 'ANCHALEE YIMSAWAT ,KHUN', '7034', '', '', '', '1', '1', '', 'GUEST', '10000987636', '[TH]', '[28/10/2017-29/10/2017]', 'HOTEL VOUCHER', '2017-10-28 18:27:12', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'Suriyan - IT', '09-11-2017'),
(9, '3', 'it', 'staff', '', '', '', '', '1', '1', '', 'staff', '', '', '', '', '2017-10-30 09:29:09', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', '', ''),
(10, '1', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-30 11:21:57', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', '27-11-2017'),
(11, '3', 'it', 'staff', '', '1', '1', '1', '1', '1', '', 'staff', '', '', '', '', '2017-10-30 11:40:34', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'Thitipong - IT', '27-11-2017'),
(12, '3', 'it', 'staff', '', '', '', '1', '', '1', '', 'staff', '', '', '', '', '2017-10-30 14:51:06', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'Suriyan - IT', '28-11-2017'),
(13, '3', 'it', 'staff', '', '1', '', '', '', '1', '', 'staff', '', '', '', '', '2017-10-31 10:09:06', '0000-00-00', '74:E1:B6:8C:4E:F0', '1', 'D', '', '', '', '', '', '', 'Thitipong - IT', '27-11-2017'),
(14, '1', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-31 10:16:17', '0000-00-00', '74:E1:B6:8C:4E:F0', '0', 'D', '', '', '', '', '', '', 'Thitipong - IT', ''),
(15, '1', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-10-31 10:16:56', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', '', '', '', '', '', 'Suriyan - IT', '27-11-2017'),
(16, '2', 'it', 'staff', '', '', '', '', '1', '..', '', 'staff', '', '', '', '', '2017-11-01 08:51:05', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', 'vvvv', 'Thitipong - IT', '27-11-2017'),
(17, '3', 'it', 'staff', '', '', '', '', '', '1', '123\n', 'staff', '', '', '', '', '2017-11-01 16:04:51', '0000-00-00', '74:E6:E2:28:FC:8E', '1', '', '', '', '', '', '', '', '', ''),
(18, '3', 'it', 'staff', '', '1', '1', '1', '1', '1', 'ทดสอบ alert', 'staff', '', '', '', '', '2017-11-01 16:08:07', '0000-00-00', '74:E6:E2:28:FC:8E', '1', '', '', '', '', '', '', '', 'Kanjana - IT', ''),
(19, '3', 'it', 'staff', '', '', '', '1', '', '1', 'ZZ', 'staff', '', '', '', '', '2017-11-01 16:58:48', '0000-00-00', '74:E6:E2:28:FC:8E', '1', '', '', '', '', '', '', '', '', ''),
(20, '3', 'it', 'staff', '', '', '', '1', '', '1', '11', 'staff', '', '', '', '', '2017-11-01 17:00:01', '0000-00-00', '74:E6:E2:28:FC:8E', '1', '', '', 'bb', '', '', '', '', '', '06-11-2017'),
(21, '2', 'it', 'staff', '', '', '', '', '', '', '12', 'staff', '', '', '', '', '2017-11-01 17:05:39', '0000-00-00', '74:E6:E2:28:FC:8E', '1', '', '', 'vv', '', '', '', '', '', ''),
(22, '3', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-11-01 17:13:15', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', 'D', '', 'vv', '', '', '', '', 'Suriyan - IT', '29-11-2017'),
(24, '3', 'it', 'staff', '', '', '', '', '', '1', 'ทดสอบ', 'staff', '', '', '', '', '2017-11-02 07:58:58', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', '', '', '', '', '', '', '', 'ดวงเนตร.ส', ''),
(25, '2', 'it', 'staff', '', '', '', '', '', '1', '12', 'staff', '', '', '', '', '2017-11-02 10:04:34', '0000-00-00', 'A0:B4:A5:17:01:BA', '1', '', '', '', '', '', '', '', '', ''),
(26, '2', 'it', 'staff', '', '', '', '1', '', '', 'IOS Test', 'staff', '', '', '', '', '2017-11-03 09:11:05', '0000-00-00', 'D8:BB:2C:1F:E4:22', '1', '', '', 'dd', 'dd', 'dd', 'dd', 'dd', '', '09-11-2017'),
(27, '3', 'it', 'staff', '', '', '', '', '', '1', 'Test safari', 'staff', '', '', '', '', '2017-11-03 10:04:54', '0000-00-00', '74:E1:B6:8C:4E:F0', '1', '', '', '', '', '', '', '', 'Thitipong - IT', '09-11-2017'),
(28, '3', 'it', 'staff', '', '', '', '', '', '1', 'Safari Thai', 'staff', '', '', '', '', '2017-11-03 10:19:56', '0000-00-00', '74:E1:B6:8C:4E:F0', '1', '', '', '', '', '', '', '', '', ''),
(29, '1', 'it', 'staff', '', '', '', '', '', '1', 'It กาก', 'staff', '', '', '', '', '2017-11-03 13:45:38', '0000-00-00', '2C:F0:A2:8D:2B:7E', '1', 'D', '', '', '', '', '', '', 'ชวลิต.ก', '17-11-2017'),
(30, '2', 'it', 'staff', '', '', '', '', '', '1', 'Ttttttt', 'staff', '', '', '', '', '2017-11-04 15:45:09', '0000-00-00', '74:E1:B6:8C:4E:F0', '1', 'D', '', 'อ่อนแอ', '', '', '', '', 'Thitipong - IT', '09-11-2017'),
(31, '3', 'it', 'staff', '', '', '', '', '', '1', 'Go', 'staff', '', '', '', '', '2017-11-04 16:43:30', '0000-00-00', '74:E1:B6:8C:4E:F0', '1', 'D', '', 'ทวีศักดิ์.ว', '06-11-2017', '', '', '', 'Thitipong - IT', ''),
(32, '3', 'it', 'staff', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-11-07 16:58:56', '0000-00-00', '74:E1:B6:8C:4E:F0', '1', 'D', '', 'ทดสอบ Room', 'ทดสอบ Spa ', 'ทดสอบ Fitness', 'ทดสอบ Restaurant', 'ทดสอบ Other', 'Suriyan - IT', '02-11-2017'),
(33, '2', 'it', 'staff', '', '', '', '', '', '1', 'Y', 'staff', '', '', '', '', '2017-11-10 09:56:57', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'ดวงเนตร.ส', '13-11-2017'),
(34, '3', 'it', 'staff', '', '1', '1', '', '', '', 'ทดสอบ', 'staff', '', '', '', '', '2017-11-10 10:03:03', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '1f', '3', '5', '4', '7', 'ชวลิต.ก', '13-11-2017'),
(35, '3', 'it', 'staff', '', '', '', '', '', '1', '', 'staff', '', '', '', '', '2017-11-10 13:58:59', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', '', '', '', '', '', '', 'สุขสันต์.พ', '13-11-2017'),
(39, '3', '90526', 'KIM JINSUK/LYU HAEJONG', '9035', '', '', '', '', '1', 'ทดสอบ', 'GUEST', '10000990526', '[KR]', '[12/11/2017-14/11/2017]', 'HANA ASIA (THAILAND) CO.,LTD.', '2017-11-13 09:09:10', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', 'D', 'Wifi', '', '', '', '', '', 'Thitipong - IT', '13-11-2017'),
(40, '2', '93559', 'WANDEE NUSONG(MONTCHAI NOOSONG ,KHUN', '1404', '', '', '', '', '', '', 'GUEST', '', '[TH]', '[18/11/2017-19/11/2017]', '', '2017-11-18 22:11:35', '0000-00-00', '18:65:90:A4:B2:DE', '0', 'D', '', 'รับทราบ', '', '', '', '', 'Thitipong - IT', '19-11-2017'),
(41, '2', 'it', 'staff', '', '', '', '', '', '1', 'Wifi', 'staff', '', '', '', '', '2017-11-21 12:12:38', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', '', 'Wifi', '', '', '', '', '', '', ''),
(42, '2', 'niceit', '', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-11-21 15:29:30', '0000-00-00', '20:A9:0E:5A:1E:BE', '0', '', '', '', '', '', '', '', '', ''),
(43, '3', 'niceit', '', '', '', '', '', '', '1', 'Nice Test An', 'staff', '', '', '', '', '2017-11-21 15:34:51', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', '', 'Wifi', '', '', '', '', '', '', ''),
(44, '3', 'niceit', '', '', '', '', '', '', '1', 'Nice TestvIos', 'staff', '', '', '', '', '2017-11-21 15:36:58', '0000-00-00', '6C:70:9F:13:BE:E9', '1', 'D', 'Wifi', '', '', '', '', '', 'Ruttiporn - IT', '24-11-2017'),
(45, '3', 'it', 'staff', '', '', '', '', '', '1', 'Low wifi', 'staff', '', '', '', '', '2017-11-22 13:43:17', '0000-00-00', '6C:70:9F:13:BE:E9', '1', 'D', 'Wifi', '', '', '', '', '', 'Thitipong - IT', '24-11-2017'),
(46, '2', 'it', 'staff', '', '', '', '', '', '1', 'ทดสอบ', 'staff', '', '', '', '', '2017-11-25 12:17:44', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', '', 'ทดสอบ', '', '', '', '', '', '', ''),
(47, '2', 'it', 'staff', '', '', '', '', '', '1', 'Session', 'staff', '', '', '', '', '2017-11-25 13:35:18', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', '', 'Session', '', '', '', '', '', '', '29-11-2017'),
(48, '2', 'bphecgm', 'Somkhit', '', '1', '', '', '', '', 'Dirty', 'VIP_Unlimited', '', '', '', '', '2017-11-30 11:10:54', '0000-00-00', '68:DB:CA:9A:71:DD', '1', '', '', '', '', '', '', '', '', ''),
(50, '3', 'nu-it', 'nu-it', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-11-30 11:48:36', '0000-00-00', '70:4D:7B:0A:73:AA', '0', '', '', '', '', '', '', '', '', ''),
(51, '2', 'niceit', '', '', '', '', '', '', '1', '', 'staff', '', '', '', '', '2017-11-30 11:52:27', '0000-00-00', '20:A9:0E:5A:1E:BE', '1', '', '2', '', '', '', '', '', '', ''),
(52, '1', 'nu-it', 'nu-it', '', '1', '1', '1', '1', '1', 'horry fuc.... bro', 'staff', '', '', '', '', '2017-11-30 16:01:09', '0000-00-00', '70:4D:7B:0A:73:AA', '1', '', '', '', '', '', '', '', '', ''),
(53, '2', 'bphecgm', 'Somkhit', '', '', '1', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-11-30 21:16:04', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', ''),
(54, '3', 'bphecgm', 'Somkhit', '', '', '', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-01 07:46:56', '0000-00-00', '68:DB:CA:9A:71:DD', '0', '', '', '', '', '', '', '', '', ''),
(55, '3', 'spa', 'คุณนิ้ง', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-01 08:55:35', '0000-00-00', '80:EA:96:CC:DC:CF', '0', '', '', '', '', '', '', '', '', ''),
(56, '2', 'nu-it', 'nu-it', '', '', '', '', '', '', 'Sorry bro', 'staff', '', '', '', '', '2017-12-01 09:38:30', '0000-00-00', '70:4D:7B:0A:73:AA', '1', '', '', '', '', '', '', '', '', ''),
(57, '1', 'nu-it', 'nu-it', '', '1', '1', '1', '1', '1', 'hello fuc..you', 'staff', '', '', '', '', '2017-12-01 12:55:07', '0000-00-00', '70:4D:7B:0A:73:AA', '1', '', '', '', '', '', '', '', '', ''),
(58, '2', 'nu-it', 'nu-it', '', '', '', '', '', '', 'อิอิ\n', 'staff', '', '', '', '', '2017-12-01 16:29:30', '0000-00-00', '70:4D:7B:0A:73:AA', '1', '', '', '', '', '', '', '', '', ''),
(59, '2', 'bphecgm', 'Somkhit', '', '', '1', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-01 21:18:38', '0000-00-00', '3C:BD:D8:B3:6C:D3', '1', '', '', '', '', '', '', '', '', ''),
(60, '3', 'bphecgm', 'Somkhit', '', '1', '', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-01 21:55:55', '0000-00-00', '0C:84:DC:CC:C3:5C', '1', '', '', '', '', '', '', '', '', ''),
(61, '1', 'bphecgm', 'Somkhit', '', '', '', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-02 06:33:04', '0000-00-00', '68:DB:CA:9A:71:DD', '0', '', '', '', '', '', '', '', '', ''),
(62, '2', 'bphecgm', 'Somkhit', '', '', '', '', '1', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-02 22:48:28', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', ''),
(63, '2', 'bphecgm', 'Somkhit', '', '', '', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-03 20:38:08', '0000-00-00', '0C:84:DC:CC:C3:5C', '0', '', '', '', '', '', '', '', '', ''),
(64, '3', 'spa', 'คุณนิ้ง', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-04 08:34:51', '0000-00-00', '80:EA:96:CC:DC:CF', '0', '', '', '', '', '', '', '', '', ''),
(65, '3', 'song', 'song', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-04 17:19:39', '0000-00-00', 'CC:44:63:9F:37:4D', '0', '', '', '', '', '', '', '', '', ''),
(66, '2', 'bphecgm', 'Somkhit', '', '', '', '', '1', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-04 21:04:26', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', ''),
(67, '3', 'nu-it', 'nu-it', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-04 21:45:40', '0000-00-00', '70:4D:7B:0A:73:AA', '0', '', '', '', '', '', '', '', '', ''),
(68, '3', 'spa', 'คุณนิ้ง', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-05 12:09:59', '0000-00-00', '80:EA:96:CC:DC:CF', '0', '', '', '', '', '', '', '', '', ''),
(69, '3', 'song', 'song', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-05 17:30:02', '0000-00-00', 'CC:44:63:9F:37:4D', '0', '', '', '', '', '', '', '', '', ''),
(70, '2', 'bphecgm', 'Somkhit', '', '', '', '', '1', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-06 20:59:03', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', ''),
(71, '3', 'bphecgm', 'Somkhit', '', '', '1', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-06 23:37:35', '0000-00-00', '0C:84:DC:CC:C3:5C', '1', '', '', '', '', '', '', '', '', ''),
(72, '2', 'bphecgm', 'Somkhit', '', '', '', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-07 07:42:24', '0000-00-00', '68:DB:CA:9A:71:DD', '0', '', '', '', '', '', '', '', '', ''),
(73, '3', 'bphecgm', 'Somkhit', '', '', '1', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-07 22:20:32', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', ''),
(74, '2', 'bphecgm', 'Somkhit', '', '', '1', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-08 07:30:48', '0000-00-00', '68:DB:CA:9A:71:DD', '1', '', '', '', '', '', '', '', '', ''),
(75, '1', 'nu-it', 'nu-it', '', '', '', '', '', '', '', 'staff', '', '', '', '', '2017-12-08 08:44:44', '0000-00-00', '70:4D:7B:0A:73:AA', '0', '', '', '', '', '', '', '', '', ''),
(76, '2', 'bphecgm', 'Somkhit', '', '', '', '', '1', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-08 21:25:17', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', ''),
(77, '3', 'bphecgm', 'Somkhit', '', '', '', '', '', '', '', 'VIP_Unlimited', '', '', '', '', '2017-12-08 22:09:23', '0000-00-00', '6C:FA:A7:5B:DE:9E', '1', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maclock`
--
ALTER TABLE `maclock`
  ADD PRIMARY KEY (`maclock_id`);

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
-- Indexes for table `time_set`
--
ALTER TABLE `time_set`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `yes_comment`
--
ALTER TABLE `yes_comment`
  ADD PRIMARY KEY (`Yes_comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maclock`
--
ALTER TABLE `maclock`
  MODIFY `maclock_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `set_level_below`
--
ALTER TABLE `set_level_below`
  MODIFY `Level_Below_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `time_set`
--
ALTER TABLE `time_set`
  MODIFY `time_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yes_comment`
--
ALTER TABLE `yes_comment`
  MODIFY `Yes_comment_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
