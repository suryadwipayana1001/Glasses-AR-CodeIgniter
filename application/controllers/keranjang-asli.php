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

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$output .= '<div class="col-12 col-lg-8">
		<div class="cart-title mt-50">
		<h2>Shopping Cart</h2>
		</div>
		<div class="cart-table clearfix keranjang ">
		<table class="table table-responsive">

		<thead>
		<tr>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Sub Total</th>
		<th></th>
		</tr>
		</thead>
		<tbody id="detail_cart">';
		if($this->session->logged_in == TRUE){
			$id_user = $this->session->id_user;
			$isi_cart = $this->m_keranjang->tampil_cart($id_user);

			foreach ($isi_cart->result_array()as $i) {
				$cartku = $i['cart'];
			}
			// var_dump($cartku);
			$cart = unserialize($cartku);

    		// echo "<br><br><pre>";
    		// print_r($dt);
    		// echo "</pre>";
		} else $cart = $this->cart->contents();


		$no = 0;
		$jum = 0;
		$stokkos = array();
		foreach ($cart as $items) {
			$no++;
			$output .='
			<tr>
			<td><img  src="'.$items['gambar'].'"></td>
			<td>'.$items['name'].'</td>
			<td>'.number_format($items['price']).'</td>
			<td>'.$items['qty'].'</td>
			<td>'.number_format($items['subtotal']).'</td>
			<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart tulisbtn btn btn-danger btn-xs">Batal</button></td>
			</tr>
			';
			$q = $this->m_keranjang->cek_stok($items['id']);
			$row = $q->row();

			if (isset($row))
			{
				$stok = $row->jumlah_barang;
				if ($stok <= 0) {
					$stokkos[$jum]['id_bar']=$items['id'];
					$stokkos[$jum]['nama']=$items['name'];
					$jum = $jum+1;
				}
			}
		}
		$k="";
		if ($stokkos) {
			$k = "kos";
			$output .='<div data-kosong="yes" class="kos alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Untuk dapat melanjutkan Checkout silahkan hapus data Barang yang Stok Tidak Tersedia
				</div>';
				
				foreach ($stokkos as $kosong) {

					
					$output .='<div data-kosong="yes" class="kos alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						Stok Data'.$kosong['nama'].'Tidak Tersedia
					</div>';
				}
			}
					
					$output .= '</tbody>
					</table>
					</div>
					</div>

					<div class="col-12 col-lg-4">
					<div class="cart-summary">
					<h5>Cart Total</h5>
					<ul class="summary-table">
					<li><span>Total:</span> <span>Rp. '.number_format($this->cart->total()).'</span></li>
					</ul>
					<div class="cart-btn mt-100">
					<a href="'.site_url('checkout').'?k='.$k.'" class="btn amado-btn w-100">Checkout</a>
					</div>
					</div>
					</div>';
					return $output;
				
		}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
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