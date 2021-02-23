<?= $this->extend('template/login') ?>

<?= $this->section('content') ?>

<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url('/login') ?>">Mini | <b>DAPODIK</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan login terlebih dahulu.</p>

            <form action="<?= base_url('/login/auth') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control password" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-eye" onclick="showpassword()" style="cursor: pointer;"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <!-- <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div> -->
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <hr>

            <p class="mb-1">
                <span>Lupa kata sandi? Klik </span><a href="<?= base_url('lupa_password') ?>">disini</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>