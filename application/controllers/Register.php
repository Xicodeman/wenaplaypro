<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index() {
		$data = [
			"title" => "WenaPlay | Register"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('register');
		$this->load->view('includes/footer');
	}

	public function player() {
		$data = [
			"title" => "WenaPlay | Register"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('register-player');
		$this->load->view('includes/footer');
	}

	public function agent() {
		$data = [
			"title" => "WenaPlay | Register"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('register-agent');
		$this->load->view('includes/footer');
	}

	
}
