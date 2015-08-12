<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connect.php';
$no_smt=$_GET['no_smt'];
$query=mysql_query("select * from smt where no_smt='$no_smt'");
while($data=(mysql_fetch_array($query))){

?>
<form id="form1" name="form1" method="post" action="kd_smt.php">
  <h2 align="center">Form Input Data Semester </h2>
  <table width="350" border="0" align="center">
    <tr>
      <td width="162">No Semester </td>
      <td width="7">:</td>
      <td width="159"><label>
        <input name="txtno_smt" type="text" id="txtno_smt" value="<?php echo $data['no_smt'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>:</td>
      <td><label>
        <input name="keterangan" type="text" id="keterangan" value="<?php echo $data['keterangan'];?>"/><?php } ?>
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
