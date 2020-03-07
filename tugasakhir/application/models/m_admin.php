<?php
class M_Admin extends CI_Model{
	public function cLogin($username,$password){
		return $this->db->select()->from('admin')->where('username',$username)->where('password',$password)->get();
	}
	public function GetSiswa($kelas){
		return $this->db->select()->from('siswa')->where('kelas',$kelas)->order_by('nama')->get();
	}
	public function GetSiswa1($where = ""){
		$data = $this->db->query('select * from siswa '.$where);
		return $data->result_array();
	}
	public function InsertData($siswa,$data){
		$res = $this->db->insert($siswa,$data);
		return $res;
	}
	public function DeleteData($siswa,$data){
		$res = $this->db->delete($siswa,$data);
		return $res;	
	}
	public function UpdateDatasiswa($siswa,$data,$where){
		$res = $this->db->update($siswa,$data,$where);
		return $res;
	}
	public function GetKelas($tingkat){
		return $this->db->select()->from('kelas')->where('tingkat',$tingkat)->get();
	}
	public function GetGuru(){
		return $this->db->select()->from('ptk')->get();
	}
	public function GetGuru1($where = ""){
		$data = $this->db->query('select * from ptk '.$where);
		return $data->result_array();
	}
	public function InsertDataguru($ptk,$data){
		$res = $this->db->insert($ptk,$data);
		return $res;
	}
	public function UpdateDataguru($ptk,$data,$where){
		$res = $this->db->update($ptk,$data,$where);
		return $res;
	}
	public function DeleteDataguru($ptk,$data){
		$res = $this->db->delete($ptk,$data);
		return $res;	
	}
	public function Getklsadm(){
		return $this->db->select()->from('kelas')->get();
	}
	public function Getkelas1($where = ""){
		$data = $this->db->query('select * from kelas '.$where);
		return $data->result_array();
	}
	public function InsertDatakelas($kelas,$data){
		$res = $this->db->insert($kelas,$data);
		return $res;
	}
	public function UpdateDatakelas($kelas,$data,$where){
		$res = $this->db->update($kelas,$data,$where);
		return $res;
	}
	public function DeleteDatakelas($kelas,$data){
		$res = $this->db->delete($kelas,$data);
		return $res;
	}
	public function GetJurusan(){
		return $this->db->select()->from('jurusan')->get();
	}
	public function GetJurusan1($where = ""){
		$data = $this->db->query('select * from jurusan '.$where);
		return $data->result_array();
	}
	public function InsertDatajurusan($jurusan,$data){
		$res = $this->db->insert($jurusan,$data);
		return $res;
	}
	public function UpdateDatajurusan($jurusan,$data,$where){
		$res = $this->db->update($jurusan,$data,$where);
		return $res;
	}
	public function DeleteDatajurusan($jurusan,$data){
		$res = $this->db->delete($jurusan,$data);
		return $res;
	}
	public function GetBerita(){
		return $this->db->select()->from('berita')->get();
	}
	public function GetBerita1($where = ""){
		$data = $this->db->query('select * from berita '.$where);
		return $data->result_array();
	}
	public function InsertDataberita($berita,$data){
		$res = $this->db->insert($berita,$data);
		return $res;
	}
	public function UpdateDataberita($berita,$data,$where){
		$res = $this->db->update($berita,$data,$where);
		return $res;
	}
	public function DeleteDataberita($berita,$data){
		$res = $this->db->delete($berita,$data);
		return $res;
	}
	public function GetGaleri(){
		return $this->db->select()->from('galeri')->get();
	}
	public function GetGaleri1($where = ""){
		$data = $this->db->query('select * from galeri '.$where);
		return $data->result_array();
	}
	public function InsertDatagaleri($galeri,$data){
		$res = $this->db->insert($galeri,$data);
		return $res;
	}
	public function UpdateDatagaleri($galeri,$data,$where){
		$res = $this->db->update($galeri,$data,$where);
		return $res;
	}
	public function DeleteDatagaleri($galeri,$data){
		$res = $this->db->delete($galeri,$data);
		return $res;
	}
	public function GetPesan(){
		return $this->db->select()->from('saran')->get();
	}
	public function GetPesan1($where = ""){
		$data = $this->db->query('select * from saran '.$where);
		return $data->result_array();
	}
	public function Getkomentar1($where = ""){
		$data = $this->db->query('select * from komentar '.$where);
		return $data->result_array();
	}
	public function DeleteDatapesan($saran,$data){
		$res = $this->db->delete($saran,$data);
		return $res;
	}
	public function GetKomentar(){
		return $this->db->select()->from('komentar')->get();
	}
}