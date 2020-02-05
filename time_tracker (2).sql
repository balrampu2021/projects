-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 06:24 AM
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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `leave_start` varchar(100) NOT NULL,
  `leave_end` varchar(100) NOT NULL,
  `reason_for_leave` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `employee_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`id`, `name`, `email`, `leave_start`, `leave_end`, `reason_for_leave`, `status`, `employee_id`) VALUES
(1, 'user', ' user@12.com', '2020-01-29', '2020-01-30', 'sick leave', 'approve', 36),
(2, 'user', ' user@12.com', '2020-02-20', '2020-02-22', 'travel', 'reject', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracker`
--

CREATE TABLE `tbl_tracker` (
  `id` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tracker`
--

INSERT INTO `tbl_tracker` (`id`, `date`, `check_in`, `check_out`, `user_id`) VALUES
(6, '2020-01-27 05:13:42.139361', '10:43:25am', '10:43:42am', 30),
(7, '2020-01-27 06:29:17.170750', '11:21:04am', '11:59:17am', 30),
(8, '2020-01-27 06:29:27.538343', '11:59:23am', '11:59:27am', 32),
(9, '2020-01-27 06:29:48.854562', '11:59:45am', '11:59:48am', 33),
(10, '2020-01-27 06:41:22.389230', '11:59:57am', '12:11:22pm', 30),
(11, '2020-01-27 07:13:03.275955', '12:11:28pm', '12:43:03pm', 32),
(12, '2020-01-26 21:10:35.948853', '12:43:09pm', '02:40:35am', 32),
(13, '2020-01-26 21:24:57.755146', '02:40:42am', '02:54:57am', 30),
(14, '2020-01-26 21:37:42.440883', '02:55:16am', '03:07:42am', 30),
(15, '2020-01-26 21:49:33.462551', '03:19:25am', '03:19:33am', 30),
(16, '2020-01-26 21:49:42.955094', '03:19:39am', '03:19:42am', 32),
(17, '2020-01-26 21:50:10.900692', '03:19:52am', '03:20:10am', 32),
(18, '2020-01-26 21:55:08.272702', '03:20:15am', '03:25:08am', 30),
(19, '2020-01-26 22:00:18.108422', '03:25:20am', '03:30:18am', 32),
(20, '2020-01-26 22:49:11.934228', '04:16:32am', '04:19:11am', 32),
(21, '2020-01-26 22:53:31.692085', '04:19:17am', '04:23:31am', 30),
(22, '2020-01-26 23:39:10.123714', '04:48:01am', '05:09:10am', 32),
(23, '2020-01-26 23:39:24.848557', '05:09:20am', '05:09:24am', 33),
(24, '2020-01-26 23:39:48.096886', '05:09:30am', '05:09:48am', 30),
(25, '2020-01-26 23:58:24.898765', '05:23:52am', '05:28:24am', 32),
(26, '2020-01-26 23:59:26.433283', '05:28:29am', '05:29:26am', 33),
(27, '2020-01-27 00:03:14.485327', '05:29:31am', '05:33:14am', 30),
(28, '2020-01-27 00:24:02.351701', '05:36:22am', '05:54:02am', 34),
(29, '2020-01-27 00:24:17.308556', '05:54:07am', '05:54:17am', 33),
(30, '2020-01-27 00:30:48.063906', '05:59:53am', '06:00:48am', 34),
(31, '2020-01-27 03:06:27.554095', '06:21:44am', '08:36:27am', 34),
(32, '2020-01-27 03:34:29.279284', '09:00:49am', '09:04:29am', 34),
(33, '2020-01-27 03:35:26.532559', '09:04:34am', '09:05:26am', 33),
(34, '2020-01-27 03:36:18.772546', '09:06:15am', '09:06:18am', 34),
(35, '2020-01-27 03:37:40.941246', '09:07:38am', '09:07:40am', 34),
(36, '2020-01-27 03:37:48.302667', '09:07:38am', '09:07:48am', 34),
(37, '2020-01-27 03:37:49.654745', '09:07:38am', '09:07:49am', 34),
(38, '2020-01-27 03:37:53.462962', '09:07:38am', '09:07:53am', 34),
(39, '2020-01-27 03:37:59.398302', '09:07:38am', '09:07:59am', 34),
(40, '2020-01-27 18:29:09.020448', '11:49:30pm', '11:59:09pm', 35),
(41, '2020-01-27 18:29:57.438218', '11:49:30pm', '11:59:57pm', 35),
(42, '2020-01-27 18:30:14.780210', '11:49:30pm', '12:00:14am', 35),
(43, '2020-01-27 18:31:18.023828', '12:01:14am', '12:01:18am', 35),
(44, '2020-01-27 19:42:16.526399', '12:46:28am', '01:12:16am', 35),
(45, '2020-01-27 19:43:01.527973', '01:12:45am', '01:13:01am', 36),
(46, '2020-01-29 03:34:25.271670', '09:03:06am', '09:04:25am', 33),
(47, '2020-01-29 03:42:29.745381', '09:04:30am', '09:12:29am', 30),
(48, '2020-01-30 18:22:28.703022', '11:51:24pm', '11:52:28pm', 36),
(49, '2020-01-30 18:55:17.676641', '12:25:09am', '12:25:17am', 33),
(50, '2020-01-30 18:55:44.485174', '12:25:25am', '12:25:44am', 30),
(51, '2020-01-30 18:57:14.096300', '12:26:01am', '12:27:14am', 36),
(52, '2020-01-30 21:38:26.966556', '12:39:42am', '03:08:26am', 36),
(53, '2020-01-30 21:39:13.299206', '03:09:08am', '03:09:13am', 33),
(54, '2020-01-30 23:42:27.256116', '04:22:33am', '05:12:27am', 30),
(55, '2020-01-31 00:24:15.290568', '05:12:33am', '05:54:15am', 36),
(56, '2020-01-31 00:47:22.445909', '05:54:23am', '06:17:22am', 30),
(57, '2020-01-31 01:25:24.396429', '06:39:15am', '06:55:24am', 30),
(58, '2020-01-31 01:35:45.850974', '06:55:28am', '07:05:45am', 36),
(59, '2020-01-31 01:36:25.964268', '07:05:49am', '07:06:25am', 36),
(60, '2020-01-31 01:55:41.497361', '07:06:35am', '07:25:41am', 30),
(61, '2020-01-31 02:30:05.580420', '07:25:48am', '08:00:05am', 30),
(62, '2020-01-31 02:31:52.662544', '08:00:10am', '08:01:52am', 36),
(63, '2020-01-31 02:34:53.251874', '08:01:58am', '08:04:53am', 30),
(64, '2020-01-31 02:36:21.498922', '08:04:57am', '08:06:21am', 36),
(65, '2020-01-31 02:39:31.252774', '08:06:25am', '08:09:31am', 33),
(66, '2020-01-31 02:51:17.379162', '08:09:38am', '08:21:17am', 30),
(67, '2020-01-31 18:23:59.237005', '11:32:18pm', '11:53:59pm', 33),
(68, '2020-02-01 01:07:19.695245', '11:54:11pm', '06:37:19am', 36),
(69, '2020-02-01 02:43:57.100836', '07:47:42am', '08:13:57am', 33),
(70, '2020-02-01 02:44:05.208300', '08:14:01am', '08:14:05am', 33),
(71, '2020-02-01 02:44:31.618811', '08:14:11am', '08:14:31am', 30),
(72, '2020-02-03 05:01:15.026988', '10:30:18am', '10:31:15am', 36),
(73, '2020-02-03 05:49:21.712098', '11:14:14am', '11:19:21am', 36);

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
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `role_id`, `state_id`, `type_id`, `created_on`, `updated_on`, `created_by_id`, `image`) VALUES
(30, 'root', '63a9f0ea7bb98050796b649e85481845', 'root@123.com', 1, NULL, NULL, '2020-01-25 17:32:49', '2020-01-27 05:13:14', NULL, ''),
(32, 'balram11', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@12.com', 0, NULL, NULL, '2020-01-25 21:50:02', '2020-01-26 23:55:12', NULL, ''),
(33, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@123.com', 0, NULL, NULL, '2020-01-27 06:29:40', '2020-01-27 03:35:10', NULL, 'avatar-3.jpg'),
(35, 'ryan', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@12.com', 0, NULL, NULL, '2020-01-27 18:19:25', '2020-01-27 19:24:17', NULL, 'avatar-7.jpg'),
(36, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@12.com', 0, NULL, NULL, '2020-01-27 19:42:39', '2020-01-31 18:28:56', NULL, 'avatar-4.jpg'),
(37, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@123.comss', 0, NULL, NULL, '2020-02-01 02:17:35', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tracker`
--
ALTER TABLE `tbl_tracker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tracker`
--
ALTER TABLE `tbl_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
