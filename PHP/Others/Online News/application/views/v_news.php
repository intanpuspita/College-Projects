<html>
<head>

</head>
<body>
	<section id="contents">
	<div id="wrapper">
	<div id="outter">
	<table align="center">
		<?php $i = 1;
		foreach($results as $data) {?>
		<tr>
		<td>
			<table <?php if($i % 2 == 0 ){ echo "bgcolor='#DCD3CA'";}
			else{ echo "bgcolor='#E4DDD7'"; } ?>>
				<tr>
					<td width="250"><img align="center" src="<?php echo $data->gambar_berita;?>" width="200" height="150"></td>
					<td>
						<table width="100%">
							<tr><td><h2><?php echo $data->judul_berita;?></h2></td></tr></br>
							<tr><td>Sumber : <?php echo $data->sumber_berita;?></td></tr></br>
							<tr><td align="justify"><?php echo substr($data->isi_berita,0,800). "..."; ?></td></tr>
							<tr><td><?php echo anchor('c_news/detail_news/'.$data->id_berita, 'Baca Selengkapnya>>'); ?></br></td></tr>
						</table>
					</td>
				</tr>
			</table></br></br>
		</td>
		</tr>
		<?php $i++; } ?>
		<tr>
			<td align="center"><?php echo $links; ?></td>
		</tr>
	</table>
	</div>
	</div>
	</section>
</body>
</html>