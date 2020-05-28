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
                                        <th>Provinsi</th>
                                        <th>Kabupaten</th>
                                        <th>Kecamatan</th>
                                        <th>Alamat</th>
                                        <th>Kode Pos</th>
                                        <th>No Telepon</th>
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
                                            <td><?php echo $provinsi_pemesanan=$i['provinsi_pemesanan'];?></td>
                                            <td><?php echo $kabupaten_pemesanan=$i['kabupaten_pemesanan'];?></td>
                                            <td><?php echo $kecamatan_pemesanan=$i['kecamatan_pemesanan'];?></td>
                                            <td><?php echo $alamat_pemesanan=$i['alamat_pemesanan'];?></td>
                                            <td><?php echo $kodepos_pemesanan=$i['kodepos_pemesanan'];?></td>
                                            <td><?php echo $nohp_pemesanan=$i['nohp_pemesanan'];?></td>
                                    
                                            <td style="width: 120px;">
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
    