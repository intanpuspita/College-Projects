<?php
$id=$_GET['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$pekerjaan=$_POST['pekerjaan'];
$jumlah=$_POST['jumlah'];
$ke=$_POST['ke'];
$tgl=$_POST['tgl'];

include "connect.php";

$sumbanguang=mysql_query("update sumbangan_uang set nama_donatur='$nama',alamat_donatur='$alamat',jk_donatur='$jk', telepon_donatur='$telepon', email_donatur='$email', pekerjaan_donatur='$pekerjaan',jumlah_donasi='$jumlah',donasi_ke='$ke', tgl_donasi='$tgl' where id_sumbanguang='$id'");

if ($sumbanguang){
echo "<script>alert('Data Berhasil DiUpdate, Terimakasih.'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal DiUpdate, silahkan coba lagi!'); history.go(-1)</script>";
}
?>