-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2018 pada 18.07
-- Versi Server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liloteknik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `barang` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `telp`, `email`, `alamat`, `barang`, `merk`, `type`, `jumlah`, `pesan`) VALUES
(5, 'apip', '081293528605', 'apipkurniawan92@gmai', 'mustika wanasari cibitung-bekasi', '', '', '', '', 'Mitsubishi/INVERTER/freqroll A200/2'),
(6, 'apip', '081293528605', 'apipkurniawan92@gmai', 'cibitung', 'servo', 'yaskawa', 'mrj 2s', '3', 'kira2 garansi brp bulan?'),
(7, 'tata', '0937037150', 'tata@gmail.com', 'kuningan', 'plc', 'mitsubishi', 'jhvjhv', '2', 'bagus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
