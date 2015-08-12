<?php
	if(!isset($_POST['keyword'])){
		echo "<script>alert('Keyword belum terisi'); history.go(-1)</script>";
	}
	else
	{
		$vkey=$_POST['keyword'];
		include('connect.php');
		$data=mysql_query("select * from mhs where kd_kelas='$vkey'");
		if($data)
		{?> 
			<table width="100%" border="1" align="center">
			<tr bgcolor="#0094FF">
				<th>NIM</th>
				<th>Nama</th>
				<th>Keterangan</th>
			</tr>
			<?php while($tampil = mysql_fetch_array ($data))
			{?>
				<tr>
				<td><label>
				<input name="txtnim[]" type="text" id="txtnim" value="<?php echo $tampil['nim'];?>"/>
				</label></td>
				<td><label>
				<input name="txtnm_mhs[]" type="text" id="txtnm_mhs" value="<?php echo $tampil['nama_mhs'];?>" />
				</label></td>
				<td><label>
						<select name="ket[]" id="ket[]">
						<option selected="selected" value="hadir">Hadir</option>
						<option value="sakit">Sakit</option>
						<option value="izin">Izin</option>
						<option value="alpa">Alpa</option>
						</select>
				</label></td>
				</tr>
			<?php } 
			echo"</table>";?>
		<?php }
		else { echo "Data yang dicari tidak ada dalam database"; }
	}?>