-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 07:47 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `user_password`) VALUES
(1, 'rutu', 'rutu123'),
(2, 'krutika', 'krutika123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `aptnumber` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(11) DEFAULT NULL,
  `aptdate` varchar(50) DEFAULT NULL,
  `apttime` varchar(50) DEFAULT NULL,
  `services` varchar(50) DEFAULT NULL,
  `appyldate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarkdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `aptnumber`, `name`, `email`, `phonenumber`, `aptdate`, `apttime`, `services`, `appyldate`, `remark`, `status`, `remarkdate`) VALUES
(1, '603029246', 'rutu', 'r@gmail.com', 1234509876, '9/14/2022', '12:30am', 'O3 Facial', '2022-09-06 08:29:20', 'Rejected', '2', '2022-09-07 09:13:02'),
(2, '248149006', 'krutika', 'r@gmail.com', 1234509876, '9/14/2022', '12:00am', 'O3 Facial', '2022-09-06 08:29:47', '\r\nAccepted', '1', '2022-09-19 09:46:07'),
(3, '185662674', 'aaa', 'r@gmail.com', 123454321, '9/1/2022', '12:30am', 'Loreal Hair Color(Full)', '2022-09-07 09:10:43', 'Accepted\r\n', '1', '2022-09-19 09:38:06'),
(4, '194397557', 'bbb', 'r@gmail.com', 1234554321, '9/1/2022', '12:00am', 'Loreal Hair Color(Full)', '2022-09-07 09:11:03', '', '', '2022-09-19 09:38:20'),
(5, '769435416', 'mohini', 'r@gmail.com', 1234567890, '9/27/2022', '12:30am', 'Layer Haircut', '2022-09-10 09:51:51', '', '', '2022-09-19 09:38:40'),
(6, '109771895', 'aarvi', 'r@gmail.com', 1234567890, '9/27/2022', '1:30am', 'Normal Pedicure', '2022-09-10 09:52:37', '', '', '2022-09-19 09:38:48'),
(7, '202459861', 'ruhi', 'r@gmail.com', 1234567890, '9/27/2022', '12:00am', 'Deluxe Pedicure', '2022-09-10 09:54:00', '', '', '2022-09-19 09:38:56'),
(8, '196390444', 'mita', 'r@gmail.com', 1234567890, '9/1/2022', '12:30am', 'O3 Facial', '2022-09-10 09:54:42', '', '', '2022-09-19 09:39:03'),
(9, '301408094', 'moni', 'r@gmail.com', 1234567890, '9/14/2022', '12:30am', 'Fruit Facial', '2022-09-10 09:55:15', '', '', '2022-09-19 09:39:11'),
(10, '324732980', 'nidhi', 'r@gmail.com', 1234567890, '9/27/2022', '12:00am', 'Layer Haircut', '2022-09-10 09:59:06', '', '', '2022-09-19 09:39:24'),
(11, '355602103', 'rani', 'rutubca@gmail.com', 987654321, '9/8/2022', '12:00am', 'Normal Pedicure', '2022-09-19 06:29:01', '', '', '2022-09-19 09:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'rutu', 'rutubca@gmail.com', 'aaa bbb cc', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobilenumber` bigint(11) DEFAULT NULL,
  `gender` enum('female','male','transgender','') DEFAULT NULL,
  `details` mediumtext,
  `creationdate` timestamp NULL DEFAULT NULL,
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobilenumber`, `gender`, `details`, `creationdate`, `updationdate`) VALUES
(1, 'rutu', 'r@gmail.com', 1234509876, 'female', 'rgftjhgk', NULL, NULL),
(2, 'rutu', 'r@gmail.com', 1234509876, 'female', 'aaa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `billingId` int(11) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpwd` varchar(50) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`, `cpwd`, `mno`, `role`) VALUES
(1, 'rutu', 'patel', 'r@gmail.com', '1234567', '1234567', '1234567890', 'user'),
(2, 'krutika', 'patel', 'k@gmail.com', '123456', '123456', '1234554321', 'user'),
(3, 'priyal', 'patel', 'p@gmail.com', '098765', '098765', '0987654321', 'user'),
(4, 'avani', 'patel', 'a@gmail.com', '098765', '098765', '0987651234', 'user'),
(5, 'trupila', 'patel', 't@gmail.com', '456789', '456789', '2345098765', 'user'),
(6, 'ritu', 'patel', 'r@gmail.com', '123456', '123456', '5432167890', 'user'),
(7, 'komal', 'patel', 'k@gmail.com', '098765', '098765', '6789009876', 'user'),
(8, 'druti', 'patel', 'd@gmail.com', '543219', '543219', '5432154321', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `servicename` varchar(50) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `servicename`, `cost`, `creationdate`) VALUES
(1, 'O3 Facial', '1200', '2022-09-06 08:25:49'),
(2, 'Fruit Facial', '500', '2022-09-06 08:26:34'),
(3, 'Charcol Facial', '1000', '2022-09-06 08:26:48'),
(4, 'Deluxe Menicure', '500', '2022-09-06 08:27:02'),
(5, 'Deluxe Pedicure', '600', '2022-09-06 08:27:37'),
(6, 'Normal Menicure', '300', '2022-09-06 08:27:51'),
(7, 'Normal Pedicure', '500', '2022-09-06 08:28:02'),
(8, 'U-Shape Hair Cut', '300', '2022-09-06 08:28:11'),
(9, 'Layer Haircut', '600', '2022-09-06 08:28:21'),
(10, 'Rebonding', '300', '2022-09-06 08:28:31'),
(11, 'Loreal Hair Color(Full)', '1200', '2022-09-06 08:28:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
