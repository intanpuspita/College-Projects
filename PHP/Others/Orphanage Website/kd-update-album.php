<?php 
	include 'connect.php';
	$id_album=$_GET['album'];
	//$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$deskripsi=$_POST['deskripsi'];
	
	/*$album=mysql_query("select * from album where id_album='$id_album'");
	$dataalbum=mysql_fetch_array($album);
	$namafolder='galeri/'.$dataalbum['nama_album'];
	$namafolder2='galeri/'.$nama;
	rename("$namafolder","$namafolder2");*/
	
	$update=mysql_query("update album set tgl_album='$tgl', ket_album='$deskripsi' where id_album='$id_album'");
	
	if ($update){
		echo "<script>alert('Album dengan ID $id_album telah terupdate'); history.go(-2)</script>";
		//header( 'Location: lihat-album.php' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>