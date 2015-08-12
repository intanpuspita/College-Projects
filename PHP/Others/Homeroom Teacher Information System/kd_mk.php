<?php

include 'connect.php'; 

$kd_mk=$_POST['txtkd_mk'];

$nm_mk=$_POST['txtnm_mk'];

$jenis_mk=$_POST['txtjenis_mk'];

$simpan=mysql_query("Insert into mk(kd_mk, nama_mk, jenis_mk) values('$kd_mk','$nm_mk','$jenis_mk')");



if($simpan){

echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

