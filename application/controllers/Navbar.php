<?php

defined('BASEPATH') OR exit('No direct script
	access allowed');

class Navbar extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Navbar_view');
	}
}

?>