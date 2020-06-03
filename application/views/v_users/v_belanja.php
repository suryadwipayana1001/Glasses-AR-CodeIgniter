<?php $this->load->view("t_users/sidebar");?>
<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kategori:</h6>

        <!--  Catagories  -->
        <a href="#" class="btn amado-btn mb-15">Diskon</a>
        <a href="#" class="btn amado-btn active mb-15">Produk Terbaru</a>
    </div>

        <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kategori Brand:</h6>

        <!--  Catagories  -->
        <a href="#" class="btn amado-btn mb-15">Moscot</a>
        <a href="#" class="btn amado-btn mb-15">Rayband</a>
        <a href="#" class="btn amado-btn mb-15">Oakley</a>

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
                            <p>Kategori Harga: </p>
                            <form action="#" method="get">
                                <select name="select" id="sortBydate">
                                    <option value="value">Tinggi ke Rendah</option>
                                    <option value="value">Rendah ke Tinggi</option>
                                </select>
                            </form>
                        </div>
                        <div class="view-product d-flex align-items-center">
                            <p>Tampilkan</p>
                            <form action="#" method="get">
                                <select name="select" id="viewProduct">
                                    <option value="value">12</option>
                                    <option value="value">24</option>
                                    <option value="value">48</option>
                                    <option value="value">96</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $no=1;
            foreach ($data->result_array()as $i):
                $id_barang=$i['id_barang'];
                ?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                    <div class="single-product-wrapper">

                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="width:455px height:565px">
                        </div>

                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?php echo 'Rp '.number_format($harga_barang=$i['harga_barang']) ;?></p>
                                <a href="product-details.html">
                                    <h6><?php echo $nama_barang=$i['nama_barang'];?></h6>
                                </a>
                                <input type="number" name="quantity" id="<?php echo $id_barang=$i['id_barang'];?>" value="1" class="quantity form-control">
                                
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
                                    <a href="<?=site_url('keranjang')?>" data-placement="left" title="Add to Cart" data-id_barang="<?php echo $id_barang=$i['id_barang']?>" data-nama_barang="<?php echo $nama_barang=$i['nama_barang']?>" data-harga_barang="<?php echo $harga_barang=$i['harga_barang']?>"><img src="<?=base_url()?>assets/img/core-img/cart.png" alt=""></a>
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