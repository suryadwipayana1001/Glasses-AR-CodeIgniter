<?php
class m_barang extends CI_Model{

	function store_cart($id_user, $cart) {
		$hasil=$this->db->query("INSERT INTO tb_cart VALUES('', '$id_user', '$cart')");
		return $hasil;
	}
	function load_cart($id_user) {
		$hasil=$this->db->query("SELECT * FROM tb_cart WHERE id_user='$id_user'");
		return $hasil;	
	}
	
	function show_barang($mulai, $halaman){
		$hasil=$this->db->query("SELECT * FROM tb_barang LIMIT $mulai, $halaman");
		return $hasil;
	}
	function count_barang(){
		$hasil=$this->db->query("SELECT COUNT(*) as jum FROM tb_barang");
		return $hasil;
	}
	function show_barang1(){
		$hasil=$this->db->query("SELECT * FROM tb_barang ");
		return $hasil;
	}
	function detail_barang($id_barang){
		$hasil=$this->db->query("SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
		return $hasil;
	}
	function simpan_barang($id_barang,$nama_barang,$jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$deskripsi_barang){
		$hasil=$this->db->query("INSERT INTO tb_barang(id_barang,nama_barang,jumlah_barang,harga_barang,gambar,brand_barang,lensa_barang,deskripsi_barang) VALUES('$id_barang','$nama_barang','$jumlah_barang','$harga_barang','$gambar','$brand_barang','$lensa_barang','$deskripsi_barang')");	
		return $hasil;
	}

	function edit_barang($id_barang,$nama_barang,$jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$deskripsi_barang){
		$hasil=$this->db->query("UPDATE tb_barang SET nama_barang='$nama_barang',jumlah_barang ='$jumlah_barang',harga_barang='$harga_barang',gambar='$gambar',brand_barang='$brand_barang', lensa_barang='$lensa_barang' deskripsi_barang='$deskripsi_barang' WHERE id_barang='$id_barang' ");
		return $hasil;
	}

	function hapus_barang($id_barang){
		$hasil=$this->db->query("DELETE FROM tb_barang WHERE	id_barang='$id_barang'");
		return $hasil;
	}
	function simpan_upload($judul,$gambar){
		$hasil=$this->db->query("INSERT INTO tb_barang(judul,gambar) VALUES ('$judul','$gambar')");
		return $hasil;
	}
	function show_moscot(){
		$hasil=$this->db->query("SELECT * FROM tb_barang WHERE brand_barang = 'moscot'");
		return $hasil;
	}
	function show_rayband(){
		$hasil=$this->db->query("SELECT * FROM tb_barang WHERE brand_barang = 'rayband'");
		return $hasil;
	}
	function update_stok($id_barang,$jumlah_barang){
		$hasil=$this->db->query("UPDATE tb_barang set jumlah_barang='$jumlah_barang' WHERE id_barang='$id_barang'");
		return $hasil;
	}

}