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
		$hasil=$this->db->query("SELECT u.email_user, u.level_user, t.status_pemesanan, t.id_user, t.tanggal_pemesanan, t.provinsi_pemesanan,t.kabupaten_pemesanan, t.kecamatan_pemesanan, t.alamat_pemesanan ,t.kurir_pemesanan, t.ongkir_pemesanan, t.total_pemesanan, t.nama_dipesan, t.harga_dipesan, t.jumlah_dipesan, t.totalharga_dipesan from (SELECT d.*, p.id_user, p.tanggal_pemesanan, p.provinsi_pemesanan,p.kabupaten_pemesanan, p.kecamatan_pemesanan, p.alamat_pemesanan ,p.kurir_pemesanan, p.ongkir_pemesanan, p.total_pemesanan, p.status_pemesanan FROM tb_dipesan d inner join tb_pemesanan p on p.id_pemesanan=d.id_pemesanan) as t inner join tb_user u on u.id_user=t.id_user WHERE u.level_user='Customer' and (t.status_pemesanan='Sedang di Proses' OR t.status_pemesanan= 'Sedang dalam Perjalanan' OR t.status_pemesanan='Selesai')");
		return $hasil;
	}
	function laporan_dipesan1(){
		$hasil=$this->db->query("SELECT u.email_user,SUM(t.jumlah_dipesan) jumlah_dipesan,SUM(t.totalharga_dipesan)totalharga_dipesan from (SELECT d.id_pemesanan,d.jumlah_dipesan, d.totalharga_dipesan,p.status_pemesanan,p.id_user FROM tb_dipesan d Inner JOIN tb_pemesanan p on d.id_pemesanan=p.id_pemesanan) as t Inner JOIN tb_user u on u.id_user=t.id_user WHERE u.level_user='Customer' AND ( t.status_pemesanan='Sedang di Proses' OR t.status_pemesanan= 'Sedang dalam Perjalanan' OR t.status_pemesanan='Selesai' )GROUP BY u.email_user");
		return $hasil;
	}
	function laporan_dipesan2(){
		$hasil=$this->db->query("SELECT t.nama_barang,SUM(t.jumlah_dipesan)jumlah_dipesan,SUM(t.totalharga_dipesan)totalharga_dipesan from (SELECT b.id_barang,b.nama_barang,p.id_user,p.status_pemesanan,d.jumlah_dipesan,d.totalharga_dipesan FROM tb_dipesan d Inner JOIN tb_barang b on d.id_barang=b.id_barang inner JOIN tb_pemesanan p on d.id_pemesanan=p.id_pemesanan ) as t Inner JOIN tb_user u on t.id_user=u.id_user WHERE u.level_user='Customer' AND(t.status_pemesanan='Sedang di Proses' OR t.status_pemesanan= 'Sedang Dalam Perjalanan' OR t.status_pemesanan='Selesai') group by t.id_barang");
		return $hasil;
	}
	function laporan_dipesanfilter($dari, $sampai){
		$hasil=$this->db->query("SELECT u.email_user, u.level_user, t.status_pemesanan, t.id_user, t.tanggal_pemesanan, t.provinsi_pemesanan,t.kabupaten_pemesanan, t.kecamatan_pemesanan, t.alamat_pemesanan ,t.kurir_pemesanan, t.ongkir_pemesanan, t.total_pemesanan, t.nama_dipesan, t.harga_dipesan, t.jumlah_dipesan, t.totalharga_dipesan from (SELECT d.*, p.id_user, p.tanggal_pemesanan, p.provinsi_pemesanan,p.kabupaten_pemesanan, p.kecamatan_pemesanan, p.alamat_pemesanan ,p.kurir_pemesanan, p.ongkir_pemesanan, p.total_pemesanan, p.status_pemesanan FROM tb_dipesan d inner join tb_pemesanan p on p.id_pemesanan=d.id_pemesanan) as t inner join tb_user u on u.id_user=t.id_user WHERE u.level_user='Customer' and date (t.tanggal_pemesanan) >= '$dari' AND date (t.tanggal_pemesanan) <='$sampai' AND (t.status_pemesanan='Sedang di Proses' OR t.status_pemesanan= 'Sedang dalam Perjalanan' OR t.status_pemesanan='Selesai') ");
		return $hasil;
	}	
	function laporan_dipesanfilter1($dari,$sampai){
		$hasil=$this->db->query("SELECT u.email_user,SUM(t.jumlah_dipesan) jumlah_dipesan,SUM(t.totalharga_dipesan)totalharga_dipesan, t.tanggal_pemesanan from (SELECT d.id_pemesanan,d.jumlah_dipesan, d.totalharga_dipesan,p.tanggal_pemesanan,p.status_pemesanan,p.id_user FROM tb_dipesan d Inner JOIN tb_pemesanan p on d.id_pemesanan=p.id_pemesanan) as t Inner JOIN tb_user u on u.id_user=t.id_user WHERE u.level_user='Customer' AND date (t.tanggal_pemesanan) >= '$dari' AND date (t.tanggal_pemesanan) <='$sampai' AND ( t.status_pemesanan='Sedang di Proses' OR t.status_pemesanan= 'Sedang dalam Perjalanan' OR t.status_pemesanan='Selesai' )GROUP BY u.email_user");
		return $hasil;	
	}
	function laporan_dipesanfilter2($dari,$sampai){
		$hasil=$this->db->query("SELECT t.nama_barang,SUM(t.jumlah_dipesan)jumlah_dipesan,SUM(t.totalharga_dipesan)totalharga_dipesan, t.tanggal_pemesanan from (SELECT b.id_barang,b.nama_barang,p.id_user,p.tanggal_pemesanan,p.status_pemesanan,d.jumlah_dipesan,d.totalharga_dipesan FROM tb_dipesan d Inner JOIN tb_barang b on d.id_barang=b.id_barang inner JOIN tb_pemesanan p on d.id_pemesanan=p.id_pemesanan ) as t Inner JOIN tb_user u on t.id_user=u.id_user WHERE u.level_user='Customer' AND date (t.tanggal_pemesanan) >= '$dari' AND date (t.tanggal_pemesanan) <='$sampai' AND ( t.status_pemesanan='Sedang di Proses' OR t.status_pemesanan= 'Sedang dalam Perjalanan' OR t.status_pemesanan='Selesai' ) group by t.id_barang");
		return $hasil;	
	}

}
