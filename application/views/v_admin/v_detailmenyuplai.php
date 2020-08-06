<?php $this->load->view("t_admin/sidebar");?>
<div id="page-wrapper" >
    <div id="page-inner">
       <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
             Detail Transaksi Supplier
         </h2>
     </div>
 </div> 
 <!-- /. ROW  -->

 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4>Data Transaksi Supplier</h4>
            </div>
            <?php
            foreach ($data->result_array()as $i):
                ?>
                <div class="panel-body">
                    <table class="table table-striped">

                        <tr>
                            <th width="20%">Nama</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Harga</th>
                            <th width="1%">:</th>
                            <td><?php echo 'Rp ' .number_format ($i['harga_menyuplai']) ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Jumlah</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['jumlah_menyuplai']?></td>
                        </tr>
                        <tr>
                            <th width="20%">Total</th>
                            <th width="1%">:</th>
                            <td><?php echo 'Rp ' .number_format ($i['totalharga_menyuplai']) ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Tanggak</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['tanggal_menyuplai'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Nama Supplier</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nama_supplier'] ?></td>
                        </tr>
                         

                    </table>
                    <table>
                        <th width="100%"></th>
                             <td><a href="<?=site_url('menyuplai')?>"  class="btn btn-danger">Kembali</a></td>
                    </table>
                    <!-- /.row (nested) -->
                </div>
            <?php endforeach;?>
           
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->

    <!-- /. PAGE INNER  -->
</div>
</div>
</div>