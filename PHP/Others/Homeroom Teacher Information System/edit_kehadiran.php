<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
	<?php 
	include 'connect.php';
	$absen=$_GET['kd_absen'];
	$dt_absen=mysql_query("select * from kehadiran_mhs, mhs where kd_absen='$absen' and kehadiran_mhs.nim=mhs.nim");
	$data=mysql_fetch_array($dt_absen);
	?>
	<h2 align="center">KEHADIRAN MAHASISWA</h2></br>
	<form id="form1" name="form1" method="post" action="kdupdate_absen.php">
	<table align="left">
		<tr>
			<td>Kode Perkuliahan</td>
			<td>:</td>
			<td><label>
				<input name="txtkode" type="text" readonly="readonly" id="txtkode" value="<?php echo $data['kd_perkuliahan'];?>"/>
			</label></td>
		</tr>
	</table>
	<table align="center">
		<tr>
			<td>NIM</th>
			<td>:</th>
			<td><label>
				<input name="txtnim" type="text" readonly="readonly" id="txtnim" value="<?php echo $data['nim'];?>"/>
			</label></td>
		</tr>
		<tr>
			<td>NAMA</th>
			<td>:</th>
			<td><label>
				<input name="txtnama" type="text" readonly="readonly" id="txtnama" value="<?php echo $data['nama_mhs'];?>"/>
			</label></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td>:</td>
			<td><label>
				<select name="ket" id="ket">
				<option <?php if($data['keterangan']=='hadir'){ echo "selected='selected'";}?> value="hadir">Hadir</option>
				<option <?php if($data['keterangan']=='sakit'){ echo "selected='selected'";}?> value="sakit">Sakit</option>
				<option <?php if($data['keterangan']=='izin'){ echo "selected='selected'";}?> value="izin">Izin</option>
				<option <?php if($data['keterangan']=='alpa'){ echo "selected='selected'";}?> value="alpa">Alpa</option>
				</select>
			</label></td>
		</tr>
		<tr>
			<td colspan="3" align="center">
			<label>
				<input name="Simpan" type="submit" id="Simpan" value="Simpan" />
			</label>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
