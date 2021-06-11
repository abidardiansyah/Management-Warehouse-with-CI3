-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 10.01
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `nama` varchar(100) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `stock` int(10) NOT NULL,
  `merek` varchar(25) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`nama`, `kode`, `alamat`, `jenis`, `stock`, `merek`, `lokasi`, `id`) VALUES
('Ram DDR3 4GB', '12345', 'Semarang Utara ', 'Hardware', 2000, 'Samsung', 'Gudang A', 3),
('Vapor Vinci', '01978', 'Semarang Utara ', 'Vaporizer', 200, 'Vinci', 'Gudang B', 12),
('Gelas', '10191', 'Banjarnegara rt 04/09', 'Dapur', 2000, 'Ikea', 'Gudang B', 13),
('Kipas', '27432', 'semarang', 'Properti', 222, 'Soni', 'Gudang A', 14);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
