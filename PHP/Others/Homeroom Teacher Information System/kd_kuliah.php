<?php
include 'connect.php';
$kd_kuliah=$_POST['kd_kuliah'];
$kd_assignment=$_POST['kd_assignment'];
$kd_ruang=$_POST['kd_ruang'];
$jam_awal=$_POST['txtjam_awal'];
$jam_akhir=$_POST['txtjam_akhir'];
$tgl_kul=$_POST['txttgl_kuliah'];
$ket=$_POST['ket'];
$minggu_ke=$_POST['txtminggu_ke'];

$simpan=mysql_query("insert into perkuliahan(kd_perkuliahan,kd_assignment,minggu_ke,jam_awal,tgl_kuliah,kehadiran_dosen,jam_akhir,kd_ruang
) values('$kd_kuliah','$kd_assignment','$minggu_ke','$jam_awal','$tgl_kul','$ket','$jam_akhir','$kd_ruang')");

if ($simpan){
echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>