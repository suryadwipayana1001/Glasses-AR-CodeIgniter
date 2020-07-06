<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<body>
  <?php $this->load->view("t_users/sidebar"); ?>

  <div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Checkout</h2>
                    </div>
                    <form id="form-checkout" class="form-horizontal" method="post" action="<?php echo base_url().'index.php/checkout/simpan_pemesanan'?>"enctype="multipart/form-data" >
                        <div class="row">

                        <div class="col-6 mb-3">Nama
                            <input type="text" class="form-control" name="nama_pemesanan" placeholder="Nama">
                        </div>
                        <div class="col-md-6 mb-3">Provinsi
                            <select onchange="get_kota('tujuan')" name="provinsi_pemesanan" id="provinsi_tujuan" class="w-100 provinsi">
                            </select>
                        </div>
                        <div class="col-md-6 mb-3" style="display: none">Kota Asal
                            <input type="text" value="447" id="kota_asal">
                        </div>
                        <div class="col-md-6 mb-3">Kabupaten
                            <select onChange="get_ongkir()" name="kabupaten_pemesanan" id="kota_tujuan"  class="w-100">
                            </select>
                        </div>
                        <div class="col-6 mb-3">Kecamatan
                            <input type="text" class="form-control" name="kecamatan_pemesanan" placeholder="Kecamatan">
                        </div>
                        <div class="col-12 mb-3">Alamat
                            <input type="text" class="form-control" name="alamat_pemesanan" placeholder="Alamat">
                        </div>
                        <div class="col-6 mb-3">Kode Pos
                            <input type="text" class="form-control" name="kodepos_pemesanan" placeholder="Kode Pos">
                        </div>
                        <div class="col-6 mb-3">No Hp
                            <input type="text" class="form-control" name="nohp_pemesanan" placeholder="No Handphone">
                        </div>
                            <input type="hidden" class="form-control" name="status_pemesanan" value="Menunggu Konfirmasi">
                            <input type="hidden" value="1" name="berat" id="berat" class="w-100"> 

                        <div class="col-md-12 mb-3">
                            <label > Kurir</label>
                            <select onChange="get_ongkir()" name="kurir" id="kurir" class="w-100">
                                <option value="jne">JNE</option>
                                <option value="pos">POS</option>
                                <option value="tiki">TIKI</option>
                            </select>
                        </div>

                        <input type="hidden" name="prov_tuj" id="prov_tuj">
                        <input type="hidden" name="kab_tuj" id="kab_tuj">
                        <?php
                        $i = 1;
                            foreach ($cartItems as $cartItem) :
                            ?>
                            <input type="hidden" name="id_barang<?php echo $i; ?>" value="<?php echo $cartItem['id']; ?>">
                            <input type="hidden" name="nama_barang<?php echo $i; ?>" value="<?php echo $cartItem['name']; ?>">
                            <input type="hidden" name="harga_barang<?php echo $i; ?>" value="<?php echo $cartItem['price']; ?>">
                            <input type="hidden" name="jumlah_barang<?php echo $i; ?>" value="<?php echo $cartItem['qty']; ?>">
                            <input type="hidden" name="subtotal<?php echo $i; ?>" value="<?php echo $cartItem['subtotal']; ?>">
                        <?php $i = $i+1; endforeach; ?>
                        <input type="hidden" name="jum_bar" value="<?php echo $i-1; ?>">
                        <div class="col-md-12 mb-3">
                            <label for="service">Service</label>
                            <select name="kurir_pemesanan" onChange="update_total()" id="service" class="w-100">

                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <button class="btn amado-btn w-100">Proses</button>
                        </div>
                        <div class="col-6 mb-3">
                             <a href="<?=site_url('keranjang')?>" class="btn amado-btn w-100">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="cart-summary">
                <h5>Cart Total</h5>

<ul class="summary-table">
<?php 
// var_dump($cartItems);
$subtotal = '';
foreach ($cartItems as $cartItem) :
    ?>
    <li><span><?php echo $cartItem['name']; ?></span><span><?php echo $cartItem['qty']; ?></span><span><?php echo $cartItem['price']; ?></span></li>
    <?php
    error_reporting(0); 
    $subtotal += $cartItem['subtotal'];
endforeach; ?>
</ul>

                <ul class="summary-table">
                    <li><span>Subtotal:</span> <span id="subtotal"><?php echo $subtotal;  ?></span></li>
                    <div>
                    <li><span>Ongkos Kirim:</span> <span id="ongkir"></span></li>
                    <li><span>Total:</span> <span id="total"></span></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>