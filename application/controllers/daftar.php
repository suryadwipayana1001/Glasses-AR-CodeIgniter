<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class daftar extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_user');
	$this->load->library('form_validation');
}
	public function index()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_daftar");		
		$this->load->view("t_users/footer");

	}
function simpan_user(){
		$id_user=$this->input->post('id_user');
		$nama_user=$this->input->post('nama_user');
		$email_user=$this->input->post('email_user');
		$password_user=$this->input->post('password_user');
		$tanggallahir_user=$this->input->post('tanggallahir_user');
		$level_user=$this->input->post('level_user');
		$this->form_validation->set_rules('nama_user','Nama','required|max_length[5]');
		$this->form_validation->set_rules('email_user','Email','required|max_length[5]');
		$this->form_validation->set_rules('password_user','Password','required|max_length[5]');
		$this->form_validation->set_rules('tanggallahir_user','Tanggal','required');
		if($this->form_validation->run() != false){
			$this->m_user->simpan_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$level_user);
		redirect('daftar');
		}else{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_daftar");		
		$this->load->view("t_users/footer");
		}
	}
		
}
?>