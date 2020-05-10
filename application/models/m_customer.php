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
}