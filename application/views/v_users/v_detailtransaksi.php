<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<body>
  <?php $this->load->view("t_users/sidebar");?>

  <div class="cart-table-area section-padding-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="checkout_details_area mt-50 clearfix">

            <div class="cart-summary">
              <h5>Detail Produk</h5>
        <div class="cart-table clearfix">

              <table class="table table-responsive detailtransaksi">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
       foreach ($data1->result_array()as $i):
        $totalharga_dipesan=$i['totalharga_dipesan'];
        ?>
                  <tr>
                    <td><?php echo $i['nama_dipesan']?></td>
                    <td>Rp.<?php echo $i['harga_dipesan']?></td>
                    <td>.<?php echo $i['jumlah_dipesan']?></td>
                     <td>Rp.<?php echo $i['totalharga_dipesan']?></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
        <p>
        <h5>Detail Pemesan</h5>
            <?php
            foreach ($data->result_array()as $i):
              ?>
              <form id="form-checkout" class="form-horizontal" method="post" action=""enctype="multipart/form-data" >
                <div class="row">

                  <div class="col-6 mb-3">Nama
                    <input type="text" class="form-control" name="nama_pemesanan" value="<?php echo $i['nama_pemesanan'] ?>" readonly>
                  </div>
                  <div class="col-6 mb-3">Provinsi
                    <input type="text" class="form-control" name="nohp_pemesanan" value="<?php echo $i['provinsi_pemesanan']?>" readonly>
                  </div>
                  <div class="col-6 mb-3">Kabupaten
                    <input type="text" class="form-control" name="nohp_pemesanan" value="<?php echo $i['kabupaten_pemesanan']?>" readonly> 
                  </div>
                  <div class="col-6 mb-3">Kecamatan
                    <input type="text" class="form-control" name="nohp_pemesanan" value="<?php echo $i['kecamatan_pemesanan']?>" readonly>
                  </div>
                  <div class="col-12 mb-3">Alamat
                    <input type="text" class="form-control" name="nohp_pemesanan" value="<?php echo $i['alamat_pemesanan']?>" readonly>
                  </div>
                  <div class="col-6 mb-3">Kode Pos
                    <input type="text" class="form-control" name="nohp_pemesanan" value="<?php echo $i['kodepos_pemesanan']?>" readonly>
                  </div>
                  <div class="col-6 mb-3">No Hp
                    <input type="text" class="form-control" name="nama_pemesanan" value="<?php echo $i['nohp_pemesanan']?>" readonly>
                  </div>
                  <div class="col-12 mb3">
                   <a href="<?=site_url('transaksi')?>" class="btn amado-btn w-100">Kembali</a>
                 </div>
               </div>
             </form>
           <?php endforeach;?>
         </div>
       </div>

       <div class="col-12 col-lg-4">
           <div class="cart-summary">
          <h5>Detail Transaksi</h5>
          <ul class="summary-table">
            <?php
            foreach ($data->result_array()as $i):
              ?>
              <li><span>Subtotal : </span> <span id="subtotal">Rp.<?php echo$i['subtotal_pemesanan'];?></span></li>
              <li><span>Kurir : </span><span><?php echo$i['kurir_pemesanan']?></span></li>
              <li><span>Ongkos Kirim : </span> <span>Rp.<?php echo $i['ongkir_pemesanan'];?></span></li>
              <li><span>Total : </span><span>Rp.<?php echo$i['total_pemesanan']?></span></li>
              <li><span>Status : </span><span><?php echo$i['status_pemesanan']?></span></li>
              <li><span>Struk : </span><span><img src="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>" width="270px"></span></li>
              <li><span>No Resi : </span><span><?php echo$i['resi_pemesanan']?></span></li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    </div>


  </div>

</div>
</div>
</div>
</div>
</div>
</body>
</html>