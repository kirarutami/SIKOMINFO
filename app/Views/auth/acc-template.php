<!DOCTYPE html>
<html lang="en">

<head>
    <title>//</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('login/images/icons/favicon.ico') ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/animate/animate.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/css-hamburgers/hamburgers.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/animsition/css/animsition.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/select2/select2.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/daterangepicker/daterangepicker.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/css/main.css') ?>">
    <!--===============================================================================================-->
</head>

<body>
    <!-- Begin Page Content -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <span class="login100-form-title p-b-26">
                        <?= lang('Auth.loginTitle') ?>
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                            <input class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login" value="<?= old('email') ?>">
                            <span class="focus-input100" data-placeholder="<?= lang('Auth.email') ?>" autocomplete="off"></span>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>

                    <?php else : ?>

                        <div class="wrap-input100 validate-input">
                            <input class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login" value="<?= old('username') ?>">
                            <span class="focus-input100" data-placeholder="<?= lang('Auth.emailOrUsername') ?>" autocomplete="off"></span>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>

                    <?php endif; ?>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password">
                        <span class="focus-input100" data-placeholder="<?= lang('Auth.password') ?>" autocomplete="off"></span>
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                <?= lang('Auth.loginAction') ?>
                            </button>
                        </div>
                    </div>


                    <div class="text-center p-t-115">
                        <span class="txt1">
                            <?= lang('Auth.needAnAccount') ?>
                        </span>

                        <a class="txt2" href="<?= route_to('register') ?>">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url('login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login/vendor/animsition/js/animsition.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login/vendor/bootstrap/js/popper.js') ?>pp"></script>
    <script src="<?= base_url('login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login/vendor/select2/select2.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login/vendor/daterangepicker/moment.min.js') ?>"></script>
    <script src="<?= base_url('login/vendor/daterangepicker/daterangepicker.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login/vendor/countdowntime/countdowntime.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login/js/main.js') ?>"></script>

</body>

</html>