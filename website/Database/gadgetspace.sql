-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgetspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(5) NOT NULL,
  `Attribute` varchar(10) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `Attribute`, `Password`) VALUES
(10069, 'Owner', 'chocopudding');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Product_ID` int(5) NOT NULL,
  `Product_name` varchar(30) DEFAULT NULL,
  `C_ID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_owner`
--

CREATE TABLE `cart_owner` (
  `C_ID` int(4) DEFAULT NULL,
  `User_ID` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(4) NOT NULL,
  `Username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `Username`) VALUES
(1001, 'Choco12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_ID` varchar(3) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Forget_password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Mobile_Number` int(11) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Username`, `Password`, `Mobile_Number`, `Email`, `Address`) VALUES
('Choco12', 'abcd001', 1700023232, 'Ahmed2@gmail.com', 'Rd#13, H#43, Gulshan-2, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `products_in_cart`
--

CREATE TABLE `products_in_cart` (
  `Product_name` varchar(30) DEFAULT NULL,
  `Total_price` int(15) DEFAULT NULL,
  `Billing_Products` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `Product_name` varchar(30) DEFAULT NULL,
  `P_category` varchar(30) DEFAULT NULL,
  `P_price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`Product_name`, `P_category`, `P_price`) VALUES
('Sony WH-1000XM4', 'Headphone', 30000),
('Sennheiser Momentum 4', 'Headphone', 35000),
('Sony WH-1000XM5', 'Headphone', 25000),
('Bowers & Wilkins PX7 Wireless', 'Headphone', 23000),
('Plantronics BackBeat Go 810', 'Headphone', 15000),
('AKG N60NC', 'Headphone', 10000),
('Jabra Elite 45h', 'Headphone', 8000),
('Sony WH-CH510', 'Headphone', 21000),
('Beyerdynamic DT 1990 Pro', 'Headphone', 43000),
('JBL Tune 750BTNC', 'Headphone', 10000),
('Klipsch T5M Wired', 'Earphone', 9000),
('SoundMagic E11C', 'Earphone', 8000),
('Shure Aonic 3', 'Earphone', 12000),
('Sennheiser IE 900', 'Earphone', 15000),
('Sony WF-1000XM4', 'Earphone', 22000),
('Panasonic RZ-S500W', 'Earphone', 13000),
('Shure Aonic Free', 'Earphone', 19000),
('Bose QuietComfort Earbuds', 'Earphone', 23000),
('Sony WF-1000XM3', 'Earphone', 15000),
('Airpods PRO', 'Earphone', 18000),
('Anker PowerCore 20100', 'PowerBank', 9000),
('Anker PowerCore III', 'PowerBank', 8000),
('INIU 10000mAh', 'PowerBank', 12000),
('Casely Power Pods', 'PowerBank', 15000),
('Anker PowerCore II', 'PowerBank', 2000),
('Mophie Powerstation Plus', 'PowerBank', 13000),
('MAXOAK 50,000mAh', 'PowerBank', 19000),
('Omni 20 USB-C', 'PowerBank', 23000),
('iMuto 20,000mAh', 'PowerBank', 15000),
('Anker PowerCore+ 26800', 'PowerBank', 8000),
('Sonos Roam', 'Bluetooth Speakers', 9000),
('Tribit Stormbox Micro 2', 'Bluetooth Speakers', 8000),
('JBL Flip 6', 'Bluetooth Speakers', 12000),
('B&O Beosound A1', 'Bluetooth Speakers', 15000),
('JBL Charge 5', 'Bluetooth Speakers', 8000),
('UE Hyperboom', 'Bluetooth Speakers', 18000),
('Sonos Move', 'Bluetooth Speakers', 12000),
('Anker Soundcore Flare 2', 'Bluetooth Speakers', 5000),
('Ultimate Ears Boom 3', 'Bluetooth Speakers', 15000),
('Bose SoundLink Flex', 'Bluetooth Speakers', 20000),
('iPhone 13 Pro Max', 'Smart Phone', 130000),
('Samsung Galaxy S22 Ultra', 'Smart Phone', 90000),
('iPhone 13', 'Smart Phone', 84000),
('Google Pixel 6', 'Smart Phone', 80000),
('Google Pixel 6a', 'Smart Phone', 70000),
('Samsung Galaxy A53', 'Smart Phone', 67000),
('iPhone 13 Pro', 'Smart Phone', 90000),
('OnePlus 10 Pro', 'Smart Phone', 60000),
('Google Pixel 6 Pro', 'Smart Phone', 86000),
('iPhone SE (2022)', 'Smart Phone', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `Product_ID` int(5) NOT NULL,
  `Product_name` varchar(30) DEFAULT NULL,
  `P_availability` varchar(30) DEFAULT NULL,
  `A_ID` int(5) DEFAULT NULL,
  `IMG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_ID`, `Product_name`, `P_availability`, `A_ID`, `IMG`) VALUES
(20001, 'Sony WH-1000XM4', 'In Stock', 10069, NULL),
(20002, 'Sennheiser Momentum 4', 'Out of Stock', 10069, NULL),
(20003, 'Sony WH-1000XM5', 'Out of Stock', 10069, NULL),
(20004, 'Bowers & Wilkins PX7 Wireless', 'In Stock', 10069, NULL),
(20005, 'Plantronics BackBeat Go 810', 'In Stock', 10069, NULL),
(20006, 'AKG N60NC', 'In Stock', 10069, NULL),
(20007, 'Jabra Elite 45h', 'In Stock', 10069, NULL),
(20008, 'Sony WH-CH510', 'In Stock', 10069, NULL),
(20009, 'Beyerdynamic DT 1990 Pro', 'In Stock', 10069, NULL),
(20010, 'JBL Tune 750BTNC', 'In Stock', 10069, NULL),
(20011, 'Klipsch T5M Wired', 'In Stock', 10069, NULL),
(20012, 'SoundMagic E11C', 'Out of Stock', 10069, NULL),
(20013, 'Shure Aonic 3', 'Out of Stock', 10069, NULL),
(20014, 'Sennheiser IE 900', 'In Stock', 10069, NULL),
(20015, 'Sony WF-1000XM4', 'In Stock', 10069, NULL),
(20016, 'Panasonic RZ-S500W', 'In Stock', 10069, NULL),
(20017, 'Shure Aonic Free', 'In Stock', 10069, NULL),
(20018, 'Bose QuietComfort Earbuds', 'In Stock', 10069, NULL),
(20019, 'Sony WF-1000XM3', 'In Stock', 10069, NULL),
(20020, 'Airpods PRO', 'In Stock', 10069, NULL),
(20021, 'Anker PowerCore 20100', 'In Stock', 10069, NULL),
(20022, 'Anker PowerCore III', 'Out of Stock', 10069, NULL),
(20023, ' INIU 10000mAh', 'Out of Stock', 10069, NULL),
(20024, 'Casely Power Pods', 'In Stock', 10069, NULL),
(20025, 'Anker PowerCore II', 'In Stock', 10069, NULL),
(20026, 'Mophie Powerstation Plus', 'In Stock', 10069, NULL),
(20027, 'MAXOAK 50,000mAh', 'In Stock', 10069, NULL),
(20028, 'Omni 20 USB-C', 'In Stock', 10069, NULL),
(20029, 'iMuto 20,000mAh', 'In Stock', 10069, NULL),
(20030, 'Anker PowerCore+ 26800', 'In Stock', 10069, NULL),
(20031, 'Sonos Roam', 'In Stock', 10069, NULL),
(20032, 'Tribit Stormbox Micro 2', 'Out of Stock', 10069, NULL),
(20033, 'JBL Flip 6', 'Out of Stock', 10069, NULL),
(20034, 'B&O Beosound A1', 'In Stock', 10069, NULL),
(20035, 'JBL Charge 5', 'In Stock', 10069, NULL),
(20036, 'UE Hyperboom', 'In Stock', 10069, NULL),
(20037, 'Sonos Move', 'In Stock', 10069, NULL),
(20038, 'Anker Soundcore Flare 2', 'In Stock', 10069, NULL),
(20039, 'Ultimate Ears Boom 3', 'In Stock', 10069, NULL),
(20040, 'Bose SoundLink Flex', 'In Stock', 10069, NULL),
(20041, 'iPhone 13 Pro Max', 'In Stock', 10069, NULL),
(20042, 'Samsung Galaxy S22 Ultra', 'Out of Stock', 10069, NULL),
(20043, 'iPhone 13', 'Out of Stock', 10069, NULL),
(20044, 'Google Pixel 6', 'In Stock', 10069, NULL),
(20045, 'Google Pixel 6a', 'In Stock', 10069, NULL),
(20046, 'Samsung Galaxy A53', 'In Stock', 10069, NULL),
(20047, 'iPhone 13 Pro', 'In Stock', 10069, NULL),
(20048, 'OnePlus 10 Pro', 'In Stock', 10069, NULL),
(20049, 'Google Pixel 6 Pro', 'In Stock', 10069, NULL),
(20050, 'iPhone SE (2022)', 'In Stock', 10069, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webpage`
--

CREATE TABLE `webpage` (
  `A_ID` int(5) NOT NULL,
  `Domain_Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webpage`
--

INSERT INTO `webpage` (`A_ID`, `Domain_Name`) VALUES
(10069, 'GadgetSpace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `webpage`
--
ALTER TABLE `webpage`
  ADD PRIMARY KEY (`A_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
