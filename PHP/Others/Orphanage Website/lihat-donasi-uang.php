<HTML>
<BODY>
<h2 align="center">Data Sumbangan Uang</h2>
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
</table>
<?php if(!isset($_POST['btncari'])){?><br><br>
<TABLE width="100%" class="data"> 
	<tr class="kolom">
	<th>No</th>
	<th>ID Sumbangan</th>
	<th>Nama Donatur</th><!--<td>Jenis Kelamin</td><td>Alamat</td><td>Telepon</td><td>Email</td><td>Pekerjaan</td>--><th>Jumlah Donasi</th>
	<th>Sumbangan ke</th>
	<th>Tanggal Sumbang</th>
	<th colspan="3"></th>
	</tr>
	

<?php
	$querysumbanguang=mysql_query("select * from sumbangan_uang");
	$no=0;
	$c=1;
	while($tampil =mysql_fetch_array($querysumbanguang))
	{$no++;
	if($c % 2 == 0){
?>
<tr bgcolor="#0099FF" >
	<td class="kolom"><? echo $no;?></td>
	<td class="kolom"><?php echo $tampil['id_sumbanguang']." ";?></td>
	<td class="kolom"><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td class="kolom"><?php echo $tampil['jumlah_donasi']." ";?></td>
	<td class="kolom"><?php echo $tampil['donasi_ke']." ";?></td>
	<td class="kolom"><?php echo $tampil['tgl_donasi']." ";?></td>	
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"detail-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/detail.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"edit-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/edit.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"delete-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/delete.png"></a></td>
	
	</tr><?php }
	else{?>
	<tr>
	<td><? echo $no;?></td>
	<td><?php echo $tampil['id_sumbanguang']." ";?></td>
	<td><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td><?php echo $tampil['jumlah_donasi']." ";?></td>
	<td><?php echo $tampil['donasi_ke']." ";?></td>
	<td><?php echo $tampil['tgl_donasi']." ";?></td>	
	<td><a href="index-admin.php?menu=<?php echo"detail-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/detail.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"edit-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/edit.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"delete-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/delete.png"></a></td>
	
	</tr>
	<?php
	}
	}
	?>
</TABLE>
<?php } else
		{ $key=$_POST['txtkey'];
			$sumbanguang=mysql_query("select * from sumbangan_uang where nama_donatur LIKE '%$key%' or jk_donatur LIKE '%$key%' or alamat_donatur LIKE '%$key%' or telepon_donatur LIKE '%$key%' or email_donatur LIKE '%$key%' or pekerjaan_donatur LIKE '%$key%' or jumlah_donasi LIKE '%$key%' or donasi_ke LIKE '%$key%' or tgl_donasi LIKE '%$key%'");
			if(mysql_num_rows($sumbanguang)>0){?>
<TABLE border="2" width="100%"> 
	<tr class="kolom">
	<th>No</th>
	<th>ID Sumbangan</th>
	<th>Nama Donatur</th><!--<td>Jenis Kelamin</td><td>Alamat</td><td>Telepon</td><td>Email</td><td>Pekerjaan</td>--><th>Jumlah Donasi</th>
	<th>Sumbangan ke</th>
	<th>Tanggal Sumbang</th>
	<th colspan="3"></th>
	</tr>
	

<?php
	$no=0;
	$c=1;
	while($tampil =mysql_fetch_array($sumbanguang))
	{$no++;
	if($c % 2 == 0){
?>
	<tr bgcolor="#33CCFF">
	<td class="kolom"><? echo $no;?></td>
	<td class="kolom"><?php echo $tampil['id_sumbanguang']." ";?></td>
	<td class="kolom"><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td class="kolom"><?php echo $tampil['jumlah_donasi']." ";?></td>
	<td class="kolom"><?php echo $tampil['donasi_ke']." ";?></td>
	<td class="kolom"><?php echo $tampil['tgl_donasi']." ";?></td>	
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"detail-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/detail.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"edit-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/edit.png"></a></td>
	<td class="kolom"><a href="index-admin.php?menu=<?php echo"delete-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/delete.png"></a></td>
	
	</tr><?php }
	else{?>
	<tr>
	<td><? echo $no;?></td>
	<td><?php echo $tampil['id_sumbanguang']." ";?></td>
	<td><?php echo $tampil['nama_donatur']." ";?></td>
	<!--<td><?php /*if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}*/?></td>
	<td><?php //echo $tampil['alamat_donatur']." ";?></td>
	<td><?php //echo $tampil['telepon_donatur']." ";?></td>
	<td><?php //echo $tampil['email_donatur']." ";?></td>
	<td><?php //echo $tampil['pekerjaan_donatur']." ";?></td>-->
	<td><?php echo $tampil['jumlah_donasi']." ";?></td>
	<td><?php echo $tampil['donasi_ke']." ";?></td>
	<td><?php echo $tampil['tgl_donasi']." ";?></td>	
	<td><a href="index-admin.php?menu=<?php echo"detail-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/detail.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"edit-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/edit.png"></a></td>
	<td><a href="index-admin.php?menu=<?php echo"delete-uang";?>&id_sumbanguang=<?php echo $tampil['id_sumbanguang']?>"><img src="images/delete.png"></a></td>
	
	</tr>
	<?php
	}
	}
	?>
</TABLE>
<?} else{echo "Data Donasi Uang dengan Kata kunci <strong>'$key'</strong> tidak tersedia";} }?>
</BODY>
</HTML>
