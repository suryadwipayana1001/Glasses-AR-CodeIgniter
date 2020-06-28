<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class checkout extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pemesanan');
	}
	function index()
	{
		$data['cartItems'] = $this->cart->contents();

		$this->load->view("t_users/header");
		$this->load->view("v_users/v_checkout", $data);		
		$this->load->view("t_users/footer1");
	}
	function simpan_pemesanan(){
		$last_id = $this->m_pemesanan->last_id_pemesanan();
		foreach ($last_id->result_array()as $i){ $last_idk = $i['id_pemesanan']; }
		$id_pemesanan = $last_idk + 1;
		
		$nama_pemesanan=$this->input->post('nama_pemesanan');
		$provinsi_pemesanan=$this->input->post('prov_tuj');
		$kabupaten_pemesanan=$this->input->post('kab_tuj');
		$kecamatan_pemesanan=$this->input->post('kecamatan_pemesanan');
		$alamat_pemesanan=$this->input->post('alamat_pemesanan');
		$kodepos_pemesanan=$this->input->post('kodepos_pemesanan');
		$nohp_pemesanan=$this->input->post('nohp_pemesanan');
		$kurir_pemesanan=$this->input->post('kurir_pemesanan');
		$status_pemesanan=$this->input->post('status_pemesanan');
		$struk_pemesanan=$this->input->post('struk_pemesanan');
		$this->m_pemesanan->simpan_pemesanan($nama_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$nohp_pemesanan,$kurir_pemesanan,$status_pemesanan,$struk_pemesanan);

		$jum_bar = $this->input->post('jum_bar');

		for ($i=1; $i<=$jum_bar; $i++) {
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

			$this->m_pemesanan->simpan_dipesan($id_barang,$id_pemesanan,$nama_dipesan,$harga_dipesan,$jumlah_dipesan,$totalharga_dipesan);
		}

		redirect('checkout');
	}
	function simpan_dipesan(){
		
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