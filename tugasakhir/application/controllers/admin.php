<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function dasbor() 
	{
		$data['kml'] = $this->m_admin->GetKomentar("where ")->num_rows();
		$data['psa'] = $this->m_admin->GetPesan("where ")->num_rows();
		$this->load->view('admin/header');
		$this->load->view('admin/dasbor',$data);
		$this->load->view('admin/footer');
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect('login');
	}
	public function siswa()
	{
		$data['a'] = $this->m_admin->GetKelas('X')->result();
		$data['b'] = $this->m_admin->GetKelas('XI')->result();
		$data['c'] = $this->m_admin->GetKelas('XII')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/siswa',$data);
		$this->load->view('admin/footer');
	}
	public function guru(){
		$data['g'] = $this->m_admin->GetGuru()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/guru',$data);
		$this->load->view('admin/footer');
	}
	public function kelas(){
		$data['k'] = $this->m_admin->Getklsadm()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/kelas',$data);
		$this->load->view('admin/footer');
	}
	public function jurusan(){
		$data['j'] = $this->m_admin->GetJurusan()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/jurusan',$data);
		$this->load->view('admin/footer');
	}
	public function Berita(){
		$data['n'] = $this->m_admin->GetBerita()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/berita',$data);
		$this->load->view('admin/footer');
	}
	public function Galeri(){
		$data['p'] = $this->m_admin->GetGaleri()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/galeri',$data);
		$this->load->view('admin/footer');
	}
	public function Pesan(){
		$data['s'] = $this->m_admin->GetPesan()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/pesan',$data);
		$this->load->view('admin/footer');
	}
	public function Komentar(){
		$data['kmn'] = $this->m_admin->GetKomentar()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/komentar',$data);
		$this->load->view('admin/footer');
	}
	public function add_siswa()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_siswa');
		$this->load->view('admin/footer');
	}
	public function do_add()
	{
		$id = $_POST['id'];
		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$data_insert = array
		(
			'id' => $id,
			'nisn' => $nisn,
			'nis' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'jk' => $jk,
		);
		$res = $this->m_admin->InsertData('siswa',$data_insert);
		if($res>=1)
		{
			$this->session->set_flashdata('add','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/siswa');
		}
		else
		{
			$this->session->set_flashdata('add','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/siswa');
		}
		
	}
	public function edit_datasiswa($id)
	{
		$mhs = $this->m_admin->GetSiswa1("where id = '$id'");
		$data = array
			(
				"id" => $mhs[0]['id'],
				"nisn" => $mhs[0]['nisn'],
				"nis" => $mhs[0]['nis'],
				"kelas" => $mhs[0]['kelas'],
				"nama" => $mhs[0]['nama'],
				"jk" => $mhs[0]['jk'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_siswa',$data);
		$this->load->view('admin/footer');
	}
	public function do_updatesiswa()
	{
		$id = $_POST['id'];
		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$kelas = $_POST['kelas'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$data_update = array
		(
			'nisn' => $nisn,
			'nis' => $nis,
			'kelas' => $kelas,
			'nama' => $nama,
			'jk' => $jk,
		);
		$where = array('id' => $id);
		$res = $this->m_admin->UpdateDatasiswa('siswa',$data_update,$where);
		if($res>=1)
		{
			$this->session->set_flashdata('update','<span class="text-caption text-primary">Data Berhasil Di Edit</span>');
			redirect('admin/siswa');
		}
		else
		{
			$this->session->set_flashdata('update','<span class="text-caption text-primary">Data Gagal Di edit</span>');
			redirect('admin/siswa');
		}
	}
	public function do_delete($id)
	{
		$where = array('id' => $id);
		$res = $this->m_admin->DeleteData('siswa',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/siswa');
		}
		else
		{
			$this->session->set_flashdata('delete','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/siswa');
		}
	}
	public function add_guru()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_guru');
		$this->load->view('admin/footer');
	}
	public function do_addguru()
	{
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$data_insert = array
		(
			'nip' => $nip,
			'nama' => $nama,
			'jabatan' => $jabatan,
		);
		$res = $this->m_admin->InsertDataguru('ptk',$data_insert);
		if($res>=1)
		{
			$this->session->set_flashdata('add_guru','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/guru');
		}
		else
		{
			$this->session->set_flashdata('add_guru','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/guru');
		}
	}
	public function edit_dataguru($id)
	{
		$gru = $this->m_admin->GetGuru1("where id = '$id'");
		$data = array
			(
				"id" => $gru[0]['id'],
				"nama" => $gru[0]['nama'],
				"nip" => $gru[0]['nip'],
				"jabatan" => $gru[0]['jabatan'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_guru',$data);
		$this->load->view('admin/footer');
	}
	public function do_updateguru()
	{
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nip = $_POST['nip'];
		$jabatan = $_POST['jabatan'];
		$data_update = array
		(
			'nama' => $nama,
			'nip' => $nip,
			'jabatan' => $jabatan,		
		);
		$where = array('id' => $id);
		$res = $this->m_admin->UpdateDataguru('ptk',$data_update,$where);
		if($res>=1)
		{
			$this->session->set_flashdata('update_guru','<span class="text-caption text-primary">Data Berhasil Di Edit</span>');
			redirect('admin/guru');
		}
		else
		{
			$this->session->set_flashdata('update_guru','<span class="text-caption text-primary">Data Gagal Di edit</span>');
			redirect('admin/guru');
		}
	}
	public function do_deleteguru($id)
	{
		$where = array('id' => $id);
		$res = $this->m_admin->DeleteDataguru('ptk',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_guru','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/guru');
		}
		else
		{
			$this->session->set_flashdata('delete_guru','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/guru');
		}
	}
	public function do_deletesiswa($id)
	{
		$where = array('id' => $id);
		$res = $this->m_admin->DeleteData('siswa',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/siswa');
		}
		else
		{
			$this->session->set_flashdata('delete','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/siswa');
		}
	}
	public function add_kelas()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_kelas');
		$this->load->view('admin/footer');
	}
	public function do_addkelas()
	{
		$tingkat = $_POST['tingkat'];
		$jurusan = $_POST['jurusan'];
		$kelas = $_POST['kelas'];
		$data_insert = array
		(
			'tingkat' => $tingkat,
			'jurusan' => $jurusan,
			'kelas' => $kelas,
		);
		$res = $this->m_admin->InsertDatakelas('kelas',$data_insert);
		if($res>=1)
		{
			$this->session->set_flashdata('add_kelas','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/kelas');
		}
		else
		{
			$this->session->set_flashdata('add_kelas','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/kelas');
		}
	}
	public function edit_datakelas($id)
	{
		$kls = $this->m_admin->Getkelas1("where id = '$id'");
		$data = array
			(
				"id" => $kls[0]['id'],
				"tingkat" => $kls[0]['tingkat'],
				"jurusan" => $kls[0]['jurusan'],
				"kelas" => $kls[0]['kelas'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_kelas',$data);
		$this->load->view('admin/footer');
	}
	public function do_updatekelas()
	{
		$id = $_POST['id'];
		$tingkat = $_POST['tingkat'];
		$jurusan = $_POST['jurusan'];
		$kelas = $_POST['kelas'];
		$data_update = array
		(
			'tingkat' => $tingkat,
			'jurusan' => $jurusan,
			'kelas' => $kelas,		
		);
		$where = array('id' => $id);
		$res = $this->m_admin->UpdateDatakelas('kelas',$data_update,$where);
		if($res>=1)
		{
			$this->session->set_flashdata('update_kelas','<span class="text-caption text-primary">Data Berhasil Di Edit</span>');
			redirect('admin/kelas');
		}
		else
		{
			$this->session->set_flashdata('update_kelas','<span class="text-caption text-primary">Data Gagal Di edit</span>');
			redirect('admin/kelas');
		}
	}
	public function do_deletekelas($id)
	{
		$where = array('id' => $id);
		$res = $this->m_admin->DeleteDatakelas('kelas',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_kelas','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/kelas');
		}
		else
		{
			$this->session->set_flashdata('delete_kelas','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/kelas');
		}
	}
	public function add_jurusan()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_jurusan');
		$this->load->view('admin/footer');
	}
	public function do_addjurusan()
	{
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		$fasilitas = $_POST['fasilitas'];
		$kompetensi = $_POST['kompetensi'];
		$logo = $_FILES['logo']['name'];
        $img = $_FILES['img']['name'];
        $struktur = $_FILES['struktur']['name'];
        $path = 'assets/img/'.$kode.'/';
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
               }
        $config['upload_path'] = $path;   
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';          
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
  	      if ($logo !== ""){
        $this->upload->do_upload('logo');
        $upload_data1 = $this->upload->data();
        $img_logo = $path.'/'.$upload_data1['file_name'];
          }else{
                $img_logo = ""; 
            }
            if ($img !== ""){
                $this->upload->do_upload('img');
                $upload_data2 = $this->upload->data();
                $img_img = $path.'/'.$upload_data2['file_name'];
            }else{
                $img_img = "";
            }
            if ($struktur !== ""){
                $this->upload->do_upload('struktur');
                $upload_data3 = $this->upload->data();
                $img_struktur = $path.'/'.$upload_data3['file_name'];
            }else{
                $img_struktur = "";
            }
		$data_insert = array
		(
			'kode' => $kode,
			'nama' => $nama,
			'visi' => $visi,
			'misi' => $misi,
			'fasilitas' => $fasilitas,
			'kompetensi' => $kompetensi,
			'logo' => $img_logo,
			'img' => $img_img,
			'struktur' => $img_struktur,
		);
		$res = $this->m_admin->InsertDatajurusan('jurusan',$data_insert);
		if($res>=1)
		{
			$this->session->set_flashdata('add_jurusan','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/jurusan');
		}
		else
		{
			$this->session->set_flashdata('add_jurusan','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/jurusan');
		}
	}
	public function edit_datajurusan($id)
	{
		$jrs = $this->m_admin->GetJurusan1("where id = '$id'");
		$data = array
			(
				"id" => $jrs[0]['id'],
				"kode" => $jrs[0]['kode'],
				"nama" => $jrs[0]['nama'],
				"visi" => $jrs[0]['visi'],
				"misi" => $jrs[0]['misi'],
				"fasilitas" => $jrs[0]['fasilitas'],
				"kompetensi" => $jrs[0]['kompetensi'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_jurusan',$data);
		$this->load->view('admin/footer');
	}
	public function do_updatejurusan()
	{
		$id = $_POST['id'];
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		$fasilitas = $_POST['fasilitas'];
		$kompetensi = $_POST['kompetensi'];
		$logo = $_FILES['logo']['name'];
        $img = $_FILES['img']['name'];
        $struktur = $_FILES['struktur']['name'];
        $path = 'assets/img/'.$kode.'/';
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
               }
        $config['upload_path'] = $path;   
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';          
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
  	      if ($logo !== ""){
        $this->upload->do_upload('logo');
        $upload_data1 = $this->upload->data();
        $img_logo = $path.'/'.$upload_data1['file_name'];
          }else{
                $img_logo = ""; 
            }
            if ($img !== ""){
                $this->upload->do_upload('img');
                $upload_data2 = $this->upload->data();
                $img_img = $path.'/'.$upload_data2['file_name'];
            }else{
                $img_img = "";
            }
            if ($struktur !== ""){
                $this->upload->do_upload('struktur');
                $upload_data3 = $this->upload->data();
                $img_struktur = $path.'/'.$upload_data3['file_name'];
            }else{
                $img_struktur = "";
            }
		$data_update = array
		(
			'kode' => $kode,
			'nama' => $nama,
			'visi' => $visi,
			'misi' => $misi,
			'fasilitas' => $fasilitas,
			'kompetensi' => $kompetensi,
			'logo' => $img_logo,
			'img' => $img_img,
			'struktur' => $img_struktur,		
		);
		$where = array('id' => $id);
		$res = $this->m_admin->UpdateDatajurusan('jurusan',$data_update,$where);
		if($res>=1)
		{
			$this->session->set_flashdata('update_jurusan','<span class="text-caption text-primary">Data Berhasil Di Edit</span>');
			redirect('admin/jurusan');
		}
		else
		{
			$this->session->set_flashdata('update_jurusan','<span class="text-caption text-primary">Data Gagal Di edit</span>');
			redirect('admin/jurusan');
		}
	}
	public function do_deletejurusan($id)
	{
		$where = array('id' => $id);
		$res = $this->m_admin->DeleteDatajurusan('jurusan',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_jurusan','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/jurusan');
		}
		else
		{
			$this->session->set_flashdata('delete_jurusan','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/jurusan');
		}
	}
	public function add_berita()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_berita');
		$this->load->view('admin/footer');
	}
	public function do_addberita()
	{
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$author = $_POST['author'];
		$time = $_POST['time'];
        $thumbnail = $_FILES['thumbnail']['name'];
        $path = 'assets/img/'.$id_berita.'/';
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
               }
        $config['upload_path'] = $path;   
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';          
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
            if ($thumbnail !== ""){
                $this->upload->do_upload('thumbnail');
                $upload_data2 = $this->upload->data();
                $img_thumbnail = $path.'/'.$upload_data2['file_name'];
            }else{
                $img_thumbnail = "";
            }
		$data_insert = array
		(
			'judul' => $judul,
			'isi' => $isi,
			'date' => $date,
			'author' => $author,
			'time' => $time,
			'thumbnail' => $img_thumbnail,
		);
		$res = $this->m_admin->InsertDataberita('berita',$data_insert);
		if($res>=1)
		{
			$this->session->set_flashdata('add_berita','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/berita');
		}
		else
		{
			$this->session->set_flashdata('add_berita','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/berita');
		}
	}
	public function edit_databerita($id_berita)
	{
		$brt = $this->m_admin->Getberita1("where id_berita = '$id_berita'");
		$data = array
			(
				"id_berita" => $brt[0]['id_berita'],
				"judul" => $brt[0]['judul'],
				"isi" => $brt[0]['isi'],
				"date" => $brt[0]['date'],
				"author" => $brt[0]['author'],
				"time" => $brt[0]['time'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_berita',$data);
		$this->load->view('admin/footer');
	}
	public function do_updateberita()
	{
		$id_berita = $_POST['id_berita'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$date = $_POST['date'];
		$author = $_POST['author'];
		$time = $_POST['time'];
        $thumbnail = $_FILES['thumbnail']['name'];
        $path = 'assets/img/'.$id_berita.'/';
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
               }
        $config['upload_path'] = $path;   
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';          
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
            if ($thumbnail !== ""){
                $this->upload->do_upload('thumbnail');
                $upload_data2 = $this->upload->data();
                $img_thumbnail = $path.'/'.$upload_data2['file_name'];
            }else{
                $img_thumbnail = "";
            }
		$data_update = array
		(
			'judul' => $judul,
			'isi' => $isi,
			'date' => $date,
			'author' => $author,
			'time' => $time,
			'thumbnail' => $img_thumbnail,	
		);
		$where = array('id_berita' => $id_berita);
		$res = $this->m_admin->UpdateDataberita('berita',$data_update,$where);
		if($res>=1)
		{
			$this->session->set_flashdata('update_berita','<span class="text-caption text-primary">Data Berhasil Di Edit</span>');
			redirect('admin/berita');
		}
		else
		{
			$this->session->set_flashdata('update_berita','<span class="text-caption text-primary">Data Gagal Di edit</span>');
			redirect('admin/berita');
		}
	}
	public function do_deleteberita($id_berita)
	{
		$where = array('id_berita' => $id_berita);
		$res = $this->m_admin->DeleteDataberita('berita',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_berita','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/berita');
		}
		else
		{
			$this->session->set_flashdata('delete_berita','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/berita');
		}
	}
	public function add_galeri()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_galeri');
		$this->load->view('admin/footer');
	}
	public function do_addgaleri()
	{
		$kode = $_POST['kode'];
		$album = $_POST['album'];
        $img = $_FILES['img']['name'];
        $path = 'assets/img/'.$id.'/';
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
               }
        $config['upload_path'] = $path;   
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';          
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
            if ($img !== ""){
                $this->upload->do_upload('img');
                $upload_data2 = $this->upload->data();
                $img_img = $path.'/'.$upload_data2['file_name'];
            }else{
                $img_img = "";
            }
		$data_insert = array
		(
			'kode' => $kode,
			'album' => $album,
			'img' => $img_img,
		);
		$res = $this->m_admin->InsertDatagaleri('galeri',$data_insert);
		if($res>=1)
		{
			$this->session->set_flashdata('add_galeri','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/galeri');
		}
		else
		{
			$this->session->set_flashdata('add_galeri','<span class="text-caption text-primary">Data Berhasil Di Tambahkan</span>');
			redirect('admin/galeri');
		}
	}
	public function edit_datagaleri($id)
	{
		$glr = $this->m_admin->Getgaleri1("where id = '$id'");
		$data = array
			(
				"id" => $glr[0]['id'],
				"kode" => $glr[0]['kode'],
				"album" => $glr[0]['album'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_galeri',$data);
		$this->load->view('admin/footer');
	}
	public function do_updategaleri()
	{
		$id = $_POST['id'];
		$kode = $_POST['kode'];
		$album = $_POST['album'];
        $img = $_FILES['img']['name'];
        $path = 'assets/img/'.$id.'/';
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
               }
        $config['upload_path'] = $path;   
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '0';          
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
            if ($img !== ""){
                $this->upload->do_upload('img');
                $upload_data2 = $this->upload->data();
                $img_img = $path.'/'.$upload_data2['file_name'];
            }else{
                $img_thumbnail = "";
            }
		$data_update = array
		(
			'kode' => $kode,
			'album' => $album,
			'img' => $img_img,	
		);
		$where = array('id' => $id);
		$res = $this->m_admin->UpdateDatagaleri('galeri',$data_update,$where);
		if($res>=1)
		{
			$this->session->set_flashdata('update_berita','<span class="text-caption text-primary">Data Berhasil Di Edit</span>');
			redirect('admin/galeri');
		}
		else
		{
			$this->session->set_flashdata('update_berita','<span class="text-caption text-primary">Data Gagal Di edit</span>');
			redirect('admin/galeri');
		}
	}
	public function do_deletegaleri($id)
	{
		$where = array('id' => $id);
		$res = $this->m_admin->DeleteDatagaleri('galeri',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_berita','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/galeri');
		}
		else
		{
			$this->session->set_flashdata('delete_berita','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/galeri');
		}
	}
	public function view_datapesan($id_saran)
	{
		$psn = $this->m_admin->GetPesan1("where id_saran = '$id_saran'");
		$data = array
			(
				"id_saran" => $psn[0]['id_saran'],
				"nama" => $psn[0]['nama'],
				"email" => $psn[0]['email'],
				"subjek" => $psn[0]['subjek'],
				"pesan" => $psn[0]['pesan'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/lihat_pesan',$data);
		$this->load->view('admin/footer');
	}
	public function do_deletepesan($id_saran)
	{
		$where = array('id_saran' => $id_saran);
		$res = $this->m_admin->DeleteDatapesan('saran',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_pesan','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/pesan');
		}
		else
		{
			$this->session->set_flashdata('delete_pesan','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/pesan');
		}
	}
	public function view_datakomentar($id_berita)
	{
		$kmn = $this->m_admin->Getkomentar1("where id_berita = '$id_berita'");
		$data = array
			(
				"id_berita" => $kmn[0]['id_berita'],
				"nama" => $kmn[0]['nama'],
				"email" => $kmn[0]['email'],
				"isi" => $kmn[0]['isi'],
				"date" => $kmn[0]['date'],
				"time" => $kmn[0]['time'],
			);
		$this->load->view('admin/header');
		$this->load->view('admin/lihat_komentar',$data);
		$this->load->view('admin/footer');
	}
	public function do_deletekomentar($id_komentar)
	{
		$where = array('id_berita' => $id_berita);
		$res = $this->m_admin->DeleteDataberita('komentar',$where);
		if($res>=1)
		{
			$this->session->set_flashdata('delete_komentar','<span class="text-caption text-primary">Data Berhasil Di hapus</span>');
			redirect('admin/komentar');
		}
		else
		{
			$this->session->set_flashdata('delete_komentar','<span class="text-caption text-primary">Data Gagal Di hapus</span>');
			redirect('admin/kometar');
		}
	}
}
