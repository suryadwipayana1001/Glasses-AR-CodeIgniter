      <?php $this->load->view("t_users/sidebar");?>
      
      
      
      <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                         <h4>Wellcome <?php echo $this->session->nama; ?></h4>
                         
                     </div>
                     <br>
                     
                     <form class="form-horizontal" method="post" action=""enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-md-12 mb-3">
                             Nama <input type="text" class="form-control" name="nama_customer" value="<?php echo $nama_customer ?>" placeholder="Nama" required>
                         </div>
                         <div class="col-md-12 mb-3">
                             Email <input type="text" class="form-control" name="email_customer" value="<?php echo $email_customer ?>"placeholder="Email" required>
                         </div>
                         <div class="col-md-12 mb-3">
                           Password <input type="text" class="form-control" name="email_customer" value="<?php echo $password_customer ?>" placeholder="Email" required>
                       </div>
                       <div class="col-md-12 mb-3">
                         Password <input type="text" class="form-control" name="password_customer" value="<?php echo $password_customer?>" placeholder="Password" required>
                     </div>
                     <div class="col-md-12 mb-3">
                         Tanggal Lahir <input type="date" class="form-control" name="tanggallahir_customer"  value="<?php echo $tanggallahir_customer?>" required>
                     </div>
                     <div class="col-md-6 mb-3">
                        <button class="btn amado-btn w-100">Simpan</button>
                    </div>
                    <div class="col-md-6 mb-3">
                     <a href="<?php echo base_url('index.php/akunsaya/Logout'); ?>" class="btn amado-btn w-100">Logout</a>
                 </div>
             </div>
         </form>
     </div>
 </div>
</div>
</div>
</div>
</div>