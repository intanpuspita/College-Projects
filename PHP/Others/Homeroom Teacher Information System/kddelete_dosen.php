<?php
include 'connect.php';
$kd_dosen=$_GET['kd_dosen'];
$delete=mysql_query("delete from dosen where kd_dosen='$kd_dosen'");

if ($delete){

echo "<script>alert('Data dosen dengan kode $kd_dosen telah terhapus'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>