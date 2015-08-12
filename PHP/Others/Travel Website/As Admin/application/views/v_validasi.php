<h2 align="center">Validasi Pemesanan</h2></br>
<?php foreach($list_data->result()as $row){ ?>
	<strong>ID Pemesanan : <?php echo $row->id_pemesanan; ?></strong></br>
	<strong>ID Jadwal : <?php echo $row->id_jadwal; ?></strong></br>
	<strong>Nama Pemesan : <?php echo $row->nama_pemesan; ?></strong></br>
	<strong>Jumlah Tiket : <?php echo $row->jumlah_tiket; ?></strong></br>
	<strong>Total Harga : <?php echo $row->total_harga; ?></strong></br>
	<strong>Tanggal : <?php echo $row->tanggal; ?></strong></br>
	<strong>Status konfirmasi : <?php echo $row->status_konfirmasi; ?></strong></br>
	<strong>Status validasi : </strong> 
	<form id="form" method="post" action="<?php echo site_url();?>/c_pemesanan/save_validasi/<?php echo $row->id_pemesanan;?>">
	<select name="valid">
		<option value="Belum diterima">Belum diterima</option>
		<option value="Sudah diterima">Sudah diterima</option>
	</select>
	<input type="submit" value="Submit">
	</form>
<?php } ?>