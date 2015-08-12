<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
 <?php
include 'connect.php';
$query_cari=mysql_query("select * from kelas");
$query_kuliah=mysql_query("select * from perkuliahan");
?>
<form id="form1" name="form1" method="post" action="">
  <h2 align="center">KEHADIRAN MAHASISWA  </h2>
  <table width="427" align="left">
    <tr>
      <td>Pilih kelas </td>
      <td>:</td>
      <td><label>
        <select name="keyword" id="keyword">
          <option>----PILIH----</option>
          <?php while($data_cari=(mysql_fetch_array($query_cari))){?>
          <option><?php echo $data_cari['kd_kelas']?></option>
          <?php }?>
        </select>
      </label></td>
	  <td><input type="submit" name="carikelas" value="Submit" /></td>
    </tr>
  </table>
</form></br>
<?php 
	if(isset($_POST['carikelas']))
	{
		include 'kd_searchabsen.php';
	}
	else
	{
		$query=mysql_query("select * from mhs");
		if(mysql_num_rows($query_kuliah)>=1 && mysql_num_rows($query)>=1)
		{?>
			<form id="form2" name="form2" method="post" action="kd_absen.php">
			</br></br>
			<table border="0" align="left">
			<tr>
			<td>Kode perkuliahan</td>
			<td>:</td> 
			<td align="left"><label>
			<select name="kd_kuliah" id="kd_kuliah">
			<option>----Pilih----</option>
			<?php while($data_kuliah=(mysql_fetch_array($query_kuliah))){?>
			<option><?php if($data_kuliah['kehadiran_dosen']=='hadir'){ echo $data_kuliah['kd_perkuliahan']; }?></option><?php }?>
			</select>
			</label></td>
			</tr>
			</table>
			<table border="0">
			</table>
			<table width="100%" border="1" align="center">
			<tr bgcolor="#0094FF">
				<th>NIM</th>
				<th>Nama</th>
				<th>Keterangan</th>
			</tr>
			<?php while($data=(mysql_fetch_array($query)))
				  { ?>
					<tr>
					<td><label>
						<input name="txtnim[]" type="text" readonly="readonly" id="txtnim" value="<?php echo $data['nim'];?>"/>
						</label></td>
					<td><label>
						<input name="txtnm_mhs[]" size="60" type="text" readonly="readonly" id="txtnm_mhs" value="<?php echo $data['nama_mhs'];?>" /></label></td>
					<td><label>
						<select name="ket[]" id="ket[]">
						<option selected="selected" value="hadir">Hadir</option>
						<option value="sakit">Sakit</option>
						<option value="izin">Izin</option>
						<option value="alpa">Alpa</option>
						</select>
					</label></td>
				<?php } echo "</table>";?> 
			<p align="center">
			<label>
				<input name="Simpan" type="submit" id="Simpan" value="Simpan" />
			</label></p>
			</form>
		<?php }
		else{ echo "<font color='red'>Belum ada data mahasiswa atau data perkuliahan dalam database</font>"; }
	}?>
</body>
</html>
