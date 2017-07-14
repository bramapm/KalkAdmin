<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){				
		parent::__construct();
		$status = $this->session->userdata('status');
		if(empty($status)){			
			redirect('Login');
		}
	}

	public function index()
	{
		$isi['content'] 	= 'Admin/content_home';
		$isi['judul'] 		= 'Home';
		$this->load->view('base',$isi);
	}

	public function Kalori()
	{
		$isi['content'] 	= 'Admin/content_kalori';
		$isi['judul'] 		= 'Data Makanan';
		$this->load->view('base',$isi);
	}

	public function Olahraga()
	{
		$isi['content'] 	= 'Admin/content_olahraga';
		$isi['judul'] 		= 'Data Olahraga';
		$this->load->view('base',$isi);
	}
}
