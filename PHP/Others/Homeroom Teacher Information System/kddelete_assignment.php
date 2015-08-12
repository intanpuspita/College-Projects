<?php
include 'connect.php';
$kd_assignment=$_GET['kd_assignment'];
$delete=mysql_query("delete from assigment where kd_assignment='$kd_assignment'");

if ($delete){

echo "<script>alert('Data assignment dengan kode $kd_assignment telah terhapus'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>