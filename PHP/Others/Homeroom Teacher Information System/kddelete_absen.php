<?php
include 'connect.php';
$kd_absen=$_GET['kd_absen'];
$delete=mysql_query("delete from kehadiran_mhs where kd_absen='$kd_absen'");

if ($delete){

echo "<script>alert('berhasil'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>