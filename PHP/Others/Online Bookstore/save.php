<?php
include 'connect.php';

$judul=$_POST['judul'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];

$simpan=mysql_query("Insert into data_buku(kode_buku, judul_buku, pengarang_buku, penerbit_buku, stok_buku, harga_buku) values ('','$judul','$pengarang','$penerbit','$stok','$harga')");


if ($simpan){
echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}