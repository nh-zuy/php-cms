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
                        <h3>
                            Danh mục sản phẩm
                        </h3>
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
                                <h2>Danh mục <small>chi tiết</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">

                                <form class="form-horizontal form-label-left" novalidate>

                                    <p><code>*</code> chỉ xem</p>

                                    <span class="section">Danh mục #<?= $productCat['id']; ?></span>

                                    <div class="item form-group">

                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Tên danh mục<span class="required">*</span>
                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12"placeholder="<?= $productCat['cat_name']; ?>" readonly type="text">
                                        </div>

                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-3">
                                            Hình thu nhỏ
                                        </label>

                                        <div class="col-md-3 col-sm-3 col-xs-4">
                                            <div class="product-image">
                                                <img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $productCat['cat_image']; ?>" alt="<?= $productCat['cat_name']; ?>" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="email">Mô tả danh mục<span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="email" placeholder="<?= $productCat['cat_des']; ?>" readonly class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="textarea">Nội dung chi tiết<span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea id="textarea" rows="5" readonly class="form-control col-md-7 col-xs-12"><?= $productCat['cat_content']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="status" class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>

                                        <div class="col-md-9 col-xs-12">
                                            
                                            <div class="">
                                                <input type="checkbox" class="js-switch" <?= ($productCat['cat_status']) ? 'checked' : ''; ?> name="status" disabled="disabled"/> 
                                            </div>

                                        </div>
                                    </div>

                                    

                                    <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a type="button" href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/cats" class="btn btn-primary">Thoát</a>
                                            <a href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/updateCat/<?= $productCat['id']; ?>" type="button" class="btn btn-danger">Cập nhật</a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
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