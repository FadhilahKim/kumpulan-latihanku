-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 10:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihancrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(7) NOT NULL,
  `pemesan` varchar(50) NOT NULL,
  `buku` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tlpn` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `pemesan`, `buku`, `jenis`, `jumlah`, `tlpn`, `email`) VALUES
(1, 'Nadia Puspita', 'One Piece', 'Komik', 10, '+6282355776897', 'nadiapuspita@gmail.com'),
(2, 'Hasniati', 'Black Jack 1-13', 'Komik', 1, '082344567546', 'elizabethgaluh2.3@gmail.com'),
(3, 'Nur Aynun', 'Black Jack 1-13', 'Komik', 3, '082234565432', 'aynun1234@gmail.com'),
(4, 'Mulyantika', 'Detektif Conan 1-10', 'Komik', 1, '081323453213', 'elizabethgaluh2.3@gmail.com'),
(5, 'Nur Aynun', 'Black Jack 1-13', 'Komik', 1, '+6285399234546', 'aynun1234@gmail.com'),
(6, 'Nur Aynun', 'Black Jack 1-13', 'Komik', 1, '+6285399234546', 'aynun1234@gmail.com'),
(7, 'Deden', 'Black Jack 1-13', 'Komik', 1, '+6285399234546', 'aynun1234@gmail.com'),
(8, 'Harmayanti', 'Detektif Conan 1-10', 'Komik', 1, '+6285399234546', 'aynun1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_penulis` int(11) NOT NULL,
  `judul` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_penulis`, `judul`, `jenis`, `penulis`, `harga`) VALUES
(30, 'Black Jack 1-13', 'Komik', 'Aoyama Gosho', 'Rp 650.000'),
(27, 'Detektif Conan 1-10', 'Komik', 'Aoyama Gosho', 'Rp 240.000'),
(28, 'Black Jack 1-13', 'Komik', ' Osamu Tezuka', 'Rp 10.000'),
(21, 'Golgo 13 Premium Golgo VS Shin Heiki', 'Komik', 'Takao Saito', 'Rp 650.000'),
(26, 'Ryo san no Jidai ', 'Komik', 'Akimoto Osamu', 'Rp 372.000'),
(23, 'Naruto The Movie : Guardians Of The Crescent Moon Kingdom', 'Komik', 'Masashi Kishimoto', 'Rp 60.000'),
(24, 'Dragon Ball: that time I got reincarnated as Yamcha ', 'Komik', 'Akira Toriyama', 'Rp 20.000'),
(25, 'One Piece 1-10', 'Komik', 'Eiichiro Oda', 'Rp 240.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_penulis`),
  ADD KEY `indexsiswa` (`jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
