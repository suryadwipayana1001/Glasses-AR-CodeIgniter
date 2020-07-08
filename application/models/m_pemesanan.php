<?php
class m_pemesanan extends CI_Model{
	
	function show_pemesanan($user){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan p INNER JOIN tb_user u on u.id_user=p.id_user");
		return $hasil;
	}
	function show_pemesanan1($mulai, $halaman, $id_user){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan WHERE id_user='$id_user' LIMIT $mulai, $halaman");
		return $hasil;
	}

	function count_pemesanan($id_user){
		$hasil=$this->db->query("SELECT COUNT(*) as jum FROM tb_pemesanan WHERE id_user='$id_user'");
		return $hasil;
	}
	function detail_pemesanan($id_pemesanan){
		$hasil=$this->db->query("SELECT * FROM tb_pemesanan p INNER JOIN tb_user u on u.id_user=p.id_user WHERE id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function detail_pemesan($id_pemesanan){
		$hasil=$this->db->query("SELECT * FROM tb_dipesan WHERE id_pemesanan='$id_pemesanan'");
		return $hasil;
	}

	function hapus_pemesanan($id_pemesanan){
		$hasil=$this->db->query("DELETE FROM tb_pemesanan WHERE	id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function hapus_dipesan($id_pemesanan){
		$hasil=$this->db->query("DELETE FROM tb_dipesan WHERE	id_pemesanan='$id_pemesanan'");
		return $hasil;
	}

	function last_id_pemesanan() {
		$hasil=$this->db->query("SELECT id_pemesanan FROM tb_pemesanan ORDER BY id_pemesanan DESC LIMIT 1");
		return $hasil;
	}
	function simpan_pemesanan($user,$nama_pemesanan,$provinsi_pemesanan,$kabupaten_pemesanan,$kecamatan_pemesanan,$alamat_pemesanan,$kodepos_pemesanan,$nohp_pemesanan,$kurir_pemesanan,$ongkir_pemesanan,$status_pemesanan,$struk_pemesanan,$tanggal_pemesanan,$subtotal_pemesanan,$total_pemesanan){
		$hasil=$this->db->query("INSERT INTO tb_pemesanan(id_user,nama_pemesanan,provinsi_pemesanan,kabupaten_pemesanan,kecamatan_pemesanan,alamat_pemesanan,kodepos_pemesanan,nohp_pemesanan,kurir_pemesanan,ongkir_pemesanan,status_pemesanan,struk_pemesanan,tanggal_pemesanan,subtotal_pemesanan,total_pemesanan) VALUES('$user','$nama_pemesanan','$provinsi_pemesanan','$kabupaten_pemesanan','$kecamatan_pemesanan','$alamat_pemesanan','$kodepos_pemesanan','$nohp_pemesanan','$kurir_pemesanan','$ongkir_pemesanan','$status_pemesanan','$struk_pemesanan','$tanggal_pemesanan','$subtotal_pemesanan','$total_pemesanan')");	
		return $hasil;
	}
	function simpan_dipesan($id_barang,$id_pemesanan,$nama_dipesan,$harga_dipesan,$jumlah_dipesan,$totalharga_dipesan){
		$hasil=$this->db->query("INSERT INTO tb_dipesan(id_barang,id_pemesanan,nama_dipesan,harga_dipesan,jumlah_dipesan,totalharga_dipesan) VALUES ('$id_barang','$id_pemesanan','$nama_dipesan','$harga_dipesan','$jumlah_dipesan','$totalharga_dipesan')");
		return $hasil;
	}

	function edit_pemesanan($id_pemesanan,$status_pemesanan,$resi_pemesanan){
		$hasil=$this->db->query("UPDATE tb_pemesanan SET status_pemesanan='$status_pemesanan',resi_pemesanan='$resi_pemesanan' WHERE id_pemesanan='$id_pemesanan' ");
		return $hasil;
	}
	function simpan_struk($id_pemesanan,$struk_pemesanan){
		$hasil=$this->db->query("UPDATE tb_pemesanan SET struk_pemesanan='$struk_pemesanan' WHERE id_pemesanan='$id_pemesanan'");
		return $hasil;
		// $b="UPDATE tb_pemesanan SET struk_pemesanan='$struk_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
		// var_dump($b);
		// var_dump($id_pemesanan);
	}
}