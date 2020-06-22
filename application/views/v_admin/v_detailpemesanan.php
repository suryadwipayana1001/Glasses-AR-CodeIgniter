<?php $this->load->view("t_admin/sidebar");?>
<div id="page-wrapper" >
    <div id="page-inner">
       <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
             Detail Pemesanan
         </h2>
     </div>
 </div> 
 <!-- /. ROW  -->

 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <?php
            foreach ($data->result_array()as $i):
                ?>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th width="20%">Nama</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nama_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Provinsi</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['provinsi_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Kabupaten</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kabupaten_pemesanan']?></td>
                        </tr>
                        <tr>
                            <th width="20%">Kecamatan</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kecamatan_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Alamat</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['alamat_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Kode Pos</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kodepos_pemesanan'] ?></td>
                        </tr>
                    </table>
                    Data Produk
                    <hr>
                     <table class="table table-striped">
                        <tr>
                            <th width="20%">Nama Produk</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nama_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Harga</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['provinsi_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Jumlah</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kabupaten_pemesanan']?></td>
                        </tr>
                        <tr>
                            <th width="20%">Total</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kecamatan_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Ongkos Kirim</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['alamat_pemesanan'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Status Pengiriman</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kodepos_pemesanan'] ?></td>
                        </tr>
                         <tr>
                            <th width="20%">Struk</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['kodepos_pemesanan'] ?></td>
                        </tr>
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