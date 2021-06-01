-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2019 pada 05.41
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcommer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telepon` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `telepon`, `email`, `kategori`, `pesan`) VALUES
(6, 'yub', 8678658, 'admin@yubhar.com', 'Saran', 'asdasedwqer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('designonlie@gmail.com', 'deo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`id_user`, `email`, `password`) VALUES
(1, 'user@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `crud_id` int(11) NOT NULL,
  `crud_nama` varchar(30) NOT NULL,
  `crud_emali` varchar(30) NOT NULL,
  `crud_telp` int(20) NOT NULL,
  `crud_kategori` varchar(20) NOT NULL,
  `crud_gambar` varchar(20) NOT NULL,
  `crud_deskripsi` varchar(400) NOT NULL,
  `crud_waktu` varchar(20) NOT NULL,
  `crud_konfirmasi` varchar(200) NOT NULL,
  `crud_hasil` varchar(200) NOT NULL,
  `crud_pembayaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`crud_id`, `crud_nama`, `crud_emali`, `crud_telp`, `crud_kategori`, `crud_gambar`, `crud_deskripsi`, `crud_waktu`, `crud_konfirmasi`, `crud_hasil`, `crud_pembayaran`) VALUES
(139, 'yubhar', '', 89089, 'logo', '', '890 89', '1 Hari', 'Belum Dikonfirmasi', 'belum selesai', ''),
(140, 'yub', '', 89089, 'logo', '', '890 89', '3 Hari', 'Belum Dikonfirmasi', 'belum selesai', ''),
(142, 'yub', '789@890.90', 89089, 'Spanduk', '_1_.jpg', 'aa', '3 hari', 'Selesai', '16_CLEAN Logo Intro_V2.rar', '1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `username`, `level`) VALUES
(1, 'yub', 'yub@deo.com', 'yubhar123', 'yub', 'admin'),
(2, 'Yubhar', 'yubhar@yub.com', 'yubhar123', 'yubhar', 'user'),
(14, '123', '123@123.com', '$2y$10$WwBGBnKHIBwTrZ0ykKUxAuMaIvFJMmMSWLHvcXl0bQYiQOb/e/dSy', '123', 'admin'),
(15, '789', '789@890.90', '$2y$10$10BjOMz/vy6a7oJtq4mYUuiiZoBd9f2W5GwBFwUQeLcZz93jTgvp2', '789', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`crud_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `crud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
