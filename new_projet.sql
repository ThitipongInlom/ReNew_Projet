-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 02:57 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `set_level_below`
--

CREATE TABLE `set_level_below` (
  `Level_Below_id` int(8) NOT NULL,
  `Level_Below_type` varchar(8) NOT NULL,
  `Level_Below_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_level_below`
--

INSERT INTO `set_level_below` (`Level_Below_id`, `Level_Below_type`, `Level_Below_data`) VALUES
(1, '2', 'nu-it'),
(2, '1', '86765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `set_level_below`
--
ALTER TABLE `set_level_below`
  ADD PRIMARY KEY (`Level_Below_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `set_level_below`
--
ALTER TABLE `set_level_below`
  MODIFY `Level_Below_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
