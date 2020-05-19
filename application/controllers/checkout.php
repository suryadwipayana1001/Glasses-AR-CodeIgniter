<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class checkout extends CI_Controller{

	public function index()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_checkout");		
		$this->load->view("t_users/footer");

	}
}
?>