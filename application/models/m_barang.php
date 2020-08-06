<?php
class m_barang extends CI_Model{
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
	function simpan_barang($id_barang,$nama_barang,$jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$frame_barang,$deskripsi_barang,$model_3d){
		$hasil=$this->db->query("INSERT INTO tb_barang(id_barang,nama_barang,jumlah_barang,harga_barang,gambar,brand_barang,lensa_barang,frame_barang,deskripsi_barang,model_3d) VALUES('$id_barang','$nama_barang','$jumlah_barang','$harga_barang','$gambar','$brand_barang','$lensa_barang','$frame_barang','$deskripsi_barang','$model_3d')");	
		return $hasil;
	}
	function edit_barang($id_barang,$nama_barang,$jumlah_barang,$harga_barang,$gambar,$brand_barang,$lensa_barang,$frame_barang,$deskripsi_barang,$model_3d){
		$hasil=$this->db->query("UPDATE tb_barang SET nama_barang='$nama_barang',jumlah_barang ='$jumlah_barang',harga_barang='$harga_barang',gambar='$gambar',brand_barang='$brand_barang', lensa_barang='$lensa_barang', frame_barang='$frame_barang',deskripsi_barang='$deskripsi_barang',model_3d='$model_3d' WHERE id_barang='$id_barang' ");
		return $hasil;
	}
	function hapus_barang($id_barang){
		$hasil=$this->db->query("DELETE FROM tb_barang WHERE	id_barang='$id_barang'");
		return $hasil;
	}
	function cek_barang($nama_barang){
	$hasil=$this->db->query("SELECT * FROM tb_barang WHERE nama_barang='$nama_barang'");
	return $hasil;
	}

	function search($keywoard){
		$hasil=$this->db->query("SELECT * FROM tb_barang WHERE nama_barang LIKE '$keywoard' OR harga_barang LIKE '$keywoard' OR brand_barang LIKE '$keywoard' OR lensa_barang LIKE '$keywoard' OR frame_barang LIKE '$keywoard' ");
		return $hasil;
	}
	function show_produkterbaru(){

		$hasil=$this->db->query("SELECT * FROM tb_barang order by id_barang desc");
		return $hasil;
	}
	function show_tinggi(){
		$hasil=$this->db->query("SELECT * FROM tb_barang ORDER BY harga_barang DESC");
		return $hasil;
	}
	function show_rendah(){
		$hasil=$this->db->query("SELECT * FROM tb_barang ORDER BY harga_barang ");
		return $hasil;
	}
	function update_stok($id_barang,$jumlah_barang){
		$hasil=$this->db->query("UPDATE tb_barang set jumlah_barang='$jumlah_barang' WHERE id_barang='$id_barang'");
		return $hasil;
	}


}