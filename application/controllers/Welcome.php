<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function __construct() {

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

			$this->load->view('success');
		}
	}

?>
