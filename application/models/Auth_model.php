<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	public function cekUsername($username)
	{
		return $this->db->get_where('user', ['username' => $username]);
	}

	public function getAdmin($u, $username)
	{
		$this->db->from("user");
		$this->db->like('username', $username);
		$this->db->like('level', 'admin');
		return $this->db->get();
	}

	function register($table, $data)
	{
		$this->db->insert($table, $data);
	}
	public function get($id_user = null)
	{
		$this->db->select('*');
		$this->db->from('user');
		if ($id_user != null) {
			$this->db->where('id_user', $id_user);
		}

		return $this->db->get();
	}
}
