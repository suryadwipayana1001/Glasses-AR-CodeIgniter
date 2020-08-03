<?php
class m_keranjang extends CI_Model{
	function store_cart($id_user, $cart) {
		$hasil=$this->db->query("INSERT INTO tb_cart VALUES('', '$id_user', '$cart')");
		return $hasil;
	}
	function simpan_cart($id_user,$cart){
		$hasil=$this->db->query("INSERT INTO tb_cart(id_user,cart) VALUES('$id_user','$cart')");
		return $hasil;
	}
	function update_cart($id_user, $cart) {
		$hasil=$this->db->query("UPDATE tb_cart SET cart='$cart' WHERE id_user='$id_user'");
		return $hasil;
	}
	function tampil_cart($id_user){
		$hasil=$this->db->query("SELECT * FROM tb_cart WHERE id_user='$id_user'");
		return $hasil;
	}
	function cek_user($id_user) {
		$hasil=$this->db->query("SELECT * FROM tb_cart WHERE id_user='$id_user'");
		return $hasil;
	}
	function cek_stok($id_barang){
		$hasil=$this->db->query("SELECT id_barang,jumlah_barang FROM  tb_barang WHERE id_barang='$id_barang'");
		
		return $hasil;
		
	}

}