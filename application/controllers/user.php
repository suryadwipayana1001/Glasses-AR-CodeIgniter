<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_user->show_user();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_user",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
		
	}
	
	function simpan_user(){
		$id_user=$this->input->post('id_user');
		$nama_user=$this->input->post('nama_user');
		$email_user=$this->input->post('email_user');
		$password_user=$this->input->post('password_user');
		$tanggallahir_user=$this->input->post('tanggallahir_user');
		$alamat_user=$this->input->post('alamat_user');
		$nohp_user=$this->input->post('nohp_user');
		$jeniskelamin_user=$this->input->post('jeniskelamin_user');
		$level_user=$this->input->post('level_user');
		$this->m_user->simpan_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user,$level_user);
		redirect('user');
	}
	function edit_user(){
		$id_user=$this->input->post('id_user');
		$nama_user=$this->input->post('nama_user');
		$email_user=$this->input->post('email_user');
		$password_user=$this->input->post('password_user');
		$tanggallahir_user=$this->input->post('tanggallahir_user');
		$alamat_user=$this->input->post('alamat_user');
		$nohp_user=$this->input->post('nohp_user');
		$jeniskelamin_user=$this->input->post('jeniskelamin_user');
		$level_user=$this->input->post('level_user');
		$this->m_user->edit_user($id_user,$nama_user, $email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user,$level_user);
		redirect('user');
	}

	function hapus_user(){
		$id_user=$this->input->post('id_user');
		$this->m_user->hapus_user($id_user);
		redirect('user');


	}
	 public function detail_user()
	{
	  	$id_user =  $this->uri->segment(3);
	 	$x['data']=$this->m_user->detail_user($id_user);
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_detailuser",$x);
		$this->load->view("t_admin/footer");

}
}
?>