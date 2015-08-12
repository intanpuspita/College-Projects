<?php include 'connect.php';?>
<html>
	<body>
		<h2 align="center">Data Pegawai</h2>
		<TABLE width="100%" class="data"> 
		<tr class="kolom">
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Jenis Kelamin Pegawai</th>
			<th>Alamat Pegawai</th>
			<th>Jabatan</th>
		</tr>
		<?php
			$querypegawai=mysql_query("select * from pegawai");
			$no=1;
			while($tampil =mysql_fetch_array($querypegawai)){?>	
			<tr>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><? echo $no;?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php echo $tampil['nama_pegawai']." ";?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php if($tampil['jk_pegawai']==1){
					echo "Laki-laki";}
					else{ echo "Perempuan";}?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php echo $tampil['alamat_pegawai']." ";?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php echo $tampil['jabatan']." ";?></td>	
				
			</tr>
		<?php $no++;
		} ?>
	</table>
	</body>
</html>