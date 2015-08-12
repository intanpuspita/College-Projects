<HTML>
	<?php include 'connect.php';
	$info=mysql_query("SELECT * FROM info ");
	while($datainfo=mysql_fetch_array($info)){?>
	<body>
		<h2>Latar Belakang</h2>
		<div class="wrapper" align="justify">
			<figure class="left marg_right1"><img src="contents/panti.jpg" alt=""width="300" height="200"></figure>
			<p><?php echo $datainfo['latarbelakang']; ?></p>
		</div>
		<h2>Sejarah</h2>
		<div class="wrapper" align="justify">
			<p><?php echo $datainfo['sejarah']; ?></p>
		</div>
		<h2>Visi &amp; Misi</h2>
		<div class="wrapper" align="justify">
			<p><?php echo $datainfo['visi']; ?></p>
			<p><?php echo $datainfo['misi']; ?></p>
		</div>
	<?php } ?>
	</body>
</html>