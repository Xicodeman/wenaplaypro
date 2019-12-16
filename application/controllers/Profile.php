<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index() {
		if ($this->session->user->type == 1) {
			redirect('profile/player');
		} else if ($this->session->user->type == 2) {
			redirect('profile/agent');
		}
	}

	public function player($id = 0) {

		if (!$this->session->user->summary) redirect('register/player');

		$user = false;

		if ($id != 0) {
			$r = $this->db->get_where('users', ["active"=>1, "type"=>1, "id"=>$id]);
			if ($r->num_rows() == 0) redirect('profile');

			$user = $r->row();
		}


		if (!$user) {
			$user = $this->session->user;
		}
		$data = [
			"title" => "WenaPlay | $user->firstName $user->lastName's Profile",
			"user" => $user
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('profile-player');
		$this->load->view('includes/footer');
	}

	public function agent() {
		if (!$this->session->user->summary) redirect('register/agent');
		$data = [
			"title" => "WenaPlay | Profile"
            
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('profile-agent');
		$this->load->view('includes/footer');
	}

	
}
