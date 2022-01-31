-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2022 at 03:36 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mehandi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(14, 'Special 5'),
(9, 'Arabic'),
(10, 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `henna`
--

DROP TABLE IF EXISTS `henna`;
CREATE TABLE IF NOT EXISTS `henna` (
  `h_id` int NOT NULL AUTO_INCREMENT,
  `Description` varchar(1000) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `henna`
--

INSERT INTO `henna` (`h_id`, `Description`) VALUES
(1, 'Henna is a dye prepared from the plant Lawsonia inermis, also known as the henna tree, the mignonette tree, and the Egyptian privet,[1] the sole species of the genus Lawsonia.\r\n\r\nHenna can also refer to the temporary body art resulting from the staining of the skin from the dyes. After henna stains reach their peak color, they hold for a few days, then gradually wear off by way of exfoliation, typically within one to three weeks.\r\n\r\nHenna has been used since antiquity in ancient Egypt to dye skin, hair and fingernails, as well as fabrics including silk, wool, and leather. Historically, henna was used in West Asia including the Arabian Peninsula and in Carthage, other parts of North Africa, West Africa, Central Africa, the Horn of Africa and the Indian subcontinent.\r\n\r\nThe name \"henna\" is used in other skin and hair dyes, such as black henna and neutral henna, neither of which is derived from the henna plant.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Uid` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uid`, `uname`, `pwd`, `utype`) VALUES
(1, 'admin', 'admin', 'admin'),
(10, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

DROP TABLE IF EXISTS `ordertbl`;
CREATE TABLE IF NOT EXISTS `ordertbl` (
  `oid` int NOT NULL AUTO_INCREMENT,
  `Productid` int NOT NULL,
  `ProductName` varchar(15) NOT NULL,
  `quantity` int NOT NULL,
  `Amount` int NOT NULL,
  `Status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Catagory` varchar(30) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_ibfk_1` (`Catagory`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `Catagory`, `price`, `quantity`, `details`) VALUES
(6, 'uploads/20220113161517.JPG', 'Kerala mehandi', 'Indian', 500, 50, 'Good Product'),
(8, 'uploads/20220122054321.png', 'Special darkhenna', 'Special', 456, 4, 'special collection');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `Fullname`, `Username`, `Address`, `Email`, `Phone`) VALUES
(6, 'bgen', 'bgen', 'bgen', 'bgen@gh', '888'),
(7, 'prave', 'pravysoft', 'prav address', 'drprav@gmail.com', '5666'),
(9, 'asd', 'asd', 'asda', 'asd@asdasd.com', '213'),
(10, 'user', 'user', 'user address modified', 'user@asff.om', '8989');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
