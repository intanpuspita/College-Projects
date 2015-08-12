<?php
	if(!isset($_POST['keyword'])){
		echo "<script>alert('Keyword belum terisi'); history.go(-1)</script>";
	}
	else{
	$vkey=$_POST['keyword'];
	include('connect.php');
	$data=mysql_query("select * from data_buku where kode_buku like '%$vkey%' or judul_buku like '%$vkey%' or pengarang_buku like '%$vkey%' or penerbit_buku like '%$vkey%'");
	if(mysql_num_rows($data)>=1){?>
	<table border='1' width='85%'>
		<tr bgcolor='#0094FF'>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Pengarang Buku</th>
			<th>Penerbit Buku</th>
			<th>Harga Buku</th>
		</tr>
	<?php while($tampil = mysql_fetch_array ($data))
		{?>
		<tr>
			<td><?php echo $tampil['kode_buku']; ?></td>
			<td><?php echo $tampil['judul_buku']; ?></td>
			<td><?php echo $tampil['pengarang_buku']; ?></td>
			<td><?php echo $tampil['penerbit_buku']; ?></td>
			<td><?php echo $tampil['harga_buku']; ?></td>
		<?php }
		echo "</table>";
	} 
	else{ echo "<font color='red'>Data yang dicari tidak ada dalam database</font>"; }
	}
?>
