<?php
	include 'connect.php';
	include('cek-login.php'); 
	if(!isset($_GET['menu'])){
		$menu=1;
	}
	else{
		$menu=$_GET['menu'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report Data Perkuliahan</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {font-size: 12px}
.style3 {font-weight: bold}
.style4 {
	font-size: 20px
}
-->
</style>
</head>

<body>
<?php
$kd_kelas=$_GET['kelas'];
$mingguke=$_GET['minggu'];
?>
<table width="800" border="0" align="center">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="29%" rowspan="3"><div align="center"><img src="images/logo.jpg" width="116" height="100" alt="System" /></div></td>
        <td colspan="3"><div align="center" class="style1 style4">
          <p>Absensi Jurusan Teknik Komputer dan Informatika</p>
          <p> Politeknik Negeri Bandung</p>
        </div></td>
        </tr>
      <tr>
        <td colspan="3"><div align="center"><span class="attr style2">Jl. Gegerkalong Hilir, Ds Ciwaruga Kotak Pos 1234 Bandung 40012</span></div></td>
        </tr>
      <tr>
        <td colspan="3" valign="top"><div align="center">Report Absensi Mahasiswa Kelas <?php echo $kd_kelas;?> Minggu ke <?php echo $mingguke;?></div></td>
        </tr>
      <tr>
        <td colspan="4"><hr /></td>
        </tr>
      <tr>
        <td colspan="4"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr bgcolor="#999999">
            <td width="30"><div align="center"><span class="style3">No</span></div></td>
			<td width="100"><div align="center"><span class="style3">NIM</span></div></td>
            <td width="200"><div align="center"><span class="style3">Nama</span></div></td>
			<td width="50"><div align="center"><span class="style3">Sakit</span></div></td>
			<td width="50"><div align="center"><span class="style3">Izin</span></div></td>
			<td width="50"><div align="center"><span class="style3">Alpa</span></div></td>
		  </tr>
          <?php include("connect.php");
		  $nourut=0;
		 $data1 = "select mhs.nim, nama_mhs ,minggu_ke from mhs, kehadiran_mhs,perkuliahan where kehadiran_mhs.nim = mhs.nim and kehadiran_mhs.kd_perkuliahan = perkuliahan.kd_perkuliahan and minggu_ke = '$mingguke'" ;
		 $query="select * from mhs where kd_kelas='$kd_kelas'";
		 $result = mysql_query($query) or die('Error');
	  	$hasil  = mysql_query($query);
      	$hasil   = mysql_fetch_array($hasil);
	  while($data=mysql_fetch_array($result)) {
	  if ($nourut % 2 == 0)
		$bg="#cccccc";
		else
		$bg="#FFFFFF";
	  $nourut++;
			$sakit=mysql_query("select count(keterangan) as skt from kehadiran_mhs where kehadiran_mhs.nim = '$data[nim]' and keterangan = 'sakit'");
			$record1 = mysql_fetch_array($sakit);
			$ijin=mysql_query("select count(keterangan) as ijn from kehadiran_mhs where kehadiran_mhs.nim = '$data[nim]' and keterangan = 'izin'");
			$record2 = mysql_fetch_array($ijin);
			$alpha=mysql_query("select count(keterangan) as alp from kehadiran_mhs where kehadiran_mhs.nim = '$data[nim]' and keterangan = 'alpa'");
			$record3 = mysql_fetch_array($alpha);
			//$record = mysql_fetch_array($sakit);
	  echo"
	   <tr bgcolor=\"#ffffff\">
          <td><div align=\"center\">$nourut</td>
		  <td><div align=\"center\">$data[nim]</td>
          <td><div align=\"left\">$data[nama_mhs]</td>
		  <td><div align=\"center\">$record1[skt]</td>
		  <td><div align=\"center\">$record2[ijn]</td>
		  <td><div align=\"center\">$record3[alp]</td>
        </tr>";
		}

	   ?>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="39%">&nbsp;</td>
        <td width="17%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
  <td><table width="100%" border="0">
      <tr>
        <td width="57%">&nbsp;</td>
        <td width="43%"><div align="center">
          <p>Bandung,<?php $tanggal=date('d-M-Y'); echo"$tanggal"; ?></p>
          <p>Petugas</p>
          <p>&nbsp;</p>
          <p><?php $username=$_SESSION['username'];
	$sintak=mysql_query("select * from akun where username='$username'");
	$jero=mysql_fetch_array($sintak);
	 $petugas=$_SESSION['username']; 
	echo $jero['nama']; ?></p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
