<?php
	if(!isset($_POST['keyword'])){
		echo "<script>alert('Keyword belum terisi'); history.go(-1)</script>";
	}
	else{
	$vkey=$_POST['keyword'];
	$vpilih=$_POST['pilih'];
	include('connect.php');
	if($vpilih==1){
		$data=mysql_query("select * from perkuliahan, assigment, mk where (nama_mk like '%$vkey%' or assigment.kd_mk like '%$vkey%') and mk.kd_mk=assigment.kd_mk and assigment.kd_assignment=perkuliahan.kd_assignment");}
	else if($vpilih==2){
		$data=mysql_query("select * from perkuliahan, assigment, mk where minggu_ke like '%$vkey%' and perkuliahan.kd_assignment=assigment.kd_assignment and assigment.kd_mk=mk.kd_mk");}
	if(mysql_num_rows($data)>=1){?>
		<table border="1" width="100%">
			<tr bgcolor="#0094FF">
				<th width="10%">MINGGU KE-</th>
				<th width="20%">TANGGAL PERKULIAHAN</th>
				<th width="20%">KODE PERKULIAHAN</th>
				<th>MATA KULIAH</th>
				<th></th>
			</tr>
			<?php while($tampil = mysql_fetch_array ($data))
			{ ?>
			<tr>
				<td><?php echo $tampil['minggu_ke'];?></td>
				<td><?php echo $tampil['tgl_kuliah'];?></td>
				<td><?php echo $tampil['kd_perkuliahan'];?></td>
				<td><?php echo $tampil['nama_mk'];?></td>
				<td width="30"><a href="index.php?menu=62&kd_perkuliahan=<?php echo $tampil['kd_perkuliahan']?>"><img src="images/edit.png" alt=""/></a></td>
				<td width="30"><a href="index.php?menu=63&kd_perkuliahan=<?php echo $tampil['kd_perkuliahan']?>"><img src="images/detail.png" alt=""/></a></td>
			</tr>
			<?php } ?>
		</table>
	<?php
	} 
	else{ echo "<font color='red'>Data yang dicari tidak ada dalam database</font>"; }
	}
?>