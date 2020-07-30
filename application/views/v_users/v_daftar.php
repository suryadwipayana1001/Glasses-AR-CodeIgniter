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
                        <?php echo validation_errors(); ?>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/akunsaya/simpan_user'?>"enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   Nama <input type="text" class="form-control" name="nama_user" value="" placeholder="Nama" required>
                               </div>
                               <div class="col-md-12 mb-3">
                                   Email <input type="text" class="form-control" name="email_user" value="" placeholder="Email" required>
                               </div>
                               <div class="col-md-12 mb-3">
                                   Password <input type="text" class="form-control" name="password_userz" value="" placeholder="Password" required>
                               </div>

                               <!--  <div class="col-md-12 mb-3">
                                   Repassword <input type="text" class="form-control" id="repassword" name="Repassword" value="" placeholder="Masukan kembali Password" required>
                               </div> -->
                               <div class="col-md-12 mb-3">
                                   Tanggal Lahir <input type="date" class="form-control" name="tanggallahir_user"  required>
                               </div>
                                <div class="col-md-12 mb-3">
                                   Alamat<input type="text" class="form-control" name="alamat_user" placeholder="Alamat" required>
                               </div>
                                 <div class="col-md-12 mb-3">
                                   No Hp<input type="text" class="form-control" name="nohp_user" placeholder="No Handphone" required>
                               </div>
                                  <div class="col-md-12 mb-3">
                            <label > Jenis Kelamin</label>
                            <select name="jeniskelamin_user" class="w-100">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                               <input type="hidden" class="form-control" name="level_user" value="Customer" required>
                               <div class="col-md-6 mb-3">
                                <button class="btn amado-btn w-100" onClick="validate();">Simpan</button>
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
<!-- <script language="javascript">
        function validate() {
            var password1 = document.getElementById('password').value;
            var password2 = document.getElementById('repassword').value;
            if (password1 != password2) {
                alert("Password Tidak Sama!!");
            } /*else {
                alert("Password Tersimpan");
            }*/
        }
    </script> -->