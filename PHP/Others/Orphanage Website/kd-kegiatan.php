<?php
	include 'connect.php';

	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$deskripsi=$_POST['deskripsi'];
	
	$hasil = mysql_query("SELECT max(id_kegiatan) as maxID FROM kegiatan");
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	echo"$idMax"."<br>";
	$no = (int) substr($idMax, 2,7);
	echo"$no"."<br>";
	$no++;
	echo"$no"."<br>";
	$newID = "KG" . sprintf("%05s", $no);
	echo"$newID"."<br>";

	$simpan=mysql_query("insert into kegiatan (id_admin, id_kegiatan, nama_kegiatan, tgl_kegiatan, deskripsi_kegiatan) values ('AM00001', '$newID', '$nama', '$tgl', '$deskripsi')");
	
	if($simpan){
		echo "<script>alert('kegiatan dengan kode $id_kegiatan telah tersimpan'); history.go(-1)</script>";
		header( "Location: index-admin.php?menu=frm-foto&kegiatan=$newID" );
	}
	else{
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>