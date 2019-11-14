<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = [
			"title" => "WenaPlay | Signin"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('home');
		$this->load->view('includes/footer');
	}
	public function test()
	{
		
	}
}
