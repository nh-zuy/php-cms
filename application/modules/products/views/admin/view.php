<?php Render("head"); ?>

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <?php Widget("menu_admin"); ?>
            </div>

            <!-- top navigation -->
            <?php Widget("top_nav"); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Chi tiết sản phẩm</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Tìm kiếm!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Sản phẩm #<?= $product['id']; ?></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link" href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="product-image">
                                            <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $product['product_image']; ?>" alt="<?= $product['product_name']; ?>" />
                                        </div>
                                        <div class="product_gallery">
                                            <a>
                                                <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $product['product_image']; ?>" alt="<?= $product['product_name']; ?>" />
                                            </a>
                                            <a>
                                                <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $product['product_image']; ?>" alt="<?= $product['product_name']; ?>" />
                                            </a>
                                            <a>
                                                <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $product['product_image']; ?>" alt="<?= $product['product_name']; ?>" />
                                            </a>
                                            <a>
                                                <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $product['product_image']; ?>" alt="<?= $product['product_name']; ?>" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                                        <h3 class="prod_title"><?= $product['product_name']; ?></h3>

                                        <p><?= $product['product_des']; ?></p>
                                        <br />

                                        <div class="">
                                            <h2>Mã màu hiện có</h2>
                                            <ul class="list-inline prod_color">
                                                <li>
                                                    <p>Xanh lá</p>
                                                    <div class="color bg-green"></div>
                                                </li>
                                                <li>
                                                    <p>Xanh dương</p>
                                                    <div class="color bg-blue"></div>
                                                </li>
                                                <li>
                                                    <p>Đỏ</p>
                                                    <div class="color bg-red"></div>
                                                </li>
                                                <li>
                                                    <p>Cam</p>
                                                    <div class="color bg-orange"></div>
                                                </li>

                                            </ul>
                                        </div>
                                        <br />

                                        <div class="">
                                            <h2>Kích cỡ <small>Chọn dưới đây</small></h2>
                                            <ul class="list-inline prod_size">
                                                <li>
                                                    <button type="button" class="btn btn-default btn-xs">Nhỏ</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-xs">Vừa</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-xs">Lớn</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-xs">Cực lớn</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <br />

                                        <div class="">
                                            <div class="product_price">
                                                <h1 class="price">$<?= number_format($product['product_unit']); ?></h1>
                                                <span class="price-tax">Ex Tax: </span>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="">
                                            <h2>Trạng thái
                                            <?= ($product['status']) ? '<button type="button" class="btn btn-success btn-xs">Hiển thị</button>' : '<button type="button" class="btn btn-danger btn-xs">Ẩn</button>'; ?>
                                            </h2>
                                        </div>

                                        <div class="product_social">
                                            <ul class="list-inline">
                                                <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-rss-square"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>


                                    <div class="col-md-12">

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Mô tả</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Chi tiết</a>
                                                </li>
                                                
                                            </ul>
                                            <div id="myTabContent" class="tab-content">

                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                    <p><?= $product['product_des']; ?></p>
                                                </div>

                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    <p><?= $product['product_content']; ?></p>
                                                </div>

                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! | Admin Themes
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

<?php Render("foot"); ?>