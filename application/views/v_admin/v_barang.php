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
                                        <th>Brand</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    echo "<pre>";
                                    var_dump($data);
                                    echo "</pre>";
                                    foreach ($data->result_array()as $i):
                                        $id_barang=$i['id_barang'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $nama_barang=$i['nama_barang'];?></td>
                                            <td><?php echo $jumlah_barang=$i['jumlah_barang'];?></td>
                                            <td><?php echo $harga_barang=$i['harga_barang'];?></td>
                                            <td><?php echo $brand_barang=$i['brand_barang'];?></td>
                                            <td><img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="width:100px"></td>
                                           
                                            <td style="width: 120px;">
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
                                        <input name="nama_barang" class="form-control" type="text" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Jumlah</label>
                                    <div class="col-xs-8">
                                        <input name="jumlah_barang" class="form-control" type="text" placeholder="Jumlah" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-xs-8">
                                        <input name="harga_barang" class="form-control" type="text" placeholder="Harga" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Brand</label>
                                    <div class="col-xs-8">
                                        <select name="brand_barang">
                                        <option value="Oakley">Oakley</option>
                                        <option value="Rayband">Rayband</option>
                                        <option value="Moscot">Moscot</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Foto</label>
                                    <div class="col-xs-8">
                                        <input type="file" name="filefoto" class="dropify" data-height="100" data-width="50">
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
                                         <input name="id_barang" value="<?php echo $id_barang;?>" class="form-control" type="hidden"  readonly>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama</label>
                                        <div class="col-xs-8">
                                            <input name="nama_barang" value="<?php echo $nama_barang;?>" class="form-control" type="text" placeholder="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Jumlah</label>
                                        <div class="col-xs-8">
                                            <input name="jumlah_barang" value="<?php echo $jumlah_barang;?>" class="form-control" type="text" placeholder="jumlah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Harga</label>
                                        <div class="col-xs-8">
                                            <input name="harga_barang" value="<?php echo $harga_barang;?>" class="form-control" type="text" placeholder="harga" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Brand</label>
                                        <div class="col-xs-8">
                                        <select name="brand_barang">
                                       <?php if($brand_barang=='Moscot'):?>
                                        <option value="Moscot" selected>Moscot</option>
                                        <option value="Rayband">Rayband</option>
                                        <option value="Oakley">Oakley</option>
                                        <?php elseif($brand_barang=='Rayband'):?>
                                        <option value="Moscot">Moscot</option>
                                        <option value="Rayband" selected>Rayband</option>
                                        <option value="Oakley">Oakley</option>
                                         <?php elseif($brand_barang=='Oakley'):?>
                                        <option value="Moscot">Moscot</option>
                                        <option value="Rayband">Rayband</option>
                                        <option value="Oakley" selected>Oakley</option>
                                         <?php endif;?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     <label class="control-label col-xs-3" >Foto</label>
                                        <div class="col-xs-8">
                                        <img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="height:100px">
                                        <input type="file" name="filefoto" class="dropify" data-height="100" data-width="50">
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
    