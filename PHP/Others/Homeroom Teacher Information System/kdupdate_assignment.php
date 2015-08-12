<?php 
include 'connect.php';

$kd_assignment=$_POST['txtkd_assignment'];
$kd_mk=$_POST['kd_matkul'];
$kd_dosen=$_POST['kd_dosen'];
$no_smt=$_POST['no_smt'];

$query_mk=mysql_query("select kd_mk from mk where nama_mk='$kd_mk'");
$data_mk=(mysql_fetch_array($query_mk));

$query_dosen=mysql_query("select kd_dosen from dosen where nama_dosen='$kd_dosen'");
$data_dosen=(mysql_fetch_array($query_dosen));


$simpan=mysql_query("update assigment set  kd_mk='$data_mk[kd_mk]',kd_dosen='$data_dosen[kd_dosen]',no_smt='$no_smt' where kd_assignment='$kd_assignment' ");

if($simpan){

echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 



?>
