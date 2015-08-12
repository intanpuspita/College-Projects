<?php 
	include 'connect.php';
	$id_anakasuh=$_GET['anakasuh'];
	$anakasuh=mysql_query("select * from anak_asuh where id_anakasuh='$id_anakasuh'");
	$dataanakasuh=mysql_fetch_array($anakasuh);
	//$dataanakasuh['tgl_lahir']=date('d-M-Y');
?>
<html>
	<h2>Data anak asuh</h2>
	<table>
		<tr>
			<td><img src="<?php echo $dataanakasuh['foto_anak'];?>"></td>
			<td width="10px"></td>
			<td valign="top">
				<table>
					<tr>
						<td>Nama anak asuh</td>
						<td>:</td>
						<td><?php echo $dataanakasuh['nama_anak'];?></td>
					</tr>
					<tr>
						<td>Tanggal lahir</td>
						<td>:</td>
						<td><?php echo $dataanakasuh['tgl_lahir'];?></td>
					</tr>
					<tr>
						<td>Jenis kelamin</td>
						<td>:</td>
						<td><?php if($dataanakasuh['jk_anak']==1){ echo "Laki-laki";} else{ echo "Perempuan";}?></td>
					</tr>
					<tr>
						<td>Pendidikan anak</td>
						<td>:</td>
						<td><?php echo $dataanakasuh['pendidikan_anak'];?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</html>