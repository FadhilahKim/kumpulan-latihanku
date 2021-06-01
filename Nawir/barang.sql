-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 03:46 PM
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
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_barang`
--

CREATE TABLE `dt_barang` (
  `nama` varchar(35) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `expired` varchar(30) NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `kode_barang` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_barang`
--

INSERT INTO `dt_barang` (`nama`, `jenis`, `expired`, `kondisi`, `kode_barang`) VALUES
('Oppo A57', 'Barang Elektronik', '-', 'Baik', 'be00001'),
('New Era', 'Fashion', '-', 'Baik', 'bf00001'),
('Blueband', 'Bahan Kue', '12-02-2020', 'Rusak', 'bk00001'),
('Biskuat', 'Kue', '01-02-2020', 'Baik', 'bk00101'),
('Mie Sedap Soto', 'Makanan', '12-12-2020', 'Baik', 'bm00001'),
('Fanta', 'Minuman', '17-01-2020', 'Baik', 'bm01001'),
('Yamaha Mio', 'Motor', '-', 'Baik', 'bm02001'),
('Beras Kepala cap Berlian', 'Pangan', '30-01-2020', 'Baik', 'bp00001'),
('Lifeboy', 'Sabun Mandi', '10-02-2022', 'Baik', 'bs00001'),
('Sunsilk', 'Shampo', '20-12-2021', 'Rusak', 'bs01001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_barang`
--
ALTER TABLE `dt_barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
