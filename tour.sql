-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 07:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_desc` varchar(255) NOT NULL,
  `banner_img` text NOT NULL,
  `status` tinyint(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_desc`, `banner_img`, `status`) VALUES
(1, 'Banner1', 'Desc1', 'img/g3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(55) NOT NULL,
  `aadhaar` varchar(100) NOT NULL,
  `place` varchar(20) NOT NULL,
  `quantity` int(255) NOT NULL,
  `arrival` date NOT NULL,
  `leaving` date NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `name`, `mobile`, `aadhaar`, `place`, `quantity`, `arrival`, `leaving`, `details`, `status`) VALUES
(1, 'Tarique Ansari', '9570885984', '', '', 0, '0000-00-00', '0000-00-00', '', 1),
(2, 'Tarique Ansari', '9570885984', '656537080312', 'Ranchi', 4, '2023-06-28', '2023-06-30', '', 1),
(3, 'meraj', '8340650161', '656537080312', 'Ranchi', 4, '2023-06-29', '2023-06-30', 'no details', 1),
(4, 'asif', '9570885984', '444444444444', 'Ranchi', 3, '2023-07-12', '2023-07-22', '', 1),
(5, 'Tarique Ansari', '9570885984', '66666666666', 'Ranchi', 3, '2023-07-06', '2023-07-14', '', 1),
(6, 'codezeal', '8340650161', '454567674545', 'Ranchi', 4, '2023-07-08', '2023-07-10', 'details about the price', 1),
(7, 'Tarique Ansari', '9570885984', '444444444444', 'Ranchi', 4, '2023-07-08', '2023-07-08', '', 1),
(8, 'aakash', '9570885984', '454444444354', 'Ranchi', 4, '2023-07-12', '2023-07-13', '', 1),
(9, 'shweta', '9570885984', '545454545454', 'Ranchi', 4, '2023-07-20', '2023-07-21', 'chudail hai', 1),
(10, 'AMIT', '8340650161', '88888888888888', 'Ranchi', 4, '2023-07-21', '2023-07-22', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `detail` varchar(20) NOT NULL,
  `status` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `email`, `detail`, `status`) VALUES
(1, 'Tarique Ansari', 75656765, 'tariqueansari9570@gmail.com', 'trdt', 1),
(2, 'Tarique Ansari', 2147483647, 'tariqueansari1020@gmail.com', 'jhghc', 1),
(3, 'Tarique Ansari', 2147483647, 'tariqueansari1020@gmail.com', 'ABOUT PACKAGES', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
