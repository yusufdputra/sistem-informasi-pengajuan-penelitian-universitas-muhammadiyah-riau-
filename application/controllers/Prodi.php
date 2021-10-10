 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Prodi extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('pengajuan_m');
			$this->load->model('dosen_m');
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
			$x['data'] = $this->pengajuan_m->pengajuan_prodi();
			$t['data'] = $this->pengajuan_m->notif();
			$x['dosen'] = $this->dosen_m->getDosenProdi($this->session->userdata('level'));

			
			$this->load->view('template/header', $t);
			$this->load->view('prodi/pengajuanprodi_v', $x);
			$this->load->view('template/footer');
		}

		function edit_status()
		{
			$id_pengajuan = $this->input->post('id_pengajuan');
			$status_pengajuan = $this->input->post('status_pengajuan');
			$status1 = $this->input->post('status1');
			$pembimbing1 = $this->input->post('pembimbing1');
			$pembimbing2 = $this->input->post('pembimbing2');

			$kondisi = array('id_pengajuan'   => $id_pengajuan);
			$data = array(
				'status1'    			   => $status1,
				'status_pengajuan'       => $status_pengajuan,
				'pembimbing1'       => $pembimbing1,
				'pembimbing2'       => $pembimbing2,
			);
			$this->pengajuan_m->proses_pengajuan($data, $kondisi);

			$this->session->set_flashdata('alert', 'Pengajuan berhasil diproses');
			redirect('prodi/pengajuan');
		}

		public function arsip()
		{

			$data['data'] = $this->pengajuan_m->arsip();
			$t['data'] = $this->pengajuan_m->notif();

			$this->load->view('template/header', $t);
			$this->load->view('pengaju/arsip_v', $data);
			$this->load->view('template/footer');
		}
	}
