-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 09.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(128) NOT NULL,
  `no_telepon` varchar(128) NOT NULL,
  `pemesan_id_undangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `no_telepon`, `pemesan_id_undangan`) VALUES
(1, 'Ahmad', '', 21),
(2, 'Ahmad', '089123456789', 21),
(3, '', '', 21),
(4, 'Sandi', '91293', 22),
(5, 'haha', '123123', 20),
(6, 'Ahmad', '129312', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangan`
--

CREATE TABLE `undangan` (
  `id_undangan` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar_1` varchar(255) NOT NULL,
  `harga` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `undangan`
--

INSERT INTO `undangan` (`id_undangan`, `judul`, `deskripsi`, `gambar`, `gambar_1`, `harga`) VALUES
(19, 'Eka - Iqbal', 'Spesifikasi undangan :\r\n– Ukuran lipat 15×15 cm, ukuran terbuka 15×30 cm\r\n– Kertas ivory 230 gr\r\n– Cetak fullcolour\r\n– Laminasi doff', 'Eka-Iqbal-1-1.jpg', 'Eka-Iqbal-2-1.jpg', 2391),
(20, 'Alfi - Is', 'Spesifikasi undangan :\r\n– Ukuran lipat 15×15 cm, ukuran terbuka 15×30 cm\r\n– Kertas ivory 230 gr\r\n– Cetak fullcolour\r\n– Laminasi doff', 'Alfi-Is-3.jpg', 'Alfi-Is-2.jpg', 2255),
(21, 'Atikah - Edy', 'Spesifikasi undangan :\r\n– Ukuran lipat 15×15 cm, ukuran terbuka 15×30 cm\r\n– Kertas ivory 230 gr\r\n– Cetak fullcolour\r\n– Laminasi doff', 'Atikah-Edy1.jpg', 'Atikah-Edy2.jpg', 2432),
(22, 'Wentri - Vega', 'Spesifikasi undangan :\r\n– Ukuran lipat 15×15 cm, ukuran terbuka 15×30 cm\r\n– Kertas ivory 230 gr\r\n– Cetak fullcolour\r\n– Laminasi doff', 'wentri-vega1.jpg', 'wentri-vega2.jpg', 2334),
(23, 'Wahyu - Dyah', 'Spesifikasi undangan :\r\n– Ukuran lipat 15×15 cm, ukuran terbuka 15×30 cm\r\n– Kertas ivory 230 gr\r\n– Cetak fullcolour\r\n– Laminasi doff', 'wahyu-dyah1.jpg', 'wahyu-dyah2-1.jpg', 2232),
(24, 'Revita - Indra', 'Spesifikasi undangan :\r\n– Ukuran lipat 15×15 cm, ukuran terbuka 15×30 cm\r\n– Kertas ivory 230 gr\r\n– Cetak fullcolour\r\n– Laminasi doff', 'RevitaIndra1.jpg', 'RevitaIndra2.jpg', 2431);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(12, 'Galih Prayoga', 'admin', '$2y$10$DDl4/AeCdCODO5UWqCyTnuxp23MeEJ2YOEeTclDtE/QlWNpYNQ9A2'),
(29, 'Bachtiar Nuhri', 'tiar', '$2y$10$SIzUsTvKydPLJ4lGxuXhQ.oRRqx3GNFbRsJVwpY7FSvf4NY3hReBS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `title`, `url`, `icon`) VALUES
(4, 'Pengguna', 'Kelola_pengguna', 'fas fa-fw fa-users'),
(9, 'Undangan', 'Kelola_undangan', 'fas fa-fw fa-folder'),
(10, 'Pesanan', 'Kelola_pesanan', 'fas fa-fw fa-folder');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indeks untuk tabel `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
