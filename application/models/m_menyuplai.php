<?php
class m_menyuplai extends CI_Model{
	
	function show_menyuplai(){
		$hasil=$this->db->query("SELECT m.*, b.nama_barang, s.nama_supplier FROM tb_menyuplai m inner join tb_barang b on b.id_barang=m.id_barang inner join tb_supplier s on s.id_supplier=m.id_supplier");
		return $hasil;
	}

	function simpan_menyuplai($id_menyuplai,$id_barang,$nama_barang,$id_supplier,$harga_menyuplai,$jumlah_menyuplai,$totalharga_menyuplai,$tanggal_menyuplai){
		$hasil=$this->db->query("INSERT INTO tb_menyuplai(id_menyuplai,id_barang,nama_barang,id_supplier,harga_menyuplai,jumlah_menyuplai,totalharga_menyuplai,tanggal_menyuplai) VALUES('$id_menyuplai','$id_barang','$nama_barang','$id_supplier','$harga_menyuplai','$jumlah_menyuplai','$totalharga_menyuplai','$tanggal_menyuplai')");	
		return $hasil;
	}

	function edit_menyuplai($id_menyuplai,$id_barang,$nama_barang,$id_supplier,$harga_menyuplai,$jumlah_menyuplai,$totalharga_menyuplai,$tanggal_menyuplai){
		$hasil=$this->db->query("UPDATE tb_menyuplai SET id_barang='$id_barang', nama_barang='$nama_barang', id_supplier='$id_supplier',harga_menyuplai='$harga_menyuplai',jumlah_menyuplai ='$jumlah_menyuplai',totalharga_menyuplai='$totalharga_menyuplai',tanggal_menyuplai='$tanggal_menyuplai' WHERE id_menyuplai='$id_menyuplai' ");
		return $hasil;
	}

	function hapus_menyuplai($id_menyuplai){
		$hasil=$this->db->query("DELETE FROM tb_menyuplai WHERE	id_menyuplai='$id_menyuplai'");
		return $hasil;
	}
}