<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index() {

		if(!$this->session->userdata('username')) {
			redirect('/');
		}

		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$role = $this->session->userdata('role');
		$menu = $this->AdminModel->dashboard($role);

		$data = [
			'title'		=> 'Dashboard | Sistem Pengelola Inventaris',
			'menu'		=> 'dashboard',
			'submenu'	=> 'dashboard',
			'user'		=> $user,
			'menulist'	=> $menu,
			'db'		=> $this->load->database(),
			
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}

}