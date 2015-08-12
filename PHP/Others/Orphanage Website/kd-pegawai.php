<?php
	include 'connect.php';

	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$tgl=$_POST['tgl'];
	$jabatan=$_POST['jabatan'];
	
	$hasil = mysql_query("SELECT max(id_pegawai) as maxID FROM pegawai");
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	//echo"$idMax"."<br>";
	$no = (int) substr($idMax, 2,7);
	//echo"$no"."<br>";
	$no++;
	//echo"$no"."<br>";
	$newID = "PG" . sprintf("%05s", $no);
	//echo"$newID"."<br>";

	$simpan=mysql_query("insert into pegawai (id_pegawai, id_admin, nama_pegawai, jk_pegawai, tgl_lahir_pegawai, alamat_pegawai, jabatan)values ('$newID', 'AM00001', '$nama', '$jk', '$tgl', '$alamat', '$jabatan')");
	
	if($simpan){
		echo "<script>alert('Data pegawai dengan nama $nama telah tersimpan'); history.go(-2)</script>";
		//header( "Location: index-admin.php?menu=frm-foto&kegiatan=$newID" );
	}
	else{
		echo "<script>alert('Gagal'); history.go(-1)</script>";
	}
?>