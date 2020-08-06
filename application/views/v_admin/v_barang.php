        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
           <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel barang <small></small>
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
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Foto</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($data->result_array()as $i):
                                        $id_barang=$i['id_barang'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $i['nama_barang'];?></td>
                                            <td><?php echo $i['jumlah_barang'];?></td>
                                            <td><?php echo 'Rp ' .number_format ($i['harga_barang']);?></td>
                                            <td><img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="width:100px"></td>
                                            
                                            <td style="width: 120px;">
                                               <a href="<?=site_url('barang/detail_barang/'.$i['id_barang'])?>"  class="btn btn-success btn-xs"><i class="fa fa-check-square-o"></i></a>
                                               <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"data-toggle="modal" data-target="#modal_edit<?php echo $id_barang;?>"></i></button>
                                               <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_barang;?>"><i class="fa fa-trash-o "></i></button> 

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
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h3 class="modal-title" id="myModalLabel">Tambah Data barang</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/barang/simpan_barang'?>"enctype="multipart/form-data" >
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama</label>
                                    <div class="col-xs-8">
                                        <input name="nama_barang" class="form-control" type="text" placeholder="Nama"   title="Hanya boleh memasukkan huruf" required oninvalid="this.setCustomValidity('Data Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Jumlah</label>
                                    <div class="col-xs-8">
                                        <input name="jumlah_barang" class="form-control" type="number" placeholder="Jumlah" required oninvalid="this.setCustomValidity('Data Jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-xs-8">
                                        <input name="harga_barang" class="form-control" type="number" placeholder="Harga"  required oninvalid="this.setCustomValidity('Data Harga tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Brand</label>
                                    <div class="col-xs-8">
                                        <input name="brand_barang"  class="form-control" type="text" placeholder="Brand" required oninvalid="this.setCustomValidity('Data Brand tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Lensa</label>
                                    <div class="col-xs-8">
                                        <input name="lensa_barang" class="form-control" type="text" placeholder="Lensa" required oninvalid="this.setCustomValidity('Data Lensa tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Frame</label>
                                    <div class="col-xs-8">
                                        <input name="frame_barang" class="form-control" type="text" placeholder="Frame" required oninvalid="this.setCustomValidity('Data Frame tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Deskripsi</label>
                                    <div class="col-xs-8">
                                        <input name="deskripsi_barang" class="form-control" type="text" placeholder="Deskripsi" required oninvalid="this.setCustomValidity('Data Deskripsi Produk tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Foto</label>
                                    <div class="col-xs-8">
                                        <input type="file" name="filefoto" class="dropify" data-height="100" data-width="50" required oninvalid="this.setCustomValidity('Data Foto tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Model 3D</label>
                                    <div class="col-xs-8">
                                        <select name="model_3d" class="form-control input-sm" >
                                            <option value="">--Pilih Model 3D--</option>
                                            <option value="rayban_andy_havane_orange_flash">rayban_andy_havane_orange_flash</option>
                                            <option value="rayban_caravan_or_vert_flash">rayban_caravan_or_vert_flash</option>
                                            <option value="rayban_wayfarer_havane_vert">rayban_wayfarer_havane_vert</option>
                                            <option value="rayban_round_gun_vert">rayban_round_gun_vert</option>
                                            <option value="rayban_erika_noir_grisDegrade">rayban_erika_noir_grisDegrade</option>
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
            <!-- ============ MODAL EDIT BARANG =============== -->
            <?php 
            foreach($data->result_array() as $i):
                $id_barang=$i['id_barang'];
                $nama_barang=$i['nama_barang'];
                $jumlah_barang=$i['jumlah_barang'];
                $harga_barang=$i['harga_barang'];
                $brand_barang=$i['brand_barang'];
                $gambar=$i['gambar'];
                $lensa_barang=$i['lensa_barang'];
                $frame_barang=$i['frame_barang'];
                $deskripsi_barang=$i['deskripsi_barang'];
                $model_3d=$i['model_3d'];
                ?>
                <div class="modal fade" id="modal_edit<?php echo $id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Edit Data barang</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/barang/edit_barang'?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                   <input name="id_barang" value="<?php echo $id_barang;?>" class="form-control" type="hidden"  readonly >
                                   <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama</label>
                                    <div class="col-xs-8">
                                        <input name="nama_barang" value="<?php echo $nama_barang;?>" class="form-control" type="text" placeholder="nama" required oninvalid="this.setCustomValidity('Data Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Jumlah</label>
                                    <div class="col-xs-8">
                                        <input name="jumlah_barang" value="<?php echo $jumlah_barang;?>" class="form-control" type="number" placeholder="jumlah"  required oninvalid="this.setCustomValidity('Data Jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-xs-8">
                                        <input name="harga_barang" value="<?php echo $harga_barang;?>" class="form-control" type="number" placeholder="harga" required oninvalid="this.setCustomValidity('Data Harga tidak boleh kosong dan hanya memasukkan angka')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Brand</label>
                                    <div class="col-xs-8">
                                       <input name="brand_barang" value="<?php echo $brand_barang;?>" class="form-control" type="text" placeholder="Brand" required oninvalid="this.setCustomValidity('Data Brand tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Lensa</label>
                                        <div class="col-xs-8">
                                            <input name="lensa_barang" value="<?php echo $lensa_barang;?>" class="form-control" type="text" placeholder="Lensa" required oninvalid="this.setCustomValidity('Data Deskripsi Lensa tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="control-label col-xs-3" >Frame</label>
                                        <div class="col-xs-8">
                                            <input name="frame_barang" value="<?php echo $frame_barang;?>" class="form-control" type="text" placeholder="Frame" required oninvalid="this.setCustomValidity('Data Deskripsi Frame tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Deskripsi Produk</label>
                                        <div class="col-xs-8">
                                            <input name="deskripsi_barang" value="<?php echo $deskripsi_barang;?>" class="form-control" type="text" placeholder="Deskripsi Produk" required oninvalid="this.setCustomValidity('Data Deskripsi Produk tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-xs-3" >Foto</label>
                                       <div class="col-xs-8">
                                        <input data-default-file="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" type="file" name="filefoto" class="dropify" data-height="100" data-width="50">
                                        <input type="hidden" name="gbr" value="<?php echo $gambar=$i['gambar']; ?>">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Model 3D</label>
                                    <div class="col-xs-8">
                                        <select name="model_3d" class="form-control input-sm" >
                                            <?php if($model_3d=='rayban_andy_havane_orange_flash'):?>
                                            <option value="rayban_andy_havane_orange_flash" selected>rayban_andy_havane_orange_flash</option>
                                            <option value="rayban_caravan_or_vert_flash">rayban_caravan_or_vert_flash</option>
                                            <option value="rayban_wayfarer_havane_vert">rayban_wayfarer_havane_vert</option>
                                            <option value="rayban_round_gun_vert">rayban_round_gun_vert</option>
                                            <option value="rayban_erika_noir_grisDegrade">rayban_erika_noir_grisDegrade</option>
                                             <?php elseif($model_3d=='rayban_caravan_or_vert_flash'):?>
                                            <option value="rayban_andy_havane_orange_flash">rayban_andy_havane_orange_flash</option>
                                            <option value="rayban_caravan_or_vert_flash" selected >rayban_caravan_or_vert_flash</option>
                                            <option value="rayban_wayfarer_havane_vert">rayban_wayfarer_havane_vert</option>
                                            <option value="rayban_round_gun_vert">rayban_round_gun_vert</option>
                                            <option value="rayban_erika_noir_grisDegrade">rayban_erika_noir_grisDegrade</option>
                                             <?php elseif($model_3d=='rayban_wayfarer_havane_vert'):?>
                                            <option value="rayban_andy_havane_orange_flash">rayban_andy_havane_orange_flash</option>
                                            <option value="rayban_caravan_or_vert_flash" >rayban_caravan_or_vert_flash</option>
                                            <option value="rayban_wayfarer_havane_vert" selected>rayban_wayfarer_havane_vert</option>
                                            <option value="rayban_round_gun_vert">rayban_round_gun_vert</option>
                                            <option value="rayban_erika_noir_grisDegrade">rayban_erika_noir_grisDegrade</option>
                                            <?php elseif($model_3d=='rayban_round_gun_vert'):?>
                                            <option value="rayban_andy_havane_orange_flash">rayban_andy_havane_orange_flash</option>
                                            <option value="rayban_caravan_or_vert_flash" >rayban_caravan_or_vert_flash</option>
                                            <option value="rayban_wayfarer_havane_vert">rayban_wayfarer_havane_vert</option>
                                            <option value="rayban_round_gun_vert" >rayban_round_gun_vert</option>
                                            <option value="rayban_erika_noir_grisDegrade">rayban_erika_noir_grisDegrade</option>
                                            <?php elseif($model_3d=='rayban_round_gun_vert'):?>
                                            <option value="rayban_andy_havane_orange_flash">rayban_andy_havane_orange_flash</option>
                                            <option value="rayban_caravan_or_vert_flash" >rayban_caravan_or_vert_flash</option>
                                            <option value="rayban_wayfarer_havane_vert">rayban_wayfarer_havane_vert</option>
                                            <option value="rayban_round_gun_vert"  selected >rayban_round_gun_vert</option>
                                            <option value="rayban_erika_noir_grisDegrade"  selected >rayban_erika_noir_grisDegrade</option>
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
        <!--END MODAL EDIT BARANG-->
        <!-- ============ MODAL HAPUS =============== -->
        <?php 
        foreach($data->result_array() as $i):
            $id_barang=$i['id_barang'];
            $nama_barang=$i['nama_barang'];
            ?>
            <div class="modal fade" id="modal_hapus<?php echo $id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h3 class="modal-title" id="myModalLabel">Hapus Data barang</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/barang/hapus_barang'?>">
                            <div class="modal-body">
                                <p>Anda yakin mau menghapus <b><?php echo $nama_barang;?></b></p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id_barang" value="<?php echo $id_barang;?>">
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
