<?php

include 'connect.php'; 

$no_smt=$_POST['txtno_smt'];
$keterangan=$_POST['keterangan'];


$simpan=mysql_query("Update smt set keterangan='$keterangan' where no_smt='$no_smt'");



if($simpan){

echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>"; 

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 

