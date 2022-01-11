-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 01:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'Harish', 'harishmurali741@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'dhurba', 'dhurbar55@gmail.com', '7e0aabb71ab5d9821af9475cdeefeeb5');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tlr` float NOT NULL,
  `tat` float NOT NULL,
  `ra` float NOT NULL,
  `cw` float NOT NULL,
  `omyr` float NOT NULL,
  `status` int(15) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `username`, `email`, `mobile`, `company_name`, `image`, `tlr`, `tat`, `ra`, `cw`, `omyr`, `status`, `created_at`) VALUES
(51, 'Harish', 'harishmurali741@gmail.com', '1234567890', 'Sart', 'images/updatedbg.jpg', 4.3, 4.6, 4.4, 4.5, 3.7, -1, '2022-01-11 12:48:02'),
(52, 'Dhruba', 'dhurbar55@gmail.com', '0987654321', 'SART', 'images/updatedpexels-jasmin-chew-10160795.jpg', 4.4, 3.4, 4.5, 5, 3.6, 0, '2022-01-11 12:48:02'),
(53, 'gagana', 'gagana@gmail.com', '8784646544', 'SART', 'images/updatedpexels-jasmin-chew-10160795.jpg', 3.6, 4.7, 4.2, 4.7, 5, 0, '2022-01-11 12:48:02'),
(55, 'nisarga', 'nisarga@gmail.com', '1234567890', 'Sart', 'images/updatedpexels-jasmin-chew-10160799.jpg', 4, 4.6, 4.6, 4.6, 4.7, 0, '2022-01-11 12:48:02'),
(56, 'Test User', 'letini5336@fretice.com', '0987654321', 'SART', 'images/updatedbg.jpg', 3.6, 3.9, 2.6, 3.7, 4.8, 1, '2022-01-11 12:48:02'),
(58, 'Kiran', 'kiran123@gmail.com', '7885421841', 'TCS', 'images/updatedround-2.jpg', 3.8, 4.8, 5, 5, 3.6, 0, '2022-01-11 15:11:25'),
(76, 'Abhi', 'abhi123@gmail.com', '9859658432', 'WIPRO', 'images/updatedround-1.jpg', 4.5, 4.3, 5, 4.7, 4.6, 0, '2022-01-11 18:02:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
