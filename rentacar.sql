-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 11:28 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `vehicle` varchar(30) NOT NULL,
  `vehicle_id` varchar(20) NOT NULL,
  `plan` int(11) NOT NULL,
  `name` text NOT NULL,
  `pickuplocation` text NOT NULL,
  `pickuptimestamp` timestamp NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` text NOT NULL,
  `ordertimestamp` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `user`, `vehicle`, `vehicle_id`, `plan`, `name`, `pickuplocation`, `pickuptimestamp`, `email`, `contact`, `ordertimestamp`) VALUES
(1, 'x', 'x', 'x', 0, 'x', 'x', '2017-03-05 13:20:19', 'x', 'x', '2017-03-05 13:20:19'),
(2, 'x', 'x', 'x', 0, 'x', 'x', '2017-03-05 18:05:54', 'x', 'x', '2017-03-05 18:05:54'),
(3, 'x', 'x', 'x', 0, 'x', 'x', '2017-03-05 18:07:20', 'x', 'x', '2017-03-05 18:07:20'),
(4, 'x', 'x', 'x', 0, 'x', 'x', '2017-03-06 18:31:57', 'x', 'x', '2017-03-06 18:31:57'),
(5, 'x', 'x', 'x', 0, 'x', 'x', '2017-03-07 13:57:11', 'x', 'x', '2017-03-07 13:57:11'),
(6, 'Mohammad Saqib', 'SUV 123', 'UP32DJ2371', 0, 'Mohammad Saqib', 'DELHI', '2017-03-07 14:46:25', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 14:46:25'),
(7, 'Mohammad Saqib', 'SUV 123', 'UP32DJ2371', 0, 'Mohammad Saqib', 'DELHI', '2017-03-18 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 14:49:41'),
(8, 'Mohammad Saqib', 'SUV 123', 'UP32DJ2371', 0, 'Mohammad Saqib', 'ALIGARH', '2017-03-16 15:33:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 14:58:57'),
(9, 'Mohammad Saqib', 'Audi 999', '', 3, 'Mohammad Saqib', 'LUCKNOW', '2017-03-09 00:40:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 19:33:55'),
(10, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 3, 'Mohammad Saqib', 'LUCKNOW', '2017-03-09 00:40:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 19:35:25'),
(11, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 3, 'Mohammad Saqib', 'LUCKNOW', '2017-03-09 00:40:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 19:36:01'),
(12, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 3, 'Mohammad Saqib', 'LUCKNOW', '2017-03-09 00:40:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 19:37:19'),
(13, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 3, 'Mohammad Saqib', 'LUCKNOW', '2017-03-09 00:40:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 19:38:41'),
(14, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 3, 'Mohammad Saqib', 'LUCKNOW', '2017-03-09 00:40:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-07 19:39:08'),
(15, 'Mohammad Saqib', 'Hyundai PQR', 'UP81BJ1234', 2, 'Mohammad Saqib', 'MEERUT', '2017-03-15 14:36:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 08:26:18'),
(16, 'Mohammad Saqib', 'Audi 999', '', 3, 'Mohammad Saqib', 'JHNASI', '2017-03-16 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:15:27'),
(17, 'Mohammad Saqib', 'Audi 999', '', 0, 'Mohammad Saqib', 'JHNASI', '2017-03-16 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:19:49'),
(18, 'Mohammad Saqib', 'Hyundai PQR', 'UP12AA4321', 1, 'Mohammad Saqib', 'JHNASI', '2017-03-16 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:24:25'),
(19, 'Mohammad Saqib', 'SUV 123', 'UP32DJ2371', 0, 'Mohammad Saqib', 'JHNASI', '2017-03-16 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:27:05'),
(20, 'Mohammad Saqib', 'SUV 123', 'UP32AY4642', 0, 'Mohammad Saqib', 'JHNASI', '2017-03-16 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:33:08'),
(21, 'Mohammad Saqib', 'Mahindra ABC', 'UP81AB1234', 1, 'Mohammad Saqib', 'JHNASI', '2017-03-16 16:31:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:35:19'),
(22, 'Mohammad Saqib', 'SUV 123', 'UP32DJ2371', 2, 'Mohammad Saqib', 'JHANSI', '2017-03-31 14:36:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:37:21'),
(23, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 0, 'Mohammad Saqib', 'LUCKNOW', '2017-03-17 21:15:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:39:01'),
(24, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 0, 'Mohammad Saqib', 'LUCKNOW', '2017-03-17 21:15:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:40:44'),
(25, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 0, 'Mohammad Saqib', 'LUCKNOW', '2017-03-17 21:15:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:42:04'),
(26, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 1, 'Mohammad Saqib', 'LUCKNOW', '2017-03-17 21:15:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:44:11'),
(27, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 0, 'Mohammad Saqib', 'LUCKNOW', '2017-03-17 21:15:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:46:53'),
(28, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 1, 'Mohammad Saqib', 'OOTY', '2017-03-01 14:33:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:47:55'),
(29, 'Mohammad Saqib', 'SUV 123', '', 2, 'Mohammad Saqib', 'OOTY', '2017-03-01 14:33:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-08 10:49:16'),
(30, 'Mohammad Saqib', 'SUV 123', 'UP32DJ2371', 1, 'Mohammad Saqib', 'NOIDA', '2017-03-17 23:30:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-09 07:23:30'),
(31, 'Mohammad Saqib', 'Audi 999', 'AYYYY', 1, 'Mohammad Saqib', 'DELHI', '2017-03-10 01:35:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-09 08:53:13'),
(32, 'Mohammad Saqib', 'SUV 123', 'UP32AY4642', 1, 'Mohammad Saqib', 'DELHI', '2017-03-24 23:27:00', 'msaqib4203@gmail.com', '9690296844', '2017-03-09 08:55:22'),
(33, 'Mohammad Saqib', 'Audi 999', '', 1, 'Mohammad Saqib', 'LUCKNOW', '2017-06-07 09:30:00', 'dobjqo@gmail.com', '8052889228', '2017-06-05 15:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `mobile_number`, `email_id`, `password`) VALUES
('msaqib', 'Mohammad Saqib', '9690296844', 'msaqib4203@gmail.com', 'pass123'),
('msaqiba', 'mha', '98765', 'kjgsldl@gm.com', 'pass123'),
('msa', 'MOhammad Aqib', '12345678', '1234@gmail.com', 'pass123123'),
('admin', ',nidnak', '12335654646', 'dobjqo@gmail.com', 'qwerty123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `name` varchar(50) NOT NULL,
  `vehicle_no` varchar(10) NOT NULL,
  `booked_to` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`name`, `vehicle_no`, `booked_to`) VALUES
('SUV 123', 'UP32DJ2371', 'msaqib'),
('MAHINDRA ABC', 'UP81AB1234', 'msaqib'),
('SUV 123', 'UP32AY4642', 'msaqib'),
('HYUNDAI PQR', 'UP81BJ1234', 'msaqib'),
('HYUNDAI PQR', 'UP12AA4321', 'msaqib'),
('Audi 999', 'AYYYY', 'msaqib');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `name` varchar(50) NOT NULL,
  `seating_capacity` int(10) NOT NULL,
  `image_url` varchar(50) NOT NULL,
  `counts` int(11) NOT NULL,
  `perday` int(10) NOT NULL,
  `perhour` int(10) NOT NULL,
  `perkm` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`name`, `seating_capacity`, `image_url`, `counts`, `perday`, `perhour`, `perkm`) VALUES
('SUV 123', 6, 'showcase/a.jpg', 0, 5000, 300, 50),
('Mahindra ABC', 5, 'showcase/b.jpg', 0, 3500, 250, 45),
('Hyundai PQR', 4, 'showcase/c.jpg', 0, 3000, 250, 40),
('Audi 999', 2, 'showcase/d.jpg', 0, 10000, 2000, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_no`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
