<?php
class m_supplier extends CI_Model{
	
	function show_supplier(){
		$hasil=$this->db->query("SELECT * FROM tb_supplier");
		return $hasil;
	}

	function simpan_supplier($id_supplier,$nama_supplier,$alamat_supplier,$nohp_supplier,$email_supplier){
		$hasil=$this->db->query("INSERT INTO tb_supplier(id_supplier,nama_supplier,alamat_supplier,nohp_supplier,email_supplier) VALUES('$id_supplier','$nama_supplier','$alamat_supplier','$nohp_supplier','$email_supplier')");	
		return $hasil;
	}

	function edit_supplier($id_supplier,$nama_supplier,$alamat_supplier,$nohp_supplier,$email_supplier){
		$hasil=$this->db->query("UPDATE tb_supplier SET nama_supplier='$nama_supplier',alamat_supplier ='$alamat_supplier',nohp_supplier='$nohp_supplier',email_supplier='$email_supplier' WHERE id_supplier='$id_supplier' ");
		return $hasil;
	}

	function hapus_supplier($id_supplier){
		$hasil=$this->db->query("DELETE FROM tb_supplier WHERE	id_supplier='$id_supplier'");
		return $hasil;
	}
	function hapus_supplierfk($id_supplier){
		$hasil=$this->db->query("DELETE FROM tb_menyuplai WHERE	id_supplier='$id_supplier'");
		return $hasil;
	}
	function detail_supplier($id_supplier){
		$hasil=$this->db->query("SELECT * FROM tb_supplier WHERE id_supplier='$id_supplier'");
		return $hasil;
	}
}