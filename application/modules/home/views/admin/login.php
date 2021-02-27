<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="<?= $GLOBALS['config']['base_url']; ?>/public/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= $GLOBALS['config']['base_url']; ?>/public/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $GLOBALS['config']['base_url']; ?>/public/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?= $GLOBALS['config']['base_url']; ?>/public/css/custom.css" rel="stylesheet">
    <link href="<?= $GLOBALS['config']['base_url']; ?>/public/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?= $GLOBALS['config']['base_url']; ?>/public/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">

                    <form action="<?= $GLOBALS['config']['base_url']?>/home/admin/login" method="post" name="loginForm">
                        <h1>Login Form</h1>
                        <?php if($message): ?><h6 class="text-danger"><?= $message; ?></h6><?php endif; ?>
                        <div>
                            <input type="text" name="un" class="form-control" placeholder="Username" required="required" />
                        </div>
                        <div>
                            <input type="password" name="pw" class="form-control" placeholder="Password" required="required" />
                        </div>
                        <div>
                            <button class="btn btn-secondary submit">Log in</button>
                            <a class="reset_pass" href="<?= $GLOBALS['config']['base_url']?>/home/admin/forgot">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form action="<?= $GLOBALS['config']['base_url']?>/home/admin/register" method="post">
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="required" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="required" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary submit">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>