<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('teknisi_m');
		$this->load->model('aduan_m');

		if(!$this->session->logged_in){
			redirect('login');
		}
	}

	function index(){
		$x['data']=$this->teknisi_m->daftar_aduan();
		$t['data']=$this->aduan_m->notif1();
		$this->load->view('template/header',$t);
		$this->load->view('teknisi/aduanteknisi',$x);
		$this->load->view('template/footer'); 
	}

	public function lihat_aduan($id){
		$list['list'] = $this->teknisi_m->detail_aduan($id)->result();
		$t['data']=$this->aduan_m->notif1();
		$this->load->view('template/header',$t);
		$this->load->view('admin/detail_v', $list);
		$this->load->view('template/footer');

	}

	// function edit_status(){
	// 	$id_aduan=$this->input->post('id_aduan');
	// 	$status=$this->input->post('status');
	// 	$balasan=$this->input->post('balasan');
	// 	$this->teknisi_m->ubah_status($id_aduan, $status, $balasan);

	// 	$this->session->set_flashdata('alert','Status Aduan berhasil di Ubah');
	// 	redirect('teknisi');
	// }

	public function edit_status_aduan($id){
		$x['data']=$this->teknisi_m->daftar_aduan();
		$t['data']=$this->aduan_m->notif1();
		$this->load->view('template/header',$t);
		$this->load->view('teknisi/editstatus', $x);
		$this->load->view('template/footer');

	}

	function ubah_status() {
		$config['upload_path'] = './assets/gambar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){

        	if ($this->upload->do_upload('filefoto')){
        		$gbr = $this->upload->data();
                //Compress Image
        		$config['image_library']='gd2';
        		$config['source_image']='./assets/gambar/'.$gbr['file_name'];
        		$config['create_thumb']= FALSE;
        		$config['maintain_ratio']= FALSE;
        		$config['quality']= '100%';
                // $config['width']= 600;
                // $config['height']= 400;
        		$config['new_image']= './assets/gambar/'.$gbr['file_name'];
        		$this->load->library('image_lib', $config);
        		$this->image_lib->resize();

        		$id_aduan=$this->input->post('id_aduan');
        		$lampiran_balasan=$gbr['file_name'];
        		$status=$this->input->post('status');
        		$balasan=$this->input->post('balasan');
        		$this->teknisi_m->edit_status($id_aduan,$status,$balasan,$lampiran_balasan);
                $this->session->set_flashdata('alert','Status Aduan berhasil diubah');
        		redirect('teknisi/index');
        	}

        }else{
        	echo "Image yang diupload kosong";
        }

    }

	function history(){

		$x['data']=$this->teknisi_m->history();
		$t['data']=$this->aduan_m->notif1();

		$this->load->view('template/header',$t);
		$this->load->view('teknisi/historyteknisi',$x);
		$this->load->view('template/footer');
	}

}
