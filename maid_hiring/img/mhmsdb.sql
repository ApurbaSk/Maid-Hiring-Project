-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 12:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `email`, `password`) VALUES
(2, 'abc', 'abcd@gmail.com', '1111'),
(6, 'ww', 'we@gmail.com', '1111'),
(8, 'aq', 'aq@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `username` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblmaid`
--

CREATE TABLE `tblmaid` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `category` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phoneNumber` int(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `ex` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblmaid`
--

INSERT INTO `tblmaid` (`id`, `fullname`, `category`, `email`, `phoneNumber`, `dob`, `gender`, `ex`, `image`) VALUES
(7, 'sima saha', 'Utensil Cleaning', 'hello@gmail.com', 225588774, '2024-06-17', 'Female', 'good', '../img/m1.jpg'),
(11, 'abc', 'Mopping', 'abcd@gmail.com', 2147483647, '2024-07-06', 'Female', 'jbcj', '../img/img2.jpg'),
(12, 'xyz', 'Mopping', 'arushisaha6@gmail.com', 2147483647, '2024-08-14', 'Female', 'hd', '../img/about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblmaidbooking`
--

CREATE TABLE `tblmaidbooking` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `number` bigint(10) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `category` varchar(200) NOT NULL,
  `WorkingShiftFrom` time DEFAULT NULL,
  `WorkingShiftTo` time DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblmaidbooking`
--

INSERT INTO `tblmaidbooking` (`id`, `fname`, `number`, `email`, `address`, `gender`, `category`, `WorkingShiftFrom`, `WorkingShiftTo`, `startdate`, `notes`) VALUES
(12, 'rima', 8768533452, 'we@gmail.com', 'kaliyaganj', 'Female', 'Toilet Cleaning', '18:35:00', '22:35:00', '2024-07-03', 'bad'),
(15, 'rupsa', 8768533452, 'abcd@gmail.com', ' itahar', 'Female', 'Toilet Cleaning', '18:05:00', '21:05:00', '2024-06-21', 'need best maid'),
(16, 'rupa', 8768533452, 'we@gmail.com', 'kolkata', 'Female', 'Toilet Cleaning', '12:01:00', '13:02:00', '2024-08-14', 'best'),
(17, 'ayz', 8768533452, 'abcd@gmail.com', 'raiganj', 'Female', 'Toilet Cleaning', '19:41:00', '15:47:00', '2024-08-28', 'good'),
(18, 'apurba', 8356532656, 'hello@gmail.com', 'kolkata', 'male', 'Dusting and Mopping', '18:48:00', '03:48:00', '2024-07-31', 'maid should be tamil');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `say` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `email`, `contact`, `say`) VALUES
('Disha Saha', 'abcd@gmail.com', 2147483647, 'Contact me'),
('Sima', 'qq@gmail.com', 2147483647, 'hh'),
('jjk', 'abcd@gmail.com', 2147483647, 'no'),
('sn', 'we@gmail.com', 2147483647, ''),
('qqq', 'qq@gmail.com', 2147483647, ''),
('vchgdvsghc', 'qq@gmail.com', 2147483647, ''),
('Dilip', 'abcd@gmail.com', 58745, 'hhhh'),
('rupsa', 'qq@gmail.com', 2147483647, 'wjhfuedhie'),
('rima', 'we@gmail.com', 2147483647, ''),
('rima', 'we@gmail.com', 2147483647, 'kjck');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmaid`
--
ALTER TABLE `tblmaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmaidbooking`
--
ALTER TABLE `tblmaidbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblmaid`
--
ALTER TABLE `tblmaid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblmaidbooking`
--
ALTER TABLE `tblmaidbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
