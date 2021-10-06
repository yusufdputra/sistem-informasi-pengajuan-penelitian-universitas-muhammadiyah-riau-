 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Admin extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('aduan_m');
			$this->load->model('pengajuan_m');
			$this->load->model('auth_model');

			if (!$this->session->logged_in) {
				redirect('login');
			}
		}
		public function index()
		{
			$this->load->model('home_m');

			$x['countall'] = $this->home_m->countall();
			$x['count1'] = $this->home_m->count1();
			$x['count2'] = $this->home_m->count2();
			$x['count3'] = $this->home_m->count3();

			$t['data'] = $this->pengajuan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('admin/dashboard', $x);
			$this->load->view('template/footer');
		}

		function pengajuan()
		{
			$x['data'] = $this->pengajuan_m->pengajuan_admin();
			$x['data1'] = $this->pengajuan_m->pengajuan_admin1();
			$t['data'] = $this->pengajuan_m->notif();
			$this->load->view('template/header', $t);
			$this->load->view('admin/adminpengajuan_v', $x);
			$this->load->view('template/footer');
		}

		public function lihat_aduan($id)
		{
			$list['list'] = $this->aduan_m->detail_aduan($id)->result();
			$t['data'] = $this->aduan_m->notif();
			$this->load->view('template/header', $t);
			$this->load->view('admin/detail_v', $list);
			$this->load->view('template/footer');
		}

		function edit_status()
		{
			$id_pengajuan = $this->input->post('id_pengajuan');
			$status_pengajuan = $this->input->post('status_pengajuan');
			$keterangan = $this->input->post('keterangan');

			$kondisi = array('id_pengajuan'   => $id_pengajuan);
			$data = array(
				'status_pengajuan'       => $status_pengajuan,
				'keterangan'  		   => $keterangan,
			);

			// $this->pengajuan_m->proses_pengajuan($id_pengajuan, $status_pengajuan, $keterangan);
			$this->pengajuan_m->proses_pengajuan($data, $kondisi);

			$this->session->set_flashdata('alert', 'Pengajuan berhasil diproses');
			redirect('admin/pengajuan');
		}

		function hapus_pengajuan()
		{
			$id_pengajuan = $this->input->post('id_pengajuan');

			$this->pengajuan_m->hapus_pengajuan($id_pengajuan);
			$this->session->set_flashdata('alert', 'Pengajuan berhasil dihapus');
			redirect('admin/pengajuan');
		}

		function tambah_user()
		{

			$t['data'] = $this->pengajuan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('admin/tambah_user_v');
			$this->load->view('template/footer');
		}

		function edit_user($id_user)
		{

			$x['data'] = $this->pengajuan_m->detail_user($id_user);
			$t['data'] = $this->pengajuan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('admin/edit_user_v', $x);
			$this->load->view('template/footer');
		}

		function update_user()
		{
			$this->form_validation->set_rules('username', 'Username', 'callback_username_check');
			$this->form_validation->set_rules('foto', 'Foto', 'callback_validate_foto');
			$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small><br>');
			if ($this->form_validation->run() == false) {
				return $this->tambah_user();
			} else {
				$id_user = $this->input->post('id_user');
				$kondisi = array('id_user' => $id_user);
				$gambarDb = $this->uploadGambar($id_user);

				$password = $this->input->post('password');
				if ($password != null) {
					$passwordFix = md5($password);
				} else {
					$passwordFix = $this->input->post('password_old');
				}

				$data = array(
					'email' => $this->input->post('email'),
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => $passwordFix,
					'level' => $this->input->post('level'),
					'jurusan' => $this->input->post('jurusan'),
					'foto' => $gambarDb
				);

				$this->pengajuan_m->update_user($data, $kondisi);

				$this->session->set_flashdata('alert', 'Data berhasil diedit');
				redirect('admin/pengguna');
			}
		}

		function add_user()
		{
			$this->form_validation->set_rules('username', 'Username', 'is_unique[user.username]');
			$this->form_validation->set_rules('foto', 'Foto', 'callback_validate_foto');
			$this->form_validation->set_message('is_unique', '{field} sudah digunakan');
			$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small><br>');
			if ($this->form_validation->run() == false) {
				return $this->tambah_user();
			} else {
				$gambar = $this->uploadGambar();
				$gambarDb = $gambar != null ? $gambar : 'default.png';
				$data = array(
					'email' => $this->input->post('email'),
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'level' => $this->input->post('level'),
					'jurusan' => $this->input->post('jurusan'),
					'foto' => $gambarDb
				);

				$this->auth_model->register('user', $data);
				$this->session->set_flashdata('alert', 'User berhasil ditambahkan');
				redirect('admin/pengguna');
			}
		}



		function pengguna()
		{
			$x['data'] = $this->pengajuan_m->show_pengguna();
			$t['data'] = $this->pengajuan_m->notif();
			$this->load->view('template/header', $t);
			$this->load->view('admin/pengguna_v', $x);
			$this->load->view('template/footer');
		}

		function hapus_pengguna()
		{
			$id_user = $this->input->post('id_user');

			$this->aduan_m->hapus_pengguna($id_user);
			$this->session->set_flashdata('hapus', 'Pengguna berhasil dihapus');
			redirect('admin/pengguna');
		}

		public function arsip()
		{

			$data['data'] = $this->pengajuan_m->arsip();
			$t['data'] = $this->pengajuan_m->notif();
			$this->load->view('template/header', $t);
			$this->load->view('pengaju/arsip_v', $data);
			$this->load->view('template/footer');
		}

		public function detail_profil($id)
		{

			$list['list'] = $this->aduan_m->detail_profil($id)->result();
			$t['data'] = $this->aduan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('admin/detailprofil_v', $list);
			$this->load->view('template/footer');
		}

		function history()
		{

			$x['data'] = $this->aduan_m->historyA();
			$t['data'] = $this->aduan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('Admin/historyA', $x);
			$this->load->view('template/footer');
		}

		private function uploadGambar($id_user = '')
		{
			$gambar = $_FILES["foto"]['name'];
			if ($gambar != null) {
				$this->removeImage($id_user);
				$config['upload_path'] = './assets/img';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['overwrite'] = true;
				$new_name = rand(1000, 100000) . time() . $_FILES["foto"]['name'];
				$config['file_name'] = $new_name;
				// $config['max_size'] = 1024;
				// $config['max_width'] = 1024;
				// $config['max_height'] = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('foto')) {
					echo $this->upload->display_errors();
				} else {
					$gambar = $this->upload->data();
					//Compress Image
					$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/img/' . $gambar['file_name'];
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['quality'] = '50%';
					$config['width'] = 600;
					$config['height'] = 600;
					$config['new_image'] = './assets/img/' . $gambar['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					return $gambar['file_name'];
				}
			} else {
				if ($id_user != null) {
					$users = $this->auth_model->get($id_user)->row();
					if ($users != null) {
						if ($users->foto != 'default.png') {
							return $users->foto;
						}
					}
				}
				return null;
			}
		}

		private function removeImage($id)
		{
			if ($id != null) {
				$img = $this->auth_model->get($id)->row();
				if ($img->foto != 'default.png') {
					$filename = explode('.', $img->foto)[0];
					return array_map('unlink', glob(FCPATH . "assets/img/" . $filename . '.*'));
				}
			}
		}

		public function validate_foto()
		{
			$check = TRUE;
			if (($_FILES['foto']) && $_FILES['foto']['size'] != 0) {
				$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
				$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
				$extension = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
				$detectedType = exif_imagetype($_FILES['foto']['tmp_name']);
				$type = $_FILES['foto']['type'];
				if (!in_array($detectedType, $allowedTypes)) {
					$this->form_validation->set_message('validate_foto', 'Type Gambar tidak didukung');
					$check = FALSE;
				}
				if (filesize($_FILES['foto']['tmp_name']) > 1000000) {
					$this->form_validation->set_message('validate_foto', 'Gambar melebihi 1 MB');
					$check = FALSE;
				}
				if (!in_array($extension, $allowedExts)) {
					$this->form_validation->set_message('validate_foto', "Tidak didukung format {$extension}");
					$check = FALSE;
				}
			}
			return $check;
		}
		public function username_check($str)
		{
			$id_user = $this->input->post('id_user', true);
			$str = $this->input->post('username', true);
			$users = $this->db->get_where('user', ['id_user <>' => $id_user, 'username' => $str])->num_rows();
			if ($users > 0) {
				$this->form_validation->set_message('username_check', '{field} sudah digunakan pada user lain');
				return FALSE;
			} else {
				return TRUE;
			}
		}
	}
