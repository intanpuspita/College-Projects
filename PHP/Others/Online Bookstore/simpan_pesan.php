<?php
include 'connect.php';

$nama=$_POST['nama'];
$judul=$_POST['judul'];
$jumlah=$_POST['jumlah'];

$simpan=mysql_query("Insert into pesanan_buku(kode_pemesanan, nama_pemesan, kode_buku, jumlah_pesan) values ('','$nama','$judul','$jumlah')");


if ($simpan){
echo "<script>alert('Anda telah memesan buku dengan kode $judul sebanyak $jumlah, atas nama $nama'); history.go(-2)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}