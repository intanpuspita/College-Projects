<?php 
	include 'connect.php';
	$id_kegiatan=$_GET['kegiatan'];
	$kegiatan=mysql_query("select * from kegiatan where id_kegiatan='$id_kegiatan'");
	$datakegiatan=mysql_fetch_array($kegiatan);
	//$datakegiatan['tgl_kegiatan']=date('d-M-Y');
?>
<html>
	<body>
		<h2>Kegiatan <?php echo $datakegiatan['nama_kegiatan'];?></h2>
		<table>
			<tr>
				<td colspan="3"><strong>Keterangan kegiatan</strong></td>
			</tr>
			<tr>
				<td width="10%">Nama kegiatan</td>
				<td>:</td>
				<td><?php echo $datakegiatan['nama_kegiatan'];?></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><?php echo $datakegiatan['tgl_kegiatan'];?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td align="justify"><?php echo $datakegiatan['deskripsi_kegiatan'];?></td>
			</tr>
		</table>
		<table width="90%">
			<tr>
				<td colspan="3"></br><strong>Foto kegiatan</strong></td>
			</tr>
			<tr height='150px'>
				<?php 
					$foto=mysql_query("select * from foto where id_kegiatan='$id_kegiatan'");
					if(mysql_num_rows($foto)>0){
						$i=1;
						while($datafoto=mysql_fetch_array($foto)){
							if($i == 6){
								echo "<tr height='150px'>";
							}?>
							<td>
							<strong><?php echo $datafoto['nama_foto'];?></strong></br>
							<div class="two-column">
								<figure><a href="<?php echo $datafoto['file_foto'];?>" rel="recent_work" class="zoom"><img src="<?php echo $datafoto['file_foto'];?>" alt="Image" width="150px" height="120px"></a></figure>
							</div>
							</td>
						<?php if($i == 4){
							echo "</tr>";
							$i=1;
						}
						$i++; }
					}
				?>
				<td></td>
			</tr>
		</table>
	</body>
</html>