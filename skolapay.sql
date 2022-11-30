-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2022 at 09:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skolapay`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(10) UNSIGNED NOT NULL,
  `name_feedback` varchar(128) NOT NULL,
  `email_feedback` varchar(128) NOT NULL,
  `pesan_feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `name_feedback`, `email_feedback`, `pesan_feedback`, `created_at`, `updated_at`) VALUES
(6, 'Brian', 'brian@gmail.com', 'bre keren cok!', '2022-11-23 07:07:27', '2022-11-23 07:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_invoice` varchar(128) NOT NULL,
  `tgl_bayar` varchar(25) DEFAULT NULL,
  `nominal_bayar` int(11) NOT NULL,
  `note_invoice` varchar(128) NOT NULL,
  `status_invoice` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `id_user`, `no_invoice`, `tgl_bayar`, `nominal_bayar`, `note_invoice`, `status_invoice`, `updated_at`, `created_at`) VALUES
(6, 2, 'SIS1719066820221129', NULL, 500000, 'Pembayaran SPP 29 November 2022', 'Belum Bayar', '29 November 2022', '29 November 2022'),
(10, 2, 'SIS1719066720221129', '29 November 2022', 500000, 'Pembayaran SPP 29 November 2022', 'Sudah Bayar', '29 November 2022', '29 November 2022');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nomor_kelas` varchar(3) NOT NULL,
  `prodi_kelas` varchar(128) NOT NULL,
  `url_kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nomor_kelas`, `prodi_kelas`, `url_kelas`) VALUES
(1, '10', 'Animasi', '10-animasi'),
(2, '11', 'Animasi', '11-animasi'),
(3, '12', 'Animasi', '12-animasi'),
(4, '10', 'Akuntansi', '10-akuntansi'),
(5, '11', 'Akuntansi', '11-akuntansi'),
(6, '12', 'Akuntansi', '12-akuntansi'),
(7, '10', 'Perbankan Syariah', '10-perbankan-syariah'),
(8, '11', 'Perbankan Syariah', '11-perbankan-syariah'),
(9, '12', 'Perbankan Syariah', '12-perbankan-syariah'),
(10, '10', 'OTKP1', '10-otkp1'),
(11, '11', 'OTKP1', '11-otkp1'),
(12, '12', 'OTKP1', '12-otkp1'),
(13, '10', 'OTKP2', '10-otkp2'),
(14, '11', 'OTKP2', '11-otkp2'),
(15, '12', 'OTKP2', '12-otkp2'),
(16, '', 'None', '-');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_11_08_071114_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `name_parent` varchar(128) NOT NULL,
  `name_student` varchar(128) NOT NULL,
  `email_payment` varchar(128) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `jenis_pembayaran` varchar(25) NOT NULL,
  `month_payment` varchar(128) NOT NULL,
  `transfer_by` varchar(128) NOT NULL,
  `virtual_account` varchar(128) NOT NULL,
  `nominal_payment` int(11) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `picture_payment` varchar(128) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `name_parent`, `name_student`, `email_payment`, `id_kelas`, `jenis_pembayaran`, `month_payment`, `transfer_by`, `virtual_account`, `nominal_payment`, `phone_number`, `picture_payment`, `updated_at`, `created_at`) VALUES
(1, 'Anto', 'Budi', 'budi@gmail.com', 9, 'SPP', 'April 2022', 'M-Banking', '3960001011', 650000, '08123456', '1659839199732.jpg', '2022-11-23 13:30:44', '2022-11-23 05:36:01'),
(2, 'BrianR', 'Warren', 'warren@gmail.com', 9, 'SPP', 'Juli 2022', 'M-Banking', '3960001011', 650001, '08123458', '1659839199732.jpg', '2022-11-23 13:31:59', '2022-11-23 05:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'Student'),
(3, 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `born` varchar(128) DEFAULT NULL,
  `phone_number` varchar(128) DEFAULT NULL,
  `picture` varchar(128) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `born`, `phone_number`, `picture`, `id_kelas`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'is-admin', '$2y$10$CutwakvljC95/4X0N1v2DueW5qfTjd4Tg9QhW8x4ITrwxPEE/Pnhi', NULL, '0812120884971', 'livewire.png', 16, 1, '2022-11-21 03:00:00', '2022-11-22 09:02:52'),
(2, 'Andrei', '17190668', '$2a$12$JdqN2.WDuuqgk0rr1PN/LuFlTssBCvlL5wqKC9uBlVsMiCrBK1xdm', NULL, NULL, 'user.png', 16, 2, '2022-11-21 04:00:00', '2022-11-21 04:00:00'),
(3, 'Maximilian', 'is-parent', '$2a$12$JdqN2.WDuuqgk0rr1PN/LuFlTssBCvlL5wqKC9uBlVsMiCrBK1xdm', NULL, NULL, 'user.png', 16, 3, '2022-11-21 04:10:00', '2022-11-21 04:10:00'),
(5, 'Triadi', '17190667', '$2y$10$1Pn8zlJWbr0UmrzZ7jmKrOMwuTCkrZ8rpu97ngbFO5LujvhTu2Q1m', NULL, NULL, 'user.png', 16, 2, '2022-11-22 10:46:00', '2022-11-22 10:46:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD UNIQUE KEY `no_invoice` (`no_invoice`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
