-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2024 pada 03.46
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
-- Database: `rasaransel`
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
('6mofudj9ar0c40odjsh6uqq8a8jmj2a2', '::1', 1719162428, '__ci_last_regenerate|i:1719162204;', ''),
('b6p7kr67v2q80th2644cg8p30acdm3u2', '::1', 1719175654, '__ci_last_regenerate|i:1719175459;id_pelanggan|s:2:\"41\";username|s:7:\"barlong\";nama_pelanggan|s:13:\"Marlong Black\";email|s:21:\"user1122211@gmail.com\";photo|s:11:\"foto_13.jpg\";logged_in|b:1;id|s:2:\"13\";nama|s:11:\"maklong abs\";is_active|s:1:\"1\";is_merchant|b:1;', ''),
('fi47u6b3tid7po79lo5r2095mk79vi3j', '::1', 1719175090, '__ci_last_regenerate|i:1719174855;id_pelanggan|s:2:\"41\";username|s:7:\"barlong\";nama_pelanggan|s:13:\"Marlong Black\";email|s:21:\"user1122211@gmail.com\";photo|s:11:\"foto_13.jpg\";logged_in|b:1;id|s:2:\"13\";nama|s:11:\"maklong abs\";is_active|s:1:\"1\";is_merchant|b:1;', '');

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

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`kode_promo`, `id_produk`, `nama_promo`, `diskon`, `tgl_diskon`) VALUES
(3, 1, 'promo gacor', 50, '2024-06-22');

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
(1, 1, 1, 'Nasi Kotak Ayam Goreng', '13000', 'Jual_Nasi_Kotak_Enak_Sidoarjo.jpg', '<div>&nbsp;Nasi yang dimasak dengan santan, memberikan rasa gurih yang khas.&nbsp;</div>'),
(2, 3, 4, 'AYAM Goreng', '40000', 'ayamgoreng.jpeg', '<div>Ayam goreng ungkep</div>'),
(3, 6, 4, 'CAK IKAN Mujaer', '10000', 'cakikanjaer.jpeg', '<div>PECAK IKAN MUJAER&nbsp;</div>'),
(4, 6, 4, 'CAPCAY', '3000', 'capcay.jpeg', '<div>HARGA 2 kali centong</div>'),
(7, 3, 4, 'Ikan Garang ASEM', '25000', 'ikangarangasam.jpeg', '<div>IKAN laut dan ikan tambak</div>'),
(8, 8, 4, 'IKAN GORENG MUJAER', '7000', 'ikangoreng.jpeg', '<div>IKAN GORENG MUJAER</div>'),
(13, 8, 4, 'OREG TEMPE', '20000', 'oregtempe.jpeg', '<div>sambal tempe</div>'),
(14, 3, 1, 'PAKET BOX NASI 1', '25000', 'paketnasi1.jpeg', '<div>MENU CHATERING untuk ACARA</div>'),
(16, 3, 1, 'PAKET BOX NASI 3', '30000', 'paketnasi3.jpeg', '<div>MENU CHATERING untuk ACARA</div>'),
(18, 3, 4, 'PEPES AYAM', '40000', 'pepesayam.jpeg', '<div>PEPES AYAM</div>'),
(19, 3, 4, 'PEPS IKAN', '35000', 'pepesikan.jpeg', '<div>PEPES IKAN SAMBAL</div>'),
(21, 8, 4, 'Bakwan', '1000', 'perkedel.jpeg', '<div>Bakwan goreng</div>'),
(22, 8, 4, 'RENDANG DAGING', '11000', 'rendangdaging.jpeg', '<div>HARGA INI UNTUK 1 POTONG DAGING</div>'),
(25, 3, 4, 'SAMBEL TERASI', '2000', 'sambelterasi.jpeg', '<div>SATU KALI SENDOK MAKAN</div>'),
(26, 6, 4, 'SATE ATI AMPELA', '4000', 'sateatiampela.jpeg', '<div>HARGA UNTUK 1 TUSUK</div>'),
(27, 8, 4, 'SATE USUS AYAM', '30000', 'sateusus.jpeg', '<div>&nbsp;Hidangan populer&nbsp;</div>'),
(28, 3, 4, 'SATE KAMBING', '60000', 'satekambing.jpeg', '<div>10 TUSUK /SETENGAH KODI</div>'),
(29, 6, 4, 'SAYUR ASEM', '5000', 'sayurasem.jpeg', '<div>UNTUK 1 PORSI</div>'),
(30, 1, 4, 'SAYUR DAUN SINGKON', '5000', 'sayurdaunsingkong.jpeg', '<div>UNTUK 1 PORSI</div>'),
(33, 6, 4, 'SUP AYAM', '10000', 'supayam.jpeg', '<div>UNTUK 1 PORSI</div>'),
(34, 3, 4, 'TAHU GORENG', '2000', 'tahu.jpeg ', '<div>1 TAHU GORENG</div>'),
(35, 8, 2, 'TEH MANIS ANGET', '4000', 'tehmanisanget.jpeg', '<div>1 GELAS TEH MANIS ANGET</div>'),
(41, 8, 4, 'TUMIS TAHU TOGE', '5000', 'tumistahutoge.jpeg', '<div>1 TUMIS TAHU TOGE</div>'),
(43, 8, 0, 'ES KAPYOR', '15000', 'WhatsApp_Image_2024-06-09_at_23_17_28.jpeg', '<div>Minuman segar</div>'),
(44, 8, 2, 'ES LEMON TEA', '20000', 'WhatsApp_Image_2024-06-09_at_23_14_35.jpeg', '<div>&nbsp;Minuman ini terkenal dengan rasa segar dan sedikit asam, yang membuatnya menjadi pilihan favorit untuk dinikmati dalam keadaan dingin maupun hangat&nbsp;</div>'),
(45, 8, 1, 'Nasi lalapan', '30000', 'Nasi_Lalapan_Ayam_Goreng_Telur2.jpg', '<div>&nbsp;Hidangan ini populer karena kesederhanaannya, rasa segarnya, dan kelezatan sambalnya yang pedas dan menggugah selera. Berikut adalah deskripsi lebih rinci tentang nasi lalapan</div>'),
(46, 8, 1, 'Nasi Lalapan Ayam lalapan', '35000', 'Nasi_Lalapan_Ayam_Bakar.jpg', '<div>&nbsp;Nasi lalapan ayam adalah hidangan khas Indonesia yang terdiri dari nasi putih, ayam goreng atau bakar, berbagai jenis sayuran segar (lalapan), dan sambal pedas sebagai pelengkap. Hidangan ini dikenal dengan kesederhanaannya namun menawarkan rasa yang kaya dan segar.&nbsp;</div>'),
(47, 8, 3, 'Cake stawberry', '90000', '3030c64942a6ba7877fc507b4f2acb90.jpg', '<div>&nbsp;Strawberry cake adalah pilihan sempurna bagi pecinta stroberi dan mereka yang mencari kue yang tidak hanya enak tetapi juga memikat mata.&nbsp;</div>'),
(49, 8, 3, 'Butterfly cake', '78000', '698955b9f97e2eb3f0087e1888fe6a1e1.jpg', '<div>&nbsp;Butterfly cake adalah jenis kue yang sangat menarik dan cantik, terutama disukai oleh anak-anak dan cocok untuk berbagai acara khusus seperti ulang tahun, pesta, atau perayaan lainnya.&nbsp;</div>'),
(50, 8, 8, 'Tumpeng mini', '115000', '9647e12ab407b9e7e138180aa800ead5.jpg', '<div>Tumpeng mini adalah versi miniatur dari tumpeng tradisional Indonesia, sebuah hidangan yang biasanya disajikan dalam acara-acara khusus dan perayaan sebagai simbol keberkahan dan kesuksesan.</div>'),
(51, 8, 5, 'Snack Box', '30000', '4a457ff01a86226ce98b7b6d7f54612b.jpg', '<div>&nbsp;Snack box adalah kemasan atau kotak berisi berbagai jenis makanan ringan atau camilan yang biasanya disajikan dalam satu paket.&nbsp;</div>'),
(52, 1, 4, 'Sop Ayam', '25000', 'f88fa36ce645455cee54dc83803f843c.jpg', '<div>&nbsp;sop ayam sering disajikan sebagai hidangan utama atau sebagai makanan pembuka.&nbsp;</div>'),
(53, 8, 4, 'Sop Jagung', '20000', 'e56c8c5fa1ed42932f08218fa2203a7b.jpg', '<div>&nbsp;Sop jagung adalah hidangan sup yang lezat dan menyegarkan yang terbuat dari jagung segar dan bahan-bahan lainnya.&nbsp;</div>'),
(54, 3, 3, 'CAKE MINI', '10000', '6764a23712648c4db8370b1c0f18ebee.jpg', '<div>Cake mini stawberry</div>'),
(55, 3, 3, 'Bento', '35000', 'd764167dadbfbfabfd18d7bde8586b81.jpg', '<div>&nbsp;Bento cake adalah kue yang diinspirasi oleh konsep bento Jepang, yaitu kemasan makanan dalam kotak untuk dijadikan bekal atau hidangan portabel.&nbsp;</div>'),
(56, 3, 1, 'Nasi Kuning Ayam Bumbu Rujak', '40000', '2fe77d8f042616590f7df986b743bee5.jpg', '<div>&nbsp;tambahan bumbu kunyit dan santan</div>'),
(57, 1, 1, 'Nasi Kotak Ayam Goreng', '15000', '3f4af3c4b3485c77e7e2e66c91990a3b.jpg', '<div>persatu kotak</div>'),
(58, 1, 3, 'Cake Coklat ', '80000', 'c6309eb1a1cd2042f6ad7d7c0aab9986.jpg', '<div>coklat lumer</div>'),
(59, 1, 3, 'Kue ulang Tahun stawberry', '80000', '7a2c28c58f70b88e6fed0008e0121771.jpg', '<div>Stawberry coklat</div>'),
(60, 1, 2, 'ES LEMON', '25000', '77ee351fc940298a12c93a531081d537.jpg', '<div>Minuman Segar</div>'),
(61, 1, 2, 'ES MOKA', '20000', '803c245da7e21a30ae89da5a5435f850.jpg', '<div>Minuman Eskrim&nbsp;</div>'),
(62, 1, 0, 'Rendang', '20000', '6bcdfc556fa4e5f45ab0e5471faa4d1a.jpg', '<div>Perpotong</div>'),
(63, 1, 4, 'Lele Bakar', '30000', '9e5ef63254d9f9e86ff3678ee30ea8f1.jpg', '<div>perporsi</div>'),
(64, 1, 5, 'Roti', '25000', '60705a7c3b606e1e077131a876341911.jpg', '<div>perbox</div>'),
(65, 6, 1, 'Nasi kotak', '15000', '1f1564fa1c485e99e5bf762f245e0d80.jpg', '<div>Harga satuan</div>'),
(66, 6, 1, 'Nasi ayam bakar', '25000', '36a5e7b06ca2a362174e8a917adf148c.jpg', '<div>perkotak</div>'),
(67, 6, 3, 'Kue Ulang tahun Brownies', '75000', '976cb76011a41c25a4362560375e3bbb.jpg', '<div>Coklat Lumer</div>'),
(68, 6, 2, 'Kue ulang tahun spongebob', '60000', '549a8618b8c5f8316c4c0477f680ac41.jpg', '<div>harga Satuan</div>'),
(69, 6, 2, 'Coffe Jelly', '17000', '541239994f2c0b77ace3d23de95e44d3.jpg', '<div>Minuman Segar</div>'),
(70, 6, 7, 'Salad Sayur', '25000', 'WhatsApp_Image_2024-06-10_at_08_59_57_(2).jpeg', '<div>Setiap menu disusun dari bahan-bahan alami, segar, dan berkualitas tinggi, bebas dari pengawet dan bahan tambahan berbahaya</div>'),
(71, 6, 7, 'Salmon Fressss', '30000', 'WhatsApp_Image_2024-06-10_at_08_59_57_(1).jpeg', '<div>Setiap menu disusun dari bahan-bahan alami, segar, dan berkualitas tinggi, bebas dari pengawet dan bahan tambahan berbahaya</div>'),
(72, 6, 7, 'Dori Salad egg', '40000', 'WhatsApp_Image_2024-06-10_at_08_59_56.jpeg', '<div>Setiap menu disusun dari bahan-bahan alami, segar, dan berkualitas tinggi, bebas dari pengawet dan bahan tambahan berbahaya</div>'),
(73, 6, 7, 'Chicken Egg', '50000', 'WhatsApp_Image_2024-06-10_at_08_59_56_(2).jpeg', '<div>Setiap menu disusun dari bahan-bahan alami, segar, dan berkualitas tinggi, bebas dari pengawet dan bahan tambahan berbahaya</div>'),
(74, 6, 6, 'Nasi Ayam Premium', '250000', 'WhatsApp_Image_2024-06-10_at_09_00_46.jpeg', '<div>Kami menyediakan layanan katering dengan menu lezat dan beragam untuk segala acara. Setiap hidangan dibuat dari bahan segar dan berkualitas tinggi, menjamin kepuasan dan kenikmatan di setiap gigitan. Pilihan sempurna untuk pesta, pertemuan, dan acara spesial Anda.</div>'),
(75, 6, 6, 'Chiken Fries', '500000', 'WhatsApp_Image_2024-06-10_at_09_00_46_(1).jpeg', '<div>Kami menyediakan layanan katering dengan menu lezat dan beragam untuk segala acara. Setiap hidangan dibuat dari bahan segar dan berkualitas tinggi, menjamin kepuasan dan kenikmatan di setiap gigitan. Pilihan sempurna untuk pesta, pertemuan, dan acara spesial Anda.</div>'),
(76, 8, 8, 'Tumpeng premium', '250000', 'WhatsApp_Image_2024-06-10_at_08_48_17_(1).jpeg', '<div>&nbsp;Tumpeng premium adalah varian mewah dari tumpeng tradisional, disajikan dengan nasi kuning berbentuk kerucut dan aneka lauk istimewa seperti udang galah, rendang sapi, ayam bakar, dan sate lilit&nbsp;</div>'),
(77, 8, 8, 'Tumpeng Warna Warni', '150000', 'WhatsApp_Image_2024-06-10_at_08_48_17_(2).jpeg', '<div>&nbsp;Tumpeng warna-warni adalah varian tumpeng dengan nasi berbentuk kerucut dalam berbagai warna cerah dari pewarna alami. Dihidangkan dengan lauk-pauk seperti ayam goreng, telur dadar, dan sayuran segar, tumpeng ini cocok untuk acara spesial yang ingin tampil lebih meriah dan menarik.&nbsp;</div>'),
(78, 8, 8, 'Tumpeng Box', '50000', 'WhatsApp_Image_2024-06-10_at_08_48_17.jpeg', '<div>&nbsp;Tumpeng box adalah versi praktis dari tumpeng tradisional yang disajikan dalam kotak individu. Nasi kuning berbentuk kerucut kecil disertai dengan lauk-pauk seperti ayam goreng, telur dadar, perkedel, dan sayuran&nbsp;</div>'),
(79, 9, 0, 'Sabi', '30000000', '10183199_4386408.jpg', '<div>makakan bertipe</div>'),
(80, 9, 6, 'fdsfdf', '2000000', '16219805_2005_i602_015_shoe_care_flat.jpg', '<div>gj</div>');

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
  `photo` varchar(100) DEFAULT NULL,
  `kd_merchant` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_plggn`, `username`, `password`, `email`, `no_hp`, `ttl`, `alamat`, `photo`, `kd_merchant`, `created_at`, `updated_at`) VALUES
(1, 'Uci Sunengasih', 'uci54', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 'Uci_Sunengasih@gmail.com', '88706686653', 'Brebes, 09/21/2001', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', 'foto_11.jpg', '', '2024-06-11 09:29:18', '2024-06-18 19:39:56'),
(38, 'Muhammad Ridho', 'jennvo', '$2y$10$LehRW1FUOh.fV00mnpC.OOKp69h/.AxgwvM9N4763eRG/mf4Lxqfa', 'rdofx91@gmail.com', '089832321221', 'Mempawahni, 01/29/2004', 'Mempawah Timur,Jln Bardan Nad', 'foto_38.jpg', '', '2024-06-08 09:29:18', '2024-06-11 09:58:49'),
(39, 'Zandi', 'jancor', '$2y$10$EA/G8/lrkCBvBel38dMxXusro1SGg2fPKS8pZuU2Tl6d92hrtmLaG', 'readdpeola@gmail.com', '08964438221', 'Mempawah, 2024-05-13', 'Mempawah Ntah dimane', 'default.png', '', '2024-05-09 09:29:18', '2024-06-11 10:02:43'),
(40, 'Muhammad Ridho', 'joynii', '$2y$10$EQ22a/wzE8OePARhX1nsB.Nv5TLgcswObRP5bq6/2NGEFUp9EL/oi', 'user11@gmail.com', '45645655544', 'Mempawahni, 2024-06-09', 'Mempawah Timur,Jln Bardan Nadi', 'default.png', '', '2024-06-11 09:29:18', '2024-06-11 09:29:18'),
(41, 'Marlong Black', 'barlong', '$2y$10$s.aebqGRGjuOA8xYMQiKle9AXTXyoPc7CcGmmLhASQbj9KEG7hrnq', 'user1122211@gmail.com', '1234567890877', 'Mempawah, 2024-06-22', 'Ntah gatau jugala', 'foto_13.jpg', 'MRC001', '2024-06-22 13:51:04', '2024-06-22 22:18:11');

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
  `nama_user` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `kd_merchant` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nama_user`, `alamat`, `email`, `no_hp`, `photo`, `deskripsi`, `username`, `password`, `is_active`, `kd_merchant`, `created_at`, `updated_at`) VALUES
