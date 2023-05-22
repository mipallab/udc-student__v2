-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 10:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udc`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator_users`
--

CREATE TABLE `administrator_users` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(225) NOT NULL,
  `ad_role` varchar(220) NOT NULL,
  `ad_usersname` varchar(225) NOT NULL,
  `ad_email` varchar(225) NOT NULL,
  `ad_password` varchar(20) NOT NULL,
  `ad_photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator_users`
--

INSERT INTO `administrator_users` (`ad_id`, `ad_name`, `ad_role`, `ad_usersname`, `ad_email`, `ad_password`, `ad_photo`) VALUES
(1, 'Rahemul Islam Showrav', 'Administrator', 'ri_showrav', 'rishowrav@gmail.com', '123412', 'showrav.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `full_name_bn` varchar(500) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `mother_name` varchar(225) NOT NULL,
  `present_address` varchar(555) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `occupation` varchar(225) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `interested_subject` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `full_name_bn`, `father_name`, `mother_name`, `present_address`, `date_of_birth`, `age`, `occupation`, `phone`, `interested_subject`, `gender`, `email`, `username`, `password`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(22, 'Majadul Islam Pallab', 'মাজেদুল ইসলাম পল্লব', 'Mahfuzul Islam', 'Roushonara', '1650 Monohardi, Narshingdi', '1996-04-16', 27, 'student', '+8801713564842', 'song, tobol', 'male', 'pallab4842@gmail.com', 'pallab', 'Pallab@123', 'Screenshot_10.png', 1, 0, '2023-05-22 06:37:14', NULL),
(23, 'Rahemul Islam Showrav', 'রাহিমুল ইসলাম সৌরভ', 'Mahfuzul Islam', 'Shuly', '1650 Monohardi, Narshingdi', '1997-05-13', 26, 'Student', '+8801892493619', 'song, tobol', 'male', 'rishowrav@gmail.com', 'rishowrav', '1122', 'Screenshot_9.png', 1, 0, '2023-05-22 06:40:31', NULL),
(24, 'Rahemul Islam Showrav', 'রাহিমুল ইসলাম সৌরভ', 'Mahfuzul Islam', 'Shuly', '1650 Monohardi, Narshingdi', '1997-05-14', 26, 'Student', '+8801892493619', 'song, tobol', 'male', 'showrav@gmail.com', 'ri_showrav', '1122', 'Screenshot_5.png', 1, 0, '2023-05-22 06:44:00', NULL),
(25, 'Rahemul Islam Showrav', 'রাহিমুল ইসলাম সৌরভ', 'Mahfuzul Islam', 'Roushonara', '1650 Monohardi, Narshingdi', '1984-05-14', 39, 'Student', '+8801892493619', 'song, tobol', 'male', 'riashowrav@gmail.com', 'ri_showav', '1122', 'DSC_0006.JPG', 1, 0, '2023-05-22 06:48:42', NULL),
(26, 'Sristy Dey', 'সৃষ্টি দে', 'Probir Dey', 'Seuty Dey', 'Vill: Chandanbari, Pouroshovha: Monohardi, upozila: Monohardi, Dis: Narshingdi', '2022-04-20', 1, 'Student', '+8801892493619', 'song, dance', 'male', 'sristy@ami.com', 'sristy', '1122', 'sristy.png', 1, 0, '2023-05-22 06:52:04', NULL),
(27, 'Rahemul Islam Showrav', 'রাহিমুল ইসলাম সৌরভ', 'Mahfuzul Islam', 'Roushonara', '1650 Monohardi, Narshingdi', '1997-05-19', 26, 'Student', '012232142234', 'song, dance', 'male', 'rahemul@gmail.com', 'rahemul', '1122', 'batman.png', 1, 0, '2023-05-22 06:56:32', NULL),
(28, 'Surjo Shaha', 'সূর্য সাহা', 'Susan Shaha', 'Pore Banu', '1650 Hindu Para, Monohardi Narshingdi', '2010-11-10', 12, 'Student', '017263647281', 'song, tobol', 'male', 'surjo@gmail.com', 'surjo', '12312', 'surojo.png', 1, 0, '2023-05-22 07:10:08', NULL),
(29, 'Prgga Paromita Ray', 'প্রজ্ঞা পারমিতা রায়', 'Sukla Ray', 'Mommy Roy', 'Harordiya, Monohardi, Narshingdi, Dhaka, Banglasesh', '2016-05-12', 7, 'Student', '017263247281', 'song, dance, tobol', 'male', 'progga@prgga.me', 'progga', '123123', 'progga.png', 1, 0, '2023-05-22 07:15:24', NULL),
(30, 'Shobha dip', 'শুভ দিপ', 'Kajdfje Dip', 'Mouwe Dip', '1650 Monohardi, Narshingdi', '2017-05-17', 6, 'Student', '012232142234', 'song, dance, drowing, Acting, tobol', 'male', 'shobha@gmail.com', 'shovhaw', '1111', 'shobha.png', 1, 0, '2023-05-22 07:29:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator_users`
--
ALTER TABLE `administrator_users`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator_users`
--
ALTER TABLE `administrator_users`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
