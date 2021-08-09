<?= $this->extend("/auth/acc-template"); ?>
<?= $this->section('content'); ?>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">

            <form class="login100-form validate-form" action=" <?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <span class="login100-form-title p-b-48">
                    <img src="<?= base_url('flipbook/images/logo.png') ?>" alt="SIKOMINFO LOGO" width="100">
                </span>
                <span class="login100-form-title p-b-26">
                    <?= lang('Auth.register') ?>
                </span>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <div class="wrap-input100 validate-input">
                    <input class="input100 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username">
                    <span class="focus-input100" data-placeholder="<?= lang('Auth.username') ?>"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="text" name="email">
                    <span class="focus-input100" data-placeholder="<?= lang('Auth.email') ?>"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password">
                    <span class="focus-input100" data-placeholder="<?= lang('Auth.password') ?>" autocomplete="off"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Repeat password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="pass_confirm">
                    <span class="focus-input100" data-placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            <?= lang('Auth.register') ?>
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        <?= lang('Auth.alreadyRegistered') ?>
                    </span>

                    <a class="txt2" href="<?= route_to('login') ?>">
                        <?= lang('Auth.signIn') ?>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>