<?php $this->load->view("t_users/sidebar");?>
<!DOCTYPE html>
<html lang="en">



<body>
	<!-- Search Wrapper Area Start -->

	<!-- Header Area End -->

	<!-- Product Details Area Start -->
	<div class="single-product-area section-padding-100 clearfix">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mt-50">
							<li class="breadcrumb-item active" aria-current="page"><h5>Detail Produk</h5></li>
						</ol>
					</nav>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-lg-7">
					<div class="single_product_thumb">
						<div id="product_details_slider" class="carousel slide" data-ride="carousel">
							<?php
							foreach ($data->result_array()as $i):
								?>
								<div class="carousel-inner">
									<div class="carousel-item active">

										<img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" >

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-5">
						<div class="single_product_desc">
							<!-- Product Meta Data -->
							<div class="product-meta-data">
								<h2><?php echo $i['nama_barang'];?></h2>
								<p class="product-price"><?php echo 'Rp '.number_format($i['harga_barang']) ;?></p>
								<h5><?php echo $i['brand_barang'];?></h5>
								<!-- Ratings & Review -->
								<div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
									<div class="ratings">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<div class="review">
										<a href="#">Write A Review</a>
									</div>
								</div>
								<!-- Avaiable -->
								<p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
							</div>

							<div class="short_overview my-5">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?</p>
							</div>

							<!-- Add to Cart Form -->
							<form class="cart clearfix" method="post">
								<div class="cart-btn d-flex mb-50">
									<p>Qty</p>
									<div class="quantity">
										<input type="number" name="quantity" id="<?php echo $i['id_barang'];?>" min ="1" value="1" max ="5" class="quantity form-control">
									</div>
								</div>
								<div class="mb-15">
									<a href="<?=site_url('keranjang')?>" class="add_cart btn amado-btn" data-gambar="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" data-placement="left" title="Add to Cart" data-id_barang="<?php echo $id_barang=$i['id_barang']?>" data-nama_barang="<?php echo $nama_barang=$i['nama_barang']?>" data-harga_barang="<?php echo $harga_barang=$i['harga_barang']?>"class="btn amado-btn">Add to cart</a>
								</div>
								<a href="<?=site_url('belanja')?>" class="btn amado-btn">kembali</a>
							</form>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Details Area End -->
</div>