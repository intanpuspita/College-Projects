<html>
<head>
</head>
<body>
	<section id="contents">
	<div id="wrapper">
	<div id="outter">
	<table width="800" align="center">
		<?php foreach($results->result()as $data){ ?>
		<tr>
			<td colspan="2"><h2><?php echo $data->judul_berita;?></h2></td>
		</tr>
		<tr>
			<td valign="top"><img src="<?php echo base_url(); echo '/'. $data->gambar_berita;?>" width="400" height="300"></td>
			<td>
				<table width="100%">
					<tr>
						<td align="justify"><?php echo $data->isi_berita;?></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
	</div>
	</section>
</body>
</html>