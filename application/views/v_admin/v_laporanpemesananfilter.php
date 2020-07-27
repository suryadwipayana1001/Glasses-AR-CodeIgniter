  <?php $this->load->view("t_admin/sidebar");?>
  <div id="page-wrapper" >
   <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">
        Laporan Transaksi Customer <small></small>
      </h1>
    </div>
  </div> 
  <!-- /. ROW  -->
  <div class="row">
    <div class="col-md-12">
      <!-- Advanced Tables -->
      <div class="panel panel-default">
        <div class="panel-heading">
         <a href="<?php echo base_url().'index.php/laporan_menyuplai/laporan'?>"  class="btn btn-sm btn-primary" ><i class="glyphicon glyphicon-file"></i>Export to PDF</a> 
       </div>
       <div class="panel-body">
        <div class="table-responsive">
          <form method="POST" action="<?php echo base_url('index.php/laporan_pemesanan/index')?>">
            <div class="form-group">
              <label>Dari Tanggal</label>
              <input type="date" name="dari" class="form-control">
              <?php echo form_error('dari','<span class="text-small text-danger">','</span>')?>
            </div>
            <div class="form-group">
              <label>Sampai Tanggal</label>
              <input type="date" name="sampai" class="form-control">
               <?php echo form_error('sampai','<span class="text-small text-danger">','</span>')?>
            </div>
            <button type="submit" class="btn  btn-sm btn-primary">Tampilkan Data</button>
          </form>


          <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Alamat</th>
                <th>Kurir</th>
                <th>Ongkos Kirim</th>
                <th>Total</th>
                <th>Tanggal Pemesanan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              $total=0;
              $totaljumlah=0;
              foreach ($data->result_array()as $i):
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['email_user'];?></td>
                  <td><?php echo $i['nama_dipesan'];?></td>
                  <td><?php echo $i['harga_dipesan'];?></td>
                  <td><?php echo $i['jumlah_dipesan'];?></td>
                  <td><?php echo $i['totalharga_dipesan'];?></td>
                  <td><?php echo $i['alamat_pemesanan'] ; ?><?php echo $i['kecamatan_pemesanan'] ?>,<?php echo $i['kabupaten_pemesanan']?>,<?php echo $i['provinsi_pemesanan'] ?>,</td>
                  <td><?php echo $i['kurir_pemesanan']?></td>
                  <td><?php echo $i['ongkir_pemesanan']?></td>
                  <td><?php echo $i['total_pemesanan']?></td>
                  <td><?php echo $i['tanggal_pemesanan'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
