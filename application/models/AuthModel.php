<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
	public function login($data) {
		$user = $this->db->get_where('user', ['username' => $data['username']])->row_array();	
		
		if($data['username'] == $user['username']){
			if(password_verify($data['password'], $user['password'])){
				$this->session->set_userdata([
					'username'	=> $data['username'],
					'role'		=> $user['role']
				]);
				redirect('admin');
			}
		}
	}
}