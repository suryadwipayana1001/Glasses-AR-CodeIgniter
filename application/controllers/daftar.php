<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class daftar extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_user');
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
			$this->m_user->simpan_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$level_user);
		redirect('daftar');
	
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_daftar");		
		$this->load->view("t_users/footer");
		}
		
}
?>