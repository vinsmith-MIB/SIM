-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 05:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_number`, `id_user`, `id_produk`, `jumlah`, `created_at`, `updated_at`, `total_amount`) VALUES
(1, 'INV-6660d0d7e46cc', 1, 1, 3, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 450000.00),
(2, 'INV-6660d0d7e54b9', 1, 2, 9, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 1800000.00),
(3, 'INV-6660d0d7e5970', 1, 3, 4, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 1000000.00),
(4, 'INV-6660d0d7e5e5e', 1, 4, 4, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 1120000.00),
(5, 'INV-6660d0d7e63b3', 1, 5, 4, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 1200000.00),
(6, 'INV-6660d0d7e6b70', 1, 6, 6, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 2100000.00),
(7, 'INV-6660d0d7e738a', 1, 7, 6, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 2400000.00),
(8, 'INV-6660d0d7e7a25', 1, 8, 3, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 1350000.00),
(9, 'INV-6660d0d7e8074', 1, 9, 1, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 500000.00),
(10, 'INV-6660d0d7e8625', 1, 10, 1, '2024-06-05 13:55:51', '2024-06-05 13:55:51', 55000.00);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `kategori_seo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `kategori_seo`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirts', 't-shirts', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(2, 'Jeans', 'jeans', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(3, 'Jackets', 'jackets', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(4, 'Shoes', 'shoes', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(5, 'Accessories', 'accessories', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(6, 'Sweaters', 'sweaters', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(7, 'Dresses', 'dresses', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(8, 'Hats', 'hats', '2024-06-05 08:59:37', '2024-06-05 08:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota_asal` varchar(255) DEFAULT NULL,
  `kodepos` varchar(255) DEFAULT NULL,
  `telpon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_kota` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumens`
--

