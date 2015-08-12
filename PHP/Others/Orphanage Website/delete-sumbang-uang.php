<?php
$vid_sumbanguang=$_GET['id_sumbanguang'];
include "connect.php";

$sumbanguang=mysql_query("delete from sumbangan_uang where id_sumbanguang='$vid_sumbanguang'");
if ($sumbanguang){
echo "<script>alert('Data Berhasil Didelete.'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal Didelete, silahkan coba lagi!'); history.go(-1)</script>";
}
?>