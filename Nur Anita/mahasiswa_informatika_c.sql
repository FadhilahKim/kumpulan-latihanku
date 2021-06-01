-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 03:48 PM
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
-- Database: `mahasiswa_informatika_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` char(8) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` char(9) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `jenis_kelamin`, `Alamat`) VALUES
('D0218021', 'Martinus Pataloan', 'Laki-laki', 'Toraja'),
('D0218022', 'Mildayanti', 'Perempuan', 'Enrekang'),
('D0218023', 'Nadia Pebrianti', 'Perempuan', 'Somba'),
('D0218024', 'Nirwana', 'Perempuan', 'Paku'),
('D0218025', 'Nur Anita', 'Perempuan', 'Passarang'),
('D0218026', 'Nur Aynun', 'Perempuan', 'Parabaya'),
('D0218027', 'Nur Ilza Zalzabila', 'Perempuan', 'Campa'),
('D0218028', 'Nurfadhilah', 'Perempuan', 'Apoleang'),
('D0218029', 'Magfirah', 'Perempuan', 'Campa'),
('D0218030', 'Nur Hidayah', 'Perempuan', 'Monjopai'),
('D0218031', 'Deden Saputra', 'Laki-laki', 'Tammangalle'),
('D0218032', 'Saddan', 'Laki-laki', 'Tinambung'),
('D0218033', 'Narti', 'Perempuan', 'Polewali'),
('D0218034', 'Iska Nurahayu', 'Perempuan', 'Tapango'),
('D0218035', 'Mulyantika', 'Perempuan', 'Polewali'),
('D0218036', 'Sri Mulyani', 'Perempuan', 'Campa'),
('D0218037', 'Silahuddin', 'Laki-laki', 'Pambusuang'),
('D0218038', 'Aidil Fitrawansyah', 'Laki-laki', 'Polewali'),
('D0218039', 'Muh Ryan Hasriman', 'Laki-laki', 'Polewali'),
('D0218040', 'Muh Nawir', 'Laki-laki', 'Mapilli'),
('D0218041', 'Sitti Nadira', 'Perempuan', 'Campa'),
('D0218042', 'Rahmat Riadi', 'Laki-laki', 'Mambi'),
('D0218043', 'Nardi', 'Laki-laki', 'Rangas'),
('D0218044', 'Zaikal Hidayat ', 'Laki-laki', 'Majene'),
('D0218045', 'Susan Ramadina', 'Perempuan', 'Pasangkayu'),
('D0218046', 'Suriani', 'Perempuan', 'Sendana'),
('D0218047', 'Surya Ayu Ningsih', 'Perempuan', 'Mapilli'),
('D0218048', 'Badliana', 'Perempuan', 'Pambusuang'),
('D0218049', 'Annisa Azzahra', 'Perempuan', 'Majene');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
