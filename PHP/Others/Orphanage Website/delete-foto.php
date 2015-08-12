<?php 
	include 'connect.php';
	$id_foto=$_GET['foto'];
	
	$foto=mysql_query("select * from foto where id_foto='$id_foto'");
	$datafoto=mysql_fetch_array($foto);
	unlink($datafoto['file_foto']);
	
	$hapus=mysql_query("delete from foto where id_foto='$id_foto'");
	
	if ($hapus){
		echo "<script>alert('Foto dengan kode $id_foto telah terhapus'); history.go(-1)</script>";
		//header( 'Location: index-admin.php?menu=galeri' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>