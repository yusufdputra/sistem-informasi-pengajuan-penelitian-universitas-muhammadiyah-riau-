<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi_m extends CI_Model {

	function daftar_aduan(){
		$x = $this->session->userdata('username');
		$hasil=$this->db->query("SELECT * FROM aduan JOIN user ON aduan.username=user.username WHERE aduan.teknisi='$x' and aduan.status='Belum Dikerjakan' or aduan.teknisi='$x' and aduan.status='Sedang Dikerjakan'");
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

	function ubah_status($id_aduan, $status, $balasan){
		$tanggal_balasan = date('Y-m-d');
		$hasil=$this->db->query("UPDATE aduan SET status = '$status', balasan = '$balasan', tanggal_balasan = '$tanggal_balasan' WHERE id_aduan = $id_aduan");
		return $hasil;
	}

	function edit_status($id_aduan, $status, $balasan, $lampiran_balasan){
		$tanggal_balasan = date('Y-m-d');
		$hasil=$this->db->query("UPDATE `aduan` SET `status` = '$status', `balasan` = '$balasan', `tanggal_balasan` = '$tanggal_balasan', `lampiran_balasan` = '$lampiran_balasan' WHERE `aduan`.`id_aduan` = $id_aduan;");
		return $hasil;
	}

	function history(){
		$x = $this->session->userdata('username');

		$hasil=$this->db->query("SELECT * FROM `aduan` WHERE teknisi='$x' and status='selesai' or teknisi='$x' and status='tidak dikerjakan'");
		return $hasil;
	}

}
