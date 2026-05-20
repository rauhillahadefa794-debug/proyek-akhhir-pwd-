-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2026 at 10:15 AM
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
-- Database: `eversol_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `pembayaran` enum('Debit','E-Wallet') NOT NULL,
  `paket` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama_lengkap`, `lokasi`, `telepon`, `pembayaran`, `paket`, `harga`, `tanggal_input`) VALUES
(1, 'muhammad fakhir andito', 'jl.monjali', '081325754374', 'Debit', 'Independent Power', 900000, '2026-04-17 11:43:49'),
(3, 'dito', 'jl.,monjali', '0808080808', 'E-Wallet', 'Smart Home', 600000, '2026-04-17 11:44:39'),
(5, 'dito', 'awadawd', '8080008078', 'Debit', 'Independent Power', 900000, '2026-04-17 12:40:39'),
(7, 'dito', 'akjjwadaw', '08080808080', 'E-Wallet', 'Smart Home', 600000, '2026-04-20 08:35:17'),
(10, 'kjjbkajba', 'jl.monjali', '0808080', 'Debit', 'Smart Home', 600000, '2026-04-20 10:44:14'),
(11, 'dito', 'jl.monjali', '080900908080', 'Debit', 'Independent Power', 900000, '2026-04-20 10:45:00'),
(13, 'Raden Galih Sanjaya', 'Jalan.in aja dulu', '081333666777', 'E-Wallet', 'Independent Power', 900000, '2026-04-21 11:58:54'),
(14, 'muhammad fakhir andito', 'jl.monjali', '08123456976', 'E-Wallet', 'Independent Power', 900000, '2026-04-24 04:48:54'),
(15, 'muhammad fakhir andito', 'jl.monjali', '0813204832081', 'E-Wallet', 'Smart Home', 600000, '2026-05-01 09:30:51'),
(16, 'muhammad fakhir andito', 'jl.monjali', '0813204832081', 'E-Wallet', 'Smart Home', 600000, '2026-05-01 09:33:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
