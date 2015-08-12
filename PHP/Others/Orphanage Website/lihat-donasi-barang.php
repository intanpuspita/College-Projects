<HTML>
<BODY>
<h2 align="center">Data Sumbangan Barang</h2>
<?php
	include "connect.php";
?>
<table>
<form action="" method="post">
<tr>
	<td style="font-size:20px;">Kata kunci</td><td style="font-size:20px;">:</td><td><input type="text" name="txtkey" class="input"></td>
	<td><input type="submit" value="Cari" name="btncari" class="button"></td>
</tr>
</form>
<br><br>
</table>
<?php if(!isset($_POST['btncari'])){?><br><br>
<TABLE class="data" width="100%"> 
	<tr class="kolom">
	<th>No</th>
	<th>ID Sumbangan</th>
	<th>Nama Donatur</th><!--<td>Jenis Kelamin</td><td>Alamat</td><td>Telepon</td><td>Email</td><td>Pekerjaan</td>--><th>Nama Barang</th>
	<th>Jumlah Barang</th>
	<th>Sumbangan ke</th>
	<th>Tanggal Kirim</th>
	<th colspan="3"></th>
	</tr>
<?php
	$querysumbangbarang=mysql_query("select * from sumbangan_barang");
	$no=0;
	$c=1;
	while($tampil =mysql_fetch_array($querysumbangbarang))
	{$no++;
	if($c % 2 == 0){
?>	
	<tr bgcolor="#0099FF" >
	<td class="kolom"><? echo $no;?></td>
	<td class="kolom"><?php echo $tampil['id_sumbangbarang']." ";?></td>
	<td class="kolom"><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td class="kolom"><?php echo $tampil['nama_barang']." ";?></td>
	<td class="kolom"><?php echo $tampil['jumlah_barang']." ";?></td>
	<td class="kolom"><?php echo $tampil['barang_ke']." ";?></td>
	<td class="kolom"><?php echo $tampil['tgl_barang']." ";?></td>	
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"detail-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/detail.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"edit-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/edit.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"delete-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/delete.png"></a></td>
	
	</tr>
	<?php } else {?>
	<tr>
	<td><? echo $no;?></td>
	<td><?php echo $tampil['id_sumbangbarang']." ";?></td>
	<td><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td><?php echo $tampil['nama_barang']." ";?></td>
	<td><?php echo $tampil['jumlah_barang']." ";?></td>
	<td><?php echo $tampil['barang_ke']." ";?></td>
	<td><?php echo $tampil['tgl_barang']." ";?></td>	
	<td><a href="index-admin.php?menu=<?php echo"detail-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/detail.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"edit-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/edit.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"delete-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/delete.png"></a></td>
	
	</tr>
	<?}?>
	<?php
	 $c++;}
	?>
</TABLE>
<?php } else
			{ $key=$_POST['txtkey'];
			$sumbangbarang=mysql_query("select * from sumbangan_barang where nama_donatur LIKE '%$key%' or jk_donatur LIKE '%$key%' or alamat_donatur LIKE '%$key%' or telepon_donatur LIKE '%$key%' or email_donatur LIKE '%$key%' or pekerjaan_donatur LIKE '%$key%' or nama_barang LIKE '%$key%' or jumlah_barang LIKE '%$key%' or barang_ke LIKE '%$key%' or tgl_barang LIKE '%$key%'");
			if(mysql_num_rows($sumbangbarang)>0){?>
	<TABLE width="100%" class="data"> 
	<tr class="kolom">
	<th>No</th>
	<th>ID Sumbangan</th>
	<th>Nama Donatur</th><!--<td>Jenis Kelamin</td><td>Alamat</td><td>Telepon</td><td>Email</td><td>Pekerjaan</td>--><th>Nama Barang</th>
	<th>Jumlah Barang</th>
	<th>Sumbangan ke</th>
	<th>Tanggal Kirim</th>
	<th colspan="3"></th>
	</tr>
<?php
	
	$no=0;
	$c=1;
	while($tampil =mysql_fetch_array($sumbangbarang))
	{$no++;
	if($c % 2 == 0){
?>	
	<tr bgcolor="#0099FF" >
	<td class="kolom"><? echo $no;?></td>
	<td class="kolom"><?php echo $tampil['id_sumbangbarang']." ";?></td>
	<td class="kolom"><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td class="kolom"><?php echo $tampil['nama_barang']." ";?></td>
	<td class="kolom"><?php echo $tampil['jumlah_barang']." ";?></td>
	<td class="kolom"><?php echo $tampil['barang_ke']." ";?></td>
	<td class="kolom"><?php echo $tampil['tgl_barang']." ";?></td>	
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"detail-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/detail.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"edit-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/edit.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"delete-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/delete.png"></a></td>
	
	</tr>
	<?php } else {?>
	<tr>
	<td><? echo $no;?></td>
	<td><?php echo $tampil['id_sumbangbarang']." ";?></td>
	<td><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td><?php echo $tampil['nama_barang']." ";?></td>
	<td><?php echo $tampil['jumlah_barang']." ";?></td>
	<td><?php echo $tampil['barang_ke']." ";?></td>
	<td><?php echo $tampil['tgl_barang']." ";?></td>	
	<td><a href="index-admin.php?menu=<?php echo"detail-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/detail.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"edit-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/edit.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"delete-barang";?>&id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>"><img src="images/delete.png"></a></td>
	
	</tr>
	<?}?>
	<?php
	 $c++;}
	?>
</TABLE>
<?php } else{ echo "Data Donasi Barang dengan keyword <strong>'$key'</strong> tidak tersedia";} }?>
</BODY>
</HTML>
