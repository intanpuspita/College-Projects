-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 10. April 2013 jam 08:11
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jtk-bookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(9) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE IF NOT EXISTS `data_buku` (
  `kode_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(150) NOT NULL,
  `pengarang_buku` varchar(60) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`kode_buku`, `judul_buku`, `pengarang_buku`, `penerbit_buku`, `harga_buku`, `stok_buku`) VALUES
(1, 'ada apa', 'asri', 'gramedia', 30000, 30),
(2, 'laskar pelangi', 'andrea hirata', 'gramedia', 60000, 20),
(3, 'a', 'a', 'a', 30000, 20),
(4, 'cerita', 'bebas', 'apa aja', 20000, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_buku`
--

CREATE TABLE IF NOT EXISTS `pesanan_buku` (
  `kode_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(60) NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  PRIMARY KEY (`kode_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
