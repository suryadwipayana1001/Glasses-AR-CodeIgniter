<?php $this->load->view("t_users/sidebar");?>

<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Pencarian:</h6>

        <!--  Catagories  -->
       <a href="#" class="search-nav btn amado-btn mb-15"> Search</a>
    </div>
     <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kategori Produk:</h6>

        <!--  Catagories  -->
        <a href="<?php echo base_url().'index.php/belanja/produk_terbaru'?>" class="btn amado-btn mb-15">Produk Terbaru</a>
    </div>
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kategori Harga:</h6>

        <!--  Catagories  -->
        <a href="<?php echo base_url().'index.php/belanja/show_tinggi'?>" class="btn amado-btn mb-15">Tinggi Ke Rendah</a>
        <a href="<?php echo base_url().'index.php/belanja/show_rendah'?>" class="btn amado-btn mb-15">Rendah Ke Tinggi</a>
    </div>

    <div class="widgetatagory  cmb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kategori Brand:</h6>

        <!--  Catagories  -->
        <a href="<?php echo base_url().'index.php/belanja/show_moscot'?>" class="btn amado-btn mb-15">Moscot</a>
        <a href="<?php echo base_url().'index.php/belanja/show_rayband'?>" class="btn amado-btn mb-15">Rayband</a>
        <a href="<?php echo base_url().'index.php/belanja/show_oakley'?>" class="btn amado-btn mb-15">Oakley</a>
        <a href="<?php echo base_url().'index.php/belanja/show_carrera'?>" class="btn amado-btn mb-15">Carrera</a>
        <a href="<?php echo base_url().'index.php/belanja/show_clubmaster'?>" class="btn amado-btn mb-15">Club Master</a>

    </div>

   

    <!-- ##### Single Widget ##### -->


    <!-- ##### Single Widget ##### -->

    <!-- ##### Single Widget ##### -->

</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center mr-15">
                        </div>
                        <div class="view-product d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $no=1;
            foreach ($data->result_array()as $i):
                ?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                    <div class="single-product-wrapper">

                        <!-- Product Image -->
                        <div class="product-img">
                           <a href="<?=site_url('ar'.'?code='.$i['model_3d'])?>">
                            <img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="width:455px height:565px">
                        </a>
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price"><?php echo 'Rp '.number_format($i['harga_barang']) ;?></p>
                            <a href="<?=site_url('belanja/detail_belanja/'.$i['id_barang'])?>">
                                <h4><?php echo $i['nama_barang'];?></h4>
                            </a>
                            <h5><?php echo $i['brand_barang'];?></h5>
                            <?php
                            $jumlah_barang=$i['jumlah_barang']; 
                            if($jumlah_barang==0) $min=0; 
                            else $min=1; ?>
                            <input type="number" name="quantity" id="<?php echo $i['id_barang'];?>" min ="<?php echo $min?>" value="<?php echo $min ?>" max ="<?php echo $i['jumlah_barang']?>" class="quantity form-control">

                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>

                            <div class="cart">
                                <a href="<?=site_url('keranjang')?>" class="add_cart" data-gambar="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" data-placement="left" title="Add to Cart" data-id_barang="<?php echo $id_barang=$i['id_barang']?>" data-nama_barang="<?php echo $nama_barang=$i['nama_barang']?>" data-harga_barang="<?php echo $harga_barang=$i['harga_barang']?>"><img src="<?=base_url()?>assets/img/core-img/cart.png" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        <?php endforeach;?>

    </div>

    <div class="row">
        <div class="col-12">
            <!-- Pagination -->
            <nav aria-label="navigation">
                <ul class="pagination justify-content-end mt-50">
                    <?php
                    foreach ($tot->result_array() as $jum) :
                        $total = $jum['jum'];
                    endforeach;

                    $pages = ceil($total/$jumhal);

                    $bel = current_url();

                    for ($i=1; $i<=$pages ; $i++){ ?>
                        <li class="page-item"><a class="page-link" href='<?php echo $bel; ?>?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                    <?php } 
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
</div>