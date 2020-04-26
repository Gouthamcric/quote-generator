-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2019 at 10:06 AM
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
-- Database: `invoice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer_tb`
--

DROP TABLE IF EXISTS `dealer_tb`;
CREATE TABLE IF NOT EXISTS `dealer_tb` (
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `City` varchar(100) NOT NULL,
  `state` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer_tb`
--

INSERT INTO `dealer_tb` (`name`, `phone`, `email`, `gender`, `City`, `state`, `address`) VALUES
('Maximus Honda', '999999999', 'maxishonda@yahoo.com', '', 'Hyderabad', 'Telangana', 'Sri Rameshwar bhavan,\r\nopp to MRO office');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tb`
--

DROP TABLE IF EXISTS `invoice_tb`;
CREATE TABLE IF NOT EXISTS `invoice_tb` (
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `City` varchar(10) NOT NULL,
  `state` varchar(20) DEFAULT NULL,
  `dealer` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `make` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `colour` varchar(20) DEFAULT NULL,
  `qty` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_tb`
--

INSERT INTO `invoice_tb` (`name`, `phone`, `email`, `gender`, `address`, `City`, `state`, `dealer`, `type`, `make`, `model`, `colour`, `qty`) VALUES
('a', 'a', 'a@gmail.com', 'MRS.', 'a', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'MRS.', 'Mens Hostel-I,VIT-AP,Amaravati,Andhra Pradesh', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'MRS.', 'Mens Hostel-I,VIT-AP,Amaravati,Andhra Pradesh', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'MRS.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a', 'a', 'a@gmail.com', 'MRS.', 'a', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a', 'a', 'a@gmail.com', 'MRS.', 'a', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a', 'd', 'dahfk@sd.com', 'MRS.', 'dsa', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a', 'd', 'dahfk@sd.com', 'MR.', 'dsa', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', 'a', 'a@gmail.com', 'MR.', 'a', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('goutham n', '9340554408', 'goutham.n@gmail.com', 'MR.', 'vitap', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'MR.', 'Mens Hostel-I,VIT-AP,Amaravati,Andhra Pradesh', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'MR.', 'Vit ap mens hostel,amaravati, andhra pradesh 491001', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('gouthami', '9407768473', 'gouthami@gmail.com', 'MRS.', 'vit ap,amaravati,andhr pradesh 591001', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('goutham', '9340554408', 'goutham@gmail.com', 'Mr.', 'hitdem ,ap 491002', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('goutham', '9340554408', 'goutham@gmail.com', 'Mr.', 'hitdem ,ap 491002', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N ', '9340554408', 'goutham.n@gmial.coo', 'Mr.', 'vitap mens hostel', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham n', '9340554008', 'gou@gmail.com', 'Mr.', 'vit ap....', 'Banglore', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham', '9340554408', 'gou@gmail.com', 'Mr.', 'dsads', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham', '9340554408', 'gou@gmail.com', 'Mr.', 'dsads', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('g', '9', 'g@g.com', 'Mr.', '43,hd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Miss.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'Mr.', 'Type3 ,29, street 2 , new colony, 3rd resrve batalion, durg, chattisgarh', 'Birgaon', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'Mr.', 'type IV , 28 ', 'Hyderabad', 'Andhra Pradesh', NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'Mr.', 'type IV , 28 ', 'Kota', 'Karnataka', NULL, NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', 'Haflong', 'Assam', NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham n', '934055408', 'goutham@gmail.com', 'Mr.', '21st street', 'Shimla', 'Himachal Pradesh', NULL, NULL, NULL, NULL, NULL, NULL),
('Goutham', '9340554408', 'gou@gmail.com', 'Mr.', 'Type iv 29', 'Panaji', 'Goa', '', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'a@gmail.com', 'Mr.', '', 'Solan', 'Himachal Pradesh', '', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'a@gmail.com', 'Mr.', '', 'Gharaunda', 'Haryana', '', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'Mr.', 'Type 2 29', 'Kalol', 'Gujarat', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554008', 'goutham@gmail.com', 'Mr.', '', 'Kota', 'Karnataka', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554008', 'goutham@gmail.com', 'Mr.', '', 'Kolhapur', 'Maharashtra', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'Mr.', '', 'Hubli', 'Karnataka', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('Goutham N', '9340554408', 'goutham.n@gmail.com', 'Mr.', '', 'Hansi', 'Haryana', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', '', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('', '', '', 'Mr.', '', '', '', 'Maximus Honda', NULL, NULL, NULL, NULL, NULL),
('Goutham', '9340554408', 'g@gmail.com', 'Mr.', 'Type 2 29 , street-ii', 'Asola', 'Delhi', 'Maximus Honda', '', '', 'Dream Yuga', 'Red', ''),
('', '', '', 'Mr.', '', '', '', '', '', '', '', '', ''),
('', '', '', 'Mr.', '', '', '', '', '', '', '', '', ''),
('', '', '', 'Mr.', '', '', '', '', '', '', '', '', ''),
('', '', '', 'Mr.', '', '', '', 'Maximus Honda', 'twheeler', 'honda', 'Dream Yuga', 'Red', '6'),
('Goutham N', '9340554408', 'goutham@gmail.com', 'Mr.', 'Type IV, 29,Street II', 'Barh', 'Bihar', 'Maximus Honda', 'twheeler', 'honda', 'Activa', 'Red', '2'),
('goutham', '934099', 'gou@gmail.com', 'Mr.', 'sdasdwq', 'Arrah', 'Bihar', 'Maximus Honda', 'twheeler', 'honda', 'Dream Yuga', 'Red', '3'),
('goutham', '934099', 'gou@gmail.com', 'Mr.', 'sdasdwq', '', 'Bihar', '', 'twheeler', '', '', 'Red', '3'),
('Goutham', '9340664408', 'goutham@gmail.com', 'Mr.', '21,Type IV', 'Diphu', 'Assam', 'Maximus Honda', 'twheeler', 'honda', 'Dream Yuga', 'Red', '9'),
('gouu', '111', 'aa@m.v', 'Mr.', '', 'Dimapur', 'Nagaland', 'Maximus Honda', 'twheeler', 'honda', 'Dream Yuga', 'Orange', '4'),
('', '', '', 'Mr.', '', '', '', '', '', '', '', '', ''),
('Goutham', '9430', 'jsjk@c.com', 'Mr.', 'type-29,bhilai', 'Areraj', 'Bihar', 'Maximus Honda', 'twheeler', 'honda', 'Activa', 'Red', '3'),
('gou', '9340', 'gou@gmail.com', 'Mr.', 'safs', 'Banka', 'Bihar', 'Maximus Honda', 'twheeler', 'honda', 'Dream Neo.', 'Red', '4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
