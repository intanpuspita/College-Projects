<html>
	<body>
		<table border="1">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Umur</th>
				<th colspan="3"></th>
			</tr>
			<?php foreach($row_data->result()as $row){ ?>
			<tr>
				<td><?php echo $row->nim; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->umur; ?></td>
				<td><?php echo anchor('c_mahasiswa/viewdetail/'.$row->nim, 'View Detail'); ?></td>
				<td><?php echo anchor('c_mahasiswa/delete/'.$row->nim, 'Delete'); ?></td>
				<td><?php echo anchor('c_mahasiswa/update/'.$row->nim, 'Update'); ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>