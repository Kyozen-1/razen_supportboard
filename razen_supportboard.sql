-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Bulan Mei 2023 pada 11.46
-- Versi server: 5.7.33
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razen_supportboard`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiturs`
--

CREATE TABLE `fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fiturs`
--

INSERT INTO `fiturs` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Manajemen Staff & HR', 'Melacak informasi karyawan dengan mudah dan nyaman. Cari staf melalui opsi filter sederhana, dan edit serta kelola informasi mereka sesuka Anda.', '2023-05-18 05:21:37', '2023-05-18 05:21:37'),
(2, 'Pelacakan Proyek', 'Buat timesheet untuk tetap di atas tenggat waktu. Lacak waktu yang dihabiskan untuk setiap proyek, dan dapatkan ikhtisar tentang berapa banyak waktu yang tersisa.', '2023-05-18 05:21:54', '2023-05-18 05:21:54'),
(3, 'Perencana Anggaran', 'Tetap kendalikan keuangan anda! Tetapkan anggaran Anda dan dapatkan pembaruan waktu nyata tentang seberapa baik Anda menaatinya. Edit dan perbarui anggaran sesering yang diperlukan.', '2023-05-18 05:22:07', '2023-05-18 05:22:07'),
(4, 'Manajemen Laporan', 'Dapatkan laporan terperinci dan real-time untuk membantu Anda melacak kinerja bisnis Anda. Gunakan grafik dan visual lainnya untuk membuat data mudah dipahami dan ditindaklanjuti.', '2023-05-18 05:22:19', '2023-05-18 05:22:19'),
(5, 'Event & Papan pengumuman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.', '2023-05-18 05:22:28', '2023-05-18 05:22:28'),
(6, 'Manajemen Prospek', 'Dapatkan informasi real-time tentang prospek yang dihasilkan melalui divisi marketing Anda.', '2023-05-18 05:22:37', '2023-05-18 05:22:37'),
(7, 'Manajemen Penjualan', 'Jaga agar proses penjualan Anda teratur. Edit dan kelola faktur, pembayaran, pengeluaran, dan nota dengan mudah.', '2023-05-18 05:22:47', '2023-05-18 05:22:47'),
(8, 'Integrasi Zoom, Slack & Telegram', 'Jadwalkan rapat Zoom dengan mudah dan sinkronkan detail rapat. Dapatkan pemberitahuan real-time tentang aktivitas perusahaan di channel Slack Anda', '2023-05-18 05:22:55', '2023-05-18 05:22:55'),
(9, 'Manajemen Gaji', 'Sederhanakan tugas penggajian Anda. Buat karyawan Anda senang dengan slip gaji yang akurat dan tepat waktu. Hasilkan pembayaran massal dengan cepat dan mudah.', '2023-05-18 05:23:05', '2023-05-18 05:23:05'),
(10, 'KPI (Key Performance Indicator)', 'Pemilik lahan atau petani perawat lahan bisa melaporkan aktifitas aktifitas yang dikerjakan tiap hari atau minggu, sebagai bentuk dokumentasi, foto, peta utk investor.', '2023-05-18 05:23:15', '2023-05-18 05:23:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_berandas`
--

CREATE TABLE `landing_page_berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `section_6` json DEFAULT NULL,
  `section_7` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_berandas`
--

INSERT INTO `landing_page_berandas` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `section_6`, `section_7`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Platform Untuk Mengelola Seluruh Bisnis anda untuk operasional lebih produktif & terintegrasi\", \"gambar\": \"6465a8c1c0702-230518.png\", \"deskripsi\": \"<p>Kurangi waktu untuk tugas administratif, dan lebih banyak waktu untuk bekerja, menggunakan GET ERP, SISTEM BISNIS ALL-IN-ONE.</p>\"}', '{\"judul\": \"DAPATKAN SEMUA ALAT PENTING UNTUK PENGELOLAAN KEUANGAN BISNIS\", \"konten\": [{\"id\": \"6465e8d7eea16\", \"judul\": \"Kelola SDM - Aset Terbesar Bisnis\", \"gambar\": \"6465e8d7e5f66-230518.png\", \"deskripsi\": \"Solusi all-in-one pengelolaan HR / SDM bisnis.\"}, {\"id\": \"6465e8d7f0211\", \"judul\": \"Manajemen Akuntansi dan Tagihan\", \"gambar\": \"6465e8d7eeb3a-230518.png\", \"deskripsi\": \"Tetap patuh dan laporkan keuangan Anda secara akurat. Dapatkan daftar aset, liabilitas, pengeluaran, pendapatan, ekuitas, tetapkan tujuan keuangan, dan buat mereka dilacak secara otomatis berdasarkan catatan keuangan.\"}, {\"id\": \"6465e8d7f1791\", \"judul\": \"Integrasi dengan aplikasi\", \"gambar\": \"6465e8d7f02fe-230518.png\", \"deskripsi\": \"Jadwalkan rapat Zoom dengan mudah dan sinkronkan detail rapat. Dapatkan notifikasi proyek yang dikirim langsung ke aplikasi Telegram Anda secara real-time. Berkolaborasi lebih baik dengan anggota tim, dan tetap up-to-date dengan proyek Anda.\"}], \"deskripsi\": \"<p>Sederhanakan pekerjaan anda, dan bawa bisnis anda ke tingkat berikutnya.</p>\", \"sub_judul\": \"Solusi all-in-one pengelolaan bisnis.\"}', '{\"judul\": \"Dapatkan Semua Fitur dalam Satu Aplikasi dengan harga terjangkau.\", \"gambar\": \"64660dd7b5c2f-230518.png\", \"konten\": [{\"id\": \"646610edf273e\", \"ikon\": \"fa-puzzle-piece\", \"judul\": \"Kelola semua urusan karyawan dengan Razen GET ERP\", \"deskripsi\": \"Mempekerjakan 5, 50, atau 500 orang, dengan GET ERP, Anda dapat mengelola semua urusan karyawan. Dari perekrutan hingga kinerja dan gaji - semuanya berada di bawah satu atap\"}, {\"id\": \"646610edf2741\", \"ikon\": \"fa-map-signs\", \"judul\": \"Sesuaikan sistem HRM Anda yang mudah digunakan\", \"deskripsi\": \"Sistem HRM lengkap yang dapat disesuaikan, serbaguna, dan mudah digunakan. Anda juga dapat mengatur Kehadiran, Kehadiran Massal, Liburan, Cuti, Rapat, Aset, Dokumen, dan Kebijakan Perusahaan. Buat, Edit, dan Filter sesuai kenyamanan Anda.\"}], \"deskripsi\": \"Achieve More in Less Time.\"}', '{\"judul\": \"Fitur\", \"deskripsi\": \"<p>MAKSIMALKAN SUMBERDAYA ANDA, TERHUBUNG DENGAN PELANGGAN ANDA, DAN JADILAH LEBIH PRODUKTIF</p>\"}', '{\"judul\": \"Sudah punya website ? Tapi bermasalah ??\", \"deskripsi\": \"Menyediakan sistem informasi yang pas untuk kebutuhan anda\", \"sub_judul\": \"Yuk pakai produk kami\"}', '{\"judul\": \"Mengembangkan bisnis kecil bersama sama\", \"deskripsi\": \"Kami membuat aplikasi web & smartphone modern untuk membantu Anda memulai pekerjaan bisnis harian Anda. Inilah yang dikatakan pelanggan tentang pekerjaan kami.\"}', '{\"judul\": \"Paket harga\", \"deskripsi\": \"Solusi manajemen penjualan dan layanan pelanggan optimal untuk perusahaan Anda\"}', '2023-05-17 21:25:37', '2023-05-18 05:30:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_media_sosials`
--

CREATE TABLE `master_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_media_sosials`
--

INSERT INTO `master_media_sosials` (`id`, `nama`, `kode_ikon`, `created_at`, `updated_at`) VALUES
(1, 'Instagram', 'fab fa-instagram', '2023-05-17 20:38:39', '2023-05-17 20:38:39'),
(2, 'Tik Tok', 'fab fa-tiktok', '2023-05-17 20:38:58', '2023-05-17 20:38:58'),
(3, 'Youtube', 'fab fa-youtube', '2023-05-17 20:39:09', '2023-05-17 20:39:09'),
(4, 'LinkedIn', 'fab fa-linkedin-in', '2023-05-17 20:39:19', '2023-05-17 20:39:19'),
(5, 'Twitter', 'fab fa-twitter', '2023-05-17 20:39:32', '2023-05-17 20:39:32'),
(6, 'Facebook', 'fab fa-facebook-f', '2023-05-17 20:39:42', '2023-05-17 20:39:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_05_17_070920_create_profils_table', 2),
(5, '2023_05_17_075122_add_logo_kecil_to_profils', 3),
(6, '2023_05_18_024328_add_kerja_dari_jam_to_profils', 4),
(7, '2023_05_18_033437_create_master_media_sosials_table', 5),
(8, '2023_05_18_034121_create_pivot_profil_media_sosials_table', 6),
(9, '2023_05_18_040400_create_landing_page_berandas_table', 7),
(10, '2023_05_18_103909_create_produk_razens_table', 8),
(11, '2023_05_18_121619_create_fiturs_table', 9),
(12, '2023_05_18_221213_create_produks_table', 10),
(13, '2023_05_18_222805_create_testimonis_table', 11),
(14, '2023_05_18_224709_create_paket_hargas_table', 12),
(15, '2023_05_18_224940_create_pivot_paket_harga_fiturs_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_hargas`
--

CREATE TABLE `paket_hargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `status_popular` enum('ya','tidak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket_hargas`
--

INSERT INTO `paket_hargas` (`id`, `judul`, `deskripsi`, `status_popular`, `created_at`, `updated_at`) VALUES
(1, 'Basic Plan', 'Ideal untuk mencoba, solusi bisnis baru yang butuh aplikasi website saja.', 'tidak', '2023-05-19 00:29:41', '2023-05-19 00:46:22'),
(2, 'Professional Plan', 'Solusi untuk mendukung perkembangan bisnis, dapatkan aplikasi website dan smartphone yang terintegrasi .', 'ya', '2023-05-19 01:04:17', '2023-05-19 01:04:17'),
(3, 'Enterprise', 'Solusi terlengkap untuk mendukung kemajuan bisnis tanpa batas, dapatkan dukungan ekstra 24/7 dari tim kami.', 'tidak', '2023-05-19 01:05:54', '2023-05-19 01:05:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_paket_harga_fiturs`
--

CREATE TABLE `pivot_paket_harga_fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_harga_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_paket_harga_fiturs`
--

INSERT INTO `pivot_paket_harga_fiturs` (`id`, `paket_harga_id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 1, '100GB Bandwith Perbulan', '2023-05-19 00:29:41', '2023-05-19 00:29:41'),
(3, 1, '1 Akun Email', '2023-05-19 00:29:41', '2023-05-19 00:29:41'),
(4, 1, 'Dukungan dan pelatihan', '2023-05-19 00:29:41', '2023-05-19 00:29:41'),
(5, 1, '20GB Penyimpanan SSD', '2023-05-19 00:46:12', '2023-05-19 00:46:12'),
(6, 2, '50GB Penyimpanan SSD', '2023-05-19 01:04:17', '2023-05-19 01:04:17'),
(7, 2, '1TB Bandwith Perbulan', '2023-05-19 01:04:17', '2023-05-19 01:04:17'),
(8, 2, '5 Akun Email', '2023-05-19 01:04:17', '2023-05-19 01:04:17'),
(9, 2, 'Unlimited Subdomains', '2023-05-19 01:04:17', '2023-05-19 01:04:17'),
(10, 2, 'Dukungan dan pelatihan', '2023-05-19 01:04:17', '2023-05-19 01:04:17'),
(11, 3, '100GB Penyimpanan SSD', '2023-05-19 01:05:54', '2023-05-19 01:05:54'),
(12, 3, '1TB Bandwith Perbulan', '2023-05-19 01:05:54', '2023-05-19 01:05:54'),
(13, 3, 'Unlimited Akun Email', '2023-05-19 01:05:54', '2023-05-19 01:05:54'),
(14, 3, 'Unlimited Subdomains', '2023-05-19 01:05:54', '2023-05-19 01:05:54'),
(15, 3, 'Dukungan dan pelatihan khusus', '2023-05-19 01:05:54', '2023-05-19 01:05:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_profil_media_sosials`
--

CREATE TABLE `pivot_profil_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_profil_media_sosials`
--

INSERT INTO `pivot_profil_media_sosials` (`id`, `media_sosial_id`, `profil_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'https://www.instagram.com/', '2023-05-17 20:50:07', '2023-05-17 20:50:07'),
(2, 5, 1, 'https://www.twitter.com/', '2023-05-17 20:50:07', '2023-05-17 20:50:07'),
(3, 6, 1, 'https://www.facebook.com/', '2023-05-17 20:50:07', '2023-05-17 20:50:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `judul`, `deskripsi`, `ikon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Realtime Dashboard', 'Dalam real-time dashboard, data bisnis penting ditampilkan dalam bentuk grafik dan tabel yang interaktif dan mudah dipahami. Fitur ini memudahkan manajer dalam melihat kinerja bisnis mereka dalam waktu nyata dan membuat keputusan yang tepat dan strategis. Selain itu, real-time dashboard juga dapat membantu karyawan dalam memantau kinerja mereka dan mengambil tindakan yang diperlukan.', 'fa fa-shopping-cart', '6466a4082b99b-230518.png', '2023-05-18 15:17:44', '2023-05-18 15:17:44'),
(2, 'Sistem PoS', 'Fitur ini memungkinkan perusahaan untuk mengelola penjualan dan stok produk langsung terintegrasi pada sistem ERP. Dalam sistem ERP, sistem PoS dapat terintegrasi dengan modul penjualan dan inventaris.\r\n\r\nSistem PoS dalam sistem ERP juga memudahkan perusahaan dalam melacak penjualan dan memonitor kinerja penjualan mereka. Data penjualan dapat dihasilkan secara otomatis dan tersedia dalam bentuk laporan yang dapat dipantau oleh manajer. Hal ini dapat membantu perusahaan dalam membuat keputusan yang tepat dan strategis terkait dengan penjualan dan inventaris. Dengan menggunakan sistem PoS dalam sistem ERP, perusahaan dapat meningkatkan efisiensi dan produktivitas dalam mengelola penjualan dan inventaris mereka.', 'fas fa-location', '6466a43df26da-230518.png', '2023-05-18 15:18:38', '2023-05-18 15:18:38'),
(3, 'Kalender Proyek/Tugas', 'Dalam sistem ERP, proyek-proyek dapat dimonitor secara real-time melalui kalender yang terintegrasi dengan modul proyek. Setiap aktivitas proyek, seperti tugas, tenggat waktu, dan anggaran dapat dicatat dan dipantau melalui kalender. Fitur ini memudahkan manajer proyek untuk melihat jadwal proyek secara keseluruhan dan memastikan bahwa semua tugas dan aktivitas dilakukan tepat waktu.\r\n\r\nDengan menggunakan tracking proyek dalam kalender ERP, perusahaan dapat meningkatkan efisiensi dan produktivitas dalam mengelola proyek.', 'fas fa-money-bills', '6466a4734dcbc-230518.png', '2023-05-18 15:19:31', '2023-05-18 15:19:31'),
(4, 'Sistem Neraca Keuangan', 'Neraca keuangan terdiri dari dua bagian utama: aktiva dan kewajiban serta ekuitas. Bagian aktiva mencakup semua sumber daya yang dimiliki oleh perusahaan, seperti kas, piutang, inventaris, dan aset tetap. Bagian kewajiban dan ekuitas mencakup semua hutang yang dimiliki oleh perusahaan, seperti hutang dagang, hutang pajak, dan pinjaman bank, serta ekuitas pemilik, seperti saham dan laba ditahan. Dengan menggunakan neraca keuangan dalam sistem ERP, neraca keuangan dapat dihasilkan secara otomatis dengan menggunakan data keuangan yang tercatat dalam sistem. Hal ini dapat membantu perusahaan dalam memantau keuangan perusahaan secara real-time dan membuat keputusan yang tepat dan strategis.', 'fas fa-briefcase', '6466a4a4efe3c-230518.png', '2023-05-18 15:20:21', '2023-05-18 15:20:21'),
(5, 'Integrasi di Setiap Perangkat', 'Jadwalkan rapat Zoom dengan mudah dan sinkronkan detail rapat. Dapatkan pemberitahuan real-time tentang aktivitas perusahaan di channel Slack Anda.\r\n\r\nERP memungkinkan perusahaan untuk mengoptimalkan proses bisnis mereka dan meningkatkan efisiensi operasional, sehingga mengurangi biaya dan meningkatkan produktivitas.', 'fa fa-mobile-alt', '6466a4d086f88-230518.png', '2023-05-18 15:21:04', '2023-05-18 15:21:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_razens`
--

CREATE TABLE `produk_razens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk_razens`
--

INSERT INTO `produk_razens` (`id`, `nama`, `link`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Razen Teknologi', 'https://razenteknologi.com/', '646604774d6d9-230518.png', '2023-05-18 03:56:55', '2023-05-18 03:56:55'),
(2, 'Razen Studio', 'https://razenstudio.com/', '646604c3a1519-230518.png', '2023-05-18 03:58:11', '2023-05-18 03:58:11'),
(3, 'Razen Project', 'https://razenproject.com/', '64660516d1230-230518.png', '2023-05-18 03:59:34', '2023-05-18 03:59:34'),
(4, 'Razen Institute', 'http://razeninstitute.com/', '64660546309e3-230518.png', '2023-05-18 04:00:22', '2023-05-18 04:00:22'),
(5, 'Razen Farm', 'http://razenfarm.com/', '6466055cda611-230518.png', '2023-05-18 04:00:44', '2023-05-18 04:00:44'),
(6, 'Razen Food', 'http://razenfood.com/', '646607855def7-230518.png', '2023-05-18 04:09:57', '2023-05-18 04:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo_kecil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja_dari_jam` time DEFAULT NULL,
  `kerja_sampai_jam` time DEFAULT NULL,
  `kerja_dari_hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja_sampai_hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `pt`, `no_hp`, `email`, `logo`, `alamat`, `created_at`, `updated_at`, `logo_kecil`, `kerja_dari_jam`, `kerja_sampai_jam`, `kerja_dari_hari`, `kerja_sampai_hari`) VALUES
(1, 'Razen Teknologi', 'PT Razen Teknologi Indonesia', '082299449494', 'hello@razen.co.id', '642b9aa063e73-230404.png', 'Yogyakarta', NULL, NULL, '6453110958d3f-230504.png', '08:00:00', '16:00:00', 'Senin', 'Sabtu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimoni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `jabatan`, `testimoni`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'John Smith', 'CEO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at.', '6466a82ce6db1-230518.jpg', '2023-05-18 15:35:25', '2023-05-18 15:35:25'),
(2, 'Jhon Doe', 'Marketing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at.', '6466a858954f8-230518.jpg', '2023-05-18 15:36:08', '2023-05-18 15:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razen Teknologi', 'razen_teknologi@razen.co.id', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'light-blue', 'default', 'vertical', 'pinned', 'fluid', 'rounded', NULL, NULL, '2023-05-17 21:21:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_hargas`
--
ALTER TABLE `paket_hargas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pivot_paket_harga_fiturs`
--
ALTER TABLE `pivot_paket_harga_fiturs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_paket_harga_fiturs_paket_harga_id_foreign` (`paket_harga_id`);

--
-- Indeks untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_profil_media_sosials_media_sosial_id_foreign` (`media_sosial_id`),
  ADD KEY `pivot_profil_media_sosials_profil_id_foreign` (`profil_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_razens`
--
ALTER TABLE `produk_razens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `paket_hargas`
--
ALTER TABLE `paket_hargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pivot_paket_harga_fiturs`
--
ALTER TABLE `pivot_paket_harga_fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk_razens`
--
ALTER TABLE `produk_razens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pivot_paket_harga_fiturs`
--
ALTER TABLE `pivot_paket_harga_fiturs`
  ADD CONSTRAINT `pivot_paket_harga_fiturs_paket_harga_id_foreign` FOREIGN KEY (`paket_harga_id`) REFERENCES `paket_hargas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD CONSTRAINT `pivot_profil_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_profil_media_sosials_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
