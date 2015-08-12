<?php
$vid_sumbangbarang=$_GET['id_sumbangbarang'];
include "connect.php";

$barang=mysql_query("delete from sumbangan_barang where id_sumbangbarang='$vid_sumbangbarang'");
if ($barang){
echo "<script>alert('Data Berhasil Didelete.'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal Didelete, silahkan coba lagi!'); history.go(-1)</script>";
}
?>