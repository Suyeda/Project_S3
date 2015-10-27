<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function __construct() {

<<<<<<< HEAD
			parent::__construct();
			// $this->output->enable_profiler(TRUE);
			//$this->load->MODEL
		}
		public function index() {

			$this->load->view('landr');
			// redirect('/codingdojo/ninjas');
		}
		public function go_mainpage() {

			$this->load->view('mainpage');
		}
		public function go_success() {
=======
	public function index()
	{
		$this->load->view('mainpage');
		// redirect('/codingdojo/ninjas');
	}
>>>>>>> 0951e2c4d4ced8cec8cd1eaecee4c606dc061acd

			$this->load->view('success');
		}
	}
<<<<<<< HEAD
=======

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
}
>>>>>>> 0951e2c4d4ced8cec8cd1eaecee4c606dc061acd

?>
