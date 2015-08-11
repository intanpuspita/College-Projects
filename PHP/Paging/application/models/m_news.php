<?php
	class m_news extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function news_count()
		{
			return $this->db->count_all("info_berita");
		}
		
		public function fetch_news($limit, $start) {
			$this->db->limit($limit, $start);
			$query = $this->db->get("info_berita");
 
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
			return false;
		}
	}
?>