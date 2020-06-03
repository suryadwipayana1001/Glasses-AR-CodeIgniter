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
	public function index()
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

	function show_moscot(){
	$jumhal = 6; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

		$x['data']=$this->m_barang->show_moscot($mulai, $jumhal);
		$x['tot']=$this->m_barang->count_barang();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");
	}

	function show_rayband(){
	$jumhal = 6; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

		$x['data']=$this->m_barang->show_rayband($mulai, $jumhal);
		$x['tot']=$this->m_barang->count_barang();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");
	}
}
?>