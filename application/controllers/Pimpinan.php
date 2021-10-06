<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		if(!$this->session->logged_in){
			redirect('login');
		}
	}
	
	public function index()
	{	
		$this->load->model('home_m');
		$this->load->model('aduan_m');

		$x['dataall']=$this->home_m->grafikall();
		$x['data1']=$this->home_m->grafik1();
		$x['data2']=$this->home_m->grafik2();
		$x['data3']=$this->home_m->grafik3();

		$x['countall']=$this->home_m->countall();
		$x['count1']=$this->home_m->count1();
		$x['count2']=$this->home_m->count2();
		$x['count3']=$this->home_m->count3();

		$t['data']=$this->aduan_m->notif();
		$this->load->view('template/header',$t);
		$this->load->view('admin/dashboard',$x);
		$this->load->view('template/footer');
	}

	function history(){

		$this->load->model('aduan_m');
		$x['data']=$this->aduan_m->historyA();
		$t['data']=$this->aduan_m->notif();

		$this->load->view('template/header',$t);
		$this->load->view('Admin/historyA',$x);
		$this->load->view('template/footer');
	}
}
