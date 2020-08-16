<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("t_users/sidebar");?>
<div class="cart-table-area section-padding-100">
    <div class="">
        <div class="">
            <div class="">
                <div class="cart-title mt-50">
                    <h2>Transaksi</h2>
                     <?php echo $this->session->flashdata('message');?>
                </div>
                <div class=" keranjang">
                    <table class="table table-responsive transaksi">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Struk</th>
                                <th>Status</th>
                                <th>Tindakan</th>
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
                               
                                <td><img src="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>"></td>
                                <td><?php echo $status_pemesanan=$i['status_pemesanan'];?></td>
                                <td>
                                 <a href="<?=site_url('transaksi/tambah_struk/'.$i['id_pemesanan'])?>"  class="tulisbtn btn btn-warning btn-xs"><i class="fa fa-file-o "></i>Pembayaran</a> <div class="mt-2"></div>
                                  <a href="<?=site_url('transaksi/detail/'.$i['id_pemesanan'])?>"  class="tulisbtn btn btn-warning btn-xs"><i class="fa fa-check-square-o"></i>Detail Transaksi</a><div class="mt-2">  </div>
                                   <a href="<?=site_url('transaksi/invoice/'.$i['id_pemesanan'])?>"  target="_blank"  class="tulisbtn btn btn-warning btn-xs"><i class="fa fa-file-text-o"></i>Cetak  Invoice</a>
                               
                                </td>
                                     
                                    <!-- <form action="<?=site_url('transaksi/hapus_transaksi')?>" method="post" >
                                        <input type="hidden" name="id_pemesanan" value="<?php echo$i['id_pemesanan']?>"> 
                                       
                                          <button onclick="return confirm('Apakah anda yakin menghapus data pemesanan ini?')" class="tulisbtn btn btn-danger btn-xs"><i class="fa fa-trash"></i> 
                                      </button>
                                  </form> -->
                              </td>
                              
                          </tr>
                      <?php endforeach;?>
   <div class="row">
        
        </div>
                  </tbody>
              </table>
                  <div class="col-12">
                <!-- Pagination -->
                <nav aria-label="navigation">
                <ul class="pagination justify-content-end mt-50">
                    <?php
                        foreach ($tot->result_array() as $jum) :
                            $total = $jum['jum'];
                        endforeach;

                        $pages = ceil($total/$jumhal);

                        $bel = current_url();

                        for ($i=1; $i<=$pages ; $i++){ ?>
                            <li class="page-item"><a class="page-link" href='<?php echo $bel; ?>?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                            <?php } 
                        ?>
                    </ul>
                </nav>
            </div>
          </div>
      </div>
  </div>
</div>
</div>

</div>
</body>

</html>