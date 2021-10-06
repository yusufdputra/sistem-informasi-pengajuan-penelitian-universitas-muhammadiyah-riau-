<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadu extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('aduan_m');

		if(!$this->session->logged_in){
			redirect('login');
		}
	}
	
	public function index()
	{	
		$this->load->view('template/header');
		echo "halaman pengadu";
		$this->load->view('template/footer');
	}

	public function lihat_aduan($id){
		$list['list'] = $this->aduan_m->detail_aduan($id)->result();
		// $list['list'] = $this->aduan_m->detail_aduan($id);
		//-> utk menghasilkan array
		$this->load->view('template/header');
		$this->load->view('admin/detail_v', $list);
		$this->load->view('template/footer');

	}

	public function ajukan_aduan()
	{	
		$x['data']=$this->aduan_m->ajukan();

		$this->load->view('template/header');
		$this->load->view('pengadu/aduan_list',$x);
		$this->load->view('template/footer');
	}
}