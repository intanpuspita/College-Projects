<?php include 'connect.php';?>
<html>
	<body>
		<h2 align="center">Data Anak Asuh</h2>
		<table border="1" class="data" width="100%">
					<tr class="kolom">
						<th>Nama anak asuh</th>
						<th>Jenis kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Pendidikan anak</th>
						<th>Foto anak asuh</th>
					</tr>
				<?php $anakasuh=mysql_query("select * from anak_asuh");
				$i=1;
				while($dataanakasuh=mysql_fetch_array($anakasuh)){?>
					<tr>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataanakasuh['nama_anak'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php if($dataanakasuh['jk_anak']==1){ echo "Laki-laki";} else{ echo "Perempuan";}?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataanakasuh['tgl_lahir'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataanakasuh['pendidikan_anak'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><img src="<?php echo $dataanakasuh['foto_anak'];?>" width="88px" height="103"></td>
					</tr>
				<?php $i++;
				} ?>
				</table>
	</body>
</html>