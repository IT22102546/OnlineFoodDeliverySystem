-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 11, 2023 at 11:17 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meal_runner`
--

-- --------------------------------------------------------

--
-- Table structure for table `bread`
--

DROP TABLE IF EXISTS `bread`;
CREATE TABLE IF NOT EXISTS `bread` (
  `B_ID` int(11) NOT NULL AUTO_INCREMENT,
  `B_name` varchar(50) NOT NULL,
  `B_price` int(11) NOT NULL,
  PRIMARY KEY (`B_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`B_ID`, `B_name`, `B_price`) VALUES
(1, 'Milk Bread', 200),
(2, 'Roast Bread', 100);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `IDc` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `inquery` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IDc`),
  UNIQUE KEY `Uname` (`Uname`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`IDc`, `Uname`, `contact`, `email`, `inquery`) VALUES
(1, '1', '1', '1', '1'),
(2, 'Sanjana22501', '769899882', 'sanjana.nim2001@gmail.com', 'sas');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `mnumber` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`CID`),
  UNIQUE KEY `U_name` (`U_name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `F_name`, `L_name`, `U_name`, `mnumber`, `email`, `password`) VALUES
(6, 'Sanjana', 'Nimesh', 'Sanjana22501', 769899882, 'sanjana.nim2001@gmail.com', '200108101002'),
(2, 'Dinithi', 'Neranjana', 'Dinithi2001', 759541170, 'denithineranjana@gmail.com', 'Dini@123'),
(3, 'Asanka', 'Dilshan', 'Asanka2001', 778622362, 'asankadilshan@gmail.com', 'asanka@1234'),
(4, 'malith', 'irosha', 'Sexy_Malith', 705507640, 'sexymalith@gmail.com', 'malith@123'),
(5, 'Hirusha', 'Rashmika', 'Hirusha123', 768943562, 'hirusha@gmail.com', 'h1234'),
(7, 'Saman', 'Kumara', 'samankumara', 775367217, 'samankumara@gmail.com', 'saman@123');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

DROP TABLE IF EXISTS `dessert`;
CREATE TABLE IF NOT EXISTS `dessert` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `Dname` varchar(50) NOT NULL,
  `Dprice` int(11) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`Did`, `Dname`, `Dprice`) VALUES
(1, 'chocolate Ice cream', 100),
(2, 'bread pudding', 580),
(3, 'chocolate moose', 240);

-- --------------------------------------------------------

--
-- Table structure for table `fried_rice`
--

