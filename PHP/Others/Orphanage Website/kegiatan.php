<?php include 'connect.php';?>
<html>
	<body>
		<h2>Kegiatan</h2>
		<?php 
		$dataPerPage = 5;

		// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
		// sedangkan apabila belum, nomor halamannya 1.
		if(isset($_GET['page']))
		{
			$noPage = $_GET['page'];
		}
		else $noPage = 1;

		// perhitungan offset
		$offset = ($noPage - 1) * $dataPerPage;

		// query SQL untuk menampilkan data perhalaman sesuai offset
		$result = mysql_query("SELECT * FROM kegiatan LIMIT $offset, $dataPerPage") or die('Error');
	
		while($datakegiatan=mysql_fetch_array($result)){?>
			<h1><?php echo $datakegiatan['nama_kegiatan'];?></h1></br></br>
			<p><?php echo $datakegiatan['tgl_kegiatan'];?></p></br>
			<p><?php echo substr($datakegiatan['deskripsi_kegiatan'],0,250)."...";?></p>
			</br>
			<a href="index.php?menu=<?php echo "detail-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan']?>">Baca Selanjutnya</a></br></br>
		<?php } 
		
		// mencari jumlah semua data dalam tabel barang

		$query   = "SELECT COUNT(*) AS jumData FROM kegiatan";
		$hasil  = mysql_query($query);
		$data     = mysql_fetch_array($hasil);

		$jumData = $data['jumData'];

		// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
		$jumPage = ceil($jumData/$dataPerPage);

		// menampilkan link first
		echo "<a href='index.php?menu=kegiatan&page=1'>&lt;&lt; First</a>";

		// menampilkan link previous
		if ($noPage > 1) echo  "<a href='index.php?menu=kegiatan&page=".($noPage-1)."'>&lt; Prev </a>";

		// memunculkan nomor halaman dan linknya
		for($page = 1; $page <= $jumPage; $page++)
		{
			if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
			{
				/*if (($showPage == 1) && ($page != 2))  echo "...";
				if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";*/
				if ($page == $noPage) echo " <b>".$page." | </b> ";
				else echo " <a href='index.php?menu=kegiatan&page=".$page."'>".$page." | </a> ";
				$showPage = $page;
         }
}

		// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='index.php?menu=2?page=".($noPage+1)."'>Next &gt;</a>";

		// menampilkan link last
		echo  "<a href='index.php?menu=kegiatan&page=".($jumPage)."'>Last &gt;&gt;</a>";
		?>
	</body>
</html>