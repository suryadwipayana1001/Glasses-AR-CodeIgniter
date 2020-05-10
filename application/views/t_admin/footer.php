    <footer><center>All right reserved: <a href="http://sunrostravel.epizy.com/">SUNROS</a></center></footer>
	<script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>" ></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>" ></script>
    <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/dropify/dropify.min.js'?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
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
        $('.harga_menyuplai2').keyup(function() {
            var harga = $(this).val();
            var jumlah = $(this).closest('.form-group').nextAll().find('.jumlah_menyuplai2').val();

            var total = harga * jumlah;

            if (!isNaN(total)) {
                $(this).closest('.form-group').nextAll().find('.totalharga_menyuplai2').val(total);
            }
        })
        $('.jumlah_menyuplai2').keyup(function() {
            var harga = $(this).closest('.form-group').prevAll().find('.harga_menyuplai2').val();
            var jumlah = $(this).val();

            var total = harga * jumlah;

            if (!isNaN(total)) {
                $(this).closest('.form-group').nextAll().find('.totalharga_menyuplai2').val(total);
            }
        })
    });

</script>
<script>
function sum() {
      var h = document.getElementById('harga_menyuplai').value;
      var j = document.getElementById('jumlah_menyuplai').value;
      var result = parseFloat(h) * parseInt(j);
      if (!isNaN(result)) {
         document.getElementById('totalharga_menyuplai').value = result;
      }
}
</script>
    <!-- Morris Chart Js -->
    <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js')?>" ></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js')?>" ></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/js/custom-scripts.js')?>" ></script>
    </body>
</html>