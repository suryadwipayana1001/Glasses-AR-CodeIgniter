<?php
class m_pemesanan extends CI_Model{
	
	function show_pemesanan(){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan");
		return $hasil;
	}
	function detail_pemesanan($id_pemesanan){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan WHERE id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function tampil_pemesanan(){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan p inner join tb_user u on u.id_user=p.id_user");
		return $hasil;
	}

	function hapus_pemesanan($id_pemesanan){
		$hasil=$this->db->query("DELETE FROM tb_pemesanan WHERE	id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function simpan_pemesanan($id_pemesanan,$nama_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$nohp_pemesanan,$kurir_pemesanan,$status_pemesanan,$struk_pemesanan){
		$hasil=$this->db->query("INSERT INTO tb_pemesanan(id_pemesanan,nama_pemesanan,provinsi_pemesanan,kabupaten_pemesanan,kecamatan_pemesanan,alamat_pemesanan,kodepos_pemesanan,nohp_pemesanan,kurir_pemesanan,status_pemesanan,struk_pemesanan) VALUES('$id_pemesanan','$nama_pemesanan','$provinsi_pemesanan','$kabupaten_pemesanan','$kecamatan_pemesanan','$alamat_pemesanan','$kodepos_pemesanan','$nohp_pemesanan','$kurir_pemesanan','$status_pemesanan','$struk_pemesanan')");	
		return $hasil;
	}

	function edit_pemesanan($id_pemesanan,$status_pemesanan){
		$hasil=$this->db->query("UPDATE tb_pemesanan SET status_pemesanan='$status_pemesanan' WHERE id_pemesanan='$id_pemesanan' ");
		return $hasil;
	}

}