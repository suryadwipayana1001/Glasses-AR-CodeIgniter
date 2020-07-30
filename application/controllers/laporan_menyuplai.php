<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_menyuplai extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_menyuplai');
	}
	function index(){
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$this->_rules();
		if($this->form_validation->run()== FALSE){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_menyuplai->show_menyuplai();
				$x['data1']=$this->m_menyuplai->laporan_menyuplai();
				$x['data2']=$this->m_menyuplai->laporan_menyuplai1();
				

				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporanmenyuplai",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
		}else{
				if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$a['data']=$this->m_menyuplai->laporan_menyuplaifilter($dari,$sampai);
				$a['data1']=$this->m_menyuplai->laporan_menyuplaifilter1($dari,$sampai);
				$a['data2']=$this->m_menyuplai->laporan_menyuplaifilter2($dari,$sampai);
			/*	var_dump($d);
				die();*/
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporanmenyuplaifilter",$a);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
		}
		
	}

	public function _rules(){
		$this->form_validation->set_rules('dari','Dari Tanggal','required');
		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
}

public function print_laporan(){
 	$x['title'] ="Print Laporan Transaksi";
 	$a['data']=$this->m_menyuplai->show_menyuplai();
 	$a['data1']=$this->m_menyuplai->laporan_menyuplai();
 	$a['data2']=$this->m_menyuplai->laporan_menyuplai1();
 	$this->load->view("t_admin/header",$x);
	$this->load->view("v_laporan/v_printmenyuplai",$a);
 }
 public function print_laporanfilter(){
 	$dari = $this->input->get('dari');
 	$sampai = $this->input->get('sampai');
 	$x['title'] ="Print Laporan Transaksi";
 	$a['data']=$this->m_menyuplai->laporan_menyuplaifilter($dari,$sampai);
 	$a['data1']=$this->m_menyuplai->laporan_menyuplaifilter1($dari,$sampai);
 	$a['data2']=$this->m_menyuplai->laporan_menyuplaifilter2($dari,$sampai);
 	$this->load->view("t_admin/header",$x);
	$this->load->view("v_laporan/v_printmenyuplaifilter",$a);
 }
 
}

?>