-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creadit`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_manager` tinyint(1) DEFAULT 0,
  `is_admin` tinyint(1) DEFAULT 0,
  `is_accountant` tinyint(1) DEFAULT 0,
  `is_customer` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `is_manager`, `is_admin`, `is_accountant`, `is_customer`) VALUES
(25, 'kuma', '8c9d806c6d2e80e87b60e1e860042303', 0, 1, 0, 0),
(26, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 0, 0),
(27, 'abc', '900150983cd24fb0d6963f7d28e17f72', 0, 0, 1, 0),
(28, 'abc1', '23734cd52ad4a4fb877d8a1e26e5df5f', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `man_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `acc_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `acc_number` int(11) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `acc_id`, `name`, `gender`, `phone`, `username`, `password`, `acc_number`, `role`, `date`, `photo`) VALUES
(1, NULL, NULL, NULL, NULL, 'abc', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, '2022-05-21', NULL),
(5, 25, NULL, NULL, NULL, 'kuma', '8c9d806c6d2e80e87b60e1e860042303', NULL, NULL, '2022-05-21', NULL),
(6, 26, NULL, NULL, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, '2022-05-21', NULL),
(8, 28, NULL, NULL, NULL, 'abc1', '23734cd52ad4a4fb877d8a1e26e5df5f', NULL, 'admin', '2022-06-06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `any` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
