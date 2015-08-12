-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 20. Nopember 2013 jam 04:51
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `name`) VALUES
('admin', 'admin', 'Intan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(10) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `tempat_asal` varchar(60) NOT NULL,
  `tempat_tujuan` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam_awal`, `jam_akhir`, `tempat_asal`, `tempat_tujuan`, `harga`) VALUES
(1, 'Senin', '08:00:00', '19:00:00', 'bandung', 'jakarta', 500000),
(2, 'Senin', '09:50:00', '10:30:00', 'asaaal', 'tujuaaan', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_tiket`
--

CREATE TABLE IF NOT EXISTS `pemesanan_tiket` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_konfirmasi` varchar(20) NOT NULL DEFAULT 'Belum konfirmasi',
  `status_validasi` varchar(20) NOT NULL DEFAULT 'Belum diterima',
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `fk_memesan` (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `pemesanan_tiket`
--

INSERT INTO `pemesanan_tiket` (`id_pemesanan`, `id_jadwal`, `nama_pemesan`, `jumlah_tiket`, `total_harga`, `status_konfirmasi`, `status_validasi`, `tanggal`) VALUES
(1, 2, 'Lala', 4, 10, 'Sudah konfirmasi', 'Sudah diterima', '2013-05-07'),
(4, 2, 'aaa', 5, 1500000, 'Belum dikonfirmasi', 'Sudah diterima', '0000-00-00'),
(5, 2, 'aaa', 6, 1800000, 'Belum dikonfirmasi', 'Belum diterima', '0000-00-00'),
(6, 1, 'hbjhdwe', 4, 2000000, 'Belum dikonfirmasi', 'Belum diterima', '2013-11-10');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan_tiket`
--
ALTER TABLE `pemesanan_tiket`
  ADD CONSTRAINT `fk_memesan` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
