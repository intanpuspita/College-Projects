<?php
$vid_pegawai=$_GET['id_pegawai'];
include "connect.php";

$pegawai=mysql_query("delete from pegawai where id_pegawai='$vid_pegawai'");
if ($pegawai){
echo "<script>alert('Data Berhasil Didelete.'); history.go(-1)</script>";
} else {
echo "<script>alert('Maaf Data Gagal Didelete, silahkan coba lagi!'); history.go(-1)</script>";
}
?>