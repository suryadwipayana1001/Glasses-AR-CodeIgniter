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
	function simpan_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');
		$nama_pemesanan=$this->input->post('nama_pemesanan');
		$provinsi_pemesanan=$this->input->post('provinsi_pemesanan');
		$kabupaten_pemesanan=$this->input->post('kabupaten_pemesanan');
		$kecamatan_pemesanan=$this->input->post('kecamatan_pemesanan');
		$alamat_pemesanan=$this->input->post('alamat_pemesanan');
		$kodepos_pemesanan=$this->input->post('kodepos_pemesanan');
		$nohp_pemesanan=$this->input->post('nohp_pemesanan');
		$kurir_pemesanan=$this->input->post('kurir_pemesanan');
		$status_pemesanan=$this->input->post('status_pemesanan');
		$this->m_pemesanan->simpan_pemesanan($id_pemesanan,$nama_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$nohp_pemesanan,$kurir_pemesanan,$status_pemesanan);
		redirect('pemesanan');
	}
	function edit_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');
		$status_pemesanan=$this->input->post('status_pemesanan');
		$this->m_pemesanan->edit_pemesanan($id_pemesanan,$status_pemesanan);
		redirect('pemesanan');
	}

	function hapus_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');
		$this->m_pemesanan->hapus_pemesanan($id_pemesanan);
		redirect('pemesanan');


	}
}
?>