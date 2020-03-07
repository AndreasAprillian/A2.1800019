<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	public function index(){
	}
	public function LihatSemua()
	{
		$this->load->view('header_footer/header');
		$data['a'] = $this->m_agenda->GetAgenda();
		$this->load->view('agenda/agenda',$data);
		$this->load->view('header_footer/footer');		
	}
	public function Lihat($id)
	{
		$agn = $this->m_agenda->GetAgenda("where id = '$id'");
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