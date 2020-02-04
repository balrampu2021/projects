-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 07:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `employ_table`
--

CREATE TABLE `employ_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `leave_in` varchar(100) NOT NULL,
  `leave_out` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `time` varchar(20) DEFAULT NULL,
  `ip_adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employ_table`
--

INSERT INTO `employ_table` (`id`, `username`, `email`, `department`, `leave_in`, `leave_out`, `reason`, `approve`, `user_id`, `time`, `ip_adress`) VALUES
(1, 'testt', 'test@gmail.com', 'BA', '2020-01-30', '2020-01-31', 'going out of station for one day', '', 26, '[\"0\",\"3\",\"49\"]', '192.168.1.13\r\n'),
(4, 'reena', 'reena@gmail.com', 'MCA', '2020-02-01', '2020-01-04', 'sick live', 'approve', 30, '[\"0\",\"3\",\"44\"]', '192.168.1.13\r\n'),
(10, 'hadiya', 'hadiya@gmail.com', 'MSE', '2020-01-31', '2020-02-07', 'sick leave', 'pending', 32, '00:00:00.000000', ''),
(13, 'feroza', 'feroza@gmail.com', 'BCA', '2020-02-04', '2020-02-04', 'out of station', 'pending', 33, '\"0\",\"0\",03', ''),
(14, 'hadiya', 'hadiya@gmail.com', 'MSE', '2020-02-11', '2020-02-19', 'short leave', 'pending', 32, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE `table_login` (
  `id` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_login`
--

INSERT INTO `table_login` (`id`, `date`, `check_in`, `check_out`, `user_id`) VALUES
(1, '2020-01-27 05:06:38.741390', '10:34:43am', '10:36:38am', '23'),
(2, '2020-01-27 05:09:00.130476', '10:34:43am', '10:39:00am', '23'),
(3, '2020-01-27 05:09:25.635936', '10:39:23am', '10:39:25am', '23'),
(4, '2020-01-27 05:13:44.273729', '10:43:41am', '10:43:44am', '26'),
(5, '2020-01-27 05:27:03.767457', '10:56:42am', '10:57:03am', '26'),
(6, '2020-01-27 05:27:11.780915', '10:57:09am', '10:57:11am', '26'),
(7, '2020-01-27 05:28:48.046421', '10:58:45am', '10:58:48am', '26'),
(8, '2020-01-27 11:49:27.970749', '03:00:48pm', '05:19:27pm', '26'),
(9, '2020-01-28 02:03:18.341208', '05:53:15pm', '07:33:18am', '26'),
(10, '2020-01-28 02:03:36.331237', '07:33:28am', '07:33:36am', '26'),
(11, '2020-01-28 18:12:46.461624', '11:40:57pm', '11:42:46pm', '23'),
(12, '2020-01-28 18:27:07.741887', '11:57:04pm', '11:57:07pm', '26'),
(13, '2020-02-04 05:46:19.502554', '11:12:55am', '11:16:19am', '26'),
(14, '2020-02-04 06:03:45.960408', '11:21:45am', '11:33:45am', '32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `state_id` tinyint(1) DEFAULT NULL,
  `type_id` tinyint(1) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by_id` int(11) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `role_id`, `state_id`, `type_id`, `created_on`, `updated_on`, `created_by_id`, `image`, `department`) VALUES
(23, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 1, NULL, NULL, '2020-01-25 02:00:06', '2020-01-29 18:51:39', NULL, 'avatar-1.jpg', 'admin'),
(26, 'testt', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', 0, NULL, NULL, '2020-01-27 05:13:32', '2020-01-30 18:13:36', NULL, 'avatar-3.jpg', 'BA'),
(27, 'anu', 'e2973de5a5ea163db0df912cce00b41b', 'anu@gmail.com', 0, NULL, NULL, '2020-01-28 02:08:38', '2020-01-30 00:16:06', NULL, 'avatar-8.jpg', 'B.tech'),
(28, 'rema', 'a741192cd2307378353aff6bcc3acd46', 'rema@gmail.com', 0, NULL, NULL, '2020-01-29 18:58:44', '2020-02-01 00:15:16', NULL, 'avatar-0.jpg', 'MCA'),
(29, 'mamta', '565fdb43462efef831c018f2e91cecbb', 'mamta@gmail.com', 0, NULL, NULL, '2020-01-29 18:59:03', NULL, NULL, 'avatar-11.jpg', 'B.tech'),
(30, 'reena', 'ed1d2e833c974ea3a09e5aa3cf9e49f8', 'reena@gmail.com', 0, NULL, NULL, '2020-01-29 19:00:00', NULL, NULL, 'avatar-3.jpg', 'MCA'),
(32, 'hadiya', 'a741192cd2307378353aff6bcc3acd46', 'hadiya@gmail.com', 0, NULL, NULL, '2020-02-01 02:30:02', '2020-02-01 02:30:25', NULL, 'avatar-9.jpg', 'MSE'),
(33, 'feroza', 'e2973de5a5ea163db0df912cce00b41b', 'feroza@gmail.com', 0, NULL, NULL, '2020-02-04 18:29:37', '2020-02-04 18:30:04', NULL, 'avatar-8.jpg', 'BCA'),
(34, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@12.com', 0, NULL, NULL, '2020-02-04 06:04:24', NULL, NULL, '', 'Web Developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employ_table`
--
ALTER TABLE `employ_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_login`
--
ALTER TABLE `table_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employ_table`
--
ALTER TABLE `employ_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table_login`
--
ALTER TABLE `table_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
