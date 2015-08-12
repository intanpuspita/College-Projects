<?php
$id=$_GET['id_prestasi'];
$nama=$_POST['nama'];
$juara=$_POST['juara'];
$tingkat=$_POST['tingkat'];
$tgl=$_POST['tgl'];
$des=$_POST['des'];

include "connect.php";

$prestasi=mysql_query("update prestasi set nama_acara='$nama',juara='$juara',tingkat='$tingkat', tgl_prestasi='$tgl', deskripsi_prestasi='$des' where id_prestasi='$id'");

if ($prestasi){
echo "<script>alert('Data Berhasil DiUpdate'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal DiUpdate, silahkan coba lagi!'); history.go(-1)</script>";
}
?>