<?php
class Jurusan extends CI_Controller{
	public function index(){
	}

	public function paket($kode){
		$data['title'] ='$kode';
		$data['a'] = $this->m_jurusan->GetJurusan($kode)->row();
		$this->load->view('header_footer/header');
		$this->load->view('jurusan/jurusan',$data);
		$this->load->view('header_footer/footer');
	}
}