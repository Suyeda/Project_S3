<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Welcome extends CI_Controller {

        public function __construct() {

            parent::__construct();
            // $this->output->enable_profiler(TRUE);
            // $this->load->model('')
        }
        public function index() {

            $this->load->view('landr');
            // redirect('/codingdojo/ninjas');
        }
        public function log_reg() {

            $this->load->view('log_reg');
        }
        public function go_mainpage() {

            $this->load->view('mainpage');
        } 
        public function go_success() {

            $this->load->view('success');
        }
        public function dash() {

            $this->load->view('dashboard');
        }
        public function battle() {

            $this->load->view('battle');
        }
        public function admin() {

            $this->load->view('dashboard_admin');
        }
        public function sign_in() {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('Amazon');
            $competitor = $this->Amazon->get_user_by_email($email);
            if($competitor && $competitor['password'] == $password) {

                $user = array(
                   'competitor_id' => $competitor['id'],
                   'competitor_email' => $competitor['email'],
                   'competitor_name' => $competitor['first_name'].' '.$competitor['last_name'],
                   'is_logged_in' => true
                );
                $this->session->set_userdata($user);
                redirect("/welcome/dash");
            } else {
                $this->session->set_flashdata("login_error", "<p style='color:red'>Invalid email or password!</p>");
                redirect("/welcome");
            }
        }
        public function register() {

            $this->load->model('Amazon');
            $this->Amazon->register_user($this->input->post());
        }
    }

?>