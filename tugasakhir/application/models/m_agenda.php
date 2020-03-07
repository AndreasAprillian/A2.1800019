<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Agenda extends CI_Model {
	public function GetAgenda($where = ""){
		$data = $this->db->query('select * from agenda '.$where);
		return $data->result_array();
	}
}