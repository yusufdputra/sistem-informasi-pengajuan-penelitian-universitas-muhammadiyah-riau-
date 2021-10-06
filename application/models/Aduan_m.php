<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan_m extends CI_Model {

	// public function list_aduan(){
	// 	$query = $this->db->query("SELECT * FROM aduan JOIN user ON aduan.id_user=user.id_user");
	// 	return $query;
	// }
	function show_aduan(){
		$hasil=$this->db->query("SELECT * FROM aduan JOIN user ON aduan.username=user.username WHERE aduan.status='belum dikerjakan' or aduan.status='sedang dikerjakan' ORDER BY `aduan`.`tanggal_aduan` DESC");
		return $hasil;
	}

	function detail_aduan($id){
		$where  = array(
			'id_aduan'=>$id
		);
		$sql = "SELECT * FROM aduan JOIN user ON aduan.username=user.username WHERE id_aduan = $id";
		// $sql = "SELECT * FROM aduan JOIN user ON aduan.id_user=user.id_user WHERE id_aduan = ?";
		return $this->db->query($sql, $where);
	}

	function pilih_unit($id_aduan, $teknisi){
		
		$hasil=$this->db->query("UPDATE aduan SET teknisi = '$teknisi' WHERE id_aduan = $id_aduan");
		return $hasil;
	}

	function hapus_aduan($id_aduan){
		$hapus=$this->db->query("DELETE FROM aduan  WHERE id_aduan = $id_aduan");
		return $hapus;
	}

	function show_pengguna(){
		$hasil=$this->db->query("SELECT * FROM user");
		return $hasil;
	}

	function hapus_pengguna($id_user){
		$hapus=$this->db->query("DELETE FROM user WHERE id_user = $id_user");
		return $hapus;
	}

	function ajukan(){
		$x = $this->session->userdata('username');
		$hasil=$this->db->query("SELECT * FROM aduan JOIN user ON aduan.username=user.username WHERE aduan.username='$x' ORDER by aduan.tanggal_aduan DESC");
		return $hasil;
	}

	function tambah($jenis_aduan,$lokasi,$keterangan,$lampiran){

		$x = $this->session->userdata('username');
		$tanggal_aduan = date('Y-m-d');
		$status = 'Belum Dikerjakan';

		$hasil=$this->db->query("INSERT INTO aduan (jenis_aduan,tanggal_aduan,lokasi,keterangan,lampiran,status,username) VALUES ('$jenis_aduan','$tanggal_aduan','$lokasi','$keterangan','$lampiran','$status','$x')");
		return $hasil;
	}

	function ubah($id_aduan,$jenis_aduan,$lokasi,$keterangan,$lampiran){

		$hasil=$this->db->query("UPDATE `aduan` SET `jenis_aduan` = '$jenis_aduan', `lokasi` = '$lokasi', `keterangan` = '$keterangan', `lampiran` = '$lampiran' WHERE `aduan`.`id_aduan` = $id_aduan;");
		return $hasil;
	}

	function profil(){
		$x = $this->session->userdata('username');
		$hasil=$this->db->query("SELECT * FROM user where username = '$x' ");
		return $hasil;
	}

	function ubah_profil($id_user,$nomor_identitas,$nama,$username,$jabatan,$password,$foto){

		$hasil=$this->db->query("UPDATE `user` SET `nomor_identitas` = '$nomor_identitas', `nama` = '$nama', `username` = '$username', `jabatan` = '$jabatan', `password` = '$password', `foto` = '$foto' WHERE `user`.`id_user` = $id_user;");
		return $hasil;
	}

	function detail_profil($id){
		$where  = array(
			'id_user'=>$id
		);
		$sql = "SELECT * FROM user WHERE id_user = $id";
		// $sql = "SELECT * FROM aduan JOIN user ON aduan.id_user=user.id_user WHERE id_aduan = ?";
		return $this->db->query($sql, $where);
	}

	function history(){
		$x = $this->session->userdata('username');

		$hasil=$this->db->query("SELECT * FROM `aduan` WHERE username='$x' and status='selesai' or username='$x' and status='tidak dikerjakan' ORDER by aduan.tanggal_aduan DESC");
		return $hasil;
	}

	function historyA(){
		$x = $this->session->userdata('username');

		$hasil=$this->db->query("SELECT * FROM aduan JOIN user ON aduan.username=user.username WHERE status='selesai' or status='BATAL' ORDER by aduan.tanggal_aduan DESC");
		return $hasil;
	}

	function add_rating($id_aduan, $rating){
		
		$hasil=$this->db->query("UPDATE aduan SET rating = '$rating' WHERE id_aduan = $id_aduan");
		return $hasil;
	}

	function notif(){

		$hasil=$this->db->query("SELECT * FROM `aduan` ORDER BY `aduan`.`tanggal_aduan` DESC LIMIT 5");
		return $hasil;
	}

	function notif1(){

		$x = $this->session->userdata('username');
		$hasil=$this->db->query("SELECT * FROM aduan WHERE aduan.username='$x' ORDER BY aduan.tanggal_aduan DESC LIMIT 5");
		return $hasil;
	}

}
