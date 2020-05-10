<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class keranjang extends CI_Controller{
function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_keranjang");
		$this->load->view("t_users/footer");

	}
}
?>