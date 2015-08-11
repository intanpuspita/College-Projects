<html>
	<body>
		<?php echo anchor('c_form/inserttext/', 'Insert');?>
		<table width="100%" border="1">
			<tr>
				<th>ID</th>
				<th>Teks</th>
			</tr>
			<?php foreach($list_data->result()as $row){ ?>
			<tr>
				<td><?php echo $row->teks_id; ?></td>
				<td><?php echo $row->teks_mhs; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>