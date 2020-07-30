<?php $this->load->view("t_admin/sidebar");?>
<div id="page-wrapper" >
    <div id="page-inner">
       <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
             Detail User
         </h2>
     </div>
 </div> 
 <!-- /. ROW  -->

 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4>Data User</h4>
            </div>
            <?php
            foreach ($data->result_array()as $i):
                ?>
                <div class="panel-body">
                    <table class="table table-striped">

                        <tr>
                            <th width="20%">Nama</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nama_user'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Email</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['email_user'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Password</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['password_user']?></td>
                        </tr>
                        <tr>
                            <th width="20%">Tanggal Lahir</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['tanggallahir_user'] ?></td>
                        </tr>
                         <tr>
                            <th width="20%">Alamat</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['alamat_user'] ?></td>
                        </tr>
                         <tr>
                            <th width="20%">No Handphone</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nohp_user'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Level</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['level_user'] ?></td>
                        </tr>
                    </table>
                    <table>
                        <th width="100%"></th>
                             <td><a href="<?=site_url('user')?>"  class="btn btn-danger">Kembali</a></td>
                    </table>
                    <!-- /.row (nested) -->
                </div>
            <?php endforeach;?>
           
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->

    <!-- /. PAGE INNER  -->
</div>
</div>
</div>