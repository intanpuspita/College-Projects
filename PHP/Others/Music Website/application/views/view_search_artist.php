<html>
	<head>
    	<title>View List Artist</title>
    </head>
	<body>
		<h1>Search By Artist</h1>
		<table width="100%">
			<tr>
				<td colspan="3"><div class="head"></div></td>
			</tr>
		</table>
		<table width="98%" border="1">
			<tr height="50">
				<th colspan="2"><h4>Artist</h4></th>
			</tr>
            <tr>
            	<th align="center">Foto</th>
                <th align="center">Nama Artist</th>
            </tr>
			<?php $i=0;
			foreach($list_artist as $row)
			{
			echo "<tr ";
			if($i % 2 ==0){ echo "bgcolor='#fff'"; }
			echo ">";
			?>
            	<td><?php echo $row->foto_musisi; ?></td>
				<td><a href="<?php echo site_url();?>/c_login/list_lagu_musisi?kd_musisi=<?php echo $row->kd_musisi;?>"><?php echo $row->nama_musisi; ?></a></td>
			</tr>
			<?php $i++;} ?>
		</table>
	</body>
</html>