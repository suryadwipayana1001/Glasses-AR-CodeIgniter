<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class keranjang extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->model('m_keranjang');
		// $this->load->model('m_barang');
		$this->load->library('cart');

		if($this->session->logged_in == TRUE){
    		$id_user = $this->session->id_user;
    		$cartContentString = serialize($this->cart->contents());

			$cek_user = $this->m_keranjang->cek_user($id_user);
			if ($cek_user->num_rows()) {
				$this->m_keranjang->update_cart($id_user, $cartContentString);
			} else $this->m_keranjang->simpan_cart($id_user, $cartContentString);
		}

	}
	public function index()
	{
		
		$this->load->view("t_users/header");			
		$this->load->view("v_users/v_keranjang");
		$this->load->view("t_users/footer");

	}
	
function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('id_barang'), 
			'name' => $this->input->post('nama_barang'), 
			'price' => $this->input->post('harga_barang'), 
			'qty' => $this->input->post('quantity'),
			'gambar' => $this->input->post('gambar'),
		);
		$this->cart->insert($data);
		$data['gambar'] = $this->input->post('gambar');
		

	/*	echo $this->show_cart($data); //tampilkan cart setelah added*/
	}


	function show_cart() {
		$this->load->view("t_users/header");			
		$this->load->view("v_users/v_keranjang");
		$this->load->view("t_users/footer");
		
	}


	function load_cart(){ //load data cart
		// echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->get('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);

		if($this->session->logged_in == TRUE){
			$id_user = $this->session->id_user;
			$cartContentString = serialize($this->cart->contents());

			$cek_user = $this->m_keranjang->cek_user($id_user);
			if ($cek_user->num_rows()) {
				$this->m_keranjang->update_cart($id_user, $cartContentString);
			} else $this->m_keranjang->simpan_cart($id_user, $cartContentString);
		}

		echo $this->show_cart();
	}
}

?>