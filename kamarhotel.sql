-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 04:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamarhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesan`
--

CREATE TABLE `data_pemesan` (
  `Nama_Pemesan` varchar(50) NOT NULL,
  `Nomor_Identitas` char(16) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `Tipe_Kamar` enum('Standar','Deluxe','Family','') NOT NULL,
  `Durasi_Penginapan` char(6) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Total_Bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pemesan`
--

INSERT INTO `data_pemesan` (`Nama_Pemesan`, `Nomor_Identitas`, `Jenis_Kelamin`, `Tipe_Kamar`, `Durasi_Penginapan`, `Discount`, `Total_Bayar`) VALUES
('adam', '0987654567', 'Laki-laki', 'Deluxe', '4', 0, 1800),
('adam', '11', 'Laki-laki', 'Deluxe', '4', 0, 200),
('adam', '234567', 'Perempuan', 'Deluxe', '4', 200000, 1880),
('adam', '2345676543', 'Laki-laki', 'Deluxe', '3', 0, 1580),
('adam', '3232', 'Laki-laki', 'Deluxe', '4', 0, 1800),
('adam', '345234436', 'Laki-laki', 'Deluxe', '4', 0, 1872),
('adam', '345432345', 'Laki-laki', 'Deluxe', '4', 0, 1872),
('adam', '3456', 'Perempuan', 'Deluxe', '3', 0, 1580),
('siti', '34567', 'Perempuan', 'Deluxe', '4', 200000, 1880),
('adam', '3456787543', 'Perempuan', 'Deluxe', '3', 0, 1580),
('adam', '34567876', 'Laki-laki', 'Deluxe', '4', 0, 1800),
('adam', '34765435', 'Laki-laki', 'Deluxe', '2', 0, 1080),
('adam', '45676543', 'Laki-laki', 'Deluxe', '4', 200000, 1880),
('adam', '56765', 'Laki-laki', 'Deluxe', '2', 0, 0),
('adam', '87', 'Laki-laki', 'Deluxe', '4', 200000, 1880),
('adam', '9787654', 'Laki-laki', 'Deluxe', '4', 200000, 1880),
('adam', '9876543456', 'Laki-laki', 'Family', '4', 0, 1422);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pemesan`
--
ALTER TABLE `data_pemesan`
  ADD PRIMARY KEY (`Nomor_Identitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
