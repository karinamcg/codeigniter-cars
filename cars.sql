-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 09:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_data`
--

CREATE TABLE `car_data` (
  `id` int(11) NOT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bhp` int(5) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `speed` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_data`
--

INSERT INTO `car_data` (`id`, `make`, `model`, `bhp`, `price`, `rating`, `speed`) VALUES
(1, 'Audi', 'RS4', 414, '54,925', '4.6', 174),
(2, 'Audi', 'RS5', 443, '65,000', '4.6', 174),
(3, 'Audi', 'R8', 532, '120,665', '5', 205),
(4, 'BMW', 'M3', 424, '54,000', '5', 190),
(5, 'BMW', 'M4', 424, '57,500', '5', 190),
(6, 'BMW', 'M5', 552, '89,220', '4.5', 190),
(7, 'BMW', 'M6', 560, '95,580', '4.3', 189),
(8, 'Ferrari', '458', 562, '194,995', '5', 202),
(9, 'Ferrari', '488', 661, '182,809', '5', 205),
(10, 'Ferrari', 'F12', 769, '239,898', '4.5', 211),
(11, 'Ferrari', 'LaFerrari', 950, '1,000,000', '5', 227),
(12, 'Ford', 'Fiesta ST', 179, '19,935', '5', 140),
(13, 'Ford', 'Focus ST', 246, '22,195', '4', 154),
(14, 'Ford', 'Focus RS', 300, '31,385', '5', 163),
(15, 'Ford', 'Mustang', 312, '31,910', '4', 155),
(16, 'Honda', 'Integra Type-r', 217, '23,500', '4', 140),
(17, 'Honda', 'Civic Type-r', 306, '32,295', '4', 167),
(18, 'Jaguar', 'XE', 374, '46,790', '5', 155),
(19, 'Jaguar', 'F-type', 566, '108,310', '4', 200),
(20, 'Lamborghini', 'Huracan', 602, '180,720', '4', 202),
(21, 'Lamborghini', 'Aventador', 690, '271,146', '4.4', 218),
(22, 'Mercedes', 'A45', 381, '41,275', '4.5', 155),
(23, 'Mercedes', 'C63', 480, '62,180', '4', 155),
(24, 'Mercedes', 'E63', 577, '74,715', '4', 186),
(25, 'Nissan', 'GTR', 471, '79,820', '4', 196),
(26, 'Porsche', '911', 379, '£76,412', '5', 205),
(27, 'Subaru', 'WRX STI', 295, '£29,640', '4', 159),
(28, 'Toyota', 'GT86', 197, '£22,760', '4', 140),
(29, 'Vauxhall', 'Astra VXR', 236, '£26,995', '3', 152),
(30, 'Vauxhall', 'Vectra VXR', 280, '£27,205', '3', 161),
(31, 'VW', 'R32 Golf', 296, '£29,900', '4', 155);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_data`
--
ALTER TABLE `car_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_data`
--
ALTER TABLE `car_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
