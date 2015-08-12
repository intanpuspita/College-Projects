<?php

include 'connect.php'; 

$kd_ruang=$_POST['txtkd_ruang'];
$nm_ruang=$_POST['txtnm_ruang'];
$jenis_ruang=$_POST['txtjenis_ruang'];

$simpan=mysql_query("Insert into ruang(kd_ruang, jenis_ruang, nama_ruang) values('$kd_ruang','$jenis_ruang','$nm_ruang')");



if($simpan){
echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

