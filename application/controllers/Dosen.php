<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Dosen extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('dosen_m');
			$this->load->model('pengajuan_m');
			$this->load->model('auth_model');

			if (!$this->session->logged_in) {
				redirect('login');
			}
		}

    function index()
    {
      $x['dosen'] = $this->dosen_m->select();
			$t['data'] = $this->pengajuan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('admin/dosen_v', $x);
			$this->load->view('template/footer');
    }

    function tambah()
		{

			$t['data'] = $this->pengajuan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('admin/tambah_dosen_v');
			$this->load->view('template/footer');
		}

    function store()
		{
				$data = array(
					'nama' => $this->input->post('nama'),
					'jurusan' => $this->input->post('jurusan'),
				);

				$this->db->insert('dosen', $data);
        $this->session->set_flashdata('alert', 'Dosen berhasil ditambahkan.');
				redirect('dosen/index');
			
		}

    function edit($id_user)
		{

			$t['data'] = $this->pengajuan_m->notif();
      $x['dosen'] = $this->dosen_m->selectById($id_user);

			$this->load->view('template/header', $t);
			$this->load->view('admin/edit_dosen_v', $x);
			$this->load->view('template/footer');
		}

    function update()
		{
				$data = array(
					'nama' => $this->input->post('nama'),
					'jurusan' => $this->input->post('jurusan'),
				);

        $kondisi = array('id' =>  $this->input->post('id_dosen'));

        $this->dosen_m->update($data, $kondisi);

				$this->session->set_flashdata('alert', 'Data berhasil diedit');
				redirect('dosen/index');
			
		}

    
		function hapus()
		{
      $data = array(
        'deleted_at' => date("Y-m-d H:i:s"),
        
      );

      $kondisi = array('id' =>  $this->input->post('id_user'));

      $this->dosen_m->hapus($data, $kondisi);
			$this->session->set_flashdata('hapus', 'Pengguna berhasil dihapus');
			redirect('dosen/index');
		}
  }