-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2019 at 09:44 AM
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
-- Table structure for table `customertable`
--

DROP TABLE IF EXISTS `customertable`;
CREATE TABLE IF NOT EXISTS `customertable` (
  `ramname` varchar(25) DEFAULT NULL,
  `ramtype` varchar(15) DEFAULT NULL,
  `suname` varchar(25) DEFAULT NULL,
  `supplyvolt` varchar(10) DEFAULT NULL,
  `sdname` varchar(25) DEFAULT NULL,
  `disksize` varchar(20) DEFAULT NULL,
  `nvme` varchar(10) DEFAULT NULL,
  `hddname` varchar(25) DEFAULT NULL,
  `disksizehd` varchar(10) DEFAULT NULL,
  `proname` varchar(25) DEFAULT NULL,
  `sockettype` varchar(10) DEFAULT NULL,
  `gen` varchar(10) DEFAULT NULL,
  `gpuname` varchar(25) DEFAULT NULL,
  `volt` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`ramname`, `ramtype`, `suname`, `supplyvolt`, `sdname`, `disksize`, `nvme`, `hddname`, `disksizehd`, `proname`, `sockettype`, `gen`, `gpuname`, `volt`) VALUES
('Crucial', 'DDR4', 'zoro', '40', 'Samsung', '1', '1', 'Samsung', '1', NULL, NULL, NULL, 'Ninvidia 1050ti 6gb', '150');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

DROP TABLE IF EXISTS `gpu`;
CREATE TABLE IF NOT EXISTS `gpu` (
  `modelno` varchar(15) NOT NULL,
  `brandname` varchar(30) NOT NULL,
  `supplyvolt` int(10) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`modelno`, `brandname`, `supplyvolt`, `price`) VALUES
('ntxg123', 'Ninvidia 1050ti 6gb', 150, 7500);

-- --------------------------------------------------------

--
-- Table structure for table `harddisk`
--

DROP TABLE IF EXISTS `harddisk`;
CREATE TABLE IF NOT EXISTS `harddisk` (
  `modelno` varchar(15) NOT NULL,
  `brandname` varchar(25) NOT NULL,
  `disk_size` int(10) NOT NULL,
  `disk_speed` int(10) NOT NULL,
  `disk_dimension` int(10) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harddisk`
--

INSERT INTO `harddisk` (`modelno`, `brandname`, `disk_size`, `disk_speed`, `disk_dimension`, `price`) VALUES
('b1233', 'Samsung', 1, 200, 1, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `imagep`
--

DROP TABLE IF EXISTS `imagep`;
CREATE TABLE IF NOT EXISTS `imagep` (
  `img` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('M450', 'ASUS', '3', 8, 'DDR4', 3, 3, 4, 1, 2),
('ROG STRIX B450', 'ASUS ROG', 'am4', 64, 'DDR4', 3.1, 3, 4, 1, 1),
('Z390 UD', 'GIGABYTE', '4', 32, 'DDR4', 3.1, 3, 4, 1, 1),
(' Z390', 'MSI MPG', '	LGA 1151', 128, 'DDR4', 3.1, 3, 4, 1, 1),
('	B07SZTYNK2', 'Axabyte', 'am4', 32, 'DDR3', 3.1, 3, 4, 1, 1),
('B01M750YR7', '	Zebronics', ' 1156', 8, 'DDR3', 2, 1.1, 4, 1, 1),
('Intel H55', '	Avertek', '1156', 64, 'DDR3', 3.1, 3, 4, 1, 1),
('H110M', 'ASRock H110M-HDV', '1151', 64, 'DDR4', 3.1, 3, 4, 1, 1),
('H310M', 'MSI H310M', 'LGA 1151', 64, 'DDR4', 3.1, 3, 4, 1, 1),
('H310M-E', 'ASUS Prime', 'LGA 1151', 128, 'DDR4', 3.1, 3, 4, 1, 1),
('B360M-D', 'ASUS Prime', '1151', 32, 'DDR4', 3.1, 3, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

DROP TABLE IF EXISTS `processor`;
CREATE TABLE IF NOT EXISTS `processor` (
  `model_no` varchar(15) NOT NULL,
  `socket_type` varchar(15) NOT NULL,
  `tdp` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `cores` varchar(8) NOT NULL,
  `thread` varchar(5) NOT NULL,
  `clock_speed` varchar(8) NOT NULL,
  `ovclock_speed` varchar(10) NOT NULL,
  `price` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`model_no`, `socket_type`, `tdp`, `name`, `gen`, `cores`, `thread`, `clock_speed`, `ovclock_speed`, `price`) VALUES
('b232', '115', '2', 'intel', '7', '3', '2', '23', '21', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `modelno` varchar(11) NOT NULL,
  `brandname` varchar(40) NOT NULL,
  `ramsize` int(11) NOT NULL,
  `ramtype` varchar(11) NOT NULL,
  `voltage` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`modelno`, `brandname`, `ramsize`, `ramtype`, `voltage`, `price`) VALUES
('DDR42400', 'Crucial', 8, 'DDR4', 1, 3099),
('CMZC10', 'Corsair', 8, 'DDR3', 2, 3895),
('DDR33490', 'KingstonHyperx', 8, 'DDR3', 2, 3100),
('CMK16GC16', 'CORSAIRVengeance', 16, 'DDR4', 1, 6850),
('PC3L-12800', 'Samsung', 8, 'DDR3', 1, 2900),
('CT4G824A', 'Crucial', 4, 'DDR4', 1, 1865),
('KVR1D3N9', 'Kingston', 8, 'DDR3', 2, 3450),
('HX316C10F', 'KingstonHyperX Fury', 8, 'DDR3', 2, 3700),
('JM1600H-4G', 'Transcend', 4, 'DDR3', 2, 1557),
('CMSX4GX4M1', 'CorsairVENGEANCE', 4, 'DDR4', 1, 2995),
('PC4-19200', 'CRUCIAL', 8, 'DDR4', 2, 3060);

-- --------------------------------------------------------

--
-- Table structure for table `smps`
--

DROP TABLE IF EXISTS `smps`;
CREATE TABLE IF NOT EXISTS `smps` (
  `modelno` varchar(15) NOT NULL,
  `brandname` varchar(25) NOT NULL,
  `supply_volt` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smps`
--

INSERT INTO `smps` (`modelno`, `brandname`, `supply_volt`, `price`) VALUES
('a23400', 'zoro', 40, 7500);

-- --------------------------------------------------------

--
-- Table structure for table `ssd`
--

DROP TABLE IF EXISTS `ssd`;
CREATE TABLE IF NOT EXISTS `ssd` (
  `modelno` varchar(15) NOT NULL,
  `brandname` varchar(25) NOT NULL,
  `disk_size` int(10) NOT NULL,
  `disk_speed` int(10) NOT NULL,
  `disk_dimension` int(10) NOT NULL,
  `nvme` tinyint(1) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssd`
--

INSERT INTO `ssd` (`modelno`, `brandname`, `disk_size`, `disk_speed`, `disk_dimension`, `nvme`, `price`) VALUES
('b234', 'Samsung', 1, 23, 2, 1, 15000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
