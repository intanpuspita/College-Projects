<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include 'connect.php';
$kd_ruang=$_GET['kd_ruang'];
$query=mysql_query("select * from ruang where kd_ruang='$kd_ruang'");
while($data=(mysql_fetch_array($query))){
?>
<form id="form1" name="form1" method="post" action="kdupdate_ruang.php">
  <h2 align="center">Form Input Data Ruangan </h2>
  <table width="350" border="0" align="center">
    <tr>
      <td width="162">Kode Ruangan </td>
      <td width="7">:</td>
      <td width="159"><label>
        <input name="txtkd_ruang" type="text" id="txtkd_ruang" value="<?php echo $data['kd_ruang'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Ruangan </td>
      <td>:</td>
      <td><label>
        <input name="txtnm_ruang" type="text" id="txtnm_ruang" value="<?php echo $data['nama_ruang'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Jenis Ruang </td>
      <td>:</td>
      <td><label>
        <input name="txtjenis_ruang" type="text" id="txtjenis_ruang" value="<?php echo $data['jenis_ruang']?>" /><?php }?>
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