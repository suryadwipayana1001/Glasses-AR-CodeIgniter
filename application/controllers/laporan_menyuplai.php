<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_menyuplai extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_menyuplai');
	}
	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_menyuplai->show_menyuplai();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporanmenyuplai",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('c_beranda');
			}
		}
		
	}

	function laporan(){
	$this->load->library('dompdf_gen');
		$data['menyuplai'] = $this->m_menyuplai->show_menyuplai();
		$this->load->view('v_laporan/pdf_menyuplai',$data);

		$paper_size ='A4';
		$orientation='Landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_menyuplai.pdf",array('Attachment'=>0));
	}
}

?>