-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2019 at 11:04 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageprocess`
--

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

DROP TABLE IF EXISTS `motherboard`;
CREATE TABLE IF NOT EXISTS `motherboard` (
  `modelno` varchar(15) NOT NULL,
  `brandname` varchar(25) NOT NULL,
  `socket` varchar(10) NOT NULL,
  `ramsize` int(5) NOT NULL,
  `ramtype` varchar(5) NOT NULL,
  `usbth` float NOT NULL,
  `usbsc` float NOT NULL,
  `sata` int(10) NOT NULL,
  `nvmecheck` tinyint(1) NOT NULL,
  `nvmequant` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`modelno`, `brandname`, `socket`, `ramsize`, `ramtype`, `usbth`, `usbsc`, `sata`, `nvmecheck`, `nvmequant`) VALUES
('b450', 'MSI', '4', 16, 'DDR4', 3, 2, 2, 1, 2),
('B432', 'ASUS', '3', 8, 'DDR3', 3, 2, 2, 1, 2),
('M450', 'ASUS', '3', 8, 'DDR4', 3, 3, 4, 1, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
