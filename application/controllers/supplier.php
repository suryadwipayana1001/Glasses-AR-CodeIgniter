<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_supplier');
	}

	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_supplier->show_supplier();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_supplier",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
		
	}

	function simpan_supplier(){
		$id_supplier=$this->input->post('id_supplier');
		$nama_supplier=$this->input->post('nama_supplier');
		$alamat_supplier=$this->input->post('alamat_supplier');
		$nohp_supplier=$this->input->post('nohp_supplier');
		$email_supplier=$this->input->post('email_supplier');
		$this->m_supplier->simpan_supplier($id_supplier,$nama_supplier,$alamat_supplier,$nohp_supplier,$email_supplier);
		redirect('supplier');
	}
	function edit_supplier(){
		$id_supplier=$this->input->post('id_supplier');
		$nama_supplier=$this->input->post('nama_supplier');
		$alamat_supplier=$this->input->post('alamat_supplier');
		$nohp_supplier=$this->input->post('nohp_supplier');
		$email_supplier=$this->input->post('email_supplier');
		$this->m_supplier->edit_supplier($id_supplier,$nama_supplier, $alamat_supplier,$nohp_supplier,$email_supplier);
		redirect('supplier');
	}

	function hapus_supplier(){
		$id_supplier=$this->input->post('id_supplier');
		$this->m_supplier->hapus_supplierfk($id_supplier);
		$this->m_supplier->hapus_supplier($id_supplier);
		redirect('supplier');


	}
	public function detail_supplier()
	{
	  	$id_supplier =  $this->uri->segment(3);
	 	$x['data']=$this->m_supplier->detail_supplier($id_supplier);
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_detailsupplier",$x);
		$this->load->view("t_admin/footer");

}
}
?>