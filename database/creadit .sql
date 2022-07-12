-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2022 at 07:04 PM
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
  `is_customer` tinyint(1) DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `is_manager`, `is_admin`, `is_accountant`, `is_customer`, `is_deleted`) VALUES
(34, 'kuma', '8c9d806c6d2e80e87b60e1e860042303', 0, 1, 0, 0, 0),
(91, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, 0, 0, 1),
(92, 'manager', '1d0258c2440a8d19e716292b231e3190', 1, 0, 0, 0, 0),
(93, 'accountant', '56f97f482ef25e2f440df4a424e2ab1e', 0, 0, 1, 0, 0),
(95, 'Rahel', 'e2c655411d8d95ef73d8026704f5e7ad', 0, 0, 0, 1, 0),
(96, 'Girma', 'c9f50fe7b0efdaaea40f7ba3a4916dcf', 0, 0, 0, 1, 0),
(98, 'kuma1', 'd1019c05fe5be01ee4a965faa38f5e4d', 0, 0, 0, 1, 0),
(99, 'hermi', '165c7c3f6c59257c22d6147d3f84e613', 0, 1, 0, 0, 1),
(100, 'girme', 'c7152ecfca057d9432ee71d173e63c0b', 1, 0, 0, 0, 0),
(101, 'tola1', 'ad50ce09d2cae59102a31c1e6034fcb9', 0, 0, 0, 1, 0),
(102, 'baley', '46f9604dac787fab9a4d8d68c6da428d', 0, 0, 0, 1, 0),
(103, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 0, 0, 0, 1, 0),
(105, 'Girma1', '686bba45f5491a606a3b5f4692fe2dca', 0, 0, 0, 1, 0),
(109, 'sisay', 'd11a5b51cdf3967f9e4dd61f93d6dd4d', 0, 0, 0, 1, 0),
(110, 'User21', '85b7a29973177a3644ac4481753f2863', 0, 0, 0, 1, 0),
(112, 'rah', '202cb962ac59075b964b07152d234b70', 0, 0, 0, 1, 0),
(113, 'jkdfslk', '069059b7ef840f0c74a814ec9237b6ec', 0, 0, 0, 1, 0),
(114, 'ab21', '1aba8fa84ed47add9192604ec5721944', 0, 0, 0, 1, 0),
(115, 'abc2', '63872b5565b2179bd72ea9c339192543', 0, 0, 0, 1, 0),
(116, 'rah2', '94a6fd8f7835df4d2f77585177927051', 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(11) NOT NULL,
  `acc_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `balance` int(100) DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `acc_id`, `name`, `gender`, `age`, `phone`, `balance`, `date`, `photo`) VALUES
(27, 95, 'Rahel Assefa', 'F', 0, ' 251965582658', 2000, '2022-06-15', 'photo'),
(28, 96, 'Girma Assefa', 'M', 0, ' 09852455622', 0, '2022-06-15', 'photo'),
(29, 98, 'Kuma Telila', 'M', 0, ' 965582658', 0, '2022-06-16', 'photo'),
(30, 101, 'Tola Lema', 'M', 0, ' 251965582658', 0, '2022-06-17', 'photo'),
(31, 102, 'Baley Desu', 'M', 0, ' 965582658', -3000, '2022-06-19', '2022-06-24 17:14:45Screenshot from 2022-06-23 18-03-53.png'),
(32, 103, 'user bb', 'F', 0, ' 09655826584', 5000, '2022-06-19', 'photo'),
(34, 105, 'Rahel Girma1', 'F', 0, ' 09655826584', 0, '2022-06-24', 'photo'),
(38, 109, 'sisay lll', 'M', 0, ' 965582658', 0, '2022-06-24', '2022-06-24 16:13:57php-certificate.jpg'),
(39, 110, 'Kuma Telila User21', 'M', 0, ' 0965582658', 0, '2022-06-24', '2022-06-24 17:26:2820210107_183106.jpg'),
(41, 116, 'Rahel Girma', 'F', 25, '09655826584', 0, '2022-06-30', '2022-06-30 18:48:37Screenshot from 2022-06-23 18-03-53.png');

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
(9, 99, NULL, NULL, NULL, NULL, 'admin', NULL),
(10, 100, NULL, NULL, NULL, NULL, 'manager', NULL);

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
(7, 27, 'Rahel Assefa', 'Duis lacinia ac neque et congue. Ut auctor, massa eu lacinia ornare, enim sapien varius turpis, et vulputate urna risus non tellus. Cras justo enim, eleifend vitae nisl sit amet, tristique facilisis lacus. Suspendisse ultrices et justo eu condimentum. Nunc ut nulla sagittis ligula sodales faucibus a vel ante. Sed eget felis nec sapien porttitor commodo. Curabitur odio mi, tristique id tortor sed, dapibus vulputate massa. Ut in tortor pretium, mollis nunc vitae, vulputate arcu.', '2022-06-16'),
(9, 30, 'Tola Leeema', 'I want to money', '2022-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `loan_repay`
--

CREATE TABLE `loan_repay` (
  `id` int(11) NOT NULL,
  `cust_id` bigint(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `is_registered` tinyint(1) NOT NULL DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_repay`
--

INSERT INTO `loan_repay` (`id`, `cust_id`, `amount`, `is_registered`, `date`) VALUES
(2, 27, 10000, 1, '2022-06-19'),
(3, 27, 12000, 1, '2022-06-19'),
(4, 30, 10000, 1, '2022-06-19'),
(5, 31, 20000, 0, '2022-06-19'),
(6, 32, 10000, 1, '2022-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `loan_requstes`
--

CREATE TABLE `loan_requstes` (
  `id` int(11) NOT NULL,
  `cust_id` bigint(11) NOT NULL,
  `kebeleId` varchar(100) DEFAULT NULL,
  `lsubCity` varchar(100) DEFAULT NULL,
  `lworeda` varchar(100) DEFAULT NULL,
  `lkebele` varchar(100) DEFAULT NULL,
  `lhouseNo` int(11) DEFAULT NULL,
  `jsubCity` varchar(100) DEFAULT NULL,
  `jworeda` varchar(100) DEFAULT NULL,
  `jkebele` varchar(100) DEFAULT NULL,
  `jhouseNo` int(11) DEFAULT NULL,
  `jPhoneNo` int(11) DEFAULT NULL,
  `postNo` int(11) DEFAULT NULL,
  `edu` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `salary` decimal(10,0) DEFAULT NULL,
  `maritial` varchar(100) DEFAULT NULL,
  `family` int(11) DEFAULT NULL,
  `house` varchar(100) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `round` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `un_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_registered` tinyint(1) NOT NULL DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_requstes`
--

INSERT INTO `loan_requstes` (`id`, `cust_id`, `kebeleId`, `lsubCity`, `lworeda`, `lkebele`, `lhouseNo`, `jsubCity`, `jworeda`, `jkebele`, `jhouseNo`, `jPhoneNo`, `postNo`, `edu`, `job`, `salary`, `maritial`, `family`, `house`, `room`, `round`, `amount`, `description`, `photo`, `is_approved`, `un_approved`, `is_registered`, `date`) VALUES
(20, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000, '', '', 1, 0, 1, '2022-06-16'),
(21, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11000, '', '', 1, 0, 1, '2022-06-16'),
(22, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, '', '', 1, 0, 1, '2022-06-16'),
(23, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, '', '', 1, 0, 1, '2022-06-17'),
(24, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3000, '', '', 1, 0, 1, '2022-06-17'),
(25, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000, '', '', 1, 0, 1, '2022-06-19'),
(26, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, '', '', 1, 0, 1, '2022-06-19'),
(27, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10000, '', '', 0, 1, 0, '2022-06-19'),
(28, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, '', '', 1, 0, 1, '2022-06-19'),
(29, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, '', '2022-06-26 09:11:30Osu.jpeg', 0, 0, 0, '2022-06-26'),
(30, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, 'for car', '2022-06-26 09:12:48ku.jpg', 0, 0, 0, '2022-06-26'),
(31, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 600000, 'creadit 1', '2022-07-01 20:21:26Screenshot from 2022-06-29 21-28-39.png', 0, 1, 0, '2022-07-01'),
(32, 31, '10', 'Adama', '03', '01', 170, 'Adama, Oromia', '03', '01', 171, 958471521, 4560, 'Degree', 'president', '50000', 'Maried', 12, 'Tenant', 3, 2, 80000, 'pppppp', '2022-07-01 21:14:55Screenshot from 2022-06-23 18-03-53.png', 0, 0, 0, '2022-07-01');

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
  `image` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `man_id`, `title`, `description`, `image`, `date`) VALUES
(9, 92, 'news 2', 'asjhgjkl;sacjndskjfjiojkfslknvknk.jjnknlkvf', NULL, '2022-06-15'),
(10, 92, 'new2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu lorem a elit consequat pulvinar. Morbi vestibulum ex vitae accumsan condimentum. Curabitur volutpat eget lectus nec imperdiet. Curabitur lacus erat, posuere vel lectus non, tristique interdum nibh. Nunc congue, neque a porta dictum, orci sem aliquet tellus, at dapibus enim urna eget purus. Proin in congue orci, sed dictum lorem. Nulla vel sapien ultrices, tincidunt dolor sed, blandit augue. Donec eros odio, mollis id sollicitudin eget, tincidunt faucibus quam. Quisque at nisi elementum, cursus sapien fringilla, euismod ante. Nunc aliquam purus id ullamcorper porttitor.', NULL, '2022-06-16'),
(11, 92, 'news 3 ', 'መተማመን ብድርና ቁጠባ ተቋም ከብሔራዊ ባንክ ባገኘው ፈቃድ መሠረት ሁሉንም የኅብረተ ሰብ ክፍሎች በተለይም ሴቶችና ወጣቶች ለማገልገል የተቋቋመ ድርጅት ሲሆን ባሁኑ ወቅት በኦሮሚያ፣ በአማራ፣ በሲዳማ፣ በደቡብ ሕዝቦች እንዲሁም በአዲስ አበባ ከተማ አስተዳደር በጠቅላላው 29 ቅርንጫፎችና 4 ንዑስ ቅርንጫፎች ያሉት ተቋም ነው። ተቋሙ የኅብረተ ሰቡን ኢኮኖሚያዊና ማኅበራዊ ህይወት ለመለወጥ አገልግሎት በመስጠት ላይ የሚገኝ ተቋም ነው፡፡ ማኅበሩ ላለፉት ዐሥራ ስምንት ዓመታት ደንበኞቹን በማገልገል ላይ ይገኛል ወደፊትም አገልግሎቱን በሁሉም የሃገሪቱ ክልሎች ለማስፋፋት አቅዶ እየሠራ ይገኛል።', NULL, '2022-06-16'),
(12, 100, 'Loan Criteria ', 'If you want to loan read the following procedures', NULL, '2022-06-17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loan_repay`
--
ALTER TABLE `loan_repay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loan_requstes`
--
ALTER TABLE `loan_requstes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
