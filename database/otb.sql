-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2023 at 02:22 PM
-- Server version: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tour_serial` varchar(255) NOT NULL,
  `isPaid` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `number_of_people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `tour_serial`, `isPaid`, `created_at`, `updated_at`, `deleted_at`, `number_of_people`) VALUES
(1, '3', '1', 0, '2023-01-04 22:11:13', '2023-01-04 22:11:13', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `chat_bots`
--

CREATE TABLE `chat_bots` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `chat_bot_tour_operator` varchar(255) NOT NULL,
  `chat_bot_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`chat_bot_description`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_bot_questions`
--

CREATE TABLE `chat_bot_questions` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `chat_bot_question_chat_bot_serial` varchar(255) NOT NULL,
  `chat_bot_question_type` varchar(255) NOT NULL,
  `chat_bot_question_questions` varchar(255) NOT NULL,
  `chat_bot_question_answers` varchar(255) NOT NULL,
  `chat_bot_question_tour_serial` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_analysis_rating` varchar(255) DEFAULT NULL,
  `comment_rating` varchar(255) DEFAULT NULL,
  `tour_serial` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `tour_serial` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `description`, `file_path`, `tour_serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOUR0010', 'lbMRMLbgTrpH1WCq7NdQ1fa5zjEusGd3lZQURwhb.jpg', 1, '2023-01-04 20:30:38', '2023-01-04 20:30:38', NULL),
(2, 'TOUR0010', 'SRa6mVU2xqBvqUELCk5kG266AR4tUfYBdQZnWEAk.jpg', 1, '2023-01-04 22:15:27', '2023-01-04 22:15:27', NULL),
(3, 'TOUR0010', 'H2BWOaMQfYOR01dOK3atPqZyZoUkTNzAbH35yfbn.jpg', 1, '2023-01-04 22:15:56', '2023-01-04 22:15:56', NULL),
(4, 'TOUR0010', 'HdepKIzgmkDo12ek3KWAFd1pK37RDqZJiMZXxQrK.jpg', 1, '2023-01-04 22:31:56', '2023-01-04 22:31:56', NULL),
(5, 'TOUR0010', 'zgdJlJODWdJQB1gWxp6j8cTGnqP4HnBfYR5VGJxn.jpg', 2, '2023-01-04 22:38:03', '2023-01-04 22:38:03', NULL),
(6, 'TOUR0011', '48ckZdkeGx0vxMkc0XOl5mFs23mSDoC8Fa4yFcnq.jpg', 2, '2023-01-04 22:38:03', '2023-01-04 22:38:03', NULL),
(7, 'TOUR0012', 'XO1ro25j9hRv4y0djWI0HxZwGq490IIhyV07MFhG.jpg', 2, '2023-01-04 22:38:03', '2023-01-04 22:38:03', NULL),
(8, 'TOUR0013', 'oBXnhmZTQJ3wipi62FIYucmgzyK0aKsyAlnA5wET.png', 2, '2023-01-04 22:38:03', '2023-01-04 22:38:03', NULL),
(9, 'TOUR0020', 'TW7i2BNX5scnLpBra1FekZ4asG1mrkcJRQNc6t1O.jpg', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(10, 'TOUR0021', '6Lm3coAGagG5gCFRdlY58rBOfXtMe5ny3NZn8txd.jpg', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(11, 'TOUR0022', '3DyOkvAtsWPNGtsmHDHfl9zZhn4n6HEncehKnsoc.jpg', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(12, 'TOUR0023', 'o43oQEbab2RaNOasSRXORi49ywGkqccLidHYh3lA.jpg', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(13, 'TOUR0024', 'Y8MQ6Z1CGLFuN0UAmtGLXtRi3vrkzurNRUyi7e3y.jpg', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(14, 'TOUR0030', 'jxWCbCBXqkw4rdhkhNgxhYclDZ2aLRCmjwhh0Ld2.jpg', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(15, 'TOUR0031', 'W0XrsY78X3mvODItY3Hnv6cgXokjM8D6NPMc29mM.jpg', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(16, 'TOUR0032', 'fOuaO1Y1fJRX7wwZu2MnJeMumSE6Acfc1OK5JSws.jpg', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(17, 'TOUR0033', '4aLfw2Gqh4lMCcWuhA2sxcYQznDDgUEEhywkg9D8.jpg', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(18, 'TOUR0034', 'c5gq8NvwCu04gXeIRhsyFp8FDHutp47qTXfMvAgU.jpg', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(19, 'TOUR0040', 'uusjVrx200WijdCCwXMsIodZhlnMrtvBRSx6fQjf.jpg', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(20, 'TOUR0041', '4Y99MSPtRUUEwsfZc9Zh3sfD09GP4FlaXVnCIBts.jpg', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(21, 'TOUR0042', 'Kp7r1hDLIpenYtMMrjmh31DhPtTQo5Hn4wOOrl3f.jpg', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(22, 'TOUR0043', 'RxS0UZhp7rcCEcB4pSz4CHyfha5XiAUTVJJwDw44.jpg', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(23, 'TOUR0044', 'Q5QX24c2o5Uq1EYBPVBenbTUDpBY82u3idNYs7CC.jpg', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(24, 'TOUR0050', 'xSdUix1LBuJOFzrniMgc7CyQTRHKvfLTQaEpaZBN.jpg', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(25, 'TOUR0051', 'ciCmj1HCchVf1NzbOHTRoAxMmRTB9AQ2HdEWVpnn.jpg', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(26, 'TOUR0052', 'gYaNzBGcoI6xFj3R1YVGzMnHQfRp4JGXcEOv9N1h.jpg', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(27, 'TOUR0053', 'LY6OHcEzyR4DQ15UiNDUup753cRDtBhau6ai3uEd.jpg', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(28, 'TOUR0054', 'etEr7VOaBhr24PJ1ZnqeK7wsej0AYWQYfry0k2hh.png', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(29, 'TOUR0010', '073R1SwPJL5eIfjNQGZzgXiQqtqcBAd7UVb8TFdM.jpg', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(30, 'TOUR0011', 'QZZrSJJrnbDcGuze4PEzg84Dw8ycev395oJlayyz.jpg', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(31, 'TOUR0012', '8H2FWmt6A49PtNl4wkU3xr4IDRmNR4mAZI5BpSZO.png', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(32, 'TOUR0013', 'QEG1ySzkvm3M4k2e122ADe1roEIaY2ETKGtqopTK.jpg', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(33, 'TOUR0014', 'NP2R2KJmlHoJ7pIv0rJnwGd83YPWyS9DaNyvCm4s.jpg', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(34, 'TOUR0020', 'VxRkimtzqEyiz9IDamlQptmDFsB5AzmwY4r2eQl6.jpg', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL),
(35, 'TOUR0021', 'JwfsU9zAcTaIDOOgvp1kSlxb46ttmDVkdLUlRjhi.jpg', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL),
(36, 'TOUR0022', 'FoDWhtbCY4kcCugLbsYSdxEPMnOyXwtkbUoyes2n.jpg', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL),
(37, 'TOUR0023', 'A3FU1J2ggDVhcBj7DxwhpeeDMAVFXHPAK57Oq9pY.jpg', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL),
(38, 'TOUR0024', 'ZQe3PU61W9Xm8sTm9DkZaQaz8BItDZaZUC5F8P6F.jpg', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_10_05_031423_create_user_table', 1),
(2, '2022_10_05_031859_create_tourist_table', 1),
(3, '2022_10_05_062228_create_tour_operators_table', 1),
(4, '2022_10_05_062516_create_tours_table', 1),
(5, '2022_10_05_062833_create_services_table', 1),
(6, '2022_10_05_063131_create_tour_images_table', 1),
(7, '2022_10_05_063453_create_chat_bots_table', 1),
(8, '2022_10_05_064333_create_chat_bot_questions_table', 1),
(9, '2022_10_05_064747_create_tour_service_table', 1),
(10, '2022_10_18_135559_create_permission_tables', 1),
(11, '2022_10_19_025658_create-places-table', 1),
(12, '2022_10_22_120624_create_booking_table', 1),
(13, '2022_10_22_131019_create_comment_table', 1),
(14, '2022_10_23_101808_create_service_tour_table', 1),
(15, '2022_11_27_085125_create_image_table', 1),
(16, '2022_12_19_015059_edit_tour_table', 1),
(17, '2022_12_31_081519_edit-tour-column', 1),
(18, '2022_12_31_112820_edit_booking_table', 1),
(19, '2022_12_31_120022_add_tour_detail_table', 1),
(20, '2023_01_04_091124_edit_tour_detail', 1),
(21, '2023_01_04_100935_update_tour_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-01-04 20:07:18', '2023-01-04 20:07:18'),
(2, 'tourist', 'web', '2023-01-04 20:07:18', '2023-01-04 20:07:18'),
(3, 'tour-operator', 'web', '2023-01-04 20:07:18', '2023-01-04 20:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `place_name` varchar(255) NOT NULL,
  `place_full_name` varchar(255) NOT NULL,
  `place_short_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`serial`, `place_name`, `place_full_name`, `place_short_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Da Nang', 'Da Nang', 'DN', NULL, NULL, NULL),
(2, 'Ha Noi', 'Ha Noi', 'HN', NULL, NULL, NULL),
(3, 'Sai Gon', 'Sai Go', 'SG', NULL, NULL, NULL),
(4, 'Quang Binh', 'Quang Binh', 'QB', NULL, NULL, NULL),
(5, 'Ha Long', 'Ha Long', 'HL', NULL, NULL, NULL),
(6, 'An Giang', 'An Giang', 'AG', NULL, NULL, NULL),
(7, 'Nha Trang ', 'Nha Trang', 'NT', NULL, NULL, NULL),
(8, 'Sa Pa', 'Sa Pa', 'SP', NULL, NULL, NULL),
(9, 'Phu Quoc', 'Phuc Quoc', 'PQ', NULL, NULL, NULL),
(10, 'Hoi An', 'Hoi An', 'HA', NULL, NULL, NULL),
(11, 'Can Tho', 'Can Tho', 'CT', NULL, NULL, NULL),
(12, 'Hue', 'Hue', 'Hue', NULL, NULL, NULL),
(13, 'Vung Tau', 'Vung Tau', 'VT', NULL, NULL, NULL),
(14, 'Da Lat', 'Da Lat', 'DL', NULL, NULL, NULL),
(15, 'Moc Chau', 'Moc Chau', 'MC', NULL, NULL, NULL),
(16, 'Ha Giang', 'Ha Giang', 'HG', NULL, NULL, NULL),
(17, 'Ninh Binh', 'Ninh Binh', 'NB', NULL, NULL, NULL),
(18, 'Thai Nguyen', 'Thai Nguyen', 'TN', NULL, NULL, NULL),
(19, 'Lai Chau', 'Lai Chau', 'LC', NULL, NULL, NULL),
(20, 'Thanh Hoa', 'Thanh Hoa', 'TH', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-01-04 20:07:18', '2023-01-04 20:07:18'),
(2, 'tourist', 'web', '2023-01-04 20:07:18', '2023-01-04 20:07:18'),
(3, 'tour-operator', 'web', '2023-01-04 20:07:18', '2023-01-04 20:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_sub_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_id`
--

CREATE TABLE `service_id` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `tour_serial` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_tour`
--

CREATE TABLE `service_tour` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_serial` varchar(255) NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tourists`
--

CREATE TABLE `tourists` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `user_serial` varchar(255) NOT NULL,
  `tourist_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `tourist_phone_number` varchar(255) DEFAULT NULL,
  `tourist_personal_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourists`
--

INSERT INTO `tourists` (`serial`, `user_serial`, `tourist_name`, `address`, `date_of_birth`, `tourist_phone_number`, `tourist_personal_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2', 'tourist 0', '124 Dien Bien Phu Street. Dakao Ward, District 1, HCM City', '1963-10-31', '038516595', '615231275662', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(2, '3', 'tourist 1', 'No.52, Group 10, Cau Dien town, HaNoi', '1966-06-14', '038600261', '397487435612', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(3, '4', 'tourist 2', '120 Hang Trong Street, HaNoi', '1970-06-19', '03856078', '172952120354', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(4, '5', 'tourist 3', '41 Phan Dinh Phung Street, NamDinh city', '1987-05-29', '09350390', '994744488803', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(5, '6', 'tourist 4', '168 Le Duan Street, Hai Chau District, DaNang', '1991-05-24', '03823187', '600521036040', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(6, '7', 'tourist 5', '125/208 Luong The Vinh Street, Ho Chi Minh City', '1962-02-19', '08472625', '592012842801', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(7, '8', 'tourist 6', ' Floor 6, 100 Dien Bien Phu St.,Ho Chi Minh City', '1968-01-25', '08359219', '996212622664', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(8, '9', 'tourist 7', 'Tan Hoa Ward, Buon Ma Thuot City', '1975-08-28', '0859093', '660312974726', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(9, '10', 'tourist 8', 'Guoman Hotel, 83A Ly Thuong Kiet Street, HaNoi', '1977-09-06', '09137006', '908584607091', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(10, '11', 'tourist 9', ' 15C Le Ngoc Han, QuangNam', '1989-01-31', '03882236', '603988245787', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `tour_tour_operator_serial` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_title` varchar(255) NOT NULL,
  `tour_comment_rating` varchar(255) DEFAULT '0',
  `tour_rating` varchar(255) DEFAULT '0',
  `tour_starting_place` varchar(255) NOT NULL,
  `tour_destination` varchar(255) NOT NULL,
  `tour_day_length` varchar(255) NOT NULL,
  `tour_night_length` varchar(255) NOT NULL,
  `tour_start_date` varchar(255) NOT NULL,
  `tour_description` varchar(255) NOT NULL,
  `tour_slots` varchar(255) NOT NULL,
  `tour_slots_left` varchar(255) NOT NULL,
  `tour_prices` varchar(255) NOT NULL,
  `tour_place` varchar(255) NOT NULL,
  `tour_is_verify` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`serial`, `tour_tour_operator_serial`, `tour_name`, `tour_title`, `tour_comment_rating`, `tour_rating`, `tour_starting_place`, `tour_destination`, `tour_day_length`, `tour_night_length`, `tour_start_date`, `tour_description`, `tour_slots`, `tour_slots_left`, `tour_prices`, `tour_place`, `tour_is_verify`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '13', 'TOUR001', 'DU LỊCH THẢ GA, KHÔNG LO CHÁY TÚI', '0', '0', '11', '13', '1', '1', '10/01/2023', 'Không đi thì phí cả đời', '5', '4', '10000', '13', '1', '2023-01-04 20:30:38', '2023-01-04 22:32:15', '2023-01-04 22:32:15'),
(2, '13', 'TOUR001', 'DU LỊCH THẢ GA, NHẬN NGAY HONDA', '0', '0', '10', '12', '1', '2', '10/01/2023', 'Chần chờ gì mà không đăng kí nữa', '1', '1', '10000', '12', '1', '2023-01-04 22:38:03', '2023-01-05 00:20:09', NULL),
(3, '13', 'TOUR002', 'ĐẶT ĐI CHỜ CHI', '0', '0', '7', '14', '2', '1', '27/01/2023', 'Dù đã đi du lịch Đà Lạt tận những 4 lần chỉ trong vài năm ngắn ngủi, nhưng mình vẫn thấy Đà Lạt là sự lựa chọn tuyệt vời cho những ai muốn trốn tránh cái nóng oi bức của mùa hè', '10', '10', '20000', '14', '1', '2023-01-04 23:23:30', '2023-01-05 00:20:11', NULL),
(4, '13', 'TOUR003', 'CẦN THƠ GẠO TRẮNG, NƯỚC TRONG', '0', '0', '3', '11', '2', '1', '26/01/2023', 'Trải Nghiệm Du Lịch 2N1Đ - Hái Trái Cây Tại Vườn Cần Thơ', '10', '10', '1000000', '11', '1', '2023-01-04 23:33:15', '2023-01-05 00:20:12', NULL),
(5, '13', 'TOUR004', 'TOUR DU LICH MIỀN TÂY 01 NGÀY: MỸ THO – BẾN TRE – MỘT NGÀY LÀM NÔNG DÂN (TÁT MƯƠNG BẮT CÁ)', '0', '0', '3', '13', '2', '2', '25/01/2023', 'Tp.HCM - Tiền Giang - Mỹ Tho - Bến Tre - Một Ngày Làm Nông Dân (Ăn sáng, Trưa)', '11', '11', '10000000', '13', '1', '2023-01-04 23:39:48', '2023-01-05 00:20:15', NULL),
(6, '13', 'TOUR005', 'TOUR DU LỊCH ĐẢO PHÚ QUỐC TRỌN GÓI 2022 ĐẦY HẤP DẪN', '0', '0', '11', '9', '3', '2', '22/12/2022', 'Với đội ngũ hướng dẫn viên tận tâm nhiệt tình và chất lượng cơ sở vật chất. Như xe đưa đón hiện đại, resort tiêu chuẩn. Tour du lịch Đảo Phú Quốc trọn gói 2022 sẽ cho quý khách tận hưởng được sự thư giãn tuyệt đối.', '15', '15', '5000000', '9', '1', '2023-01-04 23:47:34', '2023-01-05 00:20:20', NULL),
(7, '14', 'TOUR001', 'TOUR DU LỊCH PHAN THIẾT – 2 NGÀY 1 ĐÊM', '0', '0', '3', '9', '2', '1', '08/02/2023', 'Best tour award 2022', '10', '10', '3000000', '9', '1', '2023-01-04 23:53:58', '2023-01-05 00:20:17', NULL),
(8, '14', 'TOUR002', 'TOUR DU LỊCH MIỀN TÂY CHỢ NỔI CÁI RĂNG – CHỢ NỔI CẦN THƠ', '0', '0', '11', '13', '1', '1', '19/01/2023', 'Chợ nổi Cái Răng là loại hình chợ độc đáo và đặc trưng của vùng đồng bằng sông Cửu Long mà không nơi nào trên đất nước Việt Nam có được. Và đây cũng là khu chợ tiêu biểu, sầm uất, nổi tiếng nhất cho nét văn hóa sông nước miền Tây.', '20', '20', '4000000', '13', '1', '2023-01-05 00:03:17', '2023-01-05 00:20:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_detail`
--

CREATE TABLE `tour_detail` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `tour_detail_title` varchar(255) DEFAULT NULL,
  `tour_detail_content` varchar(255) NOT NULL,
  `tour_serial` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_detail`
--

INSERT INTO `tour_detail` (`serial`, `tour_detail_title`, `tour_detail_content`, `tour_serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Ngày 1\r\nCần Thơ', 1, '2023-01-04 20:30:38', '2023-01-04 22:15:27', '2023-01-04 22:15:27'),
(2, NULL, 'Ngày 2\r\nVũng Tàu', 1, '2023-01-04 20:30:38', '2023-01-04 22:15:27', '2023-01-04 22:15:27'),
(3, NULL, 'Ngày 1\r\nCần Thơ', 1, '2023-01-04 22:15:27', '2023-01-04 22:15:56', '2023-01-04 22:15:56'),
(4, NULL, 'Ngày 2\r\nVũng Tàu', 1, '2023-01-04 22:15:27', '2023-01-04 22:15:56', '2023-01-04 22:15:56'),
(5, NULL, 'Ngày 1\r\nCần Thơ', 1, '2023-01-04 22:15:56', '2023-01-04 22:31:56', '2023-01-04 22:31:56'),
(6, NULL, 'Ngày 2\r\nVũng Tàu', 1, '2023-01-04 22:15:56', '2023-01-04 22:31:56', '2023-01-04 22:31:56'),
(7, NULL, 'Ngày 1\r\nCần Thơ', 1, '2023-01-04 22:31:56', '2023-01-04 22:31:56', NULL),
(8, NULL, 'Ngày 2\r\nVũng Tàu', 1, '2023-01-04 22:31:56', '2023-01-04 22:31:56', NULL),
(9, NULL, 'Ngày 1: Hội An', 2, '2023-01-04 22:38:03', '2023-01-04 22:38:03', NULL),
(10, NULL, 'Ngày 2: Huế', 2, '2023-01-04 22:38:03', '2023-01-04 22:38:03', NULL),
(11, NULL, 'Sáng Ngày 1: Sound Tây Nguyên', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(12, NULL, 'Chiều Ngày 1: Đồi thông', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(13, NULL, 'Tối ngày 1: Chợ đêm Đà Lạt', 3, '2023-01-04 23:23:30', '2023-01-04 23:23:30', NULL),
(14, NULL, 'NGÀY 01: TPHCM –  TIỀN GIANG – BẾN TRE – CẦN THƠ (Ăn trưa, tối du thuyền 5*)', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(15, NULL, '06h30: Xe và HDV đón quý khách tại Vp Cty Bình Minh Phương Nam Travel số 180 cống quỳnh Q1', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(16, NULL, '09h00: Quý khách đến với Bến Tàu 30/4, Tp.Mỹ Tho thuyền lớn đón Quý khách đi dạo trên sông Tiền', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(17, NULL, '​10h30: Quý khách trở ra thuyền lớn, đến với tỉnh bến tre', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(18, NULL, '13h30: Thuyền đưa Quý khách trở lại Mỹ Tho, đoàn khởi hành đi Cần Thơ.', 4, '2023-01-04 23:33:15', '2023-01-04 23:33:15', NULL),
(19, NULL, '• 06h00: Xe và HDV đón quý khách tại điểm hẹn hoặc văn phòng Cty Bình Minh Phương Nam Travel số 180 cống quỳnh Q1', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(20, NULL, '• 09h00: Quý khách đến với Bến Tàu 30/4, Thuyền lớn đón Quý khách đi dạo trên sông Tiền', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(21, NULL, '• 10h30: Trở ra thuyền lớn Xuôi dòng sông Tiền đến Cồn Phụng – Bến Tre (Cồn Đạo Dừa)', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(22, NULL, '• 11h30: Quý khách sẽ có một ngày làm nông dân thực thụ: được trang bị áo bà ba, tự tay tát và bắt cá\r\ntrong ao và thưởng thức món đặc sản: cá lóc nướng trui', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(23, NULL, '• 12h30: Quý khách dùng bữa trưa tại nhà hàng Cồn Phụng', 5, '2023-01-04 23:39:48', '2023-01-04 23:39:48', NULL),
(24, NULL, 'Đêm 1: TP.HCM – Hà Tiên', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(25, NULL, 'Ngày 1 : Phú Quốc – Du ngoạn Bắc đảo', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(26, NULL, 'Ngày 2: Tham quan Nam đảo', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(27, NULL, 'Ngày 3: Phú Quốc – Hà Tiên – về lại TP.HCM', 6, '2023-01-04 23:47:34', '2023-01-04 23:47:34', NULL),
(28, NULL, 'NGÀY 1: TPHCM – KDL TÀ CÚ – PHAN THIẾT – ĐỒI HỒNG (Ăn sáng, trưa, tối)', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(29, NULL, 'NGÀY 2: KDL BÀU TRẮNG – TPHCM (Ăn sáng, trưa)', 7, '2023-01-04 23:53:58', '2023-01-04 23:53:58', NULL),
(30, NULL, '• 05h30: HDV Cty Bình Minh Phương Nam Travel đón quý khách tại (Tượng Đài Bác Hồ) số 46 đường Hai Bà Trưng - Tp.Cần Thơ', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL),
(31, NULL, '• 07h00: Tàu cập bến, Cty Bình Minh Phương Nam travel kính chúc Quý khách thật nhiều sức khỏe, hẹn gặp lại quý khách trong những chuyến đi tiếp theo', 8, '2023-01-05 00:03:17', '2023-01-05 00:03:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_images`
--

CREATE TABLE `tour_images` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `tour_image_image` blob NOT NULL,
  `tour_image_tour_serial` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `tour_operator_user_serial` varchar(255) NOT NULL,
  `tour_operator_name` varchar(255) NOT NULL,
  `tour_operator_phone_number` varchar(255) DEFAULT NULL,
  `tour_operator_bank_account` varchar(255) DEFAULT NULL,
  `tour_operator_tax_number` varchar(255) DEFAULT NULL,
  `tour_operator_address` varchar(255) DEFAULT NULL,
  `tour_operator_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`serial`, `tour_operator_user_serial`, `tour_operator_name`, `tour_operator_phone_number`, `tour_operator_bank_account`, `tour_operator_tax_number`, `tour_operator_address`, `tour_operator_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12', 'operator 0', '038516595', '361893756252', '224729675485', '124 Dien Bien Phu Street. Dakao Ward, District 1, HCM City', 'This is operator 0', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(2, '13', 'operator 1', '038600261', '446935390861', '653046362811', 'No.52, Group 10, Cau Dien town, HaNoi', 'This is operator 1', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(3, '14', 'operator 2', '03856078', '937903464045', '102108743286', '120 Hang Trong Street, HaNoi', 'This is operator 2', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(4, '15', 'operator 3', '09350390', '554134092911', '314019114716', '41 Phan Dinh Phung Street, NamDinh city', 'This is operator 3', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(5, '16', 'operator 4', '03823187', '789527414410', '579097625069', '168 Le Duan Street, Hai Chau District, DaNang', 'This is operator 4', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(6, '17', 'operator 5', '08472625', '227110679695', '350665377692', '125/208 Luong The Vinh Street, Ho Chi Minh City', 'This is operator 5', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(7, '18', 'operator 6', '08359219', '447928721147', '737028149310', ' Floor 6, 100 Dien Bien Phu St.,Ho Chi Minh City', 'This is operator 6', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(8, '19', 'operator 7', '0859093', '221200403015', '619741392190', 'Tan Hoa Ward, Buon Ma Thuot City', 'This is operator 7', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(9, '20', 'operator 8', '09137006', '406647882952', '653855633637', 'Guoman Hotel, 83A Ly Thuong Kiet Street, HaNoi', 'This is operator 8', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(10, '21', 'operator 9', '03882236', '121040633455', '749643993234', ' 15C Le Ngoc Han, QuangNam', 'This is operator 9', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$qH7LPkQ7fFGRt1LNJmaS/.MxcDGJ/UHMvCIBh.ksw6lBSd9M.4KBS', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(2, 'tourist0', 'tourist0@gmail.com', '$2y$10$cTzvrRi2VoI.VusUogOa4OfbacPNyWNoU8UEvEWce02BIxFUnN7/G', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(3, 'tourist1', 'tourist1@gmail.com', '$2y$10$4G0M9/Yn5DbALW78F6KGp.3NtUporhuiovwt8qKoteFoSdwo6DeaO', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(4, 'tourist2', 'tourist2@gmail.com', '$2y$10$8FekFm0U87dpdBhOznNZYOy0fuNcGG.r9mIgaZslgRtISr1b71A0m', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(5, 'tourist3', 'tourist3@gmail.com', '$2y$10$6Q/DD9.RVhbZg4gHsIysN.wvF.N025d5YD85ikbsnNrftWXQ459TS', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(6, 'tourist4', 'tourist4@gmail.com', '$2y$10$LHuimxdoszNIPuq2.ivo7.9k/FIvcVC2Qh2hnN1YUE26z8houUp3G', '2023-01-04 20:07:18', '2023-01-04 20:07:18', NULL),
(7, 'tourist5', 'tourist5@gmail.com', '$2y$10$2CwDzxUwDKG0UntqDsM0HOzmh.wgbs9AyD3TcBvt6m0aEa7GshZ.W', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(8, 'tourist6', 'tourist6@gmail.com', '$2y$10$hka5fM1mbFhsyTFH36FgfuUOtW120uL08sNdnbP1GaPf3SAsUbwKm', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(9, 'tourist7', 'tourist7@gmail.com', '$2y$10$BV5pjaALrAjwNW1YLwpBNuH/9vjyxPM9gUgK/5LHKKpncGqgL/0M2', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(10, 'tourist8', 'tourist8@gmail.com', '$2y$10$5cxP8rUVdAchLFGnp/XWdepudjJ4GKg.rl3PSdkvmYNCC2z7R2uDu', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(11, 'tourist9', 'tourist9@gmail.com', '$2y$10$m7ZOTN2mCOtr0k4ZNzj4mu0.l3z/9UusHfqHEsCXHRDsFOwLPHD/6', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(12, 'operator0', 'operator0@gmail.com', '$2y$10$u4AtT7cV8t5MDuYKqQoHxOFd4pM364KHdGSTGvOzKrRrkz0/KpOnS', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(13, 'operator1', 'operator1@gmail.com', '$2y$10$oUeNjXQtXfSKjOG2DWvnyOFxhFGO1.hqvvq1nX7IeyjmuRnG5yftC', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(14, 'operator2', 'operator2@gmail.com', '$2y$10$lH3UwXy2SAt9tbaCxwDnt.pem9kDpSKl35H5KiHogeltWLcbQ3F3a', '2023-01-04 20:07:19', '2023-01-04 20:07:19', NULL),
(15, 'operator3', 'operator3@gmail.com', '$2y$10$v1wd4NlcJQ/D.Z/gXkUC9.6.flzVwS90CvbG8xL1OqLHlMVrCe18m', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(16, 'operator4', 'operator4@gmail.com', '$2y$10$h88Gt.TGhUK2jEypMguEm.WPQBWk9vs7rcmegF9kU8krc8a0gnKJW', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(17, 'operator5', 'operator5@gmail.com', '$2y$10$u0nUijHvdkgN6/CW.eZTlOtzfCeFBBouuVBlR/KFCpQF5B2tw7eFq', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(18, 'operator6', 'operator6@gmail.com', '$2y$10$K6byQynPPFmcR2Pandd5QOoJ6oRXgdNR32kzwjqkgNk6UAkpyoQnW', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(19, 'operator7', 'operator7@gmail.com', '$2y$10$5H89Narr4SIAETY.uFQSz.Qa8Pp/ciCvIWJunKvlLXUSJtkFx/CN2', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(20, 'operator8', 'operator8@gmail.com', '$2y$10$C3vdGR8kaAgtvXTyF.wul.Gal6iLtMuqn1bzs.JLU4wU2pAl0/kvm', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL),
(21, 'operator9', 'operator9@gmail.com', '$2y$10$/aroAq/31gFoV0AABI4zTO4413OsDWgzPn0nsIxIxjjaRp2B.HGJi', '2023-01-04 20:07:20', '2023-01-04 20:07:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_bots`
--
ALTER TABLE `chat_bots`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `chat_bot_questions`
--
ALTER TABLE `chat_bot_questions`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_id`
--
ALTER TABLE `service_id`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `service_tour`
--
ALTER TABLE `service_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `tourists_user_serial_unique` (`user_serial`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `tour_detail`
--
ALTER TABLE `tour_detail`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `tour_images`
--
ALTER TABLE `tour_images`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `tour_operators`
--
ALTER TABLE `tour_operators`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `tour_operators_tour_operator_user_serial_unique` (`tour_operator_user_serial`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_bots`
--
ALTER TABLE `chat_bots`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.';

--
-- AUTO_INCREMENT for table `chat_bot_questions`
--
ALTER TABLE `chat_bot_questions`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.';

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_id`
--
ALTER TABLE `service_id`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.';

--
-- AUTO_INCREMENT for table `service_tour`
--
ALTER TABLE `service_tour`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourists`
--
ALTER TABLE `tourists`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tour_detail`
--
ALTER TABLE `tour_detail`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tour_images`
--
ALTER TABLE `tour_images`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.';

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
