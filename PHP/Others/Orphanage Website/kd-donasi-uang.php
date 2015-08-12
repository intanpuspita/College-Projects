<?php
include "connect.php";

$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$pekerjaan=$_POST['pekerjaan'];
$jumlah=$_POST['jumlah'];
$ke=$_POST['ke'];
$tgl=$_POST['tgl'];

$hasil= mysql_query("SELECT max(id_sumbanguang) as maxID FROM sumbangan_uang");
					$data  = mysql_fetch_array($hasil);
					$idMax = $data['maxID'];
					//echo"$idMax"."<br>";
					$no = (int) substr($idMax, 2,7);
					//echo"$no"."<br>";
					$no++;
					//echo"$no"."<br>";
					$newID ="SU" . sprintf("%05s", $no);
					//echo"$newID"."<br>";

//echo $tgl;
/*$queryid2 = mysql_query ("SELECT * FROM donasi");
$id2=mysql_num_rows($queryid2)+1;*/
					
/*$donatur=mysql_query("Insert into donatur(id_donatur,nama_donatur,alamat_donatur,jk_donatur,telepon_donatur,email_donatur,pekerjaan_donatur)values('$newID','$nama','$alamat','$jk','$telepon','$email','$pekerjaan')");*/

$simpan=mysql_query("Insert into sumbangan_uang(id_sumbanguang,id_admin,jumlah_donasi,donasi_ke,tgl_donasi,nama_donatur,alamat_donatur,jk_donatur,telepon_donatur,email_donatur,pekerjaan_donatur)values('$newID','AM00001','$jumlah','$ke','$tgl','$nama','$alamat','$jk','$telepon','$email','$pekerjaan')");

if ($simpan){
echo "<script>alert('Data Berhasil Disimpan, Terimakasih Bantuannya.'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal Disimpan!'); history.go(-1)</script>";
}

?>
