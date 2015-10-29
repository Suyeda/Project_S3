<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Bets extends CI_Controller {

		public function __construct() {
			parent::__construct();
			//$this->load->MODEL
		}

		public function index()
		{
			$this->load->view('mainpage');
			// redirect('/codingdojo/ninjas');
		}

		public function log_reg() 
		{
			$this->load->view('log_reg');
		}
		
		public function go_mainpage() {

			$this->load->view('mainpage');
		}		
	
		public function go_success() {
			$this->load->view('success');
		}

		public function dash()
		{
			$this->load->model('bet');
			$all_users = $this->bet->find_all_users();
			$all_teams = $this->bet->find_all_teams();
			$this->load->view('dashboard', array('all_users' => $all_users, 'all_teams' => $all_teams));
		}

		public function battle()
		{
			$this->load->view('battle');
		}

		public function admin()
		{
			$this->load->view('dashboard_admin');
		}

		public function wager()
		{
			$this->load->view('wager');
		}

		public function quotes()
		{
			$this->load->model("bet");
			$data = $this->bet->grab_random_quote();
			echo json_encode($data);	
		}

		public function sign_in() {
            $this->load->model('bet');
            $check = $this->bet->get_user_by_email($this->input->post());
            if($check == true){
                redirect("/bets/dash");
            } else {
                $this->session->set_flashdata("login_error", "<p style='color:red'>Invalid email or password!</p>");
                redirect("/bets/log_reg");
            }
        }
        public function register() {

            $this->load->model('bet');
            $user = $this->bet->register_user($this->input->post());
            if($user == true) {
            	redirect('/bets/dash');
            } else {
            	$errors = validation_errors();
				$this->load->view('log_reg', $errors);
            }
        }

        public function logout() {

        	$this->session->sess_destroy();
        	redirect('/bets');
        }

        public function team_profile()
        {
			$this->load->view('teams');
        }

        // Temporary controllers to connect to team edit page
        public function edit_team()
        {
			$this->load->view('edit_team');
        }

        // Temporary controllers to link to the profile edit page
        public function edit_user()
        {
        	$this->load->view('edit_user');
        }
	}
?>
