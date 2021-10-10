<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_m extends CI_Model
{
	function select()
	{
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->where('deleted_at ', NULL);
		return $this->db->get()->result();
	}

	function selectById($id)
	{
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->where('id', $id);

		return $this->db->get()->row();
	}

	function update($data, $kondisi)
	{
		$this->db->update('dosen', $data, $kondisi);
		return TRUE;
	}

	function hapus($data, $kondisi)
	{
		$this->db->update('dosen', $data, $kondisi);
		return TRUE;
	}

	function getDosenProdi($prodi)
	{
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->where('deleted_at ', NULL);
		$this->db->where('jurusan' , $prodi);
		return $this->db->get()->result();
	}
}
