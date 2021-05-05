-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 04 Bulan Mei 2021 pada 13.35
-- Versi server: 5.7.32
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gabah_keringg`
--

CREATE TABLE `gabah_keringg` (
  `id_gabah_kering` int(11) NOT NULL,
  `kode_penerimaan` varchar(250) NOT NULL,
  `nama_gabah` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `berat_kotor` double NOT NULL,
  `total_potongan` float NOT NULL,
  `total_pot_zak` double NOT NULL,
  `total_berat` double NOT NULL,
  `total_bayar` double NOT NULL,
  `tgl_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gabah_keringg`
--

INSERT INTO `gabah_keringg` (`id_gabah_kering`, `kode_penerimaan`, `nama_gabah`, `tanggal`, `berat_kotor`, `total_potongan`, `total_pot_zak`, `total_berat`, `total_bayar`, `tgl_data`) VALUES
(1, 'INVMKPETMVW40E2', 'gabah lokal', '2021-04-30', 35, 1.75, 1, 33.25, 148350, '2021-04-29 17:00:00'),
(2, 'INVWE7LKCLB9LUU', 'gabah rendi', '2021-05-06', 45, 2.25, 2, 42.75, 187450, '2021-05-03 21:24:56');

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
(4, '2021_04_24_024225_penerimaan', 1),
(5, '2021_04_24_042401_tb_detail_penerimaan', 1);

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
-- Struktur dari tabel `tb_detail_penerimaan`
--

CREATE TABLE `tb_detail_penerimaan` (
  `id_detail_penerimaan` bigint(20) UNSIGNED NOT NULL,
  `kode_penerimaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` double NOT NULL,
  `potongan` double NOT NULL,
  `potongan_zak` double(8,2) NOT NULL,
  `berat_total` double NOT NULL,
  `bayar` double NOT NULL,
  `tgl_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_detail_penerimaan`
--

INSERT INTO `tb_detail_penerimaan` (`id_detail_penerimaan`, `kode_penerimaan`, `berat`, `potongan`, `potongan_zak`, `berat_total`, `bayar`, `tgl_data`) VALUES
(26, 'INVPUPBSWSQFCQW', 30, 5, 0.50, 30, 5000, '2021-05-04 01:16:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_giling_gabah`
--

CREATE TABLE `tb_giling_gabah` (
  `id_giling_gabah` int(11) NOT NULL,
  `kode_penerimaan` varchar(250) NOT NULL,
  `nama_gabah` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `berat_kotor` double NOT NULL,
  `total_potongan` float NOT NULL,
  `total_pot_zak` double NOT NULL,
  `total_berat` double NOT NULL,
  `total_bayar` double NOT NULL,
  `tgl_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_giling_gabah`
--

INSERT INTO `tb_giling_gabah` (`id_giling_gabah`, `kode_penerimaan`, `nama_gabah`, `tanggal`, `berat_kotor`, `total_potongan`, `total_pot_zak`, `total_berat`, `total_bayar`, `tgl_data`) VALUES
(3, 'INVMKPETMVW40E2', 'gabah lokal', '2021-05-05', 35, 1.75, 1, 33.25, 148350, '2021-05-03 20:22:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_pot_zak`
--

CREATE TABLE `tb_master_pot_zak` (
  `id_master_pot_zak` int(11) NOT NULL,
  `potongan` float NOT NULL,
  `tgl_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_master_pot_zak`
--

INSERT INTO `tb_master_pot_zak` (`id_master_pot_zak`, `potongan`, `tgl_data`) VALUES
(1, 0.5, '2021-04-24 07:47:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerimaan`
--

CREATE TABLE `tb_penerimaan` (
  `id_penerimaan` bigint(20) UNSIGNED NOT NULL,
  `kode_penerimaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gabah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `berat_kotor` double NOT NULL,
  `total_potongan` double NOT NULL,
  `total_pot_zak` double NOT NULL,
  `total_berat` float NOT NULL,
  `harga` double NOT NULL,
  `total_bayar` double NOT NULL,
  `tgl_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_penerimaan`
--

INSERT INTO `tb_penerimaan` (`id_penerimaan`, `kode_penerimaan`, `nama_gabah`, `tanggal`, `berat_kotor`, `total_potongan`, `total_pot_zak`, `total_berat`, `harga`, `total_bayar`, `tgl_data`, `updated_at`) VALUES
(14, 'INVPUPBSWSQFCQW', 'Bagus Ramadan', '2021-05-04', 30, 1.5, 0.5, 28.5, 8000, 128800, '2021-05-04 08:42:38', '2021-05-04 08:42:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'rendi saputra', 'gorengmbah@gmail.com', '$2y$09$Kj7P6TmpAQcrnBMLTRjvc.JeLGd9BWPEvCQraiLcMoMpQG2zHINVS', 1),
(2, 'admin', 'admin@gmail.com', '$2y$10$pEBu.xtH2Jcv/8zccdaFheGUwKr/suVpw5DPd91hFadnknRL1HNkC', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gabah_keringg`
--
ALTER TABLE `gabah_keringg`
  ADD PRIMARY KEY (`id_gabah_kering`);

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
-- Indeks untuk tabel `tb_detail_penerimaan`
--
ALTER TABLE `tb_detail_penerimaan`
  ADD PRIMARY KEY (`id_detail_penerimaan`);

--
-- Indeks untuk tabel `tb_giling_gabah`
--
ALTER TABLE `tb_giling_gabah`
  ADD PRIMARY KEY (`id_giling_gabah`);

--
-- Indeks untuk tabel `tb_master_pot_zak`
--
ALTER TABLE `tb_master_pot_zak`
  ADD PRIMARY KEY (`id_master_pot_zak`);

--
-- Indeks untuk tabel `tb_penerimaan`
--
ALTER TABLE `tb_penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`);

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
-- AUTO_INCREMENT untuk tabel `gabah_keringg`
--
ALTER TABLE `gabah_keringg`
  MODIFY `id_gabah_kering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_penerimaan`
--
ALTER TABLE `tb_detail_penerimaan`
  MODIFY `id_detail_penerimaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_giling_gabah`
--
ALTER TABLE `tb_giling_gabah`
  MODIFY `id_giling_gabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_master_pot_zak`
--
ALTER TABLE `tb_master_pot_zak`
  MODIFY `id_master_pot_zak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_penerimaan`
--
ALTER TABLE `tb_penerimaan`
  MODIFY `id_penerimaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;