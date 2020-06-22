<?php $this->load->view("t_admin/sidebar");?>
   <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Profile Admin
                        </h2>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h3>Hallo <?php echo $this->session->nama; ?></h3>
                        </div>
                          <?php
                        foreach($data_user->result_array() as $i):
                        $nama_user = $i['nama_user'];
                        $email_user = $i['email_user'];
                        $password_user = $i['password_user'];
                        $tanggallahir_user = $i['tanggallahir_user'];
                     ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                     
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" value="<?php echo $nama_user ?>" placeholder="Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?php echo $email_user ?>"placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" value="<?php echo $password_user?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" value="<?php echo $tanggallahir_user?>">
                                        </div>
                                       
                                       
                                    </form>
                                </div>
                                 <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>No Hp</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control">
                                        </div>
                                    </form>
                                  
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                           
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <?php endforeach;?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
        
             <!-- /. PAGE INNER  -->
            </div>
        </div>
    </div>