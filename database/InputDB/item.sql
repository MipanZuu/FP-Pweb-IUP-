-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2022 at 01:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TXEcommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_code` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_code`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'Apple Macbook Pro', 20000000, './dist/products/product1.jpeg'),
(2, 'Fujifilm X-T20', 14499000, './dist/products/product2.jpeg'),
(3, 'Galaxy Z Flip4', 13999000, './dist/products/product3.jpeg'),
(4, 'Laptop HP 14s', 5335000, './dist/products/product4.jpeg'),
(5, 'GoPro Hero 7', 5000000, './dist/products/product5.jpeg'),
(6, 'Philips Hepa Filter 800', 454000, './dist/products/product6.jpeg'),
(7, 'Dyson Vacuum Cleaner', 9999000, './dist/products/product7.jpeg'),
(8, 'HiBREW Coffee Maker', 988000, './dist/products/product8.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
