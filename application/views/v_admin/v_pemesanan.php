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
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Kurir</th>
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
                                            <td><?php echo $nama_pemesanan=$i['nama_pemesanan'];?></td>
                                            <td><?php echo $alamat_pemesanan=$i['alamat_pemesanan'];?>, <?php echo $kecamatan_pemesanan=$i['kecamatan_pemesanan'];?>, <?php echo $kabupaten_pemesanan=$i['kabupaten_pemesanan'];?>,  <?php echo $provinsi_pemesanan=$i['provinsi_pemesanan'];?>, <?php echo $kodepos_pemesanan=$i['kodepos_pemesanan'];?></td>
                                            <td><?php echo $nohp_pemesanan=$i['nohp_pemesanan'];?></td>
                                            <td><?php echo $kurir_pemesanan=$i['kurir_pemesanan'];?></td>
                                            <td><?php echo $status_pemesanan=$i['status_pemesanan'];?></td>
                                            <td style="width: 120px;">
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
                    $nama_pemesanan=$i['nama_pemesanan'];
                    $provinsi_pemesanan=$i['provinsi_pemesanan'];
                    $kabupaten_pemesanan=$i['kabupaten_pemesanan'];
                    $kecamatan_pemesanan=$i['kecamatan_pemesanan'];
                    $alamat_pemesanan=$i['alamat_pemesanan'];
                    $kodepos_pemesanan=$i['kodepos_pemesanan'];
                    $nohp_pemesanan=$i['nohp_pemesanan'];
                    ?>
                    <div class="modal fade" id="modal_edit<?php echo $id_pemesanan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <h3 class="modal-title" id="myModalLabel">Edit Data barang</h3>
                                </div>
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pemesanan/edit_pemesanan'?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                     <input name="id_pemesanan" value="<?php echo $id_pemesanan;?>" class="form-control" type="hidden"  readonly>
                                     <div class="form-group">
                                        <label class="control-label col-xs-3" >Nama</label>
                                        <div class="col-xs-8">
                                            <input name="nama_pemesanan" value="<?php echo $nama_pemesanan;?>" class="form-control" type="text" placeholder="nama" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Alamat</label>
                                        <div class="col-xs-8">
                                            <input class="form-control" name="alamat_pemesanan" value="<?php echo $alamat_pemesanan;?> <?php echo $kecamatan_pemesanan;?> <?php echo $kabupaten_pemesanan;?> <?php echo $provinsi_pemesanan;?> <?php echo $kodepos_pemesanan;?> "  type="text" placeholder="Alamat" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >No Hp</label>
                                        <div class="col-xs-8">
                                            <input name="nohp_pemesanan" value="<?php echo $nohp_pemesanan;?>" class="form-control" type="text" placeholder="No Hp" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Kurir</label>
                                        <div class="col-xs-8">
                                            <input name="kurir_pemesanan" value="<?php echo $kurir_pemesanan;?>" class="form-control" type="text" placeholder="Kurir" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Status</label>
                                        <div class="col-xs-8">
                                        <select name="status_pemesanan">
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
            <!--END MODAL EDIT BARANGid            <!-- ============ MODAL HAPUS =============== -->
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
