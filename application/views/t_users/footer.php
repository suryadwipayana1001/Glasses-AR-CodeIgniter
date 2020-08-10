<footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="<?=base_url()?>assets/img/core-img/logofooter1.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<script>document.write(new Date().getFullYear());</script> JK STORE BALI <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com"><a href="https://themewagon.com/" ></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
   <script src="<?php echo base_url('assets/js/jquery/jquery-2.2.4.min.js')?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url('assets/js/plugins.js')?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url('assets/js/active.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url().'assets/dropify/dropify.min.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var id_barang    = $(this).data("id_barang");
            var nama_barang  = $(this).data("nama_barang");
            var harga_barang = $(this).data("harga_barang");
            var gambar = $(this).data("gambar");
            var quantity     = $('#' + id_barang).val();
            $.ajax({
                url : "<?php echo base_url().'index.php/keranjang/add_to_cart'?>",
                method : "POST",
                data : {id_barang: id_barang, nama_barang: nama_barang, harga_barang: harga_barang, quantity: quantity, gambar: gambar},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

    });
</script>

    <script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });
    });
    
</script>
<script>
            // function which are used only for this functionnal test
            function test_resizeCanvas(){
                const wid=document.getElementById('JeeWidget');
                wid.style.width='1000px';
            };
        </script>
</body>

</html>