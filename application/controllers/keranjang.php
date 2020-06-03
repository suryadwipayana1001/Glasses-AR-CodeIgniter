<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class keranjang extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	public function index()
	{
		$x['data']=$this->m_barang->show_barang1();
		$this->load->view("t_users/header");
		$this->load->view("v_users/v_keranjang",$x);
		$this->load->view("t_users/footer");

	}
function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('id_barang'), 
			'name' => $this->input->post('nama_barang'), 
			'price' => $this->input->post('harga_barang'), 
			'qty' => $this->input->post('quantity'), 
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
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
		echo $this->show_cart();
	}
}

?>