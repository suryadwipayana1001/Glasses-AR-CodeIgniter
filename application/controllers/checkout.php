<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class checkout extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
		$this->load->model('m_dipesan');
		$this->load->model('m_barang');
		$this->load->library('cart');
	}
	function index()
	{
		if($this->session->logged_in == TRUE){

			$data['cartItems'] = $this->cart->contents();

			$this->load->view("t_users/header");
			$this->load->view("v_users/v_checkout", $data);		
			$this->load->view("t_users/footer1");
		} else {
			redirect('akunsaya');
		}
	}
	function simpan_pemesanan(){

		if($this->session->logged_in == TRUE){
    	$user = $this->session->id_user; }

		$last_id = $this->m_pemesanan->last_id_pemesanan();
		foreach ($last_id->result_array()as $i){ $last_idk = $i['id_pemesanan']; }
		$id_pemesanan = $last_idk + 1;
		$tanggal_pemesanan=date("Y-m-d");
		$nama_pemesanan=$this->input->post('nama_pemesanan');
		$provinsi_pemesanan=$this->input->post('prov_tuj');
		$kabupaten_pemesanan=$this->input->post('kab_tuj');
		$kecamatan_pemesanan=$this->input->post('kecamatan_pemesanan');
		$alamat_pemesanan=$this->input->post('alamat_pemesanan');
		$kodepos_pemesanan=$this->input->post('kodepos_pemesanan');
		$nohp_pemesanan=$this->input->post('nohp_pemesanan');
		$kurir_pemesanan=$this->input->post('kurir_pemesanan');
		$ongkir_pemesanan=$this->input->post('ongkir_pemesanan');
		$status_pemesanan=$this->input->post('status_pemesanan');
		$struk_pemesanan=$this->input->post('struk_pemesanan');
		
		$jum_bar = $this->input->post('jum_bar');
		$total=0;
		for ($i=1; $i<=$jum_bar; $i++) {
			echo "tes";
			$tmp_id = 'id_barang'.$i;
			$tmp_nama = 'nama_barang'.$i;
			$tmp_harga = 'harga_barang'.$i;
			$tmp_jum = 'jumlah_barang'.$i;
			$tmp_sub = 'subtotal'.$i;

			$id_barang=$this->input->post($tmp_id);
			$nama_dipesan=$this->input->post($tmp_nama);
			$harga_dipesan=$this->input->post($tmp_harga);
			$jumlah_dipesan=$this->input->post($tmp_jum);
			$totalharga_dipesan=$this->input->post($tmp_sub);
			$total+=$totalharga_dipesan;
			$stok=$this->m_barang->detail_barang($id_barang);
			
			$t = $stok->result_array();
			$stok1 = $t['0']['jumlah_barang'];
			$sisa=$stok1-$jumlah_dipesan;
			$this->m_barang->update_stok($id_barang,$sisa);
			$this->m_dipesan->simpan_dipesan($id_barang,$id_pemesanan,$nama_dipesan,$harga_dipesan,$jumlah_dipesan,$totalharga_dipesan);

		
		}
		$total_pemesanan= $ongkir_pemesanan+$total;
		$subtotal_pemesanan=$total;
		var_dump($subtotal_pemesanan);
		$this->m_pemesanan->simpan_pemesanan($user,$nama_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$nohp_pemesanan,$kurir_pemesanan,$ongkir_pemesanan,$status_pemesanan,$struk_pemesanan,$tanggal_pemesanan,$subtotal_pemesanan,$total_pemesanan);

		$this->cart->destroy();
	redirect('berhasil');
	}
	public function get_provinsi()
	{
		$provinces = $this->rajaongkir->province();
		$this->output->set_content_type('application/json')->set_output($provinces);
		/*$this->output->set_content_type('application/json')->set_output($provinces);*/
	}
	public function get_kota($id_provinsi){
		$kota = $this->rajaongkir->city($id_provinsi);
		$this->output->set_content_type('application/json')->set_output($kota);
	}

	public function get_biaya($asal,$tujuan,$berat,$kurir){
		$ongkir =$this->rajaongkir->cost($asal,$tujuan,$berat,$kurir);
		$this->output->set_content_type('application/json')->set_output($ongkir);
	}
}
?>