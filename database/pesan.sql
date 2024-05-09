-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2024 pada 00.44
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_lawan` int(15) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_lawan`, `isi`, `waktu`) VALUES
(1, 2, 1, 'lol', '2024-05-04 20:38:54'),
(2, 1, 2, 'kak', '2024-05-04 22:05:39'),
(3, 1, 2, 'kek\n', '2024-05-04 22:05:42'),
(4, 2, 1, 'asd', '2024-05-04 22:44:35'),
(5, 2, 1, 'asd', '2024-05-04 22:46:35'),
(6, 2, 1, 'kek', '2024-05-05 02:52:51'),
(7, 2, 1, 'asdas', '2024-05-05 02:53:12'),
(8, 2, 1, 'wwww', '2024-05-05 02:53:14'),
(9, 2, 1, 'asdasd', '2024-05-05 02:53:26'),
(10, 2, 1, 'ass', '2024-05-05 02:53:28'),
(11, 2, 1, 'dsfdds\n', '2024-05-05 04:46:12'),
(12, 1, 2, 'oi\n\njfgj', '2024-05-05 04:48:23'),
(13, 1, 2, 'sdf', '2024-05-05 04:48:26'),
(14, 2, 1, 'asd', '2024-05-05 05:09:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
