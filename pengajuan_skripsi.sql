-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 11:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuan_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int(11) NOT NULL,
  `jenis_aduan` varchar(100) NOT NULL,
  `tanggal_aduan` date NOT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `balasan` text DEFAULT NULL,
  `tanggal_balasan` date DEFAULT NULL,
  `lampiran_balasan` text DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `teknisi` varchar(100) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `jurusan`, `deleted_at`) VALUES
(2, 'Meike Isnawaty', 'Pendidikan Bahasa Inggris', '2021-10-10'),
(3, 'Yusuf Dwi Putra', 'Pendidikan IPA', NULL),
(4, 'Anto Saputra', 'Pendidikan Bahasa Inggris', NULL),
(6, 'Cecep Asep', 'Pendidikan Bahasa Inggris', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `judul1` text NOT NULL,
  `status1` varchar(50) NOT NULL,
  `judul2` text NOT NULL,
  `status2` varchar(50) NOT NULL,
  `judul3` text NOT NULL,
  `status3` varchar(50) NOT NULL,
  `status_pengajuan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `keterangan_prodi` varchar(255) DEFAULT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) DEFAULT NULL,
  `kode_pengajuan` varchar(100) NOT NULL,
  `url_persyaratan` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `nama`, `nim`, `jurusan`, `email`, `judul1`, `status1`, `judul2`, `status2`, `judul3`, `status3`, `status_pengajuan`, `keterangan`, `keterangan_prodi`, `pembimbing1`, `pembimbing2`, `kode_pengajuan`, `url_persyaratan`, `tanggal_pengajuan`) VALUES
(24, 'iwan saputra', '19011023', 'Pendidikan Bahasa Inggris', 'iwan@gmail.com', 'implementasi -------', 'implementasi ------- (DITERIMA)', '', '', '', '', 'Selesai', '', NULL, 'Anto Saputra', 'Cecep Asep', 'PNGJN12033859', '', '2021-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `username`) VALUES
(1, 'jaringan@gmail.com'),
(2, 'server@gmail.com'),
(3, 'website@gmail.com'),
(4, 'sistemdatabase@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `username`, `jurusan`, `password`, `foto`, `level`) VALUES
(23, 'fuad@gmail.com', 'Fuad Fawadhil', '1165', 'Agroteknologi', '202cb962ac59075b964b07152d234b70', '', 'Mahasiswa'),
(24, 'reloco5570@geeky83.com', 'wati', '12345', 'Agribisnis', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Mahasiswa'),
(25, 'fuad1@gmail.com', 'Fuad Fawadhil', '11651100566', 'Pendidikan Informatika', 'cc9ec6367707638f1fc7086dd39188ba', '', 'Mahasiswa'),
(26, 'putrierafahira06@gmail.com', 'Putri Era Fazira', '11850124939', 'Agroteknologi', '202cb962ac59075b964b07152d234b70', '', 'Mahasiswa'),
(27, 'fjewiofwefisdoh@sdgsd', 'putri fahira', '12345678', 'Agroteknologi', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Mahasiswa'),
(28, 'putrierafahira06@gmail.com', 'Putri Era ', '12345678', NULL, 'd9a7a8c8add2dad4ad96ab93530b8faf', '', 'Admin'),
(32, 'admin123@gmail.com', 'admin123', 'admin123', 'Pendidikan IPA', '0192023a7bbd73250516f069df18b500', '44051633271614leicester1.png', 'Admin'),
(33, 'proditi1@gmail.com', 'proditi1', 'proditi1', 'Pendidikan Informatika', '48af6eaf1b035cd612eff0568bdc617b', '566021633270724dortmund1.png', 'Pendidikan Informatika'),
(34, 'mhs1ti@gmail.com', 'mhs1ti', 'mhs1ti', 'Pendidikan Informatika', '7f2dc0a5d3c8c05787d02999efdef702', '537721633270792dortmund2.png', 'Mahasiswa'),
(35, 'Pendidikan_IPA@gmail.com', 'Pendidikan IPA', 'ipa', 'Pendidikan IPA', '698d51a19d8a121ce581499d7b701668', 'default.png', 'Pendidikan IPA'),
(36, 'b.inggris@gmail.com', 'Pendidikan Bahasa Inggris', 'b.inggris', 'Pendidikan Bahasa Inggris', 'bcbe3365e6ac95ea2c0343a2395834dd', 'default.png', 'Pendidikan Bahasa Inggris'),
(37, 'informatika@gmail.com', 'Pendidikan Informatika', 'informatika', 'Pendidikan Informatika', '310dcbbf4cce62f762a2aaa148d556bd', 'default.png', 'Pendidikan Informatika'),
(38, 'elektronika@gmail.com', 'Pendidikan Elektronika', 'elektronika', 'Pendidikan elektronika', '550a141f12de6341fba65b0ad0433500', 'default.png', 'Pendidikan elektronika'),
(39, '3243244@gmail.com', 'testes12', '3243244', 'Pendidikan IPA', 'd9a62a57bb1437d77c6390aa32e09a7d', '', 'Mahasiswa'),
(40, 'febby@gmail.com', 'febby', '198402', 'Pendidikan Bahasa Inggris', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Mahasiswa'),
(41, 'buyung@gmail.com', 'buyung', '19011230', 'Pendidikan Bahasa Inggris', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Mahasiswa'),
(42, 'iwan@gmail.com', 'iwan saputra', '19011023', 'Pendidikan Bahasa Inggris', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Mahasiswa'),
(43, 'amel@gmail.com', 'amel', '1920012', 'Pendidikan Bahasa Inggris', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
