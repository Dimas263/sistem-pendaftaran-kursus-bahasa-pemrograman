<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Source extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Data_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('public/header');
		$this->load->view('public/welcome');
		$this->load->view('public/footer');
	}
	public function login()
	{
		check_already_login();
		$this->load->view('public/header');
		$this->load->view('auth/login');
		$this->load->view('public/footer');
	}
	public function login_process(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$this->load->model('auth_m');
			$query = $this->auth_m->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
				);
				$this->session->set_userdata($params);
				redirect(base_url('source/message?id=login_berhasil'));
			}
			else{
				redirect(base_url('source/message?id=login_gagal'));
			}
		}
	}
	public function message(){
		$this->load->view('message/header');
		$this->load->view('message/message');
		$this->load->view('message/footer');
	}
	public function home()
	{
		check_not_login();
		$this->load->view('admin/header');
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	}
	public function keluar()
	{
		$params = array('id_user','username');
		$this->session->unset_userdata($params);
		redirect(base_url('source/message?id=keluar_app'));
	}
	public function daftar_kursus(){
		check_not_login();
		$this->Data_m->addkursus();
		redirect(base_url('source/home'));
	}
	public function delete_kursus(){
		check_not_login();
		$id = $_GET['id'];
		$this->Data_m->deletekursus($id);
		redirect(base_url('source/home'));
	}
	public function tambah_kursus(){
		check_not_login();
		$this->Data_m->tambahkursus();
		redirect(base_url('source/home'));
	}
	public function update_kursus(){
		check_not_login();
		$this->Data_m->updatekursus();
		redirect(base_url('source/home'));
	}
	public function update_mahasiswa(){
		check_not_login();
		$this->Data_m->updatemahasiswa();
		redirect(base_url('source/home'));
	}
	public function delete_mahasiswa(){
		check_not_login();
		$id = $_GET['id'];
		$this->Data_m->deletemahasiswa($id);
		redirect(base_url('source/home'));
	}
}
