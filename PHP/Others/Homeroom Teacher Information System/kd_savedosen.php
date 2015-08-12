<?php
include 'connect.php';

$kd_dosen=$_POST['txtkd_dosen'];
$nama_dosen=$_POST['txtnama_dosen'];
$jk=$_POST['jk'];
$tgl=$_POST['txttgl_lahirdosen'];
$tlp=$_POST['txttlp_dosen'];
$email=$_POST['txtemail_dosen'];

$simpan=mysql_query("Insert into dosen(kd_dosen, nama_dosen, jk_dosen, tgl_lahirdosen, telp, email) values ('$kd_dosen','$nama_dosen','$jk','$tgl','$tlp','$email')");


if ($simpan){
echo "<script>alert('Data Berhasil Disimpan'); history.go(-2)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>
