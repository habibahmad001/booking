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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
