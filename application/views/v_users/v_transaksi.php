<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("t_users/sidebar");?>
<div class="cart-table-area section-padding-100">
    <div class="">
        <div class="">
            <div class="">
                <div class="cart-title mt-50">
                    <h2>Transaksi</h2>
                </div>
                <div class=" keranjang">
                    <table class="table table-responsive transaksi">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Produk</th>
                                <th>Struk</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no=1;
                           foreach ($data->result_array()as $i):
                            ?>
                            <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $i['nama_pemesanan'];?></td>
                            <td><?php echo $i['alamat_pemesanan'];?>, <?php echo $i['kecamatan_pemesanan'];?>, <?php echo $i['kabupaten_pemesanan'];?>, <?php echo $i['provinsi_pemesanan'];?>, <?php echo $i['kodepos_pemesanan'];?>.</td>
                            <td></td>
                            <td>
                
                            </td>
                            <td><?php echo $status_pemesanan=$i['status_pemesanan'];?></td>
                            <td><a href="<?=site_url('detailtransaksi/idpemesanan/'.$i['id_pemesanan'])?>"  class="tulisbtn btn btn-success btn-xs"><i class="fa fa-check-square-o"></i></a></td>
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
</body>

</html>