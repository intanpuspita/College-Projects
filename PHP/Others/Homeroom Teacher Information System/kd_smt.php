<?php

include 'connect.php'; 

$no_smt=$_POST['txtno_smt'];
$keterangan=$_POST['keterangan'];


$simpan=mysql_query("Insert into smt(no_smt,keterangan) values('$no_smt','$keterangan')");



if($simpan){

echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

