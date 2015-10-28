<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Bets extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model("bet");
		}
		public function index(){
			$this->load->view('mainpage');
		}
		public function go_mainpage() {
			$this->load->view('mainpage');
		}
		public function go_success() {
			$this->load->view('success');
		}
		public function dash()
		{
			$this->load->view('dashboard');
		}
		public function battle()
		{
			$this->load->view('battle');
		}
		public function admin()
		{
			$this->load->view('dashboard_admin');
		}

		public function quotes(){
			$this->load->model("bet");
			$data = $this->bet->grab_random_quote();
			echo json_encode($data);	
		}
}


?>
