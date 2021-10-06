<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	function countall(){
		$hasil="Select Count(*) as jumlah From pengajuan";
		return $this->db->query($hasil)->result_array();
	}
	function count1(){
		$hasil="Select Count(*) as jumlah From pengajuan WHERE status_pengajuan ='Menunggu verifikasi'";
		return $this->db->query($hasil)->result_array();
	}	
	function count2(){
		$hasil="Select Count(*) as jumlah From pengajuan WHERE status_pengajuan ='Sedang diproses'";
		return $this->db->query($hasil)->result_array();
	}	
	function count3(){
		$hasil="Select Count(*) as jumlah From pengajuan WHERE status_pengajuan ='Ditolak'";
		return $this->db->query($hasil)->result_array();
	}		
}
