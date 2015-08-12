<?php
	include 'connect.php';
	
	$nama=$_POST['nama'];
	$deskripsi=$_POST['deskripsi'];
	$id_album=$_POST['pilihalbum'];
	$id_kegiatan=$_POST['pilihkegiatan'];
	
	$album=mysql_query("select * from album where id_album='$id_album'");
	$dataalbum=mysql_fetch_array($album);
	$nmalbum=$dataalbum['nama_album'];
	
	$jumlah=count($_FILES["file"]["name"]);
	//echo "jumlah " .$jumlah;
	
	for($i=0; $i<$jumlah; $i++){
	//echo $_FILES["file"]["name"][$i];
	$hasil = mysql_query("SELECT max(id_foto) as maxID FROM foto");
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	//echo"$idMax"."<br>";
	$no = (int) substr($idMax, 2,7);
	//echo"$no"."<br>";
	$no++;
	//echo"$no"."<br>";
	$newID = "FT" . sprintf("%05s", $no);
	//echo"$newID"."<br>";

	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$chunks = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($chunks);
	if (
		(
			$_FILES["file"]["type"][$i] == "image/gif"
			|| $_FILES["file"]["type"][$i] == "image/jpeg"
			|| $_FILES["file"]["type"][$i] == "image/pjpeg"
		)
		&& ($_FILES["file"]["size"][$i] < 500000)
		&& (in_array($extension, $allowedExts))
	)
	{
		if ($_FILES["file"]["error"][$i] > 0)
		{
			//echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br />";
		}
		else
		{
			//echo "Upload: " . $_FILES["file"]["name"][$i] . "<br />";
			//echo "Type: " . $_FILES["file"]["type"][$i] . "<br />";
			//echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " Kb<br />";
			//echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br />";
		}

		if (file_exists("galeri/$nmalbum/" . $_FILES["file"]["name"][$i]))
		{
			//echo $_FILES["file"]["name"][$i] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"][$i],
			$dataphoto="galeri/$nmalbum/" . $_FILES["file"]["name"][$i]);
			$simpan=mysql_query("INSERT INTO foto(id_foto, id_album, nama_foto, ket_foto, file_foto, id_kegiatan)values('$newID', '$id_album','$nama', '$deskripsi', '$dataphoto', '$id_kegiatan')");
			if ($simpan){
			echo "<script>alert('Data foto telah tersimpan'); history.go(-2)</script>";
			}
			//echo "Stored in: " . "galeri/$nmalbum/" . $_FILES["file"]["name"][$i];
		}
	}
	else
	{
		//echo "Invalid file";
	}
	}
?>