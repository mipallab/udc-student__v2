-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 05:12 PM
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
-- Table structure for table `payment_info2020`
--

CREATE TABLE `payment_info2020` (
  `id` int(11) NOT NULL,
  `stu-id` varchar(12) NOT NULL,
  `year` int(4) NOT NULL,
  `january` int(11) DEFAULT NULL,
  `february` int(11) DEFAULT NULL,
  `march` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `june` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `august` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `october` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `december` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_info2020`
--

INSERT INTO `payment_info2020` (`id`, `stu-id`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
(1, 'udc-stu-0015', 2020, 500, 500, 500, 500, NULL, 500, NULL, NULL, 500, 500, 500, 200),
(2, 'udc-stu-0014', 2020, 500, NULL, NULL, NULL, 500, NULL, NULL, NULL, NULL, 500, NULL, 500);

-- --------------------------------------------------------

--
-- Table structure for table `payment_info2021`
--

CREATE TABLE `payment_info2021` (
  `id` int(11) NOT NULL,
  `stu-id` varchar(12) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `january` int(11) DEFAULT NULL,
  `february` int(11) DEFAULT NULL,
  `march` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `june` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `august` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `october` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `december` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_info2021`
--

INSERT INTO `payment_info2021` (`id`, `stu-id`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
(1, 'udc-stu-0015', 2021, 500, 300, 500, 500, NULL, 500, NULL, 320, 500, 700, 1000, 200),
(2, 'udc-stu-0014', 2021, 500, 500, 600, 700, 300, 500, 500, 1000, 800, 600, 500, 600);

-- --------------------------------------------------------

--
-- Table structure for table `payment_info2022`
--

CREATE TABLE `payment_info2022` (
  `id` int(11) NOT NULL,
  `stu-id` varchar(12) NOT NULL,
  `year` int(11) NOT NULL,
  `january` int(11) DEFAULT NULL,
  `february` int(11) DEFAULT NULL,
  `march` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `june` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `august` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `october` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `december` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_info2022`
--

INSERT INTO `payment_info2022` (`id`, `stu-id`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
(1, 'udc-stu-0015', 2022, 400, 400, 400, 400, 400, 400, 600, 1000, 1000, 1000, 1000, 1000),
(2, 'udc-stu-0014', 2022, 1000, 1000, 1000, 2000, 2000, 1000, 1200, 1500, 1500, 1500, 1500, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `payment_info2023`
--

CREATE TABLE `payment_info2023` (
  `id` int(11) NOT NULL,
  `stu-id` varchar(12) NOT NULL,
  `year` int(11) NOT NULL,
  `january` int(11) DEFAULT NULL,
  `february` int(11) DEFAULT NULL,
  `march` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `june` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `august` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `october` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `december` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_info2023`
--

INSERT INTO `payment_info2023` (`id`, `stu-id`, `year`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
(1, 'udc-stu-0015', 2023, 1000, 2000, 2000, 2000, 2000, 2000, 1000, 1000, 1000, 1500, 1500, 1500),
(2, 'udc-stu-0014', 2023, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500);

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
(47, 'udc-stu-0002', 'Majadul Islam Pallab', 'মাজেদুল ইসলাম পল্লব', 'Mahfuzul Islam', 'Roushonara', '1650 Monohardi, Narshingdi', '1996-12-28', 26, 'Student', '+8801713564842', 'song, dance, tobol', 'male', 'pallab4842@gmail.com', 'pallab', 'Pallab@123', 'Screenshot_10.png', 1, 0, '2023-05-28 14:35:02', NULL),
(48, 'udc-stu-0003', 'Nishad Afrin Trisha', 'নিসাদ আফরিন তৃসা', 'Mahfuzul Islam', 'Roushonara', 'Monohardi, Narshingdi', '2008-01-01', 15, 'Student', '+8801713564842', 'song, dance, drowing', 'female', 'trisha@gmail.com', 'trisha', '1212', 'sristy.png', 1, 0, '2023-05-29 16:21:20', NULL),
(49, 'udc-stu-0004', 'Sristy Dey', 'সৃষ্টি দে', 'Abbo Dey', 'Mommy Dey', 'Vill: Chandanbari, Pouroshovha: Monohardi, upozila: Monohardi, Dis: Narshingdi', '2010-05-04', 13, 'Student', '015345345344', 'song, dance, drowing', 'female', 'sristy@ami.com', 'sristy', '123', 'sristy1.png', 1, 0, '2023-05-29 16:23:03', NULL),
(50, 'udc-stu-0005', 'Rahemul Islam Showrav', 'রাহিমুল ইসলাম সৌরভ', 'Mahfuzul Islam', 'Roushonara', '1650 Monohardi, Narshingdi', '1997-05-07', 26, 'Student', '+8801892493619', 'tobol', 'male', 'rishowrav@gmail.com', 'showrav', '1111', 'showrav1.png', 1, 0, '2023-05-29 16:25:16', NULL),
(51, 'udc-stu-0006', 'Pornota Mondol', 'পূর্ণতা মন্ডল', 'Ekabor Mondol', 'Monika Mondol', '1650 , Bus stand, Monohardi Narshingdi', '2018-02-06', 5, 'Student', '+8801714893232', 'song, dance', 'female', 'pornota@gmail.com', 'pornota', '1111', 'pornota2.png', 1, 0, '2023-05-29 16:27:58', NULL),
(52, 'udc-stu-0007', 'Tasfuq Hosen', 'তাসফিক হোসেন', 'Dola Hosen', 'Moina Akter', 'Ashadnorgor, Noluya, Monohardi, Narshingdi', '2013-05-17', 10, 'Student', '+8801734820523', 'song, drowing, tobol', 'male', 'tasfiq@gmail.com', 'tasfiq', '1111', 'tashfiq.png', 1, 0, '2023-05-29 16:31:48', NULL),
(53, 'udc-stu-0008', 'Tora Rani Dash', 'তোড়া রাণী দাস', 'Kamsu Dash', 'Kamona Dash', 'Hatirdiya, Monohardi, Narshingdi', '2010-08-31', 12, 'Student', '+8801811493619', 'song, dance, recitation', 'female', 'tora@gmail.com', 'tora', '11', 'tora.png', 1, 0, '2023-05-29 16:35:00', NULL),
(54, 'udc-stu-0009', 'Shovha Dip', 'শুভ দিপ', 'Totun Dip', 'Asma Dip', '1650 Monohardi, Narshingdi', '2015-05-12', 8, 'Student', '+8801892493543', 'recitation, tobol', 'male', 'shobha@gmail.com', 'shobha', '123', 'shobha.png', 1, 0, '2023-05-29 16:38:21', NULL),
(55, 'udc-stu-0001', 'Surjo Shaha', 'সূর্য সাহা', 'Susan Shaha', 'Monika Shaha', 'Hindu Para, Monohardi Narshingdi', '2010-01-08', 13, 'Student', '+8801713564223', 'tobol', 'male', 'surjo@gmail.com', 'surjo', '2222', 'surojo.png', 1, 0, '2023-05-29 16:41:05', NULL),
(56, 'udc-stu-0000', 'Prgga Paromita Ray', 'প্রজ্ঞা পারমিতা রায়', 'Pnaal Ray', 'Gita Ray', 'Hatirdiya, Monohardi, Narshingdi', '2015-11-30', 7, 'Student', '+8801534534534', 'dance, recitation, drowing', 'female', 'progga@prgga.me', 'progga', '3333', 'progga.png', 1, 0, '2023-05-29 16:44:08', NULL),
(57, 'udc-stu-0010', 'Ankita Modok', 'অঙকিতা মোদক', 'Abbas Modok', 'Kseo Modok', 'Chalakchor, Monohardi, Narshingdi', '2012-02-02', 11, 'Student', '+8801223214223', 'recitation, drowing, acting', 'female', 'ankita@gmail.com', 'ankita', 'asdfg', 'ankita.png', 1, 0, '2023-05-29 16:48:08', NULL),
(58, 'udc-stu-0011', 'Potul Kamrakar', 'পুতুল কর্মকার', 'Joti Kamrakar', 'Sre Kamrakar', 'Hatirdiya, Monohardi, Narshingdi', '2016-05-09', 7, 'Student', '+8801545345344', 'drowing, acting', 'female', 'potul@gmail.com', 'potul ', ';lkj', 'potul.png', 1, 0, '2023-05-29 16:51:50', NULL),
(59, 'udc-stu-0012', 'Totul Kamrakar', 'তুতুল কর্মকার', 'Joti Kamrakar', 'Sre Kamrakar', 'Hatirdiya, Monohardi, Narshingdi', '2017-08-07', 5, 'Student', '+8801892113619', 'recitation, tobol', 'female', 'totul@gmail.com', 'totul', 'bbbb', 'totul.png', 1, 0, '2023-05-29 16:53:43', NULL),
(60, 'udc-stu-0013', 'Aorpa Shaha', 'অর্পা সাহা', 'Abbas Shaha', 'Srity Shaha', 'Hindu Para, Monohardi Narshingdi', '2008-10-02', 14, 'Student', '+8801714893284', 'tobol', 'female', 'arpashaha@gmail.com', 'arpa', 'gggg', 'aorpa.png', 1, 0, '2023-05-29 16:56:52', NULL),
(61, 'udc-stu-0014', 'Srayashe Rani Dey', 'শ্রেয়সী রাণী দে', 'Apu Dey', 'Priyanka Rani Dey', 'Hindu Para, Monohardi Narshingdi', '2010-05-04', 13, 'student', '+88 923293852', 'dance', 'female', 'srayashee@gmail.com', 'srayase', '1111', 'srayoshe.png', 1, 0, '2023-05-31 16:39:55', NULL),
(62, 'udc-stu-0015', 'Turba Rani Kar', 'তুর্বা রাণী কর', 'Sonjit Chandra Kor', 'Ripa Rani Kar', 'Kocherchor, Hatirdiya, Monohardi, Narshingdi', '1993-05-16', 30, 'job-holder', '+8801892493619', 'dance, drowing', 'female', 'turba@gmail.com', 'turba', '1111', 'trina.png', 1, 0, '2023-05-31 16:43:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator_users`
--
ALTER TABLE `administrator_users`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `payment_info2020`
--
ALTER TABLE `payment_info2020`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info2021`
--
ALTER TABLE `payment_info2021`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info2022`
--
ALTER TABLE `payment_info2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info2023`
--
ALTER TABLE `payment_info2023`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `payment_info2020`
--
ALTER TABLE `payment_info2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_info2021`
--
ALTER TABLE `payment_info2021`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_info2022`
--
ALTER TABLE `payment_info2022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_info2023`
--
ALTER TABLE `payment_info2023`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
