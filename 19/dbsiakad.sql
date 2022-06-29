-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 08:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `datajadwal`
--

CREATE TABLE `datajadwal` (
  `namaguru` varchar(50) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `hari` date NOT NULL,
  `jam` int(11) NOT NULL,
  `namamatpel` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datamatpel`
--

CREATE TABLE `datamatpel` (
  `namaguru` varchar(50) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `hari` date NOT NULL,
  `jam` int(11) NOT NULL,
  `namamatpel` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ALAMAT` int(11) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `nip` int(20) NOT NULL,
  `namaguru` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`nip`, `namaguru`, `jk`, `alamat`) VALUES
(1665511, 'Remar', 'Perempuan', 'Kota Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `namaguru` varchar(50) NOT NULL,
  `namakelas` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` text NOT NULL,
  `namamatpel` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `NO` int(10) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `NIS` int(11) NOT NULL,
  `JENIS KELAMIN` varchar(20) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`NO`, `NAMA`, `NIS`, `JENIS KELAMIN`, `ALAMAT`) VALUES
(2, 'Zea', 1112455, 'Perempuan', 'Kota bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datajadwal`
--
ALTER TABLE `datajadwal`
  ADD PRIMARY KEY (`namaguru`);

--
-- Indexes for table `datamatpel`
--
ALTER TABLE `datamatpel`
  ADD PRIMARY KEY (`namaguru`);

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`namaguru`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `nip` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1665512;

--
-- AUTO_INCREMENT for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
