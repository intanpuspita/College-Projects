<?php
	include 'connect.php';
	$id_anakasuh=$_GET['anakasuh'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$pendidikan=$_POST['pilih'];
	
	$anakasuh=mysql_query("select * from anak_asuh where id_anakasuh='$id_anakasuh'");
	$dataanakasuh=mysql_fetch_array($anakasuh);
	
	if($dataanakasuh['foto_anak']==NULL){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$chunks = explode(".", $_FILES["file"]["name"]);
	$extension = end($chunks);
	if (
		(
			$_FILES["file"]["type"] == "image/gif"
			|| $_FILES["file"]["type"] == "image/jpeg"
			|| $_FILES["file"]["type"] == "image/pjpeg"
		)
		&& $_FILES["file"]["size"] < 500000
		&& in_array($extension, $allowedExts)
	)
	{
		if ($_FILES["file"]["error"] > 0)
		{
			//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			//echo "Type: " . $_FILES["file"]["type"] . "<br />";
			//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		}

		if (file_exists("foto-anak-asuh/" . $_FILES["file"]["name"]))
		{
			//echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],
			$dataphoto="foto-anak-asuh/" . $_FILES["file"]["name"]);
			//include "connect.php";
			$simpan=mysql_query("update anak_asuh set nama_anak='$nama', tgl_lahir='$tgl_lahir', jk_anak=$jk, pendidikan_anak='$pendidikan', foto_anak='$dataphoto' where id_anakasuh='$id_anakasuh'");
			if ($simpan){
				echo "<script>alert('Data anak asuh dengan nama $nama telah terupdate'); history.go(-2)</script>";
				//header( 'Location: lihat-album.php' );
			} 
			else {
				echo "<script>alert('Gagal'); history.go(-1)</script>";
			}
			//echo "Stored in: " . "foto-anak-asuh/" . $_FILES["file"]["name"];
		}
	}
	else
	{
		echo "Invalid file";
	}
	}
	else{
		$simpan=mysql_query("update anak_asuh set nama_anak='$nama', tgl_lahir='$tgl_lahir', jk_anak=$jk, pendidikan_anak='$pendidikan' where id_anakasuh='$id_anakasuh'");
		if ($simpan){
			echo "<script>alert('Data anak asuh dengan nama $nama telah terupdate'); history.go(-2)</script>";
			//header( 'Location: lihat-album.php' );
		} 
		else {
			echo "<script>alert('Gagal'); history.go(-1)</script>";
		}
	}
?>