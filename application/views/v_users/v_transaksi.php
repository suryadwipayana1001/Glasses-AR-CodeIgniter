<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("t_users/sidebar");?>
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
    </div>
    <div class="section-padding-100">
      <div class="cart-title mt-50">
        <h2>Transaksi</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Struk</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $no=1;
           foreach ($data->result_array()as $i):

            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++?></td>
                <td><?php echo $nama_pemesanan=$i['nama_pemesanan'];?></td>
                <td><?php echo $alamat_pemesanan=$i['alamat_pemesanan'];?>, <?php echo $kecamatan_pemesanan=$i['kecamatan_pemesanan'];?>, <?php echo $kabupaten_pemesanan=$i['kabupaten_pemesanan'];?>, <?php echo $provinsi_pemesanan=$i['provinsi_pemesanan'];?>, <?php echo $kodepos_pemesanan=$i['kodepos_pemesanan'];?>.</td>
                <td><?php echo $nohp_pemesanan=$i['nohp_pemesanan'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $status_pemesanan=$i['status_pemesanan'];?></td>
            </tr>
               <?php endforeach;?>
        </tbody>
    </table>
</div>
</div> 
</div>
</div>
</body>

</html>