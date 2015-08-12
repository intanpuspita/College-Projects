<?php 
	include 'connect.php';
	$id_kegiatan=$_GET['kegiatan'];
	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$deskripsi=$_POST['deskripsi'];
	
	$update=mysql_query("update kegiatan set nama_kegiatan='$nama', tgl_kegiatan='$tgl', deskripsi_kegiatan='$deskripsi' where id_kegiatan='$id_kegiatan'");
	
	if ($update){
		echo "<script>alert('Album dengan nama $nama telah terupdate'); history.go(-1)</script>";
		header( 'Location: index-admin.php?menu=kegiatan' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>