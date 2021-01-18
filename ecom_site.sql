-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 07:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `name`, `email`, `password`, `contact_no`, `address`, `gender`) VALUES
(1, 'Raka', 'Raka Islam', 'R@gmail.com', '12345', '1234098', 'Dhaka', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `account_orders`
--

CREATE TABLE `account_orders` (
  `order_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `productid` varchar(20) NOT NULL,
  `isguest` int(1) NOT NULL,
  `accountid` varchar(30) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `productid`, `isguest`, `accountid`, `ip_add`, `qty`, `size`) VALUES
(17, '8', 1, '6231716492211181', '', 8, ''),
(19, '3', 1, '6231716492211181', '', 2, ''),
(20, '12', 1, '6231716492211181', '', 1, ''),
(22, '2', 1, '4541898761618498', '', 2, ''),
(23, '1', 1, '6231716492211181', '', 1, ''),
(27, '2', 1, '4149557957229997', '', 1, ''),
(28, '2', 1, '4416435177847145', '', 1, ''),
(29, '3', 1, '4416435177847145', '', 1, ''),
(30, '4', 1, '4416435177847145', '', 1, ''),
(31, '11', 1, '4416435177847145', '', 1, ''),
(32, '3', 1, '3366689828546715', '', 3, ''),
(35, '2', 1, '7786441147127696', '', 2, ''),
(36, '6', 1, '7786441147127696', '', 1, ''),
(37, '1', 1, '5353177278789954', '', 3, ''),
(39, '3', 1, '5353177278789954', '', 5, 'xl'),
(40, '2', 1, '5934384687189697', '', 2, ''),
(41, '4', 1, '5934384687189697', '', 1, ''),
(43, '7', 1, '4996258915269888', '', 1, ''),
(44, '2', 1, '5321933832849359', '', 2, ''),
(45, '5', 1, '5321933832849359', '', 1, ''),
(46, '11', 1, '5321933832849359', '', 1, ''),
(47, '2', 1, '9381688148726739', '', 1, ''),
(48, '2', 1, '3994956461254182', '', 8, ''),
(51, '1', 1, '3994956461254182', '', 5, ''),
(52, '8', 1, '3994956461254182', '', 1, ''),
(53, '2', 1, '5353177278789954', '', 1, ''),
(54, '5', 1, '9338662339771467', '', 2, ''),
(55, '6', 1, '9338662339771467', '', 1, ''),
(57, '2', 1, '2828888951389575', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `product_title` text NOT NULL,
  `product_img` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `product_title`, `product_img`, `product_price`, `product_desc`) VALUES
(1, 1, 1, 'Bagpack', 'images\\product1.jpg', 1500, 'ccc'),
(2, 2, 2, 'Full-SleveShirt', 'images\\product2.jpg', 2000, 'bbbbb'),
(3, 3, 3, 'Boy\'s Shoes', 'images/pic5.jpg', 450, 'It is very soft'),
(4, 4, 4, 'Boy\'s T-shirt', 'images/product6.jpg', 2500, 'product-details1.php'),
(5, 5, 5, 'Hand Bag', 'images/product7.jpg', 2400, 'Brand'),
(6, 6, 6, 'Boye\'s Shoes', 'images/promo2.jpg', 1200, 'Good'),
(7, 7, 7, 'Boy\'s Belt', 'images/promo4.jpg', 500, 'Good'),
(8, 8, 8, 'Watch', 'images/promo6.jpg', 1000, 'Good'),
(9, 9, 9, 'Hand Bag', 'images/product13.jpg', 2000, 'Good'),
(10, 10, 10, 'Casual Shirt', 'images/product5.jpg', 2000, 'good'),
(11, 11, 11, 'Girl\'s Top', 'images/pic3.jpg', 1500, 'good'),
(12, 12, 12, 'Boy\'s Shoe', 'images/product3.jpg', 1700, 'Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `account_orders`
--
ALTER TABLE `account_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_orders`
--
ALTER TABLE `account_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
