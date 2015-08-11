<html>
<head>
	<style>
		body{
			background : pink;
		}

		#wrapper{
			width :  800px;
			background : white;
			margin : 0 auto;
			height : auto;
			min-height : 600px;
		}

		#outter{
			margin-top : 10px ;
			margin-left : 0px;
			margin-right : 0px;
		}
	</style>
</head>
<body>
	<div id="wrapper">
	<div id="outter">
	<table width="800" align="center">
		<tr>
			<td><font color="#666666"><h1 align="center">News</h1></font></td>
		</tr>
		<?php $i = 1;
		foreach($results as $data) {?>
			<tr>
			<td>
				<table <?php if($i % 2 == 1 ){ echo "bgcolor='#CCCCCC'";} ?>>
					<tr><td><font color="#666666"><h3><?php echo $data->judul_berita;?></h3></font></td></tr>
					<tr><td>Sumber : <?php echo $data->sumber_berita;?></td></tr>
					<tr><td><?php echo substr($data->isi_berita,0,500). "..."; ?></td></tr>
				</table>
			</td>
			</tr>
		<?php $i++; } ?>
		<tr>
			<td align="center"><?php echo $links; ?></td>
		</tr>
	</table>
	</div>
	</div>
</body>
</html>