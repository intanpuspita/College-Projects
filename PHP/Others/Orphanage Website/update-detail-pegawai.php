<HTML>
<BODY>

<?php
	$id_pegawai=$_GET['id_pegawai'];
	include "connect.php";
	
	$query=mysql_query("select * from pegawai where id_pegawai='$id_pegawai'");
	$data =mysql_fetch_array($query);
?>
<h2>Edit Pegawai</h2>
<form action="kd-update-pegawai.php?id_pegawai=<?php echo $id_pegawai;?>" method="post">
<TABLE>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
		  <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama_pegawai'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin Pegawai</td><td>:</td><td><input type="radio" name="jk" id="jk" value="1" <?php if($data['jk_pegawai']==1){ echo "checked"; }?>/>Laki-laki<input type="radio" name="jk" id="jk" value="0" <?php if($data['jk_pegawai']==0){ echo "checked"; }?>/>Perempuan</td>
		</tr>
		<tr>
			<td>Alamat Pegawai</td><td>:</td>
			<td><label>
			  <textarea name="alamat" id="alamat" class="textarea2"><?php echo $data['alamat_pegawai'];?></textarea>
			</label></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tgl" id="tgl" value="<?php echo $data['tgl_lahir_pegawai'];?>"/></td>
		</tr>
		<tr>
			<td>Jabatan</td><td>:</td><td><input type="text" name="jabatan" id="jabatan" value="<?php echo $data['jabatan'];?>" class="input"/></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" name="simpan" value="Edit" class="button"/></td>
		</tr>
	</TABLE>

</form>
</BODY>
</HTML>


