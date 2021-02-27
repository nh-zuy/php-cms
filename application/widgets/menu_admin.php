<div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
        <a href="<?= $GLOBALS['config']['base_url']; ?>/home/admin" class="site_title"><i class="fa fa-paw"></i> <span>Trang quản trị</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img src="<?= $GLOBALS['config']['base_url']; ?>/public/images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>ADmin</h2>
        </div>
    </div>
    <!-- /menu prile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

        <div class="menu_section">
            <h3>Admin</h3>
            <ul class="nav side-menu">

                <li><a><i class="fa fa-sitemap"></i> Menu đa cấp <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="#">Chỉnh sửa</a>
                        </li>
                        
                        <li><a href="#">Cấu hình</a>
                        </li>
                    </ul>
                </li>

                <li><a><i class="fa fa-laptop"></i> Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/cats">Danh mục sản phẩm</a>
                        </li>
                        <li><a href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/">Danh sách sản phẩm</a>
                        </li>
                        <li><a href="#">Cấu hình</a>
                        </li>
                    </ul>
                </li>

                <li><a><i class="fa fa-newspaper-o"></i> Tin tức <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="#">Danh mục tin tức</a>
                        </li>
                        <li><a href="#">Danh sách tin tức</a>
                        </li>
                        <li><a href="#">Cấu hình</a>
                        </li>
                    </ul>
                </li>

                <li><a><i class="fa fa-shopping-cart"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/orders">Danh sách đơn hàng</a>
                        </li>
                        <li><a href="#">Cấu hình</a>
                        </li>
                        
                    </ul>
                </li>

                <li><a><i class="fa fa-user"></i> Thành viên <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="#">Quản trị viên</a>
                        </li>
                        <li><a href="#">Thành viên</a>
                        </li>
                        
                    </ul>
                </li>

                

                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="general_elements.html">General Elements</a>
                        </li>
                        <li><a href="media_gallery.html">Media Gallery</a>
                        </li>
                        <li><a href="typography.html">Typography</a>
                        </li>
                        <li><a href="icons.html">Icons</a>
                        </li>
                        <li><a href="glyphicons.html">Glyphicons</a>
                        </li>
                        <li><a href="widgets.html">Widgets</a>
                        </li>
                        <li><a href="invoice.html">Invoice</a>
                        </li>
                        <li><a href="inbox.html">Inbox</a>
                        </li>
                        <li><a href="calender.html">Calender</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="e_commerce.html">E-commerce</a>
                        </li>
                        <li><a href="projects.html">Projects</a>
                        </li>
                        <li><a href="project_detail.html">Project Detail</a>
                        </li>
                        <li><a href="contacts.html">Contacts</a>
                        </li>
                        <li><a href="profile.html">Profile</a>
                        </li>
                    </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="page_404.html">404 Error</a>
                        </li>
                        <li><a href="page_500.html">500 Error</a>
                        </li>
                        <li><a href="plain_page.html">Plain Page</a>
                        </li>
                        <li><a href="login.html">Login Page</a>
                        </li>
                        <li><a href="pricing_tables.html">Pricing Tables</a>
                        </li>

                    </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>