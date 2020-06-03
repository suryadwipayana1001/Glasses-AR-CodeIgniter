<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{

	function index(){
		$this->load->view("t_admin/header");

		$this->load->view("v_admin/v_login");
	}
}
?>