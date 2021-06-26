-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 04:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantita_ph`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order-item`
--

CREATE TABLE `order-item` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order-tracking`
--

CREATE TABLE `order-tracking` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  `paymentmode` varchar(100) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `cat_id`, `price`, `thumb`) VALUES
(1, 'Snake Plant', 'Sansevieria trifasciata (also known as snake plant or mother-in-law\'s tongue) is one of the most pop', 1001, 400, 'Snake Plant image'),
(2, 'Monstera', 'Monstera deliciosa plant is also known as the \"tropical split-leaf philodendron.\" This climbing ever', 1002, 600, 'Monstera image'),
(3, 'Oregano', 'Possibly one of the most recognized herbs in the cook\'s garden, oregano is easy to grow and adds ple', 1003, 350, 'Oregano image'),
(4, 'Snake Plant', 'Sansevieria trifasciata (also known as snake plant or mother-in-law\'s tongue) is one of the most pop', 2001, 400, 'Snake Plant image'),
(5, 'Monstera', 'Monstera deliciosa plant is also known as the \"tropical split-leaf philodendron.\" This climbing ever', 2002, 600, 'Monstera image'),
(6, 'Cactus', 'A cactus is a kind of a plant adapted to hot, dry climates. Cactus are popular and familiar, and bot', 3001, 350, 'Cactus image');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ron16', 'rmverts@yahoo.com', 'ronbryan'),
(2, 'hello123', 'hello@gmail.com', 'helloworld'),
(3, 'dani45', 'dani_uga@gmail.com', '$2y$10$2YoHRiQKLmNXKDy3gKPmH.fSSezUCbjbC5FlrfNBSJx6px9plTMwG'),
(4, 'portram12', 'port@gmail.com', 'port@gmail.com'),
(5, 'port24', 'importram@yahoo.com', 'importram1234'),
(6, 'port25', 'importram@gmail.com', 'importram123'),
(7, 'ron156', 'rown@gmail.com', 'iamthebest1234'),
(8, 'dani123', 'semiking@gmail.com', 'iamthebestie12'),
(9, 'junyel22', 'junyel@ymail.com', 'junnel2345');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` double NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `ship` varchar(100) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_exp` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `address`, `zip`, `city`, `province`, `ship`, `card_num`, `card_name`, `card_exp`, `cvv`) VALUES
(1, 'ron16', 'Ron Bryan', 'Vertudes', 'rmverts@yahoo.com', 9123456789, 'UP Mindanao, Mintal', 8022, 'Davao City', 'Davao del Sur', 'J&T', 1001, '', 0, 0),
(2, 'port25', '', '', 'importram@gmail.com', 0, '', 0, '', '', '', 0, '', 0, 0),
(3, 'ron156', '', '', 'rown@gmail.com', 0, '', 0, '', '', '', 0, '', 0, 0),
(4, 'dani123', '', '', 'semiking@gmail.com', 0, '', 0, '', '', '', 0, '', 0, 0),
(5, 'junyel22', '', '', 'junyel@ymail.com', 0, '', 0, '', '', '', 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order-item`
--
ALTER TABLE `order-item`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order-tracking`
--
ALTER TABLE `order-tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order-item`
--
ALTER TABLE `order-item`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order-tracking`
--
ALTER TABLE `order-tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
