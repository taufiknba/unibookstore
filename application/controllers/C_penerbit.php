<?php 

class C_penerbit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_penerbit');
	}

	function index()
	{
		$data['tb_penerbit']=$this->M_penerbit->tampil_data();
			
		$this->load->view('V_penerbit',$data);

		
	}
	


	


	


}

?>