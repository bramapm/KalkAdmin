<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$status = $this->session->userdata('status');
		if(!empty($status)){			
			redirect('Admin');
			}		
		$this->load->view('login_page');
	}

	public function prosesLogin(){
		$this->load->library('session');
		$post = $this->input->post();
		$this->session->set_userdata($post);		
		echo json_encode($post);
	}	

	public function prosesLogout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
