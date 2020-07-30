<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_dipesan');
	}
	function index(){
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		/*var_dump($dari);
		die();*/
		$this->_rules();
		if($this->form_validation->run()== FALSE){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_dipesan->laporan_dipesan();
				$x['data1']=$this->m_dipesan->laporan_dipesan1();
				$x['data2']=$this->m_dipesan->laporan_dipesan2();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporanpemesanan",$x);
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
				$a['data']=$this->m_dipesan->laporan_dipesanfilter($dari,$sampai);
				$a['data1']=$this->m_dipesan->laporan_dipesanfilter1($dari,$sampai);
				$a['data2']=$this->m_dipesan->laporan_dipesanfilter2($dari,$sampai);
			/*	var_dump($d);
				die();*/
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporanpemesananfilter",$a);
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
 	$a['data']=$this->m_dipesan->laporan_dipesan();
 	$a['data1']=$this->m_dipesan->laporan_dipesan1();
 	$a['data2']=$this->m_dipesan->laporan_dipesan2();
 	$this->load->view("t_admin/header",$x);
	$this->load->view("v_laporan/v_printpemesanan",$a);
 }
 public function print_laporanfilter(){
 	$dari = $this->input->get('dari');
 	$sampai = $this->input->get('sampai');
 	$x['title'] ="Print Laporan Transaksi";
 	$a['data']=$this->m_dipesan->laporan_dipesanfilter($dari,$sampai);
 	$a['data1']=$this->m_dipesan->laporan_dipesanfilter1($dari,$sampai);
 	$a['data2']=$this->m_dipesan->laporan_dipesanfilter2($dari,$sampai);
 	$this->load->view("t_admin/header",$x);
	$this->load->view("v_laporan/v_printpemesananfilter",$a);
 }
 
}

?>