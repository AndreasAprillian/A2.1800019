<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index() 
	{
		$this->load->view('header_footer/header');
		$this->load->view('kontak/kontak');
		$this->load->view('header_footer/footer');
	}
	public function post_saran(){
		if(isset($_POST['saran'])){
			$id_saran = $this->input->post('id_saran');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$subjek = $this->input->post('subjek');
			$pesan = $this->input->post('pesan');
			$data = array(
				'id_saran' => $id_saran,
				'nama' => $nama,
				'email' => $email,
				'subjek' => $subjek,
				'pesan' => $pesan,
				);
			$in = $this->m_kontak->InSaran($data);
			if ($in) {
				redirect(site_url('kontak'.$id_saran.''));
			}
			else{
				echo 'cacad';
			}
		}
	}
}