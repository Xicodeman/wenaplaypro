<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    /**
    * Index Page for this controller. 
    * This controller is set as the default controller in 
    * config/routes.php , so it will be displayed at localhost/wenaplay/index.php
    */
	public function index()
	{
		if (isset($_SESSION['user'])) redirect('profile');
        // data array represents the values we want to pass into the view
        // Create a variable called 'title' inside the data array
		$data = [
			"title" => "WenaPlay | Signin"
		];
        // load view file in controller, and then pass the data to the browser
        // load and append the view files   
		$this->load->view('includes/nav', $data);
		$this->load->view('home');
		$this->load->view('includes/footer');
	}

	public function logout() {
		unset($_SESSION['user']);
		redirect('home');
	}

	public function signin() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$obj = new stdClass;

		$checkEmail = $this->db->get_where('users', ["email"=>$email]);
		if ($checkEmail->num_rows() == 0) {
			$obj->code = 400;
			$obj->message = "Email or Password is incorrect";
			echo json_encode($obj);
			die;
		}

		$user = $checkEmail->row();

		$salt = $user->salt;
		$password = hash("SHA512", $salt.$password);
		if ($password != $user->password) {
			$obj->code = 400;
			$obj->message = "Email or Password is incorrect";
			echo json_encode($obj);
			die;
		}

		$_SESSION['user'] = $user;

		$obj->code = 200;
		$obj->data = $user;
		echo json_encode($obj);

	}
}
/* End of file home.php */
/* Location: ./application/controllers/Home.php */
?>
