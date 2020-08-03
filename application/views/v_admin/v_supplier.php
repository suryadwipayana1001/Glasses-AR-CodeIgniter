        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
         <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel supplier <small></small>
                </h1>
            </div>
        </div> 
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <?php echo $this->session->flashdata('message');?>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"><i class="glyphicon glyphicon-plus"></i>Tambah Data</button>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($data->result_array()as $i):
                                        $id_supplier=$i['id_supplier'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $i['nama_supplier'];?></td>
                                            <td><?php echo $i['alamat_supplier'];?></td>
                                            <td><?php echo $i['nohp_supplier'];?></td>
                                            <td><?php echo $i['email_supplier'];?></td>
                                            <td style="width: 120px;">
                                                <a href="<?=site_url('supplier/detail_supplier/'.$i['id_supplier'])?>"  class="btn btn-success btn-xs"><i class="fa fa-check-square-o"></i></a>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"data-toggle="modal" data-target="#modal_edit<?php echo $id_supplier;?>"></i></button>
                                             <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_supplier;?>"><i class="fa fa-trash-o "></i></button> 
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
                            <h3 class="modal-title" id="myModalLabel">Tambah Data supplier</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/supplier/simpan_supplier'?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama</label>
                                    <div class="col-xs-8">
                                        <input name="nama_supplier" class="form-control" type="text" placeholder="Nama"required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Alamat</label>
                                    <div class="col-xs-8">
                                        <input name="alamat_supplier" class="form-control" type="text" placeholder="Alamat" required oninvalid="this.setCustomValidity('Data Alamat tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >No Handphone</label>
                                    <div class="col-xs-8">
                                        <input name="nohp_supplier" class="form-control" type="number" placeholder="No Handphone" required oninvalid="this.setCustomValidity('Data No Hp tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Email</label>
                                    <div class="col-xs-8">
                                        <input name="email_supplier" class="form-control" type="email" placeholder="Email" required oninvalid="this.setCustomValidity('Masukan Alamat Email Dengan Benar atau Data Email tidak boleh kosong')" oninput="setCustomValidity('')">
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
                $id_supplier=$i['id_supplier'];
                $nama_supplier=$i['nama_supplier'];
                $alamat_supplier=$i['alamat_supplier'];
                $nohp_supplier=$i['nohp_supplier'];
                $email_supplier=$i['email_supplier'];
                ?>
                <div class="modal fade" id="modal_edit<?php echo $id_supplier;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Edit Data supplier</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/supplier/edit_supplier'?>">
                                <div class="modal-body">
                                            <input name="id_supplier" value="<?php echo $id_supplier;?>" class="form-control" type="hidden"  readonly>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama</label>
                                        <div class="col-xs-8">
                                            <input name="nama_supplier" value="<?php echo $nama_supplier;?>" class="form-control" type="text" placeholder="nama" required oninvalid="this.setCustomValidity('Data Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Alamat</label>
                                        <div class="col-xs-8">
                                            <input name="alamat_supplier" value="<?php echo $alamat_supplier;?>" class="form-control" type="text" placeholder="alamat" required oninvalid="this.setCustomValidity('Data Alamat tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >No Handphone</label>
                                        <div class="col-xs-8">
                                            <input name="nohp_supplier" value="<?php echo $nohp_supplier;?>" class="form-control" type="number" placeholder="No Hp" required oninvalid="this.setCustomValidity('Data No Hp tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Email</label>
                                        <div class="col-xs-8">
                                            <input name="email_supplier" value="<?php echo $email_supplier;?>" class="form-control" type="Email" placeholder="Email" required oninvalid="this.setCustomValidity('Masukan Alamat Email Dengan Benar atau Data Email tidak boleh kosong')" oninput="setCustomValidity('')">
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
                $id_supplier=$i['id_supplier'];
                $nama_supplier=$i['nama_supplier'];
                ?>
                <div class="modal fade" id="modal_hapus<?php echo $id_supplier;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Data supplier</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/supplier/hapus_supplier'?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $nama_supplier;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_supplier" value="<?php echo $id_supplier;?>">
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
    