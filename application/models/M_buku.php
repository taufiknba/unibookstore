<?php 

class M_buku extends CI_Model
{
	function tampil_data()
	{
		$hasil=$this->db->get('tb_buku');

		return $hasil;
	}

	function simpan_data($id_buku,$kategori_buku,$nama_buku,$harga_buku,$stok_buku,$penerbit_buku)
	{
		$data= array(
				'id_buku'=>$id_buku,
				'kategori_buku'=>$kategori_buku,
				'nama_buku'=>$nama_buku,
				'harga_buku'=>$harga_buku,
				'stok_buku'=>$stok_buku,
				'penerbit_buku'=>$penerbit_buku);
				$this->db->insert('tb_buku',$data);
	}
	
	function hapus_data($id_buku)
	{
		$this->db->where('id_buku',$id_buku);
		$this->db->delete('tb_buku');
	}

	function get_data_id($id_buku)
	{
		$query=$this->db->get_where('tb_buku',
		array('id_buku'=>$id_buku));

		return $query;
	}

	function update($id_buku,$kategori_buku,$nama_buku,$harga_buku,$stok_buku,$penerbit_buku)
	{
		$data = array(
			'id_buku'=>$id_buku,
			'kategori_buku'=>$kategori_buku,
			'nama_buku'=>$nama_buku,
			'harga_buku'=>$harga_buku,
			'stok_buku'=>$stok_buku,
			'penerbit_buku'=>$penerbit_buku);

			$this->db->where('id_buku',$id_buku);
			$this->db->update('tb_buku',$data);
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


	
	
	

}

?>