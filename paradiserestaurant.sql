-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 06:35 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradiserestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `orderId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `mainDish` varchar(100) NOT NULL,
  `sideDish` varchar(100) DEFAULT NULL,
  `OrderDate` timestamp NOT NULL,
  `OrderComplete` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`orderId`, `customerId`, `mainDish`, `sideDish`, `OrderDate`, `OrderComplete`) VALUES
(4, 3, 'Noodles', 'Dhal Curry', '2019-09-03 12:54:11', 0),
(3, 3, 'Rice', 'Dhal Curry Fish Curry', '2019-09-03 13:03:06', 0),
(2, 2, 'Noodles', 'Fish Curry', '2019-09-03 11:30:17', 0),
(5, 6, 'Rice', 'Dhal Curry', '2019-09-03 12:40:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `maindish`
--

CREATE TABLE `maindish` (
  `Mid` int(11) NOT NULL,
  `Dish` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maindish`
--

INSERT INTO `maindish` (`Mid`, `Dish`, `Price`) VALUES
(1, 'Rice', 100),
(2, 'Rotti', 20),
(3, 'Noodles', 150),
(9, 'Parata', 130),
(8, 'Parata', 130);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `mainDish` int(11) NOT NULL,
  `sideDish` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `OrderComplete` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sidedish`
--

CREATE TABLE `sidedish` (
  `id` int(11) NOT NULL,
  `Dish` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidedish`
--

INSERT INTO `sidedish` (`id`, `Dish`, `Price`) VALUES
(1, 'Wadai', 45),
(2, 'Dhal curry', 75),
(3, 'Fish Curry', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `maindish`
--
ALTER TABLE `maindish`
  ADD PRIMARY KEY (`Mid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `sidedish`
--
ALTER TABLE `sidedish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `maindish`
--
ALTER TABLE `maindish`
  MODIFY `Mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sidedish`
--
ALTER TABLE `sidedish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
