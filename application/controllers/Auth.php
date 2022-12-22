<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';	
		
				$this->load->view('Auth_header', $data);
				$this->load->view('Login_view');
				$this->load->view('Auth_footer');	
		
		}


		
	}
	
	public function registration()
	{
		$this->load->view('Auth_header');
		$this->load->view('Registration_view');
		$this->load->view('Auth_footer');	
	}
}
