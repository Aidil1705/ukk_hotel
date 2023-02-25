-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 08:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `keterangan`, `foto`) VALUES
(2, 'Sauna', 'Sauna Out Door', '../img/cb48601b04269941b6fea624500b881e565006a9386bef644283ea769e431225jpg'),
(3, 'Kolam', 'Sluas 100M²', '../img/867c95e58d2346654a4edb6e3ef58d6d6c09ba4bb61affaa175f9c318592e818jpg'),
(4, 'Pemandangan', 'Pemandangan Alam', '../img/6f46ee7fc87006b9b1432a53d7a24b038c327dfbf7c632b8f1a18940f320a0c4jpeg'),
(5, 'Gym', 'Gym dengan alat-alat yang lengkap', '../img/633bf3878be987f24e4f7955289fc424570439c44761ab5899cd2198e57686ccjpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `judul` char(20) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul`, `isi`, `gambar`) VALUES
(1, 'Tentang Kami', '<p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau, kid,s club yang luas menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengjapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaat ruang pentelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang<strong> </strong>mewah.</p>\r\n', ''),
(3, NULL, NULL, '../img/78ab932d1f38e63a3e90fffe4fe9ebb744a11208ad4c9a6855a7176ac82f6e6fjpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_jeniskamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `Fasilitas` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id_jeniskamar`, `nama_kamar`, `Fasilitas`, `gambar`) VALUES
(1, 'Superior', '<p><strong>Fasilitas</strong></p>\r\n\r\n<p>Kamar berukuran luas 32 m2<br />\r\nKamar mandi shower<br />\r\nCoffee Maker<br />\r\nAC<br />\r\nLED TV 32 inch</p>\r\n', '../img/4aa969469f99a18bba4974d1f56f9e0a3fcfbacbdb856f047132d58d52ae0137jpeg'),
(2, 'Deluxe', '<p><strong>Fasilitas</strong></p>\r\n\r\n<p>Kamar berukuran luas 45 m2<br />\r\nKamar mandi shower dan Bath tub<br />\r\nCoffee Maker<br />\r\nSofa<br />\r\nLED TV 40 inch<br />\r\nAC</p>\r\n', '../img/bce86100a25c13a44d16b167e74c10deb3f1565189f64f367800e687aa145c09.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_jenis_kamar` int(11) NOT NULL,
  `banyak_kamar` int(11) NOT NULL,
  `harga_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_jenis_kamar`, `banyak_kamar`, `harga_sewa`) VALUES
(1, 1, 24, 250000),
(3, 2, 994, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `banyak_kamar` int(11) NOT NULL,
  `nama_pemesan` varchar(25) NOT NULL,
  `nama_tamu` varchar(25) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `tlp` int(13) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_kamar`, `banyak_kamar`, `nama_pemesan`, `nama_tamu`, `jeniskelamin`, `alamat`, `tlp`, `tgl_checkin`, `tgl_checkout`, `status`) VALUES
(3, 1, 4, 'aidil', 'fikri', 'Laki-laki', 'sdfdsaf', 7344546, '2023-01-16', '2023-01-17', 2),
(4, 3, 6, 'ilham', 'ilham', 'Laki-laki', 'hghgh', 807987, '2023-01-25', '2023-01-26', 1),
(5, 1, 4, 'test', 'test', 'Perempuan', 'jl.imhslkdf', 987654321, '2023-01-26', '2023-01-27', 1);

--
-- Triggers `pesan`
--
DELIMITER $$
CREATE TRIGGER `kurangkamar` AFTER INSERT ON `pesan` FOR EACH ROW BEGIN
UPDATE kamar SET banyak_kamar = banyak_kamar - NEW.banyak_kamar 
WHERE id_kamar = NEW.id_kamar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `level` enum('resepsionis','admin') NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `level`, `password`) VALUES
(1, 'resepsionis', 'aidil', 'resepsionis', 'resepsionis'),
(2, 'admin', 'admin', 'admin', 'admin'),
(9, 'test', 'test', 'admin', 'test'),
(10, 'test', 'test', 'admin', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id_jeniskamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_jenis_kamar` (`id_jenis_kamar`),
  ADD KEY `banyak_kamar` (`banyak_kamar`),
  ADD KEY `banyak_kamar_2` (`banyak_kamar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `banyak_dipesan` (`banyak_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_jeniskamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_jenis_kamar`) REFERENCES `jenis_kamar` (`id_jeniskamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
