-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 09:58 AM
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
-- Database: `phpregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'disha', 'we@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', '2024-05-04 05:39:18'),
(2, 'gg', 'df@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '2024-05-06 05:25:48'),
(3, 'lol', 'weff@gmail.com', '5553cfaf751a4b14960b7581a20bc142', '2024-05-06 05:39:17'),
(4, 'Rahul', 'we@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-09 07:55:28'),
(5, 'ram', 'arushisaha6@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '2024-06-02 01:44:37'),
(6, 'ram', 'abc@123gmail.com', 'a01610228fe998f515a72dd730294d87', '2024-06-02 05:50:54'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2024-06-02 06:19:21'),
(8, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2024-06-02 06:19:33'),
(9, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2024-06-02 06:21:14'),
(10, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2024-06-02 06:21:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
