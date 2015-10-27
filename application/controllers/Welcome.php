<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		//$this->load->MODEL
	}

	public function index()
	{
		$this->load->view('mainpage');
		// redirect('/codingdojo/ninjas');

	}

	public function success()
	{
		$this->load->view('success');
	}
}

?>
