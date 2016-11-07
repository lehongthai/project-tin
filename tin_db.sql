-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 06:44 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `parent_id` tinyint(4) DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(13, 'Đồ Đá Bóng', 'Do-Da-Bong', 1, 0, 'Đồ Đá Bóng', 'Đồ Đá Bóng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Đồ Đi Chơi', 'Do-Di-Choi', 2, 0, 'Đồ Đi Chơi', 'Đồ Đi Chơi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Đồ Đi Dạ Hội', 'Do-Di-Da-Hoi', 3, 0, 'Đồ Đi Dạ Hội', 'Đồ Đi Dạ Hội', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Quần Jean', 'Quan-Jean', 5, 0, 'Quần Jean', 'Quần Jean', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Áo Sơ Mi', 'Ao-So-Mi', 6, 0, 'Áo Sơ Mi', 'Áo Sơ Mi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Áo Khoác', 'Ao-Khoac', 7, 0, 'Áo Khoác', 'Áo Khoác', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Quần đá bóng', 'Quan-da-bong', 0, 13, 'Quần đá bóng', 'Quần đá bóng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Áo đá bóng', 'Ao-da-bong', 0, 13, 'Áo đá bóng', 'Áo đá bóng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Áo Đi Chơi', 'Ao-Di-Choi', 0, 15, 'Áo Đi Chơi', 'Áo Đi Chơi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Quần Đi Chơi', 'Quan-Di-Choi', 0, 15, 'Quần Đi Chơi', 'Quần Đi Chơi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Quần Đi Dạ Hội', 'Quan-Di-Da-Hoi', 0, 16, 'Quần Đi Dạ Hội', 'Quần Đi Dạ Hội', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Áo Đi Dạ Hội', 'Ao-Di-Da-Hoi', 0, 16, 'Áo Đi Dạ Hội', 'Áo Đi Dạ Hội', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `alias`, `intro`, `content`, `keywords`, `description`, `tags`, `image_link`, `image_thumbnail`, `views`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(7, 'Test 1', 'test-1', 'item', '<p>item</p>\r\n', 'item', 'item', '53', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', '0', 1, 21, NULL, '2016-11-07 10:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(17, 'Quần giá rẻ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'quần đẹp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'quần đá bóng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'barcelona', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'thẻ nội trú', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'dương dương', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Hồng Thái', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'bài 2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'bài 2 sửa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'test', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Thái', 'hongthai@gmail.com', '123', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
