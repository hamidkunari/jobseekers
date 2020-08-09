-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 07:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larajob`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'computer ', NULL, NULL),
(2, 'newworking', NULL, NULL),
(3, 'Business', NULL, NULL),
(4, 'Engineer course', NULL, NULL),
(5, 'Hospitality', NULL, NULL),
(6, 'Management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `cname`, `slug`, `address`, `phone`, `website`, `logo`, `cover_photo`, `slogan`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'lead', 'lead', 'Malaysia, petaling jaya, sterling condo home 202', '01112833805', 'hamid.com', '1592055177.jpg', '1592464416.jpg', 'afghanistna', 'dfsfsdf', '2020-06-11 03:14:47', '2020-06-18 14:13:36'),
(2, 4, 'Leadoverseas', 'leadoverseas', 'Shah Alam Condo daman crimson', '01112833805', 'www.leadzera.com', '1592060852.jpg', '1592061733.jpg', 'LeadOversea', 'First IT company is improved to work for student', '2020-06-13 22:05:43', '2020-06-13 22:22:13'),
(3, 5, 'Tech', 'tech', 'Malaysia, petaling jaya, sterling condo home 202', '(+60) 1112833805', 'www.leadzera.com', '1592066116.jpg', '1592066108.jpg', 'afghanistna', 'new the name of afghansitan', '2020-06-13 23:33:37', '2020-06-13 23:35:16'),
(4, 6, 'Green Packet', 'green-packet', 'Kalana Mahkota condominium', '01112833823', 'www.greenpacket.com', '1592066201.jpg', '1592066195.jpg', 'Green packet', 'new Digital Company Improved', '2020-06-13 23:34:11', '2020-06-13 23:36:41'),
(5, 34, 'new one', 'new-one', 'Malaysia, petaling jaya, sterling condo home 202', '01112833805', 'hamid.com', '1592635694.png', '1592635727.png', 'afghanistna', 'sdfgsdfgsdfg', '2020-06-20 13:46:22', '2020-06-20 13:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number_of_vacancy` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `company_id`, `title`, `slug`, `description`, `roles`, `category_id`, `position`, `address`, `type`, `status`, `last_date`, `created_at`, `updated_at`, `number_of_vacancy`, `experience`, `gender`, `salary`) VALUES
(1, '1', '1', 'application developer', 'application-developer', 'this is the afghansitan', 'Admin', 1, 'senioer name', 'Malaysia, petaling jaya, sterling condo home 202', 'fulltime', 1, '2020-06-10', '2020-06-11 03:16:33', '2020-06-11 03:16:33', 0, 0, '', ''),
(2, '1', '1', 'Senior developer', 'senior-developer', 'download thename of afghanistna', 'new', 2, 'senioer name', 'Kalana Mahkota condominium, Test', 'contract', 1, '2020-06-17', '2020-06-11 03:17:02', '2020-06-11 03:17:02', 0, 0, '', ''),
(3, '4', '2', 'Merketing developer', 'merketing-developer', 'Improve to explore the company merketing', 'Marketing', 4, 'junior', 'Afghanistan Kabul, Gul bahar center Floor G Shop #A50', 'fulltime', 1, '2020-06-25', '2020-06-13 22:10:58', '2020-06-13 22:10:58', 0, 0, '', ''),
(4, '4', '2', 'application developer', 'application-developer', 'this is the afghansitan', 'asdf', 2, 'junior', 'Malaysia, petaling jaya, sterling condo home 202', 'fulltime', 1, '2020-06-16', '2020-06-13 22:40:19', '2020-06-13 22:40:19', 0, 0, '', ''),
(5, '1', '1', 'application developer', 'application-developer', 'download thename of afghanistna', 'adsf', 2, 'junior', 'Malaysia, petaling jaya, sterling condo home 202', 'fulltime', 1, '2020-06-25', '2020-06-13 23:32:43', '2020-06-13 23:32:43', 0, 0, '', ''),
(6, '5', '3', 'hamidullah', 'hamidullah', 'some more', 'admin', 1, 'head', 'afghansitna', 'fulltime', 1, '2020-06-25', '2020-06-15 20:20:48', '2020-06-15 20:20:48', 0, 0, '', ''),
(7, '1', '1', 'application developer', 'application-developer', 'download thename of afghanistna', 'dfgsdfg', 3, 'senioer name', 'Malaysia, petaling jaya, sterling condo home 202', 'parttime', 1, '2020-06-27', '2020-06-17 02:21:20', '2020-06-17 02:21:20', NULL, NULL, NULL, NULL),
(8, '1', '1', 'application developer', 'application-developer', 'download thename of afghanistna', 'asdfasdf', 1, 'senioer name', 'Malaysia, petaling jaya, sterling condo home 202', 'parttime', 1, '2020-06-17', '2020-06-18 11:40:52', '2020-06-18 11:40:52', NULL, 3, 'male', '50000-10000'),
(9, '34', '5', 'application developerasdf', 'application-developerasdf', 'download thename of afghanistna', 'asdf', 1, 'junior', 'Afghanistan Kabul, Gul bahar center Floor G Shop #A50', 'fulltime', 1, '2020-06-25', '2020-06-20 13:50:58', '2020-06-20 13:50:58', NULL, 3, 'male', '50000-10000');

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2020-06-11 13:30:12', '2020-06-11 13:30:12'),
(2, 1, 2, '2020-06-11 13:31:48', '2020-06-11 13:31:48'),
(3, 1, 3, '2020-06-12 01:36:52', '2020-06-12 01:36:52'),
(4, 3, 3, '2020-06-13 22:41:11', '2020-06-13 22:41:11'),
(5, 4, 3, '2020-06-13 22:41:23', '2020-06-13 22:41:23'),
(6, 5, 4, '2020-06-14 00:03:30', '2020-06-14 00:03:30'),
(7, 6, 11, '2020-06-15 20:55:20', '2020-06-15 20:55:20'),
(8, 8, 3, '2020-06-18 12:53:27', '2020-06-18 12:53:27'),
(9, 2, 3, '2020-06-18 12:56:03', '2020-06-18 12:56:03'),
(10, 8, 3, '2020-06-18 12:56:24', '2020-06-18 12:56:24'),
(11, 5, 3, '2020-06-18 12:57:03', '2020-06-18 12:57:03'),
(12, 8, 3, '2020-06-18 14:36:30', '2020-06-18 14:36:30'),
(13, 6, 3, '2020-06-18 14:38:19', '2020-06-18 14:38:19'),
(14, 6, 12, '2020-06-18 15:19:34', '2020-06-18 15:19:34'),
(15, 3, 2, '2020-06-20 13:26:59', '2020-06-20 13:26:59'),
(16, 9, 3, '2020-06-20 13:51:54', '2020-06-20 13:51:54'),
(17, 7, 2, '2020-06-27 15:07:40', '2020-06-27 15:07:40');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_03_10_050446_create_job_user_table', 1),
(13, '2020_06_03_084811_create_profiles_table', 1),
(14, '2020_06_03_084827_create_companies_table', 1),
(15, '2020_06_03_084846_create_categories_table', 1),
(16, '2020_06_03_085026_create_jobs_table', 1),
(17, '2020_06_03_094610_create_favorites_table', 1),
(18, '2020_06_06_080506_add_phone_number_to_profiles_table', 1),
(19, '2020_06_16_190644_add_column_to_jobs', 2),
(20, '2020_06_19_062912_create_roles_table', 3),
(21, '2020_06_19_063022_create_role_user_table', 3),
(22, '2020_06_19_071804_create_posts_table', 4),
(23, '2020_06_19_080316_create_testimonials_table', 5);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staus` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `staus`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'application developer hamid', 'application-developer-hamid', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'uploads/EG55ajqDdAnXUjOz8PlKeRWjHBZnmBJ2FLCgQNYO.jpeg', NULL, NULL, '2020-06-19 15:02:13', '2020-06-24 17:01:17'),
(4, 'application developer', 'application-developer', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with', 'uploads/qzGSvMgCJwtjRijjcONXofu03ZyNYRtNmKuLGaFk.jpeg', NULL, NULL, '2020-06-24 16:46:47', '2020-06-24 17:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `address`, `phone_number`, `gender`, `dob`, `experience`, `bio`, `cover_letter`, `resume`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '2', 'Kalana Mahkota condominium, Test', '038495839405', 'male', '2020-06-18', 'this is the new afgahnsitan', 'Php developer', 'public/files/JxQ998cQVTA1RlapBZ8NxwnEXUZIndPXH6YAd0j9.doc', 'public/files/F0a6q8KYZVofqk6E8yhiIDWMrdsXTpUoiz1lnC3J.doc', '1593247571.jpg', '2020-06-11 03:18:04', '2020-06-27 15:46:11'),
(2, '3', 'Kalana Mahkota condominium, Test', '038495839405', 'male', '2020-06-18', 'first the name of afghanistan and then send the issus', 'Php developer', 'public/files/V66Ff10rF4WWSHWpUdHVsUmvFBFqeAsgp8CZG7KV.doc', NULL, '1593164800.jpg', '2020-06-12 01:36:40', '2020-06-26 16:46:40'),
(3, '9', NULL, NULL, 'male', '1992-04-14', NULL, NULL, NULL, NULL, NULL, '2020-06-14 15:14:04', '2020-06-14 15:14:04'),
(4, '10', 'Kalana Mahkota condominium, Test', '038495839405', 'male', '1992-06-15', 'this isthe new afghansitan afghansitan download', 'Php developer', NULL, NULL, NULL, '2020-06-14 15:15:58', '2020-06-14 15:16:34'),
(5, '11', NULL, NULL, 'male', '2020-06-16', NULL, NULL, NULL, NULL, NULL, '2020-06-15 20:21:30', '2020-06-15 20:21:30'),
(6, '12', NULL, NULL, 'female', '2020-06-18', NULL, NULL, NULL, NULL, NULL, '2020-06-18 15:19:14', '2020-06-18 15:19:14');

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
(1, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 8, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `content`, `name`, `profession`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 'doanload thendownlasdifoasidfoasdf afghanistan asdjfasiodf', 'asdfasdf sadfasdfasdf sdd', 'asdfasdfasdfasdf asd fas dfsa dfas', 3, '2020-06-19 15:10:12', '2020-06-19 15:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'lead3@gmail.com', 'employer', NULL, '$2y$10$5FUChHdrgB6YTxRLblZYyOQ2ZjzgxxpPKEI.NDgqFVcz0n.A0LDHC', NULL, '2020-06-11 03:14:47', '2020-06-11 03:14:47'),
(2, 'Mied Test', 'Hamidsalarzai1994@gmail.com', 'seeker', NULL, '$2y$10$0LTxwrtLYoJG73W/eBUIdONAHqc001eyLmml1isWMY3iedS/TCc/y', '4ZmTVR6GPQBgNprbO7ApeTlZI3IxaSf0tQOAu9W3KCleEnGtryeFtt7Ge1rM', '2020-06-11 03:18:04', '2020-06-11 03:18:04'),
(3, 'seeker', 'seeker@gmail.com', 'seeker', NULL, '$2y$10$6vyuJ.M8olfnI4PrQS/gte4xZnTMoZntMJQk6ThNvXh0p6c0iCtEa', NULL, '2020-06-12 01:36:40', '2020-06-12 01:36:40'),
(4, NULL, 'lead4@gmail.com', 'employer', NULL, '$2y$10$wdDaML0dCTl14PYRYp/RluCe9SaJZ042xI6mUVRG36sfxLTomCGBG', NULL, '2020-06-13 22:05:43', '2020-06-13 22:05:43'),
(5, NULL, 'lead5@gmail.com', 'employer', NULL, '$2y$10$0tEjaIlTexBUrxB7gUryMeY50wWYdEVEMdTzDV.b6OuY2BirMofcS', NULL, '2020-06-13 23:33:37', '2020-06-13 23:33:37'),
(6, NULL, 'lead6@gmail.com', 'employer', NULL, '$2y$10$rAQF4DZvVJgMpJ3zP2Ym0OfQC6Cuev4tisnSnZ7Dz8gL10pNvGc6u', NULL, '2020-06-13 23:34:11', '2020-06-13 23:34:11'),
(7, NULL, 'hamidkunari94@gmail.com', 'employer', NULL, '$2y$10$uEyQIkiBv8iwaSpPpi5.Se6/y5qBWcuWjLSRs5XktyShvpmqM2H8e', NULL, '2020-06-14 14:50:18', '2020-06-14 14:50:18'),
(8, 'admin', 'Hamidsalarzai94@gmail.com', 'employer', NULL, '$2y$10$nvxaqggB5U3ZJZbQJsmybeOQmhnaIUueRXZtZk2HN1QMs.K1F1fU6', NULL, '2020-06-14 15:08:07', '2020-06-14 15:08:07'),
(9, 'noor', 'Noorahmad@gmail.com', 'seeker', NULL, '$2y$10$7Lrz.mkjkLeDCbcQE5X3IezfeJgxuAAPyMspOmJpic6aSyQNNCA3m', NULL, '2020-06-14 15:14:04', '2020-06-14 15:14:04'),
(10, 'Ahmad', 'ahmad@gmail.com', 'seeker', NULL, '$2y$10$fRPDel909ub0gywfdordgOzYYvsdKEIk8OI8d7acmEH8fmjicQw9K', NULL, '2020-06-14 15:15:58', '2020-06-14 15:15:58'),
(11, 'khan', 'khan@gmail.com', 'seeker', NULL, '$2y$10$NMq33swZaB1octoarFnrA.EjDLSJyLSWTSX.hymtvxB1k6dWaLjbC', NULL, '2020-06-15 20:21:30', '2020-06-15 20:21:30'),
(12, 'Era', 'era@gmail.com', 'seeker', NULL, '$2y$10$MTH4o92q.LRk3.lxPAPoo.mhJXlYaFQwjFj0TYeCv2sUNCG4dph1m', NULL, '2020-06-18 15:19:13', '2020-06-18 15:19:13'),
(13, 'Myah Sauer', 'robbie.thiel@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'n0sfYNbUQk', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(14, 'Ladarius Schinner MD', 'yschowalter@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aNQkLWRm39', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(15, 'Vivianne Stroman', 'josianne74@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a9BKGhf4w4', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(16, 'Jarrod Lehner', 'langosh.shanna@example.net', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rZkc8Rnx6D', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(17, 'Dr. Greyson Hirthe Sr.', 'towne.dax@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qFl9Uu5kku', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(18, 'Prof. Santos Stokes V', 'swift.mack@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iX9Q9Y8UuZ', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(19, 'Dixie Lebsack', 'botsford.edwardo@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S5ns1IHznO', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(20, 'Ila Tremblay MD', 'edna89@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LoIJbiuRSf', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(21, 'Destiney Altenwerth', 'cecelia50@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8w3KYeQgyJ', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(22, 'Glennie Corkery', 'margot43@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B4RgxqmD0Y', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(23, 'Prof. Osvaldo Green', 'larson.zack@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qwEuGmsvAj', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(24, 'Brianne Schroeder', 'rau.spencer@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PuW1UeGcn3', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(25, 'Hadley Reichert', 'cristal.dare@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uEVKEKfL9H', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(26, 'Furman West', 'qbarton@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CUF7V1Ou3R', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(27, 'Delmer Stoltenberg', 'alexandria19@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qj4YBTSOt0', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(28, 'Dr. Constantin Jaskolski', 'noconner@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3XLy9fOs8Q', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(29, 'Kole Harvey', 'toconnell@example.com', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'itHufFlE1t', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(30, 'Brielle Halvorson', 'randi.schamberger@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AFE2C9cy3Z', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(31, 'Ms. Rahsaan O\'Reilly V', 'cornell.oreilly@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XstzqduNU2', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(32, 'Ms. Pattie Kozey', 'lkuvalis@example.org', 'seeker', '2020-06-19 13:50:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'leSFuNX2zB', '2020-06-19 13:50:41', '2020-06-19 13:50:41'),
(33, 'Audra Zboncak Sr.', 'fharris@example.org', 'seeker', '2020-06-19 13:52:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AjkrR56eqP', '2020-06-19 13:52:15', '2020-06-19 13:52:15'),
(34, NULL, 'newone@gmail.com', 'employer', NULL, '$2y$10$XHjMGodx2P60EjdahX6SXOZyLqTfJy8Xq5mlF/8jHPTl1hjGWYGTW', NULL, '2020-06-20 13:46:22', '2020-06-20 13:46:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
