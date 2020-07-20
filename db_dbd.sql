-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 12:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(5) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_pasien`) VALUES
(2, 'Ahmad Setyo'),
(3, 'Riza Maulana'),
(7, 'Anissa Sriutami');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `nama_kriteria` varchar(40) NOT NULL,
  `bobot` int(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `keterangan`) VALUES
(1, 'Demam', 25, 'profit'),
(2, 'Bintik', 10, 'profit'),
(3, 'Trombosit', 30, 'cost'),
(4, 'Lab', 30, 'profit'),
(5, 'Nyeri', 5, 'profit');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_alt` int(5) NOT NULL,
  `demam` int(5) DEFAULT NULL,
  `bintik` enum('Ada','Tidak') DEFAULT NULL,
  `trombosit` int(10) DEFAULT NULL,
  `nyerisendi` enum('Ya','Tidak') DEFAULT NULL,
  `lab` enum('Positif','Negatif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alt`, `demam`, `bintik`, `trombosit`, `nyerisendi`, `lab`) VALUES
(2, 2, 39, 'Ada', 120000, 'Ya', 'Positif'),
(3, 3, 37, 'Tidak', 153000, 'Ya', 'Negatif'),
(7, 7, 38, 'Tidak', 160000, 'Tidak', 'Positif');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_konfersi`
--

CREATE TABLE `nilai_konfersi` (
  `id_konfersi` int(5) NOT NULL,
  `id_nilai2` int(5) NOT NULL,
  `kc1` int(5) NOT NULL,
  `kc2` int(5) NOT NULL,
  `kc3` int(5) NOT NULL,
  `kc4` int(5) NOT NULL,
  `kc5` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_konfersi`
--

INSERT INTO `nilai_konfersi` (`id_konfersi`, `id_nilai2`, `kc1`, `kc2`, `kc3`, `kc4`, `kc5`) VALUES
(2, 2, 2, 2, 1, 2, 2),
(3, 3, 1, 1, 2, 2, 1),
(7, 7, 2, 1, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `preferensi`
--

CREATE TABLE `preferensi` (
  `preferensi` float(10,5) NOT NULL,
  `id_pref` int(5) NOT NULL,
  `id_alt2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferensi`
--

INSERT INTO `preferensi` (`preferensi`, `id_pref`, `id_alt2`) VALUES
(1.00000, 1, 2),
(0.42117, 2, 3),
(0.36603, 3, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_konfersi`
--
ALTER TABLE `nilai_konfersi`
  ADD PRIMARY KEY (`id_konfersi`);

--
-- Indexes for table `preferensi`
--
ALTER TABLE `preferensi`
  ADD PRIMARY KEY (`id_pref`),
  ADD KEY `id_alt2` (`id_alt2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
