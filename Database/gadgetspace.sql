-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 09:25 PM
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
  `Username` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_location`
--

CREATE TABLE `customer_location` (
  `Country` varchar(30) DEFAULT NULL,
  `District` varchar(30) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Mobile_Number` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `Product_ID` int(5) NOT NULL,
  `Product_name` varchar(30) DEFAULT NULL,
  `P_availability` varchar(30) DEFAULT NULL,
  `A_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_ID`, `Product_name`, `P_availability`, `A_ID`) VALUES
(20001, 'Sony WH-1000XM4', 'In Stock', 10069),
(20002, 'Sennheiser Momentum 4', 'Out of Stock', 10069),
(20003, 'Sony WH-1000XM5', 'Out of Stock', 10069),
(20004, 'Bowers & Wilkins PX7 Wireless', 'In Stock', 10069),
(20005, 'Plantronics BackBeat Go 810', 'In Stock', 10069),
(20006, 'AKG N60NC', 'In Stock', 10069),
(20007, 'Jabra Elite 45h', 'In Stock', 10069),
(20008, 'Sony WH-CH510', 'In Stock', 10069),
(20009, 'Beyerdynamic DT 1990 Pro', 'In Stock', 10069),
(20010, 'JBL Tune 750BTNC', 'In Stock', 10069),
(20011, 'Klipsch T5M Wired', 'In Stock', 10069),
(20012, 'SoundMagic E11C', 'Out of Stock', 10069),
(20013, 'Shure Aonic 3', 'Out of Stock', 10069),
(20014, 'Sennheiser IE 900', 'In Stock', 10069),
(20015, 'Sony WF-1000XM4', 'In Stock', 10069),
(20016, 'Panasonic RZ-S500W', 'In Stock', 10069),
(20017, 'Shure Aonic Free', 'In Stock', 10069),
(20018, 'Bose QuietComfort Earbuds', 'In Stock', 10069),
(20019, 'Sony WF-1000XM3', 'In Stock', 10069),
(20020, 'Airpods PRO', 'In Stock', 10069);

-- --------------------------------------------------------

--
-- Table structure for table `webpage`
--

CREATE TABLE `webpage` (
  `A_ID` int(5) NOT NULL,
  `Domain_Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
