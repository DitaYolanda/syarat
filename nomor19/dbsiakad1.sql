-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 12:01 PM
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
-- Database: `dbsiakad1`
--

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
(1751911, 'Shin Yuna', 'Perempuan', 'Kota bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbjadmin`
--

CREATE TABLE `tbjadmin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbjadmin`
--

INSERT INTO `tbjadmin` (`id_admin`, `nama_admin`, `password`, `no_tlp`, `alamat`) VALUES
(101922, 'Shinta', 'admin', 87754321, 'Kota Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('siswa','guru','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(444, 'gery', '024d7f84fff11dd7e8d9c510137a2381', 'gery rahmadi', 'admin'),
(3242, 'Yuna', '202cb962ac59075b964b07152d234b70', 'shin Yuna', 'siswa'),
(5532, 'Rena', '900150983cd24fb0d6963f7d28e17f72', 'Rena Zahra', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `tbmatpel`
--

CREATE TABLE `tbmatpel` (
  `namaguru` int(11) NOT NULL,
  `namakelas` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `jam` int(11) NOT NULL,
  `namamatpel` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `NIS` int(20) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JENIS KELAMIN` varchar(20) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`NIS`, `NAMA`, `JENIS KELAMIN`, `ALAMAT`) VALUES
(1063311, 'Via Primadani', 'Perempuan', 'Kota bandung'),
(1234567, 'ghea', 'Perempuan', 'Kota Bandung'),
(4562386, 'Ardi', 'Laki-laki', 'Kota Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbjadmin`
--
ALTER TABLE `tbjadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indexes for table `tbmatpel`
--
ALTER TABLE `tbmatpel`
  ADD PRIMARY KEY (`namaguru`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `nip` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1751912;

--
-- AUTO_INCREMENT for table `tbjadmin`
--
ALTER TABLE `tbjadmin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101923;

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5533;

--
-- AUTO_INCREMENT for table `tbmatpel`
--
ALTER TABLE `tbmatpel`
  MODIFY `namaguru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `NIS` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4562387;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
