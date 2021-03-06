-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 05:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maiddo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE `abilities` (
  `maid_id` int(11) NOT NULL,
  `ability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`maid_id`, `ability`) VALUES
(1, 'Memasak masakan barat'),
(1, 'Mencuci pakaian'),
(1, 'Mengasuh bayi'),
(1, 'Mengendarai mobil'),
(4, 'lap kaca'),
(123, 'cuci'),
(123, 'pel'),
(123, 'sapu');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `maid_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`maid_id`, `description`, `startdate`, `enddate`) VALUES
(1, 'Guru Matematika SD', '2019-11-04', '2019-11-14'),
(1, 'Pengasuh Bayi di Brebes', '2019-11-04', '2019-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maids`
--

CREATE TABLE `maids` (
  `maid_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `married` tinyint(1) DEFAULT 0,
  `settled` tinyint(1) DEFAULT 0,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_years` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief_description` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maids`
--

INSERT INTO `maids` (`maid_id`, `name`, `age`, `salary`, `married`, `settled`, `religion`, `exp_years`, `description`, `brief_description`, `picture`, `created_at`, `updated_at`) VALUES
(123, 'Eni Setiadi', 22, 1620000, 0, 0, 'Islam', 1, 'Suster Eni berasal dari Pemalang.', NULL, 'maid.png', NULL, NULL),
(12331, 'apaja', 22, 2020220, 0, 0, 'Islam', 1, 'aoaajadskfjkasjdfa', NULL, 'maid.png', NULL, NULL),
(123123123, 'apa', 20, 20, 0, 0, 'hmm', 2, 'apa', NULL, 'maid.png', NULL, NULL),
(568568, 'apa', 24, 2000000, 0, 0, 'Islam', 1, 'apapaaaa', NULL, 'maid.png', NULL, NULL),
(1, 'test', 15, 150000, 1, 0, 'Budha', 4, 'tidak ada', NULL, 'maid.png', NULL, NULL),
(2, 'test 2', 25, 10000, 0, 1, 'asd', 7, 'asads', NULL, 'maid.png', NULL, NULL),
(3, 'test 3', 30, 500000, 1, 1, 'sad', 15, 'saasd', NULL, 'maid.png', NULL, NULL),
(4, 'empat', 4, 40000, 1, 0, 'islam', 4, '4', NULL, 'maid.png', NULL, NULL);

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
(4, '2019_11_12_043905_create_maids_table', 2),
(5, '2019_11_12_050941_create_agents_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_maid`
--

CREATE TABLE `ordered_maid` (
  `user_id` int(11) NOT NULL,
  `maid_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `maid_id` int(11) NOT NULL,
  `preference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`maid_id`, `preference`) VALUES
(1, 'cheerful'),
(1, 'Jago nyanyi'),
(1, 'suka anjing'),
(1, 'Suka kucing'),
(4, 'allergic to animals'),
(123, 'hate birds'),
(123, 'love cats'),
(123, 'love dogs'),
(12331, 'hate cats');

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `promo_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `kode` int(10) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `startdate` datetime NOT NULL DEFAULT current_timestamp(),
  `enddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`promo_id`, `title`, `description`, `photo`, `kode`, `timestamp`, `startdate`, `enddate`) VALUES
(1, 'promo 1', 'promo 1', 'promo1.jpeg', 123123, '2019-11-28 21:11:09', '2019-11-28 21:11:09', '2019-11-28 21:11:09'),
(2, 'promo 2', 'promo 2', 'promo1.jpeg', 321321, '2019-11-28 21:11:26', '2019-11-28 21:11:26', '2019-11-28 21:11:26'),
(3, 'promo 3', 'promo 3', 'promo1.jpeg', 3333333, '2019-11-28 21:11:43', '2019-11-28 21:11:43', '2019-11-28 21:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed`
--

CREATE TABLE `recently_viewed` (
  `user_id` int(11) NOT NULL,
  `maid_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recently_viewed`
--

INSERT INTO `recently_viewed` (`user_id`, `maid_id`, `timestamp`) VALUES
(1, 1, '2019-11-28 16:52:49'),
(4, 1, '2019-11-28 15:35:01'),
(4, 2, '2019-11-28 21:09:08'),
(4, 3, '2019-11-28 21:09:13'),
(4, 123, '2019-11-28 14:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `saved_maid`
--

CREATE TABLE `saved_maid` (
  `user_id` int(11) NOT NULL,
  `maid_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saved_maid`
--

INSERT INTO `saved_maid` (`user_id`, `maid_id`, `timestamp`) VALUES
(4, 1, '2019-11-28 21:09:23'),
(4, 2, '2019-11-28 21:09:28'),
(4, 3, '2019-11-28 21:09:33');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Muhammad Rizky', 'mrizkyfer@gmail.com', NULL, '$2y$10$HqGDmDZBu1.8ekJLHGgmOuGGw2vJFLyVgMd9PIgN0H2mXUHZsqbi.', 'inrg747LE4pS7tLMCYW9nQxPfQMgj2iYqHi50dW9sh33wr0NkVwDr0bi6f3q', '2019-11-11 22:57:41', '2019-11-12 00:48:02', 'agent'),
(2, 'Ryan Ferdinand', 'ryhnmda@gmail.com', NULL, '$2y$10$XRvy99OVWAmqMO.kZyl3C.ETVOtMzqcuoFS.ATeC9Tr69fS6ewM2C', NULL, '2019-11-12 00:41:02', '2019-11-12 00:41:02', 'default'),
(4, 'agent', 'agent@agent.com', NULL, '$2y$10$AqHljZpYOMh.3tM0lTifyOhcR9FQxBJKea8G3nLfBoIMg6eNEkEmu', 'FqrMEReeNmgvFgjLnFxOvwUU69QyV3BfCUnPOm5jDNR06ASNOPQs9Aymw8eJ', '2019-11-12 07:44:05', '2019-11-12 07:44:05', 'agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`maid_id`,`ability`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`maid_id`,`description`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_maid`
--
ALTER TABLE `ordered_maid`
  ADD PRIMARY KEY (`user_id`,`maid_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`maid_id`,`preference`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  ADD PRIMARY KEY (`user_id`,`maid_id`);

--
-- Indexes for table `saved_maid`
--
ALTER TABLE `saved_maid`
  ADD PRIMARY KEY (`user_id`,`maid_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
