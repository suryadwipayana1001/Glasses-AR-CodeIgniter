<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class beranda extends CI_Controller{

	public function index()
	{
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_beranda");
		$this->load->view("t_admin/footer");
	}
}
?>