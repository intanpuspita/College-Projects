<?php
	if(!isset($_POST['kelas']) and !isset($_POST['minggu_kul'])){
		echo "<script>alert('Keyword belum terisi'); history.go(-1)</script>";
	}
	else
	{
		
		$kd_kelas=$_POST['kelas'];
		$mingguke=$_POST['minggu_kul']; 
		include('connect.php');
		$data1=mysql_query("select * from mhs where kd_kelas='$kd_kelas'");
		//$data12=mysql_fetch_array($data1);
		$data=mysql_query("select mhs.nim, nama_mhs ,minggu_ke from mhs, kehadiran_mhs,perkuliahan where kehadiran_mhs.nim = mhs.nim and kehadiran_mhs.kd_perkuliahan = perkuliahan.kd_perkuliahan and minggu_ke = '$mingguke'");?>

		<?php $kuliah=mysql_query("select * from perkuliahan where minggu_ke='$mingguke'");?>
		<table width="100%" align="right">
			<tr>
				<td width='120'><a href="report_absen.php?kelas=<?php echo $kd_kelas;?>&minggu=<?php echo $mingguke;?>"><img src='images/print.jpg'/>Cetak Laporan</a></td>
			</tr>
		</table>
		</form>
		<?php 
			if(mysql_num_rows($data1) > 0)
			{?> 
				</br>
					<table border="0" align="left" width="70%">
						<tr>
							<td width="16%"><b>Absensi Minggu Ke <?php echo $mingguke;?></b></td>
						</tr>
					</table>
					<table width="100%" border="1" align="center">
						<tr bgcolor="#0094FF">
							<th>NIM</th>
							<th>NAMA</th>
							<th>Sakit</th>
							<th>Izin</th>
							<th>Alpa</th>
						</tr>
						<?php while($tampil = mysql_fetch_array ($data1))
						{
							$sakit=mysql_query("select count(keterangan) as skt from kehadiran_mhs where kehadiran_mhs.nim = '$tampil[nim]' and keterangan = 'sakit'");
							$record1 = mysql_fetch_array($sakit);
							$ijin=mysql_query("select count(keterangan) as ijn from kehadiran_mhs where kehadiran_mhs.nim = '$tampil[nim]' and keterangan = 'izin'");
							$record2 = mysql_fetch_array($ijin);
							$alpha=mysql_query("select count(keterangan) as alp from kehadiran_mhs where kehadiran_mhs.nim = '$tampil[nim]' and keterangan = 'alpa'");
							$record3 = mysql_fetch_array($alpha);?>
							<tr>
							<td><?php echo $tampil['nim'];?></td>
							<td><?php echo $tampil['nama_mhs'];?></td>
							<td><?php echo $record1['skt'];?></td>
							<td><?php echo $record2['ijn'];?></td>
							<td><?php echo $record3['alp'];?></td>
							</tr>
						<?php } ?>
					</table>
			<?php }
			else { echo "Data yang dicari tidak ada dalam database. <a href='index.php?menu=6'>Lihat data perkuliahan</a>"; }
	}?>