<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("tb_buku");
		if($query != '')
		{
			$this->db->like('id_buku', $query);
			$this->db->or_like('kategori_buku', $query);
			$this->db->or_like('nama_buku', $query);
			$this->db->or_like('harga_buku', $query);
			$this->db->like('stok_buku', $query);
			$this->db->like('penerbit_buku', $query);
		}
		$this->db->order_by('id_buku', 'ASC');
		return $this->db->get();
	}
}
?>