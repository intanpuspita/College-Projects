<?php
include 'connect.php';
$no_smt=$_GET['no_smt'];
$delete=mysql_query("delete from smt where no_smt='$no_smt'");

if ($delete){

echo "<script>alert('Data semester dengan nomor $no_smt telah terhapus'); history.go(-1)</script>";

} else {
echo "<script>alert('Gagal'); history.go(-1)</script>";
}

?>

?>