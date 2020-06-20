<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->m_barang->show_barang1();
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_barang",$x);
		$this->load->view("t_admin/footer");
	}

	function simpan_barang(){
		$config['upload_path'] = './assets/img/foto/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
	    
	     $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name']))
	    	{
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $gbr = $this->upload->data();
	                $gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload

		$id_barang=$this->input->post('id_barang');
		$nama_barang=$this->input->post('nama_barang');
		$jumlah_barang=$this->input->post('jumlah_barang');
		$harga_barang=$this->input->post('harga_barang');
		$brand_barang=$this->input->post('brand_barang');
		$lensa_barang=$this->input->post('lensa_barang');
		$this->m_barang->simpan_barang($id_barang,$nama_barang,$jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang);
		redirect('barang');
	}else{
	                echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
	            }
	                 
	        }else{
				echo "Gagal, gambar belum di pilih";
		}
				
	}
	function edit_barang(){
		$config['upload_path'] = './assets/img/foto/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
	    
	     $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name']))
	    	{
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $gbr = $this->upload->data();
	                $gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload

		$id_barang=$this->input->post('id_barang');
		$nama_barang=$this->input->post('nama_barang');
		$jumlah_barang=$this->input->post('jumlah_barang');
		$harga_barang=$this->input->post('harga_barang');
		$brand_barang=$this->input->post('brand_barang');
		$lensa_barang=$this->input->post('lensa_barang');
		$this->m_barang->edit_barang($id_barang,$nama_barang, $jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang);
		redirect('barang');
		}else{
	                echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
	            }
	                 
	        }else{
				echo "Gagal, gambar belum di pilih";
		}
}

	function hapus_barang(){
		$id_barang=$this->input->post('id_barang');
		$this->m_barang->hapus_barang($id_barang);
		redirect('barang');


	}
}

?>