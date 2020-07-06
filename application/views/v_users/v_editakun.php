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
                     <?php
                        foreach($data_user->result_array() as $i):
                        $nama_user = $i['nama_user'];
                        $email_user = $i['email_user'];
                        $password_user = $i['password_user'];
                        $tanggallahir_user = $i['tanggallahir_user'];
                     ?>
                     <form class="form-horizontal" method="post" action=""enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-md-12 mb-3">
                             Nama <input type="text" class="form-control" name="nama_user" value="<?php echo $nama_user ?>" placeholder="Nama"  required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                         </div>
                         <div class="col-md-12 mb-3">
                             Email <input type="text" class="form-control" name="email_user" value="<?php echo $email_user ?>"placeholder="Email"  required oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')">
                         </div>
                         <div class="col-md-12 mb-3">
                           Password <input type="text" class="form-control" name="email_user" value="<?php echo $password_user?>" placeholder="Password" required>
                       </div>
                     <div class="col-md-12 mb-3">
                         Tanggal Lahir <input type="date" class="form-control" name="tanggallahir_user"  value="<?php echo $tanggallahir_user?>"  required oninvalid="this.setCustomValidity('Tanggal Lahir tidak boleh kosong')" oninput="setCustomValidity('')">
                     </div>
                     <div class="col-md-6 mb-3">
                        <button class="btn amado-btn w-100">Simpan</button>
                    </div>
                    <div class="col-md-6 mb-3">
                     <a href="<?php echo base_url('index.php/akunsaya/Logoutakun'); ?>" class="btn amado-btn w-100">Logout</a>
                 </div>
             </div>
         </form>
         <?php endforeach;?>
     </div>
 </div>
</div>
</div>
</div>
</div>
