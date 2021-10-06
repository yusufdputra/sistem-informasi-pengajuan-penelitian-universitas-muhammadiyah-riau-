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
        $t['data']=$this->aduan_m->notif1();
		$this->load->view('template/header',$t);
		$this->load->view('admin/detail_v', $list);
		$this->load->view('template/footer');

	}

	public function ajukan_aduan()
	{	
		$x['data']=$this->aduan_m->ajukan();
        $t['data']=$this->aduan_m->notif1();

		$this->load->view('template/header',$t);
		$this->load->view('pengadu/aduan_list',$x);
		$this->load->view('template/footer');
	}

	function tambah_aduan(){
        $t['data']=$this->aduan_m->notif1();
		$this->load->view('template/header',$t);
		$this->load->view('pengadu/tambah_v');
		$this->load->view('template/footer');
	}

	function edit_aduan($id){
		$x['data'] = $this->aduan_m->detail_aduan($id);
        $t['data']=$this->aduan_m->notif1();
		$this->load->view('template/header',$t);
		$this->load->view('pengadu/edit_v',$x);
		$this->load->view('template/footer');
	}

	function add_aduan() {
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

        		$lampiran=$gbr['file_name'];
        		$jenis_aduan=$this->input->post('jenis_aduan');
        		$lokasi=$this->input->post('lokasi');
        		$keterangan=$this->input->post('keterangan');
        		$this->aduan_m->tambah($jenis_aduan,$lokasi,$keterangan,$lampiran);

                $this->session->set_flashdata('alert','Aduan berhasil ditambah');
        		redirect('pengadu/ajukan_aduan');
        	}

        }else{
        	echo "Image yang diupload kosong";
        }

    }

    function update_aduan() {
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

        		$lampiran=$gbr['file_name'];
        		$id_aduan=$this->input->post('id_aduan');
        		$jenis_aduan=$this->input->post('jenis_aduan');
        		$lokasi=$this->input->post('lokasi');
        		$keterangan=$this->input->post('keterangan');
        		$this->aduan_m->ubah($id_aduan,$jenis_aduan,$lokasi,$keterangan,$lampiran);
                $this->session->set_flashdata('alert','Aduan berhasil diedit');
        		redirect('pengadu/ajukan_aduan');
        	}

        }else{
            $lampiran=$gbr['file_name'];
            $id_aduan=$this->input->post('id_aduan');
            $jenis_aduan=$this->input->post('jenis_aduan');
            $lokasi=$this->input->post('lokasi');
            $keterangan=$this->input->post('keterangan');
            $this->aduan_m->ubah($id_aduan,$jenis_aduan,$lokasi,$keterangan,$lampiran);
            $this->session->set_flashdata('alert','Aduan berhasil diedit');
            redirect('pengadu/ajukan_aduan');
        	// echo "Image yang diupload kosong";
        }

    }

    function hapus_aduan(){
    	$id_aduan=$this->input->post('id_aduan');

    	$this->aduan_m->hapus_aduan($id_aduan);
        
        $this->session->set_flashdata('alert','Aduan berhasil dihapus');
    	redirect('pengadu/ajukan_aduan');
    }

    function profil(){

    	$x['data']=$this->aduan_m->profil();
        $t['data']=$this->aduan_m->notif1();

      $this->load->view('template/header',$t);
      $this->load->view('pengadu/profil_v',$x);
      $this->load->view('template/footer');
  }

  function update_profil() {
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
                // $config['width']= 400;
                // $config['height']= 400;
        		$config['new_image']= './assets/gambar/'.$gbr['file_name'];
        		$this->load->library('image_lib', $config);
        		$this->image_lib->resize();

        		$foto=$gbr['file_name'];
        		$id_user=$this->input->post('id_user');
        		$nomor_identitas=$this->input->post('nomor_identitas');
        		$nama=$this->input->post('nama');
        		$username=$this->input->post('username');
        		$jabatan=$this->input->post('jabatan');
        		$password=md5($this->input->post('password'));

        		$this->aduan_m->ubah_profil($id_user,$nomor_identitas,$nama,$username,$jabatan,$password,$foto);
        		redirect('pengadu/profil');
        	}

        }else{
            $foto=$gbr['file_name'];
            $id_user=$this->input->post('id_user');
            $nomor_identitas=$this->input->post('nomor_identitas');
            $nama=$this->input->post('nama');
            $username=$this->input->post('username');
            $jabatan=$this->input->post('jabatan');
            $password=md5($this->input->post('password'));

            $this->aduan_m->ubah_profil($id_user,$nomor_identitas,$nama,$username,$jabatan,$password,$foto);
            redirect('pengadu/profil');
        	// echo "Image yang diupload kosong";
        }

    }

    function rating(){
    $id_aduan=$this->input->post('id_aduan');
    $rating=$this->input->post('rating');

    $this->aduan_m->add_rating($id_aduan, $rating);
    
    $this->session->set_flashdata('alert','Terimakasih Atas tanggapannya');
    redirect('pengadu/ajukan_aduan');
    }

    function history(){

        $x['data']=$this->aduan_m->history();
        $t['data']=$this->aduan_m->notif1();

        $this->load->view('template/header',$t);
        $this->load->view('pengadu/history_v',$x);
        $this->load->view('template/footer');
    }

    function cetak(){
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',24);
        // mencetak string 
        $pdf->Cell(278,14,'Universitas Riau',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
         $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','',14);
        $pdf->Cell(30,10,'Nama',0,0);

           $pdf->Output();

    }

}
