        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
         <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel pemesanan <small></small>
                </h1>
            </div>
        </div> 
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-heading">
                    </div>
                    </div>
                  
                    <div class="panel-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Struk</th>
                                        <th>Status</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($data->result_array()as $i):
                                        $id_pemesanan=$i['id_pemesanan'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $i['nama_pemesanan'];?></td>
                                            <td><?php echo $i['alamat_pemesanan'];?>, <?php echo $i['kecamatan_pemesanan'];?>, <?php echo $i['kabupaten_pemesanan'];?>,  <?php echo $i['provinsi_pemesanan'];?>, <?php echo $i['kodepos_pemesanan'];?></td>
                                            <td><img src="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>" width=60px></td>
                                            <td><?php echo $i['status_pemesanan'];?></td>
                                            <td style="width: 120px;">
                                                <a href="<?=site_url('pemesanan/detail_pemesanan/'.$i['id_pemesanan'])?>"  class="btn btn-success btn-xs"><i class="fa fa-check-square-o"></i></a>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"data-toggle="modal" data-target="#modal_edit<?php echo $id_pemesanan;?>"></i></button>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_pemesanan;?>"><i class="fa fa-trash-o "></i></button> 
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!--End Advanced Tables -->
                <!-- ============ MODAL EDIT BARANG =============== -->
                 <?php 
            foreach($data->result_array() as $i):
                $id_pemesanan=$i['id_pemesanan'];
                $status_pemesanan=$i['status_pemesanan'];
                ?>
                <div class="modal fade" id="modal_edit<?php echo $id_pemesanan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Edit Data Pemesanan</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pemesanan/edit_pemesanan'?>">
                                <div class="modal-body">
                                            <input name="id_pemesanan" value="<?php echo $id_pemesanan;?>" class="form-control" type="hidden"  readonly>
                                   <div class="form-group">
                                        <label class="control-label col-xs-3" >Status</label>
                                        <div class="col-xs-8">
                                        <select name="status_pemesanan" class="form-control input-sm">
                                       <?php if($status_pemesanan=='Menunggu Konfirmasi'):?>
                                        <option value="Menunggu Konfirmasi" selected>Menunggu Konfirmasi</option>
                                        <option value="Sedang di Proses">Sedang di Proses</option>
                                        <option value="Sedang Dalam Perjalanan">Sedang Dalam Perjalanan</option>
                                        <?php elseif($status_pemesanan=='Sedang di Proses'):?>
                                        <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                        <option value="Sedang di Proses" selected>Sedang di Proses</option>
                                        <option value="Sedang Dalam Perjalanan">Sedang Dalam Perjalanan</option>
                                         <?php elseif($status_pemesanan=='Sedang Dalam Perjalanan'):?>
                                        <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                        <option value="Sedang di Proses">Sedang di Proses</option>
                                        <option value="Sedang Dalam Perjalanan" selected>Sedang Dalam Perjalanan</option>
                                         <?php endif;?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-xs-3" >No Resi</label>
                                        <div class="col-xs-8">
                                      <input name="resi_pemesanan" value="<?php echo $i['resi_pemesanan'];?>" class="form-control" type="text" required>
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
            <!--END MODAL EDIT BARANGid  -->          
            <!-- ============ MODAL HAPUS =============== -->
            <?php 
            foreach($data->result_array() as $i):
                $id_pemesanan=$i['id_pemesanan'];
                $nama_pemesanan=$i['nama_pemesanan'];
                ?>
                <div class="modal fade" id="modal_hapus<?php echo $id_pemesanan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Data pemesanan</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pemesanan/hapus_pemesanan'?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $nama_pemesanan;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_pemesanan" value="<?php echo $id_pemesanan;?>">
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
