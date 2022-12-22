<?php 

class M_pengadaan extends CI_Model
{

	

	function tampil_data() 
    {
        $this->db->order_by('stok_buku', 'ASC');
        return $this->db->from('tb_buku')
          ->get()
          ->result();
    }  


	function get_data_id($kode_buku)
	{
		$query=$this->db->get_where('tb_buku',
		array('id_buku'=>$id_buku));

		return $query;
	}


	function get_tampil_data()
	{
		$hasil=$this->db->get('tb_buku')->result();
		return $hasil;
	}

	

	
	

}

?>