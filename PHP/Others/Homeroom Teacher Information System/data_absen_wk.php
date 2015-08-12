<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
	<?php include 'connect.php';
	$kelas=mysql_query("select * from kelas"); ?>
	<form action="" method="post" name="form1">
	<h2 align="center">Data Absensi Mahasiswa</h2>
	<table height="26" border="0" align="left">
	<tr>
      <td width="10%">Kelas </td>
      <td>:</td>
      <td>
	  <select name="kelas" id="kelas">
			<option>----PILIH----</option>
			<?php while($kd_kls=mysql_fetch_array($kelas))
			{?>
				<option><?php echo $kd_kls['kd_kelas'];?></option>
			<?php }?>
      </select></td>
	  <td width="109">Minggu Ke </td>
	  <td width="8">:</td>
	  <td width="105">
	  <select name="minggu_kul" id="minggu_kul">
		<option>----PILIH----</option>
		<?php $kul=mysql_query("select distinct minggu_ke from perkuliahan");
		while($minggu=mysql_fetch_array($kul))
			{?>
				<option><?php echo $minggu['minggu_ke'];?></option>
		<?php }?>
		</select></td>
	  <td width="192"><label><input name="Lihat" type="submit" id="Lihat" value="Lihat" /></label></td>
	</form>
	</tr>
	</table></br>
	<?php if(isset($_POST['Lihat'])){
		include 'kd_searchabsen_lap_wk.php';
	} ?>
</body>
</html>
