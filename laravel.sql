-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 01:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(1, '2022_05_09_163519_create_tbl_quotes_table', 1),
(2, '2022_05_09_202322_create_tbl_admin_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'Muntasher Morshed', 'admin@gmail.com', 'e99a18c428cb38d5f260853678922e03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotes`
--

CREATE TABLE `tbl_quotes` (
  `q_id` int(10) UNSIGNED NOT NULL,
  `q_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_active_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_quotes`
--

INSERT INTO `tbl_quotes` (`q_id`, `q_details`, `q_author`, `q_active_status`, `created_at`, `updated_at`) VALUES
(2, 'That which does not kill us makes us stronger.', 'Friedrich Nietzsche', 1, NULL, NULL),
(3, 'Life is what happens when you’re busy making other plans.', 'John Lennon', 1, NULL, NULL),
(4, 'When the going gets tough, the tough get going.', 'Joe Kennedy', 1, NULL, NULL),
(5, 'You must be the change you wish to see in the world.', 'Mahatma Gandhi', 1, NULL, NULL),
(6, 'You only live once, but if you do it right, once is enough.', 'Mae West', 1, NULL, NULL),
(7, 'Tough times never last but tough people do.', 'Robert H. Schuller', 1, NULL, NULL),
(8, 'Get busy living or get busy dying.', 'Stephen King', 1, NULL, NULL),
(9, 'Whether you think you can or you think you can’t, you’re right.', 'Henry Ford', 1, NULL, NULL),
(10, 'Tis better to have loved and lost than to have never loved at all.', 'Alrded Lord Tennyson', 1, NULL, NULL),
(11, 'A man is but what he knows.', 'Sir Francis Bacon', 1, NULL, NULL),
(12, 'You miss 100 percent of the shots you never take.', 'Wayne Gretzky', 1, NULL, NULL),
(13, 'If you’re going through hell, keep going.', 'Winston Churchill', 1, NULL, NULL),
(14, 'Strive not to be a success, but rather to be of value.', 'Albert Einstein', 1, NULL, NULL),
(15, 'Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do.', 'Mark Twain', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
