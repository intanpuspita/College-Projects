-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 11. Juni 2013 jam 16:03
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pantiasuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` char(7) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `password` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password`) VALUES
('AM00001', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` char(7) NOT NULL,
  `id_admin` char(7) NOT NULL,
  `nama_album` varchar(50) DEFAULT NULL,
  `ket_album` text,
  `tgl_album` date NOT NULL,
  PRIMARY KEY (`id_album`),
  KEY `fk_mengupload` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id_album`, `id_admin`, `nama_album`, `ket_album`, `tgl_album`) VALUES
('AL00001', 'AM00001', 'Album 1', 'Album kegiatan pertama', '2013-06-06'),
('AL00002', 'AM00001', 'Kegiatan', 'foto kegiatan terbaru', '2013-06-08'),
('AL00003', 'AM00001', '2012', 'Foto tahun 2012', '2013-06-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak_asuh`
--

CREATE TABLE IF NOT EXISTS `anak_asuh` (
  `id_anakasuh` char(7) NOT NULL,
  `id_admin` char(7) NOT NULL,
  `nama_anak` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk_anak` tinyint(1) DEFAULT NULL,
  `pendidikan_anak` varchar(25) DEFAULT NULL,
  `foto_anak` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anakasuh`),
  KEY `fk_diawasi` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anak_asuh`
--

INSERT INTO `anak_asuh` (`id_anakasuh`, `id_admin`, `nama_anak`, `tgl_lahir`, `jk_anak`, `pendidikan_anak`, `foto_anak`) VALUES
('AS00001', 'AM00001', 'Anton Wahyudi', '1997-07-27', 1, 'SMP', 'foto-anak-asuh/anton.jpg'),
('AS00002', 'AM00001', 'Arif Budiman', '2001-01-23', 1, 'SD', 'foto-anak-asuh/arif.jpg'),
('AS00003', 'AM00001', 'Agil Wahyudi', '2002-12-31', 1, 'SD', 'foto-anak-asuh/agil.jpg'),
('AS00004', 'AM00001', 'Reihan Agustian', '2006-08-14', 1, 'TK', 'foto-anak-asuh/reihan.jpg'),
('AS00005', 'AM00001', 'Eddy Kurniawan', '2004-11-22', 1, 'SD', 'foto-anak-asuh/eddy.jpg'),
('AS00006', 'AM00001', 'Dicky Wahyudi', '2001-07-03', 1, 'SD', 'foto-anak-asuh/dicky.jpg'),
('AS00007', 'AM00001', 'Wahyu Wahyudi', '1998-04-15', 1, 'SMP', 'foto-anak-asuh/wahyu.jpg'),
('AS00008', 'AM00001', 'Dania', '2002-08-27', 0, 'SD', 'foto-anak-asuh/dania.jpg'),
('AS00009', 'AM00001', 'M. R. Juwanda', '2003-07-21', 1, 'SD', 'foto-anak-asuh/juwanda.jpg'),
('AS00010', 'AM00001', 'Muhamad Rendi', '2007-06-15', 1, 'Belum sekolah', 'foto-anak-asuh/rendi.jpg'),
('AS00011', 'AM00001', 'Putri Oktaviani', '1995-10-05', 0, 'SMA', 'foto-anak-asuh/putri.jpg'),
('AS00012', 'AM00001', 'Hena', '1995-06-01', 0, 'SMP', 'foto-anak-asuh/hena.jpg'),
('AS00013', 'AM00001', 'Andhika Firmansyah', '2003-12-03', 1, 'SD', 'foto-anak-asuh/andhika.jpg'),
('AS00014', 'AM00001', 'Diky Ardiansyah', '2004-12-20', 1, 'SD', 'foto-anak-asuh/diky.jpg'),
('AS00015', 'AM00001', 'M. Fadhil', '2002-06-01', 1, 'SD', 'foto-anak-asuh/fadhil.jpg'),
('AS00016', 'AM00001', 'Abdullah', '1999-07-01', 1, 'SD', 'foto-anak-asuh/abdullah.jpg'),
('AS00017', 'AM00001', 'Fitria', '2001-12-29', 0, 'SD', 'foto-anak-asuh/fitria.jpg'),
('AS00018', 'AM00001', 'Dewi', '2010-04-08', 0, 'Belum sekolah', 'foto-anak-asuh/dewi.jpg'),
('AS00019', 'AM00001', 'Aditia', '2010-06-23', 1, 'Belum sekolah', 'foto-anak-asuh/aditia.jpg'),
('AS00020', 'AM00001', 'Rizki ', '1997-12-26', 1, 'SMP', 'foto-anak-asuh/rizki.jpg'),
('AS00021', 'AM00001', 'Iqbal', '1995-09-25', 1, 'SMP', 'foto-anak-asuh/iqbal.jpg'),
('AS00022', 'AM00001', 'Ade Sjarah', '1997-02-15', 0, 'SMP', 'foto-anak-asuh/ade.jpg'),
('AS00023', 'AM00001', 'Faris', '2001-12-04', 1, 'SD', 'foto-anak-asuh/faris.jpg'),
('AS00024', 'AM00001', 'Dewi', '2001-07-05', 0, 'SD', 'foto-anak-asuh/dewi2.jpg'),
('AS00025', 'AM00001', 'Nuraini', '1998-06-13', 0, 'SMP', 'foto-anak-asuh/nuraini.jpg'),
('AS00026', 'AM00001', 'Andani', '1994-07-23', 0, 'SMP', 'foto-anak-asuh/andani.jpg'),
('AS00027', 'AM00001', 'Fitri', '1995-04-24', 0, 'SMP', 'foto-anak-asuh/fitri.jpg'),
('AS00028', 'AM00001', 'Devi', '1995-12-17', 0, 'SD', 'foto-anak-asuh/devi.jpg'),
('AS00029', 'AM00001', 'Sonia R', '2002-01-27', 0, 'SD', 'foto-anak-asuh/sonia.jpg'),
('AS00030', 'AM00001', 'Annisa', '1993-01-01', 0, 'SMA', 'foto-anak-asuh/annisa.jpg'),
('AS00031', 'AM00001', 'Helmi Maulana', '1996-07-20', 1, 'SMP', 'foto-anak-asuh/helmi.jpg'),
('AS00032', 'AM00001', 'Herlan Permana', '2001-06-21', 1, 'SD', 'foto-anak-asuh/herlan.jpg'),
('AS00033', 'AM00001', 'Ranti Amelia', '2001-03-01', 0, 'SD', 'foto-anak-asuh/ranti.jpg'),
('AS00034', 'AM00001', 'Dewi Rahma', '1996-01-31', 0, 'SMP', 'foto-anak-asuh/dewi3.jpg'),
('AS00035', 'AM00001', 'Tiara', '2002-01-01', 0, 'SD', 'foto-anak-asuh/tiara.jpg'),
('AS00036', 'AM00001', 'Sitii Hasanah', '1997-03-03', 0, 'SMP', 'foto-anak-asuh/sitii.jpg'),
('AS00037', 'AM00001', 'Ani Septiani', '1998-09-15', 0, 'SMP', 'foto-anak-asuh/ani.jpg'),
('AS00038', 'AM00001', 'Sri Endah Rahayu', '2001-09-13', 0, 'SD', 'foto-anak-asuh/sri.jpg'),
('AS00039', 'AM00001', 'Jenni Rembulan', '1998-07-24', 0, 'SD', 'foto-anak-asuh/jenni.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` char(7) NOT NULL,
  `id_album` char(7) DEFAULT NULL,
  `nama_foto` varchar(50) DEFAULT NULL,
  `ket_foto` text,
  `file_foto` varchar(50) DEFAULT NULL,
  `id_kegiatan` char(7) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `fk_memiliki` (`id_album`),
  KEY `fk_terdapat` (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `id_album`, `nama_foto`, `ket_foto`, `file_foto`, `id_kegiatan`) VALUES
('FT00001', 'AL00001', 'Foto Distribusi', 'Foto-foto pada kegiatan dstribusi santunan', 'galeri/Album 1/KG00001 (1).jpg', 'KG00001'),
('FT00002', 'AL00001', 'Foto Distribusi', 'Foto-foto pada kegiatan dstribusi santunan', 'galeri/Album 1/KG00001 (2).jpg', 'KG00001'),
('FT00003', 'AL00001', 'Foto Distribusi', 'Foto-foto pada kegiatan dstribusi santunan', 'galeri/Album 1/KG00001 (3).jpg', 'KG00001'),
('FT00004', 'AL00001', 'Foto Distribusi', 'Foto-foto pada kegiatan dstribusi santunan', 'galeri/Album 1/KG00001 (4).jpg', 'KG00001'),
('FT00005', 'AL00001', 'Foto Distribusi', 'Foto-foto pada kegiatan dstribusi santunan', 'galeri/Album 1/KG00001 (5).jpg', 'KG00001'),
('FT00006', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (1).jpg', 'KG00002'),
('FT00007', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (2).jpg', 'KG00002'),
('FT00008', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (3).jpg', 'KG00002'),
('FT00009', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (4).jpg', 'KG00002'),
('FT00010', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (5).jpg', 'KG00002'),
('FT00011', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (6).jpg', 'KG00002'),
('FT00012', 'AL00002', 'foto terbaru', 'foto-foto liburan', 'galeri/Kegiatan/KG00002 (7).jpg', 'KG00002'),
('FT00013', 'AL00003', 'foto 2012', 'foto di album 2012', 'galeri/2012/KG00003 (1).jpg', 'KG00003'),
('FT00014', 'AL00003', 'foto 2012', 'foto di album 2012', 'galeri/2012/KG00003 (2).jpg', 'KG00003'),
('FT00015', 'AL00003', 'foto 2012', 'foto di album 2012', 'galeri/2012/KG00003.jpg', 'KG00003'),
('FT00016', 'AL00002', 'Mei 2010', 'Foto-foto kegiatan bulan Mei Tahun 2010', 'galeri/Kegiatan/KG00004 (1).jpg', 'KG00004'),
('FT00017', 'AL00002', 'Mei 2010', 'Foto-foto kegiatan bulan Mei Tahun 2010', 'galeri/Kegiatan/KG00004 (2).jpg', 'KG00004'),
('FT00018', 'AL00002', 'Mei 2010', 'Foto-foto kegiatan bulan Mei Tahun 2010', 'galeri/Kegiatan/KG00004 (3).jpg', 'KG00004'),
('FT00019', 'AL00002', 'Mei 2010', 'Foto-foto kegiatan bulan Mei Tahun 2010', 'galeri/Kegiatan/KG00004 (4).jpg', 'KG00004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `sejarah` text,
  `visi` text,
  `misi` text,
  `alamat` text,
  `latarbelakang` text,
  `telepon` varchar(20) DEFAULT NULL,
  `email` text,
  `no_rek` text,
  `kota` varchar(50) DEFAULT NULL,
  `negara` varchar(50) DEFAULT NULL,
  `id_info` int(11) NOT NULL,
  `id_admin` char(7) NOT NULL,
  PRIMARY KEY (`id_info`),
  KEY `info_fk1` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`sejarah`, `visi`, `misi`, `alamat`, `latarbelakang`, `telepon`, `email`, `no_rek`, `kota`, `negara`, `id_info`, `id_admin`) VALUES
('Panti Asuhan Permata Hati awalnya didirikan 1 November 1986 dengan nama Yayasan Tenaga Kesejahteraan Sosial Sukarela (TKSS), oleh beberapa tenaga kerja sosial sukarela di Bogor yang tujuannya adalah membantu program pemerintah dalam bidang kesejahteraan sosial dan pendidikan keterampilan terutama bagi pemuda pemudi putus sekolah dan anak anak terlantar maupun bagi para ibu rumah tangga untuk menambah penghasilan keluarga dengan memberikan pendidikan keterampilan dan menyalurkan kerja seperti menjahit, memasak dan membuat kue, baby sitter dan menyablon.</br></br>\r\nSeiring dengan berjalannya waktu, yayasan merasa terketuk hatinya ketika ada seorang bayi terlantar yang sangat membutuhkan uluran tangan. Bayi itu ditemukan dalam sebuah kotak kardus oleh seorang tukang becak di sebuah got di wilayah bogor yang kemudian langsung dilaporkan ke polisi dan dibawa ke rumah sakit terdekat (PMI Bogor). Bayi malang yang diperkirakan sudah 3 hari tidak mendapatkan makanan itu sungguh sangat mengenaskan sehingga kemudian terpaksa harus menjalani operasi di bagian perutnya karena kulit dan beberapa bagian organ tubuhnya sudah menempel akibat kurang cairan dan kekeringan. Bayi malang tersebut adalah bayi pertama yang dititipkan dan di asuh oleh panti yang kemudian disusul oleh beberapa bayi malang lainnya, baik karena ditelantarkan, ataupun karena berasal dari keluarga yang sangat kurang mampu. Dengan segala keterbatasan dan kemampuan, hingga kini Panti Asuhan Permata Hati sudah dapat membina  dan membantu  lebih dari 100 anak yatim, piatu maupun anak terlantar yang bahkan kini sudah ada yang berpendidikan setingkat sekolah menegah atas.', 'Membantu memberikan kesempatan kepada anak anak yatim piatu, yatim dan piatu juga anak anak terlantar khususnya yang berada di wilayah Bogor agar dapat hidup yang layak di masyarakat kelak.', 'Misi kami antara lain : </br>\r\n\r\n1. Melindungi dan memberikan naungan tempat tinggal dan penghidupan bagi anak-anak yatim piatu, yatim, piatu dan anak-anak terlantar</br>\r\n2. Memberikan binaan dan pendidikan bagi anak anak yatim piatu, yatim, piatu dan anak anak terlantar agar memiliki ilmu pengetahuan formal ataupun non formal untuk bekal hidup mereka di hari depan</br>\r\n3. Menjadi penghubung antara para dermawan untuk menyalurkan dana zakat, infak dan sodaqoh</br>\r\n4. Menjadi penghubung antara para dermawan dalam program orang tua asuh maupun kakak asuh\r\n', 'Jl. Musholla No. 41, Kampung Kaum RT 04  RW 05, Kelurahan Ciparigi,\r\nKecamatan Bogor Utara', 'Memfasilitasi anak anak yatim piatu, yatim, piatu dan anak anak terlantar dalam mencari, memilih dan menentukan arah hidup yang tepat bagi bekal masa depan kehidupannya sebagai manusia yang bermartabat, berguna bagi diri, keluarga dan masyarakatnya kelak dihari nanti.', '(0251) 8659 663 ', 'permatahatibogor@gmail.com', '1. Mandiri  Cab. Suryakencana, Bogor</br>\r\nNo. Rek.  1330 0097 8619 5</br>\r\na.n. R. Lily Rosliah</br>\r\n2. CIMB Niaga Syariah, Jakarta, Pondok Indah</br>\r\nNo. Rek. 520-01-16994-11-6</br>\r\na.n. Dina Mayasari\r\n', 'Bogor', 'Indonesia', 0, 'AM00001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_admin` char(7) DEFAULT NULL,
  `id_kegiatan` char(7) NOT NULL DEFAULT '',
  `nama_kegiatan` text,
  `tgl_kegiatan` date DEFAULT NULL,
  `deskripsi_kegiatan` text,
  PRIMARY KEY (`id_kegiatan`),
  KEY `fk_penanggungjawab` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_admin`, `id_kegiatan`, `nama_kegiatan`, `tgl_kegiatan`, `deskripsi_kegiatan`) VALUES
('AM00001', 'KG00001', 'Distribusi Santunan', '2013-03-29', 'Syukur alhamdulillah. Diawali dengan pengajian dan doa bersama, acara distribusi santunan kepada 90 anak-anak yatim,dhuafa dan jompo berjalan dengan lancar. Santunan terkumpul berupa paket sembako (beras, mie instant, minyak goreng, sarden,susu), buku dan alat tulis, uang saku dan snacks. Terimakasih kami yang amat besar kepada seluruh dermawan dan sahabat panti yang telah banyak membantu kami semua. Barakallah. Jazakumullah Khairun Katsiran. Aamiin Ya Robbal Aalamiin.'),
('AM00001', 'KG00002', 'Liburan Monumen Pancasila', '2012-12-27', 'Bagi sebagian anak yang sudah tidak punya keluarga, mereka memanfaatkan waktu liburan bersama-sama di Panti. Liburan kali ini, 27 Desember 2012, alhamdulillah anak-anak sangat gembira bersama : berenang dan juga berkunjung ke Monumen Pancasila Sakti - lubang Buaya Jakarta. Wihh asyiknya.!'),
('AM00001', 'KG00003', 'Sumbangan sembako kepada kaum yang membutuhkan di Kampung Cina, Tangerang', '2010-05-20', 'Minggu lalu, seorang dermawan menyumbangkan sembako berupa beras dan telur, yang pada kesempatan kali ini bisa diberikan kepada kaum yang membutuhkan di Kampung Cina, Tangerang.\r\nSeperti yang kita pernah dengar melalu media massa beberapa bulan terakhir ini, adanya rencana penggusuran terhadap warga di Kampung Cina di Sewan, Tangerang. Jumlah orang yang tinggal di daerah ini kira-kira 1475 orang (kurang lebih 350 keluarga). Mata pencaharian mereka adalah sebagai buruh pabrik, tukang cuci gosok, dan pembuat kue keliling. Masyarakat ini sudah hidup kira-kira sejak tahun 1800an, sudah 200 tahunan di kampung tersebut. Ini dapat dilihat dari salah satu klenteng tertua, yaitu Klenteng Ma Budi, yang berdiri pada tahun 1800.\r\nKunjungan saya kemarin (17 Mei 2010) dibantu oleh Yayasan Bina Mandiri Indonesia (www.binamandiri.or.id). Yayasan yang bertujuan melayani masyarakat ini banyak melakukan karyanya di berbagai tempat di Indonesia. Tujuannya adalah untuk membina anak-anak melalui pendidikan, menciptakan masyarakat sehat melalui penyuluhan, pengobatan gratis, pemberdayaan masyarakat dan penyediaan sarana. Kebetulan, yayasan ini juga memiliki rumah terapi untuk orang yang mengalami gangguan mental di lingkungan kampung ini.\r\nKetika saya berkunjung kemarin, Ketua RT bercerita betapa resahnya keadaan warga Sewan ini dengan rencana penggusuran rumah. Boleh dikatakan, dengan miskin nya taraf kehidupan mereka, harta satu-satunya yang mereka miliki adalah rumah yang sudah mereka tempati turun temurun. Hal ini membuat mereka bingung untuk mencari tempat tinggal baru, sehingga ada beberapa dari mereka yang sudah menderita stress.\r\nKedatangan saya disambut baik oleh warga setempat. Mereka sudah menunggu pagi-pagi, hanya demi sekantong beras (3.5kg), telur 15 butir dan beberapa batang sabun. Pembagian sembako berlangsung tertib. Di bawah ini ada beberapa foto untuk lebih menggambarkan suasana pembagian sembako.</br></br>\r\n\r\nKampung ini begitu minim sarana. Mereka hidup di rumah-rumah dari bilik2 rotan/ bambu. Jarang dari rumah ini yang sudah memakai bahan bangunan dari bata. Bila dilihat dari foto-foto tersebut, dapat kita lihat beberapa bangunan yang sudah diruntuhkan. Ketua RT bercerita, adanya seorang istri yang harus menjual bahan materi rumahnya sebesar 1.5 juta (dengan cara menghancurkan rumahnya) untuk biaya berobat suami. Setelah suaminya meninggal, sampai sekarang tidak diketahui keberadaan sang istri.\r\nAda pula, rumah yang dihancurkan karena pemiliknya stress dengan rencana penggusuran. Sehingga cepat-cepat meninggalkan kampung ini untuk mencari kontrakan.</br></br>\r\n\r\nSemoga liputan ini bisa menjadi suatu refleksi keadaan yang sedang terjadi di antara kita. Tanpa kita sadari, begitu banyak hal-hal yang terlewatkan oleh mata kita. Begitu sering kita mengeluh karena kita selalu merasa kekurangan dibanding orang lain. Semua hal yang terjadi ini sebenarnya tidaklah jauh dari lingkungan kita, sehingga boleh saya menambahkan bahwa mereka sebenarnya adalah "tetangga" kita. Biarlah kita semua terbeban untuk menjembatani kekurangan mereka dengan kelebihan kita. Selamat berkarya!!'),
('AM00001', 'KG00004', ' Helping Hands Club event @ Kampong Baru, Pd Rangon', '2010-05-14', 'Pada tanggal 1 May 2010, saya dan 8 orang dari PA Abigail turut membantu Helping Hands Club (HHC) dalam acara bakti sosial di Kampong Baru, Pd Rangon.</br>\r\nSekilas adalah info kegiatan:</br></br>\r\nLokasi nya adalah di dekat kuburan Pd Rangon. Pemukiman Kampong Baru terbentuk kira-kira 10 tahun yang lalu, dengan penduduk rata-rata adalah orang Batak yang pindah ke sana. Mata pencarian penduduk: buruh di pabrik kapuk (di sekitar lingkungan), pemulung , ojek, supir mikrolet, dsb. Rumah mereka sangat minim, banyak yang masih memakai bilik bambu. Jika yang memakai bata, itu pun tidak disemen atau di cat lagi.</br></br>\r\n\r\nSalah satu yang menjadi problema penduduk adalah dengan banyaknya anak yang mempunyai penyakit kulit seperti kudis. Ini disebabkan karena minimnya kesadaran mengenai kebersihan. Saya sempat bertanya kepada anak yang sakit kulit, gatalnya bukan main katanya. Belum lagi, daerah badan yang terkena cukup menyeluruh; dari kaki, paha, tangan, badan. Bisa dibayangkan betapa gatal dan mengganggunya. Hal ini tentu saja karena pengaruh lingkungan sekitarnya.</br></br>\r\n\r\nSalah satu anak menunjukkan kakinya yang sakit kulit. Keadaan ini menjalar sampai ke paha, lengan dan juga punggung.\r\nUsia anak ini kira-kira 8 tahun. (foto terlampir)</br></br>\r\n\r\nOleh karena itu, HHC Indonesia melakukan penyuluhan kesehatan ke daerah tsb, yang dilakukan oleh beberapa dokter. Acara ini dibagi menjadi 2 grup: grup anak-anak dan grup orang dewasa. Saya kebetulan membantu di bagian anak-anak, sehingga liputan akan lebih banyak di bagian anak-anak.</br></br>\r\nUntuk grup dewasa, Ibu-ibu diberikan penyuluhan mengenai macam-macam makanan sehat dan bergizi, yang harganya terjangkau. Setelah itu, juga dibagikan sembako bagi kira-kira 300 keluarga.</br></br>\r\n\r\nUntuk grup anak-anak, cara menyikat gigi yang baik dan benar serta mencuci tangan denga sabun adalah inti dari penyuluhan. Acara ini diikuti oleh kira-kira 450 anak. Mereka berkumpul dalam satu ruangan di sebuah sekolah TK di sana. Ruangan begitu padat dengan anak-anak yang antusias menyambut kedatangan HHC. Di sana, mereka bernyanyi bersama, bermain games, dan menonton panggung boneka. Untuk kesempatan kali ini, anak-anak dari Panti Asuhan Abigail, Pamulang menyumbang acara panggung bonekanya. 6 orang anak berangkat bersama saya dan Ibu pengurus ke lokasi. Tema yang dibawa adalah mengenai pentingnya menjaga kebersihan.</br></br>\r\n\r\nAnak-anak sangat menikmati pertunjukan panggung boneka yang penuh dengan hiburan, nyanyian dan pesan ini. Anak-anak Abigail juga merasa bersyukur bisa memberikan talenta mereka kepada adik-adik kecil tersebut. Mereka juga merasa betapa beruntungnya keadaan mereka, dibandingkan dengan anak-anak ini. Benar-benar suatu pelajaran hidup yang berharga bagi semuanya, termasuk juga kita. Betapa kita harus mensyukuri apa yang kita miliki.</br></br>\r\n\r\nGames dan nyanyian juga berlangsung dengan seru. Walaupun ruangan itu begitu sempit, sesak dan panas, anak-anak ini sangat antusias dalam mengikuti semua acara.\r\n\r\nPenjelasan mengenai pentingnya menggosok gigi dan mencuci tangan yang baik dan benar dilakukan oleh 2 orang dokter. Setelah penjelasan, anak-anak diminta untuk mempraktekkan di depan teman-teman nya cara menggosok gigi dan mencuci tangan yang benar.</br></br>\r\n\r\nKegembiraan dan antusias anak-anak begitu besar. Walaupun mereka harus duduk bersempit-sempitan di ruangan yang panas, mereka begitu menikmati dari satu kegiatan ke kegiatan lainnya. Terlebih, betapa senangnya mereka ketika mereka bisa memperoleh goodie bag dari games dan goodie bag setelah acara selesai berlangsung. Semoga kegiatan yang diprakarsai oleh HHC dapat diingat oleh anak-anak supaya mereka bisa juga terhindar dari berbagai macam penyakit kulit. Sampai ketemu di acara HHC berikutnya. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` char(7) NOT NULL,
  `id_admin` char(7) NOT NULL,
  `nama_pegawai` varchar(25) DEFAULT NULL,
  `jk_pegawai` tinyint(1) DEFAULT NULL,
  `tgl_lahir_pegawai` date DEFAULT NULL,
  `alamat_pegawai` text,
  `jabatan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `fk_mencatat` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_admin`, `nama_pegawai`, `jk_pegawai`, `tgl_lahir_pegawai`, `alamat_pegawai`, `jabatan`) VALUES
('PG00001', 'AM00001', 'Udin', 1, '2013-06-03', 'Bandung', 'Supir'),
('PG00002', 'AM00001', 'Ahmad', 1, '2013-06-01', 'Bandung', 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_admin` char(7) NOT NULL,
  `id_prestasi` char(7) NOT NULL DEFAULT '',
  `juara` varchar(25) DEFAULT NULL,
  `tingkat` varchar(25) DEFAULT NULL,
  `tgl_prestasi` date DEFAULT NULL,
  `deskripsi_prestasi` text,
  `nama_acara` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prestasi`),
  KEY `fk_menginputkan` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_admin`, `id_prestasi`, `juara`, `tingkat`, `tgl_prestasi`, `deskripsi_prestasi`, `nama_acara`) VALUES
('AM00001', 'PR00001', '3', 'provinsi', '2006-03-01', 'Juara III Orsos Berprestasi tingkat Jawa Tengah', 'Penghargaan ORSOS'),
('AM00001', 'PR00002', '1', 'kabupaten', '0000-00-00', 'Juara I Kepanduan Hisbul Wathan Tingkat Kabupaten Purworejo', 'Kepanduan Hisbul Wathan'),
('AM00001', 'PR00003', '1', 'nasional', '0000-00-00', 'Juara I LCT Tingkat Nasional atas nama Ari Yusnita', 'LCT'),
('AM00001', 'PR00004', '2', 'provinsi', '0000-00-00', 'Juara II Beladiri atas nama Erma Dwi', 'Beladiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbangan_barang`
--

CREATE TABLE IF NOT EXISTS `sumbangan_barang` (
  `id_sumbangbarang` char(7) NOT NULL,
  `id_admin` char(7) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah_barang` varchar(25) DEFAULT NULL,
  `barang_ke` int(11) DEFAULT NULL,
  `tgl_barang` date DEFAULT NULL,
  `nama_donatur` varchar(50) DEFAULT NULL,
  `jk_donatur` tinyint(1) DEFAULT NULL,
  `alamat_donatur` text,
  `email_donatur` varchar(100) DEFAULT NULL,
  `telepon_donatur` char(12) DEFAULT NULL,
  `pekerjaan_donatur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sumbangbarang`),
  KEY `fk_mengatur` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumbangan_barang`
--

INSERT INTO `sumbangan_barang` (`id_sumbangbarang`, `id_admin`, `nama_barang`, `jumlah_barang`, `barang_ke`, `tgl_barang`, `nama_donatur`, `jk_donatur`, `alamat_donatur`, `email_donatur`, `telepon_donatur`, `pekerjaan_donatur`) VALUES
('SB00002', 'AM00001', 'Beras', '5 kg', 1, '2013-06-05', 'Abdul Latif', 1, 'Bandung', 'abdul.latif@yahoo.com', '081321895322', 'Pengacara'),
('SB00003', 'AM00001', 'Mie', '3 Dus', 1, '2013-06-04', 'Rizaldi', 1, 'Bandung', 'rizaldi@yahoo.com', '0213458581', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbangan_uang`
--

CREATE TABLE IF NOT EXISTS `sumbangan_uang` (
  `id_sumbanguang` char(7) NOT NULL,
  `id_admin` char(7) NOT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `donasi_ke` int(11) DEFAULT NULL,
  `tgl_donasi` date DEFAULT NULL,
  `nama_donatur` varchar(50) DEFAULT NULL,
  `jk_donatur` tinyint(1) DEFAULT NULL,
  `alamat_donatur` text,
  `email_donatur` varchar(100) DEFAULT NULL,
  `telepon_donatur` char(12) DEFAULT NULL,
  `pekerjaan_donatur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sumbanguang`),
  KEY `fk_mengatur1` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumbangan_uang`
--

INSERT INTO `sumbangan_uang` (`id_sumbanguang`, `id_admin`, `jumlah_donasi`, `donasi_ke`, `tgl_donasi`, `nama_donatur`, `jk_donatur`, `alamat_donatur`, `email_donatur`, `telepon_donatur`, `pekerjaan_donatur`) VALUES
('SU00001', 'AM00001', 50000, 1, '2013-06-10', 'Intan Puspitasari', 0, 'Permata Cimahi', 'intanpusss@gmail.com', '085721895347', 'Mahasiswa'),
('SU00002', 'AM00001', 200000, 2, '2013-06-08', 'Ade Astriani', 0, 'Sumedang', 'adeastriani.jtk11@gmail.com', '080989999', 'Ibu rumah tangga');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_mengupload` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `anak_asuh`
--
ALTER TABLE `anak_asuh`
  ADD CONSTRAINT `fk_diawasi` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_memiliki` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`),
  ADD CONSTRAINT `fk_terdapat` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`);

--
-- Ketidakleluasaan untuk tabel `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_fk1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_penanggungjawab` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_mencatat` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `fk_menginputkan` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `sumbangan_barang`
--
ALTER TABLE `sumbangan_barang`
  ADD CONSTRAINT `fk_mengatur` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `sumbangan_uang`
--
ALTER TABLE `sumbangan_uang`
  ADD CONSTRAINT `fk_mengatur1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
