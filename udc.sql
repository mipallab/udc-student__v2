-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:35 PM
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
(1, 'Rahemul Islam Showrav', 'administrator', 'ri_showrav', 'rishowrav@gmail.com', '123412', 'showrav.png'),
(2, 'Majadul Islam', 'administrator', 'pallab12', 'pallab4842@gamil.com', '12342', 'pallab.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `stu_id` varchar(12) DEFAULT 'udc-stu-',
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

INSERT INTO `students` (`id`, `stu_id`, `full_name`, `full_name_bn`, `father_name`, `mother_name`, `present_address`, `date_of_birth`, `age`, `occupation`, `phone`, `interested_subject`, `gender`, `email`, `username`, `password`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(47, 'udc-stu-0002', 'Majadul Islam Pallab', 'মাজেদুল ইসলাম পল্লব', 'Mahfuzul Islam', 'Roushonara', '1650 Monohardi, Narshingdi', '1996-12-28', 26, 'Student', '+8801713564842', 'tobol', 'male', 'pallab4842@gmail.com', 'pallab', 'Pallab@123', 'Screenshot_10.png', 1, 0, '2023-05-28 14:35:02', NULL);

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
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
