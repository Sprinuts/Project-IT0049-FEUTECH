-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 04:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forknik`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `equipmentid` varchar(11) NOT NULL,
  `borrower` int(9) DEFAULT NULL,
  `reserver` int(9) DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `equipmentname` varchar(100) NOT NULL,
  `accessories` varchar(100) NOT NULL,
  `dateborrowed` datetime DEFAULT NULL,
  `datereserved` datetime DEFAULT NULL,
  `datetoborrow` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `equipmentid`, `borrower`, `reserver`, `datecreated`, `equipmentname`, `accessories`, `dateborrowed`, `datereserved`, `datetoborrow`, `status`, `category`, `description`, `image`) VALUES
(1, 'CCS00000001', NULL, NULL, '2024-12-01 23:06:11', 'Dell Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Dell Laptop', 'public/images/1733065571_ffab758b28d7b21d4e95.jpg'),
(2, 'CCS00000002', NULL, NULL, '2024-12-01 23:06:27', 'Asus Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Asus Laptop', 'public/images/1733065587_07c26053d5fad304c885.jpg'),
(3, 'CCS00000003', NULL, NULL, '2024-12-01 23:06:43', 'Acer Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Acer Laptop', 'public/images/1733065603_b9741e90fd7dc3900e44.jpg'),
(4, 'CCS00000004', NULL, NULL, '2024-12-01 23:07:08', 'MSI Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'MSI Gaming Laptop', 'public/images/1733065628_e950847ed71b731a3570.jpg'),
(5, 'CCS00000005', NULL, NULL, '2024-12-01 23:07:54', 'HP Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'HP Laptop', 'public/images/1733065674_932cf7bf86bacd3352f9.jpg'),
(6, 'CCS00000006', NULL, NULL, '2024-12-01 23:08:10', 'Apple Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Apple Laptop Mac', 'public/images/1733065690_82c233e7081f0b6ed3c2.jpg'),
(7, 'CCS00000007', NULL, NULL, '2024-12-01 23:08:26', 'Lenovo Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Good Laptop', 'public/images/1733065706_110a643d7310507b3f96.jpg'),
(8, 'CCS00000008', NULL, NULL, '2024-12-01 23:08:39', 'Alienware Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Very Fast laptop ', 'public/images/1733065719_a3ec7358f2bbdede9d95.jpg'),
(9, 'CCS00000009', NULL, NULL, '2024-12-01 23:08:59', 'Dell Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'LCP-1242', 'public/images/1733065739_856c9d3b063633b37bfa.jpg'),
(10, 'CCS00000010', NULL, NULL, '2024-12-01 23:09:18', 'Lenovo Laptop', 'charger', NULL, NULL, NULL, 1, 'laptop', 'Lenovo', 'public/images/1733065758_c16e16bd8a96cfd169ef.jpg'),
(11, 'CCS00000011', NULL, NULL, '2024-12-01 23:10:10', 'DLP', 'extension-vga-hdmicable-powercable', NULL, NULL, NULL, 1, 'dlp', 'DLP', 'public/images/1733065810_6d5b9bb2bba0771f209c.jpg'),
(12, 'CCS00000012', NULL, NULL, '2024-12-01 23:10:25', 'DLP 2', 'extension-vga-hdmicable-powercable', NULL, NULL, NULL, 1, 'dlp', 'DLP', 'public/images/1733065825_68d9725d5dd479f3d38e.jpg'),
(13, 'CCS00000013', NULL, NULL, '2024-12-01 23:11:04', 'HDMI', 'none', NULL, NULL, NULL, 1, 'hdmi', 'HDMI', 'public/images/1733065864_f7b23be0ed0bbc260971.jpg'),
(14, 'CCS00000014', NULL, NULL, '2024-12-01 23:11:16', 'VGA', 'none', NULL, NULL, NULL, 1, 'vga', 'VGA', 'public/images/1733065876_dff6b17e6fea071d62da.jpg'),
(15, 'CCS00000015', NULL, NULL, '2024-12-01 23:11:46', 'DLP Remote', 'none', NULL, NULL, NULL, 1, 'dlpremote', 'DLP Remote', 'public/images/1733065906_83427a276e6ddbf1e172.jpg'),
(16, 'CCS00000016', NULL, NULL, '2024-12-01 23:12:02', 'HDMI 3', 'none', NULL, NULL, NULL, 1, 'hdmi', 'HDMI', 'public/images/1733065922_f26a33f221e81e76f3ec.jpg'),
(17, 'CCS00000017', NULL, NULL, '2024-12-01 23:12:37', 'Mac keyboard mouse', 'lightning-cable', NULL, NULL, NULL, 1, 'mac-keyboard-mouse', 'Mac keyboard mouse', 'public/images/1733065957_4f5f87d8189ddcd35bec.jpg'),
(18, 'CCS00000018', NULL, NULL, '2024-12-01 23:13:20', 'Wacom Tablet', 'pen', NULL, NULL, NULL, 1, 'wacom', 'Wacom Tablet', 'public/images/1733066000_5ea3bec6022c014fb816.jpg'),
(19, 'CCS00000019', NULL, NULL, '2024-12-01 23:13:38', 'Wacom Tablet New Generation', 'pen', NULL, NULL, NULL, 1, 'wacom', 'wacom', 'public/images/1733066018_00866777ab480c7c6e2a.jpg'),
(20, 'CCS00000020', NULL, NULL, '2024-12-01 23:14:18', 'Speaker Sound', 'none', NULL, NULL, NULL, 1, 'speaker', 'Speaker Sound', 'public/images/1733066058_7dac4344fd59f8ca9280.jpg'),
(21, 'CCS00000021', NULL, NULL, '2024-12-01 23:14:41', 'Webcam', 'none', NULL, NULL, NULL, 1, 'webcam', 'camera', 'public/images/1733066081_2b75ea7529267a2859ca.jpg'),
(22, 'CCS00000022', NULL, NULL, '2024-12-01 23:15:02', 'Extension Cord', 'none', NULL, NULL, NULL, 1, 'extension-cord', 'Extension Cord', 'public/images/1733066102_08edd2121f1d3587e894.jpg'),
(23, 'CCS00000023', NULL, NULL, '2024-12-01 23:15:30', 'Cable Crimping Tool', 'none', NULL, NULL, NULL, 1, 'cable-crimping-tool', 'Cable Crimping Tool', 'public/images/1733066130_59e85cabae67360a5bc5.jpg'),
(24, 'CCS00000024', 202400016, NULL, '2024-12-01 23:16:54', 'Cable Tester', 'none', '2024-12-01 15:27:31', NULL, NULL, 1, 'cable-tester', 'Cable Tester', 'public/images/1733066214_95bb52d6ec313c1842f8.jpg'),
(25, 'CCS00000025', NULL, NULL, '2024-12-01 23:17:04', 'Cable Tester', 'none', NULL, NULL, NULL, 1, 'cable-tester', 'Cable Tester', 'public/images/1733066224_e581d7e07cdf0d0cd12b.jpg'),
(26, 'CCS00000026', NULL, NULL, '2024-12-01 23:17:27', '1203 Key', 'none', NULL, NULL, NULL, 1, 'lab-room-key', '1203 Key', 'public/images/1733066247_05b70013cff41116f393.jpg'),
(27, 'CCS00000027', NULL, NULL, '2024-12-01 23:17:37', '1204 Key', 'none', NULL, NULL, NULL, 1, 'lab-room-key', '1204 Key', 'public/images/1733066257_b41bc5b5b17e55049f9b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `username` int(9) NOT NULL,
  `equipmentid` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `equipmentname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `type`, `username`, `equipmentid`, `category`, `equipmentname`) VALUES
