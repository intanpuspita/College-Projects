<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connect.php';
$kd_kuliah=$_GET['kd_perkuliahan'];

$query_assignment=mysql_query("select kd_assignment from assigment");
$query_ruang=mysql_query("select kd_ruang from ruang");
$query=mysql_query("select * from perkuliahan where kd_perkuliahan='$kd_kuliah'");
while($data=(mysql_fetch_array($query)))
{
?>
<form id="form1" name="form1" method="post" action="kdupdate_kuliah.php">
  <h2 align="center">Form Perkuliahan </h2>
  <table width="332" border="0" align="center">
    <tr>
      <td>Kode Assignment </td>
      <td>:</td>
      <td><label>
        <select name="kd_assignment" id="kd_assignment">
         <option selected="selected">----PILIH-----</option>
		  <?php while($data_assignment=(mysql_fetch_array($query_assignment))){?>
		  <option><?php echo $data_assignment['kd_assignment'];?></option>
		  <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Kode Ruang </td>
      <td>:</td>
      <td><label>
        <select name="kd_ruang" id="kd_ruang">
		<option selected="selected">----PILIH-----</option>
		  <?php while($data_ruang=(mysql_fetch_array($query_ruang))){?>
		  <option><?php echo $data_ruang['kd_ruang'];?></option>
		  <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Jam Awal </td>
      <td>:</td>
      <td><label>
        <input name="txtjam_awal" type="text" id="txtjam_awal" value="<?php echo $data['jam_awal'];?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Jam Akhir </td>
      <td>:</td>
      <td><label>
        <input name="txtjam_akhir" type="text" id="txtjam_akhir" value="<?php echo $data['jam_akhir'];?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Tanggal Perkuliahan </td>
      <td>:</td>
      <td><label>
        <input name="txttgl_kuliah" type="date" id="txttgl_kuliah" value="<?php echo $data['tgl_kuliah'];?>"/>
      </label></td>
    </tr>
	<tr>
      <td>Minggu Ke</td>
      <td>:</td>
      <td><label>
        <input name="txtminggu_ke" type="text" id="txtminggu_ke" value="<?php echo $data['minggu_ke'];?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Kehadiran Dosen </td>
      <td>:</td>
      <td><label>
        <input name="ket" type="radio" value="hadir" checked/>
      Hadir 
      <input name="ket" type="radio" value="tidak hadir" />
      Tidak Hadir 
    </tr>
  </table>
  <p align="center">
    <label>
    <input name="simpan" type="submit" id="simpan" value="Update" />
    </label>
  </p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
</form>
<?php } ?>
</body>
</html>
