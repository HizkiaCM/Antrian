-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2023 pada 17.08
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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Loket` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Layan_Key` tinyint(4) NOT NULL
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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Layan_Key`) REFERENCES `layanan` (`Layan_Key`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
