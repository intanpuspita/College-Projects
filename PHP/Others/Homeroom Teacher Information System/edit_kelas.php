<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connect.php';
$kd_kelas=$_GET['kd_kelas'];

$query=mysql_query("select * from kelas where kd_kelas='$kd_kelas'");
while($data=mysql_fetch_array($query)){

?>
<form id="form1" name="form1" method="post" action="kdupdate_kelas.php">
  <h2 align="center">Form Input Data Kelas </h2>
  <table width="350" border="0" align="center">
    <tr>
      <td width="162">Kode Kelas </td>
      <td width="7">:</td>
      <td width="159"><label>
        <input name="txtkd_kelas" type="text" id="txtkd_kelas" value="<?php echo $data['kd_kelas'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Kelas </td>
      <td>:</td>
      <td><label>
        <input name="txtnm_kelas" type="text" id="txtnm_kelas"  value="<?php echo $data['nama_kelas'];?>"/><?php }?>
      </label></td>
    </tr>
  </table>
  <p align="center">
    <label>
    <input name="simpan" type="submit" id="simpan" value="Simpan" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
