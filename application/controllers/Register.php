<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index() {
		if (isset($_SESSION['user'])) redirect('profile');
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

		$id = $this->session->user->id;
		$check = $this->db->get_where('agents_filters', ["userID"=>$id]);
		if ($check->num_rows() == 0) {
			$agent = false;
		} else {
			$agent = $check->row();
		}


		$data = [
			"title" => "WenaPlay | Register",
			"agent" => $agent
		];
		$this->load->view('includes/nav', $data);
		$this->load->view('register-agent');
		$this->load->view('includes/footer');
	}

	function submitRegister() {

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$type = $this->input->post('type');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');

		$obj = new stdClass();
		$salt = hash("SHA256", uniqid());

		$checkEmail = $this->db->get_where('users', ["email"=>$email])->num_rows();
		if ($checkEmail > 0) {
			$obj->code = 400;
			$obj->message = "Email Address already exists";
			echo json_encode($obj);
			die;
		}

		if ($password != $cpassword) {
			$obj->code = 400;
			$obj->message = "Passwords doesn't match";
			echo json_encode($obj);
			die;
		}

		if (strlen($password) < 6) {
			$obj->code = 400;
			$obj->message = "Password must be at least 6 characters";
			echo json_encode($obj);
			die;
		}


		$password = hash("SHA512", $salt.$password);


		$data = [
			"firstName" => $fname,
			"lastName" => $lname,
			"email" => $email,
			"salt" => $salt,
			"password" => $password,
			"type" => $type,
			"date" => date("Y-m-d H:i:s")
		];

		$this->db->insert('users', $data);
		$id = $this->db->insert_id();

		$user = $this->db->get_where('users', ["id"=>$id])->row();

		$_SESSION['user'] = $user;

		$obj->code = 200;
		$obj->data = $user;
		echo json_encode($obj);

	}


	protected  function uploadImage($image) {
		$path = ROOTPATH."/assets/images";
		$config['upload_path']   = $path;
		$config['file_name']   = 'NOVA4_'.time().'_'.rand();
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size']      = 2048;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($image)) {
			$errorStrings = strip_tags($this->upload->display_errors());
			$error = array('error' => $errorStrings);
			return $error;
		} else {
			$data = array('data' => $this->upload->data());
			return $data;
		}
	}

	protected  function uploadVideo($image) {
		$path = ROOTPATH."/assets/images";
		$config['upload_path']   = $path;
		$config['file_name']   = 'NOVA4_'.time().'_'.rand();
		$config['allowed_types'] = 'mov|mp4|avi|mpg|vmw';
		$config['max_size']      = 100000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($image)) {
			$errorStrings = strip_tags($this->upload->display_errors());
			$error = array('error' => $errorStrings);
			return $error;
		} else {
			$data = array('data' => $this->upload->data());
			return $data;
		}
	}

	function updatePlayer() {
		$dob = $this->input->post('dob');
		$club = $this->input->post('club');
		$league = $this->input->post('league');
		$type = $this->input->post('type');
		$goals = $this->input->post('goals');
		$games = $this->input->post('games');
		$summary = $this->input->post('summary');

		$id = $this->session->user->id;

		$data = [
			"club" => $club,
			"league" => $league,
			"position" => $type,
			"goals" => $goals,
			"games" => $games,
			"summary" => $summary,
			"dob" => $dob,
		];

		$this->db->update('users', $data, ["id"=>$id]);
		if (isset($_FILES['image']) and $_FILES['image']['name']) {
			$image = $this->uploadImage('image');

			if (isset($image['data'])) {
				$data = [
					"photo" => $image['data']['file_name']
				];
				$this->db->update('users', $data, ["id"=>$id]);
			}
		}

		if (isset($_FILES['video']) and $_FILES['video']['name']) {
			$video = $this->uploadVideo('video');

			if (isset($video['data'])) {
				$data = [
					"video" => $video['data']['file_name']
				];
				$this->db->update('users', $data, ["id"=>$id]);
			}
		}


		$user = $this->db->get_where('users', ["id"=>$id])->row();

		$_SESSION['user'] = $user;

		$obj = new stdClass;
		$obj->code = 200;
		echo json_encode($obj);
	}


	function updateAgent() {
		$position = $this->input->post('position');
		$goals = $this->input->post('goals');
		$games = $this->input->post('games');
		$summary = $this->input->post('summary');
		$id = $this->session->user->id;

		$data = [
			"summary" => $summary
		];
		$this->db->update('users', $data, ["id"=>$id]);
		if (isset($_FILES['image']) and $_FILES['image']['name']) {
			$image = $this->uploadImage('image');

			if (isset($image['data'])) {
				$data = [
					"photo" => $image['data']['file_name']
				];
				$this->db->update('users', $data, ["id"=>$id]);
			}
		}



		$check = $this->db->get_where('agents_filters', ["userID"=>$id]);
		if ($check->num_rows() == 0) {
			$data = [
				"goals" => $goals,
				"games" => $games,
				"position" => $position,
				"userID" => $id
			];
			$this->db->insert('agents_filters', $data);
		} else {
			$data = [
				"goals" => $goals,
				"games" => $games,
				"position" => $position,
			];
			$this->db->update('agents_filters', $data);
		}

		$user = $this->db->get_where('users', ["id"=>$id])->row();

		$_SESSION['user'] = $user;

		$obj = new stdClass;
		$obj->code = 200;
		echo json_encode($obj);

	}
	
}
