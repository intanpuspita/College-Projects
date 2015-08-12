<?php
include 'connect.php';
$kd_kuliah=$_POST['txtkd_perkuliahan'];
$kd_assignment=$_POST['kd_assignment'];
$kd_ruang=$_POST['kd_ruang'];
$jam_awal=$_POST['txtjam_awal'];
$jam_akhir=$_POST['txtjam_akhir'];
$tgl_kul=$_POST['txttgl_kuliah'];
$ket=$_POST['ket'];
$minggu_ke=$_POST['txtminggu_ke'];

$simpan=mysql_query("update perkuliahan set kd_assignment='$kd_assignment',jam_awal='$jam_awal',tgl_kuliah='$tgl_kul',kehadiran_dosen='$ket',jam_akhir='$jam_akhir',kd_ruang='$kd_ruang',minggu_ke='$minggu_ke' where kd_perkuliahan='$kd_kuliah'");
if($simpan){

echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>"; 

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}
?>