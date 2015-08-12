<h2>Data Jadwal Keberangkatan Bus</h2></br>
<table border="1" width="70%">
	<tr>
		<th>ID Jadwal</th>
		<th>Hari</th>
		<th>Jam Awal</th>
		<th>Jam Akhir</th>
		<th>Tempat Asal</th>
		<th>Tempat Tujuan</th>
		<th>Harga Tiket</th>
	</tr>
	<?php foreach($list_data->result()as $row){ ?>
	<tr>
		<td align="center"><?php echo $row->id_jadwal; ?></td>
		<td align="center"><?php echo $row->hari; ?></td>
		<td align="center"><?php echo $row->jam_awal; ?></td>
		<td align="center"><?php echo $row->jam_akhir; ?></td>
		<td align="center"><?php echo $row->tempat_asal; ?></td>
		<td align="center"><?php echo $row->tempat_tujuan; ?></td>
		<td align="center"><?php echo $row->harga; ?></td>
	</tr>
	<?php } ?>
</table>