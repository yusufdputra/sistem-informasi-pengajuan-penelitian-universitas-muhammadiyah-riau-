<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('login_v');
	}

	public function prosesLogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert');
			redirect('login');
		} else {

			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$cek = $this->auth_model->cekusername($username);


			if ($cek->num_rows() == 1) {
				$data = $cek->row_array();
				$level = $data['level'];
				$nama = $data['nama'];
				$jurusan = $data['jurusan'];
				$email = $data['email'];


				//$email = $data['email'];
				if ($password == $cek->row()->password) {
					if ($level == 'Admin') {
						$session['logged_in'] = TRUE;
						$this->session->set_userdata('username', $username);
						//$this->session->set_userdata('email', $email);
						$this->session->set_userdata('level', $level);
						$this->session->set_userdata('nama', $nama);
						$this->session->set_userdata($session);

						redirect('admin');
					}
	
					if ($level == 'Pendidikan Informatika' or $level == 'Pendidikan Bahasa Inggris' or $level == 'Pendidikan IPA' or $level == 'Pendidikan elektronika') {
						$session['logged_in'] = TRUE;
						$this->session->set_userdata('username', $username);
						//$this->session->set_userdata('email', $email);
						$this->session->set_userdata('level', $level);
						$this->session->set_userdata('nama', $nama);
						$this->session->set_userdata('jurusan', $jurusan);
						$this->session->set_userdata('email', $email);
						$this->session->set_userdata($session);

						redirect('prodi');
					}
					if ($level == 'Mahasiswa') {
						$session['logged_in'] = TRUE;
						$this->session->set_userdata('username', $username);
						//$this->session->set_userdata('email', $email);
						$this->session->set_userdata('level', $level);
						$this->session->set_userdata('nama', $nama);
						$this->session->set_userdata('jurusan', $jurusan);
						$this->session->set_userdata('email', $email);
						$this->session->set_userdata($session);
						redirect('pengajuan');
					} 
					else {
						$session['logged_in'] = TRUE;
						$this->session->set_userdata('username', $username);
						//$this->session->set_userdata('email', $email);
						$this->session->set_userdata('level', $level);
						$this->session->set_userdata($session);
						redirect('pimpinan');
					}
				} else {
					$this->session->set_flashdata('login', 'Username atau Password Salah');
					//$this->load->view('login_view');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('login', 'Username atau Password Salah');
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
