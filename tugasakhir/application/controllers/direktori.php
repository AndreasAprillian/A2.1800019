<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direktori extends CI_Controller {
	public function index(){
	}
	public function siswa(){
		$data['a'] = $this->m_direktori->GetKelas('X')->result();
		$data['b'] = $this->m_direktori->GetKelas('XI')->result();
		$data['c'] = $this->m_direktori->GetKelas('XII')->result();
		$this->load->view('header_footer/header');
		$this->load->view('direktori/kelas',$data);
		$this->load->view('header_footer/footer');
	}
	public function guru(){
		$data['g'] = $this->m_direktori->GetGuru()->result();
		$this->load->view('header_footer/header');
		$this->load->view('direktori/guru',$data);
		$this->load->view('header_footer/footer');
	}
}