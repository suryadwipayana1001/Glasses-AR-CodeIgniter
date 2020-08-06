  <?php $this->load->view("t_admin/sidebar");?>
  <div id="page-wrapper" >
   <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">
        Laporan Transaksi Supplier <small></small>
      </h1>
    </div>
  </div> 
  <!-- /. ROW  -->
  <div class="row">
    <div class="col-md-12">
      <!-- Advanced Tables -->
      <div class="panel panel-default">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
          <div class="table-responsive">
           <form method="POST" action="<?php echo base_url('index.php/laporan_menyuplai/index')?>">
             <div class="navbar-form navbar-right">
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
          </div>
          </form>
          <br>
 <div class="btn-group">
        <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo base_url().'index.php/laporan_menyuplai/print_laporan' ?>"><i class="glyphicon glyphicon-file"></i> Print</a>
      </div>
      <hr>
          <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
                <th>Nama Supplier</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              $total=0;
              $totaljumlah=0;
              foreach ($data->result_array()as $i):
                $total+=$i['totalharga_menyuplai'];
                $totaljumlah+=$i['jumlah_menyuplai'];
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['nama_barang'];?></td>
                  <td><?php echo $i['harga_menyuplai'];?></td>
                  <td><?php echo $i['jumlah_menyuplai'];?></td>
                  <td><?php echo $i['totalharga_menyuplai'];?></td>
                  <td><?php echo $i['tanggal_menyuplai'];?></td>
                  <td><?php echo $i['nama_supplier'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>

          <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tbody>
            <tr>
              <th>No</th>
              <th>Nama Supplier</th>
              <th>Jumlah Barang</th>
            </tr>
             </thead>
            <?php
            $no=1; 
            foreach ($data1->result_array()as $i):
             ?>
             <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $i['nama_supplier'];?></td>        
              <td><?php echo $i['jumlah_menyuplai'];?></td>
              <tr>
              <?php endforeach;?>
              </tbody>
            </table>  

            <table class="table table-striped table-bordered table-hover" id="">
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
              </tr>
              <?php 
              $no=1; 
              foreach ($data2->result_array()as $i):
               ?>
               <tr>
                 <td><?php echo $no++?></td>        
                 <td><?php echo $i['nama_barang'];?></td>
                 <td><?php echo $i['jumlah_menyuplai'];?></td>
                 <td><?php echo $i['totalharga_menyuplai'];?></td>
                 <tr>
                 <?php endforeach;?>
               </table>  
               <tr>
                <table class="table table-striped table-bordered table-hover">
                 <th>Total Jumlah barang:</th>
                 <th>Total Harga Barang</th>
               </tr>
               <tr>
                <td><?php echo $totaljumlah?></td>
                <td><?php echo $total?></td>
              </tr>
            </table>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>
