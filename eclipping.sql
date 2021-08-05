-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 05:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_upload`
--

CREATE TABLE `log_upload` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_upload`
--

INSERT INTO `log_upload` (`id`, `judul`, `file`, `status`, `deskripsi`, `slug`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(54, 'Clipping 1', 'pdf.pdf', 'Pengajuan e-Clipping', '', '26-07-2021', 'Sara', '2021-07-26 21:35:45', '2021-07-26 21:35:45'),
(55, 'Clipping 2', 'TABEL_Z.pdf', 'Pengajuan e-Clipping', '', '27-07-2021', 'Sara', '2021-07-27 22:55:09', '2021-07-27 22:55:09'),
(56, 'Clipping 3', 'Contoh Surat Lamaran.pdf', 'Pengajuan e-Clipping', '', '27-07-2021', 'Sara', '2021-07-27 23:13:14', '2021-07-27 23:13:14'),
(57, 'Clipping 4', 'IJAZAH DIII.pdf', 'Pengajuan e-Clipping', '', '27-07-2021', 'Sara', '2021-07-27 23:13:35', '2021-07-27 23:13:35'),
(58, 'Clipping 5', 'pdf (1)_1.pdf', 'Pengajuan e-Clipping', '', '27-07-2021', 'Sara', '2021-07-27 23:13:47', '2021-07-27 23:13:47'),
(59, 'Clipping 6', 'PB5MAT_10-11_Distribusi_Sampling.pdf', 'Pengajuan e-Clipping', '', '27-07-2021', 'Sara', '2021-07-27 23:14:04', '2021-07-27 23:14:04'),
(60, 'Clipping 7', '8316fbc3-087e-416d-ae91-3f1d88aba3e1.pdf', 'Pengajuan e-Clipping', '', '28-07-2021', 'Sara', '2021-07-28 21:25:06', '2021-07-28 21:25:06'),
(61, 'Clipping 8', 'transkrip nilai S1.pdf', 'Pengajuan e-Clipping', '', '28-07-2021', 'Sara', '2021-07-28 21:25:59', '2021-07-28 21:25:59'),
(62, 'Clipping 9', 'TABEL_Z (1).pdf', 'Pengajuan e-Clipping', '', '28-07-2021', 'Sara', '2021-07-28 22:34:10', '2021-07-28 22:34:10'),
(63, 'Clipping 10', 'INSTITUT PERTANIAN BOGOR.pdf', 'Pengajuan e-Clipping', '', '28-07-2021', 'Sara', '2021-07-28 22:34:27', '2021-07-28 22:34:27'),
(64, 'Clipping 11', 'Bukti pengisian SP2020 Online.pdf', 'Pengajuan e-Clipping', '', '28-07-2021', 'Sara ', '2021-07-28 22:41:29', '2021-07-28 22:41:29'),
(68, 'Kliping Minggu 4 Juli 2021', 'randomforest2001.pdf', 'Pengajuan e-Clipping', '', '30-07-2021', 'Sara', '2021-07-30 03:02:43', '2021-07-30 03:02:43'),
(69, 'Kliping lagi', 'randomforest2001 - Copy.pdf', 'Pengajuan e-Clipping', 'Ini adalah kliping untuk hari senin', '30-07-2021', 'Sara', '2021-07-30 03:18:22', '2021-07-30 03:18:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_upload`
--
ALTER TABLE `log_upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_upload`
--
ALTER TABLE `log_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
