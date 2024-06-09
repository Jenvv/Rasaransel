-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2024 pada 14.44
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
-- Database: `rumahmakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `photo` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `photo`, `username`, `password`, `level_user`) VALUES
('adminganteng', 'Admin Ganteng', 'menganteng@gmail.com', 'default.jpg', 'jennv', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasan_ulasan`
--

CREATE TABLE `balasan_ulasan` (
  `id_balasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 1,
  `id_ulasan` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `isi_balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `pelanggan_send` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `toko_send` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `pelanggan_send`, `id_user`, `toko_send`, `time`) VALUES
(88, 1, 't', 1, '0', '2024-06-05 07:46:07'),
(89, 1, '0', 1, 'to', '2024-06-05 08:29:22'),
(90, 38, 't', 1, '0', '2024-06-08 12:05:41'),
(91, 38, 'loj', 1, '0', '2024-06-08 12:06:02'),
(92, 38, 'as', 1, '0', '2024-06-08 12:06:03'),
(93, 38, 'dnas', 1, '0', '2024-06-08 12:06:04'),
(94, 38, '0', 1, 'ape', '2024-06-08 12:12:40'),
(95, 38, 'sar', 3, '0', '2024-06-08 12:13:22'),
(96, 38, 'ler', 1, '0', '2024-06-08 12:32:12'),
(97, 38, 'tol', 1, '0', '2024-06-08 12:32:31'),
(98, 38, '0', 1, 'cok', '2024-06-08 12:32:34'),
(99, 38, 'mn u', 1, '0', '2024-06-08 12:33:33'),
(100, 38, '0', 1, 'ah mnee', '2024-06-08 12:34:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` text NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`, `user_agent`) VALUES
('21n174fnbkk3d0bedv54u65m65g08i69', '::1', 1717875097, '__ci_last_regenerate|i:1717867939;id|s:1:\"1\";username|s:5:\"admin\";nama|s:10:\"Toko Petir\";is_active|s:1:\"1\";is_merchant|b:1;', ''),
('2ekr7c3h4vctibd2s4f33pfdq93aqnms', '::1', 1717936375, '__ci_last_regenerate|i:1717936219;', ''),
('2j0oig2avlnloov7e5vfq070q2m3mqr9', '::1', 1717934193, '__ci_last_regenerate|i:1717934193;', ''),
('6js4g4i6rsdu2htlphlp3cg7h3eegaca', '::1', 1717873777, '__ci_last_regenerate|i:1717873706;', ''),
('ahc24fvn3k9ausnloegl1r0je8v1mc9b', '::1', 1717934191, '__ci_last_regenerate|i:1717934191;', ''),
('ccnd9vfidunjltl0oekvo5oa5gc6cqtt', '::1', 1717934193, '__ci_last_regenerate|i:1717934193;', ''),
('f0g5u069n7q2aocmi2h6tbakq8e8r3q0', '::1', 1717867915, '__ci_last_regenerate|i:1717866712;id|s:1:\"1\";username|s:5:\"admin\";nama|s:10:\"Toko Petir\";is_active|s:1:\"1\";is_merchant|b:1;', ''),
('pq6h7fkhg20o6tumfboor6e0pntm0sok', '::1', 1717872058, '__ci_last_regenerate|i:1717871761;id_pelanggan|s:2:\"38\";username|s:6:\"jennvo\";nama_pelanggan|s:14:\"Muhammad Ridho\";email|s:17:\"rdofx91@gmail.com\";photo|s:11:\"foto_38.jpg\";logged_in|b:1;id|s:1:\"6\";nama|s:14:\"Muhammad Ridho\";is_active|s:1:\"1\";is_merchant|b:1;', ''),
('r6b2dpm52h4l7t6ieihsebpjrrtnbara', '::1', 1717937061, '__ci_last_regenerate|i:1717937026;id|s:12:\"adminganteng\";username|s:5:\"jennv\";nama|s:13:\"Admin Ganteng\";level_user|s:1:\"1\";', ''),
('u2dfhvvjkc5r4ui9g659l4eq5a8s38rn', '::1', 1717934686, '__ci_last_regenerate|i:1717934686;', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pesanan`, `id_produk`, `qty`) VALUES
(1, 108, 1, 1),
(2, 109, 15, 1),
(3, 110, 1, 1),
(4, 111, 1, 1),
(5, 112, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `kode_promo` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_promo` varchar(125) NOT NULL,
  `diskon` int(11) NOT NULL,
  `tgl_diskon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kategori`, `kategori`, `photo`) VALUES
(1, 'NASI KOTAK', 'Nasikotak.png'),
(2, 'MINUMAN', 'minuman.png'),
(3, 'CAKE', 'cake.png'),
(4, 'PRASMANAN', 'prasmanan.png'),
(5, 'SNACK BOX', 'snack.png'),
(6, 'KATERING KARYAWAN', 'katering.png'),
(7, 'MAKANAN SEHAT', 'makanan.png'),
(8, 'TUMPENG', 'tumpeng.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_produk`, `id_user`, `id_kategori`, `nama_produk`, `harga`, `foto`, `deskripsi`) VALUES
(1, 1, 7, 'Ayam Asin', '13000', '356796938_113173205160504_2616898259869867554_n_(1)1.jpg', '<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum nemo odit non officiis, veniam repellendus doloribus? Qui, nihil! Animi, voluptatum.&nbsp;</div>'),
(2, 3, 1, 'AYAM Goreng', '10000', 'ayamgoreng.jpeg', 'Ayam goreng ungkep'),
(3, 2, 1, 'CAK IKAN Mujaer', '10000', 'cakikanjaer.jpeg', 'PECAK IKAN MUJAER '),
(4, 2, 2, 'CAPCAY', '3000', 'capcay.jpeg', 'HARGA 2 kali centong'),
(7, 2, 3, 'Ikan Garang ASEM', '20000', 'ikangarangasam.jpeg', 'IKAN laut dan ikan tambak'),
(8, 2, 3, 'IKAN GORENG MUJAER', '7000', 'ikangoreng.jpeg', 'IKAN GORENG MUJAER'),
(13, 2, 4, 'OREG TEMPE', '2000', 'oregtempe.jpeg', 'SATU KALI CENTONG '),
(14, 2, 5, 'PAKET BOX NASI 1', '25000', 'paketnasi1.jpeg', 'MENU CHATERING untuk ACARA'),
(16, 3, 5, 'PAKET BOX NASI 3', '15000', 'paketnasi3.jpeg', 'MENU CHATERING untuk ACARA'),
(18, 3, 6, 'PEPES AYAM', '10000', 'pepesayam.jpeg', 'PEPES AYAM'),
(19, 3, 6, 'PEPS IKAN', '10000', 'pepesikan.jpeg', 'PEPES IKAN'),
(20, 4, 6, 'PEPS TELUR ASIN', '8000', 'pepestelurasin.jpeg', 'PEPES TELUR ASIN+C[2]C:C[1]'),
(21, 4, 7, 'PERKEDEL KENTANG', '2500', 'perkedel.jpeg', 'PERKEDEL KENTANG'),
(22, 4, 7, 'RENDANG DANGING', '11000', 'rendangdaging.jpeg', 'HARGA INI UNTUK 1 POTONG DAGING'),
(25, 3, 8, 'SAMBEL TERASI', '2000', 'sambelterasi.jpeg', 'SATU KALI SENDOK MAKAN'),
(26, 4, 8, 'SATE ATI AMPELA', '4000', 'sateatiampela.jpeg', 'HARGA UNTUK 1 TUSUK'),
(27, 4, 8, 'SATE USUS AYAM', '3000', 'sateusus.jpeg', 'HARGA UNTUK 1 TUSUK'),
(28, 3, 8, 'SATE KAMBING', '60000', 'satekambing.jpeg', '10 TUSUK /SETENGAH KODI'),
(29, 2, 7, 'SAYUR ASEM', '5000', 'sayurasem.jpeg', 'UNTUK 1 PORSI'),
(30, 2, 7, 'SAYUR DAUN SINGKON', '5000', 'sayurdaunsingkong.jpeg', 'UNTUK 1 PORSI'),
(33, 2, 6, 'SUP AYAM', '10000', 'supayam.jpeg', 'UNTUK 1 PORSI'),
(34, 3, 6, 'TAHU GORENG', '2000', 'tahu.jpeg ', '1 TAHU GORENG'),
(35, 2, 6, 'TEH MANIS ANGET', '4000', 'tehmanisanget.jpeg', '1 GELAS TEH MANIS ANGET'),
(41, 4, 3, 'TUMIS TAHU TOGE', '5000', 'tumistahutoge.jpeg', '1 TUMIS TAHU TOGE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `total_transaksi` varchar(15) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `cash` varchar(15) NOT NULL,
  `kartu_kredit` varchar(20) NOT NULL,
  `no_kartu_kredit` varchar(30) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE `notif` (
  `id_notif` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `notif` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_plggn` varchar(125) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(125) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ttl` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_plggn`, `username`, `password`, `email`, `no_hp`, `ttl`, `alamat`, `photo`) VALUES
(1, 'Uci Sunengasih', 'uci54', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 'Uci_Sunengasih@gmail.com', '88706686653', 'Brebes, 21 September 2001', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', 'foto_38.jpg'),
(38, 'Muhammad Ridho', 'jennvo', '$2y$10$LehRW1FUOh.fV00mnpC.OOKp69h/.AxgwvM9N4763eRG/mf4Lxqfa', 'rdofx91@gmail.com', '089832321221', 'Mempawahni, 01/29/2004', 'Mempawah Timur,Jln Bardan Nad', 'foto_38.jpg'),
(39, 'Zandi', 'jancor', '$2y$10$EA/G8/lrkCBvBel38dMxXusro1SGg2fPKS8pZuU2Tl6d92hrtmLaG', 'readdpeola@gmail.com', '08964438221', 'Mempawah, 2024-05-13', 'Mempawah Ntah dimane', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_layanan` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_layanan`, `pesan`, `nama`, `email`, `no_hp`, `created_at`) VALUES
(1, 'oederede', 'Muhammad Ridho Adhari', 'user1@gmail.com', '45645655544', '2024-06-09 12:30:19'),
(2, 'asedede', 'Muhammad Ridho', 'rdofx99@gmail.com', '45645655544', '2024-06-09 12:31:19'),
(3, 'wrqigdsxad', 'Muhammad Ridho AS', 'manabolehbro@gmail.com', '45645655544', '2024-06-09 12:32:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` varchar(30) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `alamat_detail` varchar(125) NOT NULL,
  `ongkir` varchar(15) NOT NULL,
  `status_order` int(11) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `metode_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_pelanggan`, `tgl_transaksi`, `total_bayar`, `alamat_detail`, `ongkir`, `status_order`, `status_bayar`, `metode_bayar`) VALUES
(108, 1, 38, '2024-03-14', '19500', 'Mempawah Timur,Jln Bardan Nad', '10000', 0, 0, 2),
(109, 1, 38, '2024-05-14', '25000', 'Mempawah Timur,Jln Bardan Nad', '5000', 1, 0, 1),
(110, 1, 38, '2024-04-20', '19500', 'Mempawah Timur,Jln Bardan Nad', '10000', 4, 0, 1),
(111, 1, 1, '2024-05-24', '19500', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', '10000', 4, 0, 1),
(112, 3, 38, '2024-05-30', '20000', 'Mempawah Timur,Jln Bardan Nad', '10000', 1, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `rating` int(11) NOT NULL,
  `time_ulasan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `email`, `no_hp`, `photo`, `deskripsi`, `username`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Toko Petir', 'Kuningan', 'petirnyabangkuh@gmail.com', '089887656545', 'foto_1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur dignissimos assumenda tempora consequuntur temporibus quia, impedit nisi nobis qui, molestias expedita?\r\n', 'admin', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 1, '2024-05-31 16:02:47', '2024-06-05 13:28:56'),
(3, 'ALAW', 'Kuningan, Jawa Barat', 'alawmenyala@gmail.com', '089987656543', 'default.jpg', '', 'pemilik', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 0, '2024-05-31 16:02:47', '2024-05-31 16:02:47'),
(6, 'Muhammad Ridho', 'Mempawah Timur,Jln Bardan Nad', 'rdofx91@gmail.com', '089832321221', 'foto_38.jpg', '', 'jennvo', '$2y$10$LehRW1FUOh.fV00mnpC.OOKp69h/.AxgwvM9N4763eRG/mf4Lxqfa', 0, '2024-06-01 18:37:08', '2024-06-09 12:02:51'),
(7, 'Uci Sunengasih', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', 'Uci_Sunengasih@gmail.com', '88706686653', '', 'Ntah Gabisa', 'uci54', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 1, '2024-06-04 11:38:10', '2024-06-04 11:39:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `balasan_ulasan`
--
ALTER TABLE `balasan_ulasan`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indeks untuk tabel `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indeks untuk tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`kode_promo`);

--
-- Indeks untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indeks untuk tabel `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `balasan_ulasan`
--
ALTER TABLE `balasan_ulasan`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `kode_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `notif`
--
ALTER TABLE `notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
