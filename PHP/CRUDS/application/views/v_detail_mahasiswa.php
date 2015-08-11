<html>
	<body>
		<table>
			<?php foreach($row_data->result()as $data){ ?>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><?php echo $data->nim; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $data->nama; ?></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><?php echo $data->umur .' tahun'; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>