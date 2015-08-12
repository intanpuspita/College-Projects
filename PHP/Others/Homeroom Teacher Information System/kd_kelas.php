<?php

include 'connect.php'; 

$kd_kelas=$_POST['txtkd_kelas'];
$nm_kelas=$_POST['txtnm_kelas'];


$simpan=mysql_query("Insert into kelas(kd_kelas,nama_kelas) values('$kd_kelas','$nm_kelas')");



if($simpan){

echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

