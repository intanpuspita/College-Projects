<?php 
	include 'connect.php';
	$id_kegiatan=$_GET['kegiatan'];
	
	$foto=mysql_query("select * from foto where id_kegiatan='$id_kegiatan'");
	while($datafoto=mysql_fetch_array($foto)){
		unlink($datafoto['file_foto']);
	}
	$hapusfoto=mysql_query("delete from foto where id_kegiatan='$id_kegiatan'");
	$hapus=mysql_query("delete from kegiatan where id_kegiatan='$id_kegiatan'");
	
	if ($hapus){
		echo "<script>alert('kegiatan dengan kode $id_kegiatan telah terhapus'); history.go(-1)</script>";
		header( 'Location: index-admin.php?menu=kegiatan' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>