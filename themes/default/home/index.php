<?php Render("head"); ?>

    <!-- Pre Header -->
    <?php Widget("header"); ?>

    <!-- Navigation -->
    <?php Widget("menu"); ?>

    <!-- Banner Starts Here -->
    <?php Widget("banner"); ?>
    <!-- Banner Ends Here -->

	<!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="section-heading">
                            <div class="line-dec"></div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                                <a href="<?= $GLOBALS['config']['base_url']; ?>/products">
                                    <div class="featured-item">
                                        <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH; ?>/item-01.jpg" alt="">
                                        <h4>Product</h4>
                                        <h6>Demo</h6>
                                    </div>
                                </a>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Featred Ends Here -->

	<!-- Subscribe Form Starts Here -->
    <?php Widget("sub_form"); ?>
    <!-- Subscribe Form Ends Here -->

    <?php Widget("footer"); ?>

<?php Render("foot"); ?>
