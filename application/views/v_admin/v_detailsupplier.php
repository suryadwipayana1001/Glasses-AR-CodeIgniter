<?php $this->load->view("t_admin/sidebar");?>
<div id="page-wrapper" >
    <div id="page-inner">
       <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
             Detail Supplier
     </div>
 </div> 
 <!-- /. ROW  -->

 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4>Data Supplier</h4>
            </div>
            <?php
            foreach ($data->result_array()as $i):
                ?>
                <div class="panel-body">
                    <table class="table table-striped">

                        <tr>
                            <th width="20%">Nama</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nama_supplier'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">Alamat</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['alamat_supplier'] ?></td>
                        </tr>
                        <tr>
                            <th width="20%">No Hp</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['nohp_supplier']?></td>
                        </tr>
                        <tr>
                            <th width="20%">Email</th>
                            <th width="1%">:</th>
                            <td><?php echo $i['email_supplier'] ?></td>
                        </tr>
                    </table>
                    <table>
                        <th width="100%"></th>
                             <td><a href="<?=site_url('supplier')?>"  class="btn btn-danger">Kembali</a></td>
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