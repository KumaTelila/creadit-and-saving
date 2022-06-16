-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2022 at 07:42 AM
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
(34, 'kuma', '8c9d806c6d2e80e87b60e1e860042303', 0, 1, 0, 0),
(91, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, 0, 0),
(92, 'manager', '1d0258c2440a8d19e716292b231e3190', 1, 0, 0, 0),
(93, 'accountant', '56f97f482ef25e2f440df4a424e2ab1e', 0, 0, 1, 0),
(95, 'Rahel', 'e2c655411d8d95ef73d8026704f5e7ad', 0, 0, 0, 1),
(96, 'Girma', 'c9f50fe7b0efdaaea40f7ba3a4916dcf', 0, 0, 0, 1),
(97, 'abc', '900150983cd24fb0d6963f7d28e17f72', 0, 0, 1, 0),
(98, 'kuma1', 'd1019c05fe5be01ee4a965faa38f5e4d', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(11) NOT NULL,
  `acc_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `acc_id`, `name`, `gender`, `phone`, `balance`, `date`, `photo`) VALUES
(27, 95, 'Rahel Assefa', 'F', ' 251965582658', -7000, '2022-06-15', 'photo'),
(28, 96, 'Girma Assefa', 'M', ' 09852455622', 0, '2022-06-15', 'photo'),
(29, 98, 'Kuma Telila', 'M', ' 965582658', NULL, '2022-06-16', 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `acc_id`, `name`, `gender`, `phone`, `email`, `role`, `photo`) VALUES
(5, 91, NULL, NULL, NULL, NULL, 'admin', ''),
(6, 92, 'Kuma Telila', NULL, '09655826584', NULL, 'manager', 'photo'),
(7, 93, 'Girma Assefa', 'M', '251965582658', 'ku2@gmail.com', 'accountant', 'photo'),
(8, 97, NULL, NULL, NULL, NULL, 'accountant', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `cust_id` bigint(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `cust_id`, `sender_name`, `message`, `date`) VALUES
(7, 27, 'Rahel Assefa', 'Duis lacinia ac neque et congue. Ut auctor, massa eu lacinia ornare, enim sapien varius turpis, et vulputate urna risus non tellus. Cras justo enim, eleifend vitae nisl sit amet, tristique facilisis lacus. Suspendisse ultrices et justo eu condimentum. Nunc ut nulla sagittis ligula sodales faucibus a vel ante. Sed eget felis nec sapien porttitor commodo. Curabitur odio mi, tristique id tortor sed, dapibus vulputate massa. Ut in tortor pretium, mollis nunc vitae, vulputate arcu.', '2022-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `loan_repay`
--

CREATE TABLE `loan_repay` (
  `id` int(11) NOT NULL,
  `cust_id` bigint(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `is_registered` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_repay`
--

INSERT INTO `loan_repay` (`id`, `cust_id`, `amount`, `is_registered`) VALUES
(2, 27, 10000, 1),
(3, 27, 12000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loan_requstes`
--

CREATE TABLE `loan_requstes` (
  `id` int(11) NOT NULL,
  `cust_id` bigint(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_registered` tinyint(1) NOT NULL DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_requstes`
--

INSERT INTO `loan_requstes` (`id`, `cust_id`, `amount`, `is_approved`, `is_registered`, `date`) VALUES
(20, 27, 1000, 1, 1, '2022-06-16'),
(21, 27, 11000, 1, 1, '2022-06-16'),
(22, 27, 5000, 1, 1, '2022-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `cust_id` bigint(11) NOT NULL,
  `loan` int(11) NOT NULL,
  `saving` int(11) NOT NULL
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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `man_id`, `title`, `description`, `date`) VALUES
(9, 92, 'news 2', 'asjhgjkl;sacjndskjfjiojkfslknvknk.jjnknlkvf', '2022-06-15'),
(10, 92, 'new2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu lorem a elit consequat pulvinar. Morbi vestibulum ex vitae accumsan condimentum. Curabitur volutpat eget lectus nec imperdiet. Curabitur lacus erat, posuere vel lectus non, tristique interdum nibh. Nunc congue, neque a porta dictum, orci sem aliquet tellus, at dapibus enim urna eget purus. Proin in congue orci, sed dictum lorem. Nulla vel sapien ultrices, tincidunt dolor sed, blandit augue. Donec eros odio, mollis id sollicitudin eget, tincidunt faucibus quam. Quisque at nisi elementum, cursus sapien fringilla, euismod ante. Nunc aliquam purus id ullamcorper porttitor.', '2022-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `report_type` varchar(100) DEFAULT NULL,
  `reporter_name` varchar(100) NOT NULL,
  `report` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `acc_id`, `report_type`, `reporter_name`, `report`, `date`) VALUES
(2, 93, 'Monthly', 'Kuma Telila', 'dsfASDSDFg', '2022-06-15'),
(3, 93, 'Yearly', 'Kuma Telila', 'safqesggwethwht', '2022-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `loan_repay`
--
ALTER TABLE `loan_repay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `loan_requstes`
--
ALTER TABLE `loan_requstes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loan_repay`
--
ALTER TABLE `loan_repay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_requstes`
--
ALTER TABLE `loan_requstes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `any` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loan_repay`
--
ALTER TABLE `loan_repay`
  ADD CONSTRAINT `loan_repay_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loan_requstes`
--
ALTER TABLE `loan_requstes`
  ADD CONSTRAINT `loan_requstes_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `money`
--
ALTER TABLE `money`
  ADD CONSTRAINT `money_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
