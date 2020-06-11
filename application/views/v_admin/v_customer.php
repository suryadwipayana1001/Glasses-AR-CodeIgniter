        <?php $this->load->view("t_admin/sidebar");?>
        <div id="page-wrapper" >
         <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tabel customer <small></small>
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
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($data->result_array()as $i):
                                        $id_customer=$i['id_customer'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $nama_customer=$i['nama_customer'];?></td>
                                            <td><?php echo $email_customer=$i['email_customer'];?></td>
                                            <td><?php echo $password_customer=$i['password_customer'];?></td>
                                            <td><?php echo $tanggallahir_customer=$i['tanggallahir_customer'];?></td>
                                            <td style="width: 120px;">
                                             <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_customer;?>"><i class="fa fa-trash-o "></i></button> 
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
                $id_customer=$i['id_customer'];
                $nama_customer=$i['nama_customer'];
                ?>
                <div class="modal fade" id="modal_hapus<?php echo $id_customer;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Data customer</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/customer/hapus_customer'?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $nama_customer;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_customer" value="<?php echo $id_customer;?>">
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
    