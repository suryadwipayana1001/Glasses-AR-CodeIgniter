         <h3 style="text-align: center">JK Store Bali</h3>
         <h5 style="text-align: center"> JL Dewata no 9 Sidakarya Denpasar</h5>
         <h5 style="text-align: center">Telp.+621246588229</h5>
         <br>
         <h3 style="text-align : center">Laporan Barang</h3>
         <p>
           <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Brand</th>
                <th>Lensa</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($data->result_array()as $i):
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['nama_barang'];?></td>
                  <td><?php echo $i['jumlah_barang'];?></td>
                  <td><?php echo 'Rp.'.number_format($i['harga_barang']);?></td>
                  <td><?php echo $i['brand_barang'];?></td>
                  <td><?php echo $i['lensa_barang'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>

          <script type="text/javascript">
            window.print();
          </script>