<?php
	include 'connect.php';

	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$pendidikan=$_POST['pilih'];
	
	$hasil = mysql_query("SELECT max(id_anakasuh) as maxID FROM anak_asuh");
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	//echo"$idMax"."<br>";
	$no = (int) substr($idMax, 2,7);
	//echo"$no"."<br>";
	$no++;
	//echo"$no"."<br>";
	$newID = "AS" . sprintf("%05s", $no);
	//echo"$newID"."<br>";
	
	if($_FILES["file"]["name"] != NULL){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$chunks = explode(".", $_FILES["file"]["name"]);
	$extension = end($chunks);
	if (
		(
			$_FILES["file"]["type"] == "image/gif"
			|| $_FILES["file"]["type"] == "image/jpeg"
			|| $_FILES["file"]["type"] == "image/pjpeg"
		)
		&& $_FILES["file"]["size"] < 20000
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
			$simpan=mysql_query("INSERT INTO anak_asuh(id_anakasuh, id_admin, nama_anak, tgl_lahir, jk_anak, pendidikan_anak, foto_anak)values('$newID','AM00001','$nama', '$tgl_lahir', '$jk', '$pendidikan', '$dataphoto')");
			if ($simpan){
			echo "<script>alert('Data anak asuh dengan nama $nama telah tersimpan'); history.go(-2)</script>";
			}
			//header( 'Location: lihat-album.php' );
			//echo "Stored in: " . "foto-anak-asuh/" . $_FILES["file"]["name"];
		}
	}
	else
	{
		//echo "Invalid file";
	}
	}
	else{
		$simpan=mysql_query("INSERT INTO anak_asuh(id_anakasuh, id_admin, nama_anak, tgl_lahir, jk_anak, pendidikan_anak, foto_anak)values('$newID','AM00001','$nama', '$tgl_lahir', '$jk', '$pendidikan', '')");
		if ($simpan){
			echo "<script>alert('Data anak asuh dengan nama $nama telah tersimpan'); history.go(-2)</script>";
			}
	}
?>