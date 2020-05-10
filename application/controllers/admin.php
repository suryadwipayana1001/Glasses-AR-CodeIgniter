<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}

	function index(){
		$x['data']=$this->m_admin->show_admin();
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_admin",$x);
		$this->load->view("t_admin/footer");
	}

	function simpan_admin(){
		$id_admin=$this->input->post('id_admin');
		$username_admin=$this->input->post('username_admin');
		$password_admin=$this->input->post('password_admin');
		$this->m_admin->simpan_admin($id_admin,$username_admin,$password_admin);
		redirect('admin');
	}
	function edit_admin(){
		$id_admin=$this->input->post('id_admin');
		$username_admin=$this->input->post('username_admin');
		$password_admin=$this->input->post('password_admin');
		$this->m_admin->edit_admin($id_admin,$username_admin, $password_admin);
		redirect('admin');
}

	function hapus_admin(){
		$id_admin=$this->input->post('id_admin');
		$this->m_admin->hapus_admin($id_admin);
		redirect('admin');


	}
}
?>