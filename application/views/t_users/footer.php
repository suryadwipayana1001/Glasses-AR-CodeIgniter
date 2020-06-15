<footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="<?=base_url()?>assets/img/core-img/logofooter.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
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

        // Load shopping cart
        
        $('#detail_cart').load("<?php echo base_url().'index.php/keranjang/load_cart'?>");

        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url().'index.php/keranjang/hapus_cart'?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>

<Script type="text/javascript">
        $(function(){
            $.get("<?= site_url('checkout/get_provinsi')?>",{},(response)=>{
                let output= '';
                let provinsi = response.rajaongkir.results
                console. log(response)
                provinsi.map((val,i)=>{
                    output+=`<option value="${val.province_id}" >${val.province}

                        </option>`
                })
                $('.provinsi').html(output)
            })
        });

        function get_kota(type){
                let id_provinsi = $(`#provinsi_${type}`).val();
                $.get("<?= site_url('checkout/get_kota/')?>"+id_provinsi,{},(response)=>{
                let output ='';
                let kota = response.rajaongkir.results
                console.log(response)

                kota.map((val,i)=>{
                    output+=`<option value="${val.city_id}" >${val.city_name}
                    </option>`
                })
                $(`#kota_${type}`).html(output)
            })
        }

        function get_ongkir(){
            let berat = $('#berat').val();
            let asal = $('#kota_asal').val();
            let tujuan = $('#kota_tujuan').val();
            let kurir = $('#kurir').val();
            let output ='';

            console.log(asal);

                $.get("<?= site_url('checkout/get_biaya/') ?>"+`${asal}/${tujuan}/${berat}/${kurir}`,{}, (response)=>{
                    console.log(response);
                let biaya = response.rajaongkir.results

                console.log(biaya)

                biaya.map((val,i)=>{
                    for (var i = 0; i < val.costs.length; i++) {
                        let jenis_layanan= val.costs[i].service
                        val.costs[i].cost.map((val,i)=>{
                            output += `<option value="${val.value}">${jenis_layanan} -Rp.${val.value} ${val.etd} Hari </option>`
                        })
                    }
                })
                $('#service').html(output)
                })
        }


    </Script>
</body>

</html>