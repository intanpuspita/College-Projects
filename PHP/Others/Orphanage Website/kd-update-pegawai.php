<?php
$id=$_GET['id_pegawai'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$tgl=$_POST['tgl'];
$jabatan=$_POST['jabatan'];

include "connect.php";

$sumbanguang=mysql_query("update pegawai set nama_pegawai='$nama',alamat_pegawai='$alamat',jk_pegawai='$jk', tgl_lahir_pegawai='$tgl', jabatan='$jabatan' where id_pegawai='$id'");

if ($sumbanguang){
echo "<script>alert('Data Berhasil Diupdate'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal DiUpdate, silahkan coba lagi!'); history.go(-1)</script>";
}
?>