<?php
class m_dipesan extends CI_Model{
	function simpan_dipesan($id_barang,$id_pemesanan,$nama_dipesan,$harga_dipesan,$jumlah_dipesan,$totalharga_dipesan){
		$hasil=$this->db->query("INSERT INTO tb_dipesan(id_barang,id_pemesanan,nama_dipesan,harga_dipesan,jumlah_dipesan,totalharga_dipesan) VALUES ('$id_barang','$id_pemesanan','$nama_dipesan','$harga_dipesan','$jumlah_dipesan','$totalharga_dipesan')");
		return $hasil;
	}
	function hapus_dipesan($id_pemesanan){
		$hasil=$this->db->query("DELETE FROM tb_dipesan WHERE	id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function detail_pemesan($id_pemesanan){
		$hasil=$this->db->query("SELECT * FROM tb_dipesan WHERE id_pemesanan='$id_pemesanan'");
		return $hasil;
	}
	function laporan_dipesan(){
		$hasil=$this->db->query("SELECT d.*, u.email_user, p.tanggal_pemesanan, p.provinsi_pemesanan,p.kabupaten_pemesanan, p.kecamatan_pemesanan, p.alamat_pemesanan ,p.kurir_pemesanan, p.ongkir_pemesanan, p.total_pemesanan FROM tb_dipesan d inner join tb_pemesanan p on p.id_pemesanan=d.id_pemesanan inner join tb_user u on u.id_user=p.id_user");
		return $hasil;
	}
	function laporan_dipesan1(){
		$hasil=$this->db->query("SELECT d.id_pemesanan,u.email_user,SUM(d.jumlah_dipesan)jumlah_dipesan FROM tb_dipesan d Inner JOIN tb_pemesanan p on d.id_pemesanan=p.id_pemesanan Inner JOIN tb_user u on p.id_user=u.id_user GROUP BY email_user");
		return $hasil;
	}
	function laporan_dipesan2(){
		$hasil=$this->db->query("SELECT b.nama_barang,SUM(d.jumlah_dipesan) jumlah_dipesan, SUM(d.totalharga_dipesan) totalharga_dipesan FROM tb_dipesan d Inner JOIN tb_barang b on d.id_barang=b.id_barang group by d.id_barang");
		return $hasil;
	}
	function laporan_dipesanfilter($dari, $sampai){
		$hasil=$this->db->query("SELECT d.*, u.email_user, p.tanggal_pemesanan, p.provinsi_pemesanan,p.kabupaten_pemesanan, p.kecamatan_pemesanan, p.alamat_pemesanan ,p.kurir_pemesanan, p.ongkir_pemesanan, p.total_pemesanan FROM tb_dipesan d inner join tb_pemesanan p on p.id_pemesanan=d.id_pemesanan inner join tb_user u on u.id_user=p.id_user WHERE date (tanggal_pemesanan) >= '$dari' AND date (tanggal_pemesanan) <='$sampai' ");
		return $hasil;
	}	
	function laporan_dipesanfilter1($dari,$sampai){
		$hasil=$this->db->query("SELECT d.id_pemesanan,p.tanggal_pemesanan,u.email_user,SUM(d.jumlah_dipesan)jumlah_dipesan FROM tb_dipesan d Inner JOIN tb_pemesanan p on d.id_pemesanan=p.id_pemesanan Inner JOIN tb_user u on p.id_user=u.id_user WHERE date (tanggal_pemesanan) >= '$dari' AND date (tanggal_pemesanan) <='$sampai' GROUP BY email_user ");
		return $hasil;	
	}
	function laporan_dipesanfilter2($dari,$sampai){
		$hasil=$this->db->query("SELECT p.tanggal_pemesanan,b.nama_barang,SUM(d.jumlah_dipesan) jumlah_dipesan, SUM(d.totalharga_dipesan) totalharga_dipesan FROM tb_dipesan d Inner JOIN tb_barang b on d.id_barang=b.id_barang inner join tb_pemesanan p on d.id_pemesanan=p.id_pemesanan WHERE date (p.tanggal_pemesanan) >= '$dari' AND date (p.tanggal_pemesanan) <='$sampai' group by d.id_barang");
		return $hasil;	
	}

}
