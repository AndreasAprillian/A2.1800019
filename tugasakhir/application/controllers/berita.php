<?php
class Berita extends CI_Controller{
	public function index(){
	}

	public function news(){
		$this->load->view('header_footer/header');
		$data['a'] = $this->m_berita->GetBerita();
		$this->load->view('berita/berita',$data);
		$this->load->view('header_footer/footer');
	}
	public function post_comment(){
		if(isset($_POST['komen'])){
			$id_berita = $this->input->post('id_berita');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$isi = $this->input->post('isi');
			$date = date('Y-m-d');
			$time = date('H:i:s');
			$data = array(
				'id_berita' => $id_berita,
				'nama' => $nama,
				'email' => $email,
				'isi' => $isi,
				'date' => $date,
				'time' => $time,
				);
			$in = $this->m_berita->Inkomentar($data);
			if ($in) {
				redirect(site_url('berita/baca/'.$id_berita.''));
			}
			else{
				echo 'cacad';
			}
		}
	}
	public function baca($id_berita)
	{
		$brt = $this->m_berita->GetBerita("where id_berita = '$id_berita'");
		$data['berita'] = array
			(
				"id_berita" => $brt[0]['id_berita'],
				"judul" => $brt[0]['judul'],
				"isi" => $brt[0]['isi'],
				"date" => $brt[0]['date'],
				"lihat" => $brt[0]['lihat'],
				"author" => $brt[0]['author'],
				"time" => $brt[0]['time'],
				"thumbnail" => $brt[0]['thumbnail'],
			);

		$data['kmn'] = $this->m_berita->GetKomentar("where id_berita = '$id_berita'")->result();
		$data['kml'] = $this->m_berita->GetKomentar("where id_berita = '$id_berita'")->num_rows();
		//$data['komentar'] = array
			//(
			//	"id_berita" => $kmn[0]['id_berita'],
			//	"judul" => $kmn[0]['judul'],
			//	"isi" => $kmn[0]['isi'],
			//	"date" => $kmn[0]['date'],
			//	"lihat" => $kmn[0]['lihat'],
			//	"author" => $kmn[0]['author'],
			//	"time" => $kmn[0]['time'],
			//	"thumbnail" => $kmn[0]['thumbnail'],
			//);
		$this->load->view('header_footer/header');
		$this->load->view('berita/detail',$data);
		$this->load->view('header_footer/footer');
	}
}