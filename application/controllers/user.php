<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	function index(){
		$x['data']=$this->m_user->show_user();
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_user",$x);
		$this->load->view("t_admin/footer");
	}
	function simpan_user(){
		$id_user=$this->input->post('id_user');
		$nama_user=$this->input->post('nama_user');
		$email_user=$this->input->post('email_user');
		$password_user=$this->input->post('password_user');
		$tanggallahir_user=$this->input->post('tanggallahir_user');
		$level_user=$this->input->post('level_user');
		$this->m_user->simpan_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$level_user);
		redirect('user');
	}
	function edit_user(){
		$id_user=$this->input->post('id_user');
		$nama_user=$this->input->post('nama_user');
		$email_user=$this->input->post('email_user');
		$password_user=$this->input->post('password_user');
		$tanggallahir_user=$this->input->post('tanggallahir_user');
		$level_user=$this->input->post('level_user');
		$this->m_user->edit_user($id_user,$nama_user, $email_user,$password_user,$tanggallahir_user,$level_user);
		redirect('user');
}

	function hapus_user(){
		$id_user=$this->input->post('id_user');
		$this->m_user->hapus_user($id_user);
		redirect('user');


	}
}
?>