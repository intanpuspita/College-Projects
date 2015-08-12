<?php
include 'connect.php';
$kd_kuliah=$_POST['txtkode'];
$nim=$_POST['txtnim'];
$keterangan=$_POST['ket'];

$ubah=mysql_query("update kehadiran_mhs set keterangan='$keterangan' where kd_perkuliahan='$kd_kuliah' and nim='$nim'");
if ($ubah){
echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>