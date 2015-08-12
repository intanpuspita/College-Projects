<?php 
	include 'connect.php';
	$id_foto=$_GET['foto'];
	$nama=$_POST['nama'];
	$deskripsi=$_POST['deskripsi'];
	
	$update=mysql_query("update foto set nama_foto='$nama', ket_foto='$deskripsi' where id_foto='$id_foto'");
	
	if ($update){
		echo "<script>alert('Foto dengan ID $id_foto telah terupdate'); history.go(-2)</script>";
		//header( 'Location: lihat-foto.php' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>