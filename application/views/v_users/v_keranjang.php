  <?php $this->load->view("t_users/sidebar");?>
 <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                      
                                    </tr>
                                </thead>
                                 <tbody id="detail_cart">

                                </tbody>
                            </table>
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
                            <div class="cart-btn mt-100">
                                <a href="<?=site_url('checkout')?>" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>