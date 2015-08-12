<?php 
	include 'connect.php';
?>
<html>

	<script language="javascript">
	fields = 0;
	function addInput() {
	if (fields != 10) {
		document.getElementById('text').innerHTML += "<br /><input type='file' name='file[]' id='file' accept='image/*' class='input'/>";
		fields += 1;
	} else {
		document.getElementById('text').innerHTML += "<br />Hanya 10 foto yang bisa diupload.";
		document.form.add.disabled=true;
		}
	}
	</script>
	
	<body>
		<h2>Data foto</h2>
		<form name="" method="post" action="kd-foto.php" enctype="multipart/form-data">
		<table>
			<?php if(isset($_GET['kegiatan'])){ ?>
			<tr>
				<td>ID kegiatan</td>
				<td>:</td>
				<td><input type="text" name="pilihkegiatan" value="<?php echo $_GET['kegiatan'];?>" readonly="readonly"></td>
			</tr>
			<?php } 
			if(isset($_GET['id_album'])){?>
			<tr>
				<td>ID album</td>
				<td>:</td>
				<td><input type="text" name="pilihalbum" value="<?php echo $_GET['id_album'];?>" readonly="readonly"></td>
			</tr>
			<?php } 
			else {?>
			<tr>
				<td>Pilih album</td>
				<td>:</td>
				<td><select name="pilihalbum">
					<?php $album=mysql_query("select * from album");
					while($dataalbum=mysql_fetch_array($album)){?>
						<option value="<?php echo $dataalbum['id_album'];?>"><?php echo $dataalbum['nama_album'];?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<?php } ?>
			<?php if(!isset($_GET['kegiatan'])){ ?>
			<tr>
				<td>Pilih kegiatan</td>
				<td>:</td>
				<td><select name="pilihkegiatan">
					<?php $kegiatan=mysql_query("select * from kegiatan");
					while($datakegiatan=mysql_fetch_array($kegiatan)){?>
						<option value="<?php echo $datakegiatan['id_kegiatan'];?>"><?php echo $datakegiatan['nama_kegiatan'];?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td></br></td>
			</tr>
			<tr>
				<td>Nama foto</td>
				<td>:</td>
				<td><input type="text" name="nama" class="input"></td>
			</tr>
			<tr>
				<td>Deskripsi foto</td>
				<td>:</td>
				<td><textarea name="deskripsi" id="" class="textarea2"></textarea></td>
			</tr>
			<tr>
				<td valign="top">Upload foto</td>
				<td valign="top">:</td>
				<td><div id="text"><input type="file" name="file[]" id="file" accept="image/*" class="input"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="right"><input type="button" onclick="addInput()" name="add" value="Tambah foto" class="add"/></td>
			</tr>
			<tr height="50px">
				<td></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="tambah" value="Simpan Foto" class="button"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>