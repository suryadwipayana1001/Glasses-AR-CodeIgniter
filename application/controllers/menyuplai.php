<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menyuplai extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_menyuplai');
		$this->load->model('m_barang');
		$this->load->model('m_supplier');
	}

	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_menyuplai->show_menyuplai();
				$x['barang']=$this->m_barang->show_barang1();
				$x['supplier']=$this->m_supplier->show_supplier();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_menyuplai",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
	}
	function simpan_menyuplai(){
		$id_menyuplai=$this->input->post('id_menyuplai');
		$id_barang=$this->input->post('id_barang');
		$id_supplier=$this->input->post('id_supplier');
		$harga_menyuplai=$this->input->post('harga_menyuplai');
		$jumlah_menyuplai=$this->input->post('jumlah_menyuplai');
		$totalharga_menyuplai=$this->input->post('totalharga_menyuplai');
		$tanggal_menyuplai=$this->input->post('tanggal_menyuplai');
		$this->m_menyuplai->simpan_menyuplai($id_menyuplai,$id_barang,$id_supplier,$harga_menyuplai,$jumlah_menyuplai,$totalharga_menyuplai,$tanggal_menyuplai);
		redirect('menyuplai');
	}
	function edit_menyuplai(){
		$id_menyuplai=$this->input->post('id_menyuplai');
		$id_barang=$this->input->post('id_barang');
		$id_supplier=$this->input->post('id_supplier');
		$harga_menyuplai=$this->input->post('harga_menyuplai');
		$jumlah_menyuplai=$this->input->post('jumlah_menyuplai');
		$totalharga_menyuplai=$this->input->post('totalharga_menyuplai');
		$tanggal_menyuplai=$this->input->post('tanggal_menyuplai');
		$this->m_menyuplai->edit_menyuplai($id_menyuplai,$id_barang,$id_supplier,$harga_menyuplai, $jumlah_menyuplai,$totalharga_menyuplai,$tanggal_menyuplai);
		redirect('menyuplai');
	}

	function hapus_menyuplai(){
		$id_menyuplai=$this->input->post('id_menyuplai');
		$this->m_menyuplai->hapus_menyuplai($id_menyuplai);
		redirect('menyuplai');

	}
	public function detail_menyuplai()
	{
	  	$id_menyuplai =  $this->uri->segment(3);
	 	$x['data']=$this->m_menyuplai->detail_menyuplai($id_menyuplai);
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_detailmenyuplai",$x);
		$this->load->view("t_admin/footer");

}
}
?>