(1, 'Borrowed', 202400016, 'CCS00000001', 'laptop', 'Dell Laptop'),
(2, 'Borrowed', 202400016, 'CCS00000013', 'hdmi', 'HDMI'),
(3, 'Borrowed', 202400016, 'CCS00000024', 'cable-tester', 'Cable Tester'),
(4, 'Returned', 202400016, 'CCS00000001', 'laptop', 'Dell Laptop'),
(5, 'Returned', 202400016, 'CCS00000013', 'hdmi', 'HDMI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` datetime NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `username` int(9) NOT NULL,
  `activationcode` varchar(100) NOT NULL,
  `resetcode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birthdate`, `password`, `status`, `role`, `email`, `datecreated`, `username`, `activationcode`, `resetcode`) VALUES
(5, 'Malvin Jaybert C. Gao', '2024-11-27 00:00:00', 'itsogao1', 1, 'itso', 'xarex61342@exoular.com', '2024-11-27 17:54:25', 202400001, '6746ec5122dab', '124qwrqrqw'),
(9, 'Ivan Baranda', '2003-07-12 00:00:00', '2003-07-12', 1, 'itso', 'ivanbaranda@email.com', '2024-12-01 22:58:17', 202400006, '674c7989094ee', NULL),
(10, 'Lance Aaron Sansaet', '2004-08-12 00:00:00', '2004-08-12', 1, 'itso', 'sansaet@email.com', '2024-12-01 22:59:27', 202400010, '674c79cf6035b', NULL),
(11, 'Josh Valerio ', '2003-05-20 00:00:00', '2003-05-20', 1, 'itso', 'valerio@email.com', '2024-12-01 23:00:29', 202400011, '674c7a0d0b203', NULL),
(12, 'Josh Doe', '2001-01-12 00:00:00', '2001-01-12', 0, 'associate', 'joshdoe@email.com', '2024-12-01 23:01:07', 202400012, '674c7a33abcbf', NULL),
(13, 'Aaron Doe', '2000-12-12 00:00:00', '2000-12-12', 0, 'associate', 'aarondoe@email.com', '2024-12-01 23:01:43', 202400013, '674c7a5781fd2', NULL),
(14, 'Aaron Doe', '2000-12-12 00:00:00', '2000-12-12', 1, 'associate', 'aarondoe@email.com', '2024-12-01 23:01:46', 202400014, '674c7a5a8dad8', NULL),
(15, 'Ivan Miranda', '2005-06-09 00:00:00', '2005-06-09', 1, 'associate', 'miranda@email.com', '2024-12-01 23:02:53', 202400015, '674c7a9d4b4a1', NULL),
(16, 'Hannah Montana', '2002-05-20 00:00:00', '123123123', 1, 'student', 'montana@email.com', '2024-12-01 23:03:25', 202400016, '674c7abd21ea5', NULL),
(17, 'Bamboo Rock', '2000-07-07 00:00:00', '2000-07-07', 1, 'student', 'bamboo@email.com', '2024-12-01 23:03:58', 202400017, '674c7aded29a0', NULL),
(18, 'Kai Cenat', '1996-03-15 00:00:00', '1996-03-15', 0, 'associate', 'kai@email.com', '2024-12-01 23:04:47', 202400018, '674c7b0f08905', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
