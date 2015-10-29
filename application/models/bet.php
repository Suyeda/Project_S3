<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Bet extends CI_Model {
		public function register_user($data) {
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha|min_length[2]|max_length[20]');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha|min_length[2]|max_length[20]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('nickname', 'Username', 'trim|required|alpha_numeric|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[8]|max_length[30]');
			$this->form_validation->set_rules('pass2', 'Password Confirmation', 'matches[pass1]');
			if($this->form_validation->run()) {

				$query = "INSERT INTO users(first_name, last_name, email, nickname, password, wins, gp, status, created_at) VALUES (?,?,?,?,?,?,?,?,?)";
				$values = array($data['first_name'],$data['last_name'],$data['email'],$data['nickname'],$data['pass1'], 0, 0, "normal", date('Y-m-d, H:i:s'));
				$user = $this->db->query($query, $values)->row_array();
				if($user) {
					// $this->session->set_userdata("currentUser", $user);
					$user = array(
                   'user_id' => $user['id'],
                   'user_email' => $user['email'],
                   'first_name' => $user['first_name'],
                   'last_name' => $user['last_name'],
                   'nickname' => $user['nickname'],
                   'wins' => $user['wins'],
                   'gamesplayed' => $user['gp'],
                   'status' => $user['status']
                   // 'is_logged_in' => true // Stephen wants to use this later
                );
                $this->session->set_userdata($user);
					redirect('/bets/dash');
				}
			} else {
				// $this->view_data["errors"] = validation_errors();
				// $this->load->view('log_reg');
				$errors = validation_errors();
				$this->load->view('log_reg', $errors);
			}
		}
		public function get_user_by_email($data) {
			$query = "SELECT * FROM users WHERE email = ?";
			$values = array($data['email']);
			$user = $this->db->query($query, $values)->row_array();

			if($user && $user['password'] == $data['password']) {
                $user = array(
                   'user_id' => $user['id'],
                   'user_email' => $user['email'],
                   'first_name' => $user['first_name'],
                   'last_name' => $user['last_name'],
                   'nickname' => $user['nickname'],
                   'wins' => $user['wins'],
                   'gamesplayed' => $user['gp'],
                   'status' => $user['status']
                );
                $this->session->set_userdata($user);
                return true;
            }else{
            	return false;
            }
		}
		public function find_all_users(){
			$query = "SELECT * from users";
			return $this->db->query($query)->result_array();
		}

		public function find_all_teams()
		{
			$query = "SELECT * FROM teams";
			return $this->db->query($query)->result_array();
		}
	}
?>