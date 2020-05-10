<?php
class m_admin extends CI_Model{
	
	function show_admin(){
		$hasil=$this->db->query("SELECT * FROM tb_admin");
		return $hasil;
	}

	function simpan_admin($id_admin,$username_admin,$password_admin){
		$hasil=$this->db->query("INSERT INTO tb_admin(id_admin,username_admin,password_admin) VALUES('$id_admin','$username_admin','$password_admin')");	
		return $hasil;
	}

	function edit_admin($id_admin,$username_admin,$password_admin){
		$hasil=$this->db->query("UPDATE tb_admin SET username_admin='$username_admin',password_admin ='$password_admin' WHERE id_admin='$id_admin' ");
		return $hasil;
	}

	function hapus_admin($id_admin){
		$hasil=$this->db->query("DELETE FROM tb_admin WHERE	id_admin='$id_admin'");
		return $hasil;
	}
}