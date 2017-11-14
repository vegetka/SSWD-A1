-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 05:06 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sswda1`
--
CREATE DATABASE IF NOT EXISTS `sswda1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sswda1`;

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` int(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `irish_name` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `population` int(11) NOT NULL,
  `established` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `name`, `irish_name`, `province`, `population`, `established`) VALUES
(1, 'Dublin', 'Baile Átha Cliath', 'Leinster', 1173179, 988),
(2, 'Cork', 'Corcaigh', 'Munster', 208669, 915),
(3, 'Limerick', 'Luimneach', 'Munster', 94192, 812),
(4, 'Galway', 'Gaillimh', 'Connacht', 79934, 1124),
(5, 'Waterford', 'Port Láirge', 'Munster', 53504, 914),
(6, 'Drogheda', 'Droichead Átha', 'Leinster', 40956, 911),
(7, 'Swords', 'Sord', 'Leinster', 39248, 560),
(8, 'Dundalk', 'Dún Dealgan', 'Leinster', 39004, 1189),
(9, 'Bray', 'Bré', 'Leinster', 32600, 1598),
(10, 'Navan', 'Uaimh', 'Leinster', 30173, 1172),
(11, 'Cobh', 'an Cóbh', 'Munster', 12800, 1743);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