(1, 'Toko Petir', '', 'Kuningan', 'petirnyabangkuh@gmail.com', '089887656545', 'foto_1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur dignissimos assumenda tempora consequuntur temporibus quia, impedit nisi nobis qui, molestias expedita?\r\n', 'admin', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 1, NULL, '2024-05-31 16:02:47', '2024-06-05 13:28:56'),
(3, 'ALAW', '', 'Kuningan, Jawa Barat', 'alawmenyala@gmail.com', '089987656543', 'default.jpg', '', 'pemilik', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 0, NULL, '2024-05-31 16:02:47', '2024-05-31 16:02:47'),
(6, 'Muhammad Ridho', '', 'Mempawah Timur,Jln Bardan Nad', 'rdofx91@gmail.com', '089832321221', 'foto_38.jpg', '', 'jennvo', '$2y$10$LehRW1FUOh.fV00mnpC.OOKp69h/.AxgwvM9N4763eRG/mf4Lxqfa', 0, NULL, '2024-06-01 18:37:08', '2024-06-09 12:02:51'),
(7, 'Uci Sunengasih', '', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', 'Uci_Sunengasih@gmail.com', '88706686653', '', 'Ntah Gabisa', 'uci54', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', 1, NULL, '2024-06-04 11:38:10', '2024-06-04 11:39:14'),
(13, 'maklong abs', 'Marlong Black', 'Ntah gatau jugala', 'user1122211@gmail.com', '1234567890877', 'foto_13.jpg', 'asdsad', 'barlong', '$2y$10$s.aebqGRGjuOA8xYMQiKle9AXTXyoPc7CcGmmLhASQbj9KEG7hrnq', 1, 'MRC001', '2024-06-22 20:51:29', '2024-06-22 22:18:11');

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
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `kd_merchant` (`kd_merchant`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `kd_merchant` (`kd_merchant`);

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
  MODIFY `kode_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
