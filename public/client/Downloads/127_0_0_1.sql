-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 03:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biobook`
--
CREATE DATABASE IF NOT EXISTS `biobook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biobook`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(100) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(3, '5', '2', 'Mark Anthony Monaya', 'cute ah', 'upload/6.jpg', ''),
(4, '1', '2', 'Mark Anthony Monaya', 'cute pre ah .ikaw na gd na..', 'upload/6.jpg', ''),
(5, '2', '2', 'Mark Anthony Monaya', 'bkud tnie qng nka upod ka pre..', 'upload/6.jpg', ''),
(6, '2', '1', 'Rolyn Jasper Demerin', 'mayu pre buh .nd mn b puedi pre .ok lang na ah', 'upload/rolyn.jpg', ''),
(7, '2', '1', 'Rolyn Jasper Demerin', 'hehehe. :d', 'upload/rolyn.jpg', ''),
(8, '1', '1', 'Rolyn Jasper Demerin', 'wahaha . ayus pre ah', 'upload/rolyn.jpg', ''),
(11, '3', '2', 'Mark Anthony Monaya', 'pra mai ma comment mn sa pp mu..', 'upload/6.jpg', ''),
(12, '3', '2', 'Mark Anthony Monaya', 'pra mai ma comment mn sa pp mu..', 'upload/6.jpg', ''),
(13, '7', '2', 'Mark Anthony Monaya', 'wahaha', 'upload/6.jpg', ''),
(14, '7', '2', 'Mark Anthony Monaya', 'dkfjfj', 'upload/6.jpg', ''),
(15, '7', '2', 'Mark Anthony Monaya', 'ok na?', 'upload/6.jpg', '1413322175'),
(16, '8', '2', 'Mark Anthony Monaya', 'ok mn pre?', 'upload/6.jpg', '1413322623'),
(17, '10', '2', 'Mark Anthony Monaya', 'wahaha', 'upload/6.jpg', '1413322694'),
(18, '9', '2', 'Mark Anthony Monaya', 'kk', 'upload/6.jpg', '1413323909'),
(19, '9', '2', 'Mark Anthony Monaya', 'kjbhkj', 'upload/6.jpg', '1413323915'),
(20, '9', '2', 'Mark Anthony Monaya', 'jbnjnb', 'upload/6.jpg', '1413323921');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int(100) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `location`, `user_id`, `date_added`) VALUES
(1, 'upload/10355746_10201322838071324_4012919269830340563_n.jpg', '1', '2014-10-13 01:11:07'),
(2, 'upload/1554634_934733823220509_3613827536046659520_n.jpg', '3', '2014-10-13 01:12:00'),
(3, 'upload/10009346_637081149680216_1873786828_n.jpg', '3', '2014-10-13 01:22:41'),
(4, 'upload/10409409_812993662052447_8357350814467004075_n.jpg', '3', '2014-10-13 01:28:18'),
(5, 'upload/1391735_10201428940032137_674307711_n.jpg', '3', '2014-10-13 01:28:23'),
(6, 'upload/988842_777445008951996_1989282849_n.jpg', '3', '2014-10-13 01:51:59'),
(7, 'upload/2.jpg', '1', '2014-10-13 06:00:08'),
(8, 'upload/10.jpg', '2', '2014-10-14 07:34:19'),
(9, 'upload/covernirolyn.jpg', '1', '2014-10-14 18:51:36'),
(10, 'upload/covernimark.jpg', '2', '2014-10-14 18:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(1, '1', 'upload/postnirolyn.jpg', 'cute mark ai?', ''),
(2, '2', 'upload/boracaycmark.jpg', 'sa boracay kmi n pre...wahahhaa.. @Rolyn', ''),
(3, '1', 'upload/rolyn.jpg', '...ayus ai? pp qn bla', ''),
(9, '2', 'upload/8.jpg', 'ok mn?', '1413322666'),
(10, '2', 'upload/7.jpg', 'ok mn n?', '1413322682');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `username2` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `cover_picture` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `number`, `email`, `email2`, `password`, `password2`, `profile_picture`, `cover_picture`) VALUES
(1, 'Rolyn Jasper', 'Demerin', 'revengeHatred', 'revengeHatred', '13/November/1995', 'male', '09989781348', 'rolyn02@gmail.com', 'rolyn02@gmail.com', '12345', '12345', 'upload/rolyn.jpg', 'upload/covernirolyn.jpg'),
(2, 'Mark Anthony', 'Monaya', 'bobaytot11', 'bobaytot111', '1995-11-13', 'Male', '09989781346', 'markmonaya@gmail.com', 'markmonaya@gmail.com', '123456', '123456', 'upload/6.jpg', 'upload/covernimark.jpg'),
(3, 'Jhonalyn', 'Montero', 'jho_phet', 'jho_phet', '14/June/1996', 'female', '09285444196', 'jho_montero@gmail.com', 'jho_montero@gmail.com', 'jhopeta', 'jhopeta', 'upload/400076_2586928959209_1713686254_n.jpg', ''),
(4, 'Shaira', 'Gaston', 'djBatman', 'djBatman', '1/January/1901', 'female', '09989781356', 'shaira_gaston@gmail.com', 'shaira_gaston@gmail.com', '1234567', '1234567', 'upload/1554634_934733823220509_3613827536046659520_n.jpg', '');
--
-- Database: `homestead`
--
CREATE DATABASE IF NOT EXISTS `homestead` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `homestead`;
--
-- Database: `parallelcodes`
--
CREATE DATABASE IF NOT EXISTS `parallelcodes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parallelcodes`;

-- --------------------------------------------------------

--
-- Table structure for table `tblmovies`
--

DROP TABLE IF EXISTS `tblmovies`;
CREATE TABLE IF NOT EXISTS `tblmovies` (
  `identity` int(30) NOT NULL AUTO_INCREMENT,
  `Movie` varchar(50) NOT NULL,
  `ReleasedYear` int(30) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmovies`
--

INSERT INTO `tblmovies` (`identity`, `Movie`, `ReleasedYear`) VALUES
(1, 'Moonlight', 2016),
(2, 'Arrival', 2016),
(3, 'La La Land', 2016),
(4, 'Deadpool', 2016),
(5, 'Wonder Woman', 2017),
(6, 'Dunkirk', 2017),
(7, 'Get Out', 2017),
(8, 'Logan', 2017),
(9, 'Black Panther', 2018),
(10, 'Avengers Infinity War', 2018),
(11, 'A Quiet Place', 2018),
(12, 'Aquaman', 2018),
(13, 'Toy Story 4', 2019),
(14, 'Avengers Endgame', 2019),
(15, 'Knives Out', 2019),
(16, 'Ford vs Ferrari', 2019);
--
-- Database: `phpsamples`
--
CREATE DATABASE IF NOT EXISTS `phpsamples` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpsamples`;

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

DROP TABLE IF EXISTS `analysis`;
CREATE TABLE IF NOT EXISTS `analysis` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `production` varchar(255) NOT NULL,
  `usage` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`ID`, `name`, `production`, `usage`) VALUES
(1, 'amna hmayun', '255', '200'),
(2, 'rashayal', '255', '150'),
(3, 'umer', '255', '150'),
(4, 'amin', '255', '150'),
(5, 'farhan', '255', '150'),
(6, 'hassaan', '255', '150'),
(7, 'zia', '255', '150'),
(8, 'huda', '255', '150');

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

DROP TABLE IF EXISTS `analytics`;
CREATE TABLE IF NOT EXISTS `analytics` (
  `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_name` varchar(35) NOT NULL,
  `marks` int(11) DEFAULT 0,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`student_id`, `student_name`, `marks`) VALUES
(1, 'farhan', 100),
(2, 'hassaan', 215),
(3, 'amin', 200),
(4, 'rashayal', 150),
(5, 'amna hmayun', 220),
(6, 'umer', 180);
--
-- Database: `powlyzer`
--
CREATE DATABASE IF NOT EXISTS `powlyzer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `powlyzer`;

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

DROP TABLE IF EXISTS `client_details`;
CREATE TABLE IF NOT EXISTS `client_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_detail_user_id_foreign` (`user_id`),
  KEY `client_detail_vendor_id_foreign` (`vendor_id`),
  KEY `client_detail_device_id_foreign` (`device_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`id`, `user_id`, `vendor_id`, `device_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 145, 12, 2, '123', '2021-04-06 07:00:00', '2021-04-20 07:00:00'),
