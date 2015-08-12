<?php

include 'connect.php'; 

$kd_ruang=$_POST['txtkd_ruang'];
$nm_ruang=$_POST['txtnm_ruang'];
$jenis_ruang=$_POST['txtjenis_ruang'];

$simpan=mysql_query("update ruang set jenis_ruang='$jenis_ruang', nama_ruang='$nm_ruang' where kd_ruang='$kd_ruang'");



if($simpan){

echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

