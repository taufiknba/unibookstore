<?php 

class M_list_buku extends CI_Model
{
	function tampil_data()
	{
		$hasil=$this->db->get('tb_buku');

		return $hasil;
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

	function get_data_buku_bykode($kode)
	{
		$hsl=$this->db->query("SELECT * FROM tb_buku where
			id_buku='$id_buku'");
		
		if($hsl->num_rows()>0)
		{
			foreach ($hsl->result() as $data)
			{
				$hasil=array(
				'id_buku'=>$id_buku,
				'kategori_buku'=>$kategori_buku,
				'nama_buku'=>$nama_buku,
				'harga_buku'=>$harga_buku,
				'stok_buku'=>$stok_buku,
				'penerbit_buku'=>$penerbit_buku
			);
			}
		}

		return $hasil;

	}

	//tambah pencarian
	function caridatabarang()
	{
		$keyword=$this->input->post('keyword',true);
		$this->db->like('nama_buku' ,$keyword);

		return $this->db->get('tb_buku')->result_array();
	}
 	

	
	

}

?>