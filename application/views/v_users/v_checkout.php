<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<body>
          <?php $this->load->view("t_users/sidebar");?>

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                <div class="cart-title">
                    <h2>Checkout</h2>
                </div>

                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/checkout/simpan_pemesanan'?>"enctype="multipart/form-data" >
                <div class="row">
                <div class="col-md-12 mb-3">Provinsi 
                    <select onchange="get_kota('asal')" id="provinsi_asal" class="w-100 provinsi">
                        
                    </select>
                </div>

                  <div class="col-md-12 mb-3">Kota Asal
                    <select id="kota_asal" class="w-100">
                        
                    </select>
                  </div>

                  <div class="col-md-12 mb-3">Provinsi Tujuan
                    <select onchange="get_kota('tujuan')" id="provinsi_tujuan" class="w-100 provinsi">
                   
                    </select>
                  </div>

                  <div class="col-md-12 mb-3">Kota Tujuan
                    <select id="kota_tujuan" class="w-100">
                        
                    </select>
                  </div>


                  <div class="col-md-12 mb-3">Berat bulatkan ke dalam (kg)
                    <input type="number" name="berat" id="berat" class="w-100"> 
                  </div>

                  <div class="col-md-12 mb-3">
                    <label > Kurir</label>
                    <select onChange="get_ongkir()" name="kurir" id="kurir" class="w-100">
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="service">Service</label>
                    <select name="service" id="service" class="w-100">
                        
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn amado-btn w-100">Simpan</button>
                </div>
            </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>Subtotal:</span> <span>630000</span></li>
                                <li><span>Ongkos Kirim:</span> <span>Free</span></li>
                                <li><span>Total:</span> <span>630000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>