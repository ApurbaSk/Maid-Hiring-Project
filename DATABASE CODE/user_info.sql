-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:35 AM
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
('fvfv', 'abc@123gmail.com', 2147483647, 'hvgfuh'),
('fvfv', 'abc@123gmail.com', 2147483647, 'hvgfuh'),
('bv ', 'abc@123gmail.com', 2147483647, 'fvhb'),
('Disha', 'abc@gmail.com', 2147483647, 'dchghgd'),
('Sima', 'sima@gmail.com', 2147483647, 'Hello'),
('rima', 'we@gmail.com', 2147483647, 'hvh'),
('Sima', 'qq@gmail.com', 2147483647, 'ww'),
('sagar', 'sagar@gmail.com', 784250251, 'hello'),
('Sima', 'abcd@gmail.com', 2147483647, 'kk'),
('rima', 'ahjak@gmai.com', 2147483647, 'dqhqkgfhaeou0[qu'),
('rima', 'arushisaha6@gmail.com', 2147483647, 'dajfagydl;kfcs'),
('rima', 'arushisaha6@gmail.com', 2147483647, 'dajfagydl;kfcs'),
('rima', 'arushisaha6@gmail.com', 2147483647, 'kwpaifi'),
('rima', 'arushisaha6@gmail.com', 2147483647, 'kwpaifi'),
('rima', 'arushisaha6@gmail.com', 2147483647, 'jjj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
