<?php
	if(!isset($_POST['keyword'])){
		echo "<script>alert('Keyword belum terisi'); history.go(-1)</script>";
	}
	else{
	$vkey=$_POST['keyword'];
	$vpilih=$_POST['pilih'];
	//include('connect.php');
	if($vpilih==1){
		$data=mysql_query("select * from mhs where nim like '%$vkey%'");}
	else if($vpilih==2){
		$data=mysql_query("select * from mhs where nama_mhs like '%$vkey%'");}
	else{
		$data=mysql_query("select * from mhs where nim like '%$vkey%' or nama_mhs like '%$vkey%'");}
	if(mysql_num_rows($data)>=1){
?>
	<table border='1' width='85%'>
	<tr bgcolor='#0094FF'>
		<th width='15%'>NIM</th>
		<th>NAMA</th>
	</tr>
	<?php while($tampil = mysql_fetch_array ($data))
		{ ?>
		<tr>
			<td><?php echo $tampil['nim'];?></td>
			<td><?php echo $tampil['nama_mhs'];?></td>
			<td width="30"><a href="delete_mhs.php?nim=<?php echo $tampil['nim']?>"><img src="images/delete.png" alt=""/></a></td>
			<td width="30"><a href="index.php?menu=22&nim=<?php echo $tampil['nim']?>"><img src="images/edit.png" alt=""/></a></td>
			<td width="30"><a href="index.php?menu=23&nim=<?php echo $tampil['nim']?>"><img src="images/detail.png" alt=""/></a></td>
		</tr>
		<?php }
		echo "</table>";
	} 
	else{ echo "<font color='red'>Data yang dicari tidak ada dalam database</font>"; }
	}
?>
