-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2024 pada 15.52
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

--
-- Dumping data untuk tabel `balasan_ulasan`
--

INSERT INTO `balasan_ulasan` (`id_balasan`, `id_user`, `id_ulasan`, `time`, `isi_balasan`) VALUES
(1, 1, 1, '2023-10-04 01:20:24', 'Terimakasih...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `pelanggan_send` text NOT NULL,
  `admin_send` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `pelanggan_send`, `admin_send`, `time`) VALUES
(1, 1, 'hai admin', '0', '2023-10-25 22:29:58'),
(2, 1, '0', 'halo juga', '2023-10-26 13:31:33'),
(3, 1, '0', 'ada yang bisa dibantu?', '2023-10-26 13:32:35');

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
(1, 1, 14, 15),
(2, 2, 21, 8),
(3, 3, 3, 12),
(4, 4, 38, 13),
(5, 5, 11, 2),
(6, 6, 40, 5),
(7, 7, 14, 4),
(8, 8, 29, 3),
(9, 9, 41, 6),
(10, 10, 23, 5),
(11, 11, 10, 5),
(12, 12, 26, 6),
(13, 13, 40, 5),
(14, 14, 8, 8),
(15, 15, 20, 7),
(16, 16, 18, 1),
(17, 17, 19, 8),
(18, 18, 1, 14),
(19, 19, 8, 9),
(20, 20, 19, 13),
(21, 21, 38, 11),
(22, 22, 30, 13),
(23, 23, 4, 2),
(24, 24, 41, 4),
(25, 25, 17, 10),
(26, 26, 2, 13),
(27, 27, 37, 9),
(28, 28, 26, 6),
(29, 29, 4, 8),
(30, 30, 10, 3),
(31, 31, 11, 3),
(32, 32, 41, 14),
(33, 33, 10, 2),
(34, 34, 10, 6),
(35, 35, 22, 5),
(36, 36, 25, 15),
(37, 37, 21, 6),
(38, 38, 36, 5),
(39, 39, 32, 15),
(40, 40, 12, 6),
(41, 41, 25, 4),
(42, 42, 22, 5),
(43, 43, 17, 13),
(44, 44, 21, 4),
(45, 45, 4, 4),
(46, 46, 24, 12),
(47, 47, 26, 2),
(48, 48, 34, 7),
(49, 49, 16, 8),
(50, 50, 34, 15),
(51, 51, 34, 15),
(52, 52, 8, 13),
(53, 53, 36, 7),
(54, 54, 18, 14),
(55, 55, 22, 7),
(56, 56, 33, 4),
(57, 57, 33, 7),
(58, 58, 21, 10),
(59, 59, 18, 13),
(60, 60, 9, 3),
(61, 61, 14, 8),
(62, 62, 32, 6),
(63, 63, 8, 7),
(64, 64, 41, 15),
(65, 65, 32, 10),
(66, 66, 21, 15),
(67, 67, 27, 13),
(68, 68, 19, 1),
(69, 69, 2, 11),
(70, 70, 35, 6),
(71, 71, 31, 7),
(72, 72, 22, 1),
(73, 73, 27, 3),
(74, 74, 5, 5),
(75, 75, 2, 7),
(76, 76, 23, 5),
(77, 77, 23, 7),
(78, 78, 14, 6),
(79, 79, 30, 2),
(80, 80, 15, 2),
(81, 81, 32, 1),
(82, 82, 23, 8),
(83, 83, 26, 1),
(84, 84, 18, 6),
(85, 85, 38, 4),
(86, 86, 5, 5),
(87, 87, 14, 3),
(88, 88, 40, 10),
(89, 89, 2, 10),
(90, 90, 12, 3),
(91, 91, 35, 14),
(92, 92, 39, 14),
(93, 93, 4, 9),
(94, 94, 5, 8),
(95, 95, 29, 5),
(96, 96, 15, 15),
(97, 97, 22, 8),
(98, 98, 25, 8),
(99, 99, 7, 13),
(100, 100, 34, 13),
(101, 101, 28, 2),
(102, 102, 33, 1),
(103, 103, 21, 2),
(104, 104, 11, 6),
(105, 105, 5, 13),
(106, 106, 25, 14),
(107, 107, 12, 10),
(108, 108, 19, 5),
(109, 109, 41, 10),
(110, 110, 2, 1),
(111, 111, 6, 14),
(112, 112, 38, 2),
(113, 113, 10, 6),
(114, 114, 29, 13),
(115, 115, 9, 4),
(116, 116, 33, 8),
(117, 117, 14, 12),
(118, 118, 32, 13),
(119, 119, 22, 3),
(120, 120, 37, 8),
(121, 121, 1, 15),
(122, 122, 38, 1),
(123, 123, 5, 14),
(124, 124, 1, 6),
(125, 125, 12, 7),
(126, 126, 28, 14),
(127, 127, 20, 2),
(128, 128, 38, 8),
(129, 129, 10, 3),
(130, 130, 2, 9),
(131, 131, 17, 8),
(132, 132, 6, 11),
(133, 133, 12, 12),
(134, 134, 13, 1),
(135, 135, 19, 5),
(136, 136, 11, 12),
(137, 137, 41, 2),
(138, 138, 36, 1),
(139, 139, 24, 11),
(140, 140, 39, 8),
(141, 141, 25, 3),
(142, 142, 30, 14),
(143, 143, 2, 14),
(144, 144, 18, 5),
(145, 145, 30, 15),
(146, 146, 14, 5),
(147, 147, 14, 6),
(148, 148, 2, 13),
(149, 149, 25, 7),
(150, 150, 25, 14),
(151, 151, 38, 15),
(152, 152, 23, 7),
(153, 153, 41, 4),
(154, 154, 8, 8),
(155, 155, 18, 7),
(156, 156, 12, 10),
(157, 157, 33, 9),
(158, 158, 13, 14),
(159, 159, 14, 5),
(160, 160, 34, 11),
(161, 161, 39, 1),
(162, 162, 7, 12),
(163, 163, 31, 9),
(164, 164, 40, 2),
(165, 165, 36, 14),
(166, 166, 8, 11),
(167, 167, 3, 7),
(168, 168, 14, 13),
(169, 169, 33, 3),
(170, 170, 3, 14),
(171, 171, 23, 5),
(172, 172, 3, 5),
(173, 173, 41, 2),
(174, 174, 28, 6),
(175, 175, 14, 1),
(176, 176, 8, 13),
(177, 177, 28, 3),
(178, 178, 10, 8),
(179, 179, 18, 7),
(180, 180, 11, 8),
(181, 181, 3, 10),
(182, 182, 9, 12),
(183, 183, 39, 12),
(184, 184, 7, 6),
(185, 185, 35, 10),
(186, 186, 31, 14),
(187, 187, 7, 1),
(188, 188, 12, 14),
(189, 189, 6, 6),
(190, 190, 8, 8),
(191, 191, 27, 10),
(192, 192, 10, 2),
(193, 193, 7, 7),
(194, 194, 34, 8),
(195, 195, 5, 12),
(196, 196, 27, 9),
(197, 197, 34, 8),
(198, 198, 34, 11),
(199, 199, 24, 1),
(200, 200, 28, 6),
(201, 201, 3, 3),
(202, 202, 20, 11),
(203, 203, 28, 15),
(204, 204, 21, 12),
(205, 205, 22, 2),
(206, 206, 17, 13),
(207, 207, 33, 4),
(208, 208, 35, 14),
(209, 209, 5, 1),
(210, 210, 36, 15),
(211, 211, 24, 15),
(212, 212, 4, 6),
(213, 213, 23, 3),
(214, 214, 32, 12),
(215, 215, 34, 13),
(216, 216, 15, 12),
(217, 217, 6, 2),
(218, 218, 32, 5),
(219, 219, 36, 4),
(220, 220, 22, 6),
(221, 221, 25, 14),
(222, 222, 36, 13),
(223, 223, 23, 2),
(224, 224, 29, 12),
(225, 225, 35, 2),
(226, 226, 3, 10),
(227, 227, 32, 1),
(228, 228, 37, 2),
(229, 229, 5, 10),
(230, 230, 6, 15),
(231, 231, 34, 9),
(232, 232, 12, 3),
(233, 233, 7, 14),
(234, 234, 14, 14),
(235, 235, 23, 2),
(236, 236, 37, 11),
(237, 237, 17, 5),
(238, 238, 3, 14),
(239, 239, 41, 3),
(240, 240, 23, 15),
(241, 241, 5, 13),
(242, 242, 28, 12),
(243, 243, 35, 13),
(244, 244, 8, 1),
(245, 245, 38, 2),
(246, 246, 14, 8),
(247, 247, 29, 15),
(248, 248, 36, 9),
(249, 249, 8, 11),
(250, 250, 13, 7),
(251, 251, 19, 8),
(252, 252, 36, 10),
(253, 253, 19, 13),
(254, 254, 22, 8),
(255, 255, 19, 5),
(256, 256, 29, 14),
(257, 257, 13, 10),
(258, 258, 3, 1),
(259, 259, 8, 3),
(260, 260, 41, 2),
(261, 261, 39, 13),
(262, 262, 41, 13),
(263, 263, 3, 9),
(264, 264, 32, 6),
(265, 265, 17, 3),
(266, 266, 6, 2),
(267, 267, 34, 2),
(268, 268, 27, 15),
(269, 269, 38, 11),
(270, 270, 16, 7),
(271, 271, 28, 7),
(272, 272, 15, 3),
(273, 273, 14, 6),
(274, 274, 36, 10),
(275, 275, 34, 11),
(276, 276, 12, 8),
(277, 277, 12, 10),
(278, 278, 14, 3),
(279, 279, 20, 3),
(280, 280, 17, 14),
(281, 281, 23, 1),
(282, 282, 8, 7),
(283, 283, 21, 4),
(284, 284, 4, 10),
(285, 285, 20, 2),
(286, 286, 25, 1),
(287, 287, 35, 4),
(288, 288, 37, 13),
(289, 289, 13, 7),
(290, 290, 27, 15),
(291, 291, 12, 3),
(292, 292, 36, 10),
(293, 293, 12, 9),
(294, 294, 11, 13),
(295, 295, 19, 13),
(296, 296, 38, 6),
(297, 297, 19, 8),
(298, 298, 4, 10),
(299, 299, 16, 1),
(300, 300, 39, 5),
(301, 301, 1, 5),
(302, 302, 24, 6),
(303, 303, 27, 9),
(304, 304, 6, 3),
(305, 305, 19, 7),
(306, 306, 5, 10),
(307, 307, 16, 14),
(308, 308, 12, 12),
(309, 309, 11, 11),
(310, 310, 29, 2),
(311, 311, 12, 2),
(312, 312, 1, 6),
(313, 313, 35, 5),
(314, 314, 10, 8),
(315, 315, 19, 1),
(316, 316, 29, 13),
(317, 317, 17, 11),
(318, 318, 40, 10),
(319, 319, 8, 14),
(320, 320, 1, 15),
(321, 321, 37, 9),
(322, 322, 13, 13),
(323, 323, 22, 4),
(324, 324, 18, 15),
(325, 325, 3, 10),
(326, 326, 22, 7),
(327, 327, 13, 3),
(328, 328, 34, 6),
(329, 329, 26, 14),
(330, 330, 28, 8),
(331, 331, 28, 4),
(332, 332, 34, 14),
(333, 333, 11, 5),
(334, 334, 20, 3),
(335, 335, 25, 11),
(336, 336, 26, 15),
(337, 337, 23, 11),
(338, 338, 40, 14),
(339, 339, 8, 7),
(340, 340, 41, 9),
(341, 341, 4, 7),
(342, 342, 14, 1),
(343, 343, 23, 6),
(344, 344, 27, 8),
(345, 345, 24, 12),
(346, 346, 14, 12),
(347, 347, 9, 15),
(348, 348, 24, 1),
(349, 349, 33, 5),
(350, 350, 1, 8),
(351, 351, 6, 5),
(352, 352, 3, 10),
(353, 353, 18, 6),
(354, 354, 1, 6),
(355, 355, 15, 4),
(356, 356, 5, 6),
(357, 357, 6, 8),
(358, 358, 34, 3),
(359, 359, 19, 8),
(360, 360, 28, 8),
(361, 361, 25, 15),
(362, 362, 1, 11),
(363, 363, 7, 8),
(364, 364, 8, 5),
(365, 365, 10, 7),
(366, 366, 13, 12),
(367, 367, 38, 8),
(368, 368, 19, 8),
(369, 369, 35, 13),
(370, 370, 29, 13),
(371, 371, 2, 7),
(372, 372, 30, 5),
(373, 373, 7, 6),
(374, 374, 39, 13),
(375, 375, 19, 5),
(376, 376, 6, 9),
(377, 377, 9, 2),
(378, 378, 20, 8),
(379, 379, 6, 13),
(380, 380, 22, 1),
(381, 381, 9, 8),
(382, 382, 23, 12),
(383, 383, 6, 13),
(384, 384, 24, 7),
(385, 385, 11, 1),
(386, 386, 38, 9),
(387, 387, 6, 8),
(388, 388, 7, 3),
(389, 389, 27, 15),
(390, 390, 16, 10),
(391, 391, 37, 14),
(392, 392, 41, 4),
(393, 393, 36, 10),
(394, 394, 22, 4),
(395, 395, 33, 14),
(396, 396, 7, 12),
(397, 397, 28, 4),
(398, 398, 37, 3),
(399, 399, 19, 10),
(400, 400, 3, 4),
(401, 401, 9, 14),
(402, 402, 29, 3),
(403, 403, 3, 5),
(404, 404, 21, 11),
(405, 405, 2, 4),
(406, 406, 28, 6),
(407, 407, 37, 8),
(408, 408, 32, 5),
(409, 409, 6, 2),
(410, 410, 31, 14),
(411, 411, 8, 13),
(412, 412, 33, 15),
(413, 413, 39, 5),
(414, 414, 38, 3),
(415, 415, 22, 10),
(416, 416, 18, 4),
(417, 417, 40, 10),
(418, 418, 29, 6),
(419, 419, 41, 12),
(420, 420, 21, 1),
(421, 421, 27, 6),
(422, 422, 16, 1),
(423, 423, 32, 5),
(424, 424, 23, 10),
(425, 425, 20, 15),
(426, 426, 16, 9),
(427, 427, 38, 9),
(428, 428, 41, 15),
(429, 429, 15, 12),
(430, 430, 22, 5),
(431, 431, 18, 12),
(432, 432, 10, 5),
(433, 433, 21, 3),
(434, 434, 16, 13),
(435, 435, 30, 7),
(436, 436, 31, 9),
(437, 437, 8, 3),
(438, 438, 18, 15),
(439, 439, 28, 8),
(440, 440, 36, 13),
(441, 441, 6, 12),
(442, 442, 23, 8),
(443, 443, 1, 13),
(444, 444, 21, 11),
(445, 445, 28, 5),
(446, 446, 20, 7),
(447, 447, 30, 7),
(448, 448, 34, 3),
(449, 449, 14, 7),
(450, 450, 8, 5),
(451, 451, 7, 5),
(452, 452, 29, 2),
(453, 453, 8, 2),
(454, 454, 14, 12),
(455, 455, 8, 6),
(456, 456, 31, 2),
(457, 457, 6, 1),
(458, 458, 29, 9),
(459, 459, 23, 11),
(460, 460, 6, 4),
(461, 461, 26, 9),
(462, 462, 8, 5),
(463, 463, 13, 4),
(464, 464, 35, 10),
(465, 465, 15, 7),
(466, 466, 32, 5),
(467, 467, 35, 6),
(468, 468, 11, 4),
(469, 469, 20, 10),
(470, 470, 41, 13),
(471, 471, 1, 2),
(472, 472, 31, 5),
(473, 473, 13, 14),
(474, 474, 4, 13),
(475, 475, 30, 8),
(476, 476, 28, 8),
(477, 477, 6, 12),
(478, 478, 33, 13),
(479, 479, 34, 2),
(480, 480, 2, 2),
(481, 481, 27, 6),
(482, 482, 15, 5),
(483, 483, 9, 4),
(484, 484, 11, 9),
(485, 485, 8, 4),
(486, 486, 16, 1),
(487, 487, 30, 11),
(488, 488, 31, 13),
(489, 489, 29, 3),
(490, 490, 25, 9),
(491, 491, 6, 15),
(492, 492, 38, 14),
(493, 493, 41, 6),
(494, 494, 12, 1),
(495, 495, 27, 14),
(496, 496, 35, 10),
(497, 497, 12, 13),
(498, 498, 35, 12),
(499, 499, 2, 5),
(500, 500, 15, 15),
(501, 501, 20, 12),
(502, 502, 38, 9),
(503, 503, 12, 4),
(504, 504, 36, 15),
(505, 505, 16, 2),
(506, 506, 3, 5),
(507, 507, 10, 5),
(508, 508, 16, 3),
(509, 509, 33, 14),
(510, 510, 20, 4),
(511, 511, 33, 4),
(512, 512, 16, 9),
(513, 513, 37, 3),
(514, 514, 6, 10),
(515, 515, 19, 11),
(516, 516, 24, 10),
(517, 517, 23, 6),
(518, 518, 36, 11),
(519, 519, 41, 9),
(520, 520, 13, 9),
(521, 521, 41, 10),
(522, 522, 4, 5),
(523, 523, 22, 11),
(524, 524, 3, 14),
(525, 525, 3, 10),
(526, 526, 39, 13),
(527, 527, 31, 1),
(528, 528, 38, 4),
(529, 529, 11, 12),
(530, 530, 13, 7),
(531, 531, 23, 14),
(532, 532, 39, 9),
(533, 533, 39, 13),
(534, 534, 2, 8),
(535, 535, 11, 6),
(536, 536, 8, 13),
(537, 537, 2, 15),
(538, 538, 30, 12),
(539, 539, 8, 5),
(540, 540, 6, 6),
(541, 541, 17, 8),
(542, 542, 21, 9),
(543, 543, 15, 11),
(544, 544, 36, 5),
(545, 545, 38, 8),
(546, 546, 4, 6),
(547, 547, 27, 8),
(548, 548, 8, 13),
(549, 549, 35, 13),
(550, 550, 33, 8),
(551, 551, 37, 13),
(552, 552, 1, 8),
(553, 553, 25, 5),
(554, 554, 7, 12),
(555, 555, 37, 6),
(556, 556, 3, 4),
(557, 557, 20, 10),
(558, 558, 8, 8),
(559, 559, 38, 9),
(560, 560, 6, 5),
(561, 561, 11, 14),
(562, 562, 4, 6),
(563, 563, 29, 3),
(564, 564, 6, 9),
(565, 565, 41, 6),
(566, 566, 41, 1),
(567, 567, 18, 7),
(568, 568, 35, 9),
(569, 569, 38, 6),
(570, 570, 1, 12),
(571, 571, 6, 11),
(572, 572, 29, 15),
(573, 573, 33, 4),
(574, 574, 29, 10),
(575, 575, 16, 5),
(576, 576, 38, 2),
(577, 577, 26, 1),
(578, 578, 12, 1),
(579, 579, 11, 11),
(580, 580, 38, 6),
(581, 581, 14, 14),
(582, 582, 29, 4),
(583, 583, 2, 12),
(584, 584, 35, 8),
(585, 585, 7, 5),
(586, 586, 39, 9),
(587, 587, 12, 12),
(588, 588, 34, 3),
(589, 589, 26, 13),
(590, 590, 13, 4),
(591, 591, 36, 1),
(592, 592, 1, 12),
(593, 593, 28, 1),
(594, 594, 26, 2),
(595, 595, 21, 6),
(596, 596, 16, 13),
(597, 597, 27, 13),
(598, 598, 7, 3),
(599, 599, 41, 9),
(600, 600, 21, 1),
(601, 601, 4, 6),
(602, 602, 17, 1),
(603, 603, 38, 6),
(604, 604, 22, 1),
(605, 605, 10, 3),
(606, 606, 19, 12),
(607, 607, 17, 1),
(608, 608, 11, 15),
(609, 609, 15, 14),
(610, 610, 36, 5),
(611, 611, 16, 7),
(612, 612, 16, 6),
(613, 613, 22, 14),
(614, 614, 29, 3),
(615, 615, 3, 14),
(616, 616, 19, 4),
(617, 617, 36, 13),
(618, 618, 35, 10),
(619, 619, 39, 8),
(620, 620, 29, 11),
(621, 621, 21, 2),
(622, 622, 8, 7),
(623, 623, 34, 4),
(624, 624, 3, 10),
(625, 625, 22, 15),
(626, 626, 22, 14),
(627, 627, 4, 6),
(628, 628, 19, 11),
(629, 629, 2, 5),
(630, 630, 36, 5),
(631, 631, 8, 1),
(632, 632, 20, 7),
(633, 633, 6, 8),
(634, 634, 29, 15),
(635, 635, 10, 2),
(636, 636, 22, 15),
(637, 637, 26, 12),
(638, 638, 10, 5),
(639, 639, 2, 2),
(640, 640, 1, 2),
(641, 640, 2, 1);

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
(2, 1, 'Sale in the day!', 5, '2023-10-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kategori`, `kategori`) VALUES
(1, 'NASI KOTAK'),
(2, 'MINUMAN'),
(3, 'CAKE'),
(4, 'PRASMANAN'),
(5, 'SNACK BOX'),
(6, 'KATERING KARYAWAN'),
(7, 'MAKANAN SEHAT'),
(8, 'TUMPENG');

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
(1, 1, 1, 'Ayam Bakar', '10000', 'ayambakar.jpeg', 'Ayam bakar bumbu rahasia'),
(2, 2, 1, 'AYAM Goreng', '10000', 'ayamgoreng.jpeg', 'Ayam goreng ungkep'),
(3, 2, 1, 'CAK IKAN Mujaer', '10000', 'cakikanjaer.jpeg', 'PECAK IKAN MUJAER '),
(4, 2, 2, 'CAPCAY', '3000', 'capcay.jpeg', 'HARGA 2 kali centong'),
(5, 1, 2, 'ES TEH MANIS', '4000', 'estehmanis.jpeg', 'ES TEH MANIS SEGER'),
(6, 1, 2, 'Garang Asem AYAM', '15000', 'garangasemayam.jpg', 'INI MENU BESTSELLER KAMI'),
(7, 2, 3, 'Ikan Garang ASEM', '20000', 'ikangarangasam.jpeg', 'IKAN laut dan ikan tambak'),
(8, 2, 3, 'IKAN GORENG MUJAER', '7000', 'ikangoreng.jpeg', 'IKAN GORENG MUJAER'),
(9, 1, 3, 'IKAN TONGKOL BALADO', '8000', 'ikantongkolbalado.jpeg', 'Ikan tongkol balado'),
(10, 1, 4, 'KRUPUK UDANG', '2000', 'krupukudang.jpeg', 'KRUPUK UDANG'),
(11, 1, 4, 'MIE GORENG', '2000', 'miegoreng.jpeg', 'SATU KALI CENTONG '),
(12, 1, 4, 'OPOR AYAM', '10000', 'oporayam.jpeg', 'HARGA INI UNTUK 1 POTONG AYAM'),
(13, 2, 4, 'OREG TEMPE', '2000', 'oregtempe.jpeg', 'SATU KALI CENTONG '),
(14, 2, 5, 'PAKET BOX NASI 1', '25000', 'paketnasi1.jpeg', 'MENU CHATERING untuk ACARA'),
(15, 1, 5, 'PAKET BOX NASI 2', '20000', 'paketnasi2.jpeg', 'MENU CHATERING untuk ACARA'),
(16, 3, 5, 'PAKET BOX NASI 3', '15000', 'paketnasi3.jpeg', 'MENU CHATERING untuk ACARA'),
(17, 3, 5, 'PAKET BOX NASI 4', '1200', 'paketnasi4.jpeg', 'MENU CHATERING untuk ACARA'),
(18, 3, 6, 'PEPES AYAM', '10000', 'pepesayam.jpeg', 'PEPES AYAM'),
(19, 3, 6, 'PEPS IKAN', '10000', 'pepesikan.jpeg', 'PEPES IKAN'),
(20, 4, 6, 'PEPS TELUR ASIN', '8000', 'pepestelurasin.jpeg', 'PEPES TELUR ASIN+C[2]C:C[1]'),
(21, 4, 7, 'PERKEDEL KENTANG', '2500', 'perkedel.jpeg', 'PERKEDEL KENTANG'),
(22, 4, 7, 'RENDANG DANGING', '11000', 'rendangdaging.jpeg', 'HARGA INI UNTUK 1 POTONG DAGING'),
(23, 1, 7, 'RENDANG JENGKOL', '5000', 'rendangjengkol.jpeg', 'HARGA INI UNTUK 4 POTONG JENGKOL'),
(24, 1, 8, 'SAMBAL GORENG KENTANG', '4000', 'sambalgorengkentang.jpeg', 'SATU SETENGAH CENTONG'),
(25, 3, 8, 'SAMBEL TERASI', '2000', 'sambelterasi.jpeg', 'SATU KALI SENDOK MAKAN'),
(26, 4, 8, 'SATE ATI AMPELA', '4000', 'sateatiampela.jpeg', 'HARGA UNTUK 1 TUSUK'),
(27, 4, 8, 'SATE USUS AYAM', '3000', 'sateusus.jpeg', 'HARGA UNTUK 1 TUSUK'),
(28, 3, 8, 'SATE KAMBING', '60000', 'satekambing.jpeg', '10 TUSUK /SETENGAH KODI'),
(29, 2, 7, 'SAYUR ASEM', '5000', 'sayurasem.jpeg', 'UNTUK 1 PORSI'),
(30, 2, 7, 'SAYUR DAUN SINGKON', '5000', 'sayurdaunsingkong.jpeg', 'UNTUK 1 PORSI'),
(31, 1, 7, 'SAYUR TELUR PUYUH', '5000', 'sayurtelurpuyuh.jpg', 'UNTUK 1 PORSI'),
(32, 1, 7, 'SEMUR ATI AMPELA', '8000', 'semurhatiampela.jpeg', 'HARGA 1 PASANG HATI AMPELA'),
(33, 2, 6, 'SUP AYAM', '10000', 'supayam.jpeg', 'UNTUK 1 PORSI'),
(34, 3, 6, 'TAHU GORENG', '2000', 'tahu.jpeg ', '1 TAHU GORENG'),
(35, 2, 6, 'TEH MANIS ANGET', '4000', 'tehmanisanget.jpeg', '1 GELAS TEH MANIS ANGET'),
(36, 1, 5, 'TELUR ASIN', '4000', 'telurasin.jpg', '1 BUTIR TELUR ASIN'),
(37, 1, 4, 'TELUR BALADO', '5000', 'telurbalado.jpeg', '1 BUTIR TELUR BALADO'),
(38, 1, 5, 'TELUR DADAR', '5000', 'telurdadar.jpg', '1 LEMBAR TELUR DADAR'),
(39, 1, 5, 'TEMPE GORENG', '2000', 'tempe.jpeg ', '1 TEMPE GORENG'),
(40, 1, 3, 'TUMIS BUNCIS', '5000', 'tumisbuncis.jpeg', '1 PORSI TUMIS BUNCIS'),
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

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `id_pesanan`, `total_transaksi`, `tgl`, `cash`, `kartu_kredit`, `no_kartu_kredit`, `bukti_pembayaran`) VALUES
(1, 1, '117000', '2023-07-24', 'transfer', 'BRI', '01133-0981', 'sd.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_plggn` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(125) NOT NULL,
  `ttl` varchar(125) NOT NULL,
  `makanan` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_plggn`, `alamat`, `no_hp`, `email`, `ttl`, `makanan`, `username`, `password`) VALUES
(1, 'Uci Sunengasih', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', '88706686653', 'Uci_Sunengasih@gmail.com', 'Brebes, 21 September 2001', '', 'uci54', 'uci'),
(2, 'Puspita Pangesti', 'Gg masjid walisanga RT02 RW 02 Tanjung, kec, Tanjung', '82313242960', 'Puspita_Pangesti@gmail.com', 'Brebes,09 April 1996', 'garang asem ayam, pecak ikan', 'pita', 'pita'),
(3, 'Joko Wiyarno', 'Jl. Raya Klampok No.20, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '82157694321', 'Joko_Wiyarno@gmail.com', 'Brebes, 22 Agustus', 'pepes ayam, ayam goreng', 'joko', 'joko'),
(4, 'Triana dewi', 'Jl. Cendrawasih No.KM. 20, RW.No.6, SawahLadang, Tanjung, Kec. tanjung, Kab. Brebes', '0895-3919-29461', 'Triana_dewi@gmail.com', 'Brebes, 7 Febuari 1969', 'ayam goreng, pepes ikan, pepes telur asin', 'triana', 'triana'),
(5, 'Agus Budianto', 'Gg.mawar Rt01 RW03, Sengon Kec.Tanjung ,Kab. Brebes', '8,3842E+11', 'Agus_Budianto@gmail.com', 'Brebes, 23 April 1994', 'sate kambing, ikan tongkol balado', 'budi2', 'budi2'),
(6, 'Retno ', 'Blok Masjid Desa Tengguli, Kec. Tanjung Kabupaten Brebes, Jawa Tengah', '81287876528', 'Retno_@gmail.com', 'Brebes,14 Maret 2002', 'ayam bakar, dan garang asem', 'retno53', 'retno53'),
(7, 'Anis kusuma', 'Jl. Cendrawasih No.533, RT.04/RW.05, brak, Tanjung, Kec.Tanjung Kabupaten Brebes', '83837392608', 'Anis_kusuma@gmail.com', 'Brebes 20 Agustus 2001', 'ayam goreng, supa ayam, tumis buncis', 'Anis', 'Anis'),
(8, 'Rapto Lestaluhu', 'Desa Ciputih Blok pasar Kec.Salem. Kab Brebes', '87743911076', 'Rapto_Lestaluhu@gmail.com', 'Brebes, 16 juni 2000', 'sate kambing, dan ayam goreng', 'rapto123', 'rapto123'),
(9, 'Ramandha', 'Gg masjid walisanga RT02 RW 02 no15 Tanjung, kec, Tanjung', '82227124796', 'Ramandha@gmail.com', 'Brebes, 03 Desember 2001', 'ikan tongkol balado, sate kambing', 'Ramanda', 'Ramanda'),
(10, 'Tini Aulia dewi', 'Jl. Jend. Sudirman No.70, RT.01/RW.01, Losari Lor, Kec. Losari, Kabupaten Brebes', '85712802583', 'Tini_Aulia_dewi@gmail.com', 'Brebes, 14 Desember 2000', 'garang asem ayam, sate kambing', 'tini', 'tini54'),
(11, 'Silvia Agusti', 'Warnasari No.70, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '82134154901', 'Silvia_Agusti@gmail.com', 'Brebes ,18 Maret 2001', 'sayur asem, ayam goreng', 'Silvia', 'silvia08'),
(12, 'Tiara Hermanda', 'Jalan Abdullah, RT.10/RW.3, Dusun Pahing, Cilimus', '83143068224', 'Tiara_Hermanda@gmail.com', 'Brebes, 07 Maret 2003', 'Oppor ayam, capcay', 'aramanda26@gmail.com', 'istrinyachanyeol'),
(13, 'Daeni Rismawati ', 'GG masjid Walisanga RT 02 RW 02 no.20 Tanjung Kec tanjung', '83840772793', 'Daeni_Rismawati_@gmail.com', 'Brebes ,18 September 2000', 'sate kambing', 'Daeni Rismawati ', 'Daeni21'),
(14, 'Moh. Fiqih Erinsyah', 'Karangsari, Kec. Bulakamba, Brebes', '89677138599', 'Moh._Fiqih_Erinsyah@gmail.com', 'Brebes, 28 Desember 1999', 'Oppor ayam, capcay', 'mohfiqih', 'mohfiqih123'),
(15, 'Tria istianah ', 'Jl R.A Kartini Desa sengon Gg.mawar Rt05 Rw 07, Tanjung-Brebes', '8,95392E+11', 'Tria_istianah_@gmail.com', 'Brebes, 30 Agustus 2000', 'garang Asem ayam', 'triaistianah13@gmail.com', 'jakakurniawan04'),
(16, 'Lisa Dewi M', 'Kemurang Wetan, Kec. Tanjung, Kab Brebes', '87715523094', 'Lisa_Dewi_M@gmail.com', 'Brebes 22 Febuari 2001', 'pepes telur asin, garang asem, sate kambing', 'salibra', 'lisa1234'),
(17, 'PUSPITA SARI', 'DESA KUBANGPUTAT KEC. TANJUNG KAB. BREBES', '87856677513', 'PUSPITA_SARI@gmail.com', 'Brebes, 13 Agustus 2000', 'sayur asem, dan garang asem', 'puspita sari', 'puspitasari'),
(18, 'Cicih Warniasih ', 'Desa Patala Kec. Cilebak ', '83195979430', 'Cicih_Warniasih_@gmail.com', 'Sukabumi, 24 Juli 2001', 'ayam goreng, ikan goreng,sayur sop ayam', '@pacarhoshi', 'hoshiciwaSAH'),
(19, 'Khaerum Anisa', 'Jalan raya alternatif Luwunggede, Desa Luwunggede, Rt.006/Rw.002, Kec.Tanjung, Kab. Brebes ', '82328927129', 'Khaerum_Anisa@gmail.com', 'Brebes 25 Oktober 2000', 'Tumis buncis, sate kambing', 'khaerumanisa2023', 'khaerumanisa#2023'),
(20, 'Tantrianti ', 'Dusun kampung baru, desa Waled kota RT 01/  RW 01 , kecamatan Waled, kabupaten Cirebon ', '89634853105', 'Tantrianti_@gmail.com', 'Brebes, 04 Juni 1976', 'sate kambing, pepes ikan, garang asem ikan', 'Titiew', 'Semangkabusuk'),
(21, 'Widiyanti ', 'Ketanggungan Brebes ', '83195088275', 'Widiyanti_@gmail.com', 'Brebes, 21 September 2001', 'sayur sup, sate kambing, garang asem ayam', 'Widiyanti ', 'Widi123456'),
(22, 'Sintia Wati Dewi', 'Desa cibadak kec. Ketanggungan Brebes', '83101465426', 'Sintia_Wati_Dewi@gmail.com', 'Brebes,09 April 1996', 'garang asem ayam, pecak ikan', 'sintia dewi', 'sintia dewi'),
(23, 'Wati Dewi', 'Desa Pejagan, kecamatan tanjung Brebes ', '83101356426', 'Wati_Dewi@gmail.com', 'Brebes, 22 Agustus', 'pepes ayam, ayam goreng', 'wati dewi', 'wati dewi'),
(24, 'Nyimas Ayu Marina', 'Pesantunan Brebes', '8,95467E+11', 'Nyimas_Ayu_Marina@gmail.com', 'Brebes, 7 Febuari 1969', 'ayam goreng, pepes ikan, pepes telur asin', 'Nyimas', 'marina200201'),
(25, 'Deri Hermawan ', 'GG.mbah ibu, RT:001/005 Lemahabang tanjung ', '8,95393E+11', 'Deri_Hermawan_@gmail.com', 'Brebes, 23 April 1994', 'sate kambing, ikan tongkol balado', 'Dr.hermawan', 'Rubberpanjava'),
(26, 'Helana Feronika', 'Jl. Raya Kluwut Bulakamba, Kemuning, Bulakparen, Kec. Bulakamba', '81511894979', 'Helana_Feronika@gmail.com', 'Brebes,14 Maret 2002', 'ayam bakar, dan garang asem', 'helena ', 'helena'),
(27, 'Siti nurhayati', 'Klampok, Kec. Wanasari, Kabupaten Brebes', '81548080547', 'Siti_nurhayati@gmail.com', 'Brebes 20 Agustus 2001', 'ayam goreng, supa ayam, tumis buncis', 'ayati', 'ayati12'),
(28, 'Bagus arif', 'Desa grinting kecamatan Bulakamba kab. Brebes', '87799111958', 'Bagus_arif@gmail.com', 'Brebes, 16 juni 2000', 'sate kambing, dan ayam goreng', 'bagus arif', 'bagus'),
(29, 'Lulu khotimah', 'Desa pakijangan Rt005/002 Kec klampok Brebes', '87799111958', 'Lulu_khotimah@gmail.com', 'Brebes, 03 Desember 2001', 'ikan tongkol balado, sate kambing', 'lulu khotimah', 'lulu1254'),
(30, 'Lala Nurlaela', 'Pragpag lor blok masjid kec.Losari Brebes', '8978499110', 'Lala_Nurlaela@gmail.com', 'Brebes, 14 Desember 2000', 'garang asem ayam, sate kambing', 'nurlaela', 'lalanurlaela'),
(31, 'Wahyu Budiyono', 'Pakijangan rt.06 rw.01 Kec. Bulakamba Kab. Brebes', '8,95363E+11', 'Wahyu_Budiyono@gmail.com', 'Brebes ,18 Maret 2001', 'sayur asem, ayam goreng', 'Wahyu', 'Wahyu ganteng'),
(32, 'Ar Arum', 'Gg mawar sengon kec.tanjung kab. Brebes', '85712799720', 'Ar_Arum@gmail.com', 'Brebes, 07 Maret 2003', 'Oppor ayam, capcay', 'ar arum', 'arumkrupuk'),
(33, 'Hendri', 'Desa Banjarhanjo Kec. Banjarhajo Kab. Brebes', '85225783098', 'Hendri@gmail.com', 'Brebes ,18 September 2000', 'sate kambing', 'hendri', 'hendri083'),
(34, 'Erlinda', 'Desa cimohong sebelah kantor kepala desa Ke. Bulakamba Kab. Brebes', '82328937973', 'Erlinda@gmail.com', 'Brebes, 28 Desember 1999', 'Oppor ayam, capcay', 'Erlinda', 'erlindacantik'),
(35, 'Berliana Sefy', 'Jl. Raya Pantura, Cimohong, Kec. Bulakamba, Kabupaten Brebes', '85727024208', 'Berliana_Sefy@gmail.com', 'Brebes, 30 Agustus 2000', 'garang Asem ayam', 'Berliana', 'Berliana');

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
(1, 1, 8, '1/1/2022', '385000', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', '10000', 3, 1, 1),
(2, 2, 1, '1/2/2022', '30000', 'Gg masjid walisanga RT02 RW 02 Tanjung, kec, Tanjung', '10000', 4, 1, 1),
(3, 2, 6, '1/3/2022', '130000', 'Jl. Raya Klampok No.20, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 4, 1, 1),
(4, 2, 27, '1/4/2022', '75000', 'Jl. Cendrawasih No.KM. 20, RW.No.6, SawahLadang, Tanjung, Kec. tanjung, Kab. Brebes', '10000', 4, 1, 1),
(5, 2, 4, '1/5/2022', '14000', 'Gg.mawar Rt01 RW03, Sengon Kec.Tanjung ,Kab. Brebes', '10000', 4, 1, 1),
(6, 1, 13, '1/6/2022', '35000', 'Blok Masjid Desa Tengguli, Kec. Tanjung Kabupaten Brebes, Jawa Tengah', '10000', 3, 1, 3),
(7, 1, 34, '1/7/2022', '110000', 'Jl. Cendrawasih No.533, RT.04/RW.05, brak, Tanjung, Kec.Tanjung Kabupaten Brebes', '10000', 3, 1, 3),
(8, 1, 17, '1/8/2022', '25000', 'Desa Ciputih Blok pasar Kec.Salem. Kab Brebes', '10000', 3, 1, 4),
(9, 1, 25, '1/9/2022', '40000', 'Gg masjid walisanga RT02 RW 02 no15 Tanjung, kec, Tanjung', '10000', 3, 1, 4),
(10, 3, 19, '1/10/2022', '35000', 'Jl. Jend. Sudirman No.70, RT.01/RW.01, Losari Lor, Kec. Losari, Kabupaten Brebes', '10000', 4, 1, 1),
(11, 3, 8, '1/11/2022', '20000', 'Warnasari No.70, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 4, 1, 1),
(12, 3, 19, '1/12/2022', '34000', 'Jalan Abdullah, RT.10/RW.3, Dusun Pahing, Cilimus', '10000', 4, 1, 1),
(13, 3, 12, '1/13/2022', '35000', 'GG masjid Walisanga RT 02 RW 02 no.20 Tanjung Kec tanjung', '10000', 4, 1, 1),
(14, 4, 24, '1/14/2022', '66000', 'Karangsari, Kec. Bulakamba, Brebes', '10000', 4, 1, 1),
(15, 4, 22, '1/15/2022', '80000', 'Jl R.A Kartini Desa sengon Gg.mawar Rt05 Rw 07, Tanjung-Brebes', '10000', 4, 1, 1),
(16, 4, 30, '1/16/2022', '20000', 'Kemurang Wetan, Kec. Tanjung, Kab Brebes', '10000', 4, 1, 1),
(17, 4, 8, '1/17/2022', '90000', 'DESA KUBANGPUTAT KEC. TANJUNG KAB. BREBES', '10000', 4, 1, 1),
(18, 3, 32, '1/18/2022', '150000', 'Desa Patala Kec. Cilebak ', '10000', 4, 1, 1),
(19, 1, 24, '1/19/2022', '73000', 'Jalan raya alternatif Luwunggede, Desa Luwunggede, Rt.006/Rw.002, Kec.Tanjung, Kab. Brebes ', '10000', 2, 1, 4),
(20, 1, 31, '1/20/2022', '140000', 'Dusun kampung baru, desa Waled kota RT 01/  RW 01 , kecamatan Waled, kabupaten Cirebon ', '10000', 2, 1, 1),
(21, 2, 17, '1/21/2022', '65000', 'Ketanggungan Brebes ', '10000', 4, 1, 1),
(22, 2, 17, '1/22/2022', '75000', 'Desa cibadak kec. Ketanggungan Brebes', '10000', 4, 1, 1),
(23, 3, 28, '1/23/2022', '16000', 'Desa Pejagan, kecamatan tanjung Brebes ', '10000', 4, 1, 1),
(24, 3, 17, '1/24/2022', '30000', 'Pesantunan Brebes', '10000', 4, 1, 1),
(25, 3, 34, '1/25/2022', '22000', 'GG.mbah ibu, RT:001/005 Lemahabang tanjung ', '10000', 4, 1, 1),
(26, 4, 18, '1/26/2022', '140000', 'Jl. Raya Kluwut Bulakamba, Kemuning, Bulakparen, Kec. Bulakamba', '10000', 4, 1, 1),
(27, 4, 24, '1/27/2022', '55000', 'Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 4, 1, 1),
(28, 4, 33, '1/28/2022', '34000', 'Desa grinting kecamatan Bulakamba kab. Brebes', '10000', 4, 1, 1),
(29, 4, 9, '1/29/2022', '34000', 'Desa pakijangan Rt005/002 Kec klampok Brebes', '10000', 4, 1, 1),
(30, 4, 26, '1/30/2022', '16000', 'Pragpag lor blok masjid kec.Losari Brebes', '10000', 4, 1, 1),
(31, 4, 25, '1/31/2022', '16000', 'Pakijangan rt.06 rw.01 Kec. Bulakamba Kab. Brebes', '10000', 4, 1, 1),
(32, 4, 17, '2/1/2022', '80000', 'Gg mawar sengon kec.tanjung kab. Brebes', '10000', 4, 1, 1),
(33, 4, 31, '2/2/2022', '14000', 'Desa Banjarhanjo Kec. Banjarhajo Kab. Brebes', '10000', 4, 1, 1),
(34, 1, 14, '2/3/2022', '22000', 'Desa cimohong sebelah kantor kepala desa Ke. Bulakamba Kab. Brebes', '10000', 2, 1, 4),
(35, 1, 8, '2/4/2022', '65000', 'Jl. Raya Pantura, Cimohong, Kec. Bulakamba, Kabupaten Brebes', '10000', 2, 1, 4),
(36, 1, 31, '2/5/2022', '40000', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', '10000', 2, 1, 4),
(37, 1, 28, '2/6/2022', '25000', 'Gg masjid walisanga RT02 RW 02 Tanjung, kec, Tanjung', '10000', 2, 1, 1),
(38, 1, 11, '2/7/2022', '30000', 'Jl. Raya Klampok No.20, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 2, 1, 4),
(39, 1, 22, '2/8/2022', '130000', 'Jl. Cendrawasih No.KM. 20, RW.No.6, SawahLadang, Tanjung, Kec. tanjung, Kab. Brebes', '10000', 4, 1, 3),
(40, 1, 28, '2/9/2022', '70000', 'Gg.mawar Rt01 RW03, Sengon Kec.Tanjung ,Kab. Brebes', '10000', 4, 1, 4),
(41, 1, 2, '2/10/2022', '18000', 'Blok Masjid Desa Tengguli, Kec. Tanjung Kabupaten Brebes, Jawa Tengah', '10000', 4, 1, 3),
(42, 2, 29, '2/11/2022', '65000', 'Jl. Cendrawasih No.533, RT.04/RW.05, brak, Tanjung, Kec.Tanjung Kabupaten Brebes', '10000', 4, 1, 1),
(43, 2, 21, '2/12/2022', '25600', 'Desa Ciputih Blok pasar Kec.Salem. Kab Brebes', '10000', 4, 1, 1),
(44, 2, 26, '2/13/2022', '20000', 'Gg masjid walisanga RT02 RW 02 no15 Tanjung, kec, Tanjung', '10000', 4, 1, 1),
(45, 2, 30, '2/14/2022', '22000', 'Jl. Jend. Sudirman No.70, RT.01/RW.01, Losari Lor, Kec. Losari, Kabupaten Brebes', '10000', 4, 1, 1),
(46, 2, 2, '2/15/2022', '58000', 'Warnasari No.70, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 4, 1, 1),
(47, 2, 10, '2/16/2022', '18000', 'Jalan Abdullah, RT.10/RW.3, Dusun Pahing, Cilimus', '10000', 4, 1, 1),
(48, 2, 10, '2/17/2022', '24000', 'GG masjid Walisanga RT 02 RW 02 no.20 Tanjung Kec tanjung', '10000', 4, 1, 1),
(49, 2, 10, '2/18/2022', '130000', 'Karangsari, Kec. Bulakamba, Brebes', '10000', 4, 1, 1),
(50, 2, 19, '2/19/2022', '40000', 'Jl R.A Kartini Desa sengon Gg.mawar Rt05 Rw 07, Tanjung-Brebes', '10000', 4, 1, 1),
(51, 2, 17, '2/20/2022', '40000', 'Kemurang Wetan, Kec. Tanjung, Kab Brebes', '10000', 4, 1, 1),
(52, 2, 12, '2/21/2022', '101000', 'DESA KUBANGPUTAT KEC. TANJUNG KAB. BREBES', '10000', 4, 1, 1),
(53, 3, 28, '2/22/2022', '38000', 'Desa Patala Kec. Cilebak ', '10000', 4, 1, 1),
(54, 3, 23, '2/23/2022', '150000', 'Jalan raya alternatif Luwunggede, Desa Luwunggede, Rt.006/Rw.002, Kec.Tanjung, Kab. Brebes ', '10000', 4, 1, 1),
(55, 3, 20, '2/24/2022', '87000', 'Dusun kampung baru, desa Waled kota RT 01/  RW 01 , kecamatan Waled, kabupaten Cirebon ', '10000', 4, 1, 1),
(56, 3, 9, '2/25/2022', '50000', 'Ketanggungan Brebes ', '10000', 4, 1, 1),
(57, 3, 5, '2/26/2022', '80000', 'Desa cibadak kec. Ketanggungan Brebes', '10000', 4, 1, 1),
(58, 3, 9, '2/27/2022', '35000', 'Desa Pejagan, kecamatan tanjung Brebes ', '10000', 4, 1, 1),
(59, 3, 18, '2/28/2022', '140000', 'Pesantunan Brebes', '10000', 4, 1, 1),
(60, 3, 4, '3/1/2022', '34000', 'GG.mbah ibu, RT:001/005 Lemahabang tanjung ', '10000', 4, 1, 1),
(61, 4, 14, '3/2/2022', '210000', 'Jl. Raya Kluwut Bulakamba, Kemuning, Bulakparen, Kec. Bulakamba', '10000', 4, 1, 1),
(62, 4, 11, '3/3/2022', '58000', 'Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 4, 1, 1),
(63, 4, 4, '3/4/2022', '59000', 'Desa grinting kecamatan Bulakamba kab. Brebes', '10000', 4, 1, 1),
(64, 4, 18, '3/5/2022', '85000', 'Desa pakijangan Rt005/002 Kec klampok Brebes', '10000', 4, 1, 1),
(65, 4, 34, '3/6/2022', '90000', 'Pragpag lor blok masjid kec.Losari Brebes', '10000', 4, 1, 1),
(66, 4, 3, '3/7/2022', '47500', 'Pakijangan rt.06 rw.01 Kec. Bulakamba Kab. Brebes', '10000', 4, 1, 1),
(67, 4, 35, '3/8/2022', '49000', 'Gg mawar sengon kec.tanjung kab. Brebes', '10000', 4, 1, 1),
(68, 4, 20, '3/9/2022', '20000', 'Desa Banjarhanjo Kec. Banjarhajo Kab. Brebes', '10000', 4, 1, 1),
(69, 4, 4, '3/10/2022', '120000', 'Desa cimohong sebelah kantor kepala desa Ke. Bulakamba Kab. Brebes', '10000', 4, 1, 1),
(70, 4, 35, '3/11/2022', '34000', 'Jl. Raya Pantura, Cimohong, Kec. Bulakamba, Kabupaten Brebes', '10000', 4, 1, 1),
(71, 1, 3, '3/12/2022', '45000', 'jl.raya Kluwut Barat Klompeks Ponpes Al-ikhlas, Kluwut, Kec. Bulakamba, Kab. Brebes', '10000', 2, 1, 1),
(72, 1, 28, '3/13/2022', '21000', 'Gg masjid walisanga RT02 RW 02 Tanjung, kec, Tanjung', '10000', 1, 1, 3),
(73, 1, 14, '3/14/2022', '19000', 'Jl. Raya Klampok No.20, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 1, 1, 1),
(74, 1, 10, '3/15/2022', '30000', 'Jl. Cendrawasih No.KM. 20, RW.No.6, SawahLadang, Tanjung, Kec. tanjung, Kab. Brebes', '10000', 2, 1, 3),
(75, 1, 7, '3/16/2022', '80000', 'Gg.mawar Rt01 RW03, Sengon Kec.Tanjung ,Kab. Brebes', '10000', 1, 1, 3),
(76, 1, 29, '3/17/2022', '35000', 'Blok Masjid Desa Tengguli, Kec. Tanjung Kabupaten Brebes, Jawa Tengah', '10000', 3, 1, 3),
(77, 1, 20, '3/18/2022', '45000', 'Jl. Cendrawasih No.533, RT.04/RW.05, brak, Tanjung, Kec.Tanjung Kabupaten Brebes', '10000', 4, 1, 3),
(78, 1, 4, '3/19/2022', '160000', 'Desa Ciputih Blok pasar Kec.Salem. Kab Brebes', '10000', 4, 1, 1),
(79, 2, 24, '3/20/2022', '20000', 'Gg masjid walisanga RT02 RW 02 no15 Tanjung, kec, Tanjung', '10000', 4, 1, 1),
(80, 2, 8, '3/21/2022', '50000', 'Jl. Jend. Sudirman No.70, RT.01/RW.01, Losari Lor, Kec. Losari, Kabupaten Brebes', '10000', 4, 1, 1),
(81, 1, 30, '3/22/2022', '18000', 'Warnasari No.70, Canting, Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 1, 1, 2),
(82, 1, 1, '3/23/2022', '50000', 'Jalan Abdullah, RT.10/RW.3, Dusun Pahing, Cilimus', '10000', 2, 1, 2),
(83, 2, 3, '3/24/2022', '14000', 'GG masjid Walisanga RT 02 RW 02 no.20 Tanjung Kec tanjung', '10000', 4, 1, 1),
(84, 2, 9, '3/25/2022', '70000', 'Karangsari, Kec. Bulakamba, Brebes', '10000', 4, 1, 1),
(85, 3, 8, '3/26/2022', '30000', 'Jl R.A Kartini Desa sengon Gg.mawar Rt05 Rw 07, Tanjung-Brebes', '10000', 4, 1, 1),
(86, 3, 1, '3/27/2022', '30000', 'Kemurang Wetan, Kec. Tanjung, Kab Brebes', '10000', 4, 1, 1),
(87, 4, 20, '3/28/2022', '85000', 'DESA KUBANGPUTAT KEC. TANJUNG KAB. BREBES', '10000', 4, 1, 1),
(88, 2, 10, '3/29/2022', '60000', 'Desa Patala Kec. Cilebak ', '10000', 4, 1, 1),
(89, 1, 25, '3/30/2022', '110000', 'Jalan raya alternatif Luwunggede, Desa Luwunggede, Rt.006/Rw.002, Kec.Tanjung, Kab. Brebes ', '10000', 2, 1, 1),
(90, 1, 6, '3/31/2022', '40000', 'Dusun kampung baru, desa Waled kota RT 01/  RW 01 , kecamatan Waled, kabupaten Cirebon ', '10000', 4, 1, 2),
(91, 1, 34, '4/1/2022', '66000', 'Ketanggungan Brebes ', '10000', 2, 1, 2),
(92, 2, 35, '4/2/2022', '38000', 'Desa cibadak kec. Ketanggungan Brebes', '10000', 4, 1, 1),
(93, 3, 23, '4/3/2022', '37000', 'Desa Pejagan, kecamatan tanjung Brebes ', '10000', 4, 1, 1),
(94, 3, 23, '4/4/2022', '42000', 'Pesantunan Brebes', '10000', 4, 1, 1),
(95, 3, 31, '4/5/2022', '35000', 'GG.mbah ibu, RT:001/005 Lemahabang tanjung ', '10000', 4, 1, 1),
(96, 3, 9, '4/6/2022', '310000', 'Jl. Raya Kluwut Bulakamba, Kemuning, Bulakparen, Kec. Bulakamba', '10000', 4, 1, 1),
(97, 3, 22, '4/7/2022', '98000', 'Klampok, Kec. Wanasari, Kabupaten Brebes', '10000', 4, 1, 1),
(98, 4, 27, '4/8/2022', '26000', 'Desa grinting kecamatan Bulakamba kab. Brebes', '10000', 4, 1, 1),
(99, 2, 19, '4/9/2022', '270000', 'Desa pakijangan Rt005/002 Kec klampok Brebes', '10000', 4, 1, 1),
(100, 1, 13, '4/10/2022', '36000', 'Pragpag lor blok masjid kec.Losari Brebes', '10000', 4, 1, 2);

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

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_detail`, `komentar`, `rating`, `time_ulasan`) VALUES
(1, 1, 'enak banget', 5, '2023-10-04 01:02:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `no_hp`, `alamat`, `is_active`, `level_user`) VALUES
(1, 'admin', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', '089887656545', 'Kuningan', 0, 2),
(3, 'pemilik', '$2y$10$swT1BxTARnJKC/rKMm13vOtIFgbF.IlnG9QkBD6RFyZMWUht7ijLq', '089987656543', 'Kuningan, Jawa Barat', 0, 2);

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
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

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
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

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
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
