-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:28 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinedoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `service_id`, `name`, `description`, `appointment`, `image`, `created_at`, `updated_at`) VALUES
(9, 10, 'Dr. Abdul Ali', 'Qualification : MBBS\r\nChamber: MUKTI\r\nLocation: House #2, Road #49, Gulshan-2, Dhaka-1212', 'Phone: +880-2-9896165', 'dr-abdul-ali-2018-11-20-5bf42f760a8d6.jpg', '2018-11-20 09:59:50', '2018-11-20 09:59:50'),
(12, 2, 'Dr. Abu Ashraf', 'aahkjdadjas', 'asdasda', 'asdadasd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_19_161345_create_sliders_table', 1),
(4, '2018_11_11_163513_create_services_table', 2),
(5, '2018_11_12_162455_create_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('abuashraf00@yahoo.com', '$2y$10$V099ociroqGdxKDbaDlSWO8G7LaeqvhaPpF0tsnDnK04SpzNFMNc2', '2018-11-25 10:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `speciality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `speciality`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pathology', 'Dr. Ziaul Kabir', '2018-11-12 10:52:23', '2018-11-12 10:52:23'),
(2, 'Heart & Lungs', 'Dr. Lutfar Rahman', '2018-11-12 10:52:46', '2018-11-12 10:52:46'),
(4, 'Anesthesiology Specialist', 'Dr. Lutful Aziz', '2018-11-20 09:54:30', '2018-11-20 09:54:30'),
(5, 'Plastic Surgeon', 'Professor Dr. Md. Abdul Kalam', '2018-11-20 09:55:01', '2018-11-20 09:55:01'),
(7, 'Cardiology /Heart Specialist', 'Professor Dr. Abdullah-Al-Safi Majumder', '2018-11-20 09:55:42', '2018-11-20 09:55:42'),
(8, 'Specialized Dental Surgeon', 'DR. SK. NAZRUL ISLAM', '2018-11-20 09:56:08', '2018-11-20 09:56:08'),
(9, 'Specially Trained in Cosmetic Dentistry, Dental Implants, Endodontics & Oral Surgery', 'Dr. Mohammad Saiful Alam Talukder', '2018-11-20 09:56:41', '2018-11-20 09:56:41'),
(10, 'Diabetes & Endocrinologist', 'Dr. Abdul Ali', '2018-11-20 09:57:22', '2018-11-20 09:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Ziaul Kabir', 'Pathology', 'dr-ziaul-kabir-2018-11-12-5be9af7800162-jpg', '2018-10-30 10:43:52', '2018-11-12 10:51:04'),
(2, 'Dr. Lutfar Rahman', 'Heart & Lung', 'dr-lutfar-rahman-2018-11-12-5be9af9ab2001-jpg', '2018-10-30 10:51:11', '2018-11-12 10:51:38'),
(3, 'Dr. Hasibur Rahman', 'Kidney', 'dr-hasibur-rahman-2018-11-12-5be9b01951ab6-jpg', '2018-11-12 10:53:45', '2018-11-12 10:53:45'),
(4, 'Dr. Satish Udare', 'Kidney', 'dr-satish-udare-2018-11-12-5be9b039576d2-jpg', '2018-11-12 10:54:17', '2018-11-12 10:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abu Ashraf', 'abuashraf501@gmail.com', NULL, '$2y$10$S0KTgALdkHSIps0VsiRgGedFTJ/hdGkGlsyscrcYUTyIzJvo7in0a', 'aYmtImthUsQaK7Lk1QvOiXoqJyyYMyt2WvpHc6Ges0MI8rJ7dDAOmbwZXTmm', '2018-10-20 10:34:17', '2018-10-20 10:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_service_id_foreign` (`service_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