INSERT INTO `konsumens` (`id`, `nama_user`, `alamat`, `kota_asal`, `kodepos`, `telpon`, `email`, `foto`, `id_kota`, `created_at`, `updated_at`) VALUES
(1, 'kevin cahyo', 'jl. lembaga, RT.04', 'Tarakan', '7012', '085923783599', 'kevincahyo.22051@mhs.unesa.ac.id', 'iH5fCGa6Q5fCDVaq2hEhKuzEuszQXGu6G0K8qfWo.png', 1, '2024-06-05 12:59:15', '2024-06-05 12:59:15'),
(2, '051_Kevin Cahyo Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05 17:26:19', '2024-06-05 17:26:19'),
(3, 'ke fa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05 19:03:48', '2024-06-05 19:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `kota_seo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `nama_kota`, `ongkir`, `kota_seo`, `created_at`, `updated_at`) VALUES
(1, 'Surabaya', 15000, 'surabaya', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(2, 'Malang', 20000, 'malang', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(3, 'Sidoarjo', 12000, 'sidoarjo', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(4, 'Jember', 25000, 'jember', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(5, 'Batu', 18000, 'batu', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(6, 'Probolinggo', 22000, 'probolinggo', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(7, 'Mojokerto', 17000, 'mojokerto', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(8, 'Blitar', 23000, 'blitar', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(9, 'Kediri', 19000, 'kediri', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(10, 'Pasuruan', 21000, 'pasuruan', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(11, 'Lumajang', 24000, 'lumajang', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(12, 'Trenggalek', 26000, 'trenggalek', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(13, 'Probolinggo', 22000, 'probolinggo', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(14, 'Banyuwangi', 28000, 'banyuwangi', '2024-06-05 11:09:28', '2024-06-05 11:09:28'),
(15, 'Tuban', 19000, 'tuban', '2024-06-05 11:09:28', '2024-06-05 11:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2024_05_16_145733_create_admins_table', 1),
(6, '2024_05_16_145744_create_kategoris_table', 1),
(7, '2024_05_16_145757_create_kotas_table', 1),
(8, '2024_05_16_145813_create_konsumen_table', 1),
(9, '2024_05_16_145821_create_produks_table', 1),
(10, '2024_05_16_145830_create_moduls_table', 1),
(11, '2024_05_22_091328_add_type_to_users_table', 1),
(12, '2024_06_02_220447_create-table-keranjangs', 1),
(13, '2024_06_05_042153_create_permission_tables', 1),
(14, '2024_06_05_155710_lksadfjlsdkjfa;slk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `moduls`
--

CREATE TABLE `moduls` (
  `id_modul` bigint(20) UNSIGNED NOT NULL,
  `nama_modul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `static_content` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view products', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(2, 'create products', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(3, 'edit products', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(4, 'delete products', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(5, 'view orders', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(6, 'create orders', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(7, 'edit orders', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(8, 'delete orders', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(9, 'view users', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(10, 'create users', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(11, 'edit users', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(12, 'delete users', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `produk_seo` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `dibeli` varchar(255) NOT NULL,
  `diskon` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `id_kategori`, `nama_produk`, `produk_seo`, `harga`, `stok`, `satuan`, `gambar`, `dibeli`, `diskon`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'T-Shirt Basic', 't-shirt-basic', 150000, 100, 'pcs', 'tshirt-basic.jpg', '0', 0, 'T-Shirt Basic dengan bahan katun berkualitas tinggi.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(2, 1, 'T-Shirt Logo', 't-shirt-logo', 200000, 80, 'pcs', 'tshirt-logo.jpg', '0', 10, 'T-Shirt dengan logo brand tercetak di bagian depan.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(3, 2, 'Jeans Basic', 'jeans-basic', 250000, 70, 'pcs', 'jeans-basic.jpg', '0', 0, 'Celana jeans basic yang nyaman digunakan sehari-hari.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(4, 2, 'Jeans Ripped', 'jeans-ripped', 280000, 60, 'pcs', 'jeans-ripped.jpg', '0', 15, 'Celana jeans dengan gaya ripped yang trendi.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(5, 3, 'Jacket Bomber', 'jacket-bomber', 300000, 50, 'pcs', 'jacket-bomber.jpg', '0', 0, 'Jaket bomber dengan desain modern.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(6, 4, 'Sneakers Casual', 'sneakers-casual', 350000, 40, 'pcs', 'sneakers-casual.jpg', '0', 0, 'Sneakers casual dengan tampilan yang stylish.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(7, 5, 'Watch Classic', 'watch-classic', 400000, 30, 'pcs', 'watch-classic.jpg', '0', 0, 'Jam tangan klasik dengan desain elegan.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(8, 6, 'Sweater Knit', 'sweater-knit', 450000, 20, 'pcs', 'sweater-knit.jpg', '0', 0, 'Sweater dengan bahan rajut yang hangat.', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(9, 7, 'Dress Floral', 'dress-floral', 500000, 10, 'pcs', 'dress-floral.jpg', '0', 0, 'Dress dengan motif bunga yang menarik', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(10, 8, 'Hat Snapback', 'hat-snapback', 55000, 5, 'pcs', 'hat-snapback.jpg', '0', 0, 'Topi snapback dengan desain yang trendy.', '2024-06-05 08:59:37', '2024-06-05 08:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37'),
(2, 'user', 'web', '2024-06-05 08:59:37', '2024-06-05 08:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tfNW2Hl6v7l4CWEvmIUzUHdwhdT4HuaWUKaLpR66', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoid3FSaGRRVHJzU3Y4S083cFNuWURuOVhKTGJocHVseHZ5bm1RbDJDZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL29yZGVyIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1717646246);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `id_konsumen` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `id_konsumen`) VALUES
(1, 'Kevin Admin', 'admin@gmail.com', NULL, '$2y$12$9DgGECldIdyAZcZnEUxPpOWQOnonkf/gS4d0lHbqJuVIfodSXBLwC', NULL, '2024-06-05 08:59:37', '2024-06-05 08:59:37', 0, 1),
(2, 'Kevin User', 'user@gmail.com', NULL, '$2y$12$ij0RqESesoGw8sVEXvmRleN9zCLVzsKPKQVz4BUsYw/PqWxTe5swy', NULL, '2024-06-05 08:59:37', '2024-06-05 08:59:37', 0, 0),
(3, '051_Kevin Cahyo Pratama', 'kevin.cahyo.2003@gmail.com', NULL, '$2y$12$P5u.6Dzv7orfN1/qu3ijUOvTD5y4gk4.8EfL8lazQ3Mm1ag0gCKHG', NULL, '2024-06-05 17:26:19', '2024-06-05 17:26:19', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoice_number_unique` (`invoice_number`),
  ADD KEY `invoices_id_user_foreign` (`id_user`),
  ADD KEY `invoices_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjangs_id_user_foreign` (`id_user`),
  ADD KEY `keranjangs_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsumens_id_kota_foreign` (`id_kota`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_id_kategori_foreign` (`id_kategori`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_konsumen` (`id_konsumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `moduls`
--
ALTER TABLE `moduls`
  MODIFY `id_modul` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `keranjangs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `konsumens`
--
ALTER TABLE `konsumens`
  ADD CONSTRAINT `konsumens_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;

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
