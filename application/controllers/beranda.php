<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class beranda extends CI_Controller{

	public function index()
	{
		if($this->session->logged_in == FALSE){
            redirect('login');
        }else{
        	
        	if($this->session->level == 'Admin'){
	            $this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_beranda");
				$this->load->view("t_admin/footer");
			} else {
				redirect('beranda/c_beranda');
			}
        }
		
	}
	public function c_beranda()
	{
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_beranda");		
		$this->load->view("t_users/footer");

	}
}
?>