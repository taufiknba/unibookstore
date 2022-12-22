<?php 

class C_list_buku extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_list_buku');
	}

	function index()
	{

		$data['tb_buku']=$this->M_list_buku->tampil_data();
		
		//tambah pencarian
		if ( $this->input->post('keyword')) {
			$data['tb_buku']=$this->M_list_buku->caridatabarang();
		}
		
			$this->load->view('V_list_buku',$data);
		
	}
	


}

?>