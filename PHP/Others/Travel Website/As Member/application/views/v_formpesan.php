<h2 align="center">Form Pemesanan Tiket</h2>
<form id="form" method="post"action="<?php echo site_url();?>/c_pesantiket/savepesan">
		ID Jadwal</br>
		<input type="text" value="<?php echo $id; ?>" name="id"></label>
		
		Nama Pemesan</br>
		<input type="text" name="nama">
		
		Tanggal</br>
		<input type="date" name="tanggal">
		
		Jumlah Tiket</br>
		<input type="text" name="jumlah">
		</br>
		</br>
		<input type="submit" value="Submit">
</form>
<div class="clear"></div>