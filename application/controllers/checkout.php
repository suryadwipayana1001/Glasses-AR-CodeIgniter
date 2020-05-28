<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class checkout extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('m_pemesanan');
}
	function index()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_checkout");		
		$this->load->view("t_users/footer");

	}
	function simpan_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');

		$alamat_pemesanan=$this->input->post('alamat_pemesanan');
		$kodepos_pemesanan=$this->input->post('kodepos_pemesanan');
		$provinsi_pemesanan=$this->input->post('provinsi_pemesanan');
		$kabupaten_pemesanan=$this->input->post('kabupaten_pemesanan');
		$kecamatan_pemesanan=$this->input->post('kecamatan_pemesanan');
		$nama_pemesanan=$this->input->post('nama_pemesanan');
		$nohp_pemesanan=$this->input->post('nohp_pemesanan');
		$this->m_pemesanan->simpan_pemesanan($id_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$nama_pemesanan,$nohp_pemesanan);
		redirect('checkout');
	}
}
?>