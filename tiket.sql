-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 04:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anak` int(10) NOT NULL,
  `dewasa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `anak`, `dewasa`) VALUES
(1, 'Trip Pulau Seribu', 250000, 300000),
(2, 'Tiket Seaworld ', 150000, 200000),
(3, 'Tiket Ancol', 30000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `nama` varchar(100) NOT NULL,
  `nik` int(20) NOT NULL,
  `hp` int(20) NOT NULL,
  `wisata` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `dewasa` int(4) NOT NULL,
  `anak` int(4) NOT NULL,
  `hdewasa` int(20) NOT NULL,
  `hanak` int(20) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`nama`, `nik`, `hp`, `wisata`, `tanggal`, `dewasa`, `anak`, `hdewasa`, `hanak`, `total`) VALUES
('Pradika Rahmawan', 1, 13131313, 'pulau', '2022-10-01', 1, 1, 300000, 150000, 450000),
('Pradika Rahmawan', 7, 33, 'pulau', '2022-10-01', 1, 1, 300000, 150000, 450000),
('Pradika Rahmawan', 9, 22222, 'pulau', '2022-10-01', 1, 1, 300000, 150000, 450000),
('Pradika Rahmawan', 12, 13131313, 'pulau', '2022-09-10', 1, 1, 300000, 150000, 450000),
('wira', 44, 13131313, 'pulau', '2022-09-03', 1, 1, 300000, 150000, 450000),
('TIUR', 98, 890777776, 'ancol', '2022-10-01', 1, 2, 50000, 25000, 100000),
('ronaldo', 2222, 22222, 'ancol', '2022-10-01', 1, 1, 50000, 25000, 75000),
('Pradika Rahmawan', 2147483647, 13131313, 'pulau', '2022-09-03', 1, 1, 300000, 150000, 450000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
