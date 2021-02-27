
<?php Render("head"); ?>

<!-- Pre Header -->
<?php Widget("header"); ?>

<!-- Navigation -->
<?php Widget("menu"); ?>

<!-- Page Content -->
<!-- Banner Starts Here -->
<?php Widget("banner"); ?>
<!-- Banner Ends Here -->

<!-- Page Content -->
<!-- Single Starts Here -->
<div class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<div class="line-dec"></div>
					<h1>Single Product</h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-slider">
					<div id="slider" class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/big-01.jpg" 
								alt="<?= $product['product_name']; ?>" />
							</li>
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/big-02.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/big-03.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/big-04.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<!-- items mirrored twice, total of 12 -->
						</ul>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/thumb-01.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/thumb-02.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/thumb-03.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<li>
								<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/thumb-04.jpg" alt="<?= $product['product_name']; ?>" />
							</li>
							<!-- items mirrored twice, total of 12 -->
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="right-content">
					<h4><?= $product['product_name']; ?></h4>
					<h6>$<?= number_format($product['product_unit']); ?></h6>
					<p><?= $product['product_content']; ?></p>
					<span>7 left on stock</span>

					<form action="" method="get">
						<label for="quantity">Quantity:</label>
						<input 
						type="quantity" class="quantity-text" id="quantity" 
						onfocus="if(this.value == '1') { this.value = ''; }" 
						onBlur="if(this.value == '') { this.value = '1';}"
						value="1">

						<a class="btn btn-primary ml-2" href="<?= $GLOBALS['config']['base_url']; ?>/products/order/<?= $product['id']; ?>" role="button">Order Now!</a>
					</form>

					<div class="down-content">
						<div class="categories">
							<h6>Category: <span><a href="<?= $GLOBALS['config']['base_url']; ?>/products/cats"><?= $cat['cat_name']; ?></a>
							</div>
							<div class="share">
								<h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Single Page Ends Here -->


	<!-- Similar Starts Here -->
	<div class="featured-items">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<div class="line-dec"></div>
						<h1>You May Also Like</h1>
					</div>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">

						<?php foreach ($relProducts as $value): ?>
							<?php if ($value['id'] !== $product['id']): ?>
								<a href="<?= $GLOBALS['config']['base_url']; ?>/products/view/<?= $value['id']; ?>">
									<div class="featured-item">
										<img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/item-01.jpg" alt="Item 1">
										<h4><?= $value['product_name']; ?></h4>
										<h6>$<?= number_format($value['product_unit']); ?></h6>
									</div>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Similar Ends Here -->

	<!-- Subscribe Form Starts Here -->
	<?php Widget("sub_form"); ?>
	<!-- Subscribe Form Ends Here -->

	<?php Render("foot"); ?>