DROP TABLE IF EXISTS `fried_rice`;
CREATE TABLE IF NOT EXISTS `fried_rice` (
  `R_id` int(11) NOT NULL AUTO_INCREMENT,
  `R_name` varchar(30) DEFAULT NULL,
  `Lprice` int(11) DEFAULT NULL,
  `Sprice` int(11) NOT NULL,
  PRIMARY KEY (`R_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fried_rice`
--

INSERT INTO `fried_rice` (`R_id`, `R_name`, `Lprice`, `Sprice`) VALUES
(1, 'Chicken Rice', 1200, 900);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `Hotel_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Hotel_name` varchar(50) NOT NULL,
  `Tele` varchar(20) NOT NULL,
  PRIMARY KEY (`Hotel_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_ID`, `Hotel_name`, `Tele`) VALUES
(1, 'Fresh and hot', '0373974569'),
(2, 'Devon', '0812222225'),
(3, 'Epitom', '0759541170');

-- --------------------------------------------------------

--
-- Table structure for table `koththu`
--

DROP TABLE IF EXISTS `koththu`;
CREATE TABLE IF NOT EXISTS `koththu` (
  `K_id` int(11) NOT NULL AUTO_INCREMENT,
  `K_name` varchar(50) NOT NULL,
  `K_Lprice` int(11) NOT NULL,
  `K_Sprice` int(11) NOT NULL,
  PRIMARY KEY (`K_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `koththu`
--

INSERT INTO `koththu` (`K_id`, `K_name`, `K_Lprice`, `K_Sprice`) VALUES
(3, 'Chicken cheese Koththu', 1300, 1000),
(2, 'Egg cheese Koththu', 800, 650),
(4, 'Sea food Koththu', 1200, 1000),
(5, 'dolphine koththu', 1200, 800),
(6, 'String hoppers koththu', 1100, 850);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Oid` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Fprice` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `Uname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Cnumber` varchar(15) NOT NULL,
  `Totprice` int(10) NOT NULL,
  PRIMARY KEY (`Oid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Oid`, `Fname`, `Fprice`, `qty`, `Uname`, `Cnumber`, `Totprice`) VALUES
(1, 'Chicken cheese Koththu', 1400, 2, 'sanjana22501', '769899882', 2800),
(4, 'Chicken cheese Koththu', 1400, 2, 'sanjana22501', '769899882', 2800),
(3, 'Chicken cheese Koththu', 1400, 2, 'sanjana22501', '769899882', 2800),
(5, 'Chicken cheese Koththu', 1400, 2, 'sanjana22501', '769899882', 2800),
(6, 'Chicken cheese Koththu', 1400, 3, 'sanjana22501', '769899882', 4200),
(7, 'Chicken cheese Koththu', 1400, 3, 'sanjana22501', '769899882', 4200),
(8, 'Sea food Koththu', 1200, 5, 'Dinithi2001', '759541170', 6000),
(9, 'String hoppers koththu', 1100, 0, 'sanjana22501', '769899882', 0),
(10, 'String hoppers koththu', 1100, 2, 'sanjana22501', '769899882', 2200),
(11, 'Chicken cheese Koththu', 1000, 2, 'sanjana22501', '769899882', 2000),
(12, 'Chiken Rice', 1200, 2, 'sanjana22501', '769899882', 2400),
(13, 'Chiken Rice', 900, 1, 'sanjana22501', '769899882', 900),
(14, 'Milk Bread', 200, 2, 'sanjana22501', '769899882', 400),
(15, 'Fish Pastry', 150, 2, 'sanjana22501', '769899882', 300),
(16, 'chocolate Ice cream', 100, 3, 'sanjana22501', '769899882', 300),
(17, 'chocolate moose', 240, 5, 'Dinithi2001', '759541170', 1200),
(18, 'Fish Pastry', 150, 10, 'Asanka2001', '778622362', 1500),
(19, 'Chicken cheese Koththu', 1000, 0, 'Dinithi2001', '759541170', 0),
(20, 'dolphine koththu', 1200, 2, 'Dinithi2001', '759541170', 2400),
(21, 'Chicken cheese Koththu', 1000, 3, 'Dinithi2001', '759541170', 3000),
(22, 'String hoppers koththu', 1100, 2, 'Dinithi2001', '759541170', 2200),
(23, 'Fish Pastry', 150, 2, 'Sanjana22501', '769899882', 300),
(24, 'chocolate Ice cream', 100, 4, 'Sanjana22501', '769899882', 400),
(25, 'bread pudding', 580, 1, 'Sanjana22501', '769899882', 580),
(26, 'Chiken Rice', 1200, 7, 'Sanjana22501', '769899882', 8400),
(27, 'Milk Bread', 200, 3, 'Sanjana22501', '769899882', 600),
(28, 'dolphine koththu', 800, 2, 'Sanjana22501', '769899882', 1600),
(29, 'Chicken cheese Koththu', 1300, 3, 'Sanjana22501', '769899882', 3900);

-- --------------------------------------------------------

--
-- Table structure for table `shorteats`
--

DROP TABLE IF EXISTS `shorteats`;
CREATE TABLE IF NOT EXISTS `shorteats` (
  `seID` int(11) NOT NULL AUTO_INCREMENT,
  `se_name` varchar(50) NOT NULL,
  `se_price` int(11) NOT NULL,
  PRIMARY KEY (`seID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shorteats`
--

INSERT INTO `shorteats` (`seID`, `se_name`, `se_price`) VALUES
(1, 'Fish Pastry', 150),
(2, 'Egg Pastry', 180);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
