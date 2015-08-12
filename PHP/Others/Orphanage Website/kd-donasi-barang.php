<?php
include "connect.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$pekerjaan=$_POST['pekerjaan'];
$namabarang=$_POST['namabarang'];
$jumlah=$_POST['jumlah'];
$ke=$_POST['ke'];
$tgl=$_POST['tgl'];
					$hasil = mysql_query("SELECT max(id_sumbangbarang) as maxID FROM sumbangan_barang");
					$data  = mysql_fetch_array($hasil);
					$idMax = $data['maxID'];
					//echo"$idMax"."<br>";
					$no = (int) substr($idMax, 2,7);
					//echo"$no"."<br>";
					$no++;
					//echo"$no"."<br>";
					$newID = "SB" . sprintf("%05s", $no);
					//echo"$newID"."<br>";
//echo $tgl;
/*$email = (string) $_POST['email'];
if (empty($email)) {
  die('You did not enter anything. Please go <a href="javascript:history.back(-1);">back</a>.');
}
if (!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+ (.[a-z0-9-]+)*(.[a-z]{2,4})$", $email)) {
die('Your email address does not follow the basic format. Sorry, please try again!'); 
} */
//echo sprintf('Your email address "%s" looks valid. Thank you!', $email);
/* continue here with further processing, for example subscribe/unsubscribe process */

$simpan=mysql_query("Insert into sumbangan_barang(id_sumbangbarang,id_admin,nama_barang,jumlah_barang,barang_ke,tgl_barang,nama_donatur,jk_donatur,alamat_donatur,email_donatur,telepon_donatur,pekerjaan_donatur)values('$newID','AM00001','$namabarang','$jumlah','$ke','$tgl','$nama','$jk','$alamat','$email','$telepon','$pekerjaan')");

if ($simpan){
echo "<script>alert('Data Berhasil Disimpan, Terimakasih Bantuannya.'); history.go(-2)</script>";
} else {
echo "<script>alert('Maaf Data Gagal Disimpan!'); history.go(-1)</script>";
}

?>
