<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class transaksi extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
	}
	 function index()
	{
		$jumhal = 5; // jumlah halaman per page
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

		$x['data']=$this->m_pemesanan->show_pemesanan1($mulai, $jumhal);
		$x['tot']=$this->m_pemesanan->count_pemesanan();
		$x['jumhal']=$jumhal;
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_transaksi",$x);
		$this->load->view("t_users/footer");

	}
	public function detail()
	{
	  $id_pemesanan =  $this->uri->segment(3);

	 $x['data']=$this->m_pemesanan->detail_pemesanan($id_pemesanan);
	
	  
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_detailtransaksi",$x);
		$this->load->view("t_users/footer");
}
 	function hapus_transaksi(){

	    	$id_pemesanan=$this->input->post('id_pemesanan');
	    	$this->m_pemesanan->hapus_pemesanan($id_pemesanan);
	    	redirect('transaksi');


	    }
}
?>