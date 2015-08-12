<?php
include 'connect.php';

$kd_dosen=$_POST['txtkd_dosen'];
$nama_dosen=$_POST['txtnama_dosen'];
$jk=$_POST['jk'];
$tgl=$_POST['txttgl_lahirdosen'];
$tlp=$_POST['txttlp_dosen'];
$email=$_POST['txtemail_dosen'];

$simpan=mysql_query("update dosen set nama_dosen='$nama_dosen', jk_dosen='$jk', tgl_lahirdosen='$tgl', telp='$tlp', email='$email' where kd_dosen='$kd_dosen'");
 

if ($simpan){
echo "<script>alert('Data berhasil diupdate'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>
