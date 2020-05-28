<?php
class m_pemesanan extends CI_Model{
	
	function show_pemesanan(){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan");
		return $hasil;
	}

	function hapus_pemesanan($id_pemesanan){
		$hasil=$this->db->query("DELETE FROM tb_pemesanan WHERE	id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function simpan_pemesanan($id_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$nama_pemesanan,$nohp_pemesanan){
		$hasil=$this->db->query("INSERT INTO tb_pemesanan(id_pemesanan,alamat_pemesanan,kodepos_pemesanan,provinsi_pemesanan,kabupaten_pemesanan,kecamatan_pemesanan,nama_pemesanan,nohp_pemesanan) VALUES('$id_pemesanan','$alamat_pemesanan','$kodepos_pemesanan','$provinsi_pemesanan','$kabupaten_pemesanan','$kecamatan_pemesanan','$nama_pemesanan','$nohp_pemesanan')");	
		return $hasil;
	}

}