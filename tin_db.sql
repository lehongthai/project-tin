-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 07:23 AM
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
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_thumb` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `meta_key`, `meta_desc`, `image`, `image_thumb`, `alt`) VALUES
(1, '1', '1', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/g1.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/g1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE IF NOT EXISTS `category_post` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_key` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `name`, `meta_desc`, `meta_key`) VALUES
(1, 'Cate 1', 'Cate 1', 'Cate 1'),
(2, 'Cate 2', 'Cate 2', 'Cate 2');

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
(25, 'Áo Đi Dạ Hội', 'ao-di-da-hoi', 0, 16, 'Áo Đi Dạ Hội', 'Áo Đi Dạ Hội', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `keywords`, `description`) VALUES
(1, 'Hãng 1', 'hang 1', 'hang 1'),
(2, 'Hãng 2', 'hang 2', 'hang 2'),
(5, 'Hãng 3', NULL, NULL),
(6, 'Hãng 34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_08_13_063345_create_products_table', 2),
(4, '2016_08_13_064404_create_product_images_table', 2);

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
(7, 'Test 1', 'test-1', 'item', '<p>item</p>\r\n', 'item', 'item', '53', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', '0', 1, 1, NULL, '2016-11-07 10:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_old` int(11) DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `image_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `make`, `quantity`, `price`, `price_old`, `intro`, `image_thumb`, `image_link`, `alt`, `content`, `keywords`, `description`, `tags`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(2, 'Đồ 2', 'do-2', '2', '20', 20000, 0, 'ee', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/g1.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/g1.jpg', 'eee', '<p>ee</p>\r\n', 'ee', 'ee', '41,43', 1, 20, '2016-11-08 09:11:38', '2016-11-08 09:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `image_thumb`, `alt`, `product_id`, `created_at`, `updated_at`) VALUES
(12, 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', 'anh 1', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/g1.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/g1.jpg', 'anh 2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/cac-con-choi-nha-bong-06-08-2015-1-780x585.jpg', 'anh 2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/g1.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/g1.jpg', 'anh 2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
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

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
