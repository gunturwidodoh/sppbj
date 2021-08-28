<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= site_url(); ?>/tabel">Tabel</a></li>
                        <li class="breadcrumb-item active"><?php echo $judul; ?></li>
                    </ol>
                </div>
            </div>
            <form action="" method="post">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="" class="form-control" id="username" name="username">
                            <?php if (form_error('username')) : ?>
                                <div id="usernameError" class="form-text text-danger">
                                    <?= form_error('username'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                                <option value="guest">guest</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" value="" class="form-control" id="password" name="password">
                            <?php if (form_error('username')) : ?>
                                <div id="usernameError" class="form-text text-danger">
                                    <?= form_error('username'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">Ulang Password</label>
                            <input type="text" value="" class="form-control" id="pass" name="pass">
                            <?php if (form_error('username')) : ?>
                                <div id="usernameError" class="form-text text-danger">
                                    <?= form_error('username'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
</div>