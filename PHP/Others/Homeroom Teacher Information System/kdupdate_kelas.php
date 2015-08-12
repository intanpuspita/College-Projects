<?php

include 'connect.php'; 

$kd_kelas=$_POST['txtkd_kelas'];
$nm_kelas=$_POST['txtnm_kelas'];


$simpan=mysql_query("update kelas set nama_kelas='$nm_kelas' where kd_kelas='$kd_kelas' ");


if($simpan){


echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>"; 

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

