-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 03:34 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
