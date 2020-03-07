<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}

	public function verifikasi(){
		if(isset($_POST['masuk'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->m_admin->cLogin($username,$password)->num_rows();
			if($cek == 0){
				$this->session->set_flashdata('pesan','<span class="text-caption text-primary">ID pengguna atau Kata Sandi Salah</span>');
				redirect('login');
			}else{
				$this->session->set_userdata('user',$username);
				redirect('admin/dasbor');
			}
		}
	}
}