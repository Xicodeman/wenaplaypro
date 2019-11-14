<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function terms() {
		$data = [
			"title" => "WenaPlay | Terms and Conditions"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('terms');
		$this->load->view('includes/footer');
	}

	public function about() {
		$data = [
			"title" => "WenaPlay | About Us"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('about');
		$this->load->view('includes/footer');
	}

	
		
	
}
