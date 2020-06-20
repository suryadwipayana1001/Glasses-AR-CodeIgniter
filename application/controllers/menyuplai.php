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
		$x['data']=$this->m_menyuplai->show_menyuplai();
		$x['barang']=$this->m_barang->show_barang1();
		$x['supplier']=$this->m_supplier->show_supplier();
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_menyuplai",$x);
		$this->load->view("t_admin/footer");
	}

	function simpan_menyuplai(){
		$id_menyuplai=$this->input->post('id_menyuplai');
		$barang=$this->input->post('id_barang');

        $barang = explode('|', $barang);
        $id_barang = $barang[0];
        $nama_barang = $barang[1];
		$id_supplier=$this->input->post('id_supplier');
		$harga_menyuplai=$this->input->post('harga_menyuplai');
		$jumlah_menyuplai=$this->input->post('jumlah_menyuplai');
		$totalharga_menyuplai=$this->input->post('totalharga_menyuplai');
		$tanggal_menyuplai=$this->input->post('tanggal_menyuplai');
		$this->m_menyuplai->simpan_menyuplai($id_menyuplai,$id_barang,$nama_barang,$id_supplier,$harga_menyuplai,$jumlah_menyuplai,$totalharga_menyuplai,$tanggal_menyuplai);
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

	function transaksi(){
		$harga_menyuplai('harga_menyuplai');
		$jumlah_menyuplai('jumlah_menyuplai');

		$hasil=$harga_menyuplai * $jumlah_menyuplai;
		return hasil;
	}
}
?>