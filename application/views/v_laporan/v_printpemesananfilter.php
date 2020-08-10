         <h3 style="text-align: center">JK Store Bali</h3>
         <h5 style="text-align: center"> JL Dewata no 9 Sidakarya Denpasar</h5>
         <h5 style="text-align: center">Telp.+621246588229</h5>
         <br>
         <h3 style="text-align : center">Laporan Transaksi Customer</h3>
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
<table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Alamat</th>
                <th>Kurir</th>
                <th>Ongkos Kirim</th>
                <th>Total Pembayaran</th>
                <th>Tanggal Pemesanan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              $total=0;
              $totaljumlah=0;
              foreach ($data->result_array()as $i):
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['email_user'];?></td>
                  <td><?php echo $i['nama_dipesan'];?></td>
                  <td><?php echo 'Rp.'.number_format($i['harga_dipesan']);?></td>
                  <td><?php echo $i['jumlah_dipesan'];?></td>
                  <td><?php echo 'Rp.'.number_format($i['totalharga_dipesan']);?></td>
                  <td><?php echo $i['alamat_pemesanan'] ; ?><?php echo $i['kecamatan_pemesanan'] ?>,<?php echo $i['kabupaten_pemesanan']?>,<?php echo $i['provinsi_pemesanan'] ?>,</td>
                  <td><?php echo $i['kurir_pemesanan']?></td>
                  <td><?php echo 'Rp.'.number_format($i['ongkir_pemesanan'])?></td>
                  <td><?php echo 'Rp.'.number_format($i['total_pemesanan'])?></td>
                  <td><?php echo $i['tanggal_pemesanan'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
<table class="table table-striped table-bordered table-hover" id="">
            <thead>
              <tr>
                <th>No</th>
                <th>Email</th>
                <th>Jumlah Barang</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($data1->result_array()as $i):
                ?>
                <tr class="odd gradeX">
                  <td><?php echo $no++?></td>
                  <td><?php echo $i['email_user'];?></td>
                  <td><?php echo $i['jumlah_dipesan'];?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
          <table class="table table-striped table-bordered table-hover" id="">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Total Harga Barang</th>
                            </tr>
                            <?php 
                            $no=1; 
                            $total=0;
                            $totaljumlah=0;
                            foreach ($data2->result_array()as $i):
                              $total+=$i['totalharga_dipesan'];
                              $totaljumlah+=$i['jumlah_dipesan'];
                               ?>
                               <tr>
                               <td><?php echo $no++?></td>        
                                <td><?php echo $i['nama_barang'];?></td>
                                <td><?php echo $i['jumlah_dipesan'];?></td>
                                <td><?php echo 'Rp.'.number_format($i['totalharga_dipesan']);?></td>
                                <tr>
                                <?php endforeach;?>
                            </table>  
                            <tr>
                                <table class="table table-striped table-bordered table-hover">
                                   <th>Total Jumlah barang:</th>
                                   <th>Total Harga Barang</th>
                               </tr>
                               <tr>
                                <th><?php echo $totaljumlah?></th>
                                <th><?php echo 'Rp.'.number_format($total)?></th>
                            </tr>
                        </table>
          <script type="text/javascript">
          	window.print();
          </script>