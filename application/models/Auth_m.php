<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model{
	public function login($post){
		$username = $this->input->post('val-username', TRUE);
		$pass = $this->input->post('val-password', TRUE);
		$this->db->select('*');
		$this->db->from('kursus_user');
		$this->db->where('npm',$username);
		$this->db->where('password',sha1($pass));
		$query = $this->db->get();
		return $query;
	}
	public function get($id = null){
		$this->db->from('kursus_user');
		if($id != null){
			$this->db->where('id_user',$id);
		}
		$query = $this->db->get();
		return $query;
	}
}
