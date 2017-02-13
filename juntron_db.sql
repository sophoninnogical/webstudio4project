-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 10:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juntron_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_custo`
--

CREATE TABLE `c_custo` (
  `c_list` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_tel` varchar(10) NOT NULL,
  `c_product` varchar(6) NOT NULL,
  `c_amount` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `c_custo`
--

INSERT INTO `c_custo` (`c_list`, `c_name`, `c_tel`, `c_product`, `c_amount`) VALUES
(2, 'sss', '12314', '', ''),
(3, 'ssss', '1111', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `all_pList` int(11) NOT NULL,
  `all_code` varchar(3) NOT NULL,
  `all_type` varchar(6) NOT NULL,
  `all_price` int(11) NOT NULL,
  `all_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_custo`
--
ALTER TABLE `c_custo`
  ADD PRIMARY KEY (`c_list`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`all_pList`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_custo`
--
ALTER TABLE `c_custo`
  MODIFY `c_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `all_pList` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
