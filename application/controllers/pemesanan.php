<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
	}

	function index(){
		$x['data']=$this->m_pemesanan->show_pemesanan();
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_pemesanan",$x);
		$this->load->view("t_admin/footer");
	}

	function hapus_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');
		$this->m_pemesanan->hapus_pemesanan($id_pemesanan);
		redirect('pemesanan');


	}
}
?>