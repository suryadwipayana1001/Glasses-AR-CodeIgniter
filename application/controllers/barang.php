<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->library('upload');
	}

	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_barang->show_barang1();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_barang",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('beranda/c_beranda');
			}
		}
		
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
	                $deskripsi_barang=$this->input->post('deskripsi_barang');
	                $model_3d=$this->input->post('model_3d');
	                $cek_barang=$this->m_barang->cek_barang($nama_barang);
	                $cek_nama=$cek_barang->num_rows();
	                if($cek_nama>0){
	                	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
	                		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                		Data Nama Barang Sudah Terdaftar
	                		</div>
	                		');
	                	redirect('barang');
	                }else{
	                	$this->m_barang->simpan_barang($id_barang,$nama_barang,$jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$deskripsi_barang,$model_3d);
	                $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
	                	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                	Data Berhasil Ditambahkan
	                	</div>
	                	');
	                redirect('barang');
	                }
	            }else{
	            	echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
	            }

	        }else{
	        	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
	                		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                		Data Foto harus bertipe GIF|JPG|PNG|JPEG|BMP"
	                		</div>
	                		');
	        	redirect('barang');
	        }

	    }
	    function edit_barang(){
		$config['upload_path'] = './assets/img/foto/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
	    
	    $this->upload->initialize($config);
	    $id_barang=$this->input->post('id_barang');
	    $nama_barang=$this->input->post('nama_barang');
	    $jumlah_barang=$this->input->post('jumlah_barang');
	    $harga_barang=$this->input->post('harga_barang');
	    $brand_barang=$this->input->post('brand_barang');
	    $lensa_barang=$this->input->post('lensa_barang');
	    $deskripsi_barang=$this->input->post('deskripsi_barang');
	    $model_3d=$this->input->post('model_3d');

	    if(!empty($_FILES['filefoto']['name']))
	    {
	    	if ($this->upload->do_upload('filefoto'))
	    	{
	    		$gbr = $this->upload->data();
	                $gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
	                $this->m_barang->edit_barang($id_barang,$nama_barang, $jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$deskripsi_barang,$model_3d);
	                redirect('barang');
	            }else{
	            	echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
	            }
	        }else{     
	        	$gambar=$this->input->post('gbr');
	        	$this->m_barang->edit_barang($id_barang,$nama_barang, $jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$deskripsi_barang,$model_3d);
	        	$this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
	        		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		Data Berhasil Dirubah
	        		</div>
	        		');
	        	redirect('barang');
	        }
	    }

	    function hapus_barang(){
	    	$id_barang=$this->input->post('id_barang');
	    	$this->m_barang->hapus_barang($id_barang);
	    	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
	    		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    		Data Berhasil Dihapus
	    		</div>
	    		');
	    	redirect('barang');


	    }
	    public function detail_barang()
	    {
	    	$id_barang =  $this->uri->segment(3);
	    	$x['data']=$this->m_barang->detail_barang($id_barang);
	    	$this->load->view("t_admin/header");
	    	$this->load->view("t_admin/navbar");
	    	$this->load->view("v_admin/v_detailbarang",$x);
	    	$this->load->view("t_admin/footer");

	    }
	}

	?>