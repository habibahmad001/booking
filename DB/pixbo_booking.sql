-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 05:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixbo_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(81, '2017_11_16_174349_users', 4),
(82, '2017_11_17_100000_create_password_resets_table', 4),
(83, '2020_03_02_082632_table_categories', 4),
(84, '2020_03_02_082732_table_cms', 4),
(85, '2020_03_02_082822_table_curriculum', 4),
(86, '2020_03_02_082922_table_term_and_services', 4),
(87, '2020_03_02_112850_table_courses', 4),
(88, '2020_03_19_154720_table_exam', 4),
(89, '2020_03_19_154848_table_mock_exam', 4),
(90, '2020_03_19_155012_Add_User_Course', 4),
(91, '2020_03_19_162101_Add_User_Exam', 4),
(92, '2020_03_19_162138_Add_User_Mock_Exam', 4),
(93, '2020_03_19_162257_Add_User_CurriCulum', 4),
(94, '2020_03_20_124123_Table_User_With_Course', 4),
(19, '2020_04_01_141705_Table_Relation_Question_and_Answer_With_Exams', 2),
(20, '2020_04_02_100603_Table_Relation_Question_and_Answer_With_Exams', 3),
(95, '2020_03_23_141736_Add_youtube_course', 4),
(96, '2020_03_27_102730_Table_Mexam_With_User', 4),
(97, '2020_03_27_102802_Table_Exam_With_User', 4),
(98, '2020_03_31_120518_TableQandA', 4),
(99, '2020_04_02_102632_Table_Relation_Question_and_Answer_With_Exams', 4),
(100, '2020_04_03_134753_Add_QA_User_ID_IN_QA_Table', 4),
(101, '2020_04_07_122045_Table_Assignment', 4),
(102, '2020_04_16_163552_Add_SelectedIcon_In_Category_Table', 4),
(103, '2020_04_17_102443_Add_categoryslug_IN_Category_page', 4),
(104, '2020_04_17_130721_Table_Testimonial', 4),
(105, '2020_04_17_130747_Table_Clients', 4),
(106, '2020_04_17_134316_Add_image_in_Testimonial', 4),
(107, '2020_04_27_013023_Add_setas_in_course_table', 5),
(108, '2020_05_01_092442_Table_cart', 6),
(109, '2020_05_01_102816_Table_cart', 7),
(110, '2020_05_04_124630_Add_undo_field_Cart', 8),
(111, '2020_05_07_104526_Table_country', 9),
(112, '2020_05_07_104548_Table_states', 10),
(113, '2020_05_09_180705_Table_User_address', 11),
(114, '2020_05_11_121001_Table_Orders', 12),
(115, '2020_05_11_223749_Add_pdf_course', 13),
(116, '2020_05_12_164508_Table_Course_Program', 14),
(117, '2020_05_13_133301_Table_Course_Program', 15),
(118, '2020_05_18_170808_Add_user_id_Assignment', 16),
(119, '2020_05_26_081716_Add_Pdf_Course_Program', 17),
(120, '2020_05_27_141028_Add_UpdatePassword_to_User', 18),
(121, '2020_05_29_190337_Add_dates_in_course_with_user', 19),
(122, '2020_05_31_202919_Add_dates_in_course_with_user', 20),
(123, '2020_05_31_210934_Add_dates_in_course_with_user', 21),
(124, '2020_05_31_211700_Add_active_status_in_course_with_user', 22),
(125, '2020_05_31_212815_Table_Course_started', 23),
(126, '2020_05_31_214557_Table_Course_Started', 24),
(127, '2020_05_31_215926_Table_Course_Started', 25),
(128, '2020_05_31_220245_Table_Course_Started', 26),
(129, '2020_05_31_220521_update_Dates_in_course_started', 27),
(130, '2020_03_02_082922_table_topics', 28),
(131, '2020_06_04_133736_Add_status_and_icon_In_topics', 28),
(132, '2020_06_05_133828_Table_Teams', 29),
(133, '2020_06_05_134623_Update_dates_In_Teams', 30),
(134, '2020_06_20_202616_Add_Dates_In_Exam_With_User', 31),
(135, '2020_06_20_204254_Add_Dates_In_MExam_With_User', 32),
(136, '2020_06_24_101400_Add_correct_answer_in_QandA_Table', 33),
(137, '2020_06_26_105332_Table_exam_result', 34),
(138, '2020_07_07_154513_Table_Rating', 35),
(139, '2020_07_09_122408_Add_Exam_Type_Field_in_Results_Table', 36),
(140, '2020_07_17_132604_Table_comments', 37),
(141, '2020_07_17_152934_Table_Coupans', 37),
(142, '2020_07_17_173213_Add_course_in_comments_table', 38),
(143, '2020_07_28_115538_Add_Offer_in_Course', 39),
(144, '2020_07_28_115811_Add_socialmedai_icon_in_team', 39),
(145, '2020_07_28_120615_Add_addetional_Data_CourseProgram', 39),
(146, '2020_08_05_095524_Add_promo_in_cart_table', 40),
(147, '2020_08_20_123356_Add_course_count_in_courseStarted', 41),
(148, '2020_08_24_172840_Add_Instructor_ID_Arr', 42),
(149, '2020_08_24_034517_Add_course_in_assignment', 43),
(150, '2020_08_24_034517_Add_course_in_assignments', 44),
(151, '2020_08_27_064021_Add_ANS_Type_in_QandA', 45),
(152, '2020_09_02_233222_Table_Quiz', 46),
(153, '2020_09_11_004943_Add_quiz_states', 47),
(154, '2020_09_11_004959_Add_exam_states', 47),
(155, '2020_09_11_005013_Add_mockexam_states', 47),
(156, '2020_09_24_160157_Add_User_Description_in_user', 48),
(157, '2020_09_20_230840_Table_certificate', 49),
(158, '2020_09_20_234522_Add_content_in_certificate', 49),
(159, '2021_04_25_193615_Table_Event_creation', 49),
(160, '2021_04_25_195902_Table_Hallar_Base', 50),
(161, '2021_04_25_195923_Table_Lag_Base', 50),
(162, '2021_04_25_195939_Table_Ledare_Base', 50),
(163, '2021_04_28_185409_Add_visa_file_in_hall', 51),
(164, '2021_04_28_185856_Add_visa_file_in_ledare', 51),
(165, '2021_04_28_190226_Add_visa_file_in_lag', 51),
(166, '2021_04_30_204009_Add_creator_user', 52),
(167, '2021_04_30_211046_Add_UserID_Hallar', 53),
(168, '2021_05_02_001346_Table_Events', 54);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('habibahmed001@gmail.com', '$2y$10$ZgKkS4aD5MmA3FLJ/GkyVuOy6rJ6dnJo34CrTVLRv7wIrDoR.Llgy', '2021-05-18 05:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `tablecms`
--

CREATE TABLE `tablecms` (
  `id` int(10) UNSIGNED NOT NULL,
  `cms_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cms_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cms_status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `cms_pid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tablecms`
--

INSERT INTO `tablecms` (`id`, `cms_title`, `cms_desc`, `cms_status`, `cms_pid`) VALUES
(1, 'About us', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae', 'yes', 3),
(2, 'Technology', 'Nonumy eirmod por invidunt labore dolore magna.', 'yes', 3),
(3, 'Language', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd', 'yes', 3),
(4, 'Location', 'USA, 3280 Cabell Avenue Alexandria, VA 22301', 'yes', 2),
(5, 'Phone', 'Tel.: +1 703-518-6099', 'yes', 2),
(6, 'Fax', 'Fax: +1 709-834-2693', 'yes', 2),
(7, 'E-mail', 'info@tutor.com', 'yes', 2),
(8, 'Why We Are', 'We are proud to say that since our opening in ’98 we have been serving our visitors in the best possible way. In Hotel Nanovi, where each one of', 'yes', 1),
(9, 'Don\'t just take our', 'We are proud to say that since our opening in ’98 we have been serving our visitors in the best possible way. In Hotel Nanovi, where', 'yes', 1),
(10, 'Free online courses from the experts', 'We are proud to say that since our opening in ’98', 'yes', 1),
(11, 'Can’t find what you are looking for?', 'Submit a ticket and we\'ll get back to you as soon as we can.', 'yes', 4),
(12, NULL, 'Isn\'t days fill, after him bring. Set likeness meat seed whose for itself you can\'t seas itself. Herb replenish he, dry he. Firmament their.', 'yes', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tableevents`
--

CREATE TABLE `tableevents` (
  `id` int(10) UNSIGNED NOT NULL,
  `note` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventStartdate` date DEFAULT NULL,
  `eventEnddate` date DEFAULT NULL,
  `eventStarttime` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventEndtime` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventColor` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventResource` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EventId` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserId` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lag` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ledare` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tableevents`
--

INSERT INTO `tableevents` (`id`, `note`, `eventStartdate`, `eventEnddate`, `eventStarttime`, `eventEndtime`, `eventColor`, `eventResource`, `EventId`, `UserId`, `lag`, `ledare`, `status`, `created_at`, `updated_at`) VALUES
(1, 'First Note', '2021-05-16', NULL, '10:01:01', '12:00:00', '#990066', '16', '8468', '2', '3', '3', 'yes', '2021-05-03 15:57:29', '2021-05-16 09:35:13'),
(2, 'Second Note', '2021-05-17', NULL, '11:00:00', '14:00:00', '#990066', '15', '2511', '5', '1', '3', 'yes', '2021-05-03 19:01:16', '2021-05-16 09:40:24'),
(3, 'norra event', '2021-05-17', NULL, '03:10:00', '06:10:10', '#990066', '15', '6142', '2', '1', '1', 'yes', '2021-05-04 15:22:16', '2021-05-16 09:35:30'),
(4, 'Norra Event 2', '2021-05-18', NULL, '02:00:00', '04:00:00', '#990066', '15', '7606', '5', '1', '1', 'yes', '2021-05-05 06:32:40', '2021-05-16 09:40:40'),
(5, 'Soddra Event', '2021-05-19', NULL, '04:01:06', '07:00:00', '#990066', '15', '5130', '3', '1', '2', 'yes', '2021-05-05 06:43:47', '2021-05-16 09:42:37'),
(6, 'Soddra Event 2', '2021-05-20', NULL, '06:00:00', '08:00:00', '#990066', '15', '8729', '3', '1', '3', 'yes', '2021-05-05 06:44:36', '2021-05-16 09:43:15'),
(7, 'Soddra Event 3', '2021-05-21', NULL, '10:00:00', '13:00:00', '#990066', '17', '6759', '3', '3', '2', 'yes', '2021-05-05 06:45:51', '2021-05-16 09:43:32'),
(8, 'Vastra Event', '2021-05-16', NULL, '03:00:00', '06:00:00', '#990066', '16', '3008', '4', '3', '3', 'yes', '2021-05-05 06:47:24', '2021-05-16 09:41:45'),
(9, 'Vastra Event 1', '2021-05-17', NULL, '00:00:00', '02:00:00', '#990066', '16', '5007', '4', '2', '4', 'yes', '2021-05-05 07:47:59', '2021-05-16 09:41:53'),
(10, 'Soddra1 Event', '2021-05-17', NULL, '02:00:00', '03:00:00', '#990066', '16', '7417', '6', '2', '4', 'yes', '2021-05-05 09:15:29', '2021-05-16 09:45:58'),
(11, 'Norra 3rd Event', '2021-05-17', NULL, '01:00:00', '03:00:00', '#990066', '16', '25', '2', '8', '4', 'yes', '2021-05-05 13:38:16', '2021-05-16 09:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `tablehallar`
--

CREATE TABLE `tablehallar` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_type` enum('Visa','Passport') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Visa',
  `price` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_type` enum('Registerd','Not-registerd') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not-registerd',
  `status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `visafile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tablehallar`
--

INSERT INTO `tablehallar` (`id`, `name`, `apply_type`, `price`, `register_type`, `status`, `created_at`, `updated_at`, `visafile`, `userID`) VALUES
(2, 'Soddra hallen', 'Passport', '150', 'Not-registerd', 'no', '2021-04-30 21:30:36', '2021-04-30 21:30:36', NULL, '3'),
(3, 'Vastra hallen', 'Passport', '250', 'Registerd', 'no', '2021-04-30 21:30:57', '2021-04-30 21:30:57', NULL, '4'),
(4, 'Ostra hallen', 'Passport', '400', 'Registerd', 'no', '2021-04-30 21:31:17', '2021-04-30 21:31:17', NULL, '5'),
(5, 'Soddra1 hallen', 'Passport', '444', 'Registerd', 'no', '2021-04-30 22:13:47', '2021-04-30 22:13:47', NULL, '6'),
(7, 'Norra Hall', 'Passport', '400', 'Registerd', 'no', '2021-05-05 15:34:00', '2021-05-05 15:34:00', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tablelag`
--

CREATE TABLE `tablelag` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legs` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_type` enum('Visa','Passport') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Visa',
  `register_type` enum('Registerd','Not-registerd') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not-registerd',
  `status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `visafile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lagfile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tablelag`
--

INSERT INTO `tablelag` (`id`, `name`, `area`, `legs`, `apply_type`, `register_type`, `status`, `created_at`, `updated_at`, `visafile`, `lagfile`) VALUES
(1, 'Pixbox P14', 'Pixbox P11', 'Lars Antonsson', 'Visa', 'Registerd', 'no', '2021-04-25 20:40:34', '2021-04-25 20:40:34', '1619819783.jpg', NULL),
(2, 'Pixbox P12', 'Pixbo F12', 'Lars Antonsson', 'Visa', 'Registerd', 'no', '2021-04-25 20:40:34', '2021-04-25 20:40:34', NULL, NULL),
(3, 'Pixbox P16', 'Pixbo F16', 'Lars Antonsson', 'Visa', 'Registerd', 'no', '2021-04-25 20:40:34', '2021-04-25 20:40:34', NULL, NULL),
(4, 'Pixbox P12', 'Pixbo P12', 'Lars Antonsson', 'Visa', 'Registerd', 'no', '2021-04-25 20:40:34', '2021-04-25 20:40:34', NULL, NULL),
(8, 'Pixbox P21', 'Pixbox F22', 'Pixbox 001', 'Passport', 'Not-registerd', 'no', '2021-05-05 15:34:53', '2021-05-05 15:34:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tableledare`
--

CREATE TABLE `tableledare` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kont_type` enum('Visa','Passport') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Visa',
  `lagb_type` enum('Visa','Passport') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Visa',
  `tillg_type` enum('Visa','Passport') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Visa',
  `register_type` enum('Registerd','Not-registerd') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not-registerd',
  `status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `kontfile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lagbdfile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tillgfile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tableledare`
--

INSERT INTO `tableledare` (`id`, `name`, `Kont_type`, `lagb_type`, `tillg_type`, `register_type`, `status`, `created_at`, `updated_at`, `kontfile`, `lagbdfile`, `tillgfile`) VALUES
(1, 'Lars Antonsson', 'Visa', 'Visa', 'Visa', 'Registerd', 'no', '2021-04-25 20:36:31', '2021-04-25 20:36:31', '1619733656.png', '1619733671.jpg', '1619733671.jpg'),
(2, 'Lisa AntonssonStahi', 'Visa', 'Visa', 'Visa', 'Registerd', 'no', '2021-04-25 20:36:31', '2021-04-25 20:36:31', '1619734038.jpg', '1619734038.jpg', '1619734038.png'),
(3, 'Petra Johannesson', 'Visa', 'Visa', 'Visa', 'Registerd', 'no', '2021-04-25 20:36:31', '2021-04-25 20:36:31', '1619734068.jpg', '1619734068.jpg', '1619734068.jpg'),
(4, 'Magnus Johansson', 'Visa', 'Visa', 'Visa', 'Registerd', 'no', '2021-04-25 20:36:31', '2021-04-25 20:36:31', '1620225465.png', '1620225465.png', '1620225465.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `passupdated` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `descr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` enum('admin','instructor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'instructor'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `phone`, `password`, `avatar`, `status`, `confirmation_code`, `user_type`, `remember_token`, `created_at`, `updated_at`, `passupdated`, `descr`, `creator`) VALUES
(1, 'admin', 'Admin First Name', 'Admin Last Name', 'admin@gmail.com', NULL, '$2y$10$eQpDdzP29iaA81Z2MOhN6O8hV3N3ityLxa.yr6EFpOw.Jic5II33i', '1620217627.jpg', 'active', NULL, 'admin', 'Y0MnHkyAMWif5l84giDpCvo2pDZfAj2wfECKp5ksAymiIYMXezaI29IMfC8R', '2019-12-13 15:38:53', '2021-05-05 10:27:07', 'yes', NULL, 'instructor'),
(2, 'Norra-hallen', 'Norra', 'hallen', 'Norra@gmail.com', '123-456-7891', '$2y$10$0Vb0mp7A50PiLBwTArEbP.CwVLdstX2Bw0cKghMrYj.DP.jWlVE.i', '1620244312.jpg', 'active', NULL, 'instructor', '5QWLoerHZ67vKJsDwYq5n2L9WGU2ABjxDgofENpXQcjn2dI9hmPt94oUi7AN', '2021-04-30 16:30:14', '2021-05-05 17:51:52', 'yes', '<p>Hello</p>', 'instructor'),
(3, 'Soddra-hallen', 'Soddra', 'hallen', 'Soddra@gmail.com', '123-456-7891', '$2y$10$Otu8UUegPk2aPv.Ol63W..fSqKwfuSaxv3dY2mxwKs46bErARMVLG', '1620244358.png', 'active', NULL, 'instructor', 'obh6sFsHWlQDrU20eGdWDL8zFSdE0CvRmWvXFk3ou9o3Qzseo3hLHkeq3rIT', '2021-04-30 16:30:36', '2021-05-05 17:52:38', 'yes', NULL, 'instructor'),
(4, 'Vastra-hallen', 'Vastra', 'hallen', 'Vastra@gmail.com', '123-456-7891', '$2y$10$IetOSoGAHgyIReDplhfFr.q2xA2yQbfHTgwGSxfeYnwPzwvBbs6cS', '1621279914.jpg', 'active', NULL, 'instructor', 'IeobivVap45mTfB8fqDFTGr0WeyLdY0k3t1wONuuUALkUvhFl00X3RdUptjC', '2021-04-30 16:30:57', '2021-05-17 17:31:54', 'yes', NULL, 'instructor'),
(5, 'Ostra-hallen', 'Ostra', 'hallen', 'Ostra@gmail.com', '123-456-7891', '$2y$10$HA1.0z0ty52GpP4CGvVWneazDlnlX.uCDBV9ul1p3nrZMZuAyeSHW', '1620244453.jpg', 'active', NULL, 'instructor', 'i9PhMmkrTjRRe6fibFiiD5tmktQjvQTGbC6QEt4QXduHD2xWYtBIUWhUs9MV', '2021-04-30 16:31:17', '2021-05-05 17:54:13', 'yes', NULL, 'instructor'),
(6, 'Soddra1-hallen', 'Soddra F', 'hallen', 'habibahmed001@gmail.com', '123-456-7891', '$2y$10$mRLuNOhHSV4IuKRGMJrQjuOuU4LMEigH3eLTxXXLkl.A/oZhNBRBS', '1620244501.png', 'active', NULL, 'instructor', 'zGCgoSXO6rGaqdchr3aPxznVhOBBdzOkyrPXngEf6eF5t7a2FF3pTm77nDPa', '2021-04-30 17:13:47', '2021-05-17 17:48:30', 'yes', NULL, 'instructor'),
(7, 'test-test', 'test', 'test', 'test@gmail.com', '123-456-7891', '$2y$10$3hV/wItVVPQX/JKvbtTL8egEBLHko/gtuxhUy.2n5frqfoz5PPQMS', 'default.jpg', 'active', NULL, 'instructor', NULL, '2021-05-06 13:16:33', '2021-05-06 13:16:33', 'yes', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Indexes for table `tablecms`
--
ALTER TABLE `tablecms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableevents`
--
ALTER TABLE `tableevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablehallar`
--
ALTER TABLE `tablehallar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablelag`
--
ALTER TABLE `tablelag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableledare`
--
ALTER TABLE `tableledare`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tablecms`
--
ALTER TABLE `tablecms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tableevents`
--
ALTER TABLE `tableevents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tablehallar`
--
ALTER TABLE `tablehallar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tablelag`
--
ALTER TABLE `tablelag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tableledare`
--
ALTER TABLE `tableledare`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
