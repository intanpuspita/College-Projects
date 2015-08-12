<?php
$vid_prestasi=$_GET['id_prestasi'];
include "connect.php";

$prestasi=mysql_query("delete from prestasi where id_prestasi='$vid_prestasi'");
if ($prestasi){
echo "<script>alert('Data Berhasil Didelete.'); history.go(-1)</script>";
} else {
echo "<script>alert('Maaf Data Gagal Didelete, silahkan coba lagi!'); history.go(-1)</script>";
}
?>