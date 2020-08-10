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
    <!-- Active js -->
    <script src="<?php echo base_url('assets/js/active.js')?>"></script>
<Script type="text/javascript">
        $(function(){
            $.get("<?= site_url('checkout/get_provinsi')?>",{},(response)=>{
                let output= '';
                let provinsi = response.rajaongkir.results
                provinsi.map((val,i)=>{
                    output+=`<option value="${val.province_id}" >${val.province}

                        </option>`
                })
                $('.provinsi').html(output)
            })

            $('#kota_tujuan').change(function() { // do something } );
                get_ongkir();   
            });

            get_kota_awal();
            get_ongkir_awal();

            $("#service").change(function(){
                var ongkir = $(this).children("option:selected").val();
                $('#ongkir').text(ongkir);
                var subtotal = $('#subtotal').text();
                var total = parseFloat(subtotal) + parseFloat(ongkir);
                $('#total').text(total);

                var provinsi_tujuan = $('#provinsi_tujuan').children("option:selected").text();
                var kabupaten_tujuan = $('#kota_tujuan').children("option:selected").text();

                $('#prov_tuj').val(provinsi_tujuan);
                $('#kab_tuj').val(kabupaten_tujuan);
            });

        });

        function get_kota_awal(){
                var id_provinsi = "1";
                $.get("<?= site_url('checkout/get_kota/')?>"+id_provinsi,{},(response)=>{
                let output ='';
                let kota = response.rajaongkir.results
                // console.log(response)

                kota.map((val,i)=>{
                    output+=`<option value="${val.city_id}" >${val.city_name}
                    </option>`
                })
                $(`#kota_tujuan`).html(output)
            })
        }

        function get_kota(type){
                let id_provinsi = $(`#provinsi_${type}`).val();
                $.get("<?= site_url('checkout/get_kota/')?>"+id_provinsi,{},(response)=>{
                let output ='';
                let kota = response.rajaongkir.results
                // console.log(response)

                kota.map((val,i)=>{
                    output+=`<option value="${val.city_id}" >${val.city_name}
                    </option>`
                })
                $(`#kota_${type}`).html(output).trigger('change');
            })
        }

        function get_ongkir_awal(){
            let berat = $('#berat').val();
            let asal = $('#kota_asal').val();
            let tujuan = "17";
            let kurir = $('#kurir').val();
            let output ='';
            let ongkir = '';

            console.log(asal);
            console.log(tujuan);
            console.log(berat);
            console.log(kurir);

                $.get("<?= site_url('checkout/get_biaya/') ?>"+`${asal}/${tujuan}/${berat}/${kurir}`,{}, (response)=>{
                    // console.log(response);
                let biaya = response.rajaongkir.results

                biaya.map((val,i)=>{
                    for (var i = 0; i < val.costs.length; i++) {
                        let jenis_layanan= val.costs[i].service
                        val.costs[i].cost.map((val,i)=>{
                            output += `<option value="${val.value}">${jenis_layanan} -Rp.${val.value} ${val.etd} Hari </option>`
                        })
                    }
                })
                
                $('#service').html(output).trigger('change');
                
                })

        }

        function get_ongkir(){
            let berat = $('#berat').val();
            let asal = $('#kota_asal').val();
            let tujuan = $('#kota_tujuan').val();
            let kurir = $('#kurir').val();
            let output ='';
            let ongkir = '';

            console.log(asal);
            console.log(tujuan);
            console.log(berat);
            console.log(kurir);

                $.get("<?= site_url('checkout/get_biaya/') ?>"+`${asal}/${tujuan}/${berat}/${kurir}`,{}, (response)=>{
                    // console.log(response);
                let biaya = response.rajaongkir.results

                biaya.map((val,i)=>{
                    for (var i = 0; i < val.costs.length; i++) {
                        let jenis_layanan= val.costs[i].service
                        val.costs[i].cost.map((val,i)=>{
                            output += `<option value="${val.value}">${jenis_layanan} -Rp.${val.value} ${val.etd} Hari </option>`
                        })
                    }
                })
                
                $('#service').html(output).trigger('change');
                
                })

        }

        function update_total() {
            $("#service").change(function(){
                var ongkir = $(this).children("option:selected").val();
                $('#ongkir').text(ongkir);
                var subtotal = $('#subtotal').text();
                var total = parseFloat(subtotal) + parseFloat(ongkir);
                $('#total').text(total);

                var provinsi_tujuan = $('#provinsi_tujuan').children("option:selected").text();
                var kabupaten_tujuan = $('#kota_tujuan').children("option:selected").text();

                $('#prov_tuj').val(provinsi_tujuan);
                $('#kab_tuj').val(kabupaten_tujuan);
            });
        }


    </Script>
</body>
</html>    