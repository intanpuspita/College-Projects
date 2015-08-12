<?php 
	include 'connect.php';
	$id_album=$_GET['album'];
	
	$album=mysql_query("select * from album where id_album='$id_album'");
	$dataalbum=mysql_fetch_array($album);
	
	$namafolder='galeri/'.$dataalbum['nama_album'];
	rmdir($namafolder);
	$hapus=mysql_query("delete from album where id_album='$id_album'");
	
	if ($hapus){
		echo "<script>alert('Album dengan kode $id_album telah terhapus'); history.go(-1)</script>";
		//header( 'Location: lihat-album.php' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>