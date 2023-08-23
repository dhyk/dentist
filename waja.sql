-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 03:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waja`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bhp`
--

CREATE TABLE `bhp` (
  `id_bhp` int(10) NOT NULL,
  `bhp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `lahir` date DEFAULT NULL,
  `kelamin` varchar(10) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `wa` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `reakmmedis` varchar(50) DEFAULT NULL,
  `riwayat` varchar(50) DEFAULT NULL,
  `alergi` varchar(1000) DEFAULT NULL,
  `barcode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prosedur`
--

CREATE TABLE `prosedur` (
  `id_prosedur` int(10) NOT NULL,
  `prosedur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subbhp`
--

CREATE TABLE `subbhp` (
  `id_subbhp` int(10) NOT NULL,
  `subbhp` varchar(100) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `id_bhp` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subprosedur`
--

CREATE TABLE `subprosedur` (
  `id_subprosedur` int(10) NOT NULL,
  `subprosedur` varchar(100) DEFAULT NULL,
  `id_prosedur` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keluhan` varchar(1000) DEFAULT NULL,
  `prosedur` varchar(200) DEFAULT NULL,
  `subprosedur` varchar(200) DEFAULT NULL,
  `bhp` varchar(200) DEFAULT NULL,
  `subbhp` varchar(200) DEFAULT NULL,
  `biaya` double DEFAULT NULL,
  `id_pasien` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `bhp`
--
ALTER TABLE `bhp`
  ADD PRIMARY KEY (`id_bhp`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `prosedur`
--
ALTER TABLE `prosedur`
  ADD PRIMARY KEY (`id_prosedur`);

--
-- Indexes for table `subbhp`
--
ALTER TABLE `subbhp`
  ADD PRIMARY KEY (`id_subbhp`);

--
-- Indexes for table `subprosedur`
--
ALTER TABLE `subprosedur`
  ADD PRIMARY KEY (`id_subprosedur`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bhp`
--
ALTER TABLE `bhp`
  MODIFY `id_bhp` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prosedur`
--
ALTER TABLE `prosedur`
  MODIFY `id_prosedur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subbhp`
--
ALTER TABLE `subbhp`
  MODIFY `id_subbhp` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subprosedur`
--
ALTER TABLE `subprosedur`
  MODIFY `id_subprosedur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
