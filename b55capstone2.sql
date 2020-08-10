-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 01:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b55capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ramen', NULL, NULL),
(2, 'Rice Bowl', NULL, NULL),
(3, 'Sushi', NULL, NULL),
(4, 'Side Dish', NULL, NULL),
(5, 'Drinks', NULL, NULL),
(7, 'Dessert', NULL, NULL);

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
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgPath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `price`, `description`, `imgPath`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'Meat Ramen', '500.00', 'By', 'images/1583131382.jpg', 1, '2020-03-01 22:43:02', '2020-03-04 15:29:35'),
(8, 'Meaty Ramen', '400.00', 'By', 'images/1583134538.jpg', 1, '2020-03-01 23:35:38', '2020-03-04 15:29:26'),
(9, 'White Ramen', '650.00', 'By Wil', 'images/1583134568.jpg', 1, '2020-03-01 23:36:08', '2020-03-01 23:36:08'),
(10, 'Katsudon', '350.00', 'By Yen', 'images/1583134830.jpg', 2, '2020-03-01 23:40:30', '2020-03-03 21:11:47'),
(11, 'Gyudon', '450.00', 'By Wil', 'images/1583135170.jpg', 2, '2020-03-01 23:46:10', '2020-03-01 23:46:10'),
(12, 'Oyakodon', '300.00', 'By Wil', 'images/1583135422.jpg', 2, '2020-03-01 23:50:22', '2020-03-01 23:50:22'),
(13, 'California Rolls', '400.00', 'By Wil', 'images/1583135665.jpg', 3, '2020-03-01 23:54:25', '2020-03-01 23:54:25'),
(14, 'Sashimi', '500.00', 'By Wil', 'images/1583135731.jpeg', 3, '2020-03-01 23:55:31', '2020-03-01 23:55:31'),
(15, 'Nigiri', '420.00', 'By Wil', 'images/1583136269.jpg', 3, '2020-03-02 00:04:29', '2020-03-02 00:04:29'),
(16, 'Ebi Tempura', '650.00', 'By Yen', 'images/1583136412.jpg', 4, '2020-03-02 00:06:52', '2020-03-02 00:06:52'),
(17, 'Green Bean Goma-ae', '250.00', 'By Yen', 'images/1583136561.jpg', 4, '2020-03-02 00:09:21', '2020-03-02 00:09:21'),
(18, 'Spinach Ohitashi', '350.00', 'By Yen', 'images/1583136625.jpg', 4, '2020-03-02 00:10:25', '2020-03-02 00:10:25'),
(19, 'Asahi Super Dry', '80.00', 'By Wil', 'images/1583136720.jpg', 5, '2020-03-02 00:12:00', '2020-03-02 00:12:00'),
(20, 'Asahi Sakura', '180.00', 'By Yen', 'images/1583136808.jpg', 5, '2020-03-02 00:13:28', '2020-03-02 00:13:28'),
(21, 'Soju', '120.00', 'By Yen', 'images/1583136865.jpg', 5, '2020-03-02 00:14:25', '2020-03-02 00:14:25'),
(22, 'Japanese Cheesecake', '150.00', 'By Yen', 'images/1583136948.jpg', 7, '2020-03-02 00:15:48', '2020-03-02 00:15:48'),
(23, 'Fish Cake', '75.00', 'By Yen', 'images/1583137021.jpg', 7, '2020-03-02 00:17:01', '2020-03-02 00:17:01'),
(24, 'Mitarashi Dango', '130.00', 'By Wil', 'images/1583137134.jpg', 7, '2020-03-02 00:18:54', '2020-03-02 00:18:54'),
(25, 'Truffled Steak Aburi Maki', '420.00', 'By Yen', 'images/1583292668.jpg', 3, '2020-03-03 19:31:08', '2020-03-03 19:31:08'),
(26, 'Torched Salmon Aburi Maki', '420.00', 'By Yen', 'images/1583292746.jpg', 3, '2020-03-03 19:32:26', '2020-03-03 19:32:26'),
(27, 'Spicy Tuna Aburi Maki', '400.00', 'By Yen', 'images/1583292815.jpg', 3, '2020-03-03 19:33:35', '2020-03-03 19:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_02_27_033039_create_roles_table', 1),
(5, '2020_02_27_033058_create_categories_table', 1),
(6, '2020_02_27_033117_create_statuses_table', 1),
(7, '2020_02_27_033138_create_payments_table', 1),
(8, '2020_02_27_033200_create_foods_table', 1),
(9, '2020_02_27_033228_create_orders_table', 1),
(10, '2020_02_27_033255_create_food_order_table', 1),
(11, '2020_02_27_033323_add_roles_to_user', 1),
(12, '2020_02_27_033335_add_details_to_user', 1),
(13, '2020_03_03_021621_create_post_table', 2),
(14, '2020_03_04_185153_add_google_id_column', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('wilean.borja@gmail.com', '$2y$10$KB7G.BtPBUJ9Wnj.Kd.W6eT4PCodzvAuy15U/561uR5q8aocIu16C', '2020-02-29 17:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cash On Delivery', NULL, NULL),
(2, 'Paypal', NULL, NULL),
(3, 'Credit or Debit Card', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant', NULL, NULL),
(2, 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pending', NULL, NULL),
(2, 'Accepted', NULL, NULL),
(3, 'Being Prepared', NULL, NULL),
(4, 'In Transit', NULL, NULL),
(5, 'Cancelled by User', NULL, NULL),
(6, 'Cancelled by Restaurant', NULL, NULL),
(7, 'Delivered', NULL, NULL);

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
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `google_id`) VALUES
(1, 'Wilean', 'wil@wil.com', NULL, '$2y$10$YkxkCpKlPMLKQ2cuJWTk0e43iWvsYZ/P3wxKoJn4B63r4Hlmldy1G', 'AP51VxFk3J99O1oqRYulTpnDSGUp9IAHQxyrO5EbliREDKPjsT3SXTwHFxtY', '2020-02-27 17:24:25', '2020-02-27 17:24:25', 2, NULL),
(2, 'Wilean  Jose B. Macalalad', 'wilean.borja@gmail.com', NULL, '$2y$10$gPDUfOgV.u2T0IhWPsS4R.qWTwbSC8Bwex2xv7NxmHgnbgVxsjzsu', 'JP6CjlCBzbfA0oXeWDVM5YOxttiDyR12ZOqSZuGg3ik5CFuH9YR8JuNVOyUY', '2020-02-29 03:19:54', '2020-02-29 03:19:54', 1, NULL),
(3, 'Julienne Bautista', 'yen@yen.com', NULL, '$2y$10$RKj0fDvGBlRVyVEyCDItpuQrQ/CDfjkCoBUGdDl/MgyDn8N.S9wOC', NULL, '2020-02-29 03:21:24', '2020-02-29 03:21:24', 1, NULL),
(4, 'Brandon Cruz', 'brandon@brandon.com', NULL, '$2y$10$2w9EuYJrASh5Q1DlEIwMSux0S1LOndKx15nt61oMsZjy3Qn1IBXS.', NULL, '2020-02-29 03:58:40', '2020-02-29 03:58:40', 1, NULL),
(5, 'Arthur Shelby', 'arthur@arthur.com', NULL, '$2y$10$WcX2GKa3a5H0y7TNncA1nOSmXCXty6hJ2751GJ/sxdCs.10pmgwAO', NULL, '2020-02-29 03:59:31', '2020-02-29 03:59:31', 2, NULL),
(6, 'Adam', 'adam@adam.com', NULL, '$2y$10$CeLusCdOCq9TajJz9XNmsuIw72EdzVS4/5giizLhvS6Lq.FtVNNeK', NULL, '2020-03-02 00:24:55', '2020-03-02 00:24:55', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foods_category_id_foreign` (`category_id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_order_order_id_foreign` (`order_id`),
  ADD KEY `food_order_food_id_foreign` (`food_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `food_order_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `food_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
