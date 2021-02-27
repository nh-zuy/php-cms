<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= $GLOBALS['config']['base_url']; ?>/public/userfiles/header-logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $GLOBALS['config']['base_url']; ?>">Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $GLOBALS['config']['base_url']; ?>/products">Giới thiệu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $GLOBALS['config']['base_url']; ?>/products">Sản phẩm</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $GLOBALS['config']['base_url']; ?>/products">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $GLOBALS['config']['base_url']; ?>/products">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>