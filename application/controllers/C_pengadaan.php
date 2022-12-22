<?php 

class C_pengadaan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengadaan');
	}

	// function index()
	// {
	// 	$data['tb_buku']=$this->M_pengadaan->tampil_data();
	// 	$this->load->view('V_pengadaan',$data);
	// }

	function index()
	{
	    $data['hasil']=$this->M_pengadaan->tampil_data();
		$this->load->view('V_pengadaan',$data);
	}


}

?>