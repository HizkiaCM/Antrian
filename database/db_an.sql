-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2023 pada 05.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_an`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_panggil`
--

CREATE TABLE `antrian_panggil` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `antrian_panggil`
--

INSERT INTO `antrian_panggil` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-05', 1, 'A', 'Ibu & Anak', '1', '2023-09-05 17:05:04'),
(2, '2023-09-05', 1, 'A', 'Ibu & Anak', '1', '2023-09-05 17:05:17'),
(3, '2023-09-05', 2, 'A', 'Ibu & Anak', '1', '2023-09-05 17:05:19'),
(4, '2023-09-05', 8, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:14'),
(5, '2023-09-05', 9, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:24'),
(6, '2023-09-05', 10, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:40'),
(7, '2023-09-05', 10, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:50'),
(8, '2023-09-05', 9, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:53'),
(9, '2023-09-05', 10, 'A', 'Ibu & Anak', '1', '2023-09-05 18:04:02'),
(10, '2023-09-05', 6, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:04:52'),
(11, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:01'),
(12, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:27'),
(13, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:32'),
(14, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:33'),
(15, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:33'),
(16, '2023-09-05', 8, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:37'),
(17, '2023-09-05', 9, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:54'),
(18, '2023-09-05', 10, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:06:28'),
(19, '2023-09-05', 11, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:23'),
(20, '2023-09-05', 12, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:29'),
(21, '2023-09-05', 13, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:44'),
(22, '2023-09-05', 14, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:47'),
(23, '2023-09-05', 22, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:58'),
(24, '2023-09-05', 21, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:18:15'),
(25, '2023-09-05', 1, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:23'),
(26, '2023-09-05', 2, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:30'),
(27, '2023-09-05', 3, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:37'),
(28, '2023-09-05', 4, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:46'),
(29, '2023-09-05', 5, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:55'),
(30, '2023-09-05', 6, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:03'),
(31, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:13'),
(32, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:22'),
(33, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:26'),
(34, '2023-09-05', 9, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:35'),
(35, '2023-09-05', 9, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:36'),
(36, '2023-09-05', 9, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:36'),
(37, '2023-09-05', 10, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:45'),
(38, '2023-09-05', 11, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:55'),
(39, '2023-09-05', 11, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:55'),
(40, '2023-09-05', 11, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:56'),
(41, '2023-09-05', 11, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:56'),
(42, '2023-09-05', 15, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:11'),
(43, '2023-09-05', 15, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:28'),
(44, '2023-09-05', 15, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:35'),
(45, '2023-09-05', 22, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:38'),
(46, '2023-09-05', 22, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:38'),
(47, '2023-09-05', 21, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:44'),
(48, '2023-09-05', 21, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:45'),
(49, '2023-09-05', 21, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:45'),
(50, '2023-09-05', 21, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:45'),
(51, '2023-09-05', 20, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:22:23'),
(52, '2023-09-05', 19, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:22:54'),
(53, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:24:03'),
(54, '2023-09-05', 2, 'B', 'Umum', '1', '2023-09-05 18:24:16'),
(55, '2023-09-05', 1, 'E', 'Mata', '1', '2023-09-05 18:28:08'),
(56, '2023-09-05', 1, 'F', 'Syaraf', '1', '2023-09-05 18:29:25'),
(57, '2023-09-05', 3, 'B', 'Umum', '1', '2023-09-05 18:33:28'),
(58, '2023-09-05', 2, 'F', 'Syaraf', '1', '2023-09-05 18:35:31'),
(59, '2023-09-05', 2, 'E', 'Mata', '1', '2023-09-05 18:35:53'),
(60, '2023-09-05', 2, 'E', 'Mata', '1', '2023-09-05 18:36:30'),
(61, '2023-09-05', 1, 'F', 'Syaraf', '1', '2023-09-05 18:36:35'),
(62, '2023-09-05', 2, 'F', 'Syaraf', '1', '2023-09-05 18:36:43'),
(63, '2023-09-05', 4, 'B', 'Umum', '1', '2023-09-05 18:39:40'),
(64, '2023-09-05', 5, 'B', 'Umum', '1', '2023-09-05 18:39:54'),
(65, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:10'),
(66, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:10'),
(67, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:11'),
(68, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:11'),
(69, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:13'),
(70, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:13'),
(71, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:14'),
(72, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:14'),
(73, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:14'),
(74, '2023-09-05', 6, 'B', 'Umum', '1', '2023-09-05 18:41:30'),
(75, '2023-09-05', 1, 'F', 'Syaraf', '1', '2023-09-05 19:15:05'),
(76, '2023-09-05', 2, 'F', 'Syaraf', '1', '2023-09-05 19:18:18'),
(77, '2023-09-05', 1, 'F', 'Syaraf', '1', '2023-09-05 19:18:25'),
(78, '2023-09-05', 1, 'F', 'Syaraf', '1', '2023-09-05 19:18:30'),
(79, '2023-09-05', 2, 'F', 'Syaraf', '1', '2023-09-05 19:18:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'A', 'Ibu & Anak', '1', '2023-09-04 13:11:17'),
(2, '2023-09-05', 1, 'A', 'Ibu & Anak', '1', '2023-09-05 17:05:17'),
(3, '2023-09-05', 2, 'A', 'Ibu & Anak', '1', '2023-09-05 17:05:19'),
(4, '2023-09-05', 3, 'A', 'Ibu & Anak', '1', '2023-09-05 16:42:56'),
(5, '2023-09-05', 4, 'A', 'Ibu & Anak', '1', '2023-09-05 16:44:16'),
(6, '2023-09-05', 5, 'A', 'Ibu & Anak', '1', '2023-09-05 16:41:49'),
(7, '2023-09-05', 6, 'A', 'Ibu & Anak', '1', '2023-09-05 16:42:05'),
(8, '2023-09-05', 7, 'A', 'Ibu & Anak', '1', '2023-09-05 16:42:16'),
(9, '2023-09-05', 8, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:14'),
(10, '2023-09-05', 9, 'A', 'Ibu & Anak', '1', '2023-09-05 18:03:53'),
(11, '2023-09-05', 10, 'A', 'Ibu & Anak', '1', '2023-09-05 18:04:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian2`
--

CREATE TABLE `tbl_antrian2` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian2`
--

INSERT INTO `tbl_antrian2` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'B', 'Umum', '0', NULL),
(2, '2023-09-05', 1, 'B', 'Umum', '1', '2023-09-05 18:40:14'),
(3, '2023-09-05', 2, 'B', 'Umum', '1', '2023-09-05 18:24:16'),
(4, '2023-09-05', 3, 'B', 'Umum', '1', '2023-09-05 18:33:28'),
(5, '2023-09-05', 4, 'B', 'Umum', '1', '2023-09-05 18:39:40'),
(6, '2023-09-05', 5, 'B', 'Umum', '1', '2023-09-05 18:39:54'),
(7, '2023-09-05', 6, 'B', 'Umum', '1', '2023-09-05 18:41:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian3`
--

CREATE TABLE `tbl_antrian3` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian3`
--

INSERT INTO `tbl_antrian3` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'C', 'Penyakit Dalam', '0', NULL),
(2, '2023-09-05', 1, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:23'),
(3, '2023-09-05', 2, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:30'),
(4, '2023-09-05', 3, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:37'),
(5, '2023-09-05', 4, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:46'),
(6, '2023-09-05', 5, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:19:55'),
(7, '2023-09-05', 6, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:03'),
(8, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:13'),
(9, '2023-09-05', 7, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:26'),
(10, '2023-09-05', 8, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:05:37'),
(11, '2023-09-05', 9, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:36'),
(12, '2023-09-05', 10, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:45'),
(13, '2023-09-05', 11, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:20:56'),
(14, '2023-09-05', 12, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:29'),
(15, '2023-09-05', 13, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:44'),
(16, '2023-09-05', 14, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:13:47'),
(17, '2023-09-05', 15, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:35'),
(18, '2023-09-05', 16, 'C', 'Penyakit Dalam', '0', NULL),
(19, '2023-09-05', 17, 'C', 'Penyakit Dalam', '0', NULL),
(20, '2023-09-05', 18, 'C', 'Penyakit Dalam', '0', NULL),
(21, '2023-09-05', 19, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:22:54'),
(22, '2023-09-05', 20, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:22:23'),
(23, '2023-09-05', 21, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:45'),
(24, '2023-09-05', 22, 'C', 'Penyakit Dalam', '1', '2023-09-05 18:21:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian4`
--

CREATE TABLE `tbl_antrian4` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian4`
--

INSERT INTO `tbl_antrian4` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'D', 'Kulit', '0', NULL),
(2, '2023-09-05', 1, 'D', 'Kulit', '0', NULL),
(3, '2023-09-05', 2, 'D', 'Kulit', '0', NULL),
(4, '2023-09-05', 3, 'D', 'Kulit', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian5`
--

CREATE TABLE `tbl_antrian5` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian5`
--

INSERT INTO `tbl_antrian5` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'E', 'Mata', '0', NULL),
(2, '2023-09-05', 1, 'E', 'Mata', '1', '2023-09-05 18:28:08'),
(3, '2023-09-05', 2, 'E', 'Mata', '1', '2023-09-05 18:36:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian6`
--

CREATE TABLE `tbl_antrian6` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian6`
--

INSERT INTO `tbl_antrian6` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'F', 'Syaraf', '0', NULL),
(2, '2023-09-05', 1, 'F', 'Syaraf', '1', '2023-09-05 19:18:30'),
(3, '2023-09-05', 2, 'F', 'Syaraf', '1', '2023-09-05 19:18:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian7`
--

CREATE TABLE `tbl_antrian7` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian7`
--

INSERT INTO `tbl_antrian7` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'G', 'THT', '0', NULL),
(2, '2023-09-05', 1, 'G', 'THT', '0', NULL),
(3, '2023-09-05', 2, 'G', 'THT', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian8`
--

CREATE TABLE `tbl_antrian8` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian8`
--

INSERT INTO `tbl_antrian8` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'H', 'Fisioterapi', '0', NULL),
(2, '2023-09-05', 1, 'H', 'Fisioterapi', '0', NULL),
(3, '2023-09-05', 2, 'H', 'Fisioterapi', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian9`
--

CREATE TABLE `tbl_antrian9` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian9`
--

INSERT INTO `tbl_antrian9` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'I', 'Otak', '0', NULL),
(2, '2023-09-05', 1, 'I', 'Otak', '0', NULL),
(3, '2023-09-05', 2, 'I', 'Otak', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian10`
--

CREATE TABLE `tbl_antrian10` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Poli` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian10`
--

INSERT INTO `tbl_antrian10` (`id`, `tanggal`, `no_antrian`, `Kode`, `Poli`, `status`, `updated_date`) VALUES
(1, '2023-09-04', 1, 'J', 'Paru', '0', NULL),
(2, '2023-09-05', 1, 'J', 'Paru', '0', NULL),
(3, '2023-09-05', 2, 'J', 'Paru', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `Loket`, `password`, `Layan_Key`) VALUES
(1, 'Loket 1', '12345', 1),
(2, 'Loket 2', '12345', 1),
(3, 'Loket 1', '12345', 2),
(4, 'Loket 2', '12345', 2),
(5, 'Loket 3', '12345', 2),
(8, 'Loket 1', '12345', 3),
(9, 'Loket 2', '12345', 3),
(10, 'Loket 1', '12345', 4),
(11, 'Loket 2', '12345', 4),
(12, 'Loket 1', '12345', 5),
(13, 'Loket 2', '12345', 5),
(14, 'Loket 1', '12345', 6),
(15, 'Loket 2', '12345', 6),
(16, 'Loket 1', '12345', 7),
(17, 'Loket 2', '12345', 7),
(18, 'Loket 1', '12345', 8),
(19, 'Loket 2', '12345', 8),
(20, 'Loket 1', '12345', 9),
(21, 'Loket 2', '12345', 9),
(22, 'Loket 1', '12345', 10),
(23, 'Loket 2', '12345', 10),
(24, 'Loket 3', '12345', 1),
(25, 'Loket 4', '12345', 1),
(26, 'Loket 4', '12345', 2),
(27, 'Loket 3', '12345', 3),
(28, 'Loket 4', '12345', 3),
(29, 'Loket 3', '12345', 4),
(30, 'Loket 4', '12345', 4),
(31, 'Loket 3', '12345', 5),
(32, 'Loket 4', '12345', 5),
(33, 'Loket 3', '12345', 6),
(34, 'Loket 4', '12345', 6),
(35, 'Loket 3', '12345', 7),
(36, 'Loket 4', '12345', 7),
(37, 'Loket 3', '12345', 8),
(38, 'Loket 4', '12345', 8),
(39, 'Loket 3', '12345', 9),
(40, 'Loket 4', '12345', 9),
(41, 'Loket 3', '12345', 10),
(42, 'Loket 4', '12345', 10);
--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian_panggil`
--
ALTER TABLE `antrian_panggil`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian2`
--
ALTER TABLE `tbl_antrian2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian3`
--
ALTER TABLE `tbl_antrian3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian4`
--
ALTER TABLE `tbl_antrian4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian5`
--
ALTER TABLE `tbl_antrian5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian6`
--
ALTER TABLE `tbl_antrian6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian7`
--
ALTER TABLE `tbl_antrian7`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian8`
--
ALTER TABLE `tbl_antrian8`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian9`
--
ALTER TABLE `tbl_antrian9`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian10`
--
ALTER TABLE `tbl_antrian10`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian_panggil`
--
ALTER TABLE `antrian_panggil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian2`
--
ALTER TABLE `tbl_antrian2`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian3`
--
ALTER TABLE `tbl_antrian3`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian4`
--
ALTER TABLE `tbl_antrian4`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian5`
--
ALTER TABLE `tbl_antrian5`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian6`
--
ALTER TABLE `tbl_antrian6`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian7`
--
ALTER TABLE `tbl_antrian7`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian8`
--
ALTER TABLE `tbl_antrian8`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian9`
--
ALTER TABLE `tbl_antrian9`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian10`
--
ALTER TABLE `tbl_antrian10`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
