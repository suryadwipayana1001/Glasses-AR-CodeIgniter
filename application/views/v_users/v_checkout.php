      <?php $this->load->view("t_users/sidebar");?>
       <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                       Nama <input type="text" class="form-control" id="nama" value="" placeholder="Nama" required>
                                    </div>
                                    <div class="col-12 mb-3"> Provinsi
                                        <select class="w-100" id="country">
                                        <option value="usa">Bali</option>
                                        <option value="uk">Jawa Timur</option>
                                        <option value="ger">Jawa Tengah</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3"> Kabupaten
                                        <select class="w-100" id="country">
                                        <option value="usa">Tabanan</option>
                                        <option value="uk">Buleleng</option>
                                        <option value="ger">Badung</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3"> Kecamatan
                                        <select class="w-100" id="country">
                                        <option value="usa">Kediri Rock City</option>
                                        <option value="uk">Marga</option>
                                        <option value="ger">Selemadeg</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">Catatan
                                        <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Leave a comment about your order"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">Kode Pos
                                        <input type="text" class="form-control" id="kode pos" placeholder="Kode Pos" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">No Telepon
                                        <input type="number" class="form-control" id="phone_number" min="0" placeholder="No Telepon" value="">
                                    </div>

                                    <div class="col-12">
                                         <a href="#" class="btn amado-btn w-100">Simpan</a>
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
