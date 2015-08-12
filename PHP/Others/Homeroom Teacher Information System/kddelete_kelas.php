<?php
include 'connect.php';
$kd_kelas=$_GET['kd_kelas'];
$delete=mysql_query("delete from kelas where kd_kelas='$kd_kelas'");

if ($delete){

echo "<script>alert('Data kelas dengan kode $kd_kelas telah terhapus'); history.go(-1)</script>";


} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>