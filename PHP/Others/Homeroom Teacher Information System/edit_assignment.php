<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Walikelas</title>
</head>

<body>
<?php
include 'connect.php';
$kd_assignment=$_GET['kd_assignment'];

$query_mk=mysql_query("select * from mk");
$query_dosen=mysql_query("select * from dosen");
$query_smt=mysql_query("select no_smt from smt");
$query=mysql_query("select * from assigment where kd_assignment='$kd_assignment'");
while($data=mysql_fetch_array($query)){
?>
<form id="form1" name="form1" method="post" action="kdupdate_assignment.php">
  <h2 align="center">Form Data Assignment </h2>
  <table width="392" border="0" align="center">
    <tr>
      <td width="169" height="24">Kode Assignment </td>
      <td width="9">:</td>
      <td width="200"><label>
        <input name="txtkd_assignment" type="text" id="txtkd_assignment" value="<?php echo $data['kd_assignment'];?>" /><?php } ?>
      </label></td>
    </tr>
    <tr>
      <td>Kode Matakuliah </td>
      <td>:</td>
      <td><label>
        <select name="kd_matkul" id="kd_matkul">
		  <option selected="selected">----PILIH-----</option>
		  <?php while($data=(mysql_fetch_array($query_mk))){?>
          <option><?php echo $data['nama_mk'];?></option>
		  <?php }?>
        </select>
		
      </label></td>
    </tr>
    <tr>
      <td>Kode Dosen </td>
      <td>:</td>
      <td><label>
        <select name="kd_dosen" id="kd_dosen">
		 <option selected="selected">----PILIH-----</option>
		  <?php while($data_dosen=(mysql_fetch_array($query_dosen))){?>
          <option><?php echo $data_dosen['nama_dosen'];?></option>
		  <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>No Semester </td>
      <td>:</td>
      <td><label>
        <select name="no_smt" id="no_smt">
		<option selected="selected">----PILIH-----</option>
		  <?php while($data_smt=(mysql_fetch_array($query_smt))){?>
          <option><?php echo $data_smt['no_smt'];?></option>
		  <?php }?>
        </select>
      </label></td>
    </tr>
  </table>
  <p>
  <label>
    <div align="center">
      <input name="Simpan" type="submit" id="Simpan" value="Simpan" />
    </div>
    </label>
  </p>
  <p align="center">&nbsp; </p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
