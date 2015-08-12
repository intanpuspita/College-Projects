<?php
	include 'connect.php';

	$nama=$_POST['nama'];
	$juara=$_POST['juara'];
	$tingkat=$_POST['tingkat'];
	$tgl=$_POST['tgl'];
	$des=$_POST['des'];
	
	$hasil = mysql_query("SELECT max(id_prestasi) as maxID FROM prestasi");
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	//echo"$idMax"."<br>";
	$no = (int) substr($idMax, 2,7);
	//echo"$no"."<br>";
	$no++;
	//echo"$no"."<br>";
	$newID = "PR" . sprintf("%05s", $no);
	//echo"$newID"."<br>";

	$simpan=mysql_query("insert into prestasi (id_admin, id_prestasi, juara, tingkat, tgl_prestasi, deskripsi_prestasi, nama_acara) values ('AM00001', '$newID', '$juara', '$tingkat', '$tgl', '$des', '$nama')");
	
	if($simpan){
		echo "<script>alert('Data prestasi telah tersimpan'); history.go(-2)</script>";
		//header( "Location: index-admin.php?menu=frm-foto&kegiatan=$newID" );
	}
	else{
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>