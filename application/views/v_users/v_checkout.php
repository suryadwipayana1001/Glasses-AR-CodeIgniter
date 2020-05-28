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
                                    <div class="col-md-12 mb-3">
                                       Nama <input type="text" class="form-control" name="nama_pemesanan" value="" placeholder="Nama" required>
                                    </div>
                                     <div class="col-md-12 mb-3">
                                       Provinsi <input type="text" class="form-control" name="provinsi_pemesanan" value="" placeholder="Provinsi" required>
                                    </div>
                                     <div class="col-md-12 mb-3">
                                       Kabupaten <input type="text" class="form-control" name="kabupaten_pemesanan" value="" placeholder="Kabupaten" required>
                                    </div>
                                     <div class="col-md-12 mb-3">
                                       Kecamatan <input type="text" class="form-control" name="kecamatan_pemesanan" value="" placeholder="Kecamatan" required>
                                    </div>
                                   <!-- <div class="col-12 mb-3"> Provinsi
                                        <select class="w-100" id="country">
                                        <option value="usa">Bali</option>
                                        <option value="uk">Jawa Timur</option>
                                        <option value="ger">Jawa Tengah</option>
                                    </select>
                                    </div>
                                    -->
                                    <div class="col-12 mb-3">Alamat
                                        <textarea name="alamat_pemesanan" class="form-control w-100"  cols="30" rows="10" placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">Kode Pos
                                        <input type="text" class="form-control" name="kodepos_pemesanan" placeholder="Kode Pos" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">No Telepon
                                        <input type="number" class="form-control" name="nohp_pemesanan" min="0" placeholder="No Telepon" value="">
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
                                <li><span>subtotal:</span> <span>$140.00</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$140.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
