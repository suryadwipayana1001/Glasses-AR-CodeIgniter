<?php $this->load->view("t_users/sidebar"); ?>
<?php 
            foreach($data->result_array() as $i):
                ?>

<div class="section-padding-100">
 <div class="cart-title mt-100">
                    <h2>Tambah Data Struk</h2>
                </div>
			<form class="form-horizontal" action="<?php echo base_url().'index.php/transaksi/simpan_struk'?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_pemesanan"  value="<?php echo $i['id_pemesanan'];?>" class="form-control" type="text" >
				<input type="file" name="filefoto" class="dropify" data-height="300" data-width="80">
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
