<?php $this->load->view("t_users/sidebar");?>

<div class="shop_sidebar_area">
<div class="widget catagory mb-50">
    <!-- ##### Single Widget ##### -->
<div class="sort-by-date d-flex align-items-center mr-15">
                        <?php echo form_open('belanja/search')?>
                        Search : <input type="text" name="keywoard" class="form-control" placeholder="Kata Kunci">
                        <br>
                        <button type="submit" class="btn amado-btn">Pencarian</button>
                        <?php echo form_close()?>
                    </div>
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

</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

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
                       
                        <img src="<?=base_url('assets/img/foto/'.$gambar=$i['gambar'])?>" style="width:455px height:565px">
                    </a>
                </div>

                <!-- Product Description -->
                <div class="product-description d-flex align-items-center justify-content-between">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price"><?php echo 'Rp '.number_format($i['harga_barang']) ;?></p>

                        <h4><?php echo $i['nama_barang'];?></h4>
                    </a>
                    <h5><?php echo $i['brand_barang'];?></h5>
                    <?php
                    $jumlah_barang=$i['jumlah_barang']; 
                    if($jumlah_barang==0) $min=0; 
                    else $min=1; ?>

                    <div class="cart-btn d-flex mb-50">
                        <div class="quantity">
                            <input type="number"  name="quantity" id="<?php echo $i['id_barang'];?>" min ="<?php echo $min?>" value="<?php echo $min ?>" max ="<?php echo $jumlah_barang ?>" class="quantity form-control">
                        </div>
                    </div>

                </div>
                <!-- Ratings & Cart -->
                <div class="ratings-cart text-right">
                    <div class="ratings">
                       <a href="<?=site_url('belanja/detail_belanja/'.$i['id_barang'])?>">  <i class="fa fa-star" aria-hidden="true"></i>Detail Produk</a><i class="fa fa-star" aria-hidden="true"></i>
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