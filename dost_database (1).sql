-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 08:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dost_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliation`
--

CREATE TABLE `affiliation` (
  `affiliation_id` int(11) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `affiliation_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_id` int(11) NOT NULL,
  `attendee_id` int(255) NOT NULL,
  `ea_id` int(255) NOT NULL,
  `event_id` int(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `attendee_id` int(11) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `sex` text NOT NULL,
  `uname` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ea`
--

CREATE TABLE `ea` (
  `EA_id` int(11) NOT NULL,
  `event_id` int(255) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `ea_name` varchar(255) NOT NULL,
  `ea_description` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Events_id` int(11) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `Events_description` varchar(255) NOT NULL,
  `Venue` varchar(255) NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iq`
--

CREATE TABLE `iq` (
  `iq_id` int(11) NOT NULL,
  `ea_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `time_limit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-03-13-062426', 'App\\Database\\Migrations\\Attendees', 'default', 'App', 1678939169, 1),
(2, '2023-03-13-070937', 'App\\Database\\Migrations\\affiliation', 'default', 'App', 1678939170, 1),
(3, '2023-03-13-075612', 'App\\Database\\Migrations\\scores', 'default', 'App', 1678939171, 1),
(4, '2023-03-13-080611', 'App\\Database\\Migrations\\questions', 'default', 'App', 1678939172, 1),
(5, '2023-03-13-081352', 'App\\Database\\Migrations\\iq', 'default', 'App', 1678939172, 1),
(6, '2023-03-13-081844', 'App\\Database\\Migrations\\EA', 'default', 'App', 1678939174, 1),
(7, '2023-03-14-074802', 'App\\Database\\Migrations\\Uzers', 'default', 'App', 1678939177, 1),
(8, '2023-03-15-025504', 'App\\Database\\Migrations\\Events', 'default', 'App', 1678939179, 1),
(9, '2023-03-15-032731', 'App\\Database\\Migrations\\Attendance', 'default', 'App', 1678939181, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questions_id` int(11) NOT NULL,
  `iq_id` int(2) NOT NULL,
  `question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `choice4` text NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `scores_id` int(11) NOT NULL,
  `attendance_id` int(11) NOT NULL,
  `iq_id` int(2) NOT NULL,
  `datetime_start` datetime NOT NULL,
  `datetime_end` datetime NOT NULL,
  `scores` int(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uzers`
--

CREATE TABLE `uzers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliation`
--
ALTER TABLE `affiliation`
  ADD PRIMARY KEY (`affiliation_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Attendance_id`);

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`attendee_id`);

--
-- Indexes for table `ea`
--
ALTER TABLE `ea`
  ADD PRIMARY KEY (`EA_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Events_id`);

--
-- Indexes for table `iq`
--
ALTER TABLE `iq`
  ADD PRIMARY KEY (`iq_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questions_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`scores_id`);

--
-- Indexes for table `uzers`
--
ALTER TABLE `uzers`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliation`
--
ALTER TABLE `affiliation`
  MODIFY `affiliation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `attendee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ea`
--
ALTER TABLE `ea`
  MODIFY `EA_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Events_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iq`
--
ALTER TABLE `iq`
  MODIFY `iq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questions_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `scores_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uzers`
--
ALTER TABLE `uzers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
