<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Users do not directly access the controller class */
/* index method in Profiles controller */
/* parameter of id=1 refers to the player user-type, and id=2 refers to the agent user-type */
class Profiles extends CI_Controller {
	public function index($page = 1)
	{
		$offset = ($page - 1) * 12;

		$this->db->order_by('id','desc');
		$this->db->limit('12', $offset);
		$users = $this->db->get_where('users', ["active"=>1, "type"=>1])->result();

		$countUsers = $this->db->get_where('users', ["active"=>1, "type"=>1])->num_rows();

		$id = $this->session->user->id;
		$agent = false;
		if ($this->session->user->type == 2) {
			$check = $this->db->get_where('agents_filters', ["userID"=>$id]);
			if ($check->num_rows() == 0) {
				$agent = false;
			} else {
				$agent = $check->row();
			}
		}
		//variable that takes an array of recommended players
		$rec = [];

		if ($agent) {
			$get = $this->db->query("select * from users where position = '$agent->position' and goals between $agent->goals - 3 and $agent->goals + 3 and games between $agent->games - 3 and $agent->games + 3" )->result();

			$rec = $get;
		}

		$data = [
			"title" => "WenaPlay | Profiles",
			"users" => $users,
			"page" => $page,
			"count" => $countUsers,
			"rec" => $rec
		];
        // initializing class
		$this->load->view('includes/nav', $data);
		$this->load->view('profiles');
		$this->load->view('includes/footer');
	}
	
}
/* End of file profiles.php */
/* Location: .application/controllers/Profiles.php */