(2, 150, 13, 1, 'qwerty', '2021-04-28 07:00:00', '2021-04-30 07:00:00'),
(3, 164, 12, 3, NULL, '2021-05-22 07:00:00', '2021-05-22 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `daily_consumptions`
--

DROP TABLE IF EXISTS `daily_consumptions`;
CREATE TABLE IF NOT EXISTS `daily_consumptions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `previous` double(8,2) NOT NULL,
  `current` double(8,2) NOT NULL,
  `consumption` double(8,2) NOT NULL,
  `datetime` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `daily_consumption_device_id_foreign` (`device_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_consumptions`
--

INSERT INTO `daily_consumptions` (`id`, `device_id`, `previous`, `current`, `consumption`, `datetime`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 250.00, 600.00, 350.00, '2021-05-10 05:32:18', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daily_productions`
--

DROP TABLE IF EXISTS `daily_productions`;
CREATE TABLE IF NOT EXISTS `daily_productions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `previous` double(8,2) NOT NULL,
  `current` double(8,2) NOT NULL,
  `production` double(8,2) NOT NULL,
  `datetime` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `daily_production_device_id_foreign` (`device_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_productions`
--

INSERT INTO `daily_productions` (`id`, `device_id`, `previous`, `current`, `production`, `datetime`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 0.00, 220.00, 130.00, '2021-05-10 00:00:00', NULL, '2021-05-11 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
CREATE TABLE IF NOT EXISTS `devices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Installed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firebase_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `model`, `description`, `Installed`, `remember_token`, `created_at`, `updated_at`, `firebase_id`, `vendor_id`) VALUES
(1, 'vmodel', 'vxxdmodel', '30vAR', '75 islamblock, azam gardan', NULL, '2021-04-28 07:00:00', '2021-04-30 07:00:00', '0001', 13),
(2, 'vmodel', '3 Phase', '50 Var', '35 street 4, sargodah', NULL, '2021-05-22 07:00:00', NULL, '0002', 12),
(3, 'vmodel', 'single phase', '30 Var', '12 house , street 31, bahria, lahore', NULL, '2021-05-22 07:00:00', NULL, NULL, 12),
(4, 'Dmodel', 'single phase', '30 Var', '', NULL, '2021-05-22 07:00:00', NULL, NULL, 12),
(5, 'Amodel', 'three phase', '200 Var', '', NULL, '2021-05-22 07:00:00', NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `device_parameters`
--

DROP TABLE IF EXISTS `device_parameters`;
CREATE TABLE IF NOT EXISTS `device_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `real_parameter_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_parameter_device_id_foreign` (`device_id`),
  KEY `device_parameter_parameter_id_foreign` (`real_parameter_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_parameters`
--

INSERT INTO `device_parameters` (`id`, `device_id`, `real_parameter_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 1, 3, NULL, NULL, NULL),
(4, 1, 4, NULL, NULL, NULL),
(5, 1, 5, NULL, NULL, NULL),
(6, 1, 6, NULL, NULL, NULL),
(7, 1, 7, NULL, NULL, NULL),
(8, 1, 8, NULL, NULL, NULL),
(9, 1, 9, NULL, NULL, NULL),
(10, 1, 10, NULL, NULL, NULL),
(11, 1, 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `timestamps`) VALUES
(5, 'birthday', '2021-04-26', '2021-04-27', '2021-05-24 20:17:23'),
(6, 'zoom meeting', '2021-05-13', '2021-05-14', '2021-05-24 20:17:30'),
(7, 'bill payment', '2021-04-27', '2021-04-28', '2021-05-24 20:57:18'),
(8, 'meeting', '2021-05-10', '2021-05-11', '2021-05-24 21:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `due` varchar(15) NOT NULL,
  `paid` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `price`, `due`, `paid`) VALUES
