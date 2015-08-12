<?php 
	include 'connect.php';
	$id_anakasuh=$_GET['anakasuh'];
	$anakasuh=mysql_query("select * from anak_asuh where id_anakasuh='$id_anakasuh'");
	$dataanakasuh=mysql_fetch_array($anakasuh);
?>
<html>
	<body>
		<form method="POST" action="kd-update-anak-asuh.php?anakasuh=<?php echo $id_anakasuh;?>" enctype="multipart/form-data">
		<h2>Edit data anak asuh</h2>
		<table>
			<tr>
				<td>Nama anak asuh</td>
				<td>:</td>
				<td><input type="text" name="nama" class="input" value="<?php echo $dataanakasuh['nama_anak'];?>"/></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td></br><input type="radio" name="jk" value="1" class="radio" <?php if($dataanakasuh['jk_anak']==1){ echo "checked"; }?>/>Laki-laki</br></br><input type="radio" name="jk" value="0" class="radio" <?php if($dataanakasuh['jk_anak']==0){ echo "checked"; }?>/>Perempuan</br></br></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" id="datepicker" class="input" value="<?php echo $dataanakasuh['tgl_lahir'];?>"/></td>
			</tr>
			<tr>
				<td>Pendidikan terakhir</td>
				<td>:</td>
				<td>
					<?php $pendidikan=$dataanakasuh['pendidikan_anak'];?>
					<select name="pilih">
						<option value="Belum Sekolah">Belum Sekolah</option>
						<option value="SD">SD</option>
						<option value="SMP">SMP</option>
						<option value="SMA">SMA</option>
						<option value="Perguruan Tinggi">Perguruan Tinggi</option>
					</select>
				</td>
			</tr>
			<?php if($dataanakasuh['foto_anak']!=NULL){?>
			<tr>
				<td>Foto anak asuh</td>
				<td>:</td>
				<td><img src="<?php echo $dataanakasuh['foto_anak'];?>"></br></td>
			</tr>
			<?php } 
			else{?>
			<tr>
				<td>Ganti foto</td>
				<td>:</td>
				<td><input type="file" name="file" id="file" accept="image/*"></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="3" align="center"></br><input type="submit" name="Submit" value="Ubah" class="button"></td>
			</tr>
		</table>
		</form>
	</body>
</html>