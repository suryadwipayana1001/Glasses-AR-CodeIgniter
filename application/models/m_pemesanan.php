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
}