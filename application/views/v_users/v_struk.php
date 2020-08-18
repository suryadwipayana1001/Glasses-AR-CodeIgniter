  <?php $this->load->view("t_users/sidebar");?>
  <div class="cart-table-area section-padding-100">
  	<div class="container-fluid">
  		<div class="row" id="detail_cart">
  			<div class="col-12 col-lg-8">
  				<div class="cart-title mt-50">
  					<h2>Pembayaran</h2>
  				</div>

            <h5>Silahkan melakukan pembayaran pada No REK BNI 023 827 2088 dan tambahkan bukti pembayaran pada form tambah struk</h5>
            <hr>
  				<div class="cart-table clearfix struk ">
  					<table class="table table-responsive">

  						<thead>
  							
  						</thead>
  						<tbody >
  							<?php
  							$no = 1;
  							foreach ($data->result_array()as $i):
  								
  								?>
  								<tr>
  									<td>Sub Total</td>
  									<td><?php echo 'Rp.' .number_format($i['subtotal_pemesanan']);?></td>
  								</tr>
  								<tr>
  									<td>Kurir</td>
  									<td><?php echo strtoupper($i['kurir_pemesanan'])?></td>
  								</tr>
  								<tr>
  									<td>Ongkos Kirim</td>
  									<td><?php echo  'Rp.' .number_format($i['ongkir_pemesanan']);?></td>
  								</tr>
  								<tr>

  									<td>Total Pembayaran</td>
  									<td><?php echo  'Rp.' .number_format($i['total_pemesanan'])?></td>
  								</tr>
  							<?php endforeach;?>
  						</tbody>
  					</table>
  				</div>

  				<div class="cart-title mt-50">
  					<h2>Produk</h2>
  				</div>
  				<div class="cart-table clearfix struk1 ">
  					<table class="table table-responsive">

  						<thead>
  							<tr>
  								<th>No</th>
  								<th>Nama</th>
  								<th>Harga</th>
  								<th>Jumlah</th>
  								<th>Total Harga</th>
  							</tr>
  						</thead>
  						<tbody >
  							<?php
  							$no = 1;
  							foreach ($data1->result_array()as $i):
  								$totalharga_dipesan=$i['totalharga_dipesan'];
  								?>
  								<tr>
  									<td><?php echo $no++?></td>
  									<td><?php echo $i['nama_dipesan']?></td>
  									<td><?php echo 'Rp.' .number_format($i['harga_dipesan'])?></td>
  									<td><?php echo $i['jumlah_dipesan']?></td>
  									<td><?php echo'Rp.' .number_format($i['totalharga_dipesan'])?></td>
  								</tr>
  							<?php endforeach;?>
  						</tbody>
  					</table>

  				</div>
  			</div>
  			<div class="col-12 col-lg-4">
  				<div class="cart-summary">
          
  					<h5>Form Tambah Struk</h5>
  					<?php foreach($data->result_array() as $i):
  						?>
  						<form class="form-horizontal" action="<?php echo base_url().'index.php/transaksi/simpan_struk'?>" method="post" enctype="multipart/form-data">
  							<input type="hidden" name="id_pemesanan"  value="<?php echo $i['id_pemesanan'];?>" class="form-control" type="text" >
  							<input data-default-file="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>"  type="file" name="filefoto" class="dropify" data-height="400" data-width="90">
  							<input type="hidden" name="gbr" value="<?php echo $i['struk_pemesanan']; ?>">
  							<br>
  							<div class="form-group">
  								<button class="btn amado-btn w-100">Simpan</button> 
  							</div>
  							<div class="form-group">
  								<button type="button" class="btn amado-btn w-100" onclick="javascript:history.back()">Kembali</button> 
  							</div>
  						</form>	
  					<?php endforeach;?>

  				</div>
  			</div>
  		</div>
  	</div>

  </div>
</div>
</div>