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
<title>Report Data Mahasiswa</title>
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
<table width="600" border="0" align="center">
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
        <td colspan="3" valign="top"><div align="center">Report Data Mahasiswa</div></td>
        </tr>
      <tr>
        <td colspan="4"><hr /></td>
        </tr>
      <tr>
        <td colspan="4"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr bgcolor="#999999">
            <td width="36" height="26"><div align="center"><span class="style3">No</span></div></td>
            <td width="127" height="26"><div align="center"><span class="style3">NIM</span></div></td>
            <td width="225"><div align="center"><strong>Nama Mahasiswa</strong></div></td>
          </tr>
          <?php include("connect.php");
		  $nourut=0;
		
		 $query = "SELECT * from mhs" ;
	     $result = mysql_query($query) or die('Error');
	  	$hasil  = mysql_query($query);
      	$hasil   = mysql_fetch_array($hasil);
	  while($data=mysql_fetch_array($result)) {
	  if ($nourut % 2 == 0)
		$bg="#cccccc";
		else
		$bg="#FFFFFF";
	  $nourut++;
	  echo"
	   <tr bgcolor=\"#ffffff\">
          <td><div align=\"center\">$nourut</td>
		  <td><div align=\"center\">$data[nim]</td>
          <td><div align=\"center\">$data[nama_mhs]</td>        
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
