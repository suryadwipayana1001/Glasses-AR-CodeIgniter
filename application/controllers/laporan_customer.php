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
				redirect('beranda/c_beranda');
			}
		}
		
	}
	function search(){
		$keywoard = $this->input->post('keywoard');
		$x['data']=$this->m_user->search($keywoard);
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_laporancustomerfilter",$x);
		$this->load->view("t_admin/footer");
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
				redirect('beranda/c_beranda');
			}
		}
	}
		function print_laporanfilter(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
			$keywoard = $this->input->get('keywoard');
			$x['data']=$this->m_user->search($keywoard);
				$this->load->view("t_admin/header");
				$this->load->view("v_laporan/v_printcustomer",$x);
			} else {
				redirect('beranda/c_beranda');
			}
		}
	}
}

?>