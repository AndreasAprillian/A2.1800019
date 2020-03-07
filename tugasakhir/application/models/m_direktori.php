<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_direktori extends CI_Model {
	public function GetSiswa($kelas){
		return $this->db->select()->from('siswa')->where('kelas',$kelas)->order_by('nama')->get();
	}

	public function GetKelas($tingkat){
		return $this->db->select()->from('kelas')->where('tingkat',$tingkat)->get();
	}
	public function GetGuru(){
		return $this->db->select()->from('ptk')->get();
	}
}