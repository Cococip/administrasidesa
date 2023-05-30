-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 11:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `hubungan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `id_kk`, `id_warga`, `hubungan`) VALUES
(2, 4, 18, 'anak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datang`
--

CREATE TABLE `tbl_datang` (
  `id_datang` int(11) NOT NULL,
  `nik_datang` varchar(50) NOT NULL,
  `nama_datang` varchar(200) NOT NULL,
  `jekel` enum('LK','PR','','') NOT NULL,
  `tgl_datang` date NOT NULL,
  `id_warga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_datang`
--

INSERT INTO `tbl_datang` (`id_datang`, `nik_datang`, `nama_datang`, `jekel`, `tgl_datang`, `id_warga`) VALUES
(4, '123', 'Agus', 'PR', '2022-11-17', 18),
(5, '123456', 'Agus jj', 'PR', '2022-11-19', 18),
(6, '123456789', 'ksasa', 'LK', '2022-11-12', 18),
(7, '123456', 'Agus g', 'LK', '2022-11-12', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `ukuran` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `nama_file`, `nama`, `type`, `ukuran`) VALUES
(2, 'KTP.jpg', 'KTP Warga', '.jpg', 27.88),
(13, 'KK.jpg', 'KK Warga', '.jpg', 26.73),
(14, 'Surat_Nikah.jpg', 'Surat Nikah Warga', '.jpg', 59.61),
(26, 'DIAGRAM_SUBSISTEM_GIS.jpg', 'Diagram', '.jpg', 21.38),
(27, 'KURUKULUM_1.png', 'Kurikulum', '.png', 425.36),
(28, 'KURUKULUM_4.png', 'kurikulum', '.png', 408.27),
(29, 'Sosialisasi_PK_1.png', 'Sosialisasi', '.png', 317);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala_kel` varchar(20) NOT NULL,
  `kelurahan_desa` varchar(20) NOT NULL,
  `rt1` varchar(5) NOT NULL,
  `rw1` varchar(5) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kk`
--

INSERT INTO `tbl_kk` (`id_kk`, `no_kk`, `kepala_kel`, `kelurahan_desa`, `rt1`, `rw1`, `kecamatan`, `kota`, `prov`) VALUES
(1, '3105192708940020', 'Agus Mulyana', 'Kapuk', '006', '013', 'Cengkareng', 'Jakarta Barat', 'DKI Jakarta'),
(4, '3105192708940009', 'Evan Golist', 'Rawabuaya', '06', '013', 'Cengkareng', 'Jakarta Barat', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lahir`
--

CREATE TABLE `tbl_lahir` (
  `id_lahir` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jenkel` enum('LK','PR','','') NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lahir`
--

INSERT INTO `tbl_lahir` (`id_lahir`, `nama`, `tgl_lh`, `jenkel`, `id_kk`) VALUES
(1, 'Alfiano', '2022-10-01', 'PR', 1),
(3, 'Putra', '2022-10-07', 'LK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mendu`
--

CREATE TABLE `tbl_mendu` (
  `id_mendu` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `tgl_mendu` date NOT NULL,
  `sebab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE `tbl_warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `id_kk` int(11) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kawin` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`id_warga`, `nik`, `id_kk`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelurahan`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`) VALUES
(18, '3105192708940001', 1, 'Agus Mulyana', 'jakarta', '2022-10-15', 'Laki-Laki', 'Kwarasan', '06', '013', 'islam', 'Sudah', 'apa ya', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:Admin 2:Ketua RT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `alamat`, `level`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Agus Mulyana', 'Jakarta', 1),
(2, 'Ketua RT 06', '81dc9bdb52d04dc20036dbd8313ed055', 'Bpk Satimin', 'Jakarta', 2),
(6, 'Admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'Evan', 'Tanggerang', 1),
(7, 'Admin2', 'c84258e9c39059a89ab77d846ddab909', 'Dian', 'Jakarta', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_kk` (`id_kk`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `tbl_datang`
--
ALTER TABLE `tbl_datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tbl_lahir`
--
ALTER TABLE `tbl_lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tbl_mendu`
--
ALTER TABLE `tbl_mendu`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD UNIQUE KEY `id_kk` (`id_kk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_datang`
--
ALTER TABLE `tbl_datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_lahir`
--
ALTER TABLE `tbl_lahir`
  MODIFY `id_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mendu`
--
ALTER TABLE `tbl_mendu`
  MODIFY `id_mendu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD CONSTRAINT `tbl_anggota_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tbl_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_anggota_ibfk_2` FOREIGN KEY (`id_warga`) REFERENCES `tbl_warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_datang`
--
ALTER TABLE `tbl_datang`
  ADD CONSTRAINT `tbl_datang_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `tbl_warga` (`id_warga`);

--
-- Constraints for table `tbl_lahir`
--
ALTER TABLE `tbl_lahir`
  ADD CONSTRAINT `tbl_lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tbl_kk` (`id_kk`);

--
-- Constraints for table `tbl_mendu`
--
ALTER TABLE `tbl_mendu`
  ADD CONSTRAINT `tbl_mendu_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `tbl_warga` (`id_warga`);

--
-- Constraints for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD CONSTRAINT `tbl_warga_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tbl_kk` (`id_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
