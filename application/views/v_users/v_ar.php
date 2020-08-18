<?php $this->load->view("t_users/sidebar");?>
<div class="cart-table-area section-padding-100">
	<div class="container-fluid">
		<div class="row" id="detail_cart">
			<div class="col-12 col-lg-8">
				<div class="cart-title mt-50">
					<h2>Augmented Reality </h2>
				</div>
				<div id='JeeWidget'>
					<canvas id='JeeWidgetCanvas'></canvas>

					<div id='JeeWidgetLoading'>
						<div class='JeeWidgetLoadingWheel'>
							<svg viewBox='0 0 32 32' width='32' height='32'>
								<circle id='spinner' cx='16' cy='16' r='14' fill='none' />
							</svg>
						</div>
					</div>
				</div>
				<br>
				<div class="form-group">
					<button type="button" class="btn amado-btn w-50" onclick="javascript:history.back()">Kembali</button> 
				</div>
			</div>
		</div>
	</div>
</div>
</div>