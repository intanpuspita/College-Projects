<?php include 'connect.php';?>
<html>
	<body>
		<h2 align="center">Data Prestasi</h2>
		<TABLE class="data" width="100%"> 
			<tr class="kolom">
				<th>No</th>
				<th>Nama Acara</th>
				<th>Juara</th>
				<th>Tingkat</th>
				<th>Tanggal</th>
				<th>Deskripsi</th>
			</tr>
			<?php
			$queryprestasi=mysql_query("select * from prestasi");
			$no=1;
			while($tampil =mysql_fetch_array($queryprestasi))
			{?>
			<tr <?php if($no%2 == 0){ echo "class='kolom'";}?>>
				<td><? echo $no;?></td>
				<td><?php echo $tampil['nama_acara']." ";?></td>
				<td><?php echo $tampil['juara']." ";?></td>	
				<td><?php echo $tampil['tingkat']." ";?></td>	
				<td><?php echo $tampil['tgl_prestasi'];?></td>
				<td><?php echo $tampil['deskripsi_prestasi'];?></td>
			</tr>
			<?php $no++;
			}?>
		</table>
	</body>
</html>