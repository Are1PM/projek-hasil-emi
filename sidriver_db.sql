-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 06:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidriver_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `nama_driver` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `nama_driver`, `username`, `password`, `no_hp`, `alamat`) VALUES
(22, 'safarudin ok', 'safar123', 'safar', '085246530343', '               salangga                                       '),
(23, 'nur', 'nur', 'nur', '085242768005', '            Planet Mars'),
(24, 'Irwan', 'irwan123', 'bi_juara', '085231191863', 'Andonohu'),
(25, 'Hendro', 'hendro123', 'bi_juara', '085299700807', 'andonohu     ');

-- --------------------------------------------------------

--
-- Table structure for table `driver_kendaraan`
--

CREATE TABLE `driver_kendaraan` (
  `id_driken` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status_kendaraan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `jenis_kendaraan`, `plat`, `tanggal_masuk`, `status_kendaraan`) VALUES
(2, 'avansa', 'DT 11', '2020-07-01', 'sedang diorder'),
(3, 'toyota', 'DT 12', '2020-05-05', 'ready'),
(4, 'Toyota Vios', 'DT 1608', '2020-07-05', 'ready'),
(5, 'Toyota Innova', 'DT 1610', '2020-07-05', 'ready'),
(6, 'Toyota Innova', 'DT 1196', '2020-07-05', 'ready'),
(7, 'Toyota Fortuner', 'DT 37', '2020-07-05', 'ready'),
(8, 'Toyota Hilux', 'DT 9114 AP', '2020-07-05', 'ready'),
(9, 'Nissan X-Traill', 'DT 1390', '2020-07-05', 'ready'),
(10, 'Toyota Camry', 'DT 29 F', '2020-07-05', 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `id_unit_kerja` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama_pegawai`, `alamat`, `no_hp`, `id_unit_kerja`, `username`, `password`) VALUES
(37, 'Muhammad Ashar', 'Andonohu', '082250120772', 9, 'ashar123', 'bi_juara'),
(39, 'Muhammad Yasin', 'Andonohu', '081211908708', 8, 'yasin123', 'bi_juara');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_kupon_bbm`
--

CREATE TABLE `pengajuan_kupon_bbm` (
  `id_pengajuan_kupon_bbm` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_pengisian` date NOT NULL,
  `jarak_tempuh` varchar(10) NOT NULL,
  `jenis_bbm` varchar(20) NOT NULL,
  `voucher` varchar(20) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_spbu` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_kupon_bbm`
--

INSERT INTO `pengajuan_kupon_bbm` (`id_pengajuan_kupon_bbm`, `tanggal_pengajuan`, `tanggal_pengisian`, `jarak_tempuh`, `jenis_bbm`, `voucher`, `id_driver`, `id_spbu`, `id_kendaraan`, `status`, `keterangan`) VALUES
(17, '2020-07-08', '2020-07-08', '400', 'Premium', '600000', 24, 2, 2, 2, 'pass'),
(20, '2020-07-16', '2020-07-16', '200', 'Premium', '300000', 22, 3, 4, 2, 'pass'),
(21, '2020-07-19', '2020-07-19', '200', 'Premium', '300000', 22, 2, 5, 1, ''),
(22, '2020-07-20', '2020-07-20', '200', 'Pertalite', '300000', 22, 3, 4, 1, ''),
(23, '2020-07-20', '2020-07-20', '200', 'Pertalite', '300000', 22, 3, 4, 0, ''),
(24, '2020-07-20', '2020-07-20', '200', 'Pertalite', '300000', 22, 3, 4, 0, ''),
(25, '2020-07-20', '2020-07-20', '200', 'Pertalite', '300000', 22, 3, 4, 0, ''),
(26, '2020-07-20', '2020-07-20', '200', 'Premium', '300000', 22, 2, 4, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_ldp`
--

CREATE TABLE `pengajuan_ldp` (
  `id_pengajuan_ldp` int(11) NOT NULL,
  `tempat_tujuan` varchar(50) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal_usulan` date NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `kebutuhan_driver` varchar(5) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_ldp`
--

INSERT INTO `pengajuan_ldp` (`id_pengajuan_ldp`, `tempat_tujuan`, `kegiatan`, `perihal`, `tanggal_usulan`, `tanggal_berangkat`, `tanggal_kembali`, `kebutuhan_driver`, `id_driver`, `nip`, `id_kendaraan`, `status`, `keterangan`) VALUES
(4, 'kolaka', 'kastip kolaka', 'kas titipan dikolaka', '2020-07-08', '2020-07-08', '2020-07-08', '1', 24, 37, 4, 1, ''),
(6, 'bau-bau', 'kastip bau-bau', 'kastitipan di bau-bau', '2020-07-13', '2020-07-13', '2020-07-13', '1', 24, 37, 4, 1, ''),
(7, 'kolaka', 'kastip kolaka', 'kas titipan dikolaka', '2020-07-16', '2020-07-16', '2020-07-16', '1', 23, 37, 3, 2, ''),
(8, 'kolaka', 'kastip kolaka', 'kas titipan dikolaka', '2020-07-16', '2020-07-16', '2020-07-16', '1', 23, 37, 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_servis`
--

CREATE TABLE `pengajuan_servis` (
  `id_pengajuan_servis` int(11) NOT NULL,
  `tanggal_usulan` date NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  `uraian_laporan` varchar(100) NOT NULL,
  `jangka_waktu` int(5) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_tempat_servis` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_servis`
--

INSERT INTO `pengajuan_servis` (`id_pengajuan_servis`, `tanggal_usulan`, `tanggal_perbaikan`, `uraian_laporan`, `jangka_waktu`, `id_driver`, `id_tempat_servis`, `id_kendaraan`, `status`, `keterangan`) VALUES
(6, '2020-07-06', '2020-07-06', 'servis berkala', 1, 24, 2, 6, 2, 'pass'),
(9, '2020-07-16', '2020-07-16', 'servis berkala', 2, 22, 2, 4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan_bbm`
--

CREATE TABLE `persetujuan_bbm` (
  `id_persetujuan_bbm` int(11) NOT NULL,
  `id_sla` int(11) NOT NULL,
  `id_pengajuan_kupon_bbm` int(11) NOT NULL,
  `tanggal_persetujuan` date NOT NULL,
  `nota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persetujuan_bbm`
--

INSERT INTO `persetujuan_bbm` (`id_persetujuan_bbm`, `id_sla`, `id_pengajuan_kupon_bbm`, `tanggal_persetujuan`, `nota`) VALUES
(59, 1, 17, '2020-07-16', ''),
(60, 1, 20, '2020-07-16', ''),
(61, 1, 21, '2020-07-19', '20160101_125414.jpg'),
(62, 1, 22, '2020-07-20', '20160101_125414.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan_ldp`
--

CREATE TABLE `persetujuan_ldp` (
  `id_persetujuan_ldp` int(11) NOT NULL,
  `id_sla` int(11) NOT NULL,
  `id_pengajuan_ldp` int(11) NOT NULL,
  `tanggal_persetujuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `persetujuan_ldp`
--

INSERT INTO `persetujuan_ldp` (`id_persetujuan_ldp`, `id_sla`, `id_pengajuan_ldp`, `tanggal_persetujuan`) VALUES
(3, 1, 4, '2020-07-08'),
(5, 1, 6, '2020-07-13'),
(6, 1, 7, '2020-07-16'),
(7, 1, 8, '2020-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan_servis`
--

CREATE TABLE `persetujuan_servis` (
  `id_persetujuan_servis` int(11) NOT NULL,
  `id_sla` int(11) NOT NULL,
  `id_pengajuan_servis` int(11) NOT NULL,
  `tanggal_persetujuan` date NOT NULL,
  `nota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persetujuan_servis`
--

INSERT INTO `persetujuan_servis` (`id_persetujuan_servis`, `id_sla`, `id_pengajuan_servis`, `tanggal_persetujuan`, `nota`) VALUES
(4, 1, 6, '2020-07-16', ''),
(5, 1, 9, '2020-07-16', '20171221_221422.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spbu`
--

CREATE TABLE `spbu` (
  `id_spbu` int(11) NOT NULL,
  `nama_spbu` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spbu`
--

INSERT INTO `spbu` (`id_spbu`, `nama_spbu`, `alamat`) VALUES
(2, 'SPBU Martandu', 'Jalan Martandu'),
(3, 'SPBU Andonohu', 'Andonohu'),
(4, 'Pertamina Tipulu', 'Tipulu'),
(5, 'Pertamina Saranani', 'Saranani'),
(6, 'Pertamina Teratai', 'Teratai'),
(7, 'Pertamina Andonohu', 'Andonohu'),
(8, 'Pertamina Tapak Kuda', 'Tapak Kuda');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_servis`
--

CREATE TABLE `tempat_servis` (
  `id_tempat_servis` int(11) NOT NULL,
  `nama_tempat_servis` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_servis`
--

INSERT INTO `tempat_servis` (`id_tempat_servis`, `nama_tempat_servis`, `alamat`, `telepon`) VALUES
(1, 'bosowa', 'wua wua', '082292218369'),
(2, 'PT Hadji Kalla Kendari ', 'Jl. Ahmad Yani No. 4 Kendari', '0822xxxxxx'),
(3, 'Nissan Servis Center', 'Jl. Laode Hadi Wua-Wua', '0822xxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `nama_unit_kerja` varchar(40) NOT NULL,
  `manajer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `manajer`) VALUES
(6, 'FDSEK', 'Yudha Wirawan'),
(7, 'FAES', 'Ahmadi Rahman'),
(8, 'Unit PUR', 'Yonatha Famamaha Warae'),
(9, 'FKKK', 'Dedy Prasetyo'),
(10, 'Unit SLA', 'Gunawan');

-- --------------------------------------------------------

--
-- Table structure for table `unit_sla`
--

CREATE TABLE `unit_sla` (
  `Id_SLA` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_sla`
--

INSERT INTO `unit_sla` (`Id_SLA`, `nama`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'rabiul', 'mowila', '08xxx', 'rabiul123', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `driver_kendaraan`
--
ALTER TABLE `driver_kendaraan`
  ADD PRIMARY KEY (`id_driken`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_unit kerja` (`id_unit_kerja`);

--
-- Indexes for table `pengajuan_kupon_bbm`
--
ALTER TABLE `pengajuan_kupon_bbm`
  ADD PRIMARY KEY (`id_pengajuan_kupon_bbm`),
  ADD KEY `id_driken` (`id_driver`),
  ADD KEY `id_spbu` (`id_spbu`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `pengajuan_ldp`
--
ALTER TABLE `pengajuan_ldp`
  ADD PRIMARY KEY (`id_pengajuan_ldp`),
  ADD KEY `id_pegawai` (`nip`),
  ADD KEY `id_driken` (`id_driver`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `pengajuan_servis`
--
ALTER TABLE `pengajuan_servis`
  ADD PRIMARY KEY (`id_pengajuan_servis`),
  ADD KEY `id_driken` (`id_driver`),
  ADD KEY `id_tempat_servis` (`id_tempat_servis`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `persetujuan_bbm`
--
ALTER TABLE `persetujuan_bbm`
  ADD PRIMARY KEY (`id_persetujuan_bbm`),
  ADD KEY `id_sla` (`id_sla`),
  ADD KEY `id_pengajuan_kupon_bbm` (`id_pengajuan_kupon_bbm`);

--
-- Indexes for table `persetujuan_ldp`
--
ALTER TABLE `persetujuan_ldp`
  ADD PRIMARY KEY (`id_persetujuan_ldp`),
  ADD KEY `id_sla` (`id_sla`),
  ADD KEY `id_pengajuan_ldp` (`id_pengajuan_ldp`);

--
-- Indexes for table `persetujuan_servis`
--
ALTER TABLE `persetujuan_servis`
  ADD PRIMARY KEY (`id_persetujuan_servis`),
  ADD KEY `id_sla` (`id_sla`),
  ADD KEY `id_pengajuan_servis` (`id_pengajuan_servis`);

--
-- Indexes for table `spbu`
--
ALTER TABLE `spbu`
  ADD PRIMARY KEY (`id_spbu`);

--
-- Indexes for table `tempat_servis`
--
ALTER TABLE `tempat_servis`
  ADD PRIMARY KEY (`id_tempat_servis`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `unit_sla`
--
ALTER TABLE `unit_sla`
  ADD PRIMARY KEY (`Id_SLA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `driver_kendaraan`
--
ALTER TABLE `driver_kendaraan`
  MODIFY `id_driken` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengajuan_kupon_bbm`
--
ALTER TABLE `pengajuan_kupon_bbm`
  MODIFY `id_pengajuan_kupon_bbm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pengajuan_ldp`
--
ALTER TABLE `pengajuan_ldp`
  MODIFY `id_pengajuan_ldp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengajuan_servis`
--
ALTER TABLE `pengajuan_servis`
  MODIFY `id_pengajuan_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `persetujuan_bbm`
--
ALTER TABLE `persetujuan_bbm`
  MODIFY `id_persetujuan_bbm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `persetujuan_ldp`
--
ALTER TABLE `persetujuan_ldp`
  MODIFY `id_persetujuan_ldp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `persetujuan_servis`
--
ALTER TABLE `persetujuan_servis`
  MODIFY `id_persetujuan_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `spbu`
--
ALTER TABLE `spbu`
  MODIFY `id_spbu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tempat_servis`
--
ALTER TABLE `tempat_servis`
  MODIFY `id_tempat_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `unit_sla`
--
ALTER TABLE `unit_sla`
  MODIFY `Id_SLA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver_kendaraan`
--
ALTER TABLE `driver_kendaraan`
  ADD CONSTRAINT `driver_kendaraan_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `driver_kendaraan_ibfk_2` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_unit_kerja`) REFERENCES `unit_kerja` (`id_unit_kerja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_kupon_bbm`
--
ALTER TABLE `pengajuan_kupon_bbm`
  ADD CONSTRAINT `pengajuan_kupon_bbm_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_kupon_bbm_ibfk_2` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_kupon_bbm_ibfk_3` FOREIGN KEY (`id_spbu`) REFERENCES `spbu` (`id_spbu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_ldp`
--
ALTER TABLE `pengajuan_ldp`
  ADD CONSTRAINT `pengajuan_ldp_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_ldp_ibfk_2` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_ldp_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_servis`
--
ALTER TABLE `pengajuan_servis`
  ADD CONSTRAINT `pengajuan_servis_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_servis_ibfk_2` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_servis_ibfk_3` FOREIGN KEY (`id_tempat_servis`) REFERENCES `tempat_servis` (`id_tempat_servis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persetujuan_bbm`
--
ALTER TABLE `persetujuan_bbm`
  ADD CONSTRAINT `persetujuan_bbm_ibfk_1` FOREIGN KEY (`id_pengajuan_kupon_bbm`) REFERENCES `pengajuan_kupon_bbm` (`id_pengajuan_kupon_bbm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persetujuan_bbm_ibfk_2` FOREIGN KEY (`id_sla`) REFERENCES `unit_sla` (`Id_SLA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persetujuan_ldp`
--
ALTER TABLE `persetujuan_ldp`
  ADD CONSTRAINT `persetujuan_ldp_ibfk_1` FOREIGN KEY (`id_sla`) REFERENCES `unit_sla` (`Id_SLA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persetujuan_ldp_ibfk_2` FOREIGN KEY (`id_pengajuan_ldp`) REFERENCES `pengajuan_ldp` (`id_pengajuan_ldp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persetujuan_servis`
--
ALTER TABLE `persetujuan_servis`
  ADD CONSTRAINT `persetujuan_servis_ibfk_1` FOREIGN KEY (`id_pengajuan_servis`) REFERENCES `pengajuan_servis` (`id_pengajuan_servis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persetujuan_servis_ibfk_2` FOREIGN KEY (`id_sla`) REFERENCES `unit_sla` (`Id_SLA`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
