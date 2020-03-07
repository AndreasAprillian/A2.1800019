<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model {
	public function GetBerita($where = ""){
		$data = $this->db->query('select * from berita '.$where);
		return $data->result_array();
	}
	public function GetKomentar($where = ""){
		$data = $this->db->query('select * from komentar '.$where);
		return $data;
	}
	public function Inkomentar($data){
		$data = $this->db->insert('komentar',$data);
		return $data;
	}
}