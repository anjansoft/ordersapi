-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 12:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
-- 
 
  
-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` int(10) NOT NULL,
  `order_id` varchar(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  `table_no` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `robot_status` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `seq` bigint(10) NOT NULL,
  `dong` int(10) NOT NULL,
  `ho` int(10) NOT NULL,
  `order_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `order_id`, `product_name`, `options`, `table_no`, `quantity`, `order_date`, `order_time`, `robot_status`, `date_time`, `seq`, `dong`, `ho`, `order_name`) VALUES
(1, '0007', '제품1', '', 3, 1, '2023-07-17', '17:33:31', '', '2023-07-17 17:33:31', 0, 120, 1701, '주문1'),
(2, '0007', '제품1', '', 3, 1, '2023-07-17', '17:33:31', '', '2023-07-17 17:33:31', 0, 120, 1701, '주문1'),
(3, '0007', '제품1', '', 3, 1, '2023-07-17', '17:33:31', '', '2023-07-17 17:33:31', 0, 120, 1701, '주문1'),
(4, '0007', '제품1', '', 3, 1, '2023-07-17', '17:33:31', '', '2023-07-17 17:33:31', 0, 120, 1701, '주문1'),
(5, '0012', '제품1', '', 3, 1, '2023-07-17', '11:26:04', '', '2023-07-17 17:33:31', 0, 120, 1701, '주문1'),
(6, '0012', '제품1', '', 3, 1, '2023-07-17', '11:26:04', '', '2023-07-17 11:26:04', 0, 123, 1405, '주문1'),
(10, '0009', '제품12', '', 3, 1, '2023-07-17', '17:33:31', '', '2023-07-17 17:33:31', 0, 120, 1701, '주문1');

 

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
 

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
