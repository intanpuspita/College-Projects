<?php

include 'connect.php'; 

$kd_mk=$_POST['txtkd_mk'];

$nm_mk=$_POST['txtnm_mk'];

$jenis_mk=$_POST['txtjenis_mk'];

$simpan=mysql_query("update mk set nama_mk='$nm_mk', jenis_mk='$jenis_mk' where kd_mk='$kd_mk' ");



if($simpan){
echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

