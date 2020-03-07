<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kontak extends CI_Model {
	public function InSaran($data){
		$data = $this->db->insert('saran',$data);
		return $data;
	}
}