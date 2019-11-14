<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller {
	public function index()
	{
		$data = [
			"title" => "WenaPlay | Profiles"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('profiles');
		$this->load->view('includes/footer');
	}
	
}
