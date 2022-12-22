<?php 

class M_penerbit extends CI_Model
{
	function tampil_data()
	{
		$hasil=$this->db->get('tb_penerbit');

		return $hasil;
	}


	function get_data_id($id_penerbit)
	{
		$query=$this->db->get_where('tb_penerbit',
		array('id_penerbit'=>$id_penerbit));

		return $query;
	}


	function get_tampil_data()
	{
		$hasil=$this->db->get('tb_penerbit')->result();
		return $hasil;
	}

	

	
 	

	
	

}

?>