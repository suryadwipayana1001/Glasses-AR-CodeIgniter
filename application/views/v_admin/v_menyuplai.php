        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
         <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel Transaksi Supplier <small></small>
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
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal</th>
                                        <th>Nama Supplier</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;
                                    foreach ($data->result_array()as $i):
                                         $id_menyuplai=$i['id_menyuplai'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $i['nama_barang'];?></td>
                                            <td><?php echo $i['harga_menyuplai'];?></td>
                                            <td><?php echo $i['jumlah_menyuplai'];?></td>
                                            <td><?php echo $i['totalharga_menyuplai'];?></td>
                                            <td><?php echo $i['tanggal_menyuplai'];?></td>
                                            <td><?php echo $i['nama_supplier'];?></td>

                                            <td style="width: 120px;">
                                                 <a href="<?=site_url('menyuplai/detail_menyuplai/'.$i['id_menyuplai'])?>"  class="btn btn-success btn-xs"><i class="fa fa-check-square-o"></i></a>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"data-toggle="modal" data-target="#modal_edit<?php echo $id_menyuplai;?>"></i></button>
                                             <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_menyuplai;?>"><i class="fa fa-trash-o "></i></button> 
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
                            <h3 class="modal-title" id="myModalLabel">Tambah Data Transaksi Supplier</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/menyuplai/simpan_menyuplai'?>">
                              <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama Kacamata</label>
                                    <div class="col-xs-8">
                                       <select name="id_barang" class="form-control" required required oninvalid="this.setCustomValidity('Data Barang tidak boleh kosong')" oninput="setCustomValidity('')">>
                                        <option value="">-Pilih Barang-</option>
                                         <?php foreach($barang->result() as $rows):?>
                                         <option value="<?php echo $rows->id_barang/*.'|'.$rows->nama_barang;*/ ?>"><?php echo $rows->nama_barang;?></option>
                                         <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-xs-8">
                                        <input name="harga_menyuplai" id="harga_menyuplai" onkeyup="sum();" class="form-control" type="number" placeholder="Harga" required oninvalid="this.setCustomValidity('Data Harga tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Jumlah</label>
                                    <div class="col-xs-8">
                                        <input name="jumlah_menyuplai" id="jumlah_menyuplai" onkeyup="sum();" class="form-control" type="text" placeholder="Jumlah" required oninvalid="this.setCustomValidity('Data Jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Total Harga</label>
                                    <div class="col-xs-8">
                                        <input name="totalharga_menyuplai"  id="totalharga_menyuplai" class="form-control" type="number" placeholder="Total Harga" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-xs-3" >Tanggal Transaksi</label>
                                    <div class="col-xs-8">
                                        <input name="tanggal_menyuplai" class="form-control" type="date" placeholder="Tanggal" required oninvalid="this.setCustomValidity('Data Tanggal Transaksi tidak boleh kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama Supplier</label>
                                    <div class="col-xs-8">
                                       <select name="id_supplier" class="form-control" required oninvalid="this.setCustomValidity('Data Nama Supplier tidak boleh kosong')" oninput="setCustomValidity('')">>
                                        <option value="0">-Pilih Supplier-</option>
                                         <?php foreach($supplier->result() as $rows):?>
                                         <option value="<?php echo $rows->id_supplier?>"><?php echo $rows->nama_supplier;?></option>
                                         <?php endforeach;?>
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
                $id_menyuplai=$i['id_menyuplai'];
                $id_barang=$i['id_barang'];
                $harga_menyuplai=$i['harga_menyuplai'];
                $jumlah_menyuplai=$i['jumlah_menyuplai'];
                $totalharga_menyuplai=$i['totalharga_menyuplai'];
                $tanggal_menyuplai=$i['tanggal_menyuplai'];
                $id_supplier=$i['id_supplier'];
                ?>
                <div class="modal fade" id="modal_edit<?php echo $id_menyuplai;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Edit Data menyuplai</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/menyuplai/edit_menyuplai'?>">
                                <div class="modal-body">    
                                    <input name="id_menyuplai" value="<?php echo $id_menyuplai;?>" class="form-control" type="hidden"  readonly>/
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama Kacamata</label>
                                        <div class="col-xs-8">
                                            <select name="id_barang" class="form-control" required oninvalid="this.setCustomValidity('Data Kacamata tidak boleh kosong')" oninput="setCustomValidity('')">
                                            <?php foreach($barang->result() as $rows):?>
                                            <option value="<?php $z=$rows->id_barang.'|'.$rows->nama_barang; echo $z; ?>"
                                              <?php if($id_barang==$z){echo 'selected';}?>
                                              ><?php echo $rows->nama_barang ;?></option>
                                            <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Harga</label>
                                        <div class="col-xs-8">
                                            <input name="harga_menyuplai" onkeyup=""  value="<?php echo $harga_menyuplai;?>" class="form-control harga_menyuplai2" type="number" placeholder="Harga" required oninvalid="this.setCustomValidity('Data Harga tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Jumlah</label>
                                        <div class="col-xs-8">
                                            <input name="jumlah_menyuplai" onkeyup="" value="<?php echo $jumlah_menyuplai;?>" class="form-control jumlah_menyuplai2" type="text" placeholder="Jumlah"required oninvalid="this.setCustomValidity('Data Jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Total Harga</label>
                                        <div class="col-xs-8">
                                            <input name="totalharga_menyuplai"  value="<?php echo $totalharga_menyuplai;?>" class="form-control totalharga_menyuplai2" type="number" placeholder="Total Harga" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Tanggal Transaksi</label>
                                        <div class="col-xs-8">
                                            <input name="tanggal_menyuplai" value="<?php echo $tanggal_menyuplai;?>" class="form-control" type="date" placeholder="Tanggal" required oninvalid="this.setCustomValidity('Data Tanggal Transaksi tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama Supplier</label>
                                        <div class="col-xs-8">
                                            <select name="id_supplier" class="form-control" required>
                                            <?php foreach($supplier->result() as $rows):?>
                                            <option value="<?php $z=$rows->id_supplier; echo $z; ?>"
                                              <?php if($id_supplier==$z){echo 'selected';}?>
                                              ><?php echo $rows->nama_supplier ;?></option>
                                            <?php endforeach;?>
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
                $id_menyuplai=$i['id_menyuplai'];
                $harga_menyuplai=$i['harga_menyuplai'];
                ?>
                <div class="modal fade" id="modal_hapus<?php echo $id_menyuplai;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Data menyuplai</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/menyuplai/hapus_menyuplai'?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $harga_menyuplai;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_menyuplai" value="<?php echo $id_menyuplai;?>">
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
    