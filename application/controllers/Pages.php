<?php
/* Ensures that users do not direcly access the controller class */
defined('BASEPATH') OR exit('No direct script access allowed');
/* The class pages extends the CI_Controller class */
class Pages extends CI_Controller {
/* Function that maps to terms.php */
	public function terms() {
		$data = [
			"title" => "WenaPlay | Terms and Conditions"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('terms');
		$this->load->view('includes/footer');
	}
/* Function that maps to about.php */
	public function about() {
		$data = [
			"title" => "WenaPlay | About Us"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('about');
		$this->load->view('includes/footer');
	}

	
		
	
}
