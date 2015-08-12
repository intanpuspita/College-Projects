<?php
include 'connect.php';

$kode=$_POST['kode'];
$judul=$_POST['judul'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];

$simpan=mysql_query("update data_buku set judul_buku='$judul', pengarang_buku='$pengarang', penerbit_buku='$penerbit', stok_buku='$stok', harga_buku='$harga' where kode_buku='$kode'");
 

if ($simpan){
echo "<script>alert('Data berhasil diupdate'); history.go(-2)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>
