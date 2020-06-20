      <?php $this->load->view("t_users/sidebar");?>
      <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h5>Daftar sekarang dan nikmati pengalaman belanja yang lebih cepat dan mudah</h5>
                        </div>
                        <br>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/daftar/simpan_user'?>"enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   Nama <input type="text" class="form-control" name="nama_user" value="" placeholder="Nama" required>
                               </div>
                               <div class="col-md-12 mb-3">
                                   Email <input type="text" class="form-control" name="email_user" value="" placeholder="Email" required>
                               </div>
                               <div class="col-md-12 mb-3">
                                   Password <input type="text" class="form-control" name="password_user" value="" placeholder="Password" required>
                               </div>
                               <div class="col-md-12 mb-3">
                                   Tanggal Lahir <input type="date" class="form-control" name="tanggallahir_user"  required>
                               </div>
                               <input type="hidden" class="form-control" name="level_user" value="Customer" required>
                               <div class="col-md-6 mb-3">
                                <button class="btn amado-btn w-100">Simpan</button>
                            </div>
                            <div class="col-md-6 mb-3">
                               <a href="<?=site_url('akunsaya')?>" class="btn amado-btn w-100">Batal</a>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
