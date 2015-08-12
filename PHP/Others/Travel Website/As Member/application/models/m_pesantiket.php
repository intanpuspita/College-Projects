<?php
	class m_pesantiket extends CI_Model{
		function savedata(){
			$id = $this->input->post('id');
			//echo $id;
			$nama = $this->input->post('nama');
			$jumlah = $this->input->post('jumlah');
			$tanggal = $this->input->post('tanggal');
			$query=$this->db->query("insert into pemesanan_tiket(id_pemesanan, id_jadwal, nama_pemesan, jumlah_tiket, total_harga, status_konfirmasi, status_validasi, tanggal) values('', '$id', '$nama', '$jumlah', '', 'Belum dikonfirmasi', 'Belum diterima', '$tanggal')");
			return $query;
		}
	}
?>