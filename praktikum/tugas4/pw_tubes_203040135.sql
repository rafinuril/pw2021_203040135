-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 04:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040135`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `picture`, `name`, `brand`, `description`, `category`, `price`) VALUES
(1, '1.png', 'Dark Gray Short', 'Broodis', 'Original Dark Grey Short, made of full cotton and comfortable to wear', 'Shirt', 185000),
(2, '2.png', 'Clean White Long', 'Broodis', 'Original Clean White Long, made of full cotton and comfortable to wear', 'Long Shirt', 225000),
(3, '3.png', 'Gentle Black Long', 'Broodis', 'Original Gentle Black Long, made of full cotton and comfortable to wear', 'Long SHirt', 225000),
(4, '4.png', 'Austin Gray', 'Broodis', 'Original Austin Grey Flannel, made of flannel fabric and comfortable to wear', 'Flannel', 195000),
(5, '5.png', 'Bro Do Trainer', 'Bro Do', 'Original Bro Do Trainer shoes, sporty style and casual shoes', 'Shoes', 265000),
(6, '6.png', 'VTG V.2 Olive', 'Bro DO', 'Original VTG V.2 Olive Shoes, elegant style and casual shoes', 'Shoes', 375000),
(7, '7.png', 'Signature Navy Short', 'Kyran', 'Original Signature Navy Short Pants, for comfortable and enjoyment', 'Pants', 126000),
(8, '8.png', 'Oversized Clothes', 'Kyran', 'Original Oversized Clothes, made of cotton combed 30s and comfortable to wear', 'Clothes', 65000),
(9, '9.png', 'Malta Blast', 'Osgood', 'Original Malta Blast Sandals, made adventure, travelling and protect the feet', 'Sandals', 315000),
(10, '10.png', 'Stripy Polo', 'Prepp Studio', 'Original Stripy Polo Clothes, made of full cotton and comfortable to wear', 'Clothes', 199000);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
