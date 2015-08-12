<?php
include 'connect.php';
$kd_mk=$_GET['kd_mk'];
$delete=mysql_query("delete from mk where kd_mk='$kd_mk'");

if ($delete){

echo "<script>alert('Data mata kuliah dengan kode $kd_mk telah terhapus'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>