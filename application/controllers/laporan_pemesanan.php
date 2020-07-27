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
				$a['data']=$this->m_dipesan->laporan_dipesan1($dari,$sampai);
			/*	var_dump($a);
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
	function laporan(){
	$this->load->library('dompdf_gen');
		$data['pemesanan'] = $this->m_pemesanan->show_pemesanan();
		$this->load->view('v_laporan/pdf_pemesanan',$data);
		$paper_size ='A4';
		$orientation='Landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pemesanan.pdf",array('Attachment'=>0));
	}
}

?>