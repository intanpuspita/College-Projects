<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include 'connect.php';
$kd_mk=$_GET['kd_mk'];
$query=mysql_query("select * from mk where kd_mk='$kd_mk'");
while($data=mysql_fetch_array($query)){
?>
<form id="form1" name="form1" method="post" action="kdupdate_mk.php">
  <h2 align="center">Form Input Data Matakuliah </h2>
  <table width="350" border="0" align="center">
    <tr>
      <td width="162">Kode Matakuiah </td>
      <td width="7">:</td>
      <td width="159"><label>
        <input name="txtkd_mk" type="text" id="txtkd_mk" value="<?php echo $data['kd_mk']?>" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Matakuliah </td>
      <td>:</td>
      <td><label>
        <input name="txtnm_mk" type="text" id="txtnm_mk" value="<?php echo $data['nama_mk'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Jenis Matakuliah </td>
      <td>:</td>
      <td><label>
        <input name="txtjenis_mk" type="text" id="txtjenis_mk" value="<?php echo $data['jenis_mk'];?>" /><?php } ?>
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
