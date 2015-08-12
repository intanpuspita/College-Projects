<?php
include 'connect.php';
$kd_kuliah=$_GET['kd_perkuliahan'];
$delete=mysql_query("delete from perkuliahan where kd_perkuliahan='$kd_kuliah'");

if ($delete){

echo "<script>alert('Data perkuliahan dengan kode $kd_kuliah telah terhapus'); history.go(-1)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>