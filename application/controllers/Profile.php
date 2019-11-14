<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function player() {
		$data = [
			"title" => "WenaPlay | Profile"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('profile-player');
		$this->load->view('includes/footer');
	}

	public function agent() {
		$data = [
			"title" => "WenaPlay | Profile"
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('profile-agent');
		$this->load->view('includes/footer');
	}

	
}
