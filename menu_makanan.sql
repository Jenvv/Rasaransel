-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2024 pada 15.29
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
-- Database: `berber`
--

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
(78, 8, 8, 'Tumpeng Box', '50000', 'WhatsApp_Image_2024-06-10_at_08_48_17.jpeg', '<div>&nbsp;Tumpeng box adalah versi praktis dari tumpeng tradisional yang disajikan dalam kotak individu. Nasi kuning berbentuk kerucut kecil disertai dengan lauk-pauk seperti ayam goreng, telur dadar, perkedel, dan sayuran&nbsp;</div>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
