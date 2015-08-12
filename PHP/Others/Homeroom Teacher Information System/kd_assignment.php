<?php 
include 'connect.php';

$kd_assignment=$_POST['txtkd_assignment'];
$kd_mk=$_POST['kd_matkul'];
$kd_dosen=$_POST['kd_dosen'];
$no_smt=$_POST['no_smt'];
$kelas=$_POST['kd_kelas'];

$query_mk=mysql_query("select mk.kd_mk from mk, assigment where mk.nama_mk='$kd_mk'");
$data_mk=(mysql_fetch_array($query_mk));

$query_dosen=mysql_query("select dosen.kd_dosen from dosen, assigment where dosen.nama_dosen='$kd_dosen'");
$data_dosen=(mysql_fetch_array($query_dosen));


$simpan=mysql_query("insert into assigment(kd_assignment, kd_mk,kd_dosen,no_smt,kd_kelas) values('$kd_assignment','$data_mk[kd_mk]','$data_dosen[kd_dosen]','$no_smt','$kelas')");

if($simpan){

echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";

}

else {

echo "<script>alert('Gagal'); history.go(-1)</script>";

}

?> 



?>
