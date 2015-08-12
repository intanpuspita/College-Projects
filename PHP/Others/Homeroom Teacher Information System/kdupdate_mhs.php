<?php

include 'connect.php';
$nim=$_POST['txtnim'];
$nama=$_POST['txtnama_mhs'];
$kelas=$_POST['kd_kelas'];
$jk=$_POST['jk'];
$tgl=$_POST['txttgl_mhs'];
$asl=$_POST['txtalmt_asl'];
$skrng=$_POST['txtalmt_skr'];
$telp=$_POST['txttelp'];
$email=$_POST['txtemail_mhs'];

$simpan=mysql_query("update mhs set nim='$nim',nama_mhs='$nama',jk_mhs='$jk',tgl_lahirmhs='$tgl',alamat_asal='$asl',alamat_sekarang='$skrng',tlp_mhs='$telp',email='$email' where nim=$nim");


if ($simpan){
echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>";
} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>



?>