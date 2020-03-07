<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {
	public function GetAgenda($where = ""){
		$data = $this->db->query('select * from agenda LIMIT 3' .$where);
		return $data->result_array();
	}
	public function GetBerita($where = ""){
		$data = $this->db->query('select * from berita LIMIT 4' .$where);
		return $data->result_array();
	}
}