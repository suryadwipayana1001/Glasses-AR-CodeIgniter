<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ar extends CI_Controller{
function __construct(){
		parent::__construct();
	}
	 function index()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_ar");
		$this->load->view("t_users/footer");

	}
}