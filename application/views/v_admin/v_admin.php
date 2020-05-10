        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
         <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel Admin <small></small>
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
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($data->result_array()as $i):
                                         $id_admin=$i['id_admin'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $username_admin=$i['username_admin'];?></td>
                                            <td><?php echo $password_admin=$i['password_admin'];?></td>
                                            <td style="width: 120px;">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"data-toggle="modal" data-target="#modal_edit<?php echo $id_admin;?>"></i></button>
                                             <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_admin;?>"><i class="fa fa-trash-o "></i></button> 
                                         </td>
                                     </tr>
                                 <?php endforeach;?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <!--End Advanced Tables -->
             <!-- ============ MODAL ADD =============== -->
             <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h3 class="modal-title" id="myModalLabel">Tambah Data Admin</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/simpan_admin'?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Username</label>
                                    <div class="col-xs-8">
                                        <input name="username_admin" class="form-control" type="text" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Password</label>
                                    <div class="col-xs-8">
                                        <input name="password_admin" class="form-control" type="text" placeholder="Password" required>
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
            <!-- ============ MODAL EDIT BARANG =============== -->
            <?php 
            foreach($data->result_array() as $i):
                $id_admin=$i['id_admin'];
                $username_admin=$i['username_admin'];
                $password_admin=$i['password_admin'];
                ?>
                <div class="modal fade" id="modal_edit<?php echo $id_admin;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Edit Data Admin</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/edit_admin'?>">
                                <div class="modal-body">

                               <input name="id_admin" value="<?php echo $id_admin;?>" class="form-control" type="hidden"  readonly>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Username</label>
                                        <div class="col-xs-8">
                                            <input name="username_admin" value="<?php echo $username_admin;?>" class="form-control" type="text" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Password</label>
                                        <div class="col-xs-8">
                                            <input name="password_admin" value="<?php echo $password_admin;?>" class="form-control" type="text" placeholder="Password" required>
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
            <!--END MODAL EDIT BARANG-->
            <!-- ============ MODAL HAPUS =============== -->
            <?php 
            foreach($data->result_array() as $i):
                $id_admin=$i['id_admin'];
                $username_admin=$i['username_admin'];
                ?>
                <div class="modal fade" id="modal_hapus<?php echo $id_admin;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Data Admin</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/hapus_admin'?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $username_admin;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_admin" value="<?php echo $id_admin;?>">
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
