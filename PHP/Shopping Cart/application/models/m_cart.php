<?php
class M_cart extends CI_Model{
	function get_list_data(){
		$query = $this->db->query("SELECT * FROM tb_m_product");
		return $query;
	}
	
	function get_data($id)
	{
		$query = $this->db->query("SELECT * FROM tb_m_product WHERE product_id = '$id'");
		return $query->row();
	}
	/*function insertdata(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$query = $this->db->query("INSERT INTO student VALUES('$nim',30,'$nama','','','','')");
		return;
	}
	
	function hapus($nim){
		$query = $this->db->query("DELETE FROM student WHERE NIM = '$nim'");
		return;
	}
	
	function detail($nim){
		$query = $this->db->query("SELECT * FROM student WHERE NIM = '$nim'");
		return $query->row();
	}
	
	function update($nim){
		$name = $this->input->post('nama');
		$query = $this->db->query("UPDATE student SET NAME = '$name' WHERE NIM = '$nim'");
		return;
	}
	
	function search(){
		$key = $this->input->post('key');
		$query = $this->db->query("SELECT * FROM student WHERE NAME LIKE '%$key%' OR NIM LIKE '%$key%'");
		return $query;
	}*/
}
?>