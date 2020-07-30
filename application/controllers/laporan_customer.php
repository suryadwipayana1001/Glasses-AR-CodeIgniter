<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_customer extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}
	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_user->laporan_customer();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporancustomer",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
		
	}
	function print_laporan(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_user->laporan_customer();
				$this->load->view("t_admin/header");
				$this->load->view("v_laporan/v_printcustomer",$x);
			} else {
				redirect('c_beranda');
			}
		}
	}
}

?>