<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo site_url(); ?>/admin" class="nav-link">Admin Home</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <div class="navbar-nav ml-auto">
            <a href="<?= site_url() ?>/login/logout" type="submit" class="btn btn-danger btn-block">Logout</a>
        </div>
    </nav>
    <!-- /.navbar -->