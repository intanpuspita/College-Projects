<?php
$id=$_GET['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$pekerjaan=$_POST['pekerjaan'];
$namabarang=$_POST['namabarang'];
$jumlah=$_POST['jumlah'];
$ke=$_POST['ke'];
$tgl=$_POST['tgl'];

include "connect.php";

$barang=mysql_query("update sumbangan_barang set nama_donatur='$nama',alamat_donatur='$alamat',jk_donatur='$jk', telepon_donatur='$telepon', email_donatur='$email', pekerjaan_donatur='$pekerjaan',nama_barang='$namabarang',jumlah_barang='$jumlah',barang_ke='$ke', tgl_barang='$tgl' where id_sumbangbarang='$id'");

if ($barang){
echo "<script>alert('Data Berhasil DiUpdate, Terimakasih.'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal DiUpdate, silahkan coba lagi!'); history.go(-1)</script>";
}
?>