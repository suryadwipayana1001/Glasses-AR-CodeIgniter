         <h3 style="text-align: center">JK Store Bali</h3>
         <h5 style="text-align: center"> JL Dewata no 9 Sidakarya Denpasar</h5>
         <h5 style="text-align: center">Telp.+621246588229</h5>
         <br>
         <h3 style="text-align : center">Laporan Supplier</h3>
         <p>
<br>
          <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($data->result_array()as $i):
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['nama_supplier'];?></td>
                  <td><?php echo $i['alamat_supplier'];?></td>
                  <td><?php echo $i['nohp_supplier'];?></td>
                  <td><?php echo $i['email_supplier'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
<script type="text/javascript">
            window.print();
          </script>      