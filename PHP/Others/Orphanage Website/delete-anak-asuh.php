<?php
	include 'connect.php';
	
	$id_anakasuh=$_GET['anakasuh'];
	
	$foto=mysql_query("select * from anak_asuh where id_anakasuh='$id_anakasuh'");
	$datafoto=mysql_fetch_array($foto);
	unlink($datafoto['foto_anak']);
	
	$hapus=mysql_query("delete from anak_asuh where id_anakasuh='$id_anakasuh'");
	if ($hapus){
		echo "<script>alert('Data anak asuh dengan kode $id_anakasuh telah terhapus'); history.go(-1)</script>";
		//header( 'Location: lihat-anak-asuh.php' );
	} 
	else {
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>