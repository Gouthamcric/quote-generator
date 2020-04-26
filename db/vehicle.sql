-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2019 at 10:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `bname` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`bname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bname`, `type`) VALUES
('Audi', 'fwheeler'),
('honda', 'twheeler'),
('Suzuki', 'twheeler'),
('Piaggio', 'twheeler'),
('maruti', 'fwheeler'),
('BMW', 'fwheeler'),
('hyundai', 'fwheeler'),
('jeep', 'fwheeler'),
('Mahendra', 'fwheeler'),
('lexus', 'fwheeler');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

DROP TABLE IF EXISTS `dealer`;
CREATE TABLE IF NOT EXISTS `dealer` (
  `dname` varchar(20) NOT NULL,
  `bname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dname`, `bname`) VALUES
('Maximus Honda', 'honda'),
('ganesh honda', 'honda');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `bname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`bname`, `mname`) VALUES
('honda', 'Dream Neo.'),
('honda', 'Dream Yuga'),
('honda', 'Dio'),
('honda', 'Activa'),
('suzuki', 'Access 125'),
('suzuki', 'Gixxer SF'),
('suzuki', 'Intruder 150'),
('piaggio', 'vespa');

-- --------------------------------------------------------

--
-- Table structure for table `tvehicle`
--

DROP TABLE IF EXISTS `tvehicle`;
CREATE TABLE IF NOT EXISTS `tvehicle` (
  `Type` varchar(15) NOT NULL,
  PRIMARY KEY (`Type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvehicle`
--

INSERT INTO `tvehicle` (`Type`) VALUES
('auto'),
('fwheeler'),
('truck'),
('twheeler');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
