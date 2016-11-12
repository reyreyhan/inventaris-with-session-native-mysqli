-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 10:53 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`) VALUES
('alvin', 'root', 'admin'),
('ivan', 'root', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `no` int(4) NOT NULL,
  `code` varchar(6) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `nm_barang` text NOT NULL,
  `merk` text NOT NULL,
  `deskripsi` text NOT NULL,
  `ruang` text NOT NULL,
  `gedung` varchar(60) NOT NULL,
  `kds_barang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`no`, `code`, `kategori`, `nm_barang`, `merk`, `deskripsi`, `ruang`, `gedung`, `kds_barang`) VALUES
(1, 'B0001', 'INTERIOR', 'KURSI', 'INFORMA', 'KURSI BESI DAN SPON, WARNA ABU ABU', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(2, 'B0002', 'INTERIOR', 'KURSI', 'INFORMA', 'KURSI BESI DAN SPON, WARNA ABU ABU', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(3, 'B0003', 'INTERIOR', 'KURSI', 'INFORMA', 'KURSI BESI DAN SPON, WARNA ABU ABU', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(4, 'B0004', 'INTERIOR', 'KURSI', 'INFORMA', 'KURSI BESI DAN SPON, WARNA ABU ABU', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(5, 'B0005', 'INTERIOR', 'MEJA', 'INFORMA', 'MEJA BESI DAN KAYU, WARNA COKLAT', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(6, 'B0006', 'PERALATAN ELEKTRONIK', 'AC', 'FUJITSU', 'AC INDOOR WARNA PUTIH', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(7, 'B0007', 'PERALATAN KOMUNIKASI', 'TELEPHONE', 'PANASONIC', 'TELEPHONE KABEL WARNA PUTIH', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(8, 'B0008', 'PERALATAN KOMUNIKASI', 'TELEPHONE', 'PANASONIC', 'TELEPHONE KABEL WARNA PUTIH', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(9, 'B0009', 'KOMPUTER', 'KOMPUTER ALL IN 1', 'LENOVO', 'KOMPUTER ALL IN 1 WARNA PUTIH', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(10, 'B0010', 'INTERIOR', 'MEJA', 'INFORMA', 'MEJA KAYU WARNA COKLAT', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK'),
(11, 'B0011', 'INTERIOR', 'MEJA', 'INFORMA', 'MEJA KAYU WARNA COKLAT', 'LT 1 - LOBBY', 'KANTOR PUSAT', 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `no` int(4) NOT NULL,
  `code` varchar(6) NOT NULL,
  `nm_gedung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`no`, `code`, `nm_gedung`) VALUES
(1, 'G01', 'KANTOR PUSAT'),
(2, 'G02', 'TDC'),
(3, 'G03', 'UJP'),
(4, 'G04', 'MKP');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `no` int(4) NOT NULL,
  `code` varchar(6) NOT NULL,
  `nm_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`no`, `code`, `nm_kategori`) VALUES
(1, 'K01', 'PERIPHERAL KOMPUTER'),
(2, 'K02', 'INTERIOR'),
(3, 'K03', 'KOMPUTER'),
(4, 'K04', 'PERALATAN KOMUNIKASI'),
(5, 'K05', 'PERALATAN ELEKTRONIK'),
(6, 'K06', 'JARINGAN KOMPUTER'),
(7, 'K07', 'PERALATAN PEMADAM API'),
(8, 'K08', 'PERALATAN MEDIS'),
(9, 'K09', 'PERALATAN MUSIK'),
(10, 'K10', 'PERALATAN OLAHRAGA');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `no` int(4) NOT NULL,
  `code` varchar(6) NOT NULL,
  `nm_ruang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`no`, `code`, `nm_ruang`) VALUES
(1, 'R001', 'LT 1 - LOBBY'),
(2, 'R002', 'LT 1 - PERPUS'),
(3, 'R003', 'LT 1 - CONTROL ROM '),
(4, 'R004', 'LT 1 - SCM '),
(5, 'R005', 'LT 1 - VIP LOUNGE'),
(6, 'R006', 'LT 1 - KKU'),
(7, 'R007', 'LT 1 - R. RAPAT BOILER'),
(8, 'R008', 'LT 1 - R. LAKTASI'),
(9, 'R009', 'LT 1 - MUSOLLAH'),
(10, 'R010', 'LT 1 - KANTIN'),
(11, 'R011', 'LT 1 - LORONG'),
(12, 'R012', 'LT 2 - DIREKTUR OPERASI'),
(13, 'R013', 'LT 2 - SEKDIR OPERASI'),
(14, 'G014', 'LT 2 - DIREKTUR KEUANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('alvin', 'root', 'admin'),
('ivan', 'root', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
