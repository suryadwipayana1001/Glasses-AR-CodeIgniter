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
               <a href="<?php echo base_url().'index.php/laporan_menyuplai/laporan'?>"  class="btn btn-sm btn-primary" ><i class="glyphicon glyphicon-file"></i>Export to PDF</a> 
            </div>
            <div class="panel-body">
                <div class="table-responsive">

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
                            foreach ($data->result_array()as $i):
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>
