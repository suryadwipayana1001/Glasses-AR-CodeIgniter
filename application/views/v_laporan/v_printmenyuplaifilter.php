           <h3 style="text-align: center">JK Store Bali</h3>
         <h5 style="text-align: center"> JL Dewata no 9 Sidakarya Denpasar</h5>
         <h5 style="text-align: center">Telp.+621246588229</h5>
         <br>
         <h3 style="text-align : center">Laporan Transaksi Supplier</h3>
         <p>
<table>
  <tr>
    <td>Dari Tanggal</td>
    <td>:</td>
    <td><?php echo date('d-M-Y',strtotime($_GET['dari']));?></td>
  </tr>
  <tr>
    <td>Sampai Tanggal</td>
    <td>:</td>
    <td><?php echo date('d-M-Y',strtotime($_GET['sampai']));?></td>
  </tr>
</table>
<br>
          <table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
                <th>Nama Supplier</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              $total=0;
              $totaljumlah=0;
              foreach ($data->result_array()as $i):
                $total+=$i['totalharga_menyuplai'];
                $totaljumlah+=$i['jumlah_menyuplai'];
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['nama_barang'];?></td>
                  <td><?php echo 'Rp.'.number_format($i['harga_menyuplai']);?></td>
                  <td><?php echo $i['jumlah_menyuplai'];?></td>
                  <td><?php echo 'Rp.'.number_format($i['totalharga_menyuplai']);?></td>
                  <td><?php echo $i['tanggal_menyuplai'];?></td>
                  <td><?php echo $i['nama_supplier'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>

          <table class="table table-striped table-bordered table-hover" id="">
            <tr>
              <th>No</th>
              <th>Nama Supplier</th>
              <th>Jumlah Barang</th>
            </tr>
            <?php
            $no=1; 
            foreach ($data1->result_array()as $i):
             ?>
             <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $i['nama_supplier'];?></td>        
              <td><?php echo $i['jumlah_menyuplai'];?></td>
              <tr>
              <?php endforeach;?>
            </table>  

            <table class="table table-striped table-bordered table-hover" id="">
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
              </tr>
              <?php 
              $no=1; 
              foreach ($data2->result_array()as $i):
               ?>
               <tr>
                 <td><?php echo $no++?></td>        
                 <td><?php echo $i['nama_barang'];?></td>
                 <td><?php echo $i['jumlah_menyuplai'];?></td>
                 <td><?php echo 'Rp.'.number_format($i['totalharga_menyuplai']);?></td>
                 <tr>
                 <?php endforeach;?>
               </table>  
               <tr>
                <table class="table table-striped table-bordered table-hover">
                 <th>Total Jumlah Barang</th>
                 <th>Total Harga Barang</th>
               </tr>
               <tr>
                <td><?php echo $totaljumlah?></td>
                <td><?php echo 'Rp'.number_format($total)?></td>
              </tr>
            </table>
 <script type="text/javascript">
            window.print();
          </script>