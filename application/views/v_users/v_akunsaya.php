      <?php $this->load->view("t_users/sidebar");?>
       <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h5 class="alert alert-warning">Masuk ke akun agar dapat melakukan transaksi dan melihat pesanan anda</h4>
                            </div>
                            <br>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/akunsaya/loginakun'?>"enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                       Email <input type="text" class="form-control" name="email_user" value="" placeholder="Email" required>
                                    </div>
                                     <div class="col-md-12 mb-3">
                                       Password <input type="text" class="form-control" name="password_user" value="" placeholder="Password" required>
                                    </div>

                                    <div class="col-6 mb-3">
                                         <button class="btn amado-btn w-100">Masuk</button>
                                    </div>
                                    <div class="col-6 mb-3">                                                                  
                                        <a href="<?=site_url('akunsaya/daftar')?>" class="btn amado-btn w-100">Daftar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
