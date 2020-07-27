        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
         <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel user <small></small>
                </h1>
            </div>
        </div> 
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"><i class="glyphicon glyphicon-plus"></i>Tambah Data</button> 
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Level</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($data->result_array()as $i):
                                        $id_user=$i['id_user'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $i['nama_user'];?></td>
                                            <td><?php echo $i['email_user'];?></td>
                                            <td><?php echo $i['password_user'];?></td>
                                            <td><?php echo $i['tanggallahir_user'];?></td>
                                            <td><?php echo $i['alamat_user'];?></td>
                                            <td><?php echo $i['nohp_user'];?></td>
                                            <td><?php echo $i['jeniskelamin_user'];?></td>
                                            <td><?php echo $i['level_user'];?></td>
                                            <td style="width: 120px;">
                                                <a href="<?=site_url('user/detail_user/'.$i['id_user'])?>"  class="btn btn-success btn-xs"><i class="fa fa-check-square-o"></i></a>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"data-toggle="modal" data-target="#modal_edit<?php echo $id_user;?>"></i></button>
                                             <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_user;?>"><i class="fa fa-trash-o "></i></button> 
                                         </td>
                                     </tr>
                                 <?php endforeach;?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h3 class="modal-title" id="myModalLabel">Tambah Data user</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/user/simpan_user'?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama</label>
                                    <div class="col-xs-8">
                                        <input name="nama_user" class="form-control" type="text" placeholder="Nama"required oninvalid="this.setCustomValidity('Data Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Email</label>
                                    <div class="col-xs-8">
                                        <input name="email_user" class="form-control" type="text" placeholder="Email" required oninvalid="this.setCustomValidity('Data Email tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Password</label>
                                    <div class="col-xs-8">
                                        <input name="password_user" class="form-control" type="text" placeholder="Password" required oninvalid="this.setCustomValidity('Data Password tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Tanggal Lahir</label>
                                    <div class="col-xs-8">
                                        <input name="tanggallahir_user" class="form-control" type="date" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Data Tanggal Lahir tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Alamat</label>
                                    <div class="col-xs-8">
                                        <input name="alamat_user" class="form-control" type="text" placeholder="Alamat" required oninvalid="this.setCustomValidity('Data Alamat tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >No Handphone</label>
                                    <div class="col-xs-8">
                                        <input name="nohp_user" class="form-control" type="text" placeholder="No Handphone" required oninvalid="this.setCustomValidity('Data No Handphone tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                    <div class="col-xs-8">
                                        <select name="jeniskelamin_user"  class="form-control input-sm"  required oninvalid="this.setCustomValidity('Data Jenis Kelamin tidak boleh kosong')" oninput="setCustomValidity('')">
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Level</label>
                                    <div class="col-xs-8">
                                        <select name="level_user" class="form-control input-sm"  required oninvalid="this.setCustomValidity('Data Level tidak boleh kosong')" oninput="setCustomValidity('')">
                                        <option value="">--Pilih User--</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Customer">Customer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--END MODAL ADD-->
            <!-- ============ MODAL EDIT user =============== -->
            <?php 
            foreach($data->result_array() as $i):
                $id_user=$i['id_user'];
                $nama_user=$i['nama_user'];
                $email_user=$i['email_user'];
                $password_user=$i['password_user'];
                $tanggallahir_user=$i['tanggallahir_user'];
                $alamat_user=$i['alamat_user'];
                $nohp_user=$i['nohp_user'];
                $jeniskelamin_user=$i['jeniskelamin_user'];
                $level_user=$i['level_user'];
                ?>
                <div class="modal fade" id="modal_edit<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Edit Data user</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/user/edit_user'?>">
                                <div class="modal-body">
                                            <input name="id_user" value="<?php echo $id_user;?>" class="form-control" type="hidden"  readonly>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama</label>
                                        <div class="col-xs-8">
                                            <input name="nama_user" value="<?php echo $nama_user;?>" class="form-control" type="text" placeholder="nama" required oninvalid="this.setCustomValidity('Data Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Email</label>
                                        <div class="col-xs-8">
                                            <input name="email_user" value="<?php echo $email_user;?>" class="form-control" type="text" placeholder="Email" required oninvalid="this.setCustomValidity('Data Email tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Password</label>
                                        <div class="col-xs-8">
                                            <input name="password_user" value="<?php echo $password_user;?>" class="form-control" type="text" placeholder="Password" required oninvalid="this.setCustomValidity('Data Password tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Tanggal Lahir</label>
                                        <div class="col-xs-8">
                                            <input name="tanggallahir_user" value="<?php echo $tanggallahir_user;?>" class="form-control" type="date" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Data Tanggal Lahir tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Alamat</label>
                                        <div class="col-xs-8">
                                            <input name="alamat_user" value="<?php echo $alamat_user;?>" class="form-control" type="text" placeholder="Alamat" required oninvalid="this.setCustomValidity('Data Alamat tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >No Handphone</label>
                                        <div class="col-xs-8">
                                            <input name="nohp_user" value="<?php echo $nohp_user;?>" class="form-control" type="text" placeholder="No Handphone" required oninvalid="this.setCustomValidity('Data No Handphone tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                                        <div class="col-xs-8">
                                        <select name="jeniskelamin_user" class="form-control input-sm">
                                       <?php if($jeniskelamin_user=='Laki-Laki'):?>
                                        <option value="Laki-Laki" selected>Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <?php elseif($jeniskelamin_user=='Perempuan'):?>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                         <?php endif;?>
                                        </select>
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="control-label col-xs-3" >level</label>
                                        <div class="col-xs-8">
                                        <select name="level_user" class="form-control input-sm">
                                       <?php if($level_user=='Admin'):?>
                                        <option value="Admin" selected>Admin</option>
                                        <option value="Customer">Customer</option>
                                        <?php elseif($level_user=='Customer'):?>
                                        <option value="Admin">Admin</option>
                                        <option value="Customer" selected>Customer</option>
                                         <?php endif;?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
             <!--End Advanced Tables -->
            <!-- ============ MODAL HAPUS =============== -->
            <?php 
            foreach($data->result_array() as $i):
                $id_user=$i['id_user'];
                $nama_user=$i['nama_user'];
                ?>
                <div class="modal fade" id="modal_hapus<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Data user</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/user/hapus_user'?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $nama_user;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            <!--END MODAL HAPUS -->
        </div>
    </div>
</div>

    