<?php

include 'connect.php';
$kd_kuliah=$_POST['kd_kuliah'];
//$data = mysql_query("select * from kehadiran_mhs");
//$kuliah = mysql_fetch_array(mysql_query($data));
//mencari id album
$sql ="select max(kd_absen) as kd_absen from kehadiran_mhs limit 1";
$row = mysql_fetch_array(mysql_query($sql));
$kd_absen = $row['kd_absen'];

$jumlah=count($_POST['txtnm_mhs']);
//menyimpan data ke tabel lagu
//foreach($kd_absen as $key ){
$nim=$_POST['txtnim'];
$kd_kul=$_POST['kd_kuliah'];
$ket=$_POST['ket'];

for($i=0;$i<$jumlah;$i++)
{
	$kuliah=mysql_query("select * from kehadiran_mhs");
	while($dt_kuliah=(mysql_fetch_array($kuliah))){
		if(($dt_kuliah['kd_perkuliahan']==$kd_kul) and ($dt_kuliah['nim']==$nim)){
			$ketemu=0;
			echo "<script>alert('Data sudah ada pada database!');</script>";}
		else{
			$ketemu=1; }
	}
	if($ketemu==1)
	{
		$simpan=mysql_query("Insert into kehadiran_mhs(kd_absen,kd_perkuliahan, keterangan,nim)values('','$kd_kul','$ket[$i]','$nim[$i]')");
	}
}
if ($simpan){
	echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";
} else {
	echo "<script>alert('Gagal'); history.go(-1)</script>";
}
?>