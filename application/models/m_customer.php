<?php
class m_customer extends CI_Model{
	
	function show_customer(){
		$hasil=$this->db->query("SELECT * FROM tb_customer");
		return $hasil;
	}

	function hapus_customer($id_customer){
		$hasil=$this->db->query("DELETE FROM tb_customer WHERE	id_customer='$id_customer'");
		return $hasil;
	}
function simpan_customer($id_customer,$nama_customer,$email_customer,$password_customer,$tanggallahir_customer){
	$hasil=$this->db->query("INSERT INTO tb_customer(id_customer,nama_customer,email_customer,password_customer,tanggallahir_customer) VALUES('$id_customer','$nama_customer','$email_customer','$password_customer','$tanggallahir_customer')");	
		return $hasil;
	}

}