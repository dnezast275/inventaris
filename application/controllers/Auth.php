<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function index() {

		if($this->session->userdata('username')){
			if($this->session->userdata('role') == 'admin'){
				redirect('admin');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Holy guacamole!</strong> You are not an Administrator!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>');
			  redirect('/');
			}
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Holy guacamole!</strong> Silahkan login terlebih dahulu!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>');
			  redirect('/');
		}

		$data = [
			'title'	=> 'Sistem Pengelola Inventaris',
			'loginHead'	=> 'Sistem Pengelola Inventaris'
		];
		
		$this->load->view('template/login-header', $data);
		$this->load->view('login/home', $data);
		$this->load->view('template/login-footer');
	}

	public function login() {

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		

		if($this->form_validation->run() == FALSE){
			redirect('auth');
		}else {
			$data = [
				'username'	=> $this->input->post('email'),
				'password'	=> $this->input->post('password')
			];
			$this->AuthModel->login($data);
		}
	}

	public function logout() {
		session_unset();
		session_destroy();
		redirect('/');
	}
}