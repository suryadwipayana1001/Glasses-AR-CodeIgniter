<?php $this->load->view("t_admin/sidebar");?>
<div id="page-wrapper" >
    <div id="page-inner">
       <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
             Detail Barang
         </h2>
     </div>
 </div> 
 <!-- /. ROW  -->

 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4>Data Barang</h4>
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
                            <td><?php echo $i['harga_barang'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Jumlah</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['jumlah_barang']?></td>
                        </tr>
                        <tr>
                            <th width="20%">Brand</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['brand_barang'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Lensa</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['lensa_barang'] ?></td>
                        </tr>
                         <tr>
                            <th width="20%">Deskripsi</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['deskripsi_barang'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Foto</th>
                            <th width="1%">:</th>
                            <td><img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="width:100px"></td>
                        </tr>
                         

                    </table>
                    <table>
                        <th width="100%"></th>
                             <td><a href="<?=site_url('barang')?>"  class="btn btn-danger">Kembali</a></td>
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