-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 10:30 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `quantity`, `image`, `price`) VALUES
(1, 't-shirt', 9, 'abc.jpg', 10),
(2, 'shirt', 3, 'bcd.jpg', 12),
(3, 'jersey', 8, 'def.jpg', 14),
(4, 'jacket', 3, 'efg.jpg', 16),
(5, 'jeans', 5, 'fgh.jpg', 35),
(6, 'shoes', 7, 'ghi.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `product_id`) VALUES
(1, '0', '0', 4),
(2, 'rfgs', 'ds', 3),
(3, 'rfgs', 'fs', 3),
(4, 'jibin', 'babu', 2),
(5, 'rfgs', 'fs', 2),
(6, 'rfgs', 'fs', 2),
(7, 'rfgs', 'fs', 2),
(8, 'rfgs', 'fs', 2),
(9, 'rfgs', 'fs', 2),
(10, 'rfgs', 'fs', 3),
(11, 'rfgs', 'fs', 3),
(12, 'rfgs', 'fs', 3),
(13, 'jibin1', 'babu', 1),
(14, 'rfgs', 'fs', 2),
(15, 'a', 'fs', 3),
(16, 'rfgs', 'fs', 1),
(17, 'rfgs', 'fs', 1),
(18, 'rfgs', 'fs', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
