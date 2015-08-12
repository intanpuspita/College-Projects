<h2>Data Pemesanan Tiket</h2></br>
<table border="1" width="100%">
	<tr>
		<th>ID Pemesanan</th>
		<th>ID Jadwal</th>
		<th>Nama Pemesan</th>
		<th>Jumlah Tiket</th>
		<th>Total Harga</th>
		<th>Tanggal</th>
		<th>Status Konfirmasi</th>
		<th>Status Validasi</th>
	</tr>
	<?php foreach($list_data->result()as $row){ ?>
	<tr>
		<td align="center"><?php echo $row->id_pemesanan; ?></td>
		<td align="center"><?php echo $row->id_jadwal; ?></td>
		<td align="center"><?php echo $row->nama_pemesan; ?></td>
		<td align="center"><?php echo $row->jumlah_tiket; ?></td>
		<td align="center"><?php echo $row->total_harga; ?></td>
		<td align="center"><?php echo $row->tanggal; ?></td>
		<td align="center"><?php echo $row->status_konfirmasi; ?></td>
		<td align="center"><?php echo $row->status_validasi; ?></td>
		<td align="center"><?php if($row->status_validasi == "Belum diterima"){ echo anchor('c_pemesanan/validasi/'.$row->id_pemesanan, 'Validasi Pembayaran'); }?></td>
	</tr>
	<?php } ?>
</table>