-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 02:33 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppj`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ya` int(10) UNSIGNED DEFAULT NULL,
  `tidak` int(10) UNSIGNED DEFAULT NULL,
  `posisi` tinyint(1) NOT NULL,
  `id_penyakit` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `pertanyaan`, `ya`, `tidak`, `posisi`, `id_penyakit`) VALUES
(4, 'Apakah daun tanaman jagung terlihat layu atau kering ?', 5, NULL, 1, 7),
(5, 'Apakah pangkal batang berwarna kecoklatan ?', 6, NULL, 2, 7),
(6, 'Apakah bagian dalam batang mengalami kebusukan ?', 7, NULL, 2, 7),
(7, 'Apakah pangkal batang berwarna merah jambu, merah kecoklatan, atau coklat ?', NULL, NULL, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaPenyakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `namaPenyakit`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 'Busuk Batang', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"http://www.bertaniorganik.com/wp-content/uploads/2017/06/Screenshot_325.png\" style=\"float:left; height:390px; margin:10px; width:431px\" />Salah satu penyakit yang perlu diwaspadai oleh para petani jagung terutama jagung manis adalah penyakit busuk batang. Hal ini karena serangan penyakit busuk batang dapat mengakibatkan kerusakan pada tanaman hingga 65%.</p>\r\n\r\n<p style=\"text-align: justify;\">Gejala serangan penyakit busuk batang umumnya terjadi pada fase generatif yaitu setelah fase pembungaan. Ciri tanaman terserang penyakit busuk batang adalah tanaman tampak layu atau kering seluruh daunnya. Pangkal batang yang terserang akan mengalami perubahan warna dari hijau menjadi kecoklatan. Bagian dalam batang busuk serta bagian kulit luarnya tipis sehingga mudah rebah. Pada pangkal batang yang terserang terlihat berwarna merah jambu, merah kecoklatan atau coklat.</p>\r\n\r\n<p style=\"text-align: justify;\">Penyebab utama penyakit busuk batang adalah cendawan atau jamur seperti Colletotrichum graminearum, Diplodia maydis, Gibberella zeae, Fusarium moniliforme, Macrophomina phaseolina, Pythium apanidermatum, Cephalosporium maydis, dan Cephalosporium acremonium.</p>\r\n\r\n<h3 style=\"text-align: justify;\"><strong>Penularan Penyakit Busuk batang</strong></h3>\r\n\r\n<p style=\"text-align: justify;\">Penyakit busuk batang disebabkan oleh cendawan patogen yang memproduksi konidia. Konidia ini kemudian akan menyebar oleh hembusan angin, air hujan, maupun serangga.</p>\r\n\r\n<p style=\"text-align: justify;\">Pada saat lahan tidak ada tanaman, cendawan penyebab penyakit dapat bertahan pada sisa-sisa tanaman yang terinfeksi dalam fase hifa atau piknidia dan peritesia yang berisi spora. Jika kondisi lingkungan mendukung, maka spora akan keluar dari piknidia atau peritesia. Spora yang menempel pada permukaan tanaman jagung akan tumbuh dan menginfeksi tanaman melalui akar atau pangkal batang. proses infeksi awal dapat melalui luka atau membentuk sejenis apresoria yang mampu menembus masuk ke jaringan tanaman. spora yang terbawa oleh angin dapat menginfeksi ke tongkol jagung. dan biji jagung yang terinfeksi apabila ditanam dapat menyebabkan penyakit busuk batang.</p>\r\n\r\n<h3 style=\"text-align: justify;\"><strong>Cara Pengendalian Penyakit Busuk Batang Pada Tanaman Jagung</strong></h3>\r\n\r\n<p style=\"text-align: justify;\">Untuk mengendalikan serangan busuk batang pada tanaman jagung ada beberapa langkah yang dapat kita lakukan.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Menanam varietas jagung yang memiliki daya tahan tinggi, seperti BISI-1, BISI-4,&nbsp; Pioneer-8, Pioneer-10, Pioneer-12, Pioneer-13, Pioneer-14,&nbsp; Semar-9, Palakka, dan J1-C3. Surya, Exp.9572, Exp. 9702, Exp. 9703, CPI-2, dan FPC 9923.</li>\r\n	<li style=\"text-align: justify;\">Melakukan pergiliran tanaman untuk memutus mata rantai penyebaran penyakit busuk batang.</li>\r\n	<li style=\"text-align: justify;\">Lakukan pemupukan secara berimbang, hindari pemberian N tinggi dan K rendah.</li>\r\n	<li style=\"text-align: justify;\">Membuat drainase yang baik serta penanaman jangan terlalu rapat dan padat.</li>\r\n	<li style=\"text-align: justify;\">Mengendalikan busuk batang (fusarium) secara hayati dengan cendawan antagonis Trichoderma sp.</li>\r\n	<li style=\"text-align: justify;\">Apabila terdapat gejala tanaman terserang busuk batang lakukan penyemprotan fungisida berbahan aktif mankozeb. sidazeb.</li>\r\n</ul>', '2018-10-08 04:33:04', '2018-10-23 01:43:15'),
(10, 'Virus Mozaik', '<p>asdasdasd</p>', '2018-11-04 20:51:14', '2018-11-04 20:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `no_hp`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin', '1234567890', 0, 'admin@admin.admin', NULL, '$2y$10$ruJlKej1PDiIEfN2y9/DHeCeshm1dn44dt5nVzA.xEoM7/03byjZa', 'MqQIHw1KCYH6JI1l3iPTeD8yxkaMGbjJwNDKlB1AlmxNYSfU9qKtmZBbsyvO', '2018-10-05 05:24:26', '2018-10-05 05:24:26'),
(3, 'Fadhil Muhammad', 'Perum Sumber Alam J10', '081234236973', 1, 'fadhilm0808@gmail.com', NULL, '$2y$10$8byUy7IHPkMoZQrGYSRGfOvWE6Zyu4sKpbFEihb9lA.MLQk1GKCb2', '2WDsKs5g1IxlFyf30pHkbCuOROnduscZzyeWz8CnUXLIVUt89oGW8aUnFXBx', '2018-10-07 05:23:26', '2018-10-07 22:17:17'),
(4, 'Nadia Nur Fitri Salsabila', 'Jalan Sersansuharmaji no 148 B', '08123279013', 1, 'nadia1928@gmail.com', NULL, '$2y$10$K69qpP4JSeLOgRwS8jz0neW3e8TomSbIPNTrT79zmSdo.bgkQnpYa', 'QvdGFLnMG2Zx2W2YB2MWZF3gUvgfmFGrnKNSacFQV9gWXAOXzVOkAGJCqO9b', '2018-10-07 20:49:07', '2018-10-07 20:49:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `tidak` (`tidak`),
  ADD KEY `ya` (`ya`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tidak` FOREIGN KEY (`tidak`) REFERENCES `gejala` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `ya` FOREIGN KEY (`ya`) REFERENCES `gejala` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
