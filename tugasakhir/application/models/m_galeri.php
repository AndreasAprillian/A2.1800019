<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {
	public function GetGaleri($kode){
		return $this->db->select()->from('galeri')->where('kode',$kode)->get();
	}

	public function GetGaleriA(){
		return $this->db->select()->from('galeri')->get();
	}

	public function GetAlbumA(){
		return $this->db->select()->from('galeri')->group_by('album')->get();
	}
	
	public function GetAlbum($album){
		return $this->db->select()->from('galeri')->where('album',$album)->get();
	}
}