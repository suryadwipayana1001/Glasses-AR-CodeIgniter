<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_customer');
	}

	function index(){
		$x['data']=$this->m_customer->show_customer();
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_customer",$x);
		$this->load->view("t_admin/footer");
	}

	function hapus_customer(){
		$id_customer=$this->input->post('id_customer');
		$this->m_customer->hapus_customer($id_customer);
		redirect('customer');


	}
}
?>