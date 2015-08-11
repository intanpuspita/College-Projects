<html>
	<body>
		<table border="1" height="300px" width="500px" align="center" valign="center">
		<tr>
			<td valign="top" align="center">
				</br></br>
				<?php echo anchor('upload/upload_file/', 'Upload');?>
				</br></br>
				<table border="1">
					<tr>
						<th>ID Tugas</th>
						<th>Nama Tugas</th>
						<th>Nama File</th>
					</tr>
					<?php foreach($list_data->result()as $row){ ?>
					<tr>
						<td><?php echo $row->id_tugas; ?></td>
						<td><?php echo $row->nama_tugas; ?></td>
						<td><?php echo anchor('upload/download_file/'.$row->id_tugas, $row->nama_file); ?></td>
					</tr>
					<?php } ?>
				</table>
			</td>
		</tr>
		</table>
	</body>
</html>