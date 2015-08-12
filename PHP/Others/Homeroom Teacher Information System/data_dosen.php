<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<form action="" method="post" name="form1">
	<h2 align="center">Data Dosen</h2>
	<table width="100%" height="26" border="0">
	<tr>
        <td width="104">Keyword : </td>
		<td width="158"><input name="keyword" type="text" /></td>
		<td width="79"><input name="Cari" type="submit" value="Cari" /></td>
    	<td width="341" align="right"><a href="index.php?menu=31"><img src="images/Insert.jpg" alt=""/>Tambah Dosen</a></td>
	</tr>
  </table>
</form>
</br>
<?php
	include 'connect.php';
	if(isset($_POST['Cari']))
	{
		include 'kd_searchdosen.php';
	}
	else
	{
		$data=mysql_query("select * from dosen");
		if(mysql_num_rows($data)>=1){?>
		<table border='1' width='85%'>
		<tr bgcolor="#0094FF">
			<th width='15%'>KODE DOSEN</th>
			<th>NAMA DOSEN</th>
			<th colspan="3"></th>
		</tr>
		<?php while($tampil = mysql_fetch_array ($data))
		{ ?>
		<tr>
			<td><?php echo $tampil['kd_dosen'];?></td>
			<td><?php echo $tampil['nama_dosen'];?></td>
			<td width="30"><a href="kddelete_dosen.php?kd_dosen=<?php echo $tampil['kd_dosen']?>"><img src="images/delete.png" alt=""/></a></td>
			<td width="30"><a href="index.php?menu=32&kd_dosen=<?php echo $tampil['kd_dosen']?>"><img src="images/edit.png" alt=""/></a></td>
			<td width="30"><a href="index.php?menu=33&kd_dosen=<?php echo $tampil['kd_dosen']?>"><img src="images/detail.png" alt=""/></a></td>
		</tr>
		<?php
		}
		echo "</table>";
		}
		else{ echo "<font color='red'>Belum ada data mahasiswa dalam database</font>"; }
	}
?>	
</body>
</html>
