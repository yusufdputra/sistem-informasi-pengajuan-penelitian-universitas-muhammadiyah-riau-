<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_m extends CI_Model
{

	function cari($keyword)
	{
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->like('kode_pengajuan', $keyword);
		return $this->db->get()->result();
	}

	function byID($id)
	{
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->where('id_pengajuan', $id);
		return $this->db->get()->row();
	}

	function arsip($tanggal, $filter)
	{
		$this->db->select('*');
		$this->db->from('pengajuan');
		if ($filter == null || $filter == 'bulan') {
			$this->db->where('MONTH(tanggal_pengajuan)', date('m', strtotime($tanggal)));
			$this->db->where('YEAR(tanggal_pengajuan)', date('Y', strtotime($tanggal)));
		}else if ($filter == 'tahun') {
			
			$this->db->where('YEAR(tanggal_pengajuan)', $tanggal);
		}
		$this->db->order_by('tanggal_pengajuan', 'DESC');
		return $this->db->get()->result();
	}
	function pengajuan_mahasiswa()
	{
		$nim = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->where('nim', $nim);
		return $this->db->get()->result();
	}

	function notif()
	{
		$hasil = $this->db->query("SELECT * FROM `pengajuan` ORDER BY `pengajuan`.`tanggal_pengajuan` DESC LIMIT 5");
		return $hasil;
	}

	function proses_pengajuan($data, $kondisi)
	{
		$this->db->update('pengajuan', $data, $kondisi);
		return TRUE;
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('pengajuan');
		return TRUE;
	}
	function hapus_pengajuan($id_pengajuan)
	{
		$hapus = $this->db->query("DELETE FROM pengajuan  WHERE id_pengajuan = $id_pengajuan");
		return $hapus;
	}

	function show_pengguna()
	{
		$hasil = $this->db->query("SELECT * FROM user");
		return $hasil;
	}

	function detail_user($id_user)
	{
		$where  = array(
			'id_user' => $id_user
		);
		$sql = "SELECT * FROM user  WHERE id_user = $id_user";
		// $sql = "SELECT * FROM aduan JOIN user ON aduan.id_user=user.id_user WHERE id_aduan = ?";
		return $this->db->query($sql, $where)->result();;
	}
	function update_user($data, $kondisi)
	{
		$this->db->update('user', $data, $kondisi);
		return TRUE;
	}

	function pengajuan_admin()
	{
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->where('status_pengajuan', 'Menunggu verifikasi');
		return $this->db->get()->result();
	}
	function pengajuan_admin1()
	{
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->where('status_pengajuan', 'Ditolak');
		return $this->db->get()->result();
	}

	function pengajuan_prodi()
	{
		$x = $this->session->userdata('username');
		// return $this->db->query("SELECT pg.*, u.nama as nama_user FROM `pengajuan`as pg INNER join user u ON u.level = pg.jurusan where pg.status_pengajuan = 'Sedang diproses' AND u.username = '$x' ")->result();
		$this->db->select('pg.*, u.nama as nama_user');
		$this->db->from('pengajuan pg');
		$this->db->join('user u', 'pg.jurusan = u.level');
		$this->db->where('pg.status_pengajuan', 'Sedang diproses');
		$this->db->where('u.username', $x);
		return $this->db->get()->result();
	}
}
