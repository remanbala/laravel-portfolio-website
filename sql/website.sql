-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2023 at 01:12 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'title2', 'asdfasf', 'short description2', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '/uploads/home_about/1754909137521267.png', NULL, '2023-01-13 06:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(1, '4', 'asfasdf', 'uploads/blog/1757047420208696.jpg', 'vue,js', '<p>adfzxcvzcv-zzzztrt</p>', '2023-02-02 20:30:21', '2023-02-05 20:51:37'),
(2, '2', 'Laravel Relationships', 'uploads/blog/1757048736218542.jpg', 'laravel,php', '<p>Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel Lorem ipsum laravel test</p>', '2023-02-05 21:12:32', '2023-02-05 23:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Facebook 2', NULL, '2023-02-01 20:29:58'),
(2, 'Laravel', NULL, NULL),
(4, 'Vue JS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

DROP TABLE IF EXISTS `footers`;
CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `short_description`, `address`, `email`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '1233', 'asdfadfzvcxv', 'zxvzcvzadsf', 'a@a.com', 'https://www.facebook.com', 'https://www.twitter.com', 'Copyright Reman Bala', NULL, '2023-02-08 19:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

DROP TABLE IF EXISTS `home_slides`;
CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `home_slide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `desc`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'update new title 2', 'asdf desc 1', '/uploads/home_slide/1754691270789307.png', 'www.google.com.np2', NULL, '2023-01-10 20:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_03_021056_add_profile_image_to_users_table', 2),
(6, '2023_01_05_023723_create_home_slides_table', 3),
(7, '2023_01_12_022240_create_abouts_table', 4),
(8, '2023_01_14_014625_create_skill_images_table', 5),
(9, '2023_01_23_014830_create_portfolios_table', 6),
(10, '2023_01_30_143526_create_blog_categories_table', 7),
(11, '2023_02_02_022054_create_blogs_table', 8),
(12, '2023_02_08_014020_create_footers_table', 9),
(13, '2023_02_09_012214_create_contacts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(2, 'adsf', 'zcxvzcvxz', '/uploads/portfolio/1756141802529586.jpg', 'vbnmvbnmvbmvm', '2023-01-26 20:57:13', NULL),
(3, 'bbb', 'zzxcv', '/uploads/portfolio/1756229391167458.jpg', 'qzxcz', '2023-01-27 20:09:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill_images`
--

DROP TABLE IF EXISTS `skill_images`;
CREATE TABLE IF NOT EXISTS `skill_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `skillImages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_images`
--

INSERT INTO `skill_images` (`id`, `skillImages`, `created_at`, `updated_at`) VALUES
(15, '/uploads/skill_images/1755235510944610.jpg', '2023-01-16 20:09:56', '2023-01-16 20:52:06'),
(14, '/uploads/skill_images/1755232858474649.png', '2023-01-16 20:09:56', NULL),
(13, '/uploads/skill_images/1755232858451334.png', '2023-01-16 20:09:56', NULL),
(12, '/uploads/skill_images/1755232858428892.png', '2023-01-16 20:09:56', NULL),
(11, '/uploads/skill_images/1755232858346818.png', '2023-01-16 20:09:56', NULL),
(17, 'uploads/skill_images/1755775908906801.png', '2023-01-22 20:01:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`) VALUES
(1, 'Reman', 'remanbala@gmail.com', NULL, '$2y$10$G/dWW1NLL01PeOl8Xsm0xuYRJKpVnBcchlUpZJJwPolo2vozm1b3K', '3XurcqOs71qRGMCeRFsYKuFRen6WQydpbe8YnuvnW7CnTHAnnVL8ZSuxfekD', '2022-12-22 03:44:25', '2023-01-18 10:20:25', '2023011816054_53ac8dd0-6c5f-46c0-8d95-b4432e64e2d4.jpg'),
(2, 'kodeonix', 'kodeonixkrypt@gmail.com', NULL, '$2y$10$YzET93rCgqmz.JHRc4Ll9egVW6tRgv6VaO/OiKay75Ehl3oCR4qtC', NULL, '2022-12-28 20:55:25', '2022-12-28 20:55:25', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
