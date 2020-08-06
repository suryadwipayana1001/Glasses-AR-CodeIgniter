<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class belanja extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index()
	{

		$jumhal = 6; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

		$x['data']=$this->m_barang->show_barang($mulai, $jumhal);
		$x['tot']=$this->m_barang->count_barang();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");

	}
	public function detail_belanja()
	{
		$id_barang =  $this->uri->segment(3);
		$x['data']=$this->m_barang->detail_barang($id_barang);
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_detailbelanja",$x);
		$this->load->view("t_users/footer");

	}

	function produk_terbaru(){
	$jumhal = 6; // jumlah halaman per page

	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;
	$x['data']=$this->m_barang->show_produkterbaru($mulai, $jumhal);
	$x['tot']=$this->m_barang->count_barang();
	$x['jumhal']=$jumhal;
	$this->load->view("t_users/header");
	$this->load->view("v_users/v_belanja",$x);
	$this->load->view("t_users/footer");
}

function show_tinggi(){
		$jumhal = 6; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

		$x['data']=$this->m_barang->show_tinggi();
		$x['tot']=$this->m_barang->count_barang();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");
	}
	function show_rendah(){
		$jumhal = 6; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

		$x['data']=$this->m_barang->show_rendah();
		$x['tot']=$this->m_barang->count_barang();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");
	}
	function search(){
		$jumhal = 6; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;
		$keywoard = $this->input->post('keywoard');
		$x['data']=$this->m_barang->search($keywoard);
		$x['tot']=$this->m_barang->count_barang();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");
	}
}
?>