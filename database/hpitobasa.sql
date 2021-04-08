-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 08:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hpitobasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$wK7FJ4lSL9hbiGCSQluTmewT1Av2DnRNZCulbz.qwh7vX4rbIoCbO', 'Admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `bahasa`, `profile`, `pengalaman`, `created_at`, `updated_at`) VALUES
(6, 'Faustin Ompusunggu', 'Inggris', '433836761.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-11-29 08:46:06', '2020-11-29 09:26:24'),
(7, 'Yesiska Gultom', 'Francis', '423306304.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-11-29 09:23:38', '2020-11-29 09:23:38'),
(8, 'Banta Ginting', 'Gabon', '82060134.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-11-29 09:24:26', '2020-11-29 09:24:26'),
(9, 'Hengki Hutahaean', 'Spanyol', '979418292.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-11-29 09:25:06', '2020-11-29 09:25:06'),
(10, 'Rince Parhusip', 'Italia', '868711513.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-11-29 09:25:56', '2020-11-29 09:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `waktu`, `jenis`, `jumlah`, `kontak`, `catatan`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Hengki Hutahaean', '2020-11-30', 'Paket Travel Tomok Samosir', 1, '09321332131', 'Just For Fun', 'menunggu', '2020-11-29 09:35:09', '2020-11-29 09:35:09'),
(5, 'Faustine Ben Axel Ompusunggu', '2020-12-08', 'Paket Jelajah Taman Eden 1000', 6, '081376741102', 'Tour guide talkative', 'selesai', '2020-11-29 09:51:45', '2020-11-29 10:23:50'),
(6, 'Hengki Hutahaean', '2020-12-11', 'Paket Jelajah Taman Eden 1000', 5, '239123123', 'Traveling doang', 'diproses', '2020-11-29 10:00:25', '2020-11-29 10:23:52'),
(7, 'Hengki Hutahaean', '2020-12-12', 'Paket Camping Meat Pakkodian', 2, '213122132', 'MY TRIP MY ADVENTURE', 'menunggu', '2020-11-29 10:08:42', '2020-11-29 10:08:42'),
(9, 'Budi', '2021-03-07', 'Paket Travel Tomok Samosir', 4, '085246453744', 'Kamar nya agak diluasin', 'menunggu', '2020-11-29 10:41:56', '2020-11-29 10:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `lokasi`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'Pantai Bul-Bul', 'Lumban Bulbul, Balige, Kab. Toba Samosir.', '993547055.jpg', 'Bagi Anda yang ingin melihat pemandangan pantai biru yang indah membentang di deapn mata Anda, Anda bisa mengunjungi Pantai Bul-Bul. Pantai ini sendiri menjadi destinasi wisata yang banyak di kunjungi wisatawan ketika berada di Toba Samosir.', '2020-11-29 09:15:36', '2020-11-29 09:15:36'),
(5, 'Air Terjun Simanimbo', 'Ambar Halim, Pintu Pohan Merant, Kab. Toba Samosir.', '135616952.jpg', 'Salah satu tempat wisata dengan panorama mengagumkan lainnya adalah Air Terjun Situmurun. Air terjun yang satu ini tidak kalah dengan keindahan air terjun simanimbo. Bahkan Anda bisa lebih menyukainya. Pemandangan yang disajikan sangat luar biasa, terlebih tempat ini jauh dari sampah sehingga liburan Anda akan terasa lebih menyenagkan.', '2020-11-29 09:16:17', '2020-11-29 09:16:17'),
(6, 'Air Terjun Situmurun', 'Jonggi Nihuta, Hatinggian, Lumban Julu, Kab. Toba Samos', '579168293.jpg', 'Bagi Anda yang senang berfoto, maka bukit ini bisa menjadi spot yang sangat cocok. Pemandangan alam yang luar biasa dengan latar belakang bukit membuat bukit ini menjadi salah satu destinasi wisata favorit baik wisatawan dari Sumatera maupun luar Sumatera.', '2020-11-29 09:17:13', '2020-11-29 09:17:13'),
(7, 'Pantai Meat', 'Lintong Nihuta, Tampahan, Kab. Toba Samosir.', '77242589.jpg', 'Salah satu pantai yang wajib Anda kunjungi selama berada di Toba Samosir adalah pantai meat. Pantai yang satu ini sangat jernih dan biru. Anda akan sangat nyaman karena pantai ini bersih dari sampah. Anda bisa berfoto, bahkan berenang di bibir pantai.', '2020-11-29 09:21:01', '2020-11-29 09:21:01'),
(8, 'Jembatan Gantung Tornagodang', 'Tornagodang, Kec. Habinsaran, Kab. Toba Samosi', '498234430.jpg', 'Wisata yang satu ini kini tengah naik daun dan menjadi salah satu tempat wisata hits yang banyak di kunjungi anak muda. Bagaimana tidak? Tempat ini mengajikan pemandangan menakjubkan yang bisa Anda nikmati lewat jembatan gantung.', '2020-11-29 09:21:43', '2020-11-29 09:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) NOT NULL,
  `judul` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` text NOT NULL,
  `konten` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `gambar`, `deskripsi`, `waktu`, `konten`, `created_at`, `updated_at`) VALUES
(4, 'KARNAVAL PESONA DANAU TOBA', '156895189.jpg', 'Karnaval Pesona Danau Toba merupakan event tahunan Kabupaten Toba Samosir merujuk kepada Instruksi Presiden pada Karnaval Kemerdekaan Pesona Danau Toba Tahun 2016. Karnaval Pesona Danau Toba dilaksanakan di Balige-Toba Samosir .', '2020-07-03', '0', '2020-11-29 09:10:03', '2020-11-29 09:10:03'),
(5, 'Samosir Music Internasional', '543104867.png', 'Samosir Music International (SMI) merupakan rangkaian dari Horas Samosir Fiesta yang diselenggarakan setiap Tahun , event ini merupakan salah satu program untuk meningkatkan nilai wisata dan budaya Samosir.', '2020-08-07', '0', '2020-11-29 09:11:09', '2020-11-29 09:11:09'),
(6, 'Gelar Melayu Serumpun (GEMES) KOTA MEDAN', '224482129.jpg', 'Gelar Melayu Serumpun (GEMES) Kota Medan merupakan kegiatan yang mempertemukan Seni Budaya Etnis Melayu yang serumpun yang berasal dari berbagai negara Asia Tenggara dan Nusantara.', '2020-11-06', '0', '2020-11-29 09:11:59', '2020-11-29 09:11:59'),
(7, 'YA’AHOWU NIAS FESTIVAL', '636318476.jpg', 'Ya’ahowu Nias Festival adalah ajang tahunan yang digelar secara bersama oleh seluruh Kabupaten Kepualauan Nias tahun 2020 Nias Utara menjadi Tuan Rumah event yang dimaksud .', '2020-11-16', '0', '2020-11-29 09:12:42', '2020-11-29 09:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint(20) NOT NULL,
  `nama` text NOT NULL,
  `kontak` text NOT NULL,
  `komentar` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_17_100233_create-anggota-table', 1),
(2, '2020_11_27_163045_create_tabel_admin', 1),
(3, '2020_11_28_042812_create_tabel_paket', 1),
(4, '2020_11_28_042822_create_tabel_destinasi', 1),
(5, '2020_11_28_042834_create_tabel_galeri', 1),
(6, '2020_11_28_042850_create_tabel_booking', 1),
(7, '2020_11_28_042925_create_tabel_berita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `kategori`, `lokasi`, `harga`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(12, 'Paket Travel Tomok Samosir', 'Wisata Hiburan', 'Kabupaten Samosir', 'Rp.100.000,-', '484695278.jpg', 'Tomok adalah sebuah desa kecil yang terletak di pesisir timur Pulau Samosir, Danau Toba, Sumatra Utara. Dari Medan tempat ini membutuhkan waktu kurang lebih 4-5 Jam sampai di Parapat dengan mobil carteran atau bus antar-kota.', '2020-11-29 07:29:57', '2020-11-29 07:29:57'),
(13, 'Paket Jelajah Taman Eden 1000', 'Wisata Hiburan', 'Sumatera Utara', 'Rp.200.000,-', '469553755.jpg', 'Taman Eden 100 terletak di atas ketinggian 1.100 s.d. 1.750 meter di atas permukaan laut. Taman ini berada di perbukitan desa Sionggang Utara, Kecamatan Lumbanjulu, Kabupaten Toba Samosir, Sumatera Utara.', '2020-11-29 07:32:24', '2020-11-29 07:32:24'),
(14, 'Paket Camping Meat Pakkodian', 'Wisata Alam', 'Sumatera Utara', 'Rp.230.000,-', '635194786.jpg', 'Panorama keindahan alam danau Toba yang tampak dari atas penatapan bukit Pakkodian memang OK banget. Hamparan danau yang luas dan gagahnya deretan perbukitan yang indah kian menyejukkan hati.', '2020-11-29 07:35:44', '2020-11-29 07:35:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
