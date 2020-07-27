<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class transaksi extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
		$this->load->model('m_dipesan');
		$this->load->library('upload');
	}
	 function index()
	{

		if($this->session->logged_in == TRUE){
    		$id_user = $this->session->id_user;

			$jumhal = 5; // jumlah halaman per page
			
			$page = isset($_GET['page']) ? $_GET['page'] : 1;
			$mulai = ($page>1) ? ($page * $jumhal) - $jumhal : 0;

			$x['data']=$this->m_pemesanan->show_pemesanan1($mulai, $jumhal, $id_user);
			$x['tot']=$this->m_pemesanan->count_pemesanan($id_user);
			$x['jumhal']=$jumhal;
			$this->load->view("t_users/header");
			$this->load->view("v_users/v_transaksi",$x);
			$this->load->view("t_users/footer");
		} else {
			redirect('akunsaya');
		}

	}
	public function detail()
	{
	  $id_pemesanan =  $this->uri->segment(3);
	  $x['data']=$this->m_pemesanan->detail_pemesanan($id_pemesanan);
 	 $x['data1']=$this->m_dipesan->detail_pemesan($id_pemesanan);		  
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_detailtransaksi",$x);
		$this->load->view("t_users/footer");
}
 	function hapus_transaksi(){

	    	$id_pemesanan=$this->input->post('id_pemesanan');
	    	$this->m_pemesanan->hapus_pemesanan($id_pemesanan);
	    	redirect('transaksi');


	    }
	    function simpan_struk(){
	    	$struk_pemesanan=$this->input->post('struk_pemesanan');
	    	$id_pemesanan=$this->input->post('id_pemesanan');
		$this->m_pemesanan->simpan_struk($id_pemesanan,$struk_pemesanan);
	    // var_dump($id_pemesanan);
		$config['upload_path'] = './assets/img/struk/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name']))
	    {
	    	if ($this->upload->do_upload('filefoto'))
	    	{
	    		$gbr = $this->upload->data();
	                $struk_pemesanan=$gbr['file_name'];
	             	 //Mengambil file name dari gambar yang diupload
	                $this->m_pemesanan->simpan_struk($id_pemesanan,$struk_pemesanan);
	                redirect('transaksi');
	            }else{
	            	echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
	            }

	        }else{
	        	echo "Gagal, gambar belum di pilih";
	        }
	    }


function tambah_struk(){
		$id_pemesanan =  $this->uri->segment(3);
	    $x['data']=$this->m_pemesanan->detail_pemesanan($id_pemesanan);
	    $this->load->view("t_users/header");
		$this->load->view("v_users/v_struk",$x);	
		$this->load->view("t_users/footer");
		
}
}
?>