-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 12:49 PM
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
-- Database: `webtoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_webtoon`
--

CREATE TABLE `daftar_webtoon` (
  `id_webtoon` int(7) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `author` varchar(35) NOT NULL,
  `keterangan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_webtoon`
--

INSERT INTO `daftar_webtoon` (`id_webtoon`, `judul`, `genre`, `author`, `keterangan`) VALUES
(1, 'Young Mom', 'Drama', 'thetherm', ''),
(2, 'Eggnoid', 'Romantis', 'Archie The RedCat', ''),
(3, 'Virgo and The Sparklings', 'Fantasi', 'Annisa Nishfani / Ellie Goh', 'Hiatus'),
(4, 'My Anti-Fan', 'Romantis', 'Jaerim', ''),
(5, 'Wendy The Florist', 'Romantis', 'Bize / sizh', ''),
(6, 'Ngopi, yuk!', 'Slice Of Life', 'Sisifafa / Romy Hernadi', ''),
(7, 'Suddenly, I Became a Princess', 'Fantasi', 'Plutus / Spoon', ''),
(8, 'We Are Pharmacists', 'Drama', 'Qoni', ''),
(9, 'Mistake', 'Drama', 'Cindy Chwa', ''),
(10, 'My Unknown Husband', 'Drama', 'Haruka Gyuunyuu', ''),
(11, 'My Oppa is an Idol', 'Romantis', 'sungeun', ''),
(12, 'The Second Marriage', 'Romantis', 'Alphatart / SUMPUL', ''),
(13, 'Jajan Squad', 'Slice Of Life', 'Dito Satrio', ''),
(14, 'Take My Money', 'Romantis', 'AlohaDRY', ''),
(15, 'iMarried', 'Romantis', 'Angellinam / Takoyaki', ''),
(16, 'Terlalu Cantik', 'Komedi', 'Mas Okis / Mas Hiro', ''),
(17, 'Just Friend ', 'Komedi', 'CL NOV', ''),
(18, 'Hana Haru', 'Romantis', 'Seokwoo', 'Tamat'),
(19, 'Ghost\'s Wife', 'Romantis', 'se jeong', ''),
(20, 'Haunted Station', 'Horor', 'Danwoo', ''),
(21, 'Ghost Teller', 'Horor', 'QTT', ''),
(22, 'Nobless', 'Aksi', 'Jeho Son / Kwangsu Lee', ''),
(23, 'Tsundere\'s Rule', 'Webnovel', 'Yoon Soda / dopamine', ''),
(24, 'Aku dan Para Mantan', 'Webnovel', 'HADA / smilingsun', ''),
(25, 'Study Group', 'Aksi', 'Hyungwook Shin / Seungyeon Ryu', ''),
(26, 'Pasutri Gaje', 'Romantis', 'Annisa Nishfani', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_webtoon`
--
ALTER TABLE `daftar_webtoon`
  ADD PRIMARY KEY (`id_webtoon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_webtoon`
--
ALTER TABLE `daftar_webtoon`
  MODIFY `id_webtoon` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
