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

				$query = "INSERT INTO users(first_name, last_name, email, nickname, password, wins, gp, status, created_at, teams_id) VALUES (?,?,?,?,?,?,?,?,?,?)";
				$values = array($data['first_name'],$data['last_name'],$data['email'],$data['nickname'],$data['pass1'], 0, 0, "normal", date('Y-m-d, H:i:s'), $data['teams_id']);
				$this->db->query($query, $values);
				$query = "SELECT * FROM users WHERE email = ?";
				$values = array($data['email']);
				$user = $this->db->query($query, $values)->row_array();
				if($user) {
					$user = array(
	                   	'user_id' => $user['id'],
	                   	'user_email' => $user['email'],
	                   	'first_name' => $user['first_name'],
	                   	'last_name' => $user['last_name'],
	                   	'nickname' => $user['nickname'],
	                   	'wins' => $user['wins'],
	                   	'gamesplayed' => $user['gp'],
	                   	'status' => $user['status'],
	                   	'team_id' => $user['teams_id']
                   	// 'is_logged_in' => true // Stephen wants to use this later
                );
                $this->session->set_userdata($user);
				return true;
			// 	}
			} else {
				return false;
			}
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
                   'status' => $user['status'],
                   'team_id' => $user['teams_id']
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
			$query = "SELECT * FROM teams ORDER BY teams.rank ASC";
			return $this->db->query($query)->result_array();
		}		
		public function grab_team_info($team_id){
			$query = "SELECT * FROM teams WHERE id = ?";
			$values = ($team_id);
			return $this->db->query($query, $values)->row_array();
		}
		public function grab_team_roster($team_id){
			$query = "SELECT * FROM teams LEFT JOIN users on users.teams_id = teams.id WHERE teams_id = ?";
			$values = ($team_id);
			return $this->db->query($query, $values)->result_array();
		}
		public function update_bet($wager, $enemy_id){
			$data = array(
				'cash' => $wager['cash'],
				'goods' => $wager['goods'],
				'other' => $wager['other'],
				'enemy_id' => $enemy_id
				);
			return $data;
		}

		public function find_enemy_team($enemy_id)
		{
			$query = "SELECT teams.id, users.nickname, teams.name FROM teams LEFT JOIN users ON teams.id = users.teams_id WHERE teams.id = ?";
			$values = ($enemy_id);
			return $this->db->query($query, $enemy_id)->result_array();
		}

		public function find_my_team($my_team_id)
		{
			$query = "SELECT teams.id, users.nickname, teams.name FROM teams LEFT JOIN users ON teams.id = users.teams_id WHERE teams.id = ?";
			$values = ($my_team_id);
			return $this->db->query($query, $values)->result_array();
		}

		public function grab_random_quote(){
			$query = "SELECT * FROM quotes";
			$all_quotes = $this->db->query($query)->result_array();
			$random = rand(1, COUNT($all_quotes)-1);
			$query = "SELECT * FROM quotes WHERE id = ?";
			$values = ($random);
			return $this->db->query($query, $values)->row_array();
		}
		public function submit_matches($data) {
			$query = "INSERT INTO match_history(winner, winner_score, loser, loser_score) VALUES (?,?,?,?)";
			$values = array($data['winner'],$data['winner_score'],$data['loser'],$data['loser_score']);
			$this->db->query($query, $values);

			$query3 = "SELECT id FROM match_history WHERE winner = ? AND winner_score =? AND loser = ? AND loser_score = ?";
			$values3 = array($data['winner'], $data['winner_score'], $data['loser'], $data['loser_score']);
			$match_id = $this->db->query($query3, $values3)->row_array();

			$query2 = "INSERT INTO wagers(cash, goods, other) VALUES (?,?,?)";
			$values2 = array($data['cash'],$data['goods'],$data['other']);
			$this->db->query($query2, $values2);

			$query4 = "SELECT id from wagers WHERE cash = ? AND goods = ? AND other = ?";
			$values4 = array($data['cash'],$data['goods'],$data['other']);
			$wager_id = $this->db->query($query4, $values4)->row_array();

			$query5 = "INSERT INTO matches(teams_id, teams_id1, wagers_id, match_history_id) VALUES (?,?,?,?)";
			$values5 = array($data['winner'], $data['loser'], $wager_id['id'], $match_id['id']);
			$this->db->query($query5, $values5);



		}
		public function num_of_members() {

			$array = array();
			$query = "SELECT * FROM teams ORDER BY teams.rank ASC";
			$all_teams = $this->db->query($query)->result_array();
			for($i=1;$i<=count($all_teams);$i++) {
				$query = "SELECT count(*) count FROM users LEFT JOIN teams on users.teams_id = teams.id WHERE teams.rank = ?";
				$count = $this->db->query($query, array($i))->row_array();
				array_push($array, $count);
				}
				return $array;
			}
	}





?>