<?php
class m_user extends CI_Model{
	
	function show_user(){
		$hasil=$this->db->query("SELECT * FROM tb_user");
		return $hasil;
	}
	function tampil_user($id_user){
		$hasil=$this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
		return $hasil;
	}
	function hapus_user($id_user){
		$hasil=$this->db->query("DELETE FROM tb_user WHERE	id_user='$id_user'");
		return $hasil;
	}
	function simpan_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user,$level_user){
		$hasil=$this->db->query("INSERT INTO tb_user(id_user,nama_user,email_user,password_user,tanggallahir_user,alamat_user,nohp_user,jeniskelamin_user,level_user) VALUES('$id_user','$nama_user','$email_user','$password_user','$tanggallahir_user','$alamat_user','$nohp_user','$jeniskelamin_user','$level_user')");	
			return $hasil;
	}
	function cek_user($email_user){
		$hasil=$this->db->query("SELECT * FROM tb_user WHERE email_user='$email_user'");
		return $hasil;
	}

	function edit_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user,$level_user){
		$hasil=$this->db->query("UPDATE tb_user SET nama_user='$nama_user',email_user ='$email_user',password_user='$password_user',tanggallahir_user='$tanggallahir_user',alamat_user='$alamat_user',nohp_user='$nohp_user',jeniskelamin_user='$jeniskelamin_user',level_user='$level_user' WHERE id_user='$id_user' ");
		return $hasil;
	}
	function edit_user1($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user){
		$hasil=$this->db->query("UPDATE tb_user SET nama_user='$nama_user',email_user ='$email_user',password_user='$password_user',tanggallahir_user='$tanggallahir_user',alamat_user='$alamat_user',nohp_user='$nohp_user',jeniskelamin_user='$jeniskelamin_user' WHERE id_user='$id_user' ");
		return $hasil;
	}

	function login($email_user	,$password_user){
        $hasil  = $this->db->query("SELECT * from tb_user where email_user	='$email_user' and password_user='$password_user'");
        if($hasil->num_rows() > 0){
            return $hasil;
        }else{
            return false;
        }
    }
    function detail_user($id_user){
		$hasil=$this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
		return $hasil;
	}
	function edit_akun($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user){
		$hasil=$this->db->query("UPDATE tb_user SET nama_user='$nama_user',email_user ='$email_user',password_user='$password_user',tanggallahir_user='$tanggallahir_user' WHERE id_user='$id_user' ");
		return $hasil;
	}

	function laporan_customer(){
	$hasil=$this->db->query("SELECT * FROM tb_user WHERE level_user='customer'");
	return $hasil;
}
	function search($keywoard){
		$hasil=$this->db->query("SELECT * FROM tb_user WHERE nama_user LIKE '$keywoard' OR email_user LIKE '$keywoard' ");
		return $hasil;
	}
}