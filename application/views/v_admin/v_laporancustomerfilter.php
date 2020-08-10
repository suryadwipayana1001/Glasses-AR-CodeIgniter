  <?php $this->load->view("t_admin/sidebar");?>
  <div id="page-wrapper" >
   <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">
        Laporan Customer <small></small>
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
           <div class="navbar-form navbar-right">
            <?php echo form_open('laporan_customer/search')?>
                        Search : <input type="text" name="keywoard" class="form-control" placeholder="Kata Kunci" required oninvalid="this.setCustomValidity('Kata Kunci tidak boleh kosong')" oninput="setCustomValidity('')">
                        <button type="submit" class="btn btn-primary">Pencarian</button>
                        <?php echo form_close()?>
          </div>
<div class="btn-group">
        <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo base_url().'index.php/laporan_customer/print_laporanfilter/?keywoard='.set_value('keywoard')?>"><i class="glyphicon glyphicon-file"></i> Print</a>
        <hr>
      </div>
          <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($data->result_array()as $i):
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['nama_user'];?></td>
                  <td><?php echo $i['email_user'];?></td>
                  <td><?php echo $i['password_user'];?></td>
                  <td><?php echo $i['tanggallahir_user'];?></td>
                  <td><?php echo $i['alamat_user']?></td>
                  <td><?php echo $i['nohp_user']?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
