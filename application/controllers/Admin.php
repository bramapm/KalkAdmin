<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$isi['content'] 	= 'Admin/content_home';
		$isi['judul'] 		= 'Home';
		$this->load->view('base',$isi);
	}

	public function Kalori()
	{
		$isi['content'] 	= 'Admin/content_kalori';
		$isi['judul'] 		= 'Data Kalori';
		$this->load->view('base',$isi);
	}

	public function Olahraga()
	{
		$isi['content'] 	= 'Admin/content_olahraga';
		$isi['judul'] 		= 'Data Olahraga';
		$this->load->view('base',$isi);
	}
}
