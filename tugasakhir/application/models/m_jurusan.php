<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {
	public function GetJurusan($kode){
		return $this->db->select()->from('jurusan')->where('kode',$kode)->get();
	}

	public function GetJurusanA(){
		return $this->db->select()->from('jurusan')->get();
	}
}