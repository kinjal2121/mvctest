-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2020 at 09:10 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc_mvctest`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `options_type` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `cost` double(8,2) NOT NULL,
  `option_hours` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `shopping_site_content` enum('YES','NO') NOT NULL DEFAULT 'YES',
  `tech_talk` enum('YES','NO') NOT NULL DEFAULT 'YES',
  `status` enum('ACTIVE','INACTIVE') DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `options_type`, `name`, `cost`, `option_hours`, `weight`, `shopping_site_content`, `tech_talk`, `status`) VALUES
(1, 'TEST A', 'AC', 'ONLY AC ex', 10.10, 1, 1, 'NO', 'NO', 'ACTIVE'),
(2, 'TEST B', 'AB', 'NON BC', 10.10, 1, 1, 'YES', 'YES', 'ACTIVE'),
(8, 'TEST C', 'BC', 'Sam', 11.00, 1111, 0, 'YES', 'YES', 'ACTIVE'),
(9, 'TEST D', 'CD', 'Mark', 11.00, 1, 0, 'YES', 'YES', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
