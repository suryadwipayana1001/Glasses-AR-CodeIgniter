<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class detailtransaksi extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
	}
	 function index()
	{
		// $id_pemesanan = idpemesanan();
		// var_dump($id_pemesanan);
		// $id_pemesanan=$this->uri->segment(3);

	}

	public function idpemesanan()
	{
	  $id_pemesanan =  $this->uri->segment(3);

	 $x['data']=$this->m_pemesanan->detail_pemesanan($id_pemesanan);
	
	  
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_detailtransaksi",$x);
		$this->load->view("t_users/footer");

	}
}
?>