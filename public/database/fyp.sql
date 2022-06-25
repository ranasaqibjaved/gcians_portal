-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 08:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_access`
--

CREATE TABLE `admin_access` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `email`, `subject_title`, `teacher_name`, `semester`, `date`, `present`, `created_at`, `updated_at`) VALUES
(1, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-22', '1', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(2, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-22', '0', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(3, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-22', '1', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(4, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-22', '0', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(5, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-22', '1', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(6, 'saqib@gmail.com', 'Fundamental of Data Mining 3(3-0)', 'Mr. Irfan Khan', '8', '2022-02-22', '1', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(7, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-22', '1', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(8, 'saqib@gmail.com', 'Final Year Project  6(0-6)', 'Mr. Umer Sarwar', '8', '2022-02-22', '1', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(9, 'saqib@gmail.com', 'Final Year Project  6(0-6)', 'Mr. Umer Sarwar', '8', '2022-02-22', '0', '2022-02-21 19:00:00', '2022-02-21 19:00:00'),
(10, 'new@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-02-04', '1', '2022-02-23 11:12:03', '2022-02-23 11:12:03'),
(11, 'new@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-02-23', '0', '2022-02-23 11:12:34', '2022-02-23 11:12:34'),
(12, 'yasir@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-02-23', '1', '2022-02-23 11:19:36', '2022-02-23 11:19:36'),
(13, 'new@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-02-23', '0', '2022-02-23 11:19:58', '2022-02-23 11:19:58'),
(14, 'yasir@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-01-01', '0', '2022-02-23 11:26:25', '2022-02-23 11:26:25'),
(15, 'yasir@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', '1', '2022-02-23', '0', '2022-02-23 11:52:25', '2022-02-23 11:52:25'),
(16, 'yasir@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', '1', '2022-02-23', '0', '2022-02-23 11:52:42', '2022-02-23 11:52:42'),
(17, 'olo@gmail.com', 'Fundamental of Data Mining 3(3-0)', 'Mr. Irfan Khan', '8', '2022-02-23', '0', '2022-02-23 11:55:16', '2022-02-23 11:55:16'),
(18, 'javed@gmail.com', 'Human Resource Management  3(3-0)', 'Mr. Allah Ditta', '4', '2022-02-23', '1', '2022-02-23 12:06:15', '2022-02-23 12:06:15'),
(19, 'javed@gmail.com', 'Human Resource Management  3(3-0)', 'Mr. Allah Ditta', '4', '2022-02-23', '1', '2022-02-23 12:07:47', '2022-02-23 12:07:47'),
(20, 'javed@gmail.com', 'Human Resource Management  3(3-0)', 'Mr. Allah Ditta', '4', '2022-02-23', '1', '2022-02-23 12:10:11', '2022-02-23 12:10:11'),
(21, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-23', '0', '2022-02-23 12:47:52', '2022-02-23 12:47:52'),
(22, 'olo@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-23', '0', '2022-02-23 12:48:26', '2022-02-23 12:48:26'),
(23, 'student@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-23', '0', '2022-02-23 12:49:11', '2022-02-23 12:49:11'),
(24, 'javed@gmail.com', 'Human Resource Management  3(3-0)', 'Mr. Allah Ditta', '4', '2022-02-23', '0', '2022-02-23 12:56:48', '2022-02-23 12:56:48'),
(25, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-23', '0', '2022-02-23 12:56:55', '2022-02-23 12:56:55'),
(26, 'javed@gmail.com', 'Human Resource Management  3(3-0)', 'Mr. Allah Ditta', '4', '2022-02-23', '0', '2022-02-23 12:57:13', '2022-02-23 12:57:13'),
(27, 'olo@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Allah Ditta', '8', '2022-02-23', '1', '2022-02-23 12:57:48', '2022-02-23 12:57:48'),
(28, 'saqib@gmail.com', 'Fundamental of Data Mining 3(3-0)', 'Mr. Irfan Khan', '8', '2022-02-02', '1', '2022-02-23 18:20:03', '2022-02-23 18:20:03'),
(29, 'sem1@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-03-02', '1', '2022-03-02 07:22:13', '2022-03-02 07:22:13'),
(30, 'sem1@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-03-01', '0', '2022-03-02 07:22:38', '2022-03-02 07:22:38'),
(31, 'sem1@gmail.com', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-02-25', '0', '2022-03-02 07:23:36', '2022-03-02 07:23:36'),
(32, 'haroon@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', '3', '2022-03-07', '1', '2022-03-07 17:19:51', '2022-03-07 17:19:51'),
(33, 'haroon@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', '3', '2022-03-06', '0', '2022-03-07 17:20:20', '2022-03-07 17:20:20'),
(34, 'haroon@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', '3', '2022-03-02', '1', '2022-03-07 17:20:55', '2022-03-07 17:20:55'),
(35, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Mr. Irfan Khan', '8', '2022-02-02', '1', '2022-03-09 06:52:22', '2022-03-09 06:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fathername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofberth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fathername`, `telephone`, `email`, `dateofberth`, `homeaddress`, `gender`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sadd', '2312312', 'gfsdfaf@sdf.dfs', '2022-01-05', 'adssadasd', 'on', 'dsadas', '2022-01-07 13:12:16', '2022-01-07 13:12:16'),
(2, 'sanu ki ka abba', '0302-6321321', 'sa@gmail.com', '2022-01-12', 'kamalia', 'on', 'satisfied', '2022-01-07 13:19:48', '2022-01-07 13:19:48'),
(3, 'dsa', '312', 'das', '2022-01-05', 'das', 'on', 'dsa', '2022-01-07 13:53:52', '2022-01-07 13:53:52'),
(4, 'Muhammad Javed Iqbal', '0302-6378563', 'saqib@gmail.com', '1997-08-26', 'Zeeshan Colony Kamalia ,T.T.Singh', 'male', 'not i am notsatisfied', '2022-01-07 16:54:50', '2022-01-07 16:54:50'),
(5, 'Iqbal Ahmad', '0303-2344135', 'yasir@gmail.com', '1998-05-11', 'Shah coat faisalabad', 'Male', 'No, i am not satisfied', '2022-01-11 11:06:23', '2022-01-11 11:06:23'),
(6, 'Mr. father sem1', '0347-1481947', 'sem1@gmail.com', '1999-10-09', 'Faisalabad', 'Male', 'yeap i am very very satisfied', '2022-03-02 07:34:16', '2022-03-02 07:34:16'),
(11, 'Saqib Javed', '0302-1212144', 'admin@gmail.com', '2021-11-29', 'Faisalabad', 'Male', 'Yeap', '2022-03-02 19:03:02', '2022-03-02 19:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `digital_liberaries`
--

CREATE TABLE `digital_liberaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `extention` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `digital_liberaries`
--

INSERT INTO `digital_liberaries` (`id`, `name`, `description`, `extention`, `file_path`, `created_at`, `updated_at`) VALUES
(1, '1646243908_Java Questions.pdf', 'Java Question on variables. This file is created By Mr. Murad Khan and delivered to bs cs 7th class', 'pdf', '/storage/DIGITAL_LIBRARY/DIGITAL_LIBRARY/1646243908_Java Questions.pdf', '2022-03-02 17:58:28', '2022-03-02 17:58:28'),
(2, '1646244049_lec7-MVC (1).pptx', 'Modal View Controller Information created by Mr. Murad Khan and delivered to class Bs Cs 3rd', 'pptx', '/storage/DIGITAL_LIBRARY/DIGITAL_LIBRARY/1646244049_lec7-MVC (1).pptx', '2022-03-02 18:00:50', '2022-03-02 18:00:50'),
(3, '1646244112_python questions.pdf', 'Python Questions', 'pdf', '/storage/DIGITAL_LIBRARY/DIGITAL_LIBRARY/1646244111_python questions.pdf', '2022-03-02 18:01:52', '2022-03-02 18:01:52'),
(5, '1646244529_java slides.zip', 'Zip file of java with java code and slide', 'zip', '/storage/DIGITAL_LIBRARY/DIGITAL_LIBRARY/1646244529_java slides.zip', '2022-03-02 18:08:49', '2022-03-02 18:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedetails`
--

CREATE TABLE `feedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vouchar_no` int(11) NOT NULL,
  `Due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_amount` int(11) NOT NULL,
  `Vouchar_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedetails`
--

INSERT INTO `feedetails` (`id`, `semester`, `program`, `bank`, `vouchar_no`, `Due_date`, `net_amount`, `Vouchar_file`, `created_at`, `updated_at`) VALUES
(12341, '1', 'BS_Computer_Science', 'National Bank of Pakistan', 10001, '2022-12-31', 45030, '1_BS_Computer_Science.pdf', '2022-02-21 12:24:42', '2022-02-21 12:24:42'),
(12342, '2', 'BS_Computer_Science', 'National Bank of Pakistan', 10002, '2022-12-21', 46300, '2_BS_Computer_Science.pdf', '2022-02-21 12:39:22', '2022-02-21 12:39:22'),
(12343, '3', 'BS_Computer_Science', 'UBL,Nation bank', 10003, '2022-03-15', 60230, '3_BS_Computer_Science.pdf', '2022-02-21 12:39:57', '2022-03-07 17:42:06'),
(12344, '4', 'BS_Computer_Science', 'OMNI', 10004, '2022-09-26', 43000, '4_BS_Computer_Science.pdf', '2022-02-21 12:40:47', '2022-02-21 12:40:47'),
(12345, '5', 'BS_Computer_Science', 'National Bank of Pakistan', 10005, '2022-12-29', 43500, '5_BS_Computer_Science.pdf', '2022-02-21 12:41:39', '2022-02-21 12:41:39'),
(12346, '6', 'BS_Computer_Science', 'HBL', 10006, '2022-12-24', 54330, '6_BS_Computer_Science.pdf', '2022-02-21 12:42:24', '2022-02-21 12:42:24'),
(12347, '7', 'BS_Computer_Science', 'HBL', 10007, '2022-12-27', 32000, '7_BS_Computer_Science.pdf', '2022-02-21 12:43:05', '2022-02-21 12:43:05'),
(12348, '8', 'BS_Computer_Science', 'National Bank of Pakistan', 10008, '2022-04-10', 50300, '8_BS_Computer_Science.pdf', '2022-02-21 12:43:44', '2022-03-02 18:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file_path`, `created_at`, `updated_at`) VALUES
(1, '1641149944_Screenshot 2021-12-27 005955.jpg', '/storage/uploads/1641149944_Screenshot 2021-12-27 005955.jpg', '2022-01-02 13:59:04', '2022-01-02 13:59:04'),
(2, '1641150262_Zindagi Ek Pal Mein Salli Yun Palat Gayi Humari (Laree Choote) - Call The Band - Sad Song.mp4', '/storage/uploads/1641150262_Zindagi Ek Pal Mein Salli Yun Palat Gayi Humari (Laree Choote) - Call The Band - Sad Song.mp4', '2022-01-02 14:04:22', '2022-01-02 14:04:22'),
(3, '1641153166_13.png', '/storage/uploads/1641153166_13.png', '2022-01-02 14:52:46', '2022-01-02 14:52:46'),
(4, '1641154224_logout.jpg', '/storage/uploads/1641154224_logout.jpg', '2022-01-02 15:10:24', '2022-01-02 15:10:24'),
(5, '1641885763_Capture.JPG', '/storage/uploads/1641885763_Capture.JPG', '2022-01-11 07:22:43', '2022-01-11 07:22:43'),
(6, '1641896722_logo sc gcuf.JPG', '/storage/uploads/1641896722_logo sc gcuf.JPG', '2022-01-11 10:25:22', '2022-01-11 10:25:22'),
(7, '1645108454_get new file logo-l.png', '/storage/uploads/1645108454_get new file logo-l.png', '2022-02-17 14:34:14', '2022-02-17 14:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `ghps`
--

CREATE TABLE `ghps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_pressure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pulse_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abnormality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overall_health` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psychiatric_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decline_academic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manifestation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bullying` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ghps`
--

INSERT INTO `ghps` (`id`, `name`, `fname`, `age`, `gender`, `cnic`, `mobile`, `email`, `blood_group`, `address`, `height`, `blood_pressure`, `temperature`, `pulse_rate`, `abnormality`, `overall_health`, `psychiatric_history`, `decline_academic`, `manifestation`, `habit`, `activities`, `bullying`, `created_at`, `updated_at`) VALUES
(1, 'Yasir Iqbal', 'fsd', '324v', 'male', '3453', '767687', 'yasir@gmail.com', '867', '876', '876', '678', '86', '76', '67', 'dfgbj', '76hjbv', 'GJHGKJ', 'JKHJ', 'VHFKJ', 'VNBMN', 'JKB', '2022-02-21 18:02:08', '2022-02-21 18:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `iafs`
--

CREATE TABLE `iafs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_admission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iafs`
--

INSERT INTO `iafs` (`id`, `email`, `fname`, `mobile`, `date_of_birth`, `date_of_admission`, `gender`, `session`, `session_type`, `created_at`, `updated_at`) VALUES
(1, 'yasir@gmail.com', 'dasda', 'fsdsfd', '2022-09-26', '2022-12', 'male', 'Morning', 'Fall', '2022-02-21 17:59:45', '2022-02-21 17:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `user_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Saqib Javed', 'saqib@gmail.com', NULL, 'My name is saqib javed. I am a student of semester 8.', '2022-03-02 17:37:14', '2022-03-02 17:37:14'),
(2, 'admin', 'admin@gmail.com', NULL, 'My name is saqib yasir. I am Admin of this portal', '2022-03-02 17:40:07', '2022-03-02 17:40:07'),
(3, 'Saqib Javed', 'saqib@gmail.com', NULL, 'i am typing from university sitting at room number 4', '2022-03-09 06:45:39', '2022-03-09 06:45:39'),
(4, 'Saqib Email', '01ranasaqib387@gmail.com', NULL, 'Hi i am a new student here, i can demo you to send and reset password through Email Address.', '2022-03-12 16:31:29', '2022-03-12 16:31:29'),
(5, 'Yasir Iqbal', 'yasir@gmail.com', NULL, 'Hi, My name is Yasir Sohail and i am a student at Gcian University San Andrease', '2022-03-13 18:01:20', '2022-03-13 18:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_24_203457_create_registrations_table', 2),
(6, '2021_12_24_204801_create_registrations_table', 3),
(7, '2021_12_30_181349_create_files_table', 4),
(8, '2021_12_31_165657_create_image_gallery_table', 5),
(9, '2022_01_02_125135_create_digital_liberaries_table', 6),
(10, '2022_01_02_201443_create_notice_boards_table', 7),
(11, '2022_01_03_115845_create_messages_table', 8),
(12, '2022_01_05_002131_create_user_images_table', 9),
(13, '2022_01_07_174736_create_contacts_table', 10),
(14, '2022_02_17_155700_create_semdatas_table', 11),
(15, '2022_02_17_155917_create_sinfos_table', 11),
(16, '2022_02_17_211024_create_upload_assignments_table', 12),
(17, '2022_02_18_195404_create_timetables_table', 13),
(20, '2022_02_19_222554_create_studentresults_table', 14),
(24, '2022_02_21_132257_create_feedetails_table', 15),
(25, '2022_02_21_182323_create_scholarships_table', 16),
(27, '2022_02_21_202138_create_neds_table', 17),
(30, '2022_02_21_215929_create_ghps_table', 18),
(31, '2022_02_21_223803_create_iafs_table', 18),
(32, '2022_02_22_184752_create_attendences_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `neds`
--

CREATE TABLE `neds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_admission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opinion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `neds`
--

INSERT INTO `neds` (`id`, `name`, `email`, `fname`, `mobile`, `date_of_birth`, `date_of_admission`, `gender`, `opinion`, `created_at`, `updated_at`) VALUES
(2, 'Saqib Javed', 'saqib@gmail.com', 'Muhammad javed Iqbal', '0302-6378563', '1997-08-26', '2018-09', 'male', 'No i am not satisfied', '2022-02-21 16:10:11', '2022-02-21 16:10:11'),
(6, 'Yasir Iqbal', 'yasir@gmail.com', 'Iqbal khan', '0321-4353467', '1892-10-28', '1948-12', 'male', 'Yes i am satisfied', '2022-02-21 16:27:11', '2022-02-21 16:27:11'),
(7, 'Haroon Haidir', 'haroon@gmail.com', 'manzoor', '786876876', '2021-11-26', '2018-12', 'male', 'yeap', '2022-03-07 17:44:45', '2022-03-07 17:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `name`, `description`, `file_path`, `created_at`, `updated_at`) VALUES
(1, '1646242907_gcuf.jpg', 'This is notification about corona virus precautions and instructions', '/storage/NoticeBoard/NoticeBoard/1646242907_gcuf.jpg', '2022-03-02 17:41:47', '2022-03-02 17:41:47'),
(2, '1646242974_1644959607_96234931_2710001332438927_2624715095099310080_n.jpg', 'Collection of Exam in 2022 with date sheet issue notice', '/storage/NoticeBoard/NoticeBoard/1646242974_1644959607_96234931_2710001332438927_2624715095099310080_n.jpg', '2022-03-02 17:42:54', '2022-03-02 17:42:54'),
(3, '1646327355_1644959607_96234931_2710001332438927_2624715095099310080_n.jpg', 'gcuf new notification', '/storage/NoticeBoard/NoticeBoard/1646327355_1644959607_96234931_2710001332438927_2624715095099310080_n.jpg', '2022-03-03 17:09:15', '2022-03-03 17:09:15'),
(4, '1646674439_90b6f2_c60793329cf942e3a82609ef86cc1365_mv2.jpg', 'gcuf convocation 2022 in march at gcuf', '/storage/NoticeBoard/NoticeBoard/1646674439_90b6f2_c60793329cf942e3a82609ef86cc1365_mv2.jpg', '2022-03-07 17:33:59', '2022-03-07 17:33:59'),
(5, '1648239483_Online-Classes-Exams.jpg', 'online exams in punjab university', '/storage/NoticeBoard/NoticeBoard/1648239482_Online-Classes-Exams.jpg', '2022-03-25 20:18:03', '2022-03-25 20:18:03'),
(6, '1648239514_Online-Classes-Exams.jpg', 'punjab university description on online exam', '/storage/NoticeBoard/NoticeBoard/1648239514_Online-Classes-Exams.jpg', '2022-03-25 20:18:34', '2022-03-25 20:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('01ranasaqib387@gmail.com', 'RTCGpsQnSHLOr22N7KdVbNcdgZyYlOxkGXv0DE8RtvOXj8tDhO99JPe5k7MzKU2j', '2022-03-03 10:31:38'),
('01ranasaqib387@gmail.com', 'I0h8poOE1qdr9TKbeaJmzcTYyPurLQ4zoLnIoie7ppE4LNmQoYN4zArdZ8bZ0Bb0', '2022-03-03 10:32:02'),
('01ranasaqib387@gmail.com', 'ytg6qSu2XVEPLlFGx4pzNDLkmm2I5AA67H7L88mrWtkiCllQuGcW1bdr9NpcWfyj', '2022-03-03 10:32:12'),
('01ranasaqib387@gmail.com', 'nbeu4FLIvZFlrVCXqj7k2PRNabTwEYmtEjoNuNpzgJ1bgemdxijkAAzgbBw7vYLf', '2022-03-03 10:33:31'),
('01ranasaqib387@gmail.com', '96z6olyeH56e1cnQveKxHnOZvuB2CiVCbdlniPTgIQifzm9WGIKoq3ezJEw4a6dO', '2022-03-03 10:33:37'),
('01ranasaqib387@gmail.com', 'TDYWSLnoUwcXUgoLYCfTkLGMaEU6WgDOCeooSXo9VdNPZl542myVcP9wCokj3wAL', '2022-03-03 10:34:01'),
('01ranasaqib387@gmail.com', '9gwGndipjAaEvRNL6usVUS2P2gwqXoovYNvl59guCJLRyhwCG5XUMxsdPaTYgSXO', '2022-03-03 10:34:46'),
('01ranasaqib387@gmail.com', 'ghETUq4kCG7pUyH8K1OkEClm2jXS6PeAW1CmDWvFejnBX7F3QfTyl2PuHLCj1Z1G', '2022-03-03 10:35:04'),
('01ranasaqib387@gmail.com', 'hatoNqpRRnpEnTgbCK9Wx1SXTkScQGxJBjyvINUozajRHXPNQaDaTwVsp2uMKN2h', '2022-03-03 10:36:44'),
('01ranasaqib387@gmail.com', 'bZYuibrZLNCGQWs6nSPXisBU27TEcubDxBNjUfjLVcJE7OzeCYihGcYSrCD07kW6', '2022-03-03 10:37:11'),
('01RANASAQIB387@GMAIL.COM', 'hLlsz94y5wn95hRWvYOlIQnpxgY89JeaVmPmpzm3lXt0K0KmzEJa1XuTI3TTpDuf', '2022-03-03 10:38:31'),
('01ranasaqib387@gmail.com', '789gmJkcvPe80psjILVsYp6fKXS5BHee3Shu7OQvjHxNw95BYWsIjESMpUBdVkxV', '2022-03-03 10:39:29'),
('01RANASAQIB387@GMAIL.COM', 'Pyylf8ngp8aRXSMwYU8iKmCZm6ZatIHHPxHq1CTXueTErvRcLtFIAxh8xda6srBW', '2022-03-03 12:09:27'),
('01RANASAQIB387@GMAIL.COM', 'PJAkop24eyNOqNg3JSUd4hiDJdxircZVelHbzSNmn2QbJTNVnFMJjBUFu1pmlQeK', '2022-03-03 12:10:43'),
('01RANASAQIB387@GMAIL.COM', '4OwejyOsqPGyXzEQ7oKFGBAFX5CCGxe6U1232IWoXcvbGIFQPdvCH8vTY4xgfLhO', '2022-03-03 12:12:22'),
('01RANASAQIB387@GMAIL.COM', 'gSTQapFBOn3EBUGf08uOlIZ3cT1tmPhozTyN6C7jv3BjkHfx1cQvYU1MQRaCzsai', '2022-03-03 12:14:53'),
('saqib@gmail.com', 'fKoVTJdOe7f6HRqun7PGThCxtslVrfMvv0Z6TnEKYsAaZT1ygEROESP9rS3eyWTO', '2022-03-14 13:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(10) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `usertype`, `name`, `semester`, `email`, `password`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'student', 'Saqib Javed', 8, 'saqib@gmail.com', '$2y$10$idG00O5dXs.oJ.cQH.UMde.Qeb5RVd5g.gD2zu5SuVqrP1g.OPMWG', 'UU9cmMa9K4Sk7sC1dY4blDqsmFJgZKgxSJFMcZ8zImRzjChnTEIv803vWapkU4d2', 'vlL6mGb6o5WWOOOV5GW1zykHuWzJxATx', '2022-01-06 13:06:10', '2022-03-03 16:05:28'),
(3, 'student', 'Yasir Iqbal', 1, 'yasir@gmail.com', '$2y$10$WNxBJYne4akKDFMwPJUtbeT.eew.Gs/8I.AuG5VrxaWqbmBuxSB0G', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'Qz0TBlm2eCKuXmBJfaJI6fShwnQoCJ5z', '2022-01-06 13:32:34', '2022-02-23 18:14:22'),
(4, 'student', 'Ali Asgar', 3, 'Ali@gmail.com', '$2y$10$4tb6f/nAFPKNEiYNTZCc6OIA.BjZjRv3EhELlS6c3B/vHvpYE5gtu', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'D1pHy6uLbqn5Q6DbaDna8Zw8KoDcSn9c', '2022-01-06 18:01:51', '2022-01-06 19:26:09'),
(8, 'student', 'olo', 8, 'olo@gmail.com', '$2y$10$UO2ugEDeIuM6K0xSQtyclOipN3G7gzaEL9yxLfU8kvGFESzGEOrgG', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'pCmzLgGNwJ11ObvHh2EVZm0mglMUIUws', '2022-01-14 17:54:11', '2022-01-14 17:54:11'),
(11, 'student', 'new', 1, 'new@gmail.com', '$2y$10$9a8zrPzDa4kUwUepbCou6uMiLD37FjT4HwItXYWtnfIdkwAyJG9FC', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', '80xAV3IQRHY88AwyRV1fqJgRnxHzMxpq', '2022-02-16 18:16:44', '2022-02-16 18:16:44'),
(12, 'teacher', 'murad', NULL, 'murad@gmail.com', '$2y$10$8Mf/xYb37p6rg2Fl7gNzzuj.FE5oVNy0qhiZTDCcXyL.uL8jG/9E6', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'VbV7VKNWzFoENuaSw6z6cLA1Xx8XvZwU', '2022-02-16 19:40:56', '2022-02-16 19:40:56'),
(13, 'admin', 'admin', NULL, 'admin@gmail.com', '$2y$10$OEjOgn6fTXcRxJ9oAoJRUu88TTTTHCmkfyX0jWraX1qcptEM/eNPO', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'OBDpKE9Kr58Hdhev5ocMNBTFlGAd2oKi', '2022-02-16 19:42:17', '2022-02-16 19:42:17'),
(14, 'student', 'student', 8, 'student@gmail.com', '$2y$10$d/Gf.yXWGnXr6IRek.D/UOL4bUp5NnR1DlNR.JDBqKWObRuVlfznC', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'JrnTjqBQqhN1TpjlDWEmDjRlM9Tid8sH', '2022-02-16 19:43:07', '2022-02-16 19:43:07'),
(15, 'student', 'javed', 4, 'javed@gmail.com', '$2y$10$dYlO4jSNwKXiiPlUYyvIie19FHD.4SvZWWWUZgrf9rjrKnBk.IEq.', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'iKuPPUr9cb8WVbwsINrqsx4I1gp11Adu', '2022-02-18 14:26:57', '2022-02-18 14:26:57'),
(16, 'student', 'Tester', 2, 'tester@gmail.com', '$2y$10$Q1MrGzZ6MyrA9s5Sn8XTg.TBHWkcClFN86BtChcMPygxaR.3k.Nr2', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'roVnNznekkIKvXhCumgG780KPJfwRbRh', '2022-02-19 17:00:05', '2022-02-19 17:00:05'),
(17, 'teacher', 'Mr. Irfan Khan', NULL, 'irfan@gmail.com', '$2y$10$3YmJrYxJ2oUtI1JXkmdeCuwepXRxgEPZlJvrFUQ.855zTf.I72MPq', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'BaD2YtpvaaHGUdXfQsOs6tVyZPFTLfTE', '2022-02-22 18:56:48', '2022-02-22 18:56:48'),
(18, 'teacher', 'Mr. Allah Ditta', NULL, 'ditta@gmail.com', '$2y$10$Jf7Em4jbz10d70HJ.R96pOYI2fkqSqeE2NKenFMyB6x62mcTdLp2m', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'BXiLj0yuHwXDPLm0W8Vkx55AAvAX7ne3', '2022-02-23 10:02:59', '2022-02-23 10:02:59'),
(19, 'student', 'new2', 6, 'new2@gmail.com', '$2y$10$PD6Ucg0m1PgMjBr9dRABTujCUd0sScEo8OFpvoLkWmpZaxE11/MJC', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'zAVoQifSu10ByBIhugMl6VczM8FDkOVx', '2022-02-28 04:49:46', '2022-02-28 04:49:46'),
(20, 'student', 'dsa', 1, 'dsa@dsa.dsa', '$2y$10$K8DNahiyfTIn42LsAm1cu.koUdPvbGy1ofcZEsYc4ORUT7ApxDLP2', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'N51j9ei0IhUbYp9bbfL2Khh8N0dkBAkg', '2022-02-28 05:27:36', '2022-02-28 05:27:36'),
(21, 'student', 'sem1', 1, 'sem1@gmail.com', '$2y$10$0uFuXPHcSiNvxMYyam3zfe36xzGWysNdi01cSSk0RIns9Vv0PcTpq', 'DKgEZxTcKLcRLekRAB1mOYwgap33PXkzIqMDXYJZvSZZxq7JWlNBW0arsCQxMI3b', 'crSfpVhptrEESFY8GuhSfVPK3dMse7cx', '2022-03-02 07:10:40', '2022-03-02 07:37:39'),
(22, 'teacher', 'Mr. Umer Iqbal', NULL, 'umer@gmail.com', '$2y$10$6cJV0RuOHW0KnWpdIIZaeeMnnMlEP5lXIo9IzBtFmULEfS8LNrM7K', NULL, 'A1iycJY5sURO5sKX48Mqy6BeE298quhr', '2022-03-02 07:43:44', '2022-03-03 14:20:19'),
(23, 'student', 'Saqib Email', 3, '01ranasaqib387@gmail.com', '$2y$10$7f0FNx9JULxJWzgLPpWoG.n8/FV7xp2MxTDzRRCqfRm64bjnkqHve', NULL, 'Vl7Zh5b5sexH2DyglwxlLNOK3WMwjJ7a', '2022-03-02 19:13:11', '2022-03-09 06:57:48'),
(24, 'student', '06ranasaqib', 1, '06ranasaqib@gmail.com', '$2y$10$fiSYRCUg.SddR/eAHzeh8ukNXvFAxnL0bKPOp38/qibvy6G8U4vqW', NULL, 'AHHfelkvErmEDK7kByoiHG18dD0zzaMX', '2022-03-03 15:26:55', '2022-03-03 15:41:20'),
(25, 'student', 'Haroon Haidir', 3, 'haroon@gmail.com', '$2y$10$cz3jFc.cLqLc9M5i7mrkY.ht1vBGLcjgoIcmLsdg4U5zz1IsXxP5O', NULL, '8w3rZg5Y6EC9SKFzfEoigge15vRYRkWd', '2022-03-07 17:17:36', '2022-03-07 17:30:46'),
(26, 'student', 'web', 1, 'web387@gmail.com', '$2y$10$vqeWHzgg7lowC1/HraXkJu2gmZlcdPB4XephqJk9AdmFnRLP9rz6e', 'Bt1vKg2FWXHDzUWYY1uP9Rv0eZANMPVhrbMZ0FdxTYxXo8SZnUVXqQ4A9NXM5q4z', '0JUZOaWNacX2nSZDnzUsp0w8s6ezifG6', '2022-03-08 14:57:24', '2022-03-08 14:57:49'),
(27, 'student', 'final year', 8, 'finalyearprojecct@gmail.com', '$2y$10$V.V5wF2Z0DeDsSoYZZ.07emT5/Jrl2VtWijh0hoqPIAyuy.Z/nQWK', 'hkqA47ZoS5mbSI1O94RJmFKw7ysauIrZu6FqmEN2z0Y038unV0fhFk0wr5fHKjWi', 'B9S8atA223qw7pYO7M75fLTGumtHQcqb', '2022-03-08 15:04:32', '2022-03-08 15:04:56'),
(28, 'student', 'aem8', 8, 'sem8@gmail.com', '$2y$10$mLZMBXS30gxxj/7gdwB2RelkIr4mw0WVWTQnUSg0s2k4qphRxFZPi', NULL, 'musgHyBy0AArym0BeYJ53vC92Ibi8cot', '2022-03-09 08:43:14', '2022-03-09 08:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `file_name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(5, '1645454453_bangladesh_630_x_354.png', 'Bangla Daish Scholarship, Fully funded', 'https://study-uk.britishcouncil.org/scholarships/great-scholarships/bangladesh', '2022-02-21 14:40:53', '2022-02-21 14:40:53'),
(6, '1645454571_shutterstock_1317121700_630x354_solas.png', 'Brunahi Scholarship', 'https://sbson.edu.pk/', '2022-02-21 14:42:51', '2022-02-21 14:42:51'),
(7, '1645454655_student-and-teacher-in-robotics-class-630x354.png', 'china scholarship', 'https://www.hec.gov.pk/english/scholarshipsgrants/lao/CSC/Pages/default.aspx', '2022-02-21 14:44:15', '2022-02-21 14:44:15'),
(8, '1645703918_Chevening-2015-16-Scholars-V3.png', 'To reward outstanding achievement and to help ensure that fears about finance do not constrain prospective international students from considering study at the University of Birmingham, we are pleased to offer a number of prestigious international scholarships*', 'https://www.birmingham.ac.uk/international/students/finance/scholarships/index.aspx', '2022-02-24 11:58:38', '2022-02-24 11:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `semdatas`
--

CREATE TABLE `semdatas` (
  `semid` bigint(20) UNSIGNED NOT NULL,
  `coursecode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjecttile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semesternumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semdatas`
--

INSERT INTO `semdatas` (`semid`, `coursecode`, `subjecttile`, `teachername`, `semesternumber`, `created_at`, `updated_at`) VALUES
(1, 'CSI-508', 'Artificial Intelligence 4(3-1)', 'Rao Sohail Iqbal Asif', '6', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(2, 'CSI-512', 'Computer Networks 4(3-1)', 'Sh. Muhammad Aamir', '6', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(4, 'ENG-422', 'Technical Writing 3(3-0)', 'Adeel Shahzada', '6', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(5, 'CSI-506', 'Web Design and Development 3(2-1)', 'Muhammad Murad Khan', '6', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(6, 'CSI-616', 'Fundamentals of Data Mining 3(3-0)', 'Arbab Kanwal', '6', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(7, 'CSI-303 ', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', '1', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(8, 'CSI-301 ', 'Programming Fundamentals 4(3-1)', '', '1', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(9, 'ENG-322', 'English Composition & Comprehension 3(3-0)', '', '1', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(10, 'MTH-323 ', 'Calculus and Analytical Geometry 3(3-0)', '', '1', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(11, 'LNG-321', 'Chinese Language 3(3-0)', '', '1', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(12, 'CSI-304 ', 'Digital Logic and Design  3(3-0)', '', '2', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(13, 'CSI-302 ', 'Object Oriented Programming  4(3-1)', '', '2', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(14, 'ENG-421 ', 'Communication & Presentation Skills  3(3-0)', '', '2', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(15, 'STA-324', 'Probability and Statistics  3(3-0)', '', '2', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(16, 'PHY-323 ', 'Applied Physics 3(3-0)', '', '2', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(17, 'ECO-408', 'Issues in Pakistan Economy   3(3-0)', '', '2', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(18, 'CSI-403 ', 'Computer Organization & Assembly Language  3(3-0)', '', '3', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(19, 'CSI-401 ', 'Data Structure and Algorithms 3(2-1) ', '', '3', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(20, 'CSI-405 ', 'Discrete Structures  3(3-0)', '', '3', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(21, 'CSI-411 ', 'Professional Practices 3(3-0)', '', '3', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(22, 'MTH-423', 'Differential Equations 3(3-0)', '', '3', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(23, 'MTH-424', 'Linear Algebra  3(3-0)', '', '3', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(24, 'CSI-406', 'Design & Analysis of Algorithms 3(3-0)', '', '4', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(25, 'CSI-402', 'Operating Systems  4(3-1)', '', '4', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(26, 'CSI-404', 'Theory of Automata 3(3-0)', '', '4', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(27, 'CSI-408', 'Numerical Computing   3(3-0)', '', '4', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(28, 'BBA-506 ', 'Human Resource Management  3(3-0)', '', '4', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(29, 'CSI-505', 'Compiler Construction  3(3-0)', '', '5', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(30, 'CSI-503', 'Database Systems  4(3-1)', '', '5', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(31, 'SWE-503 ', 'Software Engineering-I 3(3-0)', '', '5', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(32, 'MTH-324', 'Multivariable Calculus 3(3-0)', '', '5', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(33, 'SOC-555 ', 'Psychology  3(3-0)', '', '5', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(34, 'CSI-615 ', 'Mobile and Application Development  3(2-1)', 'Mr. Irfan Khan', '7', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(35, 'SWE-603 ', 'Software Engineering-II   3(3-0)', '', '7', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(36, 'CSI-621 ', 'Parallel & Distributed Computing   3(3-0)', '', '7', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(37, 'CSI-619', 'Information Security 3(3-0)', '', '7', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(38, 'PST-321 ', 'Pakistan Studies  3(3-0)', '', '7', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(39, 'CSI-616 ', 'Fundamental of Data Mining  3(3-0)', 'Mr. Irfan Khan', '8', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(40, 'CSI-604', 'Computer Graphics  3(2-1)', '', '8', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(41, 'CSI-630 ', 'Final Year Project  6(0-6)', '', '8', '2022-02-15 20:28:32', '2022-02-15 20:28:32'),
(42, 'ISL-321', 'Islamic Studies/Ethics  3(3-0)', '', '8', '2022-02-15 20:28:32', '2022-02-15 20:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `sinfo`
--

CREATE TABLE `sinfo` (
  `sid` int(11) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `sessiontype` varchar(10) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `dateofberth` date NOT NULL,
  `admissionyear` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinfo`
--

INSERT INTO `sinfo` (`sid`, `fathername`, `gender`, `telephone`, `sessiontype`, `semester`, `dateofberth`, `admissionyear`, `email`) VALUES
(5, 'Muhammad Javed Iqbal', 'Male', '0302-6378563', 'Morning', 'Fall', '1997-08-26', '2018-07-01', '01ranasaqib387@gmail.com'),
(6, 'ali ijaz', 'male', '0302-7482032', 'morning', 'Autumn', '1994-07-14', '2019-06-12', 'sa@sa.sa');

-- --------------------------------------------------------

--
-- Table structure for table `sinfos`
--

CREATE TABLE `sinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentresults`
--

CREATE TABLE `studentresults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sem_work` double(8,2) NOT NULL,
  `Mid_term` double(8,2) NOT NULL,
  `Theory` double(8,2) NOT NULL,
  `Practical` double(8,2) NOT NULL,
  `Total` double(8,2) NOT NULL,
  `Maximum` double(8,2) NOT NULL,
  `Grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Q_P` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marks_P` double(8,2) NOT NULL,
  `Attendence_P` double(8,2) NOT NULL,
  `Remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `CGPA` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentresults`
--

INSERT INTO `studentresults` (`id`, `semester`, `course_code`, `teacher_name`, `email`, `Sem_work`, `Mid_term`, `Theory`, `Practical`, `Total`, `Maximum`, `Grade`, `Q_P`, `Marks_P`, `Attendence_P`, `Remarks`, `CGPA`, `GPA`, `created_at`, `updated_at`) VALUES
(1, '8', 'Fundamental of Data Mining 3(3-0)', 'Mr. Irfan Khan', 'saqib@gmail.com', 6.00, 10.00, 20.00, 20.00, 56.00, 60.00, 'A', '12.00', 93.33, 96.00, 'Unverified', 0.00, 0.00, '2022-02-18 14:00:00', '2022-02-18 14:00:00'),
(2, '8', 'Computer Graphics 3(2-1)', 'Mr. Allah Ditta', 'saqib@gmail.com', 7.00, 9.00, 16.00, 0.00, 32.00, 40.00, 'A', '8.00', 80.00, 95.00, 'INVALID', 0.00, 0.00, '2022-02-18 14:00:00', '2022-02-18 14:00:00'),
(5, '8', 'Fundamental of Data Mining 3(3-0)', 'Mr. Irfan Khan', 'yasir@gmail.com', 6.00, 10.00, 20.00, 20.00, 56.00, 60.00, 'A', '12.00', 93.33, 96.00, 'Unverified', 0.00, 0.00, '2022-02-18 14:00:00', '2022-02-18 14:00:00'),
(6, '7', '7&th 3(3-0)', 'Mr. Irfan Khan', 'saqib@gmail.com', 6.00, 10.00, 20.00, 20.00, 56.00, 60.00, 'A', '12.00', 93.33, 96.00, 'Unverified', 0.00, 0.00, '2022-02-18 14:00:00', '2022-02-18 14:00:00'),
(7, '8', 'Programing Fundamentals 3(3-0)', 'Mr. Amjad Abass', 'saqib@gmail.com', 6.00, 10.00, 20.00, 20.00, 56.00, 60.00, 'A', '12.00', 92.33, 89.00, 'Unverified', 0.00, 0.00, '2022-02-18 14:00:00', '2022-02-18 14:00:00'),
(8, '1', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', 'yasir@gmail.com', 1.00, 2.00, 3.00, 4.00, 5.00, 6.00, '7', '8', 9.00, 100.00, NULL, NULL, NULL, '2022-02-24 14:02:53', '2022-02-24 14:02:53'),
(9, '8', 'Computer Graphics  3(2-1)', 'Mr. Irfan Khan', 'saqib@gmail.com', 12.00, 43.00, 23.00, 23.00, 43.00, 54.00, 'A', '16', 90.00, 100.00, 'None', NULL, NULL, '2022-02-24 14:35:21', '2022-02-24 14:35:21'),
(10, '1', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', 'sem1@gmail.com', 12.00, 8.00, 17.00, 0.00, 34.00, 60.00, 'B', '12', 78.00, 90.00, 'None', NULL, NULL, '2022-03-02 07:39:46', '2022-03-02 07:39:46'),
(11, '1', 'English Composition & Comprehension 3(3-0)', 'Mr. Umer Iqbal', 'sem1@gmail.com', 65.00, 87.00, 65.00, 9.00, 78.00, 80.00, 'C', '12', 76.00, 87.00, 'None', NULL, NULL, '2022-03-02 07:50:17', '2022-03-02 07:50:17'),
(12, '3', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', 'haroon@gmail.com', 32.00, 43.00, 43.00, 65.00, 90.00, 100.00, 'A', '16', 90.00, 100.00, 'None', NULL, NULL, '2022-03-07 17:24:49', '2022-03-07 17:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thurday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`id`, `semester`, `course_code`, `teacher_name`, `location`, `monday`, `tuesday`, `wednesday`, `thurday`, `friday`, `saturday`, `sunday`, `created_at`, `updated_at`) VALUES
(1, '8', 'Fundamental of Data Mining 3(3-0)', 'Mr. Murad Khan', 'room 8', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(2, '8', 'Computer Graphics  3(2-1)', 'Mr. Irfan Khan', 'room 2', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(3, '8', 'Final Year Project  6(0-6)', 'Mr. Umer Sarwar', 'room2', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(4, '8', 'Islamic Studies/Ethics  3(3-0)', 'Mr. Aga Khan', 'lab 7', '12:00-13:00', NULL, '13:00-15:00', NULL, '9:00-10:00', NULL, '', '2022-02-17 19:00:00', '2022-03-02 14:29:26'),
(223045, '7', 'Mobile and Application Development  3(2-1)', 'Mr. junaid Khan', 'room 3', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223046, '7', 'Software Engineering-II   3(3-0)', 'Mr. Ijaz Aslam', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223047, '7', 'Parallel & Distributed Computing   3(3-0)', 'Mr. Umer Iqbal', 'room 7', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223048, '7', 'Information Security 3(3-0)', 'Mr. Asgar ali', 'room 3', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223049, '7', 'Pakistan Studies  3(3-0)', 'Mr. Murad Khan', 'lab 4', '14:00-16:00', '10:00-11:00', '10:00-12:00', NULL, NULL, NULL, '', '2022-02-17 19:00:00', '2022-03-02 14:47:07'),
(223055, '6', 'Artificial Intelligence 4(3-1)', 'Mr. junaid Khan', 'room 3', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223056, '6', 'Computer Networks 4(3-1)', 'Mr. Ijaz Aslam', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223057, '6', 'Technical Writing 3(3-0)', 'Mr. Umer Iqbal', 'room 7', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223058, '6', 'Web Design and Development 3(2-1)', 'Mr. Asgar ali', 'room 3', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223059, '6', 'Fundamentals of Data Mining 3(3-0)', 'Mr. Ahmad Ali', 'Lab-3', '', '12:00-14:00', '13:00-11:00\r\n', '', '15:00-16:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223060, '5', 'Compiler Construction  3(3-0)', 'Mr. junaid Khan', 'room 3', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223061, '5', 'Database Systems  4(3-1)', 'Mr. Saqib Javed', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223062, '5', 'Software Engineering-I 3(3-0)', 'Mr. Umer Iqbal', 'room 7', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223063, '5', 'Multivariable Calculus 3(3-0)', 'Mr. Yasir ALi', 'room 3', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223064, '5', 'Psychology  3(3-0)', 'Mr. Faraz Ahmad', 'Lab-3', '', '12:00-14:00', '13:00-11:00\r\n', '', '15:00-16:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223065, '4', 'Design & Analysis of Algorithms 3(3-0)', 'Mr. junaid Khan', 'room 3', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223066, '4', 'Operating Systems  4(3-1)', 'Mr. Fakhar Javed', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223067, '4', 'Theory of Automata 3(3-0)', 'Mr. Iqbal Ali', 'room 7', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223068, '4', 'Numerical Computing   3(3-0)', 'Mr. Yasir ALi', 'room 3', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223069, '4', 'Human Resource Management  3(3-0)', 'Mr. Allah Ditta', 'Lab-3', '', '12:00-14:00', '13:00-11:00\r\n', '', '15:00-16:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223070, '3', 'Computer Organization & Assembly Language  3(3-0)', 'Mr. kateel Khan', 'room 4', '12:00-13:00', NULL, '11:00-13:00', NULL, '15:00-16:00', NULL, '', '2022-02-17 19:00:00', '2022-03-07 17:37:15'),
(223071, '3', 'Data Structure and Algorithms 3(2-1)', 'Mr. Irfan Khan', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223072, '3', 'Discrete Structures  3(3-0)', 'Mr. Umer Iqbal', 'room 7', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223073, '3', 'Professional Practices 3(3-0)', 'Mr. Yasir ALi', 'room 4', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223074, '3', 'Differential Equations 3(3-0)', 'Mr. Faraz Ahmad', 'Lab-7', '', '12:00-14:00', '13:00-11:00\r\n', '', '15:00-16:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223075, '2', 'Digital Logic and Design  3(3-0)', 'Mr. junaid Khan', 'room 7', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223076, '2', 'Object Oriented Programming  4(3-1)', 'Mr. Saqib Javed', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223077, '2', 'Communication & Presentation Skills  3(3-0)', 'Mr. Umer Iqbal', 'room 6', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223078, '2', 'Probability and Statistics  3(3-0)', 'Mr. Yasir ALi', 'room 3', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223079, '2', 'Applied Physics 3(3-0)', 'Mr. Faraz Ahmad', 'Lab-3', '', '12:00-14:00', '13:00-11:00\r\n', '', '15:00-16:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223080, '1', 'Introduction to ICT 3(3-0)', 'Mr. Irfan Khan', 'room 3', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223081, '1', 'Programming Fundamentals 4(3-1)', 'Mr. Murad Khan', 'lab 1', '8:00-9:00', '10:00-11:00', '8:00-9:00', NULL, '13:00-14:00', NULL, '', '2022-02-17 19:00:00', '2022-03-02 15:03:07'),
(223082, '1', 'English Composition & Comprehension 3(3-0)', 'Mr. Umer Iqbal', 'room 7', '10:00-11:00', '16:00-17:00', '13:00-11:00\r\n', '10:00-11:00', '', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223083, '1', 'Calculus and Analytical Geometry 3(3-0)', 'Mr. Yasir ALi', 'room 3', '10:00-11:00\r\n', '', '13:00-11:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223084, '1', 'Chinese Language 3(3-0)', 'Mr. Faraz Ahmad', 'Lab-3', '', '12:00-14:00', '13:00-11:00\r\n', '', '15:00-16:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223085, '2', 'Issues in Pakistan Economy   3(3-0)', 'Mr. Amir', 'room 3', '11:00-12:00', '', '10:00-11:00', '11:00-12:00', '14:00-15:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39'),
(223086, '3', 'Linear Algebra  3(3-0)', 'Mr. Aziz Shah', 'room 3', '10:00-11:00', '', '11:00-13:00\r\n', '', '10:00-11:00', '', '', '2022-02-17 19:00:00', '2022-02-18 17:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `upload_assignments`
--

CREATE TABLE `upload_assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_assignments`
--

INSERT INTO `upload_assignments` (`id`, `email`, `courseCode`, `studentName`, `teacherName`, `filename`, `file_path`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'haroon@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Haroon Haidir', 'Mr. Irfan Khan', '3_Mr. Irfan Khan_Data Structure and Algorithms 3(2-1)_haroon@gmail.com_Saqib Javed.pdf', '/storage/Assignments/3_Mr. Irfan Khan_Data Structure and Algorithms 3(2-1)_haroon@gmail.com_Saqib Javed.pdf', '3', '2022-03-07 17:27:39', '2022-03-07 17:27:39'),
(2, 'haroon@gmail.com', 'Data Structure and Algorithms 3(2-1)', 'Haroon Haidir', 'Mr. Irfan Khan', '3_Mr. Irfan Khan_Data Structure and Algorithms 3(2-1)_haroon@gmail.com_Saqib Javed.pdf', '/storage/Assignments/3_Mr. Irfan Khan_Data Structure and Algorithms 3(2-1)_haroon@gmail.com_Saqib Javed.pdf', '3', '2022-03-07 17:27:40', '2022-03-07 17:27:40'),
(3, 'saqib@gmail.com', 'Computer Graphics  3(2-1)', 'Saqib Javed', 'Mr. Irfan Khan', '8_Mr. Irfan Khan_Computer Graphics  3(2-1)_saqib@gmail.com_23.jpg', '/storage/Assignments/8_Mr. Irfan Khan_Computer Graphics  3(2-1)_saqib@gmail.com_23.jpg', '8', '2022-03-09 06:50:53', '2022-03-09 06:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `email`, `name`, `file_path`, `created_at`, `updated_at`) VALUES
(19, 'yasir@gmail.com', 'yasir@gmail.com.jpg', '/storage/UserImage/UserImage/yasir@gmail.com.jpg', '2022-01-05 19:29:31', '2022-01-05 19:29:31'),
(20, 'saqib@gmail.com', 'saqib@gmail.com.jpg', '/storage/UserImage/UserImage/saqib@gmail.com.jpg', '2022-01-05 19:41:38', '2022-01-05 19:41:38'),
(21, 'a@a.com', 'a@a.com.jpg', '/storage/UserImage/UserImage/a@a.com.jpg', '2022-01-06 13:31:45', '2022-01-06 13:31:45'),
(22, 'Ali@gmail.com', 'Ali@gmail.com.jpg', '/storage/UserImage/UserImage/Ali@gmail.com.jpg', '2022-01-06 18:02:12', '2022-01-06 18:02:12'),
(23, 'sa@gmail.com', 'sa@gmail.com.jpg', '/storage/UserImage/UserImage/sa@gmail.com.jpg', '2022-01-07 10:33:54', '2022-01-07 10:33:54'),
(24, 'new@gmail.com', 'new@gmail.com.jpg', '/storage/UserImage/UserImage/new@gmail.com.jpg', '2022-02-16 18:19:02', '2022-02-16 18:19:02'),
(25, 'javed@gmail.com', 'javed@gmail.com.jpg', '/storage/UserImage/UserImage/javed@gmail.com.jpg', '2022-02-18 14:28:40', '2022-02-18 14:28:40'),
(26, 'irfan@gmail.com', 'irfan@gmail.com.jpg', '/storage/UserImage/UserImage/irfan@gmail.com.jpg', '2022-02-23 15:12:20', '2022-02-23 15:12:20'),
(27, 'admin@gmail.com', 'admin@gmail.com.jpg', '/storage/UserImage/UserImage/admin@gmail.com.jpg', '2022-02-23 16:52:18', '2022-02-23 16:52:18'),
(28, 'dsa@dsa.dsa', 'dsa@dsa.dsa.jpg', '/storage/UserImage/UserImage/dsa@dsa.dsa.jpg', '2022-02-28 05:28:02', '2022-02-28 05:28:02'),
(29, 'sem1@gmail.com', 'sem1@gmail.com.jpg', '/storage/UserImage/UserImage/sem1@gmail.com.jpg', '2022-03-02 07:12:41', '2022-03-02 07:12:41'),
(30, 'umer@gmail.com', 'umer@gmail.com.jpg', '/storage/UserImage/UserImage/umer@gmail.com.jpg', '2022-03-02 08:07:51', '2022-03-02 08:07:51'),
(31, 'haroon@gmail.com', 'haroon@gmail.com.jpg', '/storage/UserImage/UserImage/haroon@gmail.com.jpg', '2022-03-07 17:25:37', '2022-03-07 17:25:37'),
(32, '01ranasaqib387@gmail.com', '01ranasaqib387@gmail.com.jpg', '/storage/UserImage/UserImage/01ranasaqib387@gmail.com.jpg', '2022-03-12 16:30:35', '2022-03-12 16:30:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_access`
--
ALTER TABLE `admin_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `digital_liberaries`
--
ALTER TABLE `digital_liberaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedetails`
--
ALTER TABLE `feedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghps`
--
ALTER TABLE `ghps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iafs`
--
ALTER TABLE `iafs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neds`
--
ALTER TABLE `neds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semdatas`
--
ALTER TABLE `semdatas`
  ADD PRIMARY KEY (`semid`);

--
-- Indexes for table `sinfo`
--
ALTER TABLE `sinfo`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sinfos`
--
ALTER TABLE `sinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentresults`
--
ALTER TABLE `studentresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_assignments`
--
ALTER TABLE `upload_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_access`
--
ALTER TABLE `admin_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `digital_liberaries`
--
ALTER TABLE `digital_liberaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedetails`
--
ALTER TABLE `feedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ghps`
--
ALTER TABLE `ghps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iafs`
--
ALTER TABLE `iafs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `neds`
--
ALTER TABLE `neds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `semdatas`
--
ALTER TABLE `semdatas`
  MODIFY `semid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sinfo`
--
ALTER TABLE `sinfo`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sinfos`
--
ALTER TABLE `sinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentresults`
--
ALTER TABLE `studentresults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223087;

--
-- AUTO_INCREMENT for table `upload_assignments`
--
ALTER TABLE `upload_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
