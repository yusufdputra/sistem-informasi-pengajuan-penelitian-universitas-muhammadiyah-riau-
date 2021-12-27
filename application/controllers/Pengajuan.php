<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

    public function __construct()
    {
        // parent::__construct();
        // $this->load->model('Pengajuan_m');
        // $this->load->library('pagination');
        parent::__construct();
        $this->load->model('dosen_m');
        $this->load->model('Pengajuan_m');
        $this->load->model('auth_model');
        if (!$this->session->logged_in) {
            redirect('login');
        }
    }


    public function index()
    {

        $t['data'] = $this->Pengajuan_m->notif();
        $this->load->view('template/header', $t);
        $this->load->view('pengaju/pengajuan_v');
        $this->load->view('template/footer');
    }
    public function add_pengajuan()
    {
        $nomor = $this->db->query("SELECT * FROM pengajuan")->num_rows();
        $jam = date('his');
        $kode = "PNGJN" . strval($nomor + 1) . strval($jam);
        $tanggal_pengajuan = date('Y-m-d');
        // $pengaju = $this->session->userdata("username");
        $nama = $this->session->userdata('nama');
        $username = $this->session->userdata('username');
        $jurusan = $this->session->userdata('jurusan');
        $email = $this->session->userdata('email');
        $url_pdf = $this->savePDF();

        $data = array(
            'nama' => $nama,
            'nim' => $username,
            'jurusan' => $jurusan,
            'email' => $email,
            'judul1' => $this->input->post('judul1'),
            'judul2' => $this->input->post('judul2'),
            'judul3' => $this->input->post('judul3'),
            'status_pengajuan' => "Menunggu verifikasi",
            'kode_pengajuan' => $kode,
            'tanggal_pengajuan' => $tanggal_pengajuan,
            'url_persyaratan' => $url_pdf,
        );
        $this->db->insert('pengajuan', $data);
        $this->session->set_flashdata('alert', 'PENGAJUAN BERHASIL. ID PENGAJUAN ANDA : <b style="font-size:14pt">' . $data['kode_pengajuan'] . '</b>');
        redirect('pengajuan');
    }

    public function tracking()
    {
        $t['data'] = $this->Pengajuan_m->notif();

        $data['data'] = $this->Pengajuan_m->pengajuan_mahasiswa();
        $this->load->view('template/header', $t);
        $this->load->view('pengaju/tracking_v', $data);
        $this->load->view('template/footer');
    }

    public function search()
    {
        $t['data'] = $this->Pengajuan_m->notif();
        $keyword = $this->input->get('keyword');

        $data['data'] = $this->Pengajuan_m->cari($keyword);
        $this->load->view('template/header', $t);
        $this->load->view('pengaju/search', $data);
        $this->load->view('template/footer');
    }

    public function arsip()
    {
        $filter = $this->input->post('type');
        $tanggal = date('F Y');
        if ($filter == 'bulan') {
            $tanggal =  $this->input->post('date');
        } else if ($filter == 'tahun') {
            $tanggal =  $this->input->post('date');
        }

        $data['tanggal'] = $tanggal;
        $data['filter'] = $filter;
        $t['data'] = $this->Pengajuan_m->notif();
        $data['data'] = $this->Pengajuan_m->arsip($tanggal, $filter);

        $this->load->view('template/header', $t);
        $this->load->view('pengaju/arsip_v', $data);
        $this->load->view('template/footer');
    }

    public function savePDF()
    {
        $this->input->post('syarat');
        $config['upload_path']           = './assets/pdf';
        $config['allowed_types'] = 'pdf';
        $config['max_size']              = 5000;
        $config['encrypt_name']          = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('berkas')) {
            echo $this->upload->display_errors();
        } else {
            return $this->upload->data("file_name");
        }
    }

    public function cetak($id)
    {
        $this->load->library('pdfgenerator');
        $data['data'] = $this->Pengajuan_m->byID($id);

        if ($data['data']->judul1 != null) {
            $data['judul'] = $data['data']->judul1;
        }

        if ($data['data']->judul2 != null) {
            $data['judul'] = $data['data']->judul2;
        }

        if ($data['data']->judul3 != null) {
            $data['judul'] = $data['data']->judul3;
        }

        // filename dari pdf ketika didownload
        $file_pdf = 'Detail_Pengajuan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";
        $html = $this->load->view('pengaju/laporan_pdf', $data, true);
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
