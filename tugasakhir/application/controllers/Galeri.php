<?php
class Galeri extends CI_Controller{
	public function index(){
	}
	public function album($album=""){
		$data['title'] = "Galeri";	
		$data['a'] = $this->m_galeri->GetGaleriA()->result();
		$data['album'] = $this->m_galeri->GetAlbumA()->result();
		$data['b'] = $this->m_galeri->GetAlbum($album)->result();
		$data['nalbum'] = $album;
		$this->load->view('header_footer/header');
		$this->load->view('galeri/galeri',$data);
		$this->load->view('header_footer/footer');
	}
}