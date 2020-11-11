-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 05.06
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangandb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_05_073134_create_table_sumber', 2),
(5, '2020_06_07_101324_buat_tabel_sumber', 3),
(6, '2020_06_08_090653_buat_tabel_pemasukan', 4),
(7, '2020_06_08_091716_buat_tabel_pengeluaran', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber_pemasukan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `sumber_pemasukan`, `nominal`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 'PT. Maju Jaya', 200000, '2020-06-11 10:00:00', 'Pendapatan Jasa Web', '2020-06-10 01:27:26', '2020-07-16 19:35:55'),
(5, 'PT. Sentosa', 3000000, '2020-07-18 09:00:00', 'Pendapatan pembuatan Aplikasi', '2020-07-16 19:36:53', '2020-07-16 19:37:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `tanggal`, `nominal`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, '2020-06-03 11:00:00', 12000000, 'Pembelian Komputer', '2020-07-16 19:38:14', '2020-07-16 19:38:14'),
(6, '2020-07-19 10:00:00', 1000000, 'Bonus karyawan', '2020-07-16 19:40:49', '2020-07-16 19:40:49'),
(7, '2020-07-01 10:00:00', 6000000, 'Gaji Karyawan', '2020-07-16 19:54:12', '2020-07-16 19:54:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbers`
--

CREATE TABLE `sumbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `sumbers`
--

INSERT INTO `sumbers` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(8, 'PT. Maju Jaya', 'Fadilla', '2020-07-16 19:18:26', '2020-07-16 19:51:20'),
(9, 'PT. Sentosa Grup', 'Halimah', '2020-07-16 19:19:07', '2020-07-16 19:19:07'),
(10, 'PT. SURYA CITRA', 'Ariyani', '2020-07-16 19:19:48', '2020-07-16 19:19:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hak_akses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `hak_akses`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DIAN HALIMAH ARIYANI', 'dian@fikom.ac.id', 'administrator', NULL, '$2y$10$VatNbLOD59IvgzsU6K0C.OJd6TMgyniARgDlO0cNc7uoKQjAmYwNC', 'y5CUmXu4mEccl3AVg4Kb3mhXgXQoOQX7buVug6W71ADJS4pt5JiWqDuii3zl', '2020-06-05 00:29:01', '2020-06-05 00:29:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumbers`
--
ALTER TABLE `sumbers`
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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sumbers`
--
ALTER TABLE `sumbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
