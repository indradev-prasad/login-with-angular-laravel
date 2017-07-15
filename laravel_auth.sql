-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 05:22 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-5+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_number`, `created_at`, `updated_at`) VALUES
(6, 'indradev', 'charanjeet.singh@dikonia.in', '666666', '2017-07-15 05:01:33', NULL),
(7, 'test', 'charanjeet.singh@dikonia.in', '7474747474', '2017-07-15 05:14:53', NULL),
(8, 'test', 'test@gmail.com', '86868686864', '2017-07-15 05:20:32', NULL),
(9, 'indradev', 'test123@dikonia.in', '745647647474', '2017-07-15 05:24:27', NULL),
(10, 'indradev', 'charanjeet.singh@dikonia.in', '74747447', '2017-07-15 05:25:08', NULL),
(11, 'indradev', 'charanjeet.singh@dikonia.in', '7777777', '2017-07-15 05:36:56', NULL),
(12, 'indradev', 'indradev.prasad@dikonia.in', '6666666', '2017-07-15 05:37:51', NULL),
(13, 'indradev', 'indradev.prasad@dikonia.in', '6666666', '2017-07-15 05:37:55', NULL),
(14, 'indradev', 'indradev.prasad@dikonia.in', '6666666', '2017-07-15 05:37:58', NULL),
(15, 'indradev', 'indradev.prasad@dikonia.in', '6666666', '2017-07-15 05:38:01', NULL),
(16, 'indradev', 'charanjeet.singh@dikonia.in', '777777777777', '2017-07-15 05:41:07', NULL),
(17, 'test', 'indradev.prasad1@dikonia.in', '5555555555', '2017-07-15 05:41:43', NULL),
(18, 'indradev', 'indradev.prasad@dikonia.in', '7777666', '2017-07-15 05:41:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_15_055217_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191)),
  KEY `password_resets_token_index` (`token`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `contact_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `contact_no`) VALUES
(1, 'indradev prasad', 'indradev.prasad@dikonia.in', '$2y$10$yM4g3AL5Td39BcT3R1H6jO2lYK.McfU2NGY0f9/FbQBjSMpjBOPYy', 'MHawSLHgmSpx6nXNl3EZHKpHIXEa7Nm39rH8LzW8YPtNWab2bLwLZkLMzfEo', '2017-07-15 09:15:26', '2017-07-15 09:15:26', '8683096920'),
(2, 'indradev', 'indradev.prasad@dikonia.in1', '$2y$10$M3.J7vAxRcXR3BBPDivVi..EiZYmCi1KaYTOvHN.LfKEmEUt0sX4.', NULL, '2017-07-15 09:16:37', '2017-07-15 09:16:37', '74747474444');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
