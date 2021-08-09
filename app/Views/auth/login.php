<?= $this->extend("/auth/acc-template"); ?>
<?= $this->section('content'); ?>
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
                        <input class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="email" name="login" value="<?= old('email') ?>">
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
                        <button class="login100-form-btn" href="/">
                            Log In
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
<?= $this->endSection(); ?>