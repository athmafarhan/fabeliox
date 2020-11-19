<div class="container">
	<section id="landing" class="landing pt-3 pb-5">
		<div class="row">
			<div class="col-md-6 d-flex ">
				<div class="my-auto">
					<h1 class="h2">Mebel kuat, murah, dan berkualitas</h1>
					<p class="" style="font-size: 18px;"><strong>fabeli0x</strong> siap mengirim mebel hanya dalam genggaman</p>
					<a href="#products" class="btn btn-warning">
						Cari produk
					</a>
				</div>
			</div>
			<div class="col-md-6 pt-sm-3">
				<img class="img-fluid" style="-webkit-filter: drop-shadow(5px 5px 5px #b1b1b1 ); filter: drop-shadow(5px 5px 5px #b1b1b1);" src="<?= base_url('assets/img/undraw_phone_call_grmk.svg') ?>">
			</div>
		</div>
	</section>
	<section id="products" class="mt-5">
		<h3 class="mb-3">Products</h3>
		<div class="row">
			<?php foreach ($products as $product) : ?>
				<div class="col-md-3 mb-4">
					<div class="card h-100">
						<img src="<?= $product['image'] ?>" class="card-img-top">
						<div class="card-body">
							<h2 class="h5 mb-1">
								<?= $product['product_name'] ?>
							</h2>
							<p class="text-secondary text-capitalize mb-0"><?= $product['material'] ?></p>
							<span class="badge badge-pill badge-warning mb-2"><?= $product['dimension'] ?> (cm)</span>
							<h2 class="h5">
								Rp.
								<?php
								$subtotal =  number_format($product['price'], 0, ',', '.');
								echo $subtotal;
								?>
								<!-- Rp. 3.899.000 -->
							</h2>

							<a href="<?= base_url('product/' . $product['id']) ?>" class="btn btn-warning">Detail</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			<!-- <div class="col-3">
				<div class="card">
					<img src="https://fabelio.com/media/catalog/product/w/i/wina_2_seater_sofa__custard__1_1.jpg" class="card-img-top">
					<div class="card-body">
						<h2 class="h5 mb-1">
							Sofa tempat tidur mochi
						</h2>
						<p class="text-secondary mb-0">Solid Wood</p>
						<span class="badge badge-pill badge-warning mb-2">160 x 95 x 90 (cm)</span>
						<h2 class="h5">
							Rp. 3.500.000
						</h2>
						<a href="#" class="btn btn-warning mt-2">Detail</a>
					</div>
				</div>
			</div> -->
		</div>

	</section>
</div>