(1, '5000', '3000', '2000'),
(2, '8000', '5000', '3000'),
(3, '5000', '5000', '0'),
(4, '1000', '2000', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_11_121930_create_client_table', 1),
(5, '2021_04_19_131723_create_vendor_detail', 1),
(6, '2021_04_19_131814_client_detail', 1),
(7, '2021_04_19_131836_device', 1),
(8, '2021_04_19_131857_parameter', 1),
(9, '2021_04_19_131925_device_parameter', 1),
(10, '2021_04_19_131959_real_parameter_value', 1),
(11, '2021_04_19_132021_daily_consumption', 2),
(12, '2021_04_19_132046_daily_production', 3),
(13, '2021_04_19_132125_admin_detail', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
CREATE TABLE IF NOT EXISTS `parameters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `name`, `description`, `EU`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'currentA', 'first current parameter for three phase meter', 'A', NULL, NULL, NULL),
(2, 'currentB', 'second current parameter for three phase meter', 'A', NULL, NULL, NULL),
(3, 'currentC', 'third current parameter for three phase meter', 'A', NULL, NULL, NULL),
(4, 'voltageA', 'first voltage parameter for three phase meter', 'V', NULL, NULL, NULL),
(5, 'voltageB', 'second voltage parameter for three phase meter', 'V', NULL, NULL, NULL),
(6, 'voltageC', 'third voltage parameter for three phase meter', 'V', NULL, NULL, NULL),
(7, 'frequency', 'frequency from the energy meter', 'Hz', NULL, NULL, NULL),
(8, 'active', 'total active power from the energy meter', 'watt', NULL, NULL, NULL),
(9, 'reactive', 'total reactive power from the energy meter', 'watt', NULL, NULL, NULL),
(10, 'apparent', 'total apparent power from the energy meter', 'watt', NULL, NULL, NULL),
(11, 'power_factor', 'total power factor from the energy meter', 'watt', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `real_parameter_values`
--

DROP TABLE IF EXISTS `real_parameter_values`;
CREATE TABLE IF NOT EXISTS `real_parameter_values` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parameter_id` bigint(20) UNSIGNED NOT NULL,
  `value` double(8,2) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `real_parameter_value_parameter_id_foreign` (`parameter_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_parameter_values`
--

INSERT INTO `real_parameter_values` (`id`, `parameter_id`, `value`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 22.00, NULL, NULL, NULL),
(2, 2, 20.00, NULL, NULL, NULL),
(3, 3, 19.00, NULL, NULL, NULL),
(4, 4, 20.00, NULL, NULL, NULL),
(5, 5, 20.00, NULL, NULL, NULL),
(6, 6, 19.00, NULL, NULL, NULL),
(7, 7, 15.00, NULL, NULL, NULL),
(8, 8, 19.00, NULL, NULL, NULL),
(9, 9, 3.00, NULL, NULL, NULL),
(10, 10, 22.00, NULL, NULL, NULL),
(11, 11, 4.00, NULL, NULL, NULL),
(12, 1, 15.00, NULL, NULL, NULL),
(13, 2, 140.00, NULL, NULL, NULL),
(14, 3, 155.00, NULL, NULL, NULL),
(15, 4, 200.00, NULL, NULL, NULL),
(16, 5, 200.00, NULL, NULL, NULL),
(17, 6, 220.00, NULL, NULL, NULL),
(18, 7, 190.00, NULL, NULL, NULL),
(19, 8, 200.00, NULL, NULL, NULL),
(20, 9, 20.00, NULL, NULL, NULL),
(21, 10, 220.00, NULL, NULL, NULL),
(22, 11, 2.00, NULL, NULL, NULL),
(23, 1, 100.00, NULL, NULL, NULL),
(24, 2, 120.00, NULL, NULL, NULL),
(25, 3, 170.00, NULL, NULL, NULL),
(26, 4, 200.00, NULL, NULL, NULL),
(27, 5, 200.00, NULL, NULL, NULL),
(28, 6, 200.00, NULL, NULL, NULL),
(29, 7, 190.00, NULL, NULL, NULL),
(30, 8, 211.00, NULL, NULL, NULL),
(31, 9, 13.00, NULL, NULL, NULL),
(32, 10, 224.00, NULL, NULL, NULL),
(33, 11, 1.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(163, 'umer', 'vendor', 'umer@gmail.com', NULL, '$2y$10$aBHFRFcotOyBwc6fWdtlQ.eRVOJqCMvhBYk/V1AOV167QE2ml3/sO', NULL, '2021-05-16 17:59:26', '2021-05-16 17:59:26'),
(147, 'Luigi', 'vendor', 'Luigi@gmail.com', NULL, '$2y$10$b.36WNhqGdROkP744TZ3POoR24dNVD9VkPanImmFNmU21OEw58Z9O', NULL, '2021-04-27 19:12:09', '2021-04-27 19:12:09'),
(148, 'shari', 'client', 'drmohammadshaharyar@gmail.com', NULL, '$2y$10$w1Wg1/UcCOYFCEWG0P7n/u03DJdoFC7e0p0QlW1M.5JKD5i8HEBha', NULL, '2021-04-28 02:54:03', '2021-04-28 02:54:03'),
(149, 'laila', 'client', 'laila@gmail.com', NULL, '$2y$10$PQ/X3w/8BCAYExuV0tkSrOzxgQ5liEuzdk401T8/3BeDqNkkjO66q', NULL, '2021-04-28 06:01:52', '2021-04-28 06:01:52'),
(150, 'rash', 'client', 'rash@gmail.com', NULL, '$2y$10$.mS2LmB.i2eskVtyPfH5l.ftYb1bLS8j/9spJiUCvfN20v8gIcfNC', NULL, '2021-05-11 06:23:01', '2021-05-11 06:23:01'),
(165, 'ras', 'vendor', 'ras@gmail.com', NULL, '$2y$10$I4N8unTjlX7UnkjLFctn1O0L7M7w2Ah4ozjfuWSm0fmHgpguC9iN6', NULL, '2021-05-28 06:47:40', '2021-05-28 06:47:40'),
(164, 'umer', 'client', 'umerimranqureshi@gmail.com', NULL, '$2y$10$dJ34FSU.WzqBKseLlcaAZeVRd/PTa.xpB5Vsz8L2/jiT4o/qzN0eK', NULL, '2021-05-22 10:39:02', '2021-05-22 10:39:02'),
(154, 'amin', 'client', 'amin@gmail.com', NULL, '$2y$10$iedEsTYfp1d2BfFJxwHAl.aUXtqJiobYMH8NsucjLuSPyfjHOQ0s.', NULL, '2021-05-12 01:52:52', '2021-05-12 01:52:52'),
(155, 'farhan', 'vendor', 'farhan@gmail.com', NULL, '$2y$10$DujhNjfuzwlwXgeRaq9ntuAiZxCXBAzDush8.Oa9APoHRfNNsYplO', NULL, '2021-05-12 01:59:21', '2021-05-12 01:59:21'),
(156, 'fakhar', 'vendor', 'fakhar@gmail.com', NULL, '$2y$10$SaQ9rVcIxhKXXR/1SVPnEedo7d7pqlLn85S/B4wFDEyqNwOl/SF7u', NULL, '2021-05-12 02:04:23', '2021-05-12 02:04:23'),
(157, 'rashayal', 'admin', 'rashayal@gmail.com', NULL, '$2y$10$OMQBtppWKzlvI6BEp.q34OkQHkeP6YFqW3jDgMj7kF4sPyO.4QPoy', NULL, '2021-05-12 02:11:01', '2021-05-12 02:11:01'),
(158, 'shari', 'client', 'shari@gmail.com', NULL, '$2y$10$xVyvImIYUYZdAzxEqT97eOk3W7UHSpHwOMatXqZpsREkhkODxWpjm', NULL, '2021-05-12 02:26:01', '2021-05-12 02:26:01'),
(159, 'hassan', 'vendor', 'hassan@gmail.com', NULL, '$2y$10$.hETw9IiFe0K7QJeyhEXKORgMTjPMA1WwpK/h/Mi6LSjtlh19cURy', NULL, '2021-05-12 02:40:47', '2021-05-12 02:40:47'),
(160, 'hassaan', 'vendor', 'hassaan@gmail.com', NULL, '$2y$10$d0e5oMw7vZIgWUG/icvQ9O7LqoapjLZTSuNhkoDJAPL96ffjJfwTW', NULL, '2021-05-16 17:51:11', '2021-05-16 17:51:11'),
(166, 't', 'admin', 't@gmail.com', NULL, '$2y$10$zyy6TF06X.3FKwmRJRcDKe2sPRuvoxinoBiH4HBdPNI60X0Fo.k/2', NULL, '2021-05-28 06:48:49', '2021-05-28 06:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

DROP TABLE IF EXISTS `vendor_details`;
CREATE TABLE IF NOT EXISTS `vendor_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendor_detail_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`id`, `phone`, `cnic`, `user_id`, `created_at`, `updated_at`, `company_name`, `status`) VALUES
(12, '2345678890', '1234567890', 155, NULL, NULL, 'soloX', 0),
(13, '34567', '4567890-', 156, '2021-04-28 07:00:00', '2021-04-30 07:00:00', 'PakPower', 0);
--
-- Database: `registration`
--
CREATE DATABASE IF NOT EXISTS `registration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registration`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'taha', 'taha@gmail.com', 'ac812175fbea1db0550899be0d571eec'),
(2, 'yahya', 'yahya@gmail.com', '12345'),
(3, 'fakhar', 'fakhar@gmail.com', '69ee947bf183128691ab444b40b892dd'),
(4, 'zowaina', 'zowaina@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d'),
(5, 'ameen', 'ameen5611@gmail.com', '1bade75fb430a963fce3853c89ac529c'),
(6, 'Maryam', 'me@gmail.com', 'ab86a1e1ef70dff97959067b723c5c24'),
(7, 'mohid', 'mohid@gmail.com', 'caa2aedb7037f34b88d32f56be656211'),
(8, 'aa', 'aa@gmail.com', '4124bc0a9335c27f086f24ba207a4912');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
CREATE TABLE IF NOT EXISTS `device` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quan` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `name`, `quan`, `price`) VALUES
(1, 'arduino', 90, 1250),
(2, 'Node MCU', 90, 800),
(3, 'TCP Communication', 50, 2000),
(4, 'wifi Module ESP', 40, 250),
(5, 'breadboard', 100, 80),
(6, 'modbus convertor', 150, 40);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(20) NOT NULL AUTO_INCREMENT,
  `consumption` int(20) NOT NULL,
  `production` int(20) NOT NULL,
  `bill` int(20) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `consumption` varchar(255) DEFAULT NULL,
  `production` varchar(255) DEFAULT NULL,
  `vendorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `venderID` (`vendorID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `status`, `consumption`, `production`, `vendorID`) VALUES
(7, 'rashayal', 'rashayal004@gmail.com', 'db26ee047a4c86fbd2fba73503feccb6', '225 khayaban-eban', 0, '50', '30', 1),
(8, 'Aslam', 'e@ho.com', 'e1671797c52e15f763380b45e841ec32', '139 Tulip Block', 0, '100', '120', 1),
(9, 'Amna', 'q@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', '22 Iqbal Town', 0, '70', '100', 2),
(10, 'Akmal', 'tyt@gmail.com', '8cf74b70d3f60e6fb698eb7e5f2fb18b', '2234 PIA Society', 0, '250', '300', 3),
(11, 'Sarmad', 'aleem04@gmail.com', '705d7b3c3e30443b5a6c7cac25f6ba3c', '223, iqbal park,lahore', 1, '300', '250', 2),
(12, 'Aleena', 'ui@g.com', '7d5c009e4eb8bbc78647caeca308e61b', '493 Safari Villas,Bahria Town', 0, NULL, NULL, 2),
(13, 'Mahar', 'yy@gmail.com', '2fb1c5cf58867b5bbc9a1b145a86f3a0', '223,jt', 0, NULL, NULL, 3),
(14, 'Taib', 'emr@gmail.com', '98b84a80080b49716cdf31b29e11dbb4', '335, model town', 1, NULL, NULL, 1),
(15, 'Huda', 'the@gmail.com', '8fc42c6ddf9966db3b09e84365034357', '112 Jinnah Road', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendev`
--

DROP TABLE IF EXISTS `vendev`;
CREATE TABLE IF NOT EXISTS `vendev` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `install` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendev`
--

INSERT INTO `vendev` (`id`, `name`, `install`, `address`) VALUES
(1, 'Habib Ahmed', '26/05/2020', '233,opp park, azam t'),
(2, 'Manahyl saaed', '01/01/2021', '37 chambaili, bahria'),
(3, 'Rashayal Azhar', '19/12/2020', '225 khayaban-e-sadiq'),
(4, 'ameen imtiazz', '04/11/2020', '23,shamsher town');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usersid` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `client` int(11) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `due` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `username`, `email`, `password`, `usersid`, `address`, `status`, `client`, `paid`, `due`, `price`) VALUES
(1, 'Umar', 'qw@gmail.com', '006d2143154327a64d86a264aea225f3', NULL, NULL, 1, 1, 50000, 50000, '50000'),
(2, 'Imran', 'amna@gmail.com', 'fe64655948fe14be8d78b67ff31c212a', NULL, NULL, 1, 3, 100000, 50000, '100000'),
(3, 'maham', 'maham@gmail.com', '01b55e7d7d280bda3079121d5e418c86', NULL, NULL, 0, 4, 150000, 50000, '70000'),
(4, 'Amin', 'ty@gmail.com', '36f3af6226e0b5303e19b824e7442272', NULL, NULL, 1, 7, 250000, 100000, '80000'),
(5, 'Usman', 'tah@we.com', 'd1f1a0cafce848840f83feb1b0979d90', NULL, NULL, 1, 12, 400000, 200000, '200');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`vendorID`) REFERENCES `vendor` (`id`);
--
-- Database: `sample`
--
CREATE DATABASE IF NOT EXISTS `sample` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sample`;

-- --------------------------------------------------------

--
-- Table structure for table `datapoints`
--

DROP TABLE IF EXISTS `datapoints`;
CREATE TABLE IF NOT EXISTS `datapoints` (
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapoints`
--

INSERT INTO `datapoints` (`x`, `y`) VALUES
(2, 200),
(3, 180),
(4, 200),
(5, 180),
(6, 150),
(7, 280),
(9, 50),
(10, 170);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `wqms`
--
CREATE DATABASE IF NOT EXISTS `wqms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wqms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_requests`
--

DROP TABLE IF EXISTS `admin_requests`;
CREATE TABLE IF NOT EXISTS `admin_requests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `computer_operators`
--

DROP TABLE IF EXISTS `computer_operators`;
CREATE TABLE IF NOT EXISTS `computer_operators` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `computer_operators`
--

INSERT INTO `computer_operators` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2018-12-03 02:49:10', '2018-12-03 02:49:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managerial_users`
--

DROP TABLE IF EXISTS `managerial_users`;
CREATE TABLE IF NOT EXISTS `managerial_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `managerial_id` int(11) NOT NULL,
  `managerial_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managerial_users`
--

INSERT INTO `managerial_users` (`id`, `employee_no`, `department_name`, `image`, `managerial_id`, `managerial_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Q121', 'Water Quality', 'public/upload/image/17352074_988224387977014_4383090622310159734_n.jpg', 1, 'App\\Manager', '2018-12-03 02:48:10', '2018-12-03 02:48:10', NULL),
(2, 'E121', 'Water Quality', 'public/upload/image/areeb.jpg', 1, 'App\\computer_operator', '2018-12-03 02:49:10', '2018-12-03 02:49:10', NULL),
(3, 'E12123', 'Water Quality', 'public/upload/image/fakhar.jpg', 1, 'App\\station_inspector', '2018-12-03 02:52:34', '2018-12-03 02:52:34', NULL),
(4, '2147', 'DPT', 'public/upload/image/AP.PNG', 2, 'App\\station_inspector', '2018-12-26 14:17:34', '2018-12-26 14:17:34', NULL),
(5, '555', 'SCIT', 'public/upload/image/204158699_9111_A757E01352A548C094B9E780EFF162EE.jpg', 3, 'App\\station_inspector', '2018-12-26 14:18:53', '2018-12-26 14:18:53', NULL),
(6, '666', 'irrigation', 'public/upload/image/desktop.jpg', 4, 'App\\station_inspector', '2018-12-26 14:19:58', '2018-12-26 14:19:58', NULL),
(7, '222', 'WWF', 'public/upload/image/ali.jpg', 5, 'App\\station_inspector', '2018-12-26 14:21:06', '2018-12-26 14:21:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
CREATE TABLE IF NOT EXISTS `managers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2018-12-03 02:48:10', '2018-12-03 02:48:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

DROP TABLE IF EXISTS `maps`;
CREATE TABLE IF NOT EXISTS `maps` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitudes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `longitude`, `latitudes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '74.304931', '31.612346', '2018-12-03 04:14:10', '2018-12-03 04:14:10', NULL),
(2, '74.307335', '31.614685', '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(3, '74.305275', '31.613077', '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(4, '74.56017', '31.6024', '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(5, '74.533579', '31.59333', '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(6, '74.515887', '31.591088', '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(7, '74.515887', '31.589726', '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(8, '74.510499', '31.588565', '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(9, '74.504619', '31.587304', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(10, '74.501627', '31.586719', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(11, '74.494944', '31.58533', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(12, '74.489352', '31.584169', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(13, '74.483569', '31.582999', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(14, '74.477711', '31.581903', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(15, '74.472122', '31.580806', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(16, '74.466242', '31.579599', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(17, '74.459914', '31.578347', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(18, '74.45414', '31.577086', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(19, '74.448647', '31.575952', '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(20, '74.440372', '31.574417', '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(21, '74.435697', '31.573384', '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(22, '74.429891', '31.572305', '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(23, '74.423981', '31.570989', '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(24, '74.418038', '31.569773', '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(25, '74.412212', '31.568612', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(26, '74.406279', '31.567387', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(27, '74.40041', '31.566208', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(28, '74.39449', '31.564992', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(29, '74.388608', '31.563804', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(30, '74.383029', '31.562716', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(31, '74.377289', '31.561564', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(32, '74.371431', '31.560166', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(33, '74.365842', '31.558017', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(34, '74.360565', '31.5549', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(35, '74.356723', '31.551563', '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(36, '74.352698', '31.547284', '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(37, '74.29809', '31.490396', '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(38, '74.292134', '31.486215', '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(39, '74.286268', '31.482976', '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(40, '74.280505', '31.480505', '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(41, '74.273938', '31.478373', '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(42, '74.267598', '31.476909', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(43, '74.261525', '31.475564', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(44, '74.253792', '31.473826', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(45, '74.24658', '31.472206', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(46, '74.242139', '31.471254', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(47, '74.239466', '31.469241', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(48, '74.235302', '31.465599', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(49, '74.232179', '31.462854', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(50, '74.227939', '31.458873', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(51, '74.221466', '31.455898', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(52, '74.215574', '31.455542', '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(53, '74.210158', '31.452009', '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(54, '74.206294', '31.448604', '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(55, '74.351206', '31.545729', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(56, '74.348126', '31.542465', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(57, '74.345035', '31.539164', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(58, '74.34188', '31.535909', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(59, '74.339873', '31.53376', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(60, '74.336707', '31.53034', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(61, '74.332682', '31.526097', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(62, '74.329161', '31.522411', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(63, '74.325963', '31.51899', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(64, '74.322121', '31.514975', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(65, '74.318203', '31.51085', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(66, '74.314179', '31.506469', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(67, '74.311056', '31.503157', '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(68, '74.307943', '31.499837', '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(69, '74.305013', '31.496754', '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(70, '74.301385', '31.493168', '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2018_06_20_085500_create_users_table', 1),
(7, '2018_06_20_085615_create_manager_table', 1),
(8, '2018_06_20_085639_create_station_inspector_table', 1),
(9, '2018_06_20_085704_create_message_table', 1),
(10, '2018_06_21_080324_create-station-table', 1),
(11, '2018_06_23_093758_create_sensor_table', 1),
(12, '2018_06_23_093833_create_reading_table', 1),
(13, '2018_06_23_093855_create_map_table', 1),
(14, '2018_06_24_125712_create_visitor_table', 1),
(15, '2018_06_26_080514_create_user_has_message_table', 1),
(16, '2018_06_28_082110_create_admin_has_request_station_table', 1),
(17, '2018_09_24_183917_managerial_user', 1),
(18, '2018_09_24_190254_create_public_users_table', 1),
(19, '2018_09_24_192802_create_user_stations_table', 1),
(20, '2018_10_29_062609_computer_operator', 1),
(21, '2018_11_18_071803_videos', 1),
(22, '2018_12_03_062117_station_sensor', 1),
(23, '2018_12_03_082158_sensor', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public_users`
--

DROP TABLE IF EXISTS `public_users`;
CREATE TABLE IF NOT EXISTS `public_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `readings`
--

DROP TABLE IF EXISTS `readings`;
CREATE TABLE IF NOT EXISTS `readings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` double(8,2) NOT NULL,
  `station_sensor_id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=632 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `readings`
--

INSERT INTO `readings` (`id`, `value`, `station_sensor_id`, `map_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7.00, 5, 1, '2018-12-03 03:14:36', '2018-12-03 04:14:36', NULL),
(2, 7.00, 5, 1, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(3, 7.00, 5, 2, '2018-12-03 02:15:05', '2018-12-03 04:15:05', NULL),
(4, 7.00, 5, 3, '2018-12-03 01:15:05', '2018-12-03 04:15:05', NULL),
(5, 7.00, 5, 1, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(6, 7.00, 5, 2, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(7, 7.00, 5, 3, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(8, 7.00, 5, 1, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(9, 7.00, 5, 2, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(10, 7.00, 5, 3, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(11, 7.00, 5, 1, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(12, 7.00, 5, 2, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(13, 7.00, 5, 3, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(14, 7.00, 5, 1, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(15, 7.00, 5, 2, '2018-12-03 04:15:05', '2018-12-03 04:15:05', NULL),
(16, 7.00, 5, 3, '2018-12-03 04:15:06', '2018-12-03 04:15:06', NULL),
(17, 7.00, 5, 1, '2018-12-03 04:15:06', '2018-12-03 04:15:06', NULL),
(18, 7.00, 5, 2, '2018-12-03 04:15:06', '2018-12-03 04:15:06', NULL),
(19, 7.00, 5, 3, '2018-12-03 04:15:06', '2018-12-03 04:15:06', NULL),
(20, 6.50, 21, 4, '2018-12-01 01:25:42', '2018-12-27 01:25:42', NULL),
(21, 7.00, 22, 4, '2018-12-02 01:25:42', '2018-12-27 01:25:42', NULL),
(22, 530.00, 25, 4, '2018-12-04 01:25:42', '2018-12-27 01:25:42', NULL),
(23, 46.00, 30, 4, '2018-12-06 01:06:42', '2018-12-27 01:25:42', NULL),
(24, 1000.00, 34, 4, '2018-12-09 01:25:42', '2018-12-27 01:25:42', NULL),
(25, 1.50, 39, 4, '2018-12-15 01:25:42', '2018-12-27 01:25:42', NULL),
(26, 15.00, 43, 4, '2018-12-16 01:25:42', '2018-12-27 01:25:42', NULL),
(27, 6.60, 21, 5, '2018-12-11 01:25:42', '2018-12-27 01:25:42', NULL),
(28, 7.00, 22, 5, '2018-12-10 01:25:42', '2018-12-27 01:25:42', NULL),
(29, 530.00, 25, 5, '2018-12-09 01:25:42', '2018-12-27 01:25:42', NULL),
(30, 49.00, 30, 5, '2018-12-05 01:25:42', '2018-12-27 01:25:42', NULL),
(31, 999.00, 34, 5, '2018-12-04 01:25:42', '2018-12-27 01:25:42', NULL),
(32, 1.40, 39, 5, '2018-12-10 01:25:42', '2018-12-27 01:25:42', NULL),
(33, 18.00, 43, 5, '2018-12-01 01:25:42', '2018-12-27 01:25:42', NULL),
(34, 6.50, 21, 6, '2018-12-02 01:25:42', '2018-12-27 01:25:42', NULL),
(35, 7.00, 22, 6, '2018-12-03 01:25:42', '2018-12-27 01:25:42', NULL),
(36, 530.00, 25, 6, '2018-12-04 01:25:42', '2018-12-27 01:25:42', NULL),
(37, 46.00, 30, 6, '2018-12-06 01:25:42', '2018-12-27 01:25:42', NULL),
(38, 1001.00, 34, 6, '2018-12-20 01:25:42', '2018-12-27 01:25:42', NULL),
(39, 1.60, 39, 6, '2018-12-21 01:25:42', '2018-12-27 01:25:42', NULL),
(40, 20.00, 43, 6, '2018-12-22 01:25:42', '2018-12-27 01:25:42', NULL),
(41, 6.90, 21, 7, '2018-12-16 01:25:42', '2018-12-27 01:25:42', NULL),
(42, 7.00, 22, 7, '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(43, 530.00, 25, 7, '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(44, 49.00, 30, 7, '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(45, 1000.00, 34, 7, '2018-12-09 01:25:42', '2018-12-27 01:25:42', NULL),
(46, 1.40, 39, 7, '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(47, 21.00, 43, 7, '2018-12-06 01:25:42', '2018-12-27 01:25:42', NULL),
(48, 7.00, 21, 8, '2018-12-06 01:25:42', '2018-12-27 01:25:42', NULL),
(49, 7.00, 22, 8, '2018-12-04 01:25:42', '2018-12-27 01:25:42', NULL),
(50, 530.00, 25, 8, '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(51, 48.00, 30, 8, '2018-12-11 01:25:42', '2018-12-27 01:25:42', NULL),
(52, 1002.00, 34, 8, '2018-12-27 01:25:42', '2018-12-27 01:25:42', NULL),
(53, 1.60, 39, 8, '2018-12-12 01:25:43', '2018-12-27 01:25:43', NULL),
(54, 20.00, 43, 8, '2018-12-13 01:25:43', '2018-12-27 01:25:43', NULL),
(55, 6.60, 21, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(56, 7.00, 22, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(57, 530.00, 25, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(58, 47.00, 30, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(59, 998.00, 34, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(60, 1.50, 39, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(61, 24.00, 43, 9, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(62, 6.90, 21, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(63, 7.00, 22, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(64, 530.00, 25, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(65, 48.00, 30, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(66, 1000.00, 34, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(67, 1.60, 39, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(68, 25.00, 43, 10, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(69, 7.10, 21, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(70, 7.00, 22, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(71, 530.00, 25, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(72, 49.00, 30, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(73, 1002.00, 34, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(74, 1.40, 39, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(75, 25.00, 43, 11, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(76, 7.20, 21, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(77, 7.00, 22, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(78, 530.00, 25, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(79, 48.00, 30, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(80, 1003.00, 34, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(81, 1.60, 39, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(82, 24.00, 43, 3, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(83, 7.50, 21, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(84, 7.00, 22, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(85, 530.00, 25, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(86, 46.00, 30, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(87, 1000.00, 34, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(88, 1.50, 39, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(89, 25.00, 43, 1, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(90, 7.50, 21, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(91, 7.00, 22, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(92, 530.00, 25, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(93, 49.00, 30, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(94, 1001.00, 34, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(95, 1.40, 39, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(96, 24.00, 43, 12, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(97, 7.00, 21, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(98, 7.00, 22, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(99, 530.00, 25, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(100, 48.50, 30, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(101, 999.90, 34, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(102, 1.60, 39, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(103, 26.00, 43, 13, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(104, 7.30, 21, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(105, 7.00, 22, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(106, 530.00, 25, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(107, 49.00, 30, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(108, 1000.00, 34, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(109, 1.50, 39, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(110, 22.00, 43, 14, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(111, 7.10, 21, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(112, 7.00, 22, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(113, 530.00, 25, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(114, 47.00, 30, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(115, 1001.00, 34, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(116, 1.50, 39, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(117, 23.00, 43, 15, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(118, 7.40, 21, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(119, 7.00, 22, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(120, 530.00, 25, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(121, 49.00, 30, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(122, 1002.00, 34, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(123, 1.60, 39, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(124, 23.00, 43, 16, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(125, 7.30, 21, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(126, 7.00, 22, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(127, 530.00, 25, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(128, 48.00, 30, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(129, 1002.00, 34, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(130, 1.50, 39, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(131, 25.00, 43, 17, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(132, 7.10, 21, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(133, 7.00, 22, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(134, 530.00, 25, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(135, 49.00, 30, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(136, 1000.00, 34, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(137, 1.56, 39, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(138, 24.00, 43, 18, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(139, 7.30, 21, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(140, 7.00, 22, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(141, 530.00, 25, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(142, 49.00, 30, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(143, 1000.00, 34, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(144, 1.50, 39, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(145, 25.00, 43, 19, '2018-12-27 01:25:43', '2018-12-27 01:25:43', NULL),
(146, 6.50, 21, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(147, 7.00, 22, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(148, 530.00, 25, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(149, 46.00, 30, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(150, 1000.00, 34, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(151, 1.50, 39, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(152, 15.00, 43, 4, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(153, 6.60, 21, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(154, 7.00, 22, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(155, 530.00, 25, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(156, 49.00, 30, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(157, 999.00, 34, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(158, 1.40, 39, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(159, 18.00, 43, 5, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(160, 6.50, 21, 6, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(161, 7.00, 22, 6, '2018-12-27 01:27:27', '2018-12-27 01:27:27', NULL),
(162, 530.00, 25, 6, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(163, 46.00, 30, 6, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(164, 1001.00, 34, 6, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(165, 1.60, 39, 6, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(166, 20.00, 43, 6, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(167, 6.90, 21, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(168, 7.00, 22, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(169, 530.00, 25, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(170, 49.00, 30, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(171, 1000.00, 34, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(172, 1.40, 39, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(173, 21.00, 43, 7, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(174, 7.00, 21, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(175, 7.00, 22, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(176, 530.00, 25, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(177, 48.00, 30, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(178, 1002.00, 34, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(179, 1.60, 39, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(180, 20.00, 43, 8, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(181, 6.60, 21, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(182, 7.00, 22, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(183, 530.00, 25, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(184, 47.00, 30, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(185, 998.00, 34, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(186, 1.50, 39, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(187, 24.00, 43, 9, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(188, 6.90, 21, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(189, 7.00, 22, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(190, 530.00, 25, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(191, 48.00, 30, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(192, 1000.00, 34, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(193, 1.60, 39, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(194, 25.00, 43, 10, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(195, 7.10, 21, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(196, 7.00, 22, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(197, 530.00, 25, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(198, 49.00, 30, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(199, 1002.00, 34, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(200, 1.40, 39, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(201, 25.00, 43, 11, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(202, 7.20, 21, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(203, 7.00, 22, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(204, 530.00, 25, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(205, 48.00, 30, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(206, 1003.00, 34, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(207, 1.60, 39, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(208, 24.00, 43, 3, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(209, 7.50, 21, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(210, 7.00, 22, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(211, 530.00, 25, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(212, 46.00, 30, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(213, 1000.00, 34, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(214, 1.50, 39, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(215, 25.00, 43, 1, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(216, 7.50, 21, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(217, 7.00, 22, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(218, 530.00, 25, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(219, 49.00, 30, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(220, 1001.00, 34, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(221, 1.40, 39, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(222, 24.00, 43, 12, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(223, 7.00, 21, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(224, 7.00, 22, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(225, 530.00, 25, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(226, 48.50, 30, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(227, 999.90, 34, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(228, 1.60, 39, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(229, 26.00, 43, 13, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(230, 7.30, 21, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(231, 7.00, 22, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(232, 530.00, 25, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(233, 49.00, 30, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(234, 1000.00, 34, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(235, 1.50, 39, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(236, 22.00, 43, 14, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(237, 7.10, 21, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(238, 7.00, 22, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(239, 530.00, 25, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(240, 47.00, 30, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(241, 1001.00, 34, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(242, 1.50, 39, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(243, 23.00, 43, 15, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(244, 7.40, 21, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(245, 7.00, 22, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(246, 530.00, 25, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(247, 49.00, 30, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(248, 1002.00, 34, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(249, 1.60, 39, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(250, 23.00, 43, 16, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(251, 7.30, 21, 17, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(252, 7.00, 22, 17, '2018-12-27 01:27:28', '2018-12-27 01:27:28', NULL),
(253, 530.00, 25, 17, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(254, 48.00, 30, 17, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(255, 1002.00, 34, 17, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(256, 1.50, 39, 17, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(257, 25.00, 43, 17, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(258, 7.10, 21, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(259, 7.00, 22, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(260, 530.00, 25, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(261, 49.00, 30, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(262, 1000.00, 34, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(263, 1.56, 39, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(264, 24.00, 43, 18, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(265, 7.30, 21, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(266, 7.00, 22, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(267, 530.00, 25, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(268, 49.00, 30, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(269, 1000.00, 34, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(270, 1.50, 39, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(271, 25.00, 43, 19, '2018-12-27 01:27:29', '2018-12-27 01:27:29', NULL),
(272, 7.30, 15, 19, '2018-12-02 01:31:30', '2018-12-27 01:31:30', NULL),
(273, 7.00, 16, 19, '2018-12-01 01:31:30', '2018-12-27 01:31:30', NULL),
(274, 530.00, 23, 19, '2018-12-15 01:31:30', '2018-12-27 01:31:30', NULL),
(275, 49.00, 27, 19, '2018-12-14 01:31:30', '2018-12-27 01:31:30', NULL),
(276, 1000.00, 31, 19, '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(277, 1.50, 35, 19, '2018-12-10 01:31:30', '2018-12-27 01:31:30', NULL),
(278, 25.00, 45, 19, '2018-12-04 01:31:30', '2018-12-27 01:31:30', NULL),
(279, 6.70, 15, 20, '2018-12-04 01:31:30', '2018-12-27 01:31:30', NULL),
(280, 7.00, 16, 20, '2018-12-03 01:31:30', '2018-12-27 01:31:30', NULL),
(281, 530.00, 23, 20, '2018-12-16 01:31:30', '2018-12-27 01:31:30', NULL),
(282, 47.00, 27, 20, '2018-12-15 01:31:30', '2018-12-27 01:31:30', NULL),
(283, 1000.00, 31, 20, '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(284, 1.50, 35, 20, '2018-12-12 01:31:30', '2018-12-27 01:31:30', NULL),
(285, 17.00, 45, 20, '2018-12-05 01:31:30', '2018-12-27 01:31:30', NULL),
(286, 6.60, 15, 21, '2018-12-06 01:31:30', '2018-12-27 01:31:30', NULL),
(287, 7.00, 16, 21, '2018-12-05 01:31:30', '2018-12-27 01:31:30', NULL),
(288, 530.00, 23, 21, '2018-12-17 01:31:30', '2018-12-27 01:31:30', NULL),
(289, 46.00, 27, 21, '2018-12-16 01:31:30', '2018-12-27 01:31:30', NULL),
(290, 1002.00, 31, 21, '2018-12-15 01:31:30', '2018-12-27 01:31:30', NULL),
(291, 1.60, 35, 21, '2018-12-13 01:31:30', '2018-12-27 01:31:30', NULL),
(292, 18.00, 45, 21, '2018-12-07 01:31:30', '2018-12-27 01:31:30', NULL),
(293, 6.70, 15, 22, '2018-12-07 01:31:30', '2018-12-27 01:31:30', NULL),
(294, 7.00, 16, 22, '2018-12-07 01:31:30', '2018-12-27 01:31:30', NULL),
(295, 530.00, 23, 22, '2018-12-18 01:31:30', '2018-12-27 01:31:30', NULL),
(296, 47.00, 27, 22, '2018-12-06 01:31:30', '2018-12-27 01:31:30', NULL),
(297, 1001.00, 31, 22, '2018-12-16 01:31:30', '2018-12-27 01:31:30', NULL),
(298, 1.50, 35, 22, '2018-12-16 01:31:30', '2018-12-27 01:31:30', NULL),
(299, 19.00, 45, 22, '2018-12-10 01:31:30', '2018-12-27 01:31:30', NULL),
(300, 6.80, 15, 23, '2018-12-15 01:31:30', '2018-12-27 01:31:30', NULL),
(301, 7.00, 16, 23, '2018-12-09 01:31:30', '2018-12-27 01:31:30', NULL),
(302, 530.00, 23, 23, '2018-12-19 01:31:30', '2018-12-27 01:31:30', NULL),
(303, 48.00, 27, 23, '2018-12-18 01:31:30', '2018-12-27 01:31:30', NULL),
(304, 1000.00, 31, 23, '2018-12-27 01:31:30', '2018-12-27 01:31:30', NULL),
(305, 1.67, 35, 23, '2018-12-17 01:31:30', '2018-12-27 01:31:30', NULL),
(306, 20.00, 45, 23, '2018-12-15 01:31:30', '2018-12-27 01:31:30', NULL),
(307, 6.90, 15, 24, '2018-12-16 01:31:30', '2018-12-27 01:31:30', NULL),
(308, 7.00, 16, 24, '2018-12-11 01:31:30', '2018-12-27 01:31:30', NULL),
(309, 530.00, 23, 24, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(310, 50.00, 27, 24, '2018-12-04 01:31:31', '2018-12-27 01:31:31', NULL),
(311, 998.00, 31, 24, '2018-12-17 01:31:31', '2018-12-27 01:31:31', NULL),
(312, 1.56, 35, 24, '2018-12-19 01:31:31', '2018-12-27 01:31:31', NULL),
(313, 25.00, 45, 24, '2018-12-19 01:31:31', '2018-12-27 01:31:31', NULL),
(314, 7.10, 15, 25, '2018-12-17 01:31:31', '2018-12-27 01:31:31', NULL),
(315, 7.00, 16, 25, '2018-12-21 01:31:31', '2018-12-27 01:31:31', NULL),
(316, 530.00, 23, 25, '2018-12-21 01:31:31', '2018-12-27 01:31:31', NULL),
(317, 49.00, 27, 25, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(318, 1001.00, 31, 25, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(319, 1.57, 35, 25, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(320, 24.00, 45, 25, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(321, 7.20, 15, 26, '2018-12-18 01:31:31', '2018-12-27 01:31:31', NULL),
(322, 7.00, 16, 26, '2018-12-22 01:31:31', '2018-12-27 01:31:31', NULL),
(323, 530.00, 23, 26, '2018-12-22 01:31:31', '2018-12-27 01:31:31', NULL),
(324, 49.00, 27, 26, '2018-12-21 01:31:31', '2018-12-27 01:31:31', NULL),
(325, 1002.00, 31, 26, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(326, 1.40, 35, 26, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(327, 25.00, 45, 26, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(328, 7.10, 15, 27, '2018-12-19 01:31:31', '2018-12-27 01:31:31', NULL),
(329, 7.00, 16, 27, '2018-12-23 01:31:31', '2018-12-27 01:31:31', NULL),
(330, 530.00, 23, 27, '2018-12-23 01:31:31', '2018-12-27 01:31:31', NULL),
(331, 50.00, 27, 27, '2018-12-22 01:31:31', '2018-12-27 01:31:31', NULL),
(332, 1000.00, 31, 27, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(333, 1.50, 35, 27, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(334, 23.00, 45, 27, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(335, 7.60, 15, 28, '2018-12-20 01:31:31', '2018-12-27 01:31:31', NULL),
(336, 7.00, 16, 28, '2018-12-24 01:31:31', '2018-12-27 01:31:31', NULL),
(337, 530.00, 23, 28, '2018-12-24 01:31:31', '2018-12-27 01:31:31', NULL),
(338, 51.00, 27, 28, '2018-12-23 01:31:31', '2018-12-27 01:31:31', NULL),
(339, 1001.00, 31, 28, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(340, 1.40, 35, 28, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(341, 24.00, 45, 28, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(342, 7.40, 15, 29, '2018-12-21 01:31:31', '2018-12-27 01:31:31', NULL),
(343, 7.00, 16, 29, '2018-12-25 01:31:31', '2018-12-27 01:31:31', NULL),
(344, 530.00, 23, 29, '2018-12-25 01:31:31', '2018-12-27 01:31:31', NULL),
(345, 50.00, 27, 29, '2018-12-24 01:31:31', '2018-12-27 01:31:31', NULL),
(346, 1002.00, 31, 29, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(347, 1.50, 35, 29, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(348, 23.00, 45, 29, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(349, 7.10, 15, 30, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(350, 7.00, 16, 30, '2018-12-26 01:31:31', '2018-12-27 01:31:31', NULL),
(351, 530.00, 23, 30, '2018-12-26 01:31:31', '2018-12-27 01:31:31', NULL),
(352, 49.00, 27, 30, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(353, 999.00, 31, 30, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(354, 1.40, 35, 30, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(355, 25.00, 45, 30, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(356, 7.50, 15, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(357, 7.00, 16, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(358, 530.00, 23, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(359, 51.00, 27, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(360, 1001.00, 31, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(361, 1.60, 35, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(362, 25.00, 45, 31, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(363, 7.01, 15, 32, '2018-12-01 01:31:31', '2018-12-27 01:31:31', NULL),
(364, 7.00, 16, 32, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(365, 530.00, 23, 32, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(366, 48.00, 27, 32, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(367, 1000.00, 31, 32, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(368, 1.58, 35, 32, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(369, 27.00, 45, 32, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(370, 7.60, 15, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(371, 7.00, 16, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(372, 530.00, 23, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(373, 50.00, 27, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(374, 1001.00, 31, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(375, 1.60, 35, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(376, 25.00, 45, 33, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(377, 7.10, 15, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(378, 7.00, 16, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(379, 530.00, 23, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(380, 49.00, 27, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(381, 1003.00, 31, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(382, 1.57, 35, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(383, 23.00, 45, 34, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(384, 7.18, 15, 35, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(385, 7.00, 16, 35, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(386, 530.00, 23, 35, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(387, 50.00, 27, 35, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(388, 1001.00, 31, 35, '2018-12-27 01:31:31', '2018-12-27 01:31:31', NULL),
(389, 1.53, 35, 35, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(390, 23.00, 45, 35, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(391, 7.20, 15, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(392, 7.00, 16, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(393, 530.00, 23, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(394, 49.00, 27, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(395, 1000.00, 31, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(396, 1.52, 35, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(397, 24.00, 45, 36, '2018-12-27 01:31:32', '2018-12-27 01:31:32', NULL),
(398, 7.40, 19, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(399, 7.00, 20, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(400, 530.00, 26, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(401, 50.00, 29, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(402, 1001.00, 33, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(403, 1.56, 37, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(404, 24.00, 47, 37, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(405, 6.67, 19, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(406, 7.00, 20, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(407, 530.00, 26, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(408, 49.50, 29, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(409, 999.90, 33, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(410, 1.45, 37, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(411, 18.90, 47, 38, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(412, 6.56, 19, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(413, 7.00, 20, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(414, 530.00, 26, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(415, 46.70, 29, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(416, 1001.20, 33, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(417, 1.57, 37, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(418, 21.00, 47, 39, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(419, 7.00, 19, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(420, 7.00, 20, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(421, 530.00, 26, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(422, 49.30, 29, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(423, 1000.20, 33, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(424, 1.46, 37, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(425, 22.00, 47, 40, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(426, 7.10, 19, 41, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(427, 7.00, 20, 41, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(428, 530.00, 26, 41, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(429, 48.90, 29, 41, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(430, 1000.00, 33, 41, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(431, 1.52, 37, 41, '2018-12-27 01:34:01', '2018-12-27 01:34:01', NULL),
(432, 22.00, 47, 41, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(433, 6.68, 19, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(434, 7.00, 20, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(435, 530.00, 26, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(436, 47.98, 29, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(437, 998.98, 33, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(438, 1.59, 37, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(439, 24.76, 47, 42, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(440, 7.20, 19, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(441, 7.00, 20, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(442, 530.00, 26, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(443, 48.90, 29, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(444, 1001.00, 33, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(445, 1.78, 37, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(446, 25.54, 47, 43, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(447, 7.32, 19, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(448, 7.00, 20, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(449, 530.00, 26, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(450, 49.76, 29, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(451, 1002.00, 33, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(452, 1.54, 37, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(453, 25.20, 47, 44, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(454, 7.23, 19, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(455, 7.00, 20, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(456, 530.00, 26, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(457, 48.90, 29, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(458, 1003.00, 33, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(459, 1.68, 37, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(460, 24.56, 47, 45, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(461, 7.00, 19, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(462, 7.00, 20, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(463, 530.00, 26, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(464, 47.00, 29, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(465, 1002.00, 33, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(466, 1.60, 37, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(467, 24.00, 47, 46, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(468, 7.70, 19, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(469, 7.00, 20, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(470, 530.00, 26, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(471, 49.30, 29, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(472, 1003.00, 33, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(473, 1.45, 37, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(474, 25.00, 47, 47, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(475, 7.60, 19, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(476, 7.00, 20, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(477, 530.00, 26, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(478, 49.00, 29, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(479, 1001.00, 33, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(480, 1.67, 37, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(481, 25.00, 47, 48, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(482, 7.20, 19, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(483, 7.00, 20, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(484, 530.00, 26, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(485, 49.20, 29, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(486, 1002.00, 33, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(487, 1.56, 37, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(488, 23.00, 47, 49, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(489, 7.12, 19, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(490, 7.00, 20, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(491, 530.00, 26, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(492, 48.00, 29, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(493, 1002.00, 33, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(494, 1.50, 37, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(495, 24.00, 47, 50, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(496, 8.00, 19, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(497, 7.00, 20, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(498, 530.00, 26, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(499, 50.00, 29, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(500, 1003.00, 33, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(501, 1.56, 37, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(502, 24.00, 47, 51, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(503, 7.10, 19, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(504, 7.00, 20, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(505, 530.00, 26, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(506, 49.00, 29, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(507, 1003.00, 33, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(508, 1.45, 37, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(509, 26.00, 47, 52, '2018-12-27 01:34:02', '2018-12-27 01:34:02', NULL),
(510, 7.12, 19, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(511, 7.00, 20, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(512, 530.00, 26, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(513, 49.50, 29, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(514, 1001.00, 33, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(515, 1.50, 37, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(516, 25.00, 47, 53, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(517, 7.30, 19, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(518, 7.00, 20, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(519, 530.00, 26, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(520, 49.00, 29, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(521, 1000.00, 33, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(522, 1.50, 37, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(523, 25.00, 47, 54, '2018-12-27 01:34:03', '2018-12-27 01:34:03', NULL),
(524, 7.20, 17, 36, '2018-12-27 01:37:58', '2018-12-27 01:37:58', NULL),
(525, 530.00, 24, 36, '2018-12-27 01:37:58', '2018-12-27 01:37:58', NULL),
(526, 49.00, 28, 36, '2018-12-27 01:37:58', '2018-12-27 01:37:58', NULL),
(527, 1000.00, 32, 36, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(528, 1.52, 36, 36, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(529, 24.00, 42, 36, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(530, 6.60, 17, 55, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(531, 530.00, 24, 55, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(532, 49.00, 28, 55, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(533, 999.00, 32, 55, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(534, 1.40, 36, 55, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(535, 18.00, 42, 55, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(536, 6.60, 17, 56, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(537, 530.00, 24, 56, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(538, 47.00, 28, 56, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(539, 1001.10, 32, 56, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(540, 1.67, 36, 56, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(541, 21.00, 42, 56, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(542, 7.10, 17, 57, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(543, 530.00, 24, 57, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(544, 49.30, 28, 57, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(545, 1000.20, 32, 57, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(546, 1.45, 36, 57, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(547, 22.00, 42, 57, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(548, 7.20, 17, 58, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(549, 530.00, 24, 58, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(550, 48.30, 28, 58, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(551, 1001.00, 32, 58, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(552, 1.67, 36, 58, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(553, 21.00, 42, 58, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(554, 7.30, 17, 59, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(555, 530.00, 24, 59, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(556, 48.00, 28, 59, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(557, 1000.00, 32, 59, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(558, 1.47, 36, 59, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(559, 25.00, 42, 59, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(560, 7.10, 17, 60, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(561, 530.00, 24, 60, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(562, 49.00, 28, 60, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(563, 1001.00, 32, 60, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(564, 1.68, 36, 60, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(565, 26.00, 42, 60, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(566, 7.40, 17, 61, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(567, 530.00, 24, 61, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(568, 50.00, 28, 61, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(569, 1003.00, 32, 61, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(570, 1.50, 36, 61, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(571, 24.00, 42, 61, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(572, 7.10, 17, 62, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(573, 530.00, 24, 62, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(574, 49.00, 28, 62, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(575, 1002.00, 32, 62, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(576, 1.68, 36, 62, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(577, 25.00, 42, 62, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(578, 7.57, 17, 63, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(579, 530.00, 24, 63, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(580, 46.70, 28, 63, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(581, 1000.00, 32, 63, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(582, 1.56, 36, 63, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(583, 25.50, 42, 63, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(584, 7.59, 17, 64, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(585, 530.00, 24, 64, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(586, 50.00, 28, 64, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(587, 1000.00, 32, 64, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(588, 1.65, 36, 64, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(589, 23.00, 42, 64, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(590, 7.30, 17, 65, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(591, 530.00, 24, 65, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(592, 49.00, 28, 65, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(593, 1000.00, 32, 65, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(594, 1.66, 36, 65, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(595, 27.00, 42, 65, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(596, 7.20, 17, 66, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(597, 530.00, 24, 66, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(598, 49.50, 28, 66, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(599, 1001.00, 32, 66, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(600, 1.53, 36, 66, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(601, 24.00, 42, 66, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(602, 7.12, 17, 67, '2018-12-27 01:37:59', '2018-12-27 01:37:59', NULL),
(603, 530.00, 24, 67, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(604, 49.00, 28, 67, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(605, 1000.00, 32, 67, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(606, 1.55, 36, 67, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(607, 24.00, 42, 67, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(608, 7.45, 17, 68, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(609, 530.00, 24, 68, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(610, 49.80, 28, 68, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(611, 1001.00, 32, 68, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(612, 1.67, 36, 68, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(613, 24.00, 42, 68, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(614, 7.40, 17, 69, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(615, 530.00, 24, 69, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(616, 49.00, 28, 69, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(617, 1001.00, 32, 69, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(618, 1.52, 36, 69, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(619, 25.60, 42, 69, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(620, 7.13, 17, 70, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(621, 530.00, 24, 70, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(622, 49.65, 28, 70, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(623, 1000.43, 32, 70, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(624, 1.56, 36, 70, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(625, 24.65, 42, 70, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(626, 7.30, 17, 37, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(627, 530.00, 24, 37, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(628, 49.00, 28, 37, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(629, 1000.00, 32, 37, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(630, 1.50, 36, 37, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL),
(631, 25.00, 42, 37, '2018-12-27 01:38:00', '2018-12-27 01:38:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sensorsid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stability_criteria` double(8,2) NOT NULL,
  `start_range` double(8,2) NOT NULL,
  `end_range` double(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`id`, `sensorsid`, `name`, `stability_criteria`, `start_range`, `end_range`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Raviph1', 'pH', 6.00, 2.50, 15.00, 1, NULL, '2018-12-03 03:34:48', '2018-12-03 06:11:52'),
(9, 'e713', 'Current flow', 7.00, 3.00, 11.00, 1, NULL, '2018-12-26 14:05:38', '2018-12-26 14:05:38'),
(10, 'e715', 'Flow total', 600.00, 400.00, 900.00, 1, NULL, '2018-12-26 14:07:41', '2018-12-26 14:07:41'),
(11, 'e716', 'turbidity', 49.00, 15.00, 60.00, 1, NULL, '2018-12-26 14:08:22', '2018-12-26 14:08:22'),
(12, 'e717', 'total dissolved solid', 1000.00, 400.00, 1500.00, 1, NULL, '2018-12-26 14:09:08', '2018-12-26 14:09:08'),
(13, 'E718', 'Conductivity', 0.50, 0.00, 7.00, 1, NULL, '2018-12-26 14:09:55', '2018-12-26 14:09:55'),
(14, 'e719', 'temperature', 5.00, 0.00, 40.00, 1, NULL, '2018-12-26 14:10:40', '2018-12-26 14:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `station_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station_name`, `address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shahdara Ravi', '31.608543,74.282872,31.596262,74.303471,31.623454,74.343983,31.662327,74.359776,31.678398,74.360806,31.68132,74.344327,31.660574,74.3354,31.647715,74.335744,31.626377,74.325101,31.619946,74.297635', 2, '2018-12-03 02:50:14', '2018-12-03 02:53:04', NULL),
(2, 'Gulsan Ravi', '31.6041,74.281842,31.592988,74.299008,31.521898,74.227254,31.508727,74.204938,31.511947,74.185025,31.539748,74.22485,31.571345,74.254376', 0, '2018-12-03 02:50:45', '2018-12-03 02:50:45', NULL),
(3, 'shadman to Harbanspure canal Rd', '31.547293,74.343926 , 31.539978,74.353539 , 31.535589,74.363152 , 31.562506,74.448983 , 31.590878,74.436051 , 31.573329,74.359833 , 31.556948,74.335801', 2, '2018-12-26 13:46:23', '2018-12-27 05:10:46', NULL),
(4, 'Jinnah hospital to jail road', '31.553437,74.326188 , 31.546415,74.341294 , 31.530615,74.3667 , 31.481439,74.309022 , 31.504859,74.287049', 2, '2018-12-26 13:53:58', '2018-12-27 05:11:32', NULL),
(5, 'jinnah hospital to kot gujr main street', '31.506225,74.278123 , 31.476949,74.311768 , 31.408994,74.180619 , 31.430089,74.128434 , 31.491003,74.205767', 2, '2018-12-26 13:58:29', '2018-12-27 05:12:12', NULL),
(6, 'jallo park to wahga border canal Rd', '31.587076,74.4404 , 31.559581,74.453789 , 31.591755,74.574639 , 31.62158,74.53756', 2, '2018-12-26 14:02:48', '2018-12-27 05:09:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `station_inspectors`
--

DROP TABLE IF EXISTS `station_inspectors`;
CREATE TABLE IF NOT EXISTS `station_inspectors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `super_admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `station_inspectors`
--

INSERT INTO `station_inspectors` (`id`, `super_admin_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2018-12-03 02:52:34', '2018-12-03 02:52:34', NULL),
(2, 1, '2018-12-26 14:17:33', '2018-12-26 14:17:33', NULL),
(3, 1, '2018-12-26 14:18:53', '2018-12-26 14:18:53', NULL),
(4, 1, '2018-12-26 14:19:58', '2018-12-26 14:19:58', NULL),
(5, 1, '2018-12-26 14:21:06', '2018-12-26 14:21:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `station_sensors`
--

DROP TABLE IF EXISTS `station_sensors`;
CREATE TABLE IF NOT EXISTS `station_sensors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `station_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sensor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `station_sensors`
--

INSERT INTO `station_sensors` (`id`, `station_id`, `sensor_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '1', '5', '2018-12-03 03:36:09', '2018-12-03 03:36:09', NULL),
(8, '1', '5', '2018-12-03 06:27:06', '2018-12-03 06:27:11', '2018-12-03 06:27:11'),
(9, '1', '9', '2018-12-26 14:05:38', '2018-12-26 14:05:38', NULL),
(10, '1', '10', '2018-12-26 14:07:41', '2018-12-26 14:07:41', NULL),
(11, '1', '11', '2018-12-26 14:08:22', '2018-12-26 14:08:22', NULL),
(12, '1', '12', '2018-12-26 14:09:08', '2018-12-26 14:09:08', NULL),
(13, '1', '13', '2018-12-26 14:09:55', '2018-12-26 14:09:55', NULL),
(14, '1', '14', '2018-12-26 14:10:40', '2018-12-26 14:10:40', NULL),
(15, '3', '5', '2018-12-27 00:44:11', '2018-12-27 00:44:11', NULL),
(16, '3', '9', '2018-12-27 00:44:24', '2018-12-27 00:44:24', NULL),
(17, '4', '5', '2018-12-27 00:44:44', '2018-12-27 00:44:44', NULL),
(18, '4', '9', '2018-12-27 00:44:55', '2018-12-27 00:44:55', NULL),
(19, '5', '5', '2018-12-27 00:45:11', '2018-12-27 00:45:11', NULL),
(20, '5', '9', '2018-12-27 00:45:28', '2018-12-27 00:45:28', NULL),
(21, '6', '5', '2018-12-27 00:46:13', '2018-12-27 00:46:13', NULL),
(22, '6', '9', '2018-12-27 00:46:35', '2018-12-27 00:46:35', NULL),
(23, '3', '10', '2018-12-27 00:47:51', '2018-12-27 00:47:51', NULL),
(24, '4', '10', '2018-12-27 00:49:11', '2018-12-27 00:49:11', NULL),
(25, '6', '10', '2018-12-27 00:49:55', '2018-12-27 00:49:55', NULL),
(26, '5', '10', '2018-12-27 00:50:26', '2018-12-27 00:50:26', NULL),
(27, '3', '11', '2018-12-27 00:51:02', '2018-12-27 00:51:02', NULL),
(28, '4', '11', '2018-12-27 00:51:44', '2018-12-27 00:51:44', NULL),
(29, '5', '11', '2018-12-27 00:52:18', '2018-12-27 00:52:18', NULL),
(30, '6', '11', '2018-12-27 00:59:02', '2018-12-27 00:59:02', NULL),
(31, '3', '12', '2018-12-27 01:02:09', '2018-12-27 01:02:09', NULL),
(32, '4', '12', '2018-12-27 01:02:38', '2018-12-27 01:02:38', NULL),
(33, '5', '12', '2018-12-27 01:02:52', '2018-12-27 01:02:52', NULL),
(34, '6', '12', '2018-12-27 01:03:20', '2018-12-27 01:03:20', NULL),
(35, '3', '13', '2018-12-27 01:03:31', '2018-12-27 01:03:31', NULL),
(36, '4', '13', '2018-12-27 01:03:43', '2018-12-27 01:03:43', NULL),
(37, '5', '13', '2018-12-27 01:03:59', '2018-12-27 01:03:59', NULL),
(38, '5', '13', '2018-12-27 01:04:41', '2018-12-27 01:04:50', '2018-12-27 01:04:50'),
(39, '6', '13', '2018-12-27 01:05:01', '2018-12-27 01:05:01', NULL),
(40, '3', '5', '2018-12-27 01:05:19', '2018-12-27 01:06:28', '2018-12-27 01:06:28'),
(41, '3', '9', '2018-12-27 01:05:30', '2018-12-27 01:06:18', '2018-12-27 01:06:18'),
(42, '4', '14', '2018-12-27 01:05:48', '2018-12-27 01:05:48', NULL),
(43, '6', '14', '2018-12-27 01:07:06', '2018-12-27 01:07:06', NULL),
(44, '4', '14', '2018-12-27 01:07:20', '2018-12-27 01:09:10', '2018-12-27 01:09:10'),
(45, '3', '14', '2018-12-27 01:07:41', '2018-12-27 01:07:41', NULL),
(46, '3', '14', '2018-12-27 01:08:55', '2018-12-27 01:09:02', '2018-12-27 01:09:02'),
(47, '5', '14', '2018-12-27 01:09:28', '2018-12-27 01:09:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `mobile_no`, `email`, `password`, `user_name`, `status`, `cnic`, `user_id`, `user_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manager', 'Manager', '3364110924', 'manager@manager.com', '3239ea7d7a41652bedc3cfe61bf53377', 'Manager', '1', '1234', 1, 'App\\managerial_user', '2018-12-03 02:48:10', '2018-12-03 02:48:10', NULL),
(2, 'Computer', 'operator', '2135148308', 'computer_operator@computer.com', '4738856c531cc6b23c6382acd5937b19', 'computer operator', '1', '78941', 2, 'App\\managerial_user', '2018-12-03 02:49:10', '2018-12-03 02:49:10', NULL),
(3, 'Station', 'Inspector', '3008828341', 'station_inspector@inspector.com', '4738856c531cc6b23c6382acd5937b19', 'Station Inspector', '1', '1247345', 3, 'App\\managerial_user', '2018-12-03 02:52:34', '2018-12-03 02:53:04', NULL),
(4, 'shaharyar', 'Imran', '03214411775', 'shari@gmail.com', '781f357c35df1fef3138f6d29670365a', 'shaharyar', '1', '516556165165161', 4, 'App\\managerial_user', '2018-12-26 14:17:34', '2018-12-26 14:22:20', NULL),
(5, 'umer', 'Imran', '03114524455555', 'umer@gmail.com', '781f357c35df1fef3138f6d29670365a', 'Umer', '1', '164646461304641', 5, 'App\\managerial_user', '2018-12-26 14:18:53', '2018-12-26 14:21:49', NULL),
(6, 'Fakhar', 'Imran', '03154400336', 'fakhar@gmail.com', '781f357c35df1fef3138f6d29670365a', 'fakhar', '1', '5659596530', 6, 'App\\managerial_user', '2018-12-26 14:19:58', '2018-12-26 14:22:26', NULL),
(7, 'asim', 'Irshad', '03225443296355', 'Asim@gmail.com', '781f357c35df1fef3138f6d29670365a', 'Asim', '1', '546446426646464', 7, 'App\\managerial_user', '2018-12-26 14:21:06', '2018-12-26 14:22:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_messages`
--

DROP TABLE IF EXISTS `user_has_messages`;
CREATE TABLE IF NOT EXISTS `user_has_messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_stations`
--

DROP TABLE IF EXISTS `user_stations`;
CREATE TABLE IF NOT EXISTS `user_stations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_stations`
--

INSERT INTO `user_stations` (`id`, `user_id`, `station_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, '2018-12-03 02:52:35', '2018-12-03 02:52:35', NULL),
(2, 4, 3, '2018-12-26 14:17:34', '2018-12-26 14:17:34', NULL),
(3, 5, 4, '2018-12-26 14:18:53', '2018-12-26 14:18:53', NULL),
(4, 6, 5, '2018-12-26 14:19:58', '2018-12-26 14:19:58', NULL),
(5, 7, 6, '2018-12-26 14:21:06', '2018-12-26 14:21:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `click` int(11) NOT NULL,
  `viewer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
