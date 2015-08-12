<?php
include 'connect.php';
$kd_ruang=$_GET['kd_ruang'];
$delete=mysql_query("delete from ruang where kd_ruang='$kd_ruang'");

if ($delete){

echo "<script>alert('Data ruangan dengan kode $kd_ruang telah terhapus'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>