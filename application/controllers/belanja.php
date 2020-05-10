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
		$x['data']=$this->m_barang->show_barang();
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_belanja",$x);
		$this->load->view("t_users/footer");

	}
}
?>