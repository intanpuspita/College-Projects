<?php

include 'connect.php';
$nim=$_POST['txtnim'];
$kd_kelas=$_POST['kelas'];
$nama=$_POST['txtnama_mhs'];
$jk=$_POST['jk'];
$tgl=$_POST['txttgl_mhs'];
$asl=$_POST['txtalmt_asl'];
$skrng=$_POST['txtalmt_skr'];
$telp=$_POST['txttelp'];
$email=$_POST['txtemail_mhs'];

$simpan=mysql_query("Insert into mhs(nim,kd_kelas,nama_mhs,jk_mhs,tgl_lahirmhs,alamat_asal,alamat_sekarang,tlp_mhs,email) values ('$nim','$kd_kelas','$nama','$jk','$tgl','$asl','$skrng','$telp','$email')");


if ($simpan){
echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";
} else {
echo "<script>alert('Gagal !'); history.go(-1)</script>";
}

?>
