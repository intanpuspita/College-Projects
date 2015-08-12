<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
	<?php include 'connect.php';
	$kelas=mysql_query("select * from kelas"); ?>
	<form action="" method="post" name="form1">
	<h2 align="center">Edit Absensi Mahasiswa</h2>
	<table width="100%" height="26" border="0">
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
			  <td width="109">Perkuliahan </td>
	  <td width="8">:</td>
	  <td width="105">
	  <select name="kuliah" id="kuliah">
		<option>----PILIH----</option>
		<?php $kul=mysql_query("select * from perkuliahan");
		while($kuliah=mysql_fetch_array($kul))
			{?>
				<option><?php echo $kuliah['kd_perkuliahan'];?></option>
		<?php }?>
		</select></td>
	  <td width="192"><label><input name="Lihat" type="submit" id="Lihat" value="Lihat" /></label></td>
	</form>
	<td width="175" align="right"><a href="index.php?menu=41"><img src="images/Insert.jpg" alt=""/>Tambah Absen</a></td>
	</tr>
	</table></br>
	<?php if(isset($_POST['Lihat'])){
		include 'kd_searchabsen_edit.php';
	} ?>
</body>
</html>
