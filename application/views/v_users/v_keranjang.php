  <?php $this->load->view("t_users/sidebar");?>
  <div class="cart-table-area section-padding-100">
  	<div class="container-fluid">
  		<div class="row" id="detail_cart">
  			<div class="col-12 col-lg-8">
  				<div class="cart-title mt-50">
  					<h2>Shopping Cart</h2>
  				</div>

  				<div class="cart-table clearfix keranjang ">
  					<table class="table table-responsive">

  						<thead>
  							<tr>
  								<th>Gambar</th>
  								<th>Nama</th>
  								<th>Harga</th>
  								<th>Jumlah</th>
  								<th>Sub Total</th>
  								<th></th>
  							</tr>
  						</thead>
  						<tbody id="detail_cart2">
  							<?php	if($this->session->logged_in == TRUE){
  								$id_user = $this->session->id_user;
  								$isi_cart = $this->m_keranjang->tampil_cart($id_user);

  								foreach ($isi_cart->result_array()as $i) {
  									$cartku = $i['cart'];
  								}
			// var_dump($cartku);
  								$cart = unserialize($cartku);

    		// echo "<br><br><pre>";
    		// print_r($dt);
    		// echo "</pre>";
  							} else $cart = $this->cart->contents();


  							$no = 0;
  							$jum = 0;
  							$stokkos = array();
  							foreach ($cart as $items) {
  								$no++;
  								?>
  								<tr>
  									<td><img  src="<?php echo $items['gambar']?>"></td>
  									<td><?php echo $items['name']?></td>
  									<td><?php echo number_format($items['price']) ?></td>
  									<td><?php echo $items['qty'] ?></td>
  									<td><?php echo number_format($items['subtotal'])?></td>
  									<td><a href="<?php echo base_url().'index.php/keranjang/hapus_cart?row_id='.$items['rowid']; ?>"><button type="button" id="<?php echo $items['rowid']?>" class="hapus_cart tulisbtn btn btn-danger btn-xs">Batal</button></a></td>
  								</tr>
  								<?php

  								$q = $this->m_keranjang->cek_stok($items['id']);
  								$row = $q->row();

  								if (isset($row))
								{
								        $stok = $row->jumlah_barang;
								        if ($stok <= 0) {
								        	$stokkos[$jum]['id_bar']=$items['id'];
								        	$stokkos[$jum]['nama']=$items['name'];
								        	$jum = $jum+1;
								        }
								}

							}

							$k="";
							if ($stokkos) {
								$k = "kos";?>
								<div data-kosong="yes" class="kos alert alert-danger alert-dismissible" role="alert">
		                		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                		Untuk dapat melanjutkan Checkout silahkan hapus data produk yang stoknya telah Tidak Tersedia
		                		</div>
		                		<?php 
								foreach ($stokkos as $kosong) {

									?>
									
									<div data-kosong="yes" class="kos alert alert-danger alert-dismissible" role="alert">
		                		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                		Stok Data <?php echo $kosong['nama']?> Tidak Tersedia
		                		</div>
		                		

									<?php

								}
							}

  							?>

  							

  						</tbody>
  					</table>
  				</div>
  			</div>

  			<div class="col-12 col-lg-4">
  				<div class="cart-summary">
  					<h5>Cart Total</h5>
  					<ul class="summary-table">
  						<li><span>Total:</span> <span>Rp. <?php echo number_format($this->cart->total()) ?></span></li>
  					</ul>
  					<div class="cart-btn mt-100">

  						<a id="btn-chkout" href="<?php echo site_url('checkout').'?k='.$k ?>" class="btn amado-btn w-100">Checkout</a>
  					</div>
  				</div>
  			</div>
  		</div>

  	</div>
  </div>
</div>