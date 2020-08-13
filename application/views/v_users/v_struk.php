<?php $this->load->view("t_users/sidebar"); ?>
<?php 
            foreach($data->result_array() as $i):
                ?>

<div class="section-padding-100">
 <div class="cart-title mt-100">

                    <h2>Kelola Data Struk</h2>
                    <h5>Data Struk Harus Bertipe JPG|PNG|JPEG</h5>
                </div>
			<form class="form-horizontal" action="<?php echo base_url().'index.php/transaksi/simpan_struk'?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_pemesanan"  value="<?php echo $i['id_pemesanan'];?>" class="form-control" type="text" >
				 <input data-default-file="<?=base_url('assets/img/struk/'.$i['struk_pemesanan'])?>"  type="file" name="filefoto" class="dropify" data-height="400" data-width="90">
				  <input type="hidden" name="gbr" value="<?php echo $i['struk_pemesanan']; ?>">
				<br>
				 <div class="form-group">
				 <button class="btn amado-btn w-100">Simpan</button> 
				</div>
				<div class="form-group">
				  <a href="<?=site_url('transaksi')?>" class="btn amado-btn w-100">kembali</a> 
				 </div>
				
			</form>	
	  <?php endforeach;?>
	</div>
</div>
