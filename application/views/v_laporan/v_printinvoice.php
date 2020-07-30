<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                             SURYA KACAMATA
                        </div>

                        <div class="col-md-6 text-right">
                           
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-4 p-4">
                        <div class="col-md-6">
                             <?php
            foreach ($data->result_array()as $i):
              ?>
              <?php endforeach;?>
              <p class="mb-1">Nama : <?php echo $i['nama_pemesanan'] ?></p>
              <p class="mb-1">Alamat : <?php echo $i['alamat_pemesanan']?> ,<?php echo $i['kecamatan_pemesanan']?> ,<?php echo $i['kabupaten_pemesanan']?> ,<?php echo $i['provinsi_pemesanan']?></p>
              <p class="mb-1">Kode Pos : <?php echo $i['kodepos_pemesanan']?></p>
              <p class="mb-1">No Handphone : <?php echo $i['nohp_pemesanan']?></p>
              <p class="mb-1"><span class="text-muted"></span><img src="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>" width="150px" height="50px"></p>      
                        </div>

                        <div class="col-md-6 text-right">
                        
                                     
                          <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">No</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Nama</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Harga</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Jumlah</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                $no=1;
                   foreach ($data1->result_array()as $i):

                    $totalharga_dipesan=$i['totalharga_dipesan'];
                    ?>
                                    <tr>

                    <td><?php echo $no++?></td>
                    <td><?php echo $i['nama_dipesan']?></td>
                    <td>Rp.<?php echo $i['harga_dipesan']?></td>
                    <td><?php echo $i['jumlah_dipesan']?></td>
                    <td>Rp.<?php echo $i['totalharga_dipesan']?></td>
                     <?php endforeach;?>
                  </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
  <?php
            foreach ($data->result_array()as $i):
              ?>
            <?php endforeach;?>

 <div class="d-flex flex-row-reverse bg- text-black p-1">
            <div class="py-2 px-5 text-right">
              <div class="mb-2">No Resi</div>
              <div class="h5 font-weight-light">$<?php echo$i['resi_pemesanan']?></div>
            </div>
            <div class="py-2 px-5 text-right">
              <div class="mb-1">Total</div>
              <div class="h5 font-weight-light">Rp.<?php echo$i['total_pemesanan']?></div>
            </div>
            <div class="py-2 px-5 text-right">
              <div class="mb-1">Ongkos Kirim</div>
              <div class="h5 font-weight-light">Rp.<?php echo $i['ongkir_pemesanan'];?></div>
            </div>
            <div class="py-2 px-5 text-right">
              <div class="mb-1">Kurir</div>
              <div class="h5 font-weight-light"><?php echo$i['kurir_pemesanan']?></div>
            </div>
            <div class="py-2 px-5 text-right">
              <div class="mb-1">Sub Total</div>
              <div class="h5 font-weight-light">Rp.<?php echo$i['subtotal_pemesanan'];?></div>
            </div>
          </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

</div>


 <script type="text/javascript">
            window.print();
          </script>
