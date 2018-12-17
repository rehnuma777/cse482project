-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 12:48 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshoppers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'abuashraf00@yahoo.com', 'Abu12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(23, '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `category_id` int(100) NOT NULL,
  `category_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`category_id`, `category_title`) VALUES
(6, 'Adjuvants, Immunologic'),
(7, 'Adrenal Cortex Hormones'),
(8, 'Adrenergic Agonists'),
(9, 'Analgesics '),
(10, 'Anesthetics'),
(11, 'Anti-HIV Agents'),
(12, 'Antibiotics, Antineoplastic '),
(13, 'Bronchodilator Agents'),
(14, 'Calcium Channel Blockers'),
(15, 'Cardiovascular Agents'),
(16, 'Central Nervous System Depressants'),
(17, 'Fibrin Modulating Agents'),
(18, 'Muscarinic Antagonists');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_city` text NOT NULL,
  `customer_location` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_city`, `customer_location`, `customer_contact`) VALUES
(41, '::1', 'abu ashraf', 'abuashraf00@yahoo.com', 'Abu12345', 'Dhaka', 'khilgaon', '01674200740');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `order_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `invoice_no`, `order_date`, `status`) VALUES
(1, 0, 0, 1, 535818051, '2018-08-28', 'in progress'),
(2, 0, 0, 1, 482512651, '2018-08-28', 'in progress'),
(3, 0, 0, 1, 970928607, '2018-08-28', 'in progress'),
(4, 0, 0, 1, 1315288519, '2018-08-28', 'in progress'),
(5, 23, 41, 1, 832114070, '2018-12-16', 'in progress'),
(6, 0, 41, 1, 1686412330, '2018-12-16', 'in progress'),
(7, 0, 41, 1, 903303596, '2018-12-16', 'in progress'),
(8, 23, 41, 1, 1415665928, '2018-12-16', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `currency` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `customer_id`, `product_id`, `trx_id`, `currency`, `date`) VALUES
(1, 1200, 0, 0, '33A54572GL288101K', 'USD', '2018-08-28'),
(2, 3000, 0, 0, '88132807T2291303K', 'USD', '2018-08-28'),
(3, 2000, 0, 0, '675412439J784815L', 'USD', '2018-08-28'),
(4, 2000, 0, 0, '675412439J784815L', 'USD', '2018-08-28'),
(5, 100, 41, 23, '9E734212C77244015', 'USD', '2018-12-16'),
(6, 100, 41, 0, '9E734212C77244015', 'USD', '2018-12-16'),
(7, 100, 41, 0, '9E734212C77244015', 'USD', '2018-12-16'),
(8, 100, 41, 23, '1FX01531BB854480T', 'USD', '2018-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category` text NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category`, `product_price`, `product_description`, `product_image`, `product_keyword`, `product_type`) VALUES
(23, 'Ace Plus', '12', 100, 'Indication: \r\nFever, headache, migraine, muscle ache, backache, toothache & menstrual pain.\r\n\r\nDosage & Administration:\r\nAdults: 1-2 tablets every 4-6 hours. Maximum dose: 8 tablets daily. Not recommended for children below 12 years.\r\n\r\nPreparation: \r\nEac', 'product_images/ACE-PLUS.jpg', 'ace, napa', '13'),
(24, 'Alatrol', '9', 250, 'INDICATION\r\nAlatrolÂ® is indicated for the relief of symptoms\r\nassociated with seasonal allergic rhinitis due to allergen.\r\nSymptoms treated effectively include sneezing,\r\nrhinorrhea, pruritus, ocular pruritus, tearing and redness\r\nof the eyes.\r\nAlatrolÂ®', 'product_images/alatrol.jpg', 'alatrol, allergy', '13'),
(25, 'Rolac 20mg', '7', 200, 'INDICATION\r\nAlatrolÂ® is indicated for the relief of symptoms\r\nassociated with seasonal allergic rhinitis due to allergen.\r\nSymptoms treated effectively include sneezing,\r\nrhinorrhea, pruritus, ocular pruritus, tearing and redness\r\nof the eyes.\r\nAlatrolÂ®', 'product_images/rolac.jpg', 'rolac', '13');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(100) NOT NULL,
  `type_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_title`) VALUES
(12, 'Liquid'),
(13, 'Tablet'),
(14, 'Capsules'),
(15, 'Topical medicines'),
(16, 'Suppositories'),
(17, 'Drops'),
(18, 'Inhalers'),
(19, 'Injections'),
(20, 'Implants or patches'),
(21, 'Buccal or sublingual tablets or liquids');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
