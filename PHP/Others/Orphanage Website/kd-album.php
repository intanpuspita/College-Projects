<?php
	include 'connect.php';
	
	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$deskripsi=$_POST['deskripsi'];
	
	$hasil = mysql_query("SELECT max(id_album) as maxID FROM album");
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	//echo"$idMax"."<br>";
	$no = (int) substr($idMax, 2,7);
	//echo"$no"."<br>";
	$no++;
	//echo"$no"."<br>";
	$newID = "AL" . sprintf("%05s", $no);
	//echo"$newID"."<br>";
	
	$simpan=mysql_query("insert into album (id_album, id_admin, nama_album, ket_album, tgl_album) values ('$newID', 'AM00001', '$nama', '$deskripsi', '$tgl')");
	
	$namafolder='galeri/'.$nama;
	
	mkdir($namafolder);
	if ($simpan){
			echo "<script>alert('Data album dengan nama $nama telah tersimpan'); history.go(-2)</script>";
			}
?>