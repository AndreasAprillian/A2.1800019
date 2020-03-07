<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
	}
	public function web(){
		$data['b'] = $this->m_home->GetAgenda();
		$data['a'] = $this->m_home->GetBerita();
		$this->load->view('header_footer/header');
		$this->load->view('index/index',$data,$data);
		$this->load->view('header_footer/footer');
	}
	public function Lihat($no)
	{
		$agn = $this->m_home->GetAgenda("where no = '$no'");
		$data = array
			(
				"id" => $agn[0]['id'],
				"no" => $agn[0]['no'],
				"tema" => $agn[0]['tema'],
				"tempat" => $agn[0]['tempat'],
				"m_date" => $agn[0]['m_date'],
				"s_date" => $agn[0]['s_date'],
			);
		$this->load->view('header_footer/header');
		$this->load->view('agenda/detail',$data);
		$this->load->view('header_footer/footer');
	}
} 