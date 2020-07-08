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
               <h4>Data User</h4>
           </div>
           <?php
           foreach ($data->result_array()as $i):
             ?>
             <div class="panel-body">
                 <table class="table table-striped">
                     <tr>
                        <th width="20%">Email </th>
                        <th width="1%">:</th>
                        <td><?php echo $i['email_user'] ?></td>
                    </tr>
                    <tr>
                        <th width="20%">Nama</th>
                        <th width="1%">:</th>
                        <td><?php echo $i['nama_user'] ?></td>
                    </tr>
                    <tr>
                        <th width="20%">Tanggal Lahir</th>
                        <th width="1%">:</th>
                        <td><?php echo $i['tanggallahir_user']?></td>
                    </tr>
                </table>
            <?php endforeach?>
            <table class="table table-striped">
                <h4>Data Pemesan</h4>
                <hr>
                <?php
                foreach ($data->result_array()as $i):
                 ?>
                 <tr>
                    <th width="20%">Nama </th>
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
        <?php endforeach?>
        <h4>Data Produk</h4>
        <hr>
        <table class="table table-striped">
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah </th>
                <th>Total</th> 
            </tr>
            <?php foreach ($data1->result_array()as $i):
             ?>
             <tr>
                 <td><?php echo $i['nama_dipesan'] ?></td>
                 <td><?php echo $i['harga_dipesan']?></td>
                 <td><?php echo $i['jumlah_dipesan']?></td>
                 <td><?php echo $i['totalharga_dipesan']?></td>
             </tr>
         <?php endforeach;?>
     </table>
     <h4>Data Transaksi</h4>
     <hr>
     <table class="table table-striped">
        <?php foreach ($data->result_array()as $i):?>
           <tr>
            <th width="20%">Sub Total</th>
            <th width="1%">:</th>
            <td><?php echo $i['subtotal_pemesanan'] ?></td>
        </tr>
        <tr>
            <th width="20%">Kurir</th>
            <th width="1%">:</th>
            <td><?php echo $i['kurir_pemesanan'] ?></td>
        </tr>
        <tr>
            <th width="20%">Ongkos Kirim</th>
            <th width="1%">:</th>
            <td><?php echo $i['ongkir_pemesanan'] ?></td>
        </tr>
        <tr>
            <th width="20%">Total</th>
            <th width="1%">:</th>
            <td><?php echo $i['total_pemesanan'] ?></td>
            <tr>
                <th width="20%">Status</th>
                <th width="1%">:</th>
                <td><?php echo $i['status_pemesanan'] ?></td>
            </tr>
            <tr>
                <th width="20%">Struk</th>
                <th width="1%">:</th>
                <td><img src="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>" width="300"></td>
            </tr>  
            <tr>
                <th width="20%">No Resi</th>
                <th width="1%">:</th>
                <td><?php echo $i['resi_pemesanan'] ?></td>
            </tr>
        <?php endforeach?>
    </table>
    
    <!-- /.row (nested) -->
</div>




<th width="100%"></th>
<td><a href="<?=site_url('pemesanan')?>"  class="btn btn-danger">Kembali</a></td>
</table>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->

<!-- /. PAGE INNER  -->
</div>
</div>
</div>