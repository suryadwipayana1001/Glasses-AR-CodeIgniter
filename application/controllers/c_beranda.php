<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class c_beranda extends CI_Controller{

	public function index()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_beranda");		
		$this->load->view("t_users/footer");

	}
}
?>