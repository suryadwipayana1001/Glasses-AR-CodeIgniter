         <h3 style="text-align : center">Laporan Barang</h3>
         <br>
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
                  <td><?php echo $i['harga_barang'];?></td>
                  <td><?php echo $i['brand_barang'];?></td>
                  <td><?php echo $i['lensa_barang'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>

 <script type="text/javascript">
            window.print();
          </script>