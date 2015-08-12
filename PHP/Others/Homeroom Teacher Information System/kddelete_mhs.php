<?php
include 'connect.php';
$nim=$_GET['nim'];
$delete=mysql_query("delete from mhs where nim='$nim'");

if ($delete){

echo "<script>alert('Data mahasiswa dengan NIM $nim telah terhapus'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>