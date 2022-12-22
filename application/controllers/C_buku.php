<?php 

class C_buku extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_buku');
	}

	function index()
	{
		$data['tb_buku']=$this->M_buku->tampil_data();
		$this->load->view('V_buku',$data);


	}



	function simpan()
	{
		$id_buku=$this->input->post('id_buku');
		$kategori_buku=$this->input->post('kategori_buku');
		$nama_buku=$this->input->post('nama_buku');
		$harga_buku=$this->input->post('harga_buku');
		$stok_buku=$this->input->post('stok_buku');
		$penerbit_buku=$this->input->post('penerbit_buku');
		$this->M_buku->simpan_data($id_buku,$kategori_buku,$nama_buku,$harga_buku,$stok_buku,$penerbit_buku);
		redirect('C_buku');
	}


	function Delete_buku()
	{
		$id_buku=$this->uri->segment(3);
		$this->M_buku->hapus_data($id_buku);
		redirect('C_buku');
	}

		function Edit_buku($id_buku)
	{
		$this->db->where('id_buku',$id_buku);
		$result=$this->M_buku->get_data_id($id_buku);
		if($result->num_rows()>0)
		{
			$i=$result->row_array();
			$data=array(
				'id_buku'=>$i['id_buku'],
				'kategori_buku'=>$i['kategori_buku'],
				'nama_buku'=>$i['nama_buku'],
				'harga_buku'=>$i['harga_buku'],
				'stok_buku'=>$i['stok_buku'],
				'penerbit_buku'=>$i['penerbit_buku'],
			);
			$this->load->view('V_edit_buku',$data);
		}
		else
		{
			echo "Data Tidak Ditemukan.";
		}
	}

	function update()
	{
		$id_buku=$this->input->post('id_buku');
		$kategori_buku=$this->input->post('kategori_buku');
		$nama_buku=$this->input->post('nama_buku');
		$harga_buku=$this->input->post('harga_buku');
		$stok_buku=$this->input->post('stok_buku');
		$penerbit_buku=$this->input->post('penerbit_buku');

		$this->M_buku->update($id_buku,$kategori_buku,$nama_buku,$harga_buku,$stok_buku,$penerbit_buku);
		redirect('C_buku');
	}

	function Add_buku()
	{
		// $data['id_buku']=$this->M_buku->get_id_buku();
		$this->load->view('V_add_buku');
	}

	


}

?>