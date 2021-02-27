<?php Render("head"); ?>

    <!-- Pre Header -->
    <?php Widget("header"); ?>

    <!-- Navigation -->
    <?php Widget("menu"); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php Widget("banner"); ?>
    <!-- Banner Ends Here -->

    <?php $product = new ProductModel("products"); ?>
	 <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
            <?php foreach ($productsCat as $cat): ?>
                <div class="row">

                    <div class="col-md-12">
                        <div class="section-heading">
                            <div class="line-dec"></div>
                            <h1><?= $cat['cat_name']; ?></h1>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <?php $subProducts = $product->getByCatId($cat['id']); ?>

                            <?php foreach ($subProducts as $value): ?>

                                <a href="<?= $GLOBALS['config']['base_url']; ?>/products/view/<?= $value['id']; ?>">
                                    <div class="featured-item">
                                        <img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/item-01.jpg" alt="<?= $value['product_name']; ?>">
                                        <h4><?= $value['product_name']; ?></h4>
                                        <h6>$<?= number_format($value['product_unit']); ?></h6>
                                    </div>
                                </a>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Featred Ends Here -->

	<!-- Subscribe Form Starts Here -->
    <?php Widget("sub_form"); ?>
    <!-- Subscribe Form Ends Here -->

<?php Render("foot"); ?>
