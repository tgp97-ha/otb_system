-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2023 at 12:40 AM
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
  `comment_content` longtext NOT NULL,
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
(1, 'asd0', 'nlRc6Twc9VJqvaSaOCA1vcCeJYx54Jv8CT6yZQFT.jpg', 9, '2023-01-05 09:41:42', '2023-01-05 09:41:42', NULL),
(2, 'test0', 'ooK6N40CTvfRUMdmqoJqtpsbVBYG8ydKqcf4j7Qi.jpg', 10, '2023-01-05 09:42:14', '2023-01-05 09:42:14', NULL),
(3, 'wreqw0', 'uf3Lsh08t8yL7HDdua1bu8ExPnab7lyyUQEUMZVs.jpg', 11, '2023-01-05 09:47:03', '2023-01-05 09:47:03', NULL),
(4, 'wreqw1', 'UFv4NtzMyZBpQ2RM6OMxF9aXCs3SNCjcMkxcoaK2.jpg', 11, '2023-01-05 09:47:03', '2023-01-05 09:47:03', NULL),
(5, 'TOUR0010', 'w5REYDQMmhJ91aq3Jdxy6u9Vd0vArWVQzPJ0MJKu.jpg', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(6, 'TOUR0011', 'Z11aPorRWdJfMPJme5h9VdtaY5k5NCnKE5vMu5mR.jpg', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(7, 'TOUR0012', 'Rbdl0VfpABCFwNonM3u7SQwerPN4XWNeVR0bJN7o.jpg', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(8, 'TOUR0013', 'KwbIxLvs0dQBfb6rrOML52kVpF5dbSvGMlXhCgyb.jpg', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(9, 'TOUR0014', 'OIlxCzbxfB5dsjyb1BZBn4hFfJHVhwfvuNoZmg4N.jpg', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(10, 'TOUR0020', 'EgMFcbRcdftQSlvAxZscZmCF97OPpx6K3mvUTD5F.jpg', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(11, 'TOUR0021', 'fqObT5ffFndmeFdxVDZvxUj93u8jO0IGnbE5Ej7I.jpg', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(12, 'TOUR0022', 'JUcdHVUIUs2S2ZoTm9wlvqoum3BLfs0tUdVOS00P.jpg', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(13, 'TOUR0023', 'sTuzcahfyz1KAsxXAREarYvv7JcbI8WFagJFiMQb.jpg', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(14, 'TOUR0024', 'jd21ADcXvsKfK8kneWk6zSUsccduEMjRSsl8DZr0.jpg', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(15, 'TOUR0030', 'RTeVMNEBevXc4T2RGNM5DsLaZdjT4vx0u2SSTkHx.jpg', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(16, 'TOUR0031', 'i1cEQFBHb3kB2jWCEYoGvTmdOjWsMVAs6t3iTFB4.jpg', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(17, 'TOUR0032', 'l5IW7sKWGIZA7jzzXc4LsW7rWbZrsNShXoY1GDpj.jpg', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(18, 'TOUR0033', 'ro0E7BoORGcJdLhJa6Bh3TCQvqaGnsI5Z4j6blyL.jpg', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(19, 'TOUR0034', 'MKyiqqOfNhl2qb6gQZhZHT0gTBdzi83PCdx2Pjzt.jpg', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(20, 'TOUR0040', 'qYhlTEvgPvJdmHxzF17mUz414ztaguEjORlahu6m.jpg', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(21, 'TOUR0041', 'W3PbufmkGEm7CGVOlfmSrnoHhtUWGu9Kq0p30ktW.jpg', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(22, 'TOUR0042', 'L8CqoBkVORe7BptIgze4uflPz50xv7tLA3qEwIHv.jpg', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(23, 'TOUR0043', 'BDcozW9O943g4pNSNjcpngL9hUc4cvv5NL8dKWHL.jpg', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(24, 'TOUR0044', 'HQ4uckJMzlqFRgfTMstPMH0S4YvbQ5mkHs2OV6VG.jpg', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(25, 'TOUR0050', '4PBjxlcM3LG9IKNluzRbDgoZZ6qLoiMSEv52qRL2.jpg', 16, '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(26, 'TOUR0051', 'XQpUAAk2HRMQaQeNey2smATato5HYB1w7SJ9vTan.jpg', 16, '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(27, 'TOUR0052', 'TEwdewjvK6M26DE8H47myUeNza2sxZFIndqA8erp.jpg', 16, '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(28, 'TOUR0053', 'tTsWVB2gathsUWz4CcwutoldtsVgFLUFwah074Jb.jpg', 16, '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(29, 'TOUR0060', 'RXHwQgxDEhZ3ZeIAUMiETYYTKXOgVswRHdBTmPXL.jpg', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(30, 'TOUR0061', 'PZSbNsKckTgXlJpvVrDEHekf6hhGeWz6n7liRKKp.jpg', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(31, 'TOUR0062', 'mrgraY6LmgLL3zHGSUNouo8hY1e2oI9gQbY9inWT.jpg', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(32, 'TOUR0063', 'WVTEjMXxi39owwVPtrxhOlsPdo4V2j06FDOkJZCB.jpg', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(33, 'TOUR0064', 'WTOeMjs7F4RhJ3JhFhC6OXKQDyyt7B3MJ88ppCxh.jpg', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(34, 'TOUR0070', 'QULerH5s5gtEAOO0pELc0zHuV6mU3oPiXufC7cIX.jpg', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(35, 'TOUR0071', 'ToFRUtn4phxqt1ONyxBQREKmubcxWioxgWerRZKJ.jpg', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(36, 'TOUR0072', 'pOPowJ6kPPNuW0ogpeXB0W1I3EykenhbE4k0ZsJc.jpg', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(37, 'TOUR0073', 'PFRGLpAOD1RBTYWEkNCI6o6G91SQow9fLtCXSZtp.jpg', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(38, 'TOUR0074', 'Z274Ws0MmcgevZURQYolfvVHCrLdQgPJTx79qyrb.jpg', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(39, 'TOUR0080', 'sh78Lfi1n1IBhrm1MmIjXehLRTFVqLtl3iMClnq3.jpg', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(40, 'TOUR0081', 'Il2iKHgLXmHY21kAyxI3KLTJUGcBYnC98Q7NY4yk.jpg', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(41, 'TOUR0082', 'hW6fYyaPz58YO0utzkBwm0QC7BLsBkJzAKP2KA2U.jpg', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(42, 'TOUR0083', 'MGnnblnbv2JppPw1rqNmQnO8U6CtIhWIALZFaLc3.jpg', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(43, 'TOUR0084', 'VWBnGZ8Alx76ghA5xbOPLj5XXSA3P6o5hbUtCoWt.jpg', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(44, 'TOUR0090', 'M8vGq0UiYUWkjAUp53rV4MYjf5BT9PaFIXqd9PFk.jpg', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL),
(45, 'TOUR0091', 'pQW5PGt8bR8P5t5a5o2qXPKnXpwHfyDYXMCbZEE0.png', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL),
(46, 'TOUR0092', 'k0x7r67ARxTUAKPwn4XPunT427UqUO0I2ysMKkax.jpg', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL),
(47, 'TOUR0093', '5x46wWgvRmcmhlD69AIXgckz0Mgh9z484FYOgE0D.jpg', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL),
(48, 'TOUR0094', 'dj9KGbu4BzbqWWhpIwkeW2MI9iYeIwFD05tTrvvi.jpg', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL);

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
(21, '2023_01_04_100935_update_tour_table', 1),
(22, '2023_01_05_042208_update_tour_detail', 1),
(23, '2023_01_05_073436_updatecomment', 1);

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
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22);

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
(1, 'admin', 'web', '2023-01-05 08:59:32', '2023-01-05 08:59:32'),
(2, 'tourist', 'web', '2023-01-05 08:59:32', '2023-01-05 08:59:32'),
(3, 'tour-operator', 'web', '2023-01-05 08:59:32', '2023-01-05 08:59:32');

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
(3, 'Sai Gon', 'Sai Gon', 'SG', NULL, NULL, NULL),
(4, 'Quang Binh', 'Quang Binh', 'QB', NULL, NULL, NULL),
(5, 'Ha Long', 'Ha Long', 'HL', NULL, NULL, NULL),
(6, 'An Giang', 'An Giang', 'AG', NULL, NULL, NULL),
(7, 'Nha Trang', 'Nha Trang', 'NT', NULL, NULL, NULL),
(8, 'Sa Pa', 'Sa Pa', 'SP', NULL, NULL, NULL),
(9, 'Phu Quoc', 'Phu Quoc', 'PQ', NULL, NULL, NULL),
(10, 'Phu Tho', 'Phu Tho', 'PT', NULL, NULL, NULL),
(11, 'Hoi An', 'Hoi An', 'HA', NULL, NULL, NULL),
(12, 'Can Tho', 'Can Tho', 'CT', NULL, NULL, NULL),
(13, 'Hue', 'Hue', 'Hue', NULL, NULL, NULL),
(14, 'Vung Tau', 'Vung Tau', 'VT', NULL, NULL, NULL),
(15, 'Da Lat', 'Da Lat', 'DL', NULL, NULL, NULL),
(16, 'Moc Chau', 'Moc Chau', 'MC', NULL, NULL, NULL),
(17, 'Ha Giang', 'Ha Giang', 'HG', NULL, NULL, NULL),
(18, 'Ninh Binh', 'Ninh Binh', 'NB', NULL, NULL, NULL),
(19, 'Thai Nguyen', 'Thai Nguyen', 'TN', NULL, NULL, NULL),
(20, 'Lai Chau', 'Lai Chau', 'LC', NULL, NULL, NULL),
(21, 'Thanh Hoa', 'Thanh Hoa', 'TH', NULL, NULL, NULL),
(22, 'Bac Kan', 'Bac Kan', 'BK', NULL, NULL, NULL),
(23, 'Bac Ninh', 'Bac Ninh', 'BN', NULL, NULL, NULL),
(24, 'Dien Bien', 'Dien Bien', 'DB', NULL, NULL, NULL),
(25, 'Lang Son', 'Lang Son', 'LS', NULL, NULL, NULL),
(26, 'Mai Chau', 'Mai Chau', 'MC', NULL, NULL, NULL),
(27, 'Binh Thuan', 'Binh Thuan', 'BT', NULL, NULL, NULL),
(28, 'Buon Ma Thuat', 'Buon Ma Thuat', 'BMT', NULL, NULL, NULL),
(29, 'Kon Tum', 'Kon Tum', 'KT', NULL, NULL, NULL),
(30, 'Phu Yen', 'Phu Yen', 'PY', NULL, NULL, NULL),
(31, 'Phan Thiet', 'Phan Thiet', 'PT', NULL, NULL, NULL),
(32, 'Quy Nhon', 'Quy Nhon', 'QN', NULL, NULL, NULL),
(33, 'Quang Nam', 'Quang Nam', 'QN', NULL, NULL, NULL),
(34, 'Quang Ngai', 'Quang Ngai', 'QN', NULL, NULL, NULL),
(35, 'Tay Nguyen', 'Tay Nguyen', 'TN', NULL, NULL, NULL),
(36, 'Bac Lieu', 'Bac Lieu', 'BL', NULL, NULL, NULL),
(37, 'Ben Tre', 'Ben Tre', 'BT', NULL, NULL, NULL),
(38, 'Ca Mau', 'Ca Mau', 'CM', NULL, NULL, NULL),
(39, 'Kien Giang', 'Kien Giang', 'KG', NULL, NULL, NULL),
(40, 'Long An', 'Long An', 'LA', NULL, NULL, NULL),
(41, 'Nam Du', 'Nam Du', 'ND', NULL, NULL, NULL),
(42, 'Mien Tay', 'Mien Tay', 'MT', NULL, NULL, NULL),
(43, 'Soc Trang', 'Soc Trang', 'ST', NULL, NULL, NULL),
(44, 'Tien Giang', 'Tien Giang', 'TG', NULL, NULL, NULL),
(45, 'Dong Thap', 'Dong Thap', 'DT', NULL, NULL, NULL);

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
(1, 'admin', 'web', '2023-01-05 08:59:32', '2023-01-05 08:59:32'),
(2, 'tourist', 'web', '2023-01-05 08:59:32', '2023-01-05 08:59:32'),
(3, 'tour-operator', 'web', '2023-01-05 08:59:32', '2023-01-05 08:59:32');

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
(1, '2', 'tourist 0', '124 Dien Bien Phu Street. Dakao Ward, District 1, HCM City', '1963-10-31', '038516595', '800008779000', '2023-01-05 08:59:32', '2023-01-05 08:59:32', NULL),
(2, '3', 'tourist 1', 'No.52, Group 10, Cau Dien town, HaNoi', '1966-06-14', '038600261', '156769432407', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(3, '4', 'tourist 2', '120 Hang Trong Street, HaNoi', '1970-06-19', '03856078', '456797674290', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(4, '5', 'tourist 3', '41 Phan Dinh Phung Street, NamDinh city', '1987-05-29', '09350390', '526352499549', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(5, '6', 'tourist 4', '168 Le Duan Street, Hai Chau District, DaNang', '1991-05-24', '03823187', '701533253111', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(6, '7', 'tourist 5', '125/208 Luong The Vinh Street, Ho Chi Minh City', '1962-02-19', '08472625', '181957722689', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(7, '8', 'tourist 6', ' Floor 6, 100 Dien Bien Phu St.,Ho Chi Minh City', '1968-01-25', '08359219', '863288069637', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(8, '9', 'tourist 7', 'Tan Hoa Ward, Buon Ma Thuot City', '1975-08-28', '0859093', '702048383582', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(9, '10', 'tourist 8', 'Guoman Hotel, 83A Ly Thuong Kiet Street, HaNoi', '1977-09-06', '09137006', '293816734269', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(10, '11', 'tourist 9', ' 15C Le Ngoc Han, QuangNam', '1989-01-31', '03882236', '106061192582', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL);

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
  `tour_description` longtext NOT NULL,
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
(1, '13', 'TOUR001', 'DU LỊCH THẢ GA, KHÔNG LO CHÁY TÚI', '0', '0', '11', '13', '1', '1', '10/01/2023', 'Không đi thì phí cả đời', '5', '4', '10000', '13', '1', '2023-01-04 13:30:38', '2023-01-04 15:32:15', '2023-01-04 15:32:15'),
(2, '13', 'TOUR001', 'DU LỊCH THẢ GA, NHẬN NGAY HONDA', '0', '0', '10', '12', '1', '2', '10/01/2023', 'Chần chờ gì mà không đăng kí nữa', '1', '1', '10000', '12', '1', '2023-01-04 15:38:03', '2023-01-05 09:09:32', '2023-01-05 09:09:32'),
(3, '13', 'TOUR002', 'ĐẶT ĐI CHỜ CHI', '0', '0', '7', '14', '2', '1', '27/01/2023', 'Dù đã đi du lịch Đà Lạt tận những 4 lần chỉ trong vài năm ngắn ngủi, nhưng mình vẫn thấy Đà Lạt là sự lựa chọn tuyệt vời cho những ai muốn trốn tránh cái nóng oi bức của mùa hè', '10', '10', '20000', '14', '1', '2023-01-04 16:23:30', '2023-01-05 09:09:34', '2023-01-05 09:09:34'),
(4, '13', 'TOUR003', 'CẦN THƠ GẠO TRẮNG, NƯỚC TRONG', '0', '0', '3', '11', '2', '1', '26/01/2023', 'Trải Nghiệm Du Lịch 2N1Đ - Hái Trái Cây Tại Vườn Cần Thơ', '10', '10', '1000000', '11', '1', '2023-01-04 16:33:15', '2023-01-05 09:09:36', '2023-01-05 09:09:36'),
(5, '13', 'TOUR004', 'TOUR DU LICH MIỀN TÂY 01 NGÀY: MỸ THO – BẾN TRE – MỘT NGÀY LÀM NÔNG DÂN (TÁT MƯƠNG BẮT CÁ)', '0', '0', '3', '13', '2', '2', '25/01/2023', 'Tp.HCM - Tiền Giang - Mỹ Tho - Bến Tre - Một Ngày Làm Nông Dân (Ăn sáng, Trưa)', '11', '11', '10000000', '13', '1', '2023-01-04 16:39:48', '2023-01-05 09:09:37', '2023-01-05 09:09:37'),
(6, '13', 'TOUR005', 'TOUR DU LỊCH ĐẢO PHÚ QUỐC TRỌN GÓI 2022 ĐẦY HẤP DẪN', '0', '0', '11', '9', '3', '2', '22/12/2022', 'Với đội ngũ hướng dẫn viên tận tâm nhiệt tình và chất lượng cơ sở vật chất. Như xe đưa đón hiện đại, resort tiêu chuẩn. Tour du lịch Đảo Phú Quốc trọn gói 2022 sẽ cho quý khách tận hưởng được sự thư giãn tuyệt đối.', '15', '15', '5000000', '9', '1', '2023-01-04 16:47:34', '2023-01-05 09:09:39', '2023-01-05 09:09:39'),
(7, '14', 'TOUR001', 'TOUR DU LỊCH PHAN THIẾT – 2 NGÀY 1 ĐÊM', '0', '0', '3', '9', '2', '1', '08/02/2023', 'Best tour award 2022', '10', '10', '3000000', '9', '1', '2023-01-04 16:53:58', '2023-01-05 09:09:41', '2023-01-05 09:09:41'),
(8, '14', 'TOUR002', 'TOUR DU LỊCH MIỀN TÂY CHỢ NỔI CÁI RĂNG – CHỢ NỔI CẦN THƠ', '0', '0', '11', '13', '1', '1', '19/01/2023', 'Chợ nổi Cái Răng là loại hình chợ độc đáo và đặc trưng của vùng đồng bằng sông Cửu Long mà không nơi nào trên đất nước Việt Nam có được. Và đây cũng là khu chợ tiêu biểu, sầm uất, nổi tiếng nhất cho nét văn hóa sông nước miền Tây.', '20', '20', '4000000', '13', '1', '2023-01-04 17:03:17', '2023-01-05 09:09:43', '2023-01-05 09:09:43'),
(9, '22', 'asd', 'asdf', '0', '0', '17', '12', '1', '1', '02/01/2023', 'asdf', '1', '1', '1', '12', '0', '2023-01-05 09:41:42', '2023-01-05 09:47:47', '2023-01-05 09:47:47'),
(10, '22', 'test', 'test', '0', '0', '18', '16', '1', '1', '31/01/2023', 'sadf', '1', '1', '1', '16', '0', '2023-01-05 09:42:14', '2023-01-05 09:47:49', '2023-01-05 09:47:49'),
(11, '22', 'wreqw', 'qwerqwr', '0', '0', '15', '12', '1', '1', '24/01/2023', 'asdf', '1', '1', '1', '12', '0', '2023-01-05 09:47:03', '2023-01-05 09:47:51', '2023-01-05 09:47:51'),
(12, '22', 'TOUR001', 'HÀ NỘI - MÙ CANG CHẢI (3 NGÀY 2 ĐÊM)', '0', '0', '2', '24', '3', '2', '05/01/2023', 'Trải nghiệm mùa lúa chín Tây Bắc tại Mù Càng Chải và các hoạt động thú vị khác.', '20', '20', '2390000', '24', '0', '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(13, '22', 'TOUR002', 'Hà Nội - Sapa - Cát Cát - Hàm Rồng - Fansipan (3 Ngày 2 Đêm)', '0', '0', '2', '8', '3', '2', '20/01/2023', '“Bồng bềnh, bồng bềnh mây trắng, thấp thoáng lô nhô rừng cây, Long lanh trong xanh dòng suối, dập dìu sắc màu chợ phiên Ngọt ngào cành lê em hái, đào xuân chúm chím anh say Ngọt gào sương giăng lối phố, xốn xang nhịp váy đung đưa”', '20', '20', '2990000', '8', '0', '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(14, '22', 'TOUR003', 'HCM - Hà Nội - Sapa - Lào Cai - Bái Đính - Hạ Long', '0', '0', '3', '5', '5', '4', '04/02/2023', 'Du lịch Tây Bắc mùa lúa chín mang lại những dấu ấn khó phai trên cung những đường lúa vàng với cảnh sắc thiên nhiên hùng vĩ', '20', '20', '7390000', '5', '0', '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(15, '22', 'TOUR004', 'Hà Nội - Pù Luông - Mai Châu', '0', '0', '2', '16', '2', '1', '19/01/2023', 'Pù Luông, vùng đất Thái cổ của xứ Thanh, nơi quanh năm mây mù bao phủ. Nằm ở độ cao trên 1000m so với mực nước biển, Pù Luông mang đến cho du khách một cảm giác mùa đông đến sớm hơn, cái lành lạnh, chút mây mù phảng phất và thật sững sờ, ngây ngất trước cảnh sắc của đất và người Pù Luông', '15', '15', '1890000', '16', '0', '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(16, '22', 'TOUR005', 'Mộc Châu - Cầu Kính Bạch Long', '0', '0', '2', '16', '2', '1', '14/03/2023', 'Ngoài trải nghiệm tại cầu kính Bạch Long, bạn còn có cơ hội tham quan các địa điểm đẹp khác tại Mộc Châu tại tour Mộc Châu - Cầu Kính Bạch Long', '19', '19', '1650000', '16', '0', '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(17, '22', 'TOUR006', 'Hà Nội - Sapa - Cát Cát - Hàm Rồng - Fansipan (3 Ngày 2 Đêm)', '0', '0', '2', '8', '3', '2', '17/05/2023', 'Sa Pa, một địa danh nguyên sơ với làng bản của các dân tộc ít người như H’Mông, Dao, Tày, Xá Phó, với Thác Bạc, cổng Trời, cầu Mây, hang Gió, núi Hàm Rồng. Nơi đây xứng đáng là một nơi dành cho những ai yêu thích thiên nhiên muốn tìm hiểu phong tục tập quán của người dân miền núi.', '30', '30', '2990000', '8', '0', '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(18, '22', 'TOUR007', '2 Ngày 1 Đêm Nghỉ Tại Du Thuyền 4 Sao Lavender Elegance Cruises', '0', '0', '2', '5', '2', '1', '09/05/2023', 'Hành trình 2 ngày 1 đêm trên du thuyền Lavender Hạ Long sẽ đưa Quý khách thăm quan và nghỉ dưỡng trên Vịnh Hạ Long, chiêm ngưỡng và khám phá những kiệt tác thiên nhiên trên vịnh như đảo Titop, hòn Gà Chọi, đỉnh Lư Hương, Hang Sửng Sốt', '35', '35', '1990000', '5', '0', '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(19, '22', 'TOUR008', 'HCM - Hà Nội - Sapa - Lào Cai - Bái Đính - Hạ Long', '0', '0', '3', '5', '5', '4', '13/04/2023', 'Du lịch Tây Bắc mùa lúa chín mang lại những dấu ấn khó phai trên cung những đường lúa vàng với cảnh sắc thiên nhiên hùng vĩ', '50', '50', '7390000', '5', '0', '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(20, '22', 'TOUR009', 'Phú Quốc: Thành Phố Không Ngủ Grand World - Bãi Sao (Khách sạn 3 sao)', '0', '0', '3', '9', '3', '2', '15/03/2023', 'Tận Hưởng Kì Nghỉ Tại Phú Quốc, Lịch Trình Tham Quan Thú Vị. Hướng Dẫn Viên Chuyên Nghiệp. Khách Sạn 3 Sao Đẳng Cấp.', '25', '25', '3590000', '9', '0', '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_detail`
--

CREATE TABLE `tour_detail` (
  `serial` bigint(20) UNSIGNED NOT NULL COMMENT 'Primary column.',
  `tour_detail_title` varchar(255) DEFAULT NULL,
  `tour_detail_content` longtext NOT NULL,
  `tour_serial` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_detail`
--

INSERT INTO `tour_detail` (`serial`, `tour_detail_title`, `tour_detail_content`, `tour_serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'asdf', 9, '2023-01-05 09:41:42', '2023-01-05 09:41:42', NULL),
(2, NULL, 'asdf', 10, '2023-01-05 09:42:14', '2023-01-05 09:42:14', NULL),
(3, NULL, '06h00: Xe và Hướng dẫn viên đón Quý khách tại điểm hẹn\r\n\r\nKhởi hành đi Mù Cang Chải – Yên Bái theo đường Thanh Sơn - Thu Cúc.\r\n\r\nTrên đường đi Quý khách dừng chân chụp ảnh tại đồi trè Thanh Sơn – Phú Thọ.\r\n\r\n11h30: Quý khách đến Nghĩa Lộ là một thị xã thuộc tỉnh Yên Bái, nổi tiếng với gạo Mường Lò, xôi ngũ sắc của người Thái.\r\n\r\nTại đây, quý khách sẽ nghỉ ngơi ăn trưa, tìm hiểu văn hóa ẩm thực địa phương.\r\n\r\nSau bữa trưa đoàn tiếp tục khởi hành đi Mù Cang Chải dài 100km xuyên qua những thị trấn và những thửa ruộng bậc thang, những đồi chè, đồi cọ thơ mộng.\r\n\r\n15h00: Quý khách dừng xe nghỉ ngơi, ngắm cảnh, chụp ảnh tại đèo Khau Phạ - đèo dài nhất trên quốc lộ 32 với độ dài trên 32km và độ cao là 2100m được mệnh danh là một trong “tứ đại đèo”.\r\n\r\nĐèo Khau Phạ là một trong những cung đường đèo quanh co và dốc đứng thuộc hàng bậc nhất Việt Nam.\r\n\r\nVào độ lúa chín tại đỉnh đèo diễn ra cuộc thi dù lượn quốc tế. Sau đó tiếp tục cuộc hành trình chinh phục Mù Cang Chải.\r\n\r\n17h30: Đến thị trấn Mù Cang chải.\r\n\r\nQuý khách nhận phòng Homestay tại bản Thái nghỉ ngơi.\r\n\r\nTối: Quý khách dùng bữa tối tại nhà hàng, thưởng thức đặc sản Tây Bắc, sau đó tự do tham quan thì trấn Mù Cang Chảivề đêm. \r\n\r\nNghỉ đêm tạiMù Cang Chải.', 11, '2023-01-05 09:47:03', '2023-01-05 09:47:03', NULL),
(4, NULL, 'Ngày 01: Hà Nội - Mù Cang Chải\r\n06h00: Xe và Hướng dẫn viên đón Quý khách tại điểm hẹn\r\n\r\nKhởi hành đi Mù Cang Chải – Yên Bái theo đường Thanh Sơn - Thu Cúc.\r\n\r\nTrên đường đi Quý khách dừng chân chụp ảnh tại đồi trè Thanh Sơn – Phú Thọ.\r\n\r\n11h30: Quý khách đến Nghĩa Lộ là một thị xã thuộc tỉnh Yên Bái, nổi tiếng với gạo Mường Lò, xôi ngũ sắc của người Thái.\r\n\r\nTại đây, quý khách sẽ nghỉ ngơi ăn trưa, tìm hiểu văn hóa ẩm thực địa phương.\r\n\r\nSau bữa trưa đoàn tiếp tục khởi hành đi Mù Cang Chải dài 100km xuyên qua những thị trấn và những thửa ruộng bậc thang, những đồi chè, đồi cọ thơ mộng.\r\n\r\n15h00: Quý khách dừng xe nghỉ ngơi, ngắm cảnh, chụp ảnh tại đèo Khau Phạ - đèo dài nhất trên quốc lộ 32 với độ dài trên 32km và độ cao là 2100m được mệnh danh là một trong “tứ đại đèo”.\r\n\r\nĐèo Khau Phạ là một trong những cung đường đèo quanh co và dốc đứng thuộc hàng bậc nhất Việt Nam.\r\n\r\nVào độ lúa chín tại đỉnh đèo diễn ra cuộc thi dù lượn quốc tế. Sau đó tiếp tục cuộc hành trình chinh phục Mù Cang Chải.\r\n\r\n17h30: Đến thị trấn Mù Cang chải.\r\n\r\nQuý khách nhận phòng Homestay tại bản Thái nghỉ ngơi.\r\n\r\nTối: Quý khách dùng bữa tối tại nhà hàng, thưởng thức đặc sản Tây Bắc, sau đó tự do tham quan thì trấn Mù Cang Chảivề đêm. \r\n\r\nNghỉ đêm tạiMù Cang Chải.', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(5, NULL, 'Ngày 02: Mù Cang Chải - Tú Lệ - Nghĩa Lộ\r\nSáng: Quý khách thức dậy sớm đón ánh bình minh tuyệt đẹp và hít thở không khí trong lành của núi rừng, sau đó dùng bữa sáng tại nhà sàn.\r\n\r\nSau bữa sáng Quý khách làm thủ tục trả phòng, khởi hành Thăm cánh đồng ruộng bậc thang ở La Pán Tẩn.\r\n\r\nDu khách sẽ có cơ hội chiêm ngưỡng một thiên đường ruộng bậc thang với nắng vàng và biển lúa – Nơi được công nhận là danh thắng quốc gia.\r\n\r\nSau đó đoàn khởi hành về thị xã Nghĩa Lộ, trên đường đi Quý khách còn tiếp tục được chiêm ngưỡng những thửa ruộng bậc thang trùng điệp trong mây ngàn ở Dế Xu Phình, Nậm Búng, Tú Lệ…\r\n\r\nĐoàn dùng bữa trưa tại nhà hàng Phố Núi (thị trấn Tú Lệ).\r\n\r\n17h00: Quý khách về tới Nghĩa Lộ, nhận phòng khách sạn nghỉ ngơi.\r\n\r\nTự do khám phá cánh đồng Mường Lò. Ăn tối tại khách sạn.\r\n\r\n20h00: Quý khách tự do dạo chơi khám phá Nghĩa Lộ về đêm, hoặc đăng ký tham gia giao lưu đốt lửa trại, thưởng thức văn nghệ với những điệu múa xòe độc đáo của người Thái, và tham gia chương trình Game show đêm lửa trại (Chí phí tự túc).\r\n\r\nNghỉ đêm tại Nghĩa Lộ', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(6, NULL, 'Ngày 03: Nghĩa Lộ - Suối Giàng - Hà Nội\r\nSáng: Quý khách dùng bữa sáng tại khách sạn, sau đó khởi hành thăm khu du lịch sinh thái suối Giàng, là quê hương thủy tổ của loài chè với những cây chè có hàng trăm năm tuổi, thưởng thức chè Shan Tuyết ở Suối Giàng và mua về làm quà.\r\n\r\nTự do chụp hình tại các đồi chè thơ mộng.\r\n\r\nSau đó khởi hành về khách sạn, ăn trưa, trả phòng khách sạn để khởi hành về Hà Nội.\r\n\r\n15h00: Xe tạm dừng 20\' ở Ba vì để quý khách nghỉ ngơi, thưởng thức và mua những đặc sản Sữa Ba Vì.\r\n\r\n18h30: Đoàn về đến Hà Nội.\r\n\r\nKết thúc chương trình du lịch.HDV chào và tạm biệt quý khách hẹn gặp lại quý khách vào những chương trình tour tiếp theo !', 12, '2023-01-05 09:51:53', '2023-01-05 09:51:53', NULL),
(7, NULL, 'Ngày 01: Hà Nội - Lào Cai - Cát Cát:\r\n6h00: Xe và Hướng dẫn viên (HDV) đón Quý khách tại cổng Công Viên Thống Nhất - Đường Trần Nhân Tông - Quận Hai Bà Trưng - Tp Hà Nội.\r\n\r\nKhởi hành đi Sapa theo đường cao tốc Hà Nội - Lào Cai. Quý Khách dừng chân, nghỉ ngơi 30 phút ăn sáng (chi phí tự túc).\r\n\r\nSau đó Quý khách tiếp tục lên xe khởi hành đến Sapa.\r\n\r\nTrên đường đi, Quý khách sẽ được chiêm ngưỡng vẻ đẹp của núi rừng Tây Bắc với những thửa ruộng bậc thang ẩn hiện trong tiếng thác, tiếng suối, thấp thoáng bên những ngôi nhà trên sườn cao.\r\n\r\n12h00: Đến Sapa, đoàn dùng bữa trưa tại nhà hàng, nhận phòng khách sạn 3 sao.\r\n\r\n14h30: Hướng dẫn viên đưa Quý khách thăm quan bản Cát Cát - bản nghề của ngưười H’Mông:\r\n\r\nTrò chuyện với người dân bản địa, tìm hiểu nét văn hoá đặc sắc của đồng bào H’Mong.\r\nTìm hiểu nghề xe lanh nhuộm vài, kiến trúc nhà truyền thống của người H’Mong.\r\nTham quan dấu tích thác Thuỷ điện người Pháp, thác nước, suối Mường Hoa.\r\nThưởng thức những chương trình văn nghệ độc đáo và đặc sắc tại nhà Biểu diễn văn nghệ Cát Cát.\r\n19h00: Đoàn dùng bữa tối tại nhà hàng với đặc sản núi rừng Tây Bắc.\r\n\r\nQuý khách tự do tản bộ khám phá Sapa về đêm, cảm nhận vẻ đẹp của thị trấn trong mây.\r\n\r\nĐi dao phố Cầu mây, thăm quan nhà Thờ Đá và hồ Sapa lung linh huyền ảo.\r\n\r\nNghỉ đêm tại khách sạn.', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(8, NULL, 'Ngày 02: Sapa - Moana Sapa\r\nSáng: Quý khách ăn sáng tại khách sạn.\r\n\r\nHDV đón Quý khách đi tham quan MOANA Sapa thiên đường sống ảo Hot nhất tại Sapa - với các công trình nhân tạo nhưng được bố trí hài hoà với thiên nhiên tạo nên một phong cảnh vừa độc, vừa lạ, vừa đẹp như: Cổng trời Bali, Tượng cô gái Moana, hồ vô cực, bàn tay vàng, xích đu tử thần, cây cô đơn.\r\n\r\n11h30: Quý khách về lại nhà hàng ăn trưa, nghỉ ngơi.\r\n\r\nChiều: Xe đón đoàn đi Khu du lịch Sapa Legend, quý khách lên cáp treo chinh phục đỉnh Phanxipan - Nóc nhà của Đông Đương ở độ cao 3.143m so với mực nước biển(Chi phí cáp treo tự túc).\r\n\r\nĐến KDL Sapa Legend, quý khách chụp ảnh thăm quan, làm lễ tại Đền Trình – Bảo An Thiền Tự.\r\n\r\nQuý khách tiếp tục đi Cáp treo lên đỉnh Phanxiphan với những kỷ lục : Cáp treo 3 dây dài nhất thế giới 6292.5m, cáp treo chênh lệch giữa ga đến và ga đi lớn nhất 1.410m và cáp treo 3 dây an toàn nhất thế giới.\r\n\r\nQuý khách đi cáp lên đến độ cao khoảng 2.900m. Đoàn bách bộ lênThanh Vân Đắc Lộ và Bích Vân Thiền Tự làm lễ dâng hương ở độ cao 3037m.\r\n\r\nQuý khách tiếp tục cuộc hành trình lên chinh phục nóc nhà Đông Dương, nơi đứng trên đỉnh Phanxiphan, quý khách có cơ hội ngắm nhìn thị trấn sapa trong mây và núi rừng tây bắc hùng vĩ của tổ quốc.\r\n\r\n18h00: Xe đón đoàn về lại thị trấn Sapa.\r\n\r\nQuý khách tự do ăn tối và tham quan hoặc thăm cơ sở sản xuất và tắm thuốc của người Dao đỏ - bài thuốc tắm cổ truyền được chế biến từ các loại thảo mộc, có tác dụng chăm sóc sức khỏe và hỗ trợ chữa các bệnh, da dẻ mịn màng tạo cảm giác thoải mái, khỏe khoắn, dẻo dai cho Du khách. (Chi phí tự túc).\r\n\r\nTối: Đoàn nghỉ đêm tại khách sạn.', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(9, NULL, 'Ngày 03: Sapa - Hà Nội\r\n\r\nSáng: Quý khách ăn sáng tại khách sạn.\r\n\r\nQuý khách tự do khám phá thị trấn Sapa, mua đặc sản Sapa về làm quà cho bạn bè & người thân.\r\n\r\nHoặc Quý khách có thể tự túc đi tham quan khu du lịch Cầu kính Rồng Mây là một quần thể du lịch ngắm cảnh, khu vui chơi. Cầu được nối từ một thang máy lồng kính trong suốt giúp du khách có thể chiêm ngưỡng cảnh đẹp khi đi “ Đường lên Thiên Đỉnh” có độ cao 2000m so với mặt nước biển, có thể tham gia nhiều trò chơi mạo hiểm; dù lượn, tàu siêu tốc, trượt Zipline,...\r\n\r\nHoặc Quý khách có thể tự túc đi tham quan Tổ hợp check in Vườn Vô Cực là một khu du lịch sinh thái chụp ảnh rộng lớn, rộng tới hơn 4 hecta, gồm rất nhiều góc chụp ảnh với nhiều phong cách khác nhau.\r\n\r\n11h00: Đoàn làm thủ tục trả phòng khách sạn. HDV đưa đoàn đi ăn trưa tại nhà hàng.\r\n\r\n13h30: Quý khách lên xe xuống núi, về lại Hà Nội. Trên đường, quý khách dừng chân nghỉ ngơi, mua đặc sản của địa phương.\r\n\r\n19h30: Đoàn có mặt tại Hà Nội. Kết thúc chương trình. Hẹn gặp lại Quý khách.', 13, '2023-01-05 10:01:12', '2023-01-05 10:01:12', NULL),
(10, NULL, 'Ngày 01: TP HỒ CHÍ MINH - SAPA (Ăn sáng trên máy bay, trưa, tối)\r\nSáng:Trưởng đoàn đón đoàn tại sân bay Tân Sơn Nhất làm thủ tục bay đi Hà Nội (chuyến bay 05h45 của Bamboo airways). Quý khách ăn sáng trên trên máy bay (menu theo tiêu chuẩn của Bamboo airways). Đến sân bay Nội Bài, xe khởi hành đưa đoàn đi Sapa,\r\n\r\n Đoàn dùng cơm trưa tại Lào Cai.\r\nSau đó khởi hành đi Sapa nhận phòng nghỉ ngơi\r\nTối: Quý khách ăn tối và nghỉ đêm tại SaPa.', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(11, NULL, 'Ngày 2: KHÁM PHÁ SAPA (Ăn sáng, trưa, ăn tối tự túc)\r\nSáng: Điểm tâm sáng, Xe và HDV đưa Quý khách đến bản Cát Cát, bắt đầu hành trình khám phá bản làng\r\n\r\nTham quan bản Cát Cát - Sín Chải của người H’mong. Du khách sẽ được thăm và tìm hiểu phong tục tập quán sinh hoạt kỳ thú, đơn sơ đến bình dị của những người dân tộc thiểu số\r\nTham quan thác Cát Cát và nhà máy thuỷ điện do người Pháp xây dựng đầu thế kỷ XX, vui chơi và chụp hình lưu niệm…\r\nChiều: Quý khách tham quan và tự do mua sắm đồ lưu niệm, đặc sản tại Chợ Sa Pa - nơi trao đổi mua bán nhiều loại hàng hóa, sản phẩm địa phương.\r\n\r\nNhà Thờ Đá - dấu ấn kiến trúc của người Pháp còn lại vẹn toàn nhất tại Sa Pa.\r\n\r\nNếu Qúy khách muốn chinh phục đỉnh Fanxiphan, Cty sẽ bố trí thời gian tham quan cho phù hợp ( phụ thu thêm 800.000đ/khách bao gồm tiền cáp treo + xe di chuyển ra ga cáp).\r\n\r\nTối: Đoàn tự túc ăn tối thưởng thức ẩm thực vùng cao: cơm lam, gà nướng, thắng cố, rượu Ngô…tại chợ đêm Sapa.', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(12, NULL, 'Ngày 3: SAPA - HÀ NỘI (Ăn sáng, trưa, tối)\r\nSáng: Quý khách dùng điểm tâm và trả phòng khách sạn, tự do tham quan và mua sắm đặc sản về làm quà cho người thân tại chợ Sapa, sau đó xe đưa đoàn khởi hành về lại Lào Cai ,\r\n\r\nQuý khách tự do tham quan và chụp hình tại cột mốc hữu nghị Việt Nam – Trung Quốc,\r\nMua sắm đồ lưu niệm và điện tử tại chợ Cốc Lếu Lào Cai ( nếu còn thời gian)\r\nĐoàn dùng cơm trưa tại Lào Cai.\r\nChiều:Xe đưa đoàn về lại Hà Nội , Quý khách tham quan :\r\n\r\nQuý khách ghé thăm Văn Miếu - Quốc Tử Giám – Nơi đựoc xem như Trường Đại học đầu tiên của Việt Nam với 82 tấm bia Tiến sỹ còn lưu danh sử sách.\r\nQuý khách dùng cơm tối thưởng thức ẩm thực Hà Nội: Bánh tôm hồ tây, chả cá… nhận phòng khách sạn nghỉ ngơi.\r\nTối: Quý khách tự do tham quan :\r\n\r\nTham quan Đền Ngọc Sơn, Cầu Thê Húc, hồ Hoàn Kiếm, Nhà Hát Lớn Hà Nội , Nhà Thờ Lớn Hà Nội….\r\nNhững khu phố ẩm thực trứ danh đất Hà Thành: phố Cấm Chỉ, Tạ Hiện…\r\nĐoàn nghỉ đêm tại khách sạn.', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(13, NULL, 'Ngày 4: HÀ NỘI - KDL TRÀNG AN- CHÙA BÁI ĐÍNH (Ăn sáng, trưa, tối)\r\nSáng: Quý khách dùng ăn sáng và trả phòng khách sạn, Hướng dẫn viên đưa đoàn xe đưa đoàn tham quan cụm di tích lịch sử Phủ Chủ Tịch. Với các quần thể kiến trúc:\r\n\r\nQuảng Trường Ba Đình – là một di tích đặc biệt, nơi đây còn là nơi ghi nhận nhiều dấu ấn quan trọng tong lịch sử Việt Nam.\r\nBảo tàng Hồ Chí Minh - Nằm trong khu vực có nhiều di tích như: Lăng Chủ tịch Hồ Chí Minh, Khu di tích Phủ chủ tịch, Chùa Một Cột... tạo thành một quần thể các di tích đặc biệt.\r\nNhà Sàn giản dị nằm giữa thủ đô Hà Nội là nơi Bác Hồ đã sống và làm việc lâu nhất trong cuộc đời hoạt động cách mạng của mình.\r\nChùa Một Cột (Chùa Mật) - ngôi chùa có kiến trúc độc đáo, chỉ có 1 gian dựng trên 1 cột đá nằm giữa lòng hồ Linh Chiểu…..\r\nTiếp tục hành trình, đoàn khởi hành đi Ninh Bình ,Đến Ninh Bình Quý khách cầu lễ phật tại Chùa Bái Đính (Chi phí xe điện đưa đón lên chùa tự túc ), ngôi chùa lớn nhất Việt Nam với 500 pho tượng La Hán, tượng phật đồng lớn nhất Việt Nam cao 10m nặng 100 tấn.\r\n Dùng cơm trưa với đặc sản Cơm Cháy- Dê núi của Ninh Bình.\r\nChiều: Quý khách tham Quần thể Danh thắng Tràng An – Di sản được UNESCO công nhận là di sản văn hóa và thiên nhiên Thế giới, giúp cho Việt Nam lần dầu lọt vào danh sách 30 di sản hỗn hợp Thế Giới . Lên thuyền xuôi dòng Sào khê uốn lượn giữa cánh đồng lúa , nơi những dải đá vôi, thung lũng và những sông ngòi đan xen tạo nên một không gian huyền ảo, kỳ bí , quý khách đi đò tham Hang sáng , Hang tối , Hang nấu rượu… Quý khách tham quan Làng thổ dân được phục dựng trong phim “Đảo đầu lâu” Kong: Skull Island.\r\n\r\nQuý khách rời Ninh Bình, theo Quốc lộ 10 đi Hạ Long, trên đường đi Quý khách sẽ được cảm nhận, khám phá cuộc sống, phong cảnh đặc trưng của Đồng Bằng Bắc Bộ với cảnh làng quê thanh bình qua các tỉnh Nam Định, Thái Bình, Hải Phòng. Đến Hạ Long, nhận phòng, nghỉ ngơi, ăn tối tại nhà hàng.\r\n\r\nTối: Quý khách tự do dạo chơi Công viên Hoàng Gia dọc biển Bãi Cháy, đi mua sắm hàng hóa tại khu Chợ Đêm Hạ Long sầm uất với các sản phẩm đặc trưng Hạ Long, lên cầu Bãi Cháy – cây cầu dây văng dài nhất Việt Nam ngắm Hạ Long về đêm.', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(14, NULL, 'Ngày 5: HẠ LONG – HẢI DƯƠNG – SÂN BAY NỘI BÀI (Ăn sáng, trưa)\r\nSáng: Quý khách ăn sáng và trả phòng khách sạn, Đoàn đến bến thuyền Tuần Châu bắt đầu hành trình tham quan Di sản thiên nhiên Thế giới tại Việt Nam, với các danh thắng nổi tiếng:\r\n\r\nTham Động Thiên Cung, ngắm cảnh Làng Chài, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn Gà Chọi…\r\nChiều: Tàu về cập bến, xe đưa đoàn khởi hành về lại Hà Nội, trên đường đoàn dừng chân tham quan và mua sắm đặc sản bánh đậu xanh tại Hải Dương. Về tới Nội Bài, Hướng dẫn viên làm thủ tục cho đoàn đáp chuyến bay của Bamboo airways QH205 bay về lại Tp HCM lúc 18h55 hoặc 19h30, Quý khách ăn sáng trên máy bay (menu theo tiêu chuẩn của Bamboo airways), chia tay đoàn và kết thúc chương trình tham quan Miền Bắc.\r\n\r\nLưu ý: thứ tự tham quan có thể thay đổi nhưng vẫn bảo đảm đầy đủ điểm tham quan cótrong chương trình.', 14, '2023-01-05 10:06:50', '2023-01-05 10:06:50', NULL),
(15, NULL, 'Ngày 01: Hà Nội Pù Luông\r\n06h30: Xe và hướng dẫn đón quý khách tại điểm hẹn khởi hành đi Pù Luông Trên đường đi, đoàn dùng bữa sáng tại Xuân Mai (chi phí tự túc).\r\n\r\n09h00: Qua dốc Cun quanh co hiểm trở đến Đèo Đá Trắng (Đèo Thung Khe) dừng chân thưởng thức Ngô nướng, trứng nướng… trong cái se lạnh nơi miền núi cao. Tiêp tục hành trình qua thung lũng Mai Châu xinh đẹp sẽ được hiện ra dưới tầm mắt du khách với màu xanh ngút ngàn của đồng ruộng, thấp thoáng xa xa là những nếp nhà nằm nép mình trong dãy núi phủ kín mây mù.\r\n\r\n11h00: Đến Pù Luông, Quý khách nhận nhà sàn nghỉ ngơi tại Bản Đôn xã Thành Lâm – Huyện Bá Thước – Thanh Hóa., dùng bữa trưa tại nhà hàng.\r\n\r\n15h00: Quý khách đi thăm bản làng của đồng bào Thái tại bản trung tâm của Pù Luông. Bản Đôn nằm trong vùng lõi của của Khu bảo tồn thiên nhiên Pù Luông, nơi có cảnh sắc thiên nhiên hùng vĩ, với những đỉnh núi cao quanh năm mây mù bao phủ, những thửa ruộng bậc thang hút hồn du khách… Quý khách dừng chân chụp ảnh với ruộng bậc thang đang vào mùa lúa chín…\r\n\r\n19h00: Đoàn dùng bữa tối tại nhà hàng, thưởng thức ẩm thực người Thái bản địa.\r\n\r\nQuý khách hòa mình vào đêm nhạc văn nghệ dân tộc của đồng bào Thái Thanh Hóa với các điệu xòe, nhảy sạp đặc sắc.\r\n\r\nNghỉ đêm tại nhà sàn.', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(16, NULL, 'Ngày 02: Pù Luông - Mai Châu - Hà Nội\r\nSáng: Quý khách dậy sớm, đi dạo vòng quanh bản làng 1 vòng, hít hà cái không khí của vùng núi cao, thoảng trong hương thơm của lúa, cái mùi thanh mát của tán cây rừng, mùi nồng nồng của những khóm cỏ dại ven đường…Đoàn dùng bữa sáng tại nhà hàng.\r\n\r\n8h00: Đoàn khởi hành về lại Mai Châu, quý khách thăm quan Bản Lác – Bản Pom Coong của đồng bào dân tộc Thái. Quý khách dạo bước khám phá văn hóa người Thái Mai Châu, mua đồ thổ cẩm hoặc sản vật địa phương về làm quà cho gia đình và người thân.\r\n\r\n11h30: Đoàn dùng bữa trưa tại nhà sàn, thưởng thức ẩm thực Hòa Bình.\r\n\r\n13h00: Quý Khách lên xe về Hà Nội, trên đường đoàn dừng chân nghỉ ngơi và mua đặc sản Cam Cao Phong về làm quà cho người thân.\r\n\r\n18h00: Về đến Hà Nội, hướng dẫn viên chia tay quý khách tại điểm hẹn, kết thúc tốt đẹp chuyến đi. Hẹn gặp lại quý khách.', 15, '2023-01-05 10:11:47', '2023-01-05 10:11:47', NULL),
(17, NULL, 'Ngày 01: Hà Nội - Mộc Châu\r\n06h30: Xe và hướng dẫn đón Quý khách tại cổng công viên Thống Nhất – đường Trần Nhân Tông khởi hành đi Mộc Châu. Trên đường đi, xe dừng lại một nhà hàng địa phương để Quý khách tự túc ăn sáng (chi phí ăn sáng tự túc) và nghỉ ngơi.\r\n\r\n09h30: Dừng chân trên đèo Thung Khe – Đèo Đá Trắng lộng gió để chụp ảnh và ngắm cảnh rừng núi hùng vỹ của Hòa Bình.\r\n\r\n12h00: Đến Mộc Châu, Quý khách ăn trưa tại nhà hàng.\r\n\r\nChiều: Hướng dẫn viên đưa Quý khách đi thăm quan:\r\n\r\nThác Dải Yếm - Một thác nước tuy nhỏ nhưng mang một vẻ đẹp quyến rũ. Tương truyền, dòng thác này là dải yếm của người con gái cứu chàng trai thoát khỏi dòng nước lũ.\r\nSau đó, xe ô tô đưa đoàn tới Mường Sang. Tại đây, Quý khách tham quan Cầu kính Bạch Long – cầu kính dài nhất thế giới. (chi phí tham quan tự túc)\r\nCầu kính Bạch Long được bắc qua hai ngọn núi có khoảng cách 285m, rộng 2,4m với các mảng kính cực lớn 2,4m x 3m. Áp dụng công nghệ hiệu ứng 9D với 60 hiệu ứng hình ảnh và âm thanh giả lập để tạo cảm giác; Glass Skywalk tiếp nối cầu chạy dài 370m trên vách đá (vực sâu 150m). Có 02 điểm nhô ra rộng 3m, dài 5m view ra toàn cảnh Khu du lịch để khách hàng chụp ảnh check in.\r\n\r\nRừng thông bản Áng - một Đà Lạt thu nhỏ giữa lòng Mộc Châu. Tới đây, du khách được tận hưởng bầu không khí yên bình và lắng đọng, hòa mình cùng thiên nhiên và văn hóa con người nơi đây.\r\n18h30: Về lại nhà hàng ăn tối. Sau bữa tối, xe đưa Quý khách về nhận phòng khách sạn nhận phòng nghỉ ngơi. Buổi tối Quý khách tự do khám phá Mộc Châu về đêm. Nghỉ đêm tại Mộc Châu.', 16, '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(18, NULL, 'Ngày 02: Mộc Châu - Hà Nội\r\n06h15: Quý khách trả phòng và lên xe đi ăn sáng tại nhà hàng.\r\n\r\n07h00: Xe bắt đầu đưa Quý khách đi thăm quan:\r\n\r\nĐồi chè Trái tim, có lẽ đây không chỉ là đồi chè đẹp nhất của Cao nguyên Mộc Châu mà còn là đồi chè đẹp nhất của Việt Nam bởi những luống chè xanh mởn tròn trịa và uốn lượn xa ngút tầm mắt đưa đến một cảm giác lãng mạn và bình yên. Đây cũng chính là vùng nguyên liệu để sản xuất ra thương hiệu nổi tiếng chính là Ô Long trà.\r\nDừng chân tại trung tâm giới thiệu và bán các sản phẩm đặc trưng tại Mộc Châu, đặc biệt là các sản phẩm từ sữa bò tươi nguyên chất được sản xuất tại chính mảnh đất cao nguyên này. Quý khách tự do mua sắm quà cho bản thân, bạn vè và người thân.\r\nMộc Châu các mùa hoa và trái: Tùy vào từng thời điểm, hướng dẫn viên sẽ đưa Quý khách đi chụp hình với những vườn hoa, vườn quả đặc trưng của Mộc Châu. Chắc chắn Quý khách sẽ ngỡ ngàng và ấn tượng trước những vẻ đẹp đầy sức sống và lôi cuốn ấy (Lưu ý: các vườn hoa vườn cây này như thế nào là hoàn toàn phụ thuộc vào thời tiết và kế hoạch trồng của người dân).\r\nMùa hoa đào tươi thắm vào dịp Tết nguyên đán hằng năm.\r\nMùa cải trắng bạt ngàn trên những ngọn đồi vào dịp trước và sau Tết nguyên đán\r\nMùa hoa tam giác mạch rộn ràng từ khoảng tháng 9 đến tháng 12\r\nMùa hái Dâu Tây đỏ mọng vào những tháng mùa đông và một số thời điểm khác nhau\r\nVà rất nhiều các loại đặc sản địa phương trải khắp quanh năm\r\n10h30: Quý khách tiếp tục lên xe về Hà Nội. Trên đường về quý khách ngắm nhìn cung đường chữ S với vẻ đẹp đầy cuốn hút (một trong những điểm check-in nổi tiếng tại Vân Hồ). Lưu ý: Do cung đường chữ S nằm trên trục quốc lộ 6 với rất nhiều phương tiện lưu thông qua lại nên xe sẽ không dừng lạị để đảm bảo an toàn..\r\n\r\n12h00: Ăn trưa tại nhà hàng. Sau bữa trưa, Quý khách tiếp tục về Hà Nội. Trên đường về ghé dừng nghỉ ngơi tại đặc sản sữa Ba Vì mua đồ về làm quà cho bạn bè và người thân.\r\n\r\n19h00: Xe đưa quý khách tới Hà Nội. Kết thúc chương trình. Hẹn gặp lại Quý khách!', 16, '2023-01-05 10:19:35', '2023-01-05 10:19:35', NULL),
(19, NULL, 'Ngày 01: Hà Nội - Lào Cai - Cát Cát\r\n6h00: Xe và Hướng dẫn viên (HDV) đón Quý khách tại cổng Công Viên Thống Nhất - Đường Trần Nhân Tông - Quận Hai Bà Trưng - Tp Hà Nội.\r\n\r\nKhởi hành đi Sapa theo đường cao tốc Hà Nội - Lào Cai. Quý Khách dừng chân, nghỉ ngơi 30 phút ăn sáng (chi phí tự túc).\r\n\r\nSau đó Quý khách tiếp tục lên xe khởi hành đến Sapa.\r\n\r\nTrên đường đi, Quý khách sẽ được chiêm ngưỡng vẻ đẹp của núi rừng Tây Bắc với những thửa ruộng bậc thang ẩn hiện trong tiếng thác, tiếng suối, thấp thoáng bên những ngôi nhà trên sườn cao.\r\n\r\n12h00: Đến Sapa, đoàn dùng bữa trưa tại nhà hàng, nhận phòng khách sạn 3 sao.\r\n\r\n14h30: Hướng dẫn viên đưa Quý khách thăm quan bản Cát Cát - bản nghề của ngưười H’Mông:\r\n\r\nTrò chuyện với người dân bản địa, tìm hiểu nét văn hoá đặc sắc của đồng bào H’Mong.\r\nTìm hiểu nghề xe lanh nhuộm vài, kiến trúc nhà truyền thống của người H’Mong.\r\nTham quan dấu tích thác Thuỷ điện người Pháp, thác nước, suối Mường Hoa.\r\nThưởng thức những chương trình văn nghệ độc đáo và đặc sắc tại nhà Biểu diễn văn nghệ Cát Cát.\r\n19h00: Đoàn dùng bữa tối tại nhà hàng với đặc sản núi rừng Tây Bắc.\r\n\r\nQuý khách tự do tản bộ khám phá Sapa về đêm, cảm nhận vẻ đẹp của thị trấn trong mây.\r\n\r\nĐi dao phố Cầu mây, thăm quan nhà Thờ Đá và hồ Sapa lung linh huyền ảo.\r\n\r\nNghỉ đêm tại khách sạn.', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(20, NULL, 'Ngày 02: Sapa - Moana Sapa\r\nSáng: Quý khách ăn sáng tại khách sạn.\r\n\r\nHDV đón Quý khách đi tham quan MOANA Sapa thiên đường sống ảo Hot nhất tại Sapa - với các công trình nhân tạo nhưng được bố trí hài hoà với thiên nhiên tạo nên một phong cảnh vừa độc, vừa lạ, vừa đẹp như: Cổng trời Bali, Tượng cô gái Moana, hồ vô cực, bàn tay vàng, xích đu tử thần, cây cô đơn.\r\n\r\n11h30: Quý khách về lại nhà hàng ăn trưa, nghỉ ngơi.\r\n\r\nChiều: Xe đón đoàn đi Khu du lịch Sapa Legend, quý khách lên cáp treo chinh phục đỉnh Phanxipan - Nóc nhà của Đông Đương ở độ cao 3.143m so với mực nước biển(Chi phí cáp treo tự túc).\r\n\r\nĐến KDL Sapa Legend, quý khách chụp ảnh thăm quan, làm lễ tại Đền Trình – Bảo An Thiền Tự.\r\n\r\nQuý khách tiếp tục đi Cáp treo lên đỉnh Phanxiphan với những kỷ lục : Cáp treo 3 dây dài nhất thế giới 6292.5m, cáp treo chênh lệch giữa ga đến và ga đi lớn nhất 1.410m và cáp treo 3 dây an toàn nhất thế giới.\r\n\r\nQuý khách đi cáp lên đến độ cao khoảng 2.900m. Đoàn bách bộ lênThanh Vân Đắc Lộ và Bích Vân Thiền Tự làm lễ dâng hương ở độ cao 3037m.\r\n\r\nQuý khách tiếp tục cuộc hành trình lên chinh phục nóc nhà Đông Dương, nơi đứng trên đỉnh Phanxiphan, quý khách có cơ hội ngắm nhìn thị trấn sapa trong mây và núi rừng tây bắc hùng vĩ của tổ quốc.\r\n\r\n18h00: Xe đón đoàn về lại thị trấn Sapa.\r\n\r\nQuý khách tự do ăn tối và tham quan hoặc thăm cơ sở sản xuất và tắm thuốc của người Dao đỏ - bài thuốc tắm cổ truyền được chế biến từ các loại thảo mộc, có tác dụng chăm sóc sức khỏe và hỗ trợ chữa các bệnh, da dẻ mịn màng tạo cảm giác thoải mái, khỏe khoắn, dẻo dai cho Du khách. (Chi phí tự túc).\r\n\r\nTối: Đoàn nghỉ đêm tại khách sạn.', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(21, NULL, 'Ngày 03: Sapa - Hà Nội\r\nSáng: Quý khách ăn sáng tại khách sạn.\r\n\r\nQuý khách tự do khám phá thị trấn Sapa, mua đặc sản Sapa về làm quà cho bạn bè & người thân.\r\n\r\nHoặc Quý khách có thể tự túc đi tham quan khu du lịch Cầu kính Rồng Mây là một quần thể du lịch ngắm cảnh, khu vui chơi. Cầu được nối từ một thang máy lồng kính trong suốt giúp du khách có thể chiêm ngưỡng cảnh đẹp khi đi “ Đường lên Thiên Đỉnh” có độ cao 2000m so với mặt nước biển, có thể tham gia nhiều trò chơi mạo hiểm; dù lượn, tàu siêu tốc, trượt Zipline,...\r\n\r\nHoặc Quý khách có thể tự túc đi tham quan Tổ hợp check in Vườn Vô Cực là một khu du lịch sinh thái chụp ảnh rộng lớn, rộng tới hơn 4 hecta, gồm rất nhiều góc chụp ảnh với nhiều phong cách khác nhau.\r\n\r\n11h00: Đoàn làm thủ tục trả phòng khách sạn. HDV đưa đoàn đi ăn trưa tại nhà hàng.\r\n\r\n13h30: Quý khách lên xe xuống núi, về lại Hà Nội. Trên đường, quý khách dừng chân nghỉ ngơi, mua đặc sản của địa phương.\r\n\r\n19h30: Đoàn có mặt tại Hà Nội. Kết thúc chương trình. Hẹn gặp lại Quý khách.', 17, '2023-01-05 10:24:59', '2023-01-05 10:24:59', NULL),
(22, NULL, 'Ngày 01: Hà Nội – Hạ Long\r\n7h45-8h15: Đón khách từ khách sạn tại khu vực Phố cổ khởi hành đi Hạ Long (dành cho khách đặt xe Lavender Cruises)\r\n\r\n10h00: Đoàn dừng chân nghỉ ngơi tại Hải Dương (20 Phút) sau đó tiếp tục hành trình đi Hạ Long.\r\n\r\n12h00: Xe đến cảng tàu du lịch Tuần Chàu, quý khách lên tàu Halong Lavender, thưởng thức một ly nước cam mát lạnh, sau đó nhận phòng nghỉ ngơi.\r\n\r\n12h30: Qúy khách dùng bữa trưa trên tàu với những món ăn hải sản đặc sắc của vùng sông nước Hạ Long trong khi đó tàu rời bến đưa quý khách ngắm cảnh đẹp của các hòn đảo trên vịnh Hạ Long.\r\n\r\n13h15:\r\nThưởng thức bữa trưa với hải sản tươi sống trong khi tàu khởi hành ra Vịnh. Lavender Cruise sẽ đưa quý khách đi qua những điểm nổi bật nhất của Vịnh Hạ Long. Sau khi đi qua Hòn Chó Đá, Đỉnh Lư Hương thì quý khách sẽ có cơ hội ngắm nhìn hình ảnh của Hòn Gà Chọi với hình dáng như hai con gà khổng lồ ( một trống – một mái ) với chiều cao khoảng 10m đang giương cánh đá nhau trên mặt biển mênh mông\r\n\r\n15.00-16.30:\r\n\r\nThăm và tắm biển Titop, chèo kayak hang Luồn\r\nQuý khách về tàu nghỉ ngơi. Tàu đi qua bãi biển Soi Sim, Rặng Dừa để về điểm ngủ gần hang Sửng Sốt.\r\nThưởng thức tiệc nhẹ trên sân thượng của tàu.\r\nQuý khách sẽ cùng tham gia vào lớp học làm nem cuốn trên nhà hàng. \r\n19h30: Bữa tối được phục vụ . Sau khi ăn tối, Quý khách có thể tham gia một số hoạt động vui chơi trên tàu như hat karaoke, câu mực hoặc tự do thư giãn .\r\nNgủ đêm trên tàu Halong Lavender.', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(23, NULL, 'Ngày 02: Hạ Long – Hà Nội\r\n06h15: Quý khách dậy sớm, tham gia lớp tập thể dục và ngắm bình minh trên Vịnh.\r\n\r\n07h15: Quý khách dùng bữa sáng với trà và café miễn phí\r\n\r\n08h00: Tàu đưa quý khách cập bến Sửng Sốt, hướng dẫn viên đưa đoàn leo bộ thăm quan hang Sửng Sốt - hang động đẹp nhất Vịnh Hạ Long với hệ thống thạch nhũ đá được kiến tạo hàng triệu năm tạo nên muôn hình vạn trạng sinh động lung linh dưới những ánh đèn tạo nên một không gian tráng lệ như một thiên đường nơi hạ giới.\r\n09h30: Quý khách trả phòng.\r\n\r\n10h15: Quý khách dùng bữa trưa trên tàu trong khi tàu chạy về bến.\r\n12h00: Quý khách tạm biệt tàu và đội ngũ nhân viên trên tàu, lên xe về Hà Nội.\r\n\r\n16h00 Xe đưa quý khách về đến thành phố Hà Nội, chia tay quý khách tại khách sạn hoặc điểm hẹn trong khu phố cổ Hà Nội, kết thúc tốt đẹp chuyến đi, hẹn gặp lại quý khách trong những hành trình sau', 18, '2023-01-05 10:29:01', '2023-01-05 10:29:01', NULL),
(24, NULL, 'Ngày 01: TP HỒ CHÍ MINH - SAPA (Ăn sáng trên máy bay, trưa, tối)\r\náng:Trưởng đoàn đón đoàn tại sân bay Tân Sơn Nhất làm thủ tục bay đi Hà Nội (chuyến bay 05h45 của Bamboo airways). Quý khách ăn sáng trên trên máy bay (menu theo tiêu chuẩn của Bamboo airways). Đến sân bay Nội Bài, xe khởi hành đưa đoàn đi Sapa,\r\n\r\n Đoàn dùng cơm trưa tại Lào Cai.\r\nSau đó khởi hành đi Sapa nhận phòng nghỉ ngơi\r\nTối: Quý khách ăn tối và nghỉ đêm tại SaPa.', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(25, NULL, 'Ngày 2: KHÁM PHÁ SAPA (Ăn sáng, trưa, ăn tối tự túc)\r\nSáng: Điểm tâm sáng, Xe và HDV đưa Quý khách đến bản Cát Cát, bắt đầu hành trình khám phá bản làng\r\n\r\nTham quan bản Cát Cát - Sín Chải của người H’mong. Du khách sẽ được thăm và tìm hiểu phong tục tập quán sinh hoạt kỳ thú, đơn sơ đến bình dị của những người dân tộc thiểu số\r\nTham quan thác Cát Cát và nhà máy thuỷ điện do người Pháp xây dựng đầu thế kỷ XX, vui chơi và chụp hình lưu niệm…\r\nChiều: Quý khách tham quan và tự do mua sắm đồ lưu niệm, đặc sản tại Chợ Sa Pa - nơi trao đổi mua bán nhiều loại hàng hóa, sản phẩm địa phương.\r\n\r\nNhà Thờ Đá - dấu ấn kiến trúc của người Pháp còn lại vẹn toàn nhất tại Sa Pa.\r\n\r\nNếu Qúy khách muốn chinh phục đỉnh Fanxiphan, Cty sẽ bố trí thời gian tham quan cho phù hợp ( phụ thu thêm 800.000đ/khách bao gồm tiền cáp treo + xe di chuyển ra ga cáp).\r\n\r\nTối: Đoàn tự túc ăn tối thưởng thức ẩm thực vùng cao: cơm lam, gà nướng, thắng cố, rượu Ngô…tại chợ đêm Sapa.', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(26, NULL, 'Ngày 3: SAPA - HÀ NỘI (Ăn sáng, trưa, tối)\r\nSáng: Quý khách dùng điểm tâm và trả phòng khách sạn, tự do tham quan và mua sắm đặc sản về làm quà cho người thân tại chợ Sapa, sau đó xe đưa đoàn khởi hành về lại Lào Cai ,\r\n\r\nQuý khách tự do tham quan và chụp hình tại cột mốc hữu nghị Việt Nam – Trung Quốc,\r\nMua sắm đồ lưu niệm và điện tử tại chợ Cốc Lếu Lào Cai ( nếu còn thời gian)\r\nĐoàn dùng cơm trưa tại Lào Cai.\r\nChiều:Xe đưa đoàn về lại Hà Nội , Quý khách tham quan :\r\n\r\nQuý khách ghé thăm Văn Miếu - Quốc Tử Giám – Nơi đựoc xem như Trường Đại học đầu tiên của Việt Nam với 82 tấm bia Tiến sỹ còn lưu danh sử sách.\r\nQuý khách dùng cơm tối thưởng thức ẩm thực Hà Nội: Bánh tôm hồ tây, chả cá… nhận phòng khách sạn nghỉ ngơi.\r\nTối: Quý khách tự do tham quan :\r\n\r\nTham quan Đền Ngọc Sơn, Cầu Thê Húc, hồ Hoàn Kiếm, Nhà Hát Lớn Hà Nội , Nhà Thờ Lớn Hà Nội….\r\nNhững khu phố ẩm thực trứ danh đất Hà Thành: phố Cấm Chỉ, Tạ Hiện…\r\nĐoàn nghỉ đêm tại khách sạn.', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(27, NULL, 'Ngày 4: HÀ NỘI - KDL TRÀNG AN- CHÙA BÁI ĐÍNH (Ăn sáng, trưa, tối)\r\nSáng: Quý khách dùng ăn sáng và trả phòng khách sạn, Hướng dẫn viên đưa đoàn xe đưa đoàn tham quan cụm di tích lịch sử Phủ Chủ Tịch. Với các quần thể kiến trúc:\r\n\r\nQuảng Trường Ba Đình – là một di tích đặc biệt, nơi đây còn là nơi ghi nhận nhiều dấu ấn quan trọng tong lịch sử Việt Nam.\r\nBảo tàng Hồ Chí Minh - Nằm trong khu vực có nhiều di tích như: Lăng Chủ tịch Hồ Chí Minh, Khu di tích Phủ chủ tịch, Chùa Một Cột... tạo thành một quần thể các di tích đặc biệt.\r\nNhà Sàn giản dị nằm giữa thủ đô Hà Nội là nơi Bác Hồ đã sống và làm việc lâu nhất trong cuộc đời hoạt động cách mạng của mình.\r\nChùa Một Cột (Chùa Mật) - ngôi chùa có kiến trúc độc đáo, chỉ có 1 gian dựng trên 1 cột đá nằm giữa lòng hồ Linh Chiểu…..\r\nTiếp tục hành trình, đoàn khởi hành đi Ninh Bình ,Đến Ninh Bình Quý khách cầu lễ phật tại Chùa Bái Đính (Chi phí xe điện đưa đón lên chùa tự túc ), ngôi chùa lớn nhất Việt Nam với 500 pho tượng La Hán, tượng phật đồng lớn nhất Việt Nam cao 10m nặng 100 tấn.\r\n Dùng cơm trưa với đặc sản Cơm Cháy- Dê núi của Ninh Bình.\r\nChiều: Quý khách tham Quần thể Danh thắng Tràng An – Di sản được UNESCO công nhận là di sản văn hóa và thiên nhiên Thế giới, giúp cho Việt Nam lần dầu lọt vào danh sách 30 di sản hỗn hợp Thế Giới . Lên thuyền xuôi dòng Sào khê uốn lượn giữa cánh đồng lúa , nơi những dải đá vôi, thung lũng và những sông ngòi đan xen tạo nên một không gian huyền ảo, kỳ bí , quý khách đi đò tham Hang sáng , Hang tối , Hang nấu rượu… Quý khách tham quan Làng thổ dân được phục dựng trong phim “Đảo đầu lâu” Kong: Skull Island.\r\n\r\nQuý khách rời Ninh Bình, theo Quốc lộ 10 đi Hạ Long, trên đường đi Quý khách sẽ được cảm nhận, khám phá cuộc sống, phong cảnh đặc trưng của Đồng Bằng Bắc Bộ với cảnh làng quê thanh bình qua các tỉnh Nam Định, Thái Bình, Hải Phòng. Đến Hạ Long, nhận phòng, nghỉ ngơi, ăn tối tại nhà hàng.\r\n\r\nTối: Quý khách tự do dạo chơi Công viên Hoàng Gia dọc biển Bãi Cháy, đi mua sắm hàng hóa tại khu Chợ Đêm Hạ Long sầm uất với các sản phẩm đặc trưng Hạ Long, lên cầu Bãi Cháy – cây cầu dây văng dài nhất Việt Nam ngắm Hạ Long về đêm.', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(28, NULL, 'Ngày 5: HẠ LONG – HẢI DƯƠNG – SÂN BAY NỘI BÀI (Ăn sáng, trưa)\r\nSáng: Quý khách ăn sáng và trả phòng khách sạn, Đoàn đến bến thuyền Tuần Châu bắt đầu hành trình tham quan Di sản thiên nhiên Thế giới tại Việt Nam, với các danh thắng nổi tiếng:\r\n\r\nTham Động Thiên Cung, ngắm cảnh Làng Chài, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn Gà Chọi…\r\nChiều: Tàu về cập bến, xe đưa đoàn khởi hành về lại Hà Nội, trên đường đoàn dừng chân tham quan và mua sắm đặc sản bánh đậu xanh tại Hải Dương. Về tới Nội Bài, Hướng dẫn viên làm thủ tục cho đoàn đáp chuyến bay của Bamboo airways QH205 bay về lại Tp HCM lúc 18h55 hoặc 19h30, Quý khách ăn sáng trên máy bay (menu theo tiêu chuẩn của Bamboo airways), chia tay đoàn và kết thúc chương trình tham quan Miền Bắc.\r\n\r\nLưu ý: thứ tự tham quan có thể thay đổi nhưng vẫn bảo đảm đầy đủ điểm tham quan cótrong chương trình.', 19, '2023-01-05 10:33:33', '2023-01-05 10:33:33', NULL),
(29, NULL, 'Ngày 1 - TP.HCM - PHÚ QUỐC (1 bữa ăn chiều)\r\n\r\nQuý khách tập trung tại Sân bay Tân Sơn Nhất, ga đi Trong Nước. Hướng dẫn viên làm thủ tục cho Quý khách đáp chuyến bay đi Phú Quốc. Xe đón đoàn tại sân bay đưa Quý khách dùng cơm chiều và nhận phòng khách sạn. \r\nBuổi tối, Quý khách có thể tự do dạo chợ đêm Phú Quốc. \r\n\r\nNghỉ đêm tại Phú Quốc.', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL),
(30, NULL, 'Ngày 2 - DƯƠNG ĐÔNG - BÃI SAO - GRAND WORLD (2 bữa ăn sáng, trưa; chiều tự túc)\r\nXe đưa Quý khách đến tham quan \r\n- Thiền Viện Trúc Lâm Hộ Quốc - ngôi chùa đẹp và lớn nhất đảo ngọc với khung cảnh hoang sơ, yên tĩnh đã tạo nên một bức tranh thiên nhiên đặc sắc đầy vẻ tôn nghiêm và thanh tịnh.\r\n- Tắm biển Bãi Sao nằm ở phía Nam Đảo - một bãi biển dịu êm, bãi cát dài tĩnh lặng và nguyên sơ nơi đảo xanh. Tại đây Quý khách sẽ thật sự cảm thấy yên bình, thư thái và dường như cuộc sống chậm lại khi hòa mình cùng thiên nhiên. \r\n\r\nBuổi chiều, đoàn khởi hành khám phá những hạng mục nổi bật tại “thành phố không ngủ” Grand World như: \r\n- Công viên Nghệ Thuật Đương Đại: sự giao thoa đặc sắc giữa nghệ thuật đương đại và thiên nhiên Đảo Ngọc.\r\n- Huyền thoại Tre: công trình tre lớn nhất Việt Nam.\r\n- Tản bộ bên dòng “kênh đào Venice” và nhìn ngắm những chiếc thuyền Gondola, khu phố shophouse lộng lẫy sắc màu, cổng lâu đài tráng lệ, ba cây cầu vòm bán nguyệt...\r\n- Lưu giữ những bức ảnh lãng mạn tại hồ tình yêu, cổng lâu đài tráng lệ, 3 cây cầu vòm bán nguyệt mang đậm kiến trúc châu Âu...\r\n- Tham quan bảo tàng Gấu Teddy: lưu giữ nhiều hiện vật quý giá và tái hiện chuyến phiêu lưu hài hước của “nhà thám hiểm tài ba” Teddy Jones (chi phí tự túc).\r\n- Thưởng thức bữa tiệc ánh sáng đỉnh cao với show diễn “Sắc màu Venice” (show diễn miễn phí diễn ra tại Hồ Tình Yêu)\r\n- Mãn nhãn với chương trình biểu diễn nghệ thuật “Tinh Hoa Việt Nam” quy tụ hơn 200 diễn viên (chi phí tự túc).\r\n\r\nHoặc Quý khách tự do tham quan Khu vui chơi giải trí VinWonders - du khách sẽ lạc vào “Thế Giới Cổ Tích” thông qua những trò chơi tương tác lần đầu tiên xuất hiện tại Việt Nam với 6 chủ đề khác nhau: Khu Cảm Giác Mạnh - Thế Giới Phiêu Lưu; Khu Công Viên Nước - Thế Giới Lốc Xoáy; Khu Lâu Đài Trung Tâm - Châu Âu Trung Cổ; Khu Cổ Tích - Thế Giới Diệu Kỳ; Khu Viking - Ngôi Làng Bí Mật\r\n\r\nNghỉ đêm tại Phú Quốc.', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL),
(31, NULL, 'Ngày 3 - PHÚ QUỐC - TP.HCM (2 bữa ăn sáng, trưa)\r\nBuổi sáng, Quý khách dùng bữa sáng tại khách sạn, tự do tắm biển cho đến giờ trả phòng.\r\nSau khi dùng cơm trưa, đoàn tham quan:\r\n- Dinh Cậu: biểu tượng văn hoá và tín ngưỡng của đảo Phú Quốc, là nơi cầu may mắn, cầu an lành và là nơi ngư dân địa phương gởi gắm niềm tin cho một chuyến ra khơi đánh bắt đầy ắp cá khi trở về. \r\n- Dinh Bà Thủy Long Thánh Mẫu: nơi thờ Thần Nữ Kim Giao, người phụ nữ được người dân Phú Quốc rất mực tôn kính vì có công khai phá huyện đảo này. \r\n- Vườn tiêu, Nhà thùng làm nước mắm, Cơ sở nuôi cấy ngọc trai.\r\n\r\n17:00 Xe đưa Quý khách ra sân bay Phú Quốc đáp chuyến bay trở về TP.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.\r\n\r\n\r\nQuý khách lưu ý: \r\n- Giờ bay phụ thuộc vào hãng hàng không, số bữa ăn phụ thuộc vào giờ bay\r\n- Nếu chuyến bay ngày thứ 3 trong chương trình về chuyến buổi sáng thì bữa ăn trưa ngày thứ 3 sẽ được chuyển sang ngày thứ 1. \r\n- Đây là chương trình du lịch trọn gói, Vietravel không có trách nhiệm hoàn trả chi phí chênh lệch cho các khách hàng thuộc diện miễn giảm hoặc đối tượng ưu tiên như trẻ nhỏ, người lớn tuổi, người có công với cách mạng… Chính sách miễn giảm, ưu tiên (nếu có) chỉ dành cho khách lẻ của các điểm tham quan.', 20, '2023-01-05 10:38:22', '2023-01-05 10:38:22', NULL);

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
(1, '12', 'operator 0', '038516595', '176892478259', '250495143268', '124 Dien Bien Phu Street. Dakao Ward, District 1, HCM City', 'This is operator 0', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(2, '13', 'operator 1', '038600261', '444410559758', '560827994450', 'No.52, Group 10, Cau Dien town, HaNoi', 'This is operator 1', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(3, '14', 'operator 2', '03856078', '214039277505', '417063004227', '120 Hang Trong Street, HaNoi', 'This is operator 2', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(4, '15', 'operator 3', '09350390', '272295027740', '291646601169', '41 Phan Dinh Phung Street, NamDinh city', 'This is operator 3', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(5, '16', 'operator 4', '03823187', '610027734101', '412181637076', '168 Le Duan Street, Hai Chau District, DaNang', 'This is operator 4', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(6, '17', 'operator 5', '08472625', '551695825466', '323542757454', '125/208 Luong The Vinh Street, Ho Chi Minh City', 'This is operator 5', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(7, '18', 'operator 6', '08359219', '470565897789', '636097242486', ' Floor 6, 100 Dien Bien Phu St.,Ho Chi Minh City', 'This is operator 6', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(8, '19', 'operator 7', '0859093', '597719867338', '187032781735', 'Tan Hoa Ward, Buon Ma Thuot City', 'This is operator 7', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(9, '20', 'operator 8', '09137006', '734173524496', '496647481153', 'Guoman Hotel, 83A Ly Thuong Kiet Street, HaNoi', 'This is operator 8', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(10, '21', 'operator 9', '03882236', '903693360869', '719107111782', ' 15C Le Ngoc Han, QuangNam', 'This is operator 9', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(11, '22', 'Sang Béo', '0935072759', NULL, '213546879', 'Hải Châu, Đà Nẵng', 'Công ty trách nhiệm vô hạn 1 thành viên', '2023-01-05 09:12:55', '2023-01-05 09:12:55', NULL);

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
(1, 'admin', 'admin@gmail.com', '$2y$10$tuRd9pWZz6wPJybeqrG/leZryj1jQJIvGml.U.TquimULEcTvVXVm', '2023-01-05 08:59:32', '2023-01-05 08:59:32', NULL),
(2, 'tourist0', 'tourist0@gmail.com', '$2y$10$sIg811G12Vx4F4yBLw5reuXiDuyvbxdvacVvKSg4AL15ImDqKkaqa', '2023-01-05 08:59:32', '2023-01-05 08:59:32', NULL),
(3, 'tourist1', 'tourist1@gmail.com', '$2y$10$pbjII6aPJ1FMjBs5pXZh0Ogov43uW6ktr5TyuzFiO6aSr/bMTz3FS', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(4, 'tourist2', 'tourist2@gmail.com', '$2y$10$Ue745caUbq.tkMRqgaB5iOikjpdtFdOdNR0AnGgfgc/Pve.bfR5m2', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(5, 'tourist3', 'tourist3@gmail.com', '$2y$10$GJczuh3jpPJdvNGSEkRzP.E0TAuiZ8kKMS0P8Oco7MOYayHopRqpe', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(6, 'tourist4', 'tourist4@gmail.com', '$2y$10$VEVgV79VYNKaaA94Wo2OU.xrp8.uBH.lumX/gLMoCUGE7Ho0aNtMe', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(7, 'tourist5', 'tourist5@gmail.com', '$2y$10$dGWdP7voZQpyhlO547PMYOyfneeTPbbrT0biUt/TBW0BMA9JNPemW', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(8, 'tourist6', 'tourist6@gmail.com', '$2y$10$pf9OJ1kMIL/v2LOnvMW6eeiNuXRSFYqWZc6QaE1QJu4CN3HMy1hIO', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(9, 'tourist7', 'tourist7@gmail.com', '$2y$10$v/KtQ..aZq4INK/2xVp.ROZd5/thIFv.EKeBuNWHmj65vnPTnyFdK', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(10, 'tourist8', 'tourist8@gmail.com', '$2y$10$vTTnHUEKB0ZSkYf.2Uj7X.xcq8m0VANrV0ALiqPqlbhjIeb3RMwb2', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(11, 'tourist9', 'tourist9@gmail.com', '$2y$10$BB8JVQHGYam0KWOry2aeZOWyrvkYc91vsAsjMAGIp6MSo69l4mWjq', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(12, 'operator0', 'operator0@gmail.com', '$2y$10$EOtAy9f19uFC88cLx0/1auVN7GrD2VvGA1MQxqu/.rX4aDawR5maS', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(13, 'operator1', 'operator1@gmail.com', '$2y$10$Q9SQPtQ7P.fu/URGjS.1ZuwjvYuJ8MqEKXpQlaRBP9vaBlL1//ERe', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(14, 'operator2', 'operator2@gmail.com', '$2y$10$ClGnB3z8HXAI0HkZcGZipOc1IBWuK9CF.1bnLpFVTgWfgVibsuP9a', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(15, 'operator3', 'operator3@gmail.com', '$2y$10$V9KFuyVvoFtGthD5iEvuY.3.YhtBM3HOCvC.bc1BoBgRummv36Mii', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(16, 'operator4', 'operator4@gmail.com', '$2y$10$5e97XknHAevaCFQPLFG/ueLHpkx.ADcmG8TahkBkCmhM.b0VPe3p2', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(17, 'operator5', 'operator5@gmail.com', '$2y$10$HZqVFj7wWU6KvCkv3kNqmO0br96w9HxDUa14lI2WdYFV9DkzUK/By', '2023-01-05 08:59:33', '2023-01-05 08:59:33', NULL),
(18, 'operator6', 'operator6@gmail.com', '$2y$10$4onfvLw5JAjV36PsVZmugen4QccGPSaH7Kgj.EMBLt0itqKz5IcxC', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(19, 'operator7', 'operator7@gmail.com', '$2y$10$8McUag23SP9ZqtROAaQz7etIbqBY34oMo5Wcazo2Ap0WVhjgIb8L.', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(20, 'operator8', 'operator8@gmail.com', '$2y$10$S7e9g7RvUKXcb.Px34ju6.jyLHHenwRT2PmISjODFvZGC9OcychAy', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(21, 'operator9', 'operator9@gmail.com', '$2y$10$hkQOq4XLYvKaXi9uThdSbu3MTV.m3QtoxBv4mSV1bdT1YhEXBBvji', '2023-01-05 08:59:34', '2023-01-05 08:59:34', NULL),
(22, 'sangbeo', 'sangbeo@gmail.com', '$2y$10$Cakeb1917kWeXJsO4hvh/O93kQWCGv8OhDy/0OKxBP6JlLBQchYm.', '2023-01-05 09:11:41', '2023-01-05 09:11:41', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=46;

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
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=21;

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
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary column.', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
