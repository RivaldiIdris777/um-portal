-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2023 at 08:20 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb-umportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_27_203826_create_permission_tables', 1),
(6, '2023_08_28_041144_create_tb_alur_pendaftaran_table', 2),
(7, '2023_08_29_024631_create_tb_akreditasi_table', 3),
(8, '2023_08_29_040805_create_tb_kapasitas_table', 4),
(9, '2023_08_29_055022_create_tb_jalur_pendaftaran_table', 5),
(10, '2023_08_29_064900_create_tb_profil_lulusan_table', 6),
(11, '2023_08_29_074755_create_tb_biaya_pendaftaran_table', 7),
(13, '2023_08_30_030333_create_tb_syarat_pendaftaran_table', 9),
(14, '2023_08_30_071616_create_tb_brosur_table', 10),
(15, '2023_08_30_075854_create_tb_panduan_pendaftaran_table', 11),
(16, '2023_08_31_062721_create_tb_fakultas_table', 12),
(17, '2023_08_31_065112_create_tb_program_studi_table', 13),
(18, '2023_08_31_083609_create_tb_kontak_table', 14),
(19, '2023_09_01_100559_add_gambar_column_to_tb_biaya_perkuliahan_table', 15),
(20, '2023_09_02_023526_create_tb_biaya_perkuliahan', 16),
(21, '2023_09_02_044104_create_tb_hasil_cbt_table', 17),
(22, '2023_09_04_040757_create_tb_pascasarjana_table', 18),
(23, '2023_09_04_050134_create_tb_slider_table', 19),
(24, '2023_09_11_024427_create_tb_link_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'read_role', 'web', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(2, 'create_role', 'web', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(3, 'update_role', 'web', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(4, 'delete_role', 'web', '2023-08-27 20:20:14', '2023-08-27 20:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(2, 'user', 'web', '2023-08-27 20:20:14', '2023-08-27 20:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_akreditasi`
--

CREATE TABLE `tb_akreditasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_akreditasi`
--

INSERT INTO `tb_akreditasi` (`id`, `judul`, `penjelasan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Universitas Muhammadiyah Jambi ( UM Jambi )', '<p>Universitas Muhammadiyah Jambi ( UM Jambi ) adalah hasil Perubahan bentuk dari Sekolah Tinggi Ilmu Ekonomi (STIE) Muhammadiyah Jambi menjadi Universitas Muhammadiyah Jambi pada tanggal 17 Juni 2019. UM Jambi terdiri dari 2 fakultas dan 5 Pogram Studi. Kampus UM Jambi terletak di Jl. Kapt. Pattimura, Simpang IV Sipin Kota Jambi</p>', 'KcZLc5ljsXTnshgLYSwFB7Awj0YoJ2x4SK81WKhZ.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_alur_pendaftaran`
--

CREATE TABLE `tb_alur_pendaftaran` (
  `id` bigint(20) NOT NULL,
  `tingkat` enum('sarjana','pascasarjana') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_alur_pendaftaran`
--

INSERT INTO `tb_alur_pendaftaran` (`id`, `tingkat`, `gambar`, `judul`, `penjelasan`, `created_at`, `updated_at`) VALUES
(16, 'sarjana', '2JZC0NpRb9xZBOgFYraTrsXDSCTaXDfzpzFfq3fV.jpg', 'Alur Pendaftaran Sarjana', '<p>sfnsdfsjn</p>', NULL, NULL),
(17, 'sarjana', 'j3t59r9c0ulEurj2k7JQBKB6CA5aAbY3I7anXsR4.jpg', 'Alur Pendaftaran On-Desk', '<p>Khusus untuk S1</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya_pendaftaran`
--

CREATE TABLE `tb_biaya_pendaftaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `pagi` int(11) DEFAULT NULL,
  `malam` int(11) DEFAULT NULL,
  `nama_rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_rekening` bigint(20) DEFAULT NULL,
  `nama_nasabah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_biaya_pendaftaran`
--

INSERT INTO `tb_biaya_pendaftaran` (`id`, `pagi`, `malam`, `nama_rekening`, `nomor_rekening`, `nama_nasabah`, `created_at`, `updated_at`) VALUES
(1, 200000, 250000, 'BSI', 7019689478, 'Universitas Muhammadiyah Jambi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya_perkuliahan`
--

CREATE TABLE `tb_biaya_perkuliahan` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_biaya_perkuliahan`
--

INSERT INTO `tb_biaya_perkuliahan` (`id`, `judul`, `gambar`, `penjelasan`, `created_at`, `updated_at`) VALUES
(1, 'Biaya Perkuliahan 2023', 'ghJFssNhL3zxKYDwlAW8VktkWOeZJo9DhVMR87S4.jpg', '<p>-</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_brosur`
--

CREATE TABLE `tb_brosur` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_brosur`
--

INSERT INTO `tb_brosur` (`id`, `judul`, `gambar`, `penjelasan`, `created_at`, `updated_at`) VALUES
(1, 'Brosur Depan', 'xqSTnGNruiYQ7pkN62tn5a12nzGmre3jIb01bIeK.png', '<p>-</p>', NULL, NULL),
(2, 'Brosur Belakang', 'RmLQyAPtmIOviEKASftjipdXn39L7MnYVoAYYBDY.png', '<p>-</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_fakultas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id`, `nama_fakultas`, `created_at`, `updated_at`) VALUES
(2, 'Fakultas Ekonomi dan Bisnis', NULL, NULL),
(4, 'Fakultas Sains dan Teknologi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gelombang`
--

CREATE TABLE `tb_gelombang` (
  `id_gelombang` int(11) NOT NULL,
  `kode_gelombang` varchar(11) NOT NULL,
  `nama_gelombang` varchar(100) NOT NULL,
  `status_gelombang` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gelombang`
--

INSERT INTO `tb_gelombang` (`id_gelombang`, `kode_gelombang`, `nama_gelombang`, `status_gelombang`) VALUES
(1, '01', 'Gelombang Pertama', 'Y'),
(2, '02', 'Gelombang Kedua', 'N'),
(3, '03', 'Gelombang Ketiga', 'N'),
(4, '04', 'Gelombang Keempat', 'N'),
(5, '05', 'Gelombang Kelima', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_cbt`
--

CREATE TABLE `tb_hasil_cbt` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_hasil_cbt`
--

INSERT INTO `tb_hasil_cbt` (`id`, `judul`, `file`, `penjelasan`, `created_at`, `updated_at`) VALUES
(2, 'Hasil CBT Gelombang 2', 'Hasil CBT Gelombang 2-1693630779.pdf', '<p>-</p>', NULL, NULL),
(3, 'Hasil CBT Gelombang 2 Sesi 2', 'Hasil CBT Gelombang 2 Sesi 2-1693630983.pdf', '<p>-</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalur_pendaftaran`
--

CREATE TABLE `tb_jalur_pendaftaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jalur_pendaftaran`
--

INSERT INTO `tb_jalur_pendaftaran` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Jalur pendaftaran', '7mS0k2OkxB0DdRmbRoEYsrW153G449qFGVtUYekv.png', NULL, NULL),
(2, 'Jadwal Pendaftaran', 'vEJxFHMBDjtLnPwqKdjVK7aEM3Biq6xSJf5CiRoO.png', NULL, NULL),
(3, 'Fasilitas', 'Gd1ODbdcUXf1BRq0v3GKArPimVu1o80kdMwj60UQ.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kapasitas`
--

CREATE TABLE `tb_kapasitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `jml_mahasiswa` int(11) NOT NULL,
  `jml_fakultas` int(11) NOT NULL,
  `jml_prodi` int(11) NOT NULL,
  `jml_dosen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kapasitas`
--

INSERT INTO `tb_kapasitas` (`id`, `jml_mahasiswa`, `jml_fakultas`, `jml_prodi`, `jml_dosen`, `created_at`, `updated_at`) VALUES
(3, 2775, 2, 5, 162, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlemaplink` longtext COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `alamat`, `email`, `whatsapp`, `googlemaplink`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'Jl. Kapten Pattimura, Simpang IV Sipin, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'info@example.com', '085384863330', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2255174879956!2d103.57624971475441!3d-1.6190360988193602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25886d78dd8449%3A0xc1759ca545ebcc9b!2sUniversitas%20Muhammadiyah%20Jambi!5e0!3m2!1sen!2sid!4v1685956324921!5m2!1sen!2sid', 'W8DnNM8bpWKeyELT4e0kEP58rNLdJCxake4ppBaz.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `id` int(10) UNSIGNED NOT NULL,
  `tujuan_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`id`, `tujuan_url`, `nama_url`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Sarjana', 'Link untuk keduanya Sarjana / Pascasarjana', 'https://newpmb.umjambi.ac.id/login', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_panduan_pendaftaran`
--

CREATE TABLE `tb_panduan_pendaftaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_panduan_pendaftaran`
--

INSERT INTO `tb_panduan_pendaftaran` (`id`, `judul`, `file`, `penjelasan`, `created_at`, `updated_at`) VALUES
(6, 'Panduan Pendaftaran 2023 PDF', 'PANDUAN-PENDAFTARAN-1693526911.pdf', '<p>-</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pascasarjana`
--

CREATE TABLE `tb_pascasarjana` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pascasarjana`
--

INSERT INTO `tb_pascasarjana` (`id`, `judul`, `gambar`, `penjelasan`, `created_at`, `updated_at`) VALUES
(5, 'Pamflet Belakang', 'jkXaekdASjyM4dkVnaSjIj3tXZGjWgvtrhpyKTQN.jpg', '<p>-</p>', NULL, NULL),
(6, 'Pamflet Depan', '1KAYj4bM3xKI0SiAkqmVmrjTMLWcC4XHav98wCws.jpg', '<p>-</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_lulusan`
--

CREATE TABLE `tb_profil_lulusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_profil_lulusan`
--

INSERT INTO `tb_profil_lulusan` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Ekonomi Pembanguanan', 'l8crll1P6AHdM2F1eXewAscppoeqGKAKRhUrcFPs.png', NULL, NULL),
(2, 'Manajemen', 'x1CselV4O26SYgOHdsXzoO0jwk7zzj3oYVl0OdBp.png', NULL, NULL),
(3, 'Sistem Informasi', '6DHtee0dqN2JHki6GuNEDlfqivg8m3xmoW0lj5kv.png', NULL, NULL),
(4, 'Informatika', 'EUsnqkhMNrrW9q9GM9NR56zM8AvhDwF0phrt7GKl.png', NULL, NULL),
(5, 'Kehutanan', 'ULBQK3DXtN2m0v4sH5W2ZG8Q4A1YHFioD9jxRjJA.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_program_studi`
--

CREATE TABLE `tb_program_studi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_program_studi`
--

INSERT INTO `tb_program_studi` (`id`, `id_fakultas`, `nama_prodi`, `gelar`, `created_at`, `updated_at`) VALUES
(2, 2, 'Ekonomi Pembangunan', 'S.E', NULL, NULL),
(3, 2, 'Manajemen', 'S.M', NULL, NULL),
(5, 4, 'Sistem Informasi', 'S.Kom', NULL, NULL),
(6, 4, 'Informatika', 'S.Kom', NULL, NULL),
(7, 4, 'Kehutanan', 'S.Hut', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `tujuanslider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_syarat_pendaftaran`
--

CREATE TABLE `tb_syarat_pendaftaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_syarat_pendaftaran`
--

INSERT INTO `tb_syarat_pendaftaran` (`id`, `judul`, `gambar`, `penjelasan`, `created_at`, `updated_at`) VALUES
(1, 'Syarat Pendaftaran', 'BY1WkorCLGIF9Q9mYgqISkZ9vgW7DDA031rOcs1O.png', '<p>Membayar Biaya Pendaftaran <strong>Rp. 200.000, - (pagi) Rp. 250.000, - (Malam)</strong> di <strong>Bank Syariah Indonesia (BSI) 7019689478</strong><br />\r\nMenyerahkan <strong>Bukti Pembayaran</strong> di Loket Pendaftaran.<br />\r\nFotocopy <strong>Ijazah/SKL</strong> terlegalisir 2 Lembar;<br />\r\nFotocopy <strong>KTP &amp; Kartu Keluarga</strong> 2 Lembar;<br />\r\n<strong>Pas Foto</strong> 2x3 dan 3x4 2 Lembar;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mjumain', 'mjumain11@gmail.com', '2023-08-27 20:20:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nEIqawCZapqBxZA8pXTtnbebjAQQRUtB9rZ9ru5TzJk1kAEXggWEyg476OTK', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(2, 'iksan', 'iksan21@gmail.com', '2023-08-27 20:20:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9yC7lN4Tb5', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(3, 'aldi', 'accessrate23@gmail.com', '2023-08-27 20:20:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9yC7lN4Tb5', '2023-08-27 20:20:14', '2023-08-27 20:20:14'),
(4, 'user_access', 'useraccess10@gmail.com', '2023-08-27 20:20:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9yC7lN4Tb5', '2023-08-27 20:20:14', '2023-08-27 20:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tb_akreditasi`
--
ALTER TABLE `tb_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_alur_pendaftaran`
--
ALTER TABLE `tb_alur_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_biaya_pendaftaran`
--
ALTER TABLE `tb_biaya_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_biaya_perkuliahan`
--
ALTER TABLE `tb_biaya_perkuliahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_brosur`
--
ALTER TABLE `tb_brosur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gelombang`
--
ALTER TABLE `tb_gelombang`
  ADD PRIMARY KEY (`id_gelombang`);

--
-- Indexes for table `tb_hasil_cbt`
--
ALTER TABLE `tb_hasil_cbt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jalur_pendaftaran`
--
ALTER TABLE `tb_jalur_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kapasitas`
--
ALTER TABLE `tb_kapasitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_panduan_pendaftaran`
--
ALTER TABLE `tb_panduan_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pascasarjana`
--
ALTER TABLE `tb_pascasarjana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profil_lulusan`
--
ALTER TABLE `tb_profil_lulusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_syarat_pendaftaran`
--
ALTER TABLE `tb_syarat_pendaftaran`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_akreditasi`
--
ALTER TABLE `tb_akreditasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_alur_pendaftaran`
--
ALTER TABLE `tb_alur_pendaftaran`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_biaya_pendaftaran`
--
ALTER TABLE `tb_biaya_pendaftaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_biaya_perkuliahan`
--
ALTER TABLE `tb_biaya_perkuliahan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_brosur`
--
ALTER TABLE `tb_brosur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_gelombang`
--
ALTER TABLE `tb_gelombang`
  MODIFY `id_gelombang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_hasil_cbt`
--
ALTER TABLE `tb_hasil_cbt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jalur_pendaftaran`
--
ALTER TABLE `tb_jalur_pendaftaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kapasitas`
--
ALTER TABLE `tb_kapasitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_panduan_pendaftaran`
--
ALTER TABLE `tb_panduan_pendaftaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pascasarjana`
--
ALTER TABLE `tb_pascasarjana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profil_lulusan`
--
ALTER TABLE `tb_profil_lulusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_syarat_pendaftaran`
--
ALTER TABLE `tb_syarat_pendaftaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
