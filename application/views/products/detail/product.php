<div class="container">
	<section id="product" class="mt-5">
		<h3 class="mb-3"><?= $product[0]['product_name'] ?></h3>
		<div class="row d-flex justify-content-center">
			<div class="col-md-6 mb-4">
				<div class="card h-100">
					<img src="<?= $product[0]['image'] ?>" class="card-img-top">
					<div class="card-body">
						<h2 class="h5 mb-1">
							<?= $product[0]['product_name'] ?>
						</h2>
						<p class="text-secondary text-capitalize mb-0"><?= $product[0]['material'] ?></p>
						<span class="badge badge-pill badge-warning mb-2"><?= $product[0]['dimension'] ?> (cm)</span>
						<div>Colors:<br><?= $product[0]['colours'] ?></div>
						<h2 class="h5">
							Rp.
							<?php
							$subtotal =  number_format($product[0]['price'], 0, ',', '.');
							echo $subtotal;
							?>
							<!-- Rp. 3.899.000 -->
						</h2>
					</div>
				</div>
			</div>
		</div>

	</section>
	<hr>
	<section id="similar-products" class="mt-5">
		<h4 class="mb-3">Similar Products</h4>
		<div class="row d-flex justify-content-center">
			<div class="col-md-3 mb-4">
				<div class="card h-100">
					<img src="<?= $similar_product['image'] ?>" class="card-img-top">
					<div class="card-body">
						<h2 class="h5 mb-1">
							<?= $similar_product['product_name'] ?>
						</h2>
						<p class="text-secondary text-capitalize mb-0"><?= $similar_product['material'] ?></p>
						<span class="badge badge-pill badge-warning mb-2"><?= $similar_product['dimension'] ?> (cm)</span>
						<h2 class="h5">
							Rp.
							<?php
							$subtotal =  number_format($similar_product['price'], 0, ',', '.');
							echo $subtotal;
							?>
							<!-- Rp. 3.899.000 -->
						</h2>

						<a href="<?= base_url('product/' . $similar_product['id']) ?>" class="btn btn-warning">Detail</a>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>