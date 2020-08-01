<div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?=base_url()?>assets/img/core-img/search.png" alt=""></button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?=base_url()?>assets/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo"><img src="<?=base_url()?>assets/img/core-img/logo.png" alt=""></a>
                <a href="index.html"></a>
            </div>
            <!-- Amado Nav -->
             <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
            <?php
                $total = 0; 
                foreach ($this->cart->contents() as $i) {
                    $total += $i['qty'];
                }?>
            <nav class="amado-nav">
                <ul>
                   <li <?=$this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="active-menu"' : ''?>>
                    <a href="<?=site_url('beranda/c_beranda')?>">
                        <i class="fa home"></i> <span>Beranda</span>
                    </a>
                   </li>
                   <li <?=$this->uri->segment(1) == 'belanja' || $this->uri->segment(1) == '' ? 'class="active-menu"' : ''?>>
                    <a href="<?=site_url('belanja')?>">
                        <i class="fa "></i> <span>Belanja</span>
                    </a>
                   </li>
                    <li <?=$this->uri->segment(1) == 'keranjang' || $this->uri->segment(1) == '' ? 'class="active-menu"' : ''?>>
                    <a href="<?=site_url('keranjang')?>"><img src="<?=base_url()?>assets/img/core-img/cart.png" alt="">Keranjang <span class="badge badge-warning">(<?php echo $total ?>)</span></a>
                   </li>
                   <li <?=$this->uri->segment(1) == 'transaksi' || $this->uri->segment(1) == '' ? 'class="active-menu"' : ''?>>
                    <a href="<?=site_url('transaksi')?>">
                        <i class="fa "></i> <span>Transaksi</span>
                    </a>
                    </li>
                     <li <?=$this->uri->segment(1) == 'akunsaya' || $this->uri->segment(1) == '' ? 'class="active-menu"' : ''?>>
                    <a href="<?=site_url('akunsaya')?>">
                        <i class="fa "></i> <span>Akun Saya</span>
                    </a>
                    </li>
                </ul>
            </nav>
            <!-- Button Group -->
         
                
            
            <!-- Cart Menu -->
           


            <!-- Social Button -->
           
        </header>