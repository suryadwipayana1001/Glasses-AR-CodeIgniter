<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
		$this->load->model('m_dipesan');
	}

	function index(){
		if($this->session->logged_in == TRUE){
    	$user = $this->session->id_user; }
		$x['data']=$this->m_pemesanan->show_pemesanan($user);
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_pemesanan",$x);
		$this->load->view("t_admin/footer");
	}
	function edit_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');
		$status_pemesanan=$this->input->post('status_pemesanan');
		$resi_pemesanan=$this->input->post('resi_pemesanan');
		$this->m_pemesanan->edit_pemesanan($id_pemesanan,$status_pemesanan,$resi_pemesanan);
		$this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data Berhasil Dirubah
			</div>
			');
		redirect('pemesanan');
	}

	function hapus_pemesanan(){
		$id_pemesanan=$this->input->post('id_pemesanan');
		$this->m_dipesan->hapus_dipesan($id_pemesanan);
		$this->m_pemesanan->hapus_pemesanan($id_pemesanan);
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data Berhasil Dihapus
			</div>
			');
		redirect('pemesanan');
	}
	public function detail_pemesanan()
	{
	  $id_pemesanan =  $this->uri->segment(3);
	if($this->session->logged_in == TRUE){
    	$user = $this->session->id_user; }
	 $x['data']=$this->m_pemesanan->detail_pemesanan($id_pemesanan,$user);
	 $x['data1']=$this->m_dipesan->detail_pemesan($id_pemesanan);
	 $this->m_pemesanan->update_status($id_pemesanan);


	 /*foreach ($x['data']->result_array()as $i):
               var_dump($i);

           endforeach;*/

	  
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_detailpemesanan",$x);
		$this->load->view("t_admin/footer");

}
}
?>