<div class="login-box">
    <div class="login-logo">
        <div><b>Project</b>Tracker</div>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('role');
            ?>
            <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-danger" role="alert"><?= $this->session->flashdata('message'); ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <form action="<?= site_url('login/masuk') ?>" method="post">
                <div class="input-group mb-3">
                    <input name="username" id="username" type="text" class="form-control" placeholder="Username" value="<?= set_value('username') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?php if (form_error('username')) : ?>
                    <div id="usernameError" class="form-text text-danger">
                        <small><?= form_error('username'); ?></small>
                    </div>
                <?php endif; ?>
                <div class="input-group mb-3">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?php if (form_error('password')) : ?>
                    <div id="passwordError" class="form-text text-danger">
                        <small><?= form_error('password'); ?></small>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->