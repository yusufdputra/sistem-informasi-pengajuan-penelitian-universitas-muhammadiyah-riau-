<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index(){
		$this->load->view('register_v');
	}

	function registrasi(){
		$data = array(
			// 'nomor_identitas' => $this->input->post('nomor_identitas'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'jurusan' => $this->input->post('jurusan'),
			'password' => md5($this->input->post('password')),
			'level' => 'Mahasiswa'
		);
		$username = array(
			'username' => $this->input->post('username')
		);
		$pw=$this->input->post('password');
		$pw1=$this->input->post('password1');

		$cek = $this->db->get_where("user",$username)->num_rows();
		if($cek > 0){
			$this->session->set_flashdata('alert','Username Sudah di Gunakan');
			redirect('register');
		}elseif ($pw!=$pw1) {
			$this->session->set_flashdata('alert','harap isikan konfirmasi password dengan benar');
			redirect('register');
		}
		else{
			$this->Auth_model->register('user',$data);
			$this->session->set_flashdata('alert', 'Anda Berhasil Mendaftar Silahkan Login');
			redirect('login');
		}
	}
}
