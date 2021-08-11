-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 03:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pwd`) VALUES
(1234, 'ronull');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `c_address` varchar(60) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  `c_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `fname`, `lname`, `c_address`, `c_email`, `c_pwd`) VALUES
(1, 'Ronak', 'Rathod', 'Bengaluru', 'ronak@gmail.com', '1234'),
(2, 'Ullas', 'Sam', 'Rao nivas', 'ullassam@gmail.com', 'ullasam69');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `o_id` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `o_amount` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`o_id`, `cust_name`, `o_amount`, `c_id`, `p_id`) VALUES
(1244, 'Ronak', 6000, 1, 302),
(1245, 'Ronak', 6000, 1, 302),
(1246, 'Ronak', 6000, 1, 302),
(1247, 'Ronak', 2000, 1, 303),
(1248, 'Ronak', 14000, 1, 305),
(1251, 'Ronak', 14000, 1, 305),
(1252, 'Ronak', 6000, 1, 302),
(1253, 'Ronak', 6000, 1, 302),
(1254, 'Ronak', 6000, 1, 302),
(1255, 'Ronak', 15000, 1, 304);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_dob` date NOT NULL,
  `image` varchar(300) NOT NULL,
  `s_id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`p_id`, `p_name`, `p_type`, `p_amount`, `p_dob`, `image`, `s_id`, `code`) VALUES
(302, 'Kitty', 'Cat', 6500, '2022-07-22', 'image/8625-beautiful-doll-face-persian-cat,-fluffy-black...-wallpaper-free-photo.jpg', 203, 'p302'),
(303, 'peeku', 'Bird', 2000, '2020-11-22', 'image/birds-lovebirds-animals-wallpaper-preview.jpg', 202, 'p303'),
(304, 'Buddy', 'Dog', 15000, '2020-10-23', 'image/be54916241bf62ddb2c049026b75fd7d.png', 202, 'p304'),
(305, 'Max', 'Dog', 14000, '2020-12-09', 'image/max.jpg', 203, 'p305'),
(306, 'Rama', 'Bird', 2500, '2020-11-20', 'image/947841.jpg', 201, 'p306');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_address` varchar(60) NOT NULL,
  `s_phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`s_id`, `s_name`, `s_address`, `s_phone`) VALUES
(201, 'amazon', 'Mumbai', 9594612355),
(202, 'Thakur & sons', 'New Delhi', 2147483647),
(203, 'SVK & Co.', 'Mysuru', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`o_id`,`c_id`,`p_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`p_id`,`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1256;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `pet` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_info_ibfk_3` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `supplier` